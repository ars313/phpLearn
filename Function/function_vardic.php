<?php
function penambahan() {
    $array_argumen = func_get_args();
    $jumlah_argumen = func_num_args();
    $nilai_argumen_ke_2 = func_get_arg(1);

    echo "Array Argumen: ";
    echo "<pre>";
    print_r($array_argumen);
    echo "</pre>";
    echo "<br>";

    echo "Jumlah argumen: $jumlah_argumen <br>";
    echo "Nilai Argumen berdasarkan index: $nilai_argumen_ke_2 <br>";
}

penambahan(1,2);
echo "<br>";
penambahan(5,4,3,2,1);
echo "<br>";
penambahan(6, 12, 4, 5, 2);