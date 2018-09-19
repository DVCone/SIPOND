<?php

/* keuangan/laporan/bukubesar.twig */
class __TwigTemplate_63b3e5850e452bce94a08b158c134176c25d7e82143cff0062d7107536b3042b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/master_layouts.twig", "keuangan/laporan/bukubesar.twig", 1);
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
                  <h2 class=\"text-center\">Laporan Buku Besar</h2>
               </div>

               <div class=\"table-responsive\">
                  <table class=\"table table-bordered table-striped table-hover dataTable\" id=\"data_bukubesar\">
                     <thead>
                        <tr>
                           <th>No</th>
                           <th>Tanggal</th>
                           <th>No Nota</th>
                           <th>Rekening</th>
                           <th>Debet</th>
                           <th>Kredit</th>
                           <th>Keterangan</th>
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
            <form method=\"post\" id=\"sort_bukubesar\">
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
                  <div class=\"col-sm-12\">
                     <div class=\"form-group\">
                        <div class=\"form-line\">
                           <select class=\"form-control\" name=\"namarekening\" id=\"namarekening\">
                              <option value=\"*\">All</option>
                              ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rekening"]) ? $context["rekening"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 84
            echo "                              <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "namarekening", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "namarekening", array()), "html", null, true);
            echo "</option>
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                              
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
               <input type=\"hidden\" name=\"";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["csrf_name"]) ? $context["csrf_name"] : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["csrf_hash"]) ? $context["csrf_hash"] : null), "html", null, true);
        echo "\">
            </form>
         </div>
         <div class=\"modal-footer\">
            <button id=\"search_data_bukubesar\" class=\"btn btn-link waves-effect\" type=\"button\">UPDATE</button>
            <button class=\"btn btn-link waves-effect\" type=\"button\" data-dismiss=\"modal\">CLOSE</button>
         </div>
      </div>

   </div>
</div>
";
    }

    // line 105
    public function block_custom_js($context, array $blocks = array())
    {
        // line 106
        echo "
";
        // line 107
        $this->loadTemplate("layouts/datatable.twig", "keuangan/laporan/bukubesar.twig", 107)->display($context);
        // line 108
        echo "
";
    }

    public function getTemplateName()
    {
        return "keuangan/laporan/bukubesar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 108,  160 => 107,  157 => 106,  154 => 105,  136 => 92,  128 => 86,  117 => 84,  113 => 83,  32 => 4,  29 => 3,  11 => 1,);
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
                  <h2 class=\"text-center\">Laporan Buku Besar</h2>
               </div>

               <div class=\"table-responsive\">
                  <table class=\"table table-bordered table-striped table-hover dataTable\" id=\"data_bukubesar\">
                     <thead>
                        <tr>
                           <th>No</th>
                           <th>Tanggal</th>
                           <th>No Nota</th>
                           <th>Rekening</th>
                           <th>Debet</th>
                           <th>Kredit</th>
                           <th>Keterangan</th>
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
            <form method=\"post\" id=\"sort_bukubesar\">
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
                  <div class=\"col-sm-12\">
                     <div class=\"form-group\">
                        <div class=\"form-line\">
                           <select class=\"form-control\" name=\"namarekening\" id=\"namarekening\">
                              <option value=\"*\">All</option>
                              {% for m in rekening %}
                              <option value=\"{{ m.namarekening }}\">{{ m.namarekening }}</option>
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
            <button id=\"search_data_bukubesar\" class=\"btn btn-link waves-effect\" type=\"button\">UPDATE</button>
            <button class=\"btn btn-link waves-effect\" type=\"button\" data-dismiss=\"modal\">CLOSE</button>
         </div>
      </div>

   </div>
</div>
{% endblock %}

{% block custom_js %}

{% include 'layouts/datatable.twig' %}

{% endblock %}
", "keuangan/laporan/bukubesar.twig", "/home/sipy1897/public_html/demo/apliku/views/keuangan/laporan/bukubesar.twig");
    }
}
