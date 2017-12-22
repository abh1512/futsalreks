<?php
include '../../lib/settings.php';

$nama = $_POST['namanya'];
$admin = $_POST['idadmin'];
$foto = $_FILES['mycarousel']['name'];
$tmp = $_FILES['mycarousel']['tmp_name'];
$tanggal= date("Y-m-d H:i:s");

$path = "../fotocarousel/".$foto;

if ($foto) {
  if(move_uploaded_file($tmp,$path)){
    $isicaros = mysqli_query($con,"INSERT INTO carousels(id_carousel,id_admin,nama_carousel,gambar,created_at) values (null,'$admin','$nama','$foto','$tanggal')");
    if ($isicaros) {
      echo "<script>alert('Sukses diinputkan');window.location='../?halaman=page_managemen'</script>";
    }
    else {
      echo "<script>alert('Maaf Coba Lagi');window.location='../page_managemen.php'</script>";
    }
  }else {
    echo "gagal masuk";
  }
}
else {
  echo "<script>alert('TOLONG MASUKAN GAMBAR');window.location='../?halaman=page_managemen'</script>";
}
?>
