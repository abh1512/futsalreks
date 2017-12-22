<?php
include '../lib/settings.php';

$nama = $_POST['myname'];
$email = $_POST['myemail'];
$alamat = $_POST['myalamat'];
$nohp = $_POST['mynumber'];
$tanggal= date("Y-m-d H:i:s");
$foto = $_FILES['myfoto']['name'];
$tmp = $_FILES['myfoto']['tmp_name'];

$cariktp = mysqli_query($con,"SELECT no_ktp FROM pemiliks where email='$email'");
$ketemu = mysqli_fetch_array($cariktp);
$fotobaru = $ketemu['no_ktp'].".jpg";
$namabaru = $fotobaru;

$path = "../assets/images/foto_pemilik/".$fotobaru;

if ($foto) {

  if(move_uploaded_file($tmp,$path)){
    $ganti = mysqli_query($con,"UPDATE pemiliks set nama='$nama',alamat='$alamat',no_hp='$nohp',updated_at='$tanggal',foto='$fotobaru' where email='$email'");
    if ($ganti) {
      echo "<script>alert('Profil Sukses diganti');window.location='profile.php'</script>";
    }
    else {
      echo "<script>alert('Maaf Coba Lagi');window.location='profile.php'</script>";
    }
  }
  else {
    echo "Gambar gagal diupload";
  }
}
else {
/*$cariktp = mysqli_query($koneksi,"SELECT no_ktp FROM pemiliks where email='$email'");
  $ketemu = mysqli_fetch_array($cariktp);
  $fotobaru = $ketemu['no_ktp'];

  $namabaru = $fotobaru;*/
  $tanpafoto = mysqli_query($con,"UPDATE pemiliks set nama='$nama',alamat='$alamat',no_hp='$nohp',updated_at='$tanggal' where email='$email'");
  if ($tanpafoto) {
    echo "<script>alert('Profil Sukses diganti');window.location='profile.php'</script>";
  }
  else {
    echo "<script>alert('Maaf Coba Lagi');window.location='profile.php'</script>";
  }
}


 ?>
