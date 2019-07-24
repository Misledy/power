setTimeout(function () {
  $('#eapps-instagram-feed-1').find('a').last().css('display', 'none')
}, 1500)

$('.carousel-banner').slick({
  // arrows: false,
  infinite: false,
  prevArrow: '<div class="slick-prev-arrow"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>',//$('.slick-prev-arrow'),
  nextArrow: '<div class="slick-next-arrow"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>',//$('.slick-next-arrow'),
});
// ANIMATE
wow = new WOW(
  {
    animateClass: 'animated',
    offset: 100,
    callback: function (box) {
      console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
    }
  }
);
wow.init();

// slideshow

$(document).ready(function () {
  $('.slideshow').click(function () {
    $('body, html').animate({
      scrollTop: '0px'
    }, 500);
  });
});

$('.info-extra .collapse').collapse();
$('.btn-info-extra').click(function () {
  if ($(this).find('.fa').hasClass('fa-plus')) {
    $(this).find('.fa').removeClass('fa-plus')
    $(this).find('.fa').addClass('fa-minus')
  }
  else {
    $(this).find('.fa').removeClass('fa-minus')
    $(this).find('.fa').addClass('fa-plus')
  }
})


$(document).ready(function () {
  $(window).on("scroll", function () {
    if ($(window).scrollTop() >= 130) {
      $(".fixed-2").addClass('show-visib')
      // $('header').css('display', 'none')
      // $('.logo-fixed').css('display', 'initial')
      // $('.search-fixed').css('display', 'initial')
    } else {
      // $("header").removeClass('nav-fixed');
      $(".fixed-2").removeClass('show-visib')

      // $('header').css('display', 'initial')
      // $('.logo-fixed').css('display', 'none')
      // $('.search-fixed').css('display', 'none')
    }
  });
});


$('.btn-color').click(function () {
  $(this).toggleClass('border-color')
});


$('.multiple-items').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 4,
  arrows: true,
  prevArrow: '<div class="slick-prev-product"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>',//$('.slick-prev-arrow'),
  nextArrow: '<div class="slick-next-product"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>',//$('.slick-next-arrow'),
  responsive: [
    {
      breakpoint: 730,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
  ]
});

$('.number-input').find('button').click(function () {
  var that = $(this)
  that.css('background-color', '#d66a7f')
  setTimeout(function () {
    that.css('background-color', '#e6e6e6')
  }, 50)
})

$('.multiple-product').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  arrows: true,
  prevArrow: '<div class="slick-prev-product"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>',//$('.slick-prev-arrow'),
  nextArrow: '<div class="slick-next-product"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>',//$('.slick-next-arrow'),
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 2
      }
    },

    {
      breakpoint: 950,
      settings: {
        slidesToShow: 2
      }
    },

    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1
      }
    },

  ]
});


$('.multiple-categories').slick({
  centerMode: true,
  // centerPadding: '60px',
  dots: true,
  arrows: false,
  // autoplay: true,
  autoplaySpeed: 1000,
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 950,
      settings: {
        slidesToShow: 1,
        slidesToShow: 1,
        arrows: false,
        centerMode: false,
        centerPadding: '0',
        slidesToShow: 2
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




  // Search model
  $('.search-switch').on('click', function() {
    $('.search-model').fadeIn(400);
  });

  $('.search-close-switch').on('click', function() {
    $('.search-model').fadeOut(400,function(){
      $('#search-input').val('');
    });
  });

  // buscador
  // Focus Covers Full Area
$(function() {
  $("#custom-search").click(function() {
    $(".search-query").focus();
    });
});