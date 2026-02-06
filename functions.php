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

		// Full Site Editing Support
		add_theme_support( 'block-templates' );
		add_theme_support( 'block-template-parts' );

		// Elementor Support (Optional)
		add_theme_support( 'elementor' );
		add_theme_support( 'elementor-experimental' );
		add_theme_support( 'elementor-default-skin' );
		add_theme_support( 'elementor-pro' );

		// Starter Content
		add_theme_support( 'starter-content', array(
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

	// Check if common SEO plugins are active.
	if ( defined( 'WPSEO_VERSION' ) || class_exists( 'RankMath' ) || class_exists( 'AIOSEO_MAIN_TYPE' ) ) {
		return;
	}

	$description = get_bloginfo( 'description' );
	$image       = get_header_image();
	$url         = home_url( add_query_arg( array(), '' ) );
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
			'streetAddress'   => '100 Coastal Elite Dr.',
			'addressLocality' => 'Miami',
			'addressRegion'   => 'FL',
			'postalCode'      => '33101',
			'addressCountry'  => 'US',
		),
	);

	echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES ) . '</script>' . "\n";
}
add_action( 'wp_head', 'fl_coastal_prep_schema_markup' );

/**
 * Register Custom Post Types
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

	// Enable Elementor on all core post types (runs after WP core registers them).
	add_post_type_support( 'page', 'elementor' );
	add_post_type_support( 'post', 'elementor' );
	add_post_type_support( 'faculty', 'elementor' );
	add_post_type_support( 'program', 'elementor' );
	add_post_type_support( 'schedule', 'elementor' );
}
add_action( 'init', 'fl_coastal_prep_register_cpts' );

/**
 * Register block pattern categories.
 */
function fl_coastal_prep_register_pattern_categories() {
	register_block_pattern_category( 'fl-coastal-prep', array(
		'label' => __( 'Florida Coastal Prep', 'fl-coastal-prep' ),
	) );
}
add_action( 'init', 'fl_coastal_prep_register_pattern_categories' );

/**
 * Register Block Styles.
 */
function fl_coastal_prep_register_block_styles() {
	register_block_style( 'core/button', array(
		'name'  => 'outline-gold',
		'label' => __( 'Outline Gold', 'fl-coastal-prep' ),
	) );

	register_block_style( 'core/group', array(
		'name'  => 'glassmorphism',
		'label' => __( 'Glassmorphism', 'fl-coastal-prep' ),
	) );

	register_block_style( 'core/group', array(
		'name'  => 'grid-background',
		'label' => __( 'Grid Background', 'fl-coastal-prep' ),
	) );

	register_block_style( 'core/heading', array(
		'name'  => 'blueprint',
		'label' => __( 'Blueprint', 'fl-coastal-prep' ),
	) );

	// Animation Styles.
	register_block_style( 'core/group', array(
		'name'  => 'animate-fade-in-up',
		'label' => __( 'Animate: Fade In Up', 'fl-coastal-prep' ),
	) );

	register_block_style( 'core/column', array(
		'name'  => 'animate-fade-in-up',
		'label' => __( 'Animate: Fade In Up', 'fl-coastal-prep' ),
	) );

	register_block_style( 'core/image', array(
		'name'  => 'animate-slide-in',
		'label' => __( 'Animate: Slide In', 'fl-coastal-prep' ),
	) );
}
add_action( 'init', 'fl_coastal_prep_register_block_styles' );

/**
 * Enqueue theme scripts and styles.
 */
function fl_coastal_prep_scripts() {
	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'fl-coastal-prep-style', get_stylesheet_uri(), array(), $theme_version );
	wp_enqueue_style( 'fl-coastal-prep-animations', get_template_directory_uri() . '/assets/css/animations.css', array(), $theme_version );
	wp_enqueue_style( 'material-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), null );
}
add_action( 'wp_enqueue_scripts', 'fl_coastal_prep_scripts' );
