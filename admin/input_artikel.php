<h2>INPUT ARTIKEL</h2>

<br>
  <form method="post" action="saveartikel.php" enctype="multipart/form-data">
	<div class="form-group">
	  <label>Judul Artikel</label>
	  <input type="text" class="form-control" id="judul_artikel" name="judul_artikel" required>
	</div>
	<div class="form-group">
	  <label>Isi Artikel</label>
	  <textarea style="width:600px;height:450px;" class="form-control" name="isi_artikel" required></textarea>
	</div>
	<div class="from-group">
	  <label >Foto</label>
	  <input type="file" id="images" class="form-control" name="images" required>
	</div>
	<br>
	<button type="submit" id="submit" class="btn btn-primary" value="kirim">Simpan</button>
	<br>
  </form> 