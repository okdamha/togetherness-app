<?php
	ob_start();
	
	include "koneksi.php";
	
		$judulartikel = $_POST['judul_artikel'];
		$isiartikel = $_POST['isi_artikel'];
		$photoartikel = $_FILES['images']['name'];
		$tmp = $_FILES['images']['tmp_name'];
		$path = "../photo-artikel/".$photoartikel;
		
		if (!empty($_FILES['images']['tmp_name'])){
			move_uploaded_file($tmp, $path);
			
			mysql_query("insert into artikel(judul_artikel, isi_artikel, photo_artikel) values('$judulartikel','$isiartikel','$photoartikel')");
			
		}else{
			mysql_query("insert into artikel(judul_artikel, isi_artikel) values('$judulartikel','$isiartikel')");
		}
		header('location:index.php?halaman=data_artikel');
		exit;
?>