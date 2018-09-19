
            <!-- Example -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 id="depansekolah">
                              <?php foreach ($sekolah as $m): ?>                           
                                <?php echo $m->namasekolah ?>
                                <small><?php echo $m->alamat.', '.$m->kecamatan.', '.$m->kabupaten.', '.$m->provinsi ?></small>
                                <small><?php echo 'Telp :'.$m->notelpon.', HP :'.$m->nohp ?></small>
                              <?php endforeach?>

                            </h2>

                        </div>

                    </div>
                </div>
            </div>
            <!-- #END# Example -->