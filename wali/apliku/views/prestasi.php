                                        
                                        <div class="panel panel-col-cyan">
                                            <div class="panel-heading" role="tab" id="headingTwo_17">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_19" href="#prestasi" aria-expanded="false"
                                                       aria-controls="collapseTwo_17">
                                                        <i class="material-icons">stars</i> Prestasi
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="prestasi" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_17">
                                              <div class="panel-body">
                                                  <?php $i=1; ?>
                                                  <?php foreach ($prestasi as $m): ?>                                              
                                                  <span class="direct-chat-timestamp pull-right">
                                                    <?php $tanggal=date_create("$m->tanggal"); 
                                                    echo date_format($tanggal,"d-M-Y"); ?> 
                                                  </span>
                                                  
                                                    Prestasi : <?php echo $m->prestasi ?> <br>
                                                    Catatan : <?php echo $m->catatan ?> <br><br>
                                                  <?php $i++ ;
                                                  endforeach?>                  
                                              </div>
                                            </div>
                                        </div>
