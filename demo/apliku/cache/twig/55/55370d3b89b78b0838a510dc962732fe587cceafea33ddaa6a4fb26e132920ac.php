<?php

/* layouts/sidebar.twig */
class __TwigTemplate_f4e6580f3488b7305e852611ff24bdd21bf24b96b5c70240a480d856f6150081 extends Twig_Template
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
                   <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/images/sipond.jpeg\" width=\"48\" height=\"48\" alt=\"User\" />
                </div>
                <div class=\"info-container\">
                    <div class=\"name\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Achmad Yachdi Fauzan</div>
                    <div class=\"email\">gue.yadi@gmail.com</div>
                    <div class=\"btn-group user-helper-dropdown\">
                        <i class=\"material-icons\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">keyboard_arrow_down</i>
                        <ul class=\"dropdown-menu pull-right\">
                            <li><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/login/logout\"><i class=\"material-icons\">input</i>Sign Out</a></li>
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
                        <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/welcome\">
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
                                <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/siswa/kartupelajar\">Kartu Pelajar</a>
                            </li>
                            <li>
                                <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                                    <span>Siswa</span>
                                </a>
                                <ul class=\"ml-menu\">
                                    <li>
                                        <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/siswa/datalist\">
                                            <span>Data Siswa</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/siswa/\">
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
                                        <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/karyawan/datalist\">
                                            <span>Data Guru/Karyawan</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/karyawan/\">
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
                                        <a href=\"";
        // line 92
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/keuanganrutin/\">
                                            <span>Pemasukan Rutin</span>
                                        </a>
                                        <a href=\"";
        // line 95
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/keuangansettingsiswa/\">
                                            <span>Setting Keuangan Siswa</span>
                                        </a>
                                        <a href=\"";
        // line 98
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/keuanganuangsakukeluar/\">
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
                                        <a href=\"";
        // line 110
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/keuanganrutin/datalist\">
                                            <span>Laporan SPP</span>
                                        </a>
                                        <a href=\"";
        // line 113
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/keuanganrutin/datalistnonspp\">
                                            <span>Laporan Selain SPP</span>
                                        </a>
                                        <a href=\"";
        // line 116
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/keuanganrutin/penerimaancash\">
                                            <span>Laporan Penerimaan Cash</span>
                                        </a>
                                        <a href=\"";
        // line 119
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/keuanganrutin/penerimaantransfer\">
                                            <span>Laporan Penerimaan Transfer</span>
                                        </a>
                                        <a href=\"";
        // line 122
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/keuanganuangsakukeluar/datalist\">
                                            <span>Laporan Uang Saku Keluar</span>
                                        </a>
                                        <a href=\"";
        // line 125
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/keuanganrutin/datalistuangsakusisa\">
                                            <span>Laporan Uang Saku Sisa</span>
                                        </a>
                                        <a href=\"";
        // line 128
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/keuanganrutin/datalistmonitoringspp\">
                                            <span>Monitoring SPP</span>
                                        </a>
                                    </li>


                                      <li>
                                          <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                                              <span>Akunting</span>
                                          </a>
                                          <ul class=\"ml-menu\">
                                              <li>
                                                  <a href=\"";
        // line 140
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/keuanganlaporan/jurnal\">
                                                      <span>Laporan Jurnal</span>
                                                  </a>
                                                  <a href=\"";
        // line 143
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/keuanganlaporan/bukubesar\">
                                                      <span>Laporan Buku Besar</span>
                                                  </a>
                                                  <a href=\"";
        // line 146
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/keuanganlaporan/neracasaldo\">
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
                                <a href=\"";
        // line 166
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/adminsetsekolah/\">Set Sekolah</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 169
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/adminsetpengguna/\">Set pengguna</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 172
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/berita/\">Broadcast Berita</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                            <i class=\"material-icons\">local_pharmacy</i> <span class=\"icon-name\">Kesehatan</span>

                        </a>
                        <ul class=\"ml-menu\">
                            <li>
                                <a href=\"";
        // line 184
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/kesehatan/\">Isi Data Kesehatan</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 187
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/kesehatan/datalist\">Laporan Kesehatan</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                            <i class=\"material-icons\">assignment</i> <span class=\"icon-name\">Perizinan</span>

                        </a>
                        <ul class=\"ml-menu\">
                            <li>
                                <a href=\"";
        // line 199
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/perizinan/\">Isi Data Perizinan</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 202
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/perizinan/datalist\">Laporan Perizinan</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                            <i class=\"material-icons\">warning</i> <span class=\"icon-name\">Pelanggaran</span>
                        </a>
                        <ul class=\"ml-menu\">
                            <li>
                                <a href=\"";
        // line 213
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/pelanggaran/\">Isi Data Pelanggaran</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 216
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/pelanggaran/datalist\">Laporan Pelanggaran</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                            <i class=\"material-icons\">verified_user</i> <span class=\"icon-name\">Prestasi</span>
                        </a>
                        <ul class=\"ml-menu\">
                            <li>
                                <a href=\"";
        // line 227
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/prestasi/\">Isi Data Prestasi</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 230
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/prestasi/datalist\">Laporan Prestasi</a>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                            <i class=\"material-icons\">import_contacts</i> <span class=\"icon-name\">Tahfidz</span>
                        </a>
                        <ul class=\"ml-menu\">
                            <li>
                                <a href=\"";
        // line 242
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/tahfidz/\">Isi Data Tahfidz</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 245
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/tahfidz/datalist\">Laporan Tahfidz</a>
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
                                      <a href=\"";
        // line 262
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/keuanganrutin/\">
                                          <span>Tambah Mata Pelajaran</span>
                                      </a>
                                      <a href=\"";
        // line 265
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/keuangansettingsiswa/\">
                                          <span>Daftar Mata Pelajaran</span>
                                      </a>
                                  </li>
                              </ul>

                              <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                                  <span>Seting Mapel & Guru</span>
                              </a>
                              <ul class=\"ml-menu\">
                                  <li>
                                      <a href=\"";
        // line 276
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/nilai/settingmapel\">
                                          <span>Setting</span>
                                      </a>
                                      <a href=\"";
        // line 279
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/nilai2/datalistsetting\">
                                          <span>Daftar Setting Mapel</span>
                                      </a>
                                  </li>
                              </ul>

                              <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                                  <span>Laporan</span>
                              </a>
                              <ul class=\"ml-menu\">
                                  <li>
                                      <a href=\"";
        // line 290
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/nilai/laporannilai\">
                                          <span>Laporan Nilai</span>
                                      </a>
                                      <a href=\"";
        // line 293
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/nilai/laporanperpengajar\">
                                          <span>Laporan Per Pengajar</span>
                                      </a>
                                      <a href=\"";
        // line 296
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/nilai/laporanledgernilai\">
                                          <span>Ledger Nilai</span>
                                      </a>
                                  </li>
                              </ul>

                              <li>
                                  <a href=\"";
        // line 303
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "index.php/nilai/test\">Upload Data</a>
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
        return "layouts/sidebar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  446 => 303,  436 => 296,  430 => 293,  424 => 290,  410 => 279,  404 => 276,  390 => 265,  384 => 262,  364 => 245,  358 => 242,  343 => 230,  337 => 227,  323 => 216,  317 => 213,  303 => 202,  297 => 199,  282 => 187,  276 => 184,  261 => 172,  255 => 169,  249 => 166,  226 => 146,  220 => 143,  214 => 140,  199 => 128,  193 => 125,  187 => 122,  181 => 119,  175 => 116,  169 => 113,  163 => 110,  148 => 98,  142 => 95,  136 => 92,  110 => 69,  102 => 64,  87 => 52,  79 => 47,  68 => 39,  52 => 26,  38 => 15,  27 => 7,  19 => 1,);
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
                   <img src=\"{{ base_url() }}template/images/sipond.jpeg\" width=\"48\" height=\"48\" alt=\"User\" />
                </div>
                <div class=\"info-container\">
                    <div class=\"name\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Achmad Yachdi Fauzan</div>
                    <div class=\"email\">gue.yadi@gmail.com</div>
                    <div class=\"btn-group user-helper-dropdown\">
                        <i class=\"material-icons\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">keyboard_arrow_down</i>
                        <ul class=\"dropdown-menu pull-right\">
                            <li><a href=\"{{ base_url() }}index.php/login/logout\"><i class=\"material-icons\">input</i>Sign Out</a></li>
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
                        <a href=\"{{ base_url() }}index.php/welcome\">
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
                                <a href=\"{{ base_url() }}index.php/siswa/kartupelajar\">Kartu Pelajar</a>
                            </li>
                            <li>
                                <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                                    <span>Siswa</span>
                                </a>
                                <ul class=\"ml-menu\">
                                    <li>
                                        <a href=\"{{ base_url() }}index.php/siswa/datalist\">
                                            <span>Data Siswa</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"{{ base_url() }}index.php/siswa/\">
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
                                        <a href=\"{{ base_url() }}index.php/karyawan/datalist\">
                                            <span>Data Guru/Karyawan</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"{{ base_url() }}index.php/karyawan/\">
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
                                        <a href=\"{{ base_url() }}index.php/keuanganrutin/\">
                                            <span>Pemasukan Rutin</span>
                                        </a>
                                        <a href=\"{{ base_url() }}index.php/keuangansettingsiswa/\">
                                            <span>Setting Keuangan Siswa</span>
                                        </a>
                                        <a href=\"{{ base_url() }}index.php/keuanganuangsakukeluar/\">
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
                                        <a href=\"{{ base_url() }}index.php/keuanganrutin/datalist\">
                                            <span>Laporan SPP</span>
                                        </a>
                                        <a href=\"{{ base_url() }}index.php/keuanganrutin/datalistnonspp\">
                                            <span>Laporan Selain SPP</span>
                                        </a>
                                        <a href=\"{{ base_url() }}index.php/keuanganrutin/penerimaancash\">
                                            <span>Laporan Penerimaan Cash</span>
                                        </a>
                                        <a href=\"{{ base_url() }}index.php/keuanganrutin/penerimaantransfer\">
                                            <span>Laporan Penerimaan Transfer</span>
                                        </a>
                                        <a href=\"{{ base_url() }}index.php/keuanganuangsakukeluar/datalist\">
                                            <span>Laporan Uang Saku Keluar</span>
                                        </a>
                                        <a href=\"{{ base_url() }}index.php/keuanganrutin/datalistuangsakusisa\">
                                            <span>Laporan Uang Saku Sisa</span>
                                        </a>
                                        <a href=\"{{ base_url() }}index.php/keuanganrutin/datalistmonitoringspp\">
                                            <span>Monitoring SPP</span>
                                        </a>
                                    </li>


                                      <li>
                                          <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                                              <span>Akunting</span>
                                          </a>
                                          <ul class=\"ml-menu\">
                                              <li>
                                                  <a href=\"{{ base_url() }}index.php/keuanganlaporan/jurnal\">
                                                      <span>Laporan Jurnal</span>
                                                  </a>
                                                  <a href=\"{{ base_url() }}index.php/keuanganlaporan/bukubesar\">
                                                      <span>Laporan Buku Besar</span>
                                                  </a>
                                                  <a href=\"{{ base_url() }}index.php/keuanganlaporan/neracasaldo\">
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
                                <a href=\"{{ base_url() }}index.php/adminsetsekolah/\">Set Sekolah</a>
                            </li>
                            <li>
                                <a href=\"{{ base_url() }}index.php/adminsetpengguna/\">Set pengguna</a>
                            </li>
                            <li>
                                <a href=\"{{ base_url() }}index.php/berita/\">Broadcast Berita</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                            <i class=\"material-icons\">local_pharmacy</i> <span class=\"icon-name\">Kesehatan</span>

                        </a>
                        <ul class=\"ml-menu\">
                            <li>
                                <a href=\"{{ base_url() }}index.php/kesehatan/\">Isi Data Kesehatan</a>
                            </li>
                            <li>
                                <a href=\"{{ base_url() }}index.php/kesehatan/datalist\">Laporan Kesehatan</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                            <i class=\"material-icons\">assignment</i> <span class=\"icon-name\">Perizinan</span>

                        </a>
                        <ul class=\"ml-menu\">
                            <li>
                                <a href=\"{{ base_url() }}index.php/perizinan/\">Isi Data Perizinan</a>
                            </li>
                            <li>
                                <a href=\"{{ base_url() }}index.php/perizinan/datalist\">Laporan Perizinan</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                            <i class=\"material-icons\">warning</i> <span class=\"icon-name\">Pelanggaran</span>
                        </a>
                        <ul class=\"ml-menu\">
                            <li>
                                <a href=\"{{ base_url() }}index.php/pelanggaran/\">Isi Data Pelanggaran</a>
                            </li>
                            <li>
                                <a href=\"{{ base_url() }}index.php/pelanggaran/datalist\">Laporan Pelanggaran</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                            <i class=\"material-icons\">verified_user</i> <span class=\"icon-name\">Prestasi</span>
                        </a>
                        <ul class=\"ml-menu\">
                            <li>
                                <a href=\"{{ base_url() }}index.php/prestasi/\">Isi Data Prestasi</a>
                            </li>
                            <li>
                                <a href=\"{{ base_url() }}index.php/prestasi/datalist\">Laporan Prestasi</a>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                            <i class=\"material-icons\">import_contacts</i> <span class=\"icon-name\">Tahfidz</span>
                        </a>
                        <ul class=\"ml-menu\">
                            <li>
                                <a href=\"{{ base_url() }}index.php/tahfidz/\">Isi Data Tahfidz</a>
                            </li>
                            <li>
                                <a href=\"{{ base_url() }}index.php/tahfidz/datalist\">Laporan Tahfidz</a>
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
                                      <a href=\"{{ base_url() }}index.php/keuanganrutin/\">
                                          <span>Tambah Mata Pelajaran</span>
                                      </a>
                                      <a href=\"{{ base_url() }}index.php/keuangansettingsiswa/\">
                                          <span>Daftar Mata Pelajaran</span>
                                      </a>
                                  </li>
                              </ul>

                              <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                                  <span>Seting Mapel & Guru</span>
                              </a>
                              <ul class=\"ml-menu\">
                                  <li>
                                      <a href=\"{{ base_url() }}index.php/nilai/settingmapel\">
                                          <span>Setting</span>
                                      </a>
                                      <a href=\"{{ base_url() }}index.php/nilai2/datalistsetting\">
                                          <span>Daftar Setting Mapel</span>
                                      </a>
                                  </li>
                              </ul>

                              <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                                  <span>Laporan</span>
                              </a>
                              <ul class=\"ml-menu\">
                                  <li>
                                      <a href=\"{{ base_url() }}index.php/nilai/laporannilai\">
                                          <span>Laporan Nilai</span>
                                      </a>
                                      <a href=\"{{ base_url() }}index.php/nilai/laporanperpengajar\">
                                          <span>Laporan Per Pengajar</span>
                                      </a>
                                      <a href=\"{{ base_url() }}index.php/nilai/laporanledgernilai\">
                                          <span>Ledger Nilai</span>
                                      </a>
                                  </li>
                              </ul>

                              <li>
                                  <a href=\"{{ base_url() }}index.php/nilai/test\">Upload Data</a>
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
", "layouts/sidebar.twig", "/home/sipy1897/public_html/demo/apliku/views/layouts/sidebar.twig");
    }
}
