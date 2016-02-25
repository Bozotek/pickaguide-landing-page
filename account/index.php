<!DOCTYPE HTML>
<html>

	<head>
		<title>About</title>
		<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="account.css" />
		<link rel="icon" href="/src/images/ghiss.ico" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="/js/account.js"></script>
	</head>

	<body id="mainBackground">
		<?php include '../menu.html'; ?>

		<div style="margin:auto;">
			<div class="contentBox" style="float:left;">
				<p style="font-weight:bold;">
					Log in
				</p>

				<div id="login_form_wrapper" style="text-align:center;">
					<div id="messageBox"><p id="message"></p></div>
					<form id="login_form">
						<input type="text" name="pseudo" placeholder="Pseudo" class="input">
						<input type="password" name="password" placeholder="Password" class="input">
						<input type="submit" name="submit" class="submit" value="Apply" onclick="return submitLoginInfos();" >
					</form>
				</div>
			</div>

			<div class="contentBox" style="float:right;">
				<p style="font-weight:bold;">
					Sign in
				</p>

				<div id="login_form_wrapper" style="text-align:center;">
					<div id="messageBox"><p id="message"></p></div>
					<form id="login_form">
						<input type="text" name="firstname" placeholder="Firstname" class="input">
						<input type="text" name="lastname" placeholder="Lastname" class="input">
						<input type="text" name="lastname" placeholder="Lastname" class="input">
						<input type="submit" name="submit" class="submit" value="Apply" onclick="return submitLoginInfos();" >
					</form>
				</div>
			</div>

			</div>
		</div>


	</body>

</html>
