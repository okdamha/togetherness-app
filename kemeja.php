<?php
include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Kemeja</title>
</head>

<br>
<div class="header">
  <div class="container">
      <h2>
        <p> <i class="glyphicon glyphicon-tag"></i> Kemeja</p>
      </h2>
  </div>
</div>

<div class="container"><br><br>
	<table bgcolor='white' align="center" border="0" width="800" cellpadding='5' cellspacing='15'>
	<?php

	include "koneksi.php";

	$query = "SELECT * FROM kemeja";
	$sql = mysql_query($query);
	while($data = mysql_fetch_array($sql)){
		echo "<tr>";
			echo "<td width='30%' height='220'><img src='images/".$data['foto']."' width='200' height='200'  border='2'></td>";
			echo"<td width='70%' cellpadding='10'><hr>
			<font size='6'>".$data['nama']."</font><br><br>
			<font>Kode: </font>".$data['kode']."<br><br>
			<font>Stok tersedia: </font>".$data['stok']."<br>
			<font>Harga: Rp </font>".$data['harga']."<br><br><br>
			<a href='transaksi_kemeja.php?kode=".$data['kode']."'><img src='icon/buy.png' align='right' height='40'></a></td>";
		echo "</tr>";
	}
	?>
	</table><br><br>
</div>


<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" href="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script> -->
</html>

<?php
include 'footer.php';
?>