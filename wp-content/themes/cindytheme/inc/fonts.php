<?php

// Add Google Fonts
function cindytheme_google_fonts() {
	
	wp_register_style('Montserrat', 'http://fonts.googleapis.com/css?family=Montserrat:400,600,700,800');
	wp_enqueue_style( 'Montserrat');

	wp_register_style('KaushanScript', 'http://fonts.googleapis.com/css?family=Kaushan+Script:400,600,700,800');
	wp_enqueue_style( 'KaushanScript');

	wp_register_style('DroidSerif', 'http://fonts.googleapis.com/css?family=Droid+Serif:400,600,700,800');
	wp_enqueue_style( 'DroidSerif');

	wp_register_style('RobotoSlab', 'http://fonts.googleapis.com/css?family=Roboto+Slab:400,600,700,800');
	wp_enqueue_style( 'RobotoSlab');

}

add_action('wp_print_styles', 'cindytheme_google_fonts');