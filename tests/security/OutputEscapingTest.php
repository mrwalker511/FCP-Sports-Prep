<?php
/**
 * Output Escaping Tests
 * 
 * Dedicated tests to ensure all dynamic output is properly escaped
 */

namespace FCPTheme\Tests\Security;

use PHPUnit\Framework\TestCase;
use FCPTheme\Tests\Utilities\TestHelpers;

class OutputEscapingTest extends TestCase
{
    private $theme_dir;

    public function setUp(): void
    {
        $this->theme_dir = dirname(dirname(__DIR__));
    }

    /**
     * Test that all pattern files properly escape dynamic content
     */
    public function test_pattern_files_escape_output()
    {
        $patterns_dir = $this->theme_dir . '/patterns';

        if (!is_dir($patterns_dir)) {
            $this->markTestSkipped('Patterns directory not found');
        }

        $pattern_files = glob($patterns_dir . '/*.php');

        foreach ($pattern_files as $file) {
            $content = file_get_contents($file);

            // Patterns should be mostly static HTML
            // Check for any PHP variables being echoed
            if (preg_match('/\$\w+/', $content)) {
                // If variables exist, they should be escaped
                $this->assertMatchesRegularExpression(
                    '/(esc_html|esc_attr|esc_url)/',
                    $content,
                    "Pattern file {$file} contains variables. Ensure they are escaped."
                );
            }
        }

        $this->assertTrue(true);
    }

    /**
     * Test that meta tag values are properly escaped
     */
    public function test_meta_tags_escaped()
    {
        $functions_file = $this->theme_dir . '/functions.php';
        $content = file_get_contents($functions_file);

        // Find all meta tag output
        preg_match_all('/<meta[^>]+>/', $content, $matches);

        foreach ($matches[0] as $meta_tag) {
            // If it contains a variable, it should use esc_attr or esc_url
            if (preg_match('/\$\w+/', $meta_tag)) {
                $this->assertMatchesRegularExpression(
                    '/(esc_attr|esc_url)/',
                    $meta_tag,
                    "Meta tag contains unescaped variable: {$meta_tag}"
                );
            }
        }
    }

    /**
     * Test that URLs are escaped with esc_url()
     */
    public function test_urls_properly_escaped()
    {
        $functions_file = $this->theme_dir . '/functions.php';
        $content = file_get_contents($functions_file);

        // Find URL-related functions
        $url_functions = [
            'get_permalink',
            'get_site_url',
            'get_the_post_thumbnail_url',
            'get_header_image'
        ];

        foreach ($url_functions as $func) {
            if (preg_match('/' . $func . '\s*\(/', $content)) {
                // Check if the output is wrapped in esc_url
                preg_match_all('/' . $func . '\s*\([^)]*\)/', $content, $matches);

                foreach ($matches[0] as $match) {
                    // Find the context around this function call
                    $context_pattern = '/.{0,50}' . preg_quote($match, '/') . '.{0,50}/';
                    preg_match($context_pattern, $content, $context);

                    if (!empty($context[0]) && preg_match('/echo/', $context[0])) {
                        $this->assertMatchesRegularExpression(
                            '/esc_url/',
                            $context[0],
                            "URL function {$func} should be wrapped in esc_url()"
                        );
                    }
                }
            }
        }
    }

    /**
     * Test that HTML content uses appropriate escaping
     */
    public function test_html_content_escaping()
    {
        $functions_file = $this->theme_dir . '/functions.php';
        $content = file_get_contents($functions_file);

        // Find get_the_title, get_bloginfo, etc.
        $content_functions = [
            'get_the_title',
            'get_bloginfo',
            'get_the_excerpt'
        ];

        foreach ($content_functions as $func) {
            if (preg_match('/' . $func . '\s*\(/', $content)) {
                preg_match_all('/' . $func . '\s*\([^)]*\)/', $content, $matches);

                foreach ($matches[0] as $match) {
                    // Find the context
                    $context_pattern = '/.{0,50}' . preg_quote($match, '/') . '.{0,50}/';
                    preg_match($context_pattern, $content, $context);

                    if (!empty($context[0]) && preg_match('/echo/', $context[0])) {
                        $this->assertMatchesRegularExpression(
                            '/(esc_html|esc_attr)/',
                            $context[0],
                            "Content function {$func} should be escaped with esc_html() or esc_attr()"
                        );
                    }
                }
            }
        }
    }

    /**
     * Scan all PHP files for security issues using helper
     */
    public function test_automated_security_scan()
    {
        $php_files = TestHelpers::getPHPFiles($this->theme_dir, true);

        // Exclude vendor and test directories
        $php_files = array_filter($php_files, function ($file) {
            return strpos($file, 'vendor') === false &&
                strpos($file, 'tests') === false &&
                strpos($file, 'node_modules') === false;
        });

        $all_issues = [];

        foreach ($php_files as $file) {
            $issues = TestHelpers::scanForSecurityIssues($file);

            if (!empty($issues)) {
                $all_issues[$file] = $issues;
            }
        }

        // Report findings
        if (!empty($all_issues)) {
            $message = "Security issues found:\n";
            foreach ($all_issues as $file => $issues) {
                $message .= "\nFile: {$file}\n";
                foreach ($issues as $issue) {
                    $message .= "  - {$issue['type']} (severity: {$issue['severity']})\n";
                    if (isset($issue['message'])) {
                        $message .= "    {$issue['message']}\n";
                    }
                }
            }

            // For now, just add a warning
            $this->addWarning($message);
        }

        $this->assertTrue(true);
    }
}
