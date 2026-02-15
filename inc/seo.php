<?php
/**
 * SEO meta tags, Open Graph, and structured data.
 *
 * @package Fl_Coastal_Prep
 * @since   1.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * SEO Optimization: Meta Tags & Open Graph
 *
 * Outputs basic meta description and Open Graph tags.
 * Automatically defers to popular SEO plugins when detected.
 */
function fl_coastal_prep_seo_meta() {
	if ( is_admin() ) {
		return;
	}

	// Check if common SEO plugins are active (cached in static variable).
	static $has_seo_plugin = null;
	if ( null === $has_seo_plugin ) {
		$has_seo_plugin = defined( 'WPSEO_VERSION' ) || class_exists( 'RankMath' ) || class_exists( 'AIOSEO_MAIN_TYPE' );
	}
	if ( $has_seo_plugin ) {
		return;
	}

	$description = get_bloginfo( 'description' );
	$image       = get_header_image();
	$url         = home_url( '/' );
	$title       = wp_get_document_title();

	if ( is_singular() ) {
		$post_obj = get_queried_object();
		if ( $post_obj instanceof WP_Post ) {
			if ( has_excerpt( $post_obj->ID ) ) {
				$description = wp_strip_all_tags( get_the_excerpt( $post_obj->ID ) );
			}
			if ( has_post_thumbnail( $post_obj->ID ) ) {
				$image = get_the_post_thumbnail_url( $post_obj->ID, 'large' );
			}
			$url = get_permalink( $post_obj->ID );
		}
	}

	echo '<meta name="description" content="' . esc_attr( $description ) . '" />' . "\n";
	echo '<meta property="og:title" content="' . esc_attr( $title ) . '" />' . "\n";
	echo '<meta property="og:description" content="' . esc_attr( $description ) . '" />' . "\n";
	echo '<meta property="og:type" content="website" />' . "\n";
	echo '<meta property="og:url" content="' . esc_url( $url ) . '" />' . "\n";
	if ( $image ) {
		echo '<meta property="og:image" content="' . esc_url( $image ) . '" />' . "\n";
	}
}
add_action( 'wp_head', 'fl_coastal_prep_seo_meta', 1 );

/**
 * SEO Optimization: JSON-LD Schema Markup
 *
 * Outputs structured data for the front page only.
 * Address fields are configurable via the Customizer.
 */
function fl_coastal_prep_schema_markup() {
	if ( ! is_front_page() ) {
		return;
	}

	$schema = array(
		'@context'    => 'https://schema.org',
		'@type'       => 'EducationalOrganization',
		'name'        => get_bloginfo( 'name' ),
		'url'         => get_site_url(),
		'logo'        => get_site_icon_url(),
		'description' => get_bloginfo( 'description' ),
		'address'     => array(
			'@type'           => 'PostalAddress',
			'streetAddress'   => get_theme_mod( 'fl_coastal_prep_street', '100 Coastal Elite Dr.' ),
			'addressLocality' => get_theme_mod( 'fl_coastal_prep_city', 'Miami' ),
			'addressRegion'   => get_theme_mod( 'fl_coastal_prep_state', 'FL' ),
			'postalCode'      => get_theme_mod( 'fl_coastal_prep_zip', '33101' ),
			'addressCountry'  => get_theme_mod( 'fl_coastal_prep_country', 'US' ),
		),
	);

	echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES ) . '</script>' . "\n";
}
add_action( 'wp_head', 'fl_coastal_prep_schema_markup' );

/**
 * Register Customizer settings for schema address fields.
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function fl_coastal_prep_customize_register( $wp_customize ) {
	$wp_customize->add_section( 'fl_coastal_prep_schema', array(
		'title'    => __( 'Organization Address (Schema)', 'fl-coastal-prep' ),
		'priority' => 160,
	) );

	$address_fields = array(
		'fl_coastal_prep_street'  => array(
			'label'   => __( 'Street Address', 'fl-coastal-prep' ),
			'default' => '100 Coastal Elite Dr.',
		),
		'fl_coastal_prep_city'    => array(
			'label'   => __( 'City', 'fl-coastal-prep' ),
			'default' => 'Miami',
		),
		'fl_coastal_prep_state'   => array(
			'label'   => __( 'State', 'fl-coastal-prep' ),
			'default' => 'FL',
		),
		'fl_coastal_prep_zip'     => array(
			'label'   => __( 'Postal Code', 'fl-coastal-prep' ),
			'default' => '33101',
		),
		'fl_coastal_prep_country' => array(
			'label'   => __( 'Country Code', 'fl-coastal-prep' ),
			'default' => 'US',
		),
	);

	foreach ( $address_fields as $id => $field ) {
		$wp_customize->add_setting( $id, array(
			'default'           => $field['default'],
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'postMessage',
		) );
		$wp_customize->add_control( $id, array(
			'label'   => $field['label'],
			'section' => 'fl_coastal_prep_schema',
			'type'    => 'text',
		) );
	}
}
add_action( 'customize_register', 'fl_coastal_prep_customize_register' );
