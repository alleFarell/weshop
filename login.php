<div id="container-user-akses">
	<form action="<?php echo BASE_URL."proses_register.php"; ?>" method="POST">
		<?php 
		
			$notif = isset($_GET['notif']) ? $_GET['notif'] : false;
			if($notif == "require"){
				echo "<div class='notif'> Maaf, Email atau Password yang anda masukkan salah </div>";
			} 
		 ?>
	
		<div class="element-form">
			<label>Email</label>
			<span><input type="email" name="email"></span>
		</div>
		<div class="element-form">
			<label>Password</label>
			<span><input type="password" name="password"></span>
		</div>
		<div class="element-form">
			<span><input type="submit" value="login"></span>
		</div>
	</form>
</div>