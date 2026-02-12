<?php
/**
 * Block pattern categories and custom block styles.
 *
 * @package Fl_Coastal_Prep
 * @since   1.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

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
