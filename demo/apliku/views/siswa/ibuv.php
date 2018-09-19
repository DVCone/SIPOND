 
                                <!-- IBU -->
                                <div role="tabpanel" class="tab-pane fade" id="messages_with_icon_title">
                                    <form method="POST" id="formibu">
                                    <div class="col-sm-6">
                                        <b>No KTP ibu</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="noktpibu" type="text" class="form-control" />
                                                <input id="nisisiibu" name="nisisiibu" type="hidden" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <b>Nama ibu</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="namaibu" type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <b>Tempat Tanggal Lahir ibu</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="ttlibu" type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <b>Pendidikan ibu</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="pendidikanibu" type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <b>Pekerjaan ibu</b>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="pekerjaanibu" type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <b>Penghasilan ibu</b>
                                        <div class="input-group">
                                            <div class="form-line">
                                                <input name="gajiibu" type="text" class="form-control money-dollar" placeholder="Ex: 99,99 $">
                                                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
                                            </div>
                                        </div>
                                    </div>

                                        <?php if($btn=='Y'): ?>
                                            <div class="form-group">
                                                <button id="btnibu" class="btn btn-primary waves-effect" data-type="success" onclick="return simpanibu();" disabled="true">Simpan Data</button>
                                            </div>
                                        <?php endif;?>
                                    </form>
                                </div>
<script type="text/javascript">

      function simpanibu(){

        var nis=$('input[name=nisisiibu]').val();
        var noktpibu=$('input[name=noktpibu]').val();
        var namaibu=$('input[name=namaibu]').val();
        var ttlibu=$('input[name=ttlibu]').val();
        var pendidikanibu=$('input[name=pendidikanibu]').val();
        var pekerjaanibu=$('input[name=pekerjaanibu]').val();
        var gajiibu=$('input[name=gajiibu]').val();


        var <?=$this->security->get_csrf_token_name();?> =$('input[name=<?=$this->security->get_csrf_token_name();?>]').val();

      $.ajax({
        method: "POST",
        dataType:"json",
        data: '&noktpibu='+noktpibu+'&namaibu='+namaibu+'&ttlibu='+ttlibu+'&pendidikanibu='+pendidikanibu+'&pekerjaanibu='+pekerjaanibu+'&gajiibu='+gajiibu+'&nis='+nis
        +'&<?=$this->security->get_csrf_token_name();?>='+<?=$this->security->get_csrf_token_name();?>,
        url:"<?php echo base_url();?>index.php/siswa/updateibu",
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

                               
