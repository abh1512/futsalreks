<?php
include '../lib/settings.php';
$norek = $_POST['norek'];
$pemilik = $_POST['idpemlik'];
$bank = $_POST['namabank'];
$pengirim = $_POST['pengirim'];
$saldo = $_POST['saldo'];
$foto = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];
$tanggal= date("Y-m-d H:i:s");
$buatbaru = date("Y-m-d").$pemilik;

$namabaru = $buatbaru.".jpeg";
$path = "../assets/images/tambah_saldo/".$namabaru;

$caripemilik = mysqli_query($con,"SELECT id_pemilik FROM topups WHERE id_pemilik='$pemilik'");
$row     = mysqli_fetch_array($caripemilik);
$ketemu = $row['id_pemilik'];
if ($pemilik == $ketemu)
{
  if ($foto) {
    if (move_uploaded_file($tmp,$path))
    {
      $kueri="INSERT INTO banks(no_rek,id_pemilik,nama_bank,nama_rekening,saldo,foto_bukti,created_at) values('$norek','$pemilik','$bank','$pengirim','$saldo','$namabaru','$tanggal')";
      $quer=mysqli_query($con,$kueri);
      $updet = mysqli_query($con,"UPDATE topups SET saldo=saldo+'$saldo' where id_pemilik='$pemilik'");
      if ($quer && $updet)
      {
        //echo "<script>alert('Sukses Tambah Saldo');window.location='topup.php'</script>";
        echo "<script>alert('Sukses Tambah Saldo');window.location='topup.php'</script>";
      }
      else {
        echo "<script>alert('Maaf Coba Lagi');window.location='topup.php'</script>";
        //echo "<script>alert($quer)</script>";
      }
    }
    else
    {
      echo "foto ga bisa masuk";
    }
  }
  else
  {
    echo "<script>alert('TOLONG MASUKAN GAMBAR');window.location='tambah_saldo.php'</script>";
  }
}
else {
  if ($foto) {
    if (move_uploaded_file($tmp,$path))
    {
      $kueri="INSERT INTO banks(no_rek,id_pemilik,nama_bank,nama_rekening,saldo,foto_bukti,created_at) values('$norek','$pemilik','$bank','$pengirim','$saldo','$namabaru','$tanggal')";
      $quer=mysqli_query($con,$kueri);
      $isi = mysqli_query($con,"INSERT INTO topups values(null,'$pemilik','$saldo','$tanggal')");
      if ($quer && $isi)
      {
        echo "<script>alert('Sukses Tambah Saldo');window.location='topup.php'</script>";
        //echo"sukses";
      }
      else {
        echo "<script>alert('Maaf Coba Lagi');window.location='topup.php'</script>";
        //echo "<script>alert($quer)</script>";
      }
    }
    else
    {
      echo "foto ga bisa masuk";
    }
  }
  else
  {
    echo "<script>alert('TOLONG MASUKAN GAMBAR');window.location='tambah_saldo.php'</script>";
  }
}
?>
