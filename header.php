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
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,600,700" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php if( is_page( array( 'about-us', 'contact', 'for-business', 'for-you', '') ) || is_front_page() ) { ?>
<header>
	<div id="page" class="">
		<div class="container">
		<div class="row hidden-sm hidden-xs">
			<div class="col-md-3"><a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/Logo.png" alt="Logo" class="img-responsive img-fluid logo"></a></div>
			<nav id="site-navigation" class="main-navigation  col-md-6">
				<?php
					wp_nav_menu( array(
						'menu' => 'Menu 1',
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
				?>
			</nav><!-- #site-navigation -->
			<div class="col-md-offset-1 col-md-2 contact-div">
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

		<div class="visible-sm visible-xs">

					<div class="row">
		        <div class="navbar-header burger-container col-xs-2">
		            <!-- <button type="button" class="navbar-toggle burger-menu">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button> -->
								<img src="<?php echo get_template_directory_uri(); ?>/img/burger.png" alt="Logo" class="img-responsive img-fluid navbar-toggled burger-menu">
		        </div>
						<div class="col-xs-8 logo-mobile">
							<img src="<?php echo get_template_directory_uri(); ?>/img/Logo.png" alt="Logo" class="img-responsive img-fluid logo">
						</div>
						<div class="col-xs-2 contact-mobile"><img src="<?php echo get_template_directory_uri(); ?>/img/contact.png" alt="contact" class="img-responsive img-fluid contact-img mobile-expander"></div>
					</div>

		        <!-- Collect the nav links, forms, and other content for toggling -->
		        <div class="hidde expanded-burger">
							<img src="<?php echo get_template_directory_uri(); ?>/img/exitButton.png" alt="exit" class="img-responsive img-fluid exit-burger">
							<a href="#" class="english">ENG</a>
							<nav id="site-navigation" class="main-navigation">
								<?php
									wp_nav_menu( array(
										'menu' => 'Menu 1',
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
									) );
								?>
							</nav>
		        </div>
						<div class="hidde contact-mobile-container">
							<img src="<?php echo get_template_directory_uri(); ?>/img/exitButton.png" alt="exit" class="img-responsive img-fluid exit-contact">
							<h6>DLA CIEBIE</h6>
							<div>
								<a href="#">+48 123 456789</a>
							</div>
							<div>
								<a href="">dlaciebie@skiactive.com</a>
							</div>
							<h6>DLA BIZNESU</h6>
							<div>
								<a href="#">+48 123 456789</a>
							</div>
							<div>
								<a href="">dlabiznesu@skiactive.com</a>
							</div>
						</div>
	</div>
</header>

<?php	} else { ?>

	<?php	}

		?>
