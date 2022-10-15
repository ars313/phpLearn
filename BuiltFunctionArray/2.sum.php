<?php
$number = [12, 3, 4, 14, 5, 6, 7];
echo array_sum($number);
echo "<br>";

$number2 = [
    "Anton" => 82,
    "Fahri" => 84,
    "Karin" => 98,
];

$nilai_rata = array_sum($number2)/count($number2);

echo "Nilai rata2 siswa $nilai_rata";