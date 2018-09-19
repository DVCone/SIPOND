<!DOCTYPE html>
<html>

<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed tidak');
//session_start();

$pengguna = $this->session->userdata('username');
if ( $pengguna == ""){
	$this->load->view('signin');
	exit;//('Maaf. Alamat Yang Anda Ketikan Salah');
}

// $session = $this->M_session->get_session();
// if (!$session['username']){
// 	$this->load->view('signin');
// 	exit;//('Maaf. Alamat Yang Anda Ketikan SALAH');
// }

 ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>SIPond | Sistem Informasi Ponpes</title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo base_url();?>template/images/sipond.jpeg" type="image/x-icon">

    <!-- Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css"> -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Ubuntu:300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    
    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url();?>template/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url();?>template/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url();?>template/plugins/animate-css/animate.css" rel="stylesheet" />
    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="<?php echo base_url();?>template/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Bootstrap Spinner Css -->
    <link href="<?php echo base_url();?>template/plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">

    <!-- Wait Me Css -->
    <link href="<?php echo base_url();?>template/plugins/waitme/waitMe.css" rel="stylesheet" />

    <!-- Sweetalert Css -->
    <link href="<?php echo base_url();?>template/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
    <!-- JQuery DataTable Css -->
    <link href="<?php echo base_url();?>template/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Morris Chart Css-->
    <link href="<?php echo base_url();?>template/plugins/morrisjs/morris.css" rel="stylesheet" />
    <!-- Bootstrap Select Css -->
    <link href="<?php echo base_url();?>template/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="<?php echo base_url();?>template/css/style.css" rel="stylesheet">
    <!--<link href="<?php echo base_url();?>template/css/print.css" rel="stylesheet">-->

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url();?>template/css/raport.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>template/css/themes/all-themes.css" rel="stylesheet" />
    <!-- Jquery Core Js -->
    <script src="<?php echo base_url();?>template/plugins/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>

<style>
.btn:not(.btn-link):not(.btn-circle) i{
    font-size: 17px;
    position: relative;
    top: 2px;
}
#show_data .btn{
    padding: 1px 8px;
}
</style>
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="Pencarian...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href=""> Sistem Informasi Pondok Pesantren  </a>
            </div>
            <div class="navbar-collapse collapse in" id="navbar-collapse" aria-expanded="true">
<ul class="nav navbar-nav navbar-right">
    <!-- Notifications -->
    <li class="dropdown pull-right log">
        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <img src="<?php echo base_url('template/images/sipond.jpeg'); ?>" alt=""> <?php echo $this->session->userdata('username')->username ?>
            <span class="material-icons">expand_more</span>
        </a>
        <ul class="dropdown-menu dropdown-usermenu pull-right">
            <!-- <li>
                <a href="<?php echo base_url('index.php/welcome/profile/'); ?>"> 
                    <i class="material-icons">person</i> Profile</a>
            </li> -->
            <li>
                <a href="<?php echo base_url();?>index.php/login/logout">
                    <i class="material-icons">last_page</i> Keluar</a>
            </li>
        </ul>
    </li>
    <!-- #END# Notifications -->
</ul>
</div>
            </div>
        </div>
    </nav>