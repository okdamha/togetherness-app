<?php

include "koneksi.php";

$nama = $_POST['nama'];
$kode = $_POST['kode'];
$harga = $_POST['harga'];
$nama_pembeli = $_POST['nama_pembeli'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];
$kec = $_POST['kec'];
$kota = $_POST['kota'];
$propinsi = $_POST['propinsi'];
$kode_pos = $_POST['kode_pos'];
	
	$query = "INSERT INTO transaksi (nama,kode,harga,nama_pembeli,nohp,alamat,kec,kota,propinsi,kode_pos) VALUES('".$nama."', '".$kode."', '".$harga."', '".$nama_pembeli."', '".$nohp."','".$alamat."','".$kec."', '".$kota."', '".$propinsi."', '".$kode_pos."')";
	
	$sql = mysql_query($query);
	
	$query2 = "SELECT kode_beli FROM transaksi ORDER BY kode_beli DESC LIMIT 1";
	$sql2 = mysql_query($query2);
	$data = mysql_fetch_array($sql2);
	
	if($sql){
		echo "<script>alert('Kode Pembelian anda adalah ".$data['kode_beli']."')</script>";
		echo "<script>location='index.php';</script>";
	}else{
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
	}
?>