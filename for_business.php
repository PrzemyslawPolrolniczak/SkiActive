<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 *Template Name: For Business
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SkiActive
 */
get_header(); ?>
<div class="for_business-site">
  <div class="overlay hidden"></div>
  <div class="container">
    <div class="row section-one">
     <div class="col-sm-7 col-md-6 first-text-section">
       <h1>DLA BIZNESU</h1>
       <h2>DLA BIZNESU</h2>
       <div class="underline"></div>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</p>
     </div>
     <div class="col-md-5 col-md-offset-1 col-sm-5 first-photo-section">
       <img src="<?php echo get_template_directory_uri(); ?>/img/forbusiness/forbusiness-image1.png" alt="" class="img-responsive img-fluid shadowed">
       <button type="button" name="button" class="btn btn-primary btn-outline winter">Sprawdź atrakcje zimowe</button>
     </div>
   </div>
   <div class="row seciton-two">
     <div class="col-sm-5 second-photo-section  hidden-xs">
       <img src="<?php echo get_template_directory_uri(); ?>/img/forbusiness/forbusiness-image2.png" alt="" class="img-responsive img-fluid shadowed">
       <button type="button" name="button" class="btn btn-primary btn-outline summer">Sprawdź atrakcje letnie</button>
     </div>
     <div class="col-sm-6 col-sm-offset-1 second-text-section">
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud e xercitationt xercitationt xercitationt</p>
     </div>
     <div class="col-sm-5 second-photo-section hidden-sm hidden-md hidden-lg">
       <img src="<?php echo get_template_directory_uri(); ?>/img/forbusiness/forbusiness-image2.png" alt="" class="img-responsive img-fluid shadowed">
       <button type="button" name="button" class="btn btn-primary btn-outline summer">Sprawdź atrakcje letnie</button>
     </div>
   </div>
   <div class="row section-three">
     <div class="col-sm-6 third-text-section">
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud e xercitationt xercitationt xercitationt</p>
     </div>
     <div class="col-sm-5 col-sm-offset-1 third-photo-section">
      <img src="<?php echo get_template_directory_uri(); ?>/img/forbusiness/forbusiness-image3.png" alt="" class="img-responsive img-fluid shadowed">
      <button type="button" name="button" class="btn btn-primary btn-outline mice-active">Sprawdź MICE ACTIVE</button>
     </div>
   </div>
   <div class="text-at-the-end">
     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, doloremque fugiat in ducimus saepe numquam, molestiae reiciendis voluptates illum itaque quae eum quidem debitis expedita</p>
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


  <div class="detal hidden component-detal winter-detal" id="detal">

  </div>
</div>
<?php get_footer(); ?>
