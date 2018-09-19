<?php

/* layouts/sidebar.twig */
class __TwigTemplate_00f1a48d9f8c31a77f85968c712d990b6b308767a488309425b4645ba10b3dd9 extends Twig_Template
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
        echo "    <section>
        <!-- Left Sidebar -->
        <aside id=\"leftsidebar\" class=\"sidebar\">
            <!-- User Info -->
            <div class=\"user-info\">
                <div class=\"image\">
                   <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/images/sipond.jpeg\" width=\"48\" height=\"48\" alt=\"User\" />
                </div>
                <div class=\"info-container\">
                    <div class=\"name\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Achmad Yachdi Fauzan</div>
                    <div class=\"email\">gue.yadi@gmail.com</div>
                    <div class=\"btn-group user-helper-dropdown\">
                        <i class=\"material-icons\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">keyboard_arrow_down</i>
                        <ul class=\"dropdown-menu pull-right\">
                            <li><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["route"] ?? null), "logout", array()), "url", array()), "html", null, true);
        echo "\"><i class=\"material-icons\">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class=\"menu\">
                <ul class=\"list\">
                    <li class=\"header\">Menu Utama SIPond</li>
                    ";
        // line 25
        echo ($context["itusajja_sidebar"] ?? null);
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
    </section>";
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
        return array (  51 => 25,  38 => 15,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("    <section>
        <!-- Left Sidebar -->
        <aside id=\"leftsidebar\" class=\"sidebar\">
            <!-- User Info -->
            <div class=\"user-info\">
                <div class=\"image\">
                   <img src=\"{{ base_url() }}template/images/sipond.jpeg\" width=\"48\" height=\"48\" alt=\"User\" />
                </div>
                <div class=\"info-container\">
                    <div class=\"name\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Achmad Yachdi Fauzan</div>
                    <div class=\"email\">gue.yadi@gmail.com</div>
                    <div class=\"btn-group user-helper-dropdown\">
                        <i class=\"material-icons\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">keyboard_arrow_down</i>
                        <ul class=\"dropdown-menu pull-right\">
                            <li><a href=\"{{ route.logout.url }}\"><i class=\"material-icons\">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class=\"menu\">
                <ul class=\"list\">
                    <li class=\"header\">Menu Utama SIPond</li>
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
    </section>", "layouts/sidebar.twig", "D:\\SERVER\\htdocs\\development\\sipondot\\apliku\\views\\layouts\\sidebar.twig");
    }
}
