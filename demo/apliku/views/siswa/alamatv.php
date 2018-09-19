                                <!-- Alamat -->
                                <div role="tabpanel" class="tab-pane fade" id="alamat_with_icon_title">
 
                                    <form method="POST" id="formibu">
                                    <div class="col-sm-6">
                                        <b>Alamat</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="alamat" type="text" class="form-control" />
                                                <input id="nisisialamat" name="nisisialamat" type="hidden" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <b>Kelurahan</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="kelurahan" type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <b>Kecamatan</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="kecamatan" type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <b>Alamat Kota</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="alamatkota" type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <b>Provinsi</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="provinsi" type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <b>Telephon</b>
                                        <div class="input-group">
                                            <div class="form-line">
                                                <input name="telephon" type="text" class="form-control money-dollar" placeholder="Ex: 99,99 $">
                                                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
                                            </div>
                                        </div>
                                    </div>
                                    <?php if($btn=='Y'): ?>
                                        <div class="form-group">
                                        <button id="btnalamat" class="btn btn-primary waves-effect" data-type="success" onclick="return simpanalamat();" disabled="true">Simpan Data</button>
                                    </div>
                                        <?php endif;?>

                                    </form>
                            </div>
<script type="text/javascript">

      function simpanalamat(){

        var nis=$('input[name=nisisialamat]').val();
        var alamat=$('input[name=alamat]').val();
        var kelurahan=$('input[name=kelurahan]').val();
        var kecamatan=$('input[name=kecamatan]').val();
        var alamatkota=$('input[name=alamatkota]').val();
        var provinsi=$('input[name=provinsi]').val();
        var telephon=$('input[name=telephon]').val();


        var <?=$this->security->get_csrf_token_name();?> =$('input[name=<?=$this->security->get_csrf_token_name();?>]').val();

      $.ajax({
        method: "POST",
        dataType:"json",
        data: '&telephon='+telephon+'&alamat='+alamat+'&kelurahan='+kelurahan+'&kecamatan='+kecamatan+'&alamatkota='+alamatkota+'&provinsi='+provinsi+'&nis='+nis
        +'&<?=$this->security->get_csrf_token_name();?>='+<?=$this->security->get_csrf_token_name();?>,
        url:"<?php echo base_url();?>index.php/siswa/updatealamat",
        success:function(data){
             html=data;
          //document.getElementById("formkategori").reset();
          swal("Selamat!", html, "success");
          document.getElementById("btnalamat").disabled = false;
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


                                