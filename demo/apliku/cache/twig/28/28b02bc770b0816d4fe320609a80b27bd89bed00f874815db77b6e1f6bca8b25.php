<?php

/* footer.php */
class __TwigTemplate_30ec3067b777e2ad84cdb157935fb4ba0c98f75f777659dc6423051b27c17e4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "    </section>


    <!-- Bootstrap Core Js -->
    <script src=\"<?php echo base_url();?>template/plugins/bootstrap/js/bootstrap.js\"></script>

    <!-- Select Plugin Js -->
    <script src=\"<?php echo base_url();?>template/plugins/bootstrap-select/js/bootstrap-select.js\"></script>

    <!-- Slimscroll Plugin Js -->
    <script src=\"<?php echo base_url();?>template/plugins/jquery-slimscroll/jquery.slimscroll.js\"></script>

    <!-- Bootstrap Notify Plugin Js -->
    <script src=\"<?php echo base_url();?>template/plugins/bootstrap-notify/bootstrap-notify.js\"></script>

    <!-- Waves Effect Plugin Js -->
    <script src=\"<?php echo base_url();?>template/plugins/node-waves/waves.js\"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src=\"<?php echo base_url();?>template/plugins/jquery-spinner/js/jquery.spinner.js\"></script>

    <!-- SweetAlert Plugin Js -->
    <script src=\"<?php echo base_url();?>template/plugins/sweetalert/sweetalert.min.js\"></script>

    <!-- Autosize Plugin Js -->
    <script src=\"<?php echo base_url();?>template/plugins/autosize/autosize.js\"></script>

    <!-- Moment Plugin Js -->
    <script src=\"<?php echo base_url();?>template/plugins/momentjs/moment.js\"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src=\"<?php echo base_url();?>template/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js\"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src=\"<?php echo base_url();?>template/plugins/jquery-datatable/jquery.dataTables.js\"></script>
    <script src=\"<?php echo base_url();?>template/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js\"></script>
    <script src=\"<?php echo base_url();?>template/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js\"></script>
    <script src=\"<?php echo base_url();?>template/plugins/jquery-datatable/extensions/export/buttons.flash.min.js\"></script>
    <script src=\"<?php echo base_url();?>template/plugins/jquery-datatable/extensions/export/jszip.min.js\"></script>
    <script src=\"<?php echo base_url();?>template/plugins/jquery-datatable/extensions/export/pdfmake.min.js\"></script>
    <script src=\"<?php echo base_url();?>template/plugins/jquery-datatable/extensions/export/vfs_fonts.js\"></script>
    <script src=\"<?php echo base_url();?>template/plugins/jquery-datatable/extensions/export/buttons.html5.min.js\"></script>
    <script src=\"<?php echo base_url();?>template/plugins/jquery-datatable/extensions/export/buttons.print.min.js\"></script>



    <!-- Custom Js -->
    <script src=\"<?php echo base_url();?>template/js/admin.js\"></script>
    <script src=\"<?php echo base_url();?>template/js/pages/forms/basic-form-elements.js\"></script>
    <script src=\"<?php echo base_url();?>template/js/pages/ui/dialogs.js\"></script>
    <script src=\"<?php echo base_url();?>template/js/pages/tables/jquery-datatable.js\"></script>

    <!-- Demo Js -->
    <script src=\"<?php echo base_url();?>template/js/demo.js\"></script>

    <!-- Memanggil file .js untuk proses autocomplete -->
    <!-- <script type='text/javascript' src='<?php echo base_url();?>assets/js/jquery-1.8.2.min.js'></script> -->
    <script type='text/javascript' src='<?php echo base_url();?>assets/js/jquery.autocomplete.js'></script>

    <!-- Memanggil file .css untuk style saat data dicari dalam filed -->
    <link href='<?php echo base_url();?>assets/js/jquery.autocomplete.css' rel='stylesheet' />

    <!-- Memanggil file .css autocomplete_ci/assets/css/default.css -->
    <link href='<?php echo base_url();?>assets/css/default.css' rel='stylesheet' />

    <script type='text/javascript'>
        var site = \"<?php echo site_url();?>\";
        \$(function(){
            \$('.autocomplete').autocomplete({
                // serviceUrl berisi URL ke controller/fungsi yang menangani request kita
                serviceUrl: site+'/autocomplete/carisiswa',
                // fungsi ini akan dijalankan ketika user memilih salah satu hasil request
                onSelect: function (suggestion) {
                  \$('#nis').val(suggestion.nis);
          \t\t\t\t\$('#namasiswa').val(suggestion.namasiswa);
          \t\t\t\t\$('#kelas').val(suggestion.kelas+ ' - ' +suggestion.marhalah);
          \t\t\t\t\$('#namaayah').val(suggestion.namaayah);
          \t\t\t\t\$('#cari').val(\"\");
                  \$('#transaksiakhir').html(\"-\");
          \t\t\t\t\$('#sisauang').html(\"-\");
          \t\t\t\tvar nis=suggestion.nis;
                  var <?=\$this->security->get_csrf_token_name();?> =\$('input[name=<?=\$this->security->get_csrf_token_name();?>]').val();
          \t\t\t\t      \$.ajax({
          \t\t\t            type  : \"post\",
          \t\t\t            data: 'nis='+nis
                            +'&<?=\$this->security->get_csrf_token_name();?>='+<?=\$this->security->get_csrf_token_name();?>,
          \t\t\t            url   : '<?php echo base_url()?>index.php/keuanganuangsakukeluar/carikeluarterakhir',
          \t\t\t            async : true,
          \t\t\t            dataType : 'json',

          \t\t            \tsuccess : function(data){
          \t\t\t            \tif(jQuery.trim(data)==''){ // kalau hasil query kosong
          \t\t\t            \t\thtml=\"Tidak Ada Data Pengambilan\";
          \t\t\t            \t\t\$('#transaksiakhir').html(html);
          \t\t\t\t\t\t\t\treturn; //exit sub ini
          \t\t\t            \t}
          \t\t\t            \t\thtml=\"Terakhir Ambil Uang Tanggal \"+data[0].tanggal+\" Dengan Jumlah \"+data[0].uangkeluar;
          \t\t\t            \t\t\$('#transaksiakhir').html(html);
          \t\t            \t}

          \t    \t\t\t})

          \t\t\t\t      \$.ajax({
          \t\t\t            type  : \"post\",
          \t\t\t            data: 'nis='+nis
                            +'&<?=\$this->security->get_csrf_token_name();?>='+<?=\$this->security->get_csrf_token_name();?>,
          \t\t\t            url   : '<?php echo base_url()?>index.php/keuanganuangsakukeluar/carisisauangsaku',
          \t\t\t            async : true,
          \t\t\t            dataType : 'json',

          \t\t            \tsuccess : function(data){
          \t\t\t            \tif(jQuery.trim(data)==''){ // kalau hasil query kosong
          \t\t\t            \t\thtml=\"Sisa Uang 0 Rupiah \";
          \t\t\t            \t\t//alert (html);
          \t\t\t            \t\t\$('#sisauang').html(html);
          \t\t\t\t\t\t\t\treturn; //exit sub ini
          \t\t\t            \t}
          \t\t\t            \t\thtml=\"Sisa Uang \"+data[0].totsisa+\" Rupiah \";
          \t\t\t            \t\t//alert (html);
          \t\t\t            \t\t\$('#sisauang').html(html);
          \t\t            \t}

          \t    \t\t\t})


                }
            });
        });
    </script>
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "footer.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("    </section>


    <!-- Bootstrap Core Js -->
    <script src=\"<?php echo base_url();?>template/plugins/bootstrap/js/bootstrap.js\"></script>

    <!-- Select Plugin Js -->
    <script src=\"<?php echo base_url();?>template/plugins/bootstrap-select/js/bootstrap-select.js\"></script>

    <!-- Slimscroll Plugin Js -->
    <script src=\"<?php echo base_url();?>template/plugins/jquery-slimscroll/jquery.slimscroll.js\"></script>

    <!-- Bootstrap Notify Plugin Js -->
    <script src=\"<?php echo base_url();?>template/plugins/bootstrap-notify/bootstrap-notify.js\"></script>

    <!-- Waves Effect Plugin Js -->
    <script src=\"<?php echo base_url();?>template/plugins/node-waves/waves.js\"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src=\"<?php echo base_url();?>template/plugins/jquery-spinner/js/jquery.spinner.js\"></script>

    <!-- SweetAlert Plugin Js -->
    <script src=\"<?php echo base_url();?>template/plugins/sweetalert/sweetalert.min.js\"></script>

    <!-- Autosize Plugin Js -->
    <script src=\"<?php echo base_url();?>template/plugins/autosize/autosize.js\"></script>

    <!-- Moment Plugin Js -->
    <script src=\"<?php echo base_url();?>template/plugins/momentjs/moment.js\"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src=\"<?php echo base_url();?>template/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js\"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src=\"<?php echo base_url();?>template/plugins/jquery-datatable/jquery.dataTables.js\"></script>
    <script src=\"<?php echo base_url();?>template/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js\"></script>
    <script src=\"<?php echo base_url();?>template/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js\"></script>
    <script src=\"<?php echo base_url();?>template/plugins/jquery-datatable/extensions/export/buttons.flash.min.js\"></script>
    <script src=\"<?php echo base_url();?>template/plugins/jquery-datatable/extensions/export/jszip.min.js\"></script>
    <script src=\"<?php echo base_url();?>template/plugins/jquery-datatable/extensions/export/pdfmake.min.js\"></script>
    <script src=\"<?php echo base_url();?>template/plugins/jquery-datatable/extensions/export/vfs_fonts.js\"></script>
    <script src=\"<?php echo base_url();?>template/plugins/jquery-datatable/extensions/export/buttons.html5.min.js\"></script>
    <script src=\"<?php echo base_url();?>template/plugins/jquery-datatable/extensions/export/buttons.print.min.js\"></script>



    <!-- Custom Js -->
    <script src=\"<?php echo base_url();?>template/js/admin.js\"></script>
    <script src=\"<?php echo base_url();?>template/js/pages/forms/basic-form-elements.js\"></script>
    <script src=\"<?php echo base_url();?>template/js/pages/ui/dialogs.js\"></script>
    <script src=\"<?php echo base_url();?>template/js/pages/tables/jquery-datatable.js\"></script>

    <!-- Demo Js -->
    <script src=\"<?php echo base_url();?>template/js/demo.js\"></script>

    <!-- Memanggil file .js untuk proses autocomplete -->
    <!-- <script type='text/javascript' src='<?php echo base_url();?>assets/js/jquery-1.8.2.min.js'></script> -->
    <script type='text/javascript' src='<?php echo base_url();?>assets/js/jquery.autocomplete.js'></script>

    <!-- Memanggil file .css untuk style saat data dicari dalam filed -->
    <link href='<?php echo base_url();?>assets/js/jquery.autocomplete.css' rel='stylesheet' />

    <!-- Memanggil file .css autocomplete_ci/assets/css/default.css -->
    <link href='<?php echo base_url();?>assets/css/default.css' rel='stylesheet' />

    <script type='text/javascript'>
        var site = \"<?php echo site_url();?>\";
        \$(function(){
            \$('.autocomplete').autocomplete({
                // serviceUrl berisi URL ke controller/fungsi yang menangani request kita
                serviceUrl: site+'/autocomplete/carisiswa',
                // fungsi ini akan dijalankan ketika user memilih salah satu hasil request
                onSelect: function (suggestion) {
                  \$('#nis').val(suggestion.nis);
          \t\t\t\t\$('#namasiswa').val(suggestion.namasiswa);
          \t\t\t\t\$('#kelas').val(suggestion.kelas+ ' - ' +suggestion.marhalah);
          \t\t\t\t\$('#namaayah').val(suggestion.namaayah);
          \t\t\t\t\$('#cari').val(\"\");
                  \$('#transaksiakhir').html(\"-\");
          \t\t\t\t\$('#sisauang').html(\"-\");
          \t\t\t\tvar nis=suggestion.nis;
                  var <?=\$this->security->get_csrf_token_name();?> =\$('input[name=<?=\$this->security->get_csrf_token_name();?>]').val();
          \t\t\t\t      \$.ajax({
          \t\t\t            type  : \"post\",
          \t\t\t            data: 'nis='+nis
                            +'&<?=\$this->security->get_csrf_token_name();?>='+<?=\$this->security->get_csrf_token_name();?>,
          \t\t\t            url   : '<?php echo base_url()?>index.php/keuanganuangsakukeluar/carikeluarterakhir',
          \t\t\t            async : true,
          \t\t\t            dataType : 'json',

          \t\t            \tsuccess : function(data){
          \t\t\t            \tif(jQuery.trim(data)==''){ // kalau hasil query kosong
          \t\t\t            \t\thtml=\"Tidak Ada Data Pengambilan\";
          \t\t\t            \t\t\$('#transaksiakhir').html(html);
          \t\t\t\t\t\t\t\treturn; //exit sub ini
          \t\t\t            \t}
          \t\t\t            \t\thtml=\"Terakhir Ambil Uang Tanggal \"+data[0].tanggal+\" Dengan Jumlah \"+data[0].uangkeluar;
          \t\t\t            \t\t\$('#transaksiakhir').html(html);
          \t\t            \t}

          \t    \t\t\t})

          \t\t\t\t      \$.ajax({
          \t\t\t            type  : \"post\",
          \t\t\t            data: 'nis='+nis
                            +'&<?=\$this->security->get_csrf_token_name();?>='+<?=\$this->security->get_csrf_token_name();?>,
          \t\t\t            url   : '<?php echo base_url()?>index.php/keuanganuangsakukeluar/carisisauangsaku',
          \t\t\t            async : true,
          \t\t\t            dataType : 'json',

          \t\t            \tsuccess : function(data){
          \t\t\t            \tif(jQuery.trim(data)==''){ // kalau hasil query kosong
          \t\t\t            \t\thtml=\"Sisa Uang 0 Rupiah \";
          \t\t\t            \t\t//alert (html);
          \t\t\t            \t\t\$('#sisauang').html(html);
          \t\t\t\t\t\t\t\treturn; //exit sub ini
          \t\t\t            \t}
          \t\t\t            \t\thtml=\"Sisa Uang \"+data[0].totsisa+\" Rupiah \";
          \t\t\t            \t\t//alert (html);
          \t\t\t            \t\t\$('#sisauang').html(html);
          \t\t            \t}

          \t    \t\t\t})


                }
            });
        });
    </script>
</body>

</html>
", "footer.php", "/home/sipy1897/public_html/demo/apliku/views/footer.php");
    }
}
