<?php
  $host ="localhost";
  $user = "root";
  $password ="";
  $database ="togetherness";

  $koneksi = mysql_connect ($host,$user,$password);
  mysql_select_db ($database,$koneksi);
 ?>
