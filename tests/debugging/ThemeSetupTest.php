<?php
/**
 * Theme Setup Tests
 * 
 * Tests for theme initialization and configuration
 */

namespace FCPTheme\Tests\Debugging;

use PHPUnit\Framework\TestCase;

class ThemeSetupTest extends TestCase
{
    /**
     * Test that theme setup function exists
     */
    public function test_theme_setup_function_exists()
    {
        $this->assertTrue(
            function_exists('fl_coastal_prep_setup'),
            'Theme setup function fl_coastal_prep_setup() does not exist'
        );
    }

    /**
     * Test that theme setup function is hooked correctly
     */
    public function test_theme_setup_hooked()
    {
        // Hooks are available via stubs in standalone mode
        $this->assertTrue(
            has_action('after_setup_theme', 'fl_coastal_prep_setup') !== false,
            'Theme setup function is not hooked to after_setup_theme'
        );
    }

    /**
     * Test that custom post types registration function exists
     */
    public function test_cpt_registration_function_exists()
    {
        $this->assertTrue(
            function_exists('fl_coastal_prep_register_cpts'),
            'CPT registration function fl_coastal_prep_register_cpts() does not exist'
        );
    }

    /**
     * Test that CPT registration is hooked correctly
     */
    public function test_cpt_registration_hooked()
    {
        // Hooks are available via stubs in standalone mode
        $this->assertTrue(
            has_action('init', 'fl_coastal_prep_register_cpts') !== false,
            'CPT registration function is not hooked to init'
        );
    }

    /**
     * Test that scripts enqueue function exists
     */
    public function test_scripts_enqueue_function_exists()
    {
        $this->assertTrue(
            function_exists('fl_coastal_prep_scripts'),
            'Scripts enqueue function fl_coastal_prep_scripts() does not exist'
        );
    }

    /**
     * Test that scripts enqueue is hooked correctly
     */
    public function test_scripts_enqueue_hooked()
    {
        // Hooks are available via stubs in standalone mode
        $this->assertTrue(
            has_action('wp_enqueue_scripts', 'fl_coastal_prep_scripts') !== false,
            'Scripts enqueue function is not hooked to wp_enqueue_scripts'
        );
    }

    /**
     * Test that SEO meta function exists
     */
    public function test_seo_meta_function_exists()
    {
        $this->assertTrue(
            function_exists('fl_coastal_prep_seo_meta'),
            'SEO meta function fl_coastal_prep_seo_meta() does not exist'
        );
    }

    /**
     * Test that SEO meta is hooked correctly (via parent head_output function)
     */
    public function test_seo_meta_hooked()
    {
        // SEO functions are called from fl_coastal_prep_head_output(), which is hooked to wp_head
        $this->assertTrue(
            has_action('wp_head', 'fl_coastal_prep_head_output') !== false,
            'Head output function is not hooked to wp_head (SEO meta is called from this function)'
        );
    }

    /**
     * Test that schema markup function exists
     */
    public function test_schema_markup_function_exists()
    {
        $this->assertTrue(
            function_exists('fl_coastal_prep_schema_markup'),
            'Schema markup function fl_coastal_prep_schema_markup() does not exist'
        );
    }

    /**
     * Test that schema markup is hooked correctly (via parent head_output function)
     */
    public function test_schema_markup_hooked()
    {
        // Schema functions are called from fl_coastal_prep_head_output(), which is hooked to wp_head
        $this->assertTrue(
            has_action('wp_head', 'fl_coastal_prep_head_output') !== false,
            'Head output function is not hooked to wp_head (schema markup is called from this function)'
        );
    }

    /**
     * Test that functions.php has no PHP syntax errors
     */
    public function test_functions_php_syntax()
    {
        $functions_file = dirname(dirname(__DIR__)) . '/functions.php';

        $this->assertFileExists($functions_file, 'functions.php does not exist');

        // Use php -l to check syntax
        $output = [];
        $return_var = 0;
        exec("php -l " . escapeshellarg($functions_file), $output, $return_var);

        $this->assertEquals(
            0,
            $return_var,
            'functions.php has PHP syntax errors: ' . implode("\n", $output)
        );
    }

    /**
     * Test that theme.json is valid JSON
     */
    public function test_theme_json_valid()
    {
        $theme_json = dirname(dirname(__DIR__)) . '/theme.json';

        $this->assertFileExists($theme_json, 'theme.json does not exist');

        $content = file_get_contents($theme_json);
        $decoded = json_decode($content, true);

        $this->assertNotNull(
            $decoded,
            'theme.json is not valid JSON: ' . json_last_error_msg()
        );

        // Check for required properties
        $this->assertArrayHasKey('version', $decoded, 'theme.json missing version');
        $this->assertArrayHasKey('settings', $decoded, 'theme.json missing settings');
    }

    /**
     * Test that ABSPATH check exists in functions.php
     */
    public function test_abspath_check_exists()
    {
        $functions_file = dirname(dirname(__DIR__)) . '/functions.php';
        $content = file_get_contents($functions_file);

        $this->assertMatchesRegularExpression(
            '/if\s*\(\s*!\s*defined\s*\(\s*[\'"]ABSPATH[\'"]\s*\)\s*\)/',
            $content,
            'functions.php should check for ABSPATH to prevent direct access'
        );
    }

    /**
     * Test that all theme functions are properly prefixed
     */
    public function test_function_naming_convention()
    {
        $functions_file = dirname(dirname(__DIR__)) . '/functions.php';
        $content = file_get_contents($functions_file);

        // Extract all function definitions
        preg_match_all('/function\s+([a-zA-Z_][a-zA-Z0-9_]*)\s*\(/', $content, $matches);

        if (!empty($matches[1])) {
            foreach ($matches[1] as $function_name) {
                // Skip private functions (starting with _)
                if (strpos($function_name, '_') === 0) {
                    continue;
                }

                // Check if function is prefixed with theme prefix
                $this->assertMatchesRegularExpression(
                    '/^fl_coastal_prep_/',
                    $function_name,
                    "Function '{$function_name}' should be prefixed with 'fl_coastal_prep_'"
                );
            }
        }
    }
}
