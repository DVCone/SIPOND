    <section class="content">  <!-- Jangan Dihilangkan.. Tutupnya ada di footer.php -->
        <div class="container-fluid">
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 align="center">
                                SETTING MATA PELAJARAN
                                <!-- <small>Harap Menisi Data Kesehatan <a href="">Dengan Teliti</a></small> -->
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <form method="POST" id="formkategori">

                                    <div class="col-sm-12">
                                        <b>Nama Pegawai</b>
                                        <!-- <div class="form-group"> -->
                                                <select name="kodepegawai" id="kodepegawai" class="form-control show-tick" data-live-search="true" id="selectBox">
                                                    <?php $i = 1 ?>
                                                    <?php foreach($pegawai as $m): ?>
                                                        <option value="<?php echo $m->nik ?>"><?php echo $m->nik.' - '.$m->nama ?></option>

                                                    <?php endforeach ?>

                                                </select>
                                        <!-- </div> -->
                                    </div>


                                    <div class="col-sm-12">
                                        <b>Mata Pelajaran</b>
                                        <!-- <div class="form-group"> -->
                                                <select name="kodemapel" id="kodemapel" class="form-control show-tick" data-live-search="true" id="selectBox">
                                                    <?php $i = 1 ?>
                                                    <?php foreach($mapel as $m): ?>
                                                        <option value="<?php echo $m->kodemapel ?>"><?php echo $m->kodemapel.' - '.$m->namamapel ?></option>

                                                    <?php endforeach ?>

                                                </select>
                                        <!-- </div> -->
                                    </div>

                                    <div class="col-sm-12">
                                        <b>Kelas</b>
                                        <!-- <div class="form-group"> -->
                                                <select name="kodekelas" id="kodekelas" class="form-control show-tick" data-live-search="true" id="selectBox">
                                                    <?php $i = 1 ?>
                                                    <?php foreach($kelas as $m): ?>
                                                        <option value="<?php echo $m->namakelas ?>"><?php echo $m->namakelas ?></option>

                                                    <?php endforeach ?>

                                                </select>
                                        <!-- </div> -->
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
                                            <button type="reset" class="btn btn-danger waves-effect">Batalkan Isian</button>
                                            <button class="btn btn-primary waves-effect" data-type="success" onclick="return simpansettingmapel();">Simpan Data</button>
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

<!-- batas -->
<script type="text/javascript">
      function simpansettingmapel(){

        var pegawai= $('#kodepegawai').val();
        var mapel=$('#kodemapel').val();
        var kelas=$('#kodekelas').val();

        var <?=$this->security->get_csrf_token_name();?> =$('input[name=<?=$this->security->get_csrf_token_name();?>]').val();

      $.ajax({
        method: "POST",
        dataType:"html",
        data: 'pegawai='+pegawai+'&mapel='+mapel+'&kelas='+kelas+'&<?=$this->security->get_csrf_token_name();?>='+<?=$this->security->get_csrf_token_name();?>,
        url:"<?php echo base_url();?>index.php/nilai/simpan",
        success:function(res){
          //document.getElementById("formkategori").reset();
          swal("Selamat!", "Data Anda Sudah Tersimpan!", "success");
        }
      })
      return false;
    }


</script>
