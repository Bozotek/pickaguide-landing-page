<!DOCTYPE HTML>
<html>

	<head>
		<title>About</title>
		<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="contact.css" />
		<link rel="icon" href="/GeekAdminTools-v0.1/src/images/ghiss.ico" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="/js/form.js"></script>
	</head>

	<body id="mainBackground">
		<?php include '../menu.html'; ?>

		<div class="contentBox">
			<p>
				Welcome on the guide form ! </br>Please fill some informations and you will be part of our community !
			</p>
		</div>

		<div id="guide_form_wrapper" style="text-align:center;">
			<div id="messageBox"><p id="message"></p></div>
			<form id="guide_form">
				<input type="text" name="title" placeholder="Enter a title announcement" class="input">
				<input type="text" name="price" placeholder="Enter a price" class="input" id="price">
				<input type="number" name="hours" placeholder="Enter nb hours" class="input" id="hours" min="1" max="4"></code>
				<textarea type="text" name="description" placeholder="Enter a description" class="input" rows="4" cols="50"></textarea>
				<input type="submit" name="submit" class="submit" value="Apply" onclick="return submitGuideInfos();" >
				<!-- <input type="file" name="nom" /> -->
			</form>
		</div>

	</body>

</html>
