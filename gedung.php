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

  <div class="col s6">
    <div class="card center-align">
      <div class="card-title tit-top">
        Jadwal Lapangan
      </div>

      <div class="row">
        <div class="col s3"></div>
        <div class="col s6">
            <label for="birthdate">Pilih Tanggal</label>
            <input id="birthdate" type="text" class="datepicker center-align" value="<?= date('j F, Y');?>">
        </div>
        <div class="col s3"></div>
      </div>

      <?php while($row = mliSelect($query1)){ ?>
      <div class="row">
        <div class="col s2"></div>
        <div class="col s8" id="<?=$row->id_lapangan?>">
          <table class="bordered" id="jadwal">
            <tbody>
              <?php
              $a = mysqli_query($con,"SELECT dl.*,dt.* FROM detil_lapangans AS dl LEFT OUTER JOIN detil_transaksi AS dt ON dl.jam_mulai = dt.jam WHERE dl.id_lap = '$row->id_lapangan' ORDER BY jam_mulai ASC");
              while($r = mliSelect($a))
              {
              ?>
              <tr>
                <td class="center-align"><?=substr($r->jam_mulai,0,5).' - '.substr($r->jam_berakhir,0,5)?></td>
                <td class="center-align">
                  <?php
                      $booking = '<a class="waves-effect waves-light btn disabled status cyan darken-2" >SUDAH DIPESAN</a>';
                      if($r->jam == "")
                      {
                        $booking = '<a class="waves-effect waves-light btn status pesan" >PESAN</a>';
                      }
                      echo $booking;
                   ?>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <div class="col s2"></div>
      </div>
      <?php } ?>

    </div>
  </div>

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
            <input id="birthdate" readonly type="text" class="datepicker center-align" value="<?= date('j F, Y');?>">
        </div>
        <div class="col s3"></div>
      </div>

      <div class="row">
        <div class="col s3"></div>
        <div class="col s6">
          <table class="bordered">
            <thead >
                <tr>
                    <th data-field="id" class="center-align">Jam</th>
                    <th data-field="name" class="center-align">Batalkan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="center-align"><a class="waves-effect waves-light btn status center-align">01:00 - 02.00</a></td>
                    <td class="center-align">
                      <a class="btn-floating btn-small waves-effect waves-light red center-align"><i class="material-icons">delete_forever</i></a>
                    </td>
                </tr>
                <tr>
                    <td class="center-align"><a class="waves-effect waves-light btn status center-align">01:00 - 02.00</a></td>
                    <td class="center-align">
                      <a class="btn-floating btn-small waves-effect waves-light red center-align"><i class="material-icons">delete_forever</i></a>
                    </td>
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
