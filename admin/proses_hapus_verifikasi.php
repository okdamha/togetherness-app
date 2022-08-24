<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data NIS yang dikirim oleh produk.php melalui URL
$kode_beli = $_GET['kode_beli'];

// Query untuk menghapus data siswa berdasarkan NIS yang dikirim
$query2 = "DELETE FROM verifikasi WHERE kode_beli='".$kode_beli."'";
$sql2 = mysql_query($query2); // Eksekusi/Jalankan query dari variabel $query

if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
	// Jika Sukses, Lakukan :
	header("location: index.php?halaman=verifikasi"); // Redirect ke halaman index.php
}else{
	// Jika Gagal, Lakukan :
	echo "Data gagal dihapus. <a href='index.php'>Kembali</a>";
}
?>
