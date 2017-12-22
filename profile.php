              <div class="row">
                    <div class="col l1"></div>

                    <div class="col s10 m10 l10">
                        <div class="card card-transparent">
                            <div class="card-content">
                                <span class="card-title"><i class="material-icons" >person_pin</i><?=$r['nama']?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s3">
                                <ul class="tabs tab-demo z-depth-1">
                                    <li class="tab col s3"><a href="#tabpane">Biodata Diri</a></li>
                                </ul>
                            </div>
                            <div id="tabpane" class="col s12">
                              <div class="row">
                                <div class="card col l4">
                                  <div class="card large">
                                      <div class="card-image">
                                          <img src="assets/images/card-image5.jpg" alt="">

                                      </div>
                                      <div class="card-content">

                                        <p>Besar file maksimum 10MB</p>
                                        <p>Ekstensi File yang diperbolehkan JPG JPEG PNG</p>

                                      </div>
                                      <div class="card-action">
                                        <form action="#">
                                            <div class="file-field input-field">
                                                <div class="btn btn-block center-align blue">
                                                    <span>Pilih Foto</span>
                                                    <input type="file">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" type="text">
                                                </div>

                                            </div>
                                        </form>
                                      </div>
                                  </div>

                                </div>
                                <div class="col l8">
                                  <div class="row">
                                      <form class="col s12" method="post" id="" action="">
                                          <div class="row">
                                              <div class="input-field col s12">
                                                  <input id="first_name" type="text" class="validate" name="nama" value="<?=$r['nama']?>">
                                                  <label for="first_name">Nama</label>
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="input-field col s12">
                                                  <input id="tgllahir" type="text" class="validate datepicker" name="tgllahir">
                                                  <label for="tgllahir">Tanggal Lahir</label>
                                              </div>
                                          </div>

                                          <div class="row">
                                            <div class="col s12">
                                                <label>Jenis Kelamin</label>
                                            </div>
                                              <div class="col s4">
                                                <input class="with-gap" name="jeniskelamin" type="radio" id="laki" checked />
                                                <label for="laki">Laki-Laki</label>

                                                <input class="with-gap" name="jeniskelamin" type="radio" id="wedok"  />
                                                <label for="wedok">Perempuan</label>

                                              </div>
                                          </div>

                                          <div class="row">
                                              <div class="input-field col s12">
                                                  <input id="email" type="email" class="validate" name="email" value="<?=$r['email']?>"/>
                                                  <label for="email">Email</label>
                                              </div>
                                          </div>

                                          <div class="row">
                                              <div class="input-field col s12">
                                                  <input id="nohp" type="text" class="validate" name="nohp" value="<?=$r['no_hp']?>"/>
                                                  <label for="nohp">Nomor HP</label>
                                              </div>
                                          </div>
                                            <div class="row">
                                              <div class="col s5"></div>
                                            <div class="file-field input-field col s7">
                                              <button class="btn green btn-block center-align" id="" type="submit"><i class="material-icons left">send</i>SIMPAN</button>
                                            </div>
                                              </div>
                                      </form>
                                  </div>
                                </div>

                              </div>

                            </div>
                        </div>
                    </div>
                    <div class="col l1"></div>
                </div>
        
