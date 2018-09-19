<?php

/* kesehatan/kesehatanv.twig */
class __TwigTemplate_8bddc84dbccc0f05a685d65e017914f456bd64dd5acb19b149a04210f5e89a01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/master_layouts.twig", "kesehatan/kesehatanv.twig", 1);
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
                  <h2 align=\"center\">
                     PENGISIAN DATA KESEHATAN SISWA
                     <!-- <small>Harap Menisi Data Kesehatan <a href=\"\">Dengan Teliti</a></small> -->
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
                  <div class=\"row clearfix\">
                     <form method=\"POST\" id=\"form_data_kesehatan_siswa\">

                        <div class=\"col-sm-12\">
                           <b>Pencarian Siswa</b>
                           <!-- <div class=\"form-group\"> -->
                           <select name=\"cari_siswa\" id=\"cari_siswa\" class=\"form-control show-tick\" data-live-search=\"true\" onchange=\"changeFunc();\">
                              <option value=\"\"></option>
                              ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 38
            echo "                                 <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nis", array()), "html", null, true);
            echo "#";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "namasiswa", array()), "html", null, true);
            echo "#";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "kelas", array()), "html", null, true);
            echo "#";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "namaayah", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nis", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "namasiswa", array()), "html", null, true);
            echo " Kelas ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "kelas", array()), "html", null, true);
            echo " Bin/ti ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "namaayah", array()), "html", null, true);
            echo "</option>
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
                           </select>
                           <div class=\"form-group\">
                              <div id=\"error_box\"></div>
                           </div>
                           <!-- </div> -->
                        </div>

                        <!-- batas -->

                        <div class=\"col-sm-12\">
                           <!-- <b>Data Siswa</b> -->
                           <div class=\"form-group\">
                              <div id=\"errorBox\"></div>

                              <input id=\"nis\" name=\"nis\" type=\"text\" class=\"form-control\" readonly />
                              <input id=\"namasiswa\" name=\"namasiswa\" type=\"text\" class=\"form-control\" readonly />
                              <input id=\"kelas\" name=\"kelas\" type=\"text\" class=\"form-control\" readonly />
                              <input id=\"namaayah\" name=\"namaayah\" type=\"text\" class=\"form-control\" readonly />

                           </div>
                        </div>

                        <div class=\"col-sm-4\">
                           <b>Tanggal</b>
                           <div class=\"form-group\">
                              <!-- <div class=\"form-line\"> -->
                              <input size = \"15\" type=\"date\" class=\"form-control\"name=\"tanggal\" id=\"tanggalInput\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"  required />
                              <!-- </div> -->
                           </div>
                        </div>

                        <div class=\"col-sm-4\">
                           <b>Keluhan</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input name=\"keluhan\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>

                        <div class=\"col-sm-4\">
                           <b>Obat</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input name=\"obat\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>

                        <div class=\"col-sm-12\">
                           <b>Catatan</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input name=\"catatan\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>


                        <div class=\"col-sm-12\">
                           <div class=\"form-group\">
                              <input type=\"hidden\" name=\"";
        // line 102
        echo twig_escape_filter($this->env, ($context["csrf_name"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["csrf_hash"] ?? null), "html", null, true);
        echo "\" style=\"display: none\">
                              <button type=\"reset\" class=\"btn btn-danger waves-effect\">Batalkan Isian</button>
                              <button class=\"btn btn-primary waves-effect\" type=\"submit\">Simpan Data</button>
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

";
    }

    // line 119
    public function block_custom_js($context, array $blocks = array())
    {
        // line 120
        echo "
   ";
        // line 121
        $this->loadTemplate("layouts/form-validation.twig", "kesehatan/kesehatanv.twig", 121)->display($context);
        // line 122
        echo "
";
    }

    public function getTemplateName()
    {
        return "kesehatan/kesehatanv.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 122,  189 => 121,  186 => 120,  183 => 119,  161 => 102,  123 => 67,  94 => 40,  71 => 38,  67 => 37,  32 => 4,  29 => 3,  11 => 1,);
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
                  <h2 align=\"center\">
                     PENGISIAN DATA KESEHATAN SISWA
                     <!-- <small>Harap Menisi Data Kesehatan <a href=\"\">Dengan Teliti</a></small> -->
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
                  <div class=\"row clearfix\">
                     <form method=\"POST\" id=\"form_data_kesehatan_siswa\">

                        <div class=\"col-sm-12\">
                           <b>Pencarian Siswa</b>
                           <!-- <div class=\"form-group\"> -->
                           <select name=\"cari_siswa\" id=\"cari_siswa\" class=\"form-control show-tick\" data-live-search=\"true\" onchange=\"changeFunc();\">
                              <option value=\"\"></option>
                              {% for m in data %}
                                 <option value=\"{{ m.nis }}#{{ m.namasiswa }}#{{ m.kelas }}#{{ m.namaayah }}\">{{ m.nis }} - {{ m.namasiswa }} Kelas {{ m.kelas }} Bin/ti {{ m.namaayah }}</option>
                              {% endfor %}

                           </select>
                           <div class=\"form-group\">
                              <div id=\"error_box\"></div>
                           </div>
                           <!-- </div> -->
                        </div>

                        <!-- batas -->

                        <div class=\"col-sm-12\">
                           <!-- <b>Data Siswa</b> -->
                           <div class=\"form-group\">
                              <div id=\"errorBox\"></div>

                              <input id=\"nis\" name=\"nis\" type=\"text\" class=\"form-control\" readonly />
                              <input id=\"namasiswa\" name=\"namasiswa\" type=\"text\" class=\"form-control\" readonly />
                              <input id=\"kelas\" name=\"kelas\" type=\"text\" class=\"form-control\" readonly />
                              <input id=\"namaayah\" name=\"namaayah\" type=\"text\" class=\"form-control\" readonly />

                           </div>
                        </div>

                        <div class=\"col-sm-4\">
                           <b>Tanggal</b>
                           <div class=\"form-group\">
                              <!-- <div class=\"form-line\"> -->
                              <input size = \"15\" type=\"date\" class=\"form-control\"name=\"tanggal\" id=\"tanggalInput\" value=\"{{ \"now\" | date(\"Y-m-d\")}}\"  required />
                              <!-- </div> -->
                           </div>
                        </div>

                        <div class=\"col-sm-4\">
                           <b>Keluhan</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input name=\"keluhan\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>

                        <div class=\"col-sm-4\">
                           <b>Obat</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input name=\"obat\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>

                        <div class=\"col-sm-12\">
                           <b>Catatan</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input name=\"catatan\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>


                        <div class=\"col-sm-12\">
                           <div class=\"form-group\">
                              <input type=\"hidden\" name=\"{{ csrf_name }}\" value=\"{{ csrf_hash }}\" style=\"display: none\">
                              <button type=\"reset\" class=\"btn btn-danger waves-effect\">Batalkan Isian</button>
                              <button class=\"btn btn-primary waves-effect\" type=\"submit\">Simpan Data</button>
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

{% endblock %}

{% block custom_js %}

   {% include 'layouts/form-validation.twig' %}

{% endblock %}

", "kesehatan/kesehatanv.twig", "/home/sipy1897/public_html/demo/apliku/views/kesehatan/kesehatanv.twig");
    }
}
