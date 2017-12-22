<?php  $er2="SELECT id_gedung from pegawais where no_ktp='$_SESSION[id_pengguna]'";
$data2=mliSelect(mysqli_query($con,$er2));
$gedung_id = $data2->id_gedung;
?>

<div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">DATA TRANSAKSI</span><br>
                                <table id="example" class="display responsive-table highlight">
                                    <thead>
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
                </div>
<?php
//load setelah jquery telah diload di index.php
  $loadAfterJQuery='
  <script src="assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
  <script src="assets/js/pages/table-data.js"></script>
'?>
