                                        
                                        <div class="panel panel-col-teal">
                                            <div class="panel-heading" role="tab" id="headingThree_17">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_19" href="#kesehatan" aria-expanded="false"
                                                       aria-controls="collapseThree_17">
                                                        <i class="material-icons">accessibility</i> UKP / Kesehatan
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="kesehatan" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_17">
                                              <div class="panel-body">
                                                  <?php $i=1; ?>
                                                  <?php foreach ($kesehatan as $m): ?>                                              
                                                  <span class="direct-chat-timestamp pull-right">
                                                    <?php $tanggal=date_create("$m->tanggal"); 
                                                    echo date_format($tanggal,"d-M-Y"); ?> 
                                                  </span>
                                                  
                                                    Keluhan : <?php echo $m->keluhan ?> <br>
                                                    Obat : <?php echo $m->obat ?> <br>
                                                    Catatan : <?php echo $m->catatan ?> <br><br>
                                                  <?php $i++ ;
                                                  endforeach?>                  
                                              </div>
                                            </div>
                                        </div>
