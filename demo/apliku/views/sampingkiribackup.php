    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo base_url();?>template/images/sipond.jpeg" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Achmad Yachdi Fauzan</div>
                    <div class="email">gue.yadi@gmail.com</div>
                </div>
            </div>

            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">Menu Utama</li>
                    <li class="active">
                        <a href="<?php echo base_url();?>index.php/welcome">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
            <?php foreach($data as $m): 
                if($m->halaman=='Tata Usaha') {  
            ?>
                   <!-- Ini menu TU -->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">library_books</i> <span class="icon-name">Tata Usaha</span>
                        </a>
                        <ul class="ml-menu">
                           <li>
                              <a href="<?php echo base_url();?>index.php/siswa/kartupelajar">
                                 <span>Kartu Pelajar</span>
                              </a>
                           </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Siswa</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="<?php echo base_url();?>index.php/siswa/datalist">
                                            <span>Data Siswa</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url();?>index.php/siswa/test">
                                        <span>Tambah Siswa</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Guru / Karyawan</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="<?php echo base_url();?>index.php/karyawan/datalist">
                                            <span>Data Guru/Karyawan</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url();?>index.php/karyawan/test">
                                        <span>Tambah Guru / Karyawan</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </li>
            <?php
                  }
              endforeach 
            ?>


            <?php foreach($data as $m): 
                if($m->halaman=='Keuangan') {  
            ?>
                    <!-- Ini Data Keuangan -->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">monetization_on</i> <span class="icon-name">Keuangan</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Rutin</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="<?php echo base_url();?>index.php/keuanganrutin/kartupelajar">
                                            <span>Demo Raport</span>
                                        </a>
                                        <a href="<?php echo base_url();?>index.php/keuanganrutin/">
                                            <span>Pemasukan Rutin</span>
                                        </a>
                                        <a href="<?php echo base_url();?>index.php/keuangansettingsiswa/">
                                            <span>Setting Keuangan Siswa</span>
                                        </a>
                                        <a href="<?php echo base_url();?>index.php/keuanganuangsakukeluar/">
                                            <span>Pengambilan Uang Saku</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Jurnal</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="<?php echo base_url();?>index.php/keuanganjurnal/keluar/">
                                            <span>Jurnal Uang Keluar</span>
                                        </a>
                                        <a href="<?php echo base_url();?>index.php/keuanganjurnal/masuk/">
                                            <span>Jurnal Uang Masuk</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>


                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Laporan</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="<?php echo base_url();?>index.php/keuanganrutin/datalist">
                                            <span>Laporan SPP</span>
                                        </a>
                                        <a href="<?php echo base_url();?>index.php/keuanganrutin/datalistnonspp">
                                            <span>Laporan Selain SPP</span>
                                        </a>
                                        <a href="<?php echo base_url();?>index.php/keuanganrutin/cash">
                                            <span>Laporan Penerimaan Cash</span>
                                        </a>
                                        <a href="<?php echo base_url();?>index.php/keuanganrutin/transfer">
                                            <span>Laporan Penerimaan Transfer</span>
                                        </a>
                                        <a href="<?php echo base_url();?>index.php/keuanganuangsakukeluar/datalist">
                                            <span>Laporan Uang Saku Keluar</span>
                                        </a>
                                        <a href="<?php echo base_url();?>index.php/keuanganrutin/datalistuangsakusisa">
                                            <span>Laporan Uang Saku Sisa</span>
                                        </a>
                                        <a href="<?php echo base_url();?>index.php/keuanganrutin/datalistmonitoringspp">
                                            <span>Monitoring SPP</span>
                                        </a>
                                    </li>


                                      <li>
                                          <a href="javascript:void(0);" class="menu-toggle">
                                              <span>Akunting</span>
                                          </a>
                                          <ul class="ml-menu">
                                              <li>
                                                  <a href="<?php echo base_url();?>index.php/keuanganlaporan/jurnal">
                                                      <span>Laporan Jurnal</span>
                                                  </a>
                                                  <a href="<?php echo base_url();?>index.php/keuanganlaporan/bukubesar">
                                                      <span>Laporan Buku Besar</span>
                                                  </a>
                                                  <a href="<?php echo base_url();?>index.php/keuanganlaporan/neracasaldo">
                                                      <span>Laporan Neraca Saldo</span>
                                                  </a>
                                              </li>
                                          </ul>
                                      </li>

                                </ul>
                            </li>
                        </ul>
                    </li>
            <?php
                  }
              endforeach 
            ?>

            <?php foreach($data as $m): 
                if($m->halaman=='Admin') {  
            ?>
                    <!-- Ini Data Admin -->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Admin</span>
                        </a>
                        <ul class="ml-menu">

                            
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Set Sekolah</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="<?php echo base_url();?>index.php/adminsetsekolah/">
                                            <span>Informasi Sekolah</span>
                                        </a>
                                        <a href="<?php echo base_url();?>index.php/surat/sksekolah">
                                            <span>Surat Keterangan Bersekolah</span>
                                        </a>
                                        <a href="<?php echo base_url();?>index.php/surat/spindah">
                                            <span>Surat Pindah Sekolah</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            
                            <li>
                                <a href="<?php echo base_url();?>index.php/adminsetpengguna/">
                                    <span>Set pengguna</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>index.php/berita/">
                                    <span>Boardcast Berita</span>
                                </a>
                            </li>
                        </ul>
                    </li>
            <?php
                  }
              endforeach 
            ?>


            <?php foreach($data as $m): 
                if($m->halaman=='Kesehatan') {  
            ?>
                    <!-- Ini Data Kesehatan -->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">local_pharmacy</i> <span class="icon-name">Kesehatan</span>

                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url();?>index.php/kesehatan/test">Isi Data Kesehatan</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>index.php/kesehatan/datalist_kesehatan">Laporan Kesehatan</a>
                            </li>
                        </ul>
                    </li>
            <?php
                  }
              endforeach 
            ?>


            <?php foreach($data as $m): 
                if($m->halaman=='Perizinan') {  
            ?>
                    <!-- Ini Data Perizinan -->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i> <span class="icon-name">Perizinan</span>

                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url();?>index.php/perizinan/test">Isi Data Perizinan</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>index.php/perizinan/datalist_perizinan">Laporan Perizinan</a>
                            </li>
                        </ul>
                    </li>
            <?php
                  }
              endforeach 
            ?>


            <?php foreach($data as $m): 
                if($m->halaman=='Pelanggaran') {  
            ?>
                    <!-- Ini Data Pelanggaran -->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">warning</i> <span class="icon-name">Pelanggaran</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url();?>index.php/pelanggaran/test">Isi Data Pelanggaran</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>index.php/pelanggaran/datalist_pelanggaran">Laporan Pelanggaran</a>
                            </li>
                        </ul>
                    </li>
            <?php
                  }
              endforeach 
            ?>


            <?php foreach($data as $m): 
                if($m->halaman=='Prestasi') {  
            ?>
                    <!-- Ini Data Prestasi -->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">verified_user</i> <span class="icon-name">Prestasi</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url();?>index.php/prestasi/test">Isi Data Prestasi</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>index.php/prestasi/datalist_prestasi">Laporan Prestasi</a>
                            </li>
                        </ul>
                    </li>
            <?php
                  }
              endforeach 
            ?>


            <?php foreach($data as $m): 
                if($m->halaman=='Tahfidz') {  
            ?>
                    <!-- Ini Data Tahfidz -->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">import_contacts</i> <span class="icon-name">Tahfidz</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url();?>index.php/tahfidz/test">Isi Data Tahfidz</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>index.php/tahfidz/datalist">Laporan Tahfidz</a>
                            </li>
                        </ul>
                    </li>
            <?php
                  }
              endforeach 
            ?>


            <?php foreach($data as $m): 
                if($m->halaman=='Nilai-Raport') {  
            ?>
                    <!-- Ini Data Nilai dan Raport -->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_quilt</i> <span class="icon-name">Nilai dan Raport</span>
                        </a>
                        <ul class="ml-menu">
                            <li>

                              <a href="javascript:void(0);" class="menu-toggle">
                                  <span>Mata Pelajaran</span>
                              </a>
                              <ul class="ml-menu">
                                  <li>
                                      <a href="<?php echo base_url();?>index.php/mapel/">
                                          <span>Tambah Mata Pelajaran</span>
                                      </a>
                                      <a href="<?php echo base_url();?>index.php/mapel/datalist">
                                          <span>Daftar Mata Pelajaran</span>
                                      </a>
                                  </li>
                              </ul>

                              <a href="javascript:void(0);" class="menu-toggle">
                                  <span>Seting Mapel & Guru</span>
                              </a>
                              <ul class="ml-menu">
                                  <li>
                                      <a href="<?php echo base_url();?>index.php/nilai/settingmapel">
                                          <span>Setting</span>
                                      </a>
                                      <a href="<?php echo base_url();?>index.php/nilai2/datalistsetting">
                                          <span>Daftar Setting Mapel</span>
                                      </a>
                                  </li>
                              </ul>

                              <a href="javascript:void(0);" class="menu-toggle">
                                  <span>Laporan</span>
                              </a>
                              <ul class="ml-menu">
                                  <li>
                                      <a href="<?php echo base_url();?>index.php/nilai/laporannilai">
                                          <span>Laporan Nilai</span>
                                      </a>
                                      <a href="<?php echo base_url();?>index.php/nilai/laporanperpengajar">
                                          <span>Laporan Per Pengajar</span>
                                      </a>
                                      <a href="<?php echo base_url();?>index.php/nilai/laporanledgernilai">
                                          <span>Ledger Nilai</span>
                                      </a>
                                  </li>
                              </ul>

                              <li>
                                  <a href="<?php echo base_url();?>index.php/nilai/test">Upload Data</a>
                              </li>



                            </li>
                        </ul>
                    </li>
            <?php
                  }
              endforeach 
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
