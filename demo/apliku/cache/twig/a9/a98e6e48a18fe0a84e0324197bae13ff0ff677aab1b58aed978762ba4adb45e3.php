<?php

/* berita/beritav.twig */
class __TwigTemplate_1e8176a975c4f0a4f067e8e59f85aad133a83e79c2b18a312e99de8c78eaf041 extends Twig_Template
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
        echo "<form method=\"POST\" id=\"form_data_berita\">

   <div class=\"col-sm-3\">
      <b>Tanggal</b>
      <div class=\"form-group\">
         <!-- <div class=\"form-line\"> -->
         <input size = \"15\" type=\"text\" class=\"form-control\" name=\"tanggal\" id=\"tanggalInput\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"  required />
         <!-- </div> -->
      </div>
   </div>

   <div class=\"col-sm-3\">
      <b>Ditujukan</b>
      <div class=\"form-group\">
         <div class=\"form-line\">
            <input id=\"ditujukan\" name=\"ditujukan\" type=\"text\" class=\"form-control\" />
         </div>
      </div>
   </div>

   <div class=\"col-sm-3\">
      <b>Tertanda</b>
      <div class=\"form-group\">
         <div class=\"form-line\">
            <input id=\"pj\" name=\"pj\" type=\"text\" class=\"form-control\" />
         </div>
      </div>
   </div>
   <div class=\"col-sm-3\">
      <b>Judul</b>
      <div class=\"form-group\">
         <div class=\"form-line\">
            <input id=\"judul\" name=\"judul\" type=\"text\" class=\"form-control\" />
         </div>
      </div>
   </div>

   <div class=\"col-sm-12\">
      <b>Isi Berita</b>
      <div class=\"form-group\">
         <div class=\"form-line\">
            <textarea name=\"isi\" id=\"isi\" class=\"form-control\" >Silahkan isi komentar anda</textarea>
         </div>
      </div>
   </div>


   <div class=\"col-sm-12\">
      <div class=\"form-group\">
         <input type=\"hidden\" id=\"csrf\" name=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["csrf_name"]) ? $context["csrf_name"] : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["csrf_hash"]) ? $context["csrf_hash"] : null), "html", null, true);
        echo "\">
         <button type=\"reset\" class=\"btn btn-danger waves-effect\">Batalkan Isian</button>
         <button type=\"submit\" class=\"btn btn-primary waves-effect\">Simpan Data</button>
      </div>
   </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "berita/beritav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 50,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form method=\"POST\" id=\"form_data_berita\">

   <div class=\"col-sm-3\">
      <b>Tanggal</b>
      <div class=\"form-group\">
         <!-- <div class=\"form-line\"> -->
         <input size = \"15\" type=\"text\" class=\"form-control\" name=\"tanggal\" id=\"tanggalInput\" value=\"{{ \"now\" | date(\"Y-m-d\") }}\"  required />
         <!-- </div> -->
      </div>
   </div>

   <div class=\"col-sm-3\">
      <b>Ditujukan</b>
      <div class=\"form-group\">
         <div class=\"form-line\">
            <input id=\"ditujukan\" name=\"ditujukan\" type=\"text\" class=\"form-control\" />
         </div>
      </div>
   </div>

   <div class=\"col-sm-3\">
      <b>Tertanda</b>
      <div class=\"form-group\">
         <div class=\"form-line\">
            <input id=\"pj\" name=\"pj\" type=\"text\" class=\"form-control\" />
         </div>
      </div>
   </div>
   <div class=\"col-sm-3\">
      <b>Judul</b>
      <div class=\"form-group\">
         <div class=\"form-line\">
            <input id=\"judul\" name=\"judul\" type=\"text\" class=\"form-control\" />
         </div>
      </div>
   </div>

   <div class=\"col-sm-12\">
      <b>Isi Berita</b>
      <div class=\"form-group\">
         <div class=\"form-line\">
            <textarea name=\"isi\" id=\"isi\" class=\"form-control\" >Silahkan isi komentar anda</textarea>
         </div>
      </div>
   </div>


   <div class=\"col-sm-12\">
      <div class=\"form-group\">
         <input type=\"hidden\" id=\"csrf\" name=\"{{ csrf_name }}\" value=\"{{ csrf_hash }}\">
         <button type=\"reset\" class=\"btn btn-danger waves-effect\">Batalkan Isian</button>
         <button type=\"submit\" class=\"btn btn-primary waves-effect\">Simpan Data</button>
      </div>
   </div>
</form>
", "berita/beritav.twig", "/home/sipy1897/public_html/demo/apliku/views/berita/beritav.twig");
    }
}
