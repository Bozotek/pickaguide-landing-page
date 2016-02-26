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
										fix__bottom" src="/src/images/paris_night.jpg" />
    </div>


    <div class="element">
        <p class="elementTitle">A propos</p>
        <hr class="titleBreak">
        <img src="/src/images/ghost.png" id="aboutIcon" />
    </div>

    <div class="parallaxSeparator" bleed="10" data-parallax="scroll" data-image-src="/src/images/notre_dame.jpg">

        <div class="parallaxOverlay
                    text__left
                    overlay__left
                    overlay__rounded">
            <p class="overlayTitle">Bienvenue</p>

            <div class="overlayText">
                <p>Hey guys ... and maybe ladies</p>
                <p>Scroll a bit further if you wish to learn more about this website</p>
            </div>

        </div>

    </div>

    <div class="element">
        <p class="elementTitle">What's this?</p>
        <hr class="contentBreak">

        <div class="content
                    text__center">
            <p>
                You must be asking yourself why in the world you're here ...
                <br/><br/>Well wonder no more !
                <br/><br/>Normally, if you're here, that means you know my main Website
                <a href="/index.php">GeekForLife</a>. If not,
                feel free to check it out, you can click the link in the menu or the nice blue word in the previous sentence.
                Come on ! Don't be shy !
                <br/><br/>This is a kind of tool website that can help you upload new versions/updates of my projects.
                <br/>More information about the tools are available on the <a href="#">Tools</a> page,
                if you wish to contact me then click <a href="/contact/index.php">here</a>.
                <br/><br/>
                Oh and also, yes I know that the images I used for the parallax effect are not related to this website but
                <br/>I thought it looked clean ;D
            </p>
        </div>

    </div>

    <div class="parallaxSeparator" bleed="10" data-parallax="scroll" data-image-src="/src/images/girl_river.jpg">

        <div class="parallaxOverlay
                    text__left
                    overlay__right
                    overlay__rounded">
            <p class="overlayTitle">Crazy right ?</p>

            <div class="overlayText">
                <p>What is so crazy about a geek who loves the sites and projects he makes ?</p>
                <p>Literally everything ...</p>
            </div>

        </div>

    </div>

    <div class="element">
        <p class="elementTitle">What's up ?</p>
        <p class="text__center">So what do you think ? Please check everything there is to see !</p>
				<br/>
    </div>

    <?php include '../footer.html' ?>

	</body>

</html>
