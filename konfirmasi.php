<?php
include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Konfirmasi</title>
</head>

<br>
<div class="header">
  <div class="container">
      <h2>
        <p> <i class="glyphicon glyphicon-usd"></i> Konfirmasi Pembayaran</p>
      </h2>
  </div>
</div>

<div class="container"><br><br>
<?php
include 'koneksi.php';
?>
	<table bgcolor='white' align="center" border="0" width="800">
		<form method="post" action="proses_konfirmasi.php" enctype="multipart/form-data" onsubmit="return validasi_input(this)">
			<tr>
				<td>KODE PEMBELIAN<br></td>
				<td><br><input type="text" class="form-control" name="kode_beli" required><br></td>
			</tr>
			<tr>
				<td>N0. TELEPON<br></td>
				<td><br><input type="text" class="form-control" name="nohp" required><br></td>
			</tr>
			<tr>
				<td>FOTO BUKTI TRANSFER</td>
				<td><br><input type="file" class="form-control" name="foto" required><br></td>
			</tr>
			<tr>
				<td></td>
				<td><br><button class="btn btn-primary" value="submit">Konfirmasi</button></td>
			</tr>
		</form>

		<script type="text/javascript">
			function validasi_input(form){
			  if (form.nohp.value != ""){
			  var x = (form.nohp.value);
			  var status = true;
			  var list = new Array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
			  for (i=0; i<=x.length-1; i++)
			  {
			  if (x[i] in list) cek = true;
			  else cek = false;
			 status = status && cek;
			  }
			  if (status == false)
			  {
			  alert("No Hp harus angka!");
			  form.nohp.focus();
			  return false;
			  }
			  }
			  return (true);
			  }
		</script>
	</table><br><br>
</div>

</html>

<?php
include 'footer.php';
?>