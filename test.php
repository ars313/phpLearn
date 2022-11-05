<?php
//
//$_POST["kado"] = "a";
//
//if (isset($_POST["kado"])) {
//    $checked_pos = "checked";
//}
//
//else {
//    $checked_pos = "";
//}
//
//echo "$checked_pos";
$_POST["kado"] = "Buku Dunia Ilkom";
$checked_kado = isset($_POST["kado"]) ? $_POST["kado"] : "";
echo $checked_kado;