<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<h1>Tambah Jaket</h1>
	<form method="post" action="proses_simpan_jaket.php" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>Kode</td>
		<td><input type="text" name="kode"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Stok</td>
		<td><input type="text" name="stok"></td>
	</tr>
	<tr>
		<td>Harga</td>
		<td><input type="text" name="harga"></td>
	</tr>
	<tr>
		<td>Foto</td>
		<td><input type="file" name="foto"></td>
	</tr>
	</table>
	
	<hr>
	<input type="submit" value="Simpan">
	<a href="index.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>
