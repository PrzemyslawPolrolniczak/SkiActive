$(document).ready(function(){
  $('.contact-img').click(function() {
    $('.contact-info').toggleClass("hidden");
  });




function showFormRegulaminy() {
		// Change button color

		// Hide scrollbar
		$('body').addClass("disable-scroll");
		// Show black overlay
		showAnimation($('.overlay'), 0.5);
		// Show form
		showAnimation($('.regulations-details'), 1);
	}

	function showAnimation(selectedObject, opacity) {
		selectedObject.removeClass('hidden');
		selectedObject.animate({opacity: opacity}, 300);
	}

	function hideAnimation(selectedObject) {
		selectedObject.animate({opacity: 0}, 300, function(){selectedObject.addClass('hidden')});
	}

	function close() {
		hideAnimation($('.overlay'));
		hideAnimation($('.regulations-details'));
		$('body').removeClass("disable-scroll");
		// Remove red validation text and border when form is closed
	};

	$('.regulations').click(function(){
		$('body').addClass("disable-scroll");
		showAnimation($('.overlay'), 0.5);
		showAnimation($('.regulations-details'), 1);
	});



	$('.overlay').click(function(){
		close();
	});

	$('.exit').click(function(){
		close();
	});








});