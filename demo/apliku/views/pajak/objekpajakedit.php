    <section class="content">  <!-- Jangan Dihilangkan.. Tutupnya ada di footer.php -->
        <div class="container-fluid">
            <div class="block-header">
                <h2 align="center">DiskomInfo Jogja</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                PENGEDITAN DATA BARANG
                                <small>Harap Menisi Data <a href="">Dengan Sebenar-benarnya</a></small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <?php foreach($data as $m): ?>
                                <form method="POST" id="formkategori" action="<?php echo base_url();?>index.php/welcome/simpaneditobjekpajak">
                                
                                    <div class="col-sm-6">
                                        <b>Nomor Objek Pajak</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input value="<?php echo $m->nomorobjekpajak ?>" name="nomorobjekpajak" type="text" class="form-control" placeholder="Nomor Objek Pajak" readonly />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <b>Nama Pemilik</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input value="<?php echo $m->namapemilik ?>" name="namapemilik" type="text" class="form-control" placeholder="Nama Pemilik" />
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-sm-6">
                                        <b>Alamat</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input value="<?php echo $m->alamat ?>" name="alamat" type="text" class="form-control" placeholder="Alamat" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <b>Luas Bumi</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input value="<?php echo $m->luasbumi ?>" name="luasbumi" type="text" class="form-control" placeholder="Luas Bumi" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <b>Kelas Bumi</b>
                                        <div class="form-group">
                                                <select name="kelasbumi" class="form-control show-tick" data-live-search="true">                                                
                                                        <option value="AB">AB</option>
                                                        <option value="AC">AC</option>
                                                        <option value="BA">BA</option>
                                                        <option value="BB">BB</option>

                                                </select>
                                        </div>
                                    </div> 

                                    <div class="col-sm-6">
                                        <b>Luas Bangunan</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input value="<?php echo $m->luasbangunan ?>" name="luasbangunan" type="text" class="form-control" placeholder="Luas Bangunan" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <b>Kelas Bangunan</b>
                                        <div class="form-group">
                                                <select name="kelasbangunan" class="form-control show-tick" data-live-search="true">                                                
                                                        <option value="01">01</option>
                                                        <option value="02">02</option>
                                                        <option value="03">03</option>
                                                        <option value="04">04</option>

                                                </select>
                                        </div>
                                    </div> 



                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
                                            <button type="reset" class="btn btn-danger waves-effect">Batalkan Isian</button>
                                            <button class="btn btn-primary waves-effect" data-type="success" onclick="return savebarang();">Simpan Data</button>
                                        </div>     
                                    </div>     
                                

  
                                </form>  
                                <?php endforeach ?>       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
        </div>