<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upload File</title>
</head>

<body>
    <form enctype="multipart/form-data" method="post" action="latihan1_upload.php">
File yang diupload: <input type="file" name="fupload"><br>
Deskripsi File: <br><textarea name="deskripsi" rows="6" cols="20"></textarea><br>
<input type=submit value=Upload>
<br>
<a href="download.php">Klik Untuk Download</a>;
</form>
</body>
</html>
