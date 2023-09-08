<?php
/**
 * Auto Machine Specialties functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Fresno_Swing_Dance
 */

 if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.1' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function auto_machine_specialties_setup(){
    /*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Fresno Swing Dance, use a find and replace
		* to change 'fresno-swing-dance' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'auto-machine-specialties', get_template_directory() . '/languages' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'auto_machine_specialties' );

/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', function(){
	wp_enqueue_style( 'auto-machine-specialties-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'auto-machine-specialties-style', 'rtl', 'replace' );
    wp_enqueue_script( 'auto-machine-specialties-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'font-awesome', 'https://kit.fontawesome.com/aebdbe8212.js', array(), _S_VERSION, true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
});