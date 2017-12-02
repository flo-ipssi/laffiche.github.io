<?php

if (isset($_SESSION)) {
	if ($_SESSION['login'] = 'admin') {
		header('location: admin.php');
	}else
		header('location: home.php');
}else {
	header('location: laffiche.html');
}

