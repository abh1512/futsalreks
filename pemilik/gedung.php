
<html lang="en">
    <head>


    </head>
    <body>

      <?php
        include('header.php');
       ?>

            <main class="mn-inner">

              <div class="row">
                <div class="col s12 m12 l6">
                    <div class="card stats-card">
                        <div class="card-content">
                          <span class="card-title">GEDUNG</span>
                            <a class="btn btn-block blue waves-effect waves-light modal-trigger" href="#modal1"><i class="material-icons left">add</i>SUBMIT</a>
                        </div>
                        <div id="sparkline-line"></div>
                    </div>
                </div>
                <div class="modal modal-fixed-footer col s12 m12 l6" id="modal1">
                  <div class="card">
                    <div class="card-content">
                      <span class="card-title">Input Gedung</span><br>
                        <div class="row">
                          <form class="col s12" id="lebokno" method="post" action="insert_gedung.php" enctype="multipart/form-data">
                            <div class="row">
                              <div class="input-field col s6">
                                <input id="first_name" type="text" class="validate" name="namagedung">
                                <label for="first_name">Nama Gedung</label>
                              </div>
                            </div>
                            <div class="row">
                              <div class="input-field col s12">
                                <input id="alamat" type="text" class="validate" name="alamatgedung">
                                <label for="email">Alamat</label>
                              </div>
                            </div>
                            <div class="row">
                              <div class="input-field col s12">
                                <input type="checkbox" id="test6" name="lap[]" value="sintetis" checked="checked"/>
                                <label for="test6">Sintetis</label>
                              </div>
                            </div>
                            <div class="row">
                              <div class="input-field col s12">
                                <input type="checkbox" id="test7" name="lap[]" value="plester"  />
                                <label for="test7">Plester</label>
                              </div>
                            </div>
                            <div class="row">
                              <div class="input-field col s12">
                                <input type="checkbox" id="test8" name="lap[]" value="matras" />
                                <label for="test8">Matras</label>
                              </div>
                            </div>
                            <br>
                            <div class="row">
                              <div class="input-field col s12">
                                <select name="areaged">
                                  <option value="Surabaya Barat">Surabaya Barat</option>
                                  <option value="Surabaya Utara">Surabaya Utara</option>
                                  <option value="Surabaya Timur">Surabaya Timur</option>
                                  <option value="Surabaya Pusat">Surabaya Pusat</option>
                                  <option value="Surabaya Selatan">Surabaya Selatan</option>
                                </select>
                                  <label for="email">Letak</label>
                              </div>
                            </div>
                            <div class="row" hidden>
                              <div class="input-field col s12">
                                <input id="alamat" type="text" class="validate" name="idpemilik" value="<?php echo $id_pemilik; ?>" readonly>
                                <label for="email"></label>
                              </div>
                            </div>
                            <?php
                              $cari=mysqli_query($con,"SELECT * FROM gedungs WHERE id_pemilik = '$_SESSION[id_pengguna]'");
					                    $data=mysqli_num_rows($cari);
                              $newID = $_SESSION["id_pengguna"].$data+1;
                            ?>
                            <div class="row" hidden>
                              <div class="input-field col s12">
                                <input id="nohp" type="text" class="validate" name="idgedung" value="<?php echo $newID; ?>" readonly>
                                <label for="email"></label>
                              </div>
                            </div>
                            <?php
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
                                  $ref = create_random(10)
                              ?>
                            <div class="row" hidden>
                              <div class="input-field col s12">
                                <input id="nohp" type="text" class="validate" name="ref" value="<?php echo $ref; ?>" readonly>
                                <label for="email"></label>
                              </div>
                            </div>
                            <div class="row">
                              <div class="file-field input-field col s12">
                                <div class="btn teal lighten-1">
                                  <span>Foto</span>
                                  <input type="file" name="mygedung">
                                </div>
                                <div class="file-path-wrapper">
                                  <input class="file-path validate" type="text" name="mynamefoto">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="file-field input-field col s12">
                                <button class="waves-effect waves-light btn blue btn-block m36" type="submit"><i class="material-icons left">cloud</i>SUBMIT</button>
                              </div>
                            </div>

                          </form>

                        </div>
                      </div>
                    </div>
              </div>
              <!-- modal edit -->


<!-- end of edit modal-->



            </div>

            <div class="row">
              <div class="modal modal-fixed-footer col s12 m12 l6" id="editModal">
                <div class="card">
                            <div class="card-content">
                                <span class="card-title">Edit Gedung</span><br>
                                <div class="row">
                                  <?php
                                      /*$id = $_GET['id_gedung'];
                                       $cari=mysqli_query($con,"select * from gedungs where id_gedung='$id'");
                                       $baris=mysqli_fetch_array($cari);
                                       $nama=$baris['nama'];
                                       $alamat=$baris['alamat'];
                                   */
                                   ?>


                                    <form class="col s12" method="post" id="haha" action="update_ged.php" enctype="multipart/form-data">
                                        <div class="row" hidden>
                                            <div class="input-field col s6">
                                              <span> ID gedung </span>
                                                <input id="first_name" type="text" class="validate" name="idgedung2" value="">

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                              <span> Nama gedung </span>
                                                <input id="first_name" type="text" class="validate" name="namagedung2" value="">

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <span> Alamat </span>
                                                <input id="alamat" type="text" class="validate" name="alamatgedung2" value="">

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="checkbox" id="test10" name="lap2[]" value="sintetis" checked />
                                                <label for="test10">Sintetis</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="checkbox" id="test11" name="lap2[]" value="plester"  />
                                                <label for="test11">Plester</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="checkbox" id="test12" name="lap2[]" value="matras" />
                                                <label for="test12">Matras</label>
                                            </div>
                                        </div>
                                        <br/>
                                        <div class="row">
                                          <div class="input-field col s12">
                                            <select name="areaged2">
                                              <option value="Surabaya Barat">Surabaya Barat</option>
                                              <option value="Surabaya Utara">Surabaya Utara</option>
                                              <option value="Surabaya Timur">Surabaya Timur</option>
                                              <option value="Surabaya Pusat">Surabaya Pusat</option>
                                              <option value="Surabaya Selatan">Surabaya Selatan</option>
                                            </select>
                                              <label for="email">Letak</label>
                                          </div>
                                        </div>
                                        <div class="row" hidden>
                                            <div class="input-field col s12">
                                                <input id="alamat" type="text" class="validate" name="idpemilik2" value="" readonly>
                                                <label for="email"></label>
                                            </div>
                                        </div>




                                        <div class="row">
                                        <div class="file-field input-field col s12">
                                                <div class="btn teal lighten-1">
                                                    <span>Foto</span>
                                                    <input type="file" name="mygedung2">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" type="text" name="mynamefoto2">
                                                </div>
                                            </div>
                                          </div>

                                          <div class="row">
                                          <div class="file-field input-field col s12">
                                            <button class="waves-effect waves-light btn blue btn-block m36" id="" type="submit"><i class="material-icons left">cloud</i>EDIT</button>
                                              </div>
                                            </div>
                                    </form>
                                </div>
                            </div>
                          </div>
                </div>
            </div>
            <div class="row">
              <div class="modal modal-fixed-footer col s12 m12 l6" id="gambar2">
                <div class="card">
                  <div class="card-content">
                    <div class="row">
                      <form class="col s12" method="post" id="" action="" enctype="multipart/form-data">
                        <div class="row" >
                          <div class="input-field col s6">
                            <img id="foto-lihatt" src=""/>
                          </div>
                        </div>
                        <br/>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col s12">
                <p>Gedung</p>
              <div class="card">
                <div class="card-content">
                    <table class="bordered responsive-table">
                      <thead>
                        <tr>
                            <th>No</th>
                            <th>Id Gedung</th>
                            <th>Nama Gedung</th>
                            <th>Alamat Gedung</th>
                            <th>Kode Referensi</th>
                            <th>Area</th>
                            <th>Lihat Gedung</th>
                            <th>Jenis Lapangan Yang Ada</th>
                            <th>Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <?php
                          $no=0;
                          $querygedung = mysqli_query($con,"SELECT id_gedung,nama,alamat,kode_ref,area,foto,jenis_lap FROM gedungs where id_pemilik='$id_pemilik'");
                          while($r=mysqli_fetch_array($querygedung))
                          {
                            $no++;
                           ?>
                                <tr>
                                  <td><input type="hidden" name='id_unesa' value=""><?php echo $no; ?></td>
                                  <td><input type="hidden" name='id_unesa' value=""><?php echo $r['id_gedung']; ?></td>
                                  <td><input type="hidden" name='nama' value=""><?php echo $r['nama']; ?></td>
                                  <td><input type="hidden" name='status' value=""><?php echo $r['alamat']; ?></td>
                                  <td><input type="hidden" name='status' value=""><?php echo $r['kode_ref']; ?></td>
                                  <td><input type="hidden" name='status' value=""><?php echo $r['area']; ?></td>
                                  <td><input type="hidden" name='status' value=""><a class="btn btn-block blue waves-effect waves-light modal-trigger lihat" id="<?=$r['foto']?>" onclick="q('<?=$r['foto']?>');" href="#gambar2" ><i class="material-icons left">remove_red_eye</i>Lihat</a></td>
                                  <td><input type="hidden" name='status' value=""><?php echo $r['jenis_lap']; ?></td>
                                  <td><a class="small material-icons modal-trigger" href="#editModal" onclick="edit('<?=$r["id_gedung"]?>')">edit</a><a class="small material-icons" href="#">delete</a></td>
                                </tr>
                            <?php } ?>
                        </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

            </div>
            </main>
<?php
/*echo "
        <!-- Title -->
        <title>Dashboard Pemilik</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />

        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="../assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">
        <link href="../assets/plugins/nvd3/nv.d3.min.css" rel="stylesheet">
        <link href="../assets/plugins/products-comparison-table/css/style.css" rel="stylesheet">

        <link href="../assets/plugins/google-code-prettify/prettify.css" rel="stylesheet" type="text/css"/>

        <!-- Theme Styles -->
        <link href="../assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/css/custom.css" rel="stylesheet" type="text/css"/>
        <script src="../assets/plugins/products-comparison-table/js/modernizr.js"></script>


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->";*/

 ?>


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
        <script src="../assets/js/custom.js"></script>
    </body>


</html>
