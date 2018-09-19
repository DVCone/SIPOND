            <!-- panel 4 Tahfidz-->
            <div class="row clearfix">
                <!-- Colorful Panel Items With Icon -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 id="depantahfidz" align="center">
                                Tahfidz
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                    <div class="panel-group" id="accordion_20" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-col-pink">
                                            <div class="panel-heading" role="tab" id="headingtahfidz">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion_20" href="#tahfidz" aria-expanded="true" aria-controls="collapseOne_17">
                                                        <i class="material-icons">library_books</i> Kegiatan Tahfidz
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="tahfidz" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtahfidz">
                                                <div class="panel-body">
                                                  <?php $i=1; ?>
                                                  <?php foreach ($tahfidz as $m): ?>
                                                    <?php $tanggal=date_create("$m->tanggal"); ?>                    
                                                    <small><?php echo date_format($tanggal,"d-M") ?><span class="pull-right badge bg-aqua"><?php echo "T=".$m->tambahan ?> </span><span class="pull-right badge bg-blue"><?php echo "M=".$m->murojaah ?> </span></small><br>
                                                  
                                                  <?php $i++ ;
                                                  endforeach?>  <p></p>
                                                  <small>
                                                  * Keterangan <br>
                                                  M = Jumlah Halaman Murojaah<br>
                                                  T = Jumlah Halaman Tambahan<br>
                                                  </small>
                                                </div>
                                            </div>
                                        </div>
