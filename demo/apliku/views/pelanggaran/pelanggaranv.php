    <section class="content">  <!-- Jangan Dihilangkan.. Tutupnya ada di footer.php -->
        <div class="container-fluid">
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 align="center">
                                PENGISIAN DATA PELANGGARAN SISWA
                                <!-- <small>Harap Menisi Data Kesehatan <a href="">Dengan Teliti</a></small> -->
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <form method="POST" id="formkategori">

                                    <div class="col-sm-12">
                                        <b>Pencarian Siswa</b>
                                        <!-- <div class="form-group"> -->
                                                <select name="kelurahankecamatan" class="form-control show-tick" data-live-search="true" onchange="changeFunc();" id="selectBox">
                                                    <?php $i = 1 ?>
                                                    <?php foreach($data as $m): ?>
                                                        <option value="<?php echo $m->nis.'#'.$m->namasiswa.'#'.$m->kelas.'#'.$m->namaayah ?>"><?php echo $m->nis.' - '.$m->namasiswa.' Kelas '.$m->kelas.' Bin/ti '.$m->namaayah ?></option>

                                                    <?php endforeach ?>

                                                </select>
                                        <!-- </div> -->
                                    </div>

<!-- batas -->

                                    <div class="col-sm-12">
                                        <!-- <b>Data Siswa</b> -->
                                        <div class="form-group">

                                                <input id="nis" name="nis" type="text" class="form-control" readonly />
                                                <input id="namasiswa" name="namasiswa" type="text" class="form-control" readonly />
                                                <input id="kelas" name="kelas" type="text" class="form-control" readonly />
                                                <input id="namaayah" name="namaayah" type="text" class="form-control" readonly />

                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <b>Tanggal</b>
                                        <div class="form-group">
                                            <!-- <div class="form-line"> -->
                                                <input size = "10" type="date" name="tanggal" id="tanggalInput" value="<?php echo date("Y-m-d") ?>"  required />
                                            <!-- </div> -->
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <b>Nama Pelanggaran</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="namapelanggaran" type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <b>Tindakan</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="tindakan" type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <b>Poin</b>
                                        <div class="input-group spinner" data-trigger="spinner">
                                            <div class="form-line">
                                                <input name="poin" type="text" class="form-control text-center" value="1" data-rule="quantity">
                                            </div>
                                            <span class="input-group-addon">
                                                <a href="javascript:;" class="spin-up" data-spin="up"><i class="glyphicon glyphicon-chevron-up"></i></a>
                                                <a href="javascript:;" class="spin-down" data-spin="down"><i class="glyphicon glyphicon-chevron-down"></i></a>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-sm-9">
                                        <b>Catatan</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="catatan" type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
                                            <button type="reset" class="btn btn-danger waves-effect">Batalkan Isian</button>
                                            <button class="btn btn-primary waves-effect" data-type="success" onclick="return simpan();">Simpan Data</button>
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
   function changeFunc() {
    var selectBox = document.getElementById("selectBox");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;

    var res = selectedValue.split("#");

    document.getElementById("nis").value=res[0];
    document.getElementById("namasiswa").value=res[1];
    document.getElementById("kelas").value=res[2];
    document.getElementById("namaayah").value=res[3];
    //alert(selectedValue);
   }

      function simpan(){

        var nis= $('input[name=nis]').val();
        var tanggal=$('input[name=tanggal]').val();
        var namapelanggaran=$('input[name=namapelanggaran]').val();
        var tindakan=$('input[name=tindakan]').val();
        var poin=$('input[name=poin]').val();
        var catatan=$('input[name=catatan]').val();


        var <?=$this->security->get_csrf_token_name();?> =$('input[name=<?=$this->security->get_csrf_token_name();?>]').val();

      $.ajax({
        method: "POST",
        dataType:"html",
        data: 'nis='+nis+'&tanggal='+tanggal+'&catatan='+catatan+'&namapelanggaran='+namapelanggaran+'&tindakan='+tindakan+'&poin='+poin
        +'&<?=$this->security->get_csrf_token_name();?>='+<?=$this->security->get_csrf_token_name();?>,
        url:"<?php echo base_url();?>index.php/pelanggaran/simpan",
        success:function(res){
          document.getElementById("formkategori").reset();
          swal("Selamat!", "Data Anda Sudah Tersimpan!", "success");
        }
      })
      return false;
    }

// $(function(){
//     $("#tanggalInput").datepicker({
//         dateFormat:"yy-mm-dd"
//         ,changeMonth:true
//         ,changeYear:true
//         ,yearRange:"1930"
//     });
//
// })
</script>
