<?php
$kordinat = [
    [
        ["A"], ["B", "E"]
    ],
    [
        ["C"], ["D","F"]
    ],
];
echo "<pre>";
print_r($kordinat);
echo "</pre>";
echo "<b>";
echo $kordinat[0][1][1];
echo "</b>";