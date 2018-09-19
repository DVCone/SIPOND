    <section class="content">  <!-- Jangan Dihilangkan.. Tutupnya ada di footer.php -->
        <div class="container-fluid">
<!--             <div class="block-header">
                <h2 align="center">Set Informasi Sekolah</h2>
            </div> -->

            <!-- Tabs With Icon Title -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Isikan Data Informasi Sekolah
                            </h2>
                        </div>
                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#home_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">home</i> SEKOLAH
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#profile_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">face</i> KONTAK
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#messages_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">email</i> ALAMAT
                                    </a>
                                </li>
                                <li>
                                    <a href="#image_upload_icon_title" data-toggle="tab">
                                        <i class="material-icons">cloud_upload</i> UNGGAH BERKAS
                                    </a>
                                </li>
                            </ul>

                            <?php foreach($data as $m): ?>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home_with_icon_title">
                                    <form method="POST" id="formkategori">

                                        
                                            <b>Nama Sekolah</b>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input name="namasekolah" type="text" class="form-control" value="<?php echo $m->namasekolah ?>" />
                                                </div>
                                            </div>
                                        
                                        
                                            <b>Motto</b>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input name="moto" type="text" class="form-control" value="<?php echo $m->moto ?>" />
                                                </div>
                                            </div>
                                        
                                       
                                            <b>Visi dan Misi</b>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input name="visimisi" type="text" class="form-control" value="<?php echo $m->visimisi ?>" />
                                                </div>
                                            </div>
                                                 

                                            <div class="form-group">
                                                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
                                                <button type="reset" class="btn btn-danger waves-effect">Batalkan Isian</button>
                                                <button class="btn btn-primary waves-effect" data-type="success" onclick="return simpansekolah();">Simpan Data</button>
                                            </div>     
                                    </form>

                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                                    <form method="POST" id="formkategori">

                                        
                                            <b>Kepala Sekolah</b>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input name="kepalasekolah" type="text" class="form-control" value="<?php echo $m->kepalasekolah ?>" />
                                                </div>
                                            </div>
                                        
                                        
                                            <b>No Telpon</b>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input name="notelpon" type="text" class="form-control" value="<?php echo $m->notelpon ?>" />
                                                </div>
                                            </div>
                                        
                                       
                                            <b>No HP</b>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input name="nohp" type="text" class="form-control" value="<?php echo $m->nohp ?>" />
                                                </div>
                                            </div>
 
                                             <b>Email</b>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input name="email" type="text" class="form-control" value="<?php echo $m->email ?>" />
                                                </div>
                                            </div>                                                

                                            <div class="form-group">
                                                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
                                                <button type="reset" class="btn btn-danger waves-effect">Batalkan Isian</button>
                                                <button class="btn btn-primary waves-effect" data-type="success" onclick="return simpankontak();">Simpan Data</button>
                                            </div>     
                                    </form>

                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="messages_with_icon_title">
                                    <form method="POST" id="formkategori">

                                            <b>Alamat</b>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input name="alamat" type="text" class="form-control" value="<?php echo $m->alamat ?>" />
                                                </div>
                                            </div>
                                        
                                        
                                            <b>Kecamatan</b>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input name="kecamatan" type="text" class="form-control" value="<?php echo $m->kecamatan ?>" />
                                                </div>
                                            </div>
                                        
                                       
                                            <b>Kabupaten</b>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input name="kabupaten" type="text" class="form-control" value="<?php echo $m->kabupaten ?>" />
                                                </div>
                                            </div>
 
                                             <b>Provinsi</b>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input name="provinsi" type="text" class="form-control" value="<?php echo $m->provinsi ?>" />
                                                </div>
                                            </div>    
                                                 

                                            <div class="form-group">
                                                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
                                                <button type="reset" class="btn btn-danger waves-effect">Batalkan Isian</button>
                                                <button class="btn btn-primary waves-effect" data-type="success" onclick="return simpanalamat();">Simpan Data</button>
                                            </div>     
                                    </form>

                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="image_upload_icon_title">
                                        <div class="form-group">
                                            <?php
                                                echo form_open_multipart('adminsetsekolah/do_upload');
                                            ?>
                                            <div class="col-md-6">
                                                <b>Unggah Logo Sekolah</b>
                                                <div class="form-line">
                                                    <div class="alert alert-danger" role="alert" style="display: none;" id="upload_error">
                                                        <p></p>
                                                    </div>
                                                            
                                                    <!-- <input type="hidden" name="nis_siswa" id="nis_siswa">                                                 -->
                                                    <input type="file" class="form-control-file" name="upload_logo" id="upload_logo" />                                                
                                                    <!-- <input type="hidden" id="csrf" name="{{ csrf_name }}" value="{{ csrf_hash }}"><br> -->
                                                    <span>*File Harus: jpg atau png, Maksimal 1 MB </span>
                                                    <br>

                                                    <div class="progress" style="display: none;" id="progress">
                                                        <div id="progress-bar" class="progress-bar bg-teal progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <b>Unggah Kop Surat Sekolah</b>
                                                <div class="form-line">
                                                    <div class="alert alert-danger" role="alert" style="display: none;" id="upload_error">
                                                        <p></p>
                                                    </div>
                                                            
                                                    <!-- <input type="hidden" name="nis_siswa" id="nis_siswa">                                                 -->
                                                    <input type="file" class="form-control-file" name="upload_kopsurat" id="upload_kopsurat" />                                                
                                                    <!-- <input type="hidden" id="csrf" name="{{ csrf_name }}" value="{{ csrf_hash }}"><br> -->
                                                    <span>*File Harus: jpg atau png, Maksimal 1 MB </span>
                                                    <br>

                                                    <div class="progress" style="display: none;" id="progress">
                                                        <div id="progress-bar" class="progress-bar bg-teal progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                                <button type="reset" class="btn btn-danger waves-effect">Batalkan Isian</button>
                                                <button class="btn btn-primary waves-effect" type="submit">Simpan Data</button>
                                        </div> 
                                        <?php echo form_close(); ?>
                                </div>
                            </div>
                            <?php endforeach ?>  
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Tabs With Icon Title -->
            <!-- CPU Usage -->
        </div>

<script type="text/javascript">
      function simpansekolah(){

        var namasekolah= $('input[name=namasekolah]').val();
        var moto=$('input[name=moto]').val();
        var visimisi=$('input[name=visimisi]').val();

        var <?=$this->security->get_csrf_token_name();?> =$('input[name=<?=$this->security->get_csrf_token_name();?>]').val();

      $.ajax({
        method: "POST",
        dataType:"html",
        data: 'namasekolah='+namasekolah+'&moto='+moto+'&visimisi='+visimisi
        +'&<?=$this->security->get_csrf_token_name();?>='+<?=$this->security->get_csrf_token_name();?>,
        url:"<?php echo base_url();?>index.php/adminsetsekolah/simpansekolah",
        success:function(res){
          //document.getElementById("formkategori").reset();
          swal("Tersimpan!", "Data Sekolah Sudah Tersimpan!", "success");
        }
      })
      return false;
    } 
    function simpankontak(){

        var kepalasekolah= $('input[name=kepalasekolah]').val();
        var notelpon=$('input[name=notelpon]').val();
        var nohp=$('input[name=nohp]').val();
        var email=$('input[name=email]').val();

        var <?=$this->security->get_csrf_token_name();?> =$('input[name=<?=$this->security->get_csrf_token_name();?>]').val();

      $.ajax({
        method: "POST",
        dataType:"html",
        data: 'kepalasekolah='+kepalasekolah+'&notelpon='+notelpon+'&nohp='+nohp+'&email='+email
        +'&<?=$this->security->get_csrf_token_name();?>='+<?=$this->security->get_csrf_token_name();?>,
        url:"<?php echo base_url();?>index.php/adminsetsekolah/simpankontak",
        success:function(res){
          //document.getElementById("formkategori").reset();
          swal("Tersimpan!", "Data Sekolah Sudah Tersimpan!", "success");
        }
      })
      return false;
    } 
    function simpanalamat(){

        var alamat= $('input[name=alamat]').val();
        var kecamatan=$('input[name=kecamatan]').val();
        var kabupaten=$('input[name=kabupaten]').val();
        var provinsi=$('input[name=provinsi]').val();

        var <?=$this->security->get_csrf_token_name();?> =$('input[name=<?=$this->security->get_csrf_token_name();?>]').val();

      $.ajax({
        method: "POST",
        dataType:"html",
        data: 'alamat='+alamat+'&kecamatan='+kecamatan+'&kabupaten='+kabupaten+'&provinsi='+provinsi
        +'&<?=$this->security->get_csrf_token_name();?>='+<?=$this->security->get_csrf_token_name();?>,
        url:"<?php echo base_url();?>index.php/adminsetsekolah/simpanalamat",
        success:function(res){
          //document.getElementById("formkategori").reset();
          swal("Tersimpan!", "Data Alamat Sekolah Sudah Tersimpan!", "success");
        }
      })
      return false;
    }      
    
</script>                                             