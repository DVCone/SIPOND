<?php

/* siswa/kartupelajar.twig */
class __TwigTemplate_d73e3fcf4d8ff9af08c5a0867c04c6c05abe2c2b97adf1ac4cb82a3e1f061dbb extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable(($context["kelas"] ?? null));
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
        echo twig_escape_filter($this->env, ($context["csrf_name"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["csrf_hash"] ?? null), "html", null, true);
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
         <div class=\"modal-body\" id=\"printcard\">
            <div class=\"row\">

            </div>
         </div>
         <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
            <button id=\"print_btn\" type=\"button\" class=\"btn btn-primary\" onclick=\"printc('printcard')\">Print</button>
         </div>
      </div>
   </div>
</div>

";
    }

    // line 68
    public function block_custom_js($context, array $blocks = array())
    {
        echo " ";
        $this->loadTemplate("layouts/form-validation.twig", "siswa/kartupelajar.twig", 68)->display($context);
        // line 69
        echo "
<script type=\"text/javascript\">
   function myprint(divname) {
      var printContents = document.getElementById(divname).innerHTML;
      var originalContents = document.body.innerHTML;

      document.body.innerHTML = printContents;
      window.print();
      document.body.innerHTML = originalContents;
   }

   function printc(divname) {
      var printContents = document.getElementById(divname).innerHTML;
      var originalContents = document.body.innerHTML;

      document.body.innerHTML = printContents;
      window.print();
      document.body.innerHTML = originalContents;
   }
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
        return array (  125 => 69,  120 => 68,  80 => 35,  70 => 27,  59 => 25,  55 => 24,  31 => 2,  11 => 1,);
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
         <div class=\"modal-body\" id=\"printcard\">
            <div class=\"row\">

            </div>
         </div>
         <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
            <button id=\"print_btn\" type=\"button\" class=\"btn btn-primary\" onclick=\"printc('printcard')\">Print</button>
         </div>
      </div>
   </div>
</div>

{% endblock %} {% block custom_js %} {% include 'layouts/form-validation.twig' %}

<script type=\"text/javascript\">
   function myprint(divname) {
      var printContents = document.getElementById(divname).innerHTML;
      var originalContents = document.body.innerHTML;

      document.body.innerHTML = printContents;
      window.print();
      document.body.innerHTML = originalContents;
   }

   function printc(divname) {
      var printContents = document.getElementById(divname).innerHTML;
      var originalContents = document.body.innerHTML;

      document.body.innerHTML = printContents;
      window.print();
      document.body.innerHTML = originalContents;
   }
</script>


{% endblock %}
", "siswa/kartupelajar.twig", "D:\\SERVER\\htdocs\\development\\sipondot\\apliku\\views\\siswa\\kartupelajar.twig");
    }
}
