<?php

/* layouts/layouts_master.twig */
class __TwigTemplate_50a33170839104b1c26a2f0d1b291a463d371bcc2fd404817498c70065f51a89 extends Twig_Template
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
        $this->loadTemplate("header.php", "layouts/layouts_master.twig", 5)->display($context);
        // line 6
        echo "
   </head>
   <body>
      ";
        // line 9
        $this->loadTemplate("sampingkiri.php", "layouts/layouts_master.twig", 9)->display($context);
        // line 10
        echo "
      ";
        // line 11
        $this->displayBlock('main_content', $context, $blocks);
        // line 14
        echo "
      ";
        // line 15
        $this->loadTemplate("footer.php", "layouts/layouts_master.twig", 15)->display($context);
        // line 16
        echo "
      ";
        // line 17
        $this->displayBlock('custom_js', $context, $blocks);
        // line 20
        echo "
   </body>
</html>
";
    }

    // line 11
    public function block_main_content($context, array $blocks = array())
    {
        // line 12
        echo "
      ";
    }

    // line 17
    public function block_custom_js($context, array $blocks = array())
    {
        // line 18
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "layouts/layouts_master.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 18,  66 => 17,  61 => 12,  58 => 11,  51 => 20,  49 => 17,  46 => 16,  44 => 15,  41 => 14,  39 => 11,  36 => 10,  34 => 9,  29 => 6,  27 => 5,  21 => 1,);
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
      
      {% include 'header.php' %}

   </head>
   <body>
      {% include 'sampingkiri.php' %}

      {% block main_content %}

      {% endblock %}

      {% include 'footer.php' %}

      {% block custom_js %}

      {% endblock %}

   </body>
</html>
", "layouts/layouts_master.twig", "/home/sipy1897/public_html/demo/apliku/views/layouts/layouts_master.twig");
    }
}
