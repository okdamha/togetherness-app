<h2>Data Pelanggan</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>NAMA PEMBELI</th>
			<th>NO. TELEPON</th>
			<th>PROVINSI</th>
			<th>KABUPATEN</th>
			<th>KECAMATAN</th>
			<th>KODE POS</th>
			<th>ALAMAT LENGKAP</th>
			<th colspan="2">AKSI</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		
		include "koneksi.php";
		
		$query = mysql_query ("SELECT * FROM transaksi JOIN prov ON transaksi.propinsi = prov.id_prov JOIN kabkot ON transaksi.kota = kabkot.id_kabkot JOIN kec ON transaksi.kec = kec.id_kec")  or die (mysql_error()); // Query untuk menampilkan semua data siswa
		?>
		<?php 
		while($data = mysql_fetch_array($query)){ // Amb
			$nmprov = $data['nama_prov'];
			$nmkab  = $data['nama_kabkot'];
			$nmkec  = $data['nama_kec'];
			echo "<tr>";
			echo "<td>".$data['nama_pembeli']."</td>";
			echo "<td>".$data['nohp']."</td>";
			echo "<td>".$nmprov."</td>";
			echo "<td>".$nmkab."</td>";
			echo "<td>".$nmkec."</td>";
			echo "<td>".$data['kode_pos']."</td>";
			echo "<td>".$data['alamat']."</td>";
			echo "<td><a href='proses_hapus_kemeja.php?kode=".$data['kode']."' class='btn btn-danger'>Hapus</a></td>";
			echo "</tr>";
		}
		?>
	</tbody>
</table>