<?php

/* keuangan/rutin/datalistmonitoringspp.twig */
class __TwigTemplate_93baa23e8a2ba9fb1b6892120c1022143b0a75e02705789e17378e043d88d5c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/master_layouts.twig", "keuangan/rutin/datalistmonitoringspp.twig", 1);
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
               <div class=\"block-header\" align=\"center\"><b>Laporan Monitoring SPP</b></div>
               <div class=\"table-responsive\">
                  <table class=\"table table-bordered table-striped table-hover dataTable\" id=\"data_monitoringspp\">
                     <thead>
                        <tr>
                           <th>No</th>
                           <th>NIS</th>
                           <th>Nama Siswa</th>
                           <th>Kelas</th>
                           <th>Juli</th>
                           <th>Agustus</th>
                           <th>September</th>
                           <th>Oktober</th>
                           <th>November</th>
                           <th>Desember</th>
                           <th>Januari</th>
                           <th>Februari</th>
                           <th>Maret</th>
                           <th>April</th>
                           <th>Mei</th>
                           <th>Juni</th>
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
         <div class=\"modal-body\">
            <form method=\"post\" id=\"sort_monitoringspp\">

               <input type=\"hidden\" name=\"";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["csrf_name"]) ? $context["csrf_name"] : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["csrf_hash"]) ? $context["csrf_hash"] : null), "html", null, true);
        echo "\">
            </form>
         </div>
      </div>

   </div>
</div>
";
    }

    // line 64
    public function block_custom_js($context, array $blocks = array())
    {
        // line 65
        echo "
";
        // line 66
        $this->loadTemplate("layouts/datatable.twig", "keuangan/rutin/datalistmonitoringspp.twig", 66)->display($context);
        // line 67
        echo "
";
    }

    public function getTemplateName()
    {
        return "keuangan/rutin/datalistmonitoringspp.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 67,  105 => 66,  102 => 65,  99 => 64,  85 => 55,  32 => 4,  29 => 3,  11 => 1,);
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
               <div class=\"block-header\" align=\"center\"><b>Laporan Monitoring SPP</b></div>
               <div class=\"table-responsive\">
                  <table class=\"table table-bordered table-striped table-hover dataTable\" id=\"data_monitoringspp\">
                     <thead>
                        <tr>
                           <th>No</th>
                           <th>NIS</th>
                           <th>Nama Siswa</th>
                           <th>Kelas</th>
                           <th>Juli</th>
                           <th>Agustus</th>
                           <th>September</th>
                           <th>Oktober</th>
                           <th>November</th>
                           <th>Desember</th>
                           <th>Januari</th>
                           <th>Februari</th>
                           <th>Maret</th>
                           <th>April</th>
                           <th>Mei</th>
                           <th>Juni</th>
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
         <div class=\"modal-body\">
            <form method=\"post\" id=\"sort_monitoringspp\">

               <input type=\"hidden\" name=\"{{ csrf_name }}\" value=\"{{ csrf_hash }}\">
            </form>
         </div>
      </div>

   </div>
</div>
{% endblock %}

{% block custom_js %}

{% include 'layouts/datatable.twig' %}

{% endblock %}
", "keuangan/rutin/datalistmonitoringspp.twig", "/home/sipy1897/public_html/demo/apliku/views/keuangan/rutin/datalistmonitoringspp.twig");
    }
}
