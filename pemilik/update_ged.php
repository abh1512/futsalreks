<?php
include '../lib/settings.php';
$idged = $_POST['idgedung2'];
$namaged = $_POST['namagedung2'];
$alamatged = $_POST['alamatgedung2'];
$lapangan = implode(', ', $_POST['lap2']);
$areged = $_POST['areaged2'];
$foto = $_FILES['mygedung2']['name'];
$tmp = $_FILES['mygedung2']['tmp_name'];

$namagedu = $idged.".jpg";
$path = "../assets/images/foto_gedung/".$namagedu;

if ($foto) {

  if(move_uploaded_file($tmp,$path)){
    $ganti = mysqli_query($con,"UPDATE gedungs set nama='$namaged',alamat='$alamatged',area='$areged',jenis_lap='$lapangan',foto='$namagedu' where id_gedung='$idged'");
    if ($ganti) {
      echo "<script>alert('Profil Gedung diganti');window.location='gedung.php'</script>";
    }
    else {
      echo "<script>alert('Maaf Coba Lagi');window.location='gedung.php'</script>";
    }
  }
  else {
    echo "Gambar gagal diupload";
  }
}
else {
  $tanpafoto = mysqli_query($con,"UPDATE gedungs set nama='$namaged',alamat='$alamatged',area='$areged',jenis_lap='$lapangan' where id_gedung='$idged'");
  if ($tanpafoto) {
    echo "<script>alert('Profil Gedung diganti');window.location='gedung.php'</script>";
  }
  else {
    echo "<script>alert('Maaf Coba Lagi');window.location='gedung.php'</script>";
  }
}
?>
