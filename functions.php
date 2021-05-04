<?php

function load_scripts(){



	wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.0.0', false);
	// wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js', array('jquery'), '2.9.1', false);
	// wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js', array('jquery'), '5.0.0	', false);
	wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/0de67d0bc0.js', array('jquery'), '1.0.0	', false);
	wp_enqueue_script('style', get_template_directory_uri(). '/js/style.js', array('jquery'), '1.0', false);



	wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css', array(), '5.0.0', 'all');
	wp_enqueue_style('template', get_template_directory_uri(). '/css/style.css', array(), '1.0', 'all');
	// wp_enqueue_style('template', get_template_directory_uri(). '/css/style.php', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'load_scripts');

function sohcondo_config(){

	add_theme_support( 'custom-logo', array(
		'height' => 44.47,
		'width'  => 98.19,
	) );

	register_nav_menus(
		array(
			'top_menu' => 'Main Menu Top',
			'bottom_menu' => 'Main Menu Bottom',
		)
	);


}
add_action( 'after_setup_theme' , 'sohcondo_config' , 0 );
