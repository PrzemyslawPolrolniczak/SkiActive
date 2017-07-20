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
		<div class="left-one sliding-person">
			<img src="<?php echo get_template_directory_uri(); ?>/img/left-1st.png" alt="mountains">
		</div>
		<div class="right-one sliding-person">
			<img src="<?php echo get_template_directory_uri(); ?>/img/right-1st.png" alt="mountains">
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
					<a href="<?php echo get_site_url(); ?>/about-us"><button class="btn btn-primary btn-outline">Dowiedz się więcej</button></a>
				</div>
			</div>
		</div>
		<div class="infographic">
			<div class="container">
				<?php echo do_shortcode('[tf_numbers name="31"]'); ?>
			</div>
		</div>

		<div class="container">
		 <div class="for-you-section">
			 <h1>DLA CIEBIE</h1>
			 <h2>DLA CIEBIE</h2>
			 <div class="underline"></div>
			 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. </p>
			 <a href="<?php echo get_site_url(); ?>/for-you"><button class="btn btn-primary btn-outline">Dowiedz się więcej</button></a>
			 <div class="row nearest-events">
			 	<div class="col-xs-6">
					<h3 class="hero-h3">Najbliższe wydarzenia</h3>
					<div class="card card-left shadowed row">
            <div class="image col-xs-6">
              <img src="<?php echo get_template_directory_uri(); ?>/img/slide3.png" alt="" class="img-responsive img-fluid">
            </div>
            <div class="col-xs-6 no-paddings">
              <div class="text">
                <h3>KIERUNEK WYJAZDU ABC</h3>
                <h4>Rodzinne ferie na nartach lorem</h4>
                <p>31.01.2017 - 07.02.2017</p>
                <span>Molveno, Włochy</span>
              </div>
              <div class="color-info">
                <h4>Family & Friends</h4>
              </div>
            </div>
          </div>
				</div>
			 	<div class="col-xs-6">
					<div class="text-right"><a href="#">Sprawdź wszystkie propozycje</a></div>
					<div class="card card-right shadowed row">
            <div class="image col-xs-6">
              <img src="<?php echo get_template_directory_uri(); ?>/img/slide3.png" alt="" class="img-responsive img-fluid">
            </div>
            <div class="col-xs-6 no-paddings">
              <div class="text">
                <h3>KIERUNEK WYJAZDU ABC</h3>
                <h4>Rodzinne ferie na nartach lorem</h4>
                <p>31.01.2017 - 07.02.2017</p>
                <span>Molveno, Włochy</span>
              </div>
              <div class="color-info">
                <h4>Family & Friends</h4>
              </div>
            </div>
          </div>
				</div>
			 </div>
		 </div>
		</div>
		<div class="background-for-you">
	    <img src="<?php echo get_template_directory_uri(); ?>/img/background-for-you.png" alt="" class="img-responsive img-fluid">
	    <div class="question-stripe slider">
	      <div>
	        <h1>Masz pytania dotyczące oferty dla Ciebie?</h1> <img src="<?php echo get_template_directory_uri(); ?>/img/arrows.png" alt="" class="img-responsive img-fluid">
	      </div>
	      <div>
	        <h1>+48 123 456789 &nbsp | &nbsp  dlaciebie@skiactive.com</h1> <img src="<?php echo get_template_directory_uri(); ?>/img/arrows.png" alt="" class="img-responsive img-fluid">
	      </div>
	    </div>
	  </div>
		<div class="container">
			<div class="for-business-section row">
				<div class="col-md-5 left-side col-md-offset-1">
					<img src="<?php echo get_template_directory_uri(); ?>/img/placeholder-girl.png" alt="placeholder" class="img-responsive img-fluid shadowed ">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit. gratuluje spostrzegawczości ;) dolor es ipsum sit amet</p>
					<a href="<?php echo get_site_url(); ?>/about-us"><button class="btn btn-primary btn-outline">Dowiedz się więcej</button></a>
				</div>
				<div class="col-md-5 col-md-offset-1 right-side">
					<h1>DLA BIZNESU</h1>
					<h2>DLA BIZNESU</h2>
					<div class="underline"></div>
					<img src="<?php echo get_template_directory_uri(); ?>/img/helicopter.png" alt="placeholder" class="img-responsive img-fluid shadowed ">
				</div>
			</div>
		</div>
		<div class="question-stripe slider">
	    <div>
	      <h1>Masz pytania dotyczące oferty dla biznesu?</h1> <img src="<?php echo get_template_directory_uri(); ?>/img/arrows.png" alt="" class="img-responsive img-fluid">
	    </div>
	    <div>
	      <h1>+48 123 456789 &nbsp | &nbsp dlabiznesu@skiactive.com</h1> <img src="<?php echo get_template_directory_uri(); ?>/img/arrows.png" alt="" class="img-responsive img-fluid">
	    </div>
	  </div>
	</div>
<?php
get_footer();
