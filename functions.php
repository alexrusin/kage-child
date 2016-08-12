<?php

function kage_child_setup(){
	load_child_theme_textdomain('kage-child', get_stylesheet_directory().'/languages');

}

add_action('after_setup_theme', 'kage_child_setup');

function kage_child_enqueue_scripts(){
	
	wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '3.3.7', true );
	wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', false, '3.3.7', 'screen');
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', false, '1.0', 'all' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', false, '1.0', 'all' );
}
add_action('wp_enqueue_scripts', 'kage_child_enqueue_scripts');