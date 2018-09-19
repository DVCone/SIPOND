<?php

/* prestasi/prestasiv.twig */
class __TwigTemplate_746fb7604fa7acf299572ad9e83485c663bafcd0fc5c581b763b0bb5493f012f extends Twig_Template
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
<form method=\"POST\" id=\"form_prestasi_siswa\">

   <div class=\"col-sm-12\">
      <b>Pencarian Siswa</b>
      <!-- <div class=\"form-group\"> -->
      <select name=\"cari_siswa\" class=\"form-control show-tick select-prestasi\" data-live-search=\"true\" onchange=\"changeFunc();\" id=\"cari_siswa\">

         <option value=\"\"></option>
         ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 11
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
        // line 13
        echo "
      </select>
      <div class=\"form-group\">
         <div id=\"error_box\"></div>
      </div>
      <!-- </div> -->
   </div>

   <!-- batas -->

   <div class=\"col-sm-12\">
      <!-- <b>Data Siswa</b> -->
      <div class=\"form-group\">

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
         <input size = \"15\" type=\"text\" class=\"form-control\" name=\"tanggal\" id=\"tanggalInput\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\" required />
         <!-- </div> -->
      </div>
   </div>

   <div class=\"col-sm-8\">
      <b>Prestasi</b>
      <div class=\"form-group\">
         <div class=\"form-line\">
            <input name=\"prestasi\" type=\"text\" class=\"form-control\" />
         </div>
      </div>
   </div>


   <div class=\"col-sm-12\">
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
        // line 66
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
        return "prestasi/prestasiv.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 66,  85 => 39,  57 => 13,  34 => 11,  30 => 10,  19 => 1,);
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
<form method=\"POST\" id=\"form_prestasi_siswa\">

   <div class=\"col-sm-12\">
      <b>Pencarian Siswa</b>
      <!-- <div class=\"form-group\"> -->
      <select name=\"cari_siswa\" class=\"form-control show-tick select-prestasi\" data-live-search=\"true\" onchange=\"changeFunc();\" id=\"cari_siswa\">

         <option value=\"\"></option>
         {% for m in data %}
         <option value=\"{{ m.nis }}#{{ m.namasiswa }}#{{ m.kelas }}#{{ m.namaayah }}\">{{ m.nis }} - {{ m.namasiswa }} Kelas {{ m.kelas }} Bin/ti {{ m.namaayah }}</option>
         {% endfor %}

      </select>
      <div class=\"form-group\">
         <div id=\"error_box\"></div>
      </div>
      <!-- </div> -->
   </div>

   <!-- batas -->

   <div class=\"col-sm-12\">
      <!-- <b>Data Siswa</b> -->
      <div class=\"form-group\">

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
         <input size = \"15\" type=\"text\" class=\"form-control\" name=\"tanggal\" id=\"tanggalInput\" value=\"{{ \"now\" | date(\"Y-m-d\") }}\" required />
         <!-- </div> -->
      </div>
   </div>

   <div class=\"col-sm-8\">
      <b>Prestasi</b>
      <div class=\"form-group\">
         <div class=\"form-line\">
            <input name=\"prestasi\" type=\"text\" class=\"form-control\" />
         </div>
      </div>
   </div>


   <div class=\"col-sm-12\">
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

", "prestasi/prestasiv.twig", "/home/sipy1897/public_html/demo/apliku/views/prestasi/prestasiv.twig");
    }
}
