<?php

/* layouts/master_layouts.twig */
class __TwigTemplate_66ea39bba0929421ee7c3af6a7e16bfd0e48357dfab087caee5e171b9369c4a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'custom_css' => array($this, 'block_custom_css'),
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
      ";
        // line 7
        $this->displayBlock('custom_css', $context, $blocks);
        // line 10
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
        // line 58
        $this->loadTemplate("layouts/sidebar.twig", "layouts/master_layouts.twig", 58)->display($context);
        // line 59
        echo "
      <section class=\"content\">

         ";
        // line 62
        $this->displayBlock('main_content', $context, $blocks);
        // line 65
        echo "
      </section>

      ";
        // line 68
        $this->loadTemplate("layouts/footer.twig", "layouts/master_layouts.twig", 68)->display($context);
        // line 69
        echo "
      ";
        // line 70
        $this->displayBlock('custom_js', $context, $blocks);
        // line 73
        echo "
   </body>
</html>
";
    }

    // line 7
    public function block_custom_css($context, array $blocks = array())
    {
        // line 8
        echo "      
      ";
    }

    // line 62
    public function block_main_content($context, array $blocks = array())
    {
        // line 63
        echo "
         ";
    }

    // line 70
    public function block_custom_js($context, array $blocks = array())
    {
        // line 71
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
        return array (  132 => 71,  129 => 70,  124 => 63,  121 => 62,  116 => 8,  113 => 7,  106 => 73,  104 => 70,  101 => 69,  99 => 68,  94 => 65,  92 => 62,  87 => 59,  85 => 58,  35 => 10,  33 => 7,  30 => 6,  28 => 5,  22 => 1,);
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

      {% block custom_css %}
      
      {% endblock %}

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
", "layouts/master_layouts.twig", "/home/sipy1897/public_html/demo/apliku/views/layouts/master_layouts.twig");
    }
}
