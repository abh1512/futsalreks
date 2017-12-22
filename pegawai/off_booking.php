<?php
// Ambil Id gedung yang dipegang penaggung jawab pada session ini
//echo $_SESSION['id_pengguna'];
  $er2="SELECT id_gedung from pegawais where no_ktp='$_SESSION[id_pengguna]'";
  $data2=mliSelect(mysqli_query($con,$er2));
  $gedung_id = $data2->id_gedung;
 ?>
<div class="row">
    <div class="col s12 ">
      <div class="col s12">
          <ul id="tabs-swipe-demo" class="tabs">
            <?php
              $no=1;
           $er=mysqli_query($con,"SELECT nama from lapangans where id_gedung ='$gedung_id'");
            while($r=mliSelect($er)){
                echo'<li class="tab col s3"><a href="#test-swipe-'.$no.'">'.$r->nama.'</a></li>';
                $no++;
              }
              ?>
          </ul>
          <?php
          $tgl = date('j F, Y');
          $no2=1;
         $er2=mysqli_query($con,"SELECT * from lapangans where id_gedung ='$gedung_id'");
          while($r2=mliSelect($er2)){
              $a = '<div id="test-swipe-'.$no2.'" class="col s12">
                  <div class="card center-align">
                    <div class="card-title tit-top"> Jadwal Lapangan '.$no2.' </div>
                     <div class="card-content">
                       <div class="row">
                         <div class="col s3"></div>
                         <div class="col s6">
                             <label for="birthdate">Pilih Tanggal</label>
                             <input id="birthdate" type="text" class="datepicker center-align" value="'.$tgl.'">
                         </div>
                         <div class="col s3"></div>
                       </div>
                       <div class="row">
                           <div class="col s2"></div>
                           <div class="col s8" id="'.$r2->id_lapangan.'">';
                           $b='';
                 $s = mysqli_query($con,"SELECT dl.*,dt.* FROM detil_lapangans AS dl LEFT OUTER JOIN detil_transaksi AS dt ON dl.jam_mulai = dt.jam WHERE dl.id_lap = '$r2->id_lapangan' ORDER BY jam_mulai ASC");
                 while($x = mliSelect($s))
                 {
                   $booking = '<a class="waves-effect waves-light btn disabled status cyan darken-2" >SUDAH DIPESAN</a>';
                   if($x->jam == "")
                   {
                     $booking = '<a class="waves-effect waves-light btn status statuson pesan modal-trigger" href="#modalLama" id="'.$x->id_detil_lapangan.'" >PESAN</a>';
                   }
                   $c = '
                   <div class="center-align col s6">'.substr($x->jam_mulai,0,5).' - '.substr($x->jam_berakhir,0,5).'</div>
                   <div class="center-align col s6">
                    '.$booking.'
                   </div>';
                   $b = $b.$c;
                 }

            $c=            '<table class="bordered" id="jam_lapangan">
                                  <thead style="display:none;">
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                    </tr>
                                  </thead>
                                  <tbody>

                                  </tbody>
                              </table>
                            </div>
                           <div class="col s2"></div>
                       </div>
                     </div>
                   </div>
              </div>';
              echo $a.$b.$c;
              $no2++;
            }
            ?>
      </div>
  </div>

<?php
//load setelah jquery telah diload di index.php
  $loadAfterJQuery='
  <script src="assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
  <script src="assets/js/pages/table-data.js"></script>
'?>
