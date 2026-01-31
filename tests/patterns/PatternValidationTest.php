<?php
/**
 * Pattern Validation Tests
 * 
 * Tests for WordPress block pattern integrity and validation
 */

namespace FCPTheme\Tests\Patterns;

use PHPUnit\Framework\TestCase;
use FCPTheme\Tests\Utilities\TestHelpers;

class PatternValidationTest extends TestCase
{
    private $patterns_dir;

    public function setUp(): void
    {
        $this->patterns_dir = dirname(dirname(__DIR__)) . '/patterns';
    }

    /**
     * Test that patterns directory exists
     */
    public function test_patterns_directory_exists()
    {
        $this->assertDirectoryExists(
            $this->patterns_dir,
            'Patterns directory does not exist'
        );
    }

    /**
     * Test that all pattern files have valid PHP syntax
     */
    public function test_pattern_files_php_syntax()
    {
        if (!is_dir($this->patterns_dir)) {
            $this->markTestSkipped('Patterns directory not found');
        }

        $pattern_files = glob($this->patterns_dir . '/*.php');

        $this->assertNotEmpty($pattern_files, 'No pattern files found');

        foreach ($pattern_files as $file) {
            $output = [];
            $return_var = 0;
            exec("php -l " . escapeshellarg($file), $output, $return_var);

            $this->assertEquals(
                0,
                $return_var,
                "Pattern file {$file} has PHP syntax errors: " . implode("\n", $output)
            );
        }
    }

    /**
     * Test that all patterns have required metadata
     */
    public function test_patterns_have_metadata()
    {
        if (!is_dir($this->patterns_dir)) {
            $this->markTestSkipped('Patterns directory not found');
        }

        $pattern_files = glob($this->patterns_dir . '/*.php');

        foreach ($pattern_files as $file) {
            $metadata = TestHelpers::extractPatternMetadata($file);

            $this->assertArrayHasKey(
                'title',
                $metadata,
                "Pattern file {$file} is missing Title metadata"
            );

            $this->assertArrayHasKey(
                'slug',
                $metadata,
                "Pattern file {$file} is missing Slug metadata"
            );

            $this->assertArrayHasKey(
                'categories',
                $metadata,
                "Pattern file {$file} is missing Categories metadata"
            );
        }
    }

    /**
     * Test that pattern slugs follow naming convention
     */
    public function test_pattern_slug_naming()
    {
        if (!is_dir($this->patterns_dir)) {
            $this->markTestSkipped('Patterns directory not found');
        }

        $pattern_files = glob($this->patterns_dir . '/*.php');

        foreach ($pattern_files as $file) {
            $metadata = TestHelpers::extractPatternMetadata($file);

            if (isset($metadata['slug'])) {
                $this->assertMatchesRegularExpression(
                    '/^fl-coastal-prep\//',
                    $metadata['slug'],
                    "Pattern slug in {$file} should be prefixed with 'fl-coastal-prep/'"
                );
            }
        }
    }

    /**
     * Test that patterns contain valid WordPress block markup
     */
    public function test_patterns_valid_block_markup()
    {
        if (!is_dir($this->patterns_dir)) {
            $this->markTestSkipped('Patterns directory not found');
        }

        $pattern_files = glob($this->patterns_dir . '/*.php');

        foreach ($pattern_files as $file) {
            $content = file_get_contents($file);

            $validation = TestHelpers::validateBlockMarkup($content);

            $this->assertTrue(
                $validation['valid'],
                "Pattern file {$file} has invalid block markup: " .
                implode(', ', $validation['errors'])
            );
        }
    }

    /**
     * Test that patterns don't use deprecated blocks
     */
    public function test_patterns_no_deprecated_blocks()
    {
        if (!is_dir($this->patterns_dir)) {
            $this->markTestSkipped('Patterns directory not found');
        }

        $pattern_files = glob($this->patterns_dir . '/*.php');

        $deprecated_blocks = [
            'core/legacy-widget',
            'core/classic-block',
        ];

        foreach ($pattern_files as $file) {
            $content = file_get_contents($file);

            foreach ($deprecated_blocks as $block) {
                $this->assertStringNotContainsString(
                    "wp:{$block}",
                    $content,
                    "Pattern file {$file} uses deprecated block: {$block}"
                );
            }
        }
    }

    /**
     * Test that patterns have valid HTML structure
     */
    public function test_patterns_valid_html()
    {
        if (!is_dir($this->patterns_dir)) {
            $this->markTestSkipped('Patterns directory not found');
        }

        $pattern_files = glob($this->patterns_dir . '/*.php');

        foreach ($pattern_files as $file) {
            $content = file_get_contents($file);

            // Remove PHP tags for HTML validation
            $html = preg_replace('/<\?php.*?\?>/s', '', $content);

            $validation = TestHelpers::validateHTML($html);

            if (!$validation['valid']) {
                $this->addWarning(
                    "Pattern file {$file} may have HTML issues: " .
                    implode(', ', $validation['errors'])
                );
            }
        }

        $this->assertTrue(true);
    }

    /**
     * Test that pattern file names match their slugs
     */
    public function test_pattern_filename_matches_slug()
    {
        if (!is_dir($this->patterns_dir)) {
            $this->markTestSkipped('Patterns directory not found');
        }

        $pattern_files = glob($this->patterns_dir . '/*.php');

        foreach ($pattern_files as $file) {
            $metadata = TestHelpers::extractPatternMetadata($file);

            if (isset($metadata['slug'])) {
                $filename = basename($file, '.php');
                $slug_part = str_replace('fl-coastal-prep/', '', $metadata['slug']);

                $this->assertEquals(
                    $filename,
                    $slug_part,
                    "Pattern filename {$filename} should match slug {$slug_part}"
                );
            }
        }
    }

    /**
     * Test that patterns don't have inline styles (should use theme.json)
     */
    public function test_patterns_avoid_inline_styles()
    {
        if (!is_dir($this->patterns_dir)) {
            $this->markTestSkipped('Patterns directory not found');
        }

        $pattern_files = glob($this->patterns_dir . '/*.php');

        foreach ($pattern_files as $file) {
            $content = file_get_contents($file);

            // Count inline style usage
            $inline_style_count = preg_match_all('/style="/', $content);

            // Some inline styles are okay for specific positioning, but excessive use is a warning
            if ($inline_style_count > 20) {
                $this->addWarning(
                    "Pattern file {$file} has {$inline_style_count} inline styles. " .
                    "Consider using theme.json settings instead."
                );
            }
        }

        $this->assertTrue(true);
    }

    /**
     * Test that all expected pattern files exist
     */
    public function test_expected_patterns_exist()
    {
        $expected_patterns = [
            'apply-form.php',
            'campus-showcase.php',
            'contact-form.php',
            'cta.php',
            'donors-showcase.php',
            'faculty-grid.php',
            'grid.php',
            'hero.php',
            'news-archive.php',
            'programs-detail.php',
            'programs-hero.php',
            'schedule-results.php',
            'section-header.php',
            'stats.php',
        ];

        foreach ($expected_patterns as $pattern) {
            $file = $this->patterns_dir . '/' . $pattern;
            $this->assertFileExists(
                $file,
                "Expected pattern file {$pattern} does not exist"
            );
        }
    }
}
