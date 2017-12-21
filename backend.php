<?php
  session_start();
  $_SESSION['tanggal'] = "".$_POST['tanggal'];
  echo $_POST['tanggal'];
?>
