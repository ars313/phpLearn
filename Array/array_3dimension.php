<?php
$kordinat = [
    [
        ["A"], ["B", "E"], ["G","H"]
    ],
    [
        ["C"], ["D","F"]
    ],
];
echo "<pre>";
print_r($kordinat);
echo "</pre>";
echo "<b>";
echo $kordinat[0][2][1];
echo "</b>";