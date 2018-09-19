<?php

/* kesehatan/datalist.twig */
class __TwigTemplate_0e7978c38f37edb7aa9c8f184629c6e23f520c3048c0fbe48c5ca6f90e6a57f2 extends Twig_Template
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
        echo "<button type=\"button\" class=\"ml-auto btn btn-info waves-effect m-r-20\" data-toggle=\"modal\" data-target=\"#search_date\">Cari Data</button>
<!--<button id=\"daterange-btn\" type=\"button\" class=\"btn btn-primary\">-->
<!--<i class=\"material-icons\">calendar_today</i>-->
<!--<span>-->
 <!--Date Range Picker-->
<!--</span>-->
<!--</button>-->
<br/>
<br/>

<div class=\"table-responsive\">
   <table class=\"table table-bordered table-striped table-hover dataTable\" id=\"data_kesehatan\">
      <thead>
         <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Tanggal</th>
            <th>Keluhan</th>
            <th>Obat</th>
            <th>Catatan</th>
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
            <form method=\"post\" id=\"sort_kesehatan\">
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
                           <input type=\"text\" class=\"form-control datepicker\" name=\"tanggal_awal\" id=\"tanggal_awal\" placeholder=\"Tanggal Awal\">
                        </div>
                     </div>
                  </div>
                  <div class=\"col-sm-6\">
                     <div class=\"form-group\">
                        <div class=\"form-line\">
                           <input type=\"text\" class=\"form-control datepicker\" name=\"tanggal_akhir\" id=\"tanggal_akhir\" placeholder=\"Tanggal Akhir\">
                        </div>
                     </div>
                  </div>
               </div>
               <input type=\"hidden\" name=\"";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["csrf_name"]) ? $context["csrf_name"] : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["csrf_hash"]) ? $context["csrf_hash"] : null), "html", null, true);
        echo "\">
            </form>
         </div>
         <div class=\"modal-footer\">
            <button id=\"search_data_kesehatan\" class=\"btn btn-link waves-effect\" type=\"button\">UPDATE</button>
            <button class=\"btn btn-link waves-effect\" type=\"button\" data-dismiss=\"modal\">CLOSE</button>
         </div>
      </div>

   </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "kesehatan/datalist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 66,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<button type=\"button\" class=\"ml-auto btn btn-info waves-effect m-r-20\" data-toggle=\"modal\" data-target=\"#search_date\">Cari Data</button>
<!--<button id=\"daterange-btn\" type=\"button\" class=\"btn btn-primary\">-->
<!--<i class=\"material-icons\">calendar_today</i>-->
<!--<span>-->
 <!--Date Range Picker-->
<!--</span>-->
<!--</button>-->
<br/>
<br/>

<div class=\"table-responsive\">
   <table class=\"table table-bordered table-striped table-hover dataTable\" id=\"data_kesehatan\">
      <thead>
         <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Tanggal</th>
            <th>Keluhan</th>
            <th>Obat</th>
            <th>Catatan</th>
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
            <form method=\"post\" id=\"sort_kesehatan\">
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
                           <input type=\"text\" class=\"form-control datepicker\" name=\"tanggal_awal\" id=\"tanggal_awal\" placeholder=\"Tanggal Awal\">
                        </div>
                     </div>
                  </div>
                  <div class=\"col-sm-6\">
                     <div class=\"form-group\">
                        <div class=\"form-line\">
                           <input type=\"text\" class=\"form-control datepicker\" name=\"tanggal_akhir\" id=\"tanggal_akhir\" placeholder=\"Tanggal Akhir\">
                        </div>
                     </div>
                  </div>
               </div>
               <input type=\"hidden\" name=\"{{ csrf_name }}\" value=\"{{ csrf_hash }}\">
            </form>
         </div>
         <div class=\"modal-footer\">
            <button id=\"search_data_kesehatan\" class=\"btn btn-link waves-effect\" type=\"button\">UPDATE</button>
            <button class=\"btn btn-link waves-effect\" type=\"button\" data-dismiss=\"modal\">CLOSE</button>
         </div>
      </div>

   </div>
</div>
", "kesehatan/datalist.twig", "/home/sipy1897/public_html/demo/apliku/views/kesehatan/datalist.twig");
    }
}
