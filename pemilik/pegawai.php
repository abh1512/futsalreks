
<html lang="en">
   
    <body>

      <?php
        include('header.php');
       ?>

            <main class="mn-inner">
              <div class="col s12">
                <p>PEGAWAI</p>
              <div class="card">
                <div class="card-content">
                    <table class="bordered">
                      <thead>
                        <tr>
                            <th>No</th>
                            <th>No KTP Pegawai</th>
                            <th>Nama Pegawai</th>
                            <th>Lokasi Bekerja</th>
                            <th>Email Pegawai</th>
                            <th>Alamat Pegawai</th>
                            <th>No Hp Pegawai</th>

                          </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <?php
                          $no=0;
                          $querypeg = mysqli_query($con,"SELECT pegawais.no_ktp,pegawais.nama,gedungs.nama,pegawais.email,pegawais.alamat,pegawais.no_hp FROM `pegawais` join gedungs on pegawais.id_gedung = gedungs.id_gedung WHERE pegawais.no_ktp_pemilik='$id_pemilik'");
                          while($r=mysqli_fetch_array($querypeg))
                          {
                            $no++;
                           ?>
                                <tr>
                                  <td><input type="hidden" name='id_unesa' value=""><?php echo $no; ?></td>
                                  <td><input type="hidden" name='id_unesa' value=""><?php echo $r[0]; ?></td>
                                  <td><input type="hidden" name='nama' value=""><?php echo $r[1]; ?></td>
                                  <td><input type="hidden" name='status' value=""><?php echo $r[2]; ?></td>
                                  <td><input type="hidden" name='status' value=""><?php echo $r[3]; ?></td>
                                  <td><input type="hidden" name='status' value=""><?php echo $r[4]; ?></td>
                                  <td><input type="hidden" name='status' value=""><?php echo $r[5]; ?></td>
                                </tr>
                            <?php } ?>
                        </tr>
                        </tbody>
                      </table>
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
        <script src="file.js"></script>
    </body>


</html>
