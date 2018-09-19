<?php

/* home/index.twig */
class __TwigTemplate_9d4d806b8c9f1de6e8d902904c4d5de51926283f4907dcdc191b92d68407aee1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/master_layouts.twig", "home/index.twig", 1);
        $this->blocks = array(
            'main_content' => array($this, 'block_main_content'),
            'custom_js' => array($this, 'block_custom_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/master_layouts.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main_content($context, array $blocks = array())
    {
        // line 4
        echo "
   <div class=\"container-fluid\">
      <!--             <div class=\"block-header\">
         <h2 align=\"center\">Set Informasi Sekolah</h2>
         </div> -->

         <!-- Tabs With Icon Title -->
         <div class=\"row clearfix\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
               <div class=\"card\">
                  <div class=\"header\">
                     <h2>
                        Pengisian Biodata Siswa
                     </h2>
                     <ul class=\"header-dropdown m-r--5\">
                        <li class=\"dropdown\">
                           <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                              <i class=\"material-icons\">more_vert</i>
                           </a>
                           <ul class=\"dropdown-menu pull-right\">
                              <li><a href=\"javascript:void(0);\">Action</a></li>
                              <li><a href=\"javascript:void(0);\">Another action</a></li>
                              <li><a href=\"javascript:void(0);\">Something else here</a></li>
                           </ul>
                        </li>
                     </ul>
                  </div>
                  <div class=\"body\">
                     <!-- Nav tabs -->
                     <ul class=\"nav nav-tabs\" role=\"tablist\">
                        <li role=\"presentation\" class=\"active\">
                           <a href=\"#biodata_siswa_baru\" data-toggle=\"tab\">
                              <i class=\"material-icons\">perm_identity</i> Biodata
                           </a>
                        </li>
                        <li role=\"presentation\">
                           <a href=\"#biodata_ayah\" data-toggle=\"tab\">
                              <i class=\"material-icons\">face</i> Ayah
                           </a>
                        </li>
                        <li role=\"presentation\">
                           <a href=\"#biodata_ibu\" data-toggle=\"tab\">
                              <i class=\"material-icons\">pregnant_woman</i> Ibu
                           </a>
                        </li>
                        <li role=\"presentation\">
                           <a href=\"#biodata_alamat_siswa\" data-toggle=\"tab\">
                              <i class=\"material-icons\">location_on</i> Alamat
                           </a>
                        </li>
                        <!-- <li role=\"presentation\">
                           <a href=\"#sekolah_with_icon_title\" data-toggle=\"tab\">
                           <i class=\"material-icons\">school</i> Sekolah
                           </a>
                           </li>  -->
                     </ul>

                     <!-- Tab panes -->
                     <div class=\"tab-content\">
                        <!-- BIODATA -->
                        <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"biodata_siswa_baru\">
                           ";
        // line 65
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- #END# Tabs With Icon Title -->
            <!-- CPU Usage -->
         </div>
   </div>

";
    }

    // line 78
    public function block_custom_js($context, array $blocks = array())
    {
        // line 79
        echo "
   ";
        // line 80
        $this->loadTemplate("layouts/custom/form-validation.twig", "home/index.twig", 80)->display($context);
        // line 81
        echo "
";
    }

    public function getTemplateName()
    {
        return "home/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 81,  117 => 80,  114 => 79,  111 => 78,  95 => 65,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layouts/master_layouts.twig' %}

{% block main_content %}

   <div class=\"container-fluid\">
      <!--             <div class=\"block-header\">
         <h2 align=\"center\">Set Informasi Sekolah</h2>
         </div> -->

         <!-- Tabs With Icon Title -->
         <div class=\"row clearfix\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
               <div class=\"card\">
                  <div class=\"header\">
                     <h2>
                        Pengisian Biodata Siswa
                     </h2>
                     <ul class=\"header-dropdown m-r--5\">
                        <li class=\"dropdown\">
                           <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                              <i class=\"material-icons\">more_vert</i>
                           </a>
                           <ul class=\"dropdown-menu pull-right\">
                              <li><a href=\"javascript:void(0);\">Action</a></li>
                              <li><a href=\"javascript:void(0);\">Another action</a></li>
                              <li><a href=\"javascript:void(0);\">Something else here</a></li>
                           </ul>
                        </li>
                     </ul>
                  </div>
                  <div class=\"body\">
                     <!-- Nav tabs -->
                     <ul class=\"nav nav-tabs\" role=\"tablist\">
                        <li role=\"presentation\" class=\"active\">
                           <a href=\"#biodata_siswa_baru\" data-toggle=\"tab\">
                              <i class=\"material-icons\">perm_identity</i> Biodata
                           </a>
                        </li>
                        <li role=\"presentation\">
                           <a href=\"#biodata_ayah\" data-toggle=\"tab\">
                              <i class=\"material-icons\">face</i> Ayah
                           </a>
                        </li>
                        <li role=\"presentation\">
                           <a href=\"#biodata_ibu\" data-toggle=\"tab\">
                              <i class=\"material-icons\">pregnant_woman</i> Ibu
                           </a>
                        </li>
                        <li role=\"presentation\">
                           <a href=\"#biodata_alamat_siswa\" data-toggle=\"tab\">
                              <i class=\"material-icons\">location_on</i> Alamat
                           </a>
                        </li>
                        <!-- <li role=\"presentation\">
                           <a href=\"#sekolah_with_icon_title\" data-toggle=\"tab\">
                           <i class=\"material-icons\">school</i> Sekolah
                           </a>
                           </li>  -->
                     </ul>

                     <!-- Tab panes -->
                     <div class=\"tab-content\">
                        <!-- BIODATA -->
                        <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"biodata_siswa_baru\">
                           {{ title }}
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- #END# Tabs With Icon Title -->
            <!-- CPU Usage -->
         </div>
   </div>

{% endblock %}

{% block custom_js %}

   {% include 'layouts/custom/form-validation.twig' %}

{% endblock %}
", "home/index.twig", "D:\\SERVER\\htdocs\\development\\sipondot\\apliku\\views\\home\\index.twig");
    }
}
