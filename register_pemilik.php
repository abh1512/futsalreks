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

              </ul>
            </div>
          </div>
        </nav>
        <br><br>
    <div class="container">

          <div class="row">

            <form action="#" id="login-form" style="width:50%;" class="register-pemilik">
            <div class="heading">Daftar Pemilik Lapangan</div>
            <div class="left">
            <label for="number">Nomor KTP</label> <br />
              <input type="number" name="no_ktp" id="no_ktp" required /> <br />
              <label for="text">Nama Lengkap</label> <br />
              <input type="text" name="nama" id="nama" required/> <br />
              <label for="text">Alamat Lengkap</label> <br />
              <input type="text" name="alamat" id="alamat" required/> <br />
              <label for="number">Nomor Hp</label> <br />
              <input type="number" name="no_hp" id="no_hp" /> <br />

              <div class="alert alert-danger" id="error">
                            NO KTP atau  Email sudah digunakan!
              </div>
                <div class="alert alert-success" id="berhasil">
                              Berhasil mendaftar, silahkan cek email anda.
              </div>
              <label for="email">Email</label> <br />
              <input type="email" name="email" id="email" required/> <br />
              <label for="password">Password</label> <br />
              <input type="password" name="pass" id="pass" /> <br />
                <h10>Dengan menekan daftar akun,saya mengkonfirmasi telah menyetujui <a href="#">Syarat dan Ketentuan</a> serta <a href="#">Kebijakan Privasi</a> FutsalYuk	</h10> <br />
             <input type="submit" value="daftar Akun" />




            </div>
            <!--<div class="right">
              <div class="connect">Connect with</div>
              <a href="" class="facebook">
                <span class="fontawesome-facebook"></span>
              </a> <br />

              <a href="googlelogin/index.php" class="google-plus">
                <span class="fontawesome-google-plus"></span>
              </a>
            </div>-->
          </form>
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
    <script src="js/custom.js"></script>

  </body>

</html>
