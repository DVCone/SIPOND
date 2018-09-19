<?php

/* keuangan/jurnal/js/keluar.twig */
class __TwigTemplate_8bad613f8727617e662094c9aec5395a04bc7d2b11bbdb57c432d41762082c40 extends Twig_Template
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
    var dataintable = {}
    loadTable()

    \$(document).on('click', '.btn-add-data', function(e) {
        e.preventDefault();
        addData(); 
    })

    function addData() {
        var obj = Object.keys(dataintable),
        countObj = Object.keys(dataintable).length,
        lastKey = countObj-1

        var indexing = (lastKey<0) ? 0 : parseInt(obj[lastKey])+1 ;

        dataintable[indexing] = {
            \"koderekening\": \$('select[name=kaskeluar]').val(),
            \"nominal\": (isNaN(parseInt(\$('input[name=nominal]').val()))) ? 0 : parseInt(\$('input[name=nominal]').val()),
        }
        resetData()
        loadTable()
    }

    function removeData(id) {
        delete dataintable[id]
        loadTable()
    }

    function resetData() {
        \$('input[name=nominal]').val(\"\")
    }

    function loadTable() {
        var res = \"\"
        if (Object.keys(dataintable).length > 0) {
            var total = 0
            \$.each(dataintable, function(i, v) {
                res += '<tr>'
                res += '<td>'

                res += v.koderekening
                res += '</td>'
                res += '<td>'

                res += v.nominal
                res += '</td>'
                res += '<td>'

                res += '<button class=\"btn btn-danger btn-xs\" onclick=\"removeData(' + i + ')\">Hapus</button>'
                res += '</td>'
                res += '</tr>'


                total += parseInt(v.nominal);
            })
            res += '<tr>'
            res += '<td class=\"text-right\" colspan=\"4\">'
            res += '<button class=\"btn btn-success\" id=\"simpanjurnal\">Simpan Data</button>'
            res += '</td>'
            res += '</tr>'
        } else {
            res += '<tr>'
            res += '<td colspan=\"4\">'
            res += 'No data.'
            res += '</td>'
            res += '</tr>'
            total = 0
        }
        \$('#totalNominal').html(total.toLocaleString());
        \$('#contentTable').html(res);
    }



    \$(document).on('click', '#simpanjurnal', function(e) {
        e.preventDefault();
        \$.ajax({
            url: '";
        // line 79
        echo twig_escape_filter($this->env, base_url("index.php/jurnal/simpan_keluar"), "html", null, true);
        echo "',
            method: \"POST\",
            data: '";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["csrf_name"]) ? $context["csrf_name"] : null), "html", null, true);
        echo "=";
        echo twig_escape_filter($this->env, (isset($context["csrf_hash"]) ? $context["csrf_hash"] : null), "html", null, true);
        echo "&json=' + JSON.stringify(dataintable) + '&rek=' + \$('select[name=cari_siswa]').val() + '&ket=' + \$('input[name=keterangan]').val(),
            dataType: \"json\",
            success: function(res) {
                var data = res.data.id
                datatotable(data)
                notif(\"Jurnal berhasil disimpan!\")
                \$('#myModal').modal('show');
                dataintable = {}
                loadTable()
                \$('input[name=keterangan]').val(\"\")
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
        \$.each(data,function(i,v){
            rekening += v.rekening+`<br />`
            debet += `Rp. `+(v.debet).toLocaleString()+`<br />`
            kredit += `Rp. `+(v.kredit).toLocaleString()+`<br />`
            ket = v.keterangan
            pp = v.pengguna
            td+=parseInt(v.debet)
            tk+=parseInt(v.kredit)
        })
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
        return "keuangan/jurnal/js/keluar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 81,  99 => 79,  19 => 1,);
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
    var dataintable = {}
    loadTable()

    \$(document).on('click', '.btn-add-data', function(e) {
        e.preventDefault();
        addData(); 
    })

    function addData() {
        var obj = Object.keys(dataintable),
        countObj = Object.keys(dataintable).length,
        lastKey = countObj-1

        var indexing = (lastKey<0) ? 0 : parseInt(obj[lastKey])+1 ;

        dataintable[indexing] = {
            \"koderekening\": \$('select[name=kaskeluar]').val(),
            \"nominal\": (isNaN(parseInt(\$('input[name=nominal]').val()))) ? 0 : parseInt(\$('input[name=nominal]').val()),
        }
        resetData()
        loadTable()
    }

    function removeData(id) {
        delete dataintable[id]
        loadTable()
    }

    function resetData() {
        \$('input[name=nominal]').val(\"\")
    }

    function loadTable() {
        var res = \"\"
        if (Object.keys(dataintable).length > 0) {
            var total = 0
            \$.each(dataintable, function(i, v) {
                res += '<tr>'
                res += '<td>'

                res += v.koderekening
                res += '</td>'
                res += '<td>'

                res += v.nominal
                res += '</td>'
                res += '<td>'

                res += '<button class=\"btn btn-danger btn-xs\" onclick=\"removeData(' + i + ')\">Hapus</button>'
                res += '</td>'
                res += '</tr>'


                total += parseInt(v.nominal);
            })
            res += '<tr>'
            res += '<td class=\"text-right\" colspan=\"4\">'
            res += '<button class=\"btn btn-success\" id=\"simpanjurnal\">Simpan Data</button>'
            res += '</td>'
            res += '</tr>'
        } else {
            res += '<tr>'
            res += '<td colspan=\"4\">'
            res += 'No data.'
            res += '</td>'
            res += '</tr>'
            total = 0
        }
        \$('#totalNominal').html(total.toLocaleString());
        \$('#contentTable').html(res);
    }



    \$(document).on('click', '#simpanjurnal', function(e) {
        e.preventDefault();
        \$.ajax({
            url: '{{base_url(\"index.php/jurnal/simpan_keluar\")}}',
            method: \"POST\",
            data: '{{ csrf_name }}={{ csrf_hash }}&json=' + JSON.stringify(dataintable) + '&rek=' + \$('select[name=cari_siswa]').val() + '&ket=' + \$('input[name=keterangan]').val(),
            dataType: \"json\",
            success: function(res) {
                var data = res.data.id
                datatotable(data)
                notif(\"Jurnal berhasil disimpan!\")
                \$('#myModal').modal('show');
                dataintable = {}
                loadTable()
                \$('input[name=keterangan]').val(\"\")
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
        \$.each(data,function(i,v){
            rekening += v.rekening+`<br />`
            debet += `Rp. `+(v.debet).toLocaleString()+`<br />`
            kredit += `Rp. `+(v.kredit).toLocaleString()+`<br />`
            ket = v.keterangan
            pp = v.pengguna
            td+=parseInt(v.debet)
            tk+=parseInt(v.kredit)
        })
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
</script>", "keuangan/jurnal/js/keluar.twig", "/home/sipy1897/public_html/demo/apliku/views/keuangan/jurnal/js/keluar.twig");
    }
}
