<?php 
	include_once("function/helper.php");
	session_start();
	$page = isset($_GET['page']) ? $_GET['page'] : false;

	$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : false;
	$nama = isset($_SESSION['nama']) ? $_SESSION['nama'] : false;
	$alamat = isset($_SESSION['alamat']) ? $_SESSION['alamat'] : false;
	$phone = isset($_SESSION['phone']) ? $_SESSION['phone'] : false;
	$email = isset($_SESSION['email']) ? $_SESSION['email'] : false;
	$level = isset($_SESSION['level']) ? $_SESSION['level'] : false;
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>weshop | barang-barang elektronik cuy</title>
 	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL."css/tampilan.css"; ?>"/>
 </head>
 <body>
 	<div id="container">
 		<div id="header">
 			<a href="<?php echo BASE_URL."index.php"; ?>">
 				<img src="<?php echo BASE_URL."img/logo.png"; ?>"/>
 			</a>

 			<div id="menu">
 				<div id="user">
 					<?php 
 						if($user_id){
 							echo "Hi <b>$nama</b>, <a href='".BASE_URL."index.php?page=my_profile&module=pesanan&action=list'>My Profile</a>";
 							echo "<a href='".BASE_URL."index.php?page=logout'>Logout</a>";
 						} else{
 							echo "<a href='".BASE_URL."index.php?page=login'>Login</a>
 								  <a href='".BASE_URL."index.php/page=register'>Register</a>";
 						}
 						
 					?>
 						
 				</div>

 				<a href="<?php echo BASE_URL."index.php?page=keranjang"; ?>" id="btn-keranjang"><img src="<?php echo BASE_URL."img/cart.png"; ?>"></a>
 			</div>
 		</div>

  		<div id="content">
 			<?php 
 				$filename = "$page.php";

 				if(file_exists($filename)){
 					include_once($filename);
 				}else{
 					echo "Maaf, File Tersebut Tidak Ditemukan Di Dalam Sistem";
 				}
 			 ?>
 		</div>

 		<div id="footer">
 			<p>copyright farellalle corp 2019</p>
 		</div>
 	</div>
 </body>
 </html>