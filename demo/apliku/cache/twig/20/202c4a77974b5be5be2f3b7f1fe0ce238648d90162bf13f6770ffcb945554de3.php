<?php

/* siswa/ibuv.twig */
class __TwigTemplate_a6db8cb6a7920cd35bba46d6a4efc1a7c6b138a81fd556e77aa4974bed862e30 extends Twig_Template
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
        echo "
<!-- IBU -->
<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"biodata_ibu\">
   <form method=\"POST\" id=\"form_ibu\">
      <div class=\"row\">
         <div class=\"col-sm-6\">
            <b>No KTP ibu</b>
            <div class=\"form-group\">
               <div class=\"form-line\">
                  <input name=\"noktpibu\" type=\"text\" class=\"form-control\" />
                  <input id=\"nisisiibu\" name=\"nisisiibu\" type=\"hidden\" class=\"form-control\" />
               </div>
            </div>
         </div>
         <div class=\"col-sm-6\">
            <b>Nama ibu</b>
            <div class=\"form-group\">
               <div class=\"form-line\">
                  <input name=\"namaibu\" type=\"text\" class=\"form-control\" />
               </div>
            </div>
         </div>
         <div class=\"col-sm-6\">
            <b>Tempat Tanggal Lahir ibu</b>
            <div class=\"form-group\">
               <div class=\"form-line\">
                  <input name=\"ttlibu\" type=\"text\" class=\"form-control\" />
               </div>
            </div>
         </div>
         <div class=\"col-sm-6\">
            <b>Pendidikan ibu</b>
            <div class=\"form-group\">
               <div class=\"form-line\">
                  <input name=\"pendidikanibu\" type=\"text\" class=\"form-control\" />
               </div>
            </div>
         </div>
         <div class=\"col-sm-6\">
            <b>Pekerjaan ibu</b>
            <div class=\"form-group\">
               <div class=\"form-line\">
                  <input name=\"pekerjaanibu\" type=\"text\" class=\"form-control\" />
               </div>
            </div>
         </div>
         <div class=\"col-sm-6\">
            <b>Penghasilan ibu</b>
            <div class=\"input-group\">
               <div class=\"form-line\">
                  <input name=\"gajiibu\" type=\"text\" class=\"form-control money-dollar\" placeholder=\"Ex: 99,99 \$\">
               </div>
            </div>
         </div>

         <div class=\"col-sm-12\">
            <div class=\"form-group\">
               <input type=\"hidden\" name=\"";
        // line 58
        echo twig_escape_filter($this->env, ($context["csrf_name"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["csrf_hash"] ?? null), "html", null, true);
        echo "\">
               <button id=\"btnibu\" class=\"btn btn-primary waves-effect\" disabled=\"true\">Simpan Data</button>
            </div>
         </div>
      </div>
   </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "siswa/ibuv.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 58,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!-- IBU -->
<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"biodata_ibu\">
   <form method=\"POST\" id=\"form_ibu\">
      <div class=\"row\">
         <div class=\"col-sm-6\">
            <b>No KTP ibu</b>
            <div class=\"form-group\">
               <div class=\"form-line\">
                  <input name=\"noktpibu\" type=\"text\" class=\"form-control\" />
                  <input id=\"nisisiibu\" name=\"nisisiibu\" type=\"hidden\" class=\"form-control\" />
               </div>
            </div>
         </div>
         <div class=\"col-sm-6\">
            <b>Nama ibu</b>
            <div class=\"form-group\">
               <div class=\"form-line\">
                  <input name=\"namaibu\" type=\"text\" class=\"form-control\" />
               </div>
            </div>
         </div>
         <div class=\"col-sm-6\">
            <b>Tempat Tanggal Lahir ibu</b>
            <div class=\"form-group\">
               <div class=\"form-line\">
                  <input name=\"ttlibu\" type=\"text\" class=\"form-control\" />
               </div>
            </div>
         </div>
         <div class=\"col-sm-6\">
            <b>Pendidikan ibu</b>
            <div class=\"form-group\">
               <div class=\"form-line\">
                  <input name=\"pendidikanibu\" type=\"text\" class=\"form-control\" />
               </div>
            </div>
         </div>
         <div class=\"col-sm-6\">
            <b>Pekerjaan ibu</b>
            <div class=\"form-group\">
               <div class=\"form-line\">
                  <input name=\"pekerjaanibu\" type=\"text\" class=\"form-control\" />
               </div>
            </div>
         </div>
         <div class=\"col-sm-6\">
            <b>Penghasilan ibu</b>
            <div class=\"input-group\">
               <div class=\"form-line\">
                  <input name=\"gajiibu\" type=\"text\" class=\"form-control money-dollar\" placeholder=\"Ex: 99,99 \$\">
               </div>
            </div>
         </div>

         <div class=\"col-sm-12\">
            <div class=\"form-group\">
               <input type=\"hidden\" name=\"{{ csrf_name }}\" value=\"{{ csrf_hash }}\">
               <button id=\"btnibu\" class=\"btn btn-primary waves-effect\" disabled=\"true\">Simpan Data</button>
            </div>
         </div>
      </div>
   </form>
</div>
", "siswa/ibuv.twig", "D:\\SERVER\\htdocs\\development\\sipondot\\apliku\\views\\siswa\\ibuv.twig");
    }
}
