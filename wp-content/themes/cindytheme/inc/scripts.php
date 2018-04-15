<?php

// Add scripts and stylesheets
function cindytheme_scripts() {
	
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), '4.0.0' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css' );
	wp_enqueue_style( 'agency', get_template_directory_uri() . '/css/agency.min.css' );

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array( 'jquery' ), '4.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'cindytheme_scripts' );