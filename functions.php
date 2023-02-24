<?php

require_once('includes/ajax-contact.php');
require_once('includes/ajax-postcodes.php');

function enqueue_styles() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style( 'footer-styles', get_template_directory_uri() . '/styles/footer.css');
    wp_enqueue_style( 'image-and-text', get_template_directory_uri() . '/styles/image-and-text.css');
    wp_enqueue_style( 'testimonial-slider', get_template_directory_uri() . '/styles/slider.css');
	wp_enqueue_style( 'hero', get_template_directory_uri() . '/styles/hero.css');
	wp_enqueue_style( 'grid', get_template_directory_uri() . '/styles/grid.css');
}


add_action( 'wp_enqueue_scripts', 'enqueue_styles' );

function enqueue_scripts() {
	wp_enqueue_script('quotes', get_template_directory_uri() . '/scripts/slider.js', array(), false, true);
	wp_enqueue_script('postcodes', get_template_directory_uri() . '/scripts/postcode.js', array(), false, true);
	wp_enqueue_script('contact', get_template_directory_uri() . '/scripts/contact.js', array(), false, true);
	wp_enqueue_script('grid', get_template_directory_uri() . '/scripts/grid.js', array(), false, true);
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Global Fields',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));	
}

add_action( 'send_headers', 'send_frame_options_header', 10, 0 );
?>