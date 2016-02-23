var submitGuideInfos = function() {
	var query = $('#email_form').serialize();
	$.ajax({
		type: "POST",
		url: "../guides_infos_insert.php",
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
