<!DOCTYPE html>

<html lang="en">

    <body>

            <?php
              include('header.php');
             ?>
            <main class="mn-inner comparison-table">
              <section class="cd-products-comparison-table">
                <div class="comparison-table-options">
                  <span class="page-title"></span>
                    <div class="actions"></div>
                </div>
                <div class="cd-products-table">
          			  <div class="features">
          				  <div class="top-info">Paket</div>
          				   <ul class="cd-features-list">
                       <li><i class="material-icons"></i>Harga</li>
                       <li><i class="material-icons"></i>Laporan Transaksi</li>
                       <li><i class="material-icons"></i>Transaksi Offline</li>
                       <li><i class="material-icons"></i>Monitor Transaksi</li>
                       <li><i class="material-icons"></i>Akun Penanggung Jawab</li>
                       <li><i class="material-icons"></i>Potential Customer List</li>
                       <li><i class="material-icons"></i>Upload Foto Gedung dan Fasilitas</li>
                       <li></li>
		                 </ul>
          			  </div> <!-- .features -->

          			  <div class="cd-products-wrapper">
          				  <ul class="cd-products-columns">
          					 <li class="product">
          						<div class="top-info">
          							<div class="check"></div>
          							  <h4>BASIC</h4>
                          <h3>Produk Saya</h3>
                      </div> <!-- .top-info -->

          						<ul class="cd-features-list">
                       <li>Rp 20.000/bln</li>
                       <li>bulanan</li>
                       <li>10x</li>
                       <li><i class="material-icons"></i>ada</li>
                       <li><i class="material-icons"></i>tidak</li>
                       <li><i class="material-icons"></i>tidak</li>
                       <li><i class="material-icons"></i> (3x) </li>
                       <li><a href="#" class=" waves-effect waves-light btn green" onclick="pakett()">Ambil</a></li>

          						</ul>
          					 </li> <!-- .product -->

          					 <li class="product">
          						 <div class="top-info">
          							 <div class="check"></div>
          							   <h4>PROFESIONAL</h4>

                           <h3>Produk Saya</h3>
          						 </div> <!-- .top-info -->
          						 <ul class="cd-features-list">
                         <li>Rp 50.000/bln</li>
                         <li>perminggu</li>
                         <li>100x</li>
                         <li><i class="material-icons"></i>ada</li>
                         <li><i class="material-icons"></i>tidak</li>
                         <li><i class="material-icons"></i>tidak</li>
                         <li><i class="material-icons"></i> (5x) </li>
                         <li><a href="#" class=" waves-effect waves-light btn green" onclick="pakett()">Ambil</a></li>
                       </ul>
          					 </li> <!-- .product -->

          					 <li class="product">
          						 <div class="top-info">
          							 <div class="check"></div>
          							  <h4>BISNIS</h4>
                          <h3>Produk Saya</h3>

          						 </div> <!-- .top-info -->

          						 <ul class="cd-features-list">
                         <li>Rp 92.000/bln</li>
                         <li>Tiap hari</li>
                         <li><i class="material-icons"></i> unlimited</li>
                         <li><i class="material-icons"></i> unlimited</li>
                         <li><i class="material-icons"></i> unlimited</li>
                         <li><i class="material-icons"></i> unlimited </li>
                         <li><i class="material-icons"></i> unlimited </li>
                         <li><a href="#" class=" waves-effect waves-light btn green" onclick="pakett()">Ambil</a></li>
                       </ul>
          					 </li> <!-- .product -->




          				</ul> <!-- .cd-products-columns -->
          			</div> <!-- .cd-products-wrapper -->

          			<ul class="cd-table-navigation">
          				<li><a href="#0" class="prev inactive">Prev</a></li>
          				<li><a href="#0" class="next">Next</a></li>
          			</ul>
          		</div> <!-- .cd-products-table -->
          	</section> <!-- .cd-products-comparison-table -->
                      </main>



        <div id="chartjs-tooltip"></div>
        <div class="left-sidebar-hover"></div>

        <!-- Javascripts -->
        <script src="../assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="../assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="../assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="../assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="../assets/plugins/chart.js/chart.min.js"></script>
        <script src="../assets/plugins/d3/d3.min.js"></script>
        <script src="../assets/plugins/nvd3/nv.d3.min.js"></script>
        <script src="../assets/plugins/flot/jquery.flot.min.js"></script>
        <script src="../assets/plugins/flot/jquery.flot.time.min.js"></script>
        <script src="../assets/plugins/flot/jquery.flot.symbol.min.js"></script>
        <script src="../assets/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="../assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="../assets/plugins/flot/jquery.flot.pie.min.js"></script>
        <script src="../assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="../assets/js/alpha.min.js"></script>
        <script src="../assets/js/pages/charts.js"></script>
        <script src="assets/plugins/google-code-prettify/prettify.js"></script>
				<script src="../assets/plugins/sweetalert/sweetalert.min.js"></script>
        <script src="file.js"></script>
    </body>
</html>
