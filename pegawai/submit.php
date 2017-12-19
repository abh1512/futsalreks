<?php
require_once "../lib/settings.php";
require_once "../lib/function.php";

if($_POST['key'] == "lapangan")
{
  $kategori = anti_sql_injection($con,$_POST['kategori']);
  $no_ktp = $_SESSION['id_pengguna'];
  $query = mysqli_query($con,"SELECT id_gedung FROM pegawais WHERE no_ktp='$no_ktp'");
  $arr = mysqli_fetch_array($query);
  $id_ged = $arr[0];

  $index=1;
  $row = mysqli_num_rows(mysqli_query($con,"SELECT * FROM lapangans WHERE id_gedung = '$id_ged'"));
  $index= $index+$row;
  $id_lap = $id_ged.$index;

  $nama = "LAP ".$index;
  if(mliInsert($con,"lapangans","id_lapangan, id_gedung, nama , kategori","'$id_lap', '$id_ged', '$nama', '$kategori'")){
    echo "ok";
  }
  else
  {
    echo "gagal";
  }
}
else if($_POST['key'] == "harga")
{
  $jam1 = anti_sql_injection($con,$_POST['jam_mulai']);
  $jam2 = anti_sql_injection($con,$_POST['jam_berakhir']);
  $harga = anti_sql_injection($con,$_POST['harga']);
  $row = mysqli_num_rows(mysqli_query($con,"SELECT * FROM detil_lapangans WHERE jam_mulai LIKE '%$jam1%' OR jam_berakhir LIKE '%$jam2%'"));
if($row == 0)
{
  if($jam1 != "10:00" || $jam1 != "20:00")
  {
    $mulai = str_replace("0","",$jam1);
    $mulai = str_replace(":","",$mulai);
  }
  else {
    $mulai = str_replace(":00","",$jam1);
  }

  if($jam2 != "10:00" ||$jam2 != "10:00"  )
  {
    $berakhir = str_replace("0","",$jam2);
    $berakhir = str_replace(":","",$berakhir);
  }
  else {
    $berakhir = str_replace(":00","",$jam2);
  }

  $lap = $_POST['id_lap'];
  $selisih = $berakhir-$mulai;

  $loop = $mulai;
  $loopa = $mulai+1;
  echo "ok";
  while($loop < $berakhir )
  {
    if($loop < 10)
    {
      $jam1 = "0".$loop.":00";
    }
    else {
      $jam1 = $loop.":00";
    }
    if($loopa < 10)
    {
      $jam2 = "0".$loopa.":00";
    }
    else {
      $jam2 = $loopa.":00";
    }

    mliInsert($con,"detil_lapangans","id_lap, jam_mulai, jam_berakhir, harga","'$lap','$jam1', '$jam2', '$harga'");
    $loop++;
    $loopa++;
  }
}
else {
  echo "gagal";
}


}
else if($_GET['key'] == "edit")
{
    $id_detail = $_GET['kode'];
    $query = "SELECT * FROM detil_lapangans WHERE id_detil_lapangan = '$id_detail' ";
    $sql = mysqli_query($con, $query);
    $data = mysqli_fetch_array($sql);
    echo json_encode($data);
}
