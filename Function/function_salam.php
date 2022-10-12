<?php
function salam ($nama) {
    echo "Salam dari saya, $nama";
}

function salam_waktu ($waktu, $nama) {
    echo "Selamat $waktu, $nama semoga sehat selalu";
}

salam("Jono");
echo "<br>";
salam("Rudi");
echo "<br>";
salam_waktu("Siang", "Joko");
echo "<br>";
salam_waktu("Siang", "Dery");