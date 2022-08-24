<!DOCTYPE html>
<html>
  <head>

    <title>Testimoni</title>
    <style>
    hr {
      display: block;
      height: 0px;
      border-top: 4px solid grey;
      margin: 1em 0;
      padding: 0;
    }
    </style>

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

  </head>
  <body>

<?php
  include 'koneksi.php';
 ?>

<html>
  <head>
    <title>Testimoni tampilan Admin</title>
  </head>

<body>
  <h2>Testimoni dari Para Joiners</h2>
  <hr>


  <table width="80%" border="1" align="center">
    <tr align="center">
      <td bgcolor="#CC00CC" width="5%"><b>No</b></td>
      <td bgcolor="#CC00CC" width="20%"><b>Nama</b></td>
      <td bgcolor="#CC00CC" width="10%"><b>E-mail</b></td>
      <td bgcolor="#CC00CC" width="30%"><b>Komentar</b></td>
	    <td bgcolor="#CC00CC" width="30%"><b>Tanggal</b></td>
      <td bgcolor="#CC00CC" width="30%" colspan="2"><b>Action</b></td>
    </tr>

    <?php
      $i=0;
      $query = mysql_query ("SELECT * FROM testimoni");
      while ($data=mysql_fetch_array($query)){
        $i++;
      ?>

        <tr align="center">
          <td bgcolor="#FF66FF"><?php echo $i; ?></td>
          <td bgcolor="#FFCCFF"><?php echo $data['nama']; ?></td>
          <td bgcolor="#FFCCFF"><?php echo $data['email']; ?></td>
          <td bgcolor="#FFCCFF"><?php echo $data['komentar']; ?></td>
		  <td bgcolor="#FFCCFF"><?php echo $data['date']; ?></td>
          <td bgcolor="#FFCCFF"><a class='btn btn-danger' href="deletetestimoni.php?id=<?php echo $data['id'];?>">Delete</a></td>
        </tr>
  <?php
      }?>

  </table>

  <br>
</body>
</html>


  </body>
</html>
