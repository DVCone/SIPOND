<?php

/* keuangan/rutin/datalistpembayaran.twig */
class __TwigTemplate_7118cdbc22e241d94b6233df2cf5b8b00097a2c49ad60379c9370328c2fbf8d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/master_layouts.twig", "keuangan/rutin/datalistpembayaran.twig", 1);
        $this->blocks = array(
            'main_content' => array($this, 'block_main_content'),
            'custom_js' => array($this, 'block_custom_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/master_layouts.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main_content($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"container-fluid\">
   <div class=\"block-header\">

   </div>

   <div class=\"row clearfix\">
      <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
         <div class=\"card\">
            <div class=\"body\">
               <div class=\"block-header\" align=\"center\"><b>Data Nota Pembayaran</b></div>
               <div class=\"table-responsive\">
                  <table class=\"table table-bordered table-striped table-hover dataTable\" id=\"data_pembayaran\">
                     <thead>
                        <tr>
                           <th>No Urut</th>
                           <th>No Nota</th>
                           <th>NIS</th>
                           <th>Nama Siswa</th>
                           <th>Kelas</th>
                           <th>Tanggal Pembayaran</th>
                           <th>Total Pembayaran</th>
                           <th>Pengguna</th>
                           <!--<th>Aksi</th>-->
                        </tr>
                     </thead>

                     <tbody id=\"show_data\">

                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div class=\"modal fade\" id=\"modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
   <div class=\"modal-dialog\" style=\"width:80%\">
      <div class=\"modal-content\">
         <div class=\"modal-body\">
            <form method=\"POST\" id=\"sort_pembayaran\">

               <input type=\"hidden\" id=\"csrf\" name=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["csrf_name"]) ? $context["csrf_name"] : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["csrf_hash"]) ? $context["csrf_hash"] : null), "html", null, true);
        echo "\">
            
            </form>
         </div>
      </div>
   </div>
</div>

<div class=\"modal fade\" id=\"modal_nota\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
   <div class=\"modal-dialog\" style=\"width:80%\">
      <div class=\"modal-content\">
         <div class=\"modal-body printable\" id=\"print_modal\">
            <div style=\"border-bottom: 2px dashed #333; text-align: center;\">
               <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, base_url("gambar/kopnota.png"), "html", null, true);
        echo "\" style=\"width: 80%;\">
            </div>

            <table width=\"100%\" style=\"line-height: 1.5em;\">
               <tr>
                  <td style=\"width: 10em;\"></td>
                  <td><h4 style=\"text-align: center; margin: 10px 0 0px 0;\">SPP dan Keuangan Rutin</h4></td>
                  <td style=\"text-align: right; width: 10em;\">
                     <span id=\"tglBukti\" style=\"font-family: courier, sans;\">x</span>
                  </td>
            </table>

            <br>
            <table width=\"100%\" style=\"line-height: 1.3em; font-size: 12px\">
               <tbody>
                  <tr>
                     <td>No Nota</td>
                     <td>:</td>
                     <td colspan=\"2\" id=\"modalnonota\">x</td>
                     <td>Metode Pembayaran</td>
                     <td>:</td>
                     <td id=\"modaltipe\">x</td>
                  </tr>
                  <tr>
                     <td>Wali Santri</td>
                     <td>:</td>
                     <td colspan=\"2\" id=\"modalnamaayah\">x</td>
                  </tr>
                  <tr>
                     <td>Santri</td>
                     <td>:</td>
                     <td colspan=\"2\" id=\"modalnamasiswa\">x</td>
                     <td>Kelas</td>
                     <td>:</td>
                     <td id=\"modalkelas\">x</td>
                  </tr>
               </tbody>
            </table>

            <table width=\"100%\" style=\"margin: 0.5em 0; line-height: 1.5em; font-size: 12px\">
               <tr style=\"font-weight: bold; border-top: 2px dashed #000; border-bottom: 2px dashed #000;\">
                  <th width=\"50%\" style=\"padding: 2px 10px;\">Jenis Pembayaran</th>
                  <th style=\"text-align: right; padding-right: 2em;\">Nominal</th>
               </tr>

               <tr>
                  <td width=\"50%\" style=\"padding: 2px 10px; width: 13em;\">
                     SPP &nbsp; &nbsp; &nbsp; (<span id=\"modalbulanspp\">x</span>)
                     <br> Uang Cuci <br> Daftar Ulang <br> Uang Pangkal <br> Infaq &nbsp; &nbsp; &nbsp; <span id=\"modalcatataninfaq\"></span><br> Uang Saku <br> Bimbingan Belajar / UAN
                  </td>
                  <td style=\"text-align: right; padding: 2px 10px;\">
                     <span id=\"modalspp\">0</span><br>
                     <span id=\"tabelUangCuci\">0</span><br>
                     <span id=\"modaldaftarulang\">0</span><br>
                     <span id=\"modaluangpangkal\">0</span><br>
                     <span id=\"modalinfaq\">0</span><br>
                     <span id=\"modaluangsaku\">0</span><br>
                     <span id=\"modalbimbel\">0</span>
                  </td>
               </tr>
               <tr style=\"font-weight: bold; border-top: 2px dashed #333; border-bottom: 2px dashed #333;\">
                  <td style=\"padding: 2px 10px;\">Jumlah</td>
                  <td style=\"text-align: right; padding: 2px 10px;\">Rp. <span id=\"modaltotal\">x</span></td>
                  <td></td>
               </tr>
            </table>

            <table width=\"100%%\" style=\"line-height: 1.5em; font-size: 12px\">
               <tr>
                  <td colspan=\"2\"></td>
                  <td style=\"text-align: right;\">
                     <span id=\"modallokasi\"><!-- Bantul --></span>,
                     <span id=\"modaltanggal\">x</span>
                  </td>
               </tr>
               <tr>
                  <td style=\"width: 15em; padding-left: 10px;\">Pembayar,</td>
                  <td style=\"width: 26em;\"></td>
                  <td style=\"text-align: right;\">Petugas,</td>
               </tr>
               <tr>
                  <td style=\"padding-left: 10px;height: 70px;vertical-align: bottom;\"></td>
                  <td></td>
                  <td id=\"modalpengguna\" style=\"vertical-align: bottom; text-align: center;\"></td>
               </tr>
            </table>

            <!-- Button trigger modal -->


         </div>
         <div class=\"modal-body\">
            <p id=\"demo\"></p>
         </div>
         <div class=\"modal-footer\">
            <!--<button type=\"button\" class=\"btn btn-primary\" id=\"btn-modal-print\" onclick=\"myprint('printable')\">Print Bukti Penerimaan</button>-->
            <button type=\"button\" class=\"btn btn-primary\" id=\"print_nota\">Print Bukti Penerimaan</button>
         </div>

      </div>

   </div>
</div>

";
    }

    // line 168
    public function block_custom_js($context, array $blocks = array())
    {
        // line 169
        echo "
";
        // line 170
        $this->loadTemplate("layouts/datatable.twig", "keuangan/rutin/datalistpembayaran.twig", 170)->display($context);
        // line 171
        echo "
<script src=\"";
        // line 172
        echo twig_escape_filter($this->env, base_url("template/js/jQuery.print.min.js"), "html", null, true);
        echo "\"></script>

<script>
   \$(document).ready(function() {
      \$('button#print_nota').on('click', function(e) {
         \$('#print_modal').print();
      })
   })
</script>
";
    }

    public function getTemplateName()
    {
        return "keuangan/rutin/datalistpembayaran.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 172,  213 => 171,  211 => 170,  208 => 169,  205 => 168,  96 => 61,  78 => 48,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layouts/master_layouts.twig' %}

{% block main_content %}

<div class=\"container-fluid\">
   <div class=\"block-header\">

   </div>

   <div class=\"row clearfix\">
      <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
         <div class=\"card\">
            <div class=\"body\">
               <div class=\"block-header\" align=\"center\"><b>Data Nota Pembayaran</b></div>
               <div class=\"table-responsive\">
                  <table class=\"table table-bordered table-striped table-hover dataTable\" id=\"data_pembayaran\">
                     <thead>
                        <tr>
                           <th>No Urut</th>
                           <th>No Nota</th>
                           <th>NIS</th>
                           <th>Nama Siswa</th>
                           <th>Kelas</th>
                           <th>Tanggal Pembayaran</th>
                           <th>Total Pembayaran</th>
                           <th>Pengguna</th>
                           <!--<th>Aksi</th>-->
                        </tr>
                     </thead>

                     <tbody id=\"show_data\">

                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div class=\"modal fade\" id=\"modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
   <div class=\"modal-dialog\" style=\"width:80%\">
      <div class=\"modal-content\">
         <div class=\"modal-body\">
            <form method=\"POST\" id=\"sort_pembayaran\">

               <input type=\"hidden\" id=\"csrf\" name=\"{{ csrf_name }}\" value=\"{{ csrf_hash }}\">
            
            </form>
         </div>
      </div>
   </div>
</div>

<div class=\"modal fade\" id=\"modal_nota\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
   <div class=\"modal-dialog\" style=\"width:80%\">
      <div class=\"modal-content\">
         <div class=\"modal-body printable\" id=\"print_modal\">
            <div style=\"border-bottom: 2px dashed #333; text-align: center;\">
               <img src=\"{{ base_url('gambar/kopnota.png') }}\" style=\"width: 80%;\">
            </div>

            <table width=\"100%\" style=\"line-height: 1.5em;\">
               <tr>
                  <td style=\"width: 10em;\"></td>
                  <td><h4 style=\"text-align: center; margin: 10px 0 0px 0;\">SPP dan Keuangan Rutin</h4></td>
                  <td style=\"text-align: right; width: 10em;\">
                     <span id=\"tglBukti\" style=\"font-family: courier, sans;\">x</span>
                  </td>
            </table>

            <br>
            <table width=\"100%\" style=\"line-height: 1.3em; font-size: 12px\">
               <tbody>
                  <tr>
                     <td>No Nota</td>
                     <td>:</td>
                     <td colspan=\"2\" id=\"modalnonota\">x</td>
                     <td>Metode Pembayaran</td>
                     <td>:</td>
                     <td id=\"modaltipe\">x</td>
                  </tr>
                  <tr>
                     <td>Wali Santri</td>
                     <td>:</td>
                     <td colspan=\"2\" id=\"modalnamaayah\">x</td>
                  </tr>
                  <tr>
                     <td>Santri</td>
                     <td>:</td>
                     <td colspan=\"2\" id=\"modalnamasiswa\">x</td>
                     <td>Kelas</td>
                     <td>:</td>
                     <td id=\"modalkelas\">x</td>
                  </tr>
               </tbody>
            </table>

            <table width=\"100%\" style=\"margin: 0.5em 0; line-height: 1.5em; font-size: 12px\">
               <tr style=\"font-weight: bold; border-top: 2px dashed #000; border-bottom: 2px dashed #000;\">
                  <th width=\"50%\" style=\"padding: 2px 10px;\">Jenis Pembayaran</th>
                  <th style=\"text-align: right; padding-right: 2em;\">Nominal</th>
               </tr>

               <tr>
                  <td width=\"50%\" style=\"padding: 2px 10px; width: 13em;\">
                     SPP &nbsp; &nbsp; &nbsp; (<span id=\"modalbulanspp\">x</span>)
                     <br> Uang Cuci <br> Daftar Ulang <br> Uang Pangkal <br> Infaq &nbsp; &nbsp; &nbsp; <span id=\"modalcatataninfaq\"></span><br> Uang Saku <br> Bimbingan Belajar / UAN
                  </td>
                  <td style=\"text-align: right; padding: 2px 10px;\">
                     <span id=\"modalspp\">0</span><br>
                     <span id=\"tabelUangCuci\">0</span><br>
                     <span id=\"modaldaftarulang\">0</span><br>
                     <span id=\"modaluangpangkal\">0</span><br>
                     <span id=\"modalinfaq\">0</span><br>
                     <span id=\"modaluangsaku\">0</span><br>
                     <span id=\"modalbimbel\">0</span>
                  </td>
               </tr>
               <tr style=\"font-weight: bold; border-top: 2px dashed #333; border-bottom: 2px dashed #333;\">
                  <td style=\"padding: 2px 10px;\">Jumlah</td>
                  <td style=\"text-align: right; padding: 2px 10px;\">Rp. <span id=\"modaltotal\">x</span></td>
                  <td></td>
               </tr>
            </table>

            <table width=\"100%%\" style=\"line-height: 1.5em; font-size: 12px\">
               <tr>
                  <td colspan=\"2\"></td>
                  <td style=\"text-align: right;\">
                     <span id=\"modallokasi\"><!-- Bantul --></span>,
                     <span id=\"modaltanggal\">x</span>
                  </td>
               </tr>
               <tr>
                  <td style=\"width: 15em; padding-left: 10px;\">Pembayar,</td>
                  <td style=\"width: 26em;\"></td>
                  <td style=\"text-align: right;\">Petugas,</td>
               </tr>
               <tr>
                  <td style=\"padding-left: 10px;height: 70px;vertical-align: bottom;\"></td>
                  <td></td>
                  <td id=\"modalpengguna\" style=\"vertical-align: bottom; text-align: center;\"></td>
               </tr>
            </table>

            <!-- Button trigger modal -->


         </div>
         <div class=\"modal-body\">
            <p id=\"demo\"></p>
         </div>
         <div class=\"modal-footer\">
            <!--<button type=\"button\" class=\"btn btn-primary\" id=\"btn-modal-print\" onclick=\"myprint('printable')\">Print Bukti Penerimaan</button>-->
            <button type=\"button\" class=\"btn btn-primary\" id=\"print_nota\">Print Bukti Penerimaan</button>
         </div>

      </div>

   </div>
</div>

{% endblock %}


{% block custom_js %}

{% include 'layouts/datatable.twig' %}

<script src=\"{{ base_url('template/js/jQuery.print.min.js') }}\"></script>

<script>
   \$(document).ready(function() {
      \$('button#print_nota').on('click', function(e) {
         \$('#print_modal').print();
      })
   })
</script>
{% endblock %}
", "keuangan/rutin/datalistpembayaran.twig", "/home/sipy1897/public_html/demo/apliku/views/keuangan/rutin/datalistpembayaran.twig");
    }
}
