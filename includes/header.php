<header>
	<img src="img/logo.png">
	<div class="bandeau">
		<h1>L'AFFICHE</h1>
		<h2>Toute l'actu sur une page ;)</h2>
		<nav>
			<ul>
				<li><a href="home.php">Accueil</a></li>
				<li><a href="articles.php?art=la_une">La Une</a></li>				<?php 
				if (isset($_SESSION)) {					
					echo "<li><a href='includes/logout.php'>Deconnection</a></li>";
				}else {
					echo "<li><a href='inscription.php'>Inscrivez-vous</a></li>";
					echo "<li><a href='connect.php'>Connexion</a></li>";
				}?>
			</ul>
		</nav>
	</div>
</header>