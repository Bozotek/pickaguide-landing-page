var activateSuccess = function() {
	var element = document.getElementById('message');
	element.className = "green";
	element.innerHTML = "Votre inscripton a bien été prise en compte.<br/>Vous serez contacté lorsque votre profil sera confirmé.";
};

var activateFailure = function(message) {
	var element = document.getElementById('message');
	element.className = "red";
	element.innerHTML = message;
};

var submitGuideInfos = function() {
	var query = $('#guide_form').serialize();
	$.ajax({
		type: "POST",
		url: "../guide_infos_insert.php",
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
