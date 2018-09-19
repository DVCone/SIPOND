<?php

/* layouts/master_layouts.twig */
class __TwigTemplate_48fdc1943676774dd63129181f56665f0791741cd61a2481fd37022d6f2affaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main_content' => array($this, 'block_main_content'),
            'custom_js' => array($this, 'block_custom_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
   <head>

      ";
        // line 5
        $this->loadTemplate("layouts/header.twig", "layouts/master_layouts.twig", 5)->display($context);
        // line 6
        echo "
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


      ";
        // line 54
        $this->loadTemplate("layouts/sidebar.twig", "layouts/master_layouts.twig", 54)->display($context);
        // line 55
        echo "
      <section class=\"content\">

         ";
        // line 58
        $this->displayBlock('main_content', $context, $blocks);
        // line 61
        echo "
      </section>

      ";
        // line 64
        $this->loadTemplate("layouts/footer.twig", "layouts/master_layouts.twig", 64)->display($context);
        // line 65
        echo "
      ";
        // line 66
        $this->displayBlock('custom_js', $context, $blocks);
        // line 69
        echo "
   </body>
</html>
";
    }

    // line 58
    public function block_main_content($context, array $blocks = array())
    {
        // line 59
        echo "
         ";
    }

    // line 66
    public function block_custom_js($context, array $blocks = array())
    {
        // line 67
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "layouts/master_layouts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 67,  115 => 66,  110 => 59,  107 => 58,  100 => 69,  98 => 66,  95 => 65,  93 => 64,  88 => 61,  86 => 58,  81 => 55,  79 => 54,  29 => 6,  27 => 5,  21 => 1,);
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
<html lang=\"en\">
   <head>

      {% include 'layouts/header.twig' %}

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


      {% include 'layouts/sidebar.twig' %}

      <section class=\"content\">

         {% block main_content %}

         {% endblock %}

      </section>

      {% include 'layouts/footer.twig' %}

      {% block custom_js %}

      {% endblock %}

   </body>
</html>
", "layouts/master_layouts.twig", "D:\\SERVER\\htdocs\\development\\sipondot\\apliku\\views\\layouts\\master_layouts.twig");
    }
}
