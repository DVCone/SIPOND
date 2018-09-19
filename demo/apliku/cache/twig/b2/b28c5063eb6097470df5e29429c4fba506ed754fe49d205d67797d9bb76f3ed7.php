<?php

/* kesehatan/master.twig */
class __TwigTemplate_36f311ad73a2d38233d853b9c811ca02c98af629b8f0a5432f102c99a896e37f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/master_layouts.twig", "kesehatan/master.twig", 1);
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
        echo "<div class=\"container-fluid\">
   <!-- Widgets -->
   <div class=\"row clearfix\">
      <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
         <div class=\"card\">
            <div class=\"header\">
               <h2>
                  DATA KESEHATAN SISWA
                  <!-- <small>Harap Menisi Data Kesehatan <a href=\"\">Dengan Teliti</a></small> -->
               </h2>
            </div>
            <div class=\"body\">
               <div class=\"container-fluid\">
                  <div class=\"row clearfix\">
                     <!-- Nav tabs -->
                     <ul class=\"nav nav-tabs tab-nav-right\" role=\"tablist\">
                        <li role=\"presentation\" class=\"active\">
                           <a href=\"#home\" data-toggle=\"tab\">PENGISIAN DATA KESEHATAN SISWA</a>
                        </li>
                        <li role=\"presentation\">
                           <a href=\"#lll\" data-toggle=\"tab\">LAPORAN DATA KESEHATAN SISWA</a>
                        </li>
                     </ul>

                     <!-- Tab panes -->
                     <div class=\"tab-content\">
                        <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"home\">
                           ";
        // line 31
        $this->loadTemplate("kesehatan/kesehatanv.twig", "kesehatan/master.twig", 31)->display($context);
        // line 32
        echo "                        </div>
                        <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"lll\">
                           ";
        // line 34
        $this->loadTemplate("kesehatan/datalist.twig", "kesehatan/master.twig", 34)->display($context);
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
        $this->loadTemplate("layouts/form-validation.twig", "kesehatan/master.twig", 50)->display($context);
        echo " 

";
        // line 52
        $this->loadTemplate("layouts/datatable.twig", "kesehatan/master.twig", 52)->display($context);
        echo " 

";
    }

    public function getTemplateName()
    {
        return "kesehatan/master.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 52,  90 => 50,  84 => 48,  69 => 35,  67 => 34,  63 => 32,  61 => 31,  32 => 4,  29 => 3,  11 => 1,);
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
   <!-- Widgets -->
   <div class=\"row clearfix\">
      <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
         <div class=\"card\">
            <div class=\"header\">
               <h2>
                  DATA KESEHATAN SISWA
                  <!-- <small>Harap Menisi Data Kesehatan <a href=\"\">Dengan Teliti</a></small> -->
               </h2>
            </div>
            <div class=\"body\">
               <div class=\"container-fluid\">
                  <div class=\"row clearfix\">
                     <!-- Nav tabs -->
                     <ul class=\"nav nav-tabs tab-nav-right\" role=\"tablist\">
                        <li role=\"presentation\" class=\"active\">
                           <a href=\"#home\" data-toggle=\"tab\">PENGISIAN DATA KESEHATAN SISWA</a>
                        </li>
                        <li role=\"presentation\">
                           <a href=\"#lll\" data-toggle=\"tab\">LAPORAN DATA KESEHATAN SISWA</a>
                        </li>
                     </ul>

                     <!-- Tab panes -->
                     <div class=\"tab-content\">
                        <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"home\">
                           {% include 'kesehatan/kesehatanv.twig' %}
                        </div>
                        <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"lll\">
                           {% include 'kesehatan/datalist.twig' %}
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

{% endblock %}
", "kesehatan/master.twig", "/home/sipy1897/public_html/demo/apliku/views/kesehatan/master.twig");
    }
}
