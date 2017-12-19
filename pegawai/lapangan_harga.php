<?php
// Ambil Id gedung yang dipegang penaggung jawab pada session ini $_SESSION[id_pengguna]
 $id_lap = $_GET['id'];
 ?>
<div class="row">
    <div class="col s12 m12">
        <div class="card">
            <div class="card-content">
            <a class="waves-effect waves-light btn modal-trigger" href="#modal1"><i class="material-icons left">add</i>Tambah Harga</a>
            </div>
        </div>
    </div>
</div>
<div class="row no-m-t no-m-b">

	<!--Modal 1-->
	<div id="modal1" class="modal modal-fixed-footer">
		<div class="modal-content">
			<h4>Tambah Harga</h4>
            <form id="form_harga" action="#">
              <input hidden name="id_lap" value="<?=$_GET['id']?>"
			<p>Jam Mulai</p><span>
                                        <select name="jam_mulai">
                                            <option  value="" disabled selected>Pilih Jam</option>
                                            <?php
                                              $a = 1;
                                              while ($a <= 24) {
                                                if($a < 10)
                                                {
                                                  $a="0".$a;
                                                }
                                                echo '<option value="'.$a.':00">'.$a.':00</option>';
                                                $a++;
                                              }
                                            ?>
                                        </select>


      </span>
      <p>Jam Berakhir</p><span>
        <select name="jam_berakhir">
            <option  value="" disabled selected>Pilih Jam</option>
            <?php
              $a = 1;
              while ($a <= 24) {
                if($a < 10)
                {
                  $a="0".$a;
                }
                echo '<option value="'.$a.':00">'.$a.':00</option>';
                $a++;
              }
            ?>
        </select>
      </span>
      <p>Harga</p><span><input type="number" name="harga" id="nama"></span>
			<!--p>Kategori</p><span><input type="text" name="Kategori" id="Kategori"></span-->
            </form>
		</div>

		<div class="modal-footer">
		<a class="modal-action modal-close waves-effect waves-green btn-flat" onclick="harga();" id="<?=$data2->id_gedung?>">Simpan</a>
		<a class=" modal-action modal-close waves-effect waves-red btn-flat">Close</a>

		</div>
	</div>

  <!--Modal 2-->
  <div id="modal2" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Edit Detil Harga </h4>
      <div class="row">
      <form id="edit_harga" class="col s12" action="#">
        <div readonly class="input-field col s6">
              <input id="mulai" name="mulai" type="text">
              <label class="active" for="mulai">Jam Mulai</label>
          </div>
          <div readonly class="input-field col s6">
                <input id="selesai" type="text">
                <label class="active" for="selesai">Jam Selesai</label>
            </div>
            <div class="input-field col s6">
                  <input id="harga" name="harga" type="text">
                  <label class="active" for="harga">Harga</label>
              </div>
      </form>
      </div>
    </div>

    <div class="modal-footer">
    <a class="modal-action modal-close waves-effect waves-green btn-flat" onclick="tambah();" id="<?=$data2->id_gedung?>">Simpan</a>
    <a class=" modal-action modal-close waves-effect waves-red btn-flat">Cancel</a>

    </div>
  </div>

      <div class="col s12">
          <p>Detil Harga</p>
				<div class="card">
          <div class="card-content">
              <table class="bordered">
                <thead>
                  <tr>
                      <th>No</th>
                      <th>Jam Mulai</th>
                      <th>Jam Selesai</th>
											<!--<th>Jam Mulai</th>
											<th>Jam Selesai</th>-->
											<th>Harga</th>
											<th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                      $no=1;
                        $query = mysqli_query($con,"SELECT jam_mulai, jam_berakhir, harga , id_detil_lapangan FROM detil_lapangans WHERE id_lap='$id_lap'");
                        while($row=mysqli_fetch_array($query)){

                        //  $jam1 = substr($r->jam_lapangan, 0,5);
                          //$jam2 = substr($r->jam_lapangan, 6,5);
                          ?>
                          <tr>
                            <td><input type="hidden" name='id_unesa' value="<?=$no?>"><?=$no?></td>
                            <td><input type="hidden" name='id_unesa' ><?=substr($row[0],0,5)?></td>
                            <td><input type="hidden" name='nama' ><?=substr($row[1],0,5)?></td>
                            <!--<td><input type="hidden" name='prodi' value=""></td>
                            <td><input type="hidden" name='status' value=""></td>-->
                            <td><input type="hidden" name='nama' value="<?=$row[2]?>"><?=$row[2]?></td>
                            <td><a class="small material-icons modal-trigger" onclick="edit('<?=$row[3]?>')" href="#modal2">edit</a></td>
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
  <script src="file.js"></script>
  <script>

  </script>';
  ?>
