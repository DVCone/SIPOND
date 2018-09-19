<?php

/* pelanggaran/pelanggaranv.twig */
class __TwigTemplate_670a33b32133980eede16f143efbee19bed9c64e3e4c08fd1d10fc36c036e8e2 extends Twig_Template
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
<form method=\"POST\" id=\"form_pelanggaran_siswa\">

   <div class=\"col-sm-12\">
      <b>Pencarian Siswa</b>
      <!-- <div class=\"form-group\"> -->
      <select name=\"cari_siswa\" class=\"form-control show-tick\" data-live-search=\"true\" onchange=\"changeFunc();\" id=\"cari_siswa\">
         <option value=\"\"></option>
         ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 10
            echo "         <option value=\"";
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
        // line 12
        echo "
      </select>
      <!-- </div> -->
      <div class=\"form-group\">
         <div id=\"error_box\"></div>
      </div>
   </div>
   <!-- batas -->

   <div class=\"col-sm-12\">
      <!-- <b>Data Siswa</b> -->
      <div class=\"form-group\">
         ";
        // line 25
        echo "
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
         <input size = \"10\" type=\"text\" class=\"form-control\" name=\"tanggal\" id=\"tanggalInput\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\" required />
         <!-- </div> -->
      </div>
   </div>

   <div class=\"col-sm-4\">
      <b>Nama Pelanggaran</b>
      <div class=\"form-group\">
         <div class=\"form-line\">
            <input name=\"namapelanggaran\" type=\"text\" class=\"form-control\" />
         </div>
      </div>
   </div>

   <div class=\"col-sm-4\">
      <b>Tindakan</b>
      <div class=\"form-group\">
         <div class=\"form-line\">
            <input name=\"tindakan\" type=\"text\" class=\"form-control\" />
         </div>
      </div>
   </div>

   <div class=\"col-sm-3\">
      <b>Poin</b>
      <div class=\"input-group spinner\" data-trigger=\"spinner\">
         <div class=\"form-line\">
            <input name=\"poin\" type=\"text\" class=\"form-control text-center\" value=\"1\" data-rule=\"quantity\">
         </div>
         <span class=\"input-group-addon\">
            <a href=\"javascript:;\" class=\"spin-up\" data-spin=\"up\"><i class=\"glyphicon glyphicon-chevron-up\"></i></a>
            <a href=\"javascript:;\" class=\"spin-down\" data-spin=\"down\"><i class=\"glyphicon glyphicon-chevron-down\"></i></a>
         </span>
      </div>
   </div>

   <div class=\"col-sm-9\">
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
        // line 86
        echo twig_escape_filter($this->env, (isset($context["csrf_name"]) ? $context["csrf_name"] : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["csrf_hash"]) ? $context["csrf_hash"] : null), "html", null, true);
        echo "\">
         <button type=\"reset\" class=\"btn btn-danger waves-effect\">Batalkan Isian</button>
         <button class=\"btn btn-primary waves-effect\" type=\"submit\">Simpan Data</button>
      </div>
   </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "pelanggaran/pelanggaranv.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 86,  85 => 38,  70 => 25,  56 => 12,  33 => 10,  29 => 9,  19 => 1,);
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
<form method=\"POST\" id=\"form_pelanggaran_siswa\">

   <div class=\"col-sm-12\">
      <b>Pencarian Siswa</b>
      <!-- <div class=\"form-group\"> -->
      <select name=\"cari_siswa\" class=\"form-control show-tick\" data-live-search=\"true\" onchange=\"changeFunc();\" id=\"cari_siswa\">
         <option value=\"\"></option>
         {% for m in data %}
         <option value=\"{{ m.nis }}#{{ m.namasiswa }}#{{ m.kelas }}#{{ m.namaayah }}\">{{ m.nis }} - {{ m.namasiswa }} Kelas {{ m.kelas }} Bin/ti {{ m.namaayah }}</option>
         {% endfor %}

      </select>
      <!-- </div> -->
      <div class=\"form-group\">
         <div id=\"error_box\"></div>
      </div>
   </div>
   <!-- batas -->

   <div class=\"col-sm-12\">
      <!-- <b>Data Siswa</b> -->
      <div class=\"form-group\">
         {#<div id=\"error_box\"></div>#}

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
         <input size = \"10\" type=\"text\" class=\"form-control\" name=\"tanggal\" id=\"tanggalInput\" value=\"{{ \"now\" | date(\"Y-m-d\") }}\" required />
         <!-- </div> -->
      </div>
   </div>

   <div class=\"col-sm-4\">
      <b>Nama Pelanggaran</b>
      <div class=\"form-group\">
         <div class=\"form-line\">
            <input name=\"namapelanggaran\" type=\"text\" class=\"form-control\" />
         </div>
      </div>
   </div>

   <div class=\"col-sm-4\">
      <b>Tindakan</b>
      <div class=\"form-group\">
         <div class=\"form-line\">
            <input name=\"tindakan\" type=\"text\" class=\"form-control\" />
         </div>
      </div>
   </div>

   <div class=\"col-sm-3\">
      <b>Poin</b>
      <div class=\"input-group spinner\" data-trigger=\"spinner\">
         <div class=\"form-line\">
            <input name=\"poin\" type=\"text\" class=\"form-control text-center\" value=\"1\" data-rule=\"quantity\">
         </div>
         <span class=\"input-group-addon\">
            <a href=\"javascript:;\" class=\"spin-up\" data-spin=\"up\"><i class=\"glyphicon glyphicon-chevron-up\"></i></a>
            <a href=\"javascript:;\" class=\"spin-down\" data-spin=\"down\"><i class=\"glyphicon glyphicon-chevron-down\"></i></a>
         </span>
      </div>
   </div>

   <div class=\"col-sm-9\">
      <b>Catatan</b>
      <div class=\"form-group\">
         <div class=\"form-line\">
            <input name=\"catatan\" type=\"text\" class=\"form-control\" />
         </div>
      </div>
   </div>


   <div class=\"col-sm-12\">
      <div class=\"form-group\">
         <input type=\"hidden\" name=\"{{ csrf_name }}\" value=\"{{ csrf_hash }}\">
         <button type=\"reset\" class=\"btn btn-danger waves-effect\">Batalkan Isian</button>
         <button class=\"btn btn-primary waves-effect\" type=\"submit\">Simpan Data</button>
      </div>
   </div>
</form>
", "pelanggaran/pelanggaranv.twig", "/home/sipy1897/public_html/demo/apliku/views/pelanggaran/pelanggaranv.twig");
    }
}
