$('.slider').slick({
  infinite: true,
  slideToShow: 1,
  slideToScroll: 1
});


(function($) {

  $('#reset').on('click', function(){
      $('#register-form').reset();
  });

})(jQuery);