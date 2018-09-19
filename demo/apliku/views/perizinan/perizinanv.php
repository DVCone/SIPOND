    <section class="content">  <!-- Jangan Dihilangkan.. Tutupnya ada di footer.php -->
        <div class="container-fluid">
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 align="center">
                                PENGISIAN DATA PERIZINAN SISWA
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

                                    <div class="col-sm-3">
                                        <b>Tanggal</b>
                                        <div class="form-group">
                                            <!-- <div class="form-line"> -->
                                                <input size = "15" type="date" name="tanggalizin" id="tanggalInput" value="<?php echo date("Y-m-d") ?>"  required />
                                            <!-- </div> -->
                                        </div>
                                    </div>

                                    <div class="col-sm-9">
                                        <b>Penjemput</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="penjemput" type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-12">
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
                                            <button class="btn btn-primary waves-effect" data-type="success" onclick="return simpanperizinan();" data-toggle="modal" id='btn-modal' data-target="#myModal" >Simpan Data</button>

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


             <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" style="width:80%">
                    <div class="modal-content">
                        <div id="printletter">
                            <div style="text-align: center;">
                              <img src="<?php echo base_url(); ?>gambar/kopnota.png" style="width: 80%;">
                            </div>
                        <br>
                        <table width="100%" class="table-p">
                        <tbody>
                           <tr>
                              <td></td>
                              <td class="width-prints">Nama Siswa</td>
                              <td style="width: 1%;">:</td>
                              <td id="modalnamasiswa" width="30%"></td>
                              <td width="15%"></td>
                              <td style="width: 10%;" class="width-prints">Nama Ayah </td>
                              <td style="width: 1%;">:</td>
                              <td style="width: 30%;" id="modalnamaayah"></td>
                           </tr>
                           <tr>
                              <td width="50px"></td>
                              <td style="width: 10%;">Kelas</td>
                              <td style="width: 1%;">:</td>
                              <td id="modalkelas"></td>
                              <td style="width: 20%"></td>
                           </tr>
                        </tbody>
                        </table>
                        <table width="100%" style="line-height: 1px dashed #333;">
                            <tr>
                                <td style="width: 10em;"></td>
                                <td><h4 style="text-align: center;margin: 1.10em 0;">Surat Izin </h4></td>
                                <td style="text-align: right; width: 10em;"></td>
                        </table>
                        <table width="100%" style="font-size: 14px">
                            <tbody>
                                <tr>
                                    <td width="5%"></td>
                                    <td style="width: 15%;">Tanggal Izin</td>
                                    <td style="width: 1%;">:</td>
                                    <td id="modaltanggalizin" width="200px"></td>
                                </tr>
                                <tr>
                                    <td width="50px"></td>
                                    <td>Penjemput</td>
                                    <td>:</td>
                                    <td id="modalpenjemput"></td>
                                </tr>
                                <tr>
                                    <td width="50px"></td>
                                    <td>Catatan</td>
                                    <td>:</td>
                                    <td id="modalcatatan"></td>
                                </tr>
                            </tbody>

                        </table><br>
                        <div style="border-bottom: 1px dashed #333; text-align: center;">

                        </div>
                                <br><br>

                        <table width="100%" style="font-size: 14px">
                            <tbody>
                                <tr>
                                    <td width="5%"></td>
                                    <td style="width: 15%;"></td>
                                    <td style="width: 5%;"></td>
                                    <td ></td>
                                    <td width="25%"></td>
                                    <td id="modaltanggal" style="width: 15%;"></td>
                                    <td style="width: 5%;"></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td width="5%"></td>
                                    <td style="width: 15%;"></td>
                                    <td style="width: 5%;"></td>
                                    <td ></td>
                                    <td width="25%"></td>
                                    <td style="width: 15%;">Yang Memberi Izin</td>
                                    <td></td>
                                </tr>
                                <tr><td><br><br></td></tr>
                                <tr>
                                    <td width="5%"></td>
                                    <td style="width: 15%;"></td>
                                    <td style="width: 5%;"></td>
                                    <td ></td>
                                    <td width="25%"></td>
                                    <td id="modalpengguna" style="width: 15%;"></td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        <div class="modal-body">
                                <p id="demo"></p>
                        </div>
                        <div class="modal-footer">

                            <button type="button" class="btn btn-default btn-close" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="btn-modal-print">Print Perizinan</button>
                        </div>

                    </div>

                </div>
            </div>
<script src="<?php echo base_url('template/js/jQuery.print.min.js') ?>"></script>
<script type="text/javascript">
  $('#btn-modal-print').on('click', function () {
      $('#printletter').print();
  });


        var $tanggalInput = $("#tanggalInput");
        $tanggalInput.datepicker({dateFormat: 'yy-mm-dd'});

$(function(){
    $("#tanggalInput").datepicker({
        dateFormat:"yy-mm-dd"
        ,changeMonth:true
        ,changeYear:true
        ,yearRange:"1930"
    });

})
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

      function simpanperizinan(){

        var nis= $('input[name=nis]').val();
        var penjemput=$('input[name=penjemput]').val();
        var catatan=$('input[name=catatan]').val();
        var tanggalizin=$('input[name=tanggalizin]').val();

        var <?=$this->security->get_csrf_token_name();?> =$('input[name=<?=$this->security->get_csrf_token_name();?>]').val();

      $.ajax({
        method: "POST",
        dataType:"html",
        data: 'nis='+nis+'&penjemput='+penjemput+'&catatan='+catatan+'&tanggalizin='+tanggalizin
        +'&<?=$this->security->get_csrf_token_name();?>='+<?=$this->security->get_csrf_token_name();?>,
        url:"<?php echo base_url();?>index.php/perizinan/simpan",
        success:function(res){


            document.getElementById("modaltanggalizin").innerHTML = tanggalizin;
           // document.getElementById("modaltanggalpulang").innerHTML = tanggalkembali;
            document.getElementById("modalnamaayah").innerHTML = $('input[name=namaayah]').val();
            document.getElementById("modalnamasiswa").innerHTML = $('input[name=namasiswa]').val();
            document.getElementById("modalkelas").innerHTML = $('input[name=kelas]').val();
            document.getElementById("modalpenjemput").innerHTML = $('input[name=penjemput]').val();
            document.getElementById("modalcatatan").innerHTML = $('input[name=catatan]').val();
            document.getElementById("modaltanggal").innerHTML = tanggalizin;
            document.getElementById("modalpengguna").innerHTML = pengguna;
          //swal("Selamat!", "Data Anda Sudah Tersimpan!", "success");
            document.getElementById("formkategori").reset();
        }
      })
      return false;
    }

$('#btn-modal-print').click(function() {
   window.print()
})


</script>
