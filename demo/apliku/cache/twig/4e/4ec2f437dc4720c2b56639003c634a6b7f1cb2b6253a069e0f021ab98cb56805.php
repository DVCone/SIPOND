<?php

/* content/backup/index.twig */
class __TwigTemplate_6ace199962897b5989bc36419957a32ff77a9a9572147d6514e62869879eeea3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/master_layouts.twig", "content/backup/index.twig", 1);
        $this->blocks = array(
            'main_content' => array($this, 'block_main_content'),
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

    // line 2
    public function block_main_content($context, array $blocks = array())
    {
        // line 3
        echo "<section class=\"content\">  <!-- Jangan Dihilangkan.. Tutupnya ada di footer.php -->
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                
            </div>

            <div class=\"row clearfix\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"card\">
                        <div class=\"body\">
                        <div class=\"block-header\" align=\"center\"></div>
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <h3> <i class=\"material-icons\">backup</i>";
        // line 16
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo " Backup Database</h3>
                                    <p class=\"m-t-15 m-b-30\">
                                In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                            </p>
                            <button class=\"pull-right btn btn-lg btn-success\"><i class=\"material-icons\">backup</i> Backup Sekarang</button>
                                </div>
                                <div class=\"col-md-6\">
                                <h3> <i class=\"material-icons\">backup</i> Restore Database</h3>
                                    <p class=\"m-t-15 m-b-30\">
                                In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                            </p>
                            <button class=\"pull-right btn btn-lg btn-danger\"><i class=\"material-icons\">restore</i> Upload Database</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
";
    }

    public function getTemplateName()
    {
        return "content/backup/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 16,  31 => 3,  28 => 2,  11 => 1,);
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
<section class=\"content\">  <!-- Jangan Dihilangkan.. Tutupnya ada di footer.php -->
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                
            </div>

            <div class=\"row clearfix\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"card\">
                        <div class=\"body\">
                        <div class=\"block-header\" align=\"center\"></div>
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <h3> <i class=\"material-icons\">backup</i>{{title}} Backup Database</h3>
                                    <p class=\"m-t-15 m-b-30\">
                                In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                            </p>
                            <button class=\"pull-right btn btn-lg btn-success\"><i class=\"material-icons\">backup</i> Backup Sekarang</button>
                                </div>
                                <div class=\"col-md-6\">
                                <h3> <i class=\"material-icons\">backup</i> Restore Database</h3>
                                    <p class=\"m-t-15 m-b-30\">
                                In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                            </p>
                            <button class=\"pull-right btn btn-lg btn-danger\"><i class=\"material-icons\">restore</i> Upload Database</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
{% endblock %}", "content/backup/index.twig", "D:\\SERVER\\htdocs\\development\\sipondot\\apliku\\views\\content\\backup\\index.twig");
    }
}
