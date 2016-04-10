<?php session_start(); ?>
<!DOCTYPE HTML>
<html>

	<head>

		<title>PickaGuide</title>
		<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="/style/main.css" />
		<link rel="icon" href="/src/images/ghiss.ico" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="/js/main.js"></script>

	</head>

	<body id="mainBackground">

		<?php include_once("analyticstracking.php") ?>
		<?php include 'menu.php'; ?>

    <div id="welcomebox">
        <div class="welcomerow"><div class="welcometext">Bienvenue</div></div>
        <div class="welcomerow"><div class="welcometext">sur PickaGuide</div></div>
        <div class="welcomerow"><div class="welcometext">pour rencontrer des locaux</div></div>
				<div class="welcomebuttonrow">
					<a href="/visit/index.php"><div class="welcomebutton buttontext">Visiter</div></a>
					<a href="/forms/guide.php"><div class="welcomebutton buttontext" onclick='becomeGuide(<?php echo isset($_SESSION["userId"]);?>);' style="margin-right: 0;float: right;">Devenir guide</div></a>
				</div>
    </div>

	</body>

</html>
