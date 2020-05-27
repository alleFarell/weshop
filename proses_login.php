<?php 
	include_once("funtion/koneksi.php");
	include_once("function/helper.php");

	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$query = mysqli_query($koneksiku, "SELECT * FROM user WHERE email='$email' AND password='$password' AND status='on' ");
	if (mysqli_num_rows($query) == 0) {
		header("Location: ".BASE_URL."index.php?page=login&notif=true");
	} else{
		$row = mysqli_fetch_assoc($query);
		$row['nama'];
	}
	
	mysqli_error($koneksiku);
 ?>