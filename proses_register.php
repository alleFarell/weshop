<?php 
	include_once("function/koneksi.php");
	include_once("function/helper.php");

	$level = "customer";
	$status = "on";
	$nama_lengkap = $_POST['nama_lengkap'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$alamat = $_POST['alamat'];
	$password = md5($_POST['password']);
	$re_password = $_POST['re_password'];

	unset($_POST['password']);
	unset($_POST['re_password']);
	$dataForm = http_build_query($_POST);
	$emailSql = mysqli_query($koneksiku, "SELECT * FROM user WHERE email='".$email."' ");
	$cekEmail = mysqli_num_rows($emailSql); 

	if(empty($nama_lengkap)||empty($email)||empty($phone)||empty($alamat)||empty($password)||empty($re_password)){
		header("Location: ".BASE_URL."index.php?page=register&notif=require&$dataForm");
	}elseif ($password != md5($re_password)) {
		header("Location: ".BASE_URL."index.php?page=register&notif=password&$dataForm");
	} elseif ($cekEmail > 0) {
		header("Location: ".BASE_URL."index.php?page=register&notif=email&$dataForm");
	} 
	else{
		mysqli_query($koneksiku, "INSERT INTO user (level, nama, email, alamat, phone, password, status) VALUES 
		('$level', '$nama_lengkap', '$email', '$alamat', '$phone', '$password', '$status')");
		header("Location: ".BASE_URL."index.php?page=login");
	}
	
	mysqli_error($koneksiku);
 ?>  