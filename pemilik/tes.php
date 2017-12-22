<?php
include '../lib/settings.php';
require_once "../lib/function.php";

$querycari = mysqli_query($con,"SELECT password FROM users where email='admin@futsalrek.com'");
$row     = mysqli_fetch_array($querycari);
$passwordlama = $row['password'];
echo md5($passwordlama);
 ?>
