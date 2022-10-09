<?php
class Siswa {
    public $nama;
    public $umur;
    public $tgl_lahir;

    public function get_nama() {
        return $this->nama;
    }
}

$andi = new Siswa;
$andi->nama = "Dani";
$andi->umur = 18;
$andi->tgl_lahir = "13 Desember 2004";

echo "<pre>";
print_r($andi);
echo "</pre>";
echo $andi->get_nama();