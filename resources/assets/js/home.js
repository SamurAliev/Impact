/*******************************************************************
  Theme Name: IMPACT 
  Description: The Impact business
  AUTHOR: 
  AUTHOR URL: 
  Version: 
  Created: 
  *******************************************************************/

////////////////////////////////////////////////////////////////////
// Carousel
jQuery(document).ready(function($) {
  "use strict";

  $('.services-slideshow').owlCarousel({
    loop: true,
    center: true,
    items: 3,
    margin: 0,
    nav: true,
    navText: ['<ion-icon name="arrow-back-outline"></ion-icon>' , '<ion-icon name="arrow-forward-outline"></ion-icon>'],
    autoplay: true,
    // dots: true,
    autoplayTimeout: 8500,
    smartSpeed: 850,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 3
      },
      1170: {
        items: 3
      }
    }
  });
});


////////////////////////////////////////////////////////////////////
// Buzzwords
var r = function() {
  var e = document.querySelector(".js_buzzwordsTrigger");
  e && e.classList.add("is-ready");
  var t = Array.from(document.querySelectorAll(".js_lineTrigger"));
  t && t.forEach(function(e, t) {
    var n = 200 * (t + 1);
    setTimeout(function() { e.classList.add("is-ready") }, 1e3 + n)
  });
  var n = Array.from(document.querySelectorAll(".js_charTrigger"));
  n && n.forEach(function(e) { e.addEventListener("mouseover", function() { this.classList.add("jumpingLetter") }, !1), e.addEventListener("animationend", function() { this.classList.remove("jumpingLetter") }, !1) })
};
r()


////////////////////////////////////////////////////////////////////
// Carousel
jQuery(document).ready(function($) {
  "use strict";

  $('.portfolio-slideshow').owlCarousel({
    loop: true,
    margin: 15,
    autoplay: true,
    speed: 500,
    smartSpeed: 500,
    autoplaySpeed: 1000,
    responsive: {
      0: {
        items: 2,
      },
      768: {
        items: 4
      },
      1170: {
        items: 3
      }
    }
  });
});