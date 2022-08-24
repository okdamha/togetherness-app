<html>
<head>
	<title>Ubah Data</title>
</head>
<body>
	<h2>Ubah Judul</h2>
	<br>
	<?php

	include "koneksi.php";
	

	$id_video = $_GET['id_video'];
	

	$query = "SELECT * FROM video WHERE id_video='".$id_video."'";
	$sql = mysql_query($query);
	$data = mysql_fetch_array($sql);
	?>
	
	<form method="post" action="proses_ubah_video.php?id=<?php echo $id_video; ?>" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>Judul baru:</td>
		<td><input type="text" class="form-control" name="judul" value="<?php echo $data['judul']; ?>"></td>
	</tr>
	</table>
	
	<hr>
	<input type="submit" class="btn btn-primary" value="Ubah">
	<a href="index.php?halaman=news"><input type="button" class="btn btn-danger" value="Batal"></a>
	</form>
</body>
</html>
