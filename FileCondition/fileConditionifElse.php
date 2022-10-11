<?php
$user="joko";

if ($user=="admin"){
    echo "Anda login sebagai admin";
}

elseif ($user=="user"){
    echo "Anda login sebagai user";
}

elseif ($user=="guest"){
    echo "Anda login sebagai guest";
}

else{
    echo "maaf login anda tidak valid";
}
