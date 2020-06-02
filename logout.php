<?php 
	include_once("function/koneksi.php");
	include_once("function/helper.php");

	session_start();
    session_unset();
	header("Location: ".BASE_URL."index.php?page=login");
 ?>