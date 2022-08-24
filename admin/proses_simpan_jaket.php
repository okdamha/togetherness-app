<?php

include "koneksi.php";


$kode = $_POST['kode'];
$nama = $_POST['nama'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
	

$fotobaru = date('dmYHis').$foto;


$path = "../images/".$fotobaru;


if(move_uploaded_file($tmp, $path)){
	$query = "INSERT INTO jaket VALUES('".$kode."', '".$nama."', '".$stok."', '".$harga."', '".$fotobaru."')";
	$sql = mysql_query($query);

	if($sql){
		header("location: index.php?halaman=produk");
	}else{
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='index.php?halaman=produk'>Kembali</a>";
	}
}else{
	echo "Maaf, Gambar gagal untuk diupload.";
	echo "<br><a href='index.php?halaman=produk'>Kembali</a>";
}
?>
