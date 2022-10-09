<?php
$siswa = [
    "kelas_x" => ["Santi", "Yanto", "Reza"],
    "kelas_xi" => ["Tia", "Siska", "Nova"],
    "kelas_xii" => ["Robert", "Adi", "Alex"]
];

echo "<pre>";
print_r($siswa);
echo "</pre>";

echo $siswa["kelas_x"][1];