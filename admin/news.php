<h2>News</h2><br>

<a href="index.php?halaman=upload" class="btn btn-primary">Tambah Video</a><br><br>

<table class="table table-bordered" width="100%">
	<tr>
		<th>Video</th>
		<th>Judul</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php

	include "koneksi.php";
	
	$query = "SELECT * FROM video";
	$sql = mysql_query($query); 
	
	while($data = mysql_fetch_array($sql)){
		echo "<tr>";
		echo "<td><video width='200'><source src='../video/".$data['video_']."'></video></td>";
		echo "<td>".$data['judul']."</td>";
		echo "<td><a href='index.php?halaman=form_ubah_video&id_video=".$data['id_video']."' class='btn btn-primary'>Ubah</a></td>";
		echo "<td><a href='proses_hapus_video.php?id_video=".$data['id_video']."' class='btn btn-danger'>Hapus</a></td>";
		echo "</tr>";
	}
	?>
</table>
<hr><br><br>