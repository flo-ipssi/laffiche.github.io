<?php 
require "includes/connexion.php";
require "includes/functions.php";
session_start();
session_regenerate_id();

if (isset($_SESSION['login'])) {
?>
<!DOCTYPE html>
<html>
<head>
	<?php require 'includes/meta.php';?>
</head>
<body>
	<div class="container">
		<?php require 'includes/header.php';?>
		<div class="row alerte">
			<h4> Bienvenue <?php echo $_SESSION['login'];?> !</h4>
			<marquee behavior="slide" direction="left"> ALERTE INFO </marquee>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-lg-9">
		      <!-- your page content -->
		      	<a href="articles.php?art=la_une">
			      	<div class="content"> 
			      		<h2>Lorem Ipsum ?</h2>
			      		<h3>Nisi mihi Phaedrum, inquam, tu mentitum aut Zenonem puta</h3>
			      	</div>
			    </a>
		    </div>
		    <div class="col-sm-12 col-lg-3 vignettes">
		      <nav class="navbar navbar-default navbar-fixed-side">
		        <!-- normal collapsible navbar markup -->
		        <div class="box">
		        	<a href="articles.php?art=1">
		        		<img class="loupe" src="img/loop.png">
		        		<img class="fond" src="img/actu.jpg">
		        		<p>Lorem iezôf nsonvq sofqk eznvqn zef dozkfv oshv</p>
		        	</a>
		        </div>
		      	<div class="box">
		        	<a href="articles.php?art=2">
			        	<img class="fond" src="img/actu1.jpg">
			        	<p>Lorem iezôf nsonvq sofqk eznvqn zef dozkfv oshv</p>
			        </a>
		        </div>
		      	<div class="box">
		        	<a href="articles.php?art=3">
		        	   	<img class="loupe" src="img/loop.png">
			        	<img class="fond" src="img/actu2.jpg">
			        	<p>Lorem iezôf nsonvq sofqk eznvqn zef dozkfv oshv</p>
			        </a>
		        </div>
		      </nav>
		    </div>
	  	<?php require 'includes/footer.php'; ?>
	  	</div>
	</div>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  	<script src="js/script.js"></script>
</body>
</html>
<?php

}else
	header('laffiche.html')
?>