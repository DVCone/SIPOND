<?php

/* test/test.twig */
class __TwigTemplate_34ff94d9d647ee6d9073c61f537ffd2541f83a608e3acb93992376202302a9f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/master_layouts.twig", "test/test.twig", 1);
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
      <!-- Widgets -->
      <div class=\"row clearfix\">
         <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <div class=\"card\">
               <div class=\"header\">
                  <h2 align=\"left\">
                     TAMBAH PENGGUNA

                     <!-- <small>Harap Menisi Data Kesehatan <a href=\"\">Dengan Teliti</a></small> -->
                  </h2>
               </div>
               <div class=\"body\">
                  <div class=\"row clearfix\">
                     <form method=\"POST\" id=\"form_test\">

                        <div class=\"col-sm-4\">
                           <b>User</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input name=\"input_userid\" id=\"input_userid\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-4\">
                           <b>Password</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input name=\"input_password\" id=\"input_password\" type=\"password\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-4\">
                           <b>Confirm Password</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input name=\"input_confirm_password\" id=\"input_confirm_password\" type=\"password\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-6\">
                           <b>Department</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input name=\"input_dept\" id=\"input_dept\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-6\">
                           <b>Kodenota</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input name=\"input_kodenota\" id=\"input_kodenota\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>


                        <div class=\"col-sm-12\">
                           <div class=\"form-group\">
                              <input type=\"hidden\" name=\"";
        // line 65
        echo twig_escape_filter($this->env, ($context["csrf_name"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["csrf_hash"] ?? null), "html", null, true);
        echo "\" style=\"display: none\">
                              <button class=\"btn btn-primary waves-effect\" type=\"submit\">Tambah Data</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- #END# Widgets -->
      <!-- CPU Usage -->
   </div>

   <!--EDIT-->

   <div class=\"container-fluid\">
      <!-- Widgets -->
      <div class=\"row clearfix\">
         <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <div class=\"card\">
               <div class=\"header\">
                  <h2 align=\"left\">
                     UBAH DATA INFORMASI PENGGUNA
                     <!-- <small>Harap Menisi Data Kesehatan <a href=\"\">Dengan Teliti</a></small> -->
                  </h2>
               </div>
               <div class=\"body\">
                  <div class=\"row clearfix\">
                     <h2>";
        // line 94
        echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
        echo "</h2>

                     ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["test"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 97
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "group_id", array()), "html", null, true);
            echo "
                        <br>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- #END# Widgets -->
      <!-- CPU Usage -->
   </div>

";
    }

    // line 111
    public function block_custom_js($context, array $blocks = array())
    {
        // line 112
        echo "
   ";
        // line 113
        $this->loadTemplate("layouts/form-validation.twig", "test/test.twig", 113)->display($context);
        // line 114
        echo "
";
    }

    public function getTemplateName()
    {
        return "test/test.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 114,  167 => 113,  164 => 112,  161 => 111,  148 => 100,  138 => 97,  134 => 96,  129 => 94,  95 => 65,  32 => 4,  29 => 3,  11 => 1,);
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
      <!-- Widgets -->
      <div class=\"row clearfix\">
         <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <div class=\"card\">
               <div class=\"header\">
                  <h2 align=\"left\">
                     TAMBAH PENGGUNA

                     <!-- <small>Harap Menisi Data Kesehatan <a href=\"\">Dengan Teliti</a></small> -->
                  </h2>
               </div>
               <div class=\"body\">
                  <div class=\"row clearfix\">
                     <form method=\"POST\" id=\"form_test\">

                        <div class=\"col-sm-4\">
                           <b>User</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input name=\"input_userid\" id=\"input_userid\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-4\">
                           <b>Password</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input name=\"input_password\" id=\"input_password\" type=\"password\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-4\">
                           <b>Confirm Password</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input name=\"input_confirm_password\" id=\"input_confirm_password\" type=\"password\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-6\">
                           <b>Department</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input name=\"input_dept\" id=\"input_dept\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-6\">
                           <b>Kodenota</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input name=\"input_kodenota\" id=\"input_kodenota\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>


                        <div class=\"col-sm-12\">
                           <div class=\"form-group\">
                              <input type=\"hidden\" name=\"{{ csrf_name }}\" value=\"{{ csrf_hash }}\" style=\"display: none\">
                              <button class=\"btn btn-primary waves-effect\" type=\"submit\">Tambah Data</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- #END# Widgets -->
      <!-- CPU Usage -->
   </div>

   <!--EDIT-->

   <div class=\"container-fluid\">
      <!-- Widgets -->
      <div class=\"row clearfix\">
         <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <div class=\"card\">
               <div class=\"header\">
                  <h2 align=\"left\">
                     UBAH DATA INFORMASI PENGGUNA
                     <!-- <small>Harap Menisi Data Kesehatan <a href=\"\">Dengan Teliti</a></small> -->
                  </h2>
               </div>
               <div class=\"body\">
                  <div class=\"row clearfix\">
                     <h2>{{ username }}</h2>

                     {% for data in test %}
                        {{ data.group_id }}
                        <br>
                     {% endfor %}
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- #END# Widgets -->
      <!-- CPU Usage -->
   </div>

{% endblock %}

{% block custom_js %}

   {% include 'layouts/form-validation.twig' %}

{% endblock %}
", "test/test.twig", "/home/sipy1897/public_html/demo/apliku/views/test/test.twig");
    }
}
