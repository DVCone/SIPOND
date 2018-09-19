<?php

/* berita/datalist.twig */
class __TwigTemplate_7c5d79d3da7f7a1ae26964b037126c6c2d4d7d244e3fcfddb13020e4da9f00a1 extends Twig_Template
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
        echo "<div class=\"table-responsive\">
   <table class=\"table table-bordered table-striped table-hover dataTable\" id=\"data_berita\">
      <thead>
         <tr>
            <th>Tanggal</th>
            <th>DiTujukan</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Tertanda</th>
            <th>Publish</th>
            <th>Hapus</th>
         </tr>
      </thead>

      <tbody id=\"show_data\">
         <?php \$i = 1 ?>
         <?php foreach(\$data as \$m): ?>
         <tr>
            <td><?php echo \$m->tanggal ?></a>   </td>
            <td><?php echo \$m->ditujukan ?></td>
            <td><?php echo \$m->judul ?></td>
            <td><?php echo \$m->isi ?></td>
            <td><?php echo \$m->pj ?></td>
            <td><?php echo \$m->tutup ?></td>
            <td align=\"center\">
               <a href=\"<?php echo base_url();?>index.php/berita/hapus/<?php echo \$m->noberita ?>\" class=\"btn btn-primary waves-effect\"> <i class=\"material-icons\">delete_forever</i></a>
            </td>
         </tr>
         <?php endforeach ?>

      </tbody>
   </table>
</div>

<div id=\"search_date\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <form method=\"post\" id=\"sort_berita\">
                    <input type=\"hidden\" name=\"";
        // line 40
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

    public function getTemplateName()
    {
        return "berita/datalist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 40,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"table-responsive\">
   <table class=\"table table-bordered table-striped table-hover dataTable\" id=\"data_berita\">
      <thead>
         <tr>
            <th>Tanggal</th>
            <th>DiTujukan</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Tertanda</th>
            <th>Publish</th>
            <th>Hapus</th>
         </tr>
      </thead>

      <tbody id=\"show_data\">
         <?php \$i = 1 ?>
         <?php foreach(\$data as \$m): ?>
         <tr>
            <td><?php echo \$m->tanggal ?></a>   </td>
            <td><?php echo \$m->ditujukan ?></td>
            <td><?php echo \$m->judul ?></td>
            <td><?php echo \$m->isi ?></td>
            <td><?php echo \$m->pj ?></td>
            <td><?php echo \$m->tutup ?></td>
            <td align=\"center\">
               <a href=\"<?php echo base_url();?>index.php/berita/hapus/<?php echo \$m->noberita ?>\" class=\"btn btn-primary waves-effect\"> <i class=\"material-icons\">delete_forever</i></a>
            </td>
         </tr>
         <?php endforeach ?>

      </tbody>
   </table>
</div>

<div id=\"search_date\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <form method=\"post\" id=\"sort_berita\">
                    <input type=\"hidden\" name=\"{{ csrf_name }}\" value=\"{{ csrf_hash }}\">
                </form>
            </div>
        </div>

    </div>
</div>
", "berita/datalist.twig", "/home/sipy1897/public_html/demo/apliku/views/berita/datalist.twig");
    }
}
