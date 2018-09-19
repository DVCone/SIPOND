<?php

/* keuangan/laporan/neracasaldo.twig */
class __TwigTemplate_069236f0edcca65a19fec4e971c4d4d6b1c461c012813a2ec605b37cd7263d8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/master_layouts.twig", "keuangan/laporan/neracasaldo.twig", 1);
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
               <div class=\"block-header\" align=\"center\"><b>Laporan Neraca Saldo</b></div>
               <div class=\"table-responsive\">
                  <table class=\"table table-bordered table-striped table-hover dataTable\" id=\"data_neracasaldo\">
                     <thead>
                        <tr>
                           <th>No Urut</th>
                           <th>Kode Rekening</th>
                           <th>Nama Rekening</th>
                           <th>Debet</th>
                           <th>Kredit</th>
                        </tr>
                     </thead>

                     <tbody id=\"show_data\">

                     </tbody>
                     <tfoot>
                        <tr>
                           <th colspan=\"3\" class=\"text-center\"></th>
                           <th class=\"numberFormat\"></th>
                           <th class=\"numberFormat\"></th>
                        </tr>
                     </tfoot>
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
            <form method=\"post\" id=\"sort_neracasaldo\">

               <input type=\"hidden\" name=\"";
        // line 51
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

    // line 60
    public function block_custom_js($context, array $blocks = array())
    {
        // line 61
        echo "
<script src=\"";
        // line 62
        echo twig_escape_filter($this->env, base_url("template/js/jquery.number.min.js"), "html", null, true);
        echo "\"></script>

";
        // line 64
        $this->loadTemplate("layouts/datatable.twig", "keuangan/laporan/neracasaldo.twig", 64)->display($context);
        // line 65
        echo "
";
    }

    public function getTemplateName()
    {
        return "keuangan/laporan/neracasaldo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 65,  106 => 64,  101 => 62,  98 => 61,  95 => 60,  81 => 51,  32 => 4,  29 => 3,  11 => 1,);
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
               <div class=\"block-header\" align=\"center\"><b>Laporan Neraca Saldo</b></div>
               <div class=\"table-responsive\">
                  <table class=\"table table-bordered table-striped table-hover dataTable\" id=\"data_neracasaldo\">
                     <thead>
                        <tr>
                           <th>No Urut</th>
                           <th>Kode Rekening</th>
                           <th>Nama Rekening</th>
                           <th>Debet</th>
                           <th>Kredit</th>
                        </tr>
                     </thead>

                     <tbody id=\"show_data\">

                     </tbody>
                     <tfoot>
                        <tr>
                           <th colspan=\"3\" class=\"text-center\"></th>
                           <th class=\"numberFormat\"></th>
                           <th class=\"numberFormat\"></th>
                        </tr>
                     </tfoot>
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
            <form method=\"post\" id=\"sort_neracasaldo\">

               <input type=\"hidden\" name=\"{{ csrf_name }}\" value=\"{{ csrf_hash }}\">
            </form>
         </div>
      </div>

   </div>
</div>
{% endblock %}

{% block custom_js %}

<script src=\"{{ base_url('template/js/jquery.number.min.js') }}\"></script>

{% include 'layouts/datatable.twig' %}

{% endblock %}
", "keuangan/laporan/neracasaldo.twig", "/home/sipy1897/public_html/demo/apliku/views/keuangan/laporan/neracasaldo.twig");
    }
}
