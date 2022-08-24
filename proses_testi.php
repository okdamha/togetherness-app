<?php
  include 'koneksi.php';

  if (isset($_POST['tombol'])) {
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $komentar=$_POST['komentar'];
    $date =$_POST['date'];


    if(empty($nama))
    $_POST["nama"]='anonymous';

    if(empty($komentar)){
      die("komentar harus diisi");
    }

  $query=mysql_query("INSERT INTO  `togetherness`.`testimoni` (`nama` ,`email`  ,`komentar`, `date`)VALUES ('$nama',  '$email', '$komentar' ,'$date')");
  if($query){
    header("location:index.php");
  }

  }
?>
