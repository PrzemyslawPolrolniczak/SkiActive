<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SkiActive
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,600,700" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
	<div id="page" class="container">
		<div class="row">
			<div class="col-xs-3"><img src="<?php echo get_template_directory_uri(); ?>/img/Logo.png" alt="Logo" class="img-responsive img-fluid logo"></div>
			<nav id="site-navigation" class="main-navigation  col-xs-6">
				<?php
					wp_nav_menu( array(
						'menu' => 'Menu 1',
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
				?>
			</nav><!-- #site-navigation -->
			<div class="col-xs-offset-1 col-xs-2 contact-div">
				<span>ENG</span>
				<img src="<?php echo get_template_directory_uri(); ?>/img/contact.png" alt="contact" class="img-responsive img-fluid contact-img">
				<div class="hidden contact-info">
					<div class="little-triangle"></div>
					<h6>DLA CIEBIE:</h6>
					<a href="">+48 123 456789</a>
					<a href="">dlaciebie@skiactive.com</a>
					<h6>DLA BIZNESU:</h6>
					<a href="">+48 123 456789</a>
					<a href="">dlabiznesu@skiactive.com</a>
				</div>
			</div>
		</div><!-- #masthead -->
	</div>
</header>
