<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<h2>Tambah Data</h2>
	<br>
	<form method="post" action="proses_simpan_kemeja.php" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>Kode</td>
		<td><input type="text" class="form-control" name="kode" required ></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" class="form-control" name="nama" required ></td>
	</tr>
	<tr>
		<td>Stok</td>
		<td><input type="text" class="form-control" name="stok" required ></td>
	</tr>
	<tr>
		<td>Harga</td>
		<td><input type="text" class="form-control" name="harga" required ></td>
	</tr>
	<tr>
		<td>Foto</td>
		<td><input type="file" class="form-control" name="foto" required ></td>
	</tr>
	</table>
	
	<hr>
	<input type="submit" class="btn btn-primary" value="Simpan">
	<a href="index.php"><input type="button" class="btn btn-danger" value="Batal"></a>
	</form>
</body>
</html>
