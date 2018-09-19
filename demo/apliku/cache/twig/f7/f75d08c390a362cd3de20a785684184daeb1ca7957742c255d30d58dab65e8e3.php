<?php

/* keuangan/laporan/jurnal.twig */
class __TwigTemplate_ec10939c3d42299db427e7014d22c280ab8fbd33ac92d25a99f1687182697deb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/master_layouts.twig", "keuangan/laporan/jurnal.twig", 1);
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
                  <h2 class=\"text-center\">Laporan Jurnal</h2>
               </div>

               <div class=\"table-responsive\">
                  <table class=\"table table-bordered table-striped table-hover dataTable\" id=\"data_jurnal\">
                     <thead>
                        <tr>
                           <th>Nomor</th>
                           <th>Tanggal</th>
                           <th>No Nota</th>
                           <th>Rekening</th>
                           <th>Debet</th>
                           <th>Kredit</th>
                           <th>Keterangan</th>
                           <th>Pengguna</th>
                        </tr>
                     </thead>

                     <tbody id=\"show_data\">
                        <?php \$i = 1 ?>
                        <?php foreach(\$data as \$m): ?>
                        <tr>
                           <td><?php echo \$m->tanggal ?></a>   </td>
                           <td><?php echo \$m->nonota ?></td>
                           <td><?php echo \$m->koderekening.' - '.\$m->namarekening ?></td>
                           <td align=\"right\"><?php echo number_format(\$m->debet,0,\",\",\".\") ?></td>
                           <td align=\"right\"><?php echo number_format(\$m->kredit,0,\",\",\".\") ?></td>
                           <td><?php echo \$m->keterangan ?></td>
                           <td><?php echo \$m->pengguna ?></td>
                        </tr>
                        <?php endforeach ?>

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
            <h4 class=\"modal-title\">Search Data By Date Range</h4>
         </div>
         <div class=\"modal-body\">
            <form method=\"post\" id=\"sort_jurnal\">
               <div class=\"row clearfix\">
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
        // line 82
        echo twig_escape_filter($this->env, (isset($context["csrf_name"]) ? $context["csrf_name"] : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["csrf_hash"]) ? $context["csrf_hash"] : null), "html", null, true);
        echo "\">
            </form>
         </div>
         <div class=\"modal-footer\">
            <button id=\"search_data_jurnal\" class=\"btn btn-link waves-effect\" type=\"button\">UPDATE</button>
            <button class=\"btn btn-link waves-effect\" type=\"button\" data-dismiss=\"modal\">CLOSE</button>
         </div>
      </div>

   </div>
</div>
";
    }

    // line 95
    public function block_custom_js($context, array $blocks = array())
    {
        // line 96
        echo "
";
        // line 97
        $this->loadTemplate("layouts/datatable.twig", "keuangan/laporan/jurnal.twig", 97)->display($context);
        // line 98
        echo "
";
    }

    public function getTemplateName()
    {
        return "keuangan/laporan/jurnal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 98,  136 => 97,  133 => 96,  130 => 95,  112 => 82,  32 => 4,  29 => 3,  11 => 1,);
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
                  <h2 class=\"text-center\">Laporan Jurnal</h2>
               </div>

               <div class=\"table-responsive\">
                  <table class=\"table table-bordered table-striped table-hover dataTable\" id=\"data_jurnal\">
                     <thead>
                        <tr>
                           <th>Nomor</th>
                           <th>Tanggal</th>
                           <th>No Nota</th>
                           <th>Rekening</th>
                           <th>Debet</th>
                           <th>Kredit</th>
                           <th>Keterangan</th>
                           <th>Pengguna</th>
                        </tr>
                     </thead>

                     <tbody id=\"show_data\">
                        <?php \$i = 1 ?>
                        <?php foreach(\$data as \$m): ?>
                        <tr>
                           <td><?php echo \$m->tanggal ?></a>   </td>
                           <td><?php echo \$m->nonota ?></td>
                           <td><?php echo \$m->koderekening.' - '.\$m->namarekening ?></td>
                           <td align=\"right\"><?php echo number_format(\$m->debet,0,\",\",\".\") ?></td>
                           <td align=\"right\"><?php echo number_format(\$m->kredit,0,\",\",\".\") ?></td>
                           <td><?php echo \$m->keterangan ?></td>
                           <td><?php echo \$m->pengguna ?></td>
                        </tr>
                        <?php endforeach ?>

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
            <h4 class=\"modal-title\">Search Data By Date Range</h4>
         </div>
         <div class=\"modal-body\">
            <form method=\"post\" id=\"sort_jurnal\">
               <div class=\"row clearfix\">
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
            <button id=\"search_data_jurnal\" class=\"btn btn-link waves-effect\" type=\"button\">UPDATE</button>
            <button class=\"btn btn-link waves-effect\" type=\"button\" data-dismiss=\"modal\">CLOSE</button>
         </div>
      </div>

   </div>
</div>
{% endblock %}

{% block custom_js %}

{% include 'layouts/datatable.twig' %}

{% endblock %}
", "keuangan/laporan/jurnal.twig", "/home/sipy1897/public_html/demo/apliku/views/keuangan/laporan/jurnal.twig");
    }
}
