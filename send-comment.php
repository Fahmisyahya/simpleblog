<?php

include 'lib/connect.php';

$idpost = $_POST['idpost'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$content = $_POST['content'];
$date = date('D, d m Y');

if(isset($_POST['send'])){
	$insertComment = $lo->query("INSERT INTO comment VALUES('','$idpost','$fullname','$email','$content','$date')");
	if($insertComment == true){
		header("location:see-posting.php?id=$idpost#comment");
	}
}

?>