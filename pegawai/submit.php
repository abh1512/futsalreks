<?php
require_once "../lib/settings.php";
require_once "../lib/function.php";

foreach($_REQUEST as $key=>$value){
	if(is_array($_REQUEST[$key])){
		foreach($_REQUEST[$key] as $k=>$v){
			$_REQUEST[$key][$k]=anti_sql_injection($con,$v);
		}
	}else
		$_REQUEST[$key]=anti_sql_injection($con,$value);
}
$data = $_REQUEST;
$status=false;

if($data['key'] == "lapangan")
{
  $kategori = anti_sql_injection($con,$data['kategori']);
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
    $status=true;
    echo json_encode(array('status'=>$status));
  }
  else
  {
    echo "gagal";
    echo json_encode(array('status'=>$status));
  }
}
else if($data['key'] == "harga")
{
  $jam1 = anti_sql_injection($con,$data['jam_mulai']);
  $jam2 = anti_sql_injection($con,$data['jam_berakhir']);
  $harga = anti_sql_injection($con,$data['harga']);
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

  $lap = $data['id_lap'];
  $selisih = $berakhir-$mulai;

  $loop = $mulai;
  $loopa = $mulai+1;
  $status=true;
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
  echo json_encode(array('status'=>$status));
}
else {
  echo "gagal";
  echo json_encode(array('status'=>$status));
}


}
else if($data['key'] == "edit")
{
    $id_detail = $data['id'];
    $query = "SELECT * FROM detil_lapangans WHERE id_detil_lapangan = '$id_detail' ";
    $sql = mysqli_query($con, $query);
    $r = mysqli_fetch_array($sql);
    echo json_encode($r);
}
else if($data['key'] == "edit_harga")
{
   $id_detail = $data['id_detil'];
    $harga = $data['harga'];
    if(mliUpdate($con,"detil_lapangans","harga='$harga'","where `id_detil_lapangan`='$id_detail'")){
				$status=true;
        echo json_encode(array('status'=>$status));
			}else{
				$status=false;
        echo json_encode(array('status'=>$status));
			}
}
