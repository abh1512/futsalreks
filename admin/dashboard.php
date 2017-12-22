  <div class="row">
    <div class="col s12 m12">
        <h5>Saldo</h5>
    </div>
    <div class="col s12 m3">
        <div class="card">
            <div class="card-content">
            <p class=" center"><b>FutsalRek</b></p>
            <h5  class="center">Rp. 3.750.000</h5>
            </div>
        </div>
    </div>

    <div class="col s12 m3">
        <div class="card">
            <div class="card-content">
            <p class=" center"><b>Pemilik</b></p>
            <h5  class="center">Rp. 1.250.000</h5>
            </div>
        </div>
    </div>

    <div class="col s12 m3">
        <div class="card">
            <div class="card-content">
            <p class=" center"><b>Total Saldo</b></p>
            <h5  class="center">Rp. 5.000.000</h5>
            </div>
        </div>
    </div>
  </div>

  <div class="row">
    <div class="col s12 m12">
            <h5>Transaksi Lapangan</h5>
        </div>
        <div class="col s12 m3">
        <div class="card">
            <div class="card-content">
            <p class=" center"><b>Transaksi Butuh Aksi</b></p>
            <h5  class="center">3</h5>
            </div>
        </div>
        </div>

        <div class="col s12 m3">
        <div class="card">
            <div class="card-content">
            <p class=" center"><b>Transaksi Hari Ini</b></p>
            <h5  class="center">3</h5>
            </div>
        </div>
        </div>

        <div class="col s12 m3">
        <div class="card">
            <div class="card-content">
            <p class=" center"><b>Transaksi Online</b></p>
            <h5  class="center">3</h5>
            </div>
        </div>
        </div>

        <div class="col s12 m3">
        <div class="card">
            <div class="card-content">
            <p class=" center"><b>Transaksi Offline</b></p>
            <h5  class="center">3</h5>
            </div>
        </div>
        </div>
  </div>

  <div class="row">
    <div class="col s12 m12">
        <h5>Customer</h5>
    </div>
    <div class="col s12 m3">
        <div class="card">
            <div class="card-content">
            <p class=" center"><b>Transaksi Butuh Aksi</b></p>
            <h5  class="center">3</h5>
            </div>
        </div>
    </div>
  </div>

  <div class="row">
    <div class="col s12 m12">
        <h5>Pemilik Lapangan</h5>
    </div>
    <?php
      $jumlahpemil = mysqli_query($con,"SELECT COUNT(no_ktp)as jumlahpem FROM pemiliks");
      $result = mysqli_fetch_array($jumlahpemil);
     ?>
    <div class="col s12 m3">
        <div class="card">
            <div class="card-content">
            <p class=" center"><b>Total Pemilik</b></p>
            <h5  class="center"><?php echo $result['jumlahpem']; ?></h5>
            </div>
        </div>
    </div>

    <div class="col s12 m3">
        <div class="card">
            <div class="card-content">
            <p class=" center"><b>Member Basic</b></p>
            <h5  class="center">3</h5>
            </div>
        </div>
    </div>

    <div class="col s12 m3">
        <div class="card">
            <div class="card-content">
            <p class=" center"><b>Member Advance</b></p>
            <h5  class="center">3</h5>
            </div>
        </div>
    </div>

    <div class="col s12 m3">
        <div class="card">
            <div class="card-content">
            <p class=" center"><b>Member Professional</b></p>
            <h5  class="center">3</h5>
            </div>
        </div>
    </div>
  </div>
