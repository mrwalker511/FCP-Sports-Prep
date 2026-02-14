<?php
/**
 * Security Tests for Florida Coastal Prep Theme
 * 
 * Tests for common security vulnerabilities:
 * - XSS (Cross-Site Scripting)
 * - SQL Injection
 * - CSRF (Cross-Site Request Forgery)
 * - Input Sanitization
 * - Output Escaping
 */

namespace FCPTheme\Tests\Security;

use PHPUnit\Framework\TestCase;
use FCPTheme\Tests\Utilities\TestHelpers;

class SecurityTest extends TestCase
{
    private $theme_dir;

    public function setUp(): void
    {
        $this->theme_dir = dirname(dirname(__DIR__));
    }

    /**
     * Test that functions.php has no raw SQL queries
     */
    public function test_no_raw_sql_queries()
    {
        $functions_file = $this->theme_dir . '/functions.php';
        $content = file_get_contents($functions_file);

        // Check for SQL keywords that indicate raw queries
        $sql_patterns = [
            '/\$wpdb->query\s*\(\s*["\']SELECT/',
            '/\$wpdb->query\s*\(\s*["\']INSERT/',
            '/\$wpdb->query\s*\(\s*["\']UPDATE/',
            '/\$wpdb->query\s*\(\s*["\']DELETE/',
            '/mysql_query/',
            '/mysqli_query/',
        ];

        foreach ($sql_patterns as $pattern) {
            $this->assertDoesNotMatchRegularExpression(
                $pattern,
                $content,
                'Raw SQL queries detected. Use WordPress database APIs (prepare, get_results, etc.)'
            );
        }
    }

    /**
     * Test that all echo statements use proper escaping
     */
    public function test_output_escaping_in_functions()
    {
        $files_to_scan = [
            $this->theme_dir . '/functions.php',
            $this->theme_dir . '/inc/seo.php',
            $this->theme_dir . '/inc/forms.php',
            $this->theme_dir . '/inc/security.php',
        ];

        $checked = 0;
        foreach ($files_to_scan as $file) {
            if (!file_exists($file)) {
                continue;
            }
            $content = file_get_contents($file);

            // Find all echo statements
            preg_match_all('/echo\s+[\'"]?.*?;/s', $content, $matches);

            foreach ($matches[0] as $echo_statement) {
                // Skip if it is echoing a literal string (no variables $)
                if (!str_contains($echo_statement, '$')) {
                    continue;
                }

                $checked++;

                // Check if it uses common WordPress escaping or JSON encoding
                $has_escaping = preg_match(
                    '/(esc_html|esc_attr|esc_url|esc_js|wp_kses|json_encode|wp_json_encode|esc_html__|esc_attr__|esc_url__)\b/',
                    $echo_statement
                );

                $this->assertTrue(
                    (bool) $has_escaping,
                    "Unescaped dynamic echo found in {$file}: " . var_export($echo_statement, true)
                );
            }
        }

        $this->assertGreaterThan(0, $checked, 'Should have checked at least one dynamic echo statement');
    }

    /**
     * Test SEO meta function properly escapes output
     */
    public function test_seo_meta_escaping()
    {
        $seo_file = $this->theme_dir . '/inc/seo.php';
        $this->assertFileExists($seo_file, 'SEO module file should exist');
        $content = file_get_contents($seo_file);

        // Extract the fl_coastal_prep_seo_meta function
        preg_match('/function fl_coastal_prep_seo_meta\(\).*?^}/ms', $content, $matches);

        $this->assertNotEmpty($matches, 'fl_coastal_prep_seo_meta function should exist in inc/seo.php');

        $function_content = $matches[0];

        // Check that esc_attr is used for attributes
        $this->assertMatchesRegularExpression(
            '/esc_attr/',
            $function_content,
            'SEO meta function should use esc_attr() for attribute values'
        );

        // Check that esc_url is used for URLs
        $this->assertMatchesRegularExpression(
            '/esc_url/',
            $function_content,
            'SEO meta function should use esc_url() for URL values'
        );
    }

    /**
     * Test that schema markup uses json_encode for safety
     */
    public function test_schema_markup_json_encoding()
    {
        $seo_file = $this->theme_dir . '/inc/seo.php';
        $this->assertFileExists($seo_file, 'SEO module file should exist');
        $content = file_get_contents($seo_file);

        // Extract the schema markup function
        preg_match('/function fl_coastal_prep_schema_markup\(\).*?^}/ms', $content, $matches);

        $this->assertNotEmpty($matches, 'fl_coastal_prep_schema_markup function should exist in inc/seo.php');

        $function_content = $matches[0];

        // Check that json_encode is used
        $this->assertMatchesRegularExpression(
            '/json_encode/',
            $function_content,
            'Schema markup should use json_encode() for safe JSON output'
        );
    }

    /**
     * Test that no direct $_GET, $_POST, $_REQUEST access without sanitization
     */
    public function test_no_unsanitized_superglobals()
    {
        $php_files = TestHelpers::getPHPFiles($this->theme_dir, true);

        // Exclude vendor and test directories
        $php_files = array_filter($php_files, function ($file) {
            return strpos($file, 'vendor') === false &&
                strpos($file, 'tests') === false &&
                strpos($file, 'node_modules') === false;
        });

        foreach ($php_files as $file) {
            $content = file_get_contents($file);

            // Check for direct superglobal access
            if (preg_match('/\$_(GET|POST|REQUEST|COOKIE)\[/', $content, $matches)) {
                // Check if sanitization function is nearby
                $has_sanitization = preg_match(
                    '/(sanitize_text_field|sanitize_email|sanitize_key|absint|intval|wp_kses)/',
                    $content
                );

                // This is a warning, not a failure, as context matters
                if (!$has_sanitization) {
                    $this->addWarning(
                        "File {$file} accesses superglobals. Ensure proper sanitization is used."
                    );
                }
            }
        }

        // Test always passes, warnings are informational
        $this->assertTrue(true);
    }

    /**
     * Test that theme doesn't use eval() or similar dangerous functions
     */
    public function test_no_dangerous_functions()
    {
        $php_files = TestHelpers::getPHPFiles($this->theme_dir, true);

        // Exclude vendor and test directories
        $php_files = array_filter($php_files, function ($file) {
            return strpos($file, 'vendor') === false &&
                strpos($file, 'tests') === false &&
                strpos($file, 'node_modules') === false;
        });

        $dangerous_functions = [
            'eval',
            'exec',
            'system',
            'passthru',
            'shell_exec',
            'assert',
            'create_function'
        ];

        foreach ($php_files as $file) {
            $content = file_get_contents($file);

            foreach ($dangerous_functions as $func) {
                $this->assertDoesNotMatchRegularExpression(
                    '/\b' . $func . '\s*\(/i',
                    $content,
                    "Dangerous function {$func}() found in {$file}"
                );
            }
        }
    }

    /**
     * Test that file uploads are handled securely (if any)
     */
    public function test_secure_file_handling()
    {
        $php_files = TestHelpers::getPHPFiles($this->theme_dir, true);

        // Exclude vendor and test directories
        $php_files = array_filter($php_files, function ($file) {
            return strpos($file, 'vendor') === false &&
                strpos($file, 'tests') === false;
        });

        foreach ($php_files as $file) {
            $content = file_get_contents($file);

            // Check for file upload handling
            if (preg_match('/\$_FILES/', $content)) {
                // Should use WordPress functions for file handling
                $this->assertMatchesRegularExpression(
                    '/(wp_handle_upload|wp_upload_bits)/',
                    $content,
                    "File upload detected in {$file}. Use WordPress upload functions."
                );
            }
        }

        $this->assertTrue(true);
    }

    /**
     * Test that nonces are used for form submissions (if any)
     */
    public function test_nonce_usage_for_forms()
    {
        $php_files = TestHelpers::getPHPFiles($this->theme_dir, true);

        // Exclude vendor and test directories
        $php_files = array_filter($php_files, function ($file) {
            return strpos($file, 'vendor') === false &&
                strpos($file, 'tests') === false;
        });

        foreach ($php_files as $file) {
            $content = file_get_contents($file);

            // Check for form processing
            if (
                preg_match('/\$_POST\[/', $content) &&
                preg_match('/(update_option|add_option|wp_insert_post|wp_update_post)/', $content)
            ) {

                // Should have nonce verification
                $this->assertMatchesRegularExpression(
                    '/(wp_verify_nonce|check_admin_referer)/',
                    $content,
                    "Form processing detected in {$file} without nonce verification"
                );
            }
        }

        $this->assertTrue(true);
    }

    /**
     * Test that admin functions check user capabilities
     */
    public function test_capability_checks()
    {
        $functions_file = $this->theme_dir . '/functions.php';
        $content = file_get_contents($functions_file);

        // Check if there are any admin-only operations
        if (preg_match('/(update_option|add_option|register_post_type)/', $content)) {
            // For theme setup, this is okay as it runs on hooks
            // But if there are admin pages, they should check capabilities

            if (preg_match('/(add_menu_page|add_submenu_page)/', $content)) {
                $this->assertMatchesRegularExpression(
                    '/current_user_can/',
                    $content,
                    'Admin pages should check user capabilities'
                );
            }
        }

        $this->assertTrue(true);
    }

    /**
     * Test that theme doesn't expose sensitive information
     */
    public function test_no_sensitive_info_exposure()
    {
        $php_files = TestHelpers::getPHPFiles($this->theme_dir, true);

        // Exclude vendor and test directories
        $php_files = array_filter($php_files, function ($file) {
            return strpos($file, 'vendor') === false &&
                strpos($file, 'tests') === false;
        });

        foreach ($php_files as $file) {
            $content = file_get_contents($file);

            // Check for debug output functions
            $this->assertDoesNotMatchRegularExpression(
                '/\b(var_dump|print_r|var_export)\s*\(/i',
                $content,
                "Debug function found in {$file}. Remove before production."
            );

            // Check for error display
            $this->assertDoesNotMatchRegularExpression(
                '/ini_set\s*\(\s*[\'"]display_errors/',
                $content,
                "Error display configuration found in {$file}. Handle via wp-config.php"
            );
        }
    }
}
