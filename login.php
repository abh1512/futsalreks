<?php
include 'lib/settings.php';
include 'lib/function.php';

$user = anti_sql_injection($con,$_POST["email"]);
$pass = md5($_POST["password"]);
$query = mysqli_query($con,"SELECT * FROM users WHERE email='$user' AND password='$pass'");
$isi = mysqli_fetch_array($query);
$row = mysqli_num_rows($query);
if($row > 0)
{
  if($isi[3] != '')
  {
    echo 'Akun belum diverifikasi';
  }
  else if($isi[3] == ''){
    echo $isi[2];
    $ha = $isi[2];
    if($ha = $isi[2] == "pemilik" || $ha = $isi[2] == "pegawai")
    {
      $ha = $isi[2].'s';
      $query = mysqli_query($con,"SELECT no_ktp FROM $ha WHERE email='$user'");
      $isi = mysqli_fetch_array($query);
      $_SESSION['id_pengguna'] = ''.$isi[0];
    }
    else {
      $_SESSION['email'] = ''.$user;
    }
  }
}
else{
  echo "Username atau password salah";
}


 ?>
