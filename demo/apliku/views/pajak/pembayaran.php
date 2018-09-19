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
                                PEMBAYARAN PAJAK
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
                            <?php foreach($data as $m): ?>
                                <form method="POST" id="formkategori">
                            

<!-- batas -->
                                    <div class="col-sm-6">
                                        <b>Nomor Objek Pajak</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input value="<?php echo $m->nomorobjekpajak ?>" name="nomorobjekpajak" type="text" class="form-control" placeholder="Nomor Objek Pajak" />
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
                                        <b>Tarif Pajak</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input value="<?php echo $m->tarifpajak ?>" name="tarifpajak" type="text" class="form-control" placeholder="Tarif Pajakd" />
                                            </div>
                                        </div>
                                    </div>                                    

                                    <div class="col-sm-6">
                                        <b>Tanggal</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <!-- class="datepicker form-control" -->
                                                <input name="tanggal" class="form-control" type="text"  placeholder="Tanggal">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <b>Denda</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input value="0" name="denda" type="text" class="form-control" placeholder="Denda" />
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-sm-6">
                                        <b>Total</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input value="0" name="total" type="text" class="form-control" placeholder="Denda" />
                                            </div>
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
                            <?php endforeach ?>        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
        </div>

<script type="text/javascript">
function myFunction() {
    alert("I am an alert box!");
}
      function savebarang(){

        //var noinventaris=$('input[name=noinventaris]').val();
        var nomorobjekpajak= $('input[name=nomorobjekpajak]').val();
        var tanggal= $('input[name=tanggal]').val();
        var tarifpajak=$('input[name=tarifpajak]').val();
        var denda=$('input[name=denda]').val();
        var total=$('input[name=total]').val();

        var <?=$this->security->get_csrf_token_name();?> =$('input[name=<?=$this->security->get_csrf_token_name();?>]').val();

      $.ajax({
        method: "POST",
        dataType:"html",
        data: 'nomorobjekpajak='+nomorobjekpajak+'&tanggal='+tanggal+'&tarifpajak='+tarifpajak+'&denda='+denda+'&total='+total
        +'&<?=$this->security->get_csrf_token_name();?>='+<?=$this->security->get_csrf_token_name();?>,
        url:"<?php echo base_url();?>index.php/welcome/simpanpembayaran",
        success:function(res){
          document.getElementById("formkategori").reset();
          swal("Selamat!", "Data Anda Sudah Tersimpan!", "success");
        }
      })
      return false;
    }    
</script>                                             