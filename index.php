<?php
require_once "lib/settings.php";
require_once "lib/function.php";

$halaman=isset($_GET['halaman'])?$_GET['halaman'].".php":"dashboard.php";
$aktif=array('registrasi'=>"",'dashboard'=>"",'lapangan'=>"",'transaksi'=>"",'laporan'=>"");
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
    <body>
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
            <header class="mn-header navbar-fixed">
                <nav class="cyan darken-1">
                    <div class="nav-wrapper row">

                        <div class="header-title col s3 m3">
                            <span class="chapter-title">FutsalRek</span>
                        </div>

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
              <div class="row" >
                  <div class="col s12 l12 m12">

                        <div class="carousel carousel-slider center" data-indicators="true">
                            <div class="carousel-item red white-text" href="#one!">
                                <h2>First Panel</h2>
                                <p class="white-text">This is your first panel</p>
                            </div>
                            <div class="carousel-item amber white-text" href="#two!">
                                <h2>Second Panel</h2>
                                <p class="white-text">This is your second panel</p>
                            </div>
                            <div class="carousel-item green white-text" href="#three!">
                                <h2>Third Panel</h2>
                                <p class="white-text">This is your third panel</p>
                            </div>
                            <div class="carousel-item blue white-text" href="#four!">
                                <h2>Fourth Panel</h2>
                                <p class="white-text">This is your fourth panel</p>
                            </div>
                       </div>

                  </div>

              </div>
              <!--  <div class="row">
                  <div class="input-field col s12 l3">
                    <select>
                      <option value="" disabled selected>Urutkan berdasarkan</option>
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                      <option value="3">Option 3</option>
                    </select>
                    <label>Materialize Select</label>
                  </div>
                </div>-->
              <div class="row">

                <div class="col l3">
                  <div class="card">
                  <div class="row">
                    <div class="col l12 s12 m7 top-pad">
                      <div class="card">
                        <div class="card-image">
                          <img src="http://materializecss.com/images/sample-1.jpg">
                          <span class="card-title">Card Title</span>
                        </div>
                        <div class="card-content">
                          <p>I am a very simple card. I am good at containing small bits of information.
                          I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                          <a href="#">This is a link</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
              </div>


                  <div class="col l9">
                    <div class="card">
                  <?php
                    $halaman = 4; //batasan halaman
                    $page = isset($_GET['halaman'])? (int)$_GET["halaman"]:1;
                    $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                    $query = mysqli_query($con,"SELECT id_gedung AS id, nama, alamat, foto, jenis_lap AS jl FROM gedungs LIMIT $mulai, $halaman");
                    $sql = mysqli_query($con,"SELECT id_gedung AS id, nama, alamat, foto, jenis_lap AS jl FROM gedungs");
                    $total = mysqli_num_rows($sql);
                    $pages = ceil($total/$halaman);

                    while($row = mliSelect($query))
                    {
                  ?>
                    <div class="row">
                      <div class="col l6">
                        <div class="row">
                          <div class="col l12 s12 m7">
                            <div class="card">
                              <div class="card-image">
                                <img src="http://materializecss.com/images/sample-1.jpg">
                                <span class="card-title"><?=$row->nama?></span>
                              </div>
                              <div class="card-content">
                                <p><i class="tiny material-icons">location_on</i> <?=$row->alamat?></p>
                                <p><i class="tiny material-icons">map</i><span> Surabaya Barat</span></p>
                                <p><i class="tiny material-icons">pages</i><span> <?=$row->jl?></span></p>
                              </div>
                              <div class="card-action">
                                <a href="#" class="btn waves-effect booking">Lihat</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  <?php } ?>
                  </div>
                  <div class="row">
                    <div class="col l12">
                      <ul class="pagination center-text">
                      <?php
                        $arrow = '<li class="waves-effect"><a href="?halaman='.($page-1).'"><i class="material-icons">chevron_left</i></a></li>';
                        $arrow_r = '<li class="waves-effect"><a href="?halaman='.($page+1).'"><i class="material-icons">chevron_right</i></a></li>';
                        if($page == 1)
                        {
                          $arrow = '<li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>';
                        }
                        else if($page == $pages)
                        {
                          $arrow_r = '<li class="disabled"><a href="#!"><i class="material-icons">chevron_right</i></a></li>';
                        }
                        echo $arrow;
                        for ($i=1; $i<=$pages ; $i++){

                          if($i == $page){
                           echo '<li class="active"><a href="?halaman='.$i.'">'.$i.'</a></li>';
                          }
                          else {
                            echo '<li class="waves-effect"><a href="?halaman='.$i.'">'.$i.'</a></li>';
                          }
                        }
                        echo $arrow_r;
                      ?>
                      </ul>
                    </div>
                  </div>
                </div>
                </div>

                  <div class="col l3">
                  </div>

                  <div class="col l9">

                  </div>
                </div>

                    <?php
				          if (file_exists($halaman))
					             include $halaman;
			          ?>
            </main>
            <div class="page-footer">
                <div class="footer-grid container">
                    <div class="footer-l white">&nbsp;</div>
                    <div class="footer-grid-l white">
                    </div>
                    <div class="footer-r white">&nbsp;</div>
                    <div class="footer-grid-r white">
                        <a class="footer-text" href="mailbox.html">
                            <i class="material-icons arrow-r">arrow_forward</i>
                            <span class="direction">Next</span>
                            <div>
                                Mailbox app
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="left-sidebar-hover"></div>


        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/js/alpha.min.js"></script>
        <script src="assets/js/pages/ui-carousel.js"></script>

    </body>
</html>
