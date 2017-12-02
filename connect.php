<!DOCTYPE html>
<html>
<head>
	<?php require 'includes/meta.php';?>
</head>
<body>
	<div class="container">
		<?php require 'includes/header.php';?>
			<div class="row">
				<form  method="post" action="includes/login.php">
				<fieldset>
					<legend>Connexion</legend>
					<input type="text" name="id" placeholder="Pseudo/E-mail" />
					<input type="text" name="mdp" placeholder="Mot de passe" />
					<button type="submit">Connexion</button>
					<?php require "includes/error.php";	?>
				</fieldset>
				</form>
		</div>
	</div>
</body>
</html>