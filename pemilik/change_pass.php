<?php
include '../lib/settings.php';
$lama = $_POST['mypasslama'];
$baru = $_POST['mypassbaru'];
$confbaru = $_POST['mypassbaruconf'];
$akun = $_POST['myacc'];

$querycari = mysqli_query($con,"SELECT password FROM users where email='$akun'");
$num_row = mysqli_num_rows($querycari);
$row     = mysqli_fetch_array($querycari);
$passwordlama = $row['password'];
if($passwordlama == md5($lama))
{
  if($baru == $confbaru)
  {
    $updatepass = mysqli_query($con,"UPDATE users SET password='".md5($baru)."' where email='$akun'");
    if ($updatepass) {
      echo "<script>alert('Password sukses diganti');window.location='profile.php'</script>";
    }
    else {
      echo "<script>alert('gagal ganti');window.location='profile.php'</script>";
    }
  }
  else {
    echo "<script>alert('Password baru tidak sama');window.location='profile.php'</script>";
  }
}
else {
  echo "<script>alert('Password salah');window.location='profile.php'</script>";
}
 ?>
