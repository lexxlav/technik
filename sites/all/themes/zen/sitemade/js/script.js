/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {


// To understand behaviors, see https://drupal.org/node/756722#behaviors
Drupal.behaviors.my_custom_behavior = {
  attach: function(context, settings) {

    // Place your code here.

  }
};



$(document).ready(function(){
  $('.view-id-our_woks_slides > div').bxSlider({
    slideWidth: 150,
    minSlides: 2,
    maxSlides: 4,
    moveSlides: 1,
    slideMargin: 10
  });
});

$(document).ready(function(){
  $('.slider5').bxSlider({
    slideWidth: 124,
    minSlides: 3,
    maxSlides: 6,
    moveSlides: 1,
    slideMargin: 10
  });
});

})(jQuery, Drupal, this, this.document);
