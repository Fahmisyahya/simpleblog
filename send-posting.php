<?php

include 'lib/connect.php';

$title = $_POST['title'];
$category = $_POST['category'];
$date = date('D, d M Y');
$content = $_POST['content'];
$locatedImg = $_FILES['image']['tmp_name'];
$nameImg = $_FILES['image']['name'];
$locationImg = "img/$nameImg";

include 'lib/session.php';

$uploadImg = move_uploaded_file($locatedImg, "$locationImg");
$savePost = $lo->query("INSERT INTO post VALUES('','$title','$login','$date','$nameImg','$content','$category')");
if($uploadImg == true && $savePost == true){
	header("location:index.php");
}

?>