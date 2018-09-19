<?php

/* keuangan/jurnal/keluar.twig */
class __TwigTemplate_f2e7eb08a98ba897aaf6b1391e1234c5f8bdb32f2d740c529832af57d0728cf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/master_layouts.twig", "keuangan/jurnal/keluar.twig", 1);
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
        echo "
<link href=\"";
        // line 3
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css\" type=\"text/stylesheet\">


<div class=\"block-header\">
    <h2>Keuangan</h2>
</div>
<!-- Input -->
<div class=\"row clearfix\">
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <div class=\"card\">
            <div class=\"header\">
                <h2>
                    Jurnal Keluar
                </h2>
            </div>
            <div class=\"body\">
                <div class=\"row\">
                    <form method=\"POST\">

                        <div class=\"col-sm-12\">
                            <div class=\"row\">

                                <div class=\"col-sm-4\">
                                    <b>Tanggal</b>
                                    <div class=\"form-group\">
                                        <!-- <div class=\"form-line\"> -->
                                        <input size=\"15\" type=\"date\" class=\"form-control\" name=\"tanggal\" id=\"tanggal\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, " now ", "Y-m-d"), "html", null, true);
        echo "\" required />
                                        <!-- </div> -->
                                    </div>
                                </div>

                                <div class=\"col-sm-4\">
                            <b>Keterangan</b>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    <input name=\"keterangan\" type=\"text\" class=\"form-control\" />
                                </div>
                            </div>
                        </div>

                        <div class=\"col-sm-4\">
                                    <b>Rekening Kas</b>
                                    <!-- <div class=\"form-group\"> -->
                                    <select name=\"cari_siswa\" id=\"cari_siswa\" class=\"form-control show-tick\" data-live-search=\"true\" onchange=\"changeFunc();\">
                            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rek1000"]) ? $context["rek1000"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 48
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "koderekening", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "koderekening", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "namarekening", array()), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                                </select>
                                    <!-- </div> -->
                                </div>

                               

                            </div>
                        </div>

                        <div class=\"col-sm-12\">
                            <div class=\"row\">

                             

                                <div class=\"col-sm-4\">
                                    <b>Rekening Kas Masuk</b>
                                    <!-- <div class=\"form-group\"> -->
                                    <select name=\"kaskeluar\" id=\"kaskeluar\" class=\"form-control show-tick\" data-live-search=\"true\">
                                ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reknot1000"]) ? $context["reknot1000"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 69
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "koderekening", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "koderekening", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "namarekening", array()), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                        </select>
                                </div>

                        <div class=\"col-sm-4\">
                            <b>Nominal</b>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    <input size=\"15\" type=\"text\" class=\"form-control\" name=\"nominal\" id=\"nominal\" value=\"\" required />
                                </div>
                            </div>
                        </div>

                        
                        <div class=\"col-sm-4\">
                            <div class=\"form-group\">
                                <button  class=\"btn btn-add-data btn-primary waves-effect\" type=\"button\">Tambahkan Data</button>
                            </div>
                        </div>
                        </div>
                        </div>

                        <div class=\"col-sm-9\">
                            <table id=\"datatable-rekening\" class=\"table table-responsive table-stripped table-bordered\">
                                <thead>
                                    <tr>
                                        <th>Rekenin</th>
                                        <th>Nominal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id=\"contentTable\">
                                    
                                </tbody>
                            </table>
                        </div>

                        <div class=\"col-sm-3\">
                            <div class=\"form-group\">
                            <h4>Total Kas : Rp.<label id=\"totalNominal\">0</label></h4>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #END# Input -->


<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
   <div class=\"modal-dialog\" style=\"width:80%\">
      <div class=\"modal-content\">
         <div class=\"modal-body printable\" id=\"printable\">
            <div style=\"border-bottom: 2px dashed #333; text-align: center;\">
               <img src=\"";
        // line 127
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "gambar/kopnota.png\" style=\"width: 80%;\">
            </div>

            <table width=\"100%\" style=\"line-height: 1.5em;\">
               <tr>
                  <td><h4 style=\"text-align: center; margin: 10px 0 0px 0;\">Bukti Kas Keluar</h4></td>
                </tr>
            </table>

            <br>
            <table width=\"100%\" style=\"line-height: 1.3em; font-size: 12px\">
               <tbody>
                  <tr>
                     <td width=\"200px\">Keterangan</td>
                     <td>:</td>
                     <td><label id=\"setKeterangan\"></label></td>
                  </tr>
               </tbody>
            </table>

            <table width=\"100%\" style=\"margin: 0.5em 0; line-height: 1.5em; font-size: 12px\">
            
               <tr style=\"font-weight: bold; border-top: 2px dashed #000; border-bottom: 2px dashed #000;\">
                  <th width=\"50%\" style=\"padding: 2px 10px;\">Rekening</th>
                  <th class=\"text-center\">Debet</th>
                  <th class=\"text-center\">Kredit</th>
               </tr>

               <tr>
                  <td id=\"rekeningkode\" width=\"50%\" style=\"padding: 2px 10px; width: 13em;\">
                  </td>
                  <td id=\"debetkode\" class=\"text-center\">
                    </td>
                  <td id=\"kreditkode\" class=\"text-center\">
                  </td>
               </tr>
               <tr style=\"font-weight: bold; border-top: 2px dashed #333; border-bottom: 2px dashed #333;\">
                  <td style=\"padding: 2px 10px;\">Total</td> 
                  <td class=\"text-center\">Rp. <span id=\"modaltotald\">x</span></td>
                  <td class=\"text-center\">Rp. <span id=\"modaltotalk\">x</span></td>
               </tr>
            </table>

            <table width=\"100%\" style=\"line-height: 1.5em; font-size: 12px\">
               <tr>
                  <td style=\"text-align: right;\">
                     <span id=\"modallokasi\">Yogyakarta</span>,
                     <span id=\"modaltanggal\">";
        // line 174
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "</span>
                  </td>
               </tr>
               <tr>
                  <td class=\"text-right\">Pengurus,</td>
               </tr>
               <tr>
                  <td id=\"modalpengguna\" class=\"text-right\">
                  <div style=\"height:30px\"></div>
                  <label id=\"namapengguna\"></label>
                  </td>
               </tr> 
            </table>
  
            <!-- Button trigger modal -->


         </div>
         <div class=\"modal-body\">
            <p id=\"demo\"></p>
         </div>
         <div class=\"modal-footer\">
            <!--<button type=\"button\" class=\"btn btn-primary\" id=\"btn-modal-print\" onclick=\"myprint('printable')\">Print Bukti Penerimaan</button>-->
            <button type=\"button\" class=\"btn btn-primary\" id=\"btn-modal-print\">Print Bukti Penerimaan</button>
         </div>

      </div>

   </div>
</div>


";
    }

    // line 206
    public function block_custom_js($context, array $blocks = array())
    {
        // line 207
        echo "
<script src=\"";
        // line 208
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js\"></script>
<script src=\"";
        // line 209
        echo twig_escape_filter($this->env, base_url("template/js/jQuery.print.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 210
        $this->loadTemplate("layouts/custom/form-validation.twig", "keuangan/jurnal/keluar.twig", 210)->display($context);
        echo " ";
        $this->loadTemplate("layouts/custom/datatable.twig", "keuangan/jurnal/keluar.twig", 210)->display($context);
        echo " ";
        $this->loadTemplate("keuangan/jurnal/js/keluar.twig", "keuangan/jurnal/keluar.twig", 210)->display($context);
        echo " ";
    }

    public function getTemplateName()
    {
        return "keuangan/jurnal/keluar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 210,  293 => 209,  289 => 208,  286 => 207,  283 => 206,  246 => 174,  196 => 127,  138 => 71,  125 => 69,  121 => 68,  101 => 50,  88 => 48,  84 => 47,  63 => 29,  34 => 3,  31 => 2,  11 => 1,);
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

<link href=\"{{ base_url() }}template/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css\" type=\"text/stylesheet\">


<div class=\"block-header\">
    <h2>Keuangan</h2>
</div>
<!-- Input -->
<div class=\"row clearfix\">
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <div class=\"card\">
            <div class=\"header\">
                <h2>
                    Jurnal Keluar
                </h2>
            </div>
            <div class=\"body\">
                <div class=\"row\">
                    <form method=\"POST\">

                        <div class=\"col-sm-12\">
                            <div class=\"row\">

                                <div class=\"col-sm-4\">
                                    <b>Tanggal</b>
                                    <div class=\"form-group\">
                                        <!-- <div class=\"form-line\"> -->
                                        <input size=\"15\" type=\"date\" class=\"form-control\" name=\"tanggal\" id=\"tanggal\" value=\"{{ \" now \"|date(\"Y-m-d\") }}\" required />
                                        <!-- </div> -->
                                    </div>
                                </div>

                                <div class=\"col-sm-4\">
                            <b>Keterangan</b>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    <input name=\"keterangan\" type=\"text\" class=\"form-control\" />
                                </div>
                            </div>
                        </div>

                        <div class=\"col-sm-4\">
                                    <b>Rekening Kas</b>
                                    <!-- <div class=\"form-group\"> -->
                                    <select name=\"cari_siswa\" id=\"cari_siswa\" class=\"form-control show-tick\" data-live-search=\"true\" onchange=\"changeFunc();\">
                            {% for m in rek1000 %}
                            <option value=\"{{m.koderekening}}\">{{m.koderekening}} - {{m.namarekening}}</option>
                            {% endfor %}
                                </select>
                                    <!-- </div> -->
                                </div>

                               

                            </div>
                        </div>

                        <div class=\"col-sm-12\">
                            <div class=\"row\">

                             

                                <div class=\"col-sm-4\">
                                    <b>Rekening Kas Masuk</b>
                                    <!-- <div class=\"form-group\"> -->
                                    <select name=\"kaskeluar\" id=\"kaskeluar\" class=\"form-control show-tick\" data-live-search=\"true\">
                                {% for m in reknot1000 %}
                            <option value=\"{{m.koderekening}}\">{{m.koderekening}} - {{m.namarekening}}</option>
                            {% endfor %}
                        </select>
                                </div>

                        <div class=\"col-sm-4\">
                            <b>Nominal</b>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    <input size=\"15\" type=\"text\" class=\"form-control\" name=\"nominal\" id=\"nominal\" value=\"\" required />
                                </div>
                            </div>
                        </div>

                        
                        <div class=\"col-sm-4\">
                            <div class=\"form-group\">
                                <button  class=\"btn btn-add-data btn-primary waves-effect\" type=\"button\">Tambahkan Data</button>
                            </div>
                        </div>
                        </div>
                        </div>

                        <div class=\"col-sm-9\">
                            <table id=\"datatable-rekening\" class=\"table table-responsive table-stripped table-bordered\">
                                <thead>
                                    <tr>
                                        <th>Rekenin</th>
                                        <th>Nominal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id=\"contentTable\">
                                    
                                </tbody>
                            </table>
                        </div>

                        <div class=\"col-sm-3\">
                            <div class=\"form-group\">
                            <h4>Total Kas : Rp.<label id=\"totalNominal\">0</label></h4>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #END# Input -->


<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
   <div class=\"modal-dialog\" style=\"width:80%\">
      <div class=\"modal-content\">
         <div class=\"modal-body printable\" id=\"printable\">
            <div style=\"border-bottom: 2px dashed #333; text-align: center;\">
               <img src=\"{{ base_url() }}gambar/kopnota.png\" style=\"width: 80%;\">
            </div>

            <table width=\"100%\" style=\"line-height: 1.5em;\">
               <tr>
                  <td><h4 style=\"text-align: center; margin: 10px 0 0px 0;\">Bukti Kas Keluar</h4></td>
                </tr>
            </table>

            <br>
            <table width=\"100%\" style=\"line-height: 1.3em; font-size: 12px\">
               <tbody>
                  <tr>
                     <td width=\"200px\">Keterangan</td>
                     <td>:</td>
                     <td><label id=\"setKeterangan\"></label></td>
                  </tr>
               </tbody>
            </table>

            <table width=\"100%\" style=\"margin: 0.5em 0; line-height: 1.5em; font-size: 12px\">
            
               <tr style=\"font-weight: bold; border-top: 2px dashed #000; border-bottom: 2px dashed #000;\">
                  <th width=\"50%\" style=\"padding: 2px 10px;\">Rekening</th>
                  <th class=\"text-center\">Debet</th>
                  <th class=\"text-center\">Kredit</th>
               </tr>

               <tr>
                  <td id=\"rekeningkode\" width=\"50%\" style=\"padding: 2px 10px; width: 13em;\">
                  </td>
                  <td id=\"debetkode\" class=\"text-center\">
                    </td>
                  <td id=\"kreditkode\" class=\"text-center\">
                  </td>
               </tr>
               <tr style=\"font-weight: bold; border-top: 2px dashed #333; border-bottom: 2px dashed #333;\">
                  <td style=\"padding: 2px 10px;\">Total</td> 
                  <td class=\"text-center\">Rp. <span id=\"modaltotald\">x</span></td>
                  <td class=\"text-center\">Rp. <span id=\"modaltotalk\">x</span></td>
               </tr>
            </table>

            <table width=\"100%\" style=\"line-height: 1.5em; font-size: 12px\">
               <tr>
                  <td style=\"text-align: right;\">
                     <span id=\"modallokasi\">Yogyakarta</span>,
                     <span id=\"modaltanggal\">{{ 'now'|date('d/m/Y') }}</span>
                  </td>
               </tr>
               <tr>
                  <td class=\"text-right\">Pengurus,</td>
               </tr>
               <tr>
                  <td id=\"modalpengguna\" class=\"text-right\">
                  <div style=\"height:30px\"></div>
                  <label id=\"namapengguna\"></label>
                  </td>
               </tr> 
            </table>
  
            <!-- Button trigger modal -->


         </div>
         <div class=\"modal-body\">
            <p id=\"demo\"></p>
         </div>
         <div class=\"modal-footer\">
            <!--<button type=\"button\" class=\"btn btn-primary\" id=\"btn-modal-print\" onclick=\"myprint('printable')\">Print Bukti Penerimaan</button>-->
            <button type=\"button\" class=\"btn btn-primary\" id=\"btn-modal-print\">Print Bukti Penerimaan</button>
         </div>

      </div>

   </div>
</div>


{% endblock %} {% block custom_js %}

<script src=\"{{ base_url() }}template/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js\"></script>
<script src=\"{{ base_url('template/js/jQuery.print.min.js') }}\"></script>
{% include 'layouts/custom/form-validation.twig' %} {% include 'layouts/custom/datatable.twig' %} {% include 'keuangan/jurnal/js/keluar.twig' %} {% endblock %}", "keuangan/jurnal/keluar.twig", "/home/sipy1897/public_html/demo/apliku/views/keuangan/jurnal/keluar.twig");
    }
}
