<?php
include 'lib/settings.php';
include 'lib/function.php';
require 'phpmailer/PHPMailerAutoload.php';

$kk = "";

$ha = $_POST["tipe"];
if($ha == "pegawai")
{
  $tipe = anti_sql_injection($con,$_POST["tipe"]."s");
  $no_ktp = anti_sql_injection($con,$_POST['no_ktp']);
  $nama = anti_sql_injection($con,$_POST['nama']);
  $email = anti_sql_injection($con,$_POST['email']);
  $alamat = anti_sql_injection($con,$_POST['alamat']);
  $no_hp = anti_sql_injection($con,$_POST['no_hp']);
  $kode = anti_sql_injection($con,$_POST['kode']);

  $query = mysqli_query($con,"SELECT id_gedung,id_pemilik FROM gedungs WHERE kode_ref='$kode'");
  $arr = mysqli_fetch_array($query);
  if($arr[0] != "")
  {
    $id_gedung = $arr[0];
    $id_pemilik = $arr[1];
    $col = "no_ktp,no_ktp_pemilik,id_gedung,nama,email,alamat,no_hp";
    $val = "'$no_ktp','$id_pemilik','$id_gedung','$nama','$email','$alamat','$no_hp'";
  }
  else
  {
    $kk = "Kode referensi tidak terdaftar".$arr[0];
  }
 
}
else if($ha == "pemilik")
{

  $tipe = anti_sql_injection($con,$_POST["tipe"]."s");
  $no_ktp = anti_sql_injection($con,$_POST['no_ktp']);
  $nama = anti_sql_injection($con,$_POST['nama']);
  $email = anti_sql_injection($con,$_POST['email']);
  $alamat = anti_sql_injection($con,$_POST['alamat']);
  $no_hp = anti_sql_injection($con,$_POST['no_hp']);

  $col = "no_ktp,nama,email,alamat,no_hp";
  $val = "'$no_ktp','$nama','$email','$alamat','$no_hp'";
}
else if($ha == "customer")
{
  $tipe = anti_sql_injection($con,$_POST["tipe"]."s");
  $nama = anti_sql_injection($con,$_POST['nama']);
  $email = anti_sql_injection($con,$_POST['email']);
  $alamat = anti_sql_injection($con,$_POST['alamat']);
  $no_hp = anti_sql_injection($con,$_POST['no_hp']);
  $col = "email,nama,alamat,no_hp";
  $val = "'$email','$nama','$alamat','$no_hp'";
}

if($kk == "")
{
  if($ha != 'customer')
  {
    if(mliInsert($con,$tipe,$col,$val)){

      $pass = $_POST['pass'];
      $pass = md5($_POST['pass']);
      $status = create_random(50);

      if(mliInsert($con,"users","email, password, hak_akses,status","'$email', '$pass', '$ha','$status'")){
        echo "Pendaftaran berhasil, silahkan cek email untuk aktivasi!";

        $mail = new PHPMailer(true);
        $mail->IsSMTP();
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Host = 'mx1.hostinger.co.id';
        $mail->Port = 587;
        $mail->Username = 'admin@futsalrek.com';
        $mail->Password = 'adminfutsalrek';
        $mail->Subject = ' Aktivasi akun futsalrek';
        $mail->SetFrom('admin@futsalrek.com', 'admin Futsalrek');
        $mail->AddAddress("$email");
        $mail->Subject = "Aktivasi akun futsalrek";
        $mail->Body = "Hai $nama <br> Silahkan klik link dibawah untuk aktivasi akunmu <br><h3><b>futsalrek.com/aktif.php?ref=$status</b></h3><br><br>";
        $mail->AltBody = "This is the plain text version of the email content";

        try {
            // kirim email
            $mail->Send();
            $msg = "sukses";
        } catch (phpmailerException $e) {
            $msg = $e->getMessage();
        } catch (Exception $e) {
            $msg = $e->getMessage();
        }
        if($msg == "sukses")
        {

        }
        else {
          echo $msg;
        }
      }
      else{
        echo "gagal";
      }
    }
    else{
      echo "gagal";
    }
  }
}
else
{
  echo $kk;
}


function create_random($length)
{
    $data = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTU1234567890';
    $string = '';
    for($i = 0; $i < $length; $i++) {
        $pos = rand(0, strlen($data)-1);
        $string .= $data{$pos};
    }
    return $string;
}

 ?>
