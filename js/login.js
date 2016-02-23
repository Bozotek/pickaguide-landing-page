var activateSuccess = function() {
	var element = document.getElementById('message');
	element.className = "green";
	element.innerHTML = "Successfully logged in !";
	document.location.href="/index.php"
};

var activateFailure = function(message) {
	var element = document.getElementById('message');
	element.className = "red";
	element.innerHTML = message;
};

var submitLoginInfos = function() {
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
					activateSuccess();
					break;
				default:
					activateFailure(data.message);
					break;
			}
		}
 	});

	return false;
};
