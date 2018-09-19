<?php

/* pelanggaran/datalist.twig */
class __TwigTemplate_c259d7b9741fb9f2b290c2e3f9d418364af92ddaa2c0ec77665a20ec0b46abc0 extends Twig_Template
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
        echo "
                  <button type=\"button\" class=\"ml-auto btn btn-info waves-effect m-r-20\" data-toggle=\"modal\" data-target=\"#search_date\">Cari Data</button> 
                            <br />
                            <br />
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-striped table-hover dataTable\" id=\"data_pelanggaran\">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIS</th>
                                            <th>Nama Siswa</th>
                                            <th>Kelas</th>
                                            <th>Tanggal</th>
                                            <th>Pelanggaran</th>
                                            <th>Tindakan</th>
                                            <th>Poin</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>

                                    <tbody id=\"show_data\">

                                    </tbody>
                                </table>
                            </div>
                        

<div id=\"search_date\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">
   <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
         <div class=\"modal-header\">
            <h4 class=\"modal-title\">Search Data By Date Range</h4>
         </div>
         <div class=\"modal-body\">
            <form method=\"post\" id=\"sort_pelanggaran\">
               <div class=\"row clearfix\">
               <div class=\"col-md-12\">
               <b>Nama Siswa</b>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                           <input name=\"namasiswa\" type=\"text\" class=\"form-control\">
                        </div>
                            </div>
                        </div>
                  <div class=\"col-sm-6\">
                     <div class=\"form-group\">
                        <div class=\"form-line\">
                           <input type=\"text\" class=\"form-control datepicker\"name=\"tanggal_awal\" id=\"tanggal_awal\" placeholder=\"Tanggal Awal\">
                        </div>
                     </div>
                  </div>
                  <div class=\"col-sm-6\">
                     <div class=\"form-group\">
                        <div class=\"form-line\">
                           <input type=\"text\" class=\"form-control datepicker\"name=\"tanggal_akhir\" id=\"tanggal_akhir\" placeholder=\"Tanggal Akhir\">
                        </div>
                     </div>
                  </div>
               </div>
               <input type=\"hidden\" name=\"";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["csrf_name"]) ? $context["csrf_name"] : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["csrf_hash"]) ? $context["csrf_hash"] : null), "html", null, true);
        echo "\">
            </form>
         </div>
         <div class=\"modal-footer\">
            <button id=\"search_data_pelanggaran\" class=\"btn btn-link waves-effect\" type=\"button\">UPDATE</button>
            <button class=\"btn btn-link waves-effect\" type=\"button\" data-dismiss=\"modal\">CLOSE</button>
         </div>
      </div>

   </div>
</div>";
    }

    public function getTemplateName()
    {
        return "pelanggaran/datalist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 60,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
                  <button type=\"button\" class=\"ml-auto btn btn-info waves-effect m-r-20\" data-toggle=\"modal\" data-target=\"#search_date\">Cari Data</button> 
                            <br />
                            <br />
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-striped table-hover dataTable\" id=\"data_pelanggaran\">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIS</th>
                                            <th>Nama Siswa</th>
                                            <th>Kelas</th>
                                            <th>Tanggal</th>
                                            <th>Pelanggaran</th>
                                            <th>Tindakan</th>
                                            <th>Poin</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>

                                    <tbody id=\"show_data\">

                                    </tbody>
                                </table>
                            </div>
                        

<div id=\"search_date\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">
   <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
         <div class=\"modal-header\">
            <h4 class=\"modal-title\">Search Data By Date Range</h4>
         </div>
         <div class=\"modal-body\">
            <form method=\"post\" id=\"sort_pelanggaran\">
               <div class=\"row clearfix\">
               <div class=\"col-md-12\">
               <b>Nama Siswa</b>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                           <input name=\"namasiswa\" type=\"text\" class=\"form-control\">
                        </div>
                            </div>
                        </div>
                  <div class=\"col-sm-6\">
                     <div class=\"form-group\">
                        <div class=\"form-line\">
                           <input type=\"text\" class=\"form-control datepicker\"name=\"tanggal_awal\" id=\"tanggal_awal\" placeholder=\"Tanggal Awal\">
                        </div>
                     </div>
                  </div>
                  <div class=\"col-sm-6\">
                     <div class=\"form-group\">
                        <div class=\"form-line\">
                           <input type=\"text\" class=\"form-control datepicker\"name=\"tanggal_akhir\" id=\"tanggal_akhir\" placeholder=\"Tanggal Akhir\">
                        </div>
                     </div>
                  </div>
               </div>
               <input type=\"hidden\" name=\"{{ csrf_name }}\" value=\"{{ csrf_hash }}\">
            </form>
         </div>
         <div class=\"modal-footer\">
            <button id=\"search_data_pelanggaran\" class=\"btn btn-link waves-effect\" type=\"button\">UPDATE</button>
            <button class=\"btn btn-link waves-effect\" type=\"button\" data-dismiss=\"modal\">CLOSE</button>
         </div>
      </div>

   </div>
</div>", "pelanggaran/datalist.twig", "/home/sipy1897/public_html/demo/apliku/views/pelanggaran/datalist.twig");
    }
}
