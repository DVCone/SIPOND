<?php

/* pelanggaran/master.twig */
class __TwigTemplate_7120d98acc7aa8c5a508538810c7168d08ddcf905195bae8e56a73970b6de5bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/master_layouts.twig", "pelanggaran/master.twig", 1);
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
                        DATA PELANGGARAN SISWA
                        <!-- <small>Harap Menisi Data Kesehatan <a href=\"\">Dengan Teliti</a></small> -->
                    </h2>
                </div>
                <div class=\"body\">
                    <div class=\"container-fluid\">
                        <div class=\"row clearfix\">
                            <!-- Nav tabs -->
                            <ul class=\"nav nav-tabs tab-nav-right\" role=\"tablist\">
                                <li role=\"presentation\" class=\"active\">
                                    <a href=\"#add\" data-toggle=\"tab\">PENGISIAN DATA PELANGGARAN SISWA</a>
                                </li>
                                <li role=\"presentation\">
                                    <a href=\"#datalist\" data-toggle=\"tab\">LAPORAN DATA PELANGGARAN SISWA</a>
                                </li>
                                <li role=\"presentation\">
                                    <a href=\"#rekap\" data-toggle=\"tab\">LAPORAN REKAP PELANGGARAN SISWA</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class=\"tab-content\">
                                <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"add\">
                                    ";
        // line 32
        $this->loadTemplate("pelanggaran/pelanggaranv.twig", "pelanggaran/master.twig", 32)->display($context);
        // line 33
        echo "                                </div>
                                <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"datalist\">
                                    ";
        // line 35
        $this->loadTemplate("pelanggaran/datalist.twig", "pelanggaran/master.twig", 35)->display($context);
        // line 36
        echo "                                </div>
                                <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"rekap\">
                                    ";
        // line 38
        $this->loadTemplate("pelanggaran/rekap.twig", "pelanggaran/master.twig", 38)->display($context);
        // line 39
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

    // line 50
    public function block_custom_js($context, array $blocks = array())
    {
        echo " 

";
        // line 52
        $this->loadTemplate("layouts/form-validation.twig", "pelanggaran/master.twig", 52)->display($context);
        echo " ";
        $this->loadTemplate("layouts/datatable.twig", "pelanggaran/master.twig", 52)->display($context);
        echo " 

";
    }

    public function getTemplateName()
    {
        return "pelanggaran/master.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 52,  92 => 50,  77 => 39,  75 => 38,  71 => 36,  69 => 35,  65 => 33,  63 => 32,  31 => 2,  11 => 1,);
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
                        DATA PELANGGARAN SISWA
                        <!-- <small>Harap Menisi Data Kesehatan <a href=\"\">Dengan Teliti</a></small> -->
                    </h2>
                </div>
                <div class=\"body\">
                    <div class=\"container-fluid\">
                        <div class=\"row clearfix\">
                            <!-- Nav tabs -->
                            <ul class=\"nav nav-tabs tab-nav-right\" role=\"tablist\">
                                <li role=\"presentation\" class=\"active\">
                                    <a href=\"#add\" data-toggle=\"tab\">PENGISIAN DATA PELANGGARAN SISWA</a>
                                </li>
                                <li role=\"presentation\">
                                    <a href=\"#datalist\" data-toggle=\"tab\">LAPORAN DATA PELANGGARAN SISWA</a>
                                </li>
                                <li role=\"presentation\">
                                    <a href=\"#rekap\" data-toggle=\"tab\">LAPORAN REKAP PELANGGARAN SISWA</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class=\"tab-content\">
                                <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"add\">
                                    {% include 'pelanggaran/pelanggaranv.twig' %}
                                </div>
                                <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"datalist\">
                                    {% include 'pelanggaran/datalist.twig' %}
                                </div>
                                <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"rekap\">
                                    {% include 'pelanggaran/rekap.twig' %}
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
{% endblock %} {% block custom_js %} 

{% include 'layouts/form-validation.twig' %} {% include 'layouts/datatable.twig' %} 

{% endblock %}
", "pelanggaran/master.twig", "/home/sipy1897/public_html/demo/apliku/views/pelanggaran/master.twig");
    }
}
