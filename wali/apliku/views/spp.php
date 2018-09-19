            <!-- panel 5 Keuangan-->
            <div class="row clearfix">
                <!-- Colorful Panel Items With Icon -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 id="depankeuangan" align="center">
                                Keuangan
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                    <div class="panel-group" id="accordion_21" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-col-pink">
                                            <div class="panel-heading" role="tab" id="headingkeuangan">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion_21" href="#spp" aria-expanded="true" aria-controls="collapseOne_17">
                                                        <i class="material-icons">insert_chart</i> SPP
                                                    </a>
                                                </h4>
                                            </div>

                                            <div id="spp" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingkeuangan">
                                                <div class="panel-body">
                                                <?php
                                                foreach($sppmon as $n){ ?>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <?php if ($n->juli > 0){ ?>
                                                            <button class="btn btn-success btn-lg btn-block waves-effect" type="button">Juli <span class="badge">Lunas</span></button>
                                                            <?php } else { ?>
                                                            <button class="btn btn-danger btn-lg btn-block waves-effect" type="button">Juli <span class="badge">x</span></button>
                                                            <?php }  ?>
                                                        </div> 
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <?php if ($n->agustus > 0){ ?>
                                                            <button class="btn btn-success btn-lg btn-block waves-effect" type="button">Agustus <span class="badge">Lunas</span></button>
                                                            <?php } else { ?>
                                                            <button class="btn btn-danger btn-lg btn-block waves-effect" type="button">Agustus <span class="badge">x</span></button>
                                                            <?php }  ?>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <?php if ($n->september > 0){ ?>
                                                            <button class="btn btn-success btn-lg btn-block waves-effect" type="button">September <span class="badge">Lunas</span></button>
                                                            <?php } else { ?>
                                                            <button class="btn btn-danger btn-lg btn-block waves-effect" type="button">September <span class="badge">x</span></button>
                                                            <?php }  ?>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <?php if ($n->oktober > 0){ ?>
                                                            <button class="btn btn-success btn-lg btn-block waves-effect" type="button">Oktober <span class="badge">Lunas</span></button>
                                                            <?php } else { ?>
                                                            <button class="btn btn-danger btn-lg btn-block waves-effect" type="button">Oktober <span class="badge">x</span></button>
                                                            <?php }  ?>
                                                        </div>                                                        


                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <?php if ($n->november > 0){ ?>
                                                            <button class="btn btn-success btn-lg btn-block waves-effect" type="button">November <span class="badge">Lunas</span></button>
                                                            <?php } else { ?>
                                                            <button class="btn btn-danger btn-lg btn-block waves-effect" type="button">November <span class="badge">x</span></button>
                                                            <?php }  ?>
                                                        </div> 
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <?php if ($n->desember > 0){ ?>
                                                            <button class="btn btn-success btn-lg btn-block waves-effect" type="button">Desember <span class="badge">Lunas</span></button>
                                                            <?php } else { ?>
                                                            <button class="btn btn-danger btn-lg btn-block waves-effect" type="button">Desember <span class="badge">x</span></button>
                                                            <?php }  ?>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <?php if ($n->januari > 0){ ?>
                                                            <button class="btn btn-success btn-lg btn-block waves-effect" type="button">Januari <span class="badge">Lunas</span></button>
                                                            <?php } else { ?>
                                                            <button class="btn btn-danger btn-lg btn-block waves-effect" type="button">Januari <span class="badge">x</span></button>
                                                            <?php }  ?>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <?php if ($n->februari > 0){ ?>
                                                            <button class="btn btn-success btn-lg btn-block waves-effect" type="button">Februari <span class="badge">Lunas</span></button>
                                                            <?php } else { ?>
                                                            <button class="btn btn-danger btn-lg btn-block waves-effect" type="button">Februari <span class="badge">x</span></button>
                                                            <?php }  ?>
                                                        </div>


                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <?php if ($n->maret > 0){ ?>
                                                            <button class="btn btn-success btn-lg btn-block waves-effect" type="button">Maret <span class="badge">Lunas</span></button>
                                                            <?php } else { ?>
                                                            <button class="btn btn-danger btn-lg btn-block waves-effect" type="button">Maret <span class="badge">x</span></button>
                                                            <?php }  ?>
                                                        </div> 
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <?php if ($n->april > 0){ ?>
                                                            <button class="btn btn-success btn-lg btn-block waves-effect" type="button">April <span class="badge">Lunas</span></button>
                                                            <?php } else { ?>
                                                            <button class="btn btn-danger btn-lg btn-block waves-effect" type="button">April <span class="badge">x</span></button>
                                                            <?php }  ?>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <?php if ($n->mei > 0){ ?>
                                                            <button class="btn btn-success btn-lg btn-block waves-effect" type="button">Mei <span class="badge">Lunas</span></button>
                                                            <?php } else { ?>
                                                            <button class="btn btn-danger btn-lg btn-block waves-effect" type="button">Mei <span class="badge">x</span></button>
                                                            <?php }  ?>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <?php if ($n->juni > 0){ ?>
                                                            <button class="btn btn-success btn-lg btn-block waves-effect" type="button">Juni <span class="badge">Lunas</span></button>
                                                            <?php } else { ?>
                                                            <button class="btn btn-danger btn-lg btn-block waves-effect" type="button">Juni <span class="badge">x</span></button>
                                                            <?php }  ?>
                                                        </div>
                                                    </div>
                                                <?php                
                                                } ?>
                                                </div>
                                            </div>
                                        </div>

