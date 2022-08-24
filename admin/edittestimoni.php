<?php
  include 'koneksi.php';

  if(isset($_GET['id'])){
  $update=$_GET['id'];
  $hasil = mysql_query("select * from comment where id ='$update'");
  $hasil = mysql_fetch_array($hasil);
 ?>

<html>
  <head>
    <title>EDIT TESTIMONI</title>
  </head>
  <body align="center">
      <h1>Fungsi Edit Testimoni in Hereeeee</h1><br>
      <hr>

    <form  action="proses_edittestimoni.php" method="post">
      <table align="center" bgcolor="CC66CC">
        <tr>
          <input type="text" name="id" value="<?php echo $hasil['id']?>">
          <td>Nama</td>
          <td><input type="text" name="nama" value="<?php echo $hasil['nama']?>"></td>
        </tr>
        <tr>
          <td>E-mail</td>
          <td><input type="text" name="email" value="<?php echo $hasil['email']?>"></td>
        </tr>
        <tr>
          <td>Komentar</td>
          <td><input type="text" name="komentar" value="<?php echo $hasil['komentar']?>"></td>
        </tr>
        <tr>
          <td><td>
          </td><input type="submit" name="simpan" value="simpan"></td>
        </tr>
      </table>
    </form>
<?php
  } ?>

  <h2><a href="index.php">Back to Menu</a></h2>

  </body>
</html>
