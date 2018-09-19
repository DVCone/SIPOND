<section class="content">  <!-- Jangan Dihilangkan.. Tutupnya ada di footer.php -->

<!--CREATE-->
    <div class="container-fluid">
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 align="left">
                                TAMBAH PENGGUNA
                                <!-- <small>Harap Menisi Data Kesehatan <a href="">Dengan Teliti</a></small> -->
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <form method="POST" id="formtambah">
                                
                                    <div class="col-sm-3">
                                        <b>User</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="input_userid" type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <b>Password</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="input_password" type="password" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <b>Konfirmasi Password</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="input_conpass" type="password" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <b>Department</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="input_dept" type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <b>Kodenota</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="input_kodenota" type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
                                            <button class="btn btn-primary waves-effect" data-type="success" onclick="return tambah();">Tambah Data</button>
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

<!--EDIT-->

        <div class="container-fluid">
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 align="left">
                                UBAH DATA INFORMASI PENGGUNA
                                <!-- <small>Harap Menisi Data Kesehatan <a href="">Dengan Teliti</a></small> -->
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <form method="POST" id="formubah">

                                    <div class="col-sm-12">
                                        <b>Pencarian Pengguna</b>
                                        <!-- <div class="form-group"> -->
                                                <select name="pengguna" class="form-control show-tick select-prestasi" data-live-search="true" onchange="changePengguna();" id="pengguna">
                                                    <?php $i = 1 ?>
                                                    <?php foreach($data as $m): ?>
                                                        <option value="<?php echo $m->userid ?>"> <?php echo $m->userid ?></option>

                                                    <?php endforeach ?>

                                                </select>
                                        <!-- </div> -->
                                    </div>
<!-- batas -->
                                    <div class="col-sm-12">
                                        <!-- <b>Data Siswa</b> -->
                                        <div class="form-group">

                                                <input id="label_pengguna" name="label_pengguna" type="text" class="form-control" readonly />
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <b>Department</b>
                                        <!-- <div class="form-group"> -->
                                                <select name="dept" class="form-control show-tick select-prestasi" onchange="changeDepartment();" id="department" multiple>
                                                    <?php $i = 1 ?>
                                                    <?php foreach($data as $m): ?>
                                                        <option value="<?php echo $m->dept ?>"> <?php echo $m->dept ?></option>

                                                    <?php endforeach ?>

                                                </select>   
                                        <!-- </div> -->
                                    </div>   

                                    <div class="col-md-3">
                                        <!-- <b>Data Siswa</b> -->
                                        <div class="form-group">
                                                <input id="label_dept" name="label_dept" type="text" class="form-control" readonly />
                                        </div>
                                    </div>
                                    

                                    <div class="col-sm-12">
                                        <b>Kodenota</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="kodenota" type="text" class="form-control" />
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
    function changePengguna() {
        var pengguna = document.getElementById('pengguna');
        var selectedValue = pengguna.options[pengguna.selectedIndex].value;

        var res = selectedValue.split("#");

        document.getElementById('label_pengguna').value=res[0];
    //alert(selectedValue);
    }

    function changeDepartment() {
        var department = document.getElementById('department');
        var selectedValue = department.options[department.selectedIndex].value;

        var res = selectedValue.split("#");

        document.getElementById('label_dept').value=res[0];
    }

    function tambah()
    {
        var Tambahuser= $('input[name=input_userid]').val();
        var Tambahpass= $('input[name=input_password]').val();
        var Confrmpass= $('input[name=input_conpass]').val();
        var Tambahdept= $('input[name=input_dept]').val();
        var Tambahkode= $('input[name=input_kodenota]').val();

        if (Tambahuser=='' ) {
            
            swal("Gagal!", "Nama User Tidak Boleh Kosong", "warning");

        } else if(Tambahpass!=Confrmpass) {
            swal("Gagal!", "Sesuaikan Passwordnya", "warning");

        } else {
            var <?=$this->security->get_csrf_token_name();?> =$('input[name=<?=$this->security->get_csrf_token_name();?>]').val();
            
            $.ajax({
                method: "POST",
                dataType: "json",
                data: 'userid='+Tambahuser+'&password='+Tambahpass+'&dept='+Tambahdept+'&kodenota='+Tambahkode
                +'&<?=$this->security->get_csrf_token_name();?>='+<?=$this->security->get_csrf_token_name();?>,
                url:"<?php echo base_url();?>index.php/adminsetpengguna/cariuserterakhir",

                success:function(data){
            html=data;
            //document.getElementById("formkategori").reset();
            if (html=='' || html==null || html=='0') {
                swal("Selamat!", "Data Anda Dengan NIS = "&html&" Telah Tersimpan", "success");
            } else {
                swal("Gagal!", "Data Tidak Bisa Disimpan", "warning");
            }
          }
            })
            return false;
        }
    }


    function simpan(){

        var userid= $('input[name=label_pengguna]').val();
        var dept=$('input[name=label_dept]').val();
        var kodenota=$('input[name=kodenota]').val();
        var <?=$this->security->get_csrf_token_name();?> =$('input[name=<?=$this->security->get_csrf_token_name();?>]').val();

      $.ajax({
        method: "POST",
        dataType: "json",
        data: 'userid='+userid+'&dept='+dept+'&kodenota='+kodenota
        +'&<?=$this->security->get_csrf_token_name();?>='+<?=$this->security->get_csrf_token_name();?>,
        url:"<?php echo base_url();?>index.php/adminsetpengguna/simpanpengguna",

        success:function(res){
          document.getElementById("formubah").reset();
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
