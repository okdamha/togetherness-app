<?php
	include 'koneksi.php';
	session_start();
	$username = $_POST['user'];
	$password = $_POST['pass'];

	$query = mysql_query("select * from admin where username='$username' and password ='$password'");
	$data = mysql_fetch_array($query);

	if($data['username'] == $username and $data['password'] == $password){
		$_SESSION['username'] = $data['username'];
		$_SESSION['password'] = $data['password'];
		if($data['id_admin']){
			header('location:index.php?message=login_berhasil');
		}else{
			header('location:login.php?message=coba_lagi');
		}
	}else{
			header('location:login.php?message=coba_lagi');
	}
?>