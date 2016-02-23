<!DOCTYPE HTML>
<html>

	<head>
		<title>About</title>
		<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="visit.css" />
		<link rel="icon" href="/src/images/ghiss.ico" />
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
				<input type="text" name="title" placeholder="Title" class="input">
				<input type="text" name="tel" placeholder="Phone number" class="input">
				<textarea type="text" name="description" placeholder="Description" class="input" rows="4" cols="50"></textarea>
				<input type="submit" name="submit" class="submit" value="Apply" onclick="return submitGuideInfos();" >
				<!-- <input type="file" name="nom" /> -->
			</form>
		</div>

	</body>

</html>
