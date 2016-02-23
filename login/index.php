<!DOCTYPE HTML>
<html>

	<head>
		<title>About</title>
		<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="login.css" />
		<link rel="icon" href="/src/images/ghiss.ico" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="/js/login.js"></script>
	</head>

	<body id="mainBackground">
		<?php include '../menu.html'; ?>

		<div class="contentBox">
			<p>
				Welcome on the login page !
			</p>
		</div>

		<div id="login_form_wrapper" style="text-align:center;">
			<div id="messageBox"><p id="message"></p></div>
			<form id="login_form">
				<input type="text" name="pseudo" placeholder="Pseudo" class="input">
				<input type="text" name="password" placeholder="password" class="input">
				<input type="submit" name="submit" class="submit" value="Apply" onclick="return submitLoginInfos();" >
			</form>
		</div>

	</body>

</html>
