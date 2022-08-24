<?php

include "koneksi.php";


$id_video = $_GET['id_video'];


$query = "SELECT * FROM video WHERE id_video='".$id_video."'";
$sql = mysql_query($query); 
$data = mysql_fetch_array($sql);


if(is_file("../video/".$data['video_'])) 
	unlink("../video/".$data['video_']); 


$query2 = "DELETE FROM video WHERE id_video='".$id_video."'";
$sql2 = mysql_query($query2); 

if($sql2){ 
	header("location: index.php?halaman=news"); 
}else{
	echo "Data gagal dihapus. <a href='index.php?halaman=news'>Kembali</a>";
}
?>
