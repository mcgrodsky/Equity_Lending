(function($){
  $(document).ready(function(){
    $(window).scroll(function() {
      if ($(this).scrollTop() > 1){
    $('#navigation').addClass("sticky");
  }
  else{
    $('#navigation').removeClass("sticky");
  }
});
  // $('.target-icon-one').on("click", function(){
  //   $('.hidden-keyword-description-one').toggle();
  //     $('.cta-btn').toggle();
  // });
  // $('.target-icon-two').on("click", function(){
  //   $('.hidden-keyword-description-two').toggle();
  //     $('.cta-btn').toggle();
  // });
  // $('.target-icon-three').on("click", function(){
  //   $('.hidden-keyword-description-three').toggle();
  //     $('.cta-btn').toggle();
  // });
// to refactor - put icons and descriptions in two arrays - loop through array calling hover function - 4/5 lines
    $('.target-icon-one').hover(
      function () {
        $('.hidden-keyword-description-one').show();
        $('.cta-btn').show();
        $('.target-word-one').addClass('target-word-one-hover');
      },
      function () {
        $('.hidden-keyword-description-one').hide();
        $('.cta-btn').hide();
        $('.target-word-one').removeClass('target-word-one-hover');

      }
    );

    $('.target-icon-two').hover(
      function () {
        $('.hidden-keyword-description-two').show();
        $('.cta-btn').show();
      },
      function () {
        $('.hidden-keyword-description-two').hide();
        $('.cta-btn').hide();
      }
    );


    $('.target-icon-three').hover(
      function () {
        $('.hidden-keyword-description-three').show();
        $('.cta-btn').show();
      },
      function () {
        $('.hidden-keyword-description-three').hide();
        $('.cta-btn').hide();

      }
    );
  });


})(jQuery);
