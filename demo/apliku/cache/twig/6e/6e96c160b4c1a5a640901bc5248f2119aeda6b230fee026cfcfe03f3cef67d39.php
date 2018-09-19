<?php

/* keuangan/rutin/rutinv.twig */
class __TwigTemplate_dbebf1ce6434b924231a18947a79a84b559e4e97cee44d33ead74c63002c02d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/master_layouts.twig", "keuangan/rutin/rutinv.twig", 1);
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

    // line 3
    public function block_main_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container-fluid\">
   <!-- Widgets -->
   <div class=\"row clearfix\">
      <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
         <div class=\"card\">
            <div class=\"header\">
               <form method=\"POST\" id=\"form_keuangan_rutin\">
                  <div class=\"row\">
                     <div class=\"col-sm-8\">
                        <!-- <div class=\"form-group\"> -->
                        <select name=\"cari_siswa\" class=\"form-control show-tick\" data-live-search=\"true\" onchange=\"changeFunc();\" id=\"cari_siswa\">
                           <option value=\"\"></option>
                           ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 17
            echo "                           <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nis", array()), "html", null, true);
            echo "#";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "namasiswa", array()), "html", null, true);
            echo "#";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "kelas", array()), "html", null, true);
            echo "#";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "namaayah", array()), "html", null, true);
            echo "#";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "spp", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nis", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "namasiswa", array()), "html", null, true);
            echo " Kelas ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "kelas", array()), "html", null, true);
            echo " Bin/ti ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "namaayah", array()), "html", null, true);
            echo " SPP: ";
            echo number_format($this->getAttribute($context["m"], "spp", array()));
            echo "</option>
                           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
                        </select>
                        <div class=\"form-group\">
                           <div id=\"error_box\"></div>
                        </div>
                        <!-- </div> -->
                     </div>
                     <div class=\"col-sm-4\">
                        <h2 align=\"right\">
                           SPP DAN KEUANGAN RUTIN
                           <!-- <small>Harap Menisi  Data Kesehatan <a href=\"\">Dengan Teliti</a></small> -->
                        </h2>
                     </div>
                  </div>
            <div class=\"body\">
               <div class=\"row\">

                     <input id=\"nis\" name=\"nis\" type=\"hidden\" class=\"form-control\" readonly />
                     <input id=\"namasiswa\" name=\"namasiswa\" type=\"hidden\" class=\"form-control\" readonly />
                     <input id=\"kelas\" name=\"kelas\" type=\"hidden\" class=\"form-control\" readonly />
                     <input id=\"namaayah\" name=\"namaayah\" type=\"hidden\" class=\"form-control\" readonly />
                     <input id=\"spp\" name=\"spp\" type=\"hidden\" class=\"form-control\" readonly />

                     <div class=\"row\">
                        <div class=\"col-sm-3\">
                           <b>Cash/Trans</b>
                           <div class=\"form-group\">
                              <select name=\"transfer\" class=\"form-control show-tick\" data-live-search=\"true\" id=\"transfer\">
                                 <option value=\"CASH\">CASH</option>
                                 <option value=\"TRANSFER\">TRANSFER</option>
                              </select>
                           </div>
                        </div>
                        <div class=\"col-sm-3\">
                           <b>Tanggal</b>
                           <div class=\"form-group\">
                              <!-- <div class=\"form-line\"> -->
                              <input size = \"15\" type=\"text\" class=\"form-control\" name=\"tanggal\" id=\"tanggalInput\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"  required />
                              <!-- </div> -->
                           </div>
                        </div>

                        <div class=\"col-sm-3\">
                           <b>Tanggal Dokumen</b>
                           <div class=\"form-group\">
                              <!-- <div class=\"form-line\"> -->
                              <input size = \"15\" type=\"text\" class=\"form-control\" name=\"tanggal\" id=\"tanggalInput2\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"  required />
                              <!-- </div> -->
                           </div>
                        </div>
                        <div class=\"col-sm-3\">
                           <b>No Nota</b>
                           <div class=\"form-group\">
                              <!-- <div class=\"form-line\"> -->
                              <input size = \"15\" type=\"text\" class=\"form-control\" name=\"nonota\" id=\"nonota\" readonly required />
                              <!-- </div> -->
                           </div>
                        </div>
                     </div>
                     <!--<br><br><br><br><br><br>-->
                     <div class=\"row\">
                        <div class=\"col-sm-2\">
                           <b>Uang Saku</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"uangsakumasuk\" name=\"uangsakumasuk\" type=\"text\" class=\"form-control\" value=\"0\" onblur=\"updatetotal()\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-2\">
                           <b>Bimbel</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"bimbel\" name=\"bimbel\" type=\"text\" class=\"form-control\" value=\"0\" onblur=\"updatetotal()\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-2\">
                           <b>Daftar Ulang</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"daftarulang\" name=\"daftarulang\" type=\"text\" class=\"form-control\" value=\"0\" onblur=\"updatetotal()\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-2\">
                           <b>Uang Pangkal</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"uangpangkal\" name=\"uangpangkal\" type=\"text\" class=\"form-control\" value=\"0\" onblur=\"updatetotal()\" />
                              </div>
                           </div>
                        </div>


                        <div class=\"col-sm-2\">
                           <b>Infaq</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"infaq\" name=\"infaq\" type=\"text\" class=\"form-control\" value=\"0\" onblur=\"updatetotal()\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-2\">
                           <b>Catatan Infaq</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"catataninfaq\" name=\"catataninfaq\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class=\"row\">
                        <div class=\"col-sm-3\">
                           <!-- <div class=\"form-group\"> -->
                           <select name=\"pilihbulan\" class=\"form-control show-tick\" data-live-search=\"true\" onchange=\"changebulan();\" id=\"selectBox2\">
                              <option value=\"-\">-</option>
                              <option value=\"Januari\">Januari</option>
                              <option value=\"Februari\">Februari</option>
                              <option value=\"Maret\">Maret</option>
                              <option value=\"April\">April</option>
                              <option value=\"Mei\">Mei</option>
                              <option value=\"Juni\">Juni</option>
                              <option value=\"Juli\">Juli</option>
                              <option value=\"Agustus\">Agustus</option>
                              <option value=\"September\">September</option>
                              <option value=\"Oktober\">Oktober</option>
                              <option value=\"November\">November</option>
                              <option value=\"Desember\">Desember</option>

                           </select>
                           <div class=\"form-group\">
                              <div id=\"bulan_error_box\"></div>
                           </div>
                           <!-- </div> -->
                        </div>
                        <div class=\"col-sm-7\">
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"bulan\" name=\"bulan\" type=\"text\" class=\"form-control\" readonly />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-2\">
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"totalbayarspp\" name=\"totalbayarspp\" type=\"text\" class=\"form-control\" readonly />
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class=\"col-sm-12\">
                        <div class=\"form-group\">
                           <input type=\"hidden\" name=\"";
        // line 174
        echo twig_escape_filter($this->env, (isset($context["csrf_name"]) ? $context["csrf_name"] : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["csrf_hash"]) ? $context["csrf_hash"] : null), "html", null, true);
        echo "\" style=\"display: none\">
                           <button type=\"reset\" class=\"btn btn-danger waves-effect\">Batalkan Isian</button>
                           <!--<button class=\"btn btn-primary waves-effect\" data-type=\"success\" onclick=\"return simpanrutin();\" data-toggle=\"modal\" id='btn-modal' data-target=\"#myModal\" >Simpan Data</button>-->
                           <button class=\"btn btn-primary waves-effect\" id='btn-modal' type=\"submit\" >Simpan Data</button>

                           <div id=\"menu-lain\" class=\"pull-right\">
                              <a href=\"";
        // line 180
        echo twig_escape_filter($this->env, base_url("index.php/keuanganrutin/piutang"), "html", null, true);
        echo "\" class=\"btn btn-info m-r-10\">Pembayaran Piutang</a>
                              <a href=\"";
        // line 181
        echo twig_escape_filter($this->env, base_url("index.php/keuanganrutin/datalist_pembayaran"), "html", null, true);
        echo "\" class=\"btn btn-info\">Lihat Laporan</a>
                           </div>
                        </div>
                     </div>
               </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- #END# Widgets -->
   <!-- CPU Usage -->
</div>

<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
   <div class=\"modal-dialog\" style=\"width:80%\">
      <div class=\"modal-content\">
         <div class=\"modal-body printable\" id=\"printable\">
            <div style=\"border-bottom: 2px dashed #333; text-align: center;\">
               <img src=\"";
        // line 200
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "gambar/kopnota.png\" style=\"width: 80%;\">
            </div>

            <table width=\"100%\" style=\"line-height: 1.5em;\">
               <tr>
                  <td style=\"width: 10em;\"></td>
                  <td><h4 style=\"text-align: center; margin: 10px 0 0px 0;\">SPP dan Keuangan Rutin</h4></td>
                  <td style=\"text-align: right; width: 10em;\">
                     <span id=\"tglBukti\" style=\"font-family: courier, sans;\">x</span>
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
                  <td style=\"text-align: right;\">
                     <span id=\"modallokasi\"><!-- Bantul --></span>,
                     <span id=\"modaltanggal\">x</span>
                  </td>
               </tr>
               <tr>
                  <td style=\"width: 15em; padding-left: 10px;\">Pembayar,</td>
                  <td style=\"width: 26em;\"></td>
                  <td style=\"text-align: right;\">Petugas,</td>
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
            <!--<button type=\"button\" class=\"btn btn-primary\" id=\"btn-modal-print\" onclick=\"myprint('printable')\">Print Bukti Penerimaan</button>-->
            <button type=\"button\" class=\"btn btn-primary\" id=\"btn-modal-print\">Print Bukti Penerimaan</button>
         </div>

      </div>

   </div>
</div>
";
    }

    // line 305
    public function block_custom_js($context, array $blocks = array())
    {
        // line 306
        echo "
";
        // line 307
        $this->loadTemplate("layouts/form-validation.twig", "keuangan/rutin/rutinv.twig", 307)->display($context);
        // line 308
        echo "
<script src=\"";
        // line 309
        echo twig_escape_filter($this->env, base_url("template/js/jquery.number.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 310
        echo twig_escape_filter($this->env, base_url("template/js/jQuery.print.min.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\">

   \$('#uangsakumasuk, #bimbel, #daftarulang, #uangpangkal, #infaq, #totalbayarspp').number(true, 0);

   \$('#btn-modal-print').on('click', function() {
      \$('#printable').print();
   });

   function myprint(divname){
      var printContents = document.getElementById(divname).innerHTML;
      var originalContents = document.body.innerHTML;

      document.body.innerHTML = printContents;
      window.print();
      document.body.innerHTML = originalContents;
   }
   function printc(divname){
      var printContents = document.getElementById(divname).innerHTML;
      var originalContents = document.body.innerHTML;

      document.body.innerHTML = printContents;
      window.print();
      document.body.innerHTML = originalContents;
   }

   var sppjanuari=0,sppfebruari=0,sppmaret=0,sppapril=0,sppmei=0,sppjuni=0,sppjuli=0,sppagustus=0,sppseptember=0,sppoktober=0,sppnovember=0,sppdesember=0,totalspp=0,totalnonspp=0,totalsemua=0;
   var sppjanuariakandibayar=0,sppfebruariakandibayar=0,sppmaretakandibayar=0,sppaprilakandibayar=0,sppmeiakandibayar=0,sppjuniakandibayar=0,sppjuliakandibayar=0,sppagustusakandibayar=0,sppseptemberakandibayar=0,sppoktoberakandibayar=0,sppnovemberakandibayar=0,sppdesemberakandibayar=0;


   function carinota(){
      var csrf_token =\$('input[name=";
        // line 342
        echo twig_escape_filter($this->env, (isset($context["csrf_name"]) ? $context["csrf_name"] : null), "html", null, true);
        echo "]').val();
      \$.ajax({
         type  : \"post\",
         data: 'nis='+nis+'&";
        // line 345
        echo twig_escape_filter($this->env, (isset($context["csrf_name"]) ? $context["csrf_name"] : null), "html", null, true);
        echo "='+ csrf_token ,
         url   : '";
        // line 346
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/keuanganrutin/carinonota',
         async : true,
         dataType : 'json',
         success : function(data){
            document.getElementById(\"nonota\").value=parseInt(data[0].maxnota)+1;

         }
      })
   }

   function updatetotal(){
      var adauangsakumasuk=parseInt(\$('input[name=uangsakumasuk]').val());
      var adabimbel=parseInt(\$('input[name=bimbel]').val());
      var adadaftarulang=parseInt(\$('input[name=daftarulang]').val());
      var adauangpangkal=parseInt(\$('input[name=uangpangkal]').val());
      var adainfaq=parseInt(\$('input[name=infaq]').val());
      totalnonspp=adauangsakumasuk+adabimbel+adadaftarulang+adauangpangkal+adainfaq;
      totalsemua=totalspp+totalnonspp;
      //document.getElementById(\"totalbayarspp\").value=totalsemua.toFixed(2).replace(/(\\d)(?=(\\d{3})+\\.)/g, '\$1,');
      \$('#totalbayarspp').val(totalsemua);
   }
   function changebulan() {
      var selectBox2 = document.getElementById(\"selectBox2\");
      var selectedValue = selectBox2.options[selectBox2.selectedIndex].value;
      if (selectedValue != '-')
      {
         var adanis=\$('input[name=nis]').val();
         var adaspp=parseInt(\$('input[name=spp]').val());
         var asalbulan = document.getElementById('bulan').value; // ini untuk mencari bulan di text bulan
         var hasilpencarian = asalbulan.indexOf(selectedValue); // mencari bulan yang sudah ada di text bulan (kalau g ada nilainya -1 baru ok)

         if (adanis!='' && hasilpencarian=='-1') //kalau nis tidak kosong dan bulan belum di pilih maka teruskan
         {
            // ini if mencari apakah bulan tersebut sudah bayar atau belum, kalau belum lanjutkan, kalau sudah maka berhenti
            if ((selectedValue == 'Juli' && sppjuli > 0) ||(selectedValue == 'Agustus' && sppagustus > 0) ||(selectedValue == 'September' && sppseptember > 0) ||(selectedValue == 'Oktober' && sppoktober > 0)
               ||(selectedValue == 'November' && sppnovember > 0) ||(selectedValue == 'Desember' && sppdesember > 0) ||(selectedValue == 'Januari' && sppjanuari > 0) ||(selectedValue == 'Februari' && sppfebruari > 0)
               ||(selectedValue == 'Maret' && sppmaret > 0) ||(selectedValue == 'April' && sppapril > 0) ||(selectedValue == 'Mei' && sppmei > 0) ||(selectedValue == 'Juni' && sppjuni > 0)) {
               // ini sudah ada
               swal(\"Pemberitahuan\", \"PEMBAYARAN BULAN \"+ selectedValue + \" SUDAH LUNAS\", \"info\");
            } else
            {

               //PERIKSA DAN ISI NAMA2 BULAN DI TEXT
               if (\$('input[name=bulan]').val()=='')
               { document.getElementById(\"bulan\").value=selectedValue; } else
               { document.getElementById(\"bulan\").value=\$('input[name=bulan]').val()+\", \"+selectedValue; }
               if (selectedValue == 'Juli'){ sppjuliakandibayar=adaspp; }
               if (selectedValue == 'Agustus'){ sppagustusakandibayar=adaspp; }
               if (selectedValue == 'September'){ sppseptemberakandibayar=adaspp; }
               if (selectedValue == 'Oktober'){ sppoktoberakandibayar=adaspp; }
               if (selectedValue == 'November'){ sppnovemberakandibayar=adaspp; }
               if (selectedValue == 'Desember'){ sppdesemberakandibayar=adaspp; }
               if (selectedValue == 'Januari'){ sppjanuariakandibayar=adaspp; }
               if (selectedValue == 'Februari'){ sppfebruariakandibayar=adaspp; }
               if (selectedValue == 'Maret'){ sppmaretakandibayar=adaspp; }
               if (selectedValue == 'April'){ sppaprilakandibayar=adaspp; }
               if (selectedValue == 'Mei'){ sppmeiakandibayar=adaspp; }
               if (selectedValue == 'Juni'){ sppjuniakandibayar=adaspp; }
               // HITUNG TOTAL
               totalspp=totalspp+adaspp;
               totalsemua=totalspp+totalnonspp;
               document.getElementById(\"totalbayarspp\").value=totalsemua.toFixed(2).replace(/(\\d)(?=(\\d{3})+\\.)/g, '\$1,');;

            }
         }
      }
   }
   function kosongkanbulan(){
      sppjanuariakandibayar='0';sppjanuari='0'; sppfebruariakandibayar='0';sppfebruari='0';
      sppmaretakandibayar='0';sppmaret='0'; sppaprilakandibayar='0';sppapril='0';
      sppmeiakandibayar='0';sppmei='0'; sppjuniakandibayar='0';sppjuni='0';
      sppjuliakandibayar='0';sppjuli='0'; sppagustusakandibayar='0';sppagustus='0';
      sppseptemberakandibayar='0';sppseptember='0'; sppoktoberakandibayar='0';sppoktober='0';
      sppnovemberakandibayar='0';sppnovember='0'; sppdesemberakandibayar='0';sppdesember='0';
   }
   function changeFunc() {
      carinota();
      var selectBox = document.getElementById(\"cari_siswa\");
      var selectedValue = selectBox.options[selectBox.selectedIndex].value;

      var res = selectedValue.split(\"#\");

      document.getElementById(\"nis\").value=res[0];
      document.getElementById(\"namasiswa\").value=res[1];
      document.getElementById(\"kelas\").value=res[2];
      document.getElementById(\"namaayah\").value=res[3];
      document.getElementById(\"spp\").value=res[4];
      //document.getElementById(\"tampil\").value=res[0]+\" a/n \"+res[1]+\" Kelas \"+res[2]+\" Nama Orangtua : \"+res[3]+\" SPP : \"+res[4];//;
      //alert(selectedValue);

      // CARI KE MONITORING
      var nis = res[0];
      var csrf_token =\$('input[name=";
        // line 438
        echo twig_escape_filter($this->env, (isset($context["csrf_name"]) ? $context["csrf_name"] : null), "html", null, true);
        echo "]').val();

      \$.ajax({
         type  : \"post\",
         data: 'nis='+nis+'&";
        // line 442
        echo twig_escape_filter($this->env, (isset($context["csrf_name"]) ? $context["csrf_name"] : null), "html", null, true);
        echo "='+ csrf_token,
         url   : '";
        // line 443
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/keuanganrutin/carimonitoring',
         async : true,
         dataType : 'json',
         success : function(data){
            sppjanuari=data[0].januari;sppfebruari=data[0].februari;sppmaret=data[0].maret;
            sppapril=data[0].april;sppmei=data[0].mei;sppjuni=data[0].juni;
            sppjuli=data[0].juli;sppagustus=data[0].agustus;sppseptember=data[0].september;
            sppoktober=data[0].oktober;sppnovember=data[0].november;sppdesember=data[0].desember;

         }
      })
      // SELESAI CARI MONITORING
   }


//   function simpanrutin(){
//
//      var transfer=\$('select[name=transfer]').val();
//      var nis= \$('input[name=nis]').val();
//      var tanggal=\$('input[name=tanggal]').val();
//      var uangsakumasuk=\$('input[name=uangsakumasuk]').val();
//      var bimbel=\$('input[name=bimbel]').val();
//      var daftarulang=\$('input[name=daftarulang]').val();
//      var uangpangkal=\$('input[name=uangpangkal]').val();
//      var infaq=\$('input[name=infaq]').val();
//      var catataninfaq=\$('input[name=catataninfaq]').val();
//      var januari=sppjanuariakandibayar;
//      var februari=sppfebruariakandibayar;
//      var maret=sppmaretakandibayar;
//      var april=sppaprilakandibayar;
//      var mei=sppmeiakandibayar;
//      var juni=sppjuniakandibayar;
//      var juli=sppjuliakandibayar;
//      var agustus=sppagustusakandibayar;
//      var september=sppseptemberakandibayar;
//      var oktober=sppoktoberakandibayar;
//      var november=sppnovemberakandibayar;
//      var desember=sppdesemberakandibayar;
//      var nonota=\$('input[name=nonota]').val();
//      var <?=\$this->security->get_csrf_token_name();?> =\$('input[name=<?=\$this->security->get_csrf_token_name();?>]').val();
//
//      \$.ajax({
//         method: \"POST\",
//         dataType:\"html\",
//         data: 'nis='+nis+'&tanggal='+tanggal+'&uangsakumasuk='+uangsakumasuk+'&bimbel='+bimbel+'&daftarulang='+daftarulang
//         +'&uangpangkal='+uangpangkal+'&infaq='+infaq+'&januari='+januari+'&februari='+februari+'&maret='+maret+'&april='+april
//         +'&mei='+mei+'&juni='+juni+'&juli='+juli+'&agustus='+agustus
//         +'&september='+september+'&oktober='+oktober+'&november='+november+'&desember='+desember+'&nonota='+nonota+'&transfer='+transfer
//         +'&<?=\$this->security->get_csrf_token_name();?>='+<?=\$this->security->get_csrf_token_name();?>,
//         url:\"<?php echo base_url();?>index.php/keuanganrutin/simpan\",
//         success:function(res){
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

   // \$(function(){
   //    \$(\"#tanggalInput\").datepicker({
   //    dateFormat:\"yy-mm-dd\"
   //       ,changeMonth:true
   //       ,changeYear:true
   //       ,yearRange:\"1930\"
   //     });
   //
   // })
</script>
";
    }

    public function getTemplateName()
    {
        return "keuangan/rutin/rutinv.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  551 => 443,  547 => 442,  540 => 438,  445 => 346,  441 => 345,  435 => 342,  400 => 310,  396 => 309,  393 => 308,  391 => 307,  388 => 306,  385 => 305,  277 => 200,  255 => 181,  251 => 180,  240 => 174,  128 => 65,  116 => 56,  77 => 19,  50 => 17,  46 => 16,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layouts/master_layouts.twig' %}

{% block main_content %}
<div class=\"container-fluid\">
   <!-- Widgets -->
   <div class=\"row clearfix\">
      <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
         <div class=\"card\">
            <div class=\"header\">
               <form method=\"POST\" id=\"form_keuangan_rutin\">
                  <div class=\"row\">
                     <div class=\"col-sm-8\">
                        <!-- <div class=\"form-group\"> -->
                        <select name=\"cari_siswa\" class=\"form-control show-tick\" data-live-search=\"true\" onchange=\"changeFunc();\" id=\"cari_siswa\">
                           <option value=\"\"></option>
                           {% for m in data   %}
                           <option value=\"{{ m.nis }}#{{ m.namasiswa }}#{{ m.kelas }}#{{ m.namaayah }}#{{ m.spp }}\">{{ m.nis }} - {{ m.namasiswa }} Kelas {{ m.kelas }} Bin/ti {{ m.namaayah }} SPP: {{ number_format(m.spp) }}</option>
                           {% endfor %}

                        </select>
                        <div class=\"form-group\">
                           <div id=\"error_box\"></div>
                        </div>
                        <!-- </div> -->
                     </div>
                     <div class=\"col-sm-4\">
                        <h2 align=\"right\">
                           SPP DAN KEUANGAN RUTIN
                           <!-- <small>Harap Menisi  Data Kesehatan <a href=\"\">Dengan Teliti</a></small> -->
                        </h2>
                     </div>
                  </div>
            <div class=\"body\">
               <div class=\"row\">

                     <input id=\"nis\" name=\"nis\" type=\"hidden\" class=\"form-control\" readonly />
                     <input id=\"namasiswa\" name=\"namasiswa\" type=\"hidden\" class=\"form-control\" readonly />
                     <input id=\"kelas\" name=\"kelas\" type=\"hidden\" class=\"form-control\" readonly />
                     <input id=\"namaayah\" name=\"namaayah\" type=\"hidden\" class=\"form-control\" readonly />
                     <input id=\"spp\" name=\"spp\" type=\"hidden\" class=\"form-control\" readonly />

                     <div class=\"row\">
                        <div class=\"col-sm-3\">
                           <b>Cash/Trans</b>
                           <div class=\"form-group\">
                              <select name=\"transfer\" class=\"form-control show-tick\" data-live-search=\"true\" id=\"transfer\">
                                 <option value=\"CASH\">CASH</option>
                                 <option value=\"TRANSFER\">TRANSFER</option>
                              </select>
                           </div>
                        </div>
                        <div class=\"col-sm-3\">
                           <b>Tanggal</b>
                           <div class=\"form-group\">
                              <!-- <div class=\"form-line\"> -->
                              <input size = \"15\" type=\"text\" class=\"form-control\" name=\"tanggal\" id=\"tanggalInput\" value=\"{{ \"now\" | date(\"Y-m-d\") }}\"  required />
                              <!-- </div> -->
                           </div>
                        </div>

                        <div class=\"col-sm-3\">
                           <b>Tanggal Dokumen</b>
                           <div class=\"form-group\">
                              <!-- <div class=\"form-line\"> -->
                              <input size = \"15\" type=\"text\" class=\"form-control\" name=\"tanggal\" id=\"tanggalInput2\" value=\"{{ \"now\" | date(\"Y-m-d\") }}\"  required />
                              <!-- </div> -->
                           </div>
                        </div>
                        <div class=\"col-sm-3\">
                           <b>No Nota</b>
                           <div class=\"form-group\">
                              <!-- <div class=\"form-line\"> -->
                              <input size = \"15\" type=\"text\" class=\"form-control\" name=\"nonota\" id=\"nonota\" readonly required />
                              <!-- </div> -->
                           </div>
                        </div>
                     </div>
                     <!--<br><br><br><br><br><br>-->
                     <div class=\"row\">
                        <div class=\"col-sm-2\">
                           <b>Uang Saku</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"uangsakumasuk\" name=\"uangsakumasuk\" type=\"text\" class=\"form-control\" value=\"0\" onblur=\"updatetotal()\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-2\">
                           <b>Bimbel</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"bimbel\" name=\"bimbel\" type=\"text\" class=\"form-control\" value=\"0\" onblur=\"updatetotal()\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-2\">
                           <b>Daftar Ulang</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"daftarulang\" name=\"daftarulang\" type=\"text\" class=\"form-control\" value=\"0\" onblur=\"updatetotal()\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-2\">
                           <b>Uang Pangkal</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"uangpangkal\" name=\"uangpangkal\" type=\"text\" class=\"form-control\" value=\"0\" onblur=\"updatetotal()\" />
                              </div>
                           </div>
                        </div>


                        <div class=\"col-sm-2\">
                           <b>Infaq</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"infaq\" name=\"infaq\" type=\"text\" class=\"form-control\" value=\"0\" onblur=\"updatetotal()\" />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-2\">
                           <b>Catatan Infaq</b>
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"catataninfaq\" name=\"catataninfaq\" type=\"text\" class=\"form-control\" />
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class=\"row\">
                        <div class=\"col-sm-3\">
                           <!-- <div class=\"form-group\"> -->
                           <select name=\"pilihbulan\" class=\"form-control show-tick\" data-live-search=\"true\" onchange=\"changebulan();\" id=\"selectBox2\">
                              <option value=\"-\">-</option>
                              <option value=\"Januari\">Januari</option>
                              <option value=\"Februari\">Februari</option>
                              <option value=\"Maret\">Maret</option>
                              <option value=\"April\">April</option>
                              <option value=\"Mei\">Mei</option>
                              <option value=\"Juni\">Juni</option>
                              <option value=\"Juli\">Juli</option>
                              <option value=\"Agustus\">Agustus</option>
                              <option value=\"September\">September</option>
                              <option value=\"Oktober\">Oktober</option>
                              <option value=\"November\">November</option>
                              <option value=\"Desember\">Desember</option>

                           </select>
                           <div class=\"form-group\">
                              <div id=\"bulan_error_box\"></div>
                           </div>
                           <!-- </div> -->
                        </div>
                        <div class=\"col-sm-7\">
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"bulan\" name=\"bulan\" type=\"text\" class=\"form-control\" readonly />
                              </div>
                           </div>
                        </div>
                        <div class=\"col-sm-2\">
                           <div class=\"form-group\">
                              <div class=\"form-line\">
                                 <input id=\"totalbayarspp\" name=\"totalbayarspp\" type=\"text\" class=\"form-control\" readonly />
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class=\"col-sm-12\">
                        <div class=\"form-group\">
                           <input type=\"hidden\" name=\"{{ csrf_name }}\" value=\"{{ csrf_hash }}\" style=\"display: none\">
                           <button type=\"reset\" class=\"btn btn-danger waves-effect\">Batalkan Isian</button>
                           <!--<button class=\"btn btn-primary waves-effect\" data-type=\"success\" onclick=\"return simpanrutin();\" data-toggle=\"modal\" id='btn-modal' data-target=\"#myModal\" >Simpan Data</button>-->
                           <button class=\"btn btn-primary waves-effect\" id='btn-modal' type=\"submit\" >Simpan Data</button>

                           <div id=\"menu-lain\" class=\"pull-right\">
                              <a href=\"{{ base_url('index.php/keuanganrutin/piutang') }}\" class=\"btn btn-info m-r-10\">Pembayaran Piutang</a>
                              <a href=\"{{ base_url('index.php/keuanganrutin/datalist_pembayaran') }}\" class=\"btn btn-info\">Lihat Laporan</a>
                           </div>
                        </div>
                     </div>
               </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- #END# Widgets -->
   <!-- CPU Usage -->
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
                  <td><h4 style=\"text-align: center; margin: 10px 0 0px 0;\">SPP dan Keuangan Rutin</h4></td>
                  <td style=\"text-align: right; width: 10em;\">
                     <span id=\"tglBukti\" style=\"font-family: courier, sans;\">x</span>
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
                  <td style=\"text-align: right;\">
                     <span id=\"modallokasi\"><!-- Bantul --></span>,
                     <span id=\"modaltanggal\">x</span>
                  </td>
               </tr>
               <tr>
                  <td style=\"width: 15em; padding-left: 10px;\">Pembayar,</td>
                  <td style=\"width: 26em;\"></td>
                  <td style=\"text-align: right;\">Petugas,</td>
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
            <!--<button type=\"button\" class=\"btn btn-primary\" id=\"btn-modal-print\" onclick=\"myprint('printable')\">Print Bukti Penerimaan</button>-->
            <button type=\"button\" class=\"btn btn-primary\" id=\"btn-modal-print\">Print Bukti Penerimaan</button>
         </div>

      </div>

   </div>
</div>
{% endblock %}

{% block custom_js %}

{% include 'layouts/form-validation.twig' %}

<script src=\"{{ base_url('template/js/jquery.number.min.js') }}\"></script>
<script src=\"{{ base_url('template/js/jQuery.print.min.js') }}\"></script>

<script type=\"text/javascript\">

   \$('#uangsakumasuk, #bimbel, #daftarulang, #uangpangkal, #infaq, #totalbayarspp').number(true, 0);

   \$('#btn-modal-print').on('click', function() {
      \$('#printable').print();
   });

   function myprint(divname){
      var printContents = document.getElementById(divname).innerHTML;
      var originalContents = document.body.innerHTML;

      document.body.innerHTML = printContents;
      window.print();
      document.body.innerHTML = originalContents;
   }
   function printc(divname){
      var printContents = document.getElementById(divname).innerHTML;
      var originalContents = document.body.innerHTML;

      document.body.innerHTML = printContents;
      window.print();
      document.body.innerHTML = originalContents;
   }

   var sppjanuari=0,sppfebruari=0,sppmaret=0,sppapril=0,sppmei=0,sppjuni=0,sppjuli=0,sppagustus=0,sppseptember=0,sppoktober=0,sppnovember=0,sppdesember=0,totalspp=0,totalnonspp=0,totalsemua=0;
   var sppjanuariakandibayar=0,sppfebruariakandibayar=0,sppmaretakandibayar=0,sppaprilakandibayar=0,sppmeiakandibayar=0,sppjuniakandibayar=0,sppjuliakandibayar=0,sppagustusakandibayar=0,sppseptemberakandibayar=0,sppoktoberakandibayar=0,sppnovemberakandibayar=0,sppdesemberakandibayar=0;


   function carinota(){
      var csrf_token =\$('input[name={{ csrf_name }}]').val();
      \$.ajax({
         type  : \"post\",
         data: 'nis='+nis+'&{{ csrf_name }}='+ csrf_token ,
         url   : '{{ base_url() }}index.php/keuanganrutin/carinonota',
         async : true,
         dataType : 'json',
         success : function(data){
            document.getElementById(\"nonota\").value=parseInt(data[0].maxnota)+1;

         }
      })
   }

   function updatetotal(){
      var adauangsakumasuk=parseInt(\$('input[name=uangsakumasuk]').val());
      var adabimbel=parseInt(\$('input[name=bimbel]').val());
      var adadaftarulang=parseInt(\$('input[name=daftarulang]').val());
      var adauangpangkal=parseInt(\$('input[name=uangpangkal]').val());
      var adainfaq=parseInt(\$('input[name=infaq]').val());
      totalnonspp=adauangsakumasuk+adabimbel+adadaftarulang+adauangpangkal+adainfaq;
      totalsemua=totalspp+totalnonspp;
      //document.getElementById(\"totalbayarspp\").value=totalsemua.toFixed(2).replace(/(\\d)(?=(\\d{3})+\\.)/g, '\$1,');
      \$('#totalbayarspp').val(totalsemua);
   }
   function changebulan() {
      var selectBox2 = document.getElementById(\"selectBox2\");
      var selectedValue = selectBox2.options[selectBox2.selectedIndex].value;
      if (selectedValue != '-')
      {
         var adanis=\$('input[name=nis]').val();
         var adaspp=parseInt(\$('input[name=spp]').val());
         var asalbulan = document.getElementById('bulan').value; // ini untuk mencari bulan di text bulan
         var hasilpencarian = asalbulan.indexOf(selectedValue); // mencari bulan yang sudah ada di text bulan (kalau g ada nilainya -1 baru ok)

         if (adanis!='' && hasilpencarian=='-1') //kalau nis tidak kosong dan bulan belum di pilih maka teruskan
         {
            // ini if mencari apakah bulan tersebut sudah bayar atau belum, kalau belum lanjutkan, kalau sudah maka berhenti
            if ((selectedValue == 'Juli' && sppjuli > 0) ||(selectedValue == 'Agustus' && sppagustus > 0) ||(selectedValue == 'September' && sppseptember > 0) ||(selectedValue == 'Oktober' && sppoktober > 0)
               ||(selectedValue == 'November' && sppnovember > 0) ||(selectedValue == 'Desember' && sppdesember > 0) ||(selectedValue == 'Januari' && sppjanuari > 0) ||(selectedValue == 'Februari' && sppfebruari > 0)
               ||(selectedValue == 'Maret' && sppmaret > 0) ||(selectedValue == 'April' && sppapril > 0) ||(selectedValue == 'Mei' && sppmei > 0) ||(selectedValue == 'Juni' && sppjuni > 0)) {
               // ini sudah ada
               swal(\"Pemberitahuan\", \"PEMBAYARAN BULAN \"+ selectedValue + \" SUDAH LUNAS\", \"info\");
            } else
            {

               //PERIKSA DAN ISI NAMA2 BULAN DI TEXT
               if (\$('input[name=bulan]').val()=='')
               { document.getElementById(\"bulan\").value=selectedValue; } else
               { document.getElementById(\"bulan\").value=\$('input[name=bulan]').val()+\", \"+selectedValue; }
               if (selectedValue == 'Juli'){ sppjuliakandibayar=adaspp; }
               if (selectedValue == 'Agustus'){ sppagustusakandibayar=adaspp; }
               if (selectedValue == 'September'){ sppseptemberakandibayar=adaspp; }
               if (selectedValue == 'Oktober'){ sppoktoberakandibayar=adaspp; }
               if (selectedValue == 'November'){ sppnovemberakandibayar=adaspp; }
               if (selectedValue == 'Desember'){ sppdesemberakandibayar=adaspp; }
               if (selectedValue == 'Januari'){ sppjanuariakandibayar=adaspp; }
               if (selectedValue == 'Februari'){ sppfebruariakandibayar=adaspp; }
               if (selectedValue == 'Maret'){ sppmaretakandibayar=adaspp; }
               if (selectedValue == 'April'){ sppaprilakandibayar=adaspp; }
               if (selectedValue == 'Mei'){ sppmeiakandibayar=adaspp; }
               if (selectedValue == 'Juni'){ sppjuniakandibayar=adaspp; }
               // HITUNG TOTAL
               totalspp=totalspp+adaspp;
               totalsemua=totalspp+totalnonspp;
               document.getElementById(\"totalbayarspp\").value=totalsemua.toFixed(2).replace(/(\\d)(?=(\\d{3})+\\.)/g, '\$1,');;

            }
         }
      }
   }
   function kosongkanbulan(){
      sppjanuariakandibayar='0';sppjanuari='0'; sppfebruariakandibayar='0';sppfebruari='0';
      sppmaretakandibayar='0';sppmaret='0'; sppaprilakandibayar='0';sppapril='0';
      sppmeiakandibayar='0';sppmei='0'; sppjuniakandibayar='0';sppjuni='0';
      sppjuliakandibayar='0';sppjuli='0'; sppagustusakandibayar='0';sppagustus='0';
      sppseptemberakandibayar='0';sppseptember='0'; sppoktoberakandibayar='0';sppoktober='0';
      sppnovemberakandibayar='0';sppnovember='0'; sppdesemberakandibayar='0';sppdesember='0';
   }
   function changeFunc() {
      carinota();
      var selectBox = document.getElementById(\"cari_siswa\");
      var selectedValue = selectBox.options[selectBox.selectedIndex].value;

      var res = selectedValue.split(\"#\");

      document.getElementById(\"nis\").value=res[0];
      document.getElementById(\"namasiswa\").value=res[1];
      document.getElementById(\"kelas\").value=res[2];
      document.getElementById(\"namaayah\").value=res[3];
      document.getElementById(\"spp\").value=res[4];
      //document.getElementById(\"tampil\").value=res[0]+\" a/n \"+res[1]+\" Kelas \"+res[2]+\" Nama Orangtua : \"+res[3]+\" SPP : \"+res[4];//;
      //alert(selectedValue);

      // CARI KE MONITORING
      var nis = res[0];
      var csrf_token =\$('input[name={{ csrf_name }}]').val();

      \$.ajax({
         type  : \"post\",
         data: 'nis='+nis+'&{{ csrf_name }}='+ csrf_token,
         url   : '{{ base_url() }}index.php/keuanganrutin/carimonitoring',
         async : true,
         dataType : 'json',
         success : function(data){
            sppjanuari=data[0].januari;sppfebruari=data[0].februari;sppmaret=data[0].maret;
            sppapril=data[0].april;sppmei=data[0].mei;sppjuni=data[0].juni;
            sppjuli=data[0].juli;sppagustus=data[0].agustus;sppseptember=data[0].september;
            sppoktober=data[0].oktober;sppnovember=data[0].november;sppdesember=data[0].desember;

         }
      })
      // SELESAI CARI MONITORING
   }


//   function simpanrutin(){
//
//      var transfer=\$('select[name=transfer]').val();
//      var nis= \$('input[name=nis]').val();
//      var tanggal=\$('input[name=tanggal]').val();
//      var uangsakumasuk=\$('input[name=uangsakumasuk]').val();
//      var bimbel=\$('input[name=bimbel]').val();
//      var daftarulang=\$('input[name=daftarulang]').val();
//      var uangpangkal=\$('input[name=uangpangkal]').val();
//      var infaq=\$('input[name=infaq]').val();
//      var catataninfaq=\$('input[name=catataninfaq]').val();
//      var januari=sppjanuariakandibayar;
//      var februari=sppfebruariakandibayar;
//      var maret=sppmaretakandibayar;
//      var april=sppaprilakandibayar;
//      var mei=sppmeiakandibayar;
//      var juni=sppjuniakandibayar;
//      var juli=sppjuliakandibayar;
//      var agustus=sppagustusakandibayar;
//      var september=sppseptemberakandibayar;
//      var oktober=sppoktoberakandibayar;
//      var november=sppnovemberakandibayar;
//      var desember=sppdesemberakandibayar;
//      var nonota=\$('input[name=nonota]').val();
//      var <?=\$this->security->get_csrf_token_name();?> =\$('input[name=<?=\$this->security->get_csrf_token_name();?>]').val();
//
//      \$.ajax({
//         method: \"POST\",
//         dataType:\"html\",
//         data: 'nis='+nis+'&tanggal='+tanggal+'&uangsakumasuk='+uangsakumasuk+'&bimbel='+bimbel+'&daftarulang='+daftarulang
//         +'&uangpangkal='+uangpangkal+'&infaq='+infaq+'&januari='+januari+'&februari='+februari+'&maret='+maret+'&april='+april
//         +'&mei='+mei+'&juni='+juni+'&juli='+juli+'&agustus='+agustus
//         +'&september='+september+'&oktober='+oktober+'&november='+november+'&desember='+desember+'&nonota='+nonota+'&transfer='+transfer
//         +'&<?=\$this->security->get_csrf_token_name();?>='+<?=\$this->security->get_csrf_token_name();?>,
//         url:\"<?php echo base_url();?>index.php/keuanganrutin/simpan\",
//         success:function(res){
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

   // \$(function(){
   //    \$(\"#tanggalInput\").datepicker({
   //    dateFormat:\"yy-mm-dd\"
   //       ,changeMonth:true
   //       ,changeYear:true
   //       ,yearRange:\"1930\"
   //     });
   //
   // })
</script>
{% endblock %}
", "keuangan/rutin/rutinv.twig", "/home/sipy1897/public_html/demo/apliku/views/keuangan/rutin/rutinv.twig");
    }
}
