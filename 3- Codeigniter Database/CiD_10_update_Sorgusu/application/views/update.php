<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT</title>
</head>
<body>
    <form action="<?php echo base_url("dbislem/update")?>" method="post">
    <label for="">Kayıt Numarası: </label>
        <select name="id">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select><br><br>
        <input type="text" name="title" placeholder="lütfen isim giriniz..."><br><br>
        <textarea name="detail" cols="30" rows="10" placeholder="Lütfen açıklama giriniz."></textarea><br><br>
        <button type="submit">Gönder</button>
    </form>
</body>
</html>