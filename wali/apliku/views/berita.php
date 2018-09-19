            <!-- panel 2 berita pondok-->
            <div class="row clearfix">                                                   
                <!-- Colorful Panel Items With Icon -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 id="depanberitapondok" align="center">
                                Berita Pondok
                            </h2>
                        </div>
                        <div class="body">                         
                            <div class="row clearfix">
                                <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                    <div class="panel-group" id="accordion_18" role="tablist" aria-multiselectable="true">
                                      <?php $i=1; ?>
                                      <?php foreach ($berita as $m): ?> 
                                      <?php if ($i==1){ ?>                                    
                                        <div class="panel panel-col-light-green">     
                                            <div class="panel-heading" role="tab" id="headingberitapondok1">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion_18" href="#beritapondok1" aria-expanded="true" aria-controls="beritapondok1">
                                                        <i class="material-icons">event_note</i> 
                                                        <?php if ($m->tanggal != ''){ 
                                                        $tanggal=date_create("$m->tanggal"); 
                                                        echo date_format($tanggal,"d-M-Y"); }?> 
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="beritapondok1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingberitapondok1">
                                                <div class="panel-body">
                                                  <p><?php echo $m->judul ?></p>
                                                  <p><?php echo $m->isi ?></p>
                                                  <p>Ttd. <?php echo $m->pj ?></p>                     
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                      <?php $i++ ;
                                      endforeach?>

                                      <?php $i=1; ?>
                                      <?php foreach ($berita as $m): ?> 
                                      <?php if ($i==2){ ?>                                        
                                        <div class="panel panel-col-cyan">
                                            <div class="panel-heading" role="tab" id="headingberitapondok2">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_18" href="#beritapondok2" aria-expanded="false"
                                                       aria-controls="beritapondok2">
                                                        <i class="material-icons">layers</i> 
                                                        <?php if ($m->tanggal != ''){ 
                                                        $tanggal=date_create("$m->tanggal"); 
                                                        echo date_format($tanggal,"d-M-Y"); }?>                                                         
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="beritapondok2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingberitapondok2">
                                                  <div class="panel-body">
                                                        <p><?php echo $m->judul ?></p>
                                                        <p><?php echo $m->isi ?></p>
                                                        <p>Ttd. <?php echo $m->pj ?></p>
                                                  </div>
                                            </div>
                                        </div>
                                      <?php } ?>
                                      <?php $i++ ;
                                      endforeach?>

                                      <?php $i=1; ?>
                                      <?php foreach ($berita as $m): ?> 
                                      <?php if ($i==3){ ?>                                        
                                        <div class="panel panel-col-teal">
                                            <div class="panel-heading" role="tab" id="headingberitapondok3">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_18" href="#beritapondok3" aria-expanded="false"
                                                       aria-controls="beritapondok3">
                                                        <i class="material-icons">style</i> 
                                                        <?php if ($m->tanggal != ''){ 
                                                        $tanggal=date_create("$m->tanggal"); 
                                                        echo date_format($tanggal,"d-M-Y"); }?>  
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="beritapondok3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingberitapondok3">
                                                <div class="panel-body">
                                                  <div class="panel-body">
                                                        <p><?php echo $m->judul ?></p>
                                                        <p><?php echo $m->isi ?></p>
                                                        <p>Ttd. <?php echo $m->pj ?></p>
                                                  </div>                              
                                                </div>
                                            </div>
                                        </div>
                                      <?php } ?>
                                      <?php $i++ ;
                                      endforeach?>

                                      <?php $i=1; ?>
                                      <?php foreach ($berita as $m): ?> 
                                      <?php if ($i==4){ ?>  
                                        <div class="panel panel-col-orange">
                                            <div class="panel-heading" role="tab" id="headingberitapondok4">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_18" href="#beritapondok4" aria-expanded="false"
                                                       aria-controls="beritapondok4">
                                                        <i class="material-icons">contacts</i> 
                                                        <?php if ($m->tanggal != ''){ 
                                                        $tanggal=date_create("$m->tanggal"); 
                                                        echo date_format($tanggal,"d-M-Y"); }?>   
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="beritapondok4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingberitapondok4">
                                                <div class="panel-body">
                                                  <div class="panel-body">
                                                        <p><?php echo $m->judul ?></p>
                                                        <p><?php echo $m->isi ?></p>
                                                        <p>Ttd. <?php echo $m->pj ?></p>
                                                  </div>                              
                                                </div>
                                            </div>
                                        </div>
                                      <?php } ?>
                                      <?php $i++ ;
                                      endforeach?>

                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
                <!-- #END# Colorful Panel Items With Icon -->
            </div>             
            <!-- END panel items with icon -->
