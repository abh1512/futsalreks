<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FutsalYuk</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Raleway'>
    <link rel='stylesheet prefetch' href='http://weloveiconfonts.com/api/?family=fontawesome'>

    <link rel="stylesheet" href="css/style.css">
    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

       <script src="js/jquery-1.12.4.js"></script>
       <style>
       .footer {
           position: fixed;
           left: 0;
           bottom: 0;
           width: 100%;
           background-color: red;
           color: white;
           text-align: center;
       }
           .vcenter {
         display: inline-block;
         vertical-align: middle;
         float: none;
       }
       </style>
  </head>

  <body style="background-color:white;">

    <nav class="navbar navbar-expand-lg navbar-dark bg-blue fixed-top">
          <div class="container">
            <a class="navbar-brand" href="../">FutsalYuk</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">

                <li class="nav-item active">
                  <a class="nav-link" href="#">Home
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="btn btn-primary" data-toggle="modal" href="#myModal">Login</a>
                </li>

              </ul>
            </div>
          </div>
        </nav>
        <br><br>
    <div class="container">

          <div class="row">

            <div class="col-md-4 col-lg-4 vcenter">

              <form class="form-control" action="register_customer.php" method="get" id="login-form">
                  <div class="heading">Daftar Customer</div>
                  <div class="left">
                   <input type="submit" value="daftar" />
      			  </div>
              </form>
      		</div>

        <div class="col-md-4 vcenter">

                        <form class="form-control" action="register_pemilik.php" method="get" id="login-form">
                  <div class="heading">Daftar Pemilik</div>
                  <div class="left">

                   <input type="submit" value="daftar" />
                   </form>
      			</div>

      		</div>

              <div class="col-md-4 vcenter">

                        <form class="form-control" action="register_pegawai.php" id="login-form">
                  <div class="heading">Daftar Pegawai</div>
                  <div class="left">

                   <input type="submit" value="daftar" />
      			</div>
                </form>
      		</div>
        </div>
      </div>
    <!-- Footer -->
    <footer class="py-5 bg-blue footer">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; FutsalYuk2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script  src="js/index.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
