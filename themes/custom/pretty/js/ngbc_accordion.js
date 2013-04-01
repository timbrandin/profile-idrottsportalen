(function($){

/*
 * NGBC functionality that enables better collapse functionality.
 */
Drupal.behaviors.ngbc_accordion = {
  attach: function (context, settings) {
    var $body = $('body');
    $('.accordion').each(function(i,l) {
      var $accordion_bodies = $('.accordion-body', $(l));
      $('.accordion-group', $(l)).each(function(i, el) {
        var $accordion_body = $('.accordion-body', $(el));
        var $accordion_inner = $('.accordion-inner', $accordion_body);
        $('.accordion-toggle', $(el)).click(function() {
          console.log($accordion_inner);
          if ($accordion_body.height() == 0) {
            $accordion_bodies.not($accordion_body).animate({height: 0});
            $accordion_body.animate({height: $accordion_inner.outerHeight()}, function() {
              $body.animate({'scrollTop': $accordion_body.position().top});
            });
          }
          else {
            $accordion_body.animate({height: 0});
          }
        });
        $accordion_bodies.slice(1).css('height', 0);
      });
    });
  }
}

})(jQuery);
