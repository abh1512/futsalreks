

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

   <body>

     <!-- Navigation -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-blue fixed-top">
       <div class="container">
         <a class="navbar-brand" href="#">FutsalYuk</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
           <ul class="navbar-nav ml-auto">
           <input type="text" class="form-control" placeholder="Cari. . . ."><a href="#" class="btn btn-primary btn-secondary">Cari</a>

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


     <!-- Page Content -->
     <div class="container">
       <div class="row">
         <?php
         include 'lib/settings.php';
         include 'lib/function.php';

         $ref = $_GET['ref'];
         if($query = mysqli_query($con,"UPDATE users SET status = NULL WHERE status = '$ref'"))
         {
           echo '<h1 class="vcenter">Akun berhasil diaktifkan</h1>';
         }
         else {
           echo '<h1 class="vcenter">Gagal mengaktifkan akun</h1>';
         }
          ?>
       </div>

     </div>
     <!-- /.container -->


     <div class="modal hide " id="myModal">


       <form  method="post" id="login-form" style="width:50%;" class="login">
       <div class="heading">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <label style="center">FutsalYuk</label>
       </div>

       <div class="left">
           <div class="alert alert-danger" id="error">
                     Email / Password yang Anda masukkan salah.
                     </div>
           <div class="alert alert-danger" id="erroraktifasi">
                     Email belum diaktifasi, silahkan cek email anda
                     </div>
         <label for="email">Email</label> <br />
         <input type="email" name="email" id="email" /> <br />
         <label for="password">Password</label> <br />
         <input type="password" name="password" id="pass" /> <br />
         <input type="submit" value="Login" />
        <div class="utilities">
         <a href="regis.php">belum mempunyai akun?</a>
       </div>
       </div>

     </form>

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
