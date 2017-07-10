$(document).ready(function(){
  $('.contact-img').click(function() {
    $('.contact-info').toggleClass("hidden");
  });

  function showForm() {
		// Change button color

		// Hide scrollbar
		$('body').addClass("disable-scroll");
		// Show black overlay
		showAnimation($('.overlay'), 0.5);
		// Show form
		showAnimation($('.detal'), 1);
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
		hideAnimation($('.owner1-details'));
		hideAnimation($('.owner2-details'));
		hideAnimation($('.detal'));
		$('body').removeClass("disable-scroll");
	};

	$('.owner1').click(function(){
		$('body').addClass("disable-scroll");
		showAnimation($('.overlay'), 0.5);
		showAnimation($('.owner1-details'), 1);
	});


	$('.owner2').click(function(){
		$('body').addClass("disable-scroll");
		showAnimation($('.overlay'), 0.5);
		showAnimation($('.owner2-details'), 1);
	});

	$('.winter').click(function(){
		$('body').addClass("disable-scroll");
		showAnimation($('.overlay'), 0.5);
		showAnimation($('.detal'), 1);
	});

	$('.overlay').click(function(){
		close();
	});

	$('.exit').click(function(){
		close();
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
	};

	$('.regulations').click(function(){
		$('body').addClass("disable-scroll");
		showAnimation($('.overlay'), 0.5);
		showAnimation($('.regulations-details'), 1);
	});
});


