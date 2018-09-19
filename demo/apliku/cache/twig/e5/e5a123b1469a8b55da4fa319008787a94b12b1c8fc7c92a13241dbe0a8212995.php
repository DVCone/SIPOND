<?php

/* layouts/footer.twig */
class __TwigTemplate_3e3b54b9f1c0ecac97f2914da6e0694994ee2a874c20ff64b6ef749924b118d9 extends Twig_Template
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
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, base_url("template/js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\" integrity=\"sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=\" crossorigin=\"anonymous\"></script>
<!-- Bootstrap Core Js -->
<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, base_url("template/plugins/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

<!-- Select Plugin Js -->
<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, base_url("template/plugins/bootstrap-select/js/bootstrap-select.js"), "html", null, true);
        echo "\"></script>

<!-- Slimscroll Plugin Js -->
<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, base_url("template/plugins/jquery-slimscroll/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>

<!-- Bootstrap Notify Plugin Js -->
<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, base_url("template/plugins/bootstrap-notify/bootstrap-notify.js"), "html", null, true);
        echo "\"></script>

<!-- Waves Effect Plugin Js -->
<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, base_url("template/plugins/node-waves/waves.js"), "html", null, true);
        echo "\"></script>

<!-- Jquery Spinner Plugin Js -->
<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, base_url("template/plugins/jquery-spinner/js/jquery.spinner.js"), "html", null, true);
        echo "\"></script>

<!-- SweetAlert Plugin Js -->
<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, base_url("template/plugins/sweetalert/sweetalert.min.js"), "html", null, true);
        echo "\"></script>

<!-- Autosize Plugin Js -->
<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, base_url("template/plugins/autosize/autosize.js"), "html", null, true);
        echo "\"></script>

<!-- Moment Plugin Js -->
<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, base_url("template/plugins/momentjs/moment.js"), "html", null, true);
        echo "\"></script>

<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, base_url("template/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"), "html", null, true);
        echo "\"></script>

<!-- Custom Js -->
<script src=\"";
        // line 34
        echo twig_escape_filter($this->env, base_url("template/js/admin.js"), "html", null, true);
        echo "\"></script>
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
        echo twig_escape_filter($this->env, base_url("template/js/demo.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 40
        echo twig_escape_filter($this->env, base_url("template/js/pages/ui/notifications.js"), "html", null, true);
        echo "\"></script>

<!-- Memanggil file .js untuk proses autocomplete -->
<!-- <script type='text/javascript' src='";
        // line 43
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/jquery-1.8.2.min.js'></script> -->
";
        // line 45
        echo "
<!-- Memanggil file .css untuk style saat data dicari dalam filed -->
";
        // line 48
        echo "
<!-- Memanggil file .css autocomplete_ci/assets/css/default.css -->
";
        // line 51
        echo "
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
        return array (  123 => 51,  119 => 48,  115 => 45,  111 => 43,  105 => 40,  101 => 39,  95 => 36,  91 => 35,  87 => 34,  81 => 31,  75 => 28,  69 => 25,  63 => 22,  57 => 19,  51 => 16,  45 => 13,  39 => 10,  33 => 7,  27 => 4,  22 => 2,  19 => 1,);
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
<script src=\"{{ base_url(\"template/js/jquery-2.2.4.min.js\") }}\" integrity=\"sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=\" crossorigin=\"anonymous\"></script>
<!-- Bootstrap Core Js -->
<script src=\"{{ base_url(\"template/plugins/bootstrap/js/bootstrap.js\") }}\"></script>

<!-- Select Plugin Js -->
<script src=\"{{ base_url(\"template/plugins/bootstrap-select/js/bootstrap-select.js\") }}\"></script>

<!-- Slimscroll Plugin Js -->
<script src=\"{{ base_url(\"template/plugins/jquery-slimscroll/jquery.slimscroll.js\") }}\"></script>

<!-- Bootstrap Notify Plugin Js -->
<script src=\"{{ base_url(\"template/plugins/bootstrap-notify/bootstrap-notify.js\") }}\"></script>

<!-- Waves Effect Plugin Js -->
<script src=\"{{ base_url(\"template/plugins/node-waves/waves.js\") }}\"></script>

<!-- Jquery Spinner Plugin Js -->
<script src=\"{{ base_url(\"template/plugins/jquery-spinner/js/jquery.spinner.js\") }}\"></script>

<!-- SweetAlert Plugin Js -->
<script src=\"{{ base_url(\"template/plugins/sweetalert/sweetalert.min.js\") }}\"></script>

<!-- Autosize Plugin Js -->
<script src=\"{{ base_url(\"template/plugins/autosize/autosize.js\") }}\"></script>

<!-- Moment Plugin Js -->
<script src=\"{{ base_url(\"template/plugins/momentjs/moment.js\") }}\"></script>

<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src=\"{{ base_url(\"template/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js\") }}\"></script>

<!-- Custom Js -->
<script src=\"{{ base_url(\"template/js/admin.js\") }}\"></script>
<!--<script src=\"{{ base_url() }}template/js/pages/forms/basic-form-elements.js\"></script>-->
<!--<script src=\"{{ base_url() }}template/js/pages/ui/dialogs.js\"></script>-->

<!-- Demo Js -->
<script src=\"{{ base_url(\"template/js/demo.js\") }}\"></script>
<script src=\"{{ base_url(\"template/js/pages/ui/notifications.js\") }}\"></script>

<!-- Memanggil file .js untuk proses autocomplete -->
<!-- <script type='text/javascript' src='{{ base_url() }}assets/js/jquery-1.8.2.min.js'></script> -->
{# <script type='text/javascript' src='{{ base_url(\"assets/js/jquery.autocomplete.js\") }}'></script> #}

<!-- Memanggil file .css untuk style saat data dicari dalam filed -->
{# <link href='{{ base_url(\"assets/js/jquery.autocomplete.css\") }}' rel='stylesheet' /> #}

<!-- Memanggil file .css autocomplete_ci/assets/css/default.css -->
{# <link href='{{ base_url(\"assets/css/default.css\") }}' rel='stylesheet' /> #}

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
", "layouts/footer.twig", "D:\\SERVER\\htdocs\\development\\sipondot\\apliku\\views\\layouts\\footer.twig");
    }
}
