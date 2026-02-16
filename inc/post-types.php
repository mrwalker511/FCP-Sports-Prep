<?php
/**
 * Custom Post Type registration.
 *
 * @package Fl_Coastal_Prep
 * @since   1.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register Custom Post Types.
 */
function fl_coastal_prep_register_cpts() {
	register_post_type( 'faculty', array(
		'labels'        => array(
			'name'                  => _x( 'Faculty', 'Post type general name', 'fl-coastal-prep' ),
			'singular_name'         => _x( 'Staff Member', 'Post type singular name', 'fl-coastal-prep' ),
			'add_new'               => _x( 'Add New', 'faculty', 'fl-coastal-prep' ),
			'add_new_item'          => __( 'Add New Staff Member', 'fl-coastal-prep' ),
			'edit_item'             => __( 'Edit Staff Member', 'fl-coastal-prep' ),
			'new_item'              => __( 'New Staff Member', 'fl-coastal-prep' ),
			'view_item'             => __( 'View Staff Member', 'fl-coastal-prep' ),
			'search_items'          => __( 'Search Faculty', 'fl-coastal-prep' ),
			'not_found'             => __( 'No faculty members found.', 'fl-coastal-prep' ),
			'not_found_in_trash'    => __( 'No faculty members found in Trash.', 'fl-coastal-prep' ),
			'all_items'             => __( 'All Faculty', 'fl-coastal-prep' ),
			'archives'              => __( 'Faculty Archives', 'fl-coastal-prep' ),
			'insert_into_item'      => __( 'Insert into staff member', 'fl-coastal-prep' ),
			'uploaded_to_this_item' => __( 'Uploaded to this staff member', 'fl-coastal-prep' ),
		),
		'public'        => true,
		'has_archive'   => true,
		'show_in_rest'  => true,
		'menu_icon'     => 'dashicons-groups',
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'template'      => array(
			array( 'core/post-featured-image' ),
			array( 'core/post-title' ),
			array( 'core/post-content' ),
		),
		'template_lock' => false,
	) );

	register_post_type( 'program', array(
		'labels'        => array(
			'name'                  => _x( 'Programs', 'Post type general name', 'fl-coastal-prep' ),
			'singular_name'         => _x( 'Program', 'Post type singular name', 'fl-coastal-prep' ),
			'add_new'               => _x( 'Add New', 'program', 'fl-coastal-prep' ),
			'add_new_item'          => __( 'Add New Program', 'fl-coastal-prep' ),
			'edit_item'             => __( 'Edit Program', 'fl-coastal-prep' ),
			'new_item'              => __( 'New Program', 'fl-coastal-prep' ),
			'view_item'             => __( 'View Program', 'fl-coastal-prep' ),
			'search_items'          => __( 'Search Programs', 'fl-coastal-prep' ),
			'not_found'             => __( 'No programs found.', 'fl-coastal-prep' ),
			'not_found_in_trash'    => __( 'No programs found in Trash.', 'fl-coastal-prep' ),
			'all_items'             => __( 'All Programs', 'fl-coastal-prep' ),
			'archives'              => __( 'Program Archives', 'fl-coastal-prep' ),
		),
		'public'        => true,
		'has_archive'   => true,
		'show_in_rest'  => true,
		'menu_icon'     => 'dashicons-welcome-learn-more',
		'supports'      => array( 'title', 'editor', 'thumbnail' ),
		'template'      => array(
			array( 'core/post-featured-image' ),
			array( 'core/post-title' ),
			array( 'core/post-content' ),
		),
		'template_lock' => false,
	) );

	register_post_type( 'schedule', array(
		'labels'        => array(
			'name'                  => _x( 'Schedule', 'Post type general name', 'fl-coastal-prep' ),
			'singular_name'         => _x( 'Game', 'Post type singular name', 'fl-coastal-prep' ),
			'add_new'               => _x( 'Add New', 'schedule', 'fl-coastal-prep' ),
			'add_new_item'          => __( 'Add New Game', 'fl-coastal-prep' ),
			'edit_item'             => __( 'Edit Game', 'fl-coastal-prep' ),
			'new_item'              => __( 'New Game', 'fl-coastal-prep' ),
			'view_item'             => __( 'View Game', 'fl-coastal-prep' ),
			'search_items'          => __( 'Search Games', 'fl-coastal-prep' ),
			'not_found'             => __( 'No games found.', 'fl-coastal-prep' ),
			'not_found_in_trash'    => __( 'No games found in Trash.', 'fl-coastal-prep' ),
			'all_items'             => __( 'All Games', 'fl-coastal-prep' ),
			'archives'              => __( 'Schedule Archives', 'fl-coastal-prep' ),
		),
		'public'        => true,
		'has_archive'   => true,
		'show_in_rest'  => true,
		'menu_icon'     => 'dashicons-calendar-alt',
		'supports'      => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'template'      => array(
			array( 'core/post-featured-image' ),
			array( 'core/post-title' ),
			array( 'core/post-content' ),
		),
		'template_lock' => false,
	) );

	register_post_type( 'donor', array(
		'labels'        => array(
			'name'                  => _x( 'Donors', 'Post type general name', 'fl-coastal-prep' ),
			'singular_name'         => _x( 'Donor', 'Post type singular name', 'fl-coastal-prep' ),
			'add_new'               => _x( 'Add New', 'donor', 'fl-coastal-prep' ),
			'add_new_item'          => __( 'Add New Donor', 'fl-coastal-prep' ),
			'edit_item'             => __( 'Edit Donor', 'fl-coastal-prep' ),
			'new_item'              => __( 'New Donor', 'fl-coastal-prep' ),
			'view_item'             => __( 'View Donor', 'fl-coastal-prep' ),
			'search_items'          => __( 'Search Donors', 'fl-coastal-prep' ),
			'not_found'             => __( 'No donors found.', 'fl-coastal-prep' ),
			'not_found_in_trash'    => __( 'No donors found in Trash.', 'fl-coastal-prep' ),
			'all_items'             => __( 'All Donors', 'fl-coastal-prep' ),
			'archives'              => __( 'Donor Archives', 'fl-coastal-prep' ),
		),
		'public'        => true,
		'has_archive'   => true,
		'show_in_rest'  => true,
		'menu_icon'     => 'dashicons-heart',
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
		'taxonomies'    => array( 'donor_tier' ),
		'template'      => array(
			array( 'core/post-featured-image' ),
			array( 'core/post-title' ),
			array( 'core/post-content' ),
		),
		'template_lock' => false,
	) );

	// Enable Elementor on all core post types (runs after WP core registers them).
	add_post_type_support( 'page', 'elementor' );
	add_post_type_support( 'post', 'elementor' );
	add_post_type_support( 'faculty', 'elementor' );
	add_post_type_support( 'program', 'elementor' );
	add_post_type_support( 'schedule', 'elementor' );
	add_post_type_support( 'donor', 'elementor' );
}
add_action( 'init', 'fl_coastal_prep_register_cpts' );

/**
 * Register post meta fields with sanitize callbacks for the Schedule CPT.
 *
 * This ensures any meta saved via the REST API is properly sanitized.
 */
function fl_coastal_prep_register_post_meta() {
	register_post_meta( 'schedule', 'game_date', array(
		'show_in_rest'      => true,
		'single'            => true,
		'type'              => 'string',
		'sanitize_callback' => 'sanitize_text_field',
		'auth_callback'     => function () {
			return current_user_can( 'edit_posts' );
		},
	) );

	register_post_meta( 'schedule', 'opponent', array(
		'show_in_rest'      => true,
		'single'            => true,
		'type'              => 'string',
		'sanitize_callback' => 'sanitize_text_field',
		'auth_callback'     => function () {
			return current_user_can( 'edit_posts' );
		},
	) );

	register_post_meta( 'schedule', 'location', array(
		'show_in_rest'      => true,
		'single'            => true,
		'type'              => 'string',
		'sanitize_callback' => 'sanitize_text_field',
		'auth_callback'     => function () {
			return current_user_can( 'edit_posts' );
		},
	) );

	register_post_meta( 'schedule', 'score_home', array(
		'show_in_rest'      => true,
		'single'            => true,
		'type'              => 'integer',
		'sanitize_callback' => 'absint',
		'auth_callback'     => function () {
			return current_user_can( 'edit_posts' );
		},
	) );

	register_post_meta( 'schedule', 'score_away', array(
		'show_in_rest'      => true,
		'single'            => true,
		'type'              => 'integer',
		'sanitize_callback' => 'absint',
		'auth_callback'     => function () {
			return current_user_can( 'edit_posts' );
		},
	) );

	register_post_meta( 'schedule', 'game_result', array(
		'show_in_rest'      => true,
		'single'            => true,
		'type'              => 'string',
		'sanitize_callback' => function ( $value ) {
			$allowed = array( 'win', 'loss', 'draw', 'upcoming' );
			return in_array( $value, $allowed, true ) ? $value : 'upcoming';
		},
		'auth_callback'     => function () {
			return current_user_can( 'edit_posts' );
		},
	) );
}
add_action( 'init', 'fl_coastal_prep_register_post_meta' );
