<?php
// Ambil Id gedung yang dipegang penaggung jawab pada session ini $_SESSION[id_pengguna]
 $id_pemilik = $_SESSION['id_pengguna'];

 ?>
<div class="row">
    <div class="col s12 m12">
        <div class="card">
            <div class="card-content">
            <a class="waves-effect waves-light btn modal-trigger"  href="#modal1"><i class="material-icons left">add</i>Tambah Lapangan</a>
            </div>
        </div>
    </div>
</div>
<div class="row no-m-t no-m-b">

	<!--Modal 1-->
	<div id="modal1" class="modal modal-footer">
		<div class="modal-content">
			<h4>Pilih Kategori Lapangan </h4>
      <div class="row">
      <form id="category" class="col s12" action="#">
        <p class="p-v-xs">
          <input type="radio" class="with-gap" id="sintetis" name="kategori" checked="checked" value="sintetis">
          <label for="sintetis">Sintetis</label>
        </p>
        <p class="p-v-xs">
          <input type="radio" class="with-gap" id="matras" name="kategori" value="matras">
          <label for="matras">Matras</label>
        </p>
        <p class="p-v-xs">
          <input type="radio" class="with-gap" id="plester" name="kategori" value="plester">
          <label for="plester">Plester</label>
        </p>
      </form>
      </div>
		</div>

		<div class="modal-footer">
		<a class="modal-action modal-close waves-effect waves-green btn-flat" onclick="tambah();" id="<?=$data2->id_gedung?>">Simpan</a>
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
                      <th>Kategori</th>
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
                        $query = mysqli_query($con,"SELECT lap.id_lapangan, lap.nama , lap.kategori FROM pegawais INNER JOIN lapangans AS lap ON pegawais.id_gedung = lap.id_gedung
                         WHERE pegawais.no_ktp='$id_pemilik' order by lap.id_lapangan ASC");
                        while($row=mysqli_fetch_array($query)){

                        //  $jam1 = substr($r->jam_lapangan, 0,5);
                          //$jam2 = substr($r->jam_lapangan, 6,5);
                          ?>
                          <tr>
                            <td><input type="hidden" value="<?=$no?>"><?=$no?></td>
                            <td><input type="hidden" value="<?=$row[0]?>"><?=$row[0]?></td>
                            <td><input type="hidden" value="<?=$row[1]?>"><?=$row[1]?></td>
                            <td><input type="hidden" value="<?=$row[2]?>"><?=$row[2]?></td>
                            <!--<td><input type="hidden" name='prodi' value=""></td>
                            <td><input type="hidden" name='status' value=""></td>-->
                            <td><input type="hidden"  value=""><a href="?halaman=lapangan_harga&id=<?=$row[0]?>" class="waves-effect waves-light btn"><i class="material-icons left">pageview</i>Lihat Harga</a></td>
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
