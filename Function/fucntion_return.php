<?php
function tambah($add1, $add2) {
    $hasil = $add1 + $add2;
    return $hasil;
}

$a = tambah(6, 10);
echo ($a);
echo "<br>";
echo tambah($a, 16);