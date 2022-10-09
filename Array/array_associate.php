<?php
$Siswa = [
    "satu" => "Andri",
    "dua" => "Joko",
    "tiga" => "Harry",
    "empat" => "Ruslan"
];
$Siswa["empat"] = "Deden";
$Siswa[0] = "Tambahan";
$Siswa[] = "Selanjutnya";
echo "<pre>";
print_r($Siswa);
echo "</pre>";
echo $Siswa["empat"];