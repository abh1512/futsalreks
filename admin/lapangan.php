<?php
// Ambil Id gedung yang dipegang penaggung jawab pada session ini $_SESSION[id_pengguna]

  /*$er2="SELECT * from pegawais where no_ktp='123456789'";
  $data2=mliSelect(mysqli_query($con,$er2));*/
 ?>
<div class="row no-m-t no-m-b">
      <!--div class="col s12 m12 l4">
          <div class="card stats-card">
              <div class="card-content">

                  <span class="card-title">FASILITAS</span>
				<a class="waves-effect waves-light material-icons modal-trigger" href="#modal2">library_add</a>
              </div>
              <div id="sparkline-line"></div>
          </div>
      </div-->


	<!--Modal 1-->
	<div id="modal1" class="modal modal-fixed-footer">
		<div class="modal-content">
      <br>
      <br>
			<h4>Lapangan</h4>
			<p>Nama Lapangan</p><span><input type="text" name="nama" id="nama"></span>
			<p>Jam Mulai</p><span><input type="text" name="jam1" id="jam1"></span>
			<p>Jam Selesai</p><span><input type="text" name="jam2" id="jam2"></span>
			<!--p>Kategori</p><span><input type="text" name="Kategori" id="Kategori"></span-->
			<p>Harga</p><span><input type="text" name="harga" id="harga"></span>
		</div>
		<div class="modal-footer">
		<a class=" modal-action modal-close waves-effect waves-green btn-flat submit" id="<?=$data2->id_gedung?>">Simpan</a>
		<a class=" modal-action modal-close waves-effect waves-red btn-flat">Close</a>

		</div>
	</div>

	<!--Modal 2>
	<div id="modal2" class="modal modal-fixed-footer">
		<div class="modal-content">
			<h4>Fasilitas</h4>
			<div class="input-field col s12">
			  <textarea id="textarea1" class="materialize-textarea"></textarea>
			  <label for="textarea1">Deskripsi</label>
			</div>
		</div>
		<div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
		<a href="#!" class=" modal-action modal-close waves-effect waves-red btn-flat">Close</a>
		</div>
	</div-->


      <div class="col s12">

				<div class="card">
          <div class="card-content">
            <p>LAPANGAN</p>
              <table class="bordered">
                <thead>
                  <tr>
                      <th>ID Lapangan</th>
                      <th>Gedung Futsal</th>
											<th>Nama Lapangan</th>
                      <th>Kategori</th>
                    </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                        /*$er=mysqli_query($con,"SELECT l.id_lapangan,l.nama,l.jam_lapangan,l.harga
                        from lapangans as l inner join gedungs on gedungs.id_gedung=l.id_gedung
                        where gedungs.id_gedung='$data2->id_gedung'");
                        while($r=mliSelect($er)){
                          $no=1;
                          $jam1 = substr($r->jam_lapangan, 0,5);
                          $jam2 = substr($r->jam_lapangan, 6,5);*/
                          $pemil = mysqli_query($con,"SELECT id_lapangan,gedungs.nama,lapangans.nama,kategori FROM `lapangans` join gedungs on lapangans.id_gedung=gedungs.id_gedung");
                          while($row=mysqli_fetch_array($pemil)){

                          ?>
                          <tr>
                            <td><input type="hidden" name='id_unesa' value="<?php echo $row[0] ?>"><?php echo $row[0]?></td>
                            <td><input type="hidden" name='nama' value="<?php echo $row[1] ?>"><?php echo $row[1] ?></td>
                            <td><input type="hidden" name='prodi' value="<?php echo $row[2] ?>"><?php echo $row[2] ?></td>
                            <td><input type="hidden" name='status' value="<?php echo $row[3] ?>"><?php echo $row[3] ?></td>
                          </tr>
                        <?php }?>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>

      </div>
	  <!--div class="col s5">
          <p>Fasilitas</p>
				<div class="card">
                            <div class="card-content">
                                <table class="bordered">
                                    <thead>
                                        <tr>
                                            <th>Deskripsi</th>
											<th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Ini Deskripsi Fasilitas</td>
                                            <td><a class="small material-icons" href="#">edit</a><a class="small material-icons" href="#">delete</a></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

      </div>
        <hr></hr><br></br>
  </div-->

  <?php
//load setelah jquery telah diload di index.php
  $loadAfterJQuery='
  <script src="../assets/js/pages/form_elements.js"></script>
  <script>
  $(".submit").click(function(){
    var nama = $("#nama").val();
    var jam1 = $("#jam1").val();
    var jam2 = $("#jam2").val();
    var harga = $("#harga").val();
    var id_ged= $(this).attr("id");;
    $.ajax({
           url : "submit.php",
           type: "post",
           data: "nama="+nama+"&jam1="+jam1+"&jam2="+jam2+"&harga="+harga+"&id_ged="+id_ged,
           success:function(data){
			     if(data == "ok"){
             swal({
                title: "SUKSES!",
                text: "Data Berhasil Di Submit!",
                type: "success",
                confirmButtonText: "OK",
                closeOnConfirm: false
            }, function(){
                window.location.reload();
            });
            }
            else
            {
              console.log("gagal");
            }
          }
         });
  });
  </script>';
  ?>
