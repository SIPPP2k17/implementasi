<?php

	function verifikasi_user($nama, $pass){
		global $link;
		
		//mencegah sql injection
		$nama = mysqli_real_escape_string($link, $nama);
		$pass = mysqli_real_escape_string($link, $pass);
		
		$query = "SELECT password FROM admin WHERE username = '$nama'";
		$result = mysqli_query($link, $query);
		$result = mysqli_fetch_assoc($result)['password'];
		
		if($pass==$result){
			die('berhasil');
		}else{
			die('gagal');
		}
		
	}

?>