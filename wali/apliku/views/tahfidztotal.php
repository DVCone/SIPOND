                                        
                                        <div class="panel panel-col-cyan">
                                            <div class="panel-heading" role="tab" id="headingtahfidz2">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_20" href="#totaltahfidz" aria-expanded="false"
                                                       aria-controls="collapseTwo_17">
                                                        <i class="material-icons">assignment</i> Total
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="totaltahfidz" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtahfidz2">
                                                <div class="panel-body">
                                                  <?php $i=1; ?>
                                                  <?php foreach ($tahfidz as $m): ?>
                                                                                          
                                                    <small><?php echo 'Total Tambahan : '.$m->tottambahan.' Halaman' ?></small><br>
                                                    <small><?php echo 'Total Murojaah : '.$m->totmurojaah.' Halaman' ?></small>
                                                  
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
