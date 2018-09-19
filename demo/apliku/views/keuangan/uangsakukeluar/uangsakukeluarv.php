<section class="content">  <!-- Jangan Dihilangkan.. Tutupnya ada di footer.php -->
    <div class="container-fluid">
        <!-- Widgets -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2 align="center">
                            PENGAMBILAN UANG SAKU SISWA
                            <!-- <small>Harap Menisi Data Kesehatan <a href="">Dengan Teliti</a></small> -->
                        </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <form method="POST" id="form_pengambilan_uang_saku">

                                <div class="col-sm-8">
                                    <b>Pencarian Siswa</b>
                                    <!-- <div class="form-group"> -->
                                        <!-- <input size = "58" type="text" class='autocomplete' name="cari" id="cari" placeholder="Pencarian Disini" /> -->
                                        <input type="text" class='autocomplete form-control' id="cari" name="cari_siswa" placeholder="Pencarian Disini" />

                                    <!-- </div> -->
                                </div>
                                <div class="col-sm-4">
                                    <b>Tanggal</b>
                                    <div class="form-group">
                                        <!-- <div class="form-line"> -->
                                            <input size = "15" type="date" class="form-control" name="tanggal" id="tanggalInput" value="<?php echo date("Y-m-d") ?>"  required />
                                        <!-- </div> -->
                                    </div>
                                </div>
<!-- batas -->
                                <div class="col-sm-12">
                                    <!-- <b>Data Siswa</b> -->
                                    <div class="form-group">

                                            <input id="nis" name="nis" type="text" class="form-control" readonly />
                                            <input id="namasiswa" name="namasiswa" type="text" class="form-control" readonly />
                                            <input id="kelas" name="kelas" type="text" class="form-control" readonly />
                                            <input id="namaayah" name="namaayah" type="text" class="form-control" readonly />
                                            <h5 id="transaksiakhir"></h5>
                                                <h5 id="sisauang"></h5>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <b>Nominal Pengambilan</b>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input id="uangkeluar" name="uangkeluar" type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <b>Catatan</b>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input id="catatan" name="catatan" type="text" class="form-control" />
                                        </div>
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

    <div>

    <div style="position:fixed;top:-300px;">
    <input type="text" id="scanner">
    </div>
    <div style="position:fixed;bottom:50px;right:50px;">
        <button onclick="return getbarcode()" id="btnBarcode" data-toggle="tooltip" data-placement="left" title="" data-original-title="Barcode belum siap." type="button" class="btn btn-warning btn-circle-lg waves-effect waves-circle waves-float">
            <i class="material-icons" id="iconBarcode">print</i>
        </button>
    </div>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>                                      

<script type="text/javascript">
function getbarcode(){
    $('#scanner').focus()
    checkgetbarcode()
    }

    function checkgetbarcode(){
        if ($('#scanner').is(':focus') == true) {
            $('#btnBarcode').removeClass('btn-warning')
            $('#btnBarcode').addClass('btn-success')
            $('#btnBarcode').attr('data-original-title','Barcode Siap!')
        }else{
            $('#btnBarcode').removeClass('btn-success')
            $('#btnBarcode').addClass('btn-warning')
            $('#btnBarcode').attr('data-original-title','Barcode belum Siap!')
        }
    }
    $(document).on('keypress','#scanner',function(e){
        if(e.which == 13) {

            var <?=$this->security->get_csrf_token_name();?> =$('input[name=<?=$this->security->get_csrf_token_name();?>]').val();
            var nis=$(this).val();
            var url = '<?=base_url("index.php/autocomplete/cari1siswa")?>'
            $.ajax({
         method: "POST",
            dataType:"json",
            data: 'nis='+nis+'&<?=$this->security->get_csrf_token_name();?>='+<?=$this->security->get_csrf_token_name();?>,
            url:url+'/'+nis,
            success:function(res){
                console.log(res)
                $('#nis').val(res.nis);
          				$('#namasiswa').val(res.namasiswa);
          				$('#kelas').val(res.kelas+ ' - ' +res.marhalah);
          				$('#namaayah').val(res.namaayah);
          				$('#cari').val("");
                  $('#transaksiakhir').html("-");
                          $('#sisauang').html("-");
                          $('#scanner').val("")
            }
         })
            
                          
            
                  
          				      $.ajax({
          			            type  : "post",
          			            data: 'nis='+nis
                            +'&<?=$this->security->get_csrf_token_name();?>='+<?=$this->security->get_csrf_token_name();?>,
          			            url   : '<?php echo base_url()?>index.php/keuanganuangsakukeluar/carikeluarterakhir',
          			            async : true,
          			            dataType : 'json',

          		            	success : function(data){
          			            	if(jQuery.trim(data)==''){ // kalau hasil query kosong
          			            		html="Tidak Ada Data Pengambilan";
          			            		$('#transaksiakhir').html(html);
          								return; //exit sub ini
          			            	}
          			            		html="Terakhir Ambil Uang Tanggal "+data[0].tanggal+" Dengan Jumlah "+data[0].uangkeluar;
          			            		$('#transaksiakhir').html(html);
          		            	}

          	    			})

          				      $.ajax({
          			            type  : "post",
          			            data: 'nis='+nis
                            +'&<?=$this->security->get_csrf_token_name();?>='+<?=$this->security->get_csrf_token_name();?>,
          			            url   : '<?php echo base_url()?>index.php/keuanganuangsakukeluar/carisisauangsaku',
          			            async : true,
          			            dataType : 'json',

          		            	success : function(data){
          			            	if(jQuery.trim(data)==''){ // kalau hasil query kosong
          			            		html="Sisa Uang 0 Rupiah ";
          			            		//alert (html);
          			            		$('#sisauang').html(html);
          								return; //exit sub ini
          			            	}
          			            		html="Sisa Uang "+data[0].totsisa+" Rupiah ";
          			            		//alert (html);
          			            		$('#sisauang').html(html);
          		            	}

          	    			})
        }
    })

$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip({
        container: 'body'
    });

        setInterval(checkgetbarcode,500)

    
   $.validator.addMethod("regex", function(value, element, regexp) {
      var re = new RegExp(regexp);
      return this.optional(element) || re.test(value);
   },
      "Please check your input."
   );
   var regex = "^[a-zA-Z0-9` ]*$";

   $("#form_pengambilan_uang_saku").validate({
   rules: {
   nis: {
   required: true
   },
      uangkeluar: {
      required: true,
         number: true  
   },
      catatan: {
         regex: regex
   },
   },
      submitHandler: function() {
         var nis= $('input[name=nis]').val();
         var uangkeluar=$('input[name=uangkeluar]').val();
         var catatan=$('input[name=catatan]').val();
         var tanggal=$('input[name=tanggal]').val();

         var <?=$this->security->get_csrf_token_name();?> =$('input[name=<?=$this->security->get_csrf_token_name();?>]').val();

         $.ajax({
         method: "POST",
            dataType:"html",
            data: 'nis='+nis+'&uangkeluar='+uangkeluar+'&catatan='+catatan+'&tanggal='+tanggal
            +'&<?=$this->security->get_csrf_token_name();?>='+<?=$this->security->get_csrf_token_name();?>,
            url:"<?php echo base_url();?>index.php/keuanganuangsakukeluar/simpan",
            success:function(res){
               document.getElementById("form_pengambilan_uang_saku").reset();
               swal("Selamat!", "Data Anda Sudah Tersimpan!", "success");
               document.getElementById("transaksiakhir").innerHTML='-';
               document.getElementById("sisauang").innerHTML='-';
            }
         })
            return false;
      }

   });
});


var site = "<?php echo site_url();?>";
        $(function(){
            $('.autocomplete').autocomplete({
                // serviceUrl berisi URL ke controller/fungsi yang menangani request kita
                serviceUrl: site+'/autocomplete/carisiswa',
                // fungsi ini akan dijalankan ketika user memilih salah satu hasil request
                onSelect: function (suggestion) {
                  $('#nis').val(suggestion.nis);
          				$('#namasiswa').val(suggestion.namasiswa);
          				$('#kelas').val(suggestion.kelas+ ' - ' +suggestion.marhalah);
          				$('#namaayah').val(suggestion.namaayah);
          				$('#cari').val("");
                  $('#transaksiakhir').html("-");
          				$('#sisauang').html("-");
          				var nis=suggestion.nis;
                  var <?=$this->security->get_csrf_token_name();?> =$('input[name=<?=$this->security->get_csrf_token_name();?>]').val();
          				      $.ajax({
          			            type  : "post",
          			            data: 'nis='+nis
                            +'&<?=$this->security->get_csrf_token_name();?>='+<?=$this->security->get_csrf_token_name();?>,
          			            url   : '<?php echo base_url()?>index.php/keuanganuangsakukeluar/carikeluarterakhir',
          			            async : true,
          			            dataType : 'json',

          		            	success : function(data){
          			            	if(jQuery.trim(data)==''){ // kalau hasil query kosong
          			            		html="Tidak Ada Data Pengambilan";
          			            		$('#transaksiakhir').html(html);
          								return; //exit sub ini
          			            	}
          			            		html="Terakhir Ambil Uang Tanggal "+data[0].tanggal+" Dengan Jumlah "+data[0].uangkeluar;
          			            		$('#transaksiakhir').html(html);
          		            	}

          	    			})

          				      $.ajax({
          			            type  : "post",
          			            data: 'nis='+nis
                            +'&<?=$this->security->get_csrf_token_name();?>='+<?=$this->security->get_csrf_token_name();?>,
          			            url   : '<?php echo base_url()?>index.php/keuanganuangsakukeluar/carisisauangsaku',
          			            async : true,
          			            dataType : 'json',

          		            	success : function(data){
          			            	if(jQuery.trim(data)==''){ // kalau hasil query kosong
          			            		html="Sisa Uang 0 Rupiah ";
          			            		//alert (html);
          			            		$('#sisauang').html(html);
          								return; //exit sub ini
          			            	}
          			            		html="Sisa Uang "+data[0].totsisa+" Rupiah ";
          			            		//alert (html);
          			            		$('#sisauang').html(html);
          		            	}

          	    			})


                }
            });
        });


// $(function(){
//    $("#tanggalInput").datepicker({
//    dateFormat:"yy-mm-dd"
//       ,changeMonth:true
//       ,changeYear:true
//       ,yearRange:"1930"
// });
//
// })
</script>
