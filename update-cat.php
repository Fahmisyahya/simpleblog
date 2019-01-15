<?php

include 'lib/connect.php';

$idCat = $_POST['idcat'];
$titleCat = $_POST['ucat'];

$uCat = $lo->query("UPDATE category SET title = '$titleCat' WHERE idcat = '$idCat'");
if($uCat == true){
	header("location:cat.php");
}

?>