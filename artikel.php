<?php
include 'header.php';
?>

<!DOCTYPE html>
<html>

<br>
<div class="header">
  <div class="container">
      <h2>
        <p> <i class="glyphicon glyphicon-eye-open"></i> Artikel</p>
      </h2>
  </div>
</div>

<head>
	<title>Artikel</title>
	<style>
		hr{
			display: block;
			height: 0px;
			border-top: 4px solid grey;
			margin: 1em 0;
			padding:0;
		}
	</style>
</head>

<br>
<div id="container">
<?php
	include "koneksi.php";
	$has=mysql_query("select * from artikel order by tgl_artikel desc");
	$num=mysql_num_rows($has);
	if ($num<1){
		echo'<center>Tidak Ada Artikel</center>';
	} else{
		while ($data=mysql_fetch_array($has)){
			$art=substr($data['isi_artikel'],0,100);
			echo'
			<h2>'.$data['judul_artikel'].'</h2>
			<img width="300" height="280" src="photo-artikel/'.$data['photo_artikel'].'">
			<h4>Dipublikasi pada '.$data['tgl_artikel'].'</h4>
			<p>'.$art.'..</p>
			<br><br>
		';}
		}
?>
</div>

</html>

<?php
include 'footer.php';
?>