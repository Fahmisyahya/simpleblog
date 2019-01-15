<?php

include 'lib/connect.php';

if(isset($_GET['id'])){
	$id = $_GET['id'];
	$del = $lo->query("DELETE FROM post WHERE idpost = '$id'");
	if($del == true){
		header("location:post.php");
	}
}

?>