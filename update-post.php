<?php

include 'lib/connect.php';
include 'lib/session.php';

if(isset($_GET['act'])){
	$act = $_GET['act'];
	if($act == "imgMedia"){
		$id = $_POST['id'];
		$locatedImg = $_FILES['image']['tmp_name'];
		$nameImg = $_FILES['image']['name'];
		$location = "img/$nameImg";
		if(move_uploaded_file($locatedImg, "$location")){
			$uploadImg = $lo->query("UPDATE post SET img = '$nameImg' WHERE idpost = '$id'");
			if($uploadImg == true){
				header("location:edit-post.php?id=$id");
			}
		}
	}
	if($act == "stringText"){
		$id = $_POST['id'];
		$title = $_POST['title'];
		$category = $_POST['category'];
		$content = $_POST['content'];
		$updateText = $lo->query("UPDATE post SET title = '$title', label = '$category', content = '$content' WHERE idpost = '$id'");
		if($updateText == true){
			header("location:edit-post.php?id=$id");
		}
	}
}


?>