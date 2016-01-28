(function($){
  $(document).ready(function(){
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
