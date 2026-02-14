<?php
/**
 * Function Availability Tests
 * 
 * Tests to prevent "Call to unknown function" errors by verifying
 * WordPress functions are available when called
 */

namespace FCPTheme\Tests\Debugging;

use PHPUnit\Framework\TestCase;

class FunctionAvailabilityTest extends TestCase
{
    /**
     * Test that WordPress core functions used in theme are available
     */
    public function test_wordpress_core_functions_exist()
    {
        // Functions are available via stubs in standalone mode
        $required_functions = [
            'add_theme_support',
            'add_editor_style',
            'register_nav_menus',
            'add_action',
            'add_filter',
            'is_admin',
            'is_front_page',
            'is_singular',
            'get_bloginfo',
            'get_header_image',
            'get_permalink',
            'get_the_title',
            'get_site_url',
            'get_site_icon_url',
            'has_excerpt',
            'has_post_thumbnail',
            'get_the_excerpt',
            'get_the_post_thumbnail_url',
            'wp_strip_all_tags',
            'register_post_type',
            'wp_enqueue_style',
            'get_stylesheet_uri',
            '__',
            'esc_attr',
            'esc_url',
            'esc_html',
        ];

        foreach ($required_functions as $function) {
            $this->assertTrue(
                function_exists($function),
                "Required WordPress function '{$function}' does not exist"
            );
        }
    }

    /**
     * Test that conditional tags are available when used
     */
    public function test_conditional_tags_available()
    {
        // Functions are available via stubs in standalone mode
        $conditional_tags = [
            'is_front_page',
            'is_singular',
            'is_admin',
        ];

        foreach ($conditional_tags as $tag) {
            $this->assertTrue(
                function_exists($tag),
                "Conditional tag '{$tag}' is not available"
            );
        }
    }

    /**
     * Test that internationalization functions are available
     */
    public function test_i18n_functions_available()
    {
        // Functions are available via stubs in standalone mode
        $i18n_functions = [
            '__',
            '_e',
            'esc_html__',
            'esc_attr__',
        ];

        foreach ($i18n_functions as $function) {
            $this->assertTrue(
                function_exists($function),
                "Internationalization function '{$function}' is not available"
            );
        }
    }

    /**
     * Test that escaping functions are available
     */
    public function test_escaping_functions_available()
    {
        // Functions are available via stubs in standalone mode
        $escaping_functions = [
            'esc_html',
            'esc_attr',
            'esc_url',
            'esc_js',
            'wp_kses',
            'wp_kses_post',
            'sanitize_text_field',
            'sanitize_email',
        ];

        foreach ($escaping_functions as $function) {
            $this->assertTrue(
                function_exists($function),
                "Escaping function '{$function}' is not available"
            );
        }
    }

    /**
     * Test that post/page functions are available
     */
    public function test_post_functions_available()
    {
        // Functions are available via stubs in standalone mode
        $post_functions = [
            'get_the_title',
            'get_the_excerpt',
            'get_the_post_thumbnail_url',
            'has_post_thumbnail',
            'has_excerpt',
            'get_permalink',
        ];

        foreach ($post_functions as $function) {
            $this->assertTrue(
                function_exists($function),
                "Post function '{$function}' is not available"
            );
        }
    }

    /**
     * Test that custom post type functions are available
     */
    public function test_custom_post_type_functions_available()
    {
        // Functions are available via stubs in standalone mode
        $cpt_functions = [
            'register_post_type',
            'post_type_exists',
        ];

        foreach ($cpt_functions as $function) {
            $this->assertTrue(
                function_exists($function),
                "Custom post type function '{$function}' is not available"
            );
        }
    }

    /**
     * Test that enqueue functions are available
     */
    public function test_enqueue_functions_available()
    {
        // Functions are available via stubs in standalone mode
        $enqueue_functions = [
            'wp_enqueue_style',
            'wp_enqueue_script',
            'get_stylesheet_uri',
        ];

        foreach ($enqueue_functions as $function) {
            $this->assertTrue(
                function_exists($function),
                "Enqueue function '{$function}' is not available"
            );
        }
    }
}
