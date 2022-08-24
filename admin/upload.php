<!DOCTYPE html>
<html>
<head>
<title>Upload Video dengan PHP</title>
</head>
<body>
<div style="width:800px;margin:20px auto;">
<fieldset>
<legend>Upload Video</legend>
<form name="fvideo" enctype="multipart/form-data" method="post" action="kirim_video.php" style="padding:10px;">
<table>
<tr>
<td>Judul : </td>
<td><input type="text" class="form-control" name="judul" required><br></td>
</tr>
<tr>
<td><input name="MAX_FILE_SIZE" value="5000000000" type="hidden"/></td>
<td><input type="file" class="form-control" name="file_video" /><br></td>
</tr>
<tr>
<td></td>
<td><input type="submit" class="btn btn-primary" name="upload" value="Kirim" /></td>
</tr>
</form>
</fieldset>
<?php

?>
</div>
</body>
</html>
