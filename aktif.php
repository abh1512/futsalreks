
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
