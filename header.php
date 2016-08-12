<?php
/**
 * The Header for Kage Child Theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Kage
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="wrapper">
		<header id="header">
			<div class="topbar">
				<div class="container">
					<div class="gutter clearfix">
						<ul class="contact_info">
							<?php if ( of_get_option('header_phone') ) { ?><li><span class="phone_icon"><?php echo esc_html(of_get_option('header_phone')); ?></span></li><?php } ?>
							<?php if ( of_get_option('header_email') ) { ?><li><a class="mail_icon" href="mailto:<?php echo esc_html(of_get_option('header_email')); ?>"><?php echo esc_html(of_get_option('header_email')); ?></a></li><?php } ?>
						</ul>
						
						<form class="search_form" action="<?php echo esc_url(home_url('/')); ?>" method="post" enctype="multipart/form-data">
							<div class="outerwrapp">
								<div class="innerwrapp">
									<div class="label">
										<label for="search_field"><?php if(isset($_POST['s'])) { echo $_POST['s']; } else { _e( 'Search', 'kage-child' ); } ?></label>
										<input id="search_field" class="search_filed" name="s" type="text" value="" />
									</div>
								</div>
							</div>
							<input class="search_icon" name="search" type="submit" value="" />
						</form>
						<ul class="social-icons">
							<?php if ( of_get_option('fb_link') ) { ?>
							<li class="social-icon"><a href="<?php echo esc_url(of_get_option('fb_link'));?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/img/fb.png" alt="Facebook icon"/></a></li><?php }?>
							<?php if ( of_get_option('twitter_link') ) { ?>
							<li class="social-icon"><a href="<?php echo esc_url(of_get_option('twitter_link'));?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/img/twitter.png" alt="Twitter icon"/></a></li><?php }?>
							<?php if ( of_get_option('linked_link') ) { ?>
							<li class="social-icon"><a href="<?php echo esc_url(of_get_option('linked_link'));?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/img/linked.png" alt="LinkedIn icon"/></a></li><?php }?>
							<?php if ( of_get_option('insta_link') ) { ?>
							<li class="social-icon"><a href="<?php echo esc_url(of_get_option('insta_link'));?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/img/insta.png" alt="Instagram icon"/></a></li><?php }?>
							<?php if ( of_get_option('youtube_link') ) { ?>
							<li class="social-icon"><a href="<?php echo esc_url(of_get_option('youtube_link'));?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/img/youtube.png" alt="YouTube icon"/></a></li><?php }?>
							<?php if ( of_get_option('g_link') ) { ?>
							<li class="social-icon"><a href="<?php echo esc_url(of_get_option('g_link'));?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/img/g.png" alt="Google icon"/></a></li><?php }?>
						 </ul>
					</div>
				</div>	
			</div>
			<div class="container">
				<div class="header_block gutter clearfix">
					<?php if ( of_get_option('logo_image') ) { ?>
					   <a class="logo" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(of_get_option('logo_image')); ?>" /><p class="italic"><?php bloginfo('description'); ?></p></a>
					<?php } else if (of_get_option('header_logo_text1')){  ?>
					    <a class="logo" href="<?php echo esc_url(home_url('/')); ?>"><span><?php echo esc_html(of_get_option('header_logo_text1')); ?></span> <?php echo esc_html(of_get_option('header_logo_text2')); ?> </a>
					<?php } else {  ?>
						<a class="logo" href="<?php echo esc_url(home_url('/')); ?>"><span><?php bloginfo('name'); ?></span><p class="italic"><?php bloginfo('description'); ?></p></a>
					<?php } ?>
					<nav class="menucontainer clearfix">
						<?php if ( has_nav_menu( 'primary' ) ) { ?>
						   <?php wp_nav_menu( array('container'=> '', 'theme_location' => 'primary', 'items_wrap'  => '<ul class="menutop">%3$s</ul>'  ) ); ?>
						<?php } else { ?>
							<?php wp_nav_menu(  array( 'menu_class'  => 'menutop') ); ?>	
						<?php } ?>
						<a class="menuicon" href="#"><?php _e( 'Menu', 'kage-child' ); ?></a>
						<?php if ( has_nav_menu( 'primary' ) ) { ?>
						   <?php wp_nav_menu( array('container'=> '', 'theme_location' => 'primary', 'items_wrap'  => '<ul class="menutopmob">%3$s</ul>'  ) ); ?>
						<?php } else { ?>
							<?php wp_nav_menu(  array( 'menu_class'  => 'menutopmob' ) ); ?>	
						<?php } ?>
					</nav>
				</div>
			</div>
		</header>