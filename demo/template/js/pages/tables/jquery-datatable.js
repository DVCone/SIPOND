$(document).ready(function() {
   $('#tanggal_awal, #tanggal_akhir, #tanggalInput').daterangepicker({
      singleDatePicker: true,
      locale: {
         format: 'YYYY-MM-DD',
      }
   })

   $('.js-basic-example').DataTable({
      responsive: true
   });

   // datatable penerimaan transfer
   $('#data_transfer').customDataTable({
      url: 'keuanganrutin/data_transfer',
      form: $('#sort_transfer'),
      update_btn: '#search_data_transfer',
      btn_column: [0, 1, 2, 3, 4, 5, 6, 7],
      print_title: 'Laporan Data Penerimaan Trasnfer',
      delete_btn: 8,
      column_row: [{
            "searchable": false,
            "targets": 0,
            "data": "no",
         },
         {
            "targets": 1,
            "data": "nonota",
         },
         {
            "targets": 2,
            "data": "tanggal",
         },
         {
            "targets": 3,
            "data": "nis",
         },
         {
            "targets": 4,
            "data": "namasiswa",
         },
         {
            "targets": 5,
            "data": "kelas",
         },
         {
            "targets": 6,
            "data": "total",
         },
         {
            "targets": 7,
            "data": "pengguna",
         },
         {
            "searchable": false,
            "targets": 8,
            "data": null,
            "className": "text-center",
            "mRender": function(data, type, row) {
               return '<a href="/index.php/keuanganrutin/hapus/' + row.nonota + '" class="btn btn-danger waves-effect" id="delete-btn"> <i class="material-icons">delete_forever</i> </a>';
            }
         }
      ],
   })

   // datatable penerimaan cash
   $('#data_cash').customDataTable({
      url: 'keuanganrutin/data_cash',
      form: $('#sort_cash'),
      update_btn: '#search_data_cash',
      print_title: 'Laporan Data Penerimaan Tunai',
      btn_column: [0, 1, 2, 3, 4, 5, 6, 7],
      delete_btn: 8,
      column_row: [{
            "searchable": false,
            "targets": 0,
            "data": "no",
         },
         {
            "targets": 1,
            "data": "nonota",
         },
         {
            "targets": 2,
            "data": "tanggal",
         },
         {
            "targets": 3,
            "data": "nis",
         },
         {
            "targets": 4,
            "data": "namasiswa",
         },
         {
            "targets": 5,
            "data": "kelas",
         },
         {
            "targets": 6,
            "data": "total",
         },
         {
            "targets": 7,
            "data": "pengguna",
         },
         {
            "searchable": false,
            "targets": 8,
            "data": null,
            "className": "text-center",
            "mRender": function(data, type, row) {
               return '<a href="/index.php/keuanganrutin/hapus/' + row.nonota + '" class="btn btn-danger waves-effect" id="delete-btn"> <i class="material-icons">delete_forever</i> </a>';
            }
         }
      ],
   })

   // datatable uang saku keluar
   $('#data_uang_saku_keluar').customDataTable({
      url: 'keuanganuangsakukeluar/data_uangsakukeluar',
      form: $('#sort_uang_saku_keluar'),
      update_btn: '#search_data_uang_saku_keluar',
      print_title: 'Laporan Data Uang Saku Keluar Siswa',
      btn_column: [0, 1, 2, 3, 4, 5, 6],
      delete_btn: 6,
      column_row: [{
            "targets": 0,
            "data": "no",
         },
         {
            "targets": 1,
            "data": "nis",
         },
         {
            "targets": 2,
            "data": "namasiswa",
         },
         {
            "targets": 3,
            "data": "kelas",
         },
         {
            "targets": 4,
            "data": "tanggal",
         },
         {
            "targets": 5,
            "data": "uangkeluar",
         },
         {
            "targets": 6,
            "data": "catatan",
         },
         {
            "searchable": false,
            "targets": 7,
            "data": null,
            "className": "text-center",
            "mRender": function(data, type, row) {
               return '<a href="/index.php/keuanganuangsakukeluar/hapus/' + row.nonota + '" class="btn btn-danger waves-effect" id="delete-btn"> <i class="material-icons">delete_forever</i> </a>';
            }
         }
      ],
   })

   /// Laporan monitoring spp
   $('#data_monitoringspp').customDataTable({
      url: 'keuanganrutin/data_monitoringspp',
      form: '#sort_monitoringspp',
      print_title: 'Laporan Monitoring SPP',
      btn_column: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15],
      column_row: [{
            "targets": 0,
            "data": "no",
         },
         {
            "targets": 1,
            "data": "nis",
         },
         {
            "targets": 2,
            "data": "namasiswa",
         },
         {
            "targets": 3,
            "data": "kelas",
         },
         {
            "targets": 4,
            "data": null,
            "mRender": function(data, type, row) {
               return $.number(row.juli);
            }
         },
         {
            "targets": 5,
            "data": null,
            "mRender": function(data, type, row) {
               return $.number(row.agustus);
            }
         },
         {
            "targets": 6,
            "data": null,
            "mRender": function(data, type, row) {
               return $.number(row.september);
            }
         },
         {
            "targets": 7,
            "data": null,
            "mRender": function(data, type, row) {
               return $.number(row.oktober);
            }
         },
         {
            "targets": 8,
            "data": null,
            "mRender": function(data, type, row) {
               return $.number(row.november);
            }
         },
         {
            "targets": 9,
            "data": null,
            "mRender": function(data, type, row) {
               return $.number(row.desember);
            }
         },
         {
            "targets": 10,
            "className": "number",
            "data": null,
            "mRender": function(data, type, row) {
               return $.number(row.januari);
            }
         },
         {
            "targets": 11,
            "className": "number",
            "data": null,
            "mRender": function(data, type, row) {
               return $.number(row.februari);
            }
         },
         {
            "targets": 12,
            "className": "number",
            "data": null,
            "mRender": function(data, type, row) {
               return $.number(row.maret);
            }
         },
         {
            "targets": 13,
            "data": null,
            "mRender": function(data, type, row) {
               return $.number(row.april);
            }
         },
         {
            "targets": 14,
            "data": null,
            "mRender": function(data, type, row) {
               return $.number(row.mei);
            }
         },
         {
            "targets": 15,
            "data": null,
            "mRender": function(data, type, row) {
               return $.number(row.juni);
            }
         },
      ],
   })


   // datatable berita
   $('#data_berita').customDataTable({
      url: 'berita/data_berita',
      form: $('#sort_berita'),
      print_title: 'Data Berita',
      btn_column: [0, 1, 2, 3, 4, 5],
      delete_btn: 6,
      column_row: [{
            "targets": 0,
            "data": "tanggal",
         },
         {
            "targets": 1,
            "data": "ditujukan",
         },
         {
            "targets": 2,
            "data": "judul",
         },
         {
            "targets": 3,
            "data": "isi",
         },
         {
            "targets": 4,
            "data": "pj",
         },
         {
            "targets": 5,
            "data": "tutup",
         },
         {
            "targets": 6,
            "data": null,
            "mRender": function(data, type, row) {
               return '<a href="/index.php/berita/hapus/' + row.noberita + '" class="btn btn-danger waves-effect" id="delete-btn"> <i class="material-icons">delete_forever</i> </a>';
            }
         },
      ]
   })

   // datatable kesehatan
   $('#data_kesehatan').customDataTable({
      url: 'kesehatan/data_kesehatan',
      form: $('#sort_kesehatan'),
      update_btn: '#search_data_kesehatan',
      print_title: 'Laporan Data Kesehatan Siswa',
      btn_column: [0, 1, 2, 3, 4, 5, 6, 7],
      delete_btn: 8,
      column_row: [{
            "targets": 0,
            "data": "no",
         },
         {
            "targets": 1,
            "data": "nis",
         },
         {
            "targets": 2,
            "data": "namasiswa",
         },
         {
            "targets": 3,
            "data": "kelas",
         },
         {
            "targets": 4,
            "data": "tanggal",
         },
         {
            "targets": 5,
            "data": "keluhan",
         },
         {
            "targets": 6,
            "data": "obat",
         },
         {
            "targets": 7,
            "data": "catatan",
         },
         {
            "targets": 8,
            "data": null,
            "mRender": function(data, type, row) {
               return '<a href="/index.php/kesehatan/hapus/' + row.nourut + '" class="btn btn-danger waves-effect" id="delete-btn"> <i class="material-icons">delete_forever</i> </a>';
            }
         }
      ],
   })

   // datatable Perizinan
   $('#data_perizinan').customDataTable({
      url: 'perizinan/data_perizinan',
      form: $('#sort_perizinan'),
      update_btn: '#search_data_perizinan',
      print_title: 'Laporan Data Perizinan',
      btn_column: [0, 1, 2, 3, 4, 5, 6],
      delete_btn: 7,
      column_row: [{
            "targets": 0,
            "data": "no",
         },
         {
            "targets": 1,
            "data": "nis",
         },
         {
            "targets": 2,
            "data": "namasiswa",
         },
         {
            "targets": 3,
            "data": "kelas",
         },
         {
            "targets": 4,
            "data": "tanggalizin",
         },
         {
            "targets": 5,
            "data": "penjemput",
         },
         {
            "targets": 6,
            "data": "catatan",
         },
         {
            "searchable": false,
            "targets": 7,
            "data": null,
            "className": "text-center",
            "mRender": function(data, type, row) {
               return '<a href="/index.php/perizinan/hapus/' + row.nourut + '" class="btn btn-danger waves-effect" id="delete-btn"> <i class="material-icons">delete_forever</i> </a>';
            }
         }
      ],
   })

   // datatable Pelanggaran
   $('#data_pelanggaran').customDataTable({
      url: 'pelanggaran/data_pelanggaran',
      form: $('#sort_pelanggaran'),
      update_btn: '#search_data_pelanggaran',
      print_title: 'Laporan Data Pelanggaran',
      btn_column: [0, 1, 2, 3, 4, 5, 6, 7],
      delete_btn: 8,
      column_row: [{
            "targets": 0,
            "data": "no",
         },
         {
            "targets": 1,
            "data": "nis",
         },
         {
            "targets": 2,
            "data": "namasiswa",
         },
         {
            "targets": 3,
            "data": "kelas",
         },
         {
            "targets": 4,
            "data": "tanggal",
         },
         {
            "targets": 5,
            "data": "namapelanggaran",
         },
         {
            "targets": 6,
            "data": "tindakan",
         },
         {
            "targets": 7,
            "data": "poin",
         },
         {
            "searchable": false,
            "targets": 8,
            "data": null,
            "className": "text-center",
            "mRender": function(data, type, row) {
               return '<a href="/index.php/pelanggaran/hapus/' + row.nourut + '" class="btn btn-danger waves-effect" id="delete-btn"> <i class="material-icons">delete_forever</i> </a>';
            }
         }
      ],
   })

   //rekap Pelanggaran
   $('#rekap_pelanggaran').DataTable({
      'rowCallback': function(row, data, index) {
         var index = index + 1;
         $('td:eq(0)', row).html(index);
         return row;
      },
      'serverside': true,
      'processing': true,
      'autoWidth': false,
      'scroller': true,
      'dom': 'Bfrtip',
      'responsive': true,
      'title': '',
      'buttons': [{
            extend: 'excel',
            title: 'Data Rekap Pelanggaran Siswa',
            exportOptions: {
               columns: [1, 2, 3, 4],
            },
         },
         {
            extend: 'pdf',
            title: 'Data Rekap Pelanggaran Siswa',
            exportOptions: {
               columns: [1, 2, 3, 4],
            },
         },
         {
            extend: 'print',
            title: 'Data Rekap Pelanggaran Siswa',
            exportOptions: {
               columns: [1, 2, 3, 4],
            },
         },
      ],
      'ajax': {
         url: "/index.php/pelanggaran/data_rekap_pelanggaran",
         method: "POST",
         data: function(d) {
            var form_data = $('#sort_rekap_pelanggaran').serializeArray();
            $.each(form_data, function(i, item) {
               d[item.name] = item.value;
            });
         },
      },
      'columnDefs': [{
            "searchable": false,
            "targets": 0,
            "data": null,
         },
         {
            "targets": 1,
            "data": "nis",
         },
         {
            "targets": 2,
            "data": "namasiswa",
         },
         {
            "targets": 3,
            "data": "kelas",
         },
         {
            "targets": 4,
            "data": "totalpoin",
         },
      ]
   })

   // datatable Prestasi Siswa
   $('#data_prestasi').customDataTable({
      url: 'prestasi/data_prestasi',
      form: $('#sort_prestasi'),
      update_btn: '#search_data_prestasi',
      print_title: 'Laporan Data Prestasi',
      btn_column: [0, 1, 2, 3, 4, 5, 6],
      delete_btn: 7,
      column_row: [{
            "targets": 0,
            "data": "no",
         },
         {
            "targets": 1,
            "data": "nis",
         },
         {
            "targets": 2,
            "data": "namasiswa",
         },
         {
            "targets": 3,
            "data": "kelas",
         },
         {
            "targets": 4,
            "data": "tanggal",
         },
         {
            "targets": 5,
            "data": "prestasi",
         },
         {
            "targets": 6,
            "data": "catatan",
         },
         {
            "searchable": false,
            "targets": 7,
            "data": null,
            "className": "text-center",
            "mRender": function(data, type, row) {
               return '<a href="/index.php/prestasi/hapus/' + row.nourut + '" class="btn btn-danger waves-effect" id="delete-btn"> <i class="material-icons">delete_forever</i> </a>';
            }
         }
      ],
   })

   // datatable tahfidz Siswa
   $('#data_tahfidz').customDataTable({
      url: 'tahfidz/data_tahfidz',
      form: $('#sort_tahfidz'),
      update_btn: '#search_data_tahfidz',
      print_title: 'Laporan Data Tahfidz',
      btn_column: [0, 1, 2, 3, 4, 5, 6, 7, 8],
      delete_btn: 9,
      column_row: [{
            "targets": 0,
            "data": "no",
         },
         {
            "targets": 1,
            "data": "tanggal",
         },
         {
            "targets": 2,
            "data": "nis",
         },
         {
            "targets": 3,
            "data": "namasiswa",
         },
         {
            "targets": 4,
            "data": "kelas",
         },
         {
            "targets": 5,
            "data": null,
            "className": "text-center",
            "mRender": function(data, type, row) {
               return row.tambahan + ' Halaman';
            }
         },
         {
            "targets": 6,
            "className": "text-right",
            "data": "tambahanketerangan",
         },
         {
            "targets": 7,
            "className": "text-right",
            "data": "murojaahbaru",
         },
         {
            "targets": 8,
            "className": "text-right",
            "data": "murojaah",
         },
         {
            "searchable": false,
            "targets": 9,
            "data": null,
            "className": "text-center",
            "mRender": function(data, type, row) {
               return '<a href="/index.php/tahfidz/hapus/' + row.nourut + '" class="btn btn-danger waves-effect" id="delete-btn"> <i class="material-icons">delete_forever</i> </a>';
            }
         }
      ],
   })

   // rekap tahfidz
   $('#rekap_tahfidz').customDataTable({
      url: 'tahfidz/data_rekap_tahfidz',
      form: $('#sort_rekap_tahfidz'),
      print_title: 'Laporan Rekap Tahfidz',
      btn_column: [1, 2, 3, 4],
      column_row: [{
            "searchable": false,
            "targets": 0,
            "data": null,
         },
         {
            "targets": 1,
            "data": "nis",
         },
         {
            "targets": 2,
            "data": "namasiswa",
         },
         {
            "targets": 3,
            "data": "kelas",
         },
         {
            "targets": 4,
            "data": "totaltahfidz",
         },
      ]
   })

   // datatable Pembayaran SPP
   $('#data_spp').customDataTable({
      url: 'keuanganrutin/data_spp',
      form: $('#sort_spp'),
      update_btn: '#search_data_spp',
      print_title: 'Laporan Data Pembayaran SPP',
      btn_column: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15],
      delete_btn: 15,
      column_row: [{
            "targets": 0,
            "data": "no",
         },
         {
            "targets": 1,
            "data": "nis",
         },
         {
            "targets": 2,
            "data": "namasiswa",
         },
         {
            "targets": 3,
            "data": "kelas",
         },
         {
            "targets": 4,
            "data": "juli",
         },
         {
            "targets": 5,
            "data": "agustus",
         },
         {
            "targets": 6,
            "className": "text-right",
            "data": "september",
         },
         {
            "targets": 7,
            "className": "text-right",
            "data": "oktober",
         },
         {
            "targets": 8,
            "className": "text-right",
            "data": "november",
         },
         {
            "targets": 9,
            "className": "text-right",
            "data": "desember",
         },
         {
            "targets": 10,
            "className": "text-right",
            "data": "januari",
         },
         {
            "targets": 11,
            "className": "text-right",
            "data": "februari",
         },
         {
            "targets": 12,
            "className": "text-right",
            "data": "maret",
         },
         {
            "targets": 13,
            "className": "text-right",
            "data": "april",
         },
         {
            "targets": 14,
            "className": "text-right",
            "data": "mei",
         },
         {
            "targets": 15,
            "className": "text-right",
            "data": "juni",
         },
         {
            "searchable": false,
            "targets": 16,
            "data": null,
            "className": "text-center",
            "mRender": function(data, type, row) {
               return '<a href="/index.php/keuanganrutin/hapus/' + row.nonota + '" class="btn btn-danger waves-effect" id="delete-btn"> <i class="material-icons">delete_forever</i> </a>';
            }
         }
      ],
   })

   // datatable Pembayaran Non SPP
   $('#data_nospp').customDataTable({
      url: 'keuanganrutin/data_nospp',
      form: $('#sort_nospp'),
      update_btn: '#search_data_nospp',
      print_title: 'Laporan Data Selain SPP',
      btn_column: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
      delete_btn: 9,
      column_row: [{
            "targets": 0,
            "data": "no",
         },
         {
            "targets": 1,
            "data": "nis",
         },
         {
            "targets": 2,
            "data": "namasiswa",
         },
         {
            "targets": 3,
            "data": "kelas",
         },
         {
            "targets": 4,
            "data": "uangpangkal",
         },
         {
            "targets": 5,
            "data": "daftarulang",
         },
         {
            "targets": 6,
            "data": "bimbel",
         },
         {
            "targets": 7,
            "data": "uangsakumasuk",
         },
         {
            "targets": 8,
            "data": "infaq",
         },
         {
            "targets": 9,
            "data": "keteranganinfaq",
         },
         {
            "searchable": false,
            "targets": 10,
            "data": null,
            "className": "text-center",
            "mRender": function(data, type, row) {
               return '<a href="/index.php/keuanganrutin/hapus/' + row.nonota + '" class="btn btn-danger waves-effect" id="delete-btn"> <i class="material-icons">delete_forever</i> </a>';
            }
         }
      ],
   })

   // Laporan uang saku sisa
   $('#data_uangsakusisa').customDataTable({
      url: 'keuanganrutin/data_uangsakusisa',
      form: '#sort_uangsakusisa',
      btn_column: [0, 1, 2, 3, 4, 5, 6],
      print_title: 'Laporan Uang Saku Sisa',
      column_row: [{
            "targets": 0,
            "data": "no",
         },
         {
            "targets": 1,
            "data": "nis",
         },
         {
            "targets": 2,
            "data": "namasiswa",
         },
         {
            "targets": 3,
            "data": "kelas",
         },
         {
            "targets": 4,
            "data": "totmasuk",
         },
         {
            "targets": 5,
            "data": "totkeluar",
         },
         {
            "targets": 6,
            "data": "uangsisa",
         },
      ],
   })

   // laporan jurnal
   $('#data_jurnal').customDataTable({
      url: 'keuanganlaporan/data_jurnal',
      form: '#sort_jurnal',
      update_btn: '#search_data_jurnal',
      print_title: 'Laporan Jurnal',
      btn_column: [0, 1, 2, 3, 4, 5, 6, 7],
      column_row: [{
            "targets": 0,
            "data": "no",
         },
         {
            "targets": 1,
            "data": "tanggal",
         },
         {
            "targets": 2,
            "data": "nonota",
         },
         {
            "targets": 3,
            "data": "koderekening",
         },
         {
            "targets": 4,
            "data": "debet",
         },
         {
            "targets": 5,
            "data": "kredit",
         },
         {
            "targets": 6,
            "data": "keterangan",
         },
         {
            "targets": 7,
            "data": "pengguna",
         },
      ]
   })

   // Laporan Buku Besar
   $('#data_bukubesar').customDataTable({
      url: 'keuanganlaporan/data_bukubesar',
      form: '#sort_bukubesar',
      update_btn: '#search_data_bukubesar',
      print_title: 'Laporan Buku Besar',
      btn_column: [0, 1, 2, 3, 4, 5, 6],
      column_row: [{
            "targets": 0,
            "data": "no",
         },
         {
            "targets": 1,
            "data": "tanggal",
         },
         {
            "targets": 2,
            "data": "nonota",
         },
         {
            "targets": 3,
            "data": "koderekening",
         },
         {
            "targets": 4,
            "data": "debet",
         },
         {
            "targets": 5,
            "data": "kredit",
         },
         {
            "targets": 6,
            "data": "keterangan",
         },
      ]
   })

   // Data Mata Pelajaran
   $('#data_mapel').customDataTable({
      url: 'mapel/data_mapel',
      form: $('#sort_mapel'),
      print_title: 'Data Mata Pelajaran',
      btn_column: [1, 2, 3, 4],
      column_row: [{
            "searchable": false,
            "targets": 0,
            "data": null,
         },
         {
            "targets": 1,
            "data": "kodemapel",
         },
         {
            "targets": 2,
            "data": "namamapel",
         },
         {
            "targets": 3,
            "className": "text-right",
            "data": "arabic",
         },
         {
            "targets": 4,
            "data": "kategori",
         },
         {
            "searchable": false,
            "targets": 5,
            "data": null,
            "className": "text-center",
            "mRender": function(data, type, row) {
               return '<a href="/index.php/mapel/hapus/' + row.kodemapel + '" class="btn btn-danger waves-effect" id="delete-btn"> <i class="material-icons">delete_forever</i> </a>';
            }
         },
      ]
   })

   // Laporan Data Neraca Saldo
   $('#data_neracasaldo').DataTable({
      'footerCallback': function(row, start, end, data, display) {
         var api = this.api(),
            data;

         var intVal = function(i) {
            return typeof i === 'string' ?
               i.replace(/[\$,]/g, '') * 1 :
               typeof 1 === 'number' ?
               i : 0;
         };

         var totaldebet = api
            .column(3)
            .data()
            .reduce(function(a, b) {
               return intVal(a) + intVal(b);
            }, 0);

         var totalkredit = api
            .column(4)
            .data()
            .reduce(function(a, b) {
               return intVal(a) + intVal(b);
            }, 0);

         $(api.column(0).footer()).html("Total :");
         $(api.column(3).footer()).html('Rp. ' + $.number(totaldebet));
         $(api.column(4).footer()).html('Rp. ' + $.number(totalkredit));
      },
      'serverside': true,
      'processing': true,
      'scroller': true,
      'autoWidth': false,
      'dom': 'Bfrtip',
      'responsive': true,
      'title': '',
      'buttons': [{
            extend: 'excel',
            title: 'Laporan Neraca Saldo',
            exportOptions: {
               columns: [0, 1, 2, 3, 4],
            }
         },
         {
            extend: 'pdf',
            title: 'Laporan Neraca Saldo',
            exportOptions: {
               columns: [0, 1, 2, 3, 4],
            }
         },
         {
            extend: 'print',
            title: 'Laporan Neraca Saldo',
            exportOptions: {
               columns: [0, 1, 2, 3, 4],
            }
         },

      ],

      'ajax': {
         url: "/index.php/keuanganlaporan/data_neracasaldo",
         method: "POST",
         data: function(d) {
            var form_data = $('#sort_neracasaldo').serializeArray();
            $.each(form_data, function(i, item) {
               d[item.name] = item.value;
            })
         }
      },
      'columnDefs': [{
            "targets": 0,
            "data": "no",
         },
         {
            "targets": 1,
            "data": "koderekening",
         },
         {
            "targets": 2,
            "data": "namarekening",
         },
         {
            "targets": 3,
            "data": "debet",
         },
         {
            "targets": 4,
            "data": "kredit",
         },
      ],
   })

   // datatable Siswa
   var table_data_siswa = $('#data_siswa').DataTable({
      'serverside': true,
      'processing': true,
      'ordering': false,
      'scroller': true,
      'autoWidth': false,
      'dom': 'Bfrtip',
      'responsive': true,
      'buttons': [{
            extend: 'excel',
            title: 'Laporan Data Siswa',
            exportOptions: {
               columns: [1, 2, 3, 4, 5, 6]
            }
         },
         {
            extend: 'pdf',
            title: 'Laporan Data Siswa',
            exportOptions: {
               columns: [1, 2, 3, 4, 5, 6]
            }
         },
         {
            extend: 'print',
            title: 'Laporan Data Siswa',
            exportOptions: {
               columns: [1, 2, 3, 4, 5, 6]
            }
         },
      ],
      'ajax': {
         url: "/index.php/siswa/data_siswa",
         method: "POST",
         data: function(d) {
            var form_data = $('#sort_siswa').serializeArray();
            $.each(form_data, function(i, item) {
               d[item.name] = item.value;
            });
         },
      },
      'columnDefs': [{
            "targets": 0,
            "orderable": false,
            "searchable": false,
            "data": null,
            "className": "text-center",
            "mRender": function(data, type, row) {
               if (row.foto != '') {
                  return '<img class="img-print" src="/assets/fotosiswa/' + row.foto + '" alt="foto ' + row.namasiswa + '" width="115" height="140">';
               } else {
                  return '<img class="img-print" src="/assets/fotosiswa/no-avatar.jpg" alt="no-avatar" width="115" height="140">';
               }
            }
         },
         {
            "targets": 1,
            "data": "nis",
         },
         {
            "targets": 2,
            "data": "namasiswa",
         },
         {
            "targets": 3,
            "data": "kelas",
         },
         {
            "targets": 4,
            "data": "namaayah",
         },
         {
            "targets": 5,
            "data": "namaibu",
         },
         {
            "targets": 6,
            "className": "text-right",
            "data": "telephon",
         },
         {
            "searchable": false,
            "orderable": false,
            "targets": 7,
            "data": null,
            "className": "text-center",
            "mRender": function(data, type, row) {
               return ' <button type="button" class="btn btn-primary waves-effect" name="update_biodata" id="update_biodata"> <i class="material-icons">edit</i> </button> <a href="/index.php/siswa/hapus/' + row.nis + '" class="btn btn-danger waves-effect" id="delete-btn"> <i title="Delete Data From Table" class="material-icons">delete_forever</i> </a>';
            }
         }
      ],
   });

   $('#search_data_siswa').on('click', function(e) {
      table_data_siswa.ajax.reload();
      $('#search_date').modal('hide');
   })

   $('#data_siswa').on('click', 'a#delete-btn', function(e) {
      e.preventDefault();
      var url = $(this).closest("tr").find('td:eq(7) a#delete-btn').attr('href');
      var csrf = {};
      csrf[$('input[type=hidden]').attr('name')] = $('input[type=hidden]').val();
      swal({
         title: "Anda Yakin?",
         type: "warning",
         showCancelButton: true,
         closeOnConfirm: true,
         confirmButtonColor: "#DD6B55",
         confirmButtonText: "Hapus!!",
      }, function() {
         $.ajax({
            method: "POST",
            url: url,
            data: csrf,
            success: function() {
               notif('alert-info', 'Data Berhasil Di Hapus!!', 'bottom', 'left', 'animated fadeInDown', 'animated fadeOutUp');
               table_data_siswa.ajax.reload(null, false);
            },
            error: function() {
               notif('alert-warning', 'Data Gagal Di Hapus!!', 'bottom', 'left', 'animated fadeInDown', 'animated fadeOutUp');
            }
         });
      })
   })

   function get_data_siswa(nis, modal) {
      $.ajax({
         method: "GET",
         dataType: "JSON",
         url: "/index.php/siswa/get_data_siswa/" + nis,
         success: function(res) {
            var data = res[0];
            if (data["foto"] != '') {
               var foto = '/assets/fotosiswa/' + data["foto"];
            } else {
               var foto = '/assets/fotosiswa/no-avatar.jpg';
            }

            if (data["kelas"] != '') {
               var kelas = data["kelas"];
            } else {
               var kelas = 'I.B';
            }

            $('#foto_biodata_siswa').attr('src', foto);
            $('#namasiswa').val(data["namasiswa"]);
            $('#kotalahir').val(data["kotalahir"]);
            $('#tanggalInput').val(data["tanggallahir"]);
            $('#jeniskelamin').val(data["jeniskelamin"]).trigger('change');
            $('#golongandarah').val(data["golongandarah"]).trigger('change');
            $('#anakke').val(data["anakke"]).trigger('change');
            $('select#kelas').val(kelas).trigger('change');
            $('#nokk').val(data["nokk"]);
            $('#noktpayah').val(data["noktpayah"]);
            $('#namaayah').val(data["namaayah"]);
            $('#ttlayah').val(data["ttlayah"]);
            $('#email').val(data["email"]);
            $('#pendidikanayah').val(data["pendidikanayah"]);
            $('#pekerjaanayah').val(data["pekerjaanayah"]);
            $('#gajiayah').val(data["gajiayah"]);
            $('#noktpibu').val(data["noktpibu"]);
            $('#namaibu').val(data["namaibu"]);
            $('#ttlibu').val(data["ttlibu"]);
            $('#pendidikanibu').val(data["pendidikanibu"]);
            $('#pekerjaanibu').val(data["pekerjaanibu"]);
            $('#gajiibu').val(data["gajiibu"]);
            $('#telephon').val(data["telephon"]);
            $('#alamat').val(data["alamat"]);
            $('#kelurahan').val(data["kelurahan"]);
            $('#kecamatan').val(data["kecamatan"]);
            $('#alamatkota').val(data["alamatkota"]);
            $('#provinsi').val(data["provinsi"]);

            if (modal != '') {
               $(modal).modal();
            }
         }
      })
   }

   $('#data_siswa').on('click', 'button#update_biodata', function() {
      var nis = $(this).closest("tr").find('td:eq(1)').text();
      var namasiswa = $(this).closest("tr").find('td:eq(2)').text();
      $('h2#nis_siswa').html('Update Data Siswa : ' + namasiswa);
      $('input#nis').val(nis);

      get_data_siswa(nis, '#modal_update_biodata_siswa');

   });

   $('input#foto_siswa').on('change', function(e) {
      e.preventDefault();
      var data = new FormData();
      var nis = $('#nis').val();

      data.append(
         'foto_siswa', $('#foto_siswa').prop('files')[0]
      );

      data.append(
         $('#csrf').attr('name'), $('#csrf').val()
      );

      data.append(
         'nis', nis
      );

      $.ajax({
         url: "/index.php/siswa/foto_siswa",
         method: "POST",
         data: data,
         contentType: false,
         cache: false,
         processData: false,
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
            get_data_siswa(nis);
         }
      })
   })

   $('#modal_update_biodata_siswa').on('hidden.bs.modal', function(e) {
      table_data_siswa.ajax.reload(null, false);
   })

   var table_data_karyawan = $('#data_karyawan').DataTable({
      'serverside': true,
      'processing': true,
      'autoWidth': false,
      'scroller': true,
      'dom': 'Bfrtip',
      'responsive': true,
      'title': '',
      'buttons': [{
            extend: 'excel',
            title: 'Data Guru / Karyawan',
            exportOptions: {
               columns: [0, 1, 2, 3, 4, 5],
            },
         },
         {
            extend: 'pdf',
            title: 'Data Guru / Karyawan',
            exportOptions: {
               columns: [0, 1, 2, 3, 4, 5],
            },
         },
         {
            extend: 'print',
            title: 'Data Guru / Karyawan',
            exportOptions: {
               columns: [0, 1, 2, 3, 4, 5],
            },
         },
      ],
      'ajax': {
         url: "/index.php/karyawan/data_karyawan",
         method: "POST",
         data: function(d) {
            var form_data = $('#sort_karyawan').serializeArray();
            $.each(form_data, function(i, item) {
               d[item.name] = item.value;
            });
         },
      },
      'columnDefs': [{
            "targets": 0,
            "data": "nik",
         },
         {
            "targets": 1,
            "data": "nama",
         },
         {
            "targets": 2,
            "data": "kotalahir",
         },
         {
            "targets": 3,
            "data": "alamat",
         },
         {
            "targets": 4,
            "data": "kota",
         },
         {
            "targets": 5,
            "data": "nohp1",
         },
         {
            "targets": 6,
            "data": null,
            "mRender": function(data, type, row) {
               return ' <button type="button" class="btn btn-primary waves-effect" name="update_biodata" id="update_biodata"> <i class="material-icons">edit</i> </button> <a href="/index.php/karyawan/hapus/' + row.nik + '" class="btn btn-danger waves-effect" id="delete-btn"> <i title="Delete Data From Table" class="material-icons">delete_forever</i> </a>';
            }
         },
      ]
   })

   function get_data_karyawan(nik, modal) {
      $.ajax({
         method: "GET",
         dataType: "JSON",
         url: "/index.php/karyawan/get_data_karyawan/" + nik,
         success: function(res) {
            var data = res[0];

            $('#nama').val(data["nama"]);
            $('#kotalahir').val(data["kotalahir"]);
            $('#tanggalInput').val(data["tanggallahir"]);
            $('#gender').val(data["gender"]).trigger('change');
            $('#golongandarah').val(data["golongandarah"]).trigger('change');
            $('#statusnikah').val(data["statusnikah"]).trigger('change');
            $('#pendidikanterakhir').val(data["pendidikanterakhir"]).trigger('change');
            $('#jabatan').val(data["jabatan"]);
            $('#nohp1').val(data["nohp1"]);
            $('#alamat').val(data["alamat"]);
            $('#kelurahan').val(data["kelurahan"]);
            $('#kecamatan').val(data["kecamatan"]);
            $('#kota').val(data["kota"]);
            $('#provinsi').val(data["provinsi"]);

            if (modal != '') {
               $(modal).modal();
            }
         }
      })
   }

   $('#data_karyawan').on('click', 'button#update_biodata', function() {
      var nik = $(this).closest("tr").find('td:eq(0)').text();
      var nama = $(this).closest("tr").find('td:eq(1)').text();
      $('h4#nama_karyawan').html('Update Data Karyawan : ' + nama);
      $('input#nik').val(nik);

      get_data_karyawan(nik, '#modal_update_biodata_karyawan');

   });

   $('#data_karyawan').on('click', 'a#delete-btn', function(e) {
      e.preventDefault();
      var url = $(this).closest("tr").find('td:eq(6) a#delete-btn').attr('href');
      var csrf = {};
      csrf[$('input[type=hidden]').attr('name')] = $('input[type=hidden]').val();
      swal({
         title: "Anda Yakin?",
         type: "warning",
         showCancelButton: true,
         closeOnConfirm: true,
         confirmButtonColor: "#DD6B55",
         confirmButtonText: "Hapus!!",
      }, function() {
         $.ajax({
            method: "POST",
            url: url,
            data: csrf,
            success: function() {
               notif('alert-info', 'Data Berhasil Di Hapus!!', 'bottom', 'left', 'animated fadeInDown', 'animated fadeOutUp');
               table_data_karyawan.ajax.reload(null, false);
            },
            error: function() {
               notif('alert-warning', 'Data Gagal Di Hapus!!', 'bottom', 'left', 'animated fadeInDown', 'animated fadeOutUp');
            }
         });
      })
   })

   $('#modal_update_biodata_karyawan').on('hidden.bs.modal', function(e) {
      table_data_karyawan.ajax.reload(null, false);
   })

   // cetak ulang nota pembayaran
   var table_data_pembayaran = $('#data_pembayaran').DataTable({
      'rowCallback': function(row, data, index) {
         var index = index + 1;
         $('td:eq(0)', row).html(index);
         return row;
      },
      'serverside': true,
      'processing': true,
      'autoWidth': false,
      'scroller': true,
      'dom': 'Bfrtip',
      'responsive': true,
      'title': '',
      'buttons': [{
            extend: 'excel',
            title: 'Data Pembayaran',
            exportOptions: {
               columns: [1, 2, 3, 4, 5, 6, 7],
            },
         },
         {
            extend: 'pdf',
            title: 'Data Pembayaran',
            exportOptions: {
               columns: [1, 2, 3, 4, 5, 6, 7],
            },
         },
         {
            extend: 'print',
            title: 'Data Pembayaran',
            exportOptions: {
               columns: [1, 2, 3, 4, 5, 6, 7],
            },
         },
      ],
      'ajax': {
         url: "/index.php/keuanganrutin/data_pembayaran",
         method: "POST",
         data: function(d) {
            var form_data = $('#sort_pembayaran').serializeArray();
            $.each(form_data, function(i, item) {
               d[item.name] = item.value;
            });
         },
      },
      'columnDefs': [{
            "searchable": false,
            "targets": 0,
            "data": null,
         },
         {
            "targets": 1,
            "data": "nonota",
         },
         {
            "targets": 2,
            "data": "nis",
         },
         {
            "targets": 3,
            "data": "namasiswa",
         },
         {
            "targets": 4,
            "data": "kelas",
         },
         {
            "targets": 5,
            "data": "tanggal",
         },
         {
            "targets": 6,
            "data": null,
            "mRender": function(data, type, row) {
               return $.number(row.total);
            }
         },
         {
            "targets": 7,
            "data": "pengguna",
         },
         //{
            //"searchable": false,
            //"targets": 6,
            //"className": "text-center",
            //"data": null,
            //"mRender": function(data, type, row) {
               //return ' <button type="button" class="btn btn-primary waves-effect" name="cetak_nota" id="' + row.nonota + '"> <i class="material-icons">print</i> </button> <a href="/index.php/keuanganrutin/hapus/' + row.nonota + '" class="btn btn-danger waves-effect" id="delete-btn"> <i title="Delete Data From Table" class="material-icons">delete_forever</i> </a>';
            //}
         //},
      ]
   })

   $('#data_pembayaran').on('click', 'button[name=cetak_nota]', function() {
      var nonota = $(this).closest("tr").find('td:eq(6) button[name=cetak_nota]').attr('id');
      $.ajax({
         method: "GET",
         url: "/index.php/keuanganrutin/print_nota/" + nonota,
         dataType: "JSON",
         success: function(res) {
            console.log(res);
            var data = res[0];
            $('#tglBukti').html(data["tanggal"]);
            $('#modalnonota').html(data["nonota"]);
            $('#modaltipe').html(data["transfer"]);
            $('#modalnamasiswa').html(data["namasiswa"]);
            $('#modalnamaayah').html(data["namaayah"]);
            $('#modalkelas').html(data["kelas"]);
            $('#modalbulanspp').html(data["namabulan"].join(', '));
            $('#modalspp').html($.number(data["spp"]));
            $('#modaldaftarulang').html($.number(data["daftarulang"]));
            $('#modaluangpangkal').html($.number(data["uangpangkal"]));
            $('#modaluangsakumasuk').html($.number(data["uangsakumasuk"]));
            $('#modalcatataninfaq').html(data["keteranganinfaq"]);
            $('#modalinfaq').html($.number(data["infaq"]));
            $('#modalbimbel').html($.number(data["bimbel"]));
            $('#modaltanggal').html(data["tanggal"]);
            $('#modaltotal').html($.number(data["total"]));
            $('#modal_nota').modal();
         }
      })

   });

   $('#data_pembayaran').on('click', 'a#delete-btn', function(e) {
      e.preventDefault();
      var url = $(this).closest("tr").find('td:eq(6) a#delete-btn').attr('href');
      var csrf = {};
      csrf[$('input[type=hidden]').attr('name')] = $('input[type=hidden]').val();
      swal({
         title: "Anda Yakin?",
         type: "warning",
         showCancelButton: true,
         closeOnConfirm: true,
         confirmButtonColor: "#DD6B55",
         confirmButtonText: "Hapus!!",
      }, function() {
         $.ajax({
            method: "POST",
            url: url,
            data: csrf,
            success: function() {
               notif('alert-info', 'Data Berhasil Di Hapus!!', 'bottom', 'left', 'animated fadeInDown', 'animated fadeOutUp');
               table_data_pembayaran.ajax.reload(null, false);
            },
            error: function() {
               notif('alert-warning', 'Data Gagal Di Hapus!!', 'bottom', 'left', 'animated fadeInDown', 'animated fadeOutUp');
            }
         });
      })
   })

});
