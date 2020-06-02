<?php 
	include_once("function/koneksi.php");
	include_once("function/helper.php");
	session_start();

	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$query = mysqli_query($koneksiku, "SELECT * FROM user WHERE email='$email' AND password='$password' AND status='on' ");
	if (mysqli_num_rows($query) == 0) {
		header("Location: ".BASE_URL."index.php?page=login&notif=true");
	} else{
		$row = mysqli_fetch_assoc($query);
		
		$_SESSION['user_id'] = $row['user_id'];
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['level'] = $row['level'];
		$_SESSION['alamat'] = $row['alamat'];
		$_SESSION['phone'] = $row['phone'];
		$_SESSION['email'] = $row['email'];

		header("Location: ".BASE_URL."index.php?page=my_profile&module=pesanan&action=list");
	}
	
	mysqli_error($koneksiku);
 ?>