<!DOCTYPE html>

<html lang="en">

    <body>

            <?php
              include('header.php');
             ?>
            <main class="mn-inner">
                <div class="row">
                  <div class="row no-m-t no-m-b">
                    <div class="col s12 m6 l6">
                      <div class="card stats-card">
                        <div class="card-content">
                          <div class="card-options">
                            <ul>
                              <li></li>
                              <li class="red-text"><span class="card-title">This Week</span></li>
                            </ul>
                          </div>
                              <br>
                              <?php
                                $mysaldo = mysqli_query($con,"SELECT saldo FROM topups where id_pemilik='$id_pemilik'");
                                while ($r=mysqli_fetch_array($mysaldo)) {
                               ?>
                              <span class="stats-counter">Rp<span class="counter"> <?php echo $r['saldo'];} ?></span><small>Saldo Tersedia</small></span>
                          </div>
                          <div class="card-content">
                              <a class="waves-effect waves-light btn" href="tambah_saldo.php"><i class="material-icons left">cloud</i>Isi Saldo</a>
                          </div>
                          <div class="divider"></div>
                      </div>
                    </div>
                    <div class="col s12 m12 l6">
                      <div class="card server-card">
                        <div class="card-content">
                          <span class="card-title">Tentang</span>
                            <div class="server-load row">
                              <div class="server-stat col s4">
                                <p>JL. Kebraon no. 31 Karang Pilang</p>
                                <span>Lokasi</span>
                              </div>
                              <div class="server-stat col s4">
                                <p>085789653265</p>
                                <span>No. Telp</span>
                              </div>
                              <div class="server-stat col s4">
                                <p>KSC@gmail.com</p>
                                <span>E-mail</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col s12">
                      <p>Riwayat Saldo</p>
                    <div class="card">
                      <div class="card-content">
                          <table class="bordered">
                            <thead>
                              <tr>
                                  <th>No</th>
                                  <th>No. Rekening</th>
                                  <th>Bank Yang Dituju</th>
                                  <th>Pengirim</th>
                                  <th>Saldo Yang Diisi</th>
                                  <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <?php
                                $no=0;
                                $querybank = mysqli_query($con,"SELECT * FROM banks where id_pemilik='$id_pemilik' order by created_at desc");
                                while($r=mysqli_fetch_array($querybank))
                                {
                                  $no++;
                                 ?>
                                      <tr>
                                        <td><input type="hidden" name='id_unesa' value=""><?php echo $no; ?></td>
                                        <td><input type="hidden" name='id_unesa' value=""><?php echo $r['no_rek']; ?></td>
                                        <td><input type="hidden" name='nama' value=""><?php echo $r['nama_bank']; ?></td>
                                        <td><input type="hidden" name='status' value=""><?php echo $r['nama_rekening']; ?></td>
                                        <td><input type="hidden" name='status' value=""><?php echo $r['saldo']; ?></td>
                                        <td><input type="hidden" name='status' value=""><?php echo $r['created_at']; ?></td>
                                      </tr>
                                  <?php } ?>
                              </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>

                  </div>

            </main>

        </div>
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

    </body>
</html>
