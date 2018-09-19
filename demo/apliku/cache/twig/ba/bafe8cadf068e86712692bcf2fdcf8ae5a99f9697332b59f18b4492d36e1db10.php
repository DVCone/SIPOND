<?php

/* layouts/header.twig */
class __TwigTemplate_8a7cc9422afa549f2057fed168b1ec526a7e86968376736bef632b51e79564b5 extends Twig_Template
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
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/favicon.ico\" type=\"image/x-icon\">

<!-- Google Fonts -->
<link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" type=\"text/css\">

<!-- Bootstrap Core Css -->
<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/bootstrap/css/bootstrap.css\" rel=\"stylesheet\">

<!-- Waves Effect Css -->
<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/node-waves/waves.css\" rel=\"stylesheet\" />

<!-- Animation Css -->
<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/animate-css/animate.css\" rel=\"stylesheet\" />
<!-- Bootstrap Material Datetime Picker Css -->
<link href=\"";
        // line 21
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css\" rel=\"stylesheet\" />

<!-- Bootstrap Spinner Css -->
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/jquery-spinner/css/bootstrap-spinner.css\" rel=\"stylesheet\">

<!-- Wait Me Css -->
<link href=\"";
        // line 27
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/waitme/waitMe.css\" rel=\"stylesheet\" />

<!-- Sweetalert Css -->
<link href=\"";
        // line 30
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/sweetalert/sweetalert.css\" rel=\"stylesheet\" />
<!-- JQuery DataTable Css -->
<link href=\"";
        // line 32
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css\" rel=\"stylesheet\">

<!-- Morris Chart Css-->
<link href=\"";
        // line 35
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/morrisjs/morris.css\" rel=\"stylesheet\" />
<!-- Bootstrap Select Css -->
<link href=\"";
        // line 37
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/bootstrap-select/css/bootstrap-select.css\" rel=\"stylesheet\" />
<!-- Custom Css -->
<link href=\"";
        // line 39
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/css/style.css\" rel=\"stylesheet\">

<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
<link href=\"";
        // line 42
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/css/themes/all-themes.css\" rel=\"stylesheet\" />
<!-- Jquery Core Js -->
<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/jquery/jquery.min.js\"></script>
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
        return array (  103 => 44,  98 => 42,  92 => 39,  87 => 37,  82 => 35,  76 => 32,  71 => 30,  65 => 27,  59 => 24,  53 => 21,  48 => 19,  42 => 16,  36 => 13,  26 => 6,  19 => 1,);
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
<link rel=\"icon\" href=\"{{ base_url() }}template/favicon.ico\" type=\"image/x-icon\">

<!-- Google Fonts -->
<link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" type=\"text/css\">

<!-- Bootstrap Core Css -->
<link href=\"{{ base_url() }}template/plugins/bootstrap/css/bootstrap.css\" rel=\"stylesheet\">

<!-- Waves Effect Css -->
<link href=\"{{ base_url() }}template/plugins/node-waves/waves.css\" rel=\"stylesheet\" />

<!-- Animation Css -->
<link href=\"{{ base_url() }}template/plugins/animate-css/animate.css\" rel=\"stylesheet\" />
<!-- Bootstrap Material Datetime Picker Css -->
<link href=\"{{ base_url() }}template/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css\" rel=\"stylesheet\" />

<!-- Bootstrap Spinner Css -->
<link href=\"{{ base_url() }}template/plugins/jquery-spinner/css/bootstrap-spinner.css\" rel=\"stylesheet\">

<!-- Wait Me Css -->
<link href=\"{{ base_url() }}template/plugins/waitme/waitMe.css\" rel=\"stylesheet\" />

<!-- Sweetalert Css -->
<link href=\"{{ base_url() }}template/plugins/sweetalert/sweetalert.css\" rel=\"stylesheet\" />
<!-- JQuery DataTable Css -->
<link href=\"{{ base_url() }}template/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css\" rel=\"stylesheet\">

<!-- Morris Chart Css-->
<link href=\"{{ base_url() }}template/plugins/morrisjs/morris.css\" rel=\"stylesheet\" />
<!-- Bootstrap Select Css -->
<link href=\"{{ base_url() }}template/plugins/bootstrap-select/css/bootstrap-select.css\" rel=\"stylesheet\" />
<!-- Custom Css -->
<link href=\"{{ base_url() }}template/css/style.css\" rel=\"stylesheet\">

<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
<link href=\"{{ base_url() }}template/css/themes/all-themes.css\" rel=\"stylesheet\" />
<!-- Jquery Core Js -->
<script src=\"{{ base_url() }}template/plugins/jquery/jquery.min.js\"></script>
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
", "layouts/header.twig", "/home/sipy1897/public_html/demo/apliku/views/layouts/header.twig");
    }
}
