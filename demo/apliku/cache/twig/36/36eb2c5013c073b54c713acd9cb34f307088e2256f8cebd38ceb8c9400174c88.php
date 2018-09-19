<?php

/* sampingkiri.php */
class __TwigTemplate_c389cbb0d0e2067b5adaa06e3e08661920d4218feac19aab58f285b88fe722e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "    <section>
        <!-- Left Sidebar -->
        <aside id=\"leftsidebar\" class=\"sidebar\">
            <!-- User Info -->
            <div class=\"user-info\">
                <div class=\"image\">
                    <img src=\"<?php echo base_url();?>template/images/sipond.jpeg\" width=\"48\" height=\"48\" alt=\"User\" />
                </div>
                <div class=\"info-container\">
                    <div class=\"name\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Achmad Yachdi Fauzan</div>
                    <div class=\"email\">gue.yadi@gmail.com</div>
                    <div class=\"btn-group user-helper-dropdown\">
                        <i class=\"material-icons\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">keyboard_arrow_down</i>
                        <ul class=\"dropdown-menu pull-right\">
                            <li><a href=\"<?php echo base_url();?>index.php/login/logout\"><i class=\"material-icons\">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class=\"menu\">
                <ul class=\"list\">
                    <li class=\"header\">Menu Utama SIPond</li>
                    <li class=\"active\">
                        <a href=\"<?php echo base_url();?>index.php/welcome\">
                            <i class=\"material-icons\">home</i>
                            <span>Home</span>
                        </a>
                    </li>

                   <!-- Ini menu TU -->
                    <li>
                        <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                            <i class=\"material-icons\">library_books</i> <span class=\"icon-name\">Tata Usaha</span>
                        </a>
                        <ul class=\"ml-menu\">
                            <li>
                                <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                                    <span>Siswa</span>
                                </a>
                                <ul class=\"ml-menu\">
                                    <li>
                                        <a href=\"<?php echo base_url();?>index.php/siswa/datalist\">
                                            <span>Data Siswa</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"<?php echo base_url();?>index.php/siswa/\">
                                        <span>Tambah Siswa</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                                    <span>Guru / Karyawan</span>
                                </a>
                                <ul class=\"ml-menu\">
                                    <li>
                                        <a href=\"<?php echo base_url();?>index.php/karyawan/datalist\">
                                            <span>Data Guru/Karyawan</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"<?php echo base_url();?>index.php/karyawan/\">
                                        <span>Tambah Guru / Karyawan</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </li>


                    <!-- Ini Data Keuangan -->
                    <li>
                        <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                            <i class=\"material-icons\">monetization_on</i> <span class=\"icon-name\">Keuangan</span>
                        </a>
                        <ul class=\"ml-menu\">
                            <li>
                                <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                                    <span>Rutin</span>
                                </a>
                                <ul class=\"ml-menu\">
                                    <li>
                                        <a href=\"<?php echo base_url();?>index.php/keuanganrutin/\">
                                            <span>Pemasukan Rutin</span>
                                        </a>
                                        <a href=\"<?php echo base_url();?>index.php/keuangansettingsiswa/\">
                                            <span>Setting Keuangan Siswa</span>
                                        </a>
                                        <a href=\"<?php echo base_url();?>index.php/keuanganuangsakukeluar/\">
                                            <span>Pengambilan Uang Saku</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                                    <span>Laporan</span>
                                </a>
                                <ul class=\"ml-menu\">
                                    <li>
                                        <a href=\"<?php echo base_url();?>index.php/keuanganrutin/datalist\">
                                            <span>Laporan SPP</span>
                                        </a>
                                        <a href=\"<?php echo base_url();?>index.php/keuanganrutin/datalistnonspp\">
                                            <span>Laporan Selain SPP</span>
                                        </a>
                                        <a href=\"<?php echo base_url();?>index.php/keuanganrutin/penerimaancash\">
                                            <span>Laporan Penerimaan Cash</span>
                                        </a>
                                        <a href=\"<?php echo base_url();?>index.php/keuanganrutin/penerimaantransfer\">
                                            <span>Laporan Penerimaan Transfer</span>
                                        </a>
                                        <a href=\"<?php echo base_url();?>index.php/keuanganuangsakukeluar/datalist\">
                                            <span>Laporan Uang Saku Keluar</span>
                                        </a>
                                        <a href=\"<?php echo base_url();?>index.php/keuanganrutin/datalistuangsakusisa\">
                                            <span>Laporan Uang Saku Sisa</span>
                                        </a>
                                        <a href=\"<?php echo base_url();?>index.php/keuanganrutin/datalistmonitoringspp\">
                                            <span>Monitoring SPP</span>
                                        </a>
                                    </li>


                                      <li>
                                          <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                                              <span>Akunting</span>
                                          </a>
                                          <ul class=\"ml-menu\">
                                              <li>
                                                  <a href=\"<?php echo base_url();?>index.php/keuanganlaporan/jurnal\">
                                                      <span>Laporan Jurnal</span>
                                                  </a>
                                                  <a href=\"<?php echo base_url();?>index.php/keuanganlaporan/bukubesar\">
                                                      <span>Laporan Buku Besar</span>
                                                  </a>
                                                  <a href=\"<?php echo base_url();?>index.php/keuanganlaporan/neracasaldo\">
                                                      <span>Laporan Neraca Saldo</span>
                                                  </a>
                                              </li>
                                          </ul>
                                      </li>

                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                            <i class=\"material-icons\">widgets</i>
                            <span>Admin</span>
                        </a>
                        <ul class=\"ml-menu\">

                            <li>
                                <a href=\"<?php echo base_url();?>index.php/adminsetsekolah/\">Set Sekolah</a>
                            </li>
                            <li>
                                <a href=\"<?php echo base_url();?>index.php/adminsetpengguna/\">Set pengguna</a>
                            </li>
                            <li>
                                <a href=\"<?php echo base_url();?>index.php/berita/\">Broadcast Berita</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                            <i class=\"material-icons\">local_pharmacy</i> <span class=\"icon-name\">Kesehatan</span>

                        </a>
                        <ul class=\"ml-menu\">
                            <li>
                                <a href=\"<?php echo base_url();?>index.php/kesehatan/\">Isi Data Kesehatan</a>
                            </li>
                            <li>
                                <a href=\"<?php echo base_url();?>index.php/kesehatan/datalist\">Laporan Kesehatan</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                            <i class=\"material-icons\">assignment</i> <span class=\"icon-name\">Perizinan</span>

                        </a>
                        <ul class=\"ml-menu\">
                            <li>
                                <a href=\"<?php echo base_url();?>index.php/perizinan/\">Isi Data Perizinan</a>
                            </li>
                            <li>
                                <a href=\"<?php echo base_url();?>index.php/perizinan/datalist\">Laporan Perizinan</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                            <i class=\"material-icons\">warning</i> <span class=\"icon-name\">Pelanggaran</span>
                        </a>
                        <ul class=\"ml-menu\">
                            <li>
                                <a href=\"<?php echo base_url();?>index.php/pelanggaran/\">Isi Data Pelanggaran</a>
                            </li>
                            <li>
                                <a href=\"<?php echo base_url();?>index.php/pelanggaran/datalist\">Laporan Pelanggaran</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                            <i class=\"material-icons\">verified_user</i> <span class=\"icon-name\">Prestasi</span>
                        </a>
                        <ul class=\"ml-menu\">
                            <li>
                                <a href=\"<?php echo base_url();?>index.php/prestasi/\">Isi Data Prestasi</a>
                            </li>
                            <li>
                                <a href=\"<?php echo base_url();?>index.php/prestasi/datalist\">Laporan Prestasi</a>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                            <i class=\"material-icons\">import_contacts</i> <span class=\"icon-name\">Tahfidz</span>
                        </a>
                        <ul class=\"ml-menu\">
                            <li>
                                <a href=\"<?php echo base_url();?>index.php/tahfidz/\">Isi Data Tahfidz</a>
                            </li>
                            <li>
                                <a href=\"<?php echo base_url();?>index.php/tahfidz/datalist\">Laporan Tahfidz</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                            <i class=\"material-icons\">view_quilt</i> <span class=\"icon-name\">Nilai dan Raport</span>
                        </a>
                        <ul class=\"ml-menu\">
                            <li>

                              <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                                  <span>Mata Pelajaran</span>
                              </a>
                              <ul class=\"ml-menu\">
                                  <li>
                                      <a href=\"<?php echo base_url();?>index.php/keuanganrutin/\">
                                          <span>Tambah Mata Pelajaran</span>
                                      </a>
                                      <a href=\"<?php echo base_url();?>index.php/keuangansettingsiswa/\">
                                          <span>Daftar Mata Pelajaran</span>
                                      </a>
                                  </li>
                              </ul>

                              <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                                  <span>Seting Mapel & Guru</span>
                              </a>
                              <ul class=\"ml-menu\">
                                  <li>
                                      <a href=\"<?php echo base_url();?>index.php/nilai/settingmapel\">
                                          <span>Setting</span>
                                      </a>
                                      <a href=\"<?php echo base_url();?>index.php/nilai2/datalistsetting\">
                                          <span>Daftar Setting Mapel</span>
                                      </a>
                                  </li>
                              </ul>

                              <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                                  <span>Laporan</span>
                              </a>
                              <ul class=\"ml-menu\">
                                  <li>
                                      <a href=\"<?php echo base_url();?>index.php/nilai/laporannilai\">
                                          <span>Laporan Nilai</span>
                                      </a>
                                      <a href=\"<?php echo base_url();?>index.php/nilai/laporanperpengajar\">
                                          <span>Laporan Per Pengajar</span>
                                      </a>
                                      <a href=\"<?php echo base_url();?>index.php/nilai/laporanledgernilai\">
                                          <span>Ledger Nilai</span>
                                      </a>
                                  </li>
                              </ul>

                              <li>
                                  <a href=\"<?php echo base_url();?>index.php/nilai/test\">Upload Data</a>
                              </li>



                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class=\"legal\">
                <div class=\"copyright\">
                    &copy; 2018 Sistem Informasi Ponpes - <a href=\"javascript:void(0);\">SIPond</a>
                </div>
                <div class=\"version\">
                    <b>Version: </b> 1.0.1
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->

    </section>
";
    }

    public function getTemplateName()
    {
        return "sampingkiri.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("    <section>
        <!-- Left Sidebar -->
        <aside id=\"leftsidebar\" class=\"sidebar\">
            <!-- User Info -->
            <div class=\"user-info\">
                <div class=\"image\">
                    <img src=\"<?php echo base_url();?>template/images/sipond.jpeg\" width=\"48\" height=\"48\" alt=\"User\" />
                </div>
                <div class=\"info-container\">
                    <div class=\"name\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Achmad Yachdi Fauzan</div>
                    <div class=\"email\">gue.yadi@gmail.com</div>
                    <div class=\"btn-group user-helper-dropdown\">
                        <i class=\"material-icons\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">keyboard_arrow_down</i>
                        <ul class=\"dropdown-menu pull-right\">
                            <li><a href=\"<?php echo base_url();?>index.php/login/logout\"><i class=\"material-icons\">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class=\"menu\">
                <ul class=\"list\">
                    <li class=\"header\">Menu Utama SIPond</li>
                    <li class=\"active\">
                        <a href=\"<?php echo base_url();?>index.php/welcome\">
                            <i class=\"material-icons\">home</i>
                            <span>Home</span>
                        </a>
                    </li>

                   <!-- Ini menu TU -->
                    <li>
                        <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                            <i class=\"material-icons\">library_books</i> <span class=\"icon-name\">Tata Usaha</span>
                        </a>
                        <ul class=\"ml-menu\">
                            <li>
                                <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                                    <span>Siswa</span>
                                </a>
                                <ul class=\"ml-menu\">
                                    <li>
                                        <a href=\"<?php echo base_url();?>index.php/siswa/datalist\">
                                            <span>Data Siswa</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"<?php echo base_url();?>index.php/siswa/\">
                                        <span>Tambah Siswa</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                                    <span>Guru / Karyawan</span>
                                </a>
                                <ul class=\"ml-menu\">
                                    <li>
                                        <a href=\"<?php echo base_url();?>index.php/karyawan/datalist\">
                                            <span>Data Guru/Karyawan</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"<?php echo base_url();?>index.php/karyawan/\">
                                        <span>Tambah Guru / Karyawan</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </li>


                    <!-- Ini Data Keuangan -->
                    <li>
                        <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                            <i class=\"material-icons\">monetization_on</i> <span class=\"icon-name\">Keuangan</span>
                        </a>
                        <ul class=\"ml-menu\">
                            <li>
                                <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                                    <span>Rutin</span>
                                </a>
                                <ul class=\"ml-menu\">
                                    <li>
                                        <a href=\"<?php echo base_url();?>index.php/keuanganrutin/\">
                                            <span>Pemasukan Rutin</span>
                                        </a>
                                        <a href=\"<?php echo base_url();?>index.php/keuangansettingsiswa/\">
                                            <span>Setting Keuangan Siswa</span>
                                        </a>
                                        <a href=\"<?php echo base_url();?>index.php/keuanganuangsakukeluar/\">
                                            <span>Pengambilan Uang Saku</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                                    <span>Laporan</span>
                                </a>
                                <ul class=\"ml-menu\">
                                    <li>
                                        <a href=\"<?php echo base_url();?>index.php/keuanganrutin/datalist\">
                                            <span>Laporan SPP</span>
                                        </a>
                                        <a href=\"<?php echo base_url();?>index.php/keuanganrutin/datalistnonspp\">
                                            <span>Laporan Selain SPP</span>
                                        </a>
                                        <a href=\"<?php echo base_url();?>index.php/keuanganrutin/penerimaancash\">
                                            <span>Laporan Penerimaan Cash</span>
                                        </a>
                                        <a href=\"<?php echo base_url();?>index.php/keuanganrutin/penerimaantransfer\">
                                            <span>Laporan Penerimaan Transfer</span>
                                        </a>
                                        <a href=\"<?php echo base_url();?>index.php/keuanganuangsakukeluar/datalist\">
                                            <span>Laporan Uang Saku Keluar</span>
                                        </a>
                                        <a href=\"<?php echo base_url();?>index.php/keuanganrutin/datalistuangsakusisa\">
                                            <span>Laporan Uang Saku Sisa</span>
                                        </a>
                                        <a href=\"<?php echo base_url();?>index.php/keuanganrutin/datalistmonitoringspp\">
                                            <span>Monitoring SPP</span>
                                        </a>
                                    </li>


                                      <li>
                                          <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                                              <span>Akunting</span>
                                          </a>
                                          <ul class=\"ml-menu\">
                                              <li>
                                                  <a href=\"<?php echo base_url();?>index.php/keuanganlaporan/jurnal\">
                                                      <span>Laporan Jurnal</span>
                                                  </a>
                                                  <a href=\"<?php echo base_url();?>index.php/keuanganlaporan/bukubesar\">
                                                      <span>Laporan Buku Besar</span>
                                                  </a>
                                                  <a href=\"<?php echo base_url();?>index.php/keuanganlaporan/neracasaldo\">
                                                      <span>Laporan Neraca Saldo</span>
                                                  </a>
                                              </li>
                                          </ul>
                                      </li>

                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                            <i class=\"material-icons\">widgets</i>
                            <span>Admin</span>
                        </a>
                        <ul class=\"ml-menu\">

                            <li>
                                <a href=\"<?php echo base_url();?>index.php/adminsetsekolah/\">Set Sekolah</a>
                            </li>
                            <li>
                                <a href=\"<?php echo base_url();?>index.php/adminsetpengguna/\">Set pengguna</a>
                            </li>
                            <li>
                                <a href=\"<?php echo base_url();?>index.php/berita/\">Broadcast Berita</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                            <i class=\"material-icons\">local_pharmacy</i> <span class=\"icon-name\">Kesehatan</span>

                        </a>
                        <ul class=\"ml-menu\">
                            <li>
                                <a href=\"<?php echo base_url();?>index.php/kesehatan/\">Isi Data Kesehatan</a>
                            </li>
                            <li>
                                <a href=\"<?php echo base_url();?>index.php/kesehatan/datalist\">Laporan Kesehatan</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                            <i class=\"material-icons\">assignment</i> <span class=\"icon-name\">Perizinan</span>

                        </a>
                        <ul class=\"ml-menu\">
                            <li>
                                <a href=\"<?php echo base_url();?>index.php/perizinan/\">Isi Data Perizinan</a>
                            </li>
                            <li>
                                <a href=\"<?php echo base_url();?>index.php/perizinan/datalist\">Laporan Perizinan</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                            <i class=\"material-icons\">warning</i> <span class=\"icon-name\">Pelanggaran</span>
                        </a>
                        <ul class=\"ml-menu\">
                            <li>
                                <a href=\"<?php echo base_url();?>index.php/pelanggaran/\">Isi Data Pelanggaran</a>
                            </li>
                            <li>
                                <a href=\"<?php echo base_url();?>index.php/pelanggaran/datalist\">Laporan Pelanggaran</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                            <i class=\"material-icons\">verified_user</i> <span class=\"icon-name\">Prestasi</span>
                        </a>
                        <ul class=\"ml-menu\">
                            <li>
                                <a href=\"<?php echo base_url();?>index.php/prestasi/\">Isi Data Prestasi</a>
                            </li>
                            <li>
                                <a href=\"<?php echo base_url();?>index.php/prestasi/datalist\">Laporan Prestasi</a>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                            <i class=\"material-icons\">import_contacts</i> <span class=\"icon-name\">Tahfidz</span>
                        </a>
                        <ul class=\"ml-menu\">
                            <li>
                                <a href=\"<?php echo base_url();?>index.php/tahfidz/\">Isi Data Tahfidz</a>
                            </li>
                            <li>
                                <a href=\"<?php echo base_url();?>index.php/tahfidz/datalist\">Laporan Tahfidz</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                            <i class=\"material-icons\">view_quilt</i> <span class=\"icon-name\">Nilai dan Raport</span>
                        </a>
                        <ul class=\"ml-menu\">
                            <li>

                              <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                                  <span>Mata Pelajaran</span>
                              </a>
                              <ul class=\"ml-menu\">
                                  <li>
                                      <a href=\"<?php echo base_url();?>index.php/keuanganrutin/\">
                                          <span>Tambah Mata Pelajaran</span>
                                      </a>
                                      <a href=\"<?php echo base_url();?>index.php/keuangansettingsiswa/\">
                                          <span>Daftar Mata Pelajaran</span>
                                      </a>
                                  </li>
                              </ul>

                              <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                                  <span>Seting Mapel & Guru</span>
                              </a>
                              <ul class=\"ml-menu\">
                                  <li>
                                      <a href=\"<?php echo base_url();?>index.php/nilai/settingmapel\">
                                          <span>Setting</span>
                                      </a>
                                      <a href=\"<?php echo base_url();?>index.php/nilai2/datalistsetting\">
                                          <span>Daftar Setting Mapel</span>
                                      </a>
                                  </li>
                              </ul>

                              <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                                  <span>Laporan</span>
                              </a>
                              <ul class=\"ml-menu\">
                                  <li>
                                      <a href=\"<?php echo base_url();?>index.php/nilai/laporannilai\">
                                          <span>Laporan Nilai</span>
                                      </a>
                                      <a href=\"<?php echo base_url();?>index.php/nilai/laporanperpengajar\">
                                          <span>Laporan Per Pengajar</span>
                                      </a>
                                      <a href=\"<?php echo base_url();?>index.php/nilai/laporanledgernilai\">
                                          <span>Ledger Nilai</span>
                                      </a>
                                  </li>
                              </ul>

                              <li>
                                  <a href=\"<?php echo base_url();?>index.php/nilai/test\">Upload Data</a>
                              </li>



                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class=\"legal\">
                <div class=\"copyright\">
                    &copy; 2018 Sistem Informasi Ponpes - <a href=\"javascript:void(0);\">SIPond</a>
                </div>
                <div class=\"version\">
                    <b>Version: </b> 1.0.1
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->

    </section>
", "sampingkiri.php", "/home/sipy1897/public_html/demo/apliku/views/sampingkiri.php");
    }
}
