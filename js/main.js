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

var visitaguide = function(guide, userId) {
  var element = document.getElementById('message');
  element.className = "visible";
  element.innerHTML = "Votre demande est en cours de traitement";

  console.log(guide);
  console.log(userId);
  var query = {"to": guide, "from": userId};
  $.ajax({
		type: "POST",
		url: "../email.php",
		data: query,
		dataType: "json",
		cache: false,
		success: function(data) {
      //If the mail fails...
      console.log(data);
      var element = document.getElementById('message');
      element.className = "visible";
      element.innerHTML = "Votre demande a été envoyé au guide, il vous contactera sous peu sur votre portable ou par email.";
		}
 	});
};
