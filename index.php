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
		</div>
		<div class="img-container hidden">
			<img src="<?php echo get_template_directory_uri(); ?>/img/home/intro/left-1.png" alt="mountains" data="<?php echo get_template_directory_uri(); ?>/img/home/intro/">
			<img src="<?php echo get_template_directory_uri(); ?>/img/home/intro/left-2.png" alt="mountains" data="<?php echo get_template_directory_uri(); ?>/img/home/intro/">
			<img src="<?php echo get_template_directory_uri(); ?>/img/home/intro/left-3.png" alt="mountains" data="<?php echo get_template_directory_uri(); ?>/img/home/intro/">
			<img src="<?php echo get_template_directory_uri(); ?>/img/home/intro/left-4.png" alt="mountains" data="<?php echo get_template_directory_uri(); ?>/img/home/intro/">
			<img src="<?php echo get_template_directory_uri(); ?>/img/home/intro/right-1.png" alt="mountains" data="<?php echo get_template_directory_uri(); ?>/img/home/intro/">
			<img src="<?php echo get_template_directory_uri(); ?>/img/home/intro/right-2.png" alt="mountains" data="<?php echo get_template_directory_uri(); ?>/img/home/intro/">
			<img src="<?php echo get_template_directory_uri(); ?>/img/home/intro/right-3.png" alt="mountains" data="<?php echo get_template_directory_uri(); ?>/img/home/intro/">
			<img src="<?php echo get_template_directory_uri(); ?>/img/home/intro/right-4.png" alt="mountains" data="<?php echo get_template_directory_uri(); ?>/img/home/intro/">
			<img src="<?php echo get_template_directory_uri(); ?>/img/home/intro/right-5.png" alt="mountains" data="<?php echo get_template_directory_uri(); ?>/img/home/intro/">
		</div>
		<div class="left-one sliding-person">
			<img src="<?php echo get_template_directory_uri(); ?>/img/home/intro/left-1.png" alt="mountains" data="<?php echo get_template_directory_uri(); ?>/img/home/intro/">
		</div>
		<div class="right-one sliding-person">
			<div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/home/intro/helicopter.png" alt="mountains" class="hidde helicopter" data="<?php echo get_template_directory_uri(); ?>/img/home/intro/">
			</div>
			<img src="<?php echo get_template_directory_uri(); ?>/img/home/intro/right-1.png" alt="mountains" data="<?php echo get_template_directory_uri(); ?>/img/home/intro/">
		</div>
		<div class="hero-text">
			<h3>AKTYWNIE<br>DLA CIEBIE I BIZNESU</h3>
			<div class="buttons">
				<button class="btn btn-primary for-you for-you-scroll"><span>DLA CIEBIE</span></button>
				<button class="btn btn-primary for-business for-business-scroll"><span>DLA BIZNESU</span></button>
			</div>
		</div>
		<div class="container">
			<div class="about-us-section row">
				<div class="col-md-5 left-side">
					<h1>O NAS</h1>
					<h2>O NAS</h2>
					<div class="underline"></div>
					<img src="<?php echo get_template_directory_uri(); ?>/img/home-aboutus-photo1.png" alt="placeholder" class="img-responsive img-fluid shadowed">
				</div>
				<div class="col-md-5 col-md-offset-1 right-side">
					<h1 class="visible-xs visible-sm">O NAS</h1>
					<h2 class="visible-xs visible-sm">O NAS</h2>
					<div class="underline visible-xs visible-sm"></div>
					<img src="<?php echo get_template_directory_uri(); ?>/img/home/home-image1.png" alt="placeholder" class="img-responsive img-fluid shadowed ">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
					<a href="<?php echo get_site_url(); ?>/about-us"><button class="btn btn-primary btn-outline">Dowiedz się więcej</button></a>
				</div>
			</div>
		</div>
		<div class="infographic">
			<div class="container">

				<span class="hidden-sm hidden-xs">
					<?php echo do_shortcode('[tf_numbers name="31"]'); ?>
				</span>
				<span class="visible-sm visible-xs">
					<div class="statistics">
						<div class="left-arrow">
							<img src="<?php echo get_template_directory_uri(); ?>/img/leftArrow.png" alt="placeholder" class="img-responsive img-fluid">
						</div>
						<div class="first">
							<div class="number">16</div>
							<div class="count-title">lat działalności</div>
						</div>
						<div class="second hidde">
							<div class="number">287</div>
							<div class="count-title">zrealizowanych projektów</div>
						</div>
						<div class="third hidde">
							<div class="number">24</div>
							<div class="count-title">odwiedzone kraje</div>
						</div>
						<div class="right-arrow">
							<img src="<?php echo get_template_directory_uri(); ?>/img/rightArrow.png" alt="placeholder" class="img-responsive img-fluid">
						</div>
					</div>
				</span>
				<div class="for-you-waypoint"></div>
			</div>
		</div>

		<div class="container for-you-container">
		 <div class="for-you-section">
			 <h1>DLA CIEBIE</h1>
			 <h2>DLA CIEBIE</h2>
			 <div class="underline"></div>
			 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. </p>
			 <a href="<?php echo get_site_url(); ?>/for-you"><button class="btn btn-primary btn-outline">Dowiedz się więcej</button></a>
			 <div class="row nearest-events margin-top">
				 <div class="col-md-6">
				 	<h3 class="hero-h3">Najbliższe wydarzenia</h3>
				 </div>
				 <div class="col-md-6">
				 	<div class="text-right hidden-sm hidden-xs"><a href="<?php echo get_site_url(); ?>/for-you#for-you-expand">Sprawdź wszystkie propozycje</a></div>
				 </div>
			 </div>

				 	<div class="row nearest-events tile-row">
						<div class="col-md-6 relative-position">

						<div class="card card-left card1 shadowed row">
	            <div class="image col-xs-6">
	              <img src="<?php echo get_template_directory_uri(); ?>/img/test-photo.png" alt="" class="card-image">
	            </div>
	            <div class="col-xs-6 no-paddings">
	              <div class="text">
	                <h3>KIERUNEK WYJAZDU ABC</h3>
	                <h4>Rodzinne ferie na nartach lorem</h4>
	                <p>31.01.2017 - 07.02.2017</p>
	                <span>Molveno, Włochy</span>
	              </div>
	              <div class="color-info">
	                <h4>FAMILY & FRIENDS</h4>
	              </div>
	            </div>
	          </div>
					</div>
					<div class="col-md-6 relative-position">
						<div class="card card-right card2 shadowed row">
		           <div class="image col-xs-6">
		             <img src="<?php echo get_template_directory_uri(); ?>/img/test-photo.png" alt="" class="card-image">
	           	</div>
	           <div class="col-xs-6 no-paddings">
	             <div class="text">
	               <h3>KIERUNEK WYJAZDU ABC</h3>
	               <h4>Rodzinne ferie na nartach lorem</h4>
	               <p>31.01.2017 - 07.02.2017</p>
	               <span>Molveno, Włochy</span>
	             </div>
	             <div class="color-info">
	               <h4>FAMILY & FRIENDS</h4>
	             </div>
	          </div>
	        </div>
				</div>
			</div>

			<a href=""><button class="btn btn-primary btn-outline all-proposals hidden-lg hidden-md">Sprawdź wszystkie propozycje</button></a>

		 </div>
		</div>
		<div class="background-for-you">
			<div class="background-image"></div>
	    <div class="question-stripe slider">
	      <div>
	        <h1>Masz pytania dotyczące<br class="line-break"> oferty dla Ciebie?</h1> <img src="<?php echo get_template_directory_uri(); ?>/img/arrows.png" alt="" class="img-responsive img-fluid">
	      </div>
	      <div>
	        <h1>+48 123 456789 &nbsp <span class="hidden-sm hidden-xs">|</span> <span class="hidden-sm hidden-xs">&nbsp</span><br class="line-break">dlaciebie@skiactive.com</h1> <img src="<?php echo get_template_directory_uri(); ?>/img/arrows.png" alt="" class="img-responsive img-fluid">
	      </div>
	    </div>
	  </div>
		<div class="container for-business-container">
			<div class="for-business-section row">
				<div class="for-business-waypoint"></div>
				<div class="col-md-5 left-side col-md-offset-1">
					<h1 class="visible-xs visible-sm">DLA BIZNESU</h1>
					<h2 class="visible-xs visible-sm">DLA BIZNESU</h2>
					<div class="underline visible-xs visible-sm"></div>
					<img src="<?php echo get_template_directory_uri(); ?>/img/home/home-image2.png" alt="placeholder" class="img-responsive img-fluid shadowed ">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit. gratuluje spostrzegawczości ;) dolor es ipsum sit amet</p>
					<a href="<?php echo get_site_url(); ?>/for-business"><button class="btn btn-primary btn-outline">Dowiedz się więcej</button></a>
				</div>
				<div class="col-md-5 col-md-offset-1 right-side">
					<h1>DLA BIZNESU</h1>
					<h2>DLA BIZNESU</h2>
					<div class="underline"></div>
					<img src="<?php echo get_template_directory_uri(); ?>/img/home/home-helicopter.png" alt="placeholder" class="img-responsive img-fluid shadowed ">
				</div>
			</div>
		</div>
		<div class="question-stripe slider">
	    <div>
	      <h1>Masz pytania dotyczące<br class="line-break"> oferty dla biznesu?</h1> <img src="<?php echo get_template_directory_uri(); ?>/img/arrows.png" alt="" class="img-responsive img-fluid">
	    </div>
	    <div>
	      <h1>+48 123 456789 &nbsp <span class="hidden-sm hidden-xs">|</span> <span class="hidden-sm hidden-xs">&nbsp</span><br class="line-break"> dlabiznesu@skiactive.com</h1> <img src="<?php echo get_template_directory_uri(); ?>/img/arrows.png" alt="" class="img-responsive img-fluid">
	    </div>
	  </div>
		<div class="detal hidden detal-site" id="detal">
	  </div>
	</div>
<?php
get_footer();
