<?php
include 'header.php';
?>

<!DOCTYPE html>
<html>

<br>
<div class="header">
  <div class="container">
      <h2>
        <p> <i class="glyphicon glyphicon-comment"></i> Testimoni</p>
      </h2>
  </div>
</div>

<head>
	<title>Testimoni</title>
	<style>
		hr{
			display: block;
			height: 0px;
			border-top: 4px solid grey;
			margin: 1em 0;
			padding:0;
		}
	</style>
</head>

<br>
<body>
<div class="container">
  <h3><p align="center" >Berikan masukan untuk kami, Agar kami bisa melayani anda lebih baik lagi...</p></h3>
  <hr>
</div>


<head>
<title>Testimoni</title>
      <style>


    #testimoni {
          margin:20px 0 0 20px;
          border: 2px solid #848484;
          border-radius:20px;
          -moz-border-radius:20px;
          max-height: 90%;
          font-weight: bold;
          color: #606060;
          padding: 10px;
          width: 440px;
          background-color: #dcdcdc;
        }
        #publishtestimoni {
          border: 2px solid #848484;
          box-shadow: 12px 12px 7px #888888;
          margin: 30px 0 50px 20px;
          padding: 10px;
          max-height: 100%;
          color: #3d3d3d;
          width: 550px;
          font-size: 12px;
          line-height: 15px;
        }
        #publishtestimoni hr {
          color: #ccc;
        }
        #publishtestimoni a {
          color: #da5700;
          text-decoration: none;
          font-weight:normal;
        }
        #publishtestimoni a:link {
          font-weight: bold;
        }
        #publishtestimoni a:hover {
          text-decoration: underline;
        }
    </style>

<body>

<!-- mulai komennnn -->

<center>
<div id="testimoni">
  <form name="submittestimoni" method="post" action="submittestimoni.php">
    <label>Nama :</label><br><input name="nama" type="text"><br>
    <label>Email :</label><br><input name="email" type="text" required><br>
    <label>Komentar :</label><br><textarea name="komentar" rows="6" cols="50"></textarea><br>
	<input name="art_id" value="1" type="hidden">
    <input name="art_url" value="testimoni.php" type="hidden"><br>
    <button class="btn btn-default" name="tombol" value="Kirim">Kirim</button>
  </form>



</div>

<div id="publishtestimoni">
  <?php include("publishtestimoni.php"); getcomment("1"); ?>
</div>

</center>

</body>
</html>


<?php
include 'footer.php';
?>
