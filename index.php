<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SkiActive
 */

get_header(); ?>

	<div class="home-page">
		<div class="background">
			<img src="<?php echo get_template_directory_uri(); ?>/img/home-bg.png" alt="mountains">
		</div>
		<div class="hero-text">
			<h3>AKTYWNIE<br>DLA CIEBIE I BIZNESU</h3>
			<div class="buttons">
				<button class="btn btn-primary for-you"><span>DLA CIEBIE</span></button>
				<button class="btn btn-primary for-business"><span>DLA BIZNESU</span></button>
			</div>
		</div>
		<div class="container">
			<div class="about-us-section row">
				<div class="col-md-5 left-side">
					<h1>O NAS</h1>
					<h2>O NAS</h2>
					<div class="underline"></div>
					<img src="<?php echo get_template_directory_uri(); ?>/img/home-aboutus-photo1.png" alt="placeholder" class="img-responsive img-fluid shadowed ">
				</div>
				<div class="col-md-5 col-md-offset-1 right-side">
					<img src="<?php echo get_template_directory_uri(); ?>/img/home-aboutus-photo2.png" alt="placeholder" class="img-responsive img-fluid shadowed ">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
					<button class="btn btn-primary btn-outline">Dowiedz się więcej</button>
				</div>
			</div>
		</div>
	</div>
<?php
get_footer();
