    <section class="content">  <!-- Jangan Dihilangkan.. Tutupnya ada di footer.php -->
        <div class="container-fluid">
            <div class="block-header">
                <h2 align="center">Alhamdulillah Selesai</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                PENGISIAN DATA OBJEK PAJAK
                                <small>Harap Menisi Data Objek Pajak <a href="">Dengan Sebenar-benarnya</a></small>
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
                                <form method="POST" id="formkategori">

                                    <div class="col-sm-6">
                                        <b>Kelurahan Kecamatan</b>
                                        <div class="form-group">
                                                <select name="kelurahankecamatan" class="form-control show-tick" data-live-search="true">
                                                    <?php $i = 1 ?>
                                                    <?php foreach($data as $m): ?>                                                
                                                        <option value="<?php echo $m->kodekecamatan.$m->kodekelurahan ?>"><?php echo $m->namakecamatan.' - '.$m->namakelurahan ?></option>

                                                    <?php endforeach ?> 

                                                </select>
                                        </div>
                                    </div>                                

<!-- batas -->

                                    <div class="col-sm-6">
                                        <b>Nama Pemilik</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="namapemilik" type="text" class="form-control" placeholder="Nama Pemilik" />
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-sm-6">
                                        <b>Alamat</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="alamat" type="text" class="form-control" placeholder="Alamat" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <b>Luas Bumi</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="luasbumi" type="text" class="form-control" placeholder="Luas Bumi" />
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
                                                <input name="luasbangunan" type="text" class="form-control" placeholder="Luas Bangunan" />
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


                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
                                            <button type="reset" class="btn btn-danger waves-effect">Batalkan Isian</button>
                                            <button class="btn btn-primary waves-effect" data-type="success" onclick="return savebarang();">Simpan Data</button>
                                        </div>     
                                    </div>     
                                </form>       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
        </div>

<script type="text/javascript">
      function savebarang(){

        //var noinventaris=$('input[name=noinventaris]').val();
        var kelurahankecamatan= $('select[name=kelurahankecamatan]').val();
        var namapemilik= $('input[name=namapemilik]').val();
        var alamat=$('input[name=alamat]').val();
        var luasbumi=$('input[name=luasbumi]').val();
        var kelasbumi=$('select[name=kelasbumi]').val();
        var luasbangunan=$('input[name=luasbangunan]').val();
        var kelasbangunan=$('select[name=kelasbangunan]').val();

        var <?=$this->security->get_csrf_token_name();?> =$('input[name=<?=$this->security->get_csrf_token_name();?>]').val();

      $.ajax({
        method: "POST",
        dataType:"html",
        data: 'kelurahankecamatan='+kelurahankecamatan+'&namapemilik='+namapemilik+'&alamat='+alamat+'&luasbumi='+luasbumi+'&kelasbumi='+kelasbumi+'&luasbangunan='+luasbangunan+'&kelasbangunan='+kelasbangunan
        +'&<?=$this->security->get_csrf_token_name();?>='+<?=$this->security->get_csrf_token_name();?>,
        url:"<?php echo base_url();?>index.php/welcome/isiobjekpajak",
        success:function(res){
          document.getElementById("formkategori").reset();
          swal("Selamat!", "Data Anda Sudah Tersimpan!", "success");
        }
      })
      return false;
    }    
</script>                                             