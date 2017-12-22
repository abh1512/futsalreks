

<!-- <html lang="en">
    <head>

        Title
        <title>Dashboard Pemilik</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />

        Styles
        <link type="text/css" rel="stylesheet" href="../assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">
        <link href="../assets/plugins/nvd3/nv.d3.min.css" rel="stylesheet">


        Theme Styles
        <link href="../assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/css/custom.css" rel="stylesheet" type="text/css"/>


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>

            <?php
              include('header.php');
              include '../lib/function.php';
             ?>
            <main class="mn-inner">
                <div class="row">
                  <div class="row no-m-t no-m-b">
                                      <div class="col s12 m6 l6">
                                          <div class="card stats-card">
                                              <div class="card-content">
                                                  <div class="card-options">
                                                    <ul>
                                                        <li class="red-text"><span class="card-title">This Week</span></li>
                                                    </ul>
                                                  </div>
                                                  <?php
                                                  $querincome = mysqli_query($con,"SELECT sum(transaksis.total_bayar) as income,lapangans.nama,gedungs.nama,pemiliks.no_ktp from transaksis join lapangans on transaksis.id_lapangan=lapangans.id_lapangan JOIN gedungs on lapangans.id_gedung=gedungs.id_gedung join pemiliks on gedungs.id_pemilik=pemiliks.no_ktp where pemiliks.no_ktp='$id_pemilik' AND transaksis.status='belum'");
                                                  $r = mysqli_fetch_array($querincome);
                                                   ?>
                                                  <span class="stats-counter">Rp <span class="counter"><?php echo $r['income']; ?></span><small>Income</small></span>

                                              </div>
                                              <div class="divider"></div>
                                              <?php
                                              $queritrans = mysqli_query($con,"SELECT count(transaksis.id_transaksi) as transaksiku from transaksis join lapangans on transaksis.id_lapangan=lapangans.id_lapangan JOIN gedungs on lapangans.id_gedung=gedungs.id_gedung join pemiliks on gedungs.id_pemilik=pemiliks.no_ktp where pemiliks.no_ktp='$id_pemilik'");
                                              $ro = mysqli_fetch_array($queritrans);
                                              ?>
                                              <div class="card-content">
                                                  <span class="stats-counter"><span class="counter"><?php echo $ro['transaksiku']; ?></span><small>Transaksi</small></span>
                                              </div>

                                              <div id="sparkline-bar"></div>
                                          </div>
                                      </div>
                                      <div class="col s12 m12 l6">
                                        <div class="card server-card">
                                          <div class="card-content">
                                            <span class="card-title">Tentang <a href="#" class="right"><i class="material-icons">edit</i></a></span>
                                                <div class="server-load row">
                                                  <div class="server-stat col s4">
                                                      <p>Jl. Manyar Jaya Praja 1 No.47, Menur Pumpungan, Sukolilo</p>
                                                      <span>Lokasi</span>
                                                  </div>


                                                    <div class="server-stat col s4">
                                                        <p>0822-3133-3777</p>
                                                        <span>No. Telp</span>
                                                    </div>

                                                    <div class="server-stat col s4">
                                                        <p>@gmail.com</p>
                                                        <span>E-mail</span>
                                                    </div>

                                                </div>
												<div>

												</div>

                                          </div>
                                      </div>
                                      </div>

                                  </div>
                    <div class="col s12 m6 l6">


                      <div class="card">
                          <div class="card-content">
                              <span class="card-title">Penyewa<small></small></span>
                              <div>
                                  <canvas id="chart2" width="400" height="270"></canvas>
                              </div>
                          </div>
                      </div>
                    </div>
                      <!--<div class="card">
                          <div class="card-content">
                              <span class="card-title">Payment Method<small></small></span>
                              <div>
                                  <canvas id="chart4" width="400" height="200"></canvas>
                              </div>
                          </div>
                      </div>

                      <div class="card">
                          <div class="card-content">
                              <span class="card-title">Houry Gross Sales Amount<small></small></span>
                              <div>
                                  <canvas id="chart1" width="400" height="270"></canvas>
                              </div>
                          </div>
                      </div>

                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Radar Chart<small>Chart.js</small></span>
                                <div>
                                    <canvas id="chart3" width="400" height="200"></canvas>
                                </div>
                            </div>
                        </div>-->

							<div class="col s12 m12 l6">
                                        <div class="card server-card">
                                          <div class="card-content">
                                            <span class="card-title">Gallery <a href="#" class="right"><i class="material-icons">add</i></a><a href="#" class="right"><i class="material-icons">edit</i></a></span>
                                                <div class="server-load row">
													<div class="card col s4">
														<div class="card-image waves-effect waves-block waves-light">
															<img class="activator" src="assets/images/card-image2.jpg" alt="">
														</div>

														<div class="card-reveal">
															<span class="card-title">Card Title<i class="material-icons right">close</i></span>
															<p>Here is some more information about this product that is only revealed once clicked on.</p>
														</div>
													</div>
													<div class="card col s4">
														<div class="card-image waves-effect waves-block waves-light">
															<img class="activator" src="assets/images/card-image2.jpg" alt="">
														</div>

														<div class="card-reveal">
															<span class="card-title">Card Title<i class="material-icons right">close</i></span>
															<p>Here is some more information about this product that is only revealed once clicked on.</p>
														</div>
													</div>


                                                    <div class="card col s4">
														<div class="card-image waves-effect waves-block waves-light">
															<img class="activator" src="assets/images/card-image2.jpg" alt="">
														</div>

														<div class="card-reveal">
															<span class="card-title">Card Title<i class="material-icons right">close</i></span>
															<p>Here is some more information about this product that is only revealed once clicked on.</p>
														</div>
													</div>

													<div class="card col s4">
														<div class="card-image waves-effect waves-block waves-light">
															<img class="activator" src="assets/images/card-image2.jpg" alt="">
														</div>

														<div class="card-reveal">
															<span class="card-title">Card Title<i class="material-icons right">close</i></span>
															<p>Here is some more information about this product that is only revealed once clicked on.</p>
														</div>
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
        <!--script src="../assets/js/pages/charts.js"></script-->

        <script type="text/javascript">
        var bulan_off = [];
        var jumlah_off = [];
        var jumlah_on = [];
        <?php
          $er3=mysqli_query($con,"SELECT count(transaksis.id_transaksi) as transaksiku from transaksis join lapangans on transaksis.id_lapangan=lapangans.id_lapangan JOIN gedungs on lapangans.id_gedung=gedungs.id_gedung join pemiliks on gedungs.id_pemilik=pemiliks.no_ktp where pemiliks.no_ktp='$id_pemilik'");
           while($r3=mliSelect($er3)){
          ?>;
          jumlah_on.push(<?=$r3->transaksiku?>);
          <?php
           }
           ?>
          <?php
         $er=mysqli_query($con,"SELECT count(transaksis.id_transaksi) as transaksiku from transaksis join lapangans on transaksis.id_lapangan=lapangans.id_lapangan JOIN gedungs on lapangans.id_gedung=gedungs.id_gedung join pemiliks on gedungs.id_pemilik=pemiliks.no_ktp where pemiliks.no_ktp='$id_pemilik'");
          while($r=mliSelect($er)){
            ?>
             bulan_off.push("<?=$r->transaksiku?>");
             jumlah_off.push(<?=$r->transaksiku?>);
            <?php
             }
             ?>
        var data2 = {
            labels: bulan_off,
            datasets: [{
               label: "Offline Transaction",
               fillColor: "#00ACC1",
               strokeColor: "transparent",
               highlightFill: '#9575CD',
               highlightStroke: '#B3B3B3',
               data:jumlah_off,
               },
               {
               label: 'Online Transaction',
               fillColor: '#9575CD',
               strokeColor: 'transparent',
               highlightFill: '#9575CD',
               highlightStroke: '#B3B3B3',
               data: jumlah_on,
               }]
        };
        var ctx2 = document.getElementById("chart2").getContext("2d");
        var chart2 = new Chart(ctx2).Bar(data2, {
            scaleBeginAtZero : true,
            scaleShowGridLines : true,
            scaleGridLineColor : "rgba(0,0,0,.05)",
            scaleGridLineWidth : 1,
            scaleShowHorizontalLines: true,
            scaleShowVerticalLines: false,
            barShowStroke : true,
            barStrokeWidth : 2,
            barDatasetSpacing : 1,
            legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
            responsive: true,
            scaleOverride: true,
            scaleSteps: 6,
            scaleStepWidth: 15,
            scaleStartValue: 0,
            barValueSpacing: 20,
            tooltipCornerRadius: 2,
            legend:{
              display: true
            }
        });

        </script>
    </body>
</html>
