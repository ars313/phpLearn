<?php
$pabrikan = [
    "toyota" => "Innova",
    "honda" => "City Hatcback",
    "BMW" => "I8",
    "Lamborgini" => "Aventador"
];

function hehehehe($a, $b) {
    //nilai element akan terbalik <value> ada di element $b dan key ada di element $a
    echo "ini adalah mobil pabrikan $b type $a<br>";
}

array_walk($pabrikan, "hehehehe");