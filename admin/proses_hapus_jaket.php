<?php

include "koneksi.php";


$kode = $_GET['kode'];


$query = "SELECT * FROM jaket WHERE kode='".$kode."'";
$sql = mysql_query($query); 
$data = mysql_fetch_array($sql);


if(is_file("images/".$data['foto'])) 
	unlink("images/".$data['foto']); 


$query2 = "DELETE FROM jaket WHERE kode='".$kode."'";
$sql2 = mysql_query($query2);

if($sql2){
	header("location: index.php?halaman=produk"); 
}else{
	echo "Data gagal dihapus. <a href='index.php?halaman=produk'>Kembali</a>";
}
?>
