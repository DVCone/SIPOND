<?php

/* karyawan/karyawanv.twig */
class __TwigTemplate_659e488585a5898322e89ed795ce27f5db86693875b55b9e08c5c299355a0794 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/master_layouts.twig", "karyawan/karyawanv.twig", 1);
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
                        Pengisian Data Guru / Karyawan
                     </h2>
                  </div>
                  <div class=\"body\">
                     <!-- Nav tabs -->
                     <ul class=\"nav nav-tabs\" role=\"tablist\">
                        <!--                                 <li role=\"presentation\" class=\"active\">
                           <a href=\"#awal\" data-toggle=\"tab\">
                           <i class=\"material-icons\">home</i> Registrasi
                           </a>
                           </li>   -->
                           <li role=\"presentation\" class=\"active\">
                              <a href=\"#home_with_icon_title\" data-toggle=\"tab\">
                                 <i class=\"material-icons\">perm_identity</i> Biodata
                              </a>
                           </li>
                           <!-- <li role=\"presentation\">
                              <a href=\"#profile_with_icon_title\" data-toggle=\"tab\">
                              <i class=\"material-icons\">face</i> Ayah
                              </a>
                              </li>
                              <li role=\"presentation\">
                              <a href=\"#messages_with_icon_title\" data-toggle=\"tab\">
                              <i class=\"material-icons\">pregnant_woman</i> Ibu
                              </a>
                              </li> -->
                              <li role=\"presentation\">
                                 <a href=\"#alamat_with_icon_title\" data-toggle=\"tab\">
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
                        <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"home_with_icon_title\">
                           <form method=\"POST\" id=\"form_add_karyawan\">
                              <div class=\"row\">
                                 <div class=\"col-sm-8\">
                                    <b>Nama Guru / Karyawan</b>
                                    <div class=\"form-group\">
                                       <div class=\"form-line\">
                                          <input name=\"nama_guru\" type=\"text\" class=\"form-control\" />
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
        // line 82
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
                                    <b>Status</b>
                                    <select name=\"statusnikah\" class=\"form-control show-tick\">
                                       <option value=\"Bujang\">Bujang</option>
                                       <option value=\"Menikah\">Menikah</option>
                                       <option value=\"Janda\">Janda</option>
                                       <option value=\"Duda\">Duda</option>
                                    </select>
                                 </div>
                              </div>

                              <div class=\"row\">
                                 <div class=\"col-sm-4\">
                                    <b>Pendidikan</b>
                                    <div class=\"form-group\">
                                       <div class=\"form-line\">
                                          <select name=\"pendidikanterakhir\" class=\"form-control show-tick\">
                                             <option value=\"SD\">SD</option>
                                             <option value=\"SLTP\">SLTP</option>
                                             <option value=\"SLTA\">SLTA</option>
                                             <option value=\"D1-D3\">D1-D3</option>
                                             <option value=\"S1\">S1</option>
                                             <option value=\"S2\">S2</option>
                                             <option value=\"S3\">S3</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <div class=\"col-sm-4\">
                                    <b>Jabatan</b>
                                    <div class=\"form-group\">
                                       <div class=\"form-line\">
                                          <input name=\"jabatan\" type=\"text\" class=\"form-control\" />
                                       </div>
                                    </div>
                                 </div>
                                 <div class=\"col-sm-4\">
                                    <b>No HP</b>
                                    <div class=\"form-group\">
                                       <div class=\"form-line\">
                                          <input name=\"nohp1\" type=\"text\" class=\"form-control\" />
                                       </div>
                                    </div>
                                 </div>
                                 <div class=\"col-sm-12\">
                                    <div class=\"form-group\">
                                       <input type=\"hidden\" name=\"";
        // line 155
        echo twig_escape_filter($this->env, ($context["csrf_name"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["csrf_hash"] ?? null), "html", null, true);
        echo "\" style=\"display: none\">
                                       <button id=\"btnbiodata\" class=\"btn btn-primary waves-effect\" type=\"submit\">Simpan Data</button>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>

                        ";
        // line 163
        $this->loadTemplate("karyawan/alamatv.twig", "karyawan/karyawanv.twig", 163)->display($context);
        // line 164
        echo "                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- #END# Tabs With Icon Title -->
         <!-- CPU Usage -->
   </div>

";
    }

    // line 175
    public function block_custom_js($context, array $blocks = array())
    {
        // line 176
        echo "
   ";
        // line 177
        $this->loadTemplate("layouts/form-validation.twig", "karyawan/karyawanv.twig", 177)->display($context);
        // line 178
        echo "
";
    }

    public function getTemplateName()
    {
        return "karyawan/karyawanv.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 178,  222 => 177,  219 => 176,  216 => 175,  203 => 164,  201 => 163,  188 => 155,  112 => 82,  32 => 4,  29 => 3,  11 => 1,);
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
                        Pengisian Data Guru / Karyawan
                     </h2>
                  </div>
                  <div class=\"body\">
                     <!-- Nav tabs -->
                     <ul class=\"nav nav-tabs\" role=\"tablist\">
                        <!--                                 <li role=\"presentation\" class=\"active\">
                           <a href=\"#awal\" data-toggle=\"tab\">
                           <i class=\"material-icons\">home</i> Registrasi
                           </a>
                           </li>   -->
                           <li role=\"presentation\" class=\"active\">
                              <a href=\"#home_with_icon_title\" data-toggle=\"tab\">
                                 <i class=\"material-icons\">perm_identity</i> Biodata
                              </a>
                           </li>
                           <!-- <li role=\"presentation\">
                              <a href=\"#profile_with_icon_title\" data-toggle=\"tab\">
                              <i class=\"material-icons\">face</i> Ayah
                              </a>
                              </li>
                              <li role=\"presentation\">
                              <a href=\"#messages_with_icon_title\" data-toggle=\"tab\">
                              <i class=\"material-icons\">pregnant_woman</i> Ibu
                              </a>
                              </li> -->
                              <li role=\"presentation\">
                                 <a href=\"#alamat_with_icon_title\" data-toggle=\"tab\">
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
                        <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"home_with_icon_title\">
                           <form method=\"POST\" id=\"form_add_karyawan\">
                              <div class=\"row\">
                                 <div class=\"col-sm-8\">
                                    <b>Nama Guru / Karyawan</b>
                                    <div class=\"form-group\">
                                       <div class=\"form-line\">
                                          <input name=\"nama_guru\" type=\"text\" class=\"form-control\" />
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
                                    <b>Status</b>
                                    <select name=\"statusnikah\" class=\"form-control show-tick\">
                                       <option value=\"Bujang\">Bujang</option>
                                       <option value=\"Menikah\">Menikah</option>
                                       <option value=\"Janda\">Janda</option>
                                       <option value=\"Duda\">Duda</option>
                                    </select>
                                 </div>
                              </div>

                              <div class=\"row\">
                                 <div class=\"col-sm-4\">
                                    <b>Pendidikan</b>
                                    <div class=\"form-group\">
                                       <div class=\"form-line\">
                                          <select name=\"pendidikanterakhir\" class=\"form-control show-tick\">
                                             <option value=\"SD\">SD</option>
                                             <option value=\"SLTP\">SLTP</option>
                                             <option value=\"SLTA\">SLTA</option>
                                             <option value=\"D1-D3\">D1-D3</option>
                                             <option value=\"S1\">S1</option>
                                             <option value=\"S2\">S2</option>
                                             <option value=\"S3\">S3</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <div class=\"col-sm-4\">
                                    <b>Jabatan</b>
                                    <div class=\"form-group\">
                                       <div class=\"form-line\">
                                          <input name=\"jabatan\" type=\"text\" class=\"form-control\" />
                                       </div>
                                    </div>
                                 </div>
                                 <div class=\"col-sm-4\">
                                    <b>No HP</b>
                                    <div class=\"form-group\">
                                       <div class=\"form-line\">
                                          <input name=\"nohp1\" type=\"text\" class=\"form-control\" />
                                       </div>
                                    </div>
                                 </div>
                                 <div class=\"col-sm-12\">
                                    <div class=\"form-group\">
                                       <input type=\"hidden\" name=\"{{ csrf_name }}\" value=\"{{ csrf_hash }}\" style=\"display: none\">
                                       <button id=\"btnbiodata\" class=\"btn btn-primary waves-effect\" type=\"submit\">Simpan Data</button>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>

                        {% include 'karyawan/alamatv.twig' %}
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- #END# Tabs With Icon Title -->
         <!-- CPU Usage -->
   </div>

{% endblock %}

{% block custom_js %}

   {% include 'layouts/form-validation.twig' %}

{% endblock %}
", "karyawan/karyawanv.twig", "/home/sipy1897/public_html/demo/apliku/views/karyawan/karyawanv.twig");
    }
}
