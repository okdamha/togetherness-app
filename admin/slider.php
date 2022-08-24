<h2>Slider</h2><br>

<table class="table table-bordered" width="100%">
	<tr>
		<th>Id</th>
		<th>Gambar</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	$query = "SELECT * FROM slider"; // Query untuk menampilkan semua data siswa
	$sql = mysql_query($query); // Eksekusi/Jalankan query dari variabel $query
	
	while($data = mysql_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		echo "<td>".$data['id']."</td>";
		echo "<td><img src='../img/".$data['gambar']."' width='450'></td>";
		echo "<td><a href='index.php?halaman=form_ubah_slider&id=".$data['id']."' class='btn btn-primary'>Ubah</a></td>";
		echo "</tr>";
	}
	?>
</table>

<hr><br><br>