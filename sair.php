<?php

	session_start();
	unset($_SESSION['usuario']);
	unset($_SESSION['email']);
	header('location: logoutdone.php');

?>