
                                        <div class="panel panel-col-cyan">
                                            <div class="panel-heading" role="tab" id="headingkeuangan2">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_21" href="#uangsaku" aria-expanded="false"
                                                       aria-controls="collapseTwo_17">
                                                        <i class="material-icons">monetization_on</i> Uang Saku
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="uangsaku" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingkeuangan2">
                                                <div class="panel-body">
                                                    
                <?php
                foreach($datauangsaku as $n){ ?>
                <small>
                    <span class="direct-chat-timestamp pull-right">
                      <?php echo "Rp. ".number_format($n['totuangsakumasuk'],0,",",".") ; ?> 
                    </span>                
                    Total Masuk : <br>
                    <span class="direct-chat-timestamp pull-right">
                      <?php echo "Rp. ".number_format($n['totuangsakukeluar'],0,",","."); ?> 
                    </span>                      
                    Total Keluar : <br>

                    <h5 class="widget-user-desc"></h5>
    
                    <?php 
                    $tanggal = $n['tanggalmasukakhir'];
                    $tanggal=date_create($tanggal); 
                    if ($tanggal != '')
                    {
                    ?>

                    <span class="direct-chat-timestamp pull-right">
                      <?php echo date_format($tanggal,"d-M"); ?> 
                    </span>   
                    Tgl Masuk Terakhir :<br>
                    <span class="direct-chat-timestamp pull-right">
                      <?php echo "Rp. ".number_format($n['uangmasukakhir'],0,",","."); } ?>
                    </span>                      
                    Dengan Jumlah : <br>
                    

                    <?php 
                    $tanggal = $n['tanggalkeluarakhir'];
                    $tanggal=date_create($tanggal); 
                    if ($tanggal != '')
                    {
                    ?>                
                    <span class="direct-chat-timestamp pull-right">
                      <?php echo date_format($tanggal,"d-M"); ?> 
                    </span>                           
                    Tgl Keluar Terakhir : <br>
                    <span class="direct-chat-timestamp pull-right">
                      <?php echo "Rp. ".number_format($n['uangkeluarakhir'],0,",","."); } ?>
                    </span>                       
                    Dengan Jumlah : <br>    
                    
                    <b><h5 class="widget-user-desc"></h5>
                    <span class="direct-chat-timestamp pull-right">
                      <?php echo "Rp. ".number_format($n['totsisa'],0,",","."); ?> 
                    </span>                    
                    Total SISA : <br>
                    </b>
                </small>
                  <?php
                
                } ?>

                                                </div>
                                            </div>
                                        </div>


        


