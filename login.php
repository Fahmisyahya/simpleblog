<?php

	include 'lib/connect.php';
	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$checkUser = $lo->query("SELECT * FROM user");
		if($checkUser == true){
			while($rowUser = $checkUser->fetch_array(MYSQLI_BOTH)){
			if($rowUser['username'] == $username && $rowUser['password'] == $password){
				session_start();
			$_SESSION['login'] = $username;
			$_SESSION['id'] = $rowUser['iduser'];
			header("location:index.php");
			}
		}
	}
}
?>