<?php
  $_POST["kado"] = "Buku Duniailkom";
  
  $kado = isset($_POST["kado"]) ? $_POST["kado"] : "";
  
  echo $kado;  // "Buku Duniailkom"
