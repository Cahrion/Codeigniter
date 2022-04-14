<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personel Listesi</title>
    <style>
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h3>Personel Listesi</h3>
    <table border="3">
        <thead>
            <th>id</th>
            <th>Ad Soyad</th>
            <th>Açıklama</th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            <?php
                foreach($rows as $row){
            ?>
            <tr>
                <td><?php echo $row->id?></td>
                <td><?php echo $row->title?></td>
                <td><?php echo $row->detail?></td>
                <td><a style="color: blue" href="<?php echo base_url("personel/update/" . $row->id)?>">Güncelle</a></td>
                <td><a style="color: red" href="<?php echo base_url("personel/delete/" . $row->id);?>">Sil</a></td>
            </tr>
            <?php
            }
             ?>
        </tbody>
    </table><br>
    <a style="color: green;" href="<?php echo base_url("personel/insert");?>">Yeni Kayıt Ekle</a>
    
</body>
</html>