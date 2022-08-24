<?php
include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Dress</title>
<script src="bootstrap-3.3.7-dist/js/jquery-3.2.0.min.js"></script>
	<script type="text/javascript">
	var htmlobjek;
	$(document).ready(function(){
	  //apabila terjadi event onchange terhadap object <select id=propinsi>
	  $("#propinsi").change(function(){
	    var propinsi = $("#propinsi").val();
	    $.ajax({
	        url: "ambilkota.php",
	        data: "propinsi="+propinsi,
	        cache: false,
	        success: function(msg){
	            //jika data sukses diambil dari server kita tampilkan
	            //di <select id=kota>
	            $("#kota").html(msg);
	        }
	    });
	  });
	  $("#kota").change(function(){
	    var kota = $("#kota").val();
	    $.ajax({
	        url: "ambilkecamatan.php",
	        data: "kota="+kota,
	        cache: false,
	        success: function(msg){
	            $("#kec").html(msg);
	        }
	    });
	  });
	});
	</script>
</head>

<br>
<div class="header">
  <div class="container">
      <h2>
        <p> <i class="glyphicon glyphicon-usd"></i> Transaksi</p>
      </h2>
  </div>
</div>

<div class="container"><br><br>
<?php
include 'koneksi.php';
$kode = $_GET['kode'];
$query = "SELECT * FROM dress WHERE kode='".$kode."'";
$sql = mysql_query($query);
$data = mysql_fetch_array($sql);
?>
	<table bgcolor='white' align="center" border="0" width="800">

		<form method="post" action="proses_simpan_transaksi.php" onsubmit="return validasi_input(this)" enctype="multipart/form-data" >
			<tr>
				<td>NAMA BARANG<br></td>
				<td><br><input type="text" style="border:none" class="form-control" name="nama" value="<?php echo $data['nama']; ?>" readonly ><br></td>
			</tr>
			<tr>
				<td>KODE BARANG<br></td>
				<td><br><input type="text" style="border:none" class="form-control" name="kode" value="<?php echo $data['kode']; ?>" readonly ><br></td>
			</tr>
			<tr>
				<td>HARGA BARANG<br><br></td>
				<td><br><input type="text" style="border:none" class="form-control" name="harga" value="<?php echo $data['harga']; ?>" readonly ><br><br></td>
			</tr>
			<tr>
				<td>NAMA PEMBELI<br></td>
				<td><br><input type="text" class="form-control" name="nama_pembeli" placeholder="Nama Pembeli" required ><br></td>
			</tr>
			<tr>
				<td>NO. TELEPON<br></td>
				<td><br><input type="text" class="form-control" name="nohp" placeholder="No. Telepon" required ><br></td>
			</tr>
			<tr>
				<td>PROVINSI<br></td>
				<td><br><select class="form-control" name="propinsi" id="propinsi">
					<option>--Pilih Provinsi--</option>
					<?php
					//mengambil nama-nama propinsi yang ada di database
					$propinsi = mysql_query("SELECT * FROM prov ORDER BY nama_prov");
					while($p=mysql_fetch_array($propinsi)){
					echo "<option value=\"$p[id_prov]\">$p[nama_prov]</option>\n";
					}
					?>
				</select><br></td>
			</tr>
			<tr>
				<td>KOTA/KABUPATEN<br></td>
				<td><br><select class="form-control" name="kota" id="kota">
					<option>--Pilih Kabupaten/Kota--</option>
					<?php
					//mengambil nama-nama propinsi yang ada di database
					$kota = mysql_query("SELECT * FROM kabkot ORDER BY nama_kabkot");
					while($p=mysql_fetch_array($propinsi)){
					echo "<option value=\"$p[id_kabkot]\">$p[nama_kabkot]</option>\n";
					}
					?>
				</select><br></td>
			</tr>
			<tr>
				<td>KECAMATAN<br></td>
				<td><br><select class="form-control" name="kec" id="kec">
					<option>--Pilih Kecamatan--</option>
					
				</select><br></td>
			</tr>
			<tr>
				<td>KODE POS<br></td>
				<td><br><input type="text" class="form-control" name="kode_pos" placeholder="Kode Pos" required ><br></td>
			</tr>
			<tr>
				<td>ALAMAT LENGKAP<br></td>
				<td><br><input type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap" required ><br></td>
			</tr>
			<tr>
				<td></td>
				<td><br><button class="btn btn-primary" value="submit">Continue</button></td>
			</tr>
		</form>

		<script type="text/javascript">
			function validasi_input(form) {
				var mincar= 5;
				if (form.kode_pos.value.length < mincar) {
					alert("panjang kode post minimal 5 karakter !");
					form.kode_pos.focus();
					return(false);
				}
				return(true);
			} 
		</script>
		
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