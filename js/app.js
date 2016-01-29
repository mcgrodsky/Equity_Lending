(function($){
  $(document).ready(function(){
    $('.hamburgerMenu').on('click', function(){
      console.log("hamburger");
    })
// to refactor - put icons and descriptions in two arrays - loop through array calling hover function - 4/5 lines
    $('.target-icon-one').hover(
      function () {
        $('.hidden-keyword-description-one').show();
        $('.cta-btn').show();
      },
      function () {
        $('.hidden-keyword-description-one').hide();
        $('.cta-btn').hide();
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
