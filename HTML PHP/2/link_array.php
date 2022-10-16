<?php
    $link_array = ["home.php", "profil.php", "blog.php"];
    $title_utama = ["satu", "dua", "tiga"];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        ul {
            list-style: none;
            padding: 0;
            margin: 0;
            width: 200px;
        }

        li a {
            display: block;
            background-color: #198C13;
            font-size: 20px;
            height: 30px;
            line-height: 30px;
            padding-left: 10px;
            border-bottom: 2px solid #FFF;
        }

        li a:hover {
            background-color: #0AED0A;
            color: black;
        }
    </style>
</head>
    <body>
    <ul>
        <?php
            for ($i=0; $i<count($link_array); $i++){
        ?>
        <li>
            <a href="<?php echo $link_array[$i] ?>">
                <?php echo strtoupper($title_utama[$i]) ?>
            </a>
        </li>
        <?php
            }
        ?>
    </ul>
    </body>
</html>
