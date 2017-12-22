<div class="row" >
    <div class="col s12 l12 m12">

          <div class="carousel carousel-slider center" data-indicators="true">
              <div class="carousel-item red white-text" href="#one!">
                  <img src="assets/images/carousel/c1.jpg">
                  <h2>First Panel</h2>
                  <p class="white-text">This is your first panel</p>
              </div>
              <div class="carousel-item amber white-text" href="#two!">
                  <img src="assets/images/carousel/c2.jpg">
                  <h2>Second Panel</h2>
                  <p class="white-text">This is your second panel</p>
              </div>
              <div class="carousel-item green white-text" href="#three!">
                  <img src="assets/images/carousel/c3.jpg">
                  <h2>Third Panel</h2>
                  <p class="white-text">This is your third panel</p>
              </div>
         </div>

    </div>

</div>
<!--  <div class="row">
    <div class="input-field col s12 l3">
      <select>
        <option value="" disabled selected>Urutkan berdasarkan</option>
        <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="3">Option 3</option>
      </select>
      <label>Materialize Select</label>
    </div>
  </div>-->
<div class="row">

  <div class="col l3">
    <div class="card">
    <div class="row">
      <div class="col l12 s12 m7 top-pad">
        <div class="card">
          <div class="card-image">
            <img src="http://materializecss.com/images/sample-1.jpg">
            <span class="card-title">Card Title</span>
          </div>
          <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.</p>
          </div>
          <div class="card-action">
            <a href="#">This is a link</a>
          </div>
        </div>
      </div>
    </div>
    </div>
</div>


    <div class="col l9">
      <div class="card">
    <?php
      $halaman = 4; //batasan halaman
      $page = isset($_GET['p'])? (int)$_GET["p"]:1;
      $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
      $query = mysqli_query($con,"SELECT id_gedung AS id, nama, alamat, foto, jenis_lap AS jl FROM gedungs LIMIT $mulai, $halaman");
      $sql = mysqli_query($con,"SELECT id_gedung AS id, nama, alamat, foto, jenis_lap AS jl FROM gedungs");
      $total = mysqli_num_rows($sql);
      $pages = ceil($total/$halaman);

      while($row = mliSelect($query))
      {
    ?>
      <div class="row">
        <div class="col l6">
          <div class="row">
            <div class="col l12 s12 m7">
              <div class="card">
                <div class="card-image">
                  <img src="http://materializecss.com/images/sample-1.jpg">
                  <span class="card-title"><?=$row->nama?></span>
                </div>
                <div class="card-content">
                  <p><i class="tiny material-icons">location_on</i> <?=$row->alamat?></p>
                  <p><i class="tiny material-icons">map</i><span> Surabaya Barat</span></p>
                  <p><i class="tiny material-icons">pages</i><span> <?=$row->jl?></span></p>
                </div>
                <div class="card-action">
                  <a href="?pag=gedung&ged=<?=$row->id?>" class="btn waves-effect booking">Lihat</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    <?php } ?>
    </div>
    <div class="row">
      <div class="col l12">
        <ul class="pagination center-text">
        <?php
          $arrow = '<li class="waves-effect"><a href="?p='.($page-1).'"><i class="material-icons">chevron_left</i></a></li>';
          $arrow_r = '<li class="waves-effect"><a href="?p='.($page+1).'"><i class="material-icons">chevron_right</i></a></li>';
          if($page == 1)
          {
            $arrow = '<li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>';
          }
          else if($page == $pages)
          {
            $arrow_r = '<li class="disabled"><a href="#!"><i class="material-icons">chevron_right</i></a></li>';
          }
          echo $arrow;
          for ($i=1; $i<=$pages ; $i++){

            if($i == $page){
             echo '<li class="active"><a href="?p='.$i.'">'.$i.'</a></li>';
            }
            else {
              echo '<li class="waves-effect"><a href="?p='.$i.'">'.$i.'</a></li>';
            }
          }
          echo $arrow_r;
        ?>
        </ul>
      </div>
    </div>
  </div>
  </div>

    <div class="col l3">
    </div>

    <div class="col l9">

    </div>
  </div>
