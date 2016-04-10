<?php session_start(); ?>
<!DOCTYPE HTML>
<html>

	<head>
		<title>Devenir un guide</title>
		<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="guide.css" />
		<link rel="icon" href="/GeekAdminTools-v0.1/src/images/ghiss.ico" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="/js/form.js"></script>
	</head>

	<body id="mainBackground">

		<?php
			if (!isset($_SESSION["userId"])) {
				echo '<script type="text/javascript">
           window.location.href = "/account/index.php"
      	</script>';
			}
		?>

		<?php include '../menu.php'; ?>

		<div class="contentBox">
			<p>
				Bienvenue sur le formulaire d'inscription des Guides !</br>Remplissez quelques informations et vous ferez partie de notre merveilleuse communauté !
			</p>
		</div>

		<div id="guide_form_wrapper" style="text-align:center;">
			<div id="messageBox"><p id="message"></p></div>
			<form id="guide_form">
				<input type="text" name="title" placeholder="Titre" class="input">
				<input type="text" name="city" placeholder="Ville" class="input">
				<textarea type="text" name="description" placeholder="Description" class="input" rows="4" cols="50"></textarea>
				<input type="submit" name="submit" class="submit" value="Valider" onclick="return submitGuideInfos();" >
			</form>
		</div>

	</body>

</html>
