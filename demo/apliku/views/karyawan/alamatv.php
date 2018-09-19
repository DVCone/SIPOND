<!-- Alamat -->
<div role="tabpanel" class="tab-pane fade" id="alamat_with_icon_title">
    <form method="POST" id="formibu">
        <div class="row">
            <div class="col-sm-6">
                <b>Alamat</b>
                <div class="form-group">
                    <div class="form-line">
                        <input name="alamat" type="text" class="form-control" />
                        <input id="nikisialamat" name="nikisialamat" type="hidden" class="form-control" />
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
        </div>
        <div class="row">
            <div class="col-sm-6">
                <b>Kecamatan</b>
                <div class="form-group">
                    <div class="form-line">
                        <input name="kecamatan" type="text" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <b>Kota</b>
                <div class="form-group">
                    <div class="form-line">
                        <input name="kota" type="text" class="form-control" />
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <b>Provinsi</b>
                <div class="form-group">
                    <div class="form-line">
                        <input name="provinsi" type="text" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="form-group">
                    <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
                    <button id="btnalamat" class="btn btn-primary waves-effect" data-type="success" onclick="return simpanalamat();" disabled="true">Simpan Data</button>
                </div>
            </div>
        </div>
    </form>
</div>


<script type="text/javascript">

function simpanalamat(){

  var nik=$('input[name=nikisialamat]').val();
  var alamat=$('input[name=alamat]').val();
  var kelurahan=$('input[name=kelurahan]').val();
  var kecamatan=$('input[name=kecamatan]').val();
  var kota=$('input[name=kota]').val();
  var provinsi=$('input[name=provinsi]').val();

  var <?=$this->security->get_csrf_token_name();?> =$('input[name=<?=$this->security->get_csrf_token_name();?>]').val();

    $.ajax({
    method: "POST",
    dataType:"json",
    data: 'alamat='+alamat+'&kelurahan='+kelurahan+'&kecamatan='+kecamatan+'&kota='+kota+'&provinsi='+provinsi+'&nik='+nik
    +'&<?=$this->security->get_csrf_token_name();?>='+<?=$this->security->get_csrf_token_name();?>,
    url:"<?php echo base_url();?>index.php/karyawan/updatealamat",
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
  // $("#tanggalInput").datepicker({
  //   dateFormat:"yy-mm-dd"
  //   ,changeMonth:true
  //   ,changeYear:true
  //   ,yearRange:"1930"
  // });
  //
  // })
</script>

