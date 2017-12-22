<?php
include "lib/settings.php";
include "lib/function.php";

//$cus = $_SESSION['email'];

$str="SELECT * FROM customers WHERE email='alenheriyanto@mhs.unesa.ac.id'";
$que=mysqli_query($con,$str);

$r=mysqli_fetch_array($que);

?>
<html lang="en">
    <head>

        <!-- Title -->
        <title>FutsalRek</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />

        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="assets/plugins/metrojs/MetroJs.min.css" rel="stylesheet">
        <link href="assets/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet">

        <link href="assets/plugins/datatables/css/jquery.dataTables.min.css" rel="stylesheet">


        <!-- Theme Styles -->
        <link href="assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body class="grey lighten-5">
        <div class="loader-bg"></div>
        <div class="loader">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-teal lighten-1">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mn-content ">
          <div id="modal1" class="modal">
              <div class="modal-content">
                  <h4>Modal Header</h4>
                  <p>A bunch of text</p>
              </div>
              <div class="modal-footer">
                  <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
              </div>
          </div>
            <header class="mn-header" >
                <nav class="cyan darken-2" >
                    <div class="nav-wrapper row">

                        <div class="header-title col s3 m3">
                            <span class="chapter-title">FutsalRek</span>
                        </div>

												<form class="left search col s6 hide-on-small-and-down">
                            <div class="input-field">
                                <input id="search" type="search" placeholder="Search" autocomplete="off">
                                <label for="search"><i class="material-icons search-icon">search</i></label>
                            </div>
                            <a href="javascript: void(0)" class="close-search"><i class="material-icons">close</i></a>
                        </form>

                        <ul class="right col s9 m3 nav-right-menu">
                            <li class="hide-on-large-only"><a class="dropdown-button" href="#!" data-beloworigin="true" data-activates="dropdown2"><i class="material-icons right">more_vert</i></a></li>
                            <li class="hide-on-med-and-down"><a class="waves-effect waves-light modal-trigger" href="#modal1">Masuk</a></li>
                            <li class="hide-on-med-and-down"><a href="#!"  class="dropdown-right show-on-large" id="daftar">Daftar</a></li>
                        </ul>

                        <ul id="dropdown1" class="dropdown-content notification-dropdown">
                          <li><a class="waves-effect waves-light modal-trigger" href="#modal1">Masuk</a></li>
                          <li><a href="regis.php">Daftar</a></li>
                        </ul>

                        <ul id="dropdown2" class="dropdown-content notifications-dropdown" >
                            <li class="notificatoins-dropdown-container" >
                                <ul>
                                  <li><a class="waves-effect waves-light modal-trigger" href="#modal1">Masuk</a></li>
                                  <li><a href="#!" id="daftar">Daftar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <main class="mn-inner ">
              <div class="row">
                    <div class="col l1"></div>

                    <div class="col s10 m10 l10">
                        <div class="card card-transparent">
                            <div class="card-content">
                                <span class="card-title"><i class="material-icons" >import_export</i>Transaksi</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s3">
                                <ul class="tabs tab-demo z-depth-1">
                                    <li class="tab col s3"><a href="#tabpane1">Tagihan</a></li>
                                    <li class="tab col s3"><a href="#tabpane2">History</a></li>
                                </ul>
                            </div>
                            <div id="tabpane1" class="col s12">
                              <div class="row">
                                <div class="card col l12">
                                  <div class="card horizontal">
                                    <div class="card-image">
                                        <img src="assets/images/card-image6.jpg">
                                    </div>
                                    <div class="card-stacked">
                                        <div class="card-content">
                                            <h4>Kebraon Sport Center<span class="new badge" data-badge-caption="">Rp. 200.000</span></h4>
                                            <h5>9 Oktober 2017 - 19.00 - 2 jam</h5>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="tabpane2" class="col s12">
                              <div class="row">
                                <div class="card col l12">
                                  <div class="card horizontal">
                                    <div class="card-image">
                                        <img src="assets/images/card-image6.jpg">
                                    </div>
                                    <div class="card-stacked">
                                        <div class="card-content">
                                            <h4>Kebraon Sport Center<span class="new badge" data-badge-caption="">Rp. 200.000</span></h4>
                                            <h5>9 Oktober 2017 - 19.00 - 2 jam</h5>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="card col l12">
                                  <div class="card horizontal">
                                    <div class="card-image">
                                        <img src="assets/images/card-image6.jpg">
                                    </div>
                                    <div class="card-stacked">
                                        <div class="card-content">
                                            <h4>Kebraon Sport Center<span class="new badge" data-badge-caption="">Rp. 200.000</span></h4>
                                            <h5>9 Oktober 2017 - 19.00 - 2 jam</h5>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="card col l12">
                                  <div class="card horizontal">
                                    <div class="card-image">
                                        <img src="assets/images/card-image6.jpg">
                                    </div>
                                    <div class="card-stacked">
                                        <div class="card-content">
                                            <h4>Kebraon Sport Center<span class="new badge" data-badge-caption="">Rp. 200.000</span></h4>
                                            <h5>9 Oktober 2017 - 19.00 - 2 jam</h5>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l1"></div>
                </div>
                    <!--?php
				          if (file_exists($halaman))
					             include $halaman;
			          ?-->
            </main>


        </div>

				<footer class="page-footer grey lighten-4 atas">
			    <div class="container">
			      <div class="row">
			        <div class="col l6 s12">
			          <h5 class="">FutsalRek</h5>
								<ul>
			            <li><a class="" href="#!">Tentang Kami</a></li>
			            <li><a class="" href="#!">Cara Booking</a></li>
			            <li><a class="" href="#!">Cara Daftar Lapangan</a></li>
			            <li><a class="" href="#!">Hubungi Kami</a></li>
			          </ul>

			        </div>
			        <div class="col l6 s12">
			          <h5 class="">Follow Us</h5>
			          <ul>
			            <li><a class="" href="#!">Link 1</a></li>
			            <li><a class="" href="#!">Link 2</a></li>
			            <li><a class="" href="#!">Link 3</a></li>
			            <li><a class="" href="#!">Link 4</a></li>
			          </ul>
			        </div>
			      </div>
			    </div>
			    <div class="footer-copyright">
			      <div class="container">
			      Made by <a class="orange-text text-lighten-3" href="#!">Materialize</a>
			      </div>
			    </div>
			  </footer>
        <div class="left-sidebar-hover"></div>


        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
        <script src="assets/js/alpha.min.js"></script>
        <script src="assets/js/pages/ui-carousel.js"></script>
				<script src="assets/js/pages/form_elements.js"></script>

        <script src="assets/js/custom.js"></script>


    </body>
</html>
