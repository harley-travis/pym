<?php 
/**
 * The head of our theme
 *
 * @package WordPress
 * @subpackage Pym
 * @since Pym 1.0
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
		<title><?php the_title()?> | Great Basin Hosting</title>
		
		<?php require_once(dirname(__FILE__)."/config.php"); ?>
		
		<!-- meta -->
		<meta charset="utf-8">
		<meta name="keywords" content="Brand Experience, Quality Management Software, Risk management software, Corrective Action, Checklist app, Compliance Management, Audit Software, Auditing App, FSMA compliance, Safety and quality management">
		<meta name="author" content="RizePoint">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="mobile-web-app-capable" content="yes" />
		<meta name="theme-color" content="#FCB040" />
		
		<!-- css -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css">
		
		<!-- jquery -->
		<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.3.2.min.js"></script>
		
		<!-- google analytics -->

        <!-- hotjar -->
	
		<?php wp_head(); ?>
	</head>
	<body>