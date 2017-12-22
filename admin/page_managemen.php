<div class="row">
  <div class="col s12 m12 l6">
      <div class="card stats-card">
          <div class="card-content">
            <span class="card-title">CAROUSEL</span>
              <a class="btn btn-block blue waves-effect waves-light modal-trigger" href="#modal1"><i class="material-icons left">add</i>SUBMIT</a>
          </div>
          <div id="sparkline-line"></div>
      </div>
  </div>
  <div class="modal modal-fixed-footer col s12 m12 l6" id="modal1">
    <div class="card">
      <div class="card-content">
        <span class="card-title">Input Carousel</span><br>
          <div class="row">
            <form class="col s12" id="lebokno" method="post" action="aksi/input_caros.php" enctype="multipart/form-data">
              <div class="row">
                <div class="input-field col s6">
                  <input id="first_name" type="text" class="validate" name="namanya">
                  <label for="first_name">Nama Carousel</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="alamat" type="text" class="validate" name="linknya">
                  <label for="email">Link</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="alamat" type="text" class="validate" name="idadmin" value="<?php echo $_SESSION['email']; ?>" readonly>
                  <label for="email"></label>
                </div>
              </div>
              <?php
          /*      function create_random($length)
                  {
                    $data = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTU1234567890';
                    $string = '';
                    for($i = 0; $i < $length; $i++) {
                      $pos = rand(0, strlen($data)-1);
                      $string .= $data{$pos};
                    }
                      return $string;
                  }
                    $ref = create_random(10)
            */    ?>
              <div class="row">
                <div class="file-field input-field col s12">
                  <div class="btn teal lighten-1">
                    <span>Foto</span>
                    <input type="file" name="mycarousel">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" name="mynamefoto">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="file-field input-field col s12">
                  <button class="waves-effect waves-light btn blue btn-block m36" type="submit"><i class="material-icons left">cloud</i>SUBMIT</button>
                </div>
              </div>

            </form>

          </div>
        </div>
      </div>
    </div>
</div>
<!-- modal edit -->


<!-- end of edit modal-->
<div class="modal modal-fixed-footer col s12 m12 l6" id="editModal">
  <div class="card">
    <div class="card-content">
      <span class="card-title">Edit Carousel</span><br>
        <div class="row">
          <form class="col s12" id="lebokno" method="post" action="aksi/input_caros.php" enctype="multipart/form-data">
            <div class="row">
              <div class="input-field col s12">
                <input id="alamat" type="text" class="validate" name="idcar" value="" readonly>
                <label for="email"></label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <input id="first_name" type="text" class="validate" name="namanya">
                <label for="first_name">Nama Carousel</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="alamat" type="text" class="validate" name="linknya">
                <label for="email">Link</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="alamat" type="text" class="validate" name="idadmin" value="" readonly>
                <label for="email"></label>
              </div>
            </div>
            <div class="row">
              <div class="file-field input-field col s12">
                <div class="btn teal lighten-1">
                  <span>Foto</span>
                  <input type="file" name="mycarousel">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text" name="mynamefoto">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="file-field input-field col s12">
                <button class="waves-effect waves-light btn blue btn-block m36" type="submit"><i class="material-icons left">cloud</i>EDIT</button>
              </div>
            </div>

          </form>

        </div>
      </div>
    </div>
  </div>

<div class="row">
  <div class="modal modal-fixed-footer col s12 m12 l6" id="gambar">
    <div class="card">
      <div class="card-content">
        <div class="row">
          <form class="col s12" method="post" id="" action="" enctype="multipart/form-data">
            <div class="row" >
              <div class="input-field col s6">
                <img id="foto-lihat" src=""/>
              </div>
            </div>
            <br/>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col s12">
  <p>Carousel</p>
<div class="card">
  <div class="card-content">
      <table class="bordered">
        <thead>
          <tr>
              <th>No Carousel</th>
              <th>Nama Carousel</th>
              <th>Link Carousel</th>
              <th>Gambar Carousel</th>
              <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
          <tr>
            <?php

            $querycar = mysqli_query($con,"SELECT * FROM carousels ");
            while($r=mysqli_fetch_array($querycar))
            {
             ?>
                  <tr>
                    <td><input type="hidden" name='id_unesa' value=""><?php echo $r['id_carousel']; ?></td>
                    <td><input type="hidden" name='status' value=""><?php echo $r['nama_carousel']; ?></td>
                    <td><input type="hidden" name='status' value=""><?php echo $r['link']; ?></td>
                    <td><input type="hidden" name='status' value=""><a class="btn btn-block blue waves-effect waves-light modal-trigger lihat" id="<?=$r['gambar']?>" onclick="l('<?=$r['gambar']?>');" href="#gambar" ><i class="material-icons left">remove_red_eye</i>Lihat</a></td>
                    <td><a class="small material-icons modal-trigger" href="#editModal" onclick="edit('<?=$r["id_carousel"]?>')">edit</a><a class="small material-icons" href="#">delete</a></td>
                  </tr>
              <?php } ?>
          </tr>
          </tbody>
        </table>
        <button class="lihat"></button>
      </div>
    </div>

</div>
