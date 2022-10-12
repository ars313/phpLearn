<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar PHP</title>
</head>
    <body>
    Pilih Tanggal:
    <select name="tgl">
        <?php
            for ($i = 1; $i <= 31; $i++){
                echo "<option value = $i> $i </option>";
            }
        ?>
    </select>
    Pilihan Bulan:
    <select name="bln" >
        <?php
            for ($b=1; $b <= 12; $b++) {
                echo "<option value = Bulan-$b>Bulan-ke $b </option>";
            }
        ?>
    </select>
    </body>
</html>
