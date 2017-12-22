<!DOCTYPE html>
<?php
include '../lib/settings.php';
$id_pemilik = $_SESSION['id_pengguna'];
$pemilik = mysqli_query($con,"SELECT * FROM pemiliks WHERE no_ktp='$id_pemilik'");
  while($row = mysqli_fetch_array($pemilik))
{
?>
<html lang="en">
    <head>

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

				<link href="../assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
        <!-- Theme Styles -->
        <link href="../assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/css/custom.css" rel="stylesheet" type="text/css"/>
        <script src="../assets/plugins/products-comparison-table/js/modernizr.js"></script>


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
                <div class="spinner-layer spinner-spinner-teal lighten-1">
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
        <div class="mn-content fixed-sidebar">
            <header class="mn-header navbar-fixed">
                <nav class="cyan darken-1">
                    <div class="nav-wrapper row">
                        <section class="material-design-hamburger navigation-toggle">
                            <a href="#" data-activates="slide-out" class="button-collapse show-on-large material-design-hamburger__icon">
                                <span class="material-design-hamburger__layer"></span>
                            </a>
                        </section>
                        <div class="header-title col s3">
                            <span class="chapter-title">Pemilik</span>
                        </div>
                        <form class="left search col s6 hide-on-small-and-down">
                            <div class="input-field">
                                <input id="search" type="search" placeholder="Search" autocomplete="off">
                                <label for="search"><i class="material-icons search-icon">search</i></label>
                            </div>
                            <a href="javascript: void(0)" class="close-search"><i class="material-icons">close</i></a>
                        </form>


                    </div>
                </nav>
            </header>
            <div class="search-results">
                <div class="container search-container">
                    <div class="row">
                        <div class="col s12 m4 search-result-container">

                        </div>
                    </div>
                </div>
            </div>
            <aside id="slide-out" class="side-nav white fixed">
                <div class="side-nav-wrapper">
                    <div class="sidebar-profile">
                        <div class="sidebar-profile-image">
                            <img src="../assets/images/foto_pemilik/<?php echo $row['foto']; ?>" class="circle" alt="">
                        </div>
                        <div class="sidebar-profile-info">
                            <a href="javascript:void(0);" class="account-settings-link">
                                <p><?php echo $row['nama']; ?></p>
                                <span><?php echo $row['email'];} ?><i class="material-icons right">arrow_drop_down</i></span>
                            </a>
                        </div>
                    </div>
                    <div class="sidebar-account-settings">
                        <ul>
                          <li class="no-padding">
                              <a class="waves-effect waves-grey" href="profile.php"><i class="material-icons">person</i>Profile</a>
                          </li>
                          <li class="no-padding">
                              <a class="waves-effect waves-grey"><i class="material-icons">exit_to_app</i>Sign Out</a>
                          </li></ul>
                    </div>
                <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
                    <li class="no-padding"><a class="waves-effect waves-grey" href="index.php"><i class="material-icons">settings_input_svideo</i>Laporan</a></li>
                    <li class="no-padding"><a class="waves-effect waves-grey" href="topup.php"><i class="material-icons">money</i>Top-Up</a></li>
                    <li class="no-padding"><a class="waves-effect waves-grey" href="withdraw.php"><i class="material-icons">money</i>Withdraw</a></li>
                    <li class="no-padding"><a class="waves-effect waves-grey" href="paket.php"><i class="material-icons">desktop_windows</i>Paket</a></li>
                    <li class="no-padding"><a class="waves-effect waves-grey" href="gedung.php"><i class="material-icons">home</i>Gedung</a></li>
                    <li class="no-padding"><a class="waves-effect waves-grey" href="pegawai.php"><i class="material-icons">person</i>Pegawai</a></li>

                </ul>
                </div>
            </aside>
        </body>


    </html>
