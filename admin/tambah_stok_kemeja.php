<html>
<head>
	<title>Tambah Stok</title>
</head>
<body>
	<h2>Tambah Stok</h2>
	<br>
	<?php

	include "koneksi.php";
	

	$kode = $_GET['kode'];
	

	$query = "SELECT * FROM kemeja WHERE kode='".$kode."'";
	$sql = mysql_query($query); 
	$data = mysql_fetch_array($sql);
	?>
	
	<form method="post" action="proses_tambah_stok_kemeja.php?kode=<?php echo $kode; ?>" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>Nama</td>
		<td><input type="text" class="form-control" name="nama" value="<?php echo $data['nama']; ?>" readonly></td>
	</tr>
	<tr>
		<td>Stok Sekarang</td>
		<td><input type="text" class="form-control" name="stok" value="<?php echo $data['stok']; ?>" readonly></td>
	</tr>
	<tr>
		<td>Tambah Stok</td>
		<td><input type="text" class="form-control" name="tambah_stok"></td>
	</tr>
	</table>
	
	<hr>
	<input type="submit" class="btn btn-primary" value="Tambah">
	<a href="index.php"><input type="button" class="btn btn-danger" value="Batal"></a>
	</form>
</body>
</html>
