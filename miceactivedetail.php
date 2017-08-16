<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 *Template Name: miceactivedetail
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SkiActive
 */
 ?>

 <div class="header">
   <div class="row">
     <div class="col-xs-8 col-xs-offset-1">MICE ACTIVE</div>
     <div class="col-xs-2 exit"><img src="<?php echo get_template_directory_uri(); ?>/img/exitButton.png" alt="" class="img-responsive img-fluid"></div>
   </div>
 </div>
 <div class="content">
   <div class='row'>
      <div class="slider sliderMiceActive">
      <?php for ($i = 1; $i <= 20; $i = $i + 1) { ?>
        <?php if( get_field('image' . $i) ): ?>
          <div><img src="<?php the_field('image' . $i); ?>" alt="" class="img-responsive img-fluid slide-image shadowed"></div>
        <?php endif; ?>
      <?php }; ?>
     </div>
  </div>
  <div class="text-row">
    <div class="text-col">
      <div class="plain-text">
        <?php for ($i = 1; $i <= 5; $i = $i + 1) { ?>
          <?php if( get_field('text' . $i) ): ?>
            <p><div class="hyphen-before"></div> <?php the_field('text' . $i); ?></p>
          <?php endif; ?>
        <?php }; ?>
      </div>
      <div class="plain-text">
        <?php for ($i = 6; $i <= 10; $i = $i + 1) { ?>
          <?php if( get_field('text' . $i) ): ?>
            <p><div class="hyphen-before"></div> <?php the_field('text' . $i); ?></p>
          <?php endif; ?>
        <?php }; ?>
      </div>
      <div class="plain-text">
        <?php for ($i = 11; $i <= 15; $i = $i + 1) { ?>
          <?php if( get_field('text' . $i) ): ?>
            <p><div class="hyphen-before"></div> <?php the_field('text' . $i); ?></p>
          <?php endif; ?>
        <?php }; ?>
      </div>
    </div>
  </div>
 </div>
 <div class="footer">
   <div class="row">
     <div class="col-xs-5 col-xs-offset-1 leftText summer-link"><img src="<?php echo get_template_directory_uri(); ?>/img/leftButton.png" alt="" class="img-responsive img-fluid arrow left-arrow">ATRAKCJE LETNIE</div>
     <div class="col-xs-5 rightText winter-link">ATRAKCJE ZIMOWE<img src="<?php echo get_template_directory_uri(); ?>/img/rightButton.png" alt="" class="img-responsive img-fluid arrow right-arrow"></div>
   </div>
 </div>
