<?php
/**
 * PHPUnit Bootstrap File for Florida Coastal Prep Theme Tests
 */

// Composer autoloader
require_once dirname(__DIR__) . '/vendor/autoload.php';

// Define test environment constants
define('FCP_THEME_DIR', dirname(__DIR__));
define('FCP_TESTS_DIR', __DIR__);

// WordPress test suite location (adjust if needed)
$_tests_dir = getenv('WP_TESTS_DIR');
if (!$_tests_dir) {
    $_tests_dir = rtrim(sys_get_temp_dir(), '/\\') . '/wordpress-tests-lib';
}

// Check if WordPress test suite is available
if (!file_exists($_tests_dir . '/includes/functions.php')) {
    echo "WordPress test suite not found. Running in standalone mode.\n";
    // Continue without WordPress for basic PHP tests
    define('WP_TESTS_AVAILABLE', false);

    // Define ABSPATH for functions.php
    if (!defined('ABSPATH')) {
        define('ABSPATH', dirname(__DIR__) . '/');
    }

    // Define WordPress function stubs for standalone testing
    // These allow functions.php to load without fatal errors

    // Core hook functions
    if (!function_exists('add_action')) {
        $GLOBALS['wp_actions'] = [];
        function add_action($tag, $callback, $priority = 10, $accepted_args = 1)
        {
            $GLOBALS['wp_actions'][$tag][] = $callback;
        }
    }
    if (!function_exists('add_filter')) {
        $GLOBALS['wp_filters'] = [];
        function add_filter($tag, $callback, $priority = 10, $accepted_args = 1)
        {
            $GLOBALS['wp_filters'][$tag][] = $callback;
        }
    }
    if (!function_exists('has_action')) {
        function has_action($tag, $callback = false)
        {
            if (!isset($GLOBALS['wp_actions'][$tag]))
                return false;
            if ($callback === false)
                return !empty($GLOBALS['wp_actions'][$tag]);
            return in_array($callback, $GLOBALS['wp_actions'][$tag]);
        }
    }

    // Theme support functions
    if (!function_exists('add_theme_support')) {
        function add_theme_support($feature, $args = array())
        {
            return true;
        }
    }
    if (!function_exists('add_editor_style')) {
        function add_editor_style($stylesheet = 'editor-style.css')
        {
            return true;
        }
    }
    if (!function_exists('register_nav_menus')) {
        function register_nav_menus($locations = array())
        {
            return true;
        }
    }

    // Internationalization
    if (!function_exists('__')) {
        function __($text, $domain = 'default')
        {
            return $text;
        }
    }
    if (!function_exists('_e')) {
        function _e($text, $domain = 'default')
        {
            echo $text;
        }
    }
    if (!function_exists('esc_html__')) {
        function esc_html__($text, $domain = 'default')
        {
            return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
        }
    }
    if (!function_exists('esc_attr__')) {
        function esc_attr__($text, $domain = 'default')
        {
            return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
        }
    }

    // Escaping functions
    if (!function_exists('esc_html')) {
        function esc_html($text)
        {
            return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
        }
    }
    if (!function_exists('esc_attr')) {
        function esc_attr($text)
        {
            return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
        }
    }
    if (!function_exists('esc_url')) {
        function esc_url($url)
        {
            return filter_var($url, FILTER_SANITIZE_URL);
        }
    }
    if (!function_exists('esc_js')) {
        function esc_js($text)
        {
            return addslashes($text);
        }
    }
    if (!function_exists('wp_kses')) {
        function wp_kses($string, $allowed_html, $allowed_protocols = array())
        {
            return strip_tags($string);
        }
    }
    if (!function_exists('wp_kses_post')) {
        function wp_kses_post($data)
        {
            return $data;
        }
    }
    if (!function_exists('sanitize_text_field')) {
        function sanitize_text_field($str)
        {
            return strip_tags(trim($str));
        }
    }
    if (!function_exists('sanitize_email')) {
        function sanitize_email($email)
        {
            return filter_var($email, FILTER_SANITIZE_EMAIL);
        }
    }

    // Conditional functions
    if (!function_exists('is_admin')) {
        function is_admin()
        {
            return false;
        }
    }
    if (!function_exists('is_front_page')) {
        function is_front_page()
        {
            return false;
        }
    }
    if (!function_exists('is_singular')) {
        function is_singular($post_types = '')
        {
            return false;
        }
    }
    if (!function_exists('defined')) {
        // PHP built-in, no stub needed
    }

    // Site/blog info functions
    if (!function_exists('get_bloginfo')) {
        function get_bloginfo($show = '', $filter = 'raw')
        {
            return 'Test Site';
        }
    }
    if (!function_exists('get_site_url')) {
        function get_site_url($blog_id = null, $path = '', $scheme = null)
        {
            return 'https://example.com';
        }
    }
    if (!function_exists('get_site_icon_url')) {
        function get_site_icon_url($size = 512, $url = '', $blog_id = 0)
        {
            return '';
        }
    }
    if (!function_exists('get_header_image')) {
        function get_header_image()
        {
            return '';
        }
    }

    // Post functions
    if (!function_exists('get_the_title')) {
        function get_the_title($post = 0)
        {
            return 'Test Title';
        }
    }
    if (!function_exists('get_the_excerpt')) {
        function get_the_excerpt($post = null)
        {
            return 'Test excerpt';
        }
    }
    if (!function_exists('get_permalink')) {
        function get_permalink($post = 0, $leavename = false)
        {
            return 'https://example.com/test';
        }
    }
    if (!function_exists('has_excerpt')) {
        function has_excerpt($post = null)
        {
            return false;
        }
    }
    if (!function_exists('has_post_thumbnail')) {
        function has_post_thumbnail($post = null)
        {
            return false;
        }
    }
    if (!function_exists('get_the_post_thumbnail_url')) {
        function get_the_post_thumbnail_url($post = null, $size = 'post-thumbnail')
        {
            return '';
        }
    }
    if (!function_exists('wp_strip_all_tags')) {
        function wp_strip_all_tags($string, $remove_breaks = false)
        {
            return strip_tags($string);
        }
    }

    // CPT and enqueue functions
    if (!function_exists('register_post_type')) {
        $GLOBALS['wp_post_types'] = [];
        function register_post_type($post_type, $args = array())
        {
            $GLOBALS['wp_post_types'][$post_type] = $args;
            return (object) $args;
        }
    }
    if (!function_exists('post_type_exists')) {
        function post_type_exists($post_type)
        {
            return isset($GLOBALS['wp_post_types'][$post_type]);
        }
    }
    if (!function_exists('wp_enqueue_style')) {
        function wp_enqueue_style($handle, $src = '', $deps = array(), $ver = false, $media = 'all')
        {
            return true;
        }
    }
    if (!function_exists('wp_enqueue_script')) {
        function wp_enqueue_script($handle, $src = '', $deps = array(), $ver = false, $in_footer = false)
        {
            return true;
        }
    }
    if (!function_exists('get_stylesheet_uri')) {
        function get_stylesheet_uri()
        {
            return FCP_THEME_DIR . '/style.css';
        }
    }

    // Load theme functions directly for non-WordPress tests
    // This allows function existence tests to work
    require_once FCP_THEME_DIR . '/functions.php';
} else {
    define('WP_TESTS_AVAILABLE', true);

    // Load WordPress test suite
    require_once $_tests_dir . '/includes/functions.php';

    /**
     * Manually load the theme being tested
     */
    function _manually_load_theme()
    {
        // Load theme functions
        require FCP_THEME_DIR . '/functions.php';
    }
    tests_add_filter('muplugins_loaded', '_manually_load_theme');

    // Start up the WP testing environment
    require $_tests_dir . '/includes/bootstrap.php';
}

// Load test utilities
require_once FCP_TESTS_DIR . '/utilities/TestHelpers.php';
