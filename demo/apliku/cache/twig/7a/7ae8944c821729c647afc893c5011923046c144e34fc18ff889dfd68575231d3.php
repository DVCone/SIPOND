<?php

/* siswa/alamatv.twig */
class __TwigTemplate_2dc1bfb4f99a315c7bd86719ada5023c2aa28c06288f5689324af669c772816a extends Twig_Template
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
        echo "<!-- Alamat -->
<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"biodata_alamat_siswa\">

   <form method=\"POST\" id=\"form_alamat\">
      <div class=\"row\">
         <div class=\"col-sm-6\">
            <b>Alamat</b>
            <div class=\"form-group\">
               <div class=\"form-line\">
                  <input name=\"alamat\" type=\"text\" class=\"form-control\" />
                  <input id=\"nikisialamat\" name=\"nikisialamat\" type=\"hidden\" class=\"form-control\" />
               </div>
            </div>
         </div>
         <div class=\"col-sm-6\">
            <b>Kelurahan</b>
            <div class=\"form-group\">
               <div class=\"form-line\">
                  <input name=\"kelurahan\" type=\"text\" class=\"form-control\" />
               </div>
            </div>
         </div>
      </div>
      <div class=\"row\">
         <div class=\"col-sm-6\">
            <b>Kecamatan</b>
            <div class=\"form-group\">
               <div class=\"form-line\">
                  <input name=\"kecamatan\" type=\"text\" class=\"form-control\" />
               </div>
            </div>
         </div>
         <div class=\"col-sm-6\">
            <b>Kota</b>
            <div class=\"form-group\">
               <div class=\"form-line\">
                  <input name=\"kota\" type=\"text\" class=\"form-control\" />
               </div>
            </div>
         </div>
      </div>
      <div class=\"row\">
         <div class=\"col-sm-6\">
            <b>Provinsi</b>
            <div class=\"form-group\">
               <div class=\"form-line\">
                  <input name=\"provinsi\" type=\"text\" class=\"form-control\" />
               </div>
            </div>
         </div>
         <div class=\"col-sm-12\">
            <div class=\"form-group\">
               <input type=\"hidden\" name=\"";
        // line 53
        echo twig_escape_filter($this->env, ($context["csrf_name"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["csrf_hash"] ?? null), "html", null, true);
        echo "\" style=\"display: none\">
               <button id=\"btnalamat\" class=\"btn btn-primary waves-effect\" disabled=\"true\">Simpan Data</button>
            </div>
         </div>
      </div>
   </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "siswa/alamatv.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 53,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Alamat -->
<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"biodata_alamat_siswa\">

   <form method=\"POST\" id=\"form_alamat\">
      <div class=\"row\">
         <div class=\"col-sm-6\">
            <b>Alamat</b>
            <div class=\"form-group\">
               <div class=\"form-line\">
                  <input name=\"alamat\" type=\"text\" class=\"form-control\" />
                  <input id=\"nikisialamat\" name=\"nikisialamat\" type=\"hidden\" class=\"form-control\" />
               </div>
            </div>
         </div>
         <div class=\"col-sm-6\">
            <b>Kelurahan</b>
            <div class=\"form-group\">
               <div class=\"form-line\">
                  <input name=\"kelurahan\" type=\"text\" class=\"form-control\" />
               </div>
            </div>
         </div>
      </div>
      <div class=\"row\">
         <div class=\"col-sm-6\">
            <b>Kecamatan</b>
            <div class=\"form-group\">
               <div class=\"form-line\">
                  <input name=\"kecamatan\" type=\"text\" class=\"form-control\" />
               </div>
            </div>
         </div>
         <div class=\"col-sm-6\">
            <b>Kota</b>
            <div class=\"form-group\">
               <div class=\"form-line\">
                  <input name=\"kota\" type=\"text\" class=\"form-control\" />
               </div>
            </div>
         </div>
      </div>
      <div class=\"row\">
         <div class=\"col-sm-6\">
            <b>Provinsi</b>
            <div class=\"form-group\">
               <div class=\"form-line\">
                  <input name=\"provinsi\" type=\"text\" class=\"form-control\" />
               </div>
            </div>
         </div>
         <div class=\"col-sm-12\">
            <div class=\"form-group\">
               <input type=\"hidden\" name=\"{{ csrf_name }}\" value=\"{{ csrf_hash }}\" style=\"display: none\">
               <button id=\"btnalamat\" class=\"btn btn-primary waves-effect\" disabled=\"true\">Simpan Data</button>
            </div>
         </div>
      </div>
   </form>
</div>
", "siswa/alamatv.twig", "D:\\SERVER\\htdocs\\development\\sipondot\\apliku\\views\\siswa\\alamatv.twig");
    }
}
