<?php

// Add scripts and stylesheets
function cindytheme_scripts() {
	
	// css
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), '4.0.0' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css' );
	wp_enqueue_style( 'agency', get_template_directory_uri() . '/css/agency.min.css' );

	// js
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array( 'jquery' ), '3.3.1', true );
	wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', null, '', true );
	wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/vendor/jquery-easing/jquery.easing.min.js', null, '', true );
	wp_enqueue_script( 'bootstrap-validation', get_template_directory_uri() . '/js/jqBootstrapValidation.js', null, '', true );
	//wp_enqueue_script( 'contact-me', get_template_directory_uri() . '/js/contact_me.js', null, '', true );
	wp_enqueue_script( 'agency', get_template_directory_uri() . '/js/agency.min.js', null, '', true );
	
}

add_action( 'wp_enqueue_scripts', 'cindytheme_scripts' );