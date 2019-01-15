<?php

	include 'lib/connect.php';

	session_start();
	if(isset($_SESSION['login']) && isset($_SESSION['id'])){
		$login = $_SESSION['login'];
		$idUser = $_SESSION['id'];
	}

?>