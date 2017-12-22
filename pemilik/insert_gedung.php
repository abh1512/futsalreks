<?php
include '../lib/settings.php';
$nama = $_POST['namagedung'];
$alamat = $_POST['alamatgedung'];
$pemilik = $_POST['idpemilik'];
$gedung = $_POST['idgedung'];
$area = $_POST['areaged'];
$ref = $_POST['ref'];
$foto = $_FILES['mygedung']['name'];
$tmp = $_FILES['mygedung']['tmp_name'];
$lapangan = implode(', ', $_POST['lap']);

$namaged = $gedung.".jpg";
$path = "../assets/images/foto_gedung/".$namaged;


  if (move_uploaded_file($tmp,$path)) {
    $query  = mysqli_query($con,"INSERT INTO gedungs (id_gedung,id_pemilik,nama,alamat,area,foto,jenis_lap,kode_ref) values ('$gedung','$pemilik','$nama','$alamat','$area','$namaged','$lapangan','$ref')");
    if ($query) {
      echo "<script>alert('Sukses Isi Gedung');window.location='gedung.php'</script>";
    }
    else {
      //echo "<script>alert('Maaf Coba Lagi');window.location='gedung.php'</script>";
      echo "gagal";
    }
  }
  else {
    echo "Gambar gagal diupload";
  }
 ?>
