<?php

/* siswa/ayahv.twig */
class __TwigTemplate_f8c197d4f45a20094f2a339c92e985cc1bf3b9cb52b2af3d22a8ea7fcad35a7f extends Twig_Template
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
        echo "<!-- AYAH -->
<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"biodata_ayah\">
   <form method=\"POST\" id=\"form_ayah\">
      <div class=\"row\">
         <div class=\"col-sm-3\">
            <b>No KK</b>
            <div class=\"form-group\">
               <div class=\"form-line\">
                  <input name=\"nokk\" type=\"text\" class=\"form-control\" />
                  <input id=\"nisisiayah\" name=\"nisisiayah\" type=\"hidden\" class=\"form-control\" />
               </div>
            </div>
         </div>
         <div class=\"col-sm-3\">
            <b>No KTP Ayah</b>
            <div class=\"form-group\">
               <div class=\"form-line\">
                  <input name=\"noktpayah\" type=\"text\" class=\"form-control\" />
               </div>
            </div>
         </div>
         <div class=\"col-sm-6\">
            <b>Nama Ayah</b>
            <div class=\"form-group\">
               <div class=\"form-line\">
                  <input name=\"namaayah\" type=\"text\" class=\"form-control\" />
               </div>
            </div>
         </div>
         <!-- Habis 12-->
         <div class=\"col-sm-6\">
            <b>Tempat Tanggal Lahir Ayah</b>
            <div class=\"form-group\">
               <div class=\"form-line\">
                  <input name=\"ttlayah\" type=\"text\" class=\"form-control\" />
               </div>
            </div>
         </div>
         <div class=\"col-sm-6\">
            <b>Email</b>
            <div class=\"form-group\">
               <div class=\"form-line\">
                  <input name=\"email\" type=\"text\" class=\"form-control email\" placeholder=\"Ex: bapakibu@contohemail.web.id\">
               </div>
            </div>
         </div>
         <!-- Habis 12-->
         <div class=\"col-sm-4\">
            <b>Pendidikan Ayah</b>
            <div class=\"form-group\">
               <div class=\"form-line\">
                  <input name=\"pendidikanayah\" type=\"text\" class=\"form-control\" />
               </div>
            </div>
         </div>
         <div class=\"col-sm-4\">
            <b>Pekerjaan Ayah</b>
            <div class=\"form-group\">
               <div class=\"form-line\">
                  <input name=\"pekerjaanayah\" type=\"text\" class=\"form-control\" />
               </div>
            </div>
         </div>
         <div class=\"col-sm-4\">
            <b>Penghasilan Ayah</b>
            <div class=\"form-group\">
               <div class=\"form-line\">
                  <input name=\"gajiayah\" type=\"text\" class=\"form-control money-dollar\" placeholder=\"Ex: 99,99 \$\">
               </div>
            </div>
         </div>

         <div class=\"col-sm-12\">
            <div class=\"form-group\">
               <input type=\"hidden\" name=\"";
        // line 75
        echo twig_escape_filter($this->env, ($context["csrf_name"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["csrf_hash"] ?? null), "html", null, true);
        echo "\">
               <button id=\"btnayah\" class=\"btn btn-primary waves-effect\" disabled=\"true\">Simpan Data</button>
            </div>
         </div>
      </div>
   </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "siswa/ayahv.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 75,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- AYAH -->
<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"biodata_ayah\">
   <form method=\"POST\" id=\"form_ayah\">
      <div class=\"row\">
         <div class=\"col-sm-3\">
            <b>No KK</b>
            <div class=\"form-group\">
               <div class=\"form-line\">
                  <input name=\"nokk\" type=\"text\" class=\"form-control\" />
                  <input id=\"nisisiayah\" name=\"nisisiayah\" type=\"hidden\" class=\"form-control\" />
               </div>
            </div>
         </div>
         <div class=\"col-sm-3\">
            <b>No KTP Ayah</b>
            <div class=\"form-group\">
               <div class=\"form-line\">
                  <input name=\"noktpayah\" type=\"text\" class=\"form-control\" />
               </div>
            </div>
         </div>
         <div class=\"col-sm-6\">
            <b>Nama Ayah</b>
            <div class=\"form-group\">
               <div class=\"form-line\">
                  <input name=\"namaayah\" type=\"text\" class=\"form-control\" />
               </div>
            </div>
         </div>
         <!-- Habis 12-->
         <div class=\"col-sm-6\">
            <b>Tempat Tanggal Lahir Ayah</b>
            <div class=\"form-group\">
               <div class=\"form-line\">
                  <input name=\"ttlayah\" type=\"text\" class=\"form-control\" />
               </div>
            </div>
         </div>
         <div class=\"col-sm-6\">
            <b>Email</b>
            <div class=\"form-group\">
               <div class=\"form-line\">
                  <input name=\"email\" type=\"text\" class=\"form-control email\" placeholder=\"Ex: bapakibu@contohemail.web.id\">
               </div>
            </div>
         </div>
         <!-- Habis 12-->
         <div class=\"col-sm-4\">
            <b>Pendidikan Ayah</b>
            <div class=\"form-group\">
               <div class=\"form-line\">
                  <input name=\"pendidikanayah\" type=\"text\" class=\"form-control\" />
               </div>
            </div>
         </div>
         <div class=\"col-sm-4\">
            <b>Pekerjaan Ayah</b>
            <div class=\"form-group\">
               <div class=\"form-line\">
                  <input name=\"pekerjaanayah\" type=\"text\" class=\"form-control\" />
               </div>
            </div>
         </div>
         <div class=\"col-sm-4\">
            <b>Penghasilan Ayah</b>
            <div class=\"form-group\">
               <div class=\"form-line\">
                  <input name=\"gajiayah\" type=\"text\" class=\"form-control money-dollar\" placeholder=\"Ex: 99,99 \$\">
               </div>
            </div>
         </div>

         <div class=\"col-sm-12\">
            <div class=\"form-group\">
               <input type=\"hidden\" name=\"{{ csrf_name }}\" value=\"{{ csrf_hash }}\">
               <button id=\"btnayah\" class=\"btn btn-primary waves-effect\" disabled=\"true\">Simpan Data</button>
            </div>
         </div>
      </div>
   </form>
</div>
", "siswa/ayahv.twig", "/home/sipy1897/public_html/demo/apliku/views/siswa/ayahv.twig");
    }
}
