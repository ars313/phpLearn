<?php
$a = "Ferdy";

$salam = function () {
  global $a;
  echo "Selamat datang $a <br>";
  $a = "Rissa";
  echo "Selamat datang $a <br>";
};
$salam();
echo "hahahah $a";