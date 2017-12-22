<?php
  $ged = $_GET['ged'];
  $query = mysqli_query($con,"SELECT * FROM lapangans WHERE id_gedung='$ged'");
  $query1 = mysqli_query($con,"SELECT * FROM lapangans WHERE id_gedung='$ged'");
  $query2 = mysqli_query($con,"SELECT * FROM lapangans WHERE id_gedung='$ged'");
?>
<div class="row" >
    <div class="col s12 l12 m12">

          <div class="carousel carousel-slider center" data-indicators="true">
              <div class="carousel-item red white-text" href="#one!">
                  <h2>First Panel</h2>
                  <p class="white-text">This is your first panel</p>
              </div>
         </div>

    </div>

</div>
<!--  <div class="row">
    <div class="input-field col s12 l3">
      <select>
        <option value="" disabled selected>Urutkan berdasarkan</option>
        <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="3">Option 3</option>
      </select>
      <label>Materialize Select</label>
    </div>
  </div>-->
  <div class="row">
      <div class="col s12">
        <ul class="tabs">
          <?php
            while($row = mliSelect($query))
            {
                  echo '<li class="tab col s3"><a href="#'.$row->id_lapangan.'">'.$row->nama.'</a></li>';
            }
          ?>
        </ul>
      </div>
    </div>

<div class="row">

  <div class="col s12">
    <div class="card center-align" style="width:50%; margin-left:auto; margin-right:auto;">
      <div class="card-title tit-top">
        Jadwal Lapangan
      </div>
   <div class="card-content">
      <div class="row">
        <div class="col s3"></div>
        <div class="col s6">
            <label for="birthdate">Pilih Tanggal</label>
            <input id="birthdate" type="text" class="datepicker center-align" value="
            <?php
            if($_SESSION['tanggal'] != "")
            {
              echo $_SESSION['tanggal'];
            }
            else{
              echo date('j F, Y');
            }

            ?>">
        </div>
        <div class="col s3"></div>
      </div>

      <?php while($row = mliSelect($query1)){ ?>
      <div class="row">
        <div class="col s2"></div>
        <div class="col s8" id="<?=$row->id_lapangan?>">
          <?php
          $a = mysqli_query($con,"SELECT dl.*,dt.* FROM detil_lapangans AS dl LEFT OUTER JOIN detil_transaksi AS dt ON dl.jam_mulai = dt.jam WHERE dl.id_lap = '$row->id_lapangan' ORDER BY jam_mulai ASC");
          while($r = mliSelect($a))
          {
          ?>
          
            <div class="center-align col s6"><?=substr($r->jam_mulai,0,5).' - '.substr($r->jam_berakhir,0,5)?></div>
            <div class="center-align col s6">
              <?php
                  $booking = '<a class="waves-effect waves-light btn disabled status cyan darken-2" >SUDAH DIPESAN</a>';
                  if($r->jam == "")
                  {
                    $booking = '<a class="waves-effect waves-light btn status statuson pesan modal-trigger" href="#modalLama" id="'.$r->id_detil_lapangan.'" >PESAN</a>';
                  }
                  echo $booking;
               ?>
            </div>
          
          <?php } ?>
          <table class="bordered" id="jam_lapangan">
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
      <?php } ?>
   </div>
    </div>
  </div>
</div>
<!--
  <div class="col s6">
    <div class="card center-align" style="margin-bottom:20px;">
      <div class="card-title tit-top">
        Daftar Transaksi
      </div>

      <div class="card-content">
      <div class="row">
        <div class="col s3"></div>
        <div class="col s6">
            <label for="birthdate">Peminjaman untuk tanggal</label>
            <input id="untuk" readonly type="text" class="datepicker center-align" value="
            <?php
            if(isset($_SESSION['tanggal']))
            {
              echo $_SESSION['tanggal'];
            }
            else{
              echo date('j F, Y');
            }

            ?>
            ">
        </div>
        <div class="col s3"></div>
      </div>

      <div class="row">
        <div class="col s3"></div>
        <div class="col s6">
          <table class="bordered" id="sementara">
            <thead >
                <tr>
                    <th data-field="id" class="center-align">Jam</th>
                    <th data-field="name" class="center-align">Batalkan</th>
                </tr>
            </thead>
            <tbody>
              <?php
              /*
              $query = mysqli_query($con,"SELECT sementara.id,dl.jam_mulai,dl.jam_berakhir FROM  sementara INNER JOIN detil_lapangans AS dl ON sementara.id_detil_lap = dl.id_detil_lapangan WHERE sementara.tanggal = '$_SESSION[tanggal]'");
              while ($row = mysqli_fetch_array($query)) {
                  $btn = '<a class="btn-floating btn-small waves-effect waves-light red center-align" id="'.$row[0].'"><i class="material-icons">delete_forever</i></a>';
                  echo '
                  <tr>
                    <td class="center-align"><a class="waves-effect waves-light btn status center-align">'.substr($row[1],0,5).' - '.substr($row[2],0,5).'</a></td>
                    <td class="center-align">'.$btn.'</td>
                  </tr>
                  ';
              }*/
              ?>
                <tr>

                </tr>
            </tbody>
         </table>
         <br>
         <div class="row">
          <div class="col s12 right-align" >
            <a class="waves-effect waves-light btn "><i class="large material-icons right">chevron_right</i> PEMBAYARAN</a>
          </div>
        </div>

        <div class="col s3"></div>

      </div>

    </div>

    </div>
  </div>

</div>
  -->

  <div id="modalLama" class="modal modal-fixed-footer">
      <div class="modal-content">
          <h4 class="center-align">Durasi Main</h4>
          <div class="input-field col s12">
            <select id="durasi">
                <option value="1" selected>1 Jam</option>
                <option value="2">2 Jam</option>
                <option value="3">3 Jam</option>
                <option value="4">4 Jam</option>
            </select>
            <label>Pilih Durasi Jam</label>
        </div>
      </div>
      <div class="modal-footer">
          <a href="#!" class="waves-effect waves-light btn" id="pembayaran"><i class="large material-icons right">chevron_right</i>Pembayaran</a>
      </div>
  </div>
