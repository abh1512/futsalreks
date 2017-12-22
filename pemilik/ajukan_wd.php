<?php
include '../lib/settings.php';
$incomeku = $_POST['myincome'];
$pengajuan = $_POST['mypropose'];
$password = $_POST['mypasslama'];
$myid = $_POST['myktp'];
$tanggal= date("Y-m-d H:i:s");

if ($incomeku<$pengajuan) {
  echo "<script>alert('Maaf Dana Yang Anda Ajukan Terlalu Sedikit');window.location='withdraw.php'</script>";
}
else {
  $querypems = mysqli_query($con,"SELECT email FROM pemiliks where no_ktp='$myid'");
  $row     = mysqli_fetch_array($querypems);
  $ada = $row['email'];
  $querypass = mysqli_query($con,"SELECT password FROM users where email='$ada'");
  $r = mysqli_fetch_array($querypass);
  $adapass = $r['password'];
  if($adapass == md5($password)){
      $querywd = mysqli_query($con,"INSERT INTO withdraws(id_pemilik,total,status,created_at) values ('$myid','$pengajuan','belum','$tanggal')");
      if($querywd){
        echo "<script>alert('Sukses Mengajukan Dana');window.location='withdraw.php'</script>";
      }
      else {
        echo "<script>alert('Maaf Coba Lagi');window.location='withdraw.php'</script>";
      }
  }
  else {
    echo "<script>alert('Maaf Password Anda Keliru');window.location='withdraw.php'</script>";
  }

}
 ?>
