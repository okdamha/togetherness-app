<?php
include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Togetherness - Home</title>
</head>
</body>
     <div class="container">
      <!--<h2>Carousel Example</h2>-->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
		  <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>

        <!--- wrapper -->
        <!-- Wrapper for slides -->
<?php
	include 'koneksi.php';
	echo    "<div class='carousel-inner'>";
			$query = "SELECT * FROM slider where id='1'";$sql = mysql_query($query);$data = mysql_fetch_array($sql);
		echo    "<div class='item active'>";
			echo    "<img src='img/".$data['gambar']."' alt='' style='width:100%;height:70%'>";
		echo    "</div>";
			$query = "SELECT * FROM slider where id='2'";$sql = mysql_query($query);$data = mysql_fetch_array($sql);
		echo    "<div class='item'>";
			echo    "<img src='img/".$data['gambar']."' alt='' style='width:100%;height:70%'>";
		echo    "</div>";
			$query = "SELECT * FROM slider where id='3'";$sql = mysql_query($query);$data = mysql_fetch_array($sql);
		echo    "<div class='item'>";
			echo    "<img src='img/".$data['gambar']."' alt='' style='width:100%;height:70%'>";
		echo    "</div>";
			$query = "SELECT * FROM slider where id='4'";$sql = mysql_query($query);$data = mysql_fetch_array($sql);
		echo    "<div class='item active'>";
			echo    "<img src='img/".$data['gambar']."' alt='' style='width:100%;height:70%'>";
		echo    "</div>";
		$query = "SELECT * FROM slider where id='5'";$sql = mysql_query($query);$data = mysql_fetch_array($sql);
		echo    "<div class='item active'>";
			echo    "<img src='img/".$data['gambar']."' alt='' style='width:100%;height:70%'>";
		echo    "</div>";
	echo    "</div>";
?>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>



<div class="container">
  <blockquote>
  Togetherness adalah toko baju online terlengkap dan terpercaya.
  dengan harga terjangkau, anda sudah dapat memiliki produk kami.
  <br>Selamat Berbelanja Customer..
  <br>
  </blockquote>

</div>
	
</body>
</html>

<?php
include 'footer.php';
?>