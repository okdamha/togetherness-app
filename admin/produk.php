<h2>Data Produk</h2><br>

<table class="table table-bordered" width="100%">
	<tr>
		<th>Gambar</th>
		<th>Kode</th>
		<th>Nama</th>
		<th>Stok</th>
		<th>Harga</th>
		<th colspan="3">Aksi</th>
	</tr>
	<?php

	include "koneksi.php";
	
	$query = "SELECT * FROM kemeja";
	$sql = mysql_query($query);
	
	while($data = mysql_fetch_array($sql)){
		echo "<tr>";
		echo "<td><img src='../images/".$data['foto']."' width='100' height='100'></td>";
		echo "<td>".$data['kode']."</td>";
		echo "<td>".$data['nama']."</td>";
		echo "<td>".$data['stok']."</td>";
		echo "<td>".$data['harga']."</td>";
		echo "<td><a href='index.php?halaman=tambah_stok_kemeja&kode=".$data['kode']."' class='btn btn-primary'>Tambah Stok</a></td>";
		echo "<td><a href='index.php?halaman=form_ubah_kemeja&kode=".$data['kode']."' class='btn btn-primary'>Ubah</a></td>";
		echo "<td><a href='proses_hapus_kemeja.php?kode=".$data['kode']."' class='btn btn-danger'>Hapus</a></td>";
		echo "</tr>";
	}
	?>
</table>
<a href="index.php?halaman=form_tambah_kemeja" class="btn btn-primary">Tambah Data</a>
<hr><br><br>

<table class="table table-bordered" width="100%">
	<tr>
		<th>Gambar</th>
		<th>Kode</th>
		<th>Nama</th>
		<th>Stok</th>
		<th>Harga</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php

	include "koneksi.php";
	
	$query = "SELECT * FROM dress"; 
	$sql = mysql_query($query); 
	
	while($data = mysql_fetch_array($sql)){ 
		echo "<tr>";
		echo "<td><img src='../images/".$data['foto']."' width='100' height='100'></td>";
		echo "<td>".$data['kode']."</td>";
		echo "<td>".$data['nama']."</td>";
		echo "<td>".$data['stok']."</td>";
		echo "<td>".$data['harga']."</td>";
		echo "<td><a href='index.php?halaman=tambah_stok_dress&kode=".$data['kode']."' class='btn btn-primary'>Tambah Stok</a></td>";
		echo "<td><a href='index.php?halaman=form_ubah_dress&kode=".$data['kode']."' class='btn btn-primary'>Ubah</a></td>";
		echo "<td><a href='proses_hapus_dress.php?kode=".$data['kode']."' class='btn btn-danger'>Hapus</a></td>";
		echo "</tr>";
	}
	?>
</table>
<a href="index.php?halaman=form_tambah_dress" class="btn btn-primary">Tambah Data</a>
<hr><br><br>

<table class="table table-bordered" width="100%">
	<tr>
		<th>Gambar</th>
		<th>Kode</th>
		<th>Nama</th>
		<th>Stok</th>
		<th>Harga</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php

	include "koneksi.php";
	
	$query = "SELECT * FROM jaket";
	$sql = mysql_query($query); 
	
	while($data = mysql_fetch_array($sql)){
		echo "<tr>";
		echo "<td><img src='../images/".$data['foto']."' width='100' height='100'></td>";
		echo "<td>".$data['kode']."</td>";
		echo "<td>".$data['nama']."</td>";
		echo "<td>".$data['stok']."</td>";
		echo "<td>".$data['harga']."</td>";
		echo "<td><a href='index.php?halaman=tambah_stok_jaket&kode=".$data['kode']."' class='btn btn-primary'>Tambah Stok</a></td>";
		echo "<td><a href='index.php?halaman=form_ubah_jaket&kode=".$data['kode']."' class='btn btn-primary'>Ubah</a></td>";
		echo "<td><a href='proses_hapus_jaket.php?kode=".$data['kode']."' class='btn btn-danger'>Hapus</a></td>";
		echo "</tr>";
	}
	?>
</table>
<a href="index.php?halaman=form_tambah_jaket" class="btn btn-primary">Tambah Data</a>
<hr><br><br>