<?php
require_once "../lib/settings.php";
require_once "../lib/function.php";

$er2="SELECT id_gedung from pegawais where no_ktp='$_SESSION[id_pengguna]'";
$data2=mliSelect(mysqli_query($con,$er2));

foreach($_REQUEST as $key=>$value){
	if(is_array($_REQUEST[$key])){
		foreach($_REQUEST[$key] as $k=>$v){
			$_REQUEST[$key][$k]=anti_sql_injection($con,$v);
		}
	}else
		$_REQUEST[$key]=anti_sql_injection($con,$value);
}
$data = $_REQUEST;
$id =  $data2->id_gedung;

if($data['key'] == "off")
{
  $off=mliSelect(mysqli_query($con,"SELECT DATE_FORMAT(tgl_sewa, '%b') AS sDate, COUNT(id_transaksi) AS iCount FROM transaksis
    WHERE id_transaksi LIKE 'off%' and id_lapangan LIKE '$id%'
    GROUP BY sDate ORDER BY sDate DESC"));
    echo json_encode($off);
}
else if($data['key'] == "on"){
  $on=mliSelect(mysqli_query($con,"SELECT DATE_FORMAT(tgl_sewa, '%b') AS sDate, COUNT(id_transaksi) AS iCount FROM transaksis
    WHERE id_transaksi LIKE 'on%' and id_lapangan LIKE '$id%'
    GROUP BY sDate ORDER BY sDate DESC"));
    echo json_encode($on);
}




?>
