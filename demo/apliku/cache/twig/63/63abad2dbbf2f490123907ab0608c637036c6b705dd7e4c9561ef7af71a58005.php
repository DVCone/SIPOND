<?php

/* berita/master.twig */
class __TwigTemplate_0a8413c0496051522d070f95a059365e0ba852730552b6148e52a01aca07a9d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/master_layouts.twig", "berita/master.twig", 1);
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
                        DATA BERITA
                        <!-- <small>Harap Menisi Data Kesehatan <a href=\"\">Dengan Teliti</a></small> -->
                    </h2>
                    <ul class=\"header-dropdown m-r--5\">
                        <li class=\"dropdown\">
                            <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"material-icons\">more_vert</i>
                            </a>
                            <ul class=\"dropdown-menu pull-right\">
                                <li>
                                    <a href=\"javascript:void(0);\">Action</a>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0);\">Another action</a>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0);\">Something else here</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class=\"body\">
                    <div class=\"container-fluid\">
                        <div class=\"row clearfix\">
                            <!-- Nav tabs -->
                            <ul class=\"nav nav-tabs tab-nav-right\" role=\"tablist\">
                                <li role=\"presentation\" class=\"active\">
                                    <a href=\"#home\" data-toggle=\"tab\">PENGISIAN DATA BERITA</a>
                                </li>
                                <li role=\"presentation\">
                                    <a href=\"#lll\" data-toggle=\"tab\">LAPORAN DATA BERITA</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class=\"tab-content\">
                                <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"home\">
                                    ";
        // line 49
        $this->loadTemplate("berita/beritav.twig", "berita/master.twig", 49)->display($context);
        // line 50
        echo "                                </div>
                                <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"lll\">
                                    ";
        // line 52
        $this->loadTemplate("berita/datalist.twig", "berita/master.twig", 52)->display($context);
        // line 53
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

    // line 66
    public function block_custom_js($context, array $blocks = array())
    {
        echo " 

";
        // line 68
        $this->loadTemplate("layouts/datatable.twig", "berita/master.twig", 68)->display($context);
        echo " 

";
        // line 70
        $this->loadTemplate("layouts/form-validation.twig", "berita/master.twig", 70)->display($context);
        echo " 

";
    }

    public function getTemplateName()
    {
        return "berita/master.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 70,  108 => 68,  102 => 66,  87 => 53,  85 => 52,  81 => 50,  79 => 49,  32 => 4,  29 => 3,  11 => 1,);
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
                        DATA BERITA
                        <!-- <small>Harap Menisi Data Kesehatan <a href=\"\">Dengan Teliti</a></small> -->
                    </h2>
                    <ul class=\"header-dropdown m-r--5\">
                        <li class=\"dropdown\">
                            <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"material-icons\">more_vert</i>
                            </a>
                            <ul class=\"dropdown-menu pull-right\">
                                <li>
                                    <a href=\"javascript:void(0);\">Action</a>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0);\">Another action</a>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0);\">Something else here</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class=\"body\">
                    <div class=\"container-fluid\">
                        <div class=\"row clearfix\">
                            <!-- Nav tabs -->
                            <ul class=\"nav nav-tabs tab-nav-right\" role=\"tablist\">
                                <li role=\"presentation\" class=\"active\">
                                    <a href=\"#home\" data-toggle=\"tab\">PENGISIAN DATA BERITA</a>
                                </li>
                                <li role=\"presentation\">
                                    <a href=\"#lll\" data-toggle=\"tab\">LAPORAN DATA BERITA</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class=\"tab-content\">
                                <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"home\">
                                    {% include 'berita/beritav.twig' %}
                                </div>
                                <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"lll\">
                                    {% include 'berita/datalist.twig' %}
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

{% include 'layouts/datatable.twig' %} 

{% include 'layouts/form-validation.twig' %} 

{% endblock %}
", "berita/master.twig", "/home/sipy1897/public_html/demo/apliku/views/berita/master.twig");
    }
}
