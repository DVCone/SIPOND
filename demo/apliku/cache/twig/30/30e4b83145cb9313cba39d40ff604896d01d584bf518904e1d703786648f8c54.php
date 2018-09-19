<?php

/* keuangan/rutin/datalistnonspp.twig */
class __TwigTemplate_91ceeb2391d7ec3be302b114d7ed0732b2491e4b423ee2b882659f509bb66037 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/master_layouts.twig", "keuangan/rutin/datalistnonspp.twig", 1);
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
               <div class=\"block-header\">
                  <button type=\"button\" class=\"ml-auto btn btn-info waves-effect m-r-20\" data-toggle=\"modal\" data-target=\"#search_date\">Cari Data</button> 
                  <h2 class=\"text-center\">Laporan Pembayaran Non SPP</h2>
               </div>
               <div class=\"table-responsive\">
                  <table class=\"table table-bordered table-striped table-hover dataTable\" id=\"data_nospp\">
                     <thead>
                        <tr>
                           <th>No</th>
                           <th>NIS</th>
                           <th>Nama Siswa</th>
                           <th>Kelas</th>
                           <th>Uang Pangkal</th>
                           <th>Daftar Ulang</th>
                           <th>Bimbel</th>
                           <th>Uang Saku</th>
                           <th>Infaq</th>
                           <th>Keterangan Infaq</th>
                           <th>Hapus</th>
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

<div id=\"search_date\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">
   <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
         <div class=\"modal-header\">
            <h4 class=\"modal-title\">Search Data By Date Range</h4>
         </div>
         <div class=\"modal-body\">
            <form method=\"post\" id=\"sort_nospp\">
               <div class=\"row clearfix\">
                  <div class=\"col-sm-6\">
                     <div class=\"form-group\">
                        <div class=\"form-line\">
                           <input type=\"text\" class=\"form-control datepicker\"name=\"tanggal_awal\" id=\"tanggal_awal\" placeholder=\"Tanggal Awal\">
                        </div>
                     </div>
                  </div>
                  <div class=\"col-sm-6\">
                     <div class=\"form-group\">
                        <div class=\"form-line\">
                           <input type=\"text\" class=\"form-control datepicker\"name=\"tanggal_akhir\" id=\"tanggal_akhir\" placeholder=\"Tanggal Akhir\">
                        </div>
                     </div>
                  </div>
               </div>
               <input type=\"hidden\" name=\"";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["csrf_name"]) ? $context["csrf_name"] : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["csrf_hash"]) ? $context["csrf_hash"] : null), "html", null, true);
        echo "\">
            </form>
         </div>
         <div class=\"modal-footer\">
            <button id=\"search_data_nospp\" class=\"btn btn-link waves-effect\" type=\"button\">UPDATE</button>
            <button class=\"btn btn-link waves-effect\" type=\"button\" data-dismiss=\"modal\">CLOSE</button>
         </div>
      </div>

   </div>
</div>
";
    }

    // line 84
    public function block_custom_js($context, array $blocks = array())
    {
        // line 85
        echo "
";
        // line 86
        $this->loadTemplate("layouts/datatable.twig", "keuangan/rutin/datalistnonspp.twig", 86)->display($context);
        // line 87
        echo "
";
    }

    public function getTemplateName()
    {
        return "keuangan/rutin/datalistnonspp.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 87,  125 => 86,  122 => 85,  119 => 84,  101 => 71,  32 => 4,  29 => 3,  11 => 1,);
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
               <div class=\"block-header\">
                  <button type=\"button\" class=\"ml-auto btn btn-info waves-effect m-r-20\" data-toggle=\"modal\" data-target=\"#search_date\">Cari Data</button> 
                  <h2 class=\"text-center\">Laporan Pembayaran Non SPP</h2>
               </div>
               <div class=\"table-responsive\">
                  <table class=\"table table-bordered table-striped table-hover dataTable\" id=\"data_nospp\">
                     <thead>
                        <tr>
                           <th>No</th>
                           <th>NIS</th>
                           <th>Nama Siswa</th>
                           <th>Kelas</th>
                           <th>Uang Pangkal</th>
                           <th>Daftar Ulang</th>
                           <th>Bimbel</th>
                           <th>Uang Saku</th>
                           <th>Infaq</th>
                           <th>Keterangan Infaq</th>
                           <th>Hapus</th>
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

<div id=\"search_date\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">
   <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
         <div class=\"modal-header\">
            <h4 class=\"modal-title\">Search Data By Date Range</h4>
         </div>
         <div class=\"modal-body\">
            <form method=\"post\" id=\"sort_nospp\">
               <div class=\"row clearfix\">
                  <div class=\"col-sm-6\">
                     <div class=\"form-group\">
                        <div class=\"form-line\">
                           <input type=\"text\" class=\"form-control datepicker\"name=\"tanggal_awal\" id=\"tanggal_awal\" placeholder=\"Tanggal Awal\">
                        </div>
                     </div>
                  </div>
                  <div class=\"col-sm-6\">
                     <div class=\"form-group\">
                        <div class=\"form-line\">
                           <input type=\"text\" class=\"form-control datepicker\"name=\"tanggal_akhir\" id=\"tanggal_akhir\" placeholder=\"Tanggal Akhir\">
                        </div>
                     </div>
                  </div>
               </div>
               <input type=\"hidden\" name=\"{{ csrf_name }}\" value=\"{{ csrf_hash }}\">
            </form>
         </div>
         <div class=\"modal-footer\">
            <button id=\"search_data_nospp\" class=\"btn btn-link waves-effect\" type=\"button\">UPDATE</button>
            <button class=\"btn btn-link waves-effect\" type=\"button\" data-dismiss=\"modal\">CLOSE</button>
         </div>
      </div>

   </div>
</div>
{% endblock %}

{% block custom_js %}

{% include 'layouts/datatable.twig' %}

{% endblock %}
", "keuangan/rutin/datalistnonspp.twig", "/home/sipy1897/public_html/demo/apliku/views/keuangan/rutin/datalistnonspp.twig");
    }
}
