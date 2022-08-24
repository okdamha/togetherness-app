<?php
include_once 'koneksi.php';
session_start();
if(isset($_SESSION['username'])){
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><font size="4">Togetherness Admin</font></a> 
            </div>
	<div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;">
		<a href="../index.php"><input style="margin-top:-8px; margin-bottom:-8px;" type="button" class="btn btn-danger square-btn-adjust" value="Tampilan Pembeli"></a>
		<a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a>
	</div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li><a href="index.php"><i class="fa fa-dashboard fa-3x"></i> Home</a></li>
					<li><a href="index.php?halaman=data_artikel"><i class="fa fa-dashboard fa-3x"></i> Artikel</a></li>
                    <li><a href="index.php?halaman=produk"><i class="fa fa-dashboard fa-3x"></i> Produk</a></li>
                    <li><a href="index.php?halaman=pembelian"><i class="fa fa-dashboard fa-3x"></i> Pembelian</a></li>
                    <li><a href="index.php?halaman=verifikasi"><i class="fa fa-dashboard fa-3x"></i> Verifikasi</a></li>
                    <li><a href="index.php?halaman=testimoni"><i class="fa fa-dashboard fa-3x"></i> Testimoni</a></li>
					<li><a href="index.php?halaman=slider"><i class="fa fa-dashboard fa-3x"></i> Slider</a></li>
					<li><a href="index.php?halaman=news"><i class="fa fa-dashboard fa-3x"></i> News</a></li>
                    
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php 
                if (isset($_GET['halaman']))
                {
                    if ($_GET['halaman']=="produk")
                    {
                        include 'produk.php';
                    }
                    elseif ($_GET['halaman']=="pembelian")
                    {
                        include 'pembelian.php';
                    }
                    elseif ($_GET['halaman']=="verifikasi")
                    {
                        include 'verifikasi.php';
                    }
                    elseif ($_GET['halaman']=="detail")
                    {
                        include 'detail.php';
                    }
                    elseif ($_GET['halaman']=="tambah_produk")
                    {
                        include 'tambah_produk.php';
                    }
                    elseif ($_GET['halaman']=="hapus_produk")
                    {
                        include 'hapus_produk.php';
                    }
                    elseif ($_GET['halaman']=="ubah_produk")
                    {
                        include 'ubah_produk.php';
                    }
					elseif ($_GET['halaman']=="form_ubah_dress")
                    {
                        include 'form_ubah_dress.php';
                    }
					elseif ($_GET['halaman']=="form_tambah_jaket")
                    {
                        include 'form_tambah_jaket.php';
                    }
					elseif ($_GET['halaman']=="form_tambah_kemeja")
                    {
                        include 'form_tambah_kemeja.php';
                    }
					elseif ($_GET['halaman']=="form_tambah_dress")
                    {
                        include 'form_tambah_dress.php';
                    }
					elseif ($_GET['halaman']=="form_ubah_jaket")
                    {
                        include 'form_ubah_jaket.php';
                    }
					elseif ($_GET['halaman']=="form_ubah_kemeja")
                    {
                        include 'form_ubah_kemeja.php';
                    }
					elseif ($_GET['halaman']=="form_ubah_dress")
                    {
                        include 'form_ubah_dress.php';
                    }
					elseif ($_GET['halaman']=="data_artikel")
                    {
                        include 'data_artikel.php';
                    }
					elseif ($_GET['halaman']=="input_artikel")
                    {
                        include 'input_artikel.php';
                    }
					elseif ($_GET['halaman']=="simpan_artikel")
                    {
                        include 'simpan_artikel.php';
                    }
					elseif ($_GET['halaman']=="delete_artikel")
                    {
                        include 'delete_artikel.php';
					}
					elseif ($_GET['halaman']=="testimoni")
                    {
                        include 'testimoni.php';
					}
					elseif ($_GET['halaman']=="slider")
                    {
                        include 'slider.php';
					}
					elseif ($_GET['halaman']=="form_ubah_slider")
                    {
                        include 'form_ubah_slider.php';
					}
					elseif ($_GET['halaman']=="tambah_stok_kemeja")
                    {
                        include 'tambah_stok_kemeja.php';
					}
					elseif ($_GET['halaman']=="tambah_stok_dress")
                    {
                        include 'tambah_stok_dress.php';
					}
					elseif ($_GET['halaman']=="tambah_stok_jaket")
                    {
                        include 'tambah_stok_jaket.php';
					}
					elseif ($_GET['halaman']=="news")
                    {
                        include 'news.php';
					}
					elseif ($_GET['halaman']=="upload")
                    {
                        include 'upload.php';
					}
					elseif ($_GET['halaman']=="form_ubah_video")
                    {
                        include 'form_ubah_video.php';
					}
				}
                else
                {
                    include 'home.php';
                }
                ?>
            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>

<?php
}
else{
	header('location:login.php');
}
	
?>