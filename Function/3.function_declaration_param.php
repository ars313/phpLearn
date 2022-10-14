<?php
function pangkat($nilai_dasar, $nilai_pangkat):float {
    $hasil = 1;
    for ($i = 1; $i <= $nilai_pangkat; $i++) {
        $hasil = $hasil * $nilai_dasar;
    }
    return $hasil;
}


echo pangkat(1.2, 4);