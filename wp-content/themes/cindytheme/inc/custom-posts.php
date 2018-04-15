<?php

// Custom Post Types

function create_testimonials() {
	register_post_type( 'testimonials',
			array(
			'labels' => array(
					'name' => __( 'Testimonials' ),
					'singular_name' => __( 'Testimonial' ),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array(
					'title',
					'editor',
					'thumbnail',
				  'custom-fields'
			)
	));
}
add_action( 'init', 'create_testimonials' );