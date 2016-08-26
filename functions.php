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

// Prevent TinyMCE from stripping out html
function schema_TinyMCE_init($in)
{
    /**
     *   Edit extended_valid_elements as needed. For syntax, see
     *   http://www.tinymce.com/wiki.php/Configuration:valid_elements
     *   https://www.tinymce.com/docs/configure/content-filtering/
     *
     *   NOTE: Adding an element to extended_valid_elements will cause TinyMCE to ignore
     *   default attributes for that element.
     *   Eg. a[title] would remove href unless included in new rule: a[title|href]
     */
    if(!empty($in['extended_valid_elements']))
        $in['extended_valid_elements'] .= ',';

    $in['extended_valid_elements'] .= 'div[id|style|title|itemscope|itemtype],';
    $in['extended_valid_elements'] .= 'img[class|src|alt|width|height|itemprop],';
    $in['extended_valid_elements'] .= 'span[itemprop],';
    $in['extended_valid_elements'] .= 'meta[itemprop]';

    return $in;
}
add_filter('tiny_mce_before_init', 'schema_TinyMCE_init' );

/*  Remove Hentry Classes
/* ------------------------------------ */
function remove_hentry( $classes ) {
    if( !is_single() ) {
        $classes = array_diff($classes, array('hentry'));
        return $classes;
    } else {
        return $classes;
    }
}
add_filter( 'post_class', 'remove_hentry' );

/*shows images to only the user who uploaded them*/
add_filter( 'posts_where', 'devplus_wpquery_where' );
function devplus_wpquery_where( $where ){
    global $current_user;

    if( is_user_logged_in() ){
         // logged in user, but are we viewing the library?
         if( isset( $_POST['action'] ) && ( $_POST['action'] == 'query-attachments' ) ){
            // here you can add some extra logic if you'd want to.
            $where .= ' AND post_author='.$current_user->data->ID;
        }
    }

    return $where;
}