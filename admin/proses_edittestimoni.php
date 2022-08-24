<?php
	include "koneksi.php";

	if (isset($_POST['simpan'])) {

    $id =$_POST ['id'];
	  $nama=$_POST['nama'];
	  $email=$_POST['email'];
	  $komentar=$_POST['komentar'];

	  $query = mysql_query ('UPDATE comment set nama ="'.$nama.'", email = "'.$email.'", komentar ="'.$komentar.'" where id ="'.$id.'" ');
	  if($query){
	   header('location:testimoni.php');
	  }
	}

?>
