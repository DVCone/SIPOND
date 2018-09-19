<section class="content">  <!-- Jangan Dihilangkan.. Tutupnya ada di footer.php -->
    <div class="container-fluid">
        <!-- Widgets -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2 align="center">
                            SETTING SPP DAN KEUANGAN RUTIN
                            <!-- <small>Harap Menisi Data Kesehatan <a href="">Dengan Teliti</a></small> -->
                        </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <form method="POST" id="form_pembayaran_spp">

                                   <div class="col-sm-12">
                                       <b>Pencarian Siswa</b>
                                       <!-- <div class="form-group"> -->
                                               <select name="cari_siswa" class="form-control show-tick" data-live-search="true" onchange="changeFunc();" id="selectBox">
                                                   <option value="" selected></option>
                                                   <?php $i = 1 ?>
                                                   <?php foreach($data as $m): ?>
                                                       <option value="<?php echo $m->nis.'#'.$m->uangpangkal.'#'.$m->daftarulang.'#'.$m->spp ?>"><?php echo $m->nis.' - '.$m->namasiswa.' Kelas '.$m->kelas.' Bin/ti '.$m->namaayah ?></option>

                                                   <?php endforeach ?>

                                               </select>
                                       <!-- </div> -->
                                   </div>
   <!-- batas -->
                                   <div class="col-sm-4">
                                       <b>SPP</b>
                                       <div class="form-group">
                                           <!-- <div class="form-line"> -->
                                             <input id="nis" name="nis" type="hidden" class="form-control" readonly />
                                               <input id="spp" name="spp" type="text" class="form-control" />
                                           <!-- </div> -->
                                       </div>
                                   </div>
                                   <div class="col-sm-4">
                                       <b>Uang Pangkal</b>
                                       <div class="form-group">
                                           <!-- <div class="form-line"> -->
                                               <input id="uangpangkal" name="uangpangkal" type="text" class="form-control" />
                                           <!-- </div> -->
                                       </div>
                                   </div>
                                   <div class="col-sm-4">
                                       <b>Daftar Ulang</b>
                                       <div class="form-group">
                                           <!-- <div class="form-line"> -->
                                               <input id="daftarulang" name="daftarulang" type="text" class="form-control" />
                                           <!-- </div> -->
                                       </div>
                                   </div>
   <!-- batas -->


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
   $.validator.addMethod("regex", function(value, element, regexp) {
      var re = new RegExp(regexp);
      return this.optional(element) || re.test(value);
   }, "Please check your input.");

   $.validator.addMethod("valueNotEquals", function(value, element, arg){
      return arg !== value;
   }, "Pilih salah satu siswa!!");

   var regex = "^[a-zA-Z0-9` ]*$";

   $("#form_pembayaran_spp").validate({
   rules: {
   nis: {
   required: true
   },
      cari_siswa: {
      required: true,
   }
   },
      messages: {
      cari_siswa: {
      required: "Please Select Siswa FIrst!!"
   }
   },
   submitHandler: function() {
      var nis= $('input[name=nis]').val();
      var daftarulang=$('input[name=daftarulang]').val();
      var uangpangkal=$('input[name=uangpangkal]').val();
      var spp=$('input[name=spp]').val();

      var <?=$this->security->get_csrf_token_name();?> =$('input[name=<?=$this->security->get_csrf_token_name();?>]').val();

      $.ajax({
      method: "POST",
         dataType:"html",
         data: 'nis='+nis+'&spp='+spp+'&uangpangkal='+uangpangkal+'&daftarulang='+daftarulang
         +'&<?=$this->security->get_csrf_token_name();?>='+<?=$this->security->get_csrf_token_name();?>,
         url:"<?php echo base_url();?>index.php/keuangansettingsiswa/simpan",
         success:function(res){
            document.getElementById("form_pembayaran_spp").reset();
            swal("Selamat!", "Data Anda Sudah Tersimpan!", "success");
         }
      })
         return false;

   }
   });
});


function changeFunc() {
   var selectBox = document.getElementById("selectBox");
   var selectedValue = selectBox.options[selectBox.selectedIndex].value;

   var res = selectedValue.split("#");

   document.getElementById("nis").value=res[0];
   document.getElementById("uangpangkal").value=res[1];
   document.getElementById("daftarulang").value=res[2];
   document.getElementById("spp").value=res[3];
   //alert(selectedValue);

}

</script>
