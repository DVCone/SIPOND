<?php

/* siswa/print_kartu_pelajar.twig */
class __TwigTemplate_472405737e0577829dcb1cf43f21f4bec1c0a3cc1dd629b2b2467746ed54b3cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/master_layouts.twig", "siswa/print_kartu_pelajar.twig", 1);
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

    public function block_main_content($context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"container-fluid\">
   <!-- Widgets -->
   <div class=\"row clearfix\">
      <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
         <div class=\"card\">
            <div class=\"header\">
               <div class=\"col-sm-8\">

                  <h2>
                     Cetak Kartu Pelajar
                  </h2>

               </div>
            </div>
            <div class=\"body\"><div class=\"row\">
                  ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["siswa"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 18
            echo "                  <div class=\"col-lg-6 col-md-6 col-sm-4 col-xs-6\">
                     <div class=\"card-hero\">
                        <div class=\"row\">
                           <div class=\"col-sm-12\">
                              <div class=\"card-header\">
                                 <h1>SMK IT Amal Islami</h1>
                                 <h6>Jl. Lmeburpasir Kel.Sindangsari Kota.Sukabumi</h6>
                              </div>
                           </div>
                           <div class=\"main\">
                              <table>
                                 <tr>
                                    <td>
                                       <img src=\"";
            // line 31
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "template/images/no-avatar.png\" alt=\"no-avatar\" class=\"img-fluid\">
                                    </td>
                                 </tr>
                              </table>
                              <div class=\"hero\">
                                 <table>
                                    <tr>
                                       <td>
                                          <h6>Nama Lengkap</h6>
                                       </td>
                                       <td style=\"font-size: 10px;\">:</td>
                                       <td>
                                          <p>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "namasiswa", array()), "html", null, true);
            echo "</p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <h6>Kelas</h6>
                                       </td>
                                       <td style=\"font-size: 10px;\">:</td>
                                       <td>
                                          <p>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "kelas", array()), "html", null, true);
            echo "</p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <h6>No. Induk Siswa</h6>
                                       </td>
                                       <td style=\"font-size: 10px;\">:</td>
                                       <td>
                                          <p>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nis", array()), "html", null, true);
            echo "</p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <h6>Tempat/Tanggal Lahir</h6>
                                       </td>
                                       <td style=\"font-size: 10px;\">:</td>
                                       <td>
                                          <p>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "kotalahir", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["m"], "tanggallahir", array()), "d F Y"), "html", null, true);
            echo "</p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <h6>Alamat</h6>
                                       </td>
                                       <td style=\"font-size: 10px;\">:</td>
                                       <td>
                                          <p>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "alamat", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "kelurahan", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "kecamatan", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "provinsi", array()), "html", null, true);
            echo "</p>
                                       </td>
                                    </tr>
                                 </table>
                              </div>
                           </div>
                           <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 card-footer\">
                              <table width=\"100%\">
                                 <tr>
                                    <td>
                                       <h5>Kepala Sekolah</h5>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <p>------------------</p>
                                    </td>
                                 </tr>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "


               </div></div>

         </div>
      </div>
      <!-- #END# Widgets -->
      <!-- CPU Usage -->
   </div>
</div>

<div class=\"modal fade bd-example-modal-lg\" id=\"kartu_pelajar\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
   <div class=\"modal-dialog modal-lg\" role=\"document\">
      <div class=\"modal-content\">
         <div class=\"modal-body\" id=\"printcard\">
            <div class=\"row\"></div>
         </div>
         <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
            <button type=\"button\" class=\"btn btn-primary\" onclick=\"printc('printcard')\">Print</button>
         </div>
      </div>
   </div>
</div>

";
    }

    // line 129
    public function block_custom_js($context, array $blocks = array())
    {
        echo " ";
        $this->loadTemplate("layouts/form-validation.twig", "siswa/print_kartu_pelajar.twig", 129)->display($context);
        // line 130
        echo "
<script type=\"text/javascript\">
   function myprint(divname) {
      var printContents = document.getElementById(divname).innerHTML;
      var originalContents = document.body.innerHTML;

      document.body.innerHTML = printContents;
      window.print();
      document.body.innerHTML = originalContents;
   }

   function printc(divname) {
      var printContents = document.getElementById(divname).innerHTML;
      var originalContents = document.body.innerHTML;

      document.body.innerHTML = printContents;
      window.print();
      document.body.innerHTML = originalContents;
   }
</script>


";
    }

    public function getTemplateName()
    {
        return "siswa/print_kartu_pelajar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 130,  198 => 129,  168 => 103,  132 => 79,  118 => 70,  106 => 61,  94 => 52,  82 => 43,  67 => 31,  52 => 18,  48 => 17,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layouts/master_layouts.twig' %} {% block main_content %}
<div class=\"container-fluid\">
   <!-- Widgets -->
   <div class=\"row clearfix\">
      <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
         <div class=\"card\">
            <div class=\"header\">
               <div class=\"col-sm-8\">

                  <h2>
                     Cetak Kartu Pelajar
                  </h2>

               </div>
            </div>
            <div class=\"body\"><div class=\"row\">
                  {% for m in siswa %}
                  <div class=\"col-lg-6 col-md-6 col-sm-4 col-xs-6\">
                     <div class=\"card-hero\">
                        <div class=\"row\">
                           <div class=\"col-sm-12\">
                              <div class=\"card-header\">
                                 <h1>SMK IT Amal Islami</h1>
                                 <h6>Jl. Lmeburpasir Kel.Sindangsari Kota.Sukabumi</h6>
                              </div>
                           </div>
                           <div class=\"main\">
                              <table>
                                 <tr>
                                    <td>
                                       <img src=\"{{ base_url() }}template/images/no-avatar.png\" alt=\"no-avatar\" class=\"img-fluid\">
                                    </td>
                                 </tr>
                              </table>
                              <div class=\"hero\">
                                 <table>
                                    <tr>
                                       <td>
                                          <h6>Nama Lengkap</h6>
                                       </td>
                                       <td style=\"font-size: 10px;\">:</td>
                                       <td>
                                          <p>{{ m.namasiswa }}</p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <h6>Kelas</h6>
                                       </td>
                                       <td style=\"font-size: 10px;\">:</td>
                                       <td>
                                          <p>{{ m.kelas }}</p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <h6>No. Induk Siswa</h6>
                                       </td>
                                       <td style=\"font-size: 10px;\">:</td>
                                       <td>
                                          <p>{{ m.nis }}</p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <h6>Tempat/Tanggal Lahir</h6>
                                       </td>
                                       <td style=\"font-size: 10px;\">:</td>
                                       <td>
                                          <p>{{ m.kotalahir }}, {{ m.tanggallahir | date(\"d F Y\") }}</p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <h6>Alamat</h6>
                                       </td>
                                       <td style=\"font-size: 10px;\">:</td>
                                       <td>
                                          <p>{{ m.alamat }}, {{ m.kelurahan }}, {{ m.kecamatan }}, {{ m.provinsi }}</p>
                                       </td>
                                    </tr>
                                 </table>
                              </div>
                           </div>
                           <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 card-footer\">
                              <table width=\"100%\">
                                 <tr>
                                    <td>
                                       <h5>Kepala Sekolah</h5>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <p>------------------</p>
                                    </td>
                                 </tr>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
                  {% endfor %}



               </div></div>

         </div>
      </div>
      <!-- #END# Widgets -->
      <!-- CPU Usage -->
   </div>
</div>

<div class=\"modal fade bd-example-modal-lg\" id=\"kartu_pelajar\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
   <div class=\"modal-dialog modal-lg\" role=\"document\">
      <div class=\"modal-content\">
         <div class=\"modal-body\" id=\"printcard\">
            <div class=\"row\"></div>
         </div>
         <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
            <button type=\"button\" class=\"btn btn-primary\" onclick=\"printc('printcard')\">Print</button>
         </div>
      </div>
   </div>
</div>

{% endblock %} {% block custom_js %} {% include 'layouts/form-validation.twig' %}

<script type=\"text/javascript\">
   function myprint(divname) {
      var printContents = document.getElementById(divname).innerHTML;
      var originalContents = document.body.innerHTML;

      document.body.innerHTML = printContents;
      window.print();
      document.body.innerHTML = originalContents;
   }

   function printc(divname) {
      var printContents = document.getElementById(divname).innerHTML;
      var originalContents = document.body.innerHTML;

      document.body.innerHTML = printContents;
      window.print();
      document.body.innerHTML = originalContents;
   }
</script>


{% endblock %}
", "siswa/print_kartu_pelajar.twig", "/home/sipy1897/public_html/demo/apliku/views/siswa/print_kartu_pelajar.twig");
    }
}
