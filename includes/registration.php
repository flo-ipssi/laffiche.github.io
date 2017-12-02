<?php
include 'connexion.php';
if (!empty($_POST['age']) & $_POST['age'] == 'non') {
	header ('location: ../connect.php?statut=yg');
}else{
	if (!empty($_POST['pseudo']) AND !empty($_POST['mdp']) AND !empty($_POST['email'])){
		// Sécurisation des champs
		$pseudo = htmlspecialchars($_POST['pseudo']);
		$mail = htmlspecialchars($_POST['email']);
		$mdp = sha1(htmlspecialchars($_POST['mdp']));
			// On prepare la requete
			$sql= $bdd->query('SELECT * FROM users WHERE u_pseudo = \''.$pseudo.'\' AND  u_mdp = \''.$mdp.'\'');
				// On vérifie l'existance d'un email
				if ($sql->fetch() == false){
				// Preparation de la requête
				$req = $bdd->prepare('INSERT INTO users(u_pseudo,u_mdp, u_mail) VALUES(:nom, :mdp, :mail)');
				// Execution de la requête
				$req->execute(array(
					'nom' => $pseudo,
					'mdp' => $mdp,
					'mail' => $mail
					));
				// Actualise la page avec une redirection
				header ('location: ../connect.php?statut=enregister');		
				$req->closeCursor(); // Termine le traitement de la requête	
			}else {
				// Affiche ce message dans le cas ou le email est déjà existant
				header ('location: ../inscription.php?statut=copy');
		}
	}	
}