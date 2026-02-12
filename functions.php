<?php
/**
 * Florida Coastal Prep functions and definitions
 *
 * @package Fl_Coastal_Prep
 * @since   1.0.0
 *
 * THEME ARCHITECTURE:
 * - WordPress Blocks (Gutenberg): Primary content editor for all post types
 * - Full Site Editing: Complete FSE block theme with templates and template parts
 * - Elementor: Optional page builder - users can choose between Gutenberg and Elementor
 *
 * CONTENT EDITING WORKFLOW:
 * - Pages/Posts: Edit with Gutenberg (Site Editor available) or Elementor (optional)
 * - Patterns: Defined as WordPress block patterns in /patterns/ directory
 * - Theme Structure: Header/Footer are block template parts in /parts/
 *
 * MODULE STRUCTURE:
 * - inc/setup.php        — Theme supports, menus, starter content
 * - inc/post-types.php   — Custom Post Types and registered meta fields
 * - inc/seo.php          — Meta tags, Open Graph, JSON-LD schema, Customizer settings
 * - inc/block-styles.php — Block pattern categories and custom block styles
 * - inc/security.php     — CSP headers and security hardening
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Load theme modules.
require get_template_directory() . '/inc/setup.php';
require get_template_directory() . '/inc/post-types.php';
require get_template_directory() . '/inc/seo.php';
require get_template_directory() . '/inc/block-styles.php';
require get_template_directory() . '/inc/security.php';

/**
 * Enqueue theme scripts and styles.
 */
function fl_coastal_prep_scripts() {
	$theme_version = wp_get_theme()->get( 'Version' );
	$theme_uri     = get_template_directory_uri();

	wp_enqueue_style( 'fl-coastal-prep-style', get_stylesheet_uri(), array(), $theme_version );

	// Conditionally enqueue animations only on pages that use animated patterns.
	if ( is_front_page() || is_page_template( 'page-programs' ) || is_singular() ) {
		wp_enqueue_style( 'fl-coastal-prep-animations', $theme_uri . '/assets/css/animations.css', array(), $theme_version );
	}
}
add_action( 'wp_enqueue_scripts', 'fl_coastal_prep_scripts' );

/**
 * Preload critical font files for faster rendering.
 *
 * Outputs <link rel="preload"> tags in <head> so the browser begins
 * downloading fonts before it encounters the @font-face rules from theme.json.
 */
function fl_coastal_prep_preload_fonts() {
	$theme_uri = get_template_directory_uri();
	$fonts     = array(
		'inter-v13-latin.woff2',
		'bebas-neue-v14-latin.woff2',
		'oswald-v53-latin.woff2',
	);

	foreach ( $fonts as $font ) {
		printf(
			'<link rel="preload" href="%s/assets/fonts/%s" as="font" type="font/woff2" crossorigin>' . "\n",
			esc_url( $theme_uri ),
			esc_attr( $font )
		);
	}
}
add_action( 'wp_head', 'fl_coastal_prep_preload_fonts', 0 );
