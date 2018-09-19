<?php

/* keuangan/kartupelajar.twig */
class __TwigTemplate_7e948ef707168023c290b2672f301a698c7a03434dc4f3decae43ed21a9f2f54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/master_layouts.twig", "keuangan/kartupelajar.twig", 1);
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
         <div class=\"card\"><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#kartu_pelajar\">Launch demo modal</button></div>

      </div>
   </div>
   <!-- #END# Widgets -->
   <!-- CPU Usage -->
</div>

<div class=\"modal fade bd-example-modal-lg\" id=\"kartu_pelajar\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
   <div class=\"modal-dialog modal-lg\" role=\"document\">
      <div class=\"modal-content\">
         <div class=\"modal-body\" id=\"printcard\">
            <div class=\"row\">
               ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["siswa"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 20
            echo "               <div class=\"col-lg-6 col-md-6 col-sm-4 col-xs-6\">
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
            // line 33
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
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "namasiswa", array()), "html", null, true);
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
            // line 54
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
            // line 63
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
            // line 72
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
        // line 96
        echo "            </div>
         </div>
         <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
            <button type=\"button\" class=\"btn btn-primary\" onclick=\"printc('printcard')\">Print</button>
         </div>
      </div>
   </div>
</div>
<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
   <div class=\"modal-dialog\" style=\"width:80%\">
      <div class=\"modal-content\">
         <div class=\"modal-body printable\" id=\"printable\">
            <div style=\"border-bottom: 2px dashed #333; text-align: center;\">
               <img src=\"";
        // line 110
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "gambar/kopnota.png\" style=\"width: 80%;\">
            </div>

            <table width=\"100%\" style=\"line-height: 1.5em;\">
               <tr>
                  <td style=\"width: 10em;\"></td>
                  <td>
                     <h4 style=\"text-align: center; margin: 0px 0 4px 0;\">SPP dan Keuangan Rutin</h4>
                  </td>
                  <td style=\"text-align: right; width: 10em;\">
                     <span id=\"tglBukti\" style=\"font-family: courier, sans; font-size: 10px;\">x</span>
                  </td>
            </table>

            <br>
            <table width=\"100%\" style=\"line-height: 1.3em; font-size: 12px\">
               <tbody>
                  <tr>
                     <td>No Nota</td>
                     <td>:</td>
                     <td colspan=\"2\" id=\"modalnonota\">x</td>
                     <td>Metode Pembayaran</td>
                     <td>:</td>
                     <td id=\"modaltipe\">x</td>
                  </tr>
                  <tr>
                     <td>Wali Santri</td>
                     <td>:</td>
                     <td colspan=\"2\" id=\"modalnamaayah\">x</td>
                  </tr>
                  <tr>
                     <td>Santri</td>
                     <td>:</td>
                     <td colspan=\"2\" id=\"modalnamasiswa\">x</td>
                     <td>Kelas</td>
                     <td>:</td>
                     <td id=\"modalkelas\">x</td>
                  </tr>
               </tbody>
            </table>

            <table width=\"100%\" style=\"margin: 0.5em 0; line-height: 1.5em; font-size: 12px\">
               <tr style=\"font-weight: bold; border-top: 2px dashed #000; border-bottom: 2px dashed #000;\">
                  <th width=\"50%\" style=\"padding: 2px 10px;\">Jenis Pembayaran</th>
                  <th style=\"text-align: right; padding-right: 2em;\">Nominal</th>
               </tr>

               <tr>
                  <td width=\"50%\" style=\"padding: 2px 10px; width: 13em;\">
                     SPP &nbsp; &nbsp; &nbsp; (<span id=\"modalbulanspp\">x</span>)
                     <br> Uang Cuci <br> Daftar Ulang <br> Uang Pangkal <br> Infaq &nbsp; &nbsp; &nbsp; <span id=\"modalcatataninfaq\"></span><br> Uang Saku <br> Bimbingan Belajar / UAN
                  </td>
                  <td style=\"text-align: right; padding: 2px 10px;\">
                     <span id=\"modalspp\">0</span><br>
                     <span id=\"tabelUangCuci\">0</span><br>
                     <span id=\"modaldaftarulang\">0</span><br>
                     <span id=\"modaluangpangkal\">0</span><br>
                     <span id=\"modalinfaq\">0</span><br>
                     <span id=\"modaluangsaku\">0</span><br>
                     <span id=\"modalbimbel\">0</span>
                  </td>
               </tr>
               <tr style=\"font-weight: bold; border-top: 2px dashed #333; border-bottom: 2px dashed #333;\">
                  <td style=\"padding: 2px 10px;\">Jumlah</td>
                  <td style=\"text-align: right; padding: 2px 10px;\">Rp. <span id=\"modaltotal\">x</span></td>
                  <td></td>
               </tr>
            </table>

            <table width=\"100%%\" style=\"line-height: 1.5em; font-size: 12px\">
               <tr>
                  <td colspan=\"2\"></td>
                  <td style=\"text-align: center;\">
                     <span id=\"modallokasi\"><!-- Bantul --></span>,
                     <span id=\"modaltanggal\">x</span>
                  </td>
               </tr>
               <tr>
                  <td style=\"width: 15em; padding-left: 10px;\">Pembayar,</td>
                  <td style=\"width: 26em;\"></td>
                  <td style=\"text-align: center;\">Petugas,</td>
               </tr>
               <tr>
                  <td style=\"padding-left: 10px;height: 70px;vertical-align: bottom;\"></td>
                  <td></td>
                  <td id=\"modalpengguna\" style=\"vertical-align: bottom; text-align: center;\"></td>
               </tr>
            </table>

            <!-- Button trigger modal -->


         </div>
         <div class=\"modal-body\">
            <p id=\"demo\"></p>
         </div>
         <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-primary\" id=\"btn-modal-print\" onclick=\"myprint('printable')\">Print Bukti Penerimaan</button>
         </div>

      </div>

   </div>
</div>
";
    }

    // line 214
    public function block_custom_js($context, array $blocks = array())
    {
        // line 215
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
      window.onafterprint = function() {
         console.log('finish');
      }
   }

   //   var sppjanuari = 0,
   //      sppfebruari = 0,
   //      sppmaret = 0,
   //      sppapril = 0,
   //      sppmei = 0,
   //      sppjuni = 0,
   //      sppjuli = 0,
   //      sppagustus = 0,
   //      sppseptember = 0,
   //      sppoktober = 0,
   //      sppnovember = 0,
   //      sppdesember = 0,
   //      totalspp = 0,
   //      totalnonspp = 0,
   //      totalsemua = 0;
   //   var sppjanuariakandibayar = 0,
   //      sppfebruariakandibayar = 0,
   //      sppmaretakandibayar = 0,
   //      sppaprilakandibayar = 0,
   //      sppmeiakandibayar = 0,
   //      sppjuniakandibayar = 0,
   //      sppjuliakandibayar = 0,
   //      sppagustusakandibayar = 0,
   //      sppseptemberakandibayar = 0,
   //      sppoktoberakandibayar = 0,
   //      sppnovemberakandibayar = 0,
   //      sppdesemberakandibayar = 0;
   //
   //
   //   function carinota() {
   //      var <?=\$this->security->get_csrf_token_name();?> = \$('input[name=<?=\$this->security->get_csrf_token_name();?>]').val();
   //      \$.ajax({
   //         type: \"post\",
   //         data: 'nis=' + nis + '&<?=\$this->security->get_csrf_token_name();?>=' + <?=\$this->security->get_csrf_token_name();?>,
   //         url: '<?php echo base_url()?>index.php/keuanganrutin/carinonota',
   //         async: true,
   //         dataType: 'json',
   //         success: function(data) {
   //            document.getElementById(\"nonota\").value = parseInt(data[0].maxnota) + 1;
   //
   //         }
   //      })
   //   }
   //
   //   function updatetotal() {
   //      var adauangsakumasuk = parseInt(\$('input[name=uangsakumasuk]').val());
   //      var adabimbel = parseInt(\$('input[name=bimbel]').val());
   //      var adadaftarulang = parseInt(\$('input[name=daftarulang]').val());
   //      var adauangpangkal = parseInt(\$('input[name=uangpangkal]').val());
   //      var adainfaq = parseInt(\$('input[name=infaq]').val());
   //      totalnonspp = adauangsakumasuk + adabimbel + adadaftarulang + adauangpangkal + adainfaq;
   //      totalsemua = totalspp + totalnonspp;
   //      document.getElementById(\"totalbayarspp\").value = totalsemua.toFixed(2).replace(/(\\d)(?=(\\d{3})+\\.)/g, '\$1,');
   //   }
   //
   //   function changebulan() {
   //      var selectBox2 = document.getElementById(\"selectBox2\");
   //      var selectedValue = selectBox2.options[selectBox2.selectedIndex].value;
   //      if (selectedValue != '-') {
   //         var adanis = \$('input[name=nis]').val();
   //         var adaspp = parseInt(\$('input[name=spp]').val());
   //         var asalbulan = document.getElementById('bulan').value; // ini untuk mencari bulan di text bulan
   //         var hasilpencarian = asalbulan.indexOf(selectedValue); // mencari bulan yang sudah ada di text bulan (kalau g ada nilainya -1 baru ok)
   //
   //         if (adanis != '' && hasilpencarian == '-1') //kalau nis tidak kosong dan bulan belum di pilih maka teruskan
   //         {
   //            // ini if mencari apakah bulan tersebut sudah bayar atau belum, kalau belum lanjutkan, kalau sudah maka berhenti
   //            if ((selectedValue == 'Juli' && sppjuli > 0) || (selectedValue == 'Agustus' && sppagustus > 0) || (selectedValue == 'September' && sppseptember > 0) || (selectedValue == 'Oktober' && sppoktober > 0) ||
   //               (selectedValue == 'November' && sppnovember > 0) || (selectedValue == 'Desember' && sppdesember > 0) || (selectedValue == 'Januari' && sppjanuari > 0) || (selectedValue == 'Februari' && sppfebruari > 0) ||
   //               (selectedValue == 'Maret' && sppmaret > 0) || (selectedValue == 'April' && sppapril > 0) || (selectedValue == 'Mei' && sppmei > 0) || (selectedValue == 'Juni' && sppjuni > 0)) {
   //               // ini sudah ada
   //               swal(\"Pemberitahuan\", \"PEMBAYARAN BULAN \" + selectedValue + \" SUDAH LUNAS\", \"info\");
   //            } else {
   //
   //               //PERIKSA DAN ISI NAMA2 BULAN DI TEXT
   //               if (\$('input[name=bulan]').val() == '') {
   //                  document.getElementById(\"bulan\").value = selectedValue;
   //               } else {
   //                  document.getElementById(\"bulan\").value = \$('input[name=bulan]').val() + \", \" + selectedValue;
   //               }
   //               if (selectedValue == 'Juli') {
   //                  sppjuliakandibayar = adaspp;
   //               }
   //               if (selectedValue == 'Agustus') {
   //                  sppagustusakandibayar = adaspp;
   //               }
   //               if (selectedValue == 'September') {
   //                  sppseptemberakandibayar = adaspp;
   //               }
   //               if (selectedValue == 'Oktober') {
   //                  sppoktoberakandibayar = adaspp;
   //               }
   //               if (selectedValue == 'November') {
   //                  sppnovemberakandibayar = adaspp;
   //               }
   //               if (selectedValue == 'Desember') {
   //                  sppdesemberakandibayar = adaspp;
   //               }
   //               if (selectedValue == 'Januari') {
   //                  sppjanuariakandibayar = adaspp;
   //               }
   //               if (selectedValue == 'Februari') {
   //                  sppfebruariakandibayar = adaspp;
   //               }
   //               if (selectedValue == 'Maret') {
   //                  sppmaretakandibayar = adaspp;
   //               }
   //               if (selectedValue == 'April') {
   //                  sppaprilakandibayar = adaspp;
   //               }
   //               if (selectedValue == 'Mei') {
   //                  sppmeiakandibayar = adaspp;
   //               }
   //               if (selectedValue == 'Juni') {
   //                  sppjuniakandibayar = adaspp;
   //               }
   //               // HITUNG TOTAL
   //               totalspp = totalspp + adaspp;
   //               totalsemua = totalspp + totalnonspp;
   //               document.getElementById(\"totalbayarspp\").value = totalsemua.toFixed(2).replace(/(\\d)(?=(\\d{3})+\\.)/g, '\$1,');;
   //
   //            }
   //         }
   //      }
   //   }
   //
   //   function kosongkanbulan() {
   //      sppjanuariakandibayar = '0';
   //      sppjanuari = '0';
   //      sppfebruariakandibayar = '0';
   //      sppfebruari = '0';
   //      sppmaretakandibayar = '0';
   //      sppmaret = '0';
   //      sppaprilakandibayar = '0';
   //      sppapril = '0';
   //      sppmeiakandibayar = '0';
   //      sppmei = '0';
   //      sppjuniakandibayar = '0';
   //      sppjuni = '0';
   //      sppjuliakandibayar = '0';
   //      sppjuli = '0';
   //      sppagustusakandibayar = '0';
   //      sppagustus = '0';
   //      sppseptemberakandibayar = '0';
   //      sppseptember = '0';
   //      sppoktoberakandibayar = '0';
   //      sppoktober = '0';
   //      sppnovemberakandibayar = '0';
   //      sppnovember = '0';
   //      sppdesemberakandibayar = '0';
   //      sppdesember = '0';
   //   }
   //
   //   function changeFunc() {
   //      carinota();
   //      var selectBox = document.getElementById(\"selectBox\");
   //      var selectedValue = selectBox.options[selectBox.selectedIndex].value;
   //
   //      var res = selectedValue.split(\"#\");
   //
   //      document.getElementById(\"nis\").value = res[0];
   //      document.getElementById(\"namasiswa\").value = res[1];
   //      document.getElementById(\"kelas\").value = res[2];
   //      document.getElementById(\"namaayah\").value = res[3];
   //      document.getElementById(\"spp\").value = res[4];
   //      //document.getElementById(\"tampil\").value=res[0]+\" a/n \"+res[1]+\" Kelas \"+res[2]+\" Nama Orangtua : \"+res[3]+\" SPP : \"+res[4];//;
   //      //alert(selectedValue);
   //
   //      // CARI KE MONITORING
   //      var nis = res[0];
   //      var <?=\$this->security->get_csrf_token_name();?> = \$('input[name=<?=\$this->security->get_csrf_token_name();?>]').val();
   //
   //      \$.ajax({
   //         type: \"post\",
   //         data: 'nis=' + nis + '&<?=\$this->security->get_csrf_token_name();?>=' + <?=\$this->security->get_csrf_token_name();?>,
   //         url: '<?php echo base_url()?>index.php/keuanganrutin/carimonitoring',
   //         async: true,
   //         dataType: 'json',
   //         success: function(data) {
   //            sppjanuari = data[0].januari;
   //            sppfebruari = data[0].februari;
   //            sppmaret = data[0].maret;
   //            sppapril = data[0].april;
   //            sppmei = data[0].mei;
   //            sppjuni = data[0].juni;
   //            sppjuli = data[0].juli;
   //            sppagustus = data[0].agustus;
   //            sppseptember = data[0].september;
   //            sppoktober = data[0].oktober;
   //            sppnovember = data[0].november;
   //            sppdesember = data[0].desember;
   //
   //         }
   //      })
   //      // SELESAI CARI MONITORING
   //   }
   //
   //   function simpanrutin() {
   //
   //      var transfer = \$('select[name=transfer]').val();
   //      var nis = \$('input[name=nis]').val();
   //      var tanggal = \$('input[name=tanggal]').val();
   //      var uangsakumasuk = \$('input[name=uangsakumasuk]').val();
   //      var bimbel = \$('input[name=bimbel]').val();
   //      var daftarulang = \$('input[name=daftarulang]').val();
   //      var uangpangkal = \$('input[name=uangpangkal]').val();
   //      var infaq = \$('input[name=infaq]').val();
   //      var catataninfaq = \$('input[name=catataninfaq]').val();
   //      var januari = sppjanuariakandibayar;
   //      var februari = sppfebruariakandibayar;
   //      var maret = sppmaretakandibayar;
   //      var april = sppaprilakandibayar;
   //      var mei = sppmeiakandibayar;
   //      var juni = sppjuniakandibayar;
   //      var juli = sppjuliakandibayar;
   //      var agustus = sppagustusakandibayar;
   //      var september = sppseptemberakandibayar;
   //      var oktober = sppoktoberakandibayar;
   //      var november = sppnovemberakandibayar;
   //      var desember = sppdesemberakandibayar;
   //      var nonota = \$('input[name=nonota]').val();
   //      var <?=\$this->security->get_csrf_token_name();?> = \$('input[name=<?=\$this->security->get_csrf_token_name();?>]').val();
   //
   //      \$.ajax({
   //         method: \"POST\",
   //         dataType: \"html\",
   //         data: 'nis=' + nis + '&tanggal=' + tanggal + '&uangsakumasuk=' + uangsakumasuk + '&bimbel=' + bimbel + '&daftarulang=' + daftarulang +
   //            '&uangpangkal=' + uangpangkal + '&infaq=' + infaq + '&januari=' + januari + '&februari=' + februari + '&maret=' + maret + '&april=' + april +
   //            '&mei=' + mei + '&juni=' + juni + '&juli=' + juli + '&agustus=' + agustus +
   //            '&september=' + september + '&oktober=' + oktober + '&november=' + november + '&desember=' + desember + '&nonota=' + nonota + '&transfer=' + transfer +
   //            '&<?=\$this->security->get_csrf_token_name();?>=' + <?=\$this->security->get_csrf_token_name();?>,
   //         url: \"<?php echo base_url();?>index.php/keuanganrutin/simpan\",
   //         success: function(res) {
   //            //swal(\"Selamat!\", \"Data Anda Sudah Tersimpan!\", \"success\");
   //            document.getElementById(\"modalnamasiswa\").innerHTML = \$('input[name=namasiswa]').val();
   //            document.getElementById(\"modalnamaayah\").innerHTML = \$('input[name=namaayah]').val();
   //            document.getElementById(\"modalkelas\").innerHTML = \$('input[name=kelas]').val();
   //            document.getElementById(\"modaluangsaku\").innerHTML = \$('input[name=uangsakumasuk]').val();
   //            document.getElementById(\"modalbimbel\").innerHTML = \$('input[name=bimbel]').val();
   //            document.getElementById(\"modalinfaq\").innerHTML = \$('input[name=infaq]').val();
   //            document.getElementById(\"modaldaftarulang\").innerHTML = \$('input[name=daftarulang]').val();
   //            document.getElementById(\"modaluangpangkal\").innerHTML = \$('input[name=uangpangkal]').val();
   //            document.getElementById(\"modalcatataninfaq\").innerHTML = \$('input[name=catataninfaq]').val();
   //            // document.getElementById(\"modaltanggal\").innerHTML = \$('input[name=tanggal]').val();
   //            // document.getElementById(\"modaltanggaldokumen\").innerHTML = \$('input#tanggalInput2').val();
   //            document.getElementById(\"modaltipe\").innerHTML = \$('select[name=transfer]').val();
   //            document.getElementById(\"modalnonota\").innerHTML = \$('input[name=nonota]').val();
   //            document.getElementById(\"modalspp\").innerHTML = totalspp;
   //            document.getElementById(\"modalbulanspp\").innerHTML = \$('input[name=bulan]').val();
   //            document.getElementById(\"modaltotal\").innerHTML = \$('input[name=totalbayarspp]').val();
   //            document.getElementById(\"modaltanggal\").innerHTML = \$('input[name=tanggal]').val();
   //            document.getElementById(\"modallokasi\").innerHTML = 'Bantul';
   //            kosongkanbulan();
   //            carinota();
   //            document.getElementById(\"formkategori\").reset();
   //         }
   //      })
   //      return false;
   //   }
   //
   //   // \$(function(){
   //   //    \$(\"#tanggalInput\").datepicker({
   //   //    dateFormat:\"yy-mm-dd\"
   //   //       ,changeMonth:true
   //   //       ,changeYear:true
   //   //       ,yearRange:\"1930\"
   //   //     });
   //   //
   //   // })
</script>

";
    }

    public function getTemplateName()
    {
        return "keuangan/kartupelajar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 215,  283 => 214,  174 => 110,  158 => 96,  122 => 72,  108 => 63,  96 => 54,  84 => 45,  69 => 33,  54 => 20,  50 => 19,  31 => 2,  11 => 1,);
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
         <div class=\"card\"><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#kartu_pelajar\">Launch demo modal</button></div>

      </div>
   </div>
   <!-- #END# Widgets -->
   <!-- CPU Usage -->
</div>

<div class=\"modal fade bd-example-modal-lg\" id=\"kartu_pelajar\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
   <div class=\"modal-dialog modal-lg\" role=\"document\">
      <div class=\"modal-content\">
         <div class=\"modal-body\" id=\"printcard\">
            <div class=\"row\">
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
                                       <p>{{  m.namasiswa  }}</p>
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
            </div>
         </div>
         <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
            <button type=\"button\" class=\"btn btn-primary\" onclick=\"printc('printcard')\">Print</button>
         </div>
      </div>
   </div>
</div>
<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
   <div class=\"modal-dialog\" style=\"width:80%\">
      <div class=\"modal-content\">
         <div class=\"modal-body printable\" id=\"printable\">
            <div style=\"border-bottom: 2px dashed #333; text-align: center;\">
               <img src=\"{{ base_url() }}gambar/kopnota.png\" style=\"width: 80%;\">
            </div>

            <table width=\"100%\" style=\"line-height: 1.5em;\">
               <tr>
                  <td style=\"width: 10em;\"></td>
                  <td>
                     <h4 style=\"text-align: center; margin: 0px 0 4px 0;\">SPP dan Keuangan Rutin</h4>
                  </td>
                  <td style=\"text-align: right; width: 10em;\">
                     <span id=\"tglBukti\" style=\"font-family: courier, sans; font-size: 10px;\">x</span>
                  </td>
            </table>

            <br>
            <table width=\"100%\" style=\"line-height: 1.3em; font-size: 12px\">
               <tbody>
                  <tr>
                     <td>No Nota</td>
                     <td>:</td>
                     <td colspan=\"2\" id=\"modalnonota\">x</td>
                     <td>Metode Pembayaran</td>
                     <td>:</td>
                     <td id=\"modaltipe\">x</td>
                  </tr>
                  <tr>
                     <td>Wali Santri</td>
                     <td>:</td>
                     <td colspan=\"2\" id=\"modalnamaayah\">x</td>
                  </tr>
                  <tr>
                     <td>Santri</td>
                     <td>:</td>
                     <td colspan=\"2\" id=\"modalnamasiswa\">x</td>
                     <td>Kelas</td>
                     <td>:</td>
                     <td id=\"modalkelas\">x</td>
                  </tr>
               </tbody>
            </table>

            <table width=\"100%\" style=\"margin: 0.5em 0; line-height: 1.5em; font-size: 12px\">
               <tr style=\"font-weight: bold; border-top: 2px dashed #000; border-bottom: 2px dashed #000;\">
                  <th width=\"50%\" style=\"padding: 2px 10px;\">Jenis Pembayaran</th>
                  <th style=\"text-align: right; padding-right: 2em;\">Nominal</th>
               </tr>

               <tr>
                  <td width=\"50%\" style=\"padding: 2px 10px; width: 13em;\">
                     SPP &nbsp; &nbsp; &nbsp; (<span id=\"modalbulanspp\">x</span>)
                     <br> Uang Cuci <br> Daftar Ulang <br> Uang Pangkal <br> Infaq &nbsp; &nbsp; &nbsp; <span id=\"modalcatataninfaq\"></span><br> Uang Saku <br> Bimbingan Belajar / UAN
                  </td>
                  <td style=\"text-align: right; padding: 2px 10px;\">
                     <span id=\"modalspp\">0</span><br>
                     <span id=\"tabelUangCuci\">0</span><br>
                     <span id=\"modaldaftarulang\">0</span><br>
                     <span id=\"modaluangpangkal\">0</span><br>
                     <span id=\"modalinfaq\">0</span><br>
                     <span id=\"modaluangsaku\">0</span><br>
                     <span id=\"modalbimbel\">0</span>
                  </td>
               </tr>
               <tr style=\"font-weight: bold; border-top: 2px dashed #333; border-bottom: 2px dashed #333;\">
                  <td style=\"padding: 2px 10px;\">Jumlah</td>
                  <td style=\"text-align: right; padding: 2px 10px;\">Rp. <span id=\"modaltotal\">x</span></td>
                  <td></td>
               </tr>
            </table>

            <table width=\"100%%\" style=\"line-height: 1.5em; font-size: 12px\">
               <tr>
                  <td colspan=\"2\"></td>
                  <td style=\"text-align: center;\">
                     <span id=\"modallokasi\"><!-- Bantul --></span>,
                     <span id=\"modaltanggal\">x</span>
                  </td>
               </tr>
               <tr>
                  <td style=\"width: 15em; padding-left: 10px;\">Pembayar,</td>
                  <td style=\"width: 26em;\"></td>
                  <td style=\"text-align: center;\">Petugas,</td>
               </tr>
               <tr>
                  <td style=\"padding-left: 10px;height: 70px;vertical-align: bottom;\"></td>
                  <td></td>
                  <td id=\"modalpengguna\" style=\"vertical-align: bottom; text-align: center;\"></td>
               </tr>
            </table>

            <!-- Button trigger modal -->


         </div>
         <div class=\"modal-body\">
            <p id=\"demo\"></p>
         </div>
         <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-primary\" id=\"btn-modal-print\" onclick=\"myprint('printable')\">Print Bukti Penerimaan</button>
         </div>

      </div>

   </div>
</div>
{% endblock %} {% block custom_js %}

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
      window.onafterprint = function() {
         console.log('finish');
      }
   }

   //   var sppjanuari = 0,
   //      sppfebruari = 0,
   //      sppmaret = 0,
   //      sppapril = 0,
   //      sppmei = 0,
   //      sppjuni = 0,
   //      sppjuli = 0,
   //      sppagustus = 0,
   //      sppseptember = 0,
   //      sppoktober = 0,
   //      sppnovember = 0,
   //      sppdesember = 0,
   //      totalspp = 0,
   //      totalnonspp = 0,
   //      totalsemua = 0;
   //   var sppjanuariakandibayar = 0,
   //      sppfebruariakandibayar = 0,
   //      sppmaretakandibayar = 0,
   //      sppaprilakandibayar = 0,
   //      sppmeiakandibayar = 0,
   //      sppjuniakandibayar = 0,
   //      sppjuliakandibayar = 0,
   //      sppagustusakandibayar = 0,
   //      sppseptemberakandibayar = 0,
   //      sppoktoberakandibayar = 0,
   //      sppnovemberakandibayar = 0,
   //      sppdesemberakandibayar = 0;
   //
   //
   //   function carinota() {
   //      var <?=\$this->security->get_csrf_token_name();?> = \$('input[name=<?=\$this->security->get_csrf_token_name();?>]').val();
   //      \$.ajax({
   //         type: \"post\",
   //         data: 'nis=' + nis + '&<?=\$this->security->get_csrf_token_name();?>=' + <?=\$this->security->get_csrf_token_name();?>,
   //         url: '<?php echo base_url()?>index.php/keuanganrutin/carinonota',
   //         async: true,
   //         dataType: 'json',
   //         success: function(data) {
   //            document.getElementById(\"nonota\").value = parseInt(data[0].maxnota) + 1;
   //
   //         }
   //      })
   //   }
   //
   //   function updatetotal() {
   //      var adauangsakumasuk = parseInt(\$('input[name=uangsakumasuk]').val());
   //      var adabimbel = parseInt(\$('input[name=bimbel]').val());
   //      var adadaftarulang = parseInt(\$('input[name=daftarulang]').val());
   //      var adauangpangkal = parseInt(\$('input[name=uangpangkal]').val());
   //      var adainfaq = parseInt(\$('input[name=infaq]').val());
   //      totalnonspp = adauangsakumasuk + adabimbel + adadaftarulang + adauangpangkal + adainfaq;
   //      totalsemua = totalspp + totalnonspp;
   //      document.getElementById(\"totalbayarspp\").value = totalsemua.toFixed(2).replace(/(\\d)(?=(\\d{3})+\\.)/g, '\$1,');
   //   }
   //
   //   function changebulan() {
   //      var selectBox2 = document.getElementById(\"selectBox2\");
   //      var selectedValue = selectBox2.options[selectBox2.selectedIndex].value;
   //      if (selectedValue != '-') {
   //         var adanis = \$('input[name=nis]').val();
   //         var adaspp = parseInt(\$('input[name=spp]').val());
   //         var asalbulan = document.getElementById('bulan').value; // ini untuk mencari bulan di text bulan
   //         var hasilpencarian = asalbulan.indexOf(selectedValue); // mencari bulan yang sudah ada di text bulan (kalau g ada nilainya -1 baru ok)
   //
   //         if (adanis != '' && hasilpencarian == '-1') //kalau nis tidak kosong dan bulan belum di pilih maka teruskan
   //         {
   //            // ini if mencari apakah bulan tersebut sudah bayar atau belum, kalau belum lanjutkan, kalau sudah maka berhenti
   //            if ((selectedValue == 'Juli' && sppjuli > 0) || (selectedValue == 'Agustus' && sppagustus > 0) || (selectedValue == 'September' && sppseptember > 0) || (selectedValue == 'Oktober' && sppoktober > 0) ||
   //               (selectedValue == 'November' && sppnovember > 0) || (selectedValue == 'Desember' && sppdesember > 0) || (selectedValue == 'Januari' && sppjanuari > 0) || (selectedValue == 'Februari' && sppfebruari > 0) ||
   //               (selectedValue == 'Maret' && sppmaret > 0) || (selectedValue == 'April' && sppapril > 0) || (selectedValue == 'Mei' && sppmei > 0) || (selectedValue == 'Juni' && sppjuni > 0)) {
   //               // ini sudah ada
   //               swal(\"Pemberitahuan\", \"PEMBAYARAN BULAN \" + selectedValue + \" SUDAH LUNAS\", \"info\");
   //            } else {
   //
   //               //PERIKSA DAN ISI NAMA2 BULAN DI TEXT
   //               if (\$('input[name=bulan]').val() == '') {
   //                  document.getElementById(\"bulan\").value = selectedValue;
   //               } else {
   //                  document.getElementById(\"bulan\").value = \$('input[name=bulan]').val() + \", \" + selectedValue;
   //               }
   //               if (selectedValue == 'Juli') {
   //                  sppjuliakandibayar = adaspp;
   //               }
   //               if (selectedValue == 'Agustus') {
   //                  sppagustusakandibayar = adaspp;
   //               }
   //               if (selectedValue == 'September') {
   //                  sppseptemberakandibayar = adaspp;
   //               }
   //               if (selectedValue == 'Oktober') {
   //                  sppoktoberakandibayar = adaspp;
   //               }
   //               if (selectedValue == 'November') {
   //                  sppnovemberakandibayar = adaspp;
   //               }
   //               if (selectedValue == 'Desember') {
   //                  sppdesemberakandibayar = adaspp;
   //               }
   //               if (selectedValue == 'Januari') {
   //                  sppjanuariakandibayar = adaspp;
   //               }
   //               if (selectedValue == 'Februari') {
   //                  sppfebruariakandibayar = adaspp;
   //               }
   //               if (selectedValue == 'Maret') {
   //                  sppmaretakandibayar = adaspp;
   //               }
   //               if (selectedValue == 'April') {
   //                  sppaprilakandibayar = adaspp;
   //               }
   //               if (selectedValue == 'Mei') {
   //                  sppmeiakandibayar = adaspp;
   //               }
   //               if (selectedValue == 'Juni') {
   //                  sppjuniakandibayar = adaspp;
   //               }
   //               // HITUNG TOTAL
   //               totalspp = totalspp + adaspp;
   //               totalsemua = totalspp + totalnonspp;
   //               document.getElementById(\"totalbayarspp\").value = totalsemua.toFixed(2).replace(/(\\d)(?=(\\d{3})+\\.)/g, '\$1,');;
   //
   //            }
   //         }
   //      }
   //   }
   //
   //   function kosongkanbulan() {
   //      sppjanuariakandibayar = '0';
   //      sppjanuari = '0';
   //      sppfebruariakandibayar = '0';
   //      sppfebruari = '0';
   //      sppmaretakandibayar = '0';
   //      sppmaret = '0';
   //      sppaprilakandibayar = '0';
   //      sppapril = '0';
   //      sppmeiakandibayar = '0';
   //      sppmei = '0';
   //      sppjuniakandibayar = '0';
   //      sppjuni = '0';
   //      sppjuliakandibayar = '0';
   //      sppjuli = '0';
   //      sppagustusakandibayar = '0';
   //      sppagustus = '0';
   //      sppseptemberakandibayar = '0';
   //      sppseptember = '0';
   //      sppoktoberakandibayar = '0';
   //      sppoktober = '0';
   //      sppnovemberakandibayar = '0';
   //      sppnovember = '0';
   //      sppdesemberakandibayar = '0';
   //      sppdesember = '0';
   //   }
   //
   //   function changeFunc() {
   //      carinota();
   //      var selectBox = document.getElementById(\"selectBox\");
   //      var selectedValue = selectBox.options[selectBox.selectedIndex].value;
   //
   //      var res = selectedValue.split(\"#\");
   //
   //      document.getElementById(\"nis\").value = res[0];
   //      document.getElementById(\"namasiswa\").value = res[1];
   //      document.getElementById(\"kelas\").value = res[2];
   //      document.getElementById(\"namaayah\").value = res[3];
   //      document.getElementById(\"spp\").value = res[4];
   //      //document.getElementById(\"tampil\").value=res[0]+\" a/n \"+res[1]+\" Kelas \"+res[2]+\" Nama Orangtua : \"+res[3]+\" SPP : \"+res[4];//;
   //      //alert(selectedValue);
   //
   //      // CARI KE MONITORING
   //      var nis = res[0];
   //      var <?=\$this->security->get_csrf_token_name();?> = \$('input[name=<?=\$this->security->get_csrf_token_name();?>]').val();
   //
   //      \$.ajax({
   //         type: \"post\",
   //         data: 'nis=' + nis + '&<?=\$this->security->get_csrf_token_name();?>=' + <?=\$this->security->get_csrf_token_name();?>,
   //         url: '<?php echo base_url()?>index.php/keuanganrutin/carimonitoring',
   //         async: true,
   //         dataType: 'json',
   //         success: function(data) {
   //            sppjanuari = data[0].januari;
   //            sppfebruari = data[0].februari;
   //            sppmaret = data[0].maret;
   //            sppapril = data[0].april;
   //            sppmei = data[0].mei;
   //            sppjuni = data[0].juni;
   //            sppjuli = data[0].juli;
   //            sppagustus = data[0].agustus;
   //            sppseptember = data[0].september;
   //            sppoktober = data[0].oktober;
   //            sppnovember = data[0].november;
   //            sppdesember = data[0].desember;
   //
   //         }
   //      })
   //      // SELESAI CARI MONITORING
   //   }
   //
   //   function simpanrutin() {
   //
   //      var transfer = \$('select[name=transfer]').val();
   //      var nis = \$('input[name=nis]').val();
   //      var tanggal = \$('input[name=tanggal]').val();
   //      var uangsakumasuk = \$('input[name=uangsakumasuk]').val();
   //      var bimbel = \$('input[name=bimbel]').val();
   //      var daftarulang = \$('input[name=daftarulang]').val();
   //      var uangpangkal = \$('input[name=uangpangkal]').val();
   //      var infaq = \$('input[name=infaq]').val();
   //      var catataninfaq = \$('input[name=catataninfaq]').val();
   //      var januari = sppjanuariakandibayar;
   //      var februari = sppfebruariakandibayar;
   //      var maret = sppmaretakandibayar;
   //      var april = sppaprilakandibayar;
   //      var mei = sppmeiakandibayar;
   //      var juni = sppjuniakandibayar;
   //      var juli = sppjuliakandibayar;
   //      var agustus = sppagustusakandibayar;
   //      var september = sppseptemberakandibayar;
   //      var oktober = sppoktoberakandibayar;
   //      var november = sppnovemberakandibayar;
   //      var desember = sppdesemberakandibayar;
   //      var nonota = \$('input[name=nonota]').val();
   //      var <?=\$this->security->get_csrf_token_name();?> = \$('input[name=<?=\$this->security->get_csrf_token_name();?>]').val();
   //
   //      \$.ajax({
   //         method: \"POST\",
   //         dataType: \"html\",
   //         data: 'nis=' + nis + '&tanggal=' + tanggal + '&uangsakumasuk=' + uangsakumasuk + '&bimbel=' + bimbel + '&daftarulang=' + daftarulang +
   //            '&uangpangkal=' + uangpangkal + '&infaq=' + infaq + '&januari=' + januari + '&februari=' + februari + '&maret=' + maret + '&april=' + april +
   //            '&mei=' + mei + '&juni=' + juni + '&juli=' + juli + '&agustus=' + agustus +
   //            '&september=' + september + '&oktober=' + oktober + '&november=' + november + '&desember=' + desember + '&nonota=' + nonota + '&transfer=' + transfer +
   //            '&<?=\$this->security->get_csrf_token_name();?>=' + <?=\$this->security->get_csrf_token_name();?>,
   //         url: \"<?php echo base_url();?>index.php/keuanganrutin/simpan\",
   //         success: function(res) {
   //            //swal(\"Selamat!\", \"Data Anda Sudah Tersimpan!\", \"success\");
   //            document.getElementById(\"modalnamasiswa\").innerHTML = \$('input[name=namasiswa]').val();
   //            document.getElementById(\"modalnamaayah\").innerHTML = \$('input[name=namaayah]').val();
   //            document.getElementById(\"modalkelas\").innerHTML = \$('input[name=kelas]').val();
   //            document.getElementById(\"modaluangsaku\").innerHTML = \$('input[name=uangsakumasuk]').val();
   //            document.getElementById(\"modalbimbel\").innerHTML = \$('input[name=bimbel]').val();
   //            document.getElementById(\"modalinfaq\").innerHTML = \$('input[name=infaq]').val();
   //            document.getElementById(\"modaldaftarulang\").innerHTML = \$('input[name=daftarulang]').val();
   //            document.getElementById(\"modaluangpangkal\").innerHTML = \$('input[name=uangpangkal]').val();
   //            document.getElementById(\"modalcatataninfaq\").innerHTML = \$('input[name=catataninfaq]').val();
   //            // document.getElementById(\"modaltanggal\").innerHTML = \$('input[name=tanggal]').val();
   //            // document.getElementById(\"modaltanggaldokumen\").innerHTML = \$('input#tanggalInput2').val();
   //            document.getElementById(\"modaltipe\").innerHTML = \$('select[name=transfer]').val();
   //            document.getElementById(\"modalnonota\").innerHTML = \$('input[name=nonota]').val();
   //            document.getElementById(\"modalspp\").innerHTML = totalspp;
   //            document.getElementById(\"modalbulanspp\").innerHTML = \$('input[name=bulan]').val();
   //            document.getElementById(\"modaltotal\").innerHTML = \$('input[name=totalbayarspp]').val();
   //            document.getElementById(\"modaltanggal\").innerHTML = \$('input[name=tanggal]').val();
   //            document.getElementById(\"modallokasi\").innerHTML = 'Bantul';
   //            kosongkanbulan();
   //            carinota();
   //            document.getElementById(\"formkategori\").reset();
   //         }
   //      })
   //      return false;
   //   }
   //
   //   // \$(function(){
   //   //    \$(\"#tanggalInput\").datepicker({
   //   //    dateFormat:\"yy-mm-dd\"
   //   //       ,changeMonth:true
   //   //       ,changeYear:true
   //   //       ,yearRange:\"1930\"
   //   //     });
   //   //
   //   // })
</script>

{% endblock %}
", "keuangan/kartupelajar.twig", "/home/sipy1897/public_html/demo/apliku/views/keuangan/kartupelajar.twig");
    }
}
