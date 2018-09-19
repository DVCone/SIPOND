<?php

/* admin/backup.twig */
class __TwigTemplate_f54d9f440771ec352a53d90dd7f60972d485b85c9949ce583eb680bb9a0093ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/master_layouts.twig", "admin/backup.twig", 1);
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
        echo "
<link href=\"";
        // line 3
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css\" type=\"text/stylesheet\">


<!-- Input -->
<div class=\"row clearfix\">
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <div class=\"card\">

            <div class=\"body\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h3>
                            <i class=\"material-icons\">get_app</i> Backup Data</h3>Silahkan Klik Tombol Backup Berwarna Hijau Dibawah Ini Untuk Melakukan Backup Data Dengan Menyimpan File Backup Untuk Keperluan Dokumentasi.
                        </p><p></p><p></p><br><br><br>
                        <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, base_url("index.php/app/dobackup"), "html", null, true);
        echo "\" class=\"pull-right btn btn-lg btn-success\">
                            <i class=\"material-icons\">get_app</i> BACKUP</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- #END# Input -->



";
    }

    // line 30
    public function block_custom_js($context, array $blocks = array())
    {
        // line 31
        echo "
<script src=\"";
        // line 32
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js\"></script>

";
        // line 34
        $this->loadTemplate("layouts/custom/form-validation.twig", "admin/backup.twig", 34)->display($context);
        echo " ";
        $this->loadTemplate("layouts/custom/datatable.twig", "admin/backup.twig", 34)->display($context);
        echo " ";
        $this->loadTemplate("layouts/custom/itusajja.twig", "admin/backup.twig", 34)->display($context);
        echo " ";
    }

    public function getTemplateName()
    {
        return "admin/backup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 34,  75 => 32,  72 => 31,  69 => 30,  51 => 17,  34 => 3,  31 => 2,  11 => 1,);
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

<link href=\"{{ base_url() }}template/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css\" type=\"text/stylesheet\">


<!-- Input -->
<div class=\"row clearfix\">
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <div class=\"card\">

            <div class=\"body\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h3>
                            <i class=\"material-icons\">get_app</i> Backup Data</h3>Silahkan Klik Tombol Backup Berwarna Hijau Dibawah Ini Untuk Melakukan Backup Data Dengan Menyimpan File Backup Untuk Keperluan Dokumentasi.
                        </p><p></p><p></p><br><br><br>
                        <a href=\"{{base_url(\"index.php/app/dobackup\")}}\" class=\"pull-right btn btn-lg btn-success\">
                            <i class=\"material-icons\">get_app</i> BACKUP</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- #END# Input -->



{% endblock %} {% block custom_js %}

<script src=\"{{ base_url() }}template/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js\"></script>

{% include 'layouts/custom/form-validation.twig' %} {% include 'layouts/custom/datatable.twig' %} {% include 'layouts/custom/itusajja.twig' %} {% endblock %}", "admin/backup.twig", "/home/sipy1897/public_html/demo/apliku/views/admin/backup.twig");
    }
}
