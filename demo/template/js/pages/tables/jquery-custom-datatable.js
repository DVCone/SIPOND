(function($) {

   $.fn.customDataTable = function(options) {

      var settings = $.extend({
         //table: null,
         url: null,
         form: null,
         index: true,
         update_btn: null,
         print_title: '',
         delete_btn: null,
         btn_column: null,
         column_row: null,
      }, options);

      var data = $(settings.form).serializeArray();

      return this.each(function() {
         var table = $(this).DataTable({
            'rowCallback': function(row, data, index) {
               var index = index + 1;
               $('td:eq(0)', row).html(index);
               return row;
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
                  title: settings.print_title,
                  exportOptions: {
                     columns: settings.btn_column,
                  }
               },
               {
                  extend: 'pdf',
                  title: settings.print_title,
                  exportOptions: {
                     columns: settings.btn_column,
                  }
               },
               {
                  extend: 'print',
                  title: settings.print_title,
                  exportOptions: {
                     columns: settings.btn_column,
                  }
               },

            ],

            'ajax': {
               url: "/index.php/" + settings.url,
               method: "POST",
               data: function(d) {
                  var form_data = $(settings.form).serializeArray();
                  $.each(form_data, function(i, item) {
                     d[item.name] = item.value;
                  })
               }
            },
            'columnDefs': settings.column_row,
         });

         $(settings.update_btn).on('click', function(e) {
            table.ajax.reload(null, false);
            $('#search_date').modal('hide');
         })

         table.on('click', 'a#delete-btn', function(e) {
            e.preventDefault();
            var url = $(this).closest("tr").find('td:eq(' + settings.delete_btn + ') a#delete-btn').attr('href');
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
                     table.ajax.reload(null, false);
                  },
                  error: function() {
                     notif('alert-warning', 'Data Gagal Di Hapus!!', 'bottom', 'left', 'animated fadeInDown', 'animated fadeOutUp');
                  }
               });
            })
         })

      });
   }
})(jQuery);

function notif(colorName, text, placementFrom, placementAlign, animateEnter, animateExit) {
   var allowDismiss = true;

   $.notify({
      message: text
   }, {
      type: colorName,
      allow_dismiss: allowDismiss,
      newest_on_top: true,
      timer: 1000,
      placement: {
         from: placementFrom,
         align: placementAlign,
      },
      animate: {
         enter: animateEnter,
         exit: animateExit,
      },
      template: '<div data-notify="container" class="bootstrap-notify-container alert alert-dismissible {0} ' + (allowDismiss ? "p-r-35" : "") + '" role="al      ert">' +
         '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
         '<span data-notify="icon"></span> ' +
         '<span data-notify="title">{1}</span> ' +
         '<span data-notify="message">{2}</span>' +
         '<div class="progress" data-notify="progressbar">' +
         '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
         '</div>' +
         '<a href="{3}" target="{4}" data-notify="url"></a>' +
         '</div>'
   });
}
