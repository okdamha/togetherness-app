<?php

include "koneksi.php";


$id_video = $_GET['id_video'];

$judul = $_POST['judul'];
	
$query = "UPDATE video SET judul='".$judul."' WHERE id_video='".$id_video."'";
$sql = mysql_query($query);

	if($sql){
		header("location: index.php?halaman=news");
	}else{
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='index.php?halaman=news'>Kembali</a>";
	}
?>