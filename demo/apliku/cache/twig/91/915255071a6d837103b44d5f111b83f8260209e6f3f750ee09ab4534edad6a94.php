<?php

/* tahfidz/rekap.twig */
class __TwigTemplate_47c17af9edbe30f6e415da0bed7fee40c610c7745612eb50e077bdbb9550cf21 extends Twig_Template
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
        echo "<div class=\"table-responsive\">
   <table class=\"table table-bordered table-striped table-hover dataTable\" id=\"rekap_tahfidz\">
      <thead>
         <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Total Hafalan</th>
         </tr>
      </thead>

      <tbody id=\"show_data\">

      </tbody>
   </table>
</div>

<div id=\"search_date\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">
   <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
         <div class=\"modal-body\">
            <form method=\"post\" id=\"sort_rekap_tahfidz\">
               
               <input type=\"hidden\" name=\"";
        // line 25
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

    public function getTemplateName()
    {
        return "tahfidz/rekap.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 25,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"table-responsive\">
   <table class=\"table table-bordered table-striped table-hover dataTable\" id=\"rekap_tahfidz\">
      <thead>
         <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Total Hafalan</th>
         </tr>
      </thead>

      <tbody id=\"show_data\">

      </tbody>
   </table>
</div>

<div id=\"search_date\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">
   <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
         <div class=\"modal-body\">
            <form method=\"post\" id=\"sort_rekap_tahfidz\">
               
               <input type=\"hidden\" name=\"{{ csrf_name }}\" value=\"{{ csrf_hash }}\">
            </form>
         </div>
      </div>

   </div>
</div>
", "tahfidz/rekap.twig", "/home/sipy1897/public_html/demo/apliku/views/tahfidz/rekap.twig");
    }
}
