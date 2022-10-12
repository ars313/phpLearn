<?php
echo match (12) {9 => "Ini adalah angka sembilan integer", '9' => "ini adalah angka sembilan string",
    12 => "ini adalah angka 12 integer"
};