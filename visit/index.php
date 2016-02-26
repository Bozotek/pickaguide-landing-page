<?php session_start(); ?>
<!DOCTYPE HTML>
<html>

	<head>
		<title>Come visit</title>
		<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="visit.css" />
		<link rel="icon" href="/src/images/ghiss.ico" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="/js/main.js"></script>
	</head>

	<body id="mainBackground">

		<?php include '../menu.php'; ?>

		<div class="contentBox">
			<p>
				Choisissez un Toulousain !
			</p>
		</div>

		<div class="results" align="center">
			<div class="messageBox"><p id="message"></p></div>
			<?php
				$isInProd = getenv('PROD');

				if ($isInProd == true) {
					$mongo = new MongoClient(getenv('MONGOLAB_URI'));
					$db = $mongo->heroku_xcxrc7w2;
				} else {
					$mongo = new MongoClient();
					$db = $mongo->pickaguide;
				}

				$guideinfos = $db->guideinfos;
				$logininfos = $db->logininfos;
				$guides = $guideinfos->find();

				foreach($guides as $guide) {
					$result = $logininfos->findOne(array("_id" => $guide["infos"]));
					echo "<div class='result'>";
					echo "<div class='profile_header'>";
					echo "<div class='profile_header_block'>";
					echo "<div class='image_wrapper'><img class='image' src='" . $result["img"] . "' /></div>";
					echo "</div>";
					echo "<div class='profile_header_block' style='padding-left: 0;'>";
					echo "<div class='infos_wrapper'><p class='infos'>" . $result["firstname"] . "</p></div>";
					echo "<div class='infos_wrapper'><p class='infos'>" . $result["age"] . "</p></div>";
					echo "</div>";
					echo "</div>";
					echo "<div class='title'>";
					echo "<div class='title_button_wrapper'><p class='title_button'>Inviter</p></div>";
					echo "<a id='" . $result["_id"] . "' onclick='visitaguide(this.id, " . isset($_SESSION["userId"]) . ",\"" . $_SESSION["userId"] . "\");' href='#' style='text-decoration: none;'><div class='title_text'>" . $guide["title"] . "</div></a>";
					echo "</div>";
					echo "<div class='profile_body'>";
					echo nl2br($guide["description"]);
					echo "</div>";
	    		echo "</div>";
				}
			?>
	</div>

	</body>

</html>
