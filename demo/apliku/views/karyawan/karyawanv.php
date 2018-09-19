<section class="content">
    <!-- Jangan Dihilangkan.. Tutupnya ada di footer.php -->
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
                            Pengisian Data Guru / Karyawan
                        </h2>
                    </div>
                    <div class="body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <!--                                 <li role="presentation" class="active">
                                    <a href="#awal" data-toggle="tab">
                                        <i class="material-icons">home</i> Registrasi
                                    </a>
                                </li>   -->
                            <li role="presentation" class="active">
                                <a href="#home_with_icon_title" data-toggle="tab">
                                    <i class="material-icons">perm_identity</i> Biodata
                                </a>
                            </li>
                            <!-- <li role="presentation">
                                    <a href="#profile_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">face</i> Ayah
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#messages_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">pregnant_woman</i> Ibu
                                    </a>
                                </li> -->
                            <li role="presentation">
                                <a href="#alamat_with_icon_title" data-toggle="tab">
                                    <i class="material-icons">location_on</i> Alamat
                                </a>
                            </li>
                            <!-- <li role="presentation">
                                    <a href="#sekolah_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">school</i> Sekolah
                                    </a>
                                </li>  -->
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- BIODATA -->
                            <div role="tabpanel" class="tab-pane fade in active" id="home_with_icon_title">
                                <form method="POST" id="form_add_karyawan">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <b>Nama Guru / Karyawan</b>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input name="nama" type="text" class="form-control" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <b>Kota Lahir</b>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input name="kotalahir" type="text" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <b>Tanggal Lahir</b>
                                            <div class="form-group">
                                                <input type="date" class="form-control" name="tanggallahir" id="tanggalInput" value="<?php echo date(" Y-m-d ") ?>" required
                                                />
                                            </div>
                                        </div>


                                        <div class="col-sm-3">
                                            <b>Jenis Kelamin</b>
                                            <div class="form-group">
                                                <select name="jeniskelamin" class="form-control show-tick">
                                                    <option value="Pria">Pria</option>
                                                    <option value="Wanita">Wanita</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <b>Golongan Darah</b>
                                            <div class="form-group">
                                                <select name="golongandarah" class="form-control show-tick">
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="AB">AB</option>
                                                    <option value="O">O</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <b>Status</b>
                                            <select name="statusnikah" class="form-control show-tick">
                                                <option value="Bujang">Bujang</option>
                                                <option value="Menikah">Menikah</option>
                                                <option value="Janda">Janda</option>
                                                <option value="Duda">Duda</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <b>Pendidikan</b>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <select name="pendidikanterakhir" class="form-control show-tick">
                                                        <option value="SD">SD</option>
                                                        <option value="SLTP">SLTP</option>
                                                        <option value="SLTA">SLTA</option>
                                                        <option value="D1-D3">D1-D3</option>
                                                        <option value="S1">S1</option>
                                                        <option value="S2">S2</option>
                                                        <option value="S3">S3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <b>Jabatan</b>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input name="jabatan" type="text" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <b>No HP</b>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input name="nohp1" type="text" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
                                                <button id="btnbiodata" class="btn btn-primary waves-effect" type="submit">Simpan Data</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>



<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
   $.validator.addMethod("regex", function(value, element, regexp) {
      var re = new RegExp(regexp);
      return this.optional(element) || re.test(value);
   },
      "Please check your input."
   );
   var regex = "^[a-zA-Z0-9` ]*$";

   $("#form_add_karyawan").validate({
   rules: {
   nama: {
   required: true,
      regex: regex,
   },
      kotalahir: {
      required: true,
         lettersonly: true
   },
      jabatan: {
      required: true,
         lettersonly: true,
   },
      nohp1: {
      required: true,
         number: true
   }
   },
      submitHandler: function() {
         var nama=$('input[name=nama]').val();
         var kotalahir=$('input[name=kotalahir]').val();
         var tanggallahir=$('input[name=tanggallahir]').val();
         var gender=$('select[name=jeniskelamin]').val();
         var golongandarah=$('select[name=golongandarah]').val();
         var statusnikah=$('select[name=statusnikah]').val();
         var pendidikanterakhir =$('select[name=pendidikanterakhir]').val();
         var jabatan=$('input[name=jabatan]').val();
         var nohp1=$('input[name=nohp1]').val();
         if (nama==''){
            swal("Gagal!", "Nama SIswa TIdak Boleh Kosong", "warning");
         }
         else{
            var <?=$this->security->get_csrf_token_name();?> =$('input[name=<?=$this->security->get_csrf_token_name();?>]').val();

            $.ajax({
            method: "POST",
               dataType:"json",
               data: 'nama='+nama+'&kotalahir='+kotalahir+'&tanggallahir='+tanggallahir+'&gender='+gender+'&golongandarah='+golongandarah+'&statusnikah='+statusnikah
               +'&pendidikanterakhir='+pendidikanterakhir+'&jabatan='+jabatan+'&nohp1='+nohp1
               +'&<?=$this->security->get_csrf_token_name();?>='+<?=$this->security->get_csrf_token_name();?>,
               url:"<?php echo base_url();?>index.php/karyawan/carinisterakhir",
               success:function(data){
                  html=data;
                  //document.getElementById("formkategori").reset();
                  if (html=='' || html==null || html=='0') {
                     swal("Gagal!", "Data Tidak Bisa Disimpan", "warning");
                  } else {
                     swal("Selamat!", "Data Anda Dengan NIS = "&html&" Telah Tersimpan", "success");
                     document.getElementById("btnalamat").disabled = false;
                     document.getElementById("btnbiodata").disabled = true;
                     document.getElementById("nikisialamat").value = html;
                  }
               }
            })
               return false;
         }
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
</script>
