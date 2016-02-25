$(document).ready(function(){
  $(".result").mouseenter(
    function(){
      var size = $(this).find('.title').css('height');
      $(this).find('.title_button_wrapper').css('height', "" + size);

      $(this).find('.title_text').stop().animate({
        opacity: "0"
      }, 500);
      $(this).find('.title_button_wrapper').stop().animate({
        width: "16.4em"
      }, 800);
    });
  $(".result").mouseleave(
    function() {
      $(this).find('.title_text').stop().animate({
        opacity: "1"
      }, 800);
      $(this).find('.title_button_wrapper').stop().animate({
        width: "0"
      }, 500);
    });
});

function ralouf() {
  console.log("Hello");
}
