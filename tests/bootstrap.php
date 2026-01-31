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
    echo "WordPress test suite not found. Please install it first.\n";
    echo "See: https://make.wordpress.org/core/handbook/testing/automated-testing/phpunit/\n";
    // Continue without WordPress for basic PHP tests
    define('WP_TESTS_AVAILABLE', false);
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
