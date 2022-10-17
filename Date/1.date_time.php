<?php
    echo date("d m Y", time())."<br>";
    $minggu_depan = time() + (7 * 24 * 60 * 60);
    echo date("d m Y", $minggu_depan);
?>
