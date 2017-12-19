<?php
// Ambil Id gedung yang dipegang penaggung jawab pada session ini $_SESSION[id_pengguna]
 $id_pemilik = $_SESSION['id_pengguna'];

 ?>
<div class="row">
    <div class="col s12 m12">
        <div class="card">
            <div class="card-content">
            <a class="waves-effect waves-light btn modal-trigger" onclick="tambah();" href="#modal1"><i class="material-icons left">add</i>Tambah Lapangan</a>
            </div>
        </div>
    </div>
</div>
<div class="row no-m-t no-m-b">

	<!--Modal 1-->
	<div id="modal" class="modal modal-fixed-footer">
		<div class="modal-content">
			<h4>Lapangan </h4>
            <form id="form_tambah" action="#">
			<p>Nama Lapangan</p><span><input type="text" name="nama" id="nama"></span>
			<!--p>Kategori</p><span><input type="text" name="Kategori" id="Kategori"></span-->
            </form>
		</div>

		<div class="modal-footer">
		<a class="modal-action modal-close waves-effect waves-green btn-flat" onclick="simpan();" id="<?=$data2->id_gedung?>">Simpan</a>
		<a class=" modal-action modal-close waves-effect waves-red btn-flat">Close</a>

		</div>
	</div>

      <div class="col s12">
          <p>Lapangan </p>
				<div class="card">
          <div class="card-content">
              <table class="bordered">
                <thead>
                  <tr>
                      <th>No</th>
                      <th>Id Lapangan</th>
                      <th>Nama lapangan</th>
											<!--<th>Jam Mulai</th>
											<th>Jam Selesai</th>-->
											<th>Harga</th>
											<th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                      $no=1;
                        $query = mysqli_query($con,"SELECT lap.id_lapangan, lap.nama FROM pegawais INNER JOIN lapangans AS lap ON pegawais.id_gedung = lap.id_gedung WHERE pegawais.no_ktp='$id_pemilik'");
                        while($row=mysqli_fetch_array($query)){

                        //  $jam1 = substr($r->jam_lapangan, 0,5);
                          //$jam2 = substr($r->jam_lapangan, 6,5);
                          ?>
                          <tr>
                            <td><input type="hidden" name='id_unesa' value="<?=$no?>"><?=$no?></td>
                            <td><input type="hidden" name='id_unesa' value="<?=$row[0]?>"><?=$row[0]?></td>
                            <td><input type="hidden" name='nama' value="<?=$row[1]?>"><?=$row[1]?></td>
                            <!--<td><input type="hidden" name='prodi' value=""></td>
                            <td><input type="hidden" name='status' value=""></td>-->
                            <td><input type="hidden" name='status' value=""><a href="?halaman=lapangan_harga&id=<?=$row[0]?>" class="waves-effect waves-light btn"><i class="material-icons left">pageview</i>Lihat Harga</a></td>
                            <td><a class="small material-icons" href="#">edit</a><a class="small material-icons" href="#">delete</a></td>
                          </tr>
                        <?php $no++;}?>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>

      </div>


  <?php
//load setelah jquery telah diload di index.php
  $loadAfterJQuery='
  <script src="../assets/js/pages/form_elements.js"></script>
  <script src="file.js"></script>';
  ?>
