import '../styles/home.scss';
import React from 'react';

//TODO: Il faut rajouter les actions d'authentification etc...

const NavigationElement = (props) => (
	<div className="navel">
		<a href={props.element.link}>{props.element.title}</a>
	</div>
);

const NavigationList = ({elements}) => (
	<ul className="navlist">
		{
			elements.map(function(element) {
				return <NavigationElement key={element.key} element={element} />;
			})
		}
	</ul>
);

export class Menu extends React.Component {
	//TODO: Ici coder l'état du menu (admin, page active ...)
	render() {
		var data = [
			{ key: 1, link : "/index.php", title : "Accueil" },
			{ key: 2, link : "/contact/index.php", title : "Nous contacter" },
			{ key: 3, link : "/about/index.php", title : "A propos" }
		];

		return (
			//TODO: Remplacer les href par des Link
			<div className="navbar">
				<NavigationList elements={data} />
			</div>
		);
	}
};
/*
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
			if (!isset($_SESSION["userId"])) {
				echo "<div class='admel'><a class='admlink' href='/account/index.php'>Compte</a></div>";
			} else {
				echo "<div class='admel'><a class='admlink' onclick='logout();' href='#'>Déconnexion</a></div>";
			}
		?>
</div>
*/
