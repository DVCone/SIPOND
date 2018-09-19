<?php

/* mapel/datalist.twig */
class __TwigTemplate_3342f34e98ef0ccde326a49ab58e7b2493aa10acd8fd4bcd78f3bdac6feeb69d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/master_layouts.twig", "mapel/datalist.twig", 1);
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
               <div class=\"block-header\" align=\"center\"><b>Laporan Data Mata Pelajaran</b></div>
               <div class=\"table-responsive\">
                  <table class=\"table table-bordered table-striped table-hover dataTable\" id=\"data_mapel\">
                     <thead>
                        <tr>
                           <th>No Urut</th>
                           <th>Kode Mapel</th>
                           <th>Nama Pelajaran</th>
                           <th>Arabic</th>
                           <th>Kategori</th>

                           <th>Aksi</th>
                        </tr>
                     </thead>

                     <tbody id=\"show_data\">
                        <?php \$i = 1; ?>
                        <?php foreach(\$data as \$m): ?>
                        <tr>
                           <td><?php echo \$i++ ?></a>   </td>
                           <td><?php echo \$m->kodemapel ?></td>
                           <td><?php echo \$m->namamapel ?></td>
                           <td align=\"right\"><?php echo \$m->arabic ?></td>
                           <td><?php echo \$m->kategori ?></td>
                           <td></td>
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
         <div class=\"modal-body\">
            <form method=\"post\" id=\"sort_mapel\">
               
               <input type=\"hidden\" name=\"";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["csrf_name"]) ? $context["csrf_name"] : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["csrf_hash"]) ? $context["csrf_hash"] : null), "html", null, true);
        echo "\">
            </form>
         </div>
      </div>
   </div>
</div>
";
    }

    // line 65
    public function block_custom_js($context, array $blocks = array())
    {
        // line 66
        echo "
";
        // line 67
        $this->loadTemplate("layouts/datatable.twig", "mapel/datalist.twig", 67)->display($context);
        // line 68
        echo "
";
    }

    public function getTemplateName()
    {
        return "mapel/datalist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 68,  106 => 67,  103 => 66,  100 => 65,  87 => 57,  32 => 4,  29 => 3,  11 => 1,);
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
               <div class=\"block-header\" align=\"center\"><b>Laporan Data Mata Pelajaran</b></div>
               <div class=\"table-responsive\">
                  <table class=\"table table-bordered table-striped table-hover dataTable\" id=\"data_mapel\">
                     <thead>
                        <tr>
                           <th>No Urut</th>
                           <th>Kode Mapel</th>
                           <th>Nama Pelajaran</th>
                           <th>Arabic</th>
                           <th>Kategori</th>

                           <th>Aksi</th>
                        </tr>
                     </thead>

                     <tbody id=\"show_data\">
                        <?php \$i = 1; ?>
                        <?php foreach(\$data as \$m): ?>
                        <tr>
                           <td><?php echo \$i++ ?></a>   </td>
                           <td><?php echo \$m->kodemapel ?></td>
                           <td><?php echo \$m->namamapel ?></td>
                           <td align=\"right\"><?php echo \$m->arabic ?></td>
                           <td><?php echo \$m->kategori ?></td>
                           <td></td>
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
         <div class=\"modal-body\">
            <form method=\"post\" id=\"sort_mapel\">
               
               <input type=\"hidden\" name=\"{{ csrf_name }}\" value=\"{{ csrf_hash }}\">
            </form>
         </div>
      </div>
   </div>
</div>
{% endblock %}

{% block custom_js %}

{% include 'layouts/datatable.twig' %}

{% endblock %}
", "mapel/datalist.twig", "/home/sipy1897/public_html/demo/apliku/views/mapel/datalist.twig");
    }
}
