<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$id = $_GET['id'];

if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
	// Ambil data foto yang dipilih dari form
	$gambar = $_FILES['gambar']['name'];
	$tmp = $_FILES['gambar']['tmp_name'];
	
	// Rename nama fotonya dengan menambahkan tanggal dan jam upload
	$gambarbaru = date('dmYHis').$gambar;
	
	// Set path folder tempat menyimpan fotonya
	$path = "../img/".$gambarbaru;

	// Proses upload
	if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
		// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
		$query = "SELECT * FROM slider WHERE id='".$id."'";
		$sql = mysql_query($query); // Eksekusi/Jalankan query dari variabel $query
		$data = mysql_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

		// Cek apakah file foto sebelumnya ada di folder images
		if(is_file("../img/".$data['gambar'])) // Jika foto ada
			unlink("../img/".$data['gambar']); // Hapus file foto sebelumnya yang ada di folder images
		
		// Proses ubah data ke Database
		$query = "UPDATE slider SET gambar='".$gambarbaru."' WHERE id='".$id."'";
		$sql = mysql_query($query); // Eksekusi/ Jalankan query dari variabel $query

		if($sql){ // Cek jika proses simpan ke database sukses atau tidak
			// Jika Sukses, Lakukan :
			header("location: index.php?halaman=slider"); // Redirect ke halaman produk.php
		}else{
			// Jika Gagal, Lakukan :
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo "<br><a href='form_ubah_slider.php'>Kembali Ke Form</a>";
		}
	}else{
		// Jika gambar gagal diupload, Lakukan :
		echo "Maaf, Gambar gagal untuk diupload.";
		echo "<br><a href='form_ubah_slider.php'>Kembali Ke Form</a>";
	}
}
?>