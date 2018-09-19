                                        
                                        <div class="panel panel-col-orange">
                                            <div class="panel-heading" role="tab" id="headingThree_17">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_19" href="#pelanggaran" aria-expanded="false"
                                                       aria-controls="collapseThree_17">
                                                        <i class="material-icons">report_problem</i> Pelanggaran
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="pelanggaran" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_17">    
     
                                              <div class="panel-body">
                                                  <?php $i=1; ?>
                                                  <?php foreach ($pelanggaran as $m): ?>                                              
                                                  <span class="direct-chat-timestamp pull-right">
                                                    <?php $tanggal=date_create("$m->tanggal"); 
                                                    echo date_format($tanggal,"d-M-Y"); ?> 
                                                  </span>
                                                  
                                                    Poin : <?php echo $m->poin ?> <br>
                                                    Pelanggaran : <?php echo $m->namapelanggaran ?> <br>
                                                    Tindakan : <?php echo $m->tindakan ?> <br><br>
                                                  <?php $i++ ;
                                                  endforeach?>                  
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

