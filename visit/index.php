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
			<?php
				$isInProd = getenv('PROD');

				if ($isInProd == true) {
					$mongo = new MongoClient(getenv('MONGOLAB_URI'));
					$db = $mongo->heroku_xcxrc7w2;
				} else {
					$mongo = new MongoClient();
					$db = $mongo->pickaguide;
				}

				$collection = $db->guideinfos;
				$guides = $collection->find();

				foreach($guides as $guide) {
					echo "<div class='result'>";
					echo "<div class='profile_header'>";
					echo "<div class='profile_header_block'>";
					echo "<div class='image_wrapper'><img class='image' src='" . $guide["img"] . "' /></div>";
					echo "</div>";
					echo "<div class='profile_header_block'>";
					echo "<div class='infos_wrapper'><p class='infos'>Jackie</p></div>";
					echo "<div class='infos_wrapper'><p class='infos'>21 ans</p></div>";
					echo "</div>";
					echo "</div>";
					echo "<div class='title'>";
					echo "<div class='title_button_wrapper'><p class='title_button'>Inviter</p></div>";
					echo "<a onclick='visitaguide(this.id);' href='#' style='text-decoration: none;'><div class='title_text'>" . $guide["title"] . "</div></a>";
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
