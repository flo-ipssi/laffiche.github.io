<?php
	// définition des variables de connexion à la base de données	
	try {
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		// INFORMATIONS DE CONNEXION
		$host = 	'localhost';
		$dbname = 	'tp_php';
		$user = 	'root';
		$password = 	'';
		// FIN DES DONNEES
		
		$bdd = new PDO('mysql:host='.$host.';dbname='.$dbname.'', $user, $password, $pdo_options);
		$bdd->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
		$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
		/* AJOUT DU JEU DE CARACTERE UTF8 */
		$bdd->exec("SET CHARACTER SET utf8");

		return $bdd;
	} catch (Exception $e) {
		die('Erreur de connexion : ' . $e->getMessage());
	}
?>