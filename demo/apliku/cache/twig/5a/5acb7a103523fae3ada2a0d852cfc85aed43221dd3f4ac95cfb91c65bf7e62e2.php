<?php

/* siswa/kartupelajar.twig */
class __TwigTemplate_9963ba29fc0cdbd77eab3779afd39bf04282e182745ab2535a7273bb8686822e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/master_layouts.twig", "siswa/kartupelajar.twig", 1);
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

    public function block_main_content($context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"container-fluid\">
   <!-- Widgets -->
   <div class=\"row clearfix\">
      <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
         <div class=\"card\">
            <div class=\"header\">
               <div class=\"col-sm-8\">

                  <h2>
                     Cetak Kartu Pelajar
                  </h2>

               </div>
            </div>
            <div class=\"body\">
               <div class=\"row clearfix\">
                  <form method=\"POST\" id=\"form_kartu_pelajar\">

                     <div class=\"col-sm-12\">
                        <b>Pilih Kelas</b>
                        <select name=\"cari_kelas\" class=\"form-control show-tick\" data-live-search=\"true\" id=\"cari_kelas\">
                              <option value=\"\"></option>
                              ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kelas"]) ? $context["kelas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 25
            echo "                              <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "namakelas", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "namakelas", array()), "html", null, true);
            echo "</option>
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                           </select>
                        <div class=\"form-group\">
                           <div id=\"error_box\"></div>
                        </div>
                     </div>

                     <div class=\"col-sm-12\">
                        <div class=\"form-group\">
                           <input type=\"hidden\" name=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["csrf_name"]) ? $context["csrf_name"] : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["csrf_hash"]) ? $context["csrf_hash"] : null), "html", null, true);
        echo "\" style=\"display: none\">
                           <!--<button type=\"reset\" class=\"btn btn-danger waves-effect\">Batalkan Isian</button>-->
                           <!--<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#kartu_pelajar\">Cetak Kartu Pelajar</button>-->
                           <button type=\"submit\" class=\"btn btn-primary\">Cetak Kartu Pelajar</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>

         </div>
      </div>
      <!-- #END# Widgets -->
      <!-- CPU Usage -->
   </div>
</div>

<div class=\"modal fade bd-example-modal-lg\" id=\"kartu_pelajar\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
   <div class=\"modal-dialog modal-lg\" role=\"document\">
      <div class=\"modal-content\">
         <div class=\"modal-body\" id=\"data_kartu_pelajar\">
            <div class=\"row\">

            </div>
         </div>
         <div id=\"pagination\" class=\"col-sm-12\"></div>
         <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
            <button id=\"print_btn\" type=\"button\" class=\"btn btn-primary\">Print</button>
         </div>
      </div>
   </div>
</div>

<div class=\"modal fade bd-example-modal-lg\" id=\"print_kartu_pelajar\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
   <div class=\"modal-dialog modal-lg\" role=\"document\">
      <div class=\"modal-content\">
         <div class=\"modal-body\" id=\"print_kartu\">
            <div class=\"row\">

            </div>
         </div>
         <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
            <button id=\"print_btn\" type=\"button\" class=\"btn btn-primary\">Print</button>
         </div>
      </div>
   </div>
</div>

";
    }

    // line 85
    public function block_custom_js($context, array $blocks = array())
    {
        echo " ";
        $this->loadTemplate("layouts/form-validation.twig", "siswa/kartupelajar.twig", 85)->display($context);
        // line 86
        echo "<script src=\"";
        echo twig_escape_filter($this->env, base_url("template/js/jQuery.print.min.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\">
   \$(document).ready(function() {
      function loadPage(page) {
         \$.ajax({
            url: page,
            method: \"GET\",
            dataType: \"JSON\",
            success: function(res) {
               var data = res.kartu_pelajar;
               var kartu_pelajar = '';

               if (data == '') {
                  //console.log(kartu_pelajar);
                  \$('#print_btn').hide();
                  \$('#data_kartu_pelajar .row').html('<div class=\"modal-body text-center\"><h4>Tidak Ada Data di Kelas Ini.</h4></div>');

               } else {
                  \$.each(data, function(i, item) {

                     kartu_pelajar += '<div class=\"col-lg-6 col-md-6 col-sm-4 col-xs-6\"> <div class=\"card-hero\"> <div class=\"row\"> <div class=\"col-sm-12\"> <div class=\"card-header\"> <h1>' + data[i][\"namasekolah\"] + '</h1> <h6>' + data[i][\"alamatsekolah\"] + ' ' + data[i][\"kabupatensekolah\"]+ '</h6> </div> </div> ';
                     kartu_pelajar += '<div class=\"main\"> <table> <tr> <td> <img src=\"https://demo.sipond.com/assets/fotosiswa/' + data[i][\"foto\"] + '\" alt=\"no-avatar\" class=\"img-fluid\"> </td> </tr> </table> ';
                     kartu_pelajar += '<div class=\"hero\"> <table> <tr> <td> <h6>Nama Lengkap</h6> </td> <td style=\"font-size: 10px;\">:</td> <td> <p>&nbsp;' + data[i][\"namasiswa\"] + '</p> </td> </tr> <tr> <td> <h6>No. Induk Siswa</h6> </td> <td style=\"font-size: 10px;\">:</td> <td> <p>&nbsp;' + data[i][\"nis\"] + '</p> </td> </tr> <tr> ';
                     kartu_pelajar += '<td> <h6>Tempat/Tanggal Lahir</h6> </td> <td style=\"font-size: 10px;\">:</td> <td> <p>&nbsp;' + data[i][\"kotalahir\"] + ',' + data[i][\"tanggallahir\"] + '</p> </td> </tr> <tr> <td> <h6>Alamat</h6> </td> <td style=\"font-size: 10px;\">:</td> <td> <p>&nbsp;' + data[i][\"alamat\"] + ',' + data[i][\"kelurahan\"] + ',' + data[i][\"kecamatan\"] + ',' + data[i][\"provinsi\"] + '</p> </td> </tr> </table> </div> </div> <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 card-footer\"> <table width=\"100%\"> <tr> <td> <h5>Kepala Sekolah</h5> </td> </tr> <tr> <td> <p class=\"font-print\">' + data[i][\"kepalasekolah\"] + '</p> </td> </tr> </table> </div> </div> </div> </div> ';

                  });
                  //console.log(kartu_pelajar);
                  \$('#print_btn').show();
                  \$('#data_kartu_pelajar .row').html(kartu_pelajar);
                  \$('#pagination').html(res.links);
               }
               \$('#kartu_pelajar').modal();
            }
         })
      };

      \$(document).on('click', '#pagination a', function(e) {
         e.preventDefault();
         var page = \$(this).attr(\"href\");
         loadPage(page);
      });
   });

   \$('#print_btn').on('click', function() {
      \$('#print_kartu').print();
   });
</script>


";
    }

    public function getTemplateName()
    {
        return "siswa/kartupelajar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 86,  137 => 85,  80 => 35,  70 => 27,  59 => 25,  55 => 24,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layouts/master_layouts.twig' %} {% block main_content %}
<div class=\"container-fluid\">
   <!-- Widgets -->
   <div class=\"row clearfix\">
      <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
         <div class=\"card\">
            <div class=\"header\">
               <div class=\"col-sm-8\">

                  <h2>
                     Cetak Kartu Pelajar
                  </h2>

               </div>
            </div>
            <div class=\"body\">
               <div class=\"row clearfix\">
                  <form method=\"POST\" id=\"form_kartu_pelajar\">

                     <div class=\"col-sm-12\">
                        <b>Pilih Kelas</b>
                        <select name=\"cari_kelas\" class=\"form-control show-tick\" data-live-search=\"true\" id=\"cari_kelas\">
                              <option value=\"\"></option>
                              {% for m in kelas %}
                              <option value=\"{{ m.namakelas }}\">{{ m.namakelas }}</option>
                              {% endfor %}
                           </select>
                        <div class=\"form-group\">
                           <div id=\"error_box\"></div>
                        </div>
                     </div>

                     <div class=\"col-sm-12\">
                        <div class=\"form-group\">
                           <input type=\"hidden\" name=\"{{ csrf_name }}\" value=\"{{ csrf_hash }}\" style=\"display: none\">
                           <!--<button type=\"reset\" class=\"btn btn-danger waves-effect\">Batalkan Isian</button>-->
                           <!--<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#kartu_pelajar\">Cetak Kartu Pelajar</button>-->
                           <button type=\"submit\" class=\"btn btn-primary\">Cetak Kartu Pelajar</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>

         </div>
      </div>
      <!-- #END# Widgets -->
      <!-- CPU Usage -->
   </div>
</div>

<div class=\"modal fade bd-example-modal-lg\" id=\"kartu_pelajar\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
   <div class=\"modal-dialog modal-lg\" role=\"document\">
      <div class=\"modal-content\">
         <div class=\"modal-body\" id=\"data_kartu_pelajar\">
            <div class=\"row\">

            </div>
         </div>
         <div id=\"pagination\" class=\"col-sm-12\"></div>
         <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
            <button id=\"print_btn\" type=\"button\" class=\"btn btn-primary\">Print</button>
         </div>
      </div>
   </div>
</div>

<div class=\"modal fade bd-example-modal-lg\" id=\"print_kartu_pelajar\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
   <div class=\"modal-dialog modal-lg\" role=\"document\">
      <div class=\"modal-content\">
         <div class=\"modal-body\" id=\"print_kartu\">
            <div class=\"row\">

            </div>
         </div>
         <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
            <button id=\"print_btn\" type=\"button\" class=\"btn btn-primary\">Print</button>
         </div>
      </div>
   </div>
</div>

{% endblock %} {% block custom_js %} {% include 'layouts/form-validation.twig' %}
<script src=\"{{ base_url('template/js/jQuery.print.min.js') }}\"></script>

<script type=\"text/javascript\">
   \$(document).ready(function() {
      function loadPage(page) {
         \$.ajax({
            url: page,
            method: \"GET\",
            dataType: \"JSON\",
            success: function(res) {
               var data = res.kartu_pelajar;
               var kartu_pelajar = '';

               if (data == '') {
                  //console.log(kartu_pelajar);
                  \$('#print_btn').hide();
                  \$('#data_kartu_pelajar .row').html('<div class=\"modal-body text-center\"><h4>Tidak Ada Data di Kelas Ini.</h4></div>');

               } else {
                  \$.each(data, function(i, item) {

                     kartu_pelajar += '<div class=\"col-lg-6 col-md-6 col-sm-4 col-xs-6\"> <div class=\"card-hero\"> <div class=\"row\"> <div class=\"col-sm-12\"> <div class=\"card-header\"> <h1>' + data[i][\"namasekolah\"] + '</h1> <h6>' + data[i][\"alamatsekolah\"] + ' ' + data[i][\"kabupatensekolah\"]+ '</h6> </div> </div> ';
                     kartu_pelajar += '<div class=\"main\"> <table> <tr> <td> <img src=\"https://demo.sipond.com/assets/fotosiswa/' + data[i][\"foto\"] + '\" alt=\"no-avatar\" class=\"img-fluid\"> </td> </tr> </table> ';
                     kartu_pelajar += '<div class=\"hero\"> <table> <tr> <td> <h6>Nama Lengkap</h6> </td> <td style=\"font-size: 10px;\">:</td> <td> <p>&nbsp;' + data[i][\"namasiswa\"] + '</p> </td> </tr> <tr> <td> <h6>No. Induk Siswa</h6> </td> <td style=\"font-size: 10px;\">:</td> <td> <p>&nbsp;' + data[i][\"nis\"] + '</p> </td> </tr> <tr> ';
                     kartu_pelajar += '<td> <h6>Tempat/Tanggal Lahir</h6> </td> <td style=\"font-size: 10px;\">:</td> <td> <p>&nbsp;' + data[i][\"kotalahir\"] + ',' + data[i][\"tanggallahir\"] + '</p> </td> </tr> <tr> <td> <h6>Alamat</h6> </td> <td style=\"font-size: 10px;\">:</td> <td> <p>&nbsp;' + data[i][\"alamat\"] + ',' + data[i][\"kelurahan\"] + ',' + data[i][\"kecamatan\"] + ',' + data[i][\"provinsi\"] + '</p> </td> </tr> </table> </div> </div> <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 card-footer\"> <table width=\"100%\"> <tr> <td> <h5>Kepala Sekolah</h5> </td> </tr> <tr> <td> <p class=\"font-print\">' + data[i][\"kepalasekolah\"] + '</p> </td> </tr> </table> </div> </div> </div> </div> ';

                  });
                  //console.log(kartu_pelajar);
                  \$('#print_btn').show();
                  \$('#data_kartu_pelajar .row').html(kartu_pelajar);
                  \$('#pagination').html(res.links);
               }
               \$('#kartu_pelajar').modal();
            }
         })
      };

      \$(document).on('click', '#pagination a', function(e) {
         e.preventDefault();
         var page = \$(this).attr(\"href\");
         loadPage(page);
      });
   });

   \$('#print_btn').on('click', function() {
      \$('#print_kartu').print();
   });
</script>


{% endblock %}
", "siswa/kartupelajar.twig", "/home/sipy1897/public_html/demo/apliku/views/siswa/kartupelajar.twig");
    }
}
