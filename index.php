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
        <link href="assets/plugins/google-code-prettify/prettify.css" rel="stylesheet" type="text/css"/>
         <link href="assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>

        <link href="assets/plugins/datatables/css/jquery.dataTables.min.css" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
        <link href="assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
        <link rel="stylesheet" href="assets/css/materialize-social.css">


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
    <body class="grey lighten-5" onload="emp();">
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
                  <h4>Masuk</h4>
                  <div class="row">
                    <form class="col s12" id="form_login">
                      <div class="row">
                        <div class="input-field col s12">
                          <input id="email" type="email" name="email" class="validate">
                          <label for="email" data-error="bukan email" data-success="">Email</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <input id="password" type="password" name="password" class="validate">
                          <label for="email">Password</label>
                        </div>
                      </div>
                    </form>
                  </div>
              </div>
              <div class="modal-footer">
                  <a href="#!" class=" modal-action  waves-effect waves-green btn-flat" id="tombol_login">Masuk</a>
              </div>
          </div>
          <header class="mn-header" >
              <nav class="cyan darken-2" >
                  <div class="nav-wrapper row">
                    <div class="header-title">
                      <a href="./"><img class="circle" src="assets/images/logo.png" style="margin:5px" height="50" width="50"/></a>
                    </div>
                      <div class="header-title col s3 m3">
                          <a href="./"><span class="chapter-title">FutsalRek</span></a>
                      </div>
                      <form class="left search col s5 hide-on-small-and-down">
                          <div class="input-field">
                              <input id="search" type="search" placeholder="Search" autocomplete="off">
                              <label for="search"><i class="material-icons search-icon">search</i></label>
                          </div>
                          <a href="javascript: void(0)" class="close-search"><i class="material-icons">close</i></a>
                      </form>

                      <ul class="right col s9 m3 nav-right-menu">
                          <li class="hide-on-large-only"><a class="dropdown-button" href="#!" data-beloworigin="true" data-activates="dropdown2"><i class="material-icons right">more_vert</i></a></li>
                          <?php
                          if(isset($_SESSION['email']) && isset($_SESSION['ha']))
                          {
                            $ha = $_SESSION['ha'];
                            if($ha == 'customer')
                            {

                            }
                            else {
                              echo '
                              <li class="hide-on-med-and-down"><a class="waves-effect waves-light modal-trigger" href="#modal1">Masuk</a></li>
                              <li class="hide-on-med-and-down"><a href="?pag=daftar"  class="dropdown-right show-on-large" id="daftar">Daftar</a></li>
                              ';
                            }
                          }
                          else {
                            echo '
                            <li class="hide-on-med-and-down"><a class="waves-effect waves-light modal-trigger" href="#modal1">Masuk</a></li>
                            <li class="hide-on-med-and-down"><a href="?pag=daftar"  class="dropdown-right show-on-large" id="daftar">Daftar</a></li>
                            ';
                          }
                          ?>

                      </ul>

                      <ul id="dropdown1" class="dropdown-content notification-dropdown">
                        <li><a class="waves-effect waves-light modal-trigger" href="#modal1">Masuk</a></li>
                        <li><a href="?pag=daftar">Daftar</a></li>
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
                    <?php
				          if (file_exists($halaman))
					             include $halaman;
			          ?>
            </main>


        </div>

        <footer class="page-footer grey lighten-4 atas">
			    <div class="container">
			      <div class="row">
              <div class="col s5">
                <div class="card horizontal">
                  <div class="card-image">
                      <img style="margin:25px" src="assets/images/logo.png">
                  </div>
                  <div class="card-stacked">
                      <div class="card-content">
                          <h5>FutsalRek</h5>
                          <ul>
          			            <li><a class="" href="#!">Tentang Kami</a></li>
          			            <li><a class="" href="#!">Cara Booking</a></li>
          			            <li><a class="" href="#!">Cara Daftar Lapangan</a></li>
          			            <li><a class="" href="#!">Hubungi Kami</a></li>
          			          </ul>
                      </div>
                  </div>
                </div>
              </div>
              <div class="col s1  "></div>
              <div class="col s6">
                <div class="card horizontal">
                  <div class="card-image">

                  </div>
                  <div class="card-stacked">
                      <div class="card-content">
                        <h5 class="">Follow Us</h5>


                          <a href="#" class="waves-effect waves-light social-icon btn facebook">
                              <i class="fa fa-facebook"></i></a>
                          <a href="#" class="waves-effect waves-light social-icon btn twitter">
                              <i class="fa fa-twitter"></i></a>
                          <a href="#" class="waves-effect waves-light social-icon btn google">
                              <i class="fa fa-google"></i></a>
                          <a href="#" class="waves-effect waves-light social-icon btn pinterest">
                              <i class="fa fa-pinterest"></i></a>
                          <a href="#" class="waves-effect waves-light social-icon btn instagram">
                              <i class="fa fa-instagram"></i></a>
                          <a href="#" class="waves-effect waves-light social-icon btn github">
                              <i class="fa fa-github"></i></a>
                          <a href="#" class="waves-effect waves-light social-icon btn linkedin">
                              <i class="fa fa-linkedin"></i></a>

                      </div>
                  </div>
                </div>
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
        <script src="assets/plugins/google-code-prettify/prettify.js"></script>
        <script src="assets/plugins/sweetalert/sweetalert.min.js"></script>
        <script src="assets/js/alpha.min.js"></script>
        <script src="assets/js/pages/ui-carousel.js"></script>
				<script src="assets/js/pages/form_elements.js"></script>
        <script src="assets/js/custom.js"></script>


    </body>
</html>
