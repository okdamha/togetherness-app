<?php

include "koneksi.php";

$kode = $_GET['kode'];
$stok = $_POST['stok'];
$tambah_stok = $_POST['tambah_stok'];

$stokbaru = $stok+$tambah_stok;

	$query = "UPDATE jaket SET stok='".$stokbaru."' WHERE kode='".$kode."'";
	$sql = mysql_query($query);

	if($sql){
		header("location: index.php?halaman=produk");
	}else{
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='index.php?halaman=produk'>Kembali</a>";
	}
?>