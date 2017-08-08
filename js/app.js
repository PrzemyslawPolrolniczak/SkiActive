(function() {


  $(document).ready(function() {
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
      selectedObject.animate({
        opacity: opacity
      }, 300);
    }

    function hideAnimation(selectedObject) {
      selectedObject.animate({
        opacity: 0
      }, 300, function() {
        selectedObject.addClass('hidden')
      });
    }

    function close() {
      hideAnimation($('.overlay'));
      hideAnimation($('.owner1-details'));
      hideAnimation($('.owner2-details'));
      $('.detal').addClass('hidden');
      hideAnimation($('.regulations-details'));
      $('body').removeClass("disable-scroll");
      $('.country-detail').addClass('hidden');
    };

    $('.owner1').click(function() {
      $('body').addClass("disable-scroll");
      showAnimation($('.overlay'), 0.5);
      showAnimation($('.owner1-details'), 1);
    });


    $('.owner2').click(function() {
      $('body').addClass("disable-scroll");
      showAnimation($('.overlay'), 0.5);
      showAnimation($('.owner2-details'), 1);
    });

    //SLICK FUNCTION


    $('.question-stripe').slick({
      dots: false,
      slidesToShow: 1,
      infinite: true,
      speed: 500,
      accessibility: false,
      arrows: false,
      draggable: false,
      nextArrow: $('.question-stripe'),
      cssEase: 'ease-in-out',
      //rtl: true,
    });

    $('.question-stripe').click(function() {
      $(this).slick('slickPrev');
    });

    $('.for-you-slider').slick({
      dots: false,
      slidesToShow: 1,
      infinite: false,
      speed: 500,
      accessibility: false,
      arrows: false,
      draggable: false,
      cssEase: 'ease-in-out',
    });



    function removeActiveClass(first, second, third, fourth) {
      $(first).removeClass('active');
      $(second).removeClass('active');
      $(third).removeClass('active');
      $(fourth).removeClass('active');
    }

    $('.for-kids').click(function() {
      $('.for-you-slider').slick('slickGoTo', '0');
      $(this).addClass('active');
      removeActiveClass('.for-adults', '.freeride', '.skitouring', '.for-sport')
    })

    $('.for-adults').click(function() {
      $('.for-you-slider').slick('slickGoTo', '1');
      $(this).addClass('active');
      removeActiveClass('.for-kids', '.freeride', '.skitouring', '.for-sport')
    })

    $('.freeride').click(function() {
      $('.for-you-slider').slick('slickGoTo', '2');
      $(this).addClass('active');
      removeActiveClass('.for-adults', '.for-kids', '.skitouring', '.for-sport')
    })

    $('.skitouring').click(function() {
      $('.for-you-slider').slick('slickGoTo', '3');
      $(this).addClass('active');
      removeActiveClass('.for-adults', '.freeride', '.for-kids', '.for-sport')
    })

    $('.for-sport').click(function() {
      $('.for-you-slider').slick('slickGoTo', '4');
      $(this).addClass('active');
      removeActiveClass('.for-adults', '.freeride', '.skitouring', '.for-kids')
    })

    //HIDE FUNCTION
    function hideModal(first, second) {
      $(first).addClass('hidden');
      $(first).css('opacity', "0");
      $(second).addClass('hidden');
      $(second).css('opacity', "0");
    }
    //////////////

    $('.winter').click(function() {
      $('body').addClass("disable-scroll");
      showAnimation($('.overlay'), 0.5);
      showAnimation($('.winter-detal'), 1);
      detailOpener('./winterdetail/', '.sliderWinter')
    });

    $('.summer').click(function() {
      $('body').addClass("disable-scroll");
      showAnimation($('.overlay'), 0.5);
      showAnimation($('.winter-detal'), 1);
      detailOpener('./summerdetail/', '.sliderSummer')
    });

    $('.mice-active').click(function() {
      $('body').addClass("disable-scroll");
      showAnimation($('.overlay'), 0.5);
      showAnimation($('.winter-detal'), 1);
      detailOpener('./miceactivedetail/', '.sliderMiceActive');
    });

    $('.overlay').click(function() {
      close();
    });

    $('.exit').click(function() {
      close();
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

    // For You site

    var $detal = $("#detal");

    function detailOpener(detailUrl, slider1st, slider2nd) {
      showForm();
      $.ajax({
        url: detailUrl,
        success: function(result) {
          $detal.html(result);
          $('.exit').click(function() {
            close();
            $detal.empty();
          });
          $('.mice-active-link').click(function () {
            detailOpener('./miceactivedetail/', '.sliderMiceActive');
          });
          $('.winter-link').click(function() {
            detailOpener('./winterdetail/', '.sliderWinter');
          });
          $('.summer-link').click(function() {
            detailOpener('./summerdetail/', '.sliderSummer');
          });
          if ($(slider1st).hasClass('slick-initialized') == false) {
            $(slider1st).slick({
              centerMode: false,
              centerPadding: '60px',
              slidesToShow: 3,
              dots: false,
              draggable: false,
              adaptiveHeight: false,
              responsive: [{
                  breakpoint: 992,
                  settings: {
                    arrows: true,
                    draggable: true,
                    dots: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 2
                  }
                },
                {
                  breakpoint: 768,
                  settings: {
                    arrows: false,
                    dots: true,
                    draggable: true,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 2
                  }
                },
                {
                  breakpoint: 480,
                  settings: {
                    dots: true,
                    draggable: true,
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                  }
                }
              ]
            });
            $(slider2nd).slick({
              centerMode: true,
              centerPadding: '60px',
              slidesToShow: 3,
              dots: false,
              draggable: false,
              responsive: [{
                  breakpoint: 992,
                  settings: {
                    arrows: true,
                    draggable: true,
                    dots: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 2
                  }
                },
                {
                  breakpoint: 768,
                  settings: {
                    arrows: false,
                    centerMode: true,
                    draggable: true,
                    centerPadding: '40px',
                    slidesToShow: 2
                  }
                },
                {
                  breakpoint: 480,
                  settings: {
                    draggable: true,
                    dots: true,
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                  }
                }
              ]
            });
          }
        }
      });
    }

    $('.card1').click(function() {
      showForm();
      detailOpener('./detail1/', '.for-you-detal-slider-one', '.for-you-detal-slider-two');
    });

    $('.card2').click(function() {
      showForm();
      detailOpener('./detail2/', '.for-you-detal-slider-one', '.for-you-detal-slider-two');
    });

    function scrollHere(here) {
      $('html, body').animate({
        scrollTop: $(here).offset().top
      }, 500);
    }

    $('.scroll-button').click(function() {
      scrollHere(".scroll-to-here");
    });

    $('.for-you-scroll').click(function() {
      scrollHere(".for-you-waypoint");
    });

    $('.for-business-scroll').click(function() {
      scrollHere(".for-business-waypoint");
    });

    $('.section-one-link').click(function() {
      scrollHere("#section-one-waypoint");
      // $('html, body').animate({
      //   scrollTop: $("#section-one-waypoint").offset().top
      // }, 500);
    });

    $('.section-two-link').click(function() {
      scrollHere("#section-two-waypoint");
    });

    $('.section-three-link').click(function() {
      scrollHere("#section-three-waypoint");
    });

    $('.section-four-link').click(function() {
      scrollHere("#section-four-waypoint");
    });

    $('.section-five-link').click(function() {
      scrollHere("#section-five-waypoint");
    });

    $('.section-six-link').click(function() {
      scrollHere("#section-six-waypoint");
    });

    //HEADER ANIMATION ON SCROLL

    var didScroll;
    var lastScrollTop = 0;
    var delta = 100;
    var navbarHeight = $('header').outerHeight() + 180;
    // on scroll, let the interval function know the user has scrolled
    $(window).scroll(function(event) {
      didScroll = true;
    });
    // run hasScrolled() and reset didScroll status
    setInterval(function() {
      if (didScroll) {
        hasScrolled();
        didScroll = false;
      }
    }, 250);

    function hasScrolled() {
      var st = $(this).scrollTop();

      // Make sure they scroll more than delta
      if (Math.abs(lastScrollTop - st) <= delta)
        return;

      // If they scrolled down and are past the navbar, add class .nav-up.
      // This is necessary so you never see what is "behind" the navbar.
      if (st > lastScrollTop && st > navbarHeight) {
        // Scroll Down
        $('header').removeClass('nav-down').addClass('nav-up');
      } else {
        // Scroll Up
        if (st + $(window).height() < $(document).height()) {
          $('header').removeClass('nav-up').addClass('nav-down');
        }
      }

      lastScrollTop = st;
    }



    $('.aboutus-slider').slick({
      centerMode: false,
      centerPadding: '60px',
      slidesToShow: 4,
      slidesToScroll: 4,
      dots: false,
      draggable: false,
      adaptiveHeight: true,
      arrows: true,
      responsive: [{
          breakpoint: 991,
          settings: {
            draggable: true,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 768,
          settings: {
            draggable: true,
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 3
          }
        },
        {
          breakpoint: 677,
          settings: {
            draggable: true,
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 2
          }
        },
        {
          breakpoint: 500,
          settings: {
            dots: true,
            draggable: true,
            arrows: false,
            centerMode: false,
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }
      ]
    });

    $('.right-arrow').click(function () {
      if ( $('.first').hasClass('hidde') == false ) {
        $('.first').fadeOut(function () {
          $('.first').addClass('hidde');
          $('.second').fadeIn().removeClass('hidde');
        });

      } else if ( $('.second').hasClass('hidde') == false ) {
        $('.second').fadeOut(function () {
          $('.second').addClass('hidde');
          $('.third').fadeIn().removeClass('hidde');
        });

      } else if ( $('.third').hasClass('hidde') == false ) {
        $('.third').fadeOut(function () {
          $('.third').addClass('hidde');
          $('.first').fadeIn().removeClass('hidde');
        });
      }
    });

    $('.left-arrow').click(function () {
      if ( $('.first').hasClass('hidde') == false ) {
        $('.first').fadeOut(function () {
          $('.first').addClass('hidde');
          $('.third').fadeIn().removeClass('hidde');
        });

      } else if ( $('.second').hasClass('hidde') == false ) {
        $('.second').fadeOut(function () {
          $('.second').addClass('hidde');
          $('.first').fadeIn().removeClass('hidde');
        });

      } else if ( $('.third').hasClass('hidde') == false ) {
        $('.third').fadeOut(function () {
          $('.third').addClass('hidde');
          $('.second').fadeIn().removeClass('hidde');
        });
      }
    });

    function kek() {
      if ($('.tile-row').children().length > 1) {
        $('.tile-row').css('height', '390px');
      }
      // var arraey = $('.tile-row').children('.card');
      // console.log(arraey.length());
    }

    if ($('.tile-row').children().length > 1 && $( window ).width() < 976) {
      $('.tile-row').css('height', '390px');
    }

    $( window ).resize( function () {
      if ($('.tile-row').children().length > 1 && $( window ).width() < 976) {
        $('.tile-row').css('height', '390px');
      } else {
        $('.tile-row').css('height', '175px');
      }
    })



    function showingDircetionsDetail(direction) {
      showAnimation($('.overlay'), 0.5);
      $('body').addClass("disable-scroll");
      showAnimation($(direction), 1);
    }

    $('.italia').click(function() {
      showingDircetionsDetail('.italia-detail');
    });

    $('.austria').click(function() {
      showingDircetionsDetail('.austria-detail');
    });

    $('.france').click(function() {
      showingDircetionsDetail('.france-detail');
    });

    $('.switzerland').click(function() {
      showingDircetionsDetail('.switzerland-detail');
    });


    $('.mobile-expander').click(function () {
      $('.contact-mobile-container').slideDown("fast");
    });

    $('.exit-contact').click(function () {
      $('.contact-mobile-container').slideUp("fast");
    });

    $('.burger-menu').click(function () {
      $('.expanded-burger').slideDown("fast");
    });

    $('.exit-burger').click(function () {
      $('.expanded-burger').slideUp("fast");
    });

    function expander(dropdown, arrow) {
      var droped = $(dropdown);
      var expand = $(arrow);
      if (droped.hasClass('hidde') == true ){
        droped.slideDown("slow");
        droped.removeClass('hidde');
        expand.css('transform', 'rotate(180deg)');
      } else {
        droped.slideUp('slow');
        droped.addClass('hidde');
        expand.css('transform', 'none');
      }
    }

    $('.expand-for-you').click(function () {
      expander('.for-you-drop', '.expand-for-you');
    });

    $('.expand-for-business').click(function () {
      expander('.for-business-drop', '.expand-for-business')
    });

    $('.expand-marketing').click(function () {
      expander('.marketing-drop', '.expand-marketing')
    });

    $('.expand-finanses').click(function () {
      expander('.finanses-drop', '.expand-finanses')
    });

    $('.expand-company-info').click(function () {
      expander('.company-info-drop', '.expand-company-info')
    });


  });
})()
