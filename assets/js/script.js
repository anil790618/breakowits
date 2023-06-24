"use strict";

(function ($) {
  "use strict";

  $(window).scroll(function () {
    var window_top = $(window).scrollTop() + 1;

    if (window_top > 50) {
      $(".fixed-btm-top").addClass("reveal");
    } else {
      $(".fixed-btm-top").removeClass("reveal");
    }
  });
  $(window).scroll(function () {
    var window_top = $(window).scrollTop() + 1;

    if (window_top > 50) {
      $(".site-navigation ").addClass("menu_fixed animated fadeInDown");
    } else {
      $(".site-navigation").removeClass("menu_fixed animated fadeInDown");
    }
  });
  $(".testimonials-slides").owlCarousel({
    loop: true,
    dots: true,
    nav: false,
    margin: 10,
    autoplayHoverPause: true,
    autoplay: false,
    center: true,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      576: {
        items: 1,
      },
      768: {
        items: 1,
      },
      1000: {
        items: 2,
      },
      1200: {
        items: 3,
      },
    },
  });
  $(".testimonials-slides-2").owlCarousel({
    loop: true,
    dots: true,
    nav: false,
    margin: 10,
    autoplayHoverPause: true,
    autoplay: false,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      576: {
        items: 1,
      },
      768: {
        items: 1,
      },
      1000: {
        items: 1,
      },
      1200: {
        items: 1,
      },
    },
  });

  $(".testimonials-slides-21").owlCarousel({
    loop: true,
    dots: true,
    nav: false,
    dots:false,
    autoplay:true,
    margin: 40,
    autoplayHoverPause: true,autoplayTimeout:2000,
    responsiveClass: true,
    // navText: [
    //     "<i class='bx bx-left-arrow-alt'></i>",
    //     "<i class='bx bx-right-arrow-alt'></i>"
    // ],
    responsive: {
      0: {
        items: 2,
      },
      576: {
        items: 2,
      },
      768: {
        items: 3,
      },
      1000: {
        items: 5,
      },
      1200: {
        items: 7,
      },
    },
  }); // Counter


  $(".testimonials-slides-3").owlCarousel({
    loop: true,
    dots: true,
    nav: false,
    margin: 10,
    autoplayHoverPause: true,
    autoplay: false,
    responsiveClass: true,
    // navText: [
    //     "<i class='bx bx-left-arrow-alt'></i>",
    //     "<i class='bx bx-right-arrow-alt'></i>"
    // ],
    responsive: {
      0: {
        items: 1,
      },
      576: {
        items: 1,
      },
      768: {
        items: 1,
      },
      1000: {
        items: 2,
      },
      1200: {
        items: 2,
      },
    },
  }); // Counter

  $(".counter").counterUp({
    delay: 10,
    time: 1000,
  });
  $(".team-slider").owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    autoplayHoverPause: true,
    autoplay: false,
    navRewind: false,
    margin: 30,
    navText: [
      "<i class='bx bx-left-arrow-alt'></i>",
      "<i class='bx bx-right-arrow-alt'></i>",
    ],
    responsive: {
      0: {
        items: 1,
      },
      576: {
        items: 2,
      },
      768: {
        items: 2,
      },
      1000: {
        items: 3,
      },
      1200: {
        items: 4,
      },
    },
  });
  /* ---------------------------------------------
         course filtering
         --------------------------------------------- */

  var $course = $(".course-gallery");

  if ($.fn.imagesLoaded && $course.length > 0) {
    imagesLoaded($course, function () {
      $course.isotope({
        itemSelector: ".course-item",
        filter: "*",
      });
      $(window).trigger("resize");
    });
  }

  $(".course-filter").on("click", "a", function (e) {
    e.preventDefault();
    $(this).parent().addClass("active").siblings().removeClass("active");
    var filterValue = $(this).attr("data-filter");
    $course.isotope({
      filter: filterValue,
    });
  });
  /* ----------------------------------------------------------- */

  /*  Map
  /* ----------------------------------------------------------- */

  var map;

  function initialize() {
    var mapOptions = {
      zoom: 13,
      center: new google.maps.LatLng(50.97797382271958, -114.107718560791), // styles: style_array_here
    };
    map = new google.maps.Map(
      document.getElementById("map-canvas"),
      mapOptions
    );
  }

  var google_map_canvas = $("#map-canvas");

  if (google_map_canvas.length) {
    google.maps.event.addDomListener(window, "load", initialize);
  }
})(jQuery);



$('.toggle-faq').click(function(e) {
  e.preventDefault();

  var $this = $(this);

  if ($this.next().hasClass('show')) {
      $this.removeClass('inner-toggle');
      $this.next().removeClass('show');
      $this.next().slideUp(350);
  } else {
      $this.parent().parent().find('li .inner').removeClass('show');
      $this.addClass('inner-toggle');
      $this.parent().parent().find('li .inner').slideUp(350);
      $this.next().toggleClass('show');
      $this.next().slideToggle(350);
  }
});

$(document).ready(function() {
  // Configure/customize these variables.
  var showChar = 530;  // How many characters are shown by default
  var ellipsestext = "";
  var moretext = "Read More";
  var lesstext = "Read Less";
  

  $('.more').each(function() {
      var content = $(this).html();

      if(content.length > showChar) {

          var c = content.substr(0, showChar);
          var h = content.substr(showChar, content.length - showChar);

          var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

          $(this).html(html);
      }

  });

  $(".morelink").click(function(){
      if($(this).hasClass("less")) {
          $(this).removeClass("less");
          $(this).parent('.morecontent').parent('.cour-section ').addClass("bg-more");
          $(this).html(moretext);
      } else {
          $(this).addClass("less");
          $(this).html(lesstext);
          $(this).parent('.morecontent').parent('.cour-section ').removeClass("bg-more");
      }
      $(this).parent().prev().toggle();
      $(this).prev().toggle();
      return false;
  });
});


jQuery(document).ready(function(){

  var $this = $('.items');
  if ($this.find('div').length > 2) {
      $('.items').append('<div><a href="javascript:;" class="showMore"></a></div>');
  }
  
  // If more than 2 Education items, hide the remaining
	$('.items .item').slice(0,3).addClass('shown');
	$('.items .item').not('.shown').hide();
	$('.items .showMore').on('click',function(){
		$('.items .item').not('.shown').toggle(300);
		$(this).toggleClass('showLess');
	});

});