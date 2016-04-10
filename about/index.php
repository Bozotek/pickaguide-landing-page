<?php session_start(); ?>
<!DOCTYPE HTML>
<html>

	<head>

		<title>A propos</title>
		<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="about.css" />
		<link rel="icon" href="/src/images/ghiss.ico" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="/lib/parallax.js-1.3.1/parallax.min.js"></script>

	</head>

	<body id="aboutBackground">

		<?php include_once("analyticstracking.php") ?>
		<?php include '../menu.php'; ?>

    <div class="imageSeparator
                image__large">
        <img class="parent__width
										fix__center" src="/src/images/optimized_contact.jpg" />
    </div>


    <div class="element">
        <p class="elementTitle">A propos</p>

    </div>

    <div class="parallaxSeparator" bleed="10" data-parallax="scroll" data-image-src="/src/images/optimized_clocher.jpg"></div>

    <div class="element">
        <p class="elementTitle">Que faisons nous?</p>
        <hr class="contentBreak">

        <div class="content
                    text__center">
            <p>
								Pickaguide vise à mettre en relation un voyageur avec un toulousain pour une visite authentique de la ville rose.
								<br/><br/>
								<strong>Nos promesses :</strong><br/><br/>
								<i>Une rencontre avec un local<br/>
								Une visite authentique<br/>
								Visitez Toulouse pour ce que vous voulez<br/>
								Guide disponible en moins d'un quart d'heure<br/>
								Des guides de qualité<br/></i>
            </p>
        </div>

    </div>

    <div class="parallaxSeparator" bleed="10" data-parallax="scroll" data-image-src="/src/images/optimized_clocher_bottom.jpg">

        <div class="parallaxOverlay
                    text__left
                    overlay__right
                    overlay__rounded">
            <p class="overlayTitle">Pourquoi ce projet ?</p>

            <div class="overlayText">
                <p>Pickaguide est un <a href="http://www.epitech.eu/epitech-innovative-projects.aspx" target="_blank">EPITECH Innovative Project</a> (EIP)</p>
            </div>

        </div>

    </div>

    <div class="element">
        <p class="elementTitle">Notre équipe</p>
				<div align="center">
	        <img src="https://cdn.local.epitech.eu/userprofil/profilview/saenen_a.jpg" style="margin: 3.6%" />
					<img src="https://cdn.local.epitech.eu/userprofil/profilview/bonald_j.jpg" style="margin: 3.6%" />
					<img src="https://cdn.local.epitech.eu/userprofil/profilview/sangoi_l.jpg" style="margin: 3.6%" />
					<img src="https://cdn.local.epitech.eu/userprofil/profilview/pradel_v.jpg" style="margin: 3.6%" />
					<img src="https://cdn.local.epitech.eu/userprofil/profilview/peauge_t.jpg" style="margin: 3.6%" />
					<img src="https://cdn.local.epitech.eu/userprofil/profilview/gousse_p.jpg" style="margin: 3.6%" />
				</div>
				<p class="text__center" style="font-size: 1.7em;line-height: 1.5em;"><strong>6</strong> globe trotteurs<br/>
					plus de <strong>101 884 KM</strong> parcourus !<br/>
					plus de <strong>21</strong> pays visités !<br/>
					et des souvenirs pleins la tête ...<br/><br/></p>
    </div>

    <?php include '../footer.html' ?>

	</body>

</html>
