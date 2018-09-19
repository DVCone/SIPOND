<?php

/* prestasi/master.twig */
class __TwigTemplate_fbaec6664dcd0d358a8c86a24e12b286025beef5439ff1a2289768e56a4f928d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/master_layouts.twig", "prestasi/master.twig", 1);
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
                        DATA PRESTASI SISWA
                        <!-- <small>Harap Menisi Data Kesehatan <a href=\"\">Dengan Teliti</a></small> -->
                    </h2>
                </div>
                <div class=\"body\">
                    <div class=\"container-fluid\">
                        <div class=\"row clearfix\">
                            <!-- Nav tabs -->
                            <ul class=\"nav nav-tabs tab-nav-right\" role=\"tablist\">
                                <li role=\"presentation\" class=\"active\">
                                    <a href=\"#home\" data-toggle=\"tab\">PENGISIAN DATA PRESTASI SISWA</a>
                                </li>
                                <li role=\"presentation\">
                                    <a href=\"#lll\" data-toggle=\"tab\">LAPORAN DATA PRESTASI SISWA</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class=\"tab-content\">
                                <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"home\">
                                    ";
        // line 29
        $this->loadTemplate("prestasi/prestasiv.twig", "prestasi/master.twig", 29)->display($context);
        // line 30
        echo "                                </div>
                                <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"lll\">
                                    ";
        // line 32
        $this->loadTemplate("prestasi/datalist.twig", "prestasi/master.twig", 32)->display($context);
        // line 33
        echo "                                </div>
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

    // line 46
    public function block_custom_js($context, array $blocks = array())
    {
        echo " 

";
        // line 48
        $this->loadTemplate("layouts/form-validation.twig", "prestasi/master.twig", 48)->display($context);
        echo " 

";
        // line 50
        $this->loadTemplate("layouts/datatable.twig", "prestasi/master.twig", 50)->display($context);
        echo " 

";
    }

    public function getTemplateName()
    {
        return "prestasi/master.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 50,  89 => 48,  83 => 46,  68 => 33,  66 => 32,  62 => 30,  60 => 29,  31 => 2,  11 => 1,);
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
                        DATA PRESTASI SISWA
                        <!-- <small>Harap Menisi Data Kesehatan <a href=\"\">Dengan Teliti</a></small> -->
                    </h2>
                </div>
                <div class=\"body\">
                    <div class=\"container-fluid\">
                        <div class=\"row clearfix\">
                            <!-- Nav tabs -->
                            <ul class=\"nav nav-tabs tab-nav-right\" role=\"tablist\">
                                <li role=\"presentation\" class=\"active\">
                                    <a href=\"#home\" data-toggle=\"tab\">PENGISIAN DATA PRESTASI SISWA</a>
                                </li>
                                <li role=\"presentation\">
                                    <a href=\"#lll\" data-toggle=\"tab\">LAPORAN DATA PRESTASI SISWA</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class=\"tab-content\">
                                <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"home\">
                                    {% include 'prestasi/prestasiv.twig' %}
                                </div>
                                <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"lll\">
                                    {% include 'prestasi/datalist.twig' %}
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
", "prestasi/master.twig", "/home/sipy1897/public_html/demo/apliku/views/prestasi/master.twig");
    }
}
