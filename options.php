<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet
	$themename = wp_get_theme();
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'options_framework_theme'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	// If using image radio buttons, define a directory path
	$set_year = date('Y');
	$options = array();

	/* General Settings */	
	
	$options[] = array(
		'name' => __('General Settings', 'options_framework_theme'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Header Logo Text', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'header_logo_text1',
		'std' => '',
		'type' => 'text');	

	$options[] = array(
		'name' => __('Header Logo Text 2', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'header_logo_text2',
		'std' => '',
		'type' => 'text');			
		
	$options[] = array(
		'name' => __('Header Logo Image', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'logo_image',
		'type' => 'upload');
		
	$options[] = array(
		'name' => __('Fav Icon URL', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'fav_icon',
		'type' => 'upload');

	$options[] = array(
		'name' => __('Web Clip Icon URL', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'web_clip',
		'type' => 'upload');

	$options[] = array(
		'name' => __('Header Phone', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'header_phone',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Header Email', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'header_email',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Footer copyright text left', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'footer_text_left',
		'std' => 'Copyright &copy; '.$set_year.' '.get_bloginfo('name'),
		'type' => 'text');
			
	$options[] = array(
		'name' => __('Enter your custom CSS styles.', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'custom_css_styles',
		'std' => '',
		'type' => 'textarea');		

	$options[] = array(
		'name' => __('Home Page', 'options_framework_theme'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Top Image', 'options_framework_theme'),
		'desc' => __('Recommended image sizes 1450 X 500', 'options_framework_theme'),
		'id' => 'top_image',
		'type' => 'upload');
		
	$options[] = array(
		'name' => __('Top Title', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'top_title',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Top Box 1 Icon', 'options_framework_theme'),
		'desc' => __('Recommended image sizes 140 X 140', 'options_framework_theme'),
		'id' => 'top_box_1_icon',
		'type' => 'upload');		
		
	$options[] = array(
		'name' => __('Top Box 1 Title', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'top_box_1_title',
		'type' => 'text');	

	$options[] = array(
		'name' => __('Top Box 1 Link', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'top_box_1_link',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Top Box 1 Content', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'top_box_1_content',
		'type' => 'textarea');
		
	$options[] = array(
		'name' => __('Top Box 2 Icon', 'options_framework_theme'),
		'desc' => __('Recommended image sizes 140 X 140', 'options_framework_theme'),
		'id' => 'top_box_2_icon',
		'type' => 'upload');			
		
	$options[] = array(
		'name' => __('Top Box 2 Title', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'top_box_2_title',
		'type' => 'text');	

	$options[] = array(
		'name' => __('Top Box 2 Link', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'top_box_2_link',
		'type' => 'text');			
		
	$options[] = array(
		'name' => __('Top Box 2 Content', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'top_box_2_content',
		'type' => 'textarea');	

	$options[] = array(
		'name' => __('Top Box 3 Icon', 'options_framework_theme'),
		'desc' => __('Recommended image sizes 140 X 140', 'options_framework_theme'),
		'id' => 'top_box_3_icon',
		'type' => 'upload');				
		
	$options[] = array(
		'name' => __('Top Box 3 Title', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'top_box_3_title',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Top Box 3 Link', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'top_box_3_link',
		'type' => 'text');		
		
	$options[] = array(
		'name' => __('Top Box 3 Content', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'top_box_3_content',
		'type' => 'textarea');		

	$options[] = array(
		'name' => __('Top Box 4 Icon', 'options_framework_theme'),
		'desc' => __('Recommended image sizes 140 X 140', 'options_framework_theme'),
		'id' => 'top_box_4_icon',
		'type' => 'upload');				
		
	$options[] = array(
		'name' => __('Top Box 4 Title', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'top_box_4_title',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Top Box 4 Link', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'top_box_4_link',
		'type' => 'text');		
		
	$options[] = array(
		'name' => __('Top Box 4 Content', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'top_box_4_content',
		'type' => 'textarea');			
		
	$options[] = array(
		'name' => __('Blue Title', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'blue_title',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Blue Content', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'blue_content',
		'std' => '',
		'type' => 'textarea');	
		
	$options[] = array(
		'name' => __('Blue Button Text', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'blue_button_text',
		'std' => 'Click Here',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Blue Button Link', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'blue_button_link',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Welcome Image', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'welcome_image',
		'type' => 'upload');
	$options[] = array(
		'name' => __('Welcome Video Link', 'options_framework_theme'),
		'desc' => __('Note: if both Welcome Image and Welcome Video are selected, video will take precedence', 'options_framework_theme'),
		'id' => 'welcome_video_link',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Welcome Title', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'welcome_title',
		'std' => '',
		'type' => 'text');			

	$options[] = array(
		'name' => __('Welcome Title 2', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'welcome_title2',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Welcome Content', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'welcome_content',
		'std' => '',
		'type' => 'textarea');			

	$options[] = array(
		'name' => __('Welcome Button Text', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'welcome_button_text',
		'std' => 'Read More',
		'type' => 'text');	

	$options[] = array(
		'name' => __('Welcome Button Link', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'welcome_button_link',
		'std' => '',
		'type' => 'text');			
		
	$options[] = array(
		'name' => __('Title Area 2', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'title_area_2',
		'std' => 'Portfolio',
		'type' => 'text');			
		
	$options[] = array(
		'name' => __('Box 1 Image', 'options_framework_theme'),
		'desc' => __('Recommended image sizes 303 X 344', 'options_framework_theme'),
		'id' => 'box_1_image',
		'type' => 'upload');
		
	$options[] = array(
		'name' => __('Box 1  Text', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'box_1_text',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Box 1  Link', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'box_1_link',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Box 2 Image', 'options_framework_theme'),
		'desc' => __('Recommended image sizes 303 X 344', 'options_framework_theme'),
		'id' => 'box_2_image',
		'type' => 'upload');
		
	$options[] = array(
		'name' => __('Box 2  Text', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'box_2_text',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Box 2  Link', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'box_2_link',
		'type' => 'text');		
		
	$options[] = array(
		'name' => __('Box 3 Image', 'options_framework_theme'),
		'desc' => __('Recommended image sizes 303 X 344', 'options_framework_theme'),
		'id' => 'box_3_image',
		'type' => 'upload');
		
	$options[] = array(
		'name' => __('Box 3  Text', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'box_3_text',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Box 3  Link', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'box_3_link',
		'type' => 'text');		

	$options[] = array(
		'name' => __('Testimonial Box Text', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'testimonial_box_text',
		'type' => 'textarea');
		
	$options[] = array(
		'name' => __('Testimonial Box Name', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'testimonial_box_name',
		'type' => 'text');

	/*slider section*/	

	$options[] = array(
		'name' => __('Top Slider', 'options_framework_theme'),
		'type' => 'heading');
	
	
	$options[] = array(
		'name' => __('Slider Image 1', 'options_framework_theme'),
		'desc' => __('Recommended image sizes 1450 X 500', 'options_framework_theme'),
		'id' => 'slider_image_1',
		'type' => 'upload');
	$options[] = array(
		'name' => __('Slider Image 2', 'options_framework_theme'),
		'desc' => __('Recommended image sizes 1450 X 500', 'options_framework_theme'),
		'id' => 'slider_image_2',
		'type' => 'upload');
	$options[] = array(
		'name' => __('Slider Image 3', 'options_framework_theme'),
		'desc' => __('Recommended image sizes 1450 X 500', 'options_framework_theme'),
		'id' => 'slider_image_3',
		'type' => 'upload');
	$options[] = array(
		'name' => __('Slider Image 4', 'options_framework_theme'),
		'desc' => __('Recommended image sizes 1450 X 500', 'options_framework_theme'),
		'id' => 'slider_image_4',
		'type' => 'upload');
	$options[] = array(
		'name' => __('Slider Image 5', 'options_framework_theme'),
		'desc' => __('Recommended image sizes 1450 X 500', 'options_framework_theme'),
		'id' => 'slider_image_5',
		'type' => 'upload');
	$options[] = array(
		'name' => __('Slider Image 6', 'options_framework_theme'),
		'desc' => __('Recommended image sizes 1450 X 500', 'options_framework_theme'),
		'id' => 'slider_image_6',
		'type' => 'upload');

	/*social media icons*/
	$options[] = array(
		'name' => __('Social Media Icons', 'options_framework_theme'),
		'type' => 'heading');
	$options[] = array(
		'name' => __('Facebook Link', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'fb_link',
		'std' => '',
		'type' => 'text');
	$options[] = array(
		'name' => __('Twitter Link', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'twitter_link',
		'std' => '',
		'type' => 'text');	
	$options[] = array(
		'name' => __('LinkedIn Link', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'linked_link',
		'std' => '',
		'type' => 'text');	
	$options[] = array(
		'name' => __('Instagram Link', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'insta_link',
		'std' => '',
		'type' => 'text');	
	$options[] = array(
		'name' => __('YouTube Link', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'youtube_link',
		'std' => '',
		'type' => 'text');	
	$options[] = array(
		'name' => __('Google+ Link', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'g_link',
		'std' => '',
		'type' => 'text');	
	
	return $options;
}