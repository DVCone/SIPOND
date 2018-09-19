<!DOCTYPE html>
<html lang="en">
   <head>

      <?php $this->load->view("layouts/php/header",$data);?>

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
         <input type="text" placeholder="START TYPING...">
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

         </div>
         </div>
      </nav>


      <?php $this->load->view("layouts/php/sidebar",$data);?>

      <section class="content">

          <?php $this->load->view($data['content'],$data);?>

      </section>

      <?php $this->load->view("layouts/php/footer",$data);?>

   </body>
</html>
