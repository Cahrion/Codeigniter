<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Güncelle</title>
</head>
<body>
<form action="<?php echo base_url("personel/update");?>" method="post">
    <input type="hidden" name="id" value="<?php echo $rows->id?>">
    <table>
        <thead>
            <th colspan="3">Kaydı Güncelle</th>
        </thead>
        <tbody>
            <tr style="text-align: center;">
                <td><label for="title">Adı Soyadı</label></td>
                <td><label for="detail">Detay Bilgisi</label></td>
                <td></td>
            </tr>
            <tr>
                <td><input type="text" id="title" name="title" value="<?php echo $rows->title?>"></td>
                <td><input type="text" id="detail" name="detail" value="<?php echo $rows->detail?>"></td>
                <td><button type="submit">Güncelle</button></td>
            </tr>
        </tbody>
</form>
</body>
</html>