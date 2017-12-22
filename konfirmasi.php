<div class="row ">
  <div class="col s12">
    <div class="card" style="width:50%; margin-left:auto; margin-right:auto;">
      <div class="card-title tit-top center-align">
        Daftar pesanan
      </div>
    <div class="card-content">
      <div class="row">
        <div class="col s12">
          <div class="col s6">
            <p class="left-align">TANGGAL</p>
          </div>
          <div class="col s6">
            <p class="right-align"><?=$_SESSION['tanggal']?></p>
          </div>
        </div>
        <div class="col s12">
          <div class="col s6">
            <p class="left-align">TEMPAT</p>
          </div>
          <div class="col s6">
            <p class="right-align"><?=$_SESSION['ng']?></p>
          </div>
        </div>
        <div class="col s12">
          <div class="col s6">
            <p class="left-align">LAPANGAN</p>
          </div>
          <div class="col s6">
            <p class="right-align"><?=$_SESSION['nl']?></p>
          </div>
        </div>
        <div class="col s12">
          <div class="col s6">
            <p class="left-align">DURASI</p>
          </div>
          <div class="col s6">
            <p class="right-align"><?=$_SESSION['durasi']?> Jam</p>
          </div>
        </div>
        <div class="col s12">
          <div class="col s6">
            <p class="left-align">WAKTU</p>
          </div>
          <div class="col s6">
            <p class="right-align"><?=substr($_SESSION['jm'],0,5)?> - <?php

            $timestamp = strtotime('$_SESSION[jm]') + 60*60*$_SESSION['durasi'];
            $time = date('H:i', $timestamp);
            echo $time;//11:09
            ?></p>
          </div>
        </div>
        <div class="col s12">
          <br>
        </div>
        <div class="col s12">
          <div class="col s6">
            <p class="left-align">LAPANGAN 1 X <?=$_SESSION['durasi']?> JAM @<?=$_SESSION['harga']?></p>
          </div>
          <div class="col s6">
            <p class="right-align">Rp. <?=$_SESSION['harga']*$_SESSION['durasi']?></p>
          </div>
        </div>
        <div class="col s12">
          <br>
        </div>
        <div class="col s12">
          <div class="col s6">
            <p class="left-align">TOTAL</p>
          </div>
          <div class="col s6">
            <p class="right-align">Rp. <?=$_SESSION['harga']*$_SESSION['durasi']?></p>
          </div>
        </div>
        <div class="col s12">
          <div class="col s6">
            <p class="left-align">Metode Pembayaran</p>
          </div>
          <div class="col s6">
            <p class="right-align">Transfer Bank</p>
          </div>
        </div>
      </div>
    <!--  <table >
        <tbody>
          <tr>
            <td class="left-align">21 Agustus 2017</td>
            <td class="right-align">08:00</td>
          </tr>
          <tr style="padding-top:-10px;">
            <td class="left-align">21 Agustus 2017</td>
            <td class="right-align">08:00</td>
          </tr>
          <tr>
            <td class="left-align"></td>
            <td class="right-align"></td>
          </tr>
          <tr>
            <td class="left-align">Tempat</td>
            <td class="right-align">Nama Tempat</td>
          </tr>
          <tr>
            <td class="left-align">Lapangan</td>
            <td class="right-align">Lapangan Ke</td>
          </tr>
          <tr></tr>
        </tbody>
      </table>-->
    </div>
    <div class="card-action">
      <a href="?pag=bayar" class="waves-effect waves-light btn right-align booking cyan darken-2" id="pembayaran"><i class="large material-icons right">chevron_right</i> Lanjut & Bayar</a>
    </div>
    </div>
  </div>
</div>
