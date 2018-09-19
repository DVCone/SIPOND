<section class="content">
   <!-- Jangan Dihilangkan.. Tutupnya ada di footer.php -->
   <div class="container-fluid">
      <!-- Widgets -->
      <div class="row clearfix">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
               <div class="header">
                  
                     <h2 align="right">
                         RAPORT
                        <!-- <small>Harap Menisi  Data Kesehatan <a href="">Dengan Teliti</a></small> -->
                     </h2>
               </div>
               <div class="body">
                  <div class="row clearfix">

                    <div class="col-sm-12" align="center">
                        <h3 style="color:red;">MAAF !!!</h3>
                        <h4 style="color:red">FITUR INI BELUM BISA DIGUNAKAN !</h4>
                        <p style="font-weight: bold;">Anda hanya dapat melihat demo fitur <span style="text-decoration: underline;">raport</span> pada tombol dibawah ini.</p>
                    </div>
                     

                     <div class="col-sm-12">
                        <div class="form-group">
                           <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Demo kartu pelajar</button> -->
                           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#raport">demo raport</button>
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



   <!-- Modal -->
   <!-- <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
            <div class="modal-body" id="printcard">
               <div class="row">
                  <?php foreach($siswa as $m): ?>
                  <div class="col-lg-6 col-md-6 col-sm-4 col-xs-6">
                     <div class="card-hero">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="card-header">
                                 <h1>SMK IT Amal Islami</h1>
                                 <h6>Jl. Lmeburpasir Kel.Sindangsari Kota.Sukabumi</h6>
                              </div>
                           </div>
                           <div class="main">
                              <table>
                                 <tr>
                                    <td>
                                       <img src="<?php echo base_url(); ?>template/images/no-avatar.png" alt="no-avatar" class="img-fluid">
                                    </td>
                                 </tr>
                              </table>
                              <div class="hero">
                                 <table>
                                    <tr>
                                       <td>
                                          <h6>Nama Lengkap</h6>
                                       </td>
                                       <td style="font-size: 10px;">:&nbsp;</td>
                                       <td>
                                          <p class="names"><?php echo $m->namasiswa; ?></p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <h6>No. Induk Siswa</h6>
                                       </td>
                                       <td style="font-size: 10px;">:&nbsp;</td>
                                       <td>
                                          <p><?php echo $m->nis; ?></p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <h6>Tempat/Tanggal Lahir</h6>
                                       </td>
                                       <td style="font-size: 10px;">:&nbsp;</td>
                                       <td>
                                          <p><?php echo date('d F Y', strtotime($m->tanggallahir)); ?></p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <h6>Alamat</h6>
                                       </td>
                                       <td style="font-size: 10px;">:&nbsp;</td>
                                       <td>
                                          <p class="w-address"><?php echo $m->alamat.", ".$m->kelurahan.", ".$m->kecamatan.", ".$m->provinsi; ?> </p>
                                       </td>
                                    </tr>
                                 </table>
                              </div>
                           </div>
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 card-footer">
                              <table width="100%">
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
                  <?php endforeach ?>

               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary" id="btn-printcard">Print</button>
            </div>
         </div>
      </div>
   </div>
   </div>
   </div> -->
<?php include'raport.php'; ?>
  

   <!-- <script type="text/javascript">
    $('#btn-modal-print').on('click', function () {
       $('#printable').print(); 
    });
      $('#btn-printcard').on('click', function () {
       $('#printcard').print(); 
    });
      var sppjanuari = 0,
         sppfebruari = 0,
         sppmaret = 0,
         sppapril = 0,
         sppmei = 0,
         sppjuni = 0,
         sppjuli = 0,
         sppagustus = 0,
         sppseptember = 0,
         sppoktober = 0,
         sppnovember = 0,
         sppdesember = 0,
         totalspp = 0,
         totalnonspp = 0,
         totalsemua = 0;
      var sppjanuariakandibayar = 0,
         sppfebruariakandibayar = 0,
         sppmaretakandibayar = 0,
         sppaprilakandibayar = 0,
         sppmeiakandibayar = 0,
         sppjuniakandibayar = 0,
         sppjuliakandibayar = 0,
         sppagustusakandibayar = 0,
         sppseptemberakandibayar = 0,
         sppoktoberakandibayar = 0,
         sppnovemberakandibayar = 0,
         sppdesemberakandibayar = 0;


      function carinota() {
         var <?=$this->security->get_csrf_token_name();?> = $('input[name=<?=$this->security->get_csrf_token_name();?>]').val();
         $.ajax({
            type: "post",
            data: 'nis=' + nis + '&<?=$this->security->get_csrf_token_name();?>=' + <?=$this->security->get_csrf_token_name();?>,
            url: '<?php echo base_url()?>index.php/keuanganrutin/carinonota',
            async: true,
            dataType: 'json',
            success: function(data) {
               document.getElementById("nonota").value = parseInt(data[0].maxnota) + 1;

            }
         })
      }

      function updatetotal() {
         var adauangsakumasuk = parseInt($('input[name=uangsakumasuk]').val());
         var adabimbel = parseInt($('input[name=bimbel]').val());
         var adadaftarulang = parseInt($('input[name=daftarulang]').val());
         var adauangpangkal = parseInt($('input[name=uangpangkal]').val());
         var adainfaq = parseInt($('input[name=infaq]').val());
         totalnonspp = adauangsakumasuk + adabimbel + adadaftarulang + adauangpangkal + adainfaq;
         totalsemua = totalspp + totalnonspp;
         document.getElementById("totalbayarspp").value = totalsemua.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
      }

      function changebulan() {
         var selectBox2 = document.getElementById("selectBox2");
         var selectedValue = selectBox2.options[selectBox2.selectedIndex].value;
         if (selectedValue != '-') {
            var adanis = $('input[name=nis]').val();
            var adaspp = parseInt($('input[name=spp]').val());
            var asalbulan = document.getElementById('bulan').value; // ini untuk mencari bulan di text bulan
            var hasilpencarian = asalbulan.indexOf(selectedValue); // mencari bulan yang sudah ada di text bulan (kalau g ada nilainya -1 baru ok)

            if (adanis != '' && hasilpencarian == '-1') //kalau nis tidak kosong dan bulan belum di pilih maka teruskan
            {
               // ini if mencari apakah bulan tersebut sudah bayar atau belum, kalau belum lanjutkan, kalau sudah maka berhenti
               if ((selectedValue == 'Juli' && sppjuli > 0) || (selectedValue == 'Agustus' && sppagustus > 0) || (selectedValue == 'September' && sppseptember > 0) || (selectedValue == 'Oktober' && sppoktober > 0) ||
                  (selectedValue == 'November' && sppnovember > 0) || (selectedValue == 'Desember' && sppdesember > 0) || (selectedValue == 'Januari' && sppjanuari > 0) || (selectedValue == 'Februari' && sppfebruari > 0) ||
                  (selectedValue == 'Maret' && sppmaret > 0) || (selectedValue == 'April' && sppapril > 0) || (selectedValue == 'Mei' && sppmei > 0) || (selectedValue == 'Juni' && sppjuni > 0)) {
                  // ini sudah ada
                  swal("Pemberitahuan", "PEMBAYARAN BULAN " + selectedValue + " SUDAH LUNAS", "info");
               } else {

                  //PERIKSA DAN ISI NAMA2 BULAN DI TEXT
                  if ($('input[name=bulan]').val() == '') {
                     document.getElementById("bulan").value = selectedValue;
                  } else {
                     document.getElementById("bulan").value = $('input[name=bulan]').val() + ", " + selectedValue;
                  }
                  if (selectedValue == 'Juli') {
                     sppjuliakandibayar = adaspp;
                  }
                  if (selectedValue == 'Agustus') {
                     sppagustusakandibayar = adaspp;
                  }
                  if (selectedValue == 'September') {
                     sppseptemberakandibayar = adaspp;
                  }
                  if (selectedValue == 'Oktober') {
                     sppoktoberakandibayar = adaspp;
                  }
                  if (selectedValue == 'November') {
                     sppnovemberakandibayar = adaspp;
                  }
                  if (selectedValue == 'Desember') {
                     sppdesemberakandibayar = adaspp;
                  }
                  if (selectedValue == 'Januari') {
                     sppjanuariakandibayar = adaspp;
                  }
                  if (selectedValue == 'Februari') {
                     sppfebruariakandibayar = adaspp;
                  }
                  if (selectedValue == 'Maret') {
                     sppmaretakandibayar = adaspp;
                  }
                  if (selectedValue == 'April') {
                     sppaprilakandibayar = adaspp;
                  }
                  if (selectedValue == 'Mei') {
                     sppmeiakandibayar = adaspp;
                  }
                  if (selectedValue == 'Juni') {
                     sppjuniakandibayar = adaspp;
                  }
                  // HITUNG TOTAL
                  totalspp = totalspp + adaspp;
                  totalsemua = totalspp + totalnonspp;
                  document.getElementById("totalbayarspp").value = totalsemua.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');;

               }
            }
         }
      }

      function kosongkanbulan() {
         sppjanuariakandibayar = '0';
         sppjanuari = '0';
         sppfebruariakandibayar = '0';
         sppfebruari = '0';
         sppmaretakandibayar = '0';
         sppmaret = '0';
         sppaprilakandibayar = '0';
         sppapril = '0';
         sppmeiakandibayar = '0';
         sppmei = '0';
         sppjuniakandibayar = '0';
         sppjuni = '0';
         sppjuliakandibayar = '0';
         sppjuli = '0';
         sppagustusakandibayar = '0';
         sppagustus = '0';
         sppseptemberakandibayar = '0';
         sppseptember = '0';
         sppoktoberakandibayar = '0';
         sppoktober = '0';
         sppnovemberakandibayar = '0';
         sppnovember = '0';
         sppdesemberakandibayar = '0';
         sppdesember = '0';
      }

      function changeFunc() {
         carinota();
         var selectBox = document.getElementById("selectBox");
         var selectedValue = selectBox.options[selectBox.selectedIndex].value;

         var res = selectedValue.split("#");

         document.getElementById("nis").value = res[0];
         document.getElementById("namasiswa").value = res[1];
         document.getElementById("kelas").value = res[2];
         document.getElementById("namaayah").value = res[3];
         document.getElementById("spp").value = res[4];
         //document.getElementById("tampil").value=res[0]+" a/n "+res[1]+" Kelas "+res[2]+" Nama Orangtua : "+res[3]+" SPP : "+res[4];//;
         //alert(selectedValue);

         // CARI KE MONITORING
         var nis = res[0];
         var <?=$this->security->get_csrf_token_name();?> = $('input[name=<?=$this->security->get_csrf_token_name();?>]').val();

         $.ajax({
            type: "post",
            data: 'nis=' + nis + '&<?=$this->security->get_csrf_token_name();?>=' + <?=$this->security->get_csrf_token_name();?>,
            url: '<?php echo base_url()?>index.php/keuanganrutin/carimonitoring',
            async: true,
            dataType: 'json',
            success: function(data) {
               sppjanuari = data[0].januari;
               sppfebruari = data[0].februari;
               sppmaret = data[0].maret;
               sppapril = data[0].april;
               sppmei = data[0].mei;
               sppjuni = data[0].juni;
               sppjuli = data[0].juli;
               sppagustus = data[0].agustus;
               sppseptember = data[0].september;
               sppoktober = data[0].oktober;
               sppnovember = data[0].november;
               sppdesember = data[0].desember;

            }
         })
         // SELESAI CARI MONITORING
      }

      function simpanrutin() {

         var transfer = $('select[name=transfer]').val();
         var nis = $('input[name=nis]').val();
         var tanggal = $('input[name=tanggal]').val();
         var uangsakumasuk = $('input[name=uangsakumasuk]').val();
         var bimbel = $('input[name=bimbel]').val();
         var daftarulang = $('input[name=daftarulang]').val();
         var uangpangkal = $('input[name=uangpangkal]').val();
         var infaq = $('input[name=infaq]').val();
         var catataninfaq = $('input[name=catataninfaq]').val();
         var januari = sppjanuariakandibayar;
         var februari = sppfebruariakandibayar;
         var maret = sppmaretakandibayar;
         var april = sppaprilakandibayar;
         var mei = sppmeiakandibayar;
         var juni = sppjuniakandibayar;
         var juli = sppjuliakandibayar;
         var agustus = sppagustusakandibayar;
         var september = sppseptemberakandibayar;
         var oktober = sppoktoberakandibayar;
         var november = sppnovemberakandibayar;
         var desember = sppdesemberakandibayar;
         var nonota = $('input[name=nonota]').val();
         var <?=$this->security->get_csrf_token_name();?> = $('input[name=<?=$this->security->get_csrf_token_name();?>]').val();

         $.ajax({
            method: "POST",
            dataType: "html",
            data: 'nis=' + nis + '&tanggal=' + tanggal + '&uangsakumasuk=' + uangsakumasuk + '&bimbel=' + bimbel + '&daftarulang=' + daftarulang +
               '&uangpangkal=' + uangpangkal + '&infaq=' + infaq + '&januari=' + januari + '&februari=' + februari + '&maret=' + maret + '&april=' + april +
               '&mei=' + mei + '&juni=' + juni + '&juli=' + juli + '&agustus=' + agustus +
               '&september=' + september + '&oktober=' + oktober + '&november=' + november + '&desember=' + desember + '&nonota=' + nonota + '&transfer=' + transfer +
               '&<?=$this->security->get_csrf_token_name();?>=' + <?=$this->security->get_csrf_token_name();?>,
            url: "<?php echo base_url();?>index.php/keuanganrutin/simpan",
            success: function(res) {
               //swal("Selamat!", "Data Anda Sudah Tersimpan!", "success");
               document.getElementById("modalnamasiswa").innerHTML = $('input[name=namasiswa]').val();
               document.getElementById("modalnamaayah").innerHTML = $('input[name=namaayah]').val();
               document.getElementById("modalkelas").innerHTML = $('input[name=kelas]').val();
               document.getElementById("modaluangsaku").innerHTML = $('input[name=uangsakumasuk]').val();
               document.getElementById("modalbimbel").innerHTML = $('input[name=bimbel]').val();
               document.getElementById("modalinfaq").innerHTML = $('input[name=infaq]').val();
               document.getElementById("modaldaftarulang").innerHTML = $('input[name=daftarulang]').val();
               document.getElementById("modaluangpangkal").innerHTML = $('input[name=uangpangkal]').val();
               document.getElementById("modalcatataninfaq").innerHTML = $('input[name=catataninfaq]').val();
               // document.getElementById("modaltanggal").innerHTML = $('input[name=tanggal]').val();
               // document.getElementById("modaltanggaldokumen").innerHTML = $('input#tanggalInput2').val();
               document.getElementById("modaltipe").innerHTML = $('select[name=transfer]').val();
               document.getElementById("modalnonota").innerHTML = $('input[name=nonota]').val();
               document.getElementById("modalspp").innerHTML = totalspp;
               document.getElementById("modalbulanspp").innerHTML = $('input[name=bulan]').val();
               document.getElementById("modaltotal").innerHTML = $('input[name=totalbayarspp]').val();
               document.getElementById("modaltanggal").innerHTML = $('input[name=tanggal]').val();
               document.getElementById("modallokasi").innerHTML = 'Bantul';
               kosongkanbulan();
               carinota();
               document.getElementById("formkategori").reset();
            }
         })
         return false;
      }

      // $(function(){
      //    $("#tanggalInput").datepicker({
      //    dateFormat:"yy-mm-dd"
      //       ,changeMonth:true
      //       ,changeYear:true
      //       ,yearRange:"1930"
      //     });
      //
      // })
   </script> -->
