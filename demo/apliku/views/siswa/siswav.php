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
                                Pengisian Biodata Siswa
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
                                <li role="presentation">
                                    <a href="#profile_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">face</i> Ayah
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#messages_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">pregnant_woman</i> Ibu
                                    </a>
                                </li>
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
                                 <form method="POST" id="form_biodata_siswa">
                                     <div class="row">
                                 <div class="col-sm-8">
                                     <b>Nama Siswa</b>
                                     <div class="form-group">
                                         <div class="form-line">
                                             <input name="namasiswaawal" type="text" class="form-control" />
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
                                         <input type="date" class="form-control" name="tanggallahir" id="tanggalInput" value="<?php echo date("Y-m-d") ?>"  required />
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
                                     <b>Anak Ke</b>
                                     <div class="input-group spinner" data-trigger="spinner">
                                         <div class="form-line">
                                             <input name="anakke" type="text" class="form-control text-center" value="1" data-rule="quantity">
                                         </div>
                                         <span class="input-group-addon">
                                             <a href="javascript:;" class="spin-up" data-spin="up"><i class="glyphicon glyphicon-chevron-up"></i></a>
                                             <a href="javascript:;" class="spin-down" data-spin="down"><i class="glyphicon glyphicon-chevron-down"></i></a>
                                         </span>
                                     </div>
                                 </div>
                                     </div>
                                 <div class="row">
                                 <div class="col-sm-4">
                                     <b>Kelas</b>
                                     <!-- <div class="form-group"> -->
                                     <select name="kodekelas" id="kodekelas" class="form-control show-tick" data-live-search="true">
                                                 <?php foreach($kelas as $m): ?>
                                                     <option value="<?php echo $m->namakelas ?>"><?php echo $m->namakelas ?></option>
                                                 <?php endforeach ?>

                                             </select>
                                 </div>
                                 <div class="col-sm-4">
                                     <b>Seting Bayar SPP</b>
                                     <div class="form-group">
                                         <div class="form-line">
                                             <input name="spp" type="text" class="form-control" />
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-sm-4">
                                     <b>Seting Bayar Daftar Ulang</b>
                                     <div class="form-group">
                                         <div class="form-line">
                                             <input name="daftarulang" type="text" class="form-control" />
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-sm-4">
                                     <div class="form-group">
                                         <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
                                         <button type="submit" id="btnbiodata" class="btn btn-primary waves-effect">Simpan Data</button>
                                     </div>
                                 </div>
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
  
    $("#form_kategori").validate({
        rules: {
                namasiswaawal: {
                required: true,
                regex: regex,
        },
           kotalahir: 'required'
        },

    submitHandler: function(form) {
      var namasiswa=$('input[name=namasiswaawal]').val();
      var kotalahir=$('input[name=kotalahir]').val();
      var tanggallahir=$('input[name=tanggallahir]').val();
      var jeniskelamin=$('select[name=jeniskelamin]').val();
      var golongandarah=$('select[name=golongandarah]').val();
      var anakke=$('input[name=anakke]').val();
      var kelas=$('input[name=kelas]').val();
      var spp=$('input[name=spp]').val();
      var daftarulang=$('input[name=daftarulang]').val();

      if (namasiswa==''){
        swal("Gagal!", "Nama SIswa TIdak Boleh Kosong", "warning");
      }
      else{
        var <?=$this->security->get_csrf_token_name();?> =$('input[name=<?=$this->security->get_csrf_token_name();?>]').val();

        $.ajax({
        method: "POST",
          dataType:"json",
          data: 'namasiswa='+namasiswa+'&kotalahir='+kotalahir+'&tanggallahir='+tanggallahir+'&jeniskelamin='+jeniskelamin+'&golongandarah='+golongandarah+'&anakke='+anakke
          +'&kelas='+kelas+'&spp='+spp+'&daftarulang='+daftarulang
          +'&<?=$this->security->get_csrf_token_name();?>='+<?=$this->security->get_csrf_token_name();?>,
          url:"<?php echo base_url();?>index.php/siswa/carinisterakhir",
          success:function(data){
            html=data;
            //document.getElementById("formkategori").reset();
            if (html=='' || html==null || html=='0') {
              swal("Gagal!", "Data Tidak Bisa Disimpan", "warning");
            } else {
              swal("Selamat!", "Data Anda Dengan NIS = "&html&" Telah Tersimpan", "success");
              document.getElementById("btnalamat").disabled = false;
              document.getElementById("btnayah").disabled = false;
              document.getElementById("btnibu").disabled = false;
              document.getElementById("btnbiodata").disabled = true;
              document.getElementById("nisisiayah").value = html;
              document.getElementById("nisisiibu").value = html;
              document.getElementById("nisisialamat").value = html;
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
