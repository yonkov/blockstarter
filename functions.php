<?php
/**
 * Blockstarter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Blockstarter
 */

function blockstarter_setup() {

	// Make theme available for translation.
	load_theme_textdomain( 'blockstarter', get_template_directory() . '/languages' );

	// Add theme support
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'html5', array( 'comment-form', 'comment-list' ) );
	add_theme_support( 'responsive-embeds' );
}
add_action( 'after_setup_theme', 'blockstarter_setup' );

/**
 * Enqueue scripts and styles
 */
function blockstarter_scripts() {
	$version = wp_get_theme( 'blockstarter' )->get( 'Version' );
	// Stylesheet
	wp_enqueue_style( 'blockstarter-styles', get_theme_file_uri( '/style.css' ), array(), $version );

	if ( is_rtl() ) {
		wp_enqueue_style( 'rtl-css', get_template_directory_uri() . '/assets/css/rtl.css', 'rtl_css' );
	}
}
add_action( 'wp_enqueue_scripts', 'blockstarter_scripts' );

// Add scripts and styles to the frontend and to the block editor at the same time
function blockstarter_block_scripts() {
	wp_enqueue_style( 'blockstarter-block-styles', get_template_directory_uri() . '/assets/css/core-add.css', '', filemtime( get_template_directory() . '/assets/css/core-add.css' ), 'all' );
}
add_action( 'enqueue_block_assets', 'blockstarter_block_scripts' );

function blockstarter_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'blockstarter_excerpt_length' );

/** Add default theme logo if no logo is specified */
function blockstarter_get_custom_logo_callback( $html ) {
    if ( has_custom_logo() ) {
        return $html;
    } else {
        return '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/logo.png">';
    }
}

add_filter( 'get_custom_logo', 'blockstarter_get_custom_logo_callback' );


/**
 * Registers block patterns categories, and type.
 */

 function blockstarter_register_block_patterns() {
	$block_pattern_categories = array(
		'blockstarter' => array( 'label' => esc_html__( 'Blockstarter', 'blockstarter' ) ),
	);

	$block_pattern_categories = apply_filters( 'blockstarter_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}

add_action( 'init', 'blockstarter_register_block_patterns', 9 );

/* Add custom body class based on style variation */
function blockstarter_body_classes( $classes ) {
	$variation_class = wp_get_global_settings( array( 'custom', 'variation' ) );
	$classes[] = 'variation-' . $variation_class;

	return $classes;
}
add_filter( 'body_class','blockstarter_body_classes' );