<?php
include '../lib/settings.php';
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
if($data['key'] == "edit")
{
   $id_detail = $data['id'];
   $query = "SELECT * FROM gedungs where id_gedung='$id_detail' ";
   $sql = mysqli_query($con, $query);
   $r = mysqli_fetch_array($sql);
   echo json_encode($r);
}
?>
