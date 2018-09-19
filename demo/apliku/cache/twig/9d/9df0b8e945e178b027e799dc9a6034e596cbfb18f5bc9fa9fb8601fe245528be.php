<?php

/* admin/backup.twig */
class __TwigTemplate_1fad916ea8ca2ba4adf8210a81907b71f63ea799025e4541a74fbedf382b7134 extends Twig_Template
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

<div class=\"block-header\">
    <h2>Database</h2>
</div>
<!-- Input -->
<div class=\"row clearfix\">
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <div class=\"card\">
            <div class=\"header\">
                <h2>
                    Backup & Restore
                    <small>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.
                                    Cras dapibus. Vivamus elementum semper nisi.</small>
                </h2>
            </div>
            <div class=\"body\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <h3>
                            <i class=\"material-icons\">backup</i> Backup Database</h3>
                        <p class=\"m-t-15 m-b-30\">
                            In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae,
                            eleifend ac, enim.
                        </p>
                        <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["route"] ?? null), "dobackup", array()), "url", array()), "html", null, true);
        echo "\" class=\"pull-right btn btn-lg btn-success\">
                            <i class=\"material-icons\">backup</i> Backup Sekarang</a>
                    </div>
                    <div class=\"col-md-6\">
                        <h3>
                            <i class=\"material-icons\">backup</i> Restore Database</h3>
                        <p class=\"m-t-15 m-b-30\">
                            In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae,
                            eleifend ac, enim.
                        </p>
                        <form action=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["route"] ?? null), "dorestore", array()), "url", array()), "html", null, true);
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">
                            <input type=\"hidden\" name=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["csrf_name"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["csrf_hash"] ?? null), "html", null, true);
        echo "\">
                            <input type=\"file\" name=\"datafile\">
                            <button type=\"submit\" class=\"pull-right btn btn-lg btn-danger\">
                                    <i class=\"material-icons\">restore</i> Upload Database</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- #END# Input -->



";
    }

    // line 55
    public function block_custom_js($context, array $blocks = array())
    {
        // line 56
        echo "
<script src=\"";
        // line 57
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js\"></script>

";
        // line 59
        $this->loadTemplate("layouts/custom/form-validation.twig", "admin/backup.twig", 59)->display($context);
        echo " ";
        $this->loadTemplate("layouts/custom/datatable.twig", "admin/backup.twig", 59)->display($context);
        echo " ";
        $this->loadTemplate("layouts/custom/itusajja.twig", "admin/backup.twig", 59)->display($context);
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
        return array (  113 => 59,  108 => 57,  105 => 56,  102 => 55,  79 => 39,  75 => 38,  62 => 28,  34 => 3,  31 => 2,  11 => 1,);
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

<div class=\"block-header\">
    <h2>Database</h2>
</div>
<!-- Input -->
<div class=\"row clearfix\">
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <div class=\"card\">
            <div class=\"header\">
                <h2>
                    Backup & Restore
                    <small>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.
                                    Cras dapibus. Vivamus elementum semper nisi.</small>
                </h2>
            </div>
            <div class=\"body\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <h3>
                            <i class=\"material-icons\">backup</i> Backup Database</h3>
                        <p class=\"m-t-15 m-b-30\">
                            In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae,
                            eleifend ac, enim.
                        </p>
                        <a href=\"{{route.dobackup.url}}\" class=\"pull-right btn btn-lg btn-success\">
                            <i class=\"material-icons\">backup</i> Backup Sekarang</a>
                    </div>
                    <div class=\"col-md-6\">
                        <h3>
                            <i class=\"material-icons\">backup</i> Restore Database</h3>
                        <p class=\"m-t-15 m-b-30\">
                            In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae,
                            eleifend ac, enim.
                        </p>
                        <form action=\"{{route.dorestore.url}}\" method=\"POST\" enctype=\"multipart/form-data\">
                            <input type=\"hidden\" name=\"{{csrf_name}}\" value=\"{{csrf_hash}}\">
                            <input type=\"file\" name=\"datafile\">
                            <button type=\"submit\" class=\"pull-right btn btn-lg btn-danger\">
                                    <i class=\"material-icons\">restore</i> Upload Database</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- #END# Input -->



{% endblock %} {% block custom_js %}

<script src=\"{{ base_url() }}template/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js\"></script>

{% include 'layouts/custom/form-validation.twig' %} {% include 'layouts/custom/datatable.twig' %} {% include 'layouts/custom/itusajja.twig' %} {% endblock %}", "admin/backup.twig", "D:\\SERVER\\htdocs\\development\\sipondot\\apliku\\views\\admin\\backup.twig");
    }
}
