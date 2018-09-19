<?php

/* layouts/custom/datatable.twig */
class __TwigTemplate_fc575cf11efeabcea9807b0f58619b952b0940f7b4b62daed732dab3ec11abde extends Twig_Template
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
        echo "<!-- Jquery DataTable Plugin Js -->
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/jquery-datatable/jquery.dataTables.js\"></script>
<script src=\"";
        // line 3
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js\"></script>
<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js\"></script>
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/jquery-datatable/extensions/export/buttons.flash.min.js\"></script>
<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/jquery-datatable/extensions/export/jszip.min.js\"></script>
<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/jquery-datatable/extensions/export/pdfmake.min.js\"></script>
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/jquery-datatable/extensions/export/vfs_fonts.js\"></script>
<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/jquery-datatable/extensions/export/buttons.html5.min.js\"></script>
<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/jquery-datatable/extensions/export/buttons.print.min.js\"></script>

<!--Custom Js-->
<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/js/pages/tables/jquery-datatable.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "layouts/custom/datatable.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  54 => 10,  50 => 9,  46 => 8,  42 => 7,  38 => 6,  34 => 5,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Jquery DataTable Plugin Js -->
<script src=\"{{ base_url() }}template/plugins/jquery-datatable/jquery.dataTables.js\"></script>
<script src=\"{{ base_url() }}template/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js\"></script>
<script src=\"{{ base_url() }}template/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js\"></script>
<script src=\"{{ base_url() }}template/plugins/jquery-datatable/extensions/export/buttons.flash.min.js\"></script>
<script src=\"{{ base_url() }}template/plugins/jquery-datatable/extensions/export/jszip.min.js\"></script>
<script src=\"{{ base_url() }}template/plugins/jquery-datatable/extensions/export/pdfmake.min.js\"></script>
<script src=\"{{ base_url() }}template/plugins/jquery-datatable/extensions/export/vfs_fonts.js\"></script>
<script src=\"{{ base_url() }}template/plugins/jquery-datatable/extensions/export/buttons.html5.min.js\"></script>
<script src=\"{{ base_url() }}template/plugins/jquery-datatable/extensions/export/buttons.print.min.js\"></script>

<!--Custom Js-->
<script src=\"{{ base_url() }}template/js/pages/tables/jquery-datatable.js\"></script>
", "layouts/custom/datatable.twig", "D:\\SERVER\\htdocs\\development\\sipondot\\apliku\\views\\layouts\\custom\\datatable.twig");
    }
}
