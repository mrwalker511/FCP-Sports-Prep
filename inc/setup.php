<?php
/**
 * Theme setup and configuration.
 *
 * @package Fl_Coastal_Prep
 * @since   2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'fl_coastal_prep_setup' ) ) :
	function fl_coastal_prep_setup() {
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'editor-styles' );
		add_editor_style( 'style.css' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'html5', array(
			'comment-list',
			'comment-form',
			'search-form',
			'gallery',
			'caption',
			'style',
			'script',
		) );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'custom-logo', array(
			'height'               => 100,
			'width'                => 400,
			'flex-height'          => true,
			'flex-width'           => true,
			'header-text'          => array( 'site-title', 'site-description' ),
			'unlink-homepage-logo' => true,
		) );
		add_theme_support( 'block-template-parts' );

		// Elementor Support (Optional)
		add_theme_support( 'elementor' );
		add_theme_support( 'elementor-experimental' );
		add_theme_support( 'elementor-default-skin' );
		add_theme_support( 'elementor-pro' );

		// Register navigation menus.
		register_nav_menus( array(
			'primary' => __( 'Primary Navigation', 'fl-coastal-prep' ),
			'footer'  => __( 'Footer Navigation', 'fl-coastal-prep' ),
			'legal'   => __( 'Legal Navigation', 'fl-coastal-prep' ),
		) );

		// Starter Content
		add_theme_support( 'starter-content', array(
			'nav_menus' => array(
				'primary' => array(
					'name'  => __( 'Primary Navigation', 'fl-coastal-prep' ),
					'items' => array(
						'page_programs' => array(
							'type'      => 'post_type',
							'object'    => 'page',
							'object_id' => '{{programs}}',
						),
						'page_faculty'  => array(
							'type'      => 'post_type',
							'object'    => 'page',
							'object_id' => '{{faculty}}',
						),
						'page_campus'   => array(
							'type'      => 'post_type',
							'object'    => 'page',
							'object_id' => '{{campus}}',
						),
						'page_schedule' => array(
							'type'      => 'post_type',
							'object'    => 'page',
							'object_id' => '{{schedule}}',
						),
						'page_news'     => array(
							'type'      => 'post_type',
							'object'    => 'page',
							'object_id' => '{{news}}',
						),
						'page_contact'  => array(
							'type'      => 'post_type',
							'object'    => 'page',
							'object_id' => '{{contact}}',
						),
					),
				),
				'footer'  => array(
					'name'  => __( 'Footer Navigation', 'fl-coastal-prep' ),
					'items' => array(
						'page_programs' => array(
							'type'      => 'post_type',
							'object'    => 'page',
							'object_id' => '{{programs}}',
						),
						'page_faculty'  => array(
							'type'      => 'post_type',
							'object'    => 'page',
							'object_id' => '{{faculty}}',
						),
						'page_campus'   => array(
							'type'      => 'post_type',
							'object'    => 'page',
							'object_id' => '{{campus}}',
						),
						'page_donors'   => array(
							'type'      => 'post_type',
							'object'    => 'page',
							'object_id' => '{{donors}}',
						),
						'page_apply'    => array(
							'type'      => 'post_type',
							'object'    => 'page',
							'object_id' => '{{apply}}',
						),
					),
				),
				'legal'   => array(
					'name'  => __( 'Legal Navigation', 'fl-coastal-prep' ),
					'items' => array(
						'page_privacy' => array(
							'type'      => 'post_type',
							'object'    => 'page',
							'object_id' => '{{privacy-policy}}',
						),
						'page_terms'   => array(
							'type'      => 'post_type',
							'object'    => 'page',
							'object_id' => '{{terms-of-service}}',
						),
					),
				),
			),
			'posts'   => array(
				'home'     => array(
					'post_type'  => 'page',
					'post_title' => _x( 'Home', 'Theme starter content', 'fl-coastal-prep' ),
					'content'    => '<!-- wp:pattern {"slug":"fl-coastal-prep/hero"} /-->
<!-- wp:pattern {"slug":"fl-coastal-prep/stats"} /-->
<!-- wp:pattern {"slug":"fl-coastal-prep/blueprint-gallery"} /-->
<!-- wp:pattern {"slug":"fl-coastal-prep/grid"} /-->
<!-- wp:pattern {"slug":"fl-coastal-prep/cta"} /-->',
					'template'   => 'front-page',
				),
				'programs' => array(
					'post_type'  => 'page',
					'post_title' => _x( 'Programs', 'Theme starter content', 'fl-coastal-prep' ),
					'content'    => '<!-- wp:pattern {"slug":"fl-coastal-prep/programs-hero"} /-->
<!-- wp:pattern {"slug":"fl-coastal-prep/programs-detail"} /-->',
					'template'   => 'page-programs',
				),
				'faculty'  => array(
					'post_type'  => 'page',
					'post_title' => _x( 'Faculty & Staff', 'Theme starter content', 'fl-coastal-prep' ),
					'content'    => '<!-- wp:pattern {"slug":"fl-coastal-prep/section-header"} /-->
<!-- wp:pattern {"slug":"fl-coastal-prep/faculty-grid"} /-->',
					'template'   => 'page-faculty',
				),
				'campus'   => array(
					'post_type'  => 'page',
					'post_title' => _x( 'Campus', 'Theme starter content', 'fl-coastal-prep' ),
					'content'    => '<!-- wp:pattern {"slug":"fl-coastal-prep/campus-showcase"} /-->',
				),
				'contact'  => array(
					'post_type'  => 'page',
					'post_title' => _x( 'Contact', 'Theme starter content', 'fl-coastal-prep' ),
					'content'    => '<!-- wp:pattern {"slug":"fl-coastal-prep/contact-form"} /-->',
				),
				'apply'    => array(
					'post_type'  => 'page',
					'post_title' => _x( 'Apply Now', 'Theme starter content', 'fl-coastal-prep' ),
					'content'    => '<!-- wp:pattern {"slug":"fl-coastal-prep/apply-form"} /-->',
				),
				'donors'   => array(
					'post_type'  => 'page',
					'post_title' => _x( 'Donors', 'Theme starter content', 'fl-coastal-prep' ),
					'content'    => '<!-- wp:pattern {"slug":"fl-coastal-prep/donors-showcase"} /-->',
				),
				'news'     => array(
					'post_type'  => 'page',
					'post_title' => _x( 'News', 'Theme starter content', 'fl-coastal-prep' ),
					'content'    => '<!-- wp:pattern {"slug":"fl-coastal-prep/news-archive"} /-->',
				),
				'schedule' => array(
					'post_type'  => 'page',
					'post_title' => _x( 'Schedule', 'Theme starter content', 'fl-coastal-prep' ),
					'content'    => '<!-- wp:pattern {"slug":"fl-coastal-prep/schedule-results"} /-->',
				),
				'privacy-policy'   => array(
					'post_type'  => 'page',
					'post_title' => _x( 'Privacy Policy', 'Theme starter content', 'fl-coastal-prep' ),
				),
				'terms-of-service' => array(
					'post_type'  => 'page',
					'post_title' => _x( 'Terms of Service', 'Theme starter content', 'fl-coastal-prep' ),
				),
			),
			'options' => array(
				'show_on_front'    => 'page',
				'page_on_front'    => '{{home}}',
				'blogdescription'  => _x( 'The Future of Elite Ball', 'Theme starter content', 'fl-coastal-prep' ),
			),
		) );
	}
endif;
add_action( 'after_setup_theme', 'fl_coastal_prep_setup' );
