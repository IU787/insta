<?php
	$connect = mysqli_connect("127.0.0.1","root","","instagram");
	$text_zaprosa_vstavit =  "INSERT INTO posts (user, img, text, date)
							VALUES ('".$_GET["user"]."', '".$_GET["img"]."', '".$_GET["text"]."', '".$_GET["date"]."')";
	$zapros_vstavit = mysqli_query($connect, $text_zaprosa_vstavit);
	header('Location: index.php')
?>