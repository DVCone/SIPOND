<?php

/* layouts/header.twig */
class __TwigTemplate_8154362114d40c5be0118e43c0f4da56270358ef3e92bc77e6bf83f30ee81d5f extends Twig_Template
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
        echo "<meta charset=\"UTF-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
<meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
<title>SIPond | Sistem Informasi Ponpes</title>
<!-- Favicon-->
<link rel=\"icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, base_url("template/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">

<!-- Google Fonts -->
<link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, base_url("template/css/icon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

<!-- Bootstrap Core Css -->
<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, base_url("template/plugins/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

<!-- Waves Effect Css -->
<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, base_url("template/plugins/node-waves/waves.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

<!-- Animation Css -->
<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, base_url("template/plugins/animate-css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<!-- Bootstrap Material Datetime Picker Css -->
<link href=\"";
        // line 21
        echo twig_escape_filter($this->env, base_url("template/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

<!-- Bootstrap Spinner Css -->
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, base_url("template/plugins/jquery-spinner/css/bootstrap-spinner.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

<!-- Wait Me Css -->
<link href=\"";
        // line 27
        echo twig_escape_filter($this->env, base_url("template/plugins/waitme/waitMe.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

<!-- Sweetalert Css -->
<link href=\"";
        // line 30
        echo twig_escape_filter($this->env, base_url("template/plugins/sweetalert/sweetalert.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<!-- JQuery DataTable Css -->
<link href=\"";
        // line 32
        echo twig_escape_filter($this->env, base_url("template/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

<!-- Morris Chart Css-->
<link href=\"";
        // line 35
        echo twig_escape_filter($this->env, base_url("template/plugins/morrisjs/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<!-- Bootstrap Select Css -->
<link href=\"";
        // line 37
        echo twig_escape_filter($this->env, base_url("template/plugins/bootstrap-select/css/bootstrap-select.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<!-- Custom Css -->
<link href=\"";
        // line 39
        echo twig_escape_filter($this->env, base_url("template/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
<link href=\"";
        // line 42
        echo twig_escape_filter($this->env, base_url("template/css/themes/all-themes.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<!-- Jquery Core Js -->
<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, base_url("template/js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\" ></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js\"></script>

<style>
.btn:not(.btn-link):not(.btn-circle) i{
   font-size: 17px;
   position: relative;
   top: 2px;
}
#show_data .btn{
   padding: 1px 8px;
}
</style>
";
    }

    public function getTemplateName()
    {
        return "layouts/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 44,  101 => 42,  95 => 39,  90 => 37,  85 => 35,  79 => 32,  74 => 30,  68 => 27,  62 => 24,  56 => 21,  51 => 19,  45 => 16,  39 => 13,  33 => 10,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<meta charset=\"UTF-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
<meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
<title>SIPond | Sistem Informasi Ponpes</title>
<!-- Favicon-->
<link rel=\"icon\" href=\"{{ base_url(\"template/favicon.ico\") }}\" type=\"image/x-icon\">

<!-- Google Fonts -->
<link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"{{ base_url(\"template/css/icon.css\") }}\" rel=\"stylesheet\" type=\"text/css\">

<!-- Bootstrap Core Css -->
<link href=\"{{ base_url(\"template/plugins/bootstrap/css/bootstrap.css\") }}\" rel=\"stylesheet\">

<!-- Waves Effect Css -->
<link href=\"{{ base_url(\"template/plugins/node-waves/waves.css\") }}\" rel=\"stylesheet\" />

<!-- Animation Css -->
<link href=\"{{ base_url(\"template/plugins/animate-css/animate.css\") }}\" rel=\"stylesheet\" />
<!-- Bootstrap Material Datetime Picker Css -->
<link href=\"{{ base_url(\"template/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css\") }}\" rel=\"stylesheet\" />

<!-- Bootstrap Spinner Css -->
<link href=\"{{ base_url(\"template/plugins/jquery-spinner/css/bootstrap-spinner.css\") }}\" rel=\"stylesheet\">

<!-- Wait Me Css -->
<link href=\"{{ base_url(\"template/plugins/waitme/waitMe.css\") }}\" rel=\"stylesheet\" />

<!-- Sweetalert Css -->
<link href=\"{{ base_url(\"template/plugins/sweetalert/sweetalert.css\") }}\" rel=\"stylesheet\" />
<!-- JQuery DataTable Css -->
<link href=\"{{ base_url(\"template/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css\") }}\" rel=\"stylesheet\">

<!-- Morris Chart Css-->
<link href=\"{{ base_url(\"template/plugins/morrisjs/morris.css\") }}\" rel=\"stylesheet\" />
<!-- Bootstrap Select Css -->
<link href=\"{{ base_url(\"template/plugins/bootstrap-select/css/bootstrap-select.css\") }}\" rel=\"stylesheet\" />
<!-- Custom Css -->
<link href=\"{{ base_url(\"template/css/style.css\") }}\" rel=\"stylesheet\">

<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
<link href=\"{{ base_url(\"template/css/themes/all-themes.css\") }}\" rel=\"stylesheet\" />
<!-- Jquery Core Js -->
<script src=\"{{ base_url(\"template/js/jquery-2.2.4.min.js\") }}\" ></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js\"></script>

<style>
.btn:not(.btn-link):not(.btn-circle) i{
   font-size: 17px;
   position: relative;
   top: 2px;
}
#show_data .btn{
   padding: 1px 8px;
}
</style>
", "layouts/header.twig", "D:\\SERVER\\htdocs\\development\\sipondot\\apliku\\views\\layouts\\header.twig");
    }
}
