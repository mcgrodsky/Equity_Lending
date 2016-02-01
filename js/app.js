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

    // set var to div on about page
    var img_carousel = $('#page-about');
    // hardcode imgs in an array to shuffle through
    var backgrounds = ['url(http://i.imgur.com/E3lECKy.jpg)', 'url(http://i.imgur.com/yVHVERb.jpg)', 'url(http://i.imgur.com/nXUVMM1.jpg)'];
    var current = 0;

    function nextBackground() {
      // every 4 seconds, change background img
      img_carousel.css('background', backgrounds[current = ++current % backgrounds.length]
      );
      setTimeout(nextBackground, 4000);
    }
    setTimeout(nextBackground, 4000);
    img_carousel.css('background', backgrounds[0]);
  });


})(jQuery);
