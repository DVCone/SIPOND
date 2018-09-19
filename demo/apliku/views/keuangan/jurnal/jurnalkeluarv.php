    <section class="content">  <!-- Jangan Dihilangkan.. Tutupnya ada di footer.php -->
        <div class="container-fluid">
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 align="center">
                                JURNAL KAS KELUAR
                                <!-- <small>Harap Menisi Data Kesehatan <a href="">Dengan Teliti</a></small> -->
                            </h2>
                            
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <form method="POST" id="form_data_kesehatan_siswa">

                                    <div class="col-sm-4">
                                        <b>Tanggal</b>
                                        <div class="form-group">
                                            <!-- <div class="form-line"> -->
                                                <input size = "15" type="date" class="form-control"name="tanggal" id="tanggalInput" value="<?php echo date("Y-m-d") ?>"  required />
                                            <!-- </div> -->
                                        </div>
                                    </div>


                                    <div class="col-sm-8">
                                        <b>Keterangan</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="keterangan" type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-12">
                                        <b>Rekening Kas</b>
                                        <!-- <div class="form-group"> -->
                                                <select name="cari_siswa" id="cari_siswa" class="form-control show-tick" data-live-search="true" onchange="changeFunc();">
                                                    
                                                    <?php foreach($data as $m): 

                                                        $koderekening=$m->koderekening;
                                                        if (substr($koderekening,0,4)=='1000') {

                                                        ?>
                                                        
                                                        <option value="<?php echo $m->koderekening ?>"><?php echo $m->koderekening.' - '.$m->namarekening ?></option>

                                                    <?php } 
                                                    endforeach ?>

                                                </select>
                                        <!-- </div> -->
                                    </div>

                                    <div class="col-sm-12">
                                        <b>Rekening Kas Keluar</b>
                                        <!-- <div class="form-group"> -->
                                                <select name="kaskeluar" id="kaskeluar" class="form-control show-tick" data-live-search="true">
                                                    
                                                    <?php foreach($data as $m): 

                                                        $koderekening=$m->koderekening;
                                                        if (substr($koderekening,0,4)!='1000') {

                                                        ?>
                                                        
                                                        <option value="<?php echo $m->koderekening ?>"><?php echo $m->koderekening.' - '.$m->namarekening ?></option>

                                                    <?php } 
                                                    endforeach ?>


                                                </select>
                                        <!-- </div> -->
                                    </div>                                    

<!-- batas -->

                                    <div class="col-sm-12">
                                        <!-- <b>Data Siswa</b> -->
                                        <div class="form-group">
<div id="errorBox"></div>

                                                <input id="nis" name="nis" type="text" class="form-control" readonly />
                                                <input id="namasiswa" name="namasiswa" type="text" class="form-control" readonly />
                                                <input id="kelas" name="kelas" type="text" class="form-control" readonly />
                                                <input id="namaayah" name="namaayah" type="text" class="form-control" readonly />

                                        </div>
                                    </div>




                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
                                            <button type="reset" class="btn btn-danger waves-effect">Batalkan Isian</button>
                                            <button class="btn btn-primary waves-effect" type="submit">Simpan Data</button>
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

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>                                      
<script type="text/javascript">
$(document).ready(function() {
   jQuery.validator.addMethod("lettersonly", function(value, element) {
      return this.optional(element) || /^[a-z\s]+$/i.test(value);

   }, "Isi Dengan huruf atau spasi");
   $('#form_data_kesehatan_siswa').validate({
   rules: {
   nis: {
   required: true
   },
      keluhan: {
      required: true,
      lettersonly: true
   },
      obat: {
      lettersonly: true
   },
      catatan: {
      lettersonly: true
   },
   },
      errorPlacement: function(error, element) {
         if(element.attr("name") == "nis") {
            error.appendTo( $('#errorBox')  );

         } else {
            error.insertAfter(element.parent());

         }

      },
      submitHandler: function() {
         var nis= $('input[name=nis]').val();
         var keluhan=$('input[name=keluhan]').val();
         var obat=$('input[name=obat]').val();
         var catatan=$('input[name=catatan]').val();
         var tanggal=$('input[name=tanggal]').val();

         var <?=$this->security->get_csrf_token_name();?> =$('input[name=<?=$this->security->get_csrf_token_name();?>]').val();

         $.ajax({
         method: "POST",
            dataType:"html",
            data: 'nis='+nis+'&keluhan='+keluhan+'&obat='+obat+'&catatan='+catatan+'&tanggal='+tanggal
            +'&<?=$this->security->get_csrf_token_name();?>='+<?=$this->security->get_csrf_token_name();?>,
            url:"<?php echo base_url();?>index.php/kesehatan/simpan",
            success:function(res){
               document.getElementById("form_data_kesehatan_siswa").reset();
               swal("Selamat!", "Data Anda Sudah Tersimpan!", "success");
            }
         })
            return false;
      }
   });
});

function changeFunc() {
   var selectBox = document.getElementById("cari_siswa");
   var selectedValue = selectBox.options[selectBox.selectedIndex].value;

   var res = selectedValue.split("#");

   document.getElementById("nis").value=res[0];
   document.getElementById("namasiswa").value=res[1];
   document.getElementById("kelas").value=res[2];
   document.getElementById("namaayah").value=res[3];
   //alert(selectedValue);
}



</script>
