<?php

/* siswa/siswav.twig */
class __TwigTemplate_a5ba904aa1b7d46c75fad21631cf40d1f8ff442b6529b3ffcb9d25ebb7e8c0e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/master_layouts.twig", "siswa/siswav.twig", 1);
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
                           <form method=\"POST\" id=\"form_biodata_siswa\">
                              <div class=\"row\">
                                 <div class=\"col-sm-8\">
                                    <b>Nama Siswa</b>
                                    <div class=\"form-group\">
                                       <div class=\"form-line\">
                                          <input name=\"namasiswaawal\" type=\"text\" class=\"form-control\" />
                                       </div>
                                    </div>
                                 </div>

                                 <div class=\"col-sm-4\">
                                    <b>Kota Lahir</b>
                                    <div class=\"form-group\">
                                       <div class=\"form-line\">
                                          <input name=\"kotalahir\" type=\"text\" class=\"form-control\" />
                                       </div>
                                    </div>
                                 </div>
                              </div>

                              <div class=\"row\">
                                 <div class=\"col-sm-3\">
                                    <b>Tanggal Lahir</b>
                                    <div class=\"form-group\">
                                       <input type=\"date\" class=\"form-control\" name=\"tanggallahir\" id=\"tanggalInput\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"  required />
                                    </div>
                                 </div>


                                 <div class=\"col-sm-3\">
                                    <b>Jenis Kelamin</b>
                                    <div class=\"form-group\">
                                       <select name=\"jeniskelamin\" class=\"form-control show-tick\">
                                          <option value=\"Pria\">Pria</option>
                                          <option value=\"Wanita\">Wanita</option>
                                       </select>
                                    </div>
                                 </div>

                                 <div class=\"col-sm-3\">
                                    <b>Golongan Darah</b>
                                    <div class=\"form-group\">
                                       <select name=\"golongandarah\" class=\"form-control show-tick\">
                                          <option value=\"A\">A</option>
                                          <option value=\"B\">B</option>
                                          <option value=\"AB\">AB</option>
                                          <option value=\"O\">O</option>
                                       </select>
                                    </div>
                                 </div>

                                 <div class=\"col-sm-3\">
                                    <b>Anak Ke</b>
                                    <div class=\"input-group spinner\" data-trigger=\"spinner\">
                                       <div class=\"form-line\">
                                          <input name=\"anakke\" type=\"text\" class=\"form-control text-center\" value=\"1\" data-rule=\"quantity\">
                                       </div>
                                       <span class=\"input-group-addon\">
                                          <a href=\"javascript:;\" class=\"spin-up\" data-spin=\"up\"><i class=\"glyphicon glyphicon-chevron-up\"></i></a>
                                          <a href=\"javascript:;\" class=\"spin-down\" data-spin=\"down\"><i class=\"glyphicon glyphicon-chevron-down\"></i></a>
                                       </span>
                                    </div>
                                 </div>
                              </div>
                              <div class=\"row\">
                                 <div class=\"col-sm-4\">
                                    <b>Kelas</b>
                                    <!-- <div class=\"form-group\"> -->
                                    <select name=\"kodekelas\" id=\"kodekelas\" class=\"form-control show-tick\" data-live-search=\"true\">
                                       ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["kelas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 136
            echo "                                          <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "namakelas", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "namakelas", array()), "html", null, true);
            echo "</option>
                                       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "
                                    </select>
                                    </div>
                                    <div class=\"col-sm-4\">
                                       <b>Seting Bayar SPP</b>
                                       <div class=\"form-group\">
                                          <div class=\"form-line\">
                                             <input name=\"spp\" type=\"text\" class=\"form-control\" />
                                          </div>
                                       </div>
                                    </div>
                                    <div class=\"col-sm-4\">
                                       <b>Seting Bayar Daftar Ulang</b>
                                       <div class=\"form-group\">
                                          <div class=\"form-line\">
                                             <input name=\"daftarulang\" type=\"text\" class=\"form-control\" />
                                          </div>
                                       </div>
                                    </div>
                                    <div class=\"col-sm-12\">
                                       <div class=\"form-group\">
                                          <input type=\"hidden\" name=\"";
        // line 159
        echo twig_escape_filter($this->env, ($context["csrf_name"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["csrf_hash"] ?? null), "html", null, true);
        echo "\" style=\"display: none\">
                                          <button type=\"submit\" id=\"btnbiodata\" class=\"btn btn-primary waves-effect\">Simpan Data</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </form>

                           ";
        // line 167
        $this->loadTemplate("siswa/ayahv.twig", "siswa/siswav.twig", 167)->display($context);
        // line 168
        echo "
                           ";
        // line 169
        $this->loadTemplate("siswa/ibuv.twig", "siswa/siswav.twig", 169)->display($context);
        // line 170
        echo "
                           ";
        // line 171
        $this->loadTemplate("siswa/alamatv.twig", "siswa/siswav.twig", 171)->display($context);
        // line 172
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

    // line 185
    public function block_custom_js($context, array $blocks = array())
    {
        // line 186
        echo "
   ";
        // line 187
        $this->loadTemplate("layouts/form-validation.twig", "siswa/siswav.twig", 187)->display($context);
        // line 188
        echo "
";
    }

    public function getTemplateName()
    {
        return "siswa/siswav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 188,  252 => 187,  249 => 186,  246 => 185,  231 => 172,  229 => 171,  226 => 170,  224 => 169,  221 => 168,  219 => 167,  206 => 159,  183 => 138,  172 => 136,  168 => 135,  120 => 90,  32 => 4,  29 => 3,  11 => 1,);
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
                           <form method=\"POST\" id=\"form_biodata_siswa\">
                              <div class=\"row\">
                                 <div class=\"col-sm-8\">
                                    <b>Nama Siswa</b>
                                    <div class=\"form-group\">
                                       <div class=\"form-line\">
                                          <input name=\"namasiswaawal\" type=\"text\" class=\"form-control\" />
                                       </div>
                                    </div>
                                 </div>

                                 <div class=\"col-sm-4\">
                                    <b>Kota Lahir</b>
                                    <div class=\"form-group\">
                                       <div class=\"form-line\">
                                          <input name=\"kotalahir\" type=\"text\" class=\"form-control\" />
                                       </div>
                                    </div>
                                 </div>
                              </div>

                              <div class=\"row\">
                                 <div class=\"col-sm-3\">
                                    <b>Tanggal Lahir</b>
                                    <div class=\"form-group\">
                                       <input type=\"date\" class=\"form-control\" name=\"tanggallahir\" id=\"tanggalInput\" value=\"{{ \"now\"|date(\"Y-m-d\") }}\"  required />
                                    </div>
                                 </div>


                                 <div class=\"col-sm-3\">
                                    <b>Jenis Kelamin</b>
                                    <div class=\"form-group\">
                                       <select name=\"jeniskelamin\" class=\"form-control show-tick\">
                                          <option value=\"Pria\">Pria</option>
                                          <option value=\"Wanita\">Wanita</option>
                                       </select>
                                    </div>
                                 </div>

                                 <div class=\"col-sm-3\">
                                    <b>Golongan Darah</b>
                                    <div class=\"form-group\">
                                       <select name=\"golongandarah\" class=\"form-control show-tick\">
                                          <option value=\"A\">A</option>
                                          <option value=\"B\">B</option>
                                          <option value=\"AB\">AB</option>
                                          <option value=\"O\">O</option>
                                       </select>
                                    </div>
                                 </div>

                                 <div class=\"col-sm-3\">
                                    <b>Anak Ke</b>
                                    <div class=\"input-group spinner\" data-trigger=\"spinner\">
                                       <div class=\"form-line\">
                                          <input name=\"anakke\" type=\"text\" class=\"form-control text-center\" value=\"1\" data-rule=\"quantity\">
                                       </div>
                                       <span class=\"input-group-addon\">
                                          <a href=\"javascript:;\" class=\"spin-up\" data-spin=\"up\"><i class=\"glyphicon glyphicon-chevron-up\"></i></a>
                                          <a href=\"javascript:;\" class=\"spin-down\" data-spin=\"down\"><i class=\"glyphicon glyphicon-chevron-down\"></i></a>
                                       </span>
                                    </div>
                                 </div>
                              </div>
                              <div class=\"row\">
                                 <div class=\"col-sm-4\">
                                    <b>Kelas</b>
                                    <!-- <div class=\"form-group\"> -->
                                    <select name=\"kodekelas\" id=\"kodekelas\" class=\"form-control show-tick\" data-live-search=\"true\">
                                       {% for m in kelas %}
                                          <option value=\"{{ m.namakelas }}\">{{ m.namakelas }}</option>
                                       {% endfor %}

                                    </select>
                                    </div>
                                    <div class=\"col-sm-4\">
                                       <b>Seting Bayar SPP</b>
                                       <div class=\"form-group\">
                                          <div class=\"form-line\">
                                             <input name=\"spp\" type=\"text\" class=\"form-control\" />
                                          </div>
                                       </div>
                                    </div>
                                    <div class=\"col-sm-4\">
                                       <b>Seting Bayar Daftar Ulang</b>
                                       <div class=\"form-group\">
                                          <div class=\"form-line\">
                                             <input name=\"daftarulang\" type=\"text\" class=\"form-control\" />
                                          </div>
                                       </div>
                                    </div>
                                    <div class=\"col-sm-12\">
                                       <div class=\"form-group\">
                                          <input type=\"hidden\" name=\"{{ csrf_name }}\" value=\"{{ csrf_hash }}\" style=\"display: none\">
                                          <button type=\"submit\" id=\"btnbiodata\" class=\"btn btn-primary waves-effect\">Simpan Data</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </form>

                           {% include 'siswa/ayahv.twig' %}

                           {% include 'siswa/ibuv.twig' %}

                           {% include 'siswa/alamatv.twig' %}

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

   {% include 'layouts/form-validation.twig' %}

{% endblock %}
", "siswa/siswav.twig", "D:\\SERVER\\htdocs\\development\\sipondot\\apliku\\views\\siswa\\siswav.twig");
    }
}
