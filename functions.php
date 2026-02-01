<?php
/**
 * Florida Coastal Prep functions and definitions
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!function_exists('fl_coastal_prep_setup')):
    function fl_coastal_prep_setup()
    {
        add_theme_support('wp-block-styles');
        add_editor_style('style.css');
        add_theme_support('post-thumbnails');
        add_theme_support('responsive-embeds');
        add_theme_support('editor-styles');
        add_theme_support('html5', array('style', 'script'));
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');

        // Elementor Optimization
        add_theme_support('elementor');

        register_nav_menus(array(
            'primary' => __('Primary Menu', 'fl-coastal-prep'),
            'footer' => __('Footer Menu', 'fl-coastal-prep'),
        ));

        // Starter Content
        add_theme_support('starter-content', array(
            'posts' => array(
                'home' => array(
                    'post_type' => 'page',
                    'post_title' => _x('Home', 'Theme starter content', 'fl-coastal-prep'),
                    'content' => '<!-- wp:pattern {"slug":"fl-coastal-prep/hero"} /-->
                                  <!-- wp:pattern {"slug":"fl-coastal-prep/stats"} /-->
                                  <!-- wp:pattern {"slug":"fl-coastal-prep/grid"} /-->
                                  <!-- wp:pattern {"slug":"fl-coastal-prep/cta"} /-->',
                    'template' => 'front-page',
                ),
                'programs' => array(
                    'post_type' => 'page',
                    'post_title' => _x('Programs', 'Theme starter content', 'fl-coastal-prep'),
                    'content' => '<!-- wp:pattern {"slug":"fl-coastal-prep/programs-hero"} /-->
                                  <!-- wp:pattern {"slug":"fl-coastal-prep/programs-detail"} /-->',
                    'template' => 'page-programs',
                ),
                'faculty' => array(
                    'post_type' => 'page',
                    'post_title' => _x('Faculty & Staff', 'Theme starter content', 'fl-coastal-prep'),
                    'content' => '<!-- wp:pattern {"slug":"fl-coastal-prep/section-header"} /-->
                                  <!-- wp:pattern {"slug":"fl-coastal-prep/faculty-grid"} /-->',
                    'template' => 'page-faculty',
                ),
                'campus' => array(
                    'post_type' => 'page',
                    'post_title' => _x('Campus', 'Theme starter content', 'fl-coastal-prep'),
                    'content' => '<!-- wp:pattern {"slug":"fl-coastal-prep/campus-showcase"} /-->',
                ),
                'contact' => array(
                    'post_type' => 'page',
                    'post_title' => _x('Contact', 'Theme starter content', 'fl-coastal-prep'),
                    'content' => '<!-- wp:pattern {"slug":"fl-coastal-prep/contact-form"} /-->',
                ),
                'apply' => array(
                    'post_type' => 'page',
                    'post_title' => _x('Apply Now', 'Theme starter content', 'fl-coastal-prep'),
                    'content' => '<!-- wp:pattern {"slug":"fl-coastal-prep/apply-form"} /-->',
                ),
                'donors' => array(
                    'post_type' => 'page',
                    'post_title' => _x('Donors', 'Theme starter content', 'fl-coastal-prep'),
                    'content' => '<!-- wp:pattern {"slug":"fl-coastal-prep/donors-showcase"} /-->',
                ),
                'news' => array(
                    'post_type' => 'page',
                    'post_title' => _x('News', 'Theme starter content', 'fl-coastal-prep'),
                    'content' => '<!-- wp:pattern {"slug":"fl-coastal-prep/news-archive"} /-->',
                ),
                'schedule' => array(
                    'post_type' => 'page',
                    'post_title' => _x('Schedule', 'Theme starter content', 'fl-coastal-prep'),
                    'content' => '<!-- wp:pattern {"slug":"fl-coastal-prep/schedule-results"} /-->',
                ),
                'privacy-policy' => array(
                    'post_type' => 'page',
                    'post_title' => _x('Privacy Policy', 'Theme starter content', 'fl-coastal-prep'),
                ),
                'terms-of-service' => array(
                    'post_type' => 'page',
                    'post_title' => _x('Terms of Service', 'Theme starter content', 'fl-coastal-prep'),
                ),
            ),
            'options' => array(
                'show_on_front' => 'page',
                'page_on_front' => '{{home}}',
                'blogdescription' => _x('The Future of Elite Ball', 'Theme starter content', 'fl-coastal-prep'),
            ),
            'nav_menus' => array(
                'primary' => array(
                    'name' => _x('Primary Menu', 'Theme starter content', 'fl-coastal-prep'),
                    'items' => array(
                        'link.home' => array(
                            'type' => 'post_type',
                            'object' => 'page',
                            'object_id' => '{{home}}',
                        ),
                        'link.programs' => array(
                            'type' => 'post_type',
                            'object' => 'page',
                            'object_id' => '{{programs}}',
                        ),
                        'link.faculty' => array(
                            'type' => 'post_type',
                            'object' => 'page',
                            'object_id' => '{{faculty}}',
                        ),
                        'link.campus' => array(
                            'type' => 'post_type',
                            'object' => 'page',
                            'object_id' => '{{campus}}',
                        ),
                        'link.news' => array(
                            'type' => 'post_type',
                            'object' => 'page',
                            'object_id' => '{{news}}',
                        ),
                        'link.apply' => array(
                            'type' => 'post_type',
                            'object' => 'page',
                            'object_id' => '{{apply}}',
                        ),
                    ),
                ),
                'footer' => array(
                    'name' => _x('Footer Menu', 'Theme starter content', 'fl-coastal-prep'),
                    'items' => array(
                        'link.privacy' => array(
                            'type' => 'post_type',
                            'object' => 'page',
                            'object_id' => '{{privacy-policy}}',
                        ),
                        'link.terms' => array(
                            'type' => 'post_type',
                            'object' => 'page',
                            'object_id' => '{{terms-of-service}}',
                        ),
                        'link.contact' => array(
                            'type' => 'post_type',
                            'object' => 'page',
                            'object_id' => '{{contact}}',
                        ),
                    ),
                ),
            ),
        ));
    }
endif;
add_action('after_setup_theme', 'fl_coastal_prep_setup');

/**
 * Note: Block Patterns are automatically registered from the /patterns directory in WP 6.4+
 */

/**
 * SEO Optimization: Meta Tags & Open Graph
 */
function fl_coastal_prep_seo_meta()
{
    if (is_admin())
        return;

    // Check if common SEO plugins are active
    if (defined('WPSEO_VERSION') || class_exists('RankMath') || class_exists('AIOSEO_MAIN_TYPE')) {
        return;
    }

    global $post;
    $description = get_bloginfo('description');
    $image = get_header_image();
    $url = get_permalink();
    $title = get_the_title();

    if (is_singular()) {
        if (has_excerpt($post->ID)) {
            $description = wp_strip_all_tags(get_the_excerpt($post->ID));
        }
        if (has_post_thumbnail($post->ID)) {
            $image = get_the_post_thumbnail_url($post->ID, 'large');
        }
    }

    echo '<meta name="description" content="' . esc_attr($description) . '" />';
    echo "\n";
    echo '<meta property="og:title" content="' . esc_attr($title) . '" />';
    echo "\n";
    echo '<meta property="og:description" content="' . esc_attr($description) . '" />';
    echo "\n";
    echo '<meta property="og:type" content="website" />';
    echo "\n";
    echo '<meta property="og:url" content="' . esc_url($url) . '" />';
    echo "\n";
    if ($image) {
        echo '<meta property="og:image" content="' . esc_url($image) . '" />';
        echo "\n";
    }
}
add_action('wp_head', 'fl_coastal_prep_seo_meta', 1);

/**
 * SEO Optimization: JSON-LD Schema Markup
 */
function fl_coastal_prep_schema_markup()
{
    if (!is_front_page())
        return;

    $schema = array(
        "@context" => "https://schema.org",
        "@type" => "EducationalOrganization",
        "name" => get_bloginfo('name'),
        "url" => get_site_url(),
        "logo" => get_site_icon_url(),
        "description" => get_bloginfo('description'),
        "address" => array(
            "@type" => "PostalAddress",
            "streetAddress" => "100 Coastal Elite Dr.",
            "addressLocality" => "Miami",
            "addressRegion" => "FL",
            "postalCode" => "33101",
            "addressCountry" => "US"
        )
    );
    echo '<script type="application/ld+json">';
    echo json_encode($schema);
    echo '</script>';
    echo "\n";
}
add_action('wp_head', 'fl_coastal_prep_schema_markup');

/**
 * Register Custom Post Types
 */
function fl_coastal_prep_register_cpts()
{
    register_post_type('faculty', array(
        'labels' => array('name' => 'Faculty', 'singular_name' => 'Staff Member'),
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-groups',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'elementor'),
    ));

    register_post_type('program', array(
        'labels' => array('name' => 'Programs', 'singular_name' => 'Program'),
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'supports' => array('title', 'editor', 'thumbnail', 'elementor'),
    ));

    register_post_type('schedule', array(
        'labels' => array('name' => 'Schedule', 'singular_name' => 'Game'),
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-calendar-alt',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'elementor'),
    ));
}
add_action('init', 'fl_coastal_prep_register_cpts');

function fl_coastal_prep_scripts()
{
    wp_enqueue_style('fl-coastal-prep-style', get_stylesheet_uri(), array(), '1.5.0');
    wp_enqueue_style('fl-coastal-prep-fonts', 'https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@300;400;600;700&family=Oswald:wght@400;600;700&display=swap', array(), null);
    wp_enqueue_style('material-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), null);
}
add_action('wp_enqueue_scripts', 'fl_coastal_prep_scripts');
