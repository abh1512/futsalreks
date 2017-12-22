<!DOCTYPE html>

<html lang="en">

    <body>

            <?php
              include('header.php');
             ?>
            <main class="mn-inner">
                <div class="row">
                  <div class="row no-m-t no-m-b">
                    <div class="col s12 m12 16">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title center">Tambah Saldo</span><br>
                                <div class="row">
                                  <form class="col s12" method="post" action="isi_saldo.php" enctype="multipart/form-data">
                                    <div class="row">
                                      <div class="col s2">
                                        <i class="medium material-icons">email</i>
                                      </div>
                                      <?php
                                        $punyasaya = mysqli_query($con,"SELECT * FROM pemiliks WHERE no_ktp='$id_pemilik'");
                                        while($row2 = mysqli_fetch_array($punyasaya))
                                      {
                                       ?>
                                      <div class="input-field col s4">
                                          <input class="" id="" type="text" value="<?=$row2['no_ktp']; ?>" name="idpemlik">

                                      </div>

                                    </div>
                                    <div class="row">
                                      <div class="col s2">
                                        <i class="medium material-icons">person_pin</i>
                                      </div>

                                      <div class="input-field col s4">
                                          <input disabled class="validate" id="nama" type="text" value="<?=$row2['nama'];} ?>">

                                      </div>

                                    </div>

                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="invoice" type="number" class="validate" value="" name="norek">
                                                <label for="jml">No Rekening</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="jml" type="number" class="validate" name="saldo">
                                                <label for="jml">Jumlah Transfer</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="bank" type="text" class="validate" name="namabank">
                                                <label for="bank">Bank Tujuan</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="pengirim" type="text" class="validate" name="pengirim">
                                                <label for="pengirim">Pengirim</label>
                                            </div>
                                        </div>
                  										<div class="row">
                  											<div class="file-field input-field col s6">
                                                                  <div class="btn teal lighten-1">
                                                                      <span><i class="small material-icons">launch</i> Upload Bukti</span>
                                                                      <input type="file" name="gambar">
                                                                  </div>
                                                                  <div class="file-path-wrapper">
                                                                      <input class="file-path validate" type="text">
                                                                  </div>
                                                              </div>
                  										</div>
                                      <button class="btn waves-effect waves-light right green" type="submit" name="action">Submit
                                          <i class="material-icons right">send</i>
                                      </button>
                                    </form>
                                </div>
                            </div>
                        </div>
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
		    <script src="../assets/js/pages/form_elements.js"></script>

    </body>
</html>
