$(function() {

   $('input#tanggalInput, input#tanggalInput2').daterangepicker({
      singleDatePicker: true,
      locale: {
         format: 'YYYY-MM-DD',
      }
   })

   function validate_name(id) {

      if (id.charAt(0) == "`" && id.charAt(id.length - 1) == "`") {
         while (id.charAt(0) == "`" && id.charAt(id.length - 1)) {
            id = id.substring(1, id.length - 1);
         }
      } else if (id.charAt(0) == "`") {
         while (id.charAt(0) == "`") {
            id = id.substring(1);
         }
      } else if (id.charAt(id.length - 1) == "`") {
         while (id.charAt(id.length - 1) == "`") {
            id = id.substring(0, id.length - 1);
         }
      }
   };

   $('#form_validation').validate({
      rules: {
         'checkbox': {
            required: true
         },
         'gender': {
            required: true
         }
      },
      highlight: function(input) {
         $(input).parents('.form-line').addClass('error');
      },
      unhighlight: function(input) {
         $(input).parents('.form-line').removeClass('error');
      },
      errorPlacement: function(error, element) {
         $(element).parents('.form-group').append(error);
      }
   });

   //Advanced Form Validation
   $('#form_advanced_validation').validate({
      rules: {
         'date': {
            customdate: true
         },
         'creditcard': {
            creditcard: true
         }
      },
      highlight: function(input) {
         $(input).parents('.form-line').addClass('error');
      },
      unhighlight: function(input) {
         $(input).parents('.form-line').removeClass('error');
      },
      errorPlacement: function(error, element) {
         $(element).parents('.form-group').append(error);
      }
   });

   // Test Form Validation
   $('#form_test').validate({
      rules: {
         input_userid: {
            required: true,
            customname: true
         },
         input_password: 'required',
         input_confirm_password: {
            required: true,
            equalTo: "#input_password"
         },
         input_dept: 'required',
         input_kodenota: 'required',
      },
      submitHandler: function() {
         var form_data = $('#form_test').find('input').not('#input_userid').serializeArray();
         var input_userid = $('#input_userid').val();

         validate_name(input_userid);


         form_data.push({
            name: "input_userid",
            value: input_userid
         });

         $.ajax({
            method: "POST",
            url: "/index.php/test/add",
            data: form_data,
            success: function() {
               $('#form_test')[0].reset();
               swal("Selamat!", "Data Anda Telah Tersimpan", "success");
            },
            error: function() {
               swal("Gagal!", "Data Tidak Bisa Disimpan", "warning");
            },
         })
      },
   });

   //form pengision biodata siswa
   $('#form_biodata_siswa').validate({
      rules: {
         namasiswaawal: {
            required: true,
            customname: true
         },
         kotalahir: {
            required: true,
            lettersonly: true,
         },
         spp: {
            number: true,
         },
         daftarulang: {
            number: true,
         },
      },
      submitHandler: function() {
         var form_data = $('#form_biodata_siswa').find('input, select').not('input[name=namasiswaawal]').serializeArray();
         var namasiswa = $('input[name=namasiswaawal]').val();

         validate_name(namasiswa);

         form_data.push({
            name: "namasiswa",
            value: namasiswa
         });

         $.ajax({
            method: "POST",
            dataType: "json",
            url: "/index.php/siswa/carinisterakhir",
            data: form_data,
            success: function(res) {
               $('#form_biodata_siswa')[0].reset();
               $('#nisisiayah').val(res);
               $('#nisisiibu').val(res);
               $('#nikisialamat').val(res);
               $('#btnbiodata').attr('disabled', true);
               $('#btnayah').removeAttr('disabled');
               $('#btnibu').removeAttr('disabled');
               $('#btnalamat').removeAttr('disabled');
               swal("Selamat!", "Data Anda Telah Tersimpan", "success");
            },
            error: function() {
               swal("Gagal!", "Data Tidak Bisa Disimpan", "warning");
            },
         })
      },
   });

   // form ayah sisiwa
   $('#form_ayah').validate({
      rules: {
         nokk: {
            required: true,
            number: true
         },
         noktpayah: {
            required: true,
            number: true,
         },
         namaayah: {
            required: true,
            customname: true,
         },
         ttlayah: {
            required: true,
            ttl: true,
         },
         email: {
            email: true,
         },
         pendidikanayah: {
            required: true,
         },
         pekerjaanayah: {
            lettersonly: true,
         },
         gajiayah: {
            number: true,
         }
      },
      submitHandler: function() {
         var form_data = $('#form_ayah').find('input').not('input[name=namaayah], input[name=nisisiayah]').serializeArray();
         var namaayah = $('input[name=namaayah]').val();
         var nis = $('input[name=nisisiayah]').val();

         validate_name(namaayah);

         form_data.push({
            name: "namaayah",
            value: namaayah
         });

         form_data.push({
            name: "nis",
            value: nis
         });

         $.ajax({
            method: "POST",
            dataType: "json",
            url: "/index.php/siswa/updateayah",
            data: form_data,
            success: function() {
               $('#form_ayah')[0].reset();
               $('#biodata_ibu').click();
               swal("Selamat!", "Data Anda Telah Tersimpan", "success");
            },
            error: function() {
               swal("Gagal!", "Data Tidak Bisa Disimpan", "warning");
            },
         })
      },
   });

   // form biodata ibu
   $('#form_ibu').validate({
      rules: {
         noktpibu: {
            required: true,
            number: true,
         },
         namaibu: {
            required: true,
            customname: true,
         },
         ttlibu: {
            required: true,
            ttl: true,
         },
         email: {
            email: true,
         },
         pendidikanibu: {
            required: true,
         },
         pekerjaanibu: {
            lettersonly: true,
         },
         gajiibu: {
            number: true,
         }
      },
      submitHandler: function() {
         var form_data = $('#form_ibu').find('input').not('input[name=namaibu], input[name=nisisiibu]').serializeArray();
         var namaibu = $('input[name=namaibu]').val();
         var nis = $('input[name=nisisiibu]').val();

         validate_name(namaibu);

         form_data.push({
            name: "namaibu",
            value: namaibu
         });

         form_data.push({
            name: "nis",
            value: nis
         });

         $.ajax({
            method: "POST",
            dataType: "json",
            url: "/index.php/siswa/updateibu",
            data: form_data,
            success: function() {
               $('#form_ibu')[0].reset();
               $('#biodata_ibu').click();
               swal("Selamat!", "Data Anda Telah Tersimpan", "success");
            },
            error: function() {
               swal("Gagal!", "Data Tidak Bisa Disimpan", "warning");
            },
         })
      },
   });

   // form alamat
   $('#form_alamat').validate({
      rules: {
         alamat: {
            required: true,
            alamat: true,
         },
         kelurahan: {
            required: true,
            alamat: true,
         },
         kecamatan: {
            required: true,
            alamat: true,
         },
         kota: {
            required: true,
            lettersonly: true,
         },
         provinsi: {
            required: true,
            lettersonly: true,
         },
      },
      submitHandler: function() {
         var form_data = $('#form_alamat').find('input').not('input[name=nikisialamat]').serializeArray();
         var nis = $('input[name=nikisialamat]').val();

         form_data.push({
            name: "nis",
            value: nis
         });

         $.ajax({
            method: "POST",
            dataType: "json",
            url: "/index.php/siswa/updatealamat",
            data: form_data,
            success: function() {
               $('#form_alamat')[0].reset();
               $('#biodata_alamat_siswa').click();
               swal("Selamat!", "Data Anda Telah Tersimpan", "success");
            },
            error: function() {
               swal("Gagal!", "Data Tidak Bisa Disimpan", "warning");
            },
         })
      },
   });

   $('#add_new_siswa').on('click', function(e) {
      $('a[href="#biodata_siswa_baru"]').tab('show');
      $('#form_biodata_siswa')[0].reset();
      $('#form_ayah')[0].reset();
      $('#form_ibu')[0].reset();
      $('#form_alamat')[0].reset();
      $('#btnbiodata').attr('disabled', false);
      $('#btnayah').attr('disabled', true, );
      $('#btnibu').attr('disabled', true);
      $('#btnalamat').attr('disabled', true);

   })

   //form pengision biodata guru
   $('#form_add_karyawan').validate({
      rules: {
         nama_guru: {
            required: true,
            customname: true
         },
         kotalahir: {
            required: true,
            lettersonly: true,
         },
         jabatan: {
            required: true,
            lettersonly: true,
         },
         nohp1: {
            required: true,
            number: true,
         }
      },
      submitHandler: function() {
         var form_data = $('#form_add_karyawan').find('input, select').not('input[name=nama_guru]').serializeArray();
         var nama = $('input[name=nama_guru]').val();

         validate_name(nama);

         form_data.push({
            name: "nama",
            value: nama
         });

         $.ajax({
            method: "POST",
            dataType: "json",
            url: "/index.php/karyawan/carinisterakhir",
            data: form_data,
            success: function(res) {
               $('#form_add_karyawan')[0].reset();
               $('#nikisialamat').val(res);
               swal("Selamat!", "Data Anda Telah Tersimpan", "success");
               $('#btnbiodata').attr('disabled', true);
               $('#btnalamat').removeAttr('disabled');
            },
            error: function() {
               swal("Gagal!", "Data Tidak Bisa Disimpan", "warning");
            },
         })
      },
   });

   $('#add_new_karyawan').on('click', function(e) {
      $('a[href="#karyawan_biodata"]').tab('show');
      $('#form_add_karyawan')[0].reset();
      $('#form_alamat_guru')[0].reset();
      $('#btnbiodata').attr('disabled', false);
      $('#btnalamat').attr('disabled', true);
   })

   // form alamat guru
   $('#form_alamat_guru').validate({
      rules: {
         alamat: {
            required: true,
            alamat: true,
         },
         kelurahan: {
            required: true,
            alamat: true,
         },
         kecamatan: {
            required: true,
            alamat: true,
         },
         kota: {
            required: true,
            lettersonly: true,
         },
         provinsi: {
            required: true,
            lettersonly: true,
         },
      },
      submitHandler: function() {
         var form_data = $('#form_alamat_guru').find('input').not('input[name=nikisialamat]').serializeArray();
         var nik = $('#nikisialamat').val();

         form_data.push({
            name: "nik",
            value: nik
         });

         $.ajax({
            method: "POST",
            dataType: "json",
            url: "/index.php/karyawan/updatealamat",
            data: form_data,
            success: function() {
               $('#form_alamat_guru')[0].reset();
               swal("Selamat!", "Data Anda Telah Tersimpan", "success");
            },
            error: function() {
               swal("Gagal!", "Data Tidak Bisa Disimpan", "warning");
            },
         })
      },
   });

   //form keuangan rutin
   $('#form_keuangan_rutin').validate({
      rules: {
         cari_siswa: {
            required: true,
         },
         uangsakumasuk: {
            required: true,
            number: true,
         },
         bimbel: {
            number: true,
         },
         daftarulang: {
            number: true,
         },
         uangpangkal: {
            number: true,
         },
         pilihbulan: {
            required: true,
            selectBox: true,
         },
         infaq: {
            number: true,
         },
         catataninfaq: {
            halaman: true,
         },
      },
      submitHandler: function() {
         var form_data = $('#form_keuangan_rutin').serializeArray();
         form_data.push({
            name: "januari",
            value: sppjanuariakandibayar,
         });
         form_data.push({
            name: "februari",
            value: sppfebruariakandibayar,
         });
         form_data.push({
            name: "maret",
            value: sppmaretakandibayar,
         });
         form_data.push({
            name: "april",
            value: sppaprilakandibayar,
         });
         form_data.push({
            name: "mei",
            value: sppmeiakandibayar,
         });
         form_data.push({
            name: "juni",
            value: sppjuniakandibayar,
         });
         form_data.push({
            name: "juli",
            value: sppjuliakandibayar,
         });
         form_data.push({
            name: "agustus",
            value: sppagustusakandibayar,
         });
         form_data.push({
            name: "september",
            value: sppseptemberakandibayar,
         });
         form_data.push({
            name: "oktober",
            value: sppoktoberakandibayar,
         });
         form_data.push({
            name: "november",
            value: sppnovemberakandibayar,
         });
         form_data.push({
            name: "desember",
            value: sppdesemberakandibayar,
         });

         $.ajax({
            url: '/index.php/keuanganrutin/simpan',
            type: 'POST',
            dataType: 'html',
            data: form_data,
            success: function(res) {
               $('#modalnamasiswa').html($('input[name=namasiswa]').val());
               $('#modalnamaayah').html($('input[name=namaayah]').val());
               $('#modalkelas').html($('input[name=kelas]').val());
               $('#modaluangsaku').html($.number($('input[name=uangsakumasuk]').val()));
               $('#modalbimbel').html($.number($('input[name=bimbel]').val()));
               $('#modalinfaq').html($.number($('input[name=infaq]').val()));
               $('#modaldaftarulang').html($.number($('input[name=daftarulang]').val()));
               $('#modaluangpangkal').html($.number($('input[name=uangpangkal]').val()));
               $('#modalcatataninfaq').html($('input[name=catataninfaq]').val());
               $('#modaltipe').html($('select[name=transfer]').val());
               $('#modalnonota').html($('input[name=nonota]').val());
               $('#modalbulanspp').html($('input[name=bulan]').val());
               $('#modalspp').html($.number(totalspp));
               $('#modaltotal').html($.number($('input[name=totalbayarspp]').val()));
               $('#modaltanggal').html($('input[name=tanggal]').val());
               $('#tglBukti').html($('input[name=tanggal]').val());
               //$('#form_keuangan_rutin')[0].reset();
               $('input#bulan, #uangsakumasuk, #bimbel, #daftarulang, #uangpangkal, #infaq, input[name=catataninfaq], #totalbayarspp').val('');
               $('select[name="pilihbulan"]').val('').trigger('change');
               $('#myModal').modal();
               carinota();
            },
            error: function(jqXHR, textStatus, errorThrown) {
               swal("Gagal!", "Data Tidak Bisa Disimpan", "warning");
            }
         });
      }
   });

   // form piutang
   $('#form_piutang').validate({
      rules: {
         cari_siswa: {
            required: true,
         },
         nonota: {
            required: true,
         },
         nominal: {
            required: true,
            number: true,
         },
         keterangan: {
            required: true,
         },
      },
      submitHandler: function() {
         var form_data = $('#form_piutang').serializeArray();

         console.log(form_data);
         $.ajax({
            method: "POST",
            url: "/index.php/keuanganrutin/bayar_piutang",
            data: form_data,
            success: function(res) {
               $('#modalnonota').html($('#nonota').val());
               $('#modalnamaayah').html($('#namaayah').val());
               $('#modalnamaiswa').html($('#namaiswa').val());
               $('#modalkelas').html($('#kelas').val());
               $('#modaltipe').html($('#transfer').val());
               $('#tglBukti').html($('#tanggalInput').val());
               $('#modaltanggal').html($('#tanggalInput').val());
               $('#modalketerangan').html($('#keterangan').val());
               $('#modalnominal').html($.number($('#nominal').val()));
               $('#modaltotal').html($.number($('#nominal').val()));
               $('#modal_piutang').modal();
               $('#keterangan, #nominal, #transfer').val('');
               carinota();
            }
         })
      }
   })


   //form data berita
   $('#form_data_berita').validate({
      rules: {
         ditujukan: {
            required: true,
         },
         pj: {
            required: true,
         },
         judul: {
            required: true,
         },
         isi: {
            required: true,
         },
      },
      submitHandler: function() {
         var form_data = $('#form_data_berita').serializeArray();
         var tanggal = $('#tanggalInput').val();

         $.ajax({
            method: "POST",
            url: "/index.php/berita/simpan",
            data: form_data,
            success: function(res) {
               swal("Selamat!", "Data Anda Sudah Tersimpan!", "success");
               $('#form_data_berita')[0].reset();
               $('#tanggalInput').val(tanggal);
            }
         })
      }
   });


   // form data kesehatan siswa
   $('#form_data_kesehatan_siswa').validate({
      rules: {
         cari_siswa: {
            required: true,
         },
         keluhan: {
            required: true,
            halaman: true,
         },
         obat: {
            required: true,
            halaman: true,
         },
         catatan: {
            halaman: true,
         },
      },
      submitHandler: function() {
         var form_data = $('#form_data_kesehatan_siswa').serializeArray();

         $.ajax({
            method: "POST",
            data: form_data,
            url: "/index.php/kesehatan/simpan",
            success: function() {
               $('#form_data_kesehatan_siswa')[0].reset();
               $('#cari_siswa').prop('selecttedIndex', 0);
               swal("Selamat!", "Data Anda Sudah Tersimpan!", "success");
            },
            error: function() {
               swal("Gagal!", "Data Tidak Bisa Disimpan", "warning");
            },
         });
      }
   });

   // form perizinan siswa
   $('#form_perizinan_siswa').validate({
      rules: {
         cari_siswa: {
            required: true,
         },
         penjemput: {
            required: true,
            halaman: true,
         },
         catatan: {
            halaman: true,
         },
      },
      submitHandler: function() {
         var form_data = $('#form_perizinan_siswa').serializeArray();
         var tanggal = $('#tanggalInput').val();

         $.ajax({
            method: "POST",
            data: form_data,
            url: "/index.php/perizinan/simpan",
            success: function(res) {
               $('#modaltanggalizin').html($('#tanggalInput').val());
               $('#modalnamaayah').html($('#namaayah').val());
               $('#modalnamasiswa').html($('#namasiswa').val());
               $('#modalkelas').html($('#kelas').val());
               $('#modalpenjemput').html($('input[name=penjemput]').val());
               $('#modalcatatan').html($('input[name=catatan]').val());
               $('#modaltanggal').html($('#tanggalInput').val());
               $('#modalpengguna').html($('#pengguna').val());
               $('#myModal').modal();
               $('#cari_siswa').prop('selecttedIndex', 0);
               $('#form_perizinan_siswa')[0].reset();
               $('#tanggalInput').val(tanggal);
            },
            error: function() {
               swal("Gagal!", "Data Tidak Bisa Disimpan", "warning");
            },
         });
      }
   });

   // form pelanggaran siswa
   $('#form_pelanggaran_siswa').validate({
      rules: {
         cari_siswa: {
            required: true,
         },
         namapelanggaran: {
            required: true,
            halaman: true,
         },
         tindakan: {
            required: true,
            halaman: true,
         },
         catatan: {
            halaman: true,
         },
      },
      submitHandler: function() {
         var form_data = $('#form_pelanggaran_siswa').serializeArray();
         var tanggal = $('#tanggalInput').val();

         $.ajax({
            method: "POST",
            data: form_data,
            url: "/index.php/pelanggaran/simpan",
            success: function(res) {
               $('#form_pelanggaran_siswa')[0].reset();
               $('#tanggalInput').val(tanggal);
               $('#cari_siswa').prop('selecttedIndex', 0);
               swal("Selamat!", "Data Anda Telah Tersimpan", "success");
            },
            error: function() {
               swal("Gagal!", "Data Tidak Bisa Disimpan", "warning");
            },
         })
      }
   });

   // form tahfidz siswa
   $('#form_tahfidz_siswa').validate({
      rules: {
         cari_siswa: {
            required: true,
         },
         tambah_keterangan: {
            required: true,
            halaman: true,
         },
         murojaah: {
            required: true,
            halaman: true,
         },
         murojaahbaru: {
            halaman: true,
         },
      },
      submitHandler: function() {
         var form_data = $('#form_tahfidz_siswa').serializeArray();
         var tanggal = $('#tanggalInput').val();

         $.ajax({
            method: "POST",
            data: form_data,
            url: "/index.php/tahfidz/simpan",
            success: function(res) {
               $('#form_tahfidz_siswa')[0].reset();
               $('#tanggalInput').val(tanggal);
               $('#cari_siswa').prop('selecttedIndex', 0);
               swal("Selamat!", "Data Anda Telah Tersimpan", "success");
            },
            error: function() {
               swal("Gagal!", "Data Tidak Bisa Disimpan", "warning");
            },
         })
      }
   });

   // form prestasi siswa
   $('#form_prestasi_siswa').validate({
      rules: {
         cari_siswa: {
            required: true,
         },
         prestasi: {
            required: true,
            halaman: true,
         },
         catatan: {
            halaman: true,
         },
      },
      submitHandler: function() {
         var form_data = $('#form_prestasi_siswa').find('input, select').serializeArray();
         var tanggal = $('#tanggalInput').val();

         $.ajax({
            method: "POST",
            data: form_data,
            url: "/index.php/prestasi/simpan",
            success: function(res) {
               $('#form_prestasi_siswa')[0].reset();
               $('#tanggalInput').val(tanggal);
               $('#cari_siswa').prop('selecttedIndex', 0);
               swal("Selamat!", "Data Anda Telah Tersimpan", "success");
            },
            error: function() {
               swal("Gagal!", "Data Tidak Bisa Disimpan", "warning");
            },
         })
      }
   });

   //form kartu pelajar
   $('#form_kartu_pelajar').validate({
      rules: {
         cari_kelas: {
            required: true,
         },
      },
      submitHandler: function() {
         var kelas = $('select#cari_kelas').val();

         $.ajax({
            method: "GET",
            dataType: "JSON",
            url: "get_kartu_pelajar/" + kelas,
            success: function(res) {
               var data = res["kartu_pelajar"];
               var kartu_pelajar = '';

               if (data == '') {
                  $('#print_btn').hide();
                  $('#data_kartu_pelajar .row').html('<div class="modal-body text-center"><h4>Tidak Ada Data di Kelas Ini.</h4></div>');
                  $('#pagination').empty();

               } else {
                  $.each(data, function(i, item) {

                     kartu_pelajar += '<div class="col-lg-6 col-md-6 col-sm-9 col-xs-12"> <div class="card-hero"> <div class="row"> <div class="col-sm-12"> <div class="card-header"> <h1>' + data[i]["namasekolah"] + '</h1> <h6>' + data[i]["alamatsekolah"] + ' ' + data[i]["kabupatensekolah"] + '</h6> </div> </div> ';
                     kartu_pelajar += '<div class="main"> <table> <tr> <td> <img src="https://demo.sipond.com/assets/fotosiswa/' + data[i]["foto"] + '" alt="no-avatar" class="img-fluid"> </td> </tr> </table> ';
                     kartu_pelajar += '<div class="hero"> <table> <tr> <td> <h6>Nama Lengkap</h6> </td> <td style="font-size: 10px;">:</td> <td> <p>' + data[i]["namasiswa"] + '</p> </td> </tr> <tr> <td> <h6>No. Induk Siswa</h6> </td> <td style="font-size: 10px;">:</td> <td> <p>' + data[i]["nis"] + '</p> </td> </tr> <tr> ';
                     kartu_pelajar += '<td> <h6>Tempat/Tanggal Lahir</h6> </td> <td style="font-size: 10px;">:</td> <td> <p>' + data[i]["kotalahir"] + ', ' + data[i]["tanggallahir"] + '</p> </td> </tr> <tr> <td> <h6>Alamat</h6> </td> <td style="font-size: 10px;">:</td> <td> <p>' + data[i]["alamat"] + ', ' + data[i]["kelurahan"] + ', ' + data[i]["kecamatan"] + ', ' + data[i]["provinsi"] + '</p> </td> </tr> </table> </div> </div> <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 card-footer"> <table width="100%"> <tr> <td> <h5>Kepala Sekolah</h5> </td> </tr> <tr> <td> <p class="font-print">' + data[i]["kepalasekolah"] + '</p> </td> </tr> </table> </div> </div> </div> </div> ';

                  });
                  $('#print_btn').show();
                  $('#data_kartu_pelajar .row').html(kartu_pelajar);
                  $('#pagination').html(res["links"]);
               }
               $('#kartu_pelajar').modal();
            }
         });

         $.ajax({
            method: "GET",
            dataType: "JSON",
            url: "print_kartu_pelajar/" + kelas,
            success: function(res) {
               var data = res;
               var kartu_pelajar = '';

               if (data == '') {
                  $('#print_btn').hide();
                  $('#print_kartu .row').html('<div class="modal-body text-center"><h4>Tidak Ada Data di Kelas Ini.</h4></div>');

               } else {
                  $.each(data, function(i, item) {

                     kartu_pelajar += '<div class="col-lg-6 col-md-6 col-sm-4 col-xs-6"> <div class="card-hero"> <div class="row"> <div class="col-sm-12"> <div class="card-header"> <h1>' + data[i]["namasekolah"] + '</h1> <h6>' + data[i]["alamatsekolah"] + ' ' + data[i]["kabupatensekolah"] + '</h6> </div> </div> ';
                     kartu_pelajar += '<div class="main"> <table> <tr> <td> <img src="https://demo.sipond.com/assets/fotosiswa/' + data[i]["foto"] + '" alt="no-avatar" class="img-fluid"> </td> </tr> </table> ';
                     kartu_pelajar += '<div class="hero"> <table> <tr> <td> <h6>Nama Lengkap</h6> </td> <td style="font-size: 10px;">:</td> <td> <p>' + data[i]["namasiswa"] + '</p> </td> </tr> <tr> <td> <h6>No. Induk Siswa</h6> </td> <td style="font-size: 10px;">:</td> <td> <p>' + data[i]["nis"] + '</p> </td> </tr> <tr> ';
                     kartu_pelajar += '<td> <h6>Tempat/Tanggal Lahir</h6> </td> <td style="font-size: 10px;">:</td> <td> <p>' + data[i]["kotalahir"] + ', ' + data[i]["tanggallahir"] + '</p> </td> </tr> <tr> <td> <h6>Alamat</h6> </td> <td style="font-size: 10px;">:</td> <td> <p>' + data[i]["alamat"] + ', ' + data[i]["kelurahan"] + ', ' + data[i]["kecamatan"] + ', ' + data[i]["provinsi"] + '</p> </td> </tr> </table> </div> </div> <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 card-footer"> <table width="100%"> <tr> <td> <h5>Kepala Sekolah</h5> </td> </tr> <tr> <td> <p class="font-print">' + data[i]["kepalasekolah"] + '</p> </td> </tr> </table> </div> </div> </div> </div> ';

                  });
                  $('#print_btn').show();
                  $('#print_kartu .row').html(kartu_pelajar);
               }
            }
         });
      }
   });

   //Update biodata Siswa
   $('#update_biodata_siswa').validate({
      rules: {
         namasiswa: {
            required: true,
            customname: true,
         },
         kotalahir: {
            required: true,
         },
         tanggallahir: {
            required: true,
         },
         jeniskelamin: {
            required: true,
         },
         golongandarah: {
            required: true,
         },
         anakke: {
            required: true,
         },
         kelas: {
            required: true,
         },
         nokk: {
            required: true,
            number: true,
         },
         noktpayah: {
            required: true,
            number: true,
         },
         namaayah: {
            required: true,
            customname: true,
         },
         pendidikanayah: {
            required: true,
         },
         pekerjaanayah: {
            required: true,
         },
         gajiayah: {
            number: true,
         },
         noktpibu: {
            required: true,
            number: true,
         },
         namaibu: {
            required: true,
            customname: true,
         },
         pendidikanibu: {
            required: true,
         },
         gajiibu: {
            number: true,
         },
         telephon: {
            required: true,
            number: true,
         },
         alamat: {
            required: true,
         },
         kelurahan: {
            required: true,
         },
         kecamatan: {
            required: true,
         },
         alamatkota: {
            required: true,
         },
         provinsi: {
            required: true,
         },
      },
      invalidHandler: function(e, validator) {
         if (validator.errorList.length)
            $('.nav-tabs a[href="#' + jQuery(validator.errorList[0].element).closest(".tab-pane").attr('id') + '"]').tab('show')

      },
      submitHandler: function() {
         var nis = $('#nis').val();
         var data = $('#update_biodata_siswa').serializeArray();

         $.ajax({
            url: "/index.php/siswa/update_biodata_siswa",
            method: "POST",
            data: data,
            xhr: function() {
               var xhr = new window.XMLHttpRequest();

               xhr.upload.addEventListener('progress', function(e) {
                  if (e.lengthComputable) {
                     var percent = Math.round((e.loaded / e.total) * 100);
                     $('#progress').show();

                     $('#progress-bar').attr('aria-valuenow', percent).css('width', percent + '%').text(percent + '%');
                  }
               }, false);

               xhr.addEventListener('load', function() {
                  $('#progress').hide();
               }, false);

               return xhr;
            },
            success: function(res) {
               swal({
                  title: "Deleted!",
                  text: "Data Berhasil Di Hapus!!",
                  type: "success",
                  timer: 1000,
                  showConfirmButton: false,
               });
            }
         })
      }
   });

   // update biodata Karyawan
   $('#update_biodata_karyawan').validate({
      rules: {
         nama: {
            required: true,
            customname: true,
         },
         kotalahir: {
            required: true,
         },
         tanggallahir: {
            required: true,
         },
         gender: {
            required: true,
         },
         golongandarah: {
            required: true,
         },
         statusnikah: {
            required: true,
         },
         pendidikanterakhir: {
            required: true,
         },
         jabatan: {
            required: true,
            lettersonly: true,
         },
         nohp1: {
            number: true,
         },
         alamat: {
            required: true,
         },
      },
      invalidHandler: function(e, validator) {
         if (validator.errorList.length)
            $('.nav-tabs a[href="#' + jQuery(validator.errorList[0].element).closest(".tab-pane").attr('id') + '"]').tab('show')

      },
      submitHandler: function() {
         var form_data = $('#update_biodata_karyawan').serializeArray();

         $.ajax({
            url: "/index.php/karyawan/update_biodata_karyawan",
            method: "POST",
            data: form_data,
            xhr: function() {
               var xhr = new window.XMLHttpRequest();

               xhr.upload.addEventListener('progress', function(e) {
                  if (e.lengthComputable) {
                     var percent = Math.round((e.loaded / e.total) * 100);
                     $('#progress').show();

                     $('#progress-bar').attr('aria-valuenow', percent).css('width', percent + '%').text(percent + '%');
                  }
               }, false);

               xhr.addEventListener('load', function() {
                  $('#progress').hide();
               }, false);

               return xhr;
            },
            success: function(res) {
               if (res == 'success') {
                  get_data_karyawan(nik);
               }
               alert(res);
            }
         })
      }
   });

});

//Custom Validations ===============================================================================
//Date
$.validator.addMethod('customdate', function(value, element) {
      return value.match(/^\d\d\d\d?-\d\d?-\d\d$/);
   },
   'Please enter a date in the format YYYY-MM-DD.'
);

//Credit card
$.validator.addMethod('creditcard', function(value, element) {
      return value.match(/^\d\d\d\d?-\d\d\d\d?-\d\d\d\d?-\d\d\d\d$/);
   },
   'Please enter a credit card in the format XXXX-XXXX-XXXX-XXXX.'
);

$.validator.addMethod('customname', function(value, element) {
      return value.match(/^[a-zA-Z` ]*$/);
   },
   'Tolong Gunakan Huruf, Spasi atau Tanda `.'
);

$.validator.addMethod('selectBox', function(value, element) {
      return value.match(/^[^-]*$/);
   },
   'Pilih Salah Satu!!'
);

$.validator.addMethod('lettersonly', function(value, element) {
      return value.match(/^[a-zA-Z ]*$/);
   },
   'Tolong Gunakan Huruf atau Spasi.'
);
$.validator.addMethod('ttl', function(value, element) {
      return value.match(/^[a-zA-Z0-9,. ]*$/);
   },
   'Tolong Gunakan Huruf, Angka, Spasi, Koma atau Titik.'
);
$.validator.addMethod('alamat', function(value, element) {
      return value.match(/^[a-zA-Z0-9,. ]*$/);
   },
   'Tolong Gunakan Huruf, Angka, Spasi, Koma atau Titik.'
);
$.validator.addMethod('halaman', function(value, element) {
      return value.match(/^[a-zA-Z0-9- ]*$/);
   },
   'Tolong Gunakan Huruf, Angka atau Spasi.'
);
//==================================================================================================

//Custom Error Messages ============================================================================
jQuery.extend(jQuery.validator.messages, {
   required: "Kolom Ini Harus Di Isi.",
   remote: "Please fix this field.",
   email: "Please enter a valid email address.",
   url: "Please enter a valid URL.",
   date: "Please enter a valid date.",
   dateISO: "Please enter a valid date (ISO).",
   number: "Isi dengan nomor.",
   digits: "Please enter only digits.",
   creditcard: "Please enter a valid credit card number.",
   equalTo: "Please enter the same value again.",
   accept: "Please enter a value with a valid extension.",
   maxlength: jQuery.validator.format("Please enter no more than {0} characters."),
   minlength: jQuery.validator.format("Please enter at least {0} characters."),
   rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),
   range: jQuery.validator.format("Please enter a value between {0} and {1}."),
   max: jQuery.validator.format("Please enter a value less than or equal to {0}."),
   min: jQuery.validator.format("Please enter a value greater than or equal to {0}.")
});

$.validator.setDefaults({
   ignore: '',
   highlight: function(input) {
      $(input).parents('.form-line').addClass('error');
   },
   unhighlight: function(input) {
      $(input).parents('.form-line').removeClass('error');
   },
   errorPlacement: function(error, element) {
      if (element.attr("name") == "cari_siswa" || element.attr("name") == "cari_kelas") {
         error.appendTo($('#error_box'));
      } else if (element.attr("name") == "pilihbulan") {
         error.appendTo($('#bulan_error_box'));
      } else {
         $(element).parents('.form-group').append(error);
      }
   },
});
//==================================================================================================
