<?php

/* perizinan/master.twig */
class __TwigTemplate_80cf48360ed9147efde3e19cecd3d121d411803e0cf421aca9ed3e54b0e884cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/master_layouts.twig", "perizinan/master.twig", 1);
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
               <h2>
                  DATA PERIZINAN SISWA
                  <!-- <small>Harap Menisi Data Kesehatan <a href=\"\">Dengan Teliti</a></small> -->
               </h2>
                  </li>
               </ul>
            </div>
            <div class=\"body\">
               <div class=\"container-fluid\">
                  <div class=\"row clearfix\">
                     <!-- Nav tabs -->
                     <ul class=\"nav nav-tabs tab-nav-right\" role=\"tablist\">
                        <li role=\"presentation\" class=\"active\">
                           <a href=\"#home\" data-toggle=\"tab\">PENGISIAN DATA PERIZINAN SISWA</a>
                        </li>
                        <li role=\"presentation\">
                           <a href=\"#lll\" data-toggle=\"tab\">LAPORAN DATA PERIZINAN SISWA</a>
                        </li>
                     </ul>

                     <!-- Tab panes -->
                     <div class=\"tab-content\">
                        <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"home\">
                           ";
        // line 31
        $this->loadTemplate("perizinan/perizinanv.twig", "perizinan/master.twig", 31)->display($context);
        // line 32
        echo "                        </div>
                        <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"lll\">
                           ";
        // line 34
        $this->loadTemplate("perizinan/datalist.twig", "perizinan/master.twig", 34)->display($context);
        // line 35
        echo "                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- #END# Widgets -->
   <!-- CPU Usage -->
</div>
";
    }

    // line 48
    public function block_custom_js($context, array $blocks = array())
    {
        echo " 

";
        // line 50
        $this->loadTemplate("layouts/form-validation.twig", "perizinan/master.twig", 50)->display($context);
        echo " 

";
        // line 52
        $this->loadTemplate("layouts/datatable.twig", "perizinan/master.twig", 52)->display($context);
        echo " 

<script src=\"";
        // line 54
        echo twig_escape_filter($this->env, base_url("template/js/jQuery.print.min.js"), "html", null, true);
        echo "\"></script>

<script>              
   \$(document).ready(function() {
      \$('#btn-modal-print').on('click', function() {
         \$('#print-letter').print();
      });
   }) 
</script>

";
    }

    public function getTemplateName()
    {
        return "perizinan/master.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 54,  96 => 52,  91 => 50,  85 => 48,  70 => 35,  68 => 34,  64 => 32,  62 => 31,  31 => 2,  11 => 1,);
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
               <h2>
                  DATA PERIZINAN SISWA
                  <!-- <small>Harap Menisi Data Kesehatan <a href=\"\">Dengan Teliti</a></small> -->
               </h2>
                  </li>
               </ul>
            </div>
            <div class=\"body\">
               <div class=\"container-fluid\">
                  <div class=\"row clearfix\">
                     <!-- Nav tabs -->
                     <ul class=\"nav nav-tabs tab-nav-right\" role=\"tablist\">
                        <li role=\"presentation\" class=\"active\">
                           <a href=\"#home\" data-toggle=\"tab\">PENGISIAN DATA PERIZINAN SISWA</a>
                        </li>
                        <li role=\"presentation\">
                           <a href=\"#lll\" data-toggle=\"tab\">LAPORAN DATA PERIZINAN SISWA</a>
                        </li>
                     </ul>

                     <!-- Tab panes -->
                     <div class=\"tab-content\">
                        <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"home\">
                           {% include 'perizinan/perizinanv.twig' %}
                        </div>
                        <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"lll\">
                           {% include 'perizinan/datalist.twig' %}
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- #END# Widgets -->
   <!-- CPU Usage -->
</div>
{% endblock %} 

{% block custom_js %} 

{% include 'layouts/form-validation.twig' %} 

{% include 'layouts/datatable.twig' %} 

<script src=\"{{ base_url('template/js/jQuery.print.min.js') }}\"></script>

<script>              
   \$(document).ready(function() {
      \$('#btn-modal-print').on('click', function() {
         \$('#print-letter').print();
      });
   }) 
</script>

{% endblock %}

", "perizinan/master.twig", "/home/sipy1897/public_html/demo/apliku/views/perizinan/master.twig");
    }
}
