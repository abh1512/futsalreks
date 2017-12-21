<?php
require_once "lib/settings.php";
require_once "lib/function.php";

  $id = anti_sql_injection($con,$_POST['id']);
  $tgl = anti_sql_injection($con,$_SESSION['tanggal']);
  $id_cust = anti_sql_injection($con,$_SESSION['email']);

  $query = mliInsert($con,'sementara','id, id_detil_lap, id_cust, tanggal',"'','$id','$id_cust','$id_cust','$tgl'");

  if($query)
  {
    echo "ok";
  }
  else {
    echo "gagal";
  }

?>
