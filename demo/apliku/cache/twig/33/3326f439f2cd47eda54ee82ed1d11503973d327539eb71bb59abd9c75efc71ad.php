<?php

/* layouts/sidebar.twig */
class __TwigTemplate_f12cb6befd99d4f91390d924b2af5c2c0778e8ea4e6274efadbbab108acba324 extends Twig_Template
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
        echo "    <nav class=\"navbar\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <a href=\"javascript:void(0);\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\" aria-expanded=\"false\"></a>
                <a href=\"javascript:void(0);\" class=\"bars\"></a>
                <a class=\"navbar-brand\" href=\"\"> Sistem Informasi Pondok Pesantren  </a>
            </div>
            <div class=\"navbar-collapse collapse in\" id=\"navbar-collapse\" aria-expanded=\"true\">
<ul class=\"nav navbar-nav navbar-right\">
    <!-- Notifications -->
    <li class=\"dropdown pull-right log\">
        <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
            <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["logosekolah"]) ? $context["logosekolah"] : null), "html", null, true);
        echo "\" alt=\"\">Admin
            <span class=\"material-icons\">expand_more</span>
        </a>
        <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
            <li>
                <a href=\" ";
        // line 18
        echo twig_escape_filter($this->env, base_url("index.php/login/logout"), "html", null, true);
        echo " \">
                    <i class=\"material-icons\">last_page</i> Keluar</a>
            </li>
        </ul>
    </li>
    <!-- #END# Notifications -->
</ul>
</div>
            </div>
        </div>
    </nav>
    <section>
        <!-- Left Sidebar -->
        <aside id=\"leftsidebar\" class=\"sidebar\">
            <!-- User Info -->
            <div class=\"user-info\">
                <div class=\"image\">
                   <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/images/sipond.jpeg\" width=\"48\" height=\"48\" alt=\"User\" />
                </div>
                <div class=\"info-container\">
                    <div class=\"name\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><p id=\"namasekolah\"></p></div>
                    ";
        // line 40
        echo "                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class=\"menu\">
                <ul class=\"list\">
                    <li class=\"header\">Menu Utama</li>
                    ";
        // line 47
        echo (isset($context["itusajja_sidebar"]) ? $context["itusajja_sidebar"] : null);
        echo "
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class=\"legal\">
                <div class=\"copyright\">
                    &copy; 2018 Sistem Informasi Ponpes - <a href=\"javascript:void(0);\">SIPond</a>
                </div>
                <div class=\"version\">
                    <b>Version: </b> 1.0.1
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

  
";
    }

    public function getTemplateName()
    {
        return "layouts/sidebar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 47,  68 => 40,  61 => 35,  41 => 18,  33 => 13,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("    <nav class=\"navbar\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <a href=\"javascript:void(0);\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\" aria-expanded=\"false\"></a>
                <a href=\"javascript:void(0);\" class=\"bars\"></a>
                <a class=\"navbar-brand\" href=\"\"> Sistem Informasi Pondok Pesantren  </a>
            </div>
            <div class=\"navbar-collapse collapse in\" id=\"navbar-collapse\" aria-expanded=\"true\">
<ul class=\"nav navbar-nav navbar-right\">
    <!-- Notifications -->
    <li class=\"dropdown pull-right log\">
        <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
            <img src=\"{{ logosekolah }}\" alt=\"\">Admin
            <span class=\"material-icons\">expand_more</span>
        </a>
        <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
            <li>
                <a href=\" {{ base_url(\"index.php/login/logout\") }} \">
                    <i class=\"material-icons\">last_page</i> Keluar</a>
            </li>
        </ul>
    </li>
    <!-- #END# Notifications -->
</ul>
</div>
            </div>
        </div>
    </nav>
    <section>
        <!-- Left Sidebar -->
        <aside id=\"leftsidebar\" class=\"sidebar\">
            <!-- User Info -->
            <div class=\"user-info\">
                <div class=\"image\">
                   <img src=\"{{ base_url() }}template/images/sipond.jpeg\" width=\"48\" height=\"48\" alt=\"User\" />
                </div>
                <div class=\"info-container\">
                    <div class=\"name\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><p id=\"namasekolah\"></p></div>
                    {# <div class=\"email\">gue.yadi@gmail.com</div> #}
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class=\"menu\">
                <ul class=\"list\">
                    <li class=\"header\">Menu Utama</li>
                    {{itusajja_sidebar | raw}}
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class=\"legal\">
                <div class=\"copyright\">
                    &copy; 2018 Sistem Informasi Ponpes - <a href=\"javascript:void(0);\">SIPond</a>
                </div>
                <div class=\"version\">
                    <b>Version: </b> 1.0.1
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

  
", "layouts/sidebar.twig", "/home/sipy1897/public_html/demo/apliku/views/layouts/sidebar.twig");
    }
}
