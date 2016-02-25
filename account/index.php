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

		<?php include '../menu.php'; ?>

		<div class="login_form_wrapper">
			<div class="form_title"><h1>Se connecter</h1></div>
			<div class="messageBox"><p id="message_login" class="message"></p></div>
			<form id="login_form">
				<input type="email" name="email" placeholder="Email" class="input" required>
				<input type="password" name="password" placeholder="Mot de passe" class="input" required="">
				<input type="submit" name="submit" class="submit" value="Valider" onclick="return submitLoginInfos();">
			</form>
		</div>

		<div class="login_form_wrapper">
			<div class="form_title"><h1>Créer un compte</h1></div>
			<div class="messageBox"><p id="message_signin" class="message"></p></div>
			<form id="signin_form">
				<input type="text" name="firstname" placeholder="Prénom" class="input" required>
				<input type="text" name="lastname" placeholder="Nom" class="input" required>
				<input type="email" name="email" placeholder="Email" class="input" required>
				<input type="text" name="tel" placeholder="Portable" class="input half" required>
				<input type="number" name="age" placeholder="Age" class="input half" min="1" max="99" required>
				<input type="password" name="password" placeholder="Mot de passe" class="input half" required>
				<input type="password" name="password_confirmation" placeholder="Confirmation" class="input half" required>
				<input type="submit" name="submit" class="submit" value="Valider" onclick="return submitSigninInfos();" >
			</form>
		</div>

	</body>

</html>
