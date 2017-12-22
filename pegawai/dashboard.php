<?php
// Ambil Id gedung yang dipegang penaggung jawab pada session ini
//echo $_SESSION['id_pengguna'];
  $er2="SELECT id_gedung from pegawais where no_ktp='$_SESSION[id_pengguna]'";
  $data2=mliSelect(mysqli_query($con,$er2));
  $gedung_id = $data2->id_gedung;

  $total = mliNumR($con,"*","lapangans","where id_gedung='$gedung_id'");

 ?>
<div class="row no-m-t no-m-b">
      <div class="col s12 m12 l6">
          <div class="card stats-card">
              <div class="card-content">
                <div class="card-options">
                    <ul>
                        <li class="red-text"><span class="badge cyan lighten-1">TERSEDIA</span></li>
                    </ul>
                </div>
                  <span class="card-title">Lapangan</span>
                  <span class="stats-counter"><span class="counter"><?=$total?></span><small>Lapangan</small></span>
              </div>
              <div id="sparkline-bar"></div>
          </div>
      </div>
          <div class="col s12 m12 l6">
          <div class="card stats-card">
              <div class="card-content">
                <!--?php/* mengambil jumlah row pada tabel lapangan
                $er="SELECT COUNT(*) as jumlah from lapangan where id_gedung='$data2->id_gedung'";
                $data=mliSelect(mysqli_query($con,$er));*/
                 ?-->
                  <span class="card-title">Pelanggan</span>
                  <span class="stats-counter"><span class="counter">83710</span><small>Pelanggan</small></span>
              </div>
              <div id="<?=$_SESSION['id_pengguna']?>" class="sesi"></div>
          </div>
      </div>
  </div>
  <div class="row no-m-t no-m-b">
                        <div class="col s12 m12 l12">
                            <div class="card">
                                <div class="card-content">
                                    <span class="card-title">Data Transaksi</span>
                                <table id="example" class="display responsive-table highlight">
                                    <thead>
                                        <tr>
                                          <tr>
                                              <th>ID_Transaksi</th>
                                              <th>Nama Pelanggan</th>
                                              <th>Lapangan</th>
                                              <th>Tanggal</th>
                                              <th>Jam Mulai</th>
                                              <th>Lama Sewa</th>
                                              <th>Biaya</th>
                                              <th>Batas Pembayaran</th>
                                              <th>Status</th>
                                          </tr>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                     $er=mysqli_query($con,"SELECT t.id_transaksi as id , nama_pelanggan ,t.id_lapangan, jam ,total_bayar, (select count(e.id_transaksi) from detil_transaksi e where e.id_transaksi = t.id_transaksi) as lama_sewa , (select nama from lapangans l where l.id_lapangan = t.id_lapangan) as nama_lapangan , tgl_sewa,batas_pembayaran,status
                                          from transaksis t inner join detil_transaksi d on d.id_transaksi = t.id_transaksi
                                          where t.id_lapangan LIKE '$gedung_id%'");
                                      while($r=mliSelect($er)){
                                        ?>
                                        <tr>
                                            <td><input type="hidden"  value="<?=$r->id?>"><?=$r->id?></td>
                                            <td><input type="hidden"  value="<?=$r->nama_pelanggan?>"><?=$r->nama_pelanggan?></td>
                                            <td><input type="hidden"  value="<?=$r->nama_lapangan?>"><?=$r->nama_lapangan?></td>
                                            <td><input type="hidden"  value="<?=$r->tgl_sewa?>"><?=$r->tgl_sewa?></td>
                                            <td><input type="hidden"  value="<?=$r->jam?>"><?=$r->jam?></td>
                                            <td><input type="hidden"  value="<?=$r->lama_sewa?>"><?=$r->lama_sewa?> JAM</td>
                                            <td><input type="hidden"  value="<?=$r->total_bayar?>"><?=$r->total_bayar?></td>
                                            <td><input type="hidden"  value="<?=$r->batas_pembayaran?>"><?=$r->batas_pembayaran?></td>
                                            <td><input type="hidden"  value="<?=$r->status?>"><?=$r->status?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                        <div class="col s6 m6 l6">
                          <div class="card">
                              <div class="card-content">
                                  <span class="card-title">Chart Transaksi</span>
                                  <div>
                                      <canvas id="chart2" width="400" height="240"></canvas>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>

  <?php
  //load setelah jquery telah diload di index.php
    $loadAfterJQuery='
    <script src="../assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../assets/js/pages/table-data.js"></script>
  '?>
  <script src="../assets/plugins/chart.js/chart.min.js"></script>
  <script type="text/javascript">
   var bulan_off = [];
   var jumlah_off = [];
   var jumlah_on = [];
   <?php
     $er3=mysqli_query($con,"SELECT DATE_FORMAT(tgl_sewa, '%b') AS sDate, COUNT(id_transaksi) AS iCount FROM transaksis
       WHERE id_transaksi LIKE 'on%' and id_lapangan LIKE '$gedung_id%'
       GROUP BY sDate ORDER BY sDate DESC");
      while($r3=mliSelect($er3)){
     ?>;
     jumlah_on.push(<?=$r3->iCount?>);
     <?php
      }
      ?>
     <?php
    $er=mysqli_query($con,"SELECT DATE_FORMAT(tgl_sewa, '%b') AS sDate, COUNT(id_transaksi) AS iCount FROM transaksis
      WHERE id_transaksi LIKE 'off%' and id_lapangan LIKE '$gedung_id%'
      GROUP BY sDate ORDER BY sDate DESC");
     while($r=mliSelect($er)){
       ?>
        bulan_off.push("<?=$r->sDate?>");
        jumlah_off.push(<?=$r->iCount?>);
       <?php
        }
        ?>
   var data2 = {
       labels: bulan_off,
       datasets: [{
          label: "Offline Transaction",
          fillColor: "#00ACC1",
          strokeColor: "transparent",
          highlightFill: '#9575CD',
          highlightStroke: '#B3B3B3',
          data:jumlah_off,
          },
          {
          label: 'Online Transaction',
          fillColor: '#9575CD',
          strokeColor: 'transparent',
          highlightFill: '#9575CD',
          highlightStroke: '#B3B3B3',
          data: jumlah_on,
          }]
   };
   var ctx2 = document.getElementById("chart2").getContext("2d");
   var chart2 = new Chart(ctx2).Bar(data2, {

       scaleBeginAtZero : true,
       scaleShowGridLines : true,
       scaleGridLineColor : "rgba(0,0,0,.05)",
       scaleGridLineWidth : 1,
       scaleShowHorizontalLines: true,
       scaleShowVerticalLines: false,
       barShowStroke : true,
       barStrokeWidth : 2,
       barDatasetSpacing : 1,
       legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
       responsive: true,
       scaleOverride: true,
       scaleSteps: 6,
       scaleStepWidth: 15,
       scaleStartValue: 0,
       barValueSpacing: 20,
       tooltipCornerRadius: 2,
       legend:{
         display: true
       }
   });
  </script>
