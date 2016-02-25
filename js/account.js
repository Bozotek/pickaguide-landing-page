var activateSuccess = function(id, message) {
	var element = document.getElementById(id);
	element.className = "green message";
	element.innerHTML = message;
	document.location.href= "/visit/index.php";
};

var activateFailure = function(id, message) {
	var element = document.getElementById(id);
	element.className = "red message";
	element.innerHTML = message;
};

var deactivateMessage = function(id) {
	var element = document.getElementById(id);
	element.className = "message";
	element.innerHTML = "";
}

var submitLoginInfos = function() {
	deactivateMessage('message_login');
	var query = $('#login_form').serialize();
	$.ajax({
		type: "POST",
		url: "../login_check.php",
		data: query,
		dataType: "json",
		cache: false,
		success: function(data) {
			switch(data.status) {
				case true:
					activateSuccess('message_login', "Connexion réussie !");
					break;
				default:
					activateFailure('message_login', data.message);
					break;
			}
		}
 	});

	return false;
};

var submitSigninInfos = function() {
	deactivateMessage('message_signin');
	var query = $('#signin_form').serialize();
	$.ajax({
		type: "POST",
		url: "../signin_check.php",
		data: query,
		dataType: "json",
		cache: false,
		success: function(data) {
			switch(data.status) {
				case true:
					activateSuccess('message_signin', "Votre compte a été créée !");
					break;
				default:
					activateFailure('message_signin', data.message);
					break;
			}
		}
 	});

	return false;
};

var logout = function() {
  document.cookie = 'pguser' + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
	document.location.href = '/account/index.php';
}
