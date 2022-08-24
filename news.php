<?php
include 'header.php'; 
?>
<!DOCTYPE html>
<html>
<head>
<title>News</title>
</head>
<body>

<br>
<div class="header">
  <div class="container">
      <h2>
        <p> <i class="glyphicon glyphicon-facetime-video"></i> News</p>
      </h2>
  </div>
</div>

<div class="container"><br>
	<table bgcolor='white' align="center" cellpadding='2' cellspacing='2'>
	<?php
	// Load file koneksi.php
	include "koneksi.php";

	$query = "SELECT * FROM video"; // Query untuk menampilkan semua data siswa
	$sql = mysql_query($query); // Eksekusi/Jalankan query dari variabel $query
	while($data = mysql_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
			echo "<tr><td><h2>".$data['judul']."</h2></td></tr>";
			echo "<tr><td width='30%' height='220'><video controls  width='1000' border='2'><source src='video/".$data['video_']."' type='video/mp4'></video><br><br><br><br></td></tr>";
		echo "</tr>";
	}
	?>
	</table><br><br>
</div>

</body>
</html>
<?php
include 'footer.php';
?>