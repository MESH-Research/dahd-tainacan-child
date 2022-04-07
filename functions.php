<?php

/**
 * Enqueue DAHD styles
 */
function enqueue_dahd_style() {
	wp_enqueue_style( 
		'dahd-tainacan',
		get_template_directory_uri() . '/style.css',
		[],
		filemtime( get_template_directory() . '/style.css' ),
		false
	);
}
add_action( 'wp_enqueue_scripts', 'enqueue_dahd_style' );