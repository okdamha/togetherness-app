<?php
    include 'koneksi.php';
    $id = $_GET['id'];

    mysql_query ("DELETE FROM testimoni WHERE id='$id'");

    header("location:index.php?");
 ?>
