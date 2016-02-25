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

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}

var visitaguide = function(hasSession) {
  if (hasSession) {

  }
  else {
    document.location.href = "/account/index.php";
  }
};
