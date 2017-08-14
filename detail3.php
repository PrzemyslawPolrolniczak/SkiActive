<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 *Template Name: detail3
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SkiActive
 */
 ?>


  <div class="header">
    <div class="row">
      <div class="col-xs-8 col-xs-offset-1"><?php the_field('place'); ?><br class="visible-xs"><span class="hidden-xs">-</span> <?php the_field('place_description'); ?></div>
      <div class="col-xs-2 exit"><img src="<?php echo get_template_directory_uri(); ?>/img/exitButton.png" alt="" class="img-responsive img-fluid"></div>
    </div>
  </div>

  <div class="scrollable">
    <div class="content">
      <div class="hero-text">
        <h1><?php the_field('place'); ?></h1>
        <h2><?php the_field('place_description'); ?></h2>
        <div class="underline"></div>
      </div>
      <div class='row'>
         <div class="slider for-you-detal-slider-one">
        <?php for ($i = 1; $i <= 20; $i = $i + 1) { ?>

          <?php if( get_field('image' . $i) ): ?>
            <div><img src="<?php the_field('image' . $i); ?>" alt="" class="img-responsive img-fluid slide-image shadowed"></div>
          <?php endif; ?>

        <?php }; ?>
        </div>
     </div>
    </div>
    <div class="row container center-margins">
      <div class="col-sm-5 col-lg-4 col-lg-offset-1">
        <p class="info-header">Termin</p>
        <p class="info-paragraph"><?php the_field('start_date'); ?> - <?php the_field('end_date'); ?></p>
        <p class="info-header">Zakwaterowanie</p>
        <p class="info-paragraph"><a href="<?php the_field('accommodation_link'); ?>" target='_blank'><?php the_field('accommodation'); ?> <img src="<?php echo get_template_directory_uri(); ?>/img/right-arrow.png" alt="" class="img-responsive img-fluid arrow"></a></p>
        <p class="info-header"><?php the_field('level'); ?></p>
        <div class="boxes">
          <?php if( get_field('tile_level') == 'lv0' ): ?>
            <div class="lv0"></div>
            <div class="lv0"></div>
            <div class="lv0"></div>
            <div class="lv0"></div>
            <div class="lv0"></div>
          <?php endif; ?>
          <?php if( get_field('tile_level') == 'lv1' ): ?>
            <div class="lv1"></div>
            <div class="lv0"></div>
            <div class="lv0"></div>
            <div class="lv0"></div>
            <div class="lv0"></div>
          <?php endif; ?>
          <?php if( get_field('tile_level') == 'lv2' ): ?>
            <div class="lv1"></div>
            <div class="lv2"></div>
            <div class="lv0"></div>
            <div class="lv0"></div>
            <div class="lv0"></div>
          <?php endif; ?>
          <?php if( get_field('tile_level') == 'lv3' ): ?>
            <div class="lv1"></div>
            <div class="lv2"></div>
            <div class="lv3"></div>
            <div class="lv0"></div>
            <div class="lv0"></div>
          <?php endif; ?>
          <?php if( get_field('tile_level') == 'lv4' ): ?>
            <div class="lv1"></div>
            <div class="lv2"></div>
            <div class="lv3"></div>
            <div class="lv4"></div>
            <div class="lv0"></div>
          <?php endif; ?>
          <?php if( get_field('tile_level') == 'lv5' ): ?>
            <div class="lv1"></div>
            <div class="lv2"></div>
            <div class="lv3"></div>
            <div class="lv4"></div>
            <div class="lv5"></div>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-6 col-sm-7">
        <p class="info-text"><?php the_field('info_text'); ?></p>
        <a href="<?php the_field('weather_link'); ?>" target='_blank' class="weather">Sprawdź prognozę pogody <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-right-o.png" alt="" class="img-responsive img-fluid arrow"></a>
        <a href="<?php the_field('ski_runs_link'); ?>" target='_blank' class="route">Sprawdź mapę tras narciarskich <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-right-b.png" alt="" class="img-responsive img-fluid arrow"></a>
      </div>
    </div>
    <div class="info-section row container">
    <?php if( get_field('section1_visible') == 'yes' ): ?>
      <div class="section-part">
        <h1><?php the_field('section1_header'); ?></h1>
        <div class="underline"></div>
      <?php if( get_field('section1_subsection1_visible') == 'yes' ): ?>
        <h3><?php the_field('section1_subsection1_header'); ?></h3>
        <p><?php the_field('section1_subsection1_text'); ?></p>
      <?php endif; ?>
      <?php if( get_field('section1_subsection2_visible') == 'yes' ): ?>
        <h3><?php the_field('section1_subsection2_header'); ?></h3>
        <p><?php the_field('section1_subsection2_text'); ?></p>
      <?php endif; ?>
      </div>
    <?php endif; ?>

    <?php if( get_field('section2_visible') == 'yes' ): ?>
      <div class="section-part">
        <h1><?php the_field('section2_header'); ?></h1>
        <div class="underline"></div>
      <?php if( get_field('section2_subsection1_visible') == 'yes' ): ?>
        <h3><?php the_field('section2_subsection1_header'); ?></h3>
        <p><?php the_field('section2_subsection1_text'); ?></p>
      <?php endif; ?>
      <?php if( get_field('section2_subsection2_visible') == 'yes' ): ?>
        <h3><?php the_field('section2_subsection2_header'); ?></h3>
        <p><?php the_field('section2_subsection2_text'); ?></p>
      <?php endif; ?>
      </div>
    <?php endif; ?>

    <?php if( get_field('section3_visible') == 'yes' ): ?>
      <div class="section-part">
        <h1><?php the_field('section3_header'); ?></h1>
        <div class="underline"></div>
      <?php if( get_field('section3_subsection1_visible') == 'yes' ): ?>
        <h3><?php the_field('section3_subsection1_header'); ?></h3>
        <p><?php the_field('section3_subsection1_text'); ?></p>
      <?php endif; ?>
      <?php if( get_field('section3_subsection2_visible') == 'yes' ): ?>
        <h3><?php the_field('section3_subsection2_header'); ?></h3>
        <p><?php the_field('section3_subsection2_text'); ?></p>
      <?php endif; ?>
      </div>
    <?php endif; ?>

    <?php if( get_field('section4_visible') == 'yes' ): ?>
      <div class="section-part">
        <h1><?php the_field('section4_header'); ?></h1>
        <div class="underline"></div>
      <?php if( get_field('section4_subsection1_visible') == 'yes' ): ?>
        <h3><?php the_field('section4_subsection1_header'); ?></h3>
        <p><?php the_field('section4_subsection1_text'); ?></p>
      <?php endif; ?>
      <?php if( get_field('section4_subsection2_visible') == 'yes' ): ?>
        <h3><?php the_field('section4_subsection2_header'); ?></h3>
        <p><?php the_field('section4_subsection2_text'); ?></p>
      <?php endif; ?>
      </div>
    <?php endif; ?>

    <?php if( get_field('section5_visible') == 'yes' ): ?>
      <div class="section-part">
        <h1><?php the_field('section5_header'); ?></h1>
        <div class="underline"></div>
      <?php if( get_field('section5_subsection1_visible') == 'yes' ): ?>
        <h3><?php the_field('section5_subsection1_header'); ?></h3>
        <p><?php the_field('section5_subsection1_text'); ?></p>
      <?php endif; ?>
      <?php if( get_field('section5_subsection2_visible') == 'yes' ): ?>
        <h3><?php the_field('section5_subsection2_header'); ?></h3>
        <p><?php the_field('section5_subsection2_text'); ?></p>
      <?php endif; ?>
      </div>
    <?php endif; ?>

    </div>
    <div class='row test'>
       <div class="slider for-you-detal-slider-two">
         <?php for ($i = 1; $i <= 20; $i = $i + 1) { ?>

           <?php if( get_field('second_image' . $i) ): ?>
             <div><img src="<?php the_field('second_image' . $i); ?>" alt="" class="img-responsive img-fluid slide-image shadowed"></div>
           <?php endif; ?>

         <?php }; ?>
      </div>
   </div>
   <div class="row container info-section">
    <?php if( get_field('section6_visible') == 'yes' ): ?>
     <div class="section-part">
       <h1><?php the_field('section6_header'); ?></h1>
       <div class="underline"></div>
       <p><?php the_field('section6_text'); ?></p>

       <?php for ($i = 1; $i <= 14; $i = $i + 1) { ?>

         <?php if( get_field('agenda_subfield' . $i . '_visible') == 'yes' ): ?>

         <div class="row">
           <div class="events-dates col-xs-12">
             <h3 class="col-md-offset-1"><?php the_field('agenda_subfield' . $i . '_date'); ?></h3>

             <?php for ($j = 1; $j <= 7; $j = $j + 1) { ?>

              <?php if( get_field('agenda_subfield' . $i . '_time' . $j) ): ?>

             <div class="row">
               <div class="col-xs-2 time">
                 <p><?php the_field('agenda_subfield' . $i . '_time' . $j); ?></p>
               </div>
               <div class="col-xs-10">
                 <p><?php the_field('agenda_subfield' . $i . '_text' . $j); ?></p>
               </div>
             </div>

              <?php endif; ?>

             <?php }; ?>

           </div>
         </div>

         <?php endif; ?>

       <?php }; ?>
     </div>
   <?php endif; ?>
   <?php if( get_field('section7_visible') == 'yes' ): ?>
     <div class="section-part">
       <h1><?php the_field('section7_header'); ?></h1>
       <div class="underline"></div>

       <div class="row">
         <div class="events-dates col-xs-12">
           <?php for ($i = 1; $i <= 10; $i = $i + 1) { ?>
           <div class="row">
             <div class="col-xs-3 col-sm-2 time">
               <p><?php the_field('section7_price' . $i ); ?></p>
             </div>
             <div class="col-xs-9 col-sm-10">
               <p><?php the_field('section7_text' . $i ); ?></p>
             </div>
           </div>
           <?php }; ?>

         </div>
       </div>
     </div>
     <?php endif; ?>

     <?php if( get_field('section8_visible') == 'yes' ): ?>
       <div class="section-part">
         <h1><?php the_field('section8_header'); ?></h1>
         <div class="underline"></div>
       <?php if( get_field('section8_subsection1_visible') == 'yes' ): ?>
         <h3><?php the_field('section8_subsection1_header'); ?></h3>
         <p><?php the_field('section8_subsection1_text'); ?></p>
       <?php endif; ?>
       <?php if( get_field('section8_subsection2_visible') == 'yes' ): ?>
         <h3><?php the_field('section8_subsection2_header'); ?></h3>
         <p><?php the_field('section8_subsection2_text'); ?></p>
       <?php endif; ?>
       </div>
     <?php endif; ?>

   </div>
    <div class="footer">
      <div class="row">
        <div class="container">
          <h1>Masz pytania dotyczące tego wyjazdu?<br class="hidden-md hidden-lg"> <span class="hidden-md hidden-lg">&nbsp</span> <span>+48 123 456789 &nbsp|&nbsp dlaciebie@skiactive.com</span></h1>
        </div>
      </div>
    </div>
  </div>
