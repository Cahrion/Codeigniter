<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
            <th>Ad Soyad</th>
            <th>Email Adresi</th>
        </thead>
        <tbody>
            <?php 
                foreach($personel_listesi as $personel){
            ?>
                <tr>
                    <td><?php echo $personel["isim"];?></td>
                    <td><?php echo $personel["email"];?></td>
                </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>