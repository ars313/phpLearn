<?php

$mix_array = array(121, "Dedi", 9.0, true, "Budi", "Heru");
unset($mix_array[2]);
unset($mix_array[2]);
echo "<pre>";
var_dump($mix_array);
echo "</pre>";
