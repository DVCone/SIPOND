<?php

/* siswa/datalist.twig */
class __TwigTemplate_e9c3c342636909bf4e5eef31bdcaa9e4b52f4443e78bffd09aedd7a8d3582e17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/master_layouts.twig", "siswa/datalist.twig", 1);
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
   <div class=\"block-header\">

   </div>

   <div class=\"row clearfix\">
      <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
         <div class=\"card\">
            <div class=\"body\">
               <div class=\"block-header\">
                  <button type=\"button\" class=\"ml-auto btn btn-info waves-effect m-r-20\" data-toggle=\"modal\" data-target=\"#search_date\">Cari Data</button> 
                  <h2 class=\"text-center\">Laporan Data Siswa</h2>
               </div>
               <div class=\"table-responsive\">
                  <table class=\"table table-bordered table-striped table-hover\" id=\"data_siswa\">
                     <thead>
                        <tr>
                           <th>Foto</th>
                           <th>NIS</th>
                           <th>Nama Siswa</th>
                           <th>Kelas</th>
                           <th>Nama Ayah</th>
                           <th>Nama Ibu</th>
                           <th>Telephon</th>
                           <th>Hapus</th>
                        </tr>
                     </thead>

                     <tbody id=\"show_data\">


                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div id=\"search_date\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">
   <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
         <div class=\"modal-header\">
            <h4 class=\"modal-title\">Search Data By Kelas</h4>
         </div>
         <div class=\"modal-body\">
            <form method=\"post\" id=\"sort_siswa\">
               <div class=\"row clearfix\">
                  <div class=\"col-sm-6\">
                     <div class=\"form-group\">
                        <div class=\"form-line\">
                           <select id=\"kodekelas\" name=\"kodekelas\">
                              <option value=\"\"></option>
                              <option value=\"*\">Semua Kelas</option>
                              ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kelas"]) ? $context["kelas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 61
            echo "                              <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "namakelas", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "namakelas", array()), "html", null, true);
            echo "</option>
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                           </select>
                        </div>
                     </div>
                  </div>
               </div>
               <input type=\"hidden\" name=\"";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["csrf_name"]) ? $context["csrf_name"] : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["csrf_hash"]) ? $context["csrf_hash"] : null), "html", null, true);
        echo "\">
            </form>
         </div>
         <div class=\"modal-footer\">
            <button id=\"search_data_siswa\" class=\"btn btn-link waves-effect\" type=\"button\">UPDATE</button>
            <button class=\"btn btn-link waves-effect\" type=\"button\" data-dismiss=\"modal\">CLOSE</button>
         </div>
      </div>

   </div>
</div>

<div id=\"modal_update_biodata_siswa\" class=\"modal fade\" role=\"dialog\">
   <div class=\"modal-dialog\">

      <!-- Modal content-->
      <div class=\"modal-content\">
         <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            <h2 class=\"modal-title\" id=\"nis_siswa\"></h4>
         </div>

         <div class=\"modal-body\"> 
            <!-- Nav tabs -->
            <ul class=\"nav nav-tabs tab-nav-right\" role=\"tablist\">
               <li role=\"presentation\" class=\"active\"><a href=\"#biodatasiswa\" data-toggle=\"tab\">SISWA</a></li>
               <li role=\"presentation\"><a href=\"#biodataayah\" data-toggle=\"tab\">AYAH</a></li>
               <li role=\"presentation\"><a href=\"#biodataibu\" data-toggle=\"tab\">IBU</a></li>
               <li role=\"presentation\"><a href=\"#biodataalamat\" data-toggle=\"tab\">ALAMAT</a></li>
            </ul>

            <!-- Tab panes -->
            <form method=\"POST\" id=\"update_biodata_siswa\" enctype=\"multipart/form-data\">
               <div class=\"tab-content\" style=\"padding: 15px 0;\">
                  <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"biodatasiswa\">
                     <div class=\"row\">
                        <div class=\"col-sm-6\">
                           <b>Foto Siswa</b>
                           <div class=\"form-group\">
                              <label for=\"foto_siswa\">
                                 <img id=\"foto_biodata_siswa\" name=\"foto_biodata_siswa\" src=\"";
        // line 108
        echo twig_escape_filter($this->env, base_url("assets/fotosiswa/no-avatar.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"250\" height=\"250\" class=\"img-thumbnail\">
                              </label>
                              <span>*File Harus: jpg atau png, Maksimal 1 MB </span>
                              <input type=\"file\" class=\"form-control-file d-none\" name=\"foto_siswa\" id=\"foto_siswa\" style=\"display: none;\"/>
                           </div>
                        </div>
                        <div class=\"col-sm-6\">
                           <div class=\"col-sm-12\">
                              <b>Nama Siswa</b>
                              <div class=\"form-group\">
                                 <div class=\"form-line\">
                                    <input id=\"namasiswa\" name=\"namasiswa\" type=\"text\" class=\"form-control\" />
                                 </div>
                              </div>
                           </div>

                           <input type=\"hidden\" name=\"nis\" id=\"nis\"/>

                           <div class=\"col-sm-12\">
                              <b>Kota Lahir</b>
                              <div class=\"form-group\">
                                 <div class=\"form-line\">
                                    <input id=\"kotalahir\" name=\"kotalahir\" type=\"text\" class=\"form-control\" />
                                 </div>
                              </div>
                           </div>
                           <div class=\"col-sm-12\">
                              <b>Tanggal Lahir</b>
                              <div class=\"form-group\">
                                 <input type=\"text\" class=\"form-control\" name=\"tanggallahir\" id=\"tanggalInput\" value=\"";
        // line 137
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"  required />
                              </div>
                           </div>
                           <div class=\"col-sm-12\">
                              <b>Jenis Kelamin</b>
                              <div class=\"form-group\">
                                 <select id=\"jeniskelamin\" name=\"jeniskelamin\" class=\"form-control show-tick\">
                                    <option value=\"Pria\">Pria</option>
                                    <option value=\"Wanita\">Wanita</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class=\"row\">
                        <div class=\"col-sm-4\">
                           <b>Golongan Darah</b>
                           <div class=\"form-group\">
                              <select id=\"golongandarah\" name=\"golongandarah\" class=\"form-control show-tick\">
                                 <option value=\"A\">A</option>
                                 <option value=\"B\">B</option>
                                 <option value=\"AB\">AB</option>
                                 <option value=\"O\">O</option>
                              </select>
                           </div>
                        </div>

                        <div class=\"col-sm-4\">
                           <b>Anak Ke</b>
                           <div class=\"input-group spinner\" data-trigger=\"spinner\">
                              <div class=\"form-line\">
                                 <input id=\"anakke\" name=\"anakke\" type=\"text\" class=\"form-control text-center\" value=\"1\" data-rule=\"quantity\">
                              </div>
                              <span class=\"input-group-addon\">
                                 <a href=\"javascript:;\" class=\"spin-up\" data-spin=\"up\"><i class=\"glyphicon glyphicon-chevron-up\"></i></a>
                                 <a href=\"javascript:;\" class=\"spin-down\" data-spin=\"down\"><i class=\"glyphicon glyphicon-chevron-down\"></i></a>
                              </span>
                           </div>
                        </div>

                        <div class=\"col-sm-4\">
                           <b>Kelas</b>
                           <div class=\"form-group\">
                              <select name=\"kelas\" id=\"kelas\" class=\"form-control show-tick\" data-live-search=\"true\">
                                 ";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kelas"]) ? $context["kelas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 183
            echo "                                 <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "namakelas", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "namakelas", array()), "html", null, true);
            echo "</option>
                                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "                              </select>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"biodataayah\">
                     <div class=\"row\">
                        <div class=\"col-sm-3\">
                           <b>No KK</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"nokk\" name=\"nokk\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-3\">
                           <b>No KTP Ayah</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"noktpayah\" name=\"noktpayah\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-6\">
                           <b>Nama Ayah</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"namaayah\" name=\"namaayah\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                     </div>
                        <!-- Habis 12-->
                        <div class=\"row\">
                           <div class=\"col-sm-6\">
                              <b>Tempat Tanggal Lahir Ayah</b>
                              <div class=\"form-group\">
                                 <div class=\"form-line\">
                                    <input id=\"ttlayah\" name=\"ttlayah\" type=\"text\" class=\"form-control\" />
                                 </div>
                              </div>
                           </div>
                           <div class=\"col-sm-6\">
                              <b>Email</b>
                              <div class=\"form-group\">
                                 <div class=\"form-line\">
                                    <input id=\"email\" name=\"email\" type=\"text\" class=\"form-control email\" placeholder=\"Ex: bapakibu@contohemail.web.id\">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Habis 12-->
                        <div class=\"row\">
                           <div class=\"col-sm-4\">
                              <b>Pendidikan Ayah</b>
                              <div class=\"form-group\">
                                 <div class=\"form-line\">
                                 <select id=\"pendidikanayah\" name=\"pendidikanayah\" class=\"form-control show-tick\">
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
                              <b>Pekerjaan Ayah</b>
                              <div class=\"form-group\">
                                 <div class=\"form-line\">
                                    <input id=\"pekerjaanayah\" name=\"pekerjaanayah\" type=\"text\" class=\"form-control\" />
                                 </div>
                              </div>
                           </div>
                           <div class=\"col-sm-4\">
                              <b>Penghasilan Ayah</b>
                              <div class=\"form-group\">
                                 <div class=\"form-line\">
                                    <input id=\"gajiayah\" name=\"gajiayah\" type=\"text\" class=\"form-control money-dollar\" placeholder=\"Ex: 99,99 \$\">
                                 </div>
                              </div>
                           </div>
                        </div>

                  </div>
                  <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"biodataibu\">
                     <div class=\"row\">
                        <div class=\"col-sm-6\">
                           <b>No KTP ibu</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"noktpibu\" name=\"noktpibu\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-6\">
                           <b>Nama ibu</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"namaibu\" name=\"namaibu\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-6\">
                           <b>Tempat Tanggal Lahir ibu</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"ttlibu\" name=\"ttlibu\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-6\">
                           <b>Pendidikan ibu</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <select id=\"pendidikanibu\" name=\"pendidikanibu\" class=\"form-control show-tick\">
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
                        <div class=\"col-sm-6\">
                           <b>Pekerjaan ibu</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"pekerjaanibu\" name=\"pekerjaanibu\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-6\">
                           <b>Penghasilan ibu</b>
                           <div class=\"input-group\">
                              <div class=\"form-line\">
                                 <input id=\"gajiibu\" name=\"gajiibu\" type=\"text\" class=\"form-control money-dollar\" placeholder=\"Ex: 99,99 \$\">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"biodataalamat\">
                     <div class=\"row\">
                        <div class=\"col-sm-6\">
                           <b>Nomor telephon</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"telephon\" name=\"telephon\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-6\">
                           <b>Alamat</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"alamat\" name=\"alamat\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class=\"row\">
                        <div class=\"col-sm-6\">
                           <b>Kelurahan</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"kelurahan\" name=\"kelurahan\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-6\">
                           <b>Kecamatan</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"kecamatan\" name=\"kecamatan\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class=\"row\">
                        <div class=\"col-sm-6\">
                           <b>Kota</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"alamatkota\" name=\"alamatkota\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-6\">
                           <b>Provinsi</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"provinsi\" name=\"provinsi\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                     </div>

                  </div>
               </div>

         </div>


         <div class=\"modal-footer\">
            <div class=\"progress\" style=\"display: none;\" id=\"progress\">
               <div id=\"progress-bar\" class=\"progress-bar bg-teal progress-bar-striped\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemax=\"100\"></div>
            </div>
            <input type=\"hidden\" id=\"csrf\" name=\"";
        // line 401
        echo twig_escape_filter($this->env, (isset($context["csrf_name"]) ? $context["csrf_name"] : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["csrf_hash"]) ? $context["csrf_hash"] : null), "html", null, true);
        echo "\">
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Batal</button>

            <input type=\"submit\" id=\"submit_update_biodata_siswa\" name=\"submit_update_biodata_siswa\" value=\"Update\" class=\"btn btn-primary waves-effect\">
            </form>
         </div>

      </div>

   </div>
</div>
";
    }

    // line 414
    public function block_custom_js($context, array $blocks = array())
    {
        echo " 

";
        // line 416
        $this->loadTemplate("layouts/datatable.twig", "siswa/datalist.twig", 416)->display($context);
        // line 417
        echo "
";
        // line 418
        $this->loadTemplate("layouts/form-validation.twig", "siswa/datalist.twig", 418)->display($context);
        // line 419
        echo "
";
    }

    public function getTemplateName()
    {
        return "siswa/datalist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  501 => 419,  499 => 418,  496 => 417,  494 => 416,  488 => 414,  470 => 401,  252 => 185,  241 => 183,  237 => 182,  189 => 137,  157 => 108,  112 => 68,  105 => 63,  94 => 61,  90 => 60,  32 => 4,  29 => 3,  11 => 1,);
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
   <div class=\"block-header\">

   </div>

   <div class=\"row clearfix\">
      <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
         <div class=\"card\">
            <div class=\"body\">
               <div class=\"block-header\">
                  <button type=\"button\" class=\"ml-auto btn btn-info waves-effect m-r-20\" data-toggle=\"modal\" data-target=\"#search_date\">Cari Data</button> 
                  <h2 class=\"text-center\">Laporan Data Siswa</h2>
               </div>
               <div class=\"table-responsive\">
                  <table class=\"table table-bordered table-striped table-hover\" id=\"data_siswa\">
                     <thead>
                        <tr>
                           <th>Foto</th>
                           <th>NIS</th>
                           <th>Nama Siswa</th>
                           <th>Kelas</th>
                           <th>Nama Ayah</th>
                           <th>Nama Ibu</th>
                           <th>Telephon</th>
                           <th>Hapus</th>
                        </tr>
                     </thead>

                     <tbody id=\"show_data\">


                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div id=\"search_date\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">
   <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
         <div class=\"modal-header\">
            <h4 class=\"modal-title\">Search Data By Kelas</h4>
         </div>
         <div class=\"modal-body\">
            <form method=\"post\" id=\"sort_siswa\">
               <div class=\"row clearfix\">
                  <div class=\"col-sm-6\">
                     <div class=\"form-group\">
                        <div class=\"form-line\">
                           <select id=\"kodekelas\" name=\"kodekelas\">
                              <option value=\"\"></option>
                              <option value=\"*\">Semua Kelas</option>
                              {% for m in kelas %}
                              <option value=\"{{ m.namakelas }}\">{{ m.namakelas }}</option>
                              {% endfor %}
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
               <input type=\"hidden\" name=\"{{ csrf_name }}\" value=\"{{ csrf_hash }}\">
            </form>
         </div>
         <div class=\"modal-footer\">
            <button id=\"search_data_siswa\" class=\"btn btn-link waves-effect\" type=\"button\">UPDATE</button>
            <button class=\"btn btn-link waves-effect\" type=\"button\" data-dismiss=\"modal\">CLOSE</button>
         </div>
      </div>

   </div>
</div>

<div id=\"modal_update_biodata_siswa\" class=\"modal fade\" role=\"dialog\">
   <div class=\"modal-dialog\">

      <!-- Modal content-->
      <div class=\"modal-content\">
         <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            <h2 class=\"modal-title\" id=\"nis_siswa\"></h4>
         </div>

         <div class=\"modal-body\"> 
            <!-- Nav tabs -->
            <ul class=\"nav nav-tabs tab-nav-right\" role=\"tablist\">
               <li role=\"presentation\" class=\"active\"><a href=\"#biodatasiswa\" data-toggle=\"tab\">SISWA</a></li>
               <li role=\"presentation\"><a href=\"#biodataayah\" data-toggle=\"tab\">AYAH</a></li>
               <li role=\"presentation\"><a href=\"#biodataibu\" data-toggle=\"tab\">IBU</a></li>
               <li role=\"presentation\"><a href=\"#biodataalamat\" data-toggle=\"tab\">ALAMAT</a></li>
            </ul>

            <!-- Tab panes -->
            <form method=\"POST\" id=\"update_biodata_siswa\" enctype=\"multipart/form-data\">
               <div class=\"tab-content\" style=\"padding: 15px 0;\">
                  <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"biodatasiswa\">
                     <div class=\"row\">
                        <div class=\"col-sm-6\">
                           <b>Foto Siswa</b>
                           <div class=\"form-group\">
                              <label for=\"foto_siswa\">
                                 <img id=\"foto_biodata_siswa\" name=\"foto_biodata_siswa\" src=\"{{ base_url('assets/fotosiswa/no-avatar.jpg') }}\" alt=\"\" width=\"250\" height=\"250\" class=\"img-thumbnail\">
                              </label>
                              <span>*File Harus: jpg atau png, Maksimal 1 MB </span>
                              <input type=\"file\" class=\"form-control-file d-none\" name=\"foto_siswa\" id=\"foto_siswa\" style=\"display: none;\"/>
                           </div>
                        </div>
                        <div class=\"col-sm-6\">
                           <div class=\"col-sm-12\">
                              <b>Nama Siswa</b>
                              <div class=\"form-group\">
                                 <div class=\"form-line\">
                                    <input id=\"namasiswa\" name=\"namasiswa\" type=\"text\" class=\"form-control\" />
                                 </div>
                              </div>
                           </div>

                           <input type=\"hidden\" name=\"nis\" id=\"nis\"/>

                           <div class=\"col-sm-12\">
                              <b>Kota Lahir</b>
                              <div class=\"form-group\">
                                 <div class=\"form-line\">
                                    <input id=\"kotalahir\" name=\"kotalahir\" type=\"text\" class=\"form-control\" />
                                 </div>
                              </div>
                           </div>
                           <div class=\"col-sm-12\">
                              <b>Tanggal Lahir</b>
                              <div class=\"form-group\">
                                 <input type=\"text\" class=\"form-control\" name=\"tanggallahir\" id=\"tanggalInput\" value=\"{{ \"now\"|date(\"Y-m-d\") }}\"  required />
                              </div>
                           </div>
                           <div class=\"col-sm-12\">
                              <b>Jenis Kelamin</b>
                              <div class=\"form-group\">
                                 <select id=\"jeniskelamin\" name=\"jeniskelamin\" class=\"form-control show-tick\">
                                    <option value=\"Pria\">Pria</option>
                                    <option value=\"Wanita\">Wanita</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class=\"row\">
                        <div class=\"col-sm-4\">
                           <b>Golongan Darah</b>
                           <div class=\"form-group\">
                              <select id=\"golongandarah\" name=\"golongandarah\" class=\"form-control show-tick\">
                                 <option value=\"A\">A</option>
                                 <option value=\"B\">B</option>
                                 <option value=\"AB\">AB</option>
                                 <option value=\"O\">O</option>
                              </select>
                           </div>
                        </div>

                        <div class=\"col-sm-4\">
                           <b>Anak Ke</b>
                           <div class=\"input-group spinner\" data-trigger=\"spinner\">
                              <div class=\"form-line\">
                                 <input id=\"anakke\" name=\"anakke\" type=\"text\" class=\"form-control text-center\" value=\"1\" data-rule=\"quantity\">
                              </div>
                              <span class=\"input-group-addon\">
                                 <a href=\"javascript:;\" class=\"spin-up\" data-spin=\"up\"><i class=\"glyphicon glyphicon-chevron-up\"></i></a>
                                 <a href=\"javascript:;\" class=\"spin-down\" data-spin=\"down\"><i class=\"glyphicon glyphicon-chevron-down\"></i></a>
                              </span>
                           </div>
                        </div>

                        <div class=\"col-sm-4\">
                           <b>Kelas</b>
                           <div class=\"form-group\">
                              <select name=\"kelas\" id=\"kelas\" class=\"form-control show-tick\" data-live-search=\"true\">
                                 {% for m in kelas %}
                                 <option value=\"{{ m.namakelas }}\">{{ m.namakelas }}</option>
                                 {% endfor %}
                              </select>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"biodataayah\">
                     <div class=\"row\">
                        <div class=\"col-sm-3\">
                           <b>No KK</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"nokk\" name=\"nokk\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-3\">
                           <b>No KTP Ayah</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"noktpayah\" name=\"noktpayah\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-6\">
                           <b>Nama Ayah</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"namaayah\" name=\"namaayah\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                     </div>
                        <!-- Habis 12-->
                        <div class=\"row\">
                           <div class=\"col-sm-6\">
                              <b>Tempat Tanggal Lahir Ayah</b>
                              <div class=\"form-group\">
                                 <div class=\"form-line\">
                                    <input id=\"ttlayah\" name=\"ttlayah\" type=\"text\" class=\"form-control\" />
                                 </div>
                              </div>
                           </div>
                           <div class=\"col-sm-6\">
                              <b>Email</b>
                              <div class=\"form-group\">
                                 <div class=\"form-line\">
                                    <input id=\"email\" name=\"email\" type=\"text\" class=\"form-control email\" placeholder=\"Ex: bapakibu@contohemail.web.id\">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Habis 12-->
                        <div class=\"row\">
                           <div class=\"col-sm-4\">
                              <b>Pendidikan Ayah</b>
                              <div class=\"form-group\">
                                 <div class=\"form-line\">
                                 <select id=\"pendidikanayah\" name=\"pendidikanayah\" class=\"form-control show-tick\">
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
                              <b>Pekerjaan Ayah</b>
                              <div class=\"form-group\">
                                 <div class=\"form-line\">
                                    <input id=\"pekerjaanayah\" name=\"pekerjaanayah\" type=\"text\" class=\"form-control\" />
                                 </div>
                              </div>
                           </div>
                           <div class=\"col-sm-4\">
                              <b>Penghasilan Ayah</b>
                              <div class=\"form-group\">
                                 <div class=\"form-line\">
                                    <input id=\"gajiayah\" name=\"gajiayah\" type=\"text\" class=\"form-control money-dollar\" placeholder=\"Ex: 99,99 \$\">
                                 </div>
                              </div>
                           </div>
                        </div>

                  </div>
                  <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"biodataibu\">
                     <div class=\"row\">
                        <div class=\"col-sm-6\">
                           <b>No KTP ibu</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"noktpibu\" name=\"noktpibu\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-6\">
                           <b>Nama ibu</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"namaibu\" name=\"namaibu\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-6\">
                           <b>Tempat Tanggal Lahir ibu</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"ttlibu\" name=\"ttlibu\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-6\">
                           <b>Pendidikan ibu</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <select id=\"pendidikanibu\" name=\"pendidikanibu\" class=\"form-control show-tick\">
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
                        <div class=\"col-sm-6\">
                           <b>Pekerjaan ibu</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"pekerjaanibu\" name=\"pekerjaanibu\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-6\">
                           <b>Penghasilan ibu</b>
                           <div class=\"input-group\">
                              <div class=\"form-line\">
                                 <input id=\"gajiibu\" name=\"gajiibu\" type=\"text\" class=\"form-control money-dollar\" placeholder=\"Ex: 99,99 \$\">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"biodataalamat\">
                     <div class=\"row\">
                        <div class=\"col-sm-6\">
                           <b>Nomor telephon</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"telephon\" name=\"telephon\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-6\">
                           <b>Alamat</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"alamat\" name=\"alamat\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class=\"row\">
                        <div class=\"col-sm-6\">
                           <b>Kelurahan</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"kelurahan\" name=\"kelurahan\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-6\">
                           <b>Kecamatan</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"kecamatan\" name=\"kecamatan\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class=\"row\">
                        <div class=\"col-sm-6\">
                           <b>Kota</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"alamatkota\" name=\"alamatkota\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-6\">
                           <b>Provinsi</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"provinsi\" name=\"provinsi\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                     </div>

                  </div>
               </div>

         </div>


         <div class=\"modal-footer\">
            <div class=\"progress\" style=\"display: none;\" id=\"progress\">
               <div id=\"progress-bar\" class=\"progress-bar bg-teal progress-bar-striped\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemax=\"100\"></div>
            </div>
            <input type=\"hidden\" id=\"csrf\" name=\"{{ csrf_name }}\" value=\"{{ csrf_hash }}\">
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Batal</button>

            <input type=\"submit\" id=\"submit_update_biodata_siswa\" name=\"submit_update_biodata_siswa\" value=\"Update\" class=\"btn btn-primary waves-effect\">
            </form>
         </div>

      </div>

   </div>
</div>
{% endblock %} 

{% block custom_js %} 

{% include 'layouts/datatable.twig' %}

{% include 'layouts/form-validation.twig' %}

{% endblock %}
", "siswa/datalist.twig", "/home/sipy1897/public_html/demo/apliku/views/siswa/datalist.twig");
    }
}
