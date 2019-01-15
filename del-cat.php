<?php

include 'lib/connect.php';

if(isset($_GET['idcat'])){
	$id = $_GET['idcat'];
	$del = $lo->query("DELETE FROM category WHERE idcat = '$id'");
	if($del == true){
		header("location:cat.php");
	}
}

?>