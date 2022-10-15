<?php
//echo ceil(3.2);
//echo "<br>";
//echo floor(3.2);
//echo "<br>";
//echo number_format(2450000);
//echo "<br>";
//echo number_format(2348999999, 2, ",", ".");


//echo getrandmax()."<br>";
//echo rand()."<br>";
//echo rand()."<br>";
//
//echo strlen("Selamat jalan kawan");
//echo "<br>";
//echo lcfirst("First");

//$username = "    TrisNa";
//$username = strtolower($username);
//$username = trim($username);
//
//if ($username == "trisna"){
//    echo "Selamat datang $username";
//} else {
//    echo "Periksa kembali username anda";
//}
//
//$a = "bb";
//
//echo str_pad($a, 12, "abc");


//$sumber = "HTML CSS PHP SQL JAVASCRIPT";
//$array_hasil = explode(" ", $sumber);
//echo "<pre>";
//print_r($array_hasil);
//echo "</pre>";

$sumber = "ab/cd/ef/gh/ij/kl";
$array_hasil = explode("/", $sumber, 4);
echo "<pre>";
print_r($array_hasil);
echo "</pre>";