    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <?php
                    get_instance()->load->helper('itusajja');
                        // if (logokecil == '') {
                            echo "<img src='".getLogoSekolah()."'  width='48' height='48' alt='User'>";
                                
                        // }
                    ?>
                    </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><p id="namasekolah"></p></div>
                </div>
            </div>

            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">Menu Utama</li>
                    <?php 
                        echo sidebar_create();
                    ?>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2018 Sistem Informasi Ponpes - <a href="javascript:void(0);">SIPond</a>
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.1
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->

    </section>

    <script type="text/javascript">

         $.ajax({
        method: "GET",
        dataType:"json",
        url: "<?php echo base_url(); ?>index.php/sampingkiri/carisekolah/",
        success:function(res) {   
                    $('#namasekolah').html(res.data.namasekolah)
                }
        })

    </script>
