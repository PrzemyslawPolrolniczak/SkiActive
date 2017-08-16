<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
*Template Name: Template
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SkiActive
 */
 get_header(); ?>
<div class="template-site">
	<header>
		<div class="container">
			<h1><?php the_field('header'); ?></h1>
		</div>
	</header>
	<div class="container">
		<div class="logo">
		  <img src="<?php the_field('image_desktop'); ?>" alt="" class="img-responsive img-fluid hidden-xs hidden-sm">
      <img src="<?php the_field('image_tablet'); ?>" alt="" class="img-responsive img-fluid visible-sm">
      <img src="<?php the_field('image_mobile'); ?>" alt="" class="img-responsive img-fluid visible-xs">
		</div>
		<div class="navigation">
			<span>Dowiedz się więcej</span>
      <?php if( get_field('section_one_waypoint') ): ?>
        <h3 class="section-one-link"><?php the_field('section_one_waypoint'); ?></h3>
      <?php endif; ?>
      <?php if( get_field('section_two_waypoint') ): ?>
        <h3 class="section-two-link"><?php the_field('section_two_waypoint'); ?></h3>
      <?php endif; ?>
      <?php if( get_field('section_three_waypoint') ): ?>
        <h3 class="section-three-link"><?php the_field('section_three_waypoint'); ?></h3>
      <?php endif; ?>
      <?php if( get_field('section_four_waypoint') ): ?>
        <h3 class="section-four-link"><?php the_field('section_four_waypoint'); ?></h3>
      <?php endif; ?>
      <?php if( get_field('section_five_waypoint') ): ?>
        <h3 class="section-five-link"><?php the_field('section_five_waypoint'); ?></h3>
      <?php endif; ?>
      <?php if( get_field('section_six_waypoint') ): ?>
        <h3 class="section-six-link"><?php the_field('section_six_waypoint'); ?></h3>
      <?php endif; ?>
			<div id="section-one-waypoint"></div>
		</div>
    <?php if( get_field('section_one_waypoint') ): ?>
		<div class="first-section">
			<h1><?php the_field('section_one_waypoint'); ?></h1>
			<div class="underline"></div>
			<span>Lokalizacja</span>
			<h2><?php the_field('section_one_localization'); ?></h2>
			<p><?php the_field('section_one_localization_text'); ?></p>
			<a href="<?php the_field('section_one_more_info_link'); ?>" target="_blank">Dowiedz się więcej <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-right-b.png" alt="" class="img-responsive img-fluid arrow"></a>
			<a href="<?php the_field('section_one_weather_link'); ?>" target="_blank">Pogoda <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-right-b.png" alt="" class="img-responsive img-fluid arrow"></a>
			<a href="<?php the_field('section_one_webcam_link'); ?>" target="_blank">WebCam <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-right-b.png" alt="" class="img-responsive img-fluid arrow"></a>
			<span>Termin wyjazdu</span>
			<h2><?php the_field('section_one_start_date'); ?> - <?php the_field('section_one_end_date'); ?></h2>
			<span>Zbiórka</span>
			<h2><?php the_field('section_one_time'); ?></h2>
			<h2><?php the_field('section_one_adress'); ?></h2>
			<a href="<?php the_field('section_one_adress_map_link'); ?>" target="_blank">Sprawdź na mapie <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-right-b.png" alt="" class="img-responsive img-fluid arrow"></a>
			<span>Miejsce zakwaterowania</span>
			<h2><?php the_field('section_one_hotel_name'); ?></h2>
			<p><?php the_field('section_one_hotel_info'); ?></p>
			<a href="<?php the_field('section_one_hotel_link'); ?>" target="_blank">Dowiedz się więcej <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-right-b.png" alt="" class="img-responsive img-fluid arrow"></a>
			<span>Warunki ubezpieczenia</span>
			<h2><?php the_field('section_one_insurance_info'); ?></h2>
			<a href="<?php the_field('section_one_insurance_link'); ?>" target="_blank">Pobierz pełną dokumentację <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-right-b.png" alt="" class="img-responsive img-fluid arrow"></a>
			<div id="section-two-waypoint"></div>
		</div>
    <?php endif; ?>
		<div class="second-section">
      <?php if( get_field('section_two_waypoint') ): ?>
			<h1><?php the_field('section_two_waypoint'); ?></h1>
			<div class="underline"></div>
			<p><?php the_field('section_two_text'); ?></p>
			<div class="row">
      <?php for ($i = 1; $i <= 7; $i = $i + 1) { ?>
        <?php if( get_field('section_two_date' . $i) ): ?>
				<div class="events-dates col-xs-12">
					<h3 class="col-md-offset-1"><?php the_field('section_two_date' . $i); ?></h3>
        <?php for ($j = 1; $j <= 7; $j = $j + 1) { ?>
          <?php if( get_field('section_two_date' . $i . '_time' .$j) ): ?>
					<div class="row">
						<div class="col-xs-2 time">
							<p><?php the_field('section_two_date' . $i . '_time' . $j); ?></p>
						</div>
						<div class="col-xs-10">
							<p><?php the_field('section_two_date' . $i . '_text' . $j); ?></p>
						</div>
					</div>
          <?php endif; ?>
        <?php }; ?>
				</div>
        <?php endif; ?>
      <?php }; ?>
			</div>
			<div class="additional-info">
				<h2><?php the_field('section_two_additional_info'); ?></h2>
        <?php for ($i = 1; $i <= 10; $i = $i + 1) { ?>
          <?php if( get_field('section_two_additional_info_hyphen' .$i) ): ?>
				  <p>
            <?php if( get_field('section_two_additional_info_hyphen' . $i . '_link') ): ?>
            <a href="<?php the_field('section_two_additional_info_hyphen' . $i . '_link'); ?>" target="_blank">
            <?php endif; ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/hyphen-before.png" alt="" class="img-responsive img-fluid hyphen">
              <?php the_field('section_two_additional_info_hyphen' . $i); ?>
              <?php if( get_field('section_two_additional_info_hyphen' . $i . '_link') ): ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-right-b.png" alt="" class="img-responsive img-fluid arrow">
              <?php endif; ?>
            <?php if( get_field('section_two_additional_info_hyphen' . $i . '_link') ): ?>
            </a>
            <?php endif; ?>
          </p>
          <?php endif; ?>
        <?php }; ?>
				<div id="section-three-waypoint"></div>
			</div>
      <?php endif; ?>
      <?php if( get_field('section_three_waypoint') ): ?>
			<div class="third-section">
				<h1><?php the_field('section_three_waypoint'); ?></h1>
				<div class="underline"></div>
				<div class="additional-info">
          <h2><?php the_field('section_three_additional_info'); ?></h2>
          <?php for ($i = 1; $i <= 10; $i = $i + 1) { ?>
            <?php if( get_field('section_three_additional_info_hyphen' .$i) ): ?>
  				  <p>
                <img src="<?php echo get_template_directory_uri(); ?>/img/hyphen-before.png" alt="" class="img-responsive img-fluid hyphen">
                <?php the_field('section_three_additional_info_hyphen' . $i); ?>
            </p>
            <?php endif; ?>
          <?php }; ?>
					<h2><?php the_field('section_three_additional_info2'); ?></h2>
					<p><?php the_field('section_three_additional_info2_text'); ?></p>
					<div id="section-four-waypoint"></div>
				</div>
			</div>
      <?php endif; ?>
      <?php if( get_field('section_four_waypoint') ): ?>
			<div class="fourth-section">
				<h1><?php the_field('section_four_waypoint'); ?></h1>
				<div class="underline"></div>
				<h2><?php the_field('section_four_name'); ?></h2>
				<p><?php the_field('section_four_tel'); ?></p>
				<p><?php the_field('section_four_mail'); ?></p>
			</div>
      <?php endif; ?>
		</div>
	</div>
	<div id="section-five-waypoint"></div>
  <?php if( get_field('section_five_waypoint') ): ?>
	<div class="fifth-section">
		<div class="container">
			<h1><?php the_field('section_five_waypoint'); ?></h1>
			<div class="underline"></div>
			<p><?php the_field('section_five_text'); ?></p>
			<a href="<?php the_field('section_five_button_link'); ?>" target="_blank"><button class="btn btn-outline btn-primary"><?php the_field('section_five_button_text'); ?></button></a>
		</div>
		<div id="section-six-waypoint"></div>
	</div>
  <?php endif; ?>
	<div class="container">
    <?php if( get_field('section_six_waypoint') ): ?>
		<div class="sixth-section">
			<h1><?php the_field('section_six_waypoint'); ?></h1>
			<div class="underline"></div>
      <?php for ($i = 1; $i <= 3; $i = $i + 1) { ?>
      <?php if( get_field('section_six_waypoint') ): ?>
			     <h4><?php the_field('section_six_date' . $i); ?></h4>
           <?php for ($j = 1; $j <= 5; $j = $j + 1) { ?>
           <?php if( get_field('section_six_date' . $i . '_subsection' . $j) ): ?>
             <h2><?php the_field('section_six_date' . $i . '_subsection' . $j); ?></h2>
             <div class="position-table">
               <div class="row table-header">
       					<div class="col-xs-2 col-sm-1 col-md-1"><p>Lp.</p></div>
       					<div class="col-xs-7 col-sm-4 col-md-3"><p>Imię i nazwisko</p></div>
       					<div class="col-xs-3 col-sm-2 col-md-1"><p>Czas</p></div>
       				</div>
              <?php for ($k = 1; $k <= 10; $k = $k + 1) { ?>
                <?php if( get_field('section_six_date' . $i . '_subsection' . $j . '_name' . $k) ): ?>
                  <div class="row">
          					<div class="col-xs-2 col-sm-1 col-md-1 bold"><p><?php echo $k ?>.</p></div>
          					<div class="col-xs-7 col-sm-4 col-md-3"><p><?php the_field('section_six_date' . $i . '_subsection' . $j . '_name' . $k); ?></p></div>
          					<div class="col-xs-3 col-sm-2 col-md-1"><p><?php the_field('section_six_date' . $i . '_subsection' . $j . '_time' . $k); ?></p></div>
          				</div>
                <?php endif; ?>
              <?php }; ?>
             </div>
           <?php endif; ?>
           <?php }; ?>
      <?php endif; ?>
      <?php }; ?>
			<footer>
				<h2><a href="https://www.skiactive.com">www.skiactive.com</a></h2>
				<div class="icons">
					<a href="<?php the_field('facebook_link'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/face-icon.png" alt="facebook icon" class="img-responsive img-fluid"></a>
					<a href="<?php the_field('instagram_link'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/insta-icon.png" alt="instagram icon" class="img-responsive img-fluid"></a>
				</div>
			</footer>
		</div>
    <?php endif; ?>
	</div>

</div>
