(function ($) {

  // Increase/decrease quantity
  Drupal.s12q = function(selector, way, q) {

    // Find out current quantity and figure out new one
    var quantity = parseInt($(selector).val());
    if (way == 1) {
      // Increase
      var new_quantity = quantity + q;
    }
    else if (way == -1) {
      // Decrease
      var new_quantity = quantity - q;
    }
    else {
      var new_quantity = quantity;
    }
    
    // clear wrong values
    new_quantity = Math.ceil(new_quantity / q) *q;

    // Set new quantity
    if (new_quantity >= q) {
      $(selector).val(new_quantity);
    }

    // Set disabled class depending on new quantity
    if (new_quantity <= q) {
      $(selector).prev('span').addClass('commerce-quantity-plusminus-link-disabled');
    }
    else {
      $(selector).prev('span').removeClass('commerce-quantity-plusminus-link-disabled');
    }

  }

}(jQuery));
