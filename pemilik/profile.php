<!DOCTYPE html>

<html lang="en">

    <body>

            <?php
              include('header.php');
             ?>
            <main class="mn-inner">
              <div class="row">
                <div class="col s12 m12 l6">
                <div class="card">
                            <div class="card-content">
                                <span class="card-title">Ganti Profile</span><br>
                                <div class="row">
                                  <?php
                                  $query =mysqli_query($con,"SELECT nama, email, alamat, no_hp from pemiliks where no_ktp='$id_pemilik'");
                                    while($row2 = mysqli_fetch_array($query)){
                                   ?>
                                    <form class="col s12" id="ganti-nama" action="change_name.php" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                          <div class="col s3">
                                            <i class="medium material-icons">person_pin</i>
                                          </div>
                                            <div class="input-field col s10">
                                                <input  id="first_name" placeholder="<?php echo $row2['nama']; ?>" type="text" class="validate" name="myname">

                                            </div>
                                        </div>
                                        <div class="row" hidden>
                                            <div class="input-field col s6">
                                                <input id="email" value="<?php echo $row2['email']; ?>" type="email" class="validate" name="myemail" >

                                            </div>
                                        </div>
                                        <div class="row">
                                          <div class="col s3">
                                            <i class="medium material-icons">home</i>
                                          </div>
                                            <div class="input-field col s10">
                                                <input id="alamat" placeholder="<?php echo $row2['alamat']; ?>" type="text" class="validate" name="myalamat">
                                                <label for="email"></label>
                                            </div>
                                        </div>
                                        <div class="row">
                                          <div class="col s3">
                                            <i class="medium material-icons">phone</i>
                                          </div>
                                            <div class="input-field col s10">
                                                <input id="nohp" placeholder="<?php echo $row2['no_hp']; ?>" type="text" class="validate" name="mynumber">
                                                <label for="email"></label>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="file-field input-field col s12">
                                                <div class="btn teal lighten-1">
                                                    <span>Ganti Foto</span>
                                                    <input type="file" name="myfoto" accept="image/x-png,image/gif,image/jpeg">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" type="text" name="mynamefoto">
                                                </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                          <div class="file-field input-field col s12">
                                            <button class="waves-effect waves-light btn blue btn-block m36" id="" type="submit">GANTI</button>
                                                    </div>
                                            </div>
                                    </form><?php } ?>
                                </div>
                            </div>

                          </div>
                          <div class="card">
                          <div class="card-content">
                          <div class="row">

                            <form class="col s12" method="post" id="" action="change_pass.php">
                              <div class="row">
                                  <div class="input-field col s12">
                                      <input  placeholder="" type="password" class="validate" name="mypasslama">
                                      <label for="password">Password Lama</label>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="input-field col s12">
                                      <input  placeholder="" type="password" class="validate" name="mypassbaru">
                                      <label for="password">Password Baru</label>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="input-field col s12">
                                      <input  placeholder="" type="password" class="validate" name="mypassbaruconf">
                                      <label for="password">Confirm Password</label>
                                  </div>
                              </div>
                              <?php

                              $queryemail = mysqli_query($con,"SELECT email FROM pemiliks where no_ktp='$id_pemilik'");
                              $ketemu = mysqli_fetch_array($queryemail);
                              ?>
                              <div class="row" hidden>
                                  <div class="input-field col s12">
                                      <input  placeholder="" type="text" class="validate" name="myacc" value="<?php echo $ketemu['email']; ?>" readonly>
                                  </div>
                              </div>
                              <button class="waves-effect waves-light btn blue btn-block m36" id="" type="submit"><i class="material-icons left">cloud</i>GANTI</button>
                            </form>
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
        <script src="file.js"></script>
    </body>
    <script>

    </script>
</html>
