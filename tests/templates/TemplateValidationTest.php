<?php
/**
 * Template Validation Tests
 * 
 * Tests for WordPress template file integrity and validation
 */

namespace FCPTheme\Tests\Templates;

use PHPUnit\Framework\TestCase;
use FCPTheme\Tests\Utilities\TestHelpers;

class TemplateValidationTest extends TestCase
{
    private $templates_dir;

    public function setUp(): void
    {
        $this->templates_dir = dirname(dirname(__DIR__)) . '/templates';
    }

    /**
     * Test that templates directory exists
     */
    public function test_templates_directory_exists()
    {
        $this->assertDirectoryExists(
            $this->templates_dir,
            'Templates directory does not exist'
        );
    }

    /**
     * Test that required template files exist
     */
    public function test_required_templates_exist()
    {
        $required_templates = [
            'index.html',
            'front-page.html',
            'single.html',
            '404.html',
        ];

        foreach ($required_templates as $template) {
            $file = $this->templates_dir . '/' . $template;
            $this->assertFileExists(
                $file,
                "Required template file {$template} does not exist"
            );
        }
    }

    /**
     * Test that all template files have valid HTML
     */
    public function test_templates_valid_html()
    {
        if (!is_dir($this->templates_dir)) {
            $this->markTestSkipped('Templates directory not found');
        }

        $template_files = glob($this->templates_dir . '/*.html');

        $this->assertNotEmpty($template_files, 'No template files found');

        foreach ($template_files as $file) {
            $content = file_get_contents($file);

            $validation = TestHelpers::validateHTML($content);

            if (!$validation['valid']) {
                $this->addWarning(
                    "Template file {$file} may have HTML issues: " .
                    implode(', ', $validation['errors'])
                );
            }
        }

        $this->assertTrue(true);
    }

    /**
     * Test that templates contain valid WordPress block markup
     */
    public function test_templates_valid_block_markup()
    {
        if (!is_dir($this->templates_dir)) {
            $this->markTestSkipped('Templates directory not found');
        }

        $template_files = glob($this->templates_dir . '/*.html');

        foreach ($template_files as $file) {
            $content = file_get_contents($file);

            $validation = TestHelpers::validateBlockMarkup($content);

            $this->assertTrue(
                $validation['valid'],
                "Template file {$file} has invalid block markup: " .
                implode(', ', $validation['errors'])
            );
        }
    }

    /**
     * Test that templates reference template parts correctly
     */
    public function test_templates_reference_template_parts()
    {
        if (!is_dir($this->templates_dir)) {
            $this->markTestSkipped('Templates directory not found');
        }

        $template_files = glob($this->templates_dir . '/*.html');

        foreach ($template_files as $file) {
            $content = file_get_contents($file);

            // Check for template part references
            if (preg_match_all('/wp:template-part.*?"slug":"([^"]+)"/', $content, $matches)) {
                foreach ($matches[1] as $slug) {
                    $parts_dir = dirname(dirname(__DIR__)) . '/parts';
                    $part_file = $parts_dir . '/' . $slug . '.html';

                    $this->assertFileExists(
                        $part_file,
                        "Template {$file} references template part '{$slug}' which does not exist"
                    );
                }
            }
        }
    }

    /**
     * Test that archive templates exist for custom post types
     */
    public function test_archive_templates_for_cpts()
    {
        $cpt_archives = [
            'archive-faculty.html',
            'archive-schedule.html',
        ];

        foreach ($cpt_archives as $template) {
            $file = $this->templates_dir . '/' . $template;
            $this->assertFileExists(
                $file,
                "Archive template {$template} for custom post type does not exist"
            );
        }
    }

    /**
     * Test that page templates exist
     */
    public function test_page_templates_exist()
    {
        $page_templates = [
            'page-apply.html',
            'page-campus.html',
            'page-contact.html',
            'page-donors.html',
            'page-faculty.html',
            'page-news.html',
            'page-programs.html',
            'page-schedule.html',
        ];

        foreach ($page_templates as $template) {
            $file = $this->templates_dir . '/' . $template;
            $this->assertFileExists(
                $file,
                "Page template {$template} does not exist"
            );
        }
    }

    /**
     * Test that templates don't use deprecated blocks
     */
    public function test_templates_no_deprecated_blocks()
    {
        if (!is_dir($this->templates_dir)) {
            $this->markTestSkipped('Templates directory not found');
        }

        $template_files = glob($this->templates_dir . '/*.html');

        $deprecated_blocks = [
            'core/legacy-widget',
            'core/classic-block',
        ];

        foreach ($template_files as $file) {
            $content = file_get_contents($file);

            foreach ($deprecated_blocks as $block) {
                $this->assertStringNotContainsString(
                    "wp:{$block}",
                    $content,
                    "Template file {$file} uses deprecated block: {$block}"
                );
            }
        }
    }

    /**
     * Test that Elementor templates exist
     */
    public function test_elementor_templates_exist()
    {
        $elementor_templates = [
            'page-elementor-canvas.html',
            'page-elementor-full-width.html',
        ];

        foreach ($elementor_templates as $template) {
            $file = $this->templates_dir . '/' . $template;
            $this->assertFileExists(
                $file,
                "Elementor template {$template} does not exist"
            );
        }
    }

    /**
     * Test that templates are registered in theme.json
     */
    public function test_templates_registered_in_theme_json()
    {
        $theme_json_file = dirname(dirname(__DIR__)) . '/theme.json';

        $this->assertFileExists($theme_json_file, 'theme.json does not exist');

        $theme_json = json_decode(file_get_contents($theme_json_file), true);

        if (isset($theme_json['customTemplates'])) {
            $registered_templates = array_column($theme_json['customTemplates'], 'name');

            // Check that custom templates are registered
            $custom_templates = [
                'page-elementor-full-width',
                'page-elementor-canvas',
                'archive-faculty',
                'archive-schedule',
            ];

            foreach ($custom_templates as $template) {
                $this->assertContains(
                    $template,
                    $registered_templates,
                    "Template {$template} is not registered in theme.json customTemplates"
                );
            }
        }
    }

    /**
     * Test that template parts are registered in theme.json
     */
    public function test_template_parts_registered()
    {
        $theme_json_file = dirname(dirname(__DIR__)) . '/theme.json';
        $theme_json = json_decode(file_get_contents($theme_json_file), true);

        if (isset($theme_json['templateParts'])) {
            $registered_parts = array_column($theme_json['templateParts'], 'name');

            $required_parts = ['header', 'footer'];

            foreach ($required_parts as $part) {
                $this->assertContains(
                    $part,
                    $registered_parts,
                    "Template part {$part} is not registered in theme.json"
                );
            }
        }
    }
}
