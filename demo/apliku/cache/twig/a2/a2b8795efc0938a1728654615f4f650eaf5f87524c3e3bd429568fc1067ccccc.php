<?php

/* layouts/footer.twig */
class __TwigTemplate_946ae3fa56456c74a505d8c244b803e13f9e2dcae0d98d8c40e1e778643dd5e7 extends Twig_Template
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
        echo "<!--Jquery Core-->
<script src=\"https://code.jquery.com/jquery-2.2.4.min.js\" integrity=\"sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js\"></script>
<!-- Bootstrap Core Js -->
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/bootstrap/js/bootstrap.js\"></script>

<!-- Select Plugin Js -->
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/bootstrap-select/js/bootstrap-select.js\"></script>

<!-- Slimscroll Plugin Js -->
<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/jquery-slimscroll/jquery.slimscroll.js\"></script>

<!-- Bootstrap Notify Plugin Js -->
<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/bootstrap-notify/bootstrap-notify.js\"></script>

<!-- Waves Effect Plugin Js -->
<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/node-waves/waves.js\"></script>

<!-- Jquery Spinner Plugin Js -->
<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/jquery-spinner/js/jquery.spinner.js\"></script>

<!-- SweetAlert Plugin Js -->
<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/sweetalert/sweetalert.min.js\"></script>

<!-- Autosize Plugin Js -->
<script src=\"";
        // line 26
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/autosize/autosize.js\"></script>

<!-- Moment Plugin Js -->
<script src=\"";
        // line 29
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/momentjs/moment.js\"></script>

<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src=\"";
        // line 32
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js\"></script>

<script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js\"></script>
<script src=\"";
        // line 35
        echo twig_escape_filter($this->env, base_url("template/js/jquery.number.min.js"), "html", null, true);
        echo "\"></script>
<!-- Custom Js -->
<script src=\"";
        // line 37
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/js/admin.js\"></script>
<!--<script src=\"";
        // line 38
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/js/pages/forms/basic-form-elements.js\"></script>-->
<!--<script src=\"";
        // line 39
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/js/pages/ui/dialogs.js\"></script>-->

<!-- Demo Js -->
<script src=\"";
        // line 42
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/js/demo.js\"></script>

<!-- Memanggil file .js untuk proses autocomplete -->
<!-- <script type='text/javascript' src='";
        // line 45
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/jquery-1.8.2.min.js'></script> -->
<script type='text/javascript' src='";
        // line 46
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/jquery.autocomplete.js'></script>

<!-- Memanggil file .css untuk style saat data dicari dalam filed -->
<link href='";
        // line 49
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/jquery.autocomplete.css' rel='stylesheet' />

<!-- Memanggil file .css autocomplete_ci/assets/css/default.css -->
<link href='";
        // line 52
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/css/default.css' rel='stylesheet' />

<script type=\"text/javascript\">

   function changeFunc() {
      var selectBox = document.getElementById(\"cari_siswa\");
      var selectedValue = selectBox.options[selectBox.selectedIndex].value;

      var res = selectedValue.split(\"#\");

      document.getElementById(\"nis\").value=res[0];
      document.getElementById(\"namasiswa\").value=res[1];
      document.getElementById(\"kelas\").value=res[2];
      document.getElementById(\"namaayah\").value=res[3];
      //alert(selectedValue);
   }

   function notif(text){
        showNotification(\"\", text, \"top\", \"right\");
    }
    function showNotification(colorName, text, placementFrom, placementAlign, animateEnter, animateExit) {
    if (colorName === null || colorName === '') { colorName = 'bg-black'; }
    if (text === null || text === '') { text = 'Turning standard Bootstrap alerts'; }
    if (animateEnter === null || animateEnter === '') { animateEnter = 'animated fadeInDown'; }
    if (animateExit === null || animateExit === '') { animateExit = 'animated fadeOutUp'; }
    var allowDismiss = true;

    \$.notify({
        message: text
    },
        {
            type: colorName,
            allow_dismiss: allowDismiss,
            newest_on_top: true,
            timer: 1000,
            placement: {
                from: placementFrom,
                align: placementAlign
            },
            animate: {
                enter: animateEnter,
                exit: animateExit
            },
            template: '<div data-notify=\"container\" class=\"bootstrap-notify-container alert alert-dismissible {0} ' + (allowDismiss ? \"p-r-35\" : \"\") + '\" role=\"alert\">' +
            '<button type=\"button\" aria-hidden=\"true\" class=\"close\" data-notify=\"dismiss\">×</button>' +
            '<span data-notify=\"icon\"></span> ' +
            '<span data-notify=\"title\">{1}</span> ' +
            '<span data-notify=\"message\">{2}</span>' +
            '<div class=\"progress\" data-notify=\"progressbar\">' +
            '<div class=\"progress-bar progress-bar-{0}\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\"></div>' +
            '</div>' +
            '<a href=\"{3}\" target=\"{4}\" data-notify=\"url\"></a>' +
            '</div>'
        });
}


</script>
";
    }

    public function getTemplateName()
    {
        return "layouts/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 52,  120 => 49,  114 => 46,  110 => 45,  104 => 42,  98 => 39,  94 => 38,  90 => 37,  85 => 35,  79 => 32,  73 => 29,  67 => 26,  61 => 23,  55 => 20,  49 => 17,  43 => 14,  37 => 11,  31 => 8,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--Jquery Core-->
<script src=\"https://code.jquery.com/jquery-2.2.4.min.js\" integrity=\"sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js\"></script>
<!-- Bootstrap Core Js -->
<script src=\"{{ base_url() }}template/plugins/bootstrap/js/bootstrap.js\"></script>

<!-- Select Plugin Js -->
<script src=\"{{ base_url() }}template/plugins/bootstrap-select/js/bootstrap-select.js\"></script>

<!-- Slimscroll Plugin Js -->
<script src=\"{{ base_url() }}template/plugins/jquery-slimscroll/jquery.slimscroll.js\"></script>

<!-- Bootstrap Notify Plugin Js -->
<script src=\"{{ base_url() }}template/plugins/bootstrap-notify/bootstrap-notify.js\"></script>

<!-- Waves Effect Plugin Js -->
<script src=\"{{ base_url() }}template/plugins/node-waves/waves.js\"></script>

<!-- Jquery Spinner Plugin Js -->
<script src=\"{{ base_url() }}template/plugins/jquery-spinner/js/jquery.spinner.js\"></script>

<!-- SweetAlert Plugin Js -->
<script src=\"{{ base_url() }}template/plugins/sweetalert/sweetalert.min.js\"></script>

<!-- Autosize Plugin Js -->
<script src=\"{{ base_url() }}template/plugins/autosize/autosize.js\"></script>

<!-- Moment Plugin Js -->
<script src=\"{{ base_url() }}template/plugins/momentjs/moment.js\"></script>

<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src=\"{{ base_url() }}template/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js\"></script>

<script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js\"></script>
<script src=\"{{ base_url('template/js/jquery.number.min.js') }}\"></script>
<!-- Custom Js -->
<script src=\"{{ base_url() }}template/js/admin.js\"></script>
<!--<script src=\"{{ base_url() }}template/js/pages/forms/basic-form-elements.js\"></script>-->
<!--<script src=\"{{ base_url() }}template/js/pages/ui/dialogs.js\"></script>-->

<!-- Demo Js -->
<script src=\"{{ base_url() }}template/js/demo.js\"></script>

<!-- Memanggil file .js untuk proses autocomplete -->
<!-- <script type='text/javascript' src='{{ base_url() }}assets/js/jquery-1.8.2.min.js'></script> -->
<script type='text/javascript' src='{{ base_url() }}assets/js/jquery.autocomplete.js'></script>

<!-- Memanggil file .css untuk style saat data dicari dalam filed -->
<link href='{{ base_url() }}assets/js/jquery.autocomplete.css' rel='stylesheet' />

<!-- Memanggil file .css autocomplete_ci/assets/css/default.css -->
<link href='{{ base_url() }}assets/css/default.css' rel='stylesheet' />

<script type=\"text/javascript\">

   function changeFunc() {
      var selectBox = document.getElementById(\"cari_siswa\");
      var selectedValue = selectBox.options[selectBox.selectedIndex].value;

      var res = selectedValue.split(\"#\");

      document.getElementById(\"nis\").value=res[0];
      document.getElementById(\"namasiswa\").value=res[1];
      document.getElementById(\"kelas\").value=res[2];
      document.getElementById(\"namaayah\").value=res[3];
      //alert(selectedValue);
   }

   function notif(text){
        showNotification(\"\", text, \"top\", \"right\");
    }
    function showNotification(colorName, text, placementFrom, placementAlign, animateEnter, animateExit) {
    if (colorName === null || colorName === '') { colorName = 'bg-black'; }
    if (text === null || text === '') { text = 'Turning standard Bootstrap alerts'; }
    if (animateEnter === null || animateEnter === '') { animateEnter = 'animated fadeInDown'; }
    if (animateExit === null || animateExit === '') { animateExit = 'animated fadeOutUp'; }
    var allowDismiss = true;

    \$.notify({
        message: text
    },
        {
            type: colorName,
            allow_dismiss: allowDismiss,
            newest_on_top: true,
            timer: 1000,
            placement: {
                from: placementFrom,
                align: placementAlign
            },
            animate: {
                enter: animateEnter,
                exit: animateExit
            },
            template: '<div data-notify=\"container\" class=\"bootstrap-notify-container alert alert-dismissible {0} ' + (allowDismiss ? \"p-r-35\" : \"\") + '\" role=\"alert\">' +
            '<button type=\"button\" aria-hidden=\"true\" class=\"close\" data-notify=\"dismiss\">×</button>' +
            '<span data-notify=\"icon\"></span> ' +
            '<span data-notify=\"title\">{1}</span> ' +
            '<span data-notify=\"message\">{2}</span>' +
            '<div class=\"progress\" data-notify=\"progressbar\">' +
            '<div class=\"progress-bar progress-bar-{0}\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\"></div>' +
            '</div>' +
            '<a href=\"{3}\" target=\"{4}\" data-notify=\"url\"></a>' +
            '</div>'
        });
}


</script>
", "layouts/footer.twig", "/home/sipy1897/public_html/demo/apliku/views/layouts/footer.twig");
    }
}
