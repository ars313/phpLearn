<?php
function tambah_kurang($add1, $add2) {
    $hasil[] = $add1 + $add2;
    $hasil[] = $add1 - $add2;
    return $hasil;
}

$b = tambah_kurang(20,5);
echo "<pre>";
print_r($b);
echo "</pre>";