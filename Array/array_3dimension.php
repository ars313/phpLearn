<?php
$kordinat = [
    [
        ["A"], ["B"]
    ],
    [
        ["C"], ["D","F"]
    ],
];
echo "<pre>";
print_r($kordinat);
echo "</pre>";
echo "<b>";
echo $kordinat[1][1][1];
echo "</b>";