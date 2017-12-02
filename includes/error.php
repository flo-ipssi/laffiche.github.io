<?php



if ($_GET) {
	if ($_GET['statut'] == "suppression") {
		$msg = "<b style='color:red;'>Suppresion enregistrer</b>";
	}elseif ($_GET['statut'] == "spy" ) {
		$msg = "<b style='color:red;'>Connectez-vous.</b>";
	}elseif ($_GET['statut'] == "erreur") {
		$msg = "<b style='color:red;'>Erreur d'identifiant ou de mot de passe.</b>";
	}elseif ($_GET['statut'] == "copy") {
		$msg = "<b style='color:red;'>Utilisateurs déja existants.</b>";
	}elseif ($_GET['statut'] == "yg") {
		$msg = "<b style='color:red;'>Vous n'avez pas l'âge légale.</b>";
	}
	elseif ($_GET['statut'] == "enregister") {
		$msg = "<b style='color:green;'>Utilisateurs enregistré.</b>";
	}else{
		$msg = "<b style='color:red;'>Erreurs.</b>";
	}
  
  echo $msg;
}


?>