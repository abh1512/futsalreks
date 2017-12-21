<?php
require_once "lib/settings.php";
require_once "lib/function.php";

$halaman=isset($_GET['pag'])?$_GET['pag'].".php":"home.php";
/*$aktif=array('registrasi'=>"",'dashboard'=>"",'lapangan'=>"",'transaksi'=>"",'laporan'=>"");
if(isset($_GET['halaman'])){
	$aktif[$_GET['halaman']]='active';
	if($_GET['halaman']=="logout"){
	 unset($_SESSION['id_pengguna']);
	 session_destroy();
	 telahLogin();
 }
}else{
	$aktif['dashboard']='active';
}
*/
 ?>
<!DOCTYPE html>
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
                            <li class="hide-on-med-and-down"><a href="regis.php"  class="dropdown-right show-on-large">Daftar</a></li>
                        </ul>

                        <ul id="dropdown1" class="dropdown-content notification-dropdown">
                          <li><a class="waves-effect waves-light modal-trigger" href="#modal1">Masuk</a></li>
                          <li><a href="regis.php">Daftar</a></li>
                        </ul>

                        <ul id="dropdown2" class="dropdown-content notifications-dropdown" >
                            <li class="notificatoins-dropdown-container" >
                                <ul>
                                  <li><a class="waves-effect waves-light modal-trigger" href="#modal1">Masuk</a></li>
                                  <li><a href="regis.php">Daftar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <main class="mn-inner ">
                    <?php
				          if (file_exists($halaman))
					             include $halaman;
			          ?>
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
			          <h5 class="">Settings</h5>
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
			      Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
			      </div>
			    </div>
			  </footer>
        <div class="left-sidebar-hover"></div>


        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/js/alpha.min.js"></script>
        <script src="assets/js/pages/ui-carousel.js"></script>
				<script src="assets/js/pages/form_elements.js"></script>

    </body>
</html>
