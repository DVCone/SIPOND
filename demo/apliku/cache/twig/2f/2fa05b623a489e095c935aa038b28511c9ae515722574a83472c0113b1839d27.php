<?php

/* layouts/header.twig */
class __TwigTemplate_3e5b4cbaa8d71a720c031a9f6002d644a882f1740cadefe0c4d016d802e269cd extends Twig_Template
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
        echo "
<meta charset=\"UTF-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
<meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
<title>SIPond | Sistem Informasi Ponpes</title>
<!-- Favicon-->
<link rel=\"icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, base_url("template/images/sipond.jpeg"), "html", null, true);
        echo "\" type=\"image/x-icon\">

<!-- Google Fonts -->
<link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" type=\"text/css\">

<!-- Bootstrap Core Css -->
<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/bootstrap/css/bootstrap.css\" rel=\"stylesheet\">

<!-- Waves Effect Css -->
<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/node-waves/waves.css\" rel=\"stylesheet\" />

<!-- Animation Css -->
<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/animate-css/animate.css\" rel=\"stylesheet\" />
<!-- Bootstrap Material Datetime Picker Css -->
<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css\" rel=\"stylesheet\" />

<!-- Bootstrap Spinner Css -->
<!-- <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/jquery-spinner/css/bootstrap-spinner.css\" rel=\"stylesheet\"> -->

<!-- Wait Me Css -->
<!-- <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/waitme/waitMe.css\" rel=\"stylesheet\" /> -->

<!-- Sweetalert Css -->
<link href=\"";
        // line 31
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/sweetalert/sweetalert.css\" rel=\"stylesheet\" />
<!-- JQuery DataTable Css -->
<link href=\"";
        // line 33
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css\" rel=\"stylesheet\">

<!-- Morris Chart Css-->
<!-- <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/morrisjs/morris.css\" rel=\"stylesheet\" /> -->
<!-- Bootstrap Select Css -->
<link href=\"";
        // line 38
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/bootstrap-select/css/bootstrap-select.css\" rel=\"stylesheet\" />
<!-- Custom Css -->
<link href=\"";
        // line 40
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/css/style.css\" rel=\"stylesheet\">

<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
<link href=\"";
        // line 43
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/css/themes/all-themes.css\" rel=\"stylesheet\" />

<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css\" />

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
        return array (  99 => 43,  93 => 40,  88 => 38,  83 => 36,  77 => 33,  72 => 31,  66 => 28,  60 => 25,  54 => 22,  49 => 20,  43 => 17,  37 => 14,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<meta charset=\"UTF-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
<meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
<title>SIPond | Sistem Informasi Ponpes</title>
<!-- Favicon-->
<link rel=\"icon\" href=\"{{ base_url('template/images/sipond.jpeg') }}\" type=\"image/x-icon\">

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
<!-- <link href=\"{{ base_url() }}template/plugins/jquery-spinner/css/bootstrap-spinner.css\" rel=\"stylesheet\"> -->

<!-- Wait Me Css -->
<!-- <link href=\"{{ base_url() }}template/plugins/waitme/waitMe.css\" rel=\"stylesheet\" /> -->

<!-- Sweetalert Css -->
<link href=\"{{ base_url() }}template/plugins/sweetalert/sweetalert.css\" rel=\"stylesheet\" />
<!-- JQuery DataTable Css -->
<link href=\"{{ base_url() }}template/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css\" rel=\"stylesheet\">

<!-- Morris Chart Css-->
<!-- <link href=\"{{ base_url() }}template/plugins/morrisjs/morris.css\" rel=\"stylesheet\" /> -->
<!-- Bootstrap Select Css -->
<link href=\"{{ base_url() }}template/plugins/bootstrap-select/css/bootstrap-select.css\" rel=\"stylesheet\" />
<!-- Custom Css -->
<link href=\"{{ base_url() }}template/css/style.css\" rel=\"stylesheet\">

<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
<link href=\"{{ base_url() }}template/css/themes/all-themes.css\" rel=\"stylesheet\" />

<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css\" />

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
