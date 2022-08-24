<html>
<head>
	<title>Ubah Data</title>
</head>
<body>
	<h2>Ubah Data</h2>
	<br>
	<?php

	include "koneksi.php";
	

	$kode = $_GET['kode'];
	

	$query = "SELECT * FROM dress WHERE kode='".$kode."'";
	$sql = mysql_query($query);
	$data = mysql_fetch_array($sql);
	?>
	
	<form method="post" action="proses_ubah_dress.php?kode=<?php echo $kode; ?>" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>Nama</td>
		<td><input type="text" class="form-control" name="nama" value="<?php echo $data['nama']; ?>"></td>
	</tr>
	<tr>
		<td>Harga</td>
		<td><input type="text" class="form-control" name="harga" value="<?php echo $data['harga']; ?>"></td>
	</tr>
	<tr>
		<td>Foto</td>
		<td>
			<input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
			<input type="file" class="form-control" name="foto">
		</td>
	</tr>
	</table>
	
	<hr>
	<input type="submit" class="btn btn-primary" value="Ubah">
	<a href="index.php"><input type="button" class="btn btn-danger" value="Batal"></a>
	</form>
</body>
</html>
