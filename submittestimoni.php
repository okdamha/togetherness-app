<?php

include 'koneksi.php';

if($_POST["tombol"]) {
	$nama=$_POST["nama"];
	$email=$_POST["email"];
	$komentar=$_POST["komentar"];
	$art_id=$_POST["art_id"];
	$art_url=$_POST["art_url"];

	if(empty($nama))
	$_POST["nama"]='anonymous';
	if(empty($komentar)){
		echo "<meta http-equiv='refresh' content='2; url=$art_url'>";
		die("komentar harus diisi");
		}
	}



//Menampilkan data
	mysql_select_db("togetherness", $koneksi);
	$sql="INSERT INTO testimoni (nama, email, komentar, art_id, art_url, date) VALUES ('$_POST[nama]','$_POST[email]', '$_POST[komentar]','$_POST[art_id]', '$_POST[art_url]', NOW())";
	if (!mysql_query($sql,$koneksi))
	 {
		die('Error: ' . mysql_error());
	 }
	echo "<meta http-equiv='refresh' content='0; url=$art_url'>";

//Memutuskan koneksi
	mysql_close($koneksi);
?>
