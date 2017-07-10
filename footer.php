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
			</div>

			<div class="site-info row">
				<!--<?php  //komentarz//wp_nav_menu(array('theme_location'=>'secondary')); ?> -->


				<div class="col-xs-6 col-md-4 regulations">
					<!--<a href="">Pobierz regulaminy SKIACTIVE</a>-->
					<p class="regulations-link">Pobierz regulaminy SKIACTIVE</p>
				</div>


				<div class="col-xs-6 col-md-4 icons" >
					<img src="<?php echo get_template_directory_uri(); ?>/img/face-icon.png" alt="facebook icon" class="img-responsive img-fluid">
					<img src="<?php echo get_template_directory_uri(); ?>/img/insta-icon.png" alt="instagram icon" class="img-responsive img-fluid">
				</div>


				<div class="col-xs-6 col-md-4 policy">
					<div class="policy-links">
						<a href="">Polityka cookies</a>
						<p>|</p>
						<a href="">Polityka prywatności</a>
					</div>
				</div>


			</div>
		</div>

		<div class="footerimage">
			<img src="<?php echo get_template_directory_uri(); ?>/img/footer-mountains.png" alt="mountains">
		</div>



	<div class="regulations-details hidden">
		<div class="container">
			<div class="popup row">
				<h1>REGULAMINY SKIACTIVE</h1>
				<div class="underline"></div>
				<div class="col-xs-6 col-md-6">
					<div class="button">
						<p>Regulamin świadczenia usług drogą elektroniczną</p>
						<img src="<?php echo get_template_directory_uri(); ?>/img/download-icon.png" class="img-responsive img-fluid">
					</div>
				</div>
			</div>
		</div>



	</div>












	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
