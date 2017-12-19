<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login to Everdwell</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Raleway'>
<link rel='stylesheet prefetch' href='http://weloveiconfonts.com/api/?family=fontawesome'>

      <link rel="stylesheet" href="css/style.css">

    <script src="js/jquery-1.12.4.js"></script>

</head>

<body>
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

        <div class="col-md-4 vcenter">

          <form class="form-control" action="../register/" method="get" id="login-form">
              <div class="heading">Daftar Customer</div>
              <div class="left">
               <input type="submit" value="daftar" />
  			  </div>
          </form>
  		</div>

    <div class="col-md-4 vcenter">

                    <form class="form-control" action="../register_pemilik/" method="get" id="login-form">
              <div class="heading">Daftar Pemilik</div>
              <div class="left">

               <input type="submit" value="daftar" />



  			</div>
            </form>
  		</div>

          <div class="col-md-4 vcenter">

                    <form class="form-control" action="../register_pegawai" id="login-form">
              <div class="heading">Daftar Pegawai</div>
              <div class="left">

               <input type="submit" value="daftar" />



  			</div>
            </form>
  		</div>
    </div>
  </div>


  <footer class="py-5 bg-blue footer">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; FutsalYuk2017</p>
      </div>
      <!-- /.container -->
    </footer>
    <script  src="js/index.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>

</body>

</html>
