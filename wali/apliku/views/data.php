            <?php foreach ($biodata as $m): ?>  
            <!-- panel 1 biodata -->
            <div class="row clearfix">
                <!-- Colorful Panel Items With Icon -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 id="depanbiodata" align="center">
                                Biodata Siswa
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                    <div class="panel-group" id="accordion_17" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-col-pink">
                                            <div class="panel-heading" role="tab" id="headingOne_17">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion_17" href="#collapseOne_17" aria-expanded="true" aria-controls="collapseOne_17">
                                                        <i class="material-icons">person</i> Data Siswa
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne_17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne_17">
                                                <div class="panel-body">
                                                    Nama : <?php echo $m->namasiswa ?> <br>
                                                    Kota Lahir : <?php echo $m->kotalahir ?> <br>
                                                    <?php 
                                                        if ($m->tanggallahir != ''){ 
                                                        $tanggal=date_create("$m->tanggallahir"); ?>
                                                        Tanggal Lahir : <?php echo date_format($tanggal,"d-M-Y") ?><br> 
                                                    <?php } ?>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-col-cyan">
                                            <div class="panel-heading" role="tab" id="headingTwo_17">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_17" href="#collapseTwo_17" aria-expanded="false"
                                                       aria-controls="collapseTwo_17">
                                                        <i class="material-icons">people</i> Data Orang Tua
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo_17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_17">
                                                <div class="panel-body">
                                                    Nama Ayah : <?php echo $m->namaayah ?><br>
                                                    Nama Ibu : <?php echo $m->namaibu ?><br>
                                                    Pekerjaan Ayah : <?php echo $m->pekerjaanayah ?><br>
                                                    Alamat : <?php echo $m->alamat ?><br>
                                                    No Telepon : <?php echo $m->telephon ?><br>                               
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-col-teal">
                                            <div class="panel-heading" role="tab" id="headingThree_17">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_17" href="#collapseThree_17" aria-expanded="false"
                                                       aria-controls="collapseThree_17">
                                                        <i class="material-icons">school</i> Data Sekolah
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree_17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_17">
                                                <div class="panel-body">
                                                    NIS : <?php echo $m->nis ?><br>
                                                    Kelas : <?php echo $m->kelas ?><br>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Colorful Panel Items With Icon -->
            </div>
            <!-- END panel items with icon -->
            <?php endforeach?>
