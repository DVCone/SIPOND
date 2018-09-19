<?php

/* login/signin.twig */
class __TwigTemplate_85a57f3990ab6cf88fb2b2992ee268ecd25aaf07fbf9761afe60bd2b6b88ca8a extends Twig_Template
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
        echo "﻿<!DOCTYPE html>
<html>
   <head>
      <meta charset=\"UTF-8\">
      <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
      <title>Sign In | Sipond</title>
      <!-- Favicon-->
      <link rel=\"icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/favicon.ico\" type=\"image/x-icon\">

      <!-- Google Fonts -->
      <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\" type=\"text/css\">
      <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, base_url("template/css/icon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

      <!-- Bootstrap Core Css -->
      <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/bootstrap/css/bootstrap.css\" rel=\"stylesheet\">

      <!-- Waves Effect Css -->
      <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/node-waves/waves.css\" rel=\"stylesheet\" />

      <!-- Animation Css -->
      <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/animate-css/animate.css\" rel=\"stylesheet\" />

      <!-- Custom Css -->
      <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/css/style.css\" rel=\"stylesheet\">
      <!-- Jquery Core Js -->
      <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, base_url("template/js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\" ></script>
      <style>
.login-box .card{
   -webkit-box-shadow: 0px 3px 24px 0px rgba(0, 0, 0, 0.63);
   -moz-box-shadow: 0px 3px 24px 0px rgba(0, 0, 0, 0.63);
   box-shadow: 0px 3px 24px 0px rgba(0, 0, 0, 0.63);
}
      </style>
   </head>
   <body class=\"login-page\">
      <div class=\"login-box\">
         <div class=\"logo\">
            <a href=\"javascript:void(0);\">SIPond</a>
            <small>Sistem Informasi Pondok Pesantren</small>
         </div>
         <div class=\"card\">
            <div class=\"body\">
               <form id=\"sign_in\" method=\"POST\" action=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["route"] ?? null), "login", array()), "url", array()), "html", null, true);
        echo "\">
                  <div class=\"msg\">Login Untuk Memulai</div>
                  <div class=\"input-group\">
                     <span class=\"input-group-addon\">
                        <i class=\"material-icons\">person</i>
                     </span>
                     <div class=\"form-line\">
                        <input type=\"text\" id=\"username\" class=\"form-control\" name=\"username\" placeholder=\"Username\" required maxlength=\"15\" autofocus>
                     </div>
                  </div>
                  <div class=\"input-group\">
                     <span class=\"input-group-addon\">
                        <i class=\"material-icons\">lock</i>
                     </span>
                     <div class=\"form-line\">
                        <input type=\"password\" id=\"password\" class=\"form-control\" name=\"password\" placeholder=\"Password\" maxlength=\"15\" required>
                        <input type=\"hidden\" name=\"";
        // line 59
        echo twig_escape_filter($this->env, ($context["csrf_name"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["csrf_hash"] ?? null), "html", null, true);
        echo "\" style=\"display: none\">
                     </div>
                  </div>
                  <div class=\"row\">
                     <!-- <div class=\"col-xs-8 p-t-5\">
                        <input type=\"checkbox\" name=\"rememberme\" id=\"rememberme\" class=\"filled-in chk-col-pink\">
                        <label for=\"rememberme\">Ingat Saya</label>
                        </div> -->
                        <div class=\"col-xs-4\"></div>
                        <div class=\"col-xs-4\">
                           <button class=\"btn btn-block bg-pink waves-effect\" type=\"submit\">MASUK</button>
                        </div>
                        <div class=\"col-xs-4\"></div>
                  </div>
               </form>
            </div>
         </div>
      </div>


      <!-- Bootstrap Core Js -->
      <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/bootstrap/js/bootstrap.js\"></script>

      <!-- Waves Effect Plugin Js -->
      <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/node-waves/waves.js\"></script>

      <!-- Custom Js -->
      <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/js/admin.js\"></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js\"></script>
      <script>
         \$(document).ready(function() {
            \$('#sign_in').validate({
               rules: {
                  username: {
                     required: true
                  },
                  password: {
                     required: true,
                  }
               }
            })
         })
      </script>
   </body>

</html>
";
    }

    public function getTemplateName()
    {
        return "login/signin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 86,  135 => 83,  129 => 80,  103 => 59,  84 => 43,  64 => 26,  59 => 24,  53 => 21,  47 => 18,  41 => 15,  35 => 12,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("﻿<!DOCTYPE html>
<html>
   <head>
      <meta charset=\"UTF-8\">
      <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
      <title>Sign In | Sipond</title>
      <!-- Favicon-->
      <link rel=\"icon\" href=\"{{ base_url() }}template/favicon.ico\" type=\"image/x-icon\">

      <!-- Google Fonts -->
      <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\" type=\"text/css\">
      <link href=\"{{ base_url(\"template/css/icon.css\") }}\" rel=\"stylesheet\" type=\"text/css\">

      <!-- Bootstrap Core Css -->
      <link href=\"{{ base_url() }}template/plugins/bootstrap/css/bootstrap.css\" rel=\"stylesheet\">

      <!-- Waves Effect Css -->
      <link href=\"{{ base_url() }}template/plugins/node-waves/waves.css\" rel=\"stylesheet\" />

      <!-- Animation Css -->
      <link href=\"{{ base_url() }}template/plugins/animate-css/animate.css\" rel=\"stylesheet\" />

      <!-- Custom Css -->
      <link href=\"{{ base_url() }}template/css/style.css\" rel=\"stylesheet\">
      <!-- Jquery Core Js -->
      <script src=\"{{ base_url(\"template/js/jquery-2.2.4.min.js\") }}\" ></script>
      <style>
.login-box .card{
   -webkit-box-shadow: 0px 3px 24px 0px rgba(0, 0, 0, 0.63);
   -moz-box-shadow: 0px 3px 24px 0px rgba(0, 0, 0, 0.63);
   box-shadow: 0px 3px 24px 0px rgba(0, 0, 0, 0.63);
}
      </style>
   </head>
   <body class=\"login-page\">
      <div class=\"login-box\">
         <div class=\"logo\">
            <a href=\"javascript:void(0);\">SIPond</a>
            <small>Sistem Informasi Pondok Pesantren</small>
         </div>
         <div class=\"card\">
            <div class=\"body\">
               <form id=\"sign_in\" method=\"POST\" action=\"{{ route.login.url }}\">
                  <div class=\"msg\">Login Untuk Memulai</div>
                  <div class=\"input-group\">
                     <span class=\"input-group-addon\">
                        <i class=\"material-icons\">person</i>
                     </span>
                     <div class=\"form-line\">
                        <input type=\"text\" id=\"username\" class=\"form-control\" name=\"username\" placeholder=\"Username\" required maxlength=\"15\" autofocus>
                     </div>
                  </div>
                  <div class=\"input-group\">
                     <span class=\"input-group-addon\">
                        <i class=\"material-icons\">lock</i>
                     </span>
                     <div class=\"form-line\">
                        <input type=\"password\" id=\"password\" class=\"form-control\" name=\"password\" placeholder=\"Password\" maxlength=\"15\" required>
                        <input type=\"hidden\" name=\"{{ csrf_name }}\" value=\"{{ csrf_hash }}\" style=\"display: none\">
                     </div>
                  </div>
                  <div class=\"row\">
                     <!-- <div class=\"col-xs-8 p-t-5\">
                        <input type=\"checkbox\" name=\"rememberme\" id=\"rememberme\" class=\"filled-in chk-col-pink\">
                        <label for=\"rememberme\">Ingat Saya</label>
                        </div> -->
                        <div class=\"col-xs-4\"></div>
                        <div class=\"col-xs-4\">
                           <button class=\"btn btn-block bg-pink waves-effect\" type=\"submit\">MASUK</button>
                        </div>
                        <div class=\"col-xs-4\"></div>
                  </div>
               </form>
            </div>
         </div>
      </div>


      <!-- Bootstrap Core Js -->
      <script src=\"{{ base_url() }}template/plugins/bootstrap/js/bootstrap.js\"></script>

      <!-- Waves Effect Plugin Js -->
      <script src=\"{{ base_url() }}template/plugins/node-waves/waves.js\"></script>

      <!-- Custom Js -->
      <script src=\"{{ base_url() }}template/js/admin.js\"></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js\"></script>
      <script>
         \$(document).ready(function() {
            \$('#sign_in').validate({
               rules: {
                  username: {
                     required: true
                  },
                  password: {
                     required: true,
                  }
               }
            })
         })
      </script>
   </body>

</html>
", "login/signin.twig", "D:\\SERVER\\htdocs\\development\\sipondot\\apliku\\views\\login\\signin.twig");
    }
}
