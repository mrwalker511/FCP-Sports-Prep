<?php
/**
 * Theme Customizer for sitewide styling.
 *
 * @package Fl_Coastal_Prep
 * @since   1.1.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register Customizer settings.
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function fl_coastal_prep_design_customize_register($wp_customize)
{
    // Add Theme Design Section.
    $wp_customize->add_section('fl_coastal_prep_design', array(
        'title' => __('Theme Design (Sitewide)', 'fl-coastal-prep'),
        'description' => __('Adjust the core brand colors for the entire site. These will override the defaults set in theme.json.', 'fl-coastal-prep'),
        'priority' => 30,
    ));

    // Color settings.
    $colors = array(
        'primary' => array(
            'label' => __('Primary Brand Color (Gold)', 'fl-coastal-prep'),
            'default' => '#FBBF24',
        ),
        'secondary' => array(
            'label' => __('Secondary Brand Color (Navy)', 'fl-coastal-prep'),
            'default' => '#112240',
        ),
        'contrast' => array(
            'label' => __('Main Background Color (Deep Navy)', 'fl-coastal-prep'),
            'default' => '#0A192F',
        ),
        'base' => array(
            'label' => __('Main Text/Base Color (White)', 'fl-coastal-prep'),
            'default' => '#FFFFFF',
        ),
    );

    foreach ($colors as $id => $color) {
        $wp_customize->add_setting('fl_coastal_prep_' . $id . '_color', array(
            'default' => $color['default'],
            'sanitize_callback' => 'sanitize_hex_color',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'fl_coastal_prep_' . $id . '_color', array(
            'label' => $color['label'],
            'section' => 'fl_coastal_prep_design',
        )));
    }
}
add_action('customize_register', 'fl_coastal_prep_design_customize_register');

/**
 * Get cached customizer color values.
 *
 * Caches color theme mods in a transient to avoid 4 database calls on every page load.
 *
 * @return array Associative array of color values.
 */
function fl_coastal_prep_get_cached_colors()
{
    $cache_key = 'fcp_custom_colors';
    $colors = get_transient($cache_key);

    if (false === $colors) {
        $colors = array(
            'primary' => get_theme_mod('fl_coastal_prep_primary_color', '#FBBF24'),
            'secondary' => get_theme_mod('fl_coastal_prep_secondary_color', '#112240'),
            'contrast' => get_theme_mod('fl_coastal_prep_contrast_color', '#0A192F'),
            'base' => get_theme_mod('fl_coastal_prep_base_color', '#FFFFFF'),
        );
        set_transient($cache_key, $colors, WEEK_IN_SECONDS);
    }

    return $colors;
}

/**
 * Output Customizer CSS to override theme.json variables.
 */
function fl_coastal_prep_customizer_css()
{
    $colors = fl_coastal_prep_get_cached_colors();

    ?>
    <style id="fl-coastal-prep-customizer-css">
        :root {
            --wp--preset--color--primary: <?php echo esc_attr($colors['primary']); ?>;
            --wp--preset--color--secondary: <?php echo esc_attr($colors['secondary']); ?>;
            --wp--preset--color--contrast: <?php echo esc_attr($colors['contrast']); ?>;
            --wp--preset--color--base: <?php echo esc_attr($colors['base']); ?>;
        }

        /* Ensure editor styles also get the override if possible */
        .editor-styles-wrapper {
            --wp--preset--color--primary: <?php echo esc_attr($colors['primary']); ?>;
            --wp--preset--color--secondary: <?php echo esc_attr($colors['secondary']); ?>;
            --wp--preset--color--contrast: <?php echo esc_attr($colors['contrast']); ?>;
            --wp--preset--color--base: <?php echo esc_attr($colors['base']); ?>;
        }
    </style>
    <?php
}
add_action('wp_head', 'fl_coastal_prep_customizer_css', 100);
add_action('enqueue_block_editor_assets', 'fl_coastal_prep_customizer_css', 100);

/**
 * Invalidate color cache when Customizer settings are saved.
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function fl_coastal_prep_invalidate_color_cache($wp_customize)
{
    delete_transient('fcp_custom_colors');
}
add_action('customize_save_after', 'fl_coastal_prep_invalidate_color_cache');
