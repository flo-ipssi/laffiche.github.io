<?php

function list_users($pseudo){
	include "connexion.php";
	echo 'Nom : '.$pseudo;
	echo "<br>";
	echo "<br><b>Liste des Membres</b><br>";
	$sql =  'SELECT * FROM users WHERE id <> 1 ORDER BY u_pseudo';
	$reponse = $bdd->query($sql);
	while ($donnees = $reponse->fetch()) {
		echo $donnees['u_pseudo'].' '.$donnees['u_mail'].'<br>'; 
	}
}


function membre(){
	include "connexion.php";
	if (!empty($_POST['membre'])){
		// Boucle  allant de 0 au nombre de chekbox selectionner
		for ($i=0;$i<count($_POST['membre']);$i++){
			// On stocke tous les choix dans une variable 
			$choix = $_POST['membre'][$i];
			// Preparation et Execution de la requête
			$req = $bdd->exec('DELETE FROM users WHERE id=\''.$choix.'\' AND id > 1');
		}
		header('location: admin.php?statut=suppression');
	}
}

?>
