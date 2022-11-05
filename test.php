<?php

$_POST["kado"] = "a";

if (isset($_POST["kado"])) {
    $checked_pos = "checked";
}

else {
    $checked_pos = "";
}

echo "$checked_pos";