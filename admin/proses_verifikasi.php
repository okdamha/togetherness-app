<?php

include "koneksi.php";

$kode_beli = $_GET['kode_beli'];

$query_transaksi = "SELECT * FROM transaksi WHERE kode_beli='".$kode_beli."'";
$sql_transaksi = mysql_query($query_transaksi);
$data_transaksi = mysql_fetch_array($sql_transaksi);

$kode_beli = $data_transaksi['kode_beli'];
$nama = $data_transaksi['nama'];
$kode = $data_transaksi['kode'];
$harga = $data_transaksi['harga'];
$nama_pembeli = $data_transaksi['nama_pembeli'];
$nohp = $data_transaksi['nohp'];
$alamat = $data_transaksi['alamat'];
$kec = $data_transaksi['kec'];
$kota = $data_transaksi['kota'];
$propinsi = $data_transaksi['propinsi'];
$kode_pos = $data_transaksi['kode_pos'];
$foto = $data_transaksi['foto'];

$query = "INSERT INTO verifikasi VALUES (
'".$kode_beli."',
'".$nama."',
'".$kode."',
'".$harga."',
'".$nama_pembeli."',
'".$nohp."',
'".$alamat."',
'".$kec."',
'".$kota."',
'".$propinsi."',
'".$kode_pos."',
'".$foto."')";

$sql = mysql_query($query);

$query_dress = "SELECT * FROM dress";$sql_dress = mysql_query($query_dress);$data_dress = mysql_fetch_array($sql_dress);
$query_kemeja = "SELECT * FROM kemeja";$sql_kemeja = mysql_query($query_kemeja);$data_kemeja = mysql_fetch_array($sql_kemeja);
$query_jaket = "SELECT * FROM jaket";$sql_jaket = mysql_query($query_jaket);$data_jaket = mysql_fetch_array($sql_jaket);

$stok4 = $data_dress['stok'];
$stok4--;
$query40 = "UPDATE dress SET stok='".$stok4."' WHERE kode='".$kode."' AND kode='".$data_dress['kode']."' ";
$sql40 = mysql_query($query40);

$stok5 = $data_kemeja['stok'];
$stok5--;
$query50 = "UPDATE kemeja SET stok='".$stok5."' WHERE kode='".$kode."' AND kode='".$data_kemeja['kode']."' ";
$sql50 = mysql_query($query50);

$stok6 = $data_jaket['stok'];
$stok6--;
$query60 = "UPDATE jaket SET stok='".$stok6."' WHERE kode='".$kode."' AND kode='".$data_jaket['kode']."' ";
$sql60 = mysql_query($query60);

$query2 = "DELETE FROM transaksi WHERE kode_beli='".$kode_beli."'";
$sql2 = mysql_query($query2);

if($sql){ // Cek jika proses simpan ke database sukses atau tidak
	// Jika Sukses, Lakukan :
	echo "<div class='alert alert-info'>Berhasil diverifikasi</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=verifikasi'></meta>";
}else{
	// Jika Gagal, Lakukan :
	echo "<div class='alert alert-info'>Gagal diverifikasi</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=pembelian'></meta>";
}

?>