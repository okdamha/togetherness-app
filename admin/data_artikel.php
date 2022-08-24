<?php 
include 'koneksi.php';
?>
  <h2>Data Artikel</h2>
  <br>
  <table class="table table-bordered" class="center">
    <thead>
      <tr>
        <th>Judul</th>
        <th>Isi</th>
        <th>Gambar</th>
        <th>Tanggal</th>
		<th>Aksi</th>
      </tr>
    </thead>
    <tbody>
	<?php
	include "koneksi.php";
	
	$query = "SELECT * FROM artikel"; // Query untuk menampilkan semua data siswa
	$sql = mysql_query($query); // Eksekusi/Jalankan query dari variabel $query
	
	while($data = mysql_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		echo "<td>".$data['judul_artikel']."</td>";
		echo "<td>".$data['isi_artikel']."</td>";
		echo "<td>".$data['photo_artikel']."</td>";
		echo "<td>".$data['tgl_artikel']."</td>";
		echo "<td><a href='delete_artikel.php?id_artikel=".$data['id_artikel']."' class='btn btn-danger'>Hapus</a></td>";
		echo "</tr>";
	}
	?>
	
    </tbody>
  </table>
  <a href="index.php?halaman=input_artikel" class="btn btn-primary">Input Artikel</a>
      
    <script src="assets/js/jquery-3.2.0.min"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>