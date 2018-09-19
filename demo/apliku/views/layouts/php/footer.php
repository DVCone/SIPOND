<!--Jquery Core-->
<script src="<?php echo base_url("template/js/jquery-2.2.4.min.js") ?>" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<!-- Bootstrap Core Js -->
<script src="<?php echo base_url("template/plugins/bootstrap/js/bootstrap.js") ?>"></script>

<!-- Select Plugin Js -->
<script src="<?php echo base_url("template/plugins/bootstrap-select/js/bootstrap-select.js") ?>"></script>

<!-- Slimscroll Plugin Js -->
<script src="<?php echo base_url("template/plugins/jquery-slimscroll/jquery.slimscroll.js") ?>"></script>

<!-- Bootstrap Notify Plugin Js -->
<script src="<?php echo base_url("template/plugins/bootstrap-notify/bootstrap-notify.js") ?>"></script>

<!-- Waves Effect Plugin Js -->
<script src="<?php echo base_url("template/plugins/node-waves/waves.js") ?>"></script>

<!-- Jquery Spinner Plugin Js -->
<script src="<?php echo base_url("template/plugins/jquery-spinner/js/jquery.spinner.js") ?>"></script>

<!-- SweetAlert Plugin Js -->
<script src="<?php echo base_url("template/plugins/sweetalert/sweetalert.min.js") ?>"></script>

<!-- Autosize Plugin Js -->
<script src="<?php echo base_url("template/plugins/autosize/autosize.js") ?>"></script>

<!-- Moment Plugin Js -->
<script src="<?php echo base_url("template/plugins/momentjs/moment.js") ?>"></script>

<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="<?php echo base_url("template/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js") ?>"></script>

<!-- Custom Js -->
<script src="<?php echo base_url("template/js/admin.js") ?>"></script>
<!--<script src="<?php echo base_url() ?>template/js/pages/forms/basic-form-elements.js"></script>-->
<!--<script src="<?php echo base_url() ?>template/js/pages/ui/dialogs.js"></script>-->

<!-- Demo Js -->
<script src="<?php echo base_url("template/js/demo.js") ?>"></script>
<script src="<?php echo base_url("template/js/pages/ui/notifications.js") ?>"></script>

<!-- Memanggil file .js untuk proses autocomplete -->
<!-- <script type='text/javascript' src='<?php echo base_url() ?>assets/js/jquery-1.8.2.min.js'></script> -->

<script type="text/javascript">

   function changeFunc() {
      var selectBox = document.getElementById("cari_siswa");
      var selectedValue = selectBox.options[selectBox.selectedIndex].value;

      var res = selectedValue.split("#");

      document.getElementById("nis").value=res[0];
      document.getElementById("namasiswa").value=res[1];
      document.getElementById("kelas").value=res[2];
      document.getElementById("namaayah").value=res[3];
      //alert(selectedValue);
   }


   function notif(text){
        showNotification("", text, "top", "right");
    }
    function showNotification(colorName, text, placementFrom, placementAlign, animateEnter, animateExit) {
    if (colorName === null || colorName === '') { colorName = 'bg-black'; }
    if (text === null || text === '') { text = 'Turning standard Bootstrap alerts'; }
    if (animateEnter === null || animateEnter === '') { animateEnter = 'animated fadeInDown'; }
    if (animateExit === null || animateExit === '') { animateExit = 'animated fadeOutUp'; }
    var allowDismiss = true;

    $.notify({
        message: text
    },
        {
            type: colorName,
            allow_dismiss: allowDismiss,
            newest_on_top: true,
            timer: 1000,
            placement: {
                from: placementFrom,
                align: placementAlign
            },
            animate: {
                enter: animateEnter,
                exit: animateExit
            },
            template: '<div data-notify="container" class="bootstrap-notify-container alert alert-dismissible {0} ' + (allowDismiss ? "p-r-35" : "") + '" role="alert">' +
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

</script>
