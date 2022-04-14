<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT</title>
</head>
<body>
    <form action="<?php echo base_url("dbislem/insert")?>" method="post">
        <input type="text" name="title" placeholder="lütfen isim giriniz..."><br>
        <textarea name="detail" cols="30" rows="10" placeholder="Lütfen açıklama giriniz."></textarea><br>
        <button type="submit">Gönder</button>
    </form>
</body>
</html>