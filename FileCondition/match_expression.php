<?php
$hari = 3;

$hasil = match ($hari) {
    1 => "Senin",
    2 => "Selasa",
    3 => "Rabu",
    4 => "Kamis",
    5 => "Jum'at",
    6 => "Sabtu",
    7 => "Minggu"
};

echo $hasil;