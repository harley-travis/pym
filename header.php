<?php 
/**
 * The head of our theme
 *
 * @package WordPress
 * @subpackage Midtown
 * @since Midtown 1.0
 *
 *
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
	<head>
		<title><?php the_title()?> | Mahesh Marath</title>
		
		<?php require_once(dirname(__FILE__)."/config.php"); ?>
		
		<!-- meta -->
		<meta charset="UTF-8">
		<meta name="keywords" content="">
		<meta name="author" content="Mahesh Marath">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="mobile-web-app-capable" content="yes" />
		<meta name="theme-color" content="#5638A8" />
		
		<!-- css -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/fontawesome/css/fontawesome-all.min.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/vendor/slick.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/vendor/slick-theme.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css">
		
		<!-- scripts -->
		<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.3.2.min.js"></script>
	
		<script>
			jQuery( document ).ready(function() {				
				
				// add class to widget main nav
				jQuery('#menu-main-nav').addClass('nav justify-content-end');
				jQuery('#menu-main-nav > li').addClass('nav-item');
				jQuery('#menu-main-nav > li > a').addClass('nav-link');
				
				// init bigslide 
				jQuery('.menu-link').bigSlide();
								
			});
		</script>

		<?php wp_head(); ?>
	</head>
	<body>
		
	