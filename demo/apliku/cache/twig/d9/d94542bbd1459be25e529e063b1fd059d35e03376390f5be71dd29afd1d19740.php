<?php

/* keuangan/jurnal/print.twig */
class __TwigTemplate_2732b2bdf5a4a8c1ea730f5f8edd8fedc17e49d6bb21f1b6186605c9d207ba38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/master_layouts.twig", "keuangan/jurnal/print.twig", 1);
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
                    Print Jurnal Masuk & Keluar
                </h2>
            </div>
            <div class=\"body\">
                <div class=\"row\">
                    <form method=\"POST\">

                        <div class=\"col-sm-12\">
                            <div class=\"row\">

                                <div class=\"col-sm-4\">
                                    <b>No Nota</b>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            <input name=\"nonota\" type=\"text\" class=\"form-control\" />
                                        </div>
                                    </div>
                                </div>

                                <div class=\"col-sm-4\">
                                    <button class=\"btn btn-success btnsendPrint\">Print Jurnal</button>
                                </div>


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
        // line 56
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "gambar/kopnota.png\" style=\"width: 80%;\">
                </div>

                <table width=\"100%\" style=\"line-height: 1.5em;\">
                    <tr>
                        <td>
                            <h4 style=\"text-align: center; margin: 10px 0 0px 0;\" class=\"titlejurnal\"></h4>
                        </td>
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
        // line 105
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

    // line 137
    public function block_custom_js($context, array $blocks = array())
    {
        // line 138
        echo "
<script src=\"";
        // line 139
        echo twig_escape_filter($this->env, base_url("template/js/jQuery.print.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 140
        $this->loadTemplate("keuangan/jurnal/js/print.twig", "keuangan/jurnal/print.twig", 140)->display($context);
        echo " ";
    }

    public function getTemplateName()
    {
        return "keuangan/jurnal/print.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 140,  185 => 139,  182 => 138,  179 => 137,  142 => 105,  90 => 56,  34 => 3,  31 => 2,  11 => 1,);
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
                    Print Jurnal Masuk & Keluar
                </h2>
            </div>
            <div class=\"body\">
                <div class=\"row\">
                    <form method=\"POST\">

                        <div class=\"col-sm-12\">
                            <div class=\"row\">

                                <div class=\"col-sm-4\">
                                    <b>No Nota</b>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            <input name=\"nonota\" type=\"text\" class=\"form-control\" />
                                        </div>
                                    </div>
                                </div>

                                <div class=\"col-sm-4\">
                                    <button class=\"btn btn-success btnsendPrint\">Print Jurnal</button>
                                </div>


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
                        <td>
                            <h4 style=\"text-align: center; margin: 10px 0 0px 0;\" class=\"titlejurnal\"></h4>
                        </td>
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

<script src=\"{{ base_url('template/js/jQuery.print.min.js') }}\"></script>
{% include 'keuangan/jurnal/js/print.twig' %} {% endblock %}", "keuangan/jurnal/print.twig", "/home/sipy1897/public_html/demo/apliku/views/keuangan/jurnal/print.twig");
    }
}
