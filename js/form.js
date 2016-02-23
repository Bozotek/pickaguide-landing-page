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
