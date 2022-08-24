<h2>Data Pembelian</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>BUKTI TRANSFER</th>
			<th>KODE BELI</th>
			<th>NAMA BARANG</th>
			<th>KODE BARANG</th>
			<th>HARGA BARANG</th>
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
		
		$query = mysql_query("SELECT * FROM transaksi JOIN prov ON transaksi.propinsi = prov.id_prov JOIN kabkot ON transaksi.kota = kabkot.id_kabkot JOIN kec ON transaksi.kec = kec.id_kec") or die (mysql_error()); // Query untuk menampilkan semua data siswa
		?>
		
		<?php 

		while($data = mysql_fetch_array($query)){ // Amb
			$nmprov = $data['nama_prov'];
			$nmkab  = $data['nama_kabkot'];
			$nmkec  = $data['nama_kec'];
			echo "<tr>";
			echo "<td><img src='../bukti/".$data['foto']."' width='100' height='100'></td>";
			echo "<td>".$data['kode_beli']."</td>";
			echo "<td>".$data['nama']."</td>";
			echo "<td>".$data['kode']."</td>";
			echo "<td>".$data['harga']."</td>";
			echo "<td>".$data['nama_pembeli']."</td>";
			echo "<td>".$data['nohp']."</td>";
			echo "<td>".$nmprov."</td>";
			echo "<td>".$nmkab."</td>";
			echo "<td>".$nmkec."</td>";
			echo "<td>".$data['kode_pos']."</td>";
			echo "<td>".$data['alamat']."</td>";
			echo "<td><a href='proses_verifikasi.php?kode_beli=".$data['kode_beli']."' class='btn btn-primary'>Verifikasi</a></td>";
			echo "<td><a href='proses_hapus_pembelian.php?kode_beli=".$data['kode_beli']."' class='btn btn-danger'>Tolak</a></td>";
			echo "</tr>";
		}
		?>
	</tbody>
</table>