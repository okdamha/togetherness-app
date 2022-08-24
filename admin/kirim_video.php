<?php
if (isset($_REQUEST['upload']))
{
	include"koneksi.php";
	$judul=$_POST['judul'];
    $name=$_FILES['file_video']['name'];
    $type=$_FILES['file_video']['type'];
    $size=$_FILES['file_video']['size'];
    //replace tanda spasi pada nama file dengan _
    $nama_file=str_replace(" ","_",$name);
    $tmp_name=$_FILES['file_video']['tmp_name'];
    $nama_folder="../video/";
    $nama_file_baru=$nama_folder.basename($nama_file);
    //Filter jenis file video dan ukuran file
    if ((($type == "video/mp4") || ($type == "video/3gpp")  || ($type == "video/x-flv")) && ($size < $_POST['MAX_FILE_SIZE']))
    {
        //cek jika nama dile sudah ada
        if (file_exists($nama_file_baru))
        {
            $msg="Nama file $nama_file sudah ada!\n";
        } 
        else
        {   
			$query = "INSERT into video (judul,video_) values ('".$judul."','".$nama_file."') ";
			$sql = mysql_query($query);
            //pindah file dari temporari ke alamat tujuan
            if(move_uploaded_file($tmp_name,$nama_file_baru))
            {
                $msg="File video $nama_file berhasil diupload";
				header("location:index.php?halaman=news");
            }
        }
    } 
    else
    {
        $msg="Jenis file tidak sesuai atau ukuran file terlalu besar!";
    }
    echo "<p align=\"center\">$msg</p>";
}
?>