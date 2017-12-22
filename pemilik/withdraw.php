<body>
<?php include ('header.php'); ?>

<main class="mn-inner">
  <div class="row">
    <div class="col s8 m12 l8">
      <div class="card">
        <div class="card-content">
          <div class="row">
            <p> *Sesuai dengan Syarat dan Ketentuan yang berlaku, Anda sebagai mitra kami dapat mengajukan dana dari kami </p>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-content">
          <div class="row">

            <form class="col s8" method="post" id="" action="ajukan_wd.php">
              <div class="row">
                <div class="input-field col s12">
                  <?php
                    $querincome = mysqli_query($con,"SELECT sum(transaksis.total_bayar) as income,lapangans.nama,gedungs.nama,pemiliks.no_ktp from transaksis join lapangans on transaksis.id_lapangan=lapangans.id_lapangan JOIN gedungs on lapangans.id_gedung=gedungs.id_gedung join pemiliks on gedungs.id_pemilik=pemiliks.no_ktp where pemiliks.no_ktp='$id_pemilik' AND transaksis.status='belum'");
                    $r = mysqli_fetch_array($querincome);
                  ?>
                  <span>Income</span>
                  <input  placeholder="" type="text" class="validate" name="myincome" value="<?=$r['income']?>" readonly>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input  placeholder="" type="number" class="validate" name="mypropose">
                  <label for="ajukan">Ajukan Dana</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <span>*Silahkan Masukan Password Anda Untuk Melanjutkan</span>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input  placeholder="" type="password" class="validate" name="mypasslama">
                  <label for="konf">Confirm Password</label>
                </div>
              </div>
              <div class="row" hidden>
                <div class="input-field col s12">
                  <input  placeholder="" type="number" class="validate" name="myktp" value="<?php echo $id_pemilik ?>">

                </div>
              </div>
              <button class="waves-effect waves-light btn blue btn-block m36" id="" type="submit"><i class="material-icons left"></i>AMBIL</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<div id="chartjs-tooltip"></div>
<div class="left-sidebar-hover"></div>

<!-- Javascripts -->
<script src="../assets/plugins/jquery/jquery-2.2.0.min.js"></script>
<script src="../assets/plugins/materialize/js/materialize.min.js"></script>
<script src="../assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
<script src="../assets/plugins/jquery-blockui/jquery.blockui.js"></script>
<script src="../assets/plugins/chart.js/chart.min.js"></script>
<script src="../assets/plugins/d3/d3.min.js"></script>
<script src="../assets/plugins/nvd3/nv.d3.min.js"></script>
<script src="../assets/plugins/flot/jquery.flot.min.js"></script>
<script src="../assets/plugins/flot/jquery.flot.time.min.js"></script>
<script src="../assets/plugins/flot/jquery.flot.symbol.min.js"></script>
<script src="../assets/plugins/flot/jquery.flot.resize.min.js"></script>
<script src="../assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="../assets/plugins/flot/jquery.flot.pie.min.js"></script>
<script src="../assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="../assets/js/alpha.min.js"></script>
<script src="../assets/js/pages/charts.js"></script>
<script src="../assets/plugins/google-code-prettify/prettify.js"></script>
<script src="../assets/js/pages/waves.js"></script>
<script src="../assets/plugins/sweetalert/sweetalert.min.js"></script>
<script src="file.js"></script>

</body>
