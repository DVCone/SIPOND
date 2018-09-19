<?php

/* layouts/footer.twig */
class __TwigTemplate_5fb65e1e1f7047ee890d54408c256c2b0b8442ae6e4d3e91bf77305d2c1343db extends Twig_Template
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
<!-- Bootstrap Core Js -->
<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/bootstrap/js/bootstrap.js\"></script>

<!-- Select Plugin Js -->
<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/bootstrap-select/js/bootstrap-select.js\"></script>

<!-- Slimscroll Plugin Js -->
<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/jquery-slimscroll/jquery.slimscroll.js\"></script>

<!-- Bootstrap Notify Plugin Js -->
<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/bootstrap-notify/bootstrap-notify.js\"></script>

<!-- Waves Effect Plugin Js -->
<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/node-waves/waves.js\"></script>

<!-- Jquery Spinner Plugin Js -->
<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/jquery-spinner/js/jquery.spinner.js\"></script>

<!-- SweetAlert Plugin Js -->
<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/sweetalert/sweetalert.min.js\"></script>

<!-- Autosize Plugin Js -->
<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/autosize/autosize.js\"></script>

<!-- Moment Plugin Js -->
<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/momentjs/moment.js\"></script>

<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js\"></script>

<!-- Custom Js -->
<script src=\"";
        // line 34
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/js/admin.js\"></script>
<!--<script src=\"";
        // line 35
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/js/pages/forms/basic-form-elements.js\"></script>-->
<!--<script src=\"";
        // line 36
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/js/pages/ui/dialogs.js\"></script>-->

<!-- Demo Js -->
<script src=\"";
        // line 39
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/js/demo.js\"></script>

<!-- Memanggil file .js untuk proses autocomplete -->
<!-- <script type='text/javascript' src='";
        // line 42
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/jquery-1.8.2.min.js'></script> -->
<script type='text/javascript' src='";
        // line 43
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/jquery.autocomplete.js'></script>

<!-- Memanggil file .css untuk style saat data dicari dalam filed -->
<link href='";
        // line 46
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/jquery.autocomplete.css' rel='stylesheet' />

<!-- Memanggil file .css autocomplete_ci/assets/css/default.css -->
<link href='";
        // line 49
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
        return array (  120 => 49,  114 => 46,  108 => 43,  104 => 42,  98 => 39,  92 => 36,  88 => 35,  84 => 34,  78 => 31,  72 => 28,  66 => 25,  60 => 22,  54 => 19,  48 => 16,  42 => 13,  36 => 10,  30 => 7,  24 => 4,  19 => 1,);
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

</script>
", "layouts/footer.twig", "/home/sipy1897/public_html/demo/apliku/views/layouts/footer.twig");
    }
}
