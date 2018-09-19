    <section class="content">  <!-- Jangan Dihilangkan.. Tutupnya ada di footer.php -->
        <div class="container-fluid">
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 align="center">
                                PENGISIAN DATA MATA PELAJARAN
                                <!-- <small>Harap Menisi Data Kesehatan <a href="">Dengan Teliti</a></small> -->
                            </h2>

                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <form method="POST" id="form_data_kesehatan_siswa">
<!-- batas -->

                                    <div class="col-sm-2">
                                        <b>Kode Mapel</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="kodemapel" id="kodemapel" type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <b>Nama Pelajaran</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="namamapel" id="namamapel" type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <b>Arabic</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="arabic" id="arabic" type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <b>Kategori</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                              <select name="kategori" class="form-control show-tick" data-live-search="true" id="kategori">
                                                 <option value="ILMU UMUM">ILMU UMUM</option>
                                                 <option value="ILMU AGAMA">ILMU AGAMA</option>
                                                 <option value="ILMU BAHASA">ILMU BAHASA</option>
                                              </select>
                                            </div>
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
      kodemapel: {
      required: true,
      lettersonly: true
   },
      namamapel: {
      lettersonly: true
   },
   },
      errorPlacement: function(error, element) {
         if(element.attr("kodemapel") == "kodemapel") {
            error.appendTo( $('#errorBox')  );

         } else {
            error.insertAfter(element.parent());

         }

      },
      submitHandler: function() {
         var kodemapel= $('input[name=kodemapel]').val();
         var namamapel=$('input[name=namamapel]').val();
         var arabic=$('input[name=arabic]').val();
         var kategori=$('select[name=kategori]').val();

         var <?=$this->security->get_csrf_token_name();?> =$('input[name=<?=$this->security->get_csrf_token_name();?>]').val();

         $.ajax({
         method: "POST",
            dataType:"html",
            data: 'kodemapel='+kodemapel+'&namamapel='+namamapel+'&arabic='+arabic+'&kategori='+kategori+
            '&<?=$this->security->get_csrf_token_name();?>='+<?=$this->security->get_csrf_token_name();?>,
            url:"<?php echo base_url();?>index.php/mapel/simpan",
            success:function(res){
              document.getElementById("kodemapel").value="";
              document.getElementById("namamapel").value="";
              document.getElementById("arabic").value="";
               //document.getElementById("form_data_kesehatan_siswa").reset();
               swal("Selamat!", "Data Anda Sudah Tersimpan!", "success");
            }
         })
            return false;
      }
   });
});
// $(function(){
//     $("#tanggalInput").datepicker({
//         dateFormat:"yy-mm-dd"
//         ,changeMonth:true
//         ,changeYear:true
//         ,yearRange:"1930"
//     });
//
// })
// function changeFunc() {
//    var selectBox = document.getElementById("cari_siswa");
//    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
//
//    var res = selectedValue.split("#");
//
//    document.getElementById("nis").value=res[0];
//    document.getElementById("namasiswa").value=res[1];
//    document.getElementById("kelas").value=res[2];
//    document.getElementById("namaayah").value=res[3];
//    //alert(selectedValue);
// }



</script>
