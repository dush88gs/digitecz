jQuery.fn.exists = function () { return this.length > 0; }

// Start preloader
// $(window).on('load', function () {
//   if ($('.preloader').length) {
//     $('.preloader').delay(200).fadeOut(500);
//   }
// });
// End preloader

$(document).ready(function () {

  if ($('.inbound-marketing').exists()) {
    /* Start Inbound marketing */
    $(".img-hover").hover(function () {
      $(this).attr("src", function (index, attr) {
        return attr.replace(".svg", "-hover.svg");
      });
    }, function () {
      $(this).attr("src", function (index, attr) {
        return attr.replace("-hover.svg", ".svg");
      });
    });

    $("#dtz-social-media").animatedModal({
      modalTarget: 'dtz-social-media-modal',
      animatedIn: 'fadeIn',
      animatedOut: 'fadeOut',
      color: '#fff'
    });
    $("#dtz-reputation-management").animatedModal({
      modalTarget: 'dtz-reputation-management-modal',
      animatedIn: 'fadeIn',
      animatedOut: 'fadeOut',
      color: '#fff'
    });
    $("#dtz-paid-search").animatedModal({
      modalTarget: 'dtz-paid-search-modal',
      animatedIn: 'fadeIn',
      animatedOut: 'fadeOut',
      color: '#fff'
    });
    $("#dtz-blogging").animatedModal({
      modalTarget: 'dtz-blogging-modal',
      animatedIn: 'fadeIn',
      animatedOut: 'fadeOut',
      color: '#fff'
    });
    $("#dtz-content-marketing").animatedModal({
      modalTarget: 'dtz-content-marketing-modal',
      animatedIn: 'fadeIn',
      animatedOut: 'fadeOut',
      color: '#fff'
    });
    $("#dtz-seo").animatedModal({
      modalTarget: 'dtz-seo-modal',
      animatedIn: 'fadeIn',
      animatedOut: 'fadeOut',
      color: '#fff'
    });
  }
  /* End Inbound marketing */

  $('[data-toggle="tooltip"]').tooltip();

  if ($('#welcome').exists()) {

    var video = document.getElementById("dtz-bg-video");
    setTimeout(function () {
      video.play();
    }, 5000);

    /* Start Background Video Pause and Play */
    var vid = document.getElementById("dtz-bg-video");
    var pauseButton = document.querySelector("#video-pause-btn");

    if (window.matchMedia('(prefers-reduced-motion)').matches) {
      vid.removeAttribute("autoplay");
      vid.pause();
      pauseButton.innerHTML = '<i class="fal fa-play-circle"></i>';
    }

    function vidFade() {
      vid.classList.add("stopfade");
    }

    vid.addEventListener('ended', function () {
      // only functional if "loop" is removed 
      vid.pause();
      // to capture IE10
      vidFade();
    });


    pauseButton.addEventListener("click", function () {
      vid.classList.toggle("stopfade");
      if (vid.paused) {
        vid.play();
        pauseButton.innerHTML = '<i class="fal fa-pause-circle"></i>';
      } else {
        vid.pause();
        pauseButton.innerHTML = '<i class="fal fa-play-circle"></i>';
      }
    });
    /* End Background Video Pause and Play */

    //Typed.js
    var options = {
      strings: ["Capturing the Power of Digital Marketing", "Build a Better Brand Online", "Come On, Let’s Do This."],
      typeSpeed: 90,
      backSpeed: 20,
      backDelay: 1500,
      showCursor: true,
      loop: true
    }

    var typed = new Typed("#dtz-type-writer", options);
  }

  /* Start Promotions slider */
  if ($('.dtz-promo-slider').exists()) {
    $('.dtz-promo-slider').slick({
      infinite: true,
      autoplay: true,
      arrows: false,
      autoplaySpeed: 3000,
      speed: 700,
      fade: true,
      cssEase: 'linear',
      slidesToShow: 1,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            fade: false
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            fade: false
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
  }
  /* End Promotions slider */

  /* Start Client slider */
  if ($('.clients-section').exists()) {
    $('.dtz-client-slider').slick({
      infinite: true,
      autoplay: true,
      arrows: false,
      autoplaySpeed: 2000,
      speed: 500,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
  }
  /* End Client slider */

  /* Start Things Can Do slider */
  if ($('.dtz-things-section').exists()) {
    $('.dtz-things-slider').slick({
      infinite: true,
      autoplay: true,
      arrows: false,
      autoplaySpeed: 2000,
      speed: 500,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
  }
  /* End Client slider */

  /* Start online sales - animated arrows section */
  if ($('.dtz-animated-arrows').exists()) {
    AOS.init({
      duration: 500,
      easing: 'linear',
      once: false
    });
  }
  /* End online sales - animated arrows section */

  // Start Hide CF7 succuess message
  if ($('.wpcf7-response-output').exists()) {
    var delay_time = '4000',
      effect = 'slideUp', // fadeOut, slideUp
      speed = '3000';
    jQuery(document).on("ajaxComplete", function () {
      jQuery('.wpcf7-mail-sent-ok').delay(delay_time)[effect](speed);
      // jQuery('.wpcf7-mail-sent-ok').delay(2000).fadeOut(1500);
    });
  }
  // End Hide CF7 succuess message

});

(function ($) {
  "use strict"; // Start of use strict

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 54)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function () {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 56
  });

  // Collapse Navbar
  var navbarCollapse = function () {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-shrink");
    } else {
      $("#mainNav").removeClass("navbar-shrink");
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);

})(jQuery); // End of use strict



/*
*** Expertise Script JS
*/
if ($('.what-we-do-section').exists()) {
  function getRandomInt(a, b) {
    return Math.floor(Math.random() * (b - a + 1)) + a
  }

  function setHeights() {
    var a = navigator.userAgent.match(/\(Windows NT 6.2; WOW64\) AppleWebKit/);
    if (a) {
      var b = jQuery(window).height();
      jQuery(".featured.block").height(b)
    }
  }

  function itemAofDark() {
    var a = $(".areasoffocus-content").width(),
      b = $(".areasoffocus-content .item:first-child").width();
    Math.round(a / b)
  }

  function hideEmptyBlocks() {
    $("body").width() / window.devicePixelRatio <= 760 && !device.tablet() ? $(".box").each(function () {
      var a = $(this).text();
      "" == a && $(this).hide()
    }) : $(".box").each(function () {
      var a = $(this).text();
      "" == a && $(this).show()
    })
  }

  function setEqualMinHeight(a) {
    var b = 0;
    a.each(function () {
      jQuery(this).css({
        "min-height": "1px"
      }), currentHeight = jQuery(this).height(), currentHeight > b && (b = currentHeight)
    }), a.css({
      "min-height": b
    })
  }

  function setEqualHeight(a) {
    var b = 0;
    a.each(function () {
      jQuery(this).css({
        height: "auto"
      }), currentHeight = jQuery(this).height(), currentHeight > b && (b = currentHeight)
    }), a.css({
      height: b
    })
  }

  function scaleWidth(a) {
    var b = 1800,
      c = a.height(),
      d = a.css("padding-top");
    d ? (d = d.replace("px", ""), d *= 1) : d = 0;
    var e = a.css("padding-bottom");
    e ? (e = e.replace("px", ""), e *= 1) : e = 0;
    var f = $(window).width(),
      g = f / b,
      h = (c + e + d) * g;
    $(document).width() + 18 >= 1025 && jQuery("html").hasClass("desktop") ? (a.css({
      width: b + "px",
      transform: "scale(" + g + ")",
      "-ms-transform": "scale(" + g + ")",
      "-webkit-transform": "scale(" + g + ")",
      "-moz-transform": "scale(" + g + ")",
      "transform-origin": "0 0",
      "-ms-transform-origin": "0 0",
      "-webkit-transform-origin": "0 0",
      "-moz-transform-origin": "0 0"
    }), a.parents(".height-block").css({
      height: h + "px",
      overflow: "hidden",
      width: "100%"
    })) : (a.css({
      width: "100%",
      transform: "scale(1)",
      "-ms-transform": "scale(1)",
      "-webkit-transform": "scale(1)",
      "-moz-transform": "scale(1)",
      "transform-origin": "0 0",
      "-ms-transform-origin": "0 0",
      "-webkit-transform-origin": "0 0",
      "-moz-transform-origin": "0 0"
    }), a.parents(".height-block").css({
      height: "100%",
      overflow: "visible",
      width: "100%"
    }));
    var i = $(window).height();
    $(".custom-height").css({
      height: i + "px"
    })
  }

  function awardHEIGHT() {
    var a = jQuery(".blocks-sq-8").height();
    a *= 2, jQuery(".blocks-sq-5").height(a)
  }
  jQuery(document).ready(function () {
    if ($("body").hasClass("home")) {
      var a = jQuery('<svg class="new-intro-svg" x="0px" y="0px" stroke="transparent"       width="574.558px" height="230px" viewBox="0 0 574.558 230" enable-background="new 0 0 574.558 230" xml:space="preserve">      <defs>      <pattern id="water" width=".17" height="1.1" patternContentUnits="objectBoundingBox">      <path fill="#8dd7c9" d="M0.17,1H0c0,0,0-0.659,0-0.916c0.085-0.084,0.085,0.236,0.17,0C0.17,0.327,0.17,1,0.17,1z"/>      </pattern>      <style type="text/css">      <![CDATA[      @font-face {        font-family: Lato-Bold;        src: url("/fonts/lato-bold/lato-bol-webfont.ttf");      }      ]]>      </style>      <text id="text" transform="matrix(1 0 0 1 0 116.7852)" font-family="Lato-Bold" font-size="78">      <tspan x="0" y="0">Award Winning</tspan>      <tspan x="0" y="83">Digital Agency</tspan></text>      <mask id="text-mask">      <use x="0" y="0" xlink:href="#text" opacity="1" stroke="none" fill="#fff"/>      </mask>      </defs>      <use x="0" y="0" xlink:href="#text" fill="#313743" stroke="#fff"/>      <rect class="water-fill" mask="url(#text-mask)" fill="url(#water)" height="140" y="80" x="-544" width="1600"/>      </svg>').appendTo(".new-intro-left");
      TweenMax.fromTo(jQuery(".water-fill2", a), 4, {
        attr: {
          x: -544
        }
      }, {
        attr: {
          x: 0
        },
        repeat: -1,
        ease: Linear.easeNone
      })
    }
  }),

    document.addEventListener("DOMContentLoaded", function () {
      var a = [];
      $(".water-fill2").each(function () {
        var b = new TweenMax.fromTo($(this), 3, {
          attr: {
            x: -550
          }
        }, {
          attr: {
            x: 0
          },
          repeat: -1,
          paused: !0,
          ease: Linear.easeNone
        }),
          c = new TimelineMax({
            paused: !0
          });
        c.call(function () {
          b.pause()
        }).call(function () {
          b.play()
        }).fromTo($(this), 5, {
          attr: {
            y: 200,
            height: 0
          }
        }, {
          attr: {
            y: 100,
            height: 170
          },
          ease: Linear.easeNone
        }), a.push(c)
      }), $('.expertise-blocks > [class*="expertise-"]').on("mouseenter", function () {
        a[$(this).index() - 1].play()
      }), jQuery(window).width() < 768 || device.tablet() ? (a[0].play(), a[1].play(), a[2].play()) : $('.expertise-blocks > [class*="expertise-"]').on("mouseleave", function () {
        a[$(this).index() - 1].reverse()
      })
    }),


    $(document).ready(function () {
      function g() {
        (device.landscape() && jQuery(window).width() > 962 || device.portrait() && jQuery(window).width() > 767 && jQuery(window).width() < 950 || device.desktop()) && $("#myContainer").multiscroll({
          scrollingSpeed: 1250,
          loopBottom: !1,
          loopTop: !1,
          navigation: !0,
          css3: !0,
          paddingTop: 0,
          paddingBottom: 0,
          touchSensitivity: 5,
          afterLoad: function (a, b) {
            $(".ms-right .ms-section.leave").removeClass("leave"), $(".ms-left .ms-section.leave").removeClass("leave"), 1 == b && attractAnimation.restart(), 3 == b && strategicAnimation.restart(), 2 == b && artistsAnimation.restart(), 4 == b && supermanAnimation.restart()
          },
          onLeave: function (a, b) {
            $(".expertise-slides-item.first").removeClass("active"), $(".expertise-slides-item.last").removeClass("active"), 1 == b && attractAnimation.to(), 3 == b && strategicAnimation.to(), 2 == b && artistsAnimation.to(), 4 == b && supermanAnimation.to(), 5 == b && connectAnimation.to(), 1 == a && attractAnimation.stop(), 3 == a && strategicAnimation.stop(), 2 == a && artistsAnimation.stop(), 4 == a && supermanAnimation.stop(), 5 == a && connectAnimation.stop(), 5 == b ? $(".expertise-slides-item.last").addClass("active") : 1 == b && $(".expertise-slides-item.first").addClass("active"), $(".ms-right .ms-section").eq(5 - a).addClass("leave"), $(".ms-left .ms-section").eq(a - 1).addClass("leave"), $(".navi-footer").hasClass("animate") && $(".navi-footer").removeClass("animate")
          }
        })
      }

    });
}

