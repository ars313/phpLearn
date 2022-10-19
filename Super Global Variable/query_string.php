<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <h1>Query String</h1>
    <body>
        <?php
            $nama = "Farhan";
            $alamat = "Surabaya";
            $umur = "22";
            $query_string = "?nama={$nama}&alamat={$alamat}&umur={$umur}";
        ?>
        <a href="2.proses_get.php<?php echo $query_string;?>">Link menuju halaman proses</a>
    </body>
</html>