<!DOCTYPE HTML>
<html>

	<head>

		<meta charset="utf-8"/>
		<link rel="stylesheet" href="/style/menu.css">
		<link rel="stylesheet" href="/style/fonts.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="/js/account.js"></script>

  </head>

	<body>
		<script type="text/javascript">
		    $(function() {
		      var url = window.location.href;
					if (url.endsWith("/")) {
						var el = $("#navbar a").first();
						el.addClass("activePage");
						el.closest("div").addClass("active");
					} else {
		        $("#navbar a").each(function() {
	            if (url == (this.href)) {
						    $(this).addClass("activePage");
	              $(this).closest("div").addClass("active");
	            }
		        });
					}
		    });
		</script>

    <div id="navbar" align="center">
      <div class="navel"><a class="navlink" href="/index.php">Accueil</a></div>
      <div class="navel"><a class="navlink" href="/about/index.php">A propos</a></div>
      <div class="navel"><a class="navlink" href="/contact/index.php">Nous contacter</a></div>
			<?php
				if (!isset($_COOKIE["pguser"])) {
					echo "<div class='admel'><a class='admlink' href='/account/index.php'>Compte</a></div>";
				} else {
					echo "<div class='admel'><a class='admlink' onclick='logout();' href='#'>Déconnexion</a></div>";
				}
			?>
    </div>

	</body>

</html>
