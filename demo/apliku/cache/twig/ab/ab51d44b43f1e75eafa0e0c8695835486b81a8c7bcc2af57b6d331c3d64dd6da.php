<?php

/* header.php */
class __TwigTemplate_d00fc318507cc8a0eb0ba86dae02b68bf03185fe9b99e956b093ee266b5fda95 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>

<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed tidak');
//session_start();

\$pengguna = \$this->session->userdata('username');
if ( \$pengguna == \"\"){
\t\$this->load->view('signin');
\texit;//('Maaf. Alamat Yang Anda Ketikan Salah');
}

// \$session = \$this->M_session->get_session();
// if (!\$session['username']){
// \t\$this->load->view('signin');
// \texit;//('Maaf. Alamat Yang Anda Ketikan SALAH');
// }

 ?>
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <title>SIPond | Sistem Informasi Ponpes</title>
    <!-- Favicon-->
    <link rel=\"icon\" href=\"<?php echo base_url();?>template/favicon.ico\" type=\"image/x-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Bootstrap Core Css -->
    <link href=\"<?php echo base_url();?>template/plugins/bootstrap/css/bootstrap.css\" rel=\"stylesheet\">

    <!-- Waves Effect Css -->
    <link href=\"<?php echo base_url();?>template/plugins/node-waves/waves.css\" rel=\"stylesheet\" />

    <!-- Animation Css -->
    <link href=\"<?php echo base_url();?>template/plugins/animate-css/animate.css\" rel=\"stylesheet\" />
    <!-- Bootstrap Material Datetime Picker Css -->
    <link href=\"<?php echo base_url();?>template/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css\" rel=\"stylesheet\" />

    <!-- Bootstrap Spinner Css -->
    <link href=\"<?php echo base_url();?>template/plugins/jquery-spinner/css/bootstrap-spinner.css\" rel=\"stylesheet\">

    <!-- Wait Me Css -->
    <link href=\"<?php echo base_url();?>template/plugins/waitme/waitMe.css\" rel=\"stylesheet\" />

    <!-- Sweetalert Css -->
    <link href=\"<?php echo base_url();?>template/plugins/sweetalert/sweetalert.css\" rel=\"stylesheet\" />
    <!-- JQuery DataTable Css -->
    <link href=\"<?php echo base_url();?>template/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css\" rel=\"stylesheet\">

    <!-- Morris Chart Css-->
    <link href=\"<?php echo base_url();?>template/plugins/morrisjs/morris.css\" rel=\"stylesheet\" />
    <!-- Bootstrap Select Css -->
    <link href=\"<?php echo base_url();?>template/plugins/bootstrap-select/css/bootstrap-select.css\" rel=\"stylesheet\" />
    <!-- Custom Css -->
    <link href=\"<?php echo base_url();?>template/css/style.css\" rel=\"stylesheet\">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href=\"<?php echo base_url();?>template/css/themes/all-themes.css\" rel=\"stylesheet\" />
    <!-- Jquery Core Js -->
    <script src=\"<?php echo base_url();?>template/plugins/jquery/jquery.min.js\"></script>
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
</head>

<body class=\"theme-red\">
    <!-- Page Loader -->
    <div class=\"page-loader-wrapper\">
        <div class=\"loader\">
            <div class=\"preloader\">
                <div class=\"spinner-layer pl-red\">
                    <div class=\"circle-clipper left\">
                        <div class=\"circle\"></div>
                    </div>
                    <div class=\"circle-clipper right\">
                        <div class=\"circle\"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class=\"overlay\"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class=\"search-bar\">
        <div class=\"search-icon\">
            <i class=\"material-icons\">search</i>
        </div>
        <input type=\"text\" placeholder=\"START TYPING...\">
        <div class=\"close-search\">
            <i class=\"material-icons\">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class=\"navbar\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <a href=\"javascript:void(0);\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\" aria-expanded=\"false\"></a>
                <a href=\"javascript:void(0);\" class=\"bars\"></a>
                <a class=\"navbar-brand\" href=\"\"> Sistem Informasi Pondok Pesantren  </a>
            </div>

            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
";
    }

    public function getTemplateName()
    {
        return "header.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>

<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed tidak');
//session_start();

\$pengguna = \$this->session->userdata('username');
if ( \$pengguna == \"\"){
\t\$this->load->view('signin');
\texit;//('Maaf. Alamat Yang Anda Ketikan Salah');
}

// \$session = \$this->M_session->get_session();
// if (!\$session['username']){
// \t\$this->load->view('signin');
// \texit;//('Maaf. Alamat Yang Anda Ketikan SALAH');
// }

 ?>
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <title>SIPond | Sistem Informasi Ponpes</title>
    <!-- Favicon-->
    <link rel=\"icon\" href=\"<?php echo base_url();?>template/favicon.ico\" type=\"image/x-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Bootstrap Core Css -->
    <link href=\"<?php echo base_url();?>template/plugins/bootstrap/css/bootstrap.css\" rel=\"stylesheet\">

    <!-- Waves Effect Css -->
    <link href=\"<?php echo base_url();?>template/plugins/node-waves/waves.css\" rel=\"stylesheet\" />

    <!-- Animation Css -->
    <link href=\"<?php echo base_url();?>template/plugins/animate-css/animate.css\" rel=\"stylesheet\" />
    <!-- Bootstrap Material Datetime Picker Css -->
    <link href=\"<?php echo base_url();?>template/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css\" rel=\"stylesheet\" />

    <!-- Bootstrap Spinner Css -->
    <link href=\"<?php echo base_url();?>template/plugins/jquery-spinner/css/bootstrap-spinner.css\" rel=\"stylesheet\">

    <!-- Wait Me Css -->
    <link href=\"<?php echo base_url();?>template/plugins/waitme/waitMe.css\" rel=\"stylesheet\" />

    <!-- Sweetalert Css -->
    <link href=\"<?php echo base_url();?>template/plugins/sweetalert/sweetalert.css\" rel=\"stylesheet\" />
    <!-- JQuery DataTable Css -->
    <link href=\"<?php echo base_url();?>template/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css\" rel=\"stylesheet\">

    <!-- Morris Chart Css-->
    <link href=\"<?php echo base_url();?>template/plugins/morrisjs/morris.css\" rel=\"stylesheet\" />
    <!-- Bootstrap Select Css -->
    <link href=\"<?php echo base_url();?>template/plugins/bootstrap-select/css/bootstrap-select.css\" rel=\"stylesheet\" />
    <!-- Custom Css -->
    <link href=\"<?php echo base_url();?>template/css/style.css\" rel=\"stylesheet\">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href=\"<?php echo base_url();?>template/css/themes/all-themes.css\" rel=\"stylesheet\" />
    <!-- Jquery Core Js -->
    <script src=\"<?php echo base_url();?>template/plugins/jquery/jquery.min.js\"></script>
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
</head>

<body class=\"theme-red\">
    <!-- Page Loader -->
    <div class=\"page-loader-wrapper\">
        <div class=\"loader\">
            <div class=\"preloader\">
                <div class=\"spinner-layer pl-red\">
                    <div class=\"circle-clipper left\">
                        <div class=\"circle\"></div>
                    </div>
                    <div class=\"circle-clipper right\">
                        <div class=\"circle\"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class=\"overlay\"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class=\"search-bar\">
        <div class=\"search-icon\">
            <i class=\"material-icons\">search</i>
        </div>
        <input type=\"text\" placeholder=\"START TYPING...\">
        <div class=\"close-search\">
            <i class=\"material-icons\">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class=\"navbar\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <a href=\"javascript:void(0);\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\" aria-expanded=\"false\"></a>
                <a href=\"javascript:void(0);\" class=\"bars\"></a>
                <a class=\"navbar-brand\" href=\"\"> Sistem Informasi Pondok Pesantren  </a>
            </div>

            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
", "header.php", "/home/sipy1897/public_html/demo/apliku/views/header.php");
    }
}
