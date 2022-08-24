<html>
<head>
	<title>Ubah Data</title>
</head>
<body>
	<h2>Ubah Slider</h2>
	<br>
	<?php

	include "koneksi.php";
	

	$id = $_GET['id'];
	

	$query = "SELECT * FROM slider WHERE id='".$id."'";
	$sql = mysql_query($query);
	$data = mysql_fetch_array($sql);
	?>
	
	<form method="post" action="proses_ubah_slider.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>
			<input type="checkbox" name="ubah_foto" value="true" required> Ceklis untuk mengubah gambar slider<br>
			<input type="file" class="form-control" name="gambar" required>
		</td>
	</tr>
	</table>
	
	<hr>
	<input type="submit" class="btn btn-primary" value="Ubah">
	<a href="index.php"><input type="button" class="btn btn-danger" value="Batal"></a>
	</form>
</body>
</html>
