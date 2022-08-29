<?php
/* Load Omega theme framework. */
require ( trailingslashit( get_template_directory() ) . 'lib/framework.php' );
new Omega();

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function omega_theme_setup() {

	//remove_theme_mods();

	/* Load omega functions */
	require get_template_directory() . '/lib/functions/hooks.php';

	add_theme_support( 'title-tag' ); 
	
	/* Load scripts. */
	add_theme_support( 
		'omega-scripts', 
		array( 'comment-reply' ) 
	);
	
	add_theme_support( 'post-thumbnails' );
	
	add_theme_support( 'omega-theme-settings' );

	add_theme_support( 'omega-content-archives' );
		
	/* implement editor styling, so as to make the editor content match the resulting post output in the theme. */
	add_editor_style();

	/* Support pagination instead of prev/next links. */
	add_theme_support( 'loop-pagination' );	

	/* Add default posts and comments RSS feed links to <head>.  */
	add_theme_support( 'automatic-feed-links' );

	/* Enable wraps */
	add_theme_support( 'omega-wraps' );

	/* Enable custom post */
	add_theme_support( 'omega-custom-post' );
	
	/* Enable custom css */
	add_theme_support( 'omega-custom-css' );
	
	/* Enable custom logo */
	add_theme_support( 'omega-custom-logo' );

	/* Enable child themes page */
	add_theme_support( 'omega-child-page' );

	add_theme_support( 'woocommerce' );

	/* Handle content width for embeds and images. */
	omega_set_content_width( 700 );

}


function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  
  wp_enqueue_style( 'vendor', get_template_directory_uri() . '/app/css/vendor.css', array(), '1.1', 'all');

  wp_enqueue_style( 'main', get_template_directory_uri() . '/app/css/main.css', array(), '1.1', 'all');
  
  wp_enqueue_script( 'script', get_template_directory_uri() . '/app/js/main.js', array ( 'jquery' ), 1.1, true);
  
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


add_action( 'after_setup_theme', 'omega_theme_setup' );