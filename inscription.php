<!DOCTYPE html>
<html>
<head>
	<?php require 'includes/meta.php';?>
</head>
<body>
	<div class="container">
		<?php require 'includes/header.php';?>
			<div class="row">
			<form  method="post" action="includes/registration.php">
				<fieldset>
					<legend>Inscription</legend>
					<input type="text" name="pseudo" placeholder="Pseudo/E-mail" />
					<input type="text" name="mdp" placeholder="Mot de passe" />
					<input type="text" name="email" placeholder="E-mail" />
					<p>Avez-vous plus de 18 ans ?</p>
					<input type="radio" name="age" value="oui" />Oui
					<input type="radio" name="age" value="non" />Non
					<div>
						<button type="submit">Confirmer</button>
						<button><a href="laffiche.html">Retour</a></button>
					</div>
				</fieldset>
			</form>
			<?php require "includes/error.php";	?>
		</div>
	</div>
</body>
</html>