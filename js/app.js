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

$('.target-icon-two').on("click", function(){
  $('.hidden-keyword-description-one').hide();
  $('.hidden-keyword-description-three').hide();
  $('.hidden-keyword-description-two').show();
  $('.target-icon-two').css("border", "4px solid #7EA317");
  $('.target-word-two').css("text-decoration", "underline");
  $('.target-word-one').css("text-decoration", "none");
  $('.target-icon-one').css("border", "none");
    $('.target-icon-three').css("border", "none");
  $('.target-word-three').css("text-decoration", "none");


})

$('.target-icon-three').on("click", function(){
  $('.hidden-keyword-description-one').hide();
  $('.hidden-keyword-description-two').hide();
  $('.hidden-keyword-description-three').show();
  $('.target-word-three').css("text-decoration", "underline");
  $('.target-word-two').css("text-decoration", "none");
  $('.target-word-one').css("text-decoration", "none");
  $('.target-icon-one').css("border", "none");
  $('.target-icon-two').css("border", "none");
  $('.target-icon-three').css("border", "4px solid #2BA8E0");




})
$('.target-icon-one').on("click", function(){
  $('.hidden-keyword-description-three').hide();
  $('.hidden-keyword-description-two').hide();
  $('.hidden-keyword-description-one').show();
  $('.target-word-one').css("text-decoration", "underline");
  $('.target-word-two').css("text-decoration", "none");
  $('.target-word-three').css("text-decoration", "none");
  $('.target-icon-one').css("border", "4px solid #034077");
  $('.target-icon-two').css("border", "none");
  $('.target-icon-three').css("border", "none");



})

})
})(jQuery);


//
// $('.target-icon-one').hover(
//   function () {
//     $('.hidden-keyword-description-one').show();
//     $('.cta-btn').show();
//     $('.target-word-one').addClass('target-word-one-hover');
//   },
//   function () {
//     $('.hidden-keyword-description-one').hide();
//     $('.cta-btn').hide();
//     $('.target-word-one').removeClass('target-word-one-hover');
//
//   }
// );

//   $('.target-icon-two').hover(
//     function () {
//       $('.hidden-keyword-description-two').show();
//       $('.cta-btn').show();
//     },
//     function () {
//       $('.hidden-keyword-description-two').hide();
//       $('.cta-btn').hide();
//     }
//   );
//
//
//   $('.target-icon-three').hover(
//     function () {
//       $('.hidden-keyword-description-three').show();
//       $('.cta-btn').show();
//     },
//     function () {
//       $('.hidden-keyword-description-three').hide();
//       $('.cta-btn').hide();
//
//     }
//   );
// });
