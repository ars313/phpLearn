<?php

function penambahan(){
    $array_argumen = func_get_args();
    $hasil = 0;

    foreach ($array_argumen as $val) {
        $hasil = $hasil + $val;
    }
    return $hasil;
}

echo penambahan(12, 12, 12, 12);