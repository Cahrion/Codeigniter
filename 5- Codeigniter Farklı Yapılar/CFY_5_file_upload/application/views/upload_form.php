<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
<h3>Personel Resim Yükleme</h3>
    <form action="<?php echo base_url("fileupload/upload")?>" method="post" enctype="multipart/form-data">
        <input type="file" id="dosya" name="file">
        <button type="submit"> Upload !! </button>
    </form>
</body>
</html>