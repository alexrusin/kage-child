<?php

function kage_child_setup(){
	load_child_theme_textdomain('kage-child', get_stylesheet_directory().'/languages');

}

add_action('after_setup_theme', 'kage_child_setup');

function kage_child_enqueue_scripts(){
	
	wp_enqueue_script( 'script-name', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '3.3.7', true );
}
add_action('wp_enqueue_scripts', 'kage_child_enqueue_scripts');