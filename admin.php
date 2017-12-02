<?php
include "includes/connexion.php";
include "includes/functions.php";
session_start();
session_regenerate_id();
if (isset($_SESSION['login'])) {
/* Permet de modifier le session_id pour empecher la récupération d'infos */
list_users($_SESSION['login']);
membre();

require "includes/error.php";	
?>
<br>
<a href="includes/logout.php">Deconnecte</a>
<br>
<br>
<br>
<br>
<form method="post">
	<div class="title">
		<b>Supprimer un membre</b>
	</div>
	<p><b>
		<table border="1" >  
			<?php 
			// Preparation de la requête
			$req = $bdd->query('SELECT * FROM users ORDER BY u_pseudo ASC');
			// Execution
			if ($donnees = $req->fetch()){
				do{
					// Preparation de la seconde requête
					$sql = $bdd->query('SELECT * FROM users WHERE id > 1 AND id = \''.$donnees['id'].'\'');
					// Execution
					while($membre = $sql->fetch()){
						// Ligne d'un tableau avec le nom, le prenom et le membre suivi d'une checkbox pour pour la manipulation sql
					echo '
					<tr>	
						<td>'.$donnees['u_pseudo'].'</td>
						<td><INPUT type="checkbox" class="check" name="membre[]" value="'.$donnees['id'].'"></td>
					</tr>
					';
					}
					$sql->closeCursor(); // Termine le traitement de la requête	
				}while($donnees = $req->fetch());
				$req->closeCursor(); // Termine le traitement de la requête	
			}else
				echo 'Aucun membre.'?>	
		</table>
		<input type="submit" class="execution"  value="Suprimer"/>
	</b></p>
</form>
<?php
}
?>