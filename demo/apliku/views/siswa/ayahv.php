 
                                <!-- AYAH -->
                                <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                                    <form method="POST" id="formayah">
                                    <div class="col-sm-3">
                                        <b>No KK</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="nokk" type="text" class="form-control" />
                                                <input id="nisisiayah" name="nisisiayah" type="hidden" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <b>No KTP Ayah</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="noktpayah" type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <b>Nama Ayah</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="namaayah" type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Habis 12-->
                                    <div class="col-sm-6">
                                        <b>Tempat Tanggal Lahir Ayah</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="ttlayah" type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <b>Email</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="email" type="text" class="form-control email" placeholder="Ex: bapakibu@contohemail.web.id">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Habis 12-->
                                    <div class="col-sm-4">
                                        <b>Pendidikan Ayah</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="pendidikanayah" type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <b>Pekerjaan Ayah</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="pekerjaanayah" type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <b>Penghasilan Ayah</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="gajiayah" type="text" class="form-control money-dollar" placeholder="Ex: 99,99 $">
                                                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
                                            </div>
                                        </div>
                                    </div>
                                        
                                        <?php if($btn=='Y'): ?>
                                            <div class="form-group">        
                                                <button id="btnayah" class="btn btn-primary waves-effect" data-type="success" onclick="return simpanayah();" disabled="true">Simpan Data</button>
                                            </div>
                                        <?php endif;?>
                                </form>

                             </div>
<script type="text/javascript">

      function simpanayah(){

        var nis=$('input[name=nisisiayah]').val();
        var nokk=$('input[name=nokk]').val();
        var noktpayah=$('input[name=noktpayah]').val();
        var namaayah=$('input[name=namaayah]').val();
        var ttlayah=$('input[name=ttlayah]').val();
        var email=$('input[name=email]').val();
        var pendidikanayah=$('input[name=pendidikanayah]').val();
        var pekerjaanayah=$('input[name=pekerjaanayah]').val();
        var gajiayah=$('input[name=gajiayah]').val();


        var <?=$this->security->get_csrf_token_name();?> =$('input[name=<?=$this->security->get_csrf_token_name();?>]').val();

      $.ajax({
        method: "POST",
        dataType:"json",
        data: 'nokk='+nokk+'&noktpayah='+noktpayah+'&namaayah='+namaayah+'&ttlayah='+ttlayah+'&email='+email+'&pendidikanayah='+pendidikanayah+'&pekerjaanayah='+pekerjaanayah+'&gajiayah='+gajiayah+'&nis='+nis
        +'&<?=$this->security->get_csrf_token_name();?>='+<?=$this->security->get_csrf_token_name();?>,
        url:"<?php echo base_url();?>index.php/siswa/updateayah",
        success:function(data){
             html=data;
          document.getElementById("formkategori").reset();
          swal("Selamat!", html, "success");
          document.getElementById("btnibu").disabled = false;
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
                               
