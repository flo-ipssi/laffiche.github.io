<?php
// Connection bdd
include 'connexion.php';
 

if (isset($_POST['id']) && isset($_POST['mdp'])) {
	$pass = sha1($_POST['mdp']);
	$login_valide = $bdd->query('SELECT * FROM users WHERE u_pseudo =\''.$_POST['id'].'\' AND u_mdp =\''.$pass.'\'');
	while ($login = $login_valide->fetch()){
		if (!$login){
			header('location: ../connect.php?statut=erreur');
		}else{
			if ($_POST['id'] == "admin") {
				// on la démarre :)
				session_start ();
				$_SESSION['login'] = $_POST['id'];
				$_SESSION['mdp'] = $pass;
				header ('location: ../admin.php');
			}
			else {
				// on la démarre :)
				session_start ();
				$_SESSION['login'] = $_POST['id'];
				$_SESSION['mdp'] = $_POST['mdp'];
				header ('location: ../home.php');
			}
		}

	}
$login_valide->closeCursor();
}
else
	header('location: ../connect.php?statut=erreur');

?>