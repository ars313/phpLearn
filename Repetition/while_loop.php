<?php
//$i = 1;
//while ($i <= 10) {
//    echo "$i <br>";
//    $i++;
//}


//$i = 9;
//while ($i > 0) {
//    echo "Anak ayam turun $i <br>";
//    $i = $i - 2;
//}

$salah = true;
$tebak_angka = 11;

while ($salah) {
    if ($tebak_angka != 11) {
        echo "Tebakan anda salah silahkan tebak lagi <br>";
    }
    else {
        $salah = false;
        echo "Tebakan anda benar silahkan ambil hadiahnya";
    }
}