<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yeni Kayıt Ekle</title>
</head>
<body>
<form action="<?php echo base_url("personel/insert");?>" method="post">
    <table>
        <thead>
            <th colspan="3">Yeni Kayıt Ekle</th>
        </thead>
        <tbody>
            <tr style="text-align: center;">
                <td><label for="title">Adı Soyadı</label></td>
                <td><label for="detail">Detay Bilgisi</label></td>
                <td></td>
            </tr>
            <tr>
                <td><input type="text" id="title" name="title"></td>
                <td><input type="text" id="detail" name="detail"></td>
                <td><button type="submit">Kaydet</button></td>
            </tr>
        </tbody>
</form>
</body>
</html>