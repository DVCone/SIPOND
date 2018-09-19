<?php

/* karyawan/alamatv.twig */
class __TwigTemplate_e33d278efc32fe31f69dbf27f87f12adf4c7c9b4880777eb7e4e9f83cab816fa extends Twig_Template
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
<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"alamat_karyawan\">

   <form method=\"POST\" id=\"form_alamat_guru\">
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
        echo twig_escape_filter($this->env, (isset($context["csrf_name"]) ? $context["csrf_name"] : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["csrf_hash"]) ? $context["csrf_hash"] : null), "html", null, true);
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
        return "karyawan/alamatv.twig";
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
<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"alamat_karyawan\">

   <form method=\"POST\" id=\"form_alamat_guru\">
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
", "karyawan/alamatv.twig", "/home/sipy1897/public_html/demo/apliku/views/karyawan/alamatv.twig");
    }
}
