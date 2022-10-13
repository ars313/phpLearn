<?php
function coba() {
    static $a = 0;
    $a = $a + 1;
    echo "Ini adalah bilangan ke $a dari fungsi coba() <br>";
}

coba();
coba();
coba();
coba();