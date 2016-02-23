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
		<form id="guide_form" style="text-align:center;">
			<input type="text" name="email" placeholder="Enter your email" class="input">
			<input type="submit" name="submit" class="submit" value="Apply" onclick="return submitGuideInfos();" >
		</form>
	</body>

</html>
