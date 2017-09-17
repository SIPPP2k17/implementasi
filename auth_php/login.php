<?php

require_once "core/init.php";

//validasi login
if( isset($_POST['submit'])) {
	$nama = $_POST['username'];
	$pass = $_POST['password'];
	
	if(!empty(trim($nama))&& !empty(trim($pass))) {
		
		//validasi masukan
		verifikasi_user($nama, $pass);
		echo 'terima kasih';
	}else{
		echo 'tidak boleh kosong';
	}
}

require_once "view/header.php";

?>

<form action="login.php" method="post">
	<label for="">Nama</label> <br />
	<input type="text" name="username"> <br /><br />
	
	<label for="">Password</label> <br />
	<input type="password" name="password"> <br /><br />
	
	<input type="submit" name="submit" value="masuk">
	
</form>

<?php require_once "view/footer.php"; ?>