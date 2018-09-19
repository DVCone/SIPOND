    <section class="content">  <!-- Jangan Dihilangkan.. Tutupnya ada di footer.php -->
        <div class="container-fluid">
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 align="center">
                                PENGISIAN BERITA KEPADA WALI SISWA
                                <!-- <small>Harap Menisi Data Kesehatan <a href="">Dengan Teliti</a></small> -->
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <form method="POST" id="formkategori">

                                    <div class="col-sm-12">
                                        <b>Pencarian Siswa</b>

                                    </div>

<!-- batas -->

                                    <div class="col-sm-3">
                                        <b>Tanggal</b>
                                        <div class="form-group">
                                            <!-- <div class="form-line"> -->
                                                <input size = "15" type="date" name="tanggal" id="tanggal" value="<?php echo date("Y-m-d") ?>"  required />
                                            <!-- </div> -->
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <b>Ditujukan</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="ditujukan" type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <b>Tertanda</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="pj" type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <b>Judul</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="judul" type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <b>Isi Berita</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea name="isi" id="isi" class="form-control" >Silahkan isi komentar anda</textarea>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
                                            <button type="reset" class="btn btn-danger waves-effect">Batalkan Isian</button>
                                            <button class="btn btn-primary waves-effect" data-type="success" onclick="return simpankesehatan();">Simpan Data</button>
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
var tanggal = $("#tanggal");
tanggal.datepicker({dateFormat: 'yy-mm-dd'});
$(function(){
    $("#tanggal").datepicker({
        dateFormat:"yy-mm-dd"
        ,changeMonth:true
        ,changeYear:true
        ,yearRange:"1930"
    });

})

      function simpankesehatan(){

        var isi= document.getElementById("isi").value;
        var pj=$('input[name=pj]').val();
        var judul=$('input[name=judul]').val();
        var ditujukan=$('input[name=ditujukan]').val();
        var tanggal=$('input[name=tanggal]').val();

        var <?=$this->security->get_csrf_token_name();?> =$('input[name=<?=$this->security->get_csrf_token_name();?>]').val();

      $.ajax({
        method: "POST",
        dataType:"html",
        data: 'isi='+isi+'&pj='+pj+'&judul='+judul+'&ditujukan='+ditujukan+'&tanggal='+tanggal
        +'&<?=$this->security->get_csrf_token_name();?>='+<?=$this->security->get_csrf_token_name();?>,
        url:"<?php echo base_url();?>index.php/berita/simpan",
        success:function(res){
          document.getElementById("formkategori").reset();
          swal("Selamat!", "Data Anda Sudah Tersimpan!", "success");
        }
      })
      return false;
    }


</script>
