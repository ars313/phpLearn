<?php
function penambahan(... $array_argument) {
    $hasil = 0;
    foreach ($array_argument as $val ){
        $hasil = $hasil + $val;
    }
    return $hasil;
}

echo penambahan(2, 3, 4, 5, 6);