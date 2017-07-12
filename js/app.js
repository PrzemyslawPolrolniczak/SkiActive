$(document).ready(function(){
  $('.contact-img').click(function() {
    $('.contact-info').toggleClass("hidden");
  });

  function showForm() {
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
		$('.detal').addClass('hidden');
    hideAnimation($('.regulations-details'));
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

 //UNSLCIK FUNCTION
  function unslickSlick(slick1, slick2, slick3) {

    if ($(slick1).hasClass('slick-initialized') == true) {
      $(slick1).slick('unslick');
    }
    if ($(slick2).hasClass('slick-initialized') == true) {
      $(slick2).slick('unslick');
    }
    if ($(slick3).hasClass('slick-initialized') == true) {
      $(slick3).slick('unslick');
    }
  }

//SLICK FUNCTION


$('.question-stripe').slick({
  dots: false,
  slidesToShow: 1,
  infinite: false,
  speed: 500,
  accessibility: false,
  arrows: false,
  draggable: false,
  nextArrow: $('.question-stripe'),
  cssEase: 'ease-in-out',
});

$('.question-stripe').click(function () {
  $(this).slick('slickNext');
});

function initSlider(sliderName) {
    $(sliderName).slick({
      centerMode: true,
      centerPadding: '60px',
      slidesToShow: 3,
      dots: true,
      draggable: false,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 3
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
          }
        }
      ]
    });
  }

//HIDE FUNCTION
  function hideModal(first, second) {
    $(first).addClass('hidden');
    $(first).css('opacity', "0");
    $(second).addClass('hidden');
    $(second).css('opacity', "0");
  }
//////////////

	$('.winter').click(function(){
		$('body').addClass("disable-scroll");
		showAnimation($('.overlay'), 0.5);
		showAnimation($('.winter-detal'), 1);
    unslickSlick('.sliderSummer', '.sliderMiceActive');
    if ($('.sliderWinter').hasClass('slick-initialized') == false) {
      initSlider('.sliderWinter');
    }
	});

  $('.summer').click(function(){
		$('body').addClass("disable-scroll");
		showAnimation($('.overlay'), 0.5);
		showAnimation($('.summer-detal'), 1);
    unslickSlick('.sliderWinter', '.sliderMiceActive');
    if ($('.sliderSummer').hasClass('slick-initialized') == false) {
      initSlider('.sliderSummer');
    }
	});

  $('.mice-active').click(function(){
		$('body').addClass("disable-scroll");
		showAnimation($('.overlay'), 0.5);
		showAnimation($('.mice-active-detal'), 1);
    unslickSlick('.sliderWinter', '.sliderSummer');
    if ($('.sliderMiceActive').hasClass('slick-initialized') == false) {
      initSlider('.sliderMiceActive');
    }
	});

	$('.overlay').click(function(){
		close();
    unslickSlick('.sliderSummer', '.sliderWinter', '.sliderMiceActive');
	});

	$('.exit').click(function(){
		close();
    unslickSlick('.sliderSummer', '.sliderWinter', '.sliderMiceActive');
	});

  $('.mice-active-link').click(function () {
    hideModal('.winter-detal', '.summer-detal');
    showAnimation($('.mice-active-detal'), 1);
    unslickSlick('.sliderWinter', '.sliderSummer');
    if ($('.sliderMiceActive').hasClass('slick-initialized') == false) {
      initSlider('.sliderMiceActive');
    }
  });

  $('.winter-link').click(function () {
    hideModal('.mice-active-detal', '.summer-detal');
    showAnimation($('.winter-detal'), 1);
    unslickSlick('.sliderSummer', '.sliderMiceActive');
    if ($('.sliderWinter').hasClass('slick-initialized') == false) {
      initSlider('.sliderWinter');
    }
  });

  $('.summer-link').click(function () {
    hideModal('.winter-detal', '.mice-active-detal');
    showAnimation($('.summer-detal'), 1);
    unslickSlick('.sliderWinter', '.sliderMiceActive');
    if ($('.sliderSummer').hasClass('slick-initialized') == false) {
      initSlider('.sliderSummer');
    }
  });

  function showFormRegulaminy() {
		// Hide scrollbar
		$('body').addClass("disable-scroll");
		// Show black overlay
		showAnimation($('.overlay'), 0.5);
		// Show form
		showAnimation($('.regulations-details'), 1);
	}

	$('.regulations').click(function() {
		$('body').addClass("disable-scroll");
		showAnimation($('.overlay'), 0.5);
		showAnimation($('.regulations-details'), 1);
	});
});
