<?php
$a = "Andi";

$salam = function () use ($a){
    echo "Selamat datang $a <br>";
    $a = "Rissa";
    echo "Selamat datang $a <br>";
};

$salam();
echo "Selamat siang $a";
