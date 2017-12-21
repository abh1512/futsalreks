<?php
require_once "lib/settings.php";
require_once "lib/function.php";


if(isset($_POST['key']))
{
  $key = $_POST['key'];
}
else {
  $key = "load";
}

if($key == 'insert')
{
  $id = anti_sql_injection($con,$_POST['id']);
  $tgl = anti_sql_injection($con,$_SESSION['tanggal']);
  $id_cust = /*anti_sql_injection($con,$_SESSION['email'])*/"";

  $query = mysqli_query($con, "INSERT INTO sementara (id_detil_lap,tanggal) VALUES ('$id','$tgl')");

  if($query)
  {
    echo "ok";
  }
  else {
    echo "gagal";
  }
}
else if($key == 'load')
{
  $id_cust =""; //$_SESSION['email'];
  $tgl = anti_sql_injection($con, $_SESSION['tanggal']);

  $data = array();
  $query = mysqli_query($con,"SELECT sementara.id,dl.jam_mulai FROM  sementara INNER JOIN detil_lapangans AS dl ON sementara.id_detil_lap = dl.id_detil_lapangan WHERE sementara.tanggal = '$_SESSION[tanggal]'");
  while ($row = mysqli_fetch_array($query)) {
  $btn = '<a class="btn-floating btn-small waves-effect waves-light red center-align" id="'.$row[0].'"><i class="material-icons">delete_forever</i></a>';
    $data[] = array(
      'btn' => $btn,
      'jam' => $row[1]
    );
  }
  $output = array("data" => $data);
  echo json_encode($output);
}
?>
