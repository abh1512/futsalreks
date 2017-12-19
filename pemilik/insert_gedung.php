<?php
session_start();
include '../conn/konek.php';


$nama = $_POST['namagedung'];
$alamat = $_POST['alamatgedung'];
$pemilik = $_POST['idpemilik'];
$gedung = $_POST['idgedung'];
$ref = $_POST['ref'];

$query  = mysqli_query($koneksi,"INSERT INTO gedungs values('$gedung','$pemilik','$nama','$alamat','$ref')");
if ($query) {
  header('location:gedung.php');
}
else {
  echo "gagal";
}
 ?>
