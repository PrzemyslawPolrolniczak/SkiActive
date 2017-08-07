<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SkiActive
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
	<div class="overlay hidden"></div>
		<div class="container">
			<div class="newsletter">
			<h1>
			NEWSLETTER SKIACTIVE
			</h1>
			<div class="underline"></div>
			<?php echo do_shortcode('[wysija_form id="2"]'); ?>
			</div>

			<div class="site-info row">

				<div class="col-md-4 regulations hidden-xs hidden-sm">
					<p class="regulations-link">Pobierz regulaminy SKIACTIVE</p>
				</div>


				<div class="col-md-4 icons" >
					<img src="<?php echo get_template_directory_uri(); ?>/img/face-icon.png" alt="facebook icon" class="img-responsive img-fluid">
					<img src="<?php echo get_template_directory_uri(); ?>/img/insta-icon.png" alt="instagram icon" class="img-responsive img-fluid">
				</div>

				<div class="col-md-4 regulations visible-xs visible-sm">
					<p class="regulations-link">Pobierz regulaminy SKIACTIVE</p>
				</div>

				<div class="col-md-4 policy">
					<div class="policy-links">
						<a href="">Polityka cookies</a>
						<p>|</p>
						<a href="">Polityka prywatności</a>
					</div>
				</div>


			</div>
		</div>

		<div class="footerimage">
		</div>



	<div class="regulations-details hidden">
			<div class="">
				<img src="<?php echo get_template_directory_uri(); ?>/img/x-button-blue.png" alt="" class="img-responsive img-fluid exit">
				<h1>REGULAMINY<br class="line-break"> SKIACTIVE</h1>
				<div class="underline"></div>
				<a href="#">
					<div class="download">
						<p>Regulamin świadczenia usług<br class="line-break"> drogą elektroniczną</p><img src="<?php echo get_template_directory_uri(); ?>/img/download-icon.png" alt="" class="img-responsive img-fluid">
					</div>
				</a>
				<a href="#">
					<div class="download">
						<p>Regulamin świadczenia<br class="line-break"> usług SKIACTIVE</p><img src="<?php echo get_template_directory_uri(); ?>/img/download-icon.png" alt="" class="img-responsive img-fluid">
					</div>
				</a>
				<a href="#">
					<div class="download">
						<p>Regulamin instruktorów<br class="line-break"> SKIACTIVE</p><img src="<?php echo get_template_directory_uri(); ?>/img/download-icon.png" alt="" class="img-responsive img-fluid">
					</div>
				</a>
				<a href="#">
					<div class="download">
						<p>Warunki<br class="line-break"> ubezpieczenia</p><img src="<?php echo get_template_directory_uri(); ?>/img/download-icon.png" alt="" class="img-responsive img-fluid">
					</div>
				</a>
				<a href="#">
					<div class="download">
						<p>Regulamin postępowania przy<br class="line-break"> wypadkach narciarskich</p><img src="<?php echo get_template_directory_uri(); ?>/img/download-icon.png" alt="" class="img-responsive img-fluid">
					</div>
				</a>
			</div>
	</div>












	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
