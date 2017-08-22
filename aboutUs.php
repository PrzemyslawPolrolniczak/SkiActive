<?php
/**
* The template for displaying all pages
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
*Template Name: AboutUs
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package SkiActive
*/
get_header(); ?>
<div class="aboutUs">
<div class="overlay hidden"></div>
	<div class="container">

		<div class="we row">
			<div class="text col-md-6 text-col">
				<h1>O NAS</h1>
				<h2>O NAS</h2>
				<div class="underline"></div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/aboutus/aboutus-1.png" alt="placeholder" class="img-responsive img-fluid hidden-md hidden-lg">
				<p class="textlead">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, delectus! Obcaecati alias eaque dolorem est eveniet repudiandae nesciunt amet.
				</p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci itaque unde cum sequi fugit ullam incidunt velit, atque dignissimos modi laborum iure ut repellat voluptates nobis totam animi odio, placeat facilis nulla sunt ea, laboriosam culpa officia dolorum.
					<br><br>
					Deserunt ab expedita unde laborum, minus sequi consequuntur quis sint doloremque culpa velit nihil voluptates, ipsa incidunt alias accusamus molestiae ipsum atque rerum magnam dolorem magni, autem ad odit! Illum quisquam delectus non explicabo repellendus voluptatibus laboriosam, obcaecati, consequuntur rem eos porro, suscipit, necessitatibus optio nostrum amet hic. Saepe obcaecati, ex natus nulla facilis soluta quae, voluptas magni a non! Voluptates, sapiente. Laboriosam culpa officia dolorum.
					<br><br>
					Deserunt ab expedita unde laborum, minus sequi consequuntur quis sint doloremque culpa velit nihil voluptates, ipsa incidunt alias accusamus molestiae ipsum atque rerum magnam dolorem magni, autem ad odit! Illum quisquam delectus non explicabo repellendus voluptatibus laboriosam, obcaecati, consequuntur rem eos porro, suscipit, necessitatibus optio nostrum amet hic. Saepe obcaecati, ex natus nulla facilis soluta quae, voluptas magni a non! Voluptates, sapiente.
				</p>
			</div>

			<div class="photos col-md-6">
				<img src="<?php echo get_template_directory_uri(); ?>/img/aboutus/aboutus-1.png" alt="placeholder" class="img-responsive img-fluid hidden-xs hidden-sm">
				<img src="<?php echo get_template_directory_uri(); ?>/img/aboutus/aboutus-2.png" alt="placeholder" class="img-responsive img-fluid ">
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
			</div>
		</div>

<div class="container">



		<div class="ourteam row">
			<h1>NASZ ZESPÓŁ</h1>
			<div class="underline"></div>

			<div class="section1 el-presidentos ">

				<div class="owner-box owner1 ">
					<img src="<?php the_field('co-owner1_photo'); ?>" alt="placeholder" class="img-responsive img-fluid ">
					<div class="owner-text">
						<h4><?php the_field('co-owner1_name'); ?></h4>
						<p><?php the_field('co-owner1_position'); ?></p>
					</div>
				</div>

				<div class="owner-box owner2">
					<img src="<?php the_field('co-owner2_photo'); ?>" alt="placeholder" class="img-responsive img-fluid ">
					<div class="owner-text">
						<h4><?php the_field('co-owner2_name'); ?></h4>
						<p><?php the_field('co-owner2_position'); ?></p>
					</div>
				</div>

			</div>

			<div class="border-class hidden-xs hidden-sm"></div>

			<div class="section2 col-xs-12 col-md-8 col-md-offset-2">

				<div class="row employees-row">

					<?php for ($i = 1; $i <= 16; $i = $i + 1) { ?>
						<?php if( get_field('employee_name' . $i) ): ?>
							<div class="employee-box col-xs-6 col-sm-4 col-md-3">
								<img src="<?php the_field('employee_photo' . $i); ?>" class="img-responsive img-fluid ">
								<h4><?php the_field('employee_name' . $i); ?></h4>
								<p><?php the_field('employee_position' . $i); ?></p>
							</div>
						<?php else: ?>
							<div class="col-md-3 visible-md visible-lg"></div>
						<?php endif; ?>

	        <?php }; ?>

					<!-- <div class="employee-box col-xs-6 col-sm-4 col-md-3 col-md-offset-3">
						<img src="<?php echo get_template_directory_uri(); ?>/img/placeholder.jpg" alt="placeholder" class="img-responsive img-fluid ">
						<h4>Jan Kowalski</h4>
						<p>stanowisko</p>
					</div>

					<div class="employee-box col-xs-6 col-sm-4 col-md-3 col-sm-offset-4 col-md-offset-0">
						<img src="<?php echo get_template_directory_uri(); ?>/img/placeholder.jpg" alt="placeholder" class="img-responsive img-fluid ">
						<h4>Jan Kowalski</h4>
						<p>stanowisko</p>
					</div> -->
				</div>
			</div>
		</div>

		<div class="directions ">


			<div class="section1 row">
				<h1>KIERUNKI WYJAZDÓW</h1>
				<div class="underline"></div>
				<div class="col-xs-12 col-md-12 ">
					<p class="col-xs-8 col-md-8 col-xs-offset-2 col-md-offset-2">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque error nostrum voluptatum quos maiores, tenetur atque laboriosam sint quae facere aspernatur corrupti porro soluta eos. Maiores ut deserunt, fuga impedit. Consectetur adipisicing elit. Odio asperiores nemo, quod quae quis esse eveniet mollitia dicta dolor sit voluptate, in praesentium iure, voluptatem ratione harum commodi necessitatibus nostrum!...
					</p>
				</div>
			</div>

			</div>



			<div class="slider aboutus-slider">

				<?php for ($i = 1; $i <= 8; $i = $i + 1) { ?>

          <?php if( get_field('name_tile' . $i) ): ?>
						<div class="country country-tile<?php echo $i ?> col-xs-4">
							<img src="<?php the_field('image_tile' . $i); ?>" alt="" class="img-responsive img-fluid">
							<div class="txt">
								<h1><?php the_field('name_tile' . $i); ?></h1>
								<p><?php the_field('text_tile' . $i); ?></p>
							</div>
						</div>
          <?php endif; ?>

        <?php }; ?>
			</div>



					<!-- <div class="country italia col-xs-4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/aboutus/aboutus-italia.png" alt="" class="img-responsive img-fluid">
						<div class="txt">
							<h1>WŁOCHY</h1>
							<p>24 lokalizacje wyjazdów</p>
						</div>
					</div>
					<div class="country austria col-xs-4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/aboutus/aboutus-austria.png" alt="" class="img-responsive img-fluid">
						<div class="txt">
							<h1>AUSTRIA</h1>
							<p>24 lokalizacje wyjazdów</p>
						</div>
					</div>
					<div class="country france col-xs-4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/aboutus/aboutus-france.png" alt="" class="img-responsive img-fluid">
						<div class="txt">
							<h1>FRANCJA</h1>
							<p>24 lokalizacje wyjazdów</p>
						</div>
					</div>
					<div class="country switzerland col-xs-4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/aboutus/aboutus-switrzland
						.png" alt="" class="img-responsive img-fluid">
						<div class="txt">
							<h1>SZWAJCARIA</h1>
							<p>24 lokalizacje wyjazdów</p>
						</div>
					</div>
					<div class="country col-xs-4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/aboutustestimg.png" alt="" class="img-responsive img-fluid">
						<div class="txt">
							<h1>LOREMIPSUM</h1>
							<p>24 lokalizacje wyjazdów</p>
						</div>
					</div>
			</div> -->





		<div class="licences">

			<div class="row">
				<h1>LICENCJE</h1>
				<div class="underline"></div>
				<div class="col-xs-12 col-md-12 box">
					<p class="col-xs-8 col-md-8 col-xs-offset-2 col-md-offset-2">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque error nostrum voluptatum quos maiores, tenetur atque laboriosam sint quae facere aspernatur corrupti porro soluta eos. Maiores ut deserunt, fuga impedit. Consectetur adipisicing elit. Odio asperiores nemo, quod quae quis esse evenietum!...
					</p>
				</div>
			</div>

			<div class="box">
				<div class="partner-logos row">
					<div class="partner-logo col-sm-offset-2 col-sm-4">
						<div class="double-logo">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo_sitn.jpg" alt="logo SITN PZN" class="img-responsive img-fluid">
							<img src="<?php echo get_template_directory_uri(); ?>/img/aboutus/PZN.jpg" alt="logo SITN PZN" class="img-responsive img-fluid">
						</div>
						<p>
							Licencja SITN PZN<br>od 2004 r.
						</p>
					</div>
					<div class="partner-logo col-sm-4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/aboutus/fischer.jpg" alt="logo Fischer" class="img-responsive img-fluid fisher-logo">
						<p>
							Licencja<br>FISCHER
						</p>
					</div>
				</div>
			</div>

		</div>





		<div class="partners">
			<h1>PARTNERZY</h1>
			<div class="underline"></div>
			<div class="partner-logos row">
				<div class="partner-logo col-xs-12 col-sm-6 col-md-3">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo_cam.jpg" alt="logo CAMdivision" class="img-responsive img-fluid">
				</div>
				<div class="partner-logo col-xs-12 col-sm-6 col-md-3">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo_briko.jpg" alt="logo Briko" class="img-responsive img-fluid">
				</div>
				<div class="partner-logo col-xs-12 col-sm-6 col-md-3">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo_fischer.jpg" alt="logo Fischer" class="img-responsive img-fluid">
				</div>
				<div class="partner-logo col-xs-12 col-sm-6 col-md-3">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo_europa.jpg" alt="logo Europa" class="img-responsive img-fluid">
				</div>
			</div>

		</div>

	</div>

	<div class="hidden owner1-details row">
		<div class="col-xs-4 col-md-5 no-paddings hidden-xs hidden-sm">
			<img src="<?php echo get_template_directory_uri(); ?>/img/placeholder.jpg" alt="placeholder" class="img-responsive img-fluid ">
		</div>
		<div class="col-xs-12 col-md-7 text-div">
			<img src="<?php echo get_template_directory_uri(); ?>/img/x-button-blue.png" alt="placeholder" class="img-responsive img-fluid exit">
			<img src="<?php echo get_template_directory_uri(); ?>/img/placeholder.jpg" alt="placeholder" class="img-responsive img-fluid hidden-md hidden-lg owner-picture ">
				<div class="owner-name">
					<h1>Łukasz Kuźmiński</h1>
					<h2>co-owner</h2>
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>
				<a href="#">+ 48 123 456789</a>
				<a href="#">lukasz@skiactive.com</a>
		</div>
	</div>

	<div class="hidden owner2-details row">
		<div class="col-xs-4 col-md-5 no-paddings hidden-xs hidden-sm">
			<img src="<?php echo get_template_directory_uri(); ?>/img/placeholder.jpg" alt="placeholder" class="img-responsive img-fluid ">
		</div>
		<div class="col-xs-12 col-md-7 text-div">
			<img src="<?php echo get_template_directory_uri(); ?>/img/x-button-blue.png" alt="placeholder" class="img-responsive img-fluid exit">
			<img src="<?php echo get_template_directory_uri(); ?>/img/placeholder.jpg" alt="placeholder" class="img-responsive img-fluid hidden-md hidden-lg owner-picture ">
				<div class="owner-name">
					<h1>Rafał Sionek</h1>
					<h2>co-owner</h2>
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>
				<a href="#">+ 48 123 456789</a>
				<a href="#">rafal@skiactive.com</a>
		</div>
	</div>


	<?php for ($i = 1; $i <= 8; $i = $i + 1) { ?>

		<?php if( get_field('name_tile' . $i) ): ?>
			<div class="hidden country-detail country-detail<?php echo $i ?>">
				<div class="row">
					<img src="<?php echo get_template_directory_uri(); ?>/img/x-button-blue.png" alt="placeholder" class="img-responsive img-fluid exit">
					<div class="col-sm-5 col-md-6">
						<h1><?php the_field('name_tile' . $i); ?></h1>
						<div class="underline"></div>
						<p class="description" ><?php the_field('text_detail' . $i); ?></p>
					</div>
					<div class="col-sm-7 col-md-6">
						<img src="<?php the_field('image_tile' . $i); ?>" alt="" class="img-responsive img-fluid detail-img">
					</div>
				</div>
				<div class="flexbox">
					<div class="plain-text">
						<?php for ($j = 1; $j <= 24; $j = $j + 3) { ?>
		          <?php if( get_field('hyphen'.$j.'_detail' .$i) ): ?>
		            <p><div class="hyphen-before"></div> <?php the_field('hyphen'.$j.'_detail' .$i); ?></p>
		          <?php endif; ?>
		        <?php }; ?>
					</div>
					<div class="plain-text">
						<?php for ($j = 2; $j <= 24; $j = $j + 3) { ?>
		          <?php if( get_field('hyphen'.$j.'_detail' .$i) ): ?>
		            <p><div class="hyphen-before"></div> <?php the_field('hyphen'.$j.'_detail' .$i); ?></p>
		          <?php endif; ?>
		        <?php }; ?>
					</div>
					<div class="plain-text">
						<?php for ($j = 3; $j <= 24; $j = $j + 3) { ?>
		          <?php if( get_field('hyphen'.$j.'_detail1') ): ?>
		            <p><div class="hyphen-before"></div> <?php the_field('hyphen'.$j.'_detail' . $i); ?></p>
		          <?php endif; ?>
		        <?php }; ?>
					</div>
				</div>
			</div>
		<?php endif; ?>

	<?php }; ?>

	<!-- <div class="hidden country-detail italia-detail">
		<div class="row">
			<img src="<?php echo get_template_directory_uri(); ?>/img/x-button-blue.png" alt="placeholder" class="img-responsive img-fluid exit">
			<div class="col-sm-5 col-md-6">
				<h1>WŁOCHY</h1>
				<div class="underline"></div>
				<p class="description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
			</div>
			<div class="col-sm-7 col-md-6">
				<img src="<?php echo get_template_directory_uri(); ?>/img/aboutus/aboutus-italia.png" alt="" class="img-responsive img-fluid detail-img">
			</div>
		</div>
		<div class="flexbox">
			<div class="plain-text">
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
			</div>
			<div class="plain-text">
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
			</div>
			<div class="plain-text">
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
			</div>
		</div>
	</div>


	<div class="hidden country-detail austria-detail">
		<div class="row">
			<img src="<?php echo get_template_directory_uri(); ?>/img/x-button-blue.png" alt="placeholder" class="img-responsive img-fluid exit">
			<div class="col-sm-5 col-md-6">
				<h1>AUSTRIA</h1>
				<div class="underline"></div>
				<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
			</div>
			<div class="col-sm-7 col-md-6">
				<img src="<?php echo get_template_directory_uri(); ?>/img/aboutus/aboutus-austria.png" alt="" class="img-responsive img-fluid detail-img">
			</div>
		</div>
		<div class="flexbox">
			<div class="plain-text">
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
			</div>
			<div class="plain-text">
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
			</div>
			<div class="plain-text">
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
			</div>
		</div>
	</div>


	<div class="hidden country-detail france-detail">
		<div class="row">
			<img src="<?php echo get_template_directory_uri(); ?>/img/x-button-blue.png" alt="placeholder" class="img-responsive img-fluid exit">
			<div class="col-sm-5 col-md-6">
				<h1>FRANCJA</h1>
				<div class="underline"></div>
				<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
			</div>
			<div class="col-sm-7 col-md-6">
				<img src="<?php echo get_template_directory_uri(); ?>/img/aboutus/aboutus-france.png" alt="" class="img-responsive img-fluid detail-img">
			</div>
		</div>
		<div class="flexbox">
			<div class="plain-text">
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
			</div>
			<div class="plain-text">
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
			</div>
			<div class="plain-text">
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
			</div>
		</div>
	</div>


	<div class="hidden country-detail switzerland-detail">
		<div class="row">
			<img src="<?php echo get_template_directory_uri(); ?>/img/x-button-blue.png" alt="placeholder" class="img-responsive img-fluid exit">
			<div class="col-sm-5 col-md-6">
				<h1>SZWAJCARIA</h1>
				<div class="underline"></div>
				<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
			</div>
			<div class="col-sm-7 col-md-6">
				<img src="<?php echo get_template_directory_uri(); ?>/img/aboutus/aboutus-switrzland.png" alt="" class="img-responsive img-fluid detail-img">
			</div>
		</div>
		<div class="flexbox">
			<div class="plain-text">
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
			</div>
			<div class="plain-text">
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
			</div>
			<div class="plain-text">
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
				<p><div class="hyphen-before"></div>Lorem ipsum dolor</p>
			</div>
		</div>
	</div> -->

</div>
<?php get_footer(); ?>
