function changebtn(toggle) {
	var element = document.getElementById("upload-btn");
	if (toggle == 1) {
		element.style.color = "#00aeef";
		element.style.backgroundColor = "white";
	}	
	else {
		element.style.color = "white";
		element.style.backgroundColor = "#00aeef";
	}
}

function highlightbtn(toggle) {
	var element = document.getElementById("admin-btn");
	if (toggle == 1) {
		element.style.color = "black";
		element.style.border = "solid 2px black";
	}	
	else {
		element.style.color = "#bbbbbb";
		element.style.border = "solid 2px #bbbbbb";
	}
}