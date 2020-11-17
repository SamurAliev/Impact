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
  $('#service-smm').owlCarousel({
    loop: true,
    center: true,
    items: 3,
    margin: 0,
    autoplay: true,
    dots:true,
    autoplayTimeout: 8500,
    smartSpeed: 450,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 2
      },
      1170: {
        items: 3
      }
    }
  });
});


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
