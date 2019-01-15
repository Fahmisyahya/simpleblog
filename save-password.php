<?php

include 'lib/connect.php';
include 'lib/session.php';

if(isset($login)){
	$idPass = $_POST['id'];
	$oldPass = $_POST['old'];
	$newPass = $_POST['new'];
	$newPass2 = $_POST['new2'];

	$checkPass = $lo->query("SELECT * FROM user WHERE iduser = '$idPass'");
	if($checkPass == true){
		while($rowPass = $checkPass->fetch_array(MYSQLI_BOTH)){
			if($rowPass['password'] == $oldPass){
				if($newPass == $newPass2){
					$savePass = $lo->query("UPDATE user SET password = '$newPass2' WHERE iduser = '$idPass'");
					if($savePass == true){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Kata sandi telah diperbaharui</title>
	<meta http-equiv="refresh" content="3,index.php">
</head>
<body>
	<p>Kata sandi telah diperbaharui menjadi <b><?php echo $newPass2; ?></b>, anda akan dialihkan dalam waktu 3 detik. Jika tidak terjadi apa apa <a href="index.php">Klik disini</a> untuk kembali ke beranda</p>
</body>
</html>
<?php
					}
				}else{
					echo "Kata sandi lama anda salah, Kembali dan coba sekali lagi";
				}
			}
		}
	}
}

?>