<?php
/**
 * Theme Standards Tests
 * 
 * Tests for WordPress coding standards and best practices
 */

namespace FCPTheme\Tests\CodeQuality;

use PHPUnit\Framework\TestCase;
use FCPTheme\Tests\Utilities\TestHelpers;

class ThemeStandardsTest extends TestCase
{
    private $theme_dir;

    public function setUp(): void
    {
        $this->theme_dir = dirname(dirname(__DIR__));
    }

    /**
     * Test that required theme files exist
     */
    public function test_required_theme_files_exist()
    {
        $required_files = [
            'style.css',
            'functions.php',
            'theme.json',
            'readme.txt',
        ];

        foreach ($required_files as $file) {
            $this->assertFileExists(
                $this->theme_dir . '/' . $file,
                "Required theme file {$file} does not exist"
            );
        }
    }

    /**
     * Test that style.css has required headers
     */
    public function test_style_css_headers()
    {
        $style_css = $this->theme_dir . '/style.css';
        $content = file_get_contents($style_css);

        $required_headers = [
            'Theme Name:',
            'Version:',
        ];

        foreach ($required_headers as $header) {
            $this->assertStringContainsString(
                $header,
                $content,
                "style.css is missing required header: {$header}"
            );
        }
    }

    /**
     * Test that theme.json has correct version
     */
    public function test_theme_json_version()
    {
        $theme_json_file = $this->theme_dir . '/theme.json';
        $theme_json = json_decode(file_get_contents($theme_json_file), true);

        $this->assertArrayHasKey('version', $theme_json, 'theme.json missing version');
        $this->assertEquals(2, $theme_json['version'], 'theme.json should use version 2');
    }

    /**
     * Test that theme.json has color palette
     */
    public function test_theme_json_color_palette()
    {
        $theme_json_file = $this->theme_dir . '/theme.json';
        $theme_json = json_decode(file_get_contents($theme_json_file), true);

        $this->assertArrayHasKey('settings', $theme_json);
        $this->assertArrayHasKey('color', $theme_json['settings']);
        $this->assertArrayHasKey('palette', $theme_json['settings']['color']);
        $this->assertNotEmpty($theme_json['settings']['color']['palette']);
    }

    /**
     * Test that theme.json has typography settings
     */
    public function test_theme_json_typography()
    {
        $theme_json_file = $this->theme_dir . '/theme.json';
        $theme_json = json_decode(file_get_contents($theme_json_file), true);

        $this->assertArrayHasKey('typography', $theme_json['settings']);
        $this->assertArrayHasKey('fontFamilies', $theme_json['settings']['typography']);
        $this->assertNotEmpty($theme_json['settings']['typography']['fontFamilies']);
    }

    /**
     * Test that all PHP files are properly documented
     */
    public function test_php_files_documented()
    {
        $functions_file = $this->theme_dir . '/functions.php';
        $content = file_get_contents($functions_file);

        // Check for file-level docblock
        $this->assertMatchesRegularExpression(
            '/\/\*\*.*?\*\//s',
            $content,
            'functions.php should have docblock comments'
        );
    }

    /**
     * Test that no PHP short tags are used
     */
    public function test_no_php_short_tags()
    {
        $php_files = TestHelpers::getPHPFiles($this->theme_dir, true);

        // Exclude vendor and test directories
        $php_files = array_filter($php_files, function ($file) {
            return strpos($file, 'vendor') === false &&
                strpos($file, 'tests') === false;
        });

        foreach ($php_files as $file) {
            $content = file_get_contents($file);

            // Check for short tags (but allow <?= in patterns as it's common)
            $this->assertDoesNotMatchRegularExpression(
                '/<\?\s+/',
                $content,
                "File {$file} uses PHP short tags. Use <?php instead."
            );
        }
    }

    /**
     * Test that theme has screenshot
     */
    public function test_screenshot_exists()
    {
        $screenshot_file = $this->theme_dir . '/screenshot.png';

        $this->assertFileExists(
            $screenshot_file,
            'Theme screenshot (screenshot.png) does not exist'
        );
    }

    /**
     * Test that readme.txt has required content
     */
    public function test_readme_content()
    {
        $readme_file = $this->theme_dir . '/readme.txt';
        $content = file_get_contents($readme_file);

        $this->assertStringContainsString(
            'Contributors:',
            $content,
            'readme.txt should have Contributors field'
        );
    }

    /**
     * Test that parts directory exists with required parts
     */
    public function test_template_parts_exist()
    {
        $parts_dir = $this->theme_dir . '/parts';

        $this->assertDirectoryExists($parts_dir, 'Template parts directory does not exist');

        $required_parts = [
            'header.html',
            'footer.html',
        ];

        foreach ($required_parts as $part) {
            $this->assertFileExists(
                $parts_dir . '/' . $part,
                "Required template part {$part} does not exist"
            );
        }
    }

    /**
     * Test that theme doesn't have unused files
     */
    public function test_no_unused_files()
    {
        $unwanted_files = [
            '.DS_Store',
            'Thumbs.db',
            'desktop.ini',
        ];

        foreach ($unwanted_files as $file) {
            $this->assertFileDoesNotExist(
                $this->theme_dir . '/' . $file,
                "Theme contains unwanted file: {$file}"
            );
        }
    }
}
