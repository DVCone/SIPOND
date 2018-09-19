<?php

/* pelanggaran/rekap.twig */
class __TwigTemplate_ce8f8bbe7c24a880ddb3773c9ec6b920c1c702b845241009fa3d9101c18f4477 extends Twig_Template
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
   <table class=\"table table-bordered table-striped table-hover dataTable\" id=\"rekap_pelanggaran\">
      <thead>
         <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Poin</th>
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
            <form method=\"post\" id=\"sort_rekap_pelanggaran\">
               
               <input type=\"hidden\" name=\"";
        // line 26
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
        return "pelanggaran/rekap.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 26,  19 => 1,);
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
   <table class=\"table table-bordered table-striped table-hover dataTable\" id=\"rekap_pelanggaran\">
      <thead>
         <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Poin</th>
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
            <form method=\"post\" id=\"sort_rekap_pelanggaran\">
               
               <input type=\"hidden\" name=\"{{ csrf_name }}\" value=\"{{ csrf_hash }}\">
            </form>
         </div>
      </div>

   </div>
</div>
", "pelanggaran/rekap.twig", "/home/sipy1897/public_html/demo/apliku/views/pelanggaran/rekap.twig");
    }
}
