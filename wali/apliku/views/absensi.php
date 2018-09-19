
            <!-- panel 3 sekolah-->
            <div class="row clearfix">
                <!-- Colorful Panel Items With Icon -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 id="depansekolah" align="center">
                                Sekolah
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                    <div class="panel-group" id="accordion_19" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-col-pink">
                                            <div class="panel-heading" role="tab" id="headingOne_17">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion_19" href="#absensekolah" aria-expanded="true" aria-controls="collapseOne_17">
                                                        <i class="material-icons">perm_contact_calendar</i> Absensi Kelas
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="absensekolah" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne_17">


                                                <div class="panel-body">
                                                  <?php $i=1; ?>
                                                  <?php foreach ($absensi as $m): ?>
                                                    <?php $tanggal=date_create("$m->tanggal"); ?>                    
                                                    <small><?php echo date_format($tanggal,"d-M") ?>
                                                    <span class="pull-right badge bg-red"><?php echo "A=".$m->alpa ?></span><span class="pull-right badge bg-aqua"><?php echo "I=".$m->ijin ?> </span><span class="pull-right badge bg-blue"><?php echo "S=".$m->sakit ?> </span></small><br>
                                                  
                                                  <?php $i++ ;
                                                  endforeach?>  <p></p>
                                                  <small>
                                                  * Keterangan <br>
                                                  S,I,A = Satuan Jam Pelajaran<br>
                                                  </small>
                                                </div>
                                            </div>
                                        </div>
