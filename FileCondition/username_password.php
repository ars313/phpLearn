<?php
//$username= "Jono";
//$password = "asdf";
//
//if ($username == "Jono" and $password == "asdf"){
//    echo "Selamat anda bisa login";
//}
//
//else {
//    echo "Periksa kembali login anda";
//}

$username = "tuloo";
$password = "qwerty";

if ($username == "admin" and $password == "asdf") {
    echo "Selamat anda berhasil login";
}
elseif ($username == "admin" and $password != "asdf") {
    echo "Periksa kembali password anda";
}

elseif ($username != "admin" and $password == "asdf") {
    echo "Periksa kembali user anda";
}
else {
    echo "user dan password anda tidak terdaftar";
}