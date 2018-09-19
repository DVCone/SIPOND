<?php

/* keuangan/jurnal/js/print.twig */
class __TwigTemplate_d3ca120d8c0d76c593a13a66a41e521945d53c8843460002aa8a99962c82ff42 extends Twig_Template
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
        echo "<script type=\"text/javascript\">

    \$(document).on('click','.btnsendPrint',function(e){
        e.preventDefault()
        \$.ajax({
            url: '";
        // line 6
        echo twig_escape_filter($this->env, base_url("index.php/jurnal/printnow"), "html", null, true);
        echo "',
            method: \"POST\",
            data: '";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["csrf_name"]) ? $context["csrf_name"] : null), "html", null, true);
        echo "=";
        echo twig_escape_filter($this->env, (isset($context["csrf_hash"]) ? $context["csrf_hash"] : null), "html", null, true);
        echo "&nonota='  + \$('input[name=nonota]').val(),
            dataType: \"json\",
            success: function(res) {
                var data = res.data.id
                datatotable(data)
                \$('#myModal').modal('show');
            }
        });
    })

    function datatotable(data){
        var rekening = \"\"
        var debet = \"\"
        var kredit = \"\"
        var td = 0
        var tk = 0
        var ket=\"\"
        var pp=\"\"
        var dbt = 0
        var krd = 0
        \$.each(data,function(i,v){
            dbt = v.debet
            krd = v.kredit
            rekening += v.rekening+`<br />`
            debet += `Rp. `+(v.debet).toLocaleString()+`<br />`
            kredit += `Rp. `+(v.kredit).toLocaleString()+`<br />`
            ket = v.keterangan
            pp = v.pengguna
            td+=parseInt(v.debet)
            tk+=parseInt(v.kredit)
        })
        if(dbt == 0){
            titlejurnal = \"Bukti Kas Keluar\"
        }else{
            titlejurnal = \"Bukti Kas Masuk\"
        }

        
        \$('.titlejurnal').html(titlejurnal)
        \$('#namapengguna').html(pp)
        \$('#setKeterangan').html(ket)
        \$('#rekeningkode').html(rekening)
        \$('#debetkode').html(debet)
        \$('#kreditkode').html(kredit)
        \$('#modaltotald').html(td)
        \$('#modaltotalk').html(tk)
        
    }


    \$('#btn-modal-print').on('click', function() {
      \$('#printable').print();
   });
</script>";
    }

    public function getTemplateName()
    {
        return "keuangan/jurnal/js/print.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script type=\"text/javascript\">

    \$(document).on('click','.btnsendPrint',function(e){
        e.preventDefault()
        \$.ajax({
            url: '{{base_url(\"index.php/jurnal/printnow\")}}',
            method: \"POST\",
            data: '{{ csrf_name }}={{ csrf_hash }}&nonota='  + \$('input[name=nonota]').val(),
            dataType: \"json\",
            success: function(res) {
                var data = res.data.id
                datatotable(data)
                \$('#myModal').modal('show');
            }
        });
    })

    function datatotable(data){
        var rekening = \"\"
        var debet = \"\"
        var kredit = \"\"
        var td = 0
        var tk = 0
        var ket=\"\"
        var pp=\"\"
        var dbt = 0
        var krd = 0
        \$.each(data,function(i,v){
            dbt = v.debet
            krd = v.kredit
            rekening += v.rekening+`<br />`
            debet += `Rp. `+(v.debet).toLocaleString()+`<br />`
            kredit += `Rp. `+(v.kredit).toLocaleString()+`<br />`
            ket = v.keterangan
            pp = v.pengguna
            td+=parseInt(v.debet)
            tk+=parseInt(v.kredit)
        })
        if(dbt == 0){
            titlejurnal = \"Bukti Kas Keluar\"
        }else{
            titlejurnal = \"Bukti Kas Masuk\"
        }

        
        \$('.titlejurnal').html(titlejurnal)
        \$('#namapengguna').html(pp)
        \$('#setKeterangan').html(ket)
        \$('#rekeningkode').html(rekening)
        \$('#debetkode').html(debet)
        \$('#kreditkode').html(kredit)
        \$('#modaltotald').html(td)
        \$('#modaltotalk').html(tk)
        
    }


    \$('#btn-modal-print').on('click', function() {
      \$('#printable').print();
   });
</script>", "keuangan/jurnal/js/print.twig", "/home/sipy1897/public_html/demo/apliku/views/keuangan/jurnal/js/print.twig");
    }
}
