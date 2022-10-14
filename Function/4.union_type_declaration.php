<?php

declare(strict_types=1);

function pangkat(mixed $bilangan_dasar, int|float $bilangan_pangkat) {
    $hasil = 1;
    for ($i = 1; $i <= $bilangan_pangkat; $i++) {
        $hasil = $hasil * $bilangan_dasar;
    }
    return $hasil;
}

echo pangkat(1.6, 3);
