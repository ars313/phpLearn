<?php
$siswa = [
    "siswa" => ["Heri", "Medan", "20 Oktober 1995"],
    "siswa2" => ["Madan", "Jakarta", "15 September 1997"],
    "siswa3" => ["Fateh", "Aceh", "16 Juli 1994"],
    "siswa4" => ["Karim", "Jakarta", "14 Maret 1996"]
];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Asociate array</title>
</head>
    <body>
    <table border="1">
        <?php
            foreach ($siswa as $value) {
                echo "<tr><td>{$value[0]}</td><td>{$value[1]}</td><td>{$value[2]}</td></tr>";
            }
        ?>
    </table>
    </body>
</html>

