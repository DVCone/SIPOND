<section class="content">
    <!-- Jangan Dihilangkan.. Tutupnya ada di footer.php -->
    <div class="container-fluid">
        <div class="block-header">

        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="body">
                        <div class="block-header" align="center">
                            <b>Laporan Data Pelanggaran Siswa</b>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable-siswa" id="mydata">
                                <thead>
                                    <tr>
                                        <th>Foto</th>
                                        <th>NIS</th>
                                        <th>Nama Siswa</th>
                                        <th>Kelas</th>
                                        <th>Nama Ayah</th>
                                        <th>Nama Ibu</th>
                                        <th>Telephon</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>

                                <tbody id="show_data">
                                    <?php $i = 1 ?>
                                    <?php foreach($data as $m): ?>
                                    <tr>
                                        <td>
                                            <?php
                                                if ($m->foto == '') {
                                                    echo "<img src='".base_url("./assets/fotosiswa/no-avatar.jpg")."' width='115' height='140'>";
                                                } else {
                                                    echo "<img src='".base_url("./assets/fotosiswa/".$m->nis.".jpg")."' width='115' height='140'>";
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <?php echo $m->nis ?>
                                        </td>
                                        <td>
                                            <?php echo $m->namasiswa ?>
                                        </td>
                                        <td>
                                            <?php echo $m->kelas ?>
                                        </td>
                                        <td>
                                            <?php echo $m->namaayah ?>
                                        </td>
                                        <td>
                                            <?php echo $m->namaibu ?>
                                        </td>
                                        <td>
                                            <?php echo $m->telephon ?>
                                        </td>

                                        <td align="center">
                                            <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#myModal">
                                                <input type="hidden" name="nis" action="<?php echo $m->nis ?>">
                                                <i class="material-icons">update</i>
                                            </button>

                                            <a href="<?php echo base_url();?>index.php/siswa/hapus/<?php echo $m->nis ?>" class="btn btn-primary waves-effect">
                                                <i class="material-icons">delete_forever</i>
                                            </a>
                                        </td>

                                    </tr>
                                    <?php endforeach ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Update data</h4>
                </div>

                <div class="modal-body">

                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <!-- <div class="header">
                                    <h2>
                                        Pengisian Biodata Siswa
                                    </h2>
                                    <ul class="header-dropdown m-r--5">
                                        <li class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li>
                                                    <a href="javascript:void(0);">Action</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Another action</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Something else here</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div> -->
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
                                                        <b>Anak Ke</b>
                                                        <div class="input-group spinner" data-trigger="spinner">
                                                            <div class="form-line">
                                                                <input name="anakke" type="text" class="form-control text-center" value="1" data-rule="quantity">
                                                            </div>
                                                            <span class="input-group-addon">
                                                                <a href="javascript:;" class="spin-up" data-spin="up">
                                                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                                                </a>
                                                                <a href="javascript:;" class="spin-down" data-spin="down">
                                                                    <i class="glyphicon glyphicon-chevron-down"></i>
                                                                </a>
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
                                                            <option value="<?php echo $m->namakelas ?>">
                                                                <?php echo $m->namakelas ?>
                                                            </option>
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
                                                    
                                                    <!-- Menampilkan Error jika validasi tidak valid -->
                                                    <div style="color: red;">
                                                        <?php echo (isset($message))? $message : ""; ?>
                                                    </div>
                                                    <?php echo form_open("siswa/fotoyadi", array('enctype'=>'multipart/form-data')); ?>
                                                    <table cellpadding="8">

                                                        <div class="col-sm-12">
                                                            <b>Masukkan gambar profil</b>
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <!-- <input id="gambar" name="input_gambar" type="file" class="form-control"/> -->
                                                                    <?php echo form_label('', 'userfile') ?>
                                                                    <?php echo form_upload('userfile') ?>
                                                                </div>

                                                                <input type="text" value="11700092" id="nis" name="nis">
                                                            </div>
                                                        </div>

                                                    </table>

                                                    <hr>

                                                </div>

                                                <?php  $this->load->view('siswa/ayahv'); ?>
                                                <?php $this->load->view('siswa/ibuv'); ?>
                                                <?php $this->load->view('siswa/alamatv'); ?>

                                                <div class="modal-footer">
                                                    <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>

                                                    <input type="submit" name="submit" value="Simpan" class="btn btn-primary waves-effect"> -->

                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
                                                            <button type="submit" id="btnbiodata" class="btn btn-primary waves-effect">Simpan Data</button>
                                                        </div>
                                                        <?php echo form_close(); ?>
                                                    </div>

                                                </div>
                                        </div>

                                    </div>
                                </div>



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