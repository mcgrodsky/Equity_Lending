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
  $('#keyword-description').css("background", "rgba(126, 163, 23, .2)");
  $('.hidden-keyword-description-one').hide();
  $('.hidden-keyword-description-three').hide();
  $('.hidden-keyword-description-two').show();

  $('.target-word-two').css("text-decoration", "underline");
  $('.target-word-one').css("text-decoration", "none");
  $('.target-word-three').css("text-decoration", "none");
  $('.target-icon-three').css("border", "none");

  $('.target-icon-one').css("border", "hidden");
  $('.target-icon-two').css("border", "4px solid #7EA317");


})

$('.target-icon-three').on("click", function(){
  $('#keyword-description').css("background", "rgba(43, 168, 224, .2)");
  $('.hidden-keyword-description-one').hide();
  $('.hidden-keyword-description-two').hide();
  $('.hidden-keyword-description-three').show();
  $('.target-word-three').css("text-decoration", "underline");
  $('.target-word-two').css("text-decoration", "none");
  $('.target-word-one').css("text-decoration", "none");
  $('.target-icon-two').css("border", "none");
  $('.target-icon-one').css("border", "none");
  $('.target-icon-three').css("border", "4px solid #2BA8E0");
})


$('.target-icon-one').on("click", function(){
  $('#keyword-description').css("background", "rgba(3, 64, 119, .2)");
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
