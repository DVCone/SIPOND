    </section>


    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url();?>template/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url();?>template/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url();?>template/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Bootstrap Notify Plugin Js -->
    <script src="<?php echo base_url();?>template/plugins/bootstrap-notify/bootstrap-notify.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url();?>template/plugins/node-waves/waves.js"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src="<?php echo base_url();?>template/plugins/jquery-spinner/js/jquery.spinner.js"></script>

    <!-- SweetAlert Plugin Js -->
    <script src="<?php echo base_url();?>template/plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="<?php echo base_url();?>template/plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="<?php echo base_url();?>template/plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="<?php echo base_url();?>template/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="<?php echo base_url('template/js/jquery.number.min.js')?>"></script>
    <!-- Jquery DataTable Plugin Js -->
    <script src="<?php echo base_url();?>template/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>template/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url();?>template/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>template/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="<?php echo base_url();?>template/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="<?php echo base_url();?>template/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="<?php echo base_url();?>template/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="<?php echo base_url();?>template/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>template/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>



    <!-- Custom Js -->
    <script src="<?php echo base_url();?>template/js/admin.js"></script>
    <script src="<?php echo base_url();?>template/js/pages/forms/basic-form-elements.js"></script>
    <script src="<?php echo base_url();?>template/js/pages/forms/form-validation.js"></script>
    <script src="<?php echo base_url();?>template/js/pages/ui/dialogs.js"></script>
    <script src="<?php echo base_url();?>template/js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url();?>template/js/demo.js"></script>

    <!-- Memanggil file .js untuk proses autocomplete -->
    <!-- <script type='text/javascript' src='<?php echo base_url();?>assets/js/jquery-1.8.2.min.js'></script> -->
    <script type='text/javascript' src='<?php echo base_url();?>assets/js/jquery.autocomplete.js'></script>

    <!-- Memanggil file .css untuk style saat data dicari dalam filed -->
    <link href='<?php echo base_url();?>assets/js/jquery.autocomplete.css' rel='stylesheet' />

    <!-- Memanggil file .css autocomplete_ci/assets/css/default.css -->
    <link href='<?php echo base_url();?>assets/css/default.css' rel='stylesheet' />

    <script type='text/javascript'>
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
    </script>
</body>

</html>
