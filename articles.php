<?php 
require "includes/connexion.php";
require "includes/functions.php";
session_start();
session_regenerate_id();

if (isset($_SESSION['login']) && isset($_GET)) {
	$article = $_GET['art'];
?>
<!DOCTYPE html>
<html>
<head>
	<?php require 'includes/meta.php';?>
	<link rel="stylesheet" type="text/css" href="css/article.css">
</head>
<body>
	<div class="container">
		<?php require 'includes/header.php';?>
		<div class="row alerte">
			<h4> Bienvenue <?php echo $_SESSION['login'];?> !</h4>
			<marquee behavior="slide" direction="left"> ALERTE INFO </marquee>
		</div>
		<div class="row article">
		    <div class="img_art">
				<?php echo '<img src="articles/'.$article.'/img_medium.jpg" >' ?>
		    </div>
		    <div class="description">
		    	<h3>Lorem iezôf nsonvq sofqk eznvqn zef dozkfv oshv</h3>

		    	<p>Post hoc impie perpetratum quod in aliis quoque iam timebatur, tamquam licentia crudelitati indulta per suspicionum nebulas aestimati quidam noxii damnabantur. quorum pars necati, alii puniti bonorum multatione actique laribus suis extorres nullo sibi relicto praeter querelas et lacrimas, stipe conlaticia victitabant, et civili iustoque imperio ad voluntatem converso cruentam, claudebantur opulentae domus et clarae.
		    </div>
		    <p>Sed quid est quod in hac causa maxime homines admirentur et reprehendant meum consilium, cum ego idem antea multa decreverim, que magis ad hominis dignitatem quam ad rei publicae necessitatem pertinerent? Supplicationem quindecim dierum decrevi sententia mea. Rei publicae satis erat tot dierum quot C. Mario ; dis immortalibus non erat exigua eadem gratulatio quae ex maximis bellis. Ergo ille cumulus dierum hominis est dignitati tributus.</p>

			<p>Illud tamen clausos vehementer angebat quod captis navigiis, quae frumenta vehebant per flumen, Isauri quidem alimentorum copiis adfluebant, ipsi vero solitarum rerum cibos iam consumendo inediae propinquantis aerumnas exitialis horrebant.</p>

			<p>Accedat huc suavitas quaedam oportet sermonum atque morum, haudquaquam mediocre condimentum amicitiae. Tristitia autem et in omni re severitas habet illa quidem gravitatem, sed amicitia remissior esse debet et liberior et dulcior et ad omnem comitatem facilitatemque proclivior.</p>
			<a href="home.php" class="retour">RETOUR</a>
	  	</div>
	</div>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  	<script src="js/script.js"></script>
</body>
</html>
<?php

}else
	header('laffiche.html');
?>