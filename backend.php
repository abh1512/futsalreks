<?php
  require_once 'lib/settings.php';
  require_once 'lib/function.php';

  $_SESSION['tanggal'] = "".$_POST['tanggal'];
  $_SESSION['durasi'] = "".$_POST['durasi'];
  $id = anti_sql_injection($con,$_POST['id']);

  $query = mysqli_query($con,"SELECT dl.*, lap.nama, ged.nama FROM detil_lapangans AS dl INNER JOIN lapangans AS lap ON dl.id_lap=lap.id_lapangan INNER JOIN gedungs AS ged ON lap.id_gedung = ged.id_gedung WHERE dl.id_detil_lapangan = '$id'");
  $arr = mysqli_fetch_array($query);
  $_SESSION['jm'] = substr($arr['jam_mulai'],0,5);
  $_SESSION['harga'] = $arr['harga'];
  $_SESSION['ng'] = $arr[5];
  $_SESSION['nl'] = $arr[6];
  $_SESSION['tb'] = $_SESSION['harga']*$_POST['durasi'];

  if($query)
  {
    echo "ok";
  }
  else {
    echo "gagal";
  }
?>
