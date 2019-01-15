<?php

include 'lib/connect.php';

$title = $_POST['cat'];
$save = $lo->query("INSERT INTO category VALUES('','$title')");
if($save == true){
	header("location:cat.php");
}

?>