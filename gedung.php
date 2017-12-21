<?php
    echo $ged = $_GET['ged'];
  $query = mysqli_query($con,"SELECT * FROM lapangans WHERE id_gedung='$ged'");
  $query1 = mysqli_query($con,"SELECT * FROM lapangans WHERE id_gedung='$ged'");
  $query2 = mysqli_query($con,"SELECT * FROM lapangans WHERE id_gedung='$ged'");
?>
<div class="row" >
    <div class="col s12 l12 m12">

          <div class="carousel carousel-slider center" data-indicators="true">
              <div class="carousel-item red white-text" href="#one!">
                  <h2>First Panel</h2>
                  <p class="white-text">This is your first panel</p>
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
      <div class="col s12">
        <ul class="tabs">
          <?php
            while($row = mliSelect($query))
            {
                  echo '<li class="tab col s3"><a href="#'.$row->id_lapangan.'">'.$row->nama.'</a></li>';
            }
          ?>
        </ul>
      </div>
    </div>
<div class="row">
    <div class="col s12">
      <div class="card">
    <div class="row">
      <div class="col s6">
        <div class="row">
          <div class="col s6">
              <label for="birthdate">Pilih Tanggal</label>
              <input id="birthdate" type="text" class="datepicker">
          </div>
        </div>
      <?php
        while($row = mliSelect($query1))
        {?>



          <div class="row">
              <div id="<?=$row->id_lapangan?>" class="col s12">

                <table>

                  <tbody>
                    <?php
                      $a = mysqli_query($con,"SELECT * FROM transaksis AS t INNER JOIN detil_transaksi AS dt ON t.id_lapangan = dt.id_lapangan WHERE t.id_lapangan = '$row->id_lapangan'");
                      while($r = mliSelect($a))
                      {
                    ?>
                    <tr>
                      <td>Alvin</td>
                      <td class="cyan darken-2">Eclair</td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
      <?php  }?>
          </div>
        </div>
    </div>
  </div>
</div>
</div>
