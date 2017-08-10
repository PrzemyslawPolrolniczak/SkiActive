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
					<h4>Katarzyna Żmuda</h4>
					<p>
						+48 796 472930
					</p>
					<p>
						katarzyna@skiactive.com
					</p>
				</div>
				<div class="person col-xs-6 col-md-4">
					<h4>Katarzyna Żmuda</h4>
					<p>
						+48 796 472930
					</p>
					<p>
						katarzyna@skiactive.com
					</p>
				</div>
				<div class="person col-xs-6 col-md-4">
					<h4>Katarzyna Żmuda</h4>
					<p>
						+48 796 472930
					</p>
					<p>
						katarzyna@skiactive.com
					</p>
				</div>
		</div>

		<div class="row row-contact">
				<div class="person col-xs-6 col-md-4">
					<h4>Adam Nowak</h4>
					<p>
						+48 796 472930
					</p>
					<p>
						adam@skiactive.com
					</p>
				</div>
				<div class="person col-xs-6 col-md-4">
					<h4>Adam Nowak</h4>
					<p>
						+48 796 472930
					</p>
					<p>
						adam@skiactive.com
					</p>
				</div>
				<div class="contact-header col-xs-6 col-md-4">
					<h3>FINANSE</h3>
					<div class="underline"></div>
				</div>
		</div>


		<div class="row row-contact">
				<div class="person col-xs-6 col-md-4">
					<h4>Jan Kowalski</h4>
					<p>
						+48 796 472930
					</p>
					<p>
						jan@skiactive.com
					</p>
				</div>
				<div class="person col-xs-6 col-md-4">
					<h4>Jan Kowalski</h4>
					<p>
						+48 796 472930
					</p>
					<p>
						jan@skiactive.com
					</p>
				</div>
				<div class="person col-xs-6 col-md-4">
					<h4>Łukasz Kuźmiński</h4>
					<p>
						+48 796 472930
					</p>
					<p>
						lukasz@skiactive.com
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
					<h4>Rafał Sionek, Łukasz Kuźmiński Spółka Jawna</h4>
					<p>
						ul. Pawia 20 lok. D
					</p>
					<p>
						52-235 Wrocław
					</p>
				</div>
				<div class="person col-xs-6 col-md-6">
					<h4>SKIACTIVE</h4>
					<p>
						ul. Pawia 20 lok. D
					</p>
					<p>
						52-235 Wrocław
					</p>
				</div>

	  		</div>

	  		<div class="row row-contact">

	  			<div class="person firm-data col-xs-6 col-md-6">
					<p>
						NIP: PL8992662434<br>REGON: 020914960<br>KRS: 0000322349<br>

<br>ALIOR BANK SA
<br>IBAN: 77 2490 0005 0000 4500 1263 5570
<br>SWIFT: ALBPPLPW
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
				<p>Katarzyna Żmuda</p>
				<a href="">+48 796 472930</a>
				<a href="">katarzyna@skiactive.com</a>
			</div>
			<div class="person">
				<p>Adam Nowak</p>
				<a href="">+48 796 472930</a>
				<a href="">adam@skiactive.com</a>
			</div>
			<div class="person">
				<p>Jan Kowalski</p>
				<a href="">+48 796 472930</a>
				<a href="">jan@skiactive.com</a>
			</div>
		</div>
		<div class="row hidden-lg hidden-md for-business-expander">
			<h1>DLA BIZNESU</h1>
			<img src="<?php echo get_template_directory_uri(); ?>/img/expand-arrow.png" class="img-responsive img-fluid expand-for-business">
		</div>
		<div class="hidde hidden-lg hidden-md for-business-drop">
			<div class="person">
				<p>Katarzyna Żmuda</p>
				<a href="">+48 796 472930</a>
				<a href="">katarzyna@skiactive.com</a>
			</div>
			<div class="person">
				<p>Adam Nowak</p>
				<a href="">+48 796 472930</a>
				<a href="">adam@skiactive.com</a>
			</div>
			<div class="person">
				<p>Jan Kowalski</p>
				<a href="">+48 796 472930</a>
				<a href="">jan@skiactive.com</a>
			</div>
		</div>
		<div class="row hidden-lg hidden-md marketing-expander">
			<h1>MARKETING</h1>
			<img src="<?php echo get_template_directory_uri(); ?>/img/expand-arrow.png" class="img-responsive img-fluid expand-marketing">
		</div>
		<div class="hidde hidden-lg hidden-md marketing-drop">
			<div class="person">
				<p>Katarzyna Żmuda</p>
				<a href="">+48 796 472930</a>
				<a href="">katarzyna@skiactive.com</a>
			</div>
			<div class="person">
				<p>Adam Nowak</p>
				<a href="">+48 796 472930</a>
				<a href="">adam@skiactive.com</a>
			</div>
			<div class="person">
				<p>Jan Kowalski</p>
				<a href="">+48 796 472930</a>
				<a href="">jan@skiactive.com</a>
			</div>
		</div>
		<div class="row hidden-lg hidden-md finanses-expander">
			<h1>FINANSE</h1>
			<img src="<?php echo get_template_directory_uri(); ?>/img/expand-arrow.png" class="img-responsive img-fluid expand-finanses">
		</div>
		<div class="hidde hidden-lg hidden-md finanses-drop">
			<div class="person">
				<p>Katarzyna Żmuda</p>
				<a href="">+48 796 472930</a>
				<a href="">katarzyna@skiactive.com</a>
			</div>
			<div class="person">
				<p>Adam Nowak</p>
				<a href="">+48 796 472930</a>
				<a href="">adam@skiactive.com</a>
			</div>
			<div class="person">
				<p>Jan Kowalski</p>
				<a href="">+48 796 472930</a>
				<a href="">jan@skiactive.com</a>
			</div>
		</div>
		<div class="row alt-color hidden-lg hidden-md company-info-expander">
			<h1>DANE SPÓŁKI</h1>
			<img src="<?php echo get_template_directory_uri(); ?>/img/expand-arrow-blue.png" class="img-responsive img-fluid expand-company-info">
		</div>
		<div class="hidde hidden-lg hidden-md company-info-drop">
			<div class="person">
				<p>Rafał Sionek, Łukasz Kuźmiński Spółka Jawna</p>
				<span>ul. Pawia 20 lok. D</span>
				<span>52-235 Wrocław</span>
			</div>
			<div class="person">
				<span>NIP: PL8992662434</span>
				<span>REGON: 020914960</span>
				<span>KRS: 0000322349</span>
			</div>
			<div class="person">
				<span>ALIOR BANK SA </span>
				<span>IBAN: 77 2490 0005 0000 4500 1263 5570 </span>
				<span>SWIFT: ALBPPLPW</span>
			</div>
			<div class="person">
				<p>Adres korespondencyjny </p>
				<span>SKIACTIVE</span>
				<span>ul. Pawia 20 lok. D</span>
				<span>52-235 Wrocław</span>
			</div>
		</div>
	</div>

</div>





<?php get_footer(); ?>
