<?php
/**
* The template for displaying all pages
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
*Template Name: Contact
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package SkiActive
*/
get_header(); ?>

<div class="contact container">

	<div class=" top-contact col-xs-offset-1 col-xs-10 hidden-sm hidden-xs">



		<div class="row row-contact">
			<div class="contact-header col-xs-6 col-md-4">
				<h3>DLA CIEBIE</h3>
				<div class="underline"></div>
			</div>
			<div class="contact-header col-xs-6 col-md-4">
				<h3>DLA BIZNESU</h3>
				<div class="underline"></div>
			</div>
			<div class="contact-header col-xs-6 col-md-4">
				<h3>MARKETING</h3>
				<div class="underline"></div>
			</div>
		</div>


		<div class="row row-contact">
			<div class="person col-xs-6 col-md-4">
					<h4><?php the_field('for_you_name1'); ?></h4>
					<p>
						<?php the_field('for_you_tel1'); ?>
					</p>
					<p>
						<?php the_field('for_you_mail1'); ?>
					</p>
				</div>
				<div class="person col-xs-6 col-md-4">
					<h4><?php the_field('for_business_name1'); ?></h4>
					<p>
						<?php the_field('for_business_tel1'); ?>
					</p>
					<p>
						<?php the_field('for_business_mail1'); ?>
					</p>
				</div>
				<div class="person col-xs-6 col-md-4">
					<h4><?php the_field('marketing_name'); ?></h4>
					<p>
						<?php the_field('marketing_tel'); ?>
					</p>
					<p>
						<?php the_field('marketing_mail'); ?>
					</p>
				</div>
		</div>

		<div class="row row-contact">
				<div class="person col-xs-6 col-md-4">
					<h4><?php the_field('for_you_name2'); ?></h4>
					<p>
						<?php the_field('for_you_tel2'); ?>
					</p>
					<p>
						<?php the_field('for_you_mail2'); ?>
					</p>
				</div>
				<div class="person col-xs-6 col-md-4">
					<h4><?php the_field('for_business_name2'); ?></h4>
					<p>
						<?php the_field('for_business_tel2'); ?>
					</p>
					<p>
						<?php the_field('for_business_mail2'); ?>
					</p>
				</div>
				<div class="contact-header col-xs-6 col-md-4">
					<h3>FINANSE</h3>
					<div class="underline"></div>
				</div>
		</div>


		<div class="row row-contact">
				<div class="person col-xs-6 col-md-4">
					<h4><?php the_field('for_you_name3'); ?></h4>
					<p>
						<?php the_field('for_you_tel3'); ?>
					</p>
					<p>
						<?php the_field('for_you_mail3'); ?>
					</p>
				</div>
				<div class="person col-xs-6 col-md-4">
					<h4><?php the_field('for_business_name3'); ?></h4>
					<p>
						<?php the_field('for_business_tel3'); ?>
					</p>
					<p>
						<?php the_field('for_business_mail3'); ?>
					</p>
				</div>
				<div class="person col-xs-6 col-md-4">
					<h4><?php the_field('finanses_name'); ?></h4>
					<p>
						<?php the_field('finanses_tel'); ?>
					</p>
					<p>
						<?php the_field('finanses_mail'); ?>
					</p>
				</div>
		</div>

	</div>

	<div class="line col-md-12 hidden-xs hidden-sm"></div>

	<div class="bottom-contact hidden-xs hidden-sm" >

		<img src="<?php echo get_template_directory_uri(); ?>/img/trees.png" alt="winter trees" class="img-responsive img-fluid">

		<div class="bottom-contact-container col-xs-offset-1 col-xs-10">
			<div class="row row-contact">

	  			<div class="contact-header col-xs-6 col-md-6">
					<h3>DANE SPÓŁKI</h3>
					<div class="underline"></div>
				</div>

				<div class="contact-header col-xs-6 col-md-6">
					<h3>ADRES KORESPONDENCYJNY</h3>
					<div class="underline"></div>
				</div>

	  		</div>

	  		<div class="row row-contact">

	  			<div class="person col-xs-6 col-md-6">
					<h4><?php the_field('company_name'); ?></h4>
					<p>
						<?php the_field('company_adress'); ?>
					</p>
					<p>
						<?php the_field('company_postcode'); ?>
					</p>
				</div>
				<div class="person col-xs-6 col-md-6">
					<h4><?php the_field('correspondence_name'); ?></h4>
					<p>
						<?php the_field('correspondence_adress'); ?>
					</p>
					<p>
						<?php the_field('correspondence_postcode'); ?>
					</p>
				</div>

	  		</div>

	  		<div class="row row-contact">

	  			<div class="person firm-data col-xs-6 col-md-6">
					<p>
						<?php the_field('company_info'); ?>
					</p>
				</div>

	  		</div>


		</div>
	</div>



	<!-- Visible on mobile -->
	<div class="mobile-view">
		<div class="row hidden-lg hidden-md for-you-expander">
			<h1>DLA CIEBIE</h1>
			<img src="<?php echo get_template_directory_uri(); ?>/img/expand-arrow.png" class="img-responsive img-fluid expand-for-you">
		</div>
		<div class="hidde hidden-lg hidden-md for-you-drop">
			<div class="person">
				<p><?php the_field('for_you_name1'); ?></p>
				<a href="tel:<?php the_field('for_you_tel1'); ?>"><?php the_field('for_you_tel1'); ?></a>
				<a href="mailto:<?php the_field('for_you_mail1'); ?>"><?php the_field('for_you_mail1'); ?></a>
			</div>
			<div class="person">
				<p><?php the_field('for_you_name2'); ?></p>
				<a href="tel:<?php the_field('for_you_tel2'); ?>"><?php the_field('for_you_tel2'); ?></a>
				<a href="mailto:<?php the_field('for_you_mail2'); ?>"><?php the_field('for_you_mail2'); ?></a>
			</div>
			<div class="person">
				<p><?php the_field('for_you_name3'); ?></p>
				<a href="tel:<?php the_field('for_you_tel3'); ?>"><?php the_field('for_you_tel3'); ?></a>
				<a href="mailto:<?php the_field('for_you_mail3'); ?>"><?php the_field('for_you_mail3'); ?></a>
			</div>
		</div>
		<div class="row hidden-lg hidden-md for-business-expander">
			<h1>DLA BIZNESU</h1>
			<img src="<?php echo get_template_directory_uri(); ?>/img/expand-arrow.png" class="img-responsive img-fluid expand-for-business">
		</div>
		<div class="hidde hidden-lg hidden-md for-business-drop">
			<div class="person">
				<p><?php the_field('for_business_name1'); ?></p>
				<a href="tel:<?php the_field('for_business_tel1'); ?>"><?php the_field('for_business_tel1'); ?></a>
				<a href="mailto:<?php the_field('for_business_mail1'); ?>"><?php the_field('for_business_mail1'); ?></a>
			</div>
			<div class="person">
				<p><?php the_field('for_business_name2'); ?></p>
				<a href="tel:<?php the_field('for_business_tel2'); ?>"><?php the_field('for_business_tel2'); ?></a>
				<a href="mailto:<?php the_field('for_business_mail2'); ?>"><?php the_field('for_business_mail2'); ?></a>
			</div>
			<div class="person">
				<p><?php the_field('for_business_name3'); ?></p>
				<a href="tel:<?php the_field('for_business_tel3'); ?>"><?php the_field('for_business_tel3'); ?></a>
				<a href="mailto:<?php the_field('for_business_mail3'); ?>"><?php the_field('for_business_mail3'); ?></a>
			</div>
		</div>
		<div class="row hidden-lg hidden-md marketing-expander">
			<h1>MARKETING</h1>
			<img src="<?php echo get_template_directory_uri(); ?>/img/expand-arrow.png" class="img-responsive img-fluid expand-marketing">
		</div>
		<div class="hidde hidden-lg hidden-md marketing-drop">
			<div class="person">
				<p><?php the_field('marketing_name'); ?></p>
				<a href="tel:<?php the_field('marketing_tel'); ?>"><?php the_field('marketing_tel'); ?></a>
				<a href="mailto:<?php the_field('marketing_mail'); ?>"><?php the_field('marketing_mail'); ?></a>
			</div>
		</div>
		<div class="row hidden-lg hidden-md finanses-expander">
			<h1>FINANSE</h1>
			<img src="<?php echo get_template_directory_uri(); ?>/img/expand-arrow.png" class="img-responsive img-fluid expand-finanses">
		</div>
		<div class="hidde hidden-lg hidden-md finanses-drop">
			<div class="person">
				<p><?php the_field('finanses_name'); ?></p>
				<a href="tel:<?php the_field('finanses_tel'); ?>"><?php the_field('finanses_tel'); ?></a>
				<a href="mailto:<?php the_field('finanses_mail'); ?>"><?php the_field('finanses_mail'); ?></a>
			</div>
		</div>
		<div class="row alt-color hidden-lg hidden-md company-info-expander">
			<h1>DANE SPÓŁKI</h1>
			<img src="<?php echo get_template_directory_uri(); ?>/img/expand-arrow-blue.png" class="img-responsive img-fluid expand-company-info">
		</div>
		<div class="hidde hidden-lg hidden-md company-info-drop">
			<div class="person">
				<p><?php the_field('company_name'); ?></p>
				<span><?php the_field('company_adress'); ?></span>
				<span><?php the_field('company_postcode'); ?></span>
			</div>
			<div class="person">
				<span><?php the_field('company_info'); ?></span>
			</div>
			<div class="person">
				<p>Adres korespondencyjny </p>
				<span><?php the_field('correspondence_name'); ?></span>
				<span><?php the_field('correspondence_adress'); ?></span>
				<span><?php the_field('correspondence_postcode'); ?></span>
			</div>
		</div>
	</div>

</div>





<?php get_footer(); ?>
