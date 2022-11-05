<?php
  $prize = "Semua Buku Duniailkom";

  if (isset($_POST["kado"])) {
    $kado = $_POST["kado"];
  }
  else if (isset($prize)){
    $kado = $prize;
  }
  else {
    $kado = "";
  }

  echo $kado;  // "Semua Buku Duniailkom"
