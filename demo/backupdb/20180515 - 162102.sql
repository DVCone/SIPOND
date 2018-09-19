#
# TABLE STRUCTURE FOR: aaa
#

DROP TABLE IF EXISTS `aaa`;

CREATE TABLE `aaa` (
  `nourut` int(11) NOT NULL AUTO_INCREMENT,
  `alamat` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY (`nourut`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `aaa` (`nourut`, `alamat`, `nama`) VALUES ('1', 'piyungan', 'yadi');
INSERT INTO `aaa` (`nourut`, `alamat`, `nama`) VALUES ('2', 'grendeng', 'emak');


#
# TABLE STRUCTURE FOR: aaa2
#

DROP TABLE IF EXISTS `aaa2`;

CREATE TABLE `aaa2` (
  `nourut` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  PRIMARY KEY (`nourut`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `aaa2` (`nourut`, `nama`, `alamat`) VALUES ('1', 'wida', 'kotabumi');


#
# TABLE STRUCTURE FOR: absen
#

DROP TABLE IF EXISTS `absen`;

CREATE TABLE `absen` (
  `nourut` double NOT NULL AUTO_INCREMENT,
  `nis` varchar(50) CHARACTER SET utf8 NOT NULL,
  `tanggal` date NOT NULL,
  `tanggalakhir` date NOT NULL,
  `sakit` int(11) NOT NULL,
  `ijin` int(11) NOT NULL,
  `alpa` int(11) NOT NULL,
  `catatan` varchar(100) CHARACTER SET utf8 NOT NULL,
  `pengguna` varchar(50) NOT NULL,
  PRIMARY KEY (`nourut`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: absentahfidz
#

DROP TABLE IF EXISTS `absentahfidz`;

CREATE TABLE `absentahfidz` (
  `nis` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `sesi` int(11) NOT NULL,
  `sia` varchar(100) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: acl_groups
#

DROP TABLE IF EXISTS `acl_groups`;

CREATE TABLE `acl_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO `acl_groups` (`id`, `nama`, `status`) VALUES ('1', 'admin', 'MASTER');
INSERT INTO `acl_groups` (`id`, `nama`, `status`) VALUES ('6', 'cupa', NULL);
INSERT INTO `acl_groups` (`id`, `nama`, `status`) VALUES ('7', 'Newbies', NULL);
INSERT INTO `acl_groups` (`id`, `nama`, `status`) VALUES ('8', 'Alien', NULL);


#
# TABLE STRUCTURE FOR: acl_menus
#

DROP TABLE IF EXISTS `acl_menus`;

CREATE TABLE `acl_menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `route` varchar(255) DEFAULT NULL,
  `group` varchar(50) DEFAULT '1',
  `sorting` int(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `parent` enum('Y','N') DEFAULT 'N',
  `child` varchar(50) DEFAULT '0',
  `icon` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('1', NULL, '1', '4', 'Admin', 'Y', '46,50,51,7,8', 'widgets', NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('2', 'index.php/welcome', '1,8,6,7', '1', 'Home', 'Y', '0', 'home', NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('3', NULL, '1', '2', 'Tata Usaha', 'Y', '4,5,29', 'library_books', NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('4', 'index.php/siswa/kartupelajar', '1', '1', 'Kartu Pelajar', 'N', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('5', NULL, '1', '2', 'Siswa', 'N', '6,28', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('6', 'index.php/siswa/datalist', '1', '1', 'Data Siswa', 'N', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('7', 'index.php/aclcontroller', '1,7', '1', 'Access Control List', 'N', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('8', 'index.php/app/backup', '1,6', NULL, 'Backup & Restore', 'N', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('9', NULL, '1', NULL, NULL, 'N', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('10', NULL, '1', NULL, NULL, 'N', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('11', NULL, '1', '3', 'Keuangan', 'Y', '25,26,27', 'monetization_on', NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('12', NULL, '1', '5', 'Kesehatan', 'Y', '52,53', 'local_pharmacy', NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('13', NULL, '1', '6', 'Perizinan', 'Y', '54,55', 'assignment', NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('14', NULL, '1', '7', 'Pelanggaran', 'Y', '56,57', 'warning', NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('15', NULL, '1', '8', 'Prestasi', 'Y', '58,59', 'verified_user', NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('16', NULL, '1', '9', 'Tahfidz', 'Y', '60,61', 'import_contacts', NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('17', NULL, '1', '10', 'Nilai dan Raport', 'Y', '62,63,64,65', 'view_quilt', NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('25', NULL, '1', NULL, 'Rutin', '', '32,33,34,35', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('26', NULL, '1', NULL, 'Jurnal', '', '36,37', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('27', NULL, '1', NULL, 'Laporan', '', '38,39,40,41,42,43,44,45', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('28', 'index.php/siswa/test', '1', NULL, 'Tambah Siswa', '', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('29', NULL, '1', NULL, 'Guru / Karyawan', '', '30,31', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('30', 'index.php/karyawan/datalist', '1', NULL, 'Data Guru / Karyawan', '', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('31', 'index.php/karyawan/test', '1', NULL, 'Tambah Guru / Karyawan', '', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('32', 'index.php/keuanganrutin/kartupelajar', '1', NULL, 'Demo Raport', '', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('33', 'index.php/keuanganrutin/', '1', NULL, 'Pemasukan Rutin', '', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('34', 'index.php/keuangansettingsiswa/', '1', NULL, 'Setting Keuangan Siswa', '', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('35', 'index.php/keuanganuangsakukeluar/', '1', NULL, 'Pengambilan Uang Saku', '', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('36', 'index.php/jurnal/keluar/', '1', NULL, 'Jurnal Uang Keluar', '', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('37', 'index.php/jurnal/masuk/', '1', NULL, 'Jurnal Uang Masuk', '', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('38', 'index.php/keuanganrutin/datalist', '1', NULL, 'Laporan SPP', '', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('39', 'index.php/keuanganrutin/datalistnonspp', '1', NULL, 'Laporan Selain SPP', '', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('40', 'index.php/keuanganrutin/cash', '1', NULL, 'Laporan Penerimaan Cash', '', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('41', 'index.php/keuanganrutin/transfer', '1', NULL, 'Laporan Penerimaan Transfer', '', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('42', 'index.php/keuanganuangsakukeluar/datalist', '1', NULL, 'Laporan Uang Saku Keluar', '', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('43', 'index.php/keuanganrutin/datalistuangsakusisa', '1', NULL, 'Laporan Uang Saku Sisa', '', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('44', 'index.php/keuanganrutin/datalistmonitoringspp', '1', NULL, 'Monitoring SPP', '', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('45', '', '1', NULL, 'Akunting', '', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('46', '', '1', NULL, 'Set Sekolah', '', '47,48,49', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('47', 'index.php/adminsetsekolah/', '1', NULL, 'Informasi Sekolah', '', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('48', 'index.php/surat/sksekolah', '1', NULL, 'Surat Keterngan Bersekolah', '', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('49', 'index.php/surat/spindah', '1', NULL, 'Surat Pindah Sekolah', '', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('50', 'index.php/adminsetpengguna/', '1', NULL, 'Set Pengguna', '', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('51', 'index.php/berita/', '1', NULL, 'Broadcast Berita', '', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('52', 'index.php/kesehatan/test', '1', NULL, 'Isi Data Kesehatan', '', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('53', 'index.php/kesehatan/datalist_kesehatan', '1', NULL, 'Laporan Kesehatan', '', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('54', 'index.php/perizinan/test', '1', NULL, 'Isi Data Perizinan', '', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('55', 'index.php/perizinan/datalist_perizinan', '1', NULL, 'Laporan Perizinan', '', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('56', 'index.php/pelanggaran/test', '1', NULL, 'Isi Data Pelanggaran', '', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('57', 'index.php/pelanggaran/datalist_pelanggaran', '1', NULL, 'Laporan Pelanggaran', '', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('58', 'index.php/prestasi/test', '1', NULL, 'Isi Data Prestasi', '', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('59', 'index.php/prestasi/datalist_prestasi', '1', NULL, 'Laporan Prestasi', '', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('60', 'index.php/tahfidz/test', '1', NULL, 'Isi Data Tahfizh', '', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('61', 'index.php/tahfidz/datalist', '1', NULL, 'Laporan Tahfizh', '', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('62', '', '1', NULL, 'Mata Pelajaran', '', '66,67', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('63', 'index.php/nilai2/datalistsetting', '1', NULL, 'Setting Mapel & Guru', '', '68,69', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('64', NULL, '1', NULL, 'Laporan', '', '70,71,72', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('65', 'index.php/nilai/test', '1', NULL, 'Upload Data', '', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('66', 'index.php/mapel/', '1', NULL, 'Tambah Mata Pelajaran', '', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('67', 'index.php/mapel/datalist', '1', NULL, 'Data Mata Pelajaran', '', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('68', 'index.php/nilai/settingmapel', '1', NULL, 'Setting', '', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('69', 'index.php/nilai2/datalistsetting', '1', NULL, 'Daftar Setting Mapel', '', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('70', 'index.php/nilai/laporannilai', '1', NULL, 'Laporan Nilai', '', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('71', 'index.php/nilai/laporanperpengajar', '1', NULL, 'Laporan Per Pengajar', '', '0', NULL, NULL);
INSERT INTO `acl_menus` (`id`, `route`, `group`, `sorting`, `nama`, `parent`, `child`, `icon`, `status`) VALUES ('72', 'index.php/nilai/laporanledgernilai', '1', NULL, 'Ledger Nilai', '', '0', NULL, NULL);


#
# TABLE STRUCTURE FOR: acl_routes
#

DROP TABLE IF EXISTS `acl_routes`;

CREATE TABLE `acl_routes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group` varchar(50) NOT NULL DEFAULT '0',
  `key` varchar(50) NOT NULL,
  `controller` varchar(50) NOT NULL DEFAULT '0',
  `url` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

INSERT INTO `acl_routes` (`id`, `group`, `key`, `controller`, `url`) VALUES ('1', '0', 'login', 'app/auth', 'f430193c40b21b08dcdaf403529135c1e20f830d');
INSERT INTO `acl_routes` (`id`, `group`, `key`, `controller`, `url`) VALUES ('2', '0', 'logout', 'app/logout', 'afb29d937c3328f537269e8d707ba2968fd51abb');
INSERT INTO `acl_routes` (`id`, `group`, `key`, `controller`, `url`) VALUES ('3', '0', 'backup', 'dbackup', 'e693b3e6e7574aeddb69937bed53be2cbfcbf68a');
INSERT INTO `acl_routes` (`id`, `group`, `key`, `controller`, `url`) VALUES ('4', '0', 'acl', 'app/acl_system', 'dbe20d0f379d2ce046b011f82df0afddaa584a72');
INSERT INTO `acl_routes` (`id`, `group`, `key`, `controller`, `url`) VALUES ('5', '0', 'acl_management', 'Aclcontroller', '9c564b6e4adaad9ab586806e1dbde45276047408');
INSERT INTO `acl_routes` (`id`, `group`, `key`, `controller`, `url`) VALUES ('6', '0', 'api_import', 'api', '732f3795730aec07a24660eb0cf10485cd89e983');
INSERT INTO `acl_routes` (`id`, `group`, `key`, `controller`, `url`) VALUES ('7', '0', 'api_get_user', 'api/users', '0c9dbd2186cb902db4f19ebb2911408cf4a2778e');
INSERT INTO `acl_routes` (`id`, `group`, `key`, `controller`, `url`) VALUES ('8', '0', 'api_add_user', 'api/add_user', '27332e4db84dd2b014d7717bbe156622efbbb046');
INSERT INTO `acl_routes` (`id`, `group`, `key`, `controller`, `url`) VALUES ('9', '0', 'api_get_group', 'api/groups', '29dfe4e0ac143e074dbd743df6359232cccdf555');
INSERT INTO `acl_routes` (`id`, `group`, `key`, `controller`, `url`) VALUES ('10', '0', 'api_add_group', 'api/add_group', '4c16e4cbf8447551aebaf0182ff974f8adf88e1c');
INSERT INTO `acl_routes` (`id`, `group`, `key`, `controller`, `url`) VALUES ('11', '0', 'api_delete_user', 'api/delete_user', 'f69a2f42e54d54226f47c3c38508e0b72b5a634b');
INSERT INTO `acl_routes` (`id`, `group`, `key`, `controller`, `url`) VALUES ('12', '0', 'api_update_user', 'api/update_user', 'fb6ec3ca6751d2f6978c4a053961774d3c20a49f');
INSERT INTO `acl_routes` (`id`, `group`, `key`, `controller`, `url`) VALUES ('13', '0', 'api_delete_group', 'api/delete_group', '4bb67702def14dd842c59e0bc494237c8b03f480');
INSERT INTO `acl_routes` (`id`, `group`, `key`, `controller`, `url`) VALUES ('14', '0', 'api_update_group', 'api/update_group', '26d50d58e49e90422e9df2bbf8bc40f39283937a');
INSERT INTO `acl_routes` (`id`, `group`, `key`, `controller`, `url`) VALUES ('15', '0', 'api_get_parent_menu', 'api/parent_menus', 'fa13fc8373f4f839718691b7aa3c88d226f8cbaa');
INSERT INTO `acl_routes` (`id`, `group`, `key`, `controller`, `url`) VALUES ('16', '0', 'api_sidebar', 'api/sidebar', '3d35b554a11c64ca72ec903c280cfb72174f611c');
INSERT INTO `acl_routes` (`id`, `group`, `key`, `controller`, `url`) VALUES ('17', '0', 'api_menu_update', 'api/menu_update', 'af356140632f8942cd5cf15dab2076d941d15343');
INSERT INTO `acl_routes` (`id`, `group`, `key`, `controller`, `url`) VALUES ('18', '0', 'home', 'home', '7ed59b4cd9c216b883da6fe8529cc801b44458cb');
INSERT INTO `acl_routes` (`id`, `group`, `key`, `controller`, `url`) VALUES ('21', '0', 'menu_backup', 'app/backup', 'eed2f257f7c4c275822070482426ada18e17b5c8');
INSERT INTO `acl_routes` (`id`, `group`, `key`, `controller`, `url`) VALUES ('20', '0', 'api_get_route', 'api/routes', '7548bcacd898e19db85e66d5b35febf597ea1b99');
INSERT INTO `acl_routes` (`id`, `group`, `key`, `controller`, `url`) VALUES ('22', '0', 'dobackup', 'app/dobackup', '5def59a441ddd34dbb552ab97486c74d7369f3d1');
INSERT INTO `acl_routes` (`id`, `group`, `key`, `controller`, `url`) VALUES ('23', '0', 'dorestore', 'app/restore', '81d8136e7aa1c26836e2372a72dab92722b2402c');
INSERT INTO `acl_routes` (`id`, `group`, `key`, `controller`, `url`) VALUES ('24', '0', 'api_add_route', 'api/add_route', '7d1639d6c6ee78ee57aedaa657a4852e3c016e2a');
INSERT INTO `acl_routes` (`id`, `group`, `key`, `controller`, `url`) VALUES ('25', '0', 'api_delete_route', 'api/delete_route', '7810c6a9652c8e10f980e365c85d54381c1aebc9');
INSERT INTO `acl_routes` (`id`, `group`, `key`, `controller`, `url`) VALUES ('27', '0', 'api_update_route', 'api/update_route', 'e59a363e1149d0b82bec9ba981ff000f742a086c');
INSERT INTO `acl_routes` (`id`, `group`, `key`, `controller`, `url`) VALUES ('28', '0', 'api_add_menu', 'api/add_menu', '4cf642f13ad7fec37a627508c50bbd579e73f2b9');
INSERT INTO `acl_routes` (`id`, `group`, `key`, `controller`, `url`) VALUES ('29', '0', 'api_add_submenu', 'api/insert_submenu', 'e59e1bfd695a630ab9cf68d8e3dbc64dcfa0a654');
INSERT INTO `acl_routes` (`id`, `group`, `key`, `controller`, `url`) VALUES ('30', '0', 'kartupelajar', 'siswa/kartupelajar', '44d3886bcf39d509e16884d67368d41bc699e62c');
INSERT INTO `acl_routes` (`id`, `group`, `key`, `controller`, `url`) VALUES ('31', '0', 'jurnal_keluar', 'jurnal/keluar', 'db6acd2042ffbda87e053579b05d00110236ab4b');
INSERT INTO `acl_routes` (`id`, `group`, `key`, `controller`, `url`) VALUES ('33', '0', 'simpan_jurnal_masuk', 'jurnal/simpan_masuk', 'c58ea71b6b989a751d66b4eb379fbc9980a9890e');
INSERT INTO `acl_routes` (`id`, `group`, `key`, `controller`, `url`) VALUES ('32', '0', 'simpan_jurnal_keluar', 'jurnal/simpan_keluar', '46ce169476be424fb57ef049f5d5a49707360f11');
INSERT INTO `acl_routes` (`id`, `group`, `key`, `controller`, `url`) VALUES ('34', '0', 'jurnal_masuk', 'jurnal/masuk', 'c99db81c039084067e70afb7625be938a538367a');


#
# TABLE STRUCTURE FOR: acl_users
#

DROP TABLE IF EXISTS `acl_users`;

CREATE TABLE `acl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idgroup` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `kodenota` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO `acl_users` (`id`, `idgroup`, `username`, `password`, `kodenota`) VALUES ('1', '1', 'admin', 'admin', 'AM');
INSERT INTO `acl_users` (`id`, `idgroup`, `username`, `password`, `kodenota`) VALUES ('14', '7', 'ghery', 'admin', 'NB');
INSERT INTO `acl_users` (`id`, `idgroup`, `username`, `password`, `kodenota`) VALUES ('13', '8', 'Fein', 'admin', 'ER');
INSERT INTO `acl_users` (`id`, `idgroup`, `username`, `password`, `kodenota`) VALUES ('12', '8', 'reina', 'admin', 'KJ');
INSERT INTO `acl_users` (`id`, `idgroup`, `username`, `password`, `kodenota`) VALUES ('11', '6', 'cipa', 'admin', 'KL');


#
# TABLE STRUCTURE FOR: ambilformulir
#

DROP TABLE IF EXISTS `ambilformulir`;

CREATE TABLE `ambilformulir` (
  `nopendaftaran` double NOT NULL AUTO_INCREMENT,
  `tanggaldaftar` date NOT NULL,
  `biaya` double NOT NULL,
  `nama` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `notelpon` varchar(50) NOT NULL,
  `lulus` varchar(50) NOT NULL DEFAULT 'no',
  `anacc` varchar(200) NOT NULL,
  `transfer` varchar(100) NOT NULL,
  PRIMARY KEY (`nopendaftaran`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `ambilformulir` (`nopendaftaran`, `tanggaldaftar`, `biaya`, `nama`, `password`, `keterangan`, `notelpon`, `lulus`, `anacc`, `transfer`) VALUES ('1', '2017-03-01', '300000', 'ahmad', '28536', 'sw', '08495758', 'no', '', 'TRANSFER');
INSERT INTO `ambilformulir` (`nopendaftaran`, `tanggaldaftar`, `biaya`, `nama`, `password`, `keterangan`, `notelpon`, `lulus`, `anacc`, `transfer`) VALUES ('2', '2017-09-08', '300000', 'Robbi Ari Richardo', '45125', 'Non Yatim', '085798413140', 'no', '', 'TRANSFER');
INSERT INTO `ambilformulir` (`nopendaftaran`, `tanggaldaftar`, `biaya`, `nama`, `password`, `keterangan`, `notelpon`, `lulus`, `anacc`, `transfer`) VALUES ('3', '2017-09-12', '300000', 'Gaus', '446', 'Non Yatim', '085798413140', 'no', '', 'TRANSFER');
INSERT INTO `ambilformulir` (`nopendaftaran`, `tanggaldaftar`, `biaya`, `nama`, `password`, `keterangan`, `notelpon`, `lulus`, `anacc`, `transfer`) VALUES ('4', '2017-09-14', '300000', 'giri', '16401', 'Non Yatim', '085798413141', 'no', '', 'TRANSFER');


#
# TABLE STRUCTURE FOR: ambilformulirasli
#

DROP TABLE IF EXISTS `ambilformulirasli`;

CREATE TABLE `ambilformulirasli` (
  `nopendaftaran` double NOT NULL DEFAULT '0',
  `tanggaldaftar` date NOT NULL,
  `biaya` double NOT NULL,
  `nama` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `notelpon` varchar(50) NOT NULL,
  `lulus` varchar(50) NOT NULL DEFAULT 'no',
  `anacc` varchar(200) NOT NULL,
  `transfer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `ambilformulirasli` (`nopendaftaran`, `tanggaldaftar`, `biaya`, `nama`, `password`, `keterangan`, `notelpon`, `lulus`, `anacc`, `transfer`) VALUES ('1', '2017-03-01', '300000', 'ahmad', '28536', 'sw', '08495758', 'no', '', 'TRANSFER');
INSERT INTO `ambilformulirasli` (`nopendaftaran`, `tanggaldaftar`, `biaya`, `nama`, `password`, `keterangan`, `notelpon`, `lulus`, `anacc`, `transfer`) VALUES ('2', '2017-09-08', '300000', 'Robbi Ari Richardo', '45125', 'Non Yatim', '085798413140', 'no', '', 'TRANSFER');
INSERT INTO `ambilformulirasli` (`nopendaftaran`, `tanggaldaftar`, `biaya`, `nama`, `password`, `keterangan`, `notelpon`, `lulus`, `anacc`, `transfer`) VALUES ('3', '2017-09-12', '300000', 'Gaus', '446', 'Non Yatim', '085798413140', 'no', '', 'TRANSFER');
INSERT INTO `ambilformulirasli` (`nopendaftaran`, `tanggaldaftar`, `biaya`, `nama`, `password`, `keterangan`, `notelpon`, `lulus`, `anacc`, `transfer`) VALUES ('4', '2017-09-14', '300000', 'giri', '16401', 'Non Yatim', '085798413141', 'no', '', 'TRANSFER');


#
# TABLE STRUCTURE FOR: autocomplete
#

DROP TABLE IF EXISTS `autocomplete`;

CREATE TABLE `autocomplete` (
  `nim` bigint(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `autocomplete` (`nim`, `nama`, `jurusan`) VALUES ('1199870012', 'Muhammad Yusuf Hamdani', 'Teknik Informatika');
INSERT INTO `autocomplete` (`nim`, `nama`, `jurusan`) VALUES ('7779127910', 'Tutorial Web Design', 'Tutorial Website');
INSERT INTO `autocomplete` (`nim`, `nama`, `jurusan`) VALUES ('9998711120', 'Rahmayanti', 'PGSD');


#
# TABLE STRUCTURE FOR: bayarrutin
#

DROP TABLE IF EXISTS `bayarrutin`;

CREATE TABLE `bayarrutin` (
  `nonota` varchar(15) NOT NULL,
  `nis` varchar(12) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `uangpangkal` double NOT NULL DEFAULT '0',
  `daftarulang` double NOT NULL DEFAULT '0',
  `infaq` double NOT NULL DEFAULT '0',
  `uangsakumasuk` double NOT NULL DEFAULT '0',
  `bimbel` double NOT NULL DEFAULT '0',
  `pengguna` varchar(20) DEFAULT NULL,
  `transfer` varchar(50) DEFAULT NULL,
  `keteranganinfaq` varchar(150) DEFAULT NULL,
  `juli` double NOT NULL DEFAULT '0',
  `agustus` double NOT NULL DEFAULT '0',
  `september` double NOT NULL DEFAULT '0',
  `oktober` double NOT NULL DEFAULT '0',
  `november` double NOT NULL DEFAULT '0',
  `desember` double NOT NULL DEFAULT '0',
  `januari` double NOT NULL DEFAULT '0',
  `februari` double NOT NULL DEFAULT '0',
  `maret` double NOT NULL DEFAULT '0',
  `april` double NOT NULL DEFAULT '0',
  `mei` double NOT NULL DEFAULT '0',
  `juni` double NOT NULL DEFAULT '0',
  `tanggaldokumen` date NOT NULL,
  PRIMARY KEY (`nonota`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `bayarrutin` (`nonota`, `nis`, `tanggal`, `uangpangkal`, `daftarulang`, `infaq`, `uangsakumasuk`, `bimbel`, `pengguna`, `transfer`, `keteranganinfaq`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `tanggaldokumen`) VALUES ('1', '11700091', '2018-05-06', '100000', '100000', '100000', '500000', '100000', 'admin', 'TRANSFER', 'infaq masjid', '0', '0', '0', '0', '0', '0', '100000', '100000', '0', '0', '0', '0', '0000-00-00');
INSERT INTO `bayarrutin` (`nonota`, `nis`, `tanggal`, `uangpangkal`, `daftarulang`, `infaq`, `uangsakumasuk`, `bimbel`, `pengguna`, `transfer`, `keteranganinfaq`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `tanggaldokumen`) VALUES ('2', '11700093', '2018-05-06', '100000', '100000', '100000', '250000', '100000', 'admin', 'CASH', 'Untuk Yatim', '0', '0', '0', '0', '0', '0', '100000', '100000', '0', '0', '0', '0', '0000-00-00');
INSERT INTO `bayarrutin` (`nonota`, `nis`, `tanggal`, `uangpangkal`, `daftarulang`, `infaq`, `uangsakumasuk`, `bimbel`, `pengguna`, `transfer`, `keteranganinfaq`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `tanggaldokumen`) VALUES ('3', '11700091', '2018-05-06', '0', '0', '100000', '120000', '0', 'admin', 'TRANSFER', '', '0', '0', '0', '0', '0', '0', '0', '0', '100000', '100000', '0', '0', '0000-00-00');
INSERT INTO `bayarrutin` (`nonota`, `nis`, `tanggal`, `uangpangkal`, `daftarulang`, `infaq`, `uangsakumasuk`, `bimbel`, `pengguna`, `transfer`, `keteranganinfaq`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `tanggaldokumen`) VALUES ('4', '11700093', '2018-05-06', '0', '0', '150000', '200000', '0', 'admin', 'CASH', 'untuk yatim', '0', '0', '0', '0', '0', '0', '0', '0', '100000', '0', '0', '0', '0000-00-00');
INSERT INTO `bayarrutin` (`nonota`, `nis`, `tanggal`, `uangpangkal`, `daftarulang`, `infaq`, `uangsakumasuk`, `bimbel`, `pengguna`, `transfer`, `keteranganinfaq`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `tanggaldokumen`) VALUES ('5', '11700093', '2018-05-06', '0', '0', '150000', '200000', '0', 'admin', 'CASH', 'untuk yatim', '0', '0', '0', '0', '0', '0', '0', '0', '100000', '0', '0', '0', '0000-00-00');
INSERT INTO `bayarrutin` (`nonota`, `nis`, `tanggal`, `uangpangkal`, `daftarulang`, `infaq`, `uangsakumasuk`, `bimbel`, `pengguna`, `transfer`, `keteranganinfaq`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `tanggaldokumen`) VALUES ('6', '11700070', '2018-05-06', '0', '0', '200000', '250000', '0', 'admin', 'TRANSFER', 'infaq masjid', '0', '0', '0', '0', '0', '0', '0', '0', '50000', '0', '0', '0', '0000-00-00');
INSERT INTO `bayarrutin` (`nonota`, `nis`, `tanggal`, `uangpangkal`, `daftarulang`, `infaq`, `uangsakumasuk`, `bimbel`, `pengguna`, `transfer`, `keteranganinfaq`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `tanggaldokumen`) VALUES ('7', '11700090', '2018-05-06', '0', '0', '100', '10000', '0', 'admin', 'CASH', '111', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0000-00-00');
INSERT INTO `bayarrutin` (`nonota`, `nis`, `tanggal`, `uangpangkal`, `daftarulang`, `infaq`, `uangsakumasuk`, `bimbel`, `pengguna`, `transfer`, `keteranganinfaq`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `tanggaldokumen`) VALUES ('8', '11700091', '2018-05-06', '0', '0', '0', '20000', '1200', 'admin', 'CASH', 'sdvsdf', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0000-00-00');
INSERT INTO `bayarrutin` (`nonota`, `nis`, `tanggal`, `uangpangkal`, `daftarulang`, `infaq`, `uangsakumasuk`, `bimbel`, `pengguna`, `transfer`, `keteranganinfaq`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `tanggaldokumen`) VALUES ('9', '11700091', '2018-05-06', '0', '0', '0', '1000', '0', 'admin', 'CASH', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0000-00-00');
INSERT INTO `bayarrutin` (`nonota`, `nis`, `tanggal`, `uangpangkal`, `daftarulang`, `infaq`, `uangsakumasuk`, `bimbel`, `pengguna`, `transfer`, `keteranganinfaq`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `tanggaldokumen`) VALUES ('', '', '0000-00-00', '0', '0', '0', '0', '0', 'admin', 'CASH', NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0000-00-00');
INSERT INTO `bayarrutin` (`nonota`, `nis`, `tanggal`, `uangpangkal`, `daftarulang`, `infaq`, `uangsakumasuk`, `bimbel`, `pengguna`, `transfer`, `keteranganinfaq`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `tanggaldokumen`) VALUES ('11', '11700091', '2018-05-08', '0', '34000', '0', '20000', '3000', 'admin', 'CASH', 'jhghjg', '0', '100000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0000-00-00');
INSERT INTO `bayarrutin` (`nonota`, `nis`, `tanggal`, `uangpangkal`, `daftarulang`, `infaq`, `uangsakumasuk`, `bimbel`, `pengguna`, `transfer`, `keteranganinfaq`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `tanggaldokumen`) VALUES ('12', '11700091', '2018-05-08', '0', '0', '0', '2000', '3455', 'admin', 'CASH', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0000-00-00');
INSERT INTO `bayarrutin` (`nonota`, `nis`, `tanggal`, `uangpangkal`, `daftarulang`, `infaq`, `uangsakumasuk`, `bimbel`, `pengguna`, `transfer`, `keteranganinfaq`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `tanggaldokumen`) VALUES ('13', '11700091', '2018-05-08', '0', '0', '0', '0', '0', 'admin', 'CASH', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0000-00-00');
INSERT INTO `bayarrutin` (`nonota`, `nis`, `tanggal`, `uangpangkal`, `daftarulang`, `infaq`, `uangsakumasuk`, `bimbel`, `pengguna`, `transfer`, `keteranganinfaq`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `tanggaldokumen`) VALUES ('14', '11700091', '2018-05-14', '0', '0', '0', '200000', '0', 'admin', 'CASH', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '100000', '0', '0000-00-00');


#
# TABLE STRUCTURE FOR: berita
#

DROP TABLE IF EXISTS `berita`;

CREATE TABLE `berita` (
  `noberita` int(11) NOT NULL AUTO_INCREMENT,
  `ditujukan` varchar(233) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(233) NOT NULL,
  `isi` text NOT NULL,
  `pj` varchar(233) NOT NULL,
  `tutup` varchar(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`noberita`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO `berita` (`noberita`, `ditujukan`, `tanggal`, `judul`, `isi`, `pj`, `tutup`) VALUES ('1', 'WALI SANTRI PUTRA-PUTRI', '2017-08-25', 'LIBUR IDUL ADHA', 'ICBB INFO: LIBUR IDUL ADHA AKAN DI MULAI TANGGAL 31 AGUSTUS - 5 SEPTEMBER', 'Mudir', '0');
INSERT INTO `berita` (`noberita`, `ditujukan`, `tanggal`, `judul`, `isi`, `pj`, `tutup`) VALUES ('2', 'WALI SANTRI PUTRI', '2017-08-24', 'LIBUR BULANAN', 'LIBUR BULANAN UNTUK BULAN SEPTEMBER DI TIADAKAN, DAN DIGANTI DENGAN LIBUR IDUL ADHA', 'Bag. Kesantrian', '0');
INSERT INTO `berita` (`noberita`, `ditujukan`, `tanggal`, `judul`, `isi`, `pj`, `tutup`) VALUES ('3', 'SELURUH WALI SANTRI', '2017-08-25', 'HIMBAUAN SPP BULANAN', 'Kepada Seluruh Wali santri, Hari ini sudah masuk tanggal 10 Agustus 2017, Bagi yang belum melunasi SPP Bulan Agustus 2017, Harap segera melunasi.\r\nBagi yang yang telah membayar, Harap abaikan berita ini, dan kami ucapkan Jazakumullohu Khoiron, ', 'Bag. Keuangan', '0');
INSERT INTO `berita` (`noberita`, `ditujukan`, `tanggal`, `judul`, `isi`, `pj`, `tutup`) VALUES ('4', 'Seluruh Walisantri', '2017-08-22', 'Unian Mid Semester', 'Kepada Seluruh Wali santri, Bahwa Mid Semester Akan dilaksanakan Bulan Oktober.\r\nSyarat Mengikuti Semester adalah Lunas SPP sampai Bulan Oktober.\r\nMohon Doa restunya agar Anak-Anak kita dapat lancar mengikuti Ujian, dan kami ucapkan Jazakumullohu Khoiron, ', 'Bag. KBM', '0');
INSERT INTO `berita` (`noberita`, `ditujukan`, `tanggal`, `judul`, `isi`, `pj`, `tutup`) VALUES ('6', 'Semua Wali santri', '2018-03-04', 'Himbauan', '  Kepada Seluruh Wali santri, Hari ini sudah masuk tanggal 10 Agustus 2017, Bagi yang belum melunasi SPP Bulan Agustus 2017, Harap segera melunasi. Bagi yang yang telah membayar, Harap abaikan berita ini, dan kami ucapkan Jazakumullohu Khoiron, ', 'Bag. Keuangan', '0');
INSERT INTO `berita` (`noberita`, `ditujukan`, `tanggal`, `judul`, `isi`, `pj`, `tutup`) VALUES ('7', '', '2018-03-05', '', 'Silahkan isi komentar anda', '', '0');
INSERT INTO `berita` (`noberita`, `ditujukan`, `tanggal`, `judul`, `isi`, `pj`, `tutup`) VALUES ('8', 'Semua Wali Santri', '2018-04-01', 'Liburan', 'Diberitahukan Bahwasannya Liburan Semester Ini Akan Dimulai Tanggal 10 Juni 2018 Sampai 25 Juni 2018. Terima Kasih Atas Perhatiannya', 'Mudir Pondok', '0');
INSERT INTO `berita` (`noberita`, `ditujukan`, `tanggal`, `judul`, `isi`, `pj`, `tutup`) VALUES ('9', 'Semua Wali Santri', '2018-04-30', 'Liburan', 'Diharapkan melunasi SPP Bulan Ini', 'Mudir Pondok', '0');


#
# TABLE STRUCTURE FOR: groups
#

DROP TABLE IF EXISTS `groups`;

CREATE TABLE `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `groups` (`id`, `name`, `description`) VALUES ('1', 'admin', 'Administrator');
INSERT INTO `groups` (`id`, `name`, `description`) VALUES ('2', 'members', 'General User');


#
# TABLE STRUCTURE FOR: isiformulir
#

DROP TABLE IF EXISTS `isiformulir`;

CREATE TABLE `isiformulir` (
  `nopendaftaran` int(11) NOT NULL,
  `edit` varchar(10) NOT NULL,
  `lokasitest` varchar(50) NOT NULL,
  `tanggalmasuk` date NOT NULL,
  `marhalah` varchar(50) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `uangpangkal` int(11) NOT NULL,
  `spp` int(11) NOT NULL,
  `namasiswa` varchar(200) NOT NULL,
  `kotalahir` varchar(100) NOT NULL,
  `tanggallahir` date NOT NULL,
  `jeniskelamin` varchar(20) NOT NULL,
  `niksiswa` varchar(50) NOT NULL,
  `hobi` varchar(100) NOT NULL,
  `citacita` varchar(100) NOT NULL,
  `jumlahsaudara` int(11) NOT NULL,
  `tbbb` varchar(50) NOT NULL,
  `riwayatsakit` varchar(100) NOT NULL,
  `golongandarah` varchar(10) NOT NULL,
  `jenistempattinggal` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `asalsekolah` varchar(100) NOT NULL,
  `kelasasal` varchar(10) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `rata2rapor` varchar(10) NOT NULL,
  `nilaimatematika` varchar(10) NOT NULL,
  `nilaiipa` varchar(10) NOT NULL,
  `jenispendidikan` varchar(50) NOT NULL,
  `npsnlembaga` varchar(50) NOT NULL,
  `namalembaga` varchar(50) NOT NULL,
  `kabupatenlembaga` varchar(50) NOT NULL,
  `provinsilembaga` varchar(50) NOT NULL,
  `tahunlulus` varchar(20) NOT NULL,
  `statusijasah` varchar(50) NOT NULL,
  `nokk` varchar(20) NOT NULL,
  `nokks` varchar(20) NOT NULL,
  `nokartupkh` varchar(20) NOT NULL,
  `namaayah` varchar(50) NOT NULL,
  `statushidupayah` varchar(50) NOT NULL,
  `noktpayah` varchar(50) NOT NULL,
  `pendidikanayah` varchar(50) NOT NULL,
  `pekerjaanayah` varchar(50) NOT NULL,
  `nohpayah` varchar(50) NOT NULL,
  `gaji` double NOT NULL,
  `namaibu` varchar(50) NOT NULL,
  `statushidupibu` varchar(50) NOT NULL,
  `noktpibu` varchar(50) NOT NULL,
  `pendidikanibu` varchar(50) NOT NULL,
  `pekerjaanibu` varchar(50) NOT NULL,
  `nohpibu` varchar(50) NOT NULL,
  `namawali` varchar(50) NOT NULL,
  `hubungan` varchar(50) NOT NULL,
  `noktpwali` varchar(50) NOT NULL,
  `pendidikanwali` varchar(50) NOT NULL,
  `pekerjaanwali` varchar(50) NOT NULL,
  `gajiwali` double NOT NULL,
  `nokip` varchar(20) NOT NULL,
  `statuspip` varchar(50) NOT NULL,
  `alasanpip` varchar(50) NOT NULL,
  `periodepip` varchar(20) NOT NULL,
  `bidangprestasi` varchar(50) NOT NULL,
  `tingkatprestasi` varchar(20) NOT NULL,
  `peringkat` varchar(20) NOT NULL,
  `tahunprestasi` varchar(20) NOT NULL,
  `statusbeasiswa` varchar(50) NOT NULL,
  `sumberbeasiswa` varchar(50) NOT NULL,
  `jenisbeasiswa` varchar(50) NOT NULL,
  `waktubulan` varchar(50) NOT NULL,
  `besaranuang` varchar(20) NOT NULL,
  PRIMARY KEY (`nopendaftaran`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `isiformulir` (`nopendaftaran`, `edit`, `lokasitest`, `tanggalmasuk`, `marhalah`, `kelas`, `uangpangkal`, `spp`, `namasiswa`, `kotalahir`, `tanggallahir`, `jeniskelamin`, `niksiswa`, `hobi`, `citacita`, `jumlahsaudara`, `tbbb`, `riwayatsakit`, `golongandarah`, `jenistempattinggal`, `alamat`, `kecamatan`, `kabupaten`, `provinsi`, `asalsekolah`, `kelasasal`, `jurusan`, `rata2rapor`, `nilaimatematika`, `nilaiipa`, `jenispendidikan`, `npsnlembaga`, `namalembaga`, `kabupatenlembaga`, `provinsilembaga`, `tahunlulus`, `statusijasah`, `nokk`, `nokks`, `nokartupkh`, `namaayah`, `statushidupayah`, `noktpayah`, `pendidikanayah`, `pekerjaanayah`, `nohpayah`, `gaji`, `namaibu`, `statushidupibu`, `noktpibu`, `pendidikanibu`, `pekerjaanibu`, `nohpibu`, `namawali`, `hubungan`, `noktpwali`, `pendidikanwali`, `pekerjaanwali`, `gajiwali`, `nokip`, `statuspip`, `alasanpip`, `periodepip`, `bidangprestasi`, `tingkatprestasi`, `peringkat`, `tahunprestasi`, `statusbeasiswa`, `sumberbeasiswa`, `jenisbeasiswa`, `waktubulan`, `besaranuang`) VALUES ('1', 'yes', 'BANYUMAS, UST. AMIN TAUFIQ', '0000-00-00', '', '', '0', '0', 'achmad yahdi', 'tangerang', '2009-04-05', 'Laki-Laki', '321321', '3132', '231', '231', '231', '31', 'A', 'Rumah Sendiri', 'piyungan', '21', '3', 'Jawa Barat', 'smk yupentek', '3', 'listrik', '80', '80', '80', 'sma', '098098098098', 'smk yupuentek', 'tangerang', 'jawabarat', '1928', 'asli tapi asli', '123456', '456789', '159753', 'tantan', 'hidup', '1523164645', 'SLTA', 'swasta', '0845654548456', '2000000', 'Nurliyah', 'Rohimahallah', '-', 'SLTA', '-', '-', 'Tantan', 'Ayah', '65465464654', 'SLTA', '', '2500000', '15', '321313', 'tidak ada', 'mei 2018', 'tahfidz', 'kabupaten', '2', '2017', 'aktif', 'pemda', 'tetap', '12', '2000000');
INSERT INTO `isiformulir` (`nopendaftaran`, `edit`, `lokasitest`, `tanggalmasuk`, `marhalah`, `kelas`, `uangpangkal`, `spp`, `namasiswa`, `kotalahir`, `tanggallahir`, `jeniskelamin`, `niksiswa`, `hobi`, `citacita`, `jumlahsaudara`, `tbbb`, `riwayatsakit`, `golongandarah`, `jenistempattinggal`, `alamat`, `kecamatan`, `kabupaten`, `provinsi`, `asalsekolah`, `kelasasal`, `jurusan`, `rata2rapor`, `nilaimatematika`, `nilaiipa`, `jenispendidikan`, `npsnlembaga`, `namalembaga`, `kabupatenlembaga`, `provinsilembaga`, `tahunlulus`, `statusijasah`, `nokk`, `nokks`, `nokartupkh`, `namaayah`, `statushidupayah`, `noktpayah`, `pendidikanayah`, `pekerjaanayah`, `nohpayah`, `gaji`, `namaibu`, `statushidupibu`, `noktpibu`, `pendidikanibu`, `pekerjaanibu`, `nohpibu`, `namawali`, `hubungan`, `noktpwali`, `pendidikanwali`, `pekerjaanwali`, `gajiwali`, `nokip`, `statuspip`, `alasanpip`, `periodepip`, `bidangprestasi`, `tingkatprestasi`, `peringkat`, `tahunprestasi`, `statusbeasiswa`, `sumberbeasiswa`, `jenisbeasiswa`, `waktubulan`, `besaranuang`) VALUES ('2', '', '', '0000-00-00', '', '', '0', '0', '', '', '0000-00-00', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `isiformulir` (`nopendaftaran`, `edit`, `lokasitest`, `tanggalmasuk`, `marhalah`, `kelas`, `uangpangkal`, `spp`, `namasiswa`, `kotalahir`, `tanggallahir`, `jeniskelamin`, `niksiswa`, `hobi`, `citacita`, `jumlahsaudara`, `tbbb`, `riwayatsakit`, `golongandarah`, `jenistempattinggal`, `alamat`, `kecamatan`, `kabupaten`, `provinsi`, `asalsekolah`, `kelasasal`, `jurusan`, `rata2rapor`, `nilaimatematika`, `nilaiipa`, `jenispendidikan`, `npsnlembaga`, `namalembaga`, `kabupatenlembaga`, `provinsilembaga`, `tahunlulus`, `statusijasah`, `nokk`, `nokks`, `nokartupkh`, `namaayah`, `statushidupayah`, `noktpayah`, `pendidikanayah`, `pekerjaanayah`, `nohpayah`, `gaji`, `namaibu`, `statushidupibu`, `noktpibu`, `pendidikanibu`, `pekerjaanibu`, `nohpibu`, `namawali`, `hubungan`, `noktpwali`, `pendidikanwali`, `pekerjaanwali`, `gajiwali`, `nokip`, `statuspip`, `alasanpip`, `periodepip`, `bidangprestasi`, `tingkatprestasi`, `peringkat`, `tahunprestasi`, `statusbeasiswa`, `sumberbeasiswa`, `jenisbeasiswa`, `waktubulan`, `besaranuang`) VALUES ('3', 'no', '', '0000-00-00', '', '', '0', '0', '', '', '0000-00-00', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `isiformulir` (`nopendaftaran`, `edit`, `lokasitest`, `tanggalmasuk`, `marhalah`, `kelas`, `uangpangkal`, `spp`, `namasiswa`, `kotalahir`, `tanggallahir`, `jeniskelamin`, `niksiswa`, `hobi`, `citacita`, `jumlahsaudara`, `tbbb`, `riwayatsakit`, `golongandarah`, `jenistempattinggal`, `alamat`, `kecamatan`, `kabupaten`, `provinsi`, `asalsekolah`, `kelasasal`, `jurusan`, `rata2rapor`, `nilaimatematika`, `nilaiipa`, `jenispendidikan`, `npsnlembaga`, `namalembaga`, `kabupatenlembaga`, `provinsilembaga`, `tahunlulus`, `statusijasah`, `nokk`, `nokks`, `nokartupkh`, `namaayah`, `statushidupayah`, `noktpayah`, `pendidikanayah`, `pekerjaanayah`, `nohpayah`, `gaji`, `namaibu`, `statushidupibu`, `noktpibu`, `pendidikanibu`, `pekerjaanibu`, `nohpibu`, `namawali`, `hubungan`, `noktpwali`, `pendidikanwali`, `pekerjaanwali`, `gajiwali`, `nokip`, `statuspip`, `alasanpip`, `periodepip`, `bidangprestasi`, `tingkatprestasi`, `peringkat`, `tahunprestasi`, `statusbeasiswa`, `sumberbeasiswa`, `jenisbeasiswa`, `waktubulan`, `besaranuang`) VALUES ('4', '', '', '0000-00-00', '', '', '0', '0', '', '', '0000-00-00', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '');


#
# TABLE STRUCTURE FOR: isiformulirasli
#

DROP TABLE IF EXISTS `isiformulirasli`;

CREATE TABLE `isiformulirasli` (
  `nopendaftaran` int(11) NOT NULL,
  `namasiswa` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `kotalahir` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `tanggallahir` date DEFAULT NULL,
  `jeniskelamin` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `anakke` varchar(5) CHARACTER SET utf8 DEFAULT NULL,
  `bersaudara` varchar(5) CHARACTER SET utf8 DEFAULT NULL,
  `golongandarah` varchar(2) CHARACTER SET utf8 DEFAULT NULL,
  `marhalah` varchar(50) CHARACTER SET utf8 NOT NULL,
  `kelas` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `spp` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `nokk` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `ttlayah` varchar(200) CHARACTER SET utf8 NOT NULL,
  `noktpayah` varchar(50) CHARACTER SET utf8 NOT NULL,
  `pendidikanayah` varchar(200) CHARACTER SET utf8 NOT NULL,
  `gajiayah` double NOT NULL,
  `namaayah` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `pekerjaanayah` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `ttlibu` varchar(200) CHARACTER SET utf8 NOT NULL,
  `noktpibu` varchar(100) CHARACTER SET utf8 NOT NULL,
  `pendidikanibu` varchar(200) CHARACTER SET utf8 NOT NULL,
  `gajiibu` double NOT NULL,
  `namaibu` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `pekerjaanibu` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `alamat` varchar(200) CHARACTER SET utf8 NOT NULL,
  `kelurahan` varchar(100) CHARACTER SET utf8 NOT NULL,
  `kecamatan` varchar(100) CHARACTER SET utf8 NOT NULL,
  `alamatkota` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `provinsi` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `telephon` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `telephonrumah` varchar(50) CHARACTER SET utf8 NOT NULL,
  `asalsekolah` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `alamatsekolah` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `tanggalmasuk` datetime DEFAULT NULL,
  `noinduk` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `ijasah` varchar(60) CHARACTER SET utf8 DEFAULT NULL,
  `akte` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `skhun` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `nisn` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `uangpangkal` double DEFAULT '0',
  `lokasitest` varchar(100) CHARACTER SET utf8 NOT NULL,
  `edit` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `isiformulirasli` (`nopendaftaran`, `namasiswa`, `kotalahir`, `tanggallahir`, `jeniskelamin`, `anakke`, `bersaudara`, `golongandarah`, `marhalah`, `kelas`, `spp`, `nokk`, `email`, `ttlayah`, `noktpayah`, `pendidikanayah`, `gajiayah`, `namaayah`, `pekerjaanayah`, `ttlibu`, `noktpibu`, `pendidikanibu`, `gajiibu`, `namaibu`, `pekerjaanibu`, `alamat`, `kelurahan`, `kecamatan`, `alamatkota`, `provinsi`, `telephon`, `telephonrumah`, `asalsekolah`, `alamatsekolah`, `tanggalmasuk`, `noinduk`, `ijasah`, `akte`, `skhun`, `nisn`, `uangpangkal`, `lokasitest`, `edit`) VALUES ('1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '0', NULL, NULL, '', '', '', '0', NULL, NULL, '', '', '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '', '');
INSERT INTO `isiformulirasli` (`nopendaftaran`, `namasiswa`, `kotalahir`, `tanggallahir`, `jeniskelamin`, `anakke`, `bersaudara`, `golongandarah`, `marhalah`, `kelas`, `spp`, `nokk`, `email`, `ttlayah`, `noktpayah`, `pendidikanayah`, `gajiayah`, `namaayah`, `pekerjaanayah`, `ttlibu`, `noktpibu`, `pendidikanibu`, `gajiibu`, `namaibu`, `pekerjaanibu`, `alamat`, `kelurahan`, `kecamatan`, `alamatkota`, `provinsi`, `telephon`, `telephonrumah`, `asalsekolah`, `alamatsekolah`, `tanggalmasuk`, `noinduk`, `ijasah`, `akte`, `skhun`, `nisn`, `uangpangkal`, `lokasitest`, `edit`) VALUES ('2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '0', NULL, NULL, '', '', '', '0', NULL, NULL, '', '', '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '', 'yes');
INSERT INTO `isiformulirasli` (`nopendaftaran`, `namasiswa`, `kotalahir`, `tanggallahir`, `jeniskelamin`, `anakke`, `bersaudara`, `golongandarah`, `marhalah`, `kelas`, `spp`, `nokk`, `email`, `ttlayah`, `noktpayah`, `pendidikanayah`, `gajiayah`, `namaayah`, `pekerjaanayah`, `ttlibu`, `noktpibu`, `pendidikanibu`, `gajiibu`, `namaibu`, `pekerjaanibu`, `alamat`, `kelurahan`, `kecamatan`, `alamatkota`, `provinsi`, `telephon`, `telephonrumah`, `asalsekolah`, `alamatsekolah`, `tanggalmasuk`, `noinduk`, `ijasah`, `akte`, `skhun`, `nisn`, `uangpangkal`, `lokasitest`, `edit`) VALUES ('3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '0', NULL, NULL, '', '', '', '0', NULL, NULL, '', '', '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '', 'yes');
INSERT INTO `isiformulirasli` (`nopendaftaran`, `namasiswa`, `kotalahir`, `tanggallahir`, `jeniskelamin`, `anakke`, `bersaudara`, `golongandarah`, `marhalah`, `kelas`, `spp`, `nokk`, `email`, `ttlayah`, `noktpayah`, `pendidikanayah`, `gajiayah`, `namaayah`, `pekerjaanayah`, `ttlibu`, `noktpibu`, `pendidikanibu`, `gajiibu`, `namaibu`, `pekerjaanibu`, `alamat`, `kelurahan`, `kecamatan`, `alamatkota`, `provinsi`, `telephon`, `telephonrumah`, `asalsekolah`, `alamatsekolah`, `tanggalmasuk`, `noinduk`, `ijasah`, `akte`, `skhun`, `nisn`, `uangpangkal`, `lokasitest`, `edit`) VALUES ('4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '0', NULL, NULL, '', '', '', '0', NULL, NULL, '', '', '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '', '');


#
# TABLE STRUCTURE FOR: izin
#

DROP TABLE IF EXISTS `izin`;

CREATE TABLE `izin` (
  `nourut` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(20) NOT NULL,
  `tanggalizin` date NOT NULL,
  `tanggalkembali` date NOT NULL,
  `penjemput` varchar(200) NOT NULL,
  `catatan` varchar(200) NOT NULL,
  PRIMARY KEY (`nourut`)
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=latin1;

INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('1', '11700025', '2018-02-20', '0000-00-00', 'ibunya', 'tidak ada catatan');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('2', '11700025', '2018-02-20', '0000-00-00', 'adadf', 'asfasdf');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('3', '11700025', '2018-02-20', '0000-00-00', 'sdfg', 'abcdef');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('4', '11700025', '2018-02-20', '0000-00-00', 'AADSFASF', 'ASDFASD');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('5', '11700026', '2018-02-20', '0000-00-00', 'ahmad yahdi', 'ASDFASD');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('6', '11700025', '2018-02-20', '0000-00-00', 'ahmad yahdi', 'tidak ada catatan');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('7', '11700025', '2018-02-20', '0000-00-00', 'ahmad yahdi', 'tidak ada catatan');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('8', '11700025', '2018-02-20', '0000-00-00', 'ahmad yahdi', 'tidak ada catatan');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('9', '11700024', '2018-02-20', '0000-00-00', 'ahmad yahdi', 'tidak ada catatan');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('10', '11700025', '2018-02-20', '0000-00-00', 'ahmad yahdi', 'tidak ada catatan');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('11', '11700025', '2018-02-20', '0000-00-00', 'ahmad yahdi', 'tidak ada catatan');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('12', '', '2018-02-21', '0000-00-00', '', '');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('13', '11700025', '2018-02-21', '0000-00-00', '', '');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('14', '11700025', '2018-02-21', '0000-00-00', '', '');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('15', '11700025', '2018-02-21', '0000-00-00', 'aaa', 'aaaa');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('16', '11700024', '2018-02-21', '0000-00-00', 'tidak ada', 'aaaaaaaaa');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('17', '', '2018-02-21', '0000-00-00', '', '');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('18', '', '2018-02-21', '0000-00-00', '', '');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('19', '', '2018-02-21', '0000-00-00', '', '');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('20', '', '2018-02-21', '0000-00-00', '', '');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('21', '11700025', '2018-02-22', '0000-00-00', 'ahmad yahdi', 'tidak ada catatan');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('22', '11700025', '2018-02-24', '0000-00-00', '', '');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('23', '11700025', '2018-03-01', '0000-00-00', 'ahmad yahdi', 'ASDFASD');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('25', '11700027', '2018-03-03', '0000-00-00', 'ahmad yahdi', 'tidak ada catatan');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('26', '11700025', '2018-03-03', '0000-00-00', 'ahmad yahdi', 'tidak ada catatan');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('27', '11700024', '2018-03-03', '0000-00-00', 'ahmad yahdi', 'tidak ada catatan');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('28', '11700027', '2018-03-03', '0000-00-00', 'ahmad yahdi', 'alkdsfalksjdf');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('29', '11700025', '2018-03-03', '0000-00-00', 'ahmad yahdi', 'alkdsfalksjdf');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('30', '11700024', '2018-03-03', '0000-00-00', 'ahmad yahdi', 'tidak ada catatan');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('31', '11700025', '2018-03-03', '0000-00-00', 'ibunya', 'asdf');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('32', '11700025', '2018-03-03', '0000-00-00', 'ibunya', 'asdf');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('33', '11700025', '2018-03-03', '0000-00-00', 'ibunya', 'asdf');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('34', '11700025', '2018-03-03', '0000-00-00', 'AADSFASF', 'ASDF');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('35', '11700027', '2018-03-03', '0000-00-00', 'ahmad yahdi', 'asdf');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('36', '11700025', '2018-03-03', '0000-00-00', 'ibunya', 'ASDF');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('37', '11700027', '2018-04-01', '0000-00-00', 'Ibunya', 'Berobat Ke Rumah Sakit selama 1 Hari');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('38', '11700025', '2018-04-18', '0000-00-00', 'ayahnya', 'ke kota');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('39', '11700025', '2018-04-18', '0000-00-00', 'ayahnya', 'ke kota');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('40', '', '2018-04-18', '0000-00-00', '', '');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('41', '11700038', '2018-04-18', '0000-00-00', '', '');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('42', '11700051', '2018-04-18', '0000-00-00', 'sdasd', 'dsad');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('43', '11700051', '2018-04-18', '0000-00-00', 'sdasd', 'dsad');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('44', '11700051', '2018-04-18', '0000-00-00', 'sdasd', 'dsad');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('45', '', '2018-04-18', '0000-00-00', '', '');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('46', '', '2018-04-18', '0000-00-00', '', '');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('47', '', '2018-04-18', '0000-00-00', '', '');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('48', '', '2018-04-18', '0000-00-00', '', '');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('49', '', '2018-04-18', '0000-00-00', '', '');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('50', '', '2018-04-21', '0000-00-00', '', '');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('51', '', '2018-04-21', '0000-00-00', '', '');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('52', '', '2018-04-25', '0000-00-00', '', '');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('53', '11700025', '2018-04-30', '0000-00-00', 'Orang Tuanya', 'Izi ke kota');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('54', '11700024', '2018-04-30', '0000-00-00', 'ibunya\'*', 'tidak ada catatan');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('55', '11700026', '2018-04-30', '0000-00-00', 'kbjbjhgg', 'ljjkjn');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('56', '11700026', '2018-04-30', '0000-00-00', 'lkdkjvnsk', 'asda');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('57', '11700026', '2018-04-30', '0000-00-00', 'sdfsdf', 'sdfsdf');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('58', '11700026', '2018-04-30', '0000-00-00', 'sdfsdfs', 'sdfsdf');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('59', '11700024', '2018-04-30', '0000-00-00', 'dsd', 'ds');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('60', '11700038', '2018-04-30', '0000-00-00', 'dsd', 'dsddsd');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('61', '11700073', '2018-04-30', '0000-00-00', 'sdsdsdsd', 'sdsd');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('62', '11700024', '2018-04-30', '0000-00-00', 'ii', 'lll');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('63', '11700070', '2018-05-01', '0000-00-00', 'sfdgs', 'dfsfg');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('64', '11700039', '2018-05-01', '0000-00-00', 'sdfg', 'sdfg');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('65', '11700078', '2018-05-01', '0000-00-00', 'asd', 'dsd');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('66', '11700073', '2018-05-01', '0000-00-00', 'g', 'rtrt');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('67', '11700075', '2018-05-01', '0000-00-00', 'ghgnh', 'hgjghj');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('68', '11700078', '2018-05-01', '0000-00-00', 'ukuku', 'kuk');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('69', '11700074', '2018-05-01', '0000-00-00', 'jmjh', 'jhjm');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('70', '11700074', '2018-05-01', '0000-00-00', 'ghghg', 'gh');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('71', '11700073', '2018-05-01', '0000-00-00', 'ewe', 'wewe');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('72', '11700074', '2018-05-01', '0000-00-00', 'hgh', 'ghgh');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('73', '11700039', '2018-05-01', '0000-00-00', 'asdasf', 'sdfdsfds');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('74', '11700075', '2018-05-01', '0000-00-00', 'ss', 'sdsd');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('75', '11700039', '2018-05-01', '0000-00-00', 'orang2 tuanya', '');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('76', '11700078', '2018-05-01', '0000-00-00', 'rerer', 'erer');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('77', '11700074', '2018-05-01', '0000-00-00', 'fdf', 'fdf');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('78', '11700074', '2018-05-01', '0000-00-00', 'rer', 'rer');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('79', '11700075', '2018-05-01', '0000-00-00', 'fsfs', 'fsf');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('80', '11700077', '2018-05-01', '0000-00-00', '', 'dsd');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('81', '11700039', '2018-05-01', '0000-00-00', 'asdasd', 'asdas');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('82', '11700073', '2018-05-01', '0000-00-00', 'as', 'sas');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('83', '11700078', '2018-05-01', '0000-00-00', 'dsds', 'sds');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('84', '11700077', '2018-05-01', '0000-00-00', 'sdsd', 'dsd');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('85', '11700039', '2018-05-01', '0000-00-00', 'sdfsd', 'sdfsdf');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('86', '11700078', '2018-06-01', '0000-00-00', 'wsdsd', 'sdsd');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('87', '11700039', '2018-05-01', '0000-00-00', 'sdfdsd', 'sdfsdf');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('88', '11700074', '2018-05-01', '0000-00-00', 'das', 'dsd');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('89', '11700075', '2018-05-01', '0000-00-00', 'dsd', 'sd');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('90', '11700079', '2018-05-01', '0000-00-00', 'dsd', 'dsd');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('91', '11700073', '2018-05-01', '0000-00-00', 'sdsd', 'dsd');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('92', '11700074', '2018-05-01', '0000-00-00', 'dsds', 'dsad');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('93', '11700039', '2018-05-01', '0000-00-00', 'sdfdsf', 'sdfs');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('94', '11700074', '2018-05-01', '0000-00-00', 'sdd', 'sdfs');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('95', '11700077', '2018-05-01', '0000-00-00', 'dsd', 'dsd');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('96', '11700078', '2018-05-10', '0000-00-00', 'ds', 'dsdsd');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('97', '11700089', '2018-05-04', '0000-00-00', 'fdf', 'fdf');
INSERT INTO `izin` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`) VALUES ('98', '11700091', '2018-05-06', '0000-00-00', 'ibunya', 'tidak ada catatan');


#
# TABLE STRUCTURE FOR: jurnal
#

DROP TABLE IF EXISTS `jurnal`;

CREATE TABLE `jurnal` (
  `nourut` double NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `nonota` varchar(50) NOT NULL,
  `koderekening` double NOT NULL,
  `debet` double NOT NULL,
  `kredit` double NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `pengguna` varchar(100) NOT NULL,
  PRIMARY KEY (`nourut`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('1', '2018-05-06', '1', '600000', '0', '100000', 'SPP Bulan januari', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('2', '2018-05-06', '1', '600000', '0', '100000', 'SPP Bulan februari', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('3', '2018-05-06', '1', '600001', '0', '100000', '11700091', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('4', '2018-05-06', '1', '600002', '0', '100000', '11700091', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('5', '2018-05-06', '1', '600005', '0', '100000', '11700091', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('6', '2018-05-06', '1', '400002', '0', '500000', '11700091', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('7', '2018-05-06', '1', '400008', '0', '100000', '11700091', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('8', '2018-05-06', '1', '200001', '1100000', '0', '11700091', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('9', '2018-05-06', '2', '600000', '0', '100000', 'SPP Bulan januari', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('10', '2018-05-06', '2', '600000', '0', '100000', 'SPP Bulan februari', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('11', '2018-05-06', '2', '600001', '0', '100000', '11700093', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('12', '2018-05-06', '2', '600002', '0', '100000', '11700093', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('13', '2018-05-06', '2', '600005', '0', '100000', '11700093', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('14', '2018-05-06', '2', '400002', '0', '250000', '11700093', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('15', '2018-05-06', '2', '400008', '0', '100000', '11700093', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('16', '2018-05-06', '2', '100099', '850000', '0', '11700093', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('17', '2018-05-06', '3', '600000', '0', '100000', 'SPP Bulan maret', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('18', '2018-05-06', '3', '600000', '0', '100000', 'SPP Bulan april', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('19', '2018-05-06', '3', '600005', '0', '100000', '11700091', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('20', '2018-05-06', '3', '400002', '0', '120000', '11700091', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('21', '2018-05-06', '3', '200001', '420000', '0', '11700091', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('22', '2018-05-06', '4', '600000', '0', '100000', 'SPP Bulan maret', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('23', '2018-05-06', '4', '600005', '0', '150000', '11700093', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('24', '2018-05-06', '4', '400002', '0', '200000', '11700093', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('25', '2018-05-06', '4', '100099', '450000', '0', '11700093', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('26', '2018-05-06', '5', '600000', '0', '100000', 'SPP Bulan maret', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('27', '2018-05-06', '5', '600005', '0', '150000', '11700093', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('28', '2018-05-06', '5', '400002', '0', '200000', '11700093', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('29', '2018-05-06', '5', '100099', '450000', '0', '11700093', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('30', '2018-05-06', '6', '600000', '0', '50000', 'SPP Bulan maret', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('31', '2018-05-06', '6', '600005', '0', '200000', '11700070', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('32', '2018-05-06', '6', '400002', '0', '250000', '11700070', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('33', '2018-05-06', '6', '200001', '500000', '0', '11700070', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('34', '2018-05-06', '7', '600005', '0', '100', '11700090', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('35', '2018-05-06', '7', '400002', '0', '10000', '11700090', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('36', '2018-05-06', '7', '100099', '10100', '0', '11700090', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('37', '2018-05-06', '8', '400002', '0', '20000', '11700091', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('38', '2018-05-06', '8', '400008', '0', '1200', '11700091', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('39', '2018-05-06', '8', '100099', '21200', '0', '11700091', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('40', '2018-05-06', '9', '400002', '0', '1000', '11700091', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('41', '2018-05-06', '9', '100099', '1000', '0', '11700091', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('42', '0000-00-00', '', '100099', '0', '0', '', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('43', '2018-05-08', '11', '600000', '0', '100000', 'SPP Bulan agustus', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('44', '2018-05-08', '11', '600002', '0', '34000', '11700091', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('45', '2018-05-08', '11', '400002', '0', '20000', '11700091', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('46', '2018-05-08', '11', '400008', '0', '3000', '11700091', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('47', '2018-05-08', '11', '100099', '157000', '0', '11700091', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('48', '2018-05-08', '12', '400002', '0', '2000', '11700091', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('49', '2018-05-08', '12', '400008', '0', '3455', '11700091', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('50', '2018-05-08', '12', '100099', '5455', '0', '11700091', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('51', '2018-05-08', '13', '100099', '0', '0', '11700091', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('52', '2018-05-14', '14', '600000', '0', '100000', 'SPP Bulan mei', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('53', '2018-05-14', '14', '400002', '0', '200000', '11700091', 'kosongan');
INSERT INTO `jurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`) VALUES ('54', '2018-05-14', '14', '100099', '300000', '0', '11700091', 'kosongan');


#
# TABLE STRUCTURE FOR: kelas
#

DROP TABLE IF EXISTS `kelas`;

CREATE TABLE `kelas` (
  `nourut` int(11) NOT NULL AUTO_INCREMENT,
  `namakelas` varchar(10) NOT NULL,
  `marhalah` varchar(50) NOT NULL,
  `walikelas` varchar(100) NOT NULL,
  `putraputri` varchar(10) NOT NULL,
  PRIMARY KEY (`nourut`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('2', 'I.B', 'SD', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putri');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('3', 'I.C', 'SD', '	\r\nACHMAD YACHDI FAUZAN, S.T.', 'Putra');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('4', 'II.A', 'SD', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putra');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('5', 'II.B', 'SD', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putri');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('6', 'III.A', 'SD', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putra');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('7', 'III.B', 'SD', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putri');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('8', 'IV.A', 'SD', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putra');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('9', 'IV.B', 'SD', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putri');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('10', 'IX.A', 'SLTP', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putra');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('11', 'IX.B', 'SLTP', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putra');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('12', 'IX.C', 'SLTP', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putra');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('13', 'IX.D', 'SLTP', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putra');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('14', 'IX.E', 'SLTP', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putra');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('15', 'IX.F', 'SLTP', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putri');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('16', 'IX.G', 'SLTP', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putri');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('17', 'IX.H', 'SLTP', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putri');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('18', 'IX.I', 'SLTP', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putri');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('19', 'IX.J', 'SLTP', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putri');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('21', 'V.A', 'SD', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putra');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('22', 'V.B', 'SD', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putri');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('23', 'VI.A', 'SD', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putra');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('24', 'VI.B', 'SD', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putri');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('25', 'VII.A', 'SLTP', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putra');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('26', 'VII.B', 'SLTP', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putra');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('27', 'VII.C', 'SLTP', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putra');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('28', 'VII.D', 'SLTP', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putra');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('29', 'VII.E', 'SLTP', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putra');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('30', 'VII.F', 'SLTP', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putri');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('31', 'VII.G', 'SLTP', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putri');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('32', 'VII.H', 'SLTP', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putri');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('33', 'VII.I', 'SLTP', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putri');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('34', 'VII.J', 'SLTP', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putri');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('35', 'VIII.A', 'SLTP', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putra');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('36', 'VIII.B', 'SLTP', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putra');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('37', 'VIII.C', 'SLTP', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putra');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('38', 'VIII.D', 'SLTP', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putra');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('39', 'VIII.E', 'SLTP', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putra');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('40', 'VIII.F', 'SLTP', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putri');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('41', 'VIII.G', 'SLTP', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putri');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('42', 'VIII.H', 'SLTP', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putri');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('43', 'VIII.I', 'SLTP', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putri');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('44', 'VIII.J', 'SLTP', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putri');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('45', 'X.A', 'SLTA', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putra');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('46', 'X.B', 'SLTA', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putra');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('47', 'X.C', 'SLTA', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putra');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('48', 'X.D', 'SLTA', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putra');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('49', 'X.E', 'SLTA', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putri');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('50', 'X.F', 'SLTA', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putri');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('51', 'X.G', 'SLTA', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putri');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('52', 'X.H', 'SLTA', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putri');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('53', 'XI.A', 'SLTA', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putra');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('54', 'XI.B', 'SLTA', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putra');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('55', 'XI.C', 'SLTA', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putra');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('56', 'XI.D', 'SLTA', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putra');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('57', 'XI.E', 'SLTA', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putri');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('58', 'XI.F', 'SLTA', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putri');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('59', 'XI.G', 'SLTA', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putri');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('60', 'XI.H', 'SLTA', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putri');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('61', 'XII.A', 'SLTA', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putra');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('62', 'XII.B', 'SLTA', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putra');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('63', 'XII.C', 'SLTA', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putra');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('64', 'XII.D', 'SLTA', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putra');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('65', 'XII.E', 'SLTA', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putri');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('66', 'XII.F', 'SLTA', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putri');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('67', 'XII.G', 'SLTA', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putri');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('68', 'XII.H', 'SLTA', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putri');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('69', 'I.A', 'SD', 'ACHMAD YACHDI FAUZAN, S.T.', 'Putra');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('70', 'X.A', 'ALIYAH', '', '');
INSERT INTO `kelas` (`nourut`, `namakelas`, `marhalah`, `walikelas`, `putraputri`) VALUES ('71', 'X.B', 'ALIYAH', '', '');


#
# TABLE STRUCTURE FOR: kesehatan
#

DROP TABLE IF EXISTS `kesehatan`;

CREATE TABLE `kesehatan` (
  `nourut` double NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `nis` varchar(15) DEFAULT NULL,
  `keluhan` varchar(200) DEFAULT NULL,
  `obat` varchar(200) DEFAULT NULL,
  `catatan` varchar(200) DEFAULT NULL,
  `keparahan` varchar(50) DEFAULT NULL,
  `pengguna` varchar(200) NOT NULL,
  PRIMARY KEY (`nourut`)
) ENGINE=MyISAM AUTO_INCREMENT=82 DEFAULT CHARSET=utf8;

INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('27', '2018-02-10', '10233022223', 'asdf', 'asdf', 'asdf', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('28', '2018-02-10', '10422020012', 'asdf', 'asdf', 'asdf', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('32', '2018-03-03', '11700027', 'Pusing Pusing', 'Paramex', 'tidak ada catatan', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('31', NULL, NULL, NULL, NULL, NULL, NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('33', '2018-04-01', '11700027', 'Pusing Pusing', 'Paramex', 'Berobat Ke Rumah Sakit selama 1 Hari', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('34', '2018-04-01', '11700024', 'Pusing Pusing', 'Paramex', 'Berobat Ke Rumah Sakit selama 1 Hari', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('35', '2021-04-18', '', '', '', '', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('36', '2021-04-18', '', '', '', '', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('37', '2021-04-18', '', '', '', '', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('38', '2021-04-18', '', '', '', '', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('39', '2021-04-18', '', '', '', '', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('40', '2021-04-18', '', '', '', '', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('41', '2021-04-18', '', '', '', '', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('42', '2021-04-18', '', '', '', '', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('43', '2021-04-18', '', '', '', '', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('44', '2021-04-18', '', '', '', '', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('45', '2021-04-18', '', '', '', '', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('46', '2021-04-18', '', '', '', '', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('47', '2021-04-18', '', '', '', '', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('48', '2021-04-18', '', '', '', '', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('49', '2018-04-18', '', '', '', '', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('50', '2018-04-18', '', '', '', '', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('51', '2018-04-18', '', '', '', '', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('52', '2018-04-18', '', '', '', '', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('53', '2018-04-18', '', '', '', '', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('54', '2018-04-18', '', '', '', '', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('55', '2018-04-18', '', '', '', '', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('56', '2018-04-18', '', '', '', '', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('57', '2018-04-18', '11700024', '', '', '', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('58', '2018-04-18', '', '', '', '', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('59', '2018-04-18', '', '', '', '', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('60', '2018-04-18', '', '', '', '', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('61', '2018-04-18', '', '', '', '', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('62', '2018-04-18', '', '', '', '', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('63', '2018-04-18', '11700025', 'sdfsd', 'sdfsdf', 'sdfsd', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('64', '2018-04-18', '11700025', '', '', '', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('65', '2018-04-21', '11700025', 'ert', '', '', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('66', '2018-04-30', '11700025', 'Lemas', 'Istirahat saja', 'Di UKP', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('67', '2018-04-30', '11700026', 'dgdfg', 'dsfsdg', 'sdfds', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('68', '2018-05-01', '11700039', 'asdasd', 'sdfdsfs', 'sdfsdf', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('69', '2018-05-01', '11700039', 'sakit 2 kali', '2x3 obat', '', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('70', '2018-05-06', '11700091', 'Lemas', 'Istirahat saja', 'tidak ada catatan', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('71', '2018-05-06', '11700093', 'Pusing Pusing', 'Paramex', 'Berobat Ke Rumah Sakit selama 1 Hari', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('72', '2018-05-06', '11700070', 'Lemas', 'Istirahat saja', 'ASDFASD', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('73', '2018-05-06', '11700091', 'Pusing Pusing', 'Paramex', '-', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('74', '2018-05-06', '11700090', 'Lemas', 'Istirahat saja', 'tidak ada catatan', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('75', '2018-05-06', '11700091', 'Lemas', 'qqqqq', 'asdf', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('76', '2018-05-06', '11700093', 'Lemas', 'www', 'alkdsfalksjdf', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('77', '2018-05-06', '11700090', 'www', 'qqq', 'jajan', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('78', '2018-05-06', '11700083', 'Lemas', 'qqqqq', 'ASDF', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('79', '2018-05-06', '11700070', 'www', 'qqq', 'Di UKP', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('80', '2018-05-06', '11700087', 'Pusing Pusing', 'www', 'tidak ada catatan', NULL, '');
INSERT INTO `kesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`) VALUES ('81', '2018-05-06', '11700091', 'Lemas', 'qqqqq', 'tidak ada catatan', NULL, '');


#
# TABLE STRUCTURE FOR: mahrom
#

DROP TABLE IF EXISTS `mahrom`;

CREATE TABLE `mahrom` (
  `nomor` varchar(10) DEFAULT NULL,
  `nis` varchar(50) DEFAULT NULL,
  `nama_mahrom` varchar(200) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `telephon` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: marhalah
#

DROP TABLE IF EXISTS `marhalah`;

CREATE TABLE `marhalah` (
  `namamarhalah` varchar(50) NOT NULL,
  PRIMARY KEY (`namamarhalah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `marhalah` (`namamarhalah`) VALUES ('SD');
INSERT INTO `marhalah` (`namamarhalah`) VALUES ('SLTA');
INSERT INTO `marhalah` (`namamarhalah`) VALUES ('SLTP');
INSERT INTO `marhalah` (`namamarhalah`) VALUES ('TK-PAUD');


#
# TABLE STRUCTURE FOR: matapelajaran
#

DROP TABLE IF EXISTS `matapelajaran`;

CREATE TABLE `matapelajaran` (
  `kodemapel` varchar(10) NOT NULL,
  `namamapel` varchar(50) DEFAULT NULL,
  `pengguna` varchar(200) NOT NULL,
  PRIMARY KEY (`kodemapel`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `matapelajaran` (`kodemapel`, `namamapel`, `pengguna`) VALUES ('TAU', 'TAUHID', 'sadmin');
INSERT INTO `matapelajaran` (`kodemapel`, `namamapel`, `pengguna`) VALUES ('FIB', 'FIB', 'sadmin');
INSERT INTO `matapelajaran` (`kodemapel`, `namamapel`, `pengguna`) VALUES ('FIM', 'FIM', 'sadmin');
INSERT INTO `matapelajaran` (`kodemapel`, `namamapel`, `pengguna`) VALUES ('HDS', 'HADIS', 'sadmin');
INSERT INTO `matapelajaran` (`kodemapel`, `namamapel`, `pengguna`) VALUES ('BID', 'BAHASA INDONESIA', '');
INSERT INTO `matapelajaran` (`kodemapel`, `namamapel`, `pengguna`) VALUES ('MTK', 'MATEMATIKA', '');
INSERT INTO `matapelajaran` (`kodemapel`, `namamapel`, `pengguna`) VALUES ('SKI', 'sejarah kebudayaan islam', '');


#
# TABLE STRUCTURE FOR: monitoringspp
#

DROP TABLE IF EXISTS `monitoringspp`;

CREATE TABLE `monitoringspp` (
  `nis` varchar(50) NOT NULL,
  `setpoin` int(11) DEFAULT NULL,
  `kesanggupan` int(11) DEFAULT NULL,
  `juli` int(11) DEFAULT NULL,
  `agustus` int(11) DEFAULT NULL,
  `september` int(11) DEFAULT NULL,
  `oktober` int(11) DEFAULT NULL,
  `november` int(11) DEFAULT NULL,
  `desember` int(11) DEFAULT NULL,
  `januari` int(11) DEFAULT NULL,
  `februari` int(11) DEFAULT NULL,
  `maret` int(11) DEFAULT NULL,
  `april` int(11) DEFAULT NULL,
  `mei` int(11) DEFAULT NULL,
  `juni` int(11) DEFAULT NULL,
  `piutang` int(11) DEFAULT NULL,
  `juli2` int(11) DEFAULT NULL,
  `agustus2` int(11) DEFAULT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700026', '15000', '15000', '0', '0', '0', '0', '0', '0', '2000', '2000', '2000', '0', '0', '0', NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700025', '500000', '500000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700024', '500000', '500000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700037', '200000', '200000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700038', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700039', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700040', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700041', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700042', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700043', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700044', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700045', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700046', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700047', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700048', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700049', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700050', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700051', '12223', '12223', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700052', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700053', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700054', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700055', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700056', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700057', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700058', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700059', '1241', '1241', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700060', '123', '123', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700061', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700062', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700063', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700064', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700065', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700066', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700067', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700068', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700069', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700070', '0', '0', '50000', NULL, '50000', '50000', NULL, '50000', '50000', '50000', '50000', NULL, NULL, '50000', NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700071', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700072', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700073', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700074', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700075', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700076', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700077', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700078', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700079', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700080', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700081', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700082', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700083', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700084', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700085', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700086', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700087', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700088', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700089', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700090', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700091', '0', '0', NULL, '100000', NULL, NULL, NULL, NULL, '100000', '100000', '100000', '100000', '100000', NULL, NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700092', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700093', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, '100000', '100000', '100000', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700094', '1000000', '1000000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `monitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`) VALUES ('11700095', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);


#
# TABLE STRUCTURE FOR: nilai
#

DROP TABLE IF EXISTS `nilai`;

CREATE TABLE `nilai` (
  `noid` double DEFAULT '0',
  `nis` varchar(50) DEFAULT NULL,
  `p1` int(11) DEFAULT '0',
  `p2` int(11) DEFAULT '0',
  `p3` int(11) DEFAULT '0',
  `p4` int(11) DEFAULT '0',
  `rp` int(11) DEFAULT '0',
  `u1` int(11) DEFAULT '0',
  `u2` int(11) DEFAULT '0',
  `u3` int(11) DEFAULT '0',
  `ru` int(11) DEFAULT '0',
  `nk` int(11) DEFAULT '0',
  `nh` int(11) DEFAULT '0',
  `rpu` int(11) DEFAULT '0',
  `m1` int(11) DEFAULT '0',
  `mh` int(11) DEFAULT '0',
  `rm` int(11) DEFAULT '0',
  `s1` int(11) DEFAULT '0',
  `rs` int(11) DEFAULT '0',
  `rt` int(11) DEFAULT '0',
  `her` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: nilai2
#

DROP TABLE IF EXISTS `nilai2`;

CREATE TABLE `nilai2` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `nis` int(32) NOT NULL,
  `mapel` varchar(64) NOT NULL,
  `nilai` int(32) NOT NULL,
  `settingmapel_id` int(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=137 DEFAULT CHARSET=latin1;

INSERT INTO `nilai2` (`id`, `nis`, `mapel`, `nilai`, `settingmapel_id`) VALUES ('136', '11700087', '', '75', '41');
INSERT INTO `nilai2` (`id`, `nis`, `mapel`, `nilai`, `settingmapel_id`) VALUES ('135', '11700091', '', '90', '41');
INSERT INTO `nilai2` (`id`, `nis`, `mapel`, `nilai`, `settingmapel_id`) VALUES ('134', '11700090', '', '80', '41');
INSERT INTO `nilai2` (`id`, `nis`, `mapel`, `nilai`, `settingmapel_id`) VALUES ('133', '11700089', '', '100', '41');
INSERT INTO `nilai2` (`id`, `nis`, `mapel`, `nilai`, `settingmapel_id`) VALUES ('132', '11700087', '', '85', '42');
INSERT INTO `nilai2` (`id`, `nis`, `mapel`, `nilai`, `settingmapel_id`) VALUES ('131', '11700091', '', '78', '42');
INSERT INTO `nilai2` (`id`, `nis`, `mapel`, `nilai`, `settingmapel_id`) VALUES ('130', '11700090', '', '87', '42');
INSERT INTO `nilai2` (`id`, `nis`, `mapel`, `nilai`, `settingmapel_id`) VALUES ('129', '11700089', '', '89', '42');
INSERT INTO `nilai2` (`id`, `nis`, `mapel`, `nilai`, `settingmapel_id`) VALUES ('128', '11700087', '', '80', '40');
INSERT INTO `nilai2` (`id`, `nis`, `mapel`, `nilai`, `settingmapel_id`) VALUES ('127', '11700091', '', '98', '40');
INSERT INTO `nilai2` (`id`, `nis`, `mapel`, `nilai`, `settingmapel_id`) VALUES ('126', '11700090', '', '75', '40');
INSERT INTO `nilai2` (`id`, `nis`, `mapel`, `nilai`, `settingmapel_id`) VALUES ('125', '11700089', '', '80', '40');


#
# TABLE STRUCTURE FOR: pegawai
#

DROP TABLE IF EXISTS `pegawai`;

CREATE TABLE `pegawai` (
  `nik` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `namapanggilan` varchar(150) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `kotalahir` varchar(50) DEFAULT NULL,
  `tanggallahir` date DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `kota` varchar(100) DEFAULT NULL,
  `kodepos` varchar(20) DEFAULT NULL,
  `alamatktp` varchar(200) NOT NULL,
  `kotaktp` varchar(100) NOT NULL,
  `kodeposktp` varchar(20) NOT NULL,
  `nohp1` varchar(50) NOT NULL,
  `nohp2` varchar(50) NOT NULL,
  `noktp` varchar(50) NOT NULL,
  `statusnikah` varchar(50) NOT NULL,
  `nobpjs` varchar(50) NOT NULL,
  `npwp` varchar(50) NOT NULL,
  `golongandarah` varchar(20) NOT NULL,
  `mulaibekerjayayasan` date NOT NULL,
  `namaayah` varchar(50) NOT NULL,
  `namaibu` varchar(50) NOT NULL,
  `alamatorangtua` varchar(200) NOT NULL,
  `kotaorangtua` varchar(50) NOT NULL,
  `kodeposorangtua` varchar(50) NOT NULL,
  `hp1orangtua` varchar(50) NOT NULL,
  `hp2orangtua` varchar(50) NOT NULL,
  `pekerjaanayah` varchar(50) NOT NULL,
  `pekerjaanibu` varchar(50) NOT NULL,
  `anakke` varchar(20) NOT NULL,
  `bersaudara` varchar(20) NOT NULL,
  `daruratdihubungi` varchar(50) NOT NULL,
  `daruratperson` varchar(50) NOT NULL,
  `alamatdarurat` varchar(200) NOT NULL,
  `kotadarurat` varchar(50) NOT NULL,
  `kodeposdarurat` varchar(50) NOT NULL,
  `hp1darurat` varchar(50) NOT NULL,
  `hp2darurat` varchar(50) NOT NULL,
  `masuksd` varchar(10) NOT NULL,
  `keluarsd` varchar(10) NOT NULL,
  `lokasisd` varchar(50) NOT NULL,
  `studisd` varchar(50) NOT NULL,
  `masuksmp` varchar(10) NOT NULL,
  `keluarsmp` varchar(10) NOT NULL,
  `lokasismp` varchar(50) NOT NULL,
  `studismp` varchar(50) NOT NULL,
  `masuksma` varchar(10) NOT NULL,
  `keluarsma` varchar(10) NOT NULL,
  `lokasisma` varchar(50) NOT NULL,
  `studisma` varchar(50) NOT NULL,
  `s1masuk` varchar(10) NOT NULL,
  `s1keluar` varchar(10) NOT NULL,
  `lokasis1` varchar(50) NOT NULL,
  `studis1` varchar(50) NOT NULL,
  `s2masuk` varchar(10) NOT NULL,
  `s2keluar` varchar(10) NOT NULL,
  `lokasis2` varchar(50) NOT NULL,
  `studis2` varchar(50) NOT NULL,
  `s3masuk` varchar(10) NOT NULL,
  `s3keluar` varchar(10) NOT NULL,
  `lokasis3` varchar(50) NOT NULL,
  `studis3` varchar(50) NOT NULL,
  `keluar` tinyint(1) DEFAULT NULL,
  `jabatan` varchar(100) NOT NULL,
  `pendidikanterakhir` varchar(50) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=MyISAM AUTO_INCREMENT=10015 DEFAULT CHARSET=utf8;

INSERT INTO `pegawai` (`nik`, `nama`, `namapanggilan`, `gender`, `kotalahir`, `tanggallahir`, `alamat`, `kota`, `kodepos`, `alamatktp`, `kotaktp`, `kodeposktp`, `nohp1`, `nohp2`, `noktp`, `statusnikah`, `nobpjs`, `npwp`, `golongandarah`, `mulaibekerjayayasan`, `namaayah`, `namaibu`, `alamatorangtua`, `kotaorangtua`, `kodeposorangtua`, `hp1orangtua`, `hp2orangtua`, `pekerjaanayah`, `pekerjaanibu`, `anakke`, `bersaudara`, `daruratdihubungi`, `daruratperson`, `alamatdarurat`, `kotadarurat`, `kodeposdarurat`, `hp1darurat`, `hp2darurat`, `masuksd`, `keluarsd`, `lokasisd`, `studisd`, `masuksmp`, `keluarsmp`, `lokasismp`, `studismp`, `masuksma`, `keluarsma`, `lokasisma`, `studisma`, `s1masuk`, `s1keluar`, `lokasis1`, `studis1`, `s2masuk`, `s2keluar`, `lokasis2`, `studis2`, `s3masuk`, `s3keluar`, `lokasis3`, `studis3`, `keluar`, `jabatan`, `pendidikanterakhir`, `kelurahan`, `kecamatan`, `provinsi`) VALUES ('10014', 'Handoko Tri', NULL, NULL, 'sdfsdf', '2018-04-03', 'sdfsdf', 'sdfsdf', NULL, '', '', '', '13214', '', '', 'Bujang', '', '', 'A', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 'sdfsdf', 'SD', 'sdfsdf', 'sdfsdf', 'dfdg');
INSERT INTO `pegawai` (`nik`, `nama`, `namapanggilan`, `gender`, `kotalahir`, `tanggallahir`, `alamat`, `kota`, `kodepos`, `alamatktp`, `kotaktp`, `kodeposktp`, `nohp1`, `nohp2`, `noktp`, `statusnikah`, `nobpjs`, `npwp`, `golongandarah`, `mulaibekerjayayasan`, `namaayah`, `namaibu`, `alamatorangtua`, `kotaorangtua`, `kodeposorangtua`, `hp1orangtua`, `hp2orangtua`, `pekerjaanayah`, `pekerjaanibu`, `anakke`, `bersaudara`, `daruratdihubungi`, `daruratperson`, `alamatdarurat`, `kotadarurat`, `kodeposdarurat`, `hp1darurat`, `hp2darurat`, `masuksd`, `keluarsd`, `lokasisd`, `studisd`, `masuksmp`, `keluarsmp`, `lokasismp`, `studismp`, `masuksma`, `keluarsma`, `lokasisma`, `studisma`, `s1masuk`, `s1keluar`, `lokasis1`, `studis1`, `s2masuk`, `s2keluar`, `lokasis2`, `studis2`, `s3masuk`, `s3keluar`, `lokasis3`, `studis3`, `keluar`, `jabatan`, `pendidikanterakhir`, `kelurahan`, `kecamatan`, `provinsi`) VALUES ('10011', 'Abdurrohim', NULL, 'Pria', 'Boyolali', '2018-04-30', 'jl. wonosari km.10', 'bantul', NULL, '', '', '', '081313213', '', '', 'Bujang', '', '', 'A', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 'Guru', 'SD', 'karanggayam', 'piyungan', 'DIY');
INSERT INTO `pegawai` (`nik`, `nama`, `namapanggilan`, `gender`, `kotalahir`, `tanggallahir`, `alamat`, `kota`, `kodepos`, `alamatktp`, `kotaktp`, `kodeposktp`, `nohp1`, `nohp2`, `noktp`, `statusnikah`, `nobpjs`, `npwp`, `golongandarah`, `mulaibekerjayayasan`, `namaayah`, `namaibu`, `alamatorangtua`, `kotaorangtua`, `kodeposorangtua`, `hp1orangtua`, `hp2orangtua`, `pekerjaanayah`, `pekerjaanibu`, `anakke`, `bersaudara`, `daruratdihubungi`, `daruratperson`, `alamatdarurat`, `kotadarurat`, `kodeposdarurat`, `hp1darurat`, `hp2darurat`, `masuksd`, `keluarsd`, `lokasisd`, `studisd`, `masuksmp`, `keluarsmp`, `lokasismp`, `studismp`, `masuksma`, `keluarsma`, `lokasisma`, `studisma`, `s1masuk`, `s1keluar`, `lokasis1`, `studis1`, `s2masuk`, `s2keluar`, `lokasis2`, `studis2`, `s3masuk`, `s3keluar`, `lokasis3`, `studis3`, `keluar`, `jabatan`, `pendidikanterakhir`, `kelurahan`, `kecamatan`, `provinsi`) VALUES ('10012', 'Hadi M', NULL, NULL, 'dsfgsdfgfd', '2018-04-04', NULL, NULL, NULL, '', '', '', '34534', '', '', 'Bujang', '', '', 'A', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 'asdas', 'SD', '', '', '');
INSERT INTO `pegawai` (`nik`, `nama`, `namapanggilan`, `gender`, `kotalahir`, `tanggallahir`, `alamat`, `kota`, `kodepos`, `alamatktp`, `kotaktp`, `kodeposktp`, `nohp1`, `nohp2`, `noktp`, `statusnikah`, `nobpjs`, `npwp`, `golongandarah`, `mulaibekerjayayasan`, `namaayah`, `namaibu`, `alamatorangtua`, `kotaorangtua`, `kodeposorangtua`, `hp1orangtua`, `hp2orangtua`, `pekerjaanayah`, `pekerjaanibu`, `anakke`, `bersaudara`, `daruratdihubungi`, `daruratperson`, `alamatdarurat`, `kotadarurat`, `kodeposdarurat`, `hp1darurat`, `hp2darurat`, `masuksd`, `keluarsd`, `lokasisd`, `studisd`, `masuksmp`, `keluarsmp`, `lokasismp`, `studismp`, `masuksma`, `keluarsma`, `lokasisma`, `studisma`, `s1masuk`, `s1keluar`, `lokasis1`, `studis1`, `s2masuk`, `s2keluar`, `lokasis2`, `studis2`, `s3masuk`, `s3keluar`, `lokasis3`, `studis3`, `keluar`, `jabatan`, `pendidikanterakhir`, `kelurahan`, `kecamatan`, `provinsi`) VALUES ('10013', 'AHMAD', NULL, NULL, 'sdfdsf', '2018-04-04', NULL, NULL, NULL, '', '', '', '2342', '', '', 'Bujang', '', '', 'A', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 'sdfsdf', 'SD', '', '', '');


#
# TABLE STRUCTURE FOR: pelanggaran
#

DROP TABLE IF EXISTS `pelanggaran`;

CREATE TABLE `pelanggaran` (
  `nourut` double NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `nis` varchar(15) DEFAULT NULL,
  `namapelanggaran` varchar(200) DEFAULT NULL,
  `tindakan` varchar(200) DEFAULT NULL,
  `poin` double DEFAULT '0',
  `pengguna` varchar(200) NOT NULL,
  `catatan` varchar(250) NOT NULL,
  PRIMARY KEY (`nourut`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

INSERT INTO `pelanggaran` (`nourut`, `tanggal`, `nis`, `namapelanggaran`, `tindakan`, `poin`, `pengguna`, `catatan`) VALUES ('1', '2018-02-09', '10244021003', 'mengambil', 'tindakan', '100', '', 'akan di pulangkan');
INSERT INTO `pelanggaran` (`nourut`, `tanggal`, `nis`, `namapelanggaran`, `tindakan`, `poin`, `pengguna`, `catatan`) VALUES ('5', '2018-02-12', '10233022223', 'ASDF', 'SDF', '7', '', 'ASDF');
INSERT INTO `pelanggaran` (`nourut`, `tanggal`, `nis`, `namapelanggaran`, `tindakan`, `poin`, `pengguna`, `catatan`) VALUES ('4', '2018-02-09', '10244021001', 'tidak ada', 'tidak ada', '9', '', 'ljhkjh');
INSERT INTO `pelanggaran` (`nourut`, `tanggal`, `nis`, `namapelanggaran`, `tindakan`, `poin`, `pengguna`, `catatan`) VALUES ('6', '2018-02-12', '10322010020', 'AADFASDFAS', 'ASFSDF', '4', '', 'SDFSDF');
INSERT INTO `pelanggaran` (`nourut`, `tanggal`, `nis`, `namapelanggaran`, `tindakan`, `poin`, `pengguna`, `catatan`) VALUES ('7', '2018-02-12', '10322010024', 'ASDF', 'ASDF', '35', '', 'ASDF');
INSERT INTO `pelanggaran` (`nourut`, `tanggal`, `nis`, `namapelanggaran`, `tindakan`, `poin`, `pengguna`, `catatan`) VALUES ('8', '2018-03-03', '11700024', 'AADFASDFAS', 'ASDF', '10', '', 'ASDF');
INSERT INTO `pelanggaran` (`nourut`, `tanggal`, `nis`, `namapelanggaran`, `tindakan`, `poin`, `pengguna`, `catatan`) VALUES ('9', '2018-04-01', '11700029', 'Menyimpan HP', 'Di Botak', '20', '', 'tidak ada catatan');
INSERT INTO `pelanggaran` (`nourut`, `tanggal`, `nis`, `namapelanggaran`, `tindakan`, `poin`, `pengguna`, `catatan`) VALUES ('10', '2018-04-21', '', '', '', '1', '', '');
INSERT INTO `pelanggaran` (`nourut`, `tanggal`, `nis`, `namapelanggaran`, `tindakan`, `poin`, `pengguna`, `catatan`) VALUES ('11', '2018-04-30', '11700024', 'Menyimpan HP', 'Di Botak', '10', '', 'tidak ada catatan');
INSERT INTO `pelanggaran` (`nourut`, `tanggal`, `nis`, `namapelanggaran`, `tindakan`, `poin`, `pengguna`, `catatan`) VALUES ('12', '2018-05-01', '11700039', 'sdfsdf- ', 'sdfsd 1', '1', '', 'sdfdsfsdf');
INSERT INTO `pelanggaran` (`nourut`, `tanggal`, `nis`, `namapelanggaran`, `tindakan`, `poin`, `pengguna`, `catatan`) VALUES ('13', '2018-05-01', '11700039', 'makan 10 kali', '2 kali 2', '1', '', '');
INSERT INTO `pelanggaran` (`nourut`, `tanggal`, `nis`, `namapelanggaran`, `tindakan`, `poin`, `pengguna`, `catatan`) VALUES ('14', '2018-05-01', '11700039', 'makan 10 kali', '1 kali', '1', '', 'asdasd');
INSERT INTO `pelanggaran` (`nourut`, `tanggal`, `nis`, `namapelanggaran`, `tindakan`, `poin`, `pengguna`, `catatan`) VALUES ('15', '2018-05-01', '11700073', 'wefs', 'sdfsdf', '1', '', '');
INSERT INTO `pelanggaran` (`nourut`, `tanggal`, `nis`, `namapelanggaran`, `tindakan`, `poin`, `pengguna`, `catatan`) VALUES ('16', '2018-05-01', '11700074', 'dfgff', 'dfgd', '1', '', 'dfg');
INSERT INTO `pelanggaran` (`nourut`, `tanggal`, `nis`, `namapelanggaran`, `tindakan`, `poin`, `pengguna`, `catatan`) VALUES ('17', '2018-05-01', '11700073', 'dsfgd', 'dfgdf', '1', '', '');
INSERT INTO `pelanggaran` (`nourut`, `tanggal`, `nis`, `namapelanggaran`, `tindakan`, `poin`, `pengguna`, `catatan`) VALUES ('18', '2018-05-01', '11700073', 'sdfsd', 'sdfsdf', '1', '', 'sdf');


#
# TABLE STRUCTURE FOR: prestasi
#

DROP TABLE IF EXISTS `prestasi`;

CREATE TABLE `prestasi` (
  `nourut` double NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `nis` varchar(100) NOT NULL,
  `prestasi` varchar(200) NOT NULL,
  `catatan` varchar(220) NOT NULL,
  `pengguna` varchar(100) NOT NULL,
  PRIMARY KEY (`nourut`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

INSERT INTO `prestasi` (`nourut`, `tanggal`, `nis`, `prestasi`, `catatan`, `pengguna`) VALUES ('6', '2017-05-21', '11133011029', 'Juara lomba lari', 'tidak ada catatan', 'sadmin');
INSERT INTO `prestasi` (`nourut`, `tanggal`, `nis`, `prestasi`, `catatan`, `pengguna`) VALUES ('14', '2017-05-21', '10922010002', 'Juara lomba lari', 'tidak ada catatan', 'sadmin');
INSERT INTO `prestasi` (`nourut`, `tanggal`, `nis`, `prestasi`, `catatan`, `pengguna`) VALUES ('15', '2017-05-21', '10922010002', 'Juara lomba lari', 'tidak ada catatan', 'sadmin');
INSERT INTO `prestasi` (`nourut`, `tanggal`, `nis`, `prestasi`, `catatan`, `pengguna`) VALUES ('16', '2017-05-21', '10922010002', 'Juara lomba lari', 'tidak ada catatan', 'sadmin');
INSERT INTO `prestasi` (`nourut`, `tanggal`, `nis`, `prestasi`, `catatan`, `pengguna`) VALUES ('17', '2017-05-21', '10522020008', 'Juara lomba lari', 'tidak ada catatan', 'sadmin');
INSERT INTO `prestasi` (`nourut`, `tanggal`, `nis`, `prestasi`, `catatan`, `pengguna`) VALUES ('18', '2017-05-21', '10522020008', 'Juara lomba lari', 'tidak ada catatan', 'sadmin');
INSERT INTO `prestasi` (`nourut`, `tanggal`, `nis`, `prestasi`, `catatan`, `pengguna`) VALUES ('19', '2017-05-21', '10522020008', 'Juara lomba lari', 'tidak ada catatan', 'sadmin');
INSERT INTO `prestasi` (`nourut`, `tanggal`, `nis`, `prestasi`, `catatan`, `pengguna`) VALUES ('20', '2017-07-19', '1021001', 'Juara 1 tahfidz', 'tidak ada', 'sadmin');
INSERT INTO `prestasi` (`nourut`, `tanggal`, `nis`, `prestasi`, `catatan`, `pengguna`) VALUES ('21', '2017-07-18', '1021001', 'Juara 2 tahfidz', 'tidak ada', 'sadmin');
INSERT INTO `prestasi` (`nourut`, `tanggal`, `nis`, `prestasi`, `catatan`, `pengguna`) VALUES ('22', '2017-08-16', '10922010001', 'Juara 2 Qiro`ah Kutub ICBB', 'Dilaksanakan Oleh Ospic', 'sadmin');
INSERT INTO `prestasi` (`nourut`, `tanggal`, `nis`, `prestasi`, `catatan`, `pengguna`) VALUES ('23', '2018-02-09', '10322010016', 'Juara Lomba makan', 'Tidak ada catatan', '');
INSERT INTO `prestasi` (`nourut`, `tanggal`, `nis`, `prestasi`, `catatan`, `pengguna`) VALUES ('24', '2018-02-10', '10322010020', 'juara 1', 'tidak ada', '');
INSERT INTO `prestasi` (`nourut`, `tanggal`, `nis`, `prestasi`, `catatan`, `pengguna`) VALUES ('25', '2018-03-03', '11700025', 'aaaaa', 'asdfasdf', '');
INSERT INTO `prestasi` (`nourut`, `tanggal`, `nis`, `prestasi`, `catatan`, `pengguna`) VALUES ('27', '2018-03-03', '11700027', 'aaaaa', 'ASDF', '');
INSERT INTO `prestasi` (`nourut`, `tanggal`, `nis`, `prestasi`, `catatan`, `pengguna`) VALUES ('28', '2018-04-30', '11700025', '', '', '');
INSERT INTO `prestasi` (`nourut`, `tanggal`, `nis`, `prestasi`, `catatan`, `pengguna`) VALUES ('29', '2018-04-30', '', 'ghf', 'dfg', '');
INSERT INTO `prestasi` (`nourut`, `tanggal`, `nis`, `prestasi`, `catatan`, `pengguna`) VALUES ('30', '2018-05-01', '11700039', 'asdasda', '', '');
INSERT INTO `prestasi` (`nourut`, `tanggal`, `nis`, `prestasi`, `catatan`, `pengguna`) VALUES ('31', '2018-04-01', '11700073', 'sdfsf', '', '');
INSERT INTO `prestasi` (`nourut`, `tanggal`, `nis`, `prestasi`, `catatan`, `pengguna`) VALUES ('32', '2018-05-01', '11700077', 'hhh', 'hhh', '');
INSERT INTO `prestasi` (`nourut`, `tanggal`, `nis`, `prestasi`, `catatan`, `pengguna`) VALUES ('33', '2018-05-01', '11700039', 'asdass', 'asdasd', '');
INSERT INTO `prestasi` (`nourut`, `tanggal`, `nis`, `prestasi`, `catatan`, `pengguna`) VALUES ('34', '2018-05-01', '11700073', 'juara 3', 'abcd', '');
INSERT INTO `prestasi` (`nourut`, `tanggal`, `nis`, `prestasi`, `catatan`, `pengguna`) VALUES ('35', '2018-05-08', '11700094', '1', 'lorem ipsum dolor sit amet', '');


#
# TABLE STRUCTURE FOR: rekening
#

DROP TABLE IF EXISTS `rekening`;

CREATE TABLE `rekening` (
  `kodegolongan` varchar(3) DEFAULT NULL,
  `koderekening` varchar(6) NOT NULL,
  `namarekening` varchar(100) DEFAULT NULL,
  `saldoawal` double DEFAULT '0',
  `debet` double DEFAULT '0',
  `kredit` double DEFAULT '0',
  `normal` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`koderekening`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('100', '100099', 'KAS', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('100', '100001', 'KAS KECIL UANG SAKU', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('100', '100002', 'UANG MUKA SEMENTARA', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('100', '100009', 'PIUTANG LAIN - LAIN', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('100', '100011', 'BIAYA DIBAYAR DIMUKA', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('100', '100012', 'SEWA GEDUNG DIBAYAR DIMUKA', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('200', '200001', 'BANK BNI', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('200', '200002', 'BANK BRI', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('200', '200003', 'BANK BRI SITIMULYO', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('300', '300000', 'TANAH', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('300', '300001', 'BANGUNAN', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('300', '300002', 'AKUMULASI PENYUSUTAN BANGUNAN', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('300', '300003', 'KENDARAAN', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('300', '300004', 'AKUMULASI PENYUSUTAN KENDARAAN', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('300', '300005', 'PERALATAN KANTOR', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('300', '300006', 'AKUMULASI PENYUSUTAN PERALATAN KANTOR', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('300', '300007', 'PERABOTAN KANTOR', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('300', '300008', 'AKUMULASI PERABOTAN KANTOR', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('300', '300009', 'PERALATAN GEDUNG', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('300', '300010', 'AKUMULASI PERALATAN GEDUNG', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('300', '300011', 'PERABOTAN GEDUNG', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('300', '300012', 'AKUMULASI PENYUSUTAN PERABOTAN GEDUNG', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('300', '300013', 'LVA-PERALATAN KANTOR', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('300', '300014', 'LVA-AKUMULASI PENYUSUTAN PERALATAN KANTOR', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('300', '300015', 'LVA-PERABOTAN KANTOR', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('300', '300016', 'LVA-AKUMULASI PENYUSUTAN PERABOTAN KANTOR', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('300', '300017', 'LVA-PERALATAN GEDUNG', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('300', '300018', 'LVA-AKUMULASI PENYUSUTAN PERALATAN GEDUNG', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('300', '300019', 'LVA-PERABOTAN GEDUNG', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('300', '300020', 'LVA-AKUMULASI PENYUSUTAN PERABOTAN GEDUNG', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('400', '400000', 'HUTANG USAHA', '0', '0', '0', '0');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('400', '400001', 'HUTANG YAYASAN', '0', '0', '0', '0');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('400', '400002', 'DEPOSIT UANG SAKU', '0', '0', '0', '0');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('400', '400003', 'DEPOSIT SPP', '0', '0', '0', '0');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('400', '400004', 'DEPOSIT UANG CUCI', '0', '0', '0', '0');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('400', '400005', 'DEPOSIT DANA BOS', '0', '0', '0', '0');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('400', '400006', 'HUTANG LAIN-LAIN', '0', '0', '0', '0');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('400', '400007', 'BIAYA LAIN LAIN YMH DIBAYAR', '0', '0', '0', '0');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('400', '400008', 'DEPOSIT BIMBEL', '0', '0', '0', '0');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('400', '400009', 'DEPOSIT BANK', '0', '0', '0', '0');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('500', '500998', 'AKUN PENYEIMBANG', '0', '0', '0', '0');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('599', '599999', 'SALDO LABA TAHUN LALU', '0', '0', '0', '0');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('600', '600000', 'PENDAPATAN SPP', '0', '0', '0', '0');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('600', '600001', 'PENDAPATAN UANG PANGKAL', '0', '0', '0', '0');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('600', '600002', 'PENDAPATAN DAFTAR ULANG', '0', '0', '0', '0');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('600', '600003', 'PENDAPATAN UANG KESEHATAN', '0', '0', '0', '0');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('600', '600004', 'PENDAPATAN UANG RAPOR', '0', '0', '0', '0');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('600', '600005', 'PENDAPATAN INFAQ', '0', '0', '0', '0');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('600', '600006', 'HIBAH', '0', '0', '0', '0');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('600', '600007', 'PENDAPATAN BANK-BAGI HASIL', '0', '0', '0', '0');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('600', '600008', 'PENDAPATAN BUNGA BANK', '0', '0', '0', '0');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('600', '600009', 'PENDAPATAN LAIN-LAIN', '0', '0', '0', '0');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('600', '600010', 'PENDAPATAN BOS', '0', '0', '0', '0');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('600', '600011', 'PENDAPATAN FORMULIR PENDAFTARAN SB', '0', '0', '0', '0');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('600', '600012', 'PENDAPATAN DARI KHIDMAT', '0', '0', '0', '0');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('700', '700000', 'HONORARIUM GURU DAN TENAGA PENDIDIK HONO', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('700', '700001', 'UJIAN SEMESTER', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('700', '700002', 'PENGAWAS / PENGISI RAPOR', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('700', '700003', 'PEMBUAT SOAL', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('700', '700004', 'PENCETAKAN DOKUMEN', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('700', '700005', 'UJIAN AKHIR SEKOLAH', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('700', '700006', 'ULANGAN UMUM HARIAN', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('700', '700007', 'PENGADAAN BAHAN TEORI / PRAKTIK', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('700', '700008', 'PENGEMBANGAN POTENSI SISWA', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('700', '700009', 'KEGIATAN OSIS', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('700', '700010', 'PENYELENGGARAAN LOMBA / HADIAH', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('700', '700011', 'BAHASA', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('700', '700012', 'TAHFIDZ', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('700', '700013', 'OLAH RAGA', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('700', '700014', 'KREATIVITAS / ORGANISASI SANTRI', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('700', '700015', 'BUKU PELAJARAN POKOK', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('700', '700016', 'BUKU PENUNJANG', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('700', '700017', 'BANTUAN TRANSPORT UNTUK SISWA MISKIN', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('700', '700018', 'BIAYA PERBAIKAN SARANA', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('700', '700019', 'BIAYA PERBAIKAN MCK, AIR, DLL', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('700', '700020', 'BIAYA PERBAIKAN PERALATAN GEDUNG', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('700', '700021', 'BIAYA BERAS', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('700', '700022', 'BIAYA LAUK PAUK', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('700', '700023', 'BIAYA BUAH', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('700', '700024', 'BIAYA BAHAN BAKAR DAPUR', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('700', '700025', 'BIAYA PENERIMAAN SANTRI BARU', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('700', '700026', 'BIAYA KESEHATAN SANTRI', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('800', '800000', 'BIAYA GAJI KARYAWAN', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('800', '800001', 'BIAYA ATK( BUKU TULIS. SPIDOL. TINTA. DLL)', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('800', '800002', 'FOTO COPY', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('800', '800003', 'BIAYA POS DAN PENGIRIMAN', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('800', '800004', 'LANGGANAN LISTRIK', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('800', '800005', 'LANGGANAN TELEPON', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('800', '800006', 'BIAYA PERBAIKAN LISTRIK', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('800', '800007', 'BIAYA KEBERSIHAN', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('800', '800008', 'BIAYA PERBAIKAN KENDARAAN', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('800', '800009', 'BIAYA PERBAIKAN PERALATAN KANTOR', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('800', '800010', 'BIAYA BBM DAN PARKIR(OPERASIONAL)', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('800', '800011', 'BIAYA MAKAN MINUM', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('800', '800012', 'BIAYA JAMUAN TAMU', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('800', '800013', 'BIAYA KEAMANAN/ SATPAM', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('800', '800014', 'BIAYA TRAINING', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('800', '800015', 'BIAYA SUMBANGAN', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('800', '800016', 'BIAYA MATERAI', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('800', '800017', 'BIAYA OPERASIONAL LAIN-LAIN', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('800', '800018', 'BIAYA AIR', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('800', '800019', 'BIAYA KEPERLUAN KANTOR', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('800', '800020', 'BIAYA IKLAN DAN PROMOSI', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('800', '800021', 'BIAYA SEWA TANAH', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('800', '800022', 'BIAYA SEWA GEDUNG', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('800', '800023', 'BIAYA SEWA LAIN LAIN', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('800', '800024', 'BIAYA ADMINISTRASI BANK', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('800', '800025', 'BIAYA RECRUITMENT', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('800', '800026', 'BIAYA PERJALANAN DINAS', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('800', '800027', 'BIAYA HONOR', '0', '0', '0', '1');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('600', '600100', 'PENDAPATAN ABCD', '1000000', '0', '0', '0');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('100', '100100', 'KAS ABCD', '1000000', '0', '0', '0');
INSERT INTO `rekening` (`kodegolongan`, `koderekening`, `namarekening`, `saldoawal`, `debet`, `kredit`, `normal`) VALUES ('100', '100110', 'KAS BINBAZ', '0', '0', '0', '0');


#
# TABLE STRUCTURE FOR: sekolah
#

DROP TABLE IF EXISTS `sekolah`;

CREATE TABLE `sekolah` (
  `nomorindukpegawai` varchar(50) NOT NULL,
  `namasekolah` varchar(200) NOT NULL,
  `kepalasekolah` varchar(100) NOT NULL,
  `notelpon` varchar(50) NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kecamatan` varchar(70) NOT NULL,
  `kabupaten` varchar(70) NOT NULL,
  `provinsi` varchar(70) NOT NULL,
  `moto` varchar(100) NOT NULL,
  `visimisi` text NOT NULL,
  `marhalah1` varchar(100) NOT NULL,
  `marhalah2` varchar(100) NOT NULL,
  `marhalah3` varchar(100) NOT NULL,
  `marhalah4` varchar(100) NOT NULL,
  `marhalah5` varchar(100) NOT NULL,
  `marhalah6` varchar(100) NOT NULL,
  `logobesar` varchar(240) NOT NULL,
  `logokecil` varchar(240) NOT NULL,
  PRIMARY KEY (`namasekolah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `sekolah` (`nomorindukpegawai`, `namasekolah`, `kepalasekolah`, `notelpon`, `nohp`, `email`, `alamat`, `kecamatan`, `kabupaten`, `provinsi`, `moto`, `visimisi`, `marhalah1`, `marhalah2`, `marhalah3`, `marhalah4`, `marhalah5`, `marhalah6`, `logobesar`, `logokecil`) VALUES ('1982828 28289 1 901', 'Qodr', 'Ahmad Yahdi', '0818029999999', '0818088888888', 'yahdi@gmail.com', 'Jl. Ahmad Dahlan No 3', 'Singosari', 'Bantul', 'DIY', 'Mendidik Generasi Robbani', 'Mencetak Generasi Muslim Yang Tangguh', 'Madrasah Aliyah', 'Salafiyah Wustho', 'Salafiyah Ula', 'TK Bunayya', 'PAUD ICBB', '', '', '');


#
# TABLE STRUCTURE FOR: setingmapel
#

DROP TABLE IF EXISTS `setingmapel`;

CREATE TABLE `setingmapel` (
  `noid` int(11) NOT NULL AUTO_INCREMENT,
  `kodemapel` varchar(50) DEFAULT NULL,
  `nik` double DEFAULT '0',
  `kelas` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`noid`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

INSERT INTO `setingmapel` (`noid`, `kodemapel`, `nik`, `kelas`) VALUES ('42', 'MTK', '10014', 'I.B');
INSERT INTO `setingmapel` (`noid`, `kodemapel`, `nik`, `kelas`) VALUES ('41', 'SKI', '10014', 'I.B');
INSERT INTO `setingmapel` (`noid`, `kodemapel`, `nik`, `kelas`) VALUES ('40', 'TAU', '10011', 'I.B');


#
# TABLE STRUCTURE FOR: siswa
#

DROP TABLE IF EXISTS `siswa`;

CREATE TABLE `siswa` (
  `nis` double NOT NULL AUTO_INCREMENT,
  `namasiswa` varchar(50) DEFAULT NULL,
  `kotalahir` varchar(50) DEFAULT NULL,
  `tanggallahir` date DEFAULT NULL,
  `jeniskelamin` varchar(20) DEFAULT NULL,
  `anakke` varchar(5) DEFAULT NULL,
  `bersaudara` varchar(5) DEFAULT NULL,
  `golongandarah` varchar(2) DEFAULT NULL,
  `marhalah` varchar(50) DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `spp` double DEFAULT NULL,
  `nokk` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `ttlayah` varchar(200) DEFAULT NULL,
  `noktpayah` varchar(50) DEFAULT NULL,
  `pendidikanayah` varchar(200) DEFAULT NULL,
  `gajiayah` double DEFAULT NULL,
  `namaayah` varchar(50) DEFAULT NULL,
  `pekerjaanayah` varchar(50) DEFAULT NULL,
  `ttlibu` varchar(200) DEFAULT NULL,
  `noktpibu` varchar(100) DEFAULT NULL,
  `pendidikanibu` varchar(200) DEFAULT NULL,
  `gajiibu` double DEFAULT NULL,
  `namaibu` varchar(50) DEFAULT NULL,
  `pekerjaanibu` varchar(50) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `kelurahan` varchar(100) DEFAULT NULL,
  `kecamatan` varchar(100) DEFAULT NULL,
  `alamatkota` varchar(150) DEFAULT NULL,
  `provinsi` varchar(50) DEFAULT NULL,
  `telephon` varchar(50) DEFAULT NULL,
  `telephonrumah` varchar(50) DEFAULT NULL,
  `asalsekolah` varchar(150) DEFAULT NULL,
  `alamatsekolah` varchar(150) DEFAULT NULL,
  `tanggalmasuk` datetime DEFAULT NULL,
  `noinduk` varchar(200) DEFAULT NULL,
  `ijasah` varchar(60) DEFAULT NULL,
  `akte` varchar(50) DEFAULT NULL,
  `skhun` varchar(50) DEFAULT NULL,
  `nisn` varchar(50) DEFAULT NULL,
  `uangpangkal` double DEFAULT '0',
  `daftarulang` double DEFAULT '0',
  `lokasitest` varchar(100) DEFAULT NULL,
  `edit` varchar(10) DEFAULT NULL,
  `lulus` tinyint(4) DEFAULT NULL,
  `keterangan` varchar(200) DEFAULT NULL,
  `foto` varchar(250) NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=MyISAM AUTO_INCREMENT=11700096 DEFAULT CHARSET=utf8;

INSERT INTO `siswa` (`nis`, `namasiswa`, `kotalahir`, `tanggallahir`, `jeniskelamin`, `anakke`, `bersaudara`, `golongandarah`, `marhalah`, `kelas`, `spp`, `nokk`, `email`, `ttlayah`, `noktpayah`, `pendidikanayah`, `gajiayah`, `namaayah`, `pekerjaanayah`, `ttlibu`, `noktpibu`, `pendidikanibu`, `gajiibu`, `namaibu`, `pekerjaanibu`, `alamat`, `kelurahan`, `kecamatan`, `alamatkota`, `provinsi`, `telephon`, `telephonrumah`, `asalsekolah`, `alamatsekolah`, `tanggalmasuk`, `noinduk`, `ijasah`, `akte`, `skhun`, `nisn`, `uangpangkal`, `daftarulang`, `lokasitest`, `edit`, `lulus`, `keterangan`, `foto`) VALUES ('11700091', 'saepudin', 'ganbaro', '2018-05-02', 'Pria', '3', '4', 'O', 'MTS', 'I.B', '100000', '98394238649238', 'sepudin@gomain.lol', '2015-04-02', '28946298734233234', 'S teler', '10000', 'painem', 'dirut', '2014-05-02', '2342342453423', 'S deggan', '22000', 'tukinah', 'nyuci', 'RT 006 Rw 200', 'rawa pusing', 'rawa pening', 'ambarawa', 'jawa tengah', '00000000001', '088888', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1250000', '1000000', NULL, NULL, '0', NULL, '2bedebd1a94c9ef84c172a2d5aae6ea6.png');
INSERT INTO `siswa` (`nis`, `namasiswa`, `kotalahir`, `tanggallahir`, `jeniskelamin`, `anakke`, `bersaudara`, `golongandarah`, `marhalah`, `kelas`, `spp`, `nokk`, `email`, `ttlayah`, `noktpayah`, `pendidikanayah`, `gajiayah`, `namaayah`, `pekerjaanayah`, `ttlibu`, `noktpibu`, `pendidikanibu`, `gajiibu`, `namaibu`, `pekerjaanibu`, `alamat`, `kelurahan`, `kecamatan`, `alamatkota`, `provinsi`, `telephon`, `telephonrumah`, `asalsekolah`, `alamatsekolah`, `tanggalmasuk`, `noinduk`, `ijasah`, `akte`, `skhun`, `nisn`, `uangpangkal`, `daftarulang`, `lokasitest`, `edit`, `lulus`, `keterangan`, `foto`) VALUES ('11700093', 'ganbaro minna', 'jepun', '2018-05-03', 'Pria', '1', NULL, 'A', NULL, 'I.C', '100000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1500000', '1000000', NULL, NULL, '0', NULL, '0be1f1bae6f9838382ceba01f4b69ac2.jpg');
INSERT INTO `siswa` (`nis`, `namasiswa`, `kotalahir`, `tanggallahir`, `jeniskelamin`, `anakke`, `bersaudara`, `golongandarah`, `marhalah`, `kelas`, `spp`, `nokk`, `email`, `ttlayah`, `noktpayah`, `pendidikanayah`, `gajiayah`, `namaayah`, `pekerjaanayah`, `ttlibu`, `noktpibu`, `pendidikanibu`, `gajiibu`, `namaibu`, `pekerjaanibu`, `alamat`, `kelurahan`, `kecamatan`, `alamatkota`, `provinsi`, `telephon`, `telephonrumah`, `asalsekolah`, `alamatsekolah`, `tanggalmasuk`, `noinduk`, `ijasah`, `akte`, `skhun`, `nisn`, `uangpangkal`, `daftarulang`, `lokasitest`, `edit`, `lulus`, `keterangan`, `foto`) VALUES ('11700090', 'kmu aja', 'mana aja', '2018-05-02', 'Pria', '1', NULL, 'A', NULL, 'I.B', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', NULL, NULL, '0', NULL, '');
INSERT INTO `siswa` (`nis`, `namasiswa`, `kotalahir`, `tanggallahir`, `jeniskelamin`, `anakke`, `bersaudara`, `golongandarah`, `marhalah`, `kelas`, `spp`, `nokk`, `email`, `ttlayah`, `noktpayah`, `pendidikanayah`, `gajiayah`, `namaayah`, `pekerjaanayah`, `ttlibu`, `noktpibu`, `pendidikanibu`, `gajiibu`, `namaibu`, `pekerjaanibu`, `alamat`, `kelurahan`, `kecamatan`, `alamatkota`, `provinsi`, `telephon`, `telephonrumah`, `asalsekolah`, `alamatsekolah`, `tanggalmasuk`, `noinduk`, `ijasah`, `akte`, `skhun`, `nisn`, `uangpangkal`, `daftarulang`, `lokasitest`, `edit`, `lulus`, `keterangan`, `foto`) VALUES ('11700089', 'fgfghf', 'sdfsd', '2018-05-01', 'Pria', '1', NULL, 'A', NULL, 'I.B', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', NULL, NULL, '0', NULL, '6a11c8db96f57b1741ed5fe7a2e7c703.jpg');
INSERT INTO `siswa` (`nis`, `namasiswa`, `kotalahir`, `tanggallahir`, `jeniskelamin`, `anakke`, `bersaudara`, `golongandarah`, `marhalah`, `kelas`, `spp`, `nokk`, `email`, `ttlayah`, `noktpayah`, `pendidikanayah`, `gajiayah`, `namaayah`, `pekerjaanayah`, `ttlibu`, `noktpibu`, `pendidikanibu`, `gajiibu`, `namaibu`, `pekerjaanibu`, `alamat`, `kelurahan`, `kecamatan`, `alamatkota`, `provinsi`, `telephon`, `telephonrumah`, `asalsekolah`, `alamatsekolah`, `tanggalmasuk`, `noinduk`, `ijasah`, `akte`, `skhun`, `nisn`, `uangpangkal`, `daftarulang`, `lokasitest`, `edit`, `lulus`, `keterangan`, `foto`) VALUES ('11700073', 'asdasd', 'asdasda', '2018-04-30', 'Pria', '1', NULL, 'A', NULL, 'X.A', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', NULL, NULL, '0', NULL, 'b0275914e61ec737df9a6bb7612d59d5.jpg');
INSERT INTO `siswa` (`nis`, `namasiswa`, `kotalahir`, `tanggallahir`, `jeniskelamin`, `anakke`, `bersaudara`, `golongandarah`, `marhalah`, `kelas`, `spp`, `nokk`, `email`, `ttlayah`, `noktpayah`, `pendidikanayah`, `gajiayah`, `namaayah`, `pekerjaanayah`, `ttlibu`, `noktpibu`, `pendidikanibu`, `gajiibu`, `namaibu`, `pekerjaanibu`, `alamat`, `kelurahan`, `kecamatan`, `alamatkota`, `provinsi`, `telephon`, `telephonrumah`, `asalsekolah`, `alamatsekolah`, `tanggalmasuk`, `noinduk`, `ijasah`, `akte`, `skhun`, `nisn`, `uangpangkal`, `daftarulang`, `lokasitest`, `edit`, `lulus`, `keterangan`, `foto`) VALUES ('11700074', 'asdsad', 'asdasd', '2018-04-30', 'Pria', '1', NULL, 'A', NULL, 'X.A', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', NULL, NULL, '0', NULL, 'beedddf10c3f8ce4a8e01eb89592d0b3.jpg');
INSERT INTO `siswa` (`nis`, `namasiswa`, `kotalahir`, `tanggallahir`, `jeniskelamin`, `anakke`, `bersaudara`, `golongandarah`, `marhalah`, `kelas`, `spp`, `nokk`, `email`, `ttlayah`, `noktpayah`, `pendidikanayah`, `gajiayah`, `namaayah`, `pekerjaanayah`, `ttlibu`, `noktpibu`, `pendidikanibu`, `gajiibu`, `namaibu`, `pekerjaanibu`, `alamat`, `kelurahan`, `kecamatan`, `alamatkota`, `provinsi`, `telephon`, `telephonrumah`, `asalsekolah`, `alamatsekolah`, `tanggalmasuk`, `noinduk`, `ijasah`, `akte`, `skhun`, `nisn`, `uangpangkal`, `daftarulang`, `lokasitest`, `edit`, `lulus`, `keterangan`, `foto`) VALUES ('11700075', 'sddsf', 'sdfsdf', '2018-04-30', 'Pria', '1', NULL, 'A', NULL, 'X.A', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', NULL, NULL, '0', NULL, '7bc3f21d0c45412cc933fddef3abf1ca.jpg');
INSERT INTO `siswa` (`nis`, `namasiswa`, `kotalahir`, `tanggallahir`, `jeniskelamin`, `anakke`, `bersaudara`, `golongandarah`, `marhalah`, `kelas`, `spp`, `nokk`, `email`, `ttlayah`, `noktpayah`, `pendidikanayah`, `gajiayah`, `namaayah`, `pekerjaanayah`, `ttlibu`, `noktpibu`, `pendidikanibu`, `gajiibu`, `namaibu`, `pekerjaanibu`, `alamat`, `kelurahan`, `kecamatan`, `alamatkota`, `provinsi`, `telephon`, `telephonrumah`, `asalsekolah`, `alamatsekolah`, `tanggalmasuk`, `noinduk`, `ijasah`, `akte`, `skhun`, `nisn`, `uangpangkal`, `daftarulang`, `lokasitest`, `edit`, `lulus`, `keterangan`, `foto`) VALUES ('11700077', 'asdas', 'asdasd', '2018-04-30', 'Pria', '1', NULL, 'A', NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', NULL, NULL, '0', NULL, '932a4b18870354f95510c9e954eb558f.jpg');
INSERT INTO `siswa` (`nis`, `namasiswa`, `kotalahir`, `tanggallahir`, `jeniskelamin`, `anakke`, `bersaudara`, `golongandarah`, `marhalah`, `kelas`, `spp`, `nokk`, `email`, `ttlayah`, `noktpayah`, `pendidikanayah`, `gajiayah`, `namaayah`, `pekerjaanayah`, `ttlibu`, `noktpibu`, `pendidikanibu`, `gajiibu`, `namaibu`, `pekerjaanibu`, `alamat`, `kelurahan`, `kecamatan`, `alamatkota`, `provinsi`, `telephon`, `telephonrumah`, `asalsekolah`, `alamatsekolah`, `tanggalmasuk`, `noinduk`, `ijasah`, `akte`, `skhun`, `nisn`, `uangpangkal`, `daftarulang`, `lokasitest`, `edit`, `lulus`, `keterangan`, `foto`) VALUES ('11700078', 'asdas', 'safasf', '2018-04-30', 'Pria', '1', NULL, 'A', NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', NULL, NULL, '0', NULL, '35099d76b6dcc891dc7cca5559ba2892.png');
INSERT INTO `siswa` (`nis`, `namasiswa`, `kotalahir`, `tanggallahir`, `jeniskelamin`, `anakke`, `bersaudara`, `golongandarah`, `marhalah`, `kelas`, `spp`, `nokk`, `email`, `ttlayah`, `noktpayah`, `pendidikanayah`, `gajiayah`, `namaayah`, `pekerjaanayah`, `ttlibu`, `noktpibu`, `pendidikanibu`, `gajiibu`, `namaibu`, `pekerjaanibu`, `alamat`, `kelurahan`, `kecamatan`, `alamatkota`, `provinsi`, `telephon`, `telephonrumah`, `asalsekolah`, `alamatsekolah`, `tanggalmasuk`, `noinduk`, `ijasah`, `akte`, `skhun`, `nisn`, `uangpangkal`, `daftarulang`, `lokasitest`, `edit`, `lulus`, `keterangan`, `foto`) VALUES ('11700079', 'asda', 'asdsad', '2018-04-30', 'Pria', '1', NULL, 'A', NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', NULL, NULL, '0', NULL, 'a564a0cde89292d7ad2fa13b7ac6aa7d.jpg');
INSERT INTO `siswa` (`nis`, `namasiswa`, `kotalahir`, `tanggallahir`, `jeniskelamin`, `anakke`, `bersaudara`, `golongandarah`, `marhalah`, `kelas`, `spp`, `nokk`, `email`, `ttlayah`, `noktpayah`, `pendidikanayah`, `gajiayah`, `namaayah`, `pekerjaanayah`, `ttlibu`, `noktpibu`, `pendidikanibu`, `gajiibu`, `namaibu`, `pekerjaanibu`, `alamat`, `kelurahan`, `kecamatan`, `alamatkota`, `provinsi`, `telephon`, `telephonrumah`, `asalsekolah`, `alamatsekolah`, `tanggalmasuk`, `noinduk`, `ijasah`, `akte`, `skhun`, `nisn`, `uangpangkal`, `daftarulang`, `lokasitest`, `edit`, `lulus`, `keterangan`, `foto`) VALUES ('11700080', 'asdasd', 'asdasd', '2018-04-30', 'Pria', '1', NULL, 'A', NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', NULL, NULL, '0', NULL, '');
INSERT INTO `siswa` (`nis`, `namasiswa`, `kotalahir`, `tanggallahir`, `jeniskelamin`, `anakke`, `bersaudara`, `golongandarah`, `marhalah`, `kelas`, `spp`, `nokk`, `email`, `ttlayah`, `noktpayah`, `pendidikanayah`, `gajiayah`, `namaayah`, `pekerjaanayah`, `ttlibu`, `noktpibu`, `pendidikanibu`, `gajiibu`, `namaibu`, `pekerjaanibu`, `alamat`, `kelurahan`, `kecamatan`, `alamatkota`, `provinsi`, `telephon`, `telephonrumah`, `asalsekolah`, `alamatsekolah`, `tanggalmasuk`, `noinduk`, `ijasah`, `akte`, `skhun`, `nisn`, `uangpangkal`, `daftarulang`, `lokasitest`, `edit`, `lulus`, `keterangan`, `foto`) VALUES ('11700081', 'asdas', 'asdasd', '2018-04-30', 'Pria', '1', NULL, 'A', NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', NULL, NULL, '0', NULL, '');
INSERT INTO `siswa` (`nis`, `namasiswa`, `kotalahir`, `tanggallahir`, `jeniskelamin`, `anakke`, `bersaudara`, `golongandarah`, `marhalah`, `kelas`, `spp`, `nokk`, `email`, `ttlayah`, `noktpayah`, `pendidikanayah`, `gajiayah`, `namaayah`, `pekerjaanayah`, `ttlibu`, `noktpibu`, `pendidikanibu`, `gajiibu`, `namaibu`, `pekerjaanibu`, `alamat`, `kelurahan`, `kecamatan`, `alamatkota`, `provinsi`, `telephon`, `telephonrumah`, `asalsekolah`, `alamatsekolah`, `tanggalmasuk`, `noinduk`, `ijasah`, `akte`, `skhun`, `nisn`, `uangpangkal`, `daftarulang`, `lokasitest`, `edit`, `lulus`, `keterangan`, `foto`) VALUES ('11700082', 'asds', 'asdasd', '2018-04-30', 'Pria', '1', NULL, 'A', NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', NULL, NULL, '0', NULL, '');
INSERT INTO `siswa` (`nis`, `namasiswa`, `kotalahir`, `tanggallahir`, `jeniskelamin`, `anakke`, `bersaudara`, `golongandarah`, `marhalah`, `kelas`, `spp`, `nokk`, `email`, `ttlayah`, `noktpayah`, `pendidikanayah`, `gajiayah`, `namaayah`, `pekerjaanayah`, `ttlibu`, `noktpibu`, `pendidikanibu`, `gajiibu`, `namaibu`, `pekerjaanibu`, `alamat`, `kelurahan`, `kecamatan`, `alamatkota`, `provinsi`, `telephon`, `telephonrumah`, `asalsekolah`, `alamatsekolah`, `tanggalmasuk`, `noinduk`, `ijasah`, `akte`, `skhun`, `nisn`, `uangpangkal`, `daftarulang`, `lokasitest`, `edit`, `lulus`, `keterangan`, `foto`) VALUES ('11700083', 'asdads', 'asdas', '2018-04-30', 'Pria', '1', NULL, 'A', NULL, NULL, '0', '23542234', '', 'sdfsd', '234234', 'sdfsdf', '0', 'sdsadf', '', 'asdasd', '3453', 'asdsad', '0', NULL, 'asdasd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', NULL, NULL, '0', NULL, '');
INSERT INTO `siswa` (`nis`, `namasiswa`, `kotalahir`, `tanggallahir`, `jeniskelamin`, `anakke`, `bersaudara`, `golongandarah`, `marhalah`, `kelas`, `spp`, `nokk`, `email`, `ttlayah`, `noktpayah`, `pendidikanayah`, `gajiayah`, `namaayah`, `pekerjaanayah`, `ttlibu`, `noktpibu`, `pendidikanibu`, `gajiibu`, `namaibu`, `pekerjaanibu`, `alamat`, `kelurahan`, `kecamatan`, `alamatkota`, `provinsi`, `telephon`, `telephonrumah`, `asalsekolah`, `alamatsekolah`, `tanggalmasuk`, `noinduk`, `ijasah`, `akte`, `skhun`, `nisn`, `uangpangkal`, `daftarulang`, `lokasitest`, `edit`, `lulus`, `keterangan`, `foto`) VALUES ('11700070', 'Handoko Tri', 'sdfsdf', '2018-04-30', 'Pria', '1', NULL, 'A', NULL, NULL, '50000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '15000000', '2000000', NULL, NULL, '0', NULL, '');
INSERT INTO `siswa` (`nis`, `namasiswa`, `kotalahir`, `tanggallahir`, `jeniskelamin`, `anakke`, `bersaudara`, `golongandarah`, `marhalah`, `kelas`, `spp`, `nokk`, `email`, `ttlayah`, `noktpayah`, `pendidikanayah`, `gajiayah`, `namaayah`, `pekerjaanayah`, `ttlibu`, `noktpibu`, `pendidikanibu`, `gajiibu`, `namaibu`, `pekerjaanibu`, `alamat`, `kelurahan`, `kecamatan`, `alamatkota`, `provinsi`, `telephon`, `telephonrumah`, `asalsekolah`, `alamatsekolah`, `tanggalmasuk`, `noinduk`, `ijasah`, `akte`, `skhun`, `nisn`, `uangpangkal`, `daftarulang`, `lokasitest`, `edit`, `lulus`, `keterangan`, `foto`) VALUES ('11700085', 'asdasd', 'asfsdf', '2018-04-30', 'Pria', '1', NULL, 'A', NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', NULL, NULL, '0', NULL, '6ebdd8475e565135a3f4fc335b215732.png');
INSERT INTO `siswa` (`nis`, `namasiswa`, `kotalahir`, `tanggallahir`, `jeniskelamin`, `anakke`, `bersaudara`, `golongandarah`, `marhalah`, `kelas`, `spp`, `nokk`, `email`, `ttlayah`, `noktpayah`, `pendidikanayah`, `gajiayah`, `namaayah`, `pekerjaanayah`, `ttlibu`, `noktpibu`, `pendidikanibu`, `gajiibu`, `namaibu`, `pekerjaanibu`, `alamat`, `kelurahan`, `kecamatan`, `alamatkota`, `provinsi`, `telephon`, `telephonrumah`, `asalsekolah`, `alamatsekolah`, `tanggalmasuk`, `noinduk`, `ijasah`, `akte`, `skhun`, `nisn`, `uangpangkal`, `daftarulang`, `lokasitest`, `edit`, `lulus`, `keterangan`, `foto`) VALUES ('11700086', 'asdasd', 'sdfsdf', '2018-04-30', 'Pria', '1', NULL, 'A', NULL, NULL, '0', '1234', '', 'sdfds', '234', 'asdasd', '0', 'sdfds', '', 'sdfdsf', '234', 'ssdf', '0', 'sdfsd', '', 'sdfsdf', 'ssdfsdf', 'sdfsdf', NULL, 'sdfsdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', NULL, NULL, '0', NULL, '');
INSERT INTO `siswa` (`nis`, `namasiswa`, `kotalahir`, `tanggallahir`, `jeniskelamin`, `anakke`, `bersaudara`, `golongandarah`, `marhalah`, `kelas`, `spp`, `nokk`, `email`, `ttlayah`, `noktpayah`, `pendidikanayah`, `gajiayah`, `namaayah`, `pekerjaanayah`, `ttlibu`, `noktpibu`, `pendidikanibu`, `gajiibu`, `namaibu`, `pekerjaanibu`, `alamat`, `kelurahan`, `kecamatan`, `alamatkota`, `provinsi`, `telephon`, `telephonrumah`, `asalsekolah`, `alamatsekolah`, `tanggalmasuk`, `noinduk`, `ijasah`, `akte`, `skhun`, `nisn`, `uangpangkal`, `daftarulang`, `lokasitest`, `edit`, `lulus`, `keterangan`, `foto`) VALUES ('11700087', 'sdfds', 'ssdfsdf', '2018-04-30', 'Pria', '1', NULL, 'A', NULL, 'I.B', '0', '234', '', 'sdfsdf', '234', 'sdfsd', '0', 'sdfsd', '', 'sdasdsdf', '1231', 'sdfdsf', '0', 'sdfdsfdsf', 'sdfsdf', 'asfdsfsdfsd', 'dfgfdg', 'dsfgddfg', 'sdgdfvs', 'sdfdsfsd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', NULL, NULL, '0', NULL, '');
INSERT INTO `siswa` (`nis`, `namasiswa`, `kotalahir`, `tanggallahir`, `jeniskelamin`, `anakke`, `bersaudara`, `golongandarah`, `marhalah`, `kelas`, `spp`, `nokk`, `email`, `ttlayah`, `noktpayah`, `pendidikanayah`, `gajiayah`, `namaayah`, `pekerjaanayah`, `ttlibu`, `noktpibu`, `pendidikanibu`, `gajiibu`, `namaibu`, `pekerjaanibu`, `alamat`, `kelurahan`, `kecamatan`, `alamatkota`, `provinsi`, `telephon`, `telephonrumah`, `asalsekolah`, `alamatsekolah`, `tanggalmasuk`, `noinduk`, `ijasah`, `akte`, `skhun`, `nisn`, `uangpangkal`, `daftarulang`, `lokasitest`, `edit`, `lulus`, `keterangan`, `foto`) VALUES ('11700088', 'SFBD', 'DFV', '2018-05-01', 'Pria', '1', NULL, 'A', NULL, 'I.B', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', NULL, NULL, '0', NULL, 'fa10b4dded88feed21310d1d0b5af6e9.jpg');
INSERT INTO `siswa` (`nis`, `namasiswa`, `kotalahir`, `tanggallahir`, `jeniskelamin`, `anakke`, `bersaudara`, `golongandarah`, `marhalah`, `kelas`, `spp`, `nokk`, `email`, `ttlayah`, `noktpayah`, `pendidikanayah`, `gajiayah`, `namaayah`, `pekerjaanayah`, `ttlibu`, `noktpibu`, `pendidikanibu`, `gajiibu`, `namaibu`, `pekerjaanibu`, `alamat`, `kelurahan`, `kecamatan`, `alamatkota`, `provinsi`, `telephon`, `telephonrumah`, `asalsekolah`, `alamatsekolah`, `tanggalmasuk`, `noinduk`, `ijasah`, `akte`, `skhun`, `nisn`, `uangpangkal`, `daftarulang`, `lokasitest`, `edit`, `lulus`, `keterangan`, `foto`) VALUES ('11700094', 'Muhammad Hakim Almadani', 'bukittinggi', '2000-04-22', 'Pria', '1', NULL, 'AB', 'MA', 'IX.A', '1000000', '145558329329243', 'admin@admin.lol', 'bangkinang', '234287323492333333', 'S3', '100000', 'Abdullah', 'manager', 'bukittinggi', '145555523422322', 'S4', '40000000', 'aisyah', 'ibu rumah tangga', 'Rt 005 Rw 006 jl arbes', 'pangkalan kerinci timur', 'pelalawan', 'pangkalan kerinci', 'riau', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '10000', NULL, NULL, '0', NULL, '');
INSERT INTO `siswa` (`nis`, `namasiswa`, `kotalahir`, `tanggallahir`, `jeniskelamin`, `anakke`, `bersaudara`, `golongandarah`, `marhalah`, `kelas`, `spp`, `nokk`, `email`, `ttlayah`, `noktpayah`, `pendidikanayah`, `gajiayah`, `namaayah`, `pekerjaanayah`, `ttlibu`, `noktpibu`, `pendidikanibu`, `gajiibu`, `namaibu`, `pekerjaanibu`, `alamat`, `kelurahan`, `kecamatan`, `alamatkota`, `provinsi`, `telephon`, `telephonrumah`, `asalsekolah`, `alamatsekolah`, `tanggalmasuk`, `noinduk`, `ijasah`, `akte`, `skhun`, `nisn`, `uangpangkal`, `daftarulang`, `lokasitest`, `edit`, `lulus`, `keterangan`, `foto`) VALUES ('11700095', 'vhcghchv', 'jbjhbhb', '2018-05-11', 'Pria', '1', NULL, 'A', NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', NULL, NULL, '0', NULL, '');


#
# TABLE STRUCTURE FOR: siswaalumni
#

DROP TABLE IF EXISTS `siswaalumni`;

CREATE TABLE `siswaalumni` (
  `nis` varchar(50) NOT NULL,
  `namasiswa` varchar(100) NOT NULL,
  `namatahunajaran` varchar(20) NOT NULL,
  `notelpon` varchar(50) NOT NULL,
  `alamatsekarang` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kuliahkerja` varchar(50) NOT NULL,
  `instansi` varchar(150) NOT NULL,
  `catatan` text NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: siswakeluar
#

DROP TABLE IF EXISTS `siswakeluar`;

CREATE TABLE `siswakeluar` (
  `nis` double NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `siswakeluar` (`nis`, `tanggal`, `keterangan`) VALUES ('1151588', '2017-09-07', 'tidak apa2');
INSERT INTO `siswakeluar` (`nis`, `tanggal`, `keterangan`) VALUES ('11211019', '2017-05-02', 'Pindah Sementara');
INSERT INTO `siswakeluar` (`nis`, `tanggal`, `keterangan`) VALUES ('11111011480', '2017-05-09', 'Pindah Sementara');


#
# TABLE STRUCTURE FOR: tahfidz
#

DROP TABLE IF EXISTS `tahfidz`;

CREATE TABLE `tahfidz` (
  `nourut` double NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `nis` varchar(50) DEFAULT NULL,
  `tambahan` double DEFAULT NULL,
  `murojaah` varchar(250) DEFAULT NULL,
  `totalhafalan` double DEFAULT NULL,
  `murojaahbaru` varchar(250) NOT NULL,
  `tambahanketerangan` varchar(250) NOT NULL,
  PRIMARY KEY (`nourut`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

INSERT INTO `tahfidz` (`nourut`, `tanggal`, `nis`, `tambahan`, `murojaah`, `totalhafalan`, `murojaahbaru`, `tambahanketerangan`) VALUES ('16', '2018-05-01', '11700070', '1', '2 halaman', NULL, '3 halaman', '1 halaman');
INSERT INTO `tahfidz` (`nourut`, `tanggal`, `nis`, `tambahan`, `murojaah`, `totalhafalan`, `murojaahbaru`, `tambahanketerangan`) VALUES ('15', '2018-05-01', '11700070', '1', 'hafalan', NULL, '', 'hafalan');
INSERT INTO `tahfidz` (`nourut`, `tanggal`, `nis`, `tambahan`, `murojaah`, `totalhafalan`, `murojaahbaru`, `tambahanketerangan`) VALUES ('14', '2018-05-01', '11700039', '1', 'halaman', NULL, 'halaman', 'halman');
INSERT INTO `tahfidz` (`nourut`, `tanggal`, `nis`, `tambahan`, `murojaah`, `totalhafalan`, `murojaahbaru`, `tambahanketerangan`) VALUES ('13', '2018-05-01', '11700039', '1', 'asdasda', NULL, '', 'asdasd');
INSERT INTO `tahfidz` (`nourut`, `tanggal`, `nis`, `tambahan`, `murojaah`, `totalhafalan`, `murojaahbaru`, `tambahanketerangan`) VALUES ('17', '2018-05-01', '11700070', '1', 'halaman 2-3', NULL, '', 'halaman 2-3');
INSERT INTO `tahfidz` (`nourut`, `tanggal`, `nis`, `tambahan`, `murojaah`, `totalhafalan`, `murojaahbaru`, `tambahanketerangan`) VALUES ('18', '2018-05-01', '11700039', '1', 'halaman 2-3', NULL, '', 'halaman 2-3');
INSERT INTO `tahfidz` (`nourut`, `tanggal`, `nis`, `tambahan`, `murojaah`, `totalhafalan`, `murojaahbaru`, `tambahanketerangan`) VALUES ('19', '2018-05-01', '11700039', '1', '2 - 5 halaman', NULL, '2', '3 halaman');
INSERT INTO `tahfidz` (`nourut`, `tanggal`, `nis`, `tambahan`, `murojaah`, `totalhafalan`, `murojaahbaru`, `tambahanketerangan`) VALUES ('20', '2018-05-01', '11700073', '1', '2 - 5 halaman', NULL, '', '2');
INSERT INTO `tahfidz` (`nourut`, `tanggal`, `nis`, `tambahan`, `murojaah`, `totalhafalan`, `murojaahbaru`, `tambahanketerangan`) VALUES ('21', '2018-05-01', '11700039', '1', 'wefew', NULL, 'esdfwef', 'asdas');
INSERT INTO `tahfidz` (`nourut`, `tanggal`, `nis`, `tambahan`, `murojaah`, `totalhafalan`, `murojaahbaru`, `tambahanketerangan`) VALUES ('22', '2018-05-01', '11700039', '1', '2 halaman', NULL, '', 'halaman 2-3');
INSERT INTO `tahfidz` (`nourut`, `tanggal`, `nis`, `tambahan`, `murojaah`, `totalhafalan`, `murojaahbaru`, `tambahanketerangan`) VALUES ('23', '2018-05-07', '11700091', '1', '4 halaman', NULL, '4 halaman', 'an-naba');
INSERT INTO `tahfidz` (`nourut`, `tanggal`, `nis`, `tambahan`, `murojaah`, `totalhafalan`, `murojaahbaru`, `tambahanketerangan`) VALUES ('24', '2018-05-07', '11700093', '1', '5 halaman', NULL, '3 halaman', 'an-naba');


#
# TABLE STRUCTURE FOR: tahunajaran
#

DROP TABLE IF EXISTS `tahunajaran`;

CREATE TABLE `tahunajaran` (
  `namatahunajaran` varchar(20) NOT NULL,
  PRIMARY KEY (`namatahunajaran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tahunajaran` (`namatahunajaran`) VALUES ('2014-2015');
INSERT INTO `tahunajaran` (`namatahunajaran`) VALUES ('2015-2016');
INSERT INTO `tahunajaran` (`namatahunajaran`) VALUES ('2016-2017');
INSERT INTO `tahunajaran` (`namatahunajaran`) VALUES ('2017-2018');
INSERT INTO `tahunajaran` (`namatahunajaran`) VALUES ('2018-2019');


#
# TABLE STRUCTURE FOR: test
#

DROP TABLE IF EXISTS `test`;

CREATE TABLE `test` (
  `userid` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `kode_nota` varchar(255) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `test` (`userid`, `password`, `dept`, `kode_nota`) VALUES ('aaa', 'aaa', 'aaa', 'aaa');
INSERT INTO `test` (`userid`, `password`, `dept`, `kode_nota`) VALUES ('qqq', 'qqq', 'qqq', 'qqq');
INSERT INTO `test` (`userid`, `password`, `dept`, `kode_nota`) VALUES ('sadfsf', 'sdfsdf', 'sdfsd', 'sdfsd');
INSERT INTO `test` (`userid`, `password`, `dept`, `kode_nota`) VALUES ('asd', 'sdfsdf', 'sdfsd', 'sdfsd');
INSERT INTO `test` (`userid`, `password`, `dept`, `kode_nota`) VALUES ('asdas', '', '', '');
INSERT INTO `test` (`userid`, `password`, `dept`, `kode_nota`) VALUES ('a', 'a', 'a', 'a');
INSERT INTO `test` (`userid`, `password`, `dept`, `kode_nota`) VALUES ('t', 'a', 'a', 'a');
INSERT INTO `test` (`userid`, `password`, `dept`, `kode_nota`) VALUES ('q', 'q', 'q', 'q');
INSERT INTO `test` (`userid`, `password`, `dept`, `kode_nota`) VALUES ('2', 'a', 'a', 'a');
INSERT INTO `test` (`userid`, `password`, `dept`, `kode_nota`) VALUES ('c', 'a', 'a', 'a');
INSERT INTO `test` (`userid`, `password`, `dept`, `kode_nota`) VALUES ('asdasd', 'as', 'as', 'as');
INSERT INTO `test` (`userid`, `password`, `dept`, `kode_nota`) VALUES ('12', '', '', '');
INSERT INTO `test` (`userid`, `password`, `dept`, `kode_nota`) VALUES ('tttt', '', '', '');
INSERT INTO `test` (`userid`, `password`, `dept`, `kode_nota`) VALUES ('asasd', '', '', '');
INSERT INTO `test` (`userid`, `password`, `dept`, `kode_nota`) VALUES ('sadfasd', '', '', '');
INSERT INTO `test` (`userid`, `password`, `dept`, `kode_nota`) VALUES ('swedf', 'AA', 'AAAA', 'AAA');
INSERT INTO `test` (`userid`, `password`, `dept`, `kode_nota`) VALUES ('asdasdas', 'a', 'a', 'a');
INSERT INTO `test` (`userid`, `password`, `dept`, `kode_nota`) VALUES ('asdasdf SDF', 'a', 'a', 'a');
INSERT INTO `test` (`userid`, `password`, `dept`, `kode_nota`) VALUES ('fdgdfgd', 'a', 'asfda', 'sdfsdf');


#
# TABLE STRUCTURE FOR: uangsakukeluar
#

DROP TABLE IF EXISTS `uangsakukeluar`;

CREATE TABLE `uangsakukeluar` (
  `nonota` double NOT NULL AUTO_INCREMENT,
  `nis` varchar(12) DEFAULT NULL,
  `uangkeluar` double DEFAULT '0',
  `tanggal` datetime DEFAULT NULL,
  `pengguna` varchar(20) DEFAULT NULL,
  `catatan` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`nonota`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `uangsakukeluar` (`nonota`, `nis`, `uangkeluar`, `tanggal`, `pengguna`, `catatan`) VALUES ('1', '11700091', '50000', '2018-05-06 00:00:00', NULL, 'jajan');


#
# TABLE STRUCTURE FOR: user
#

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(30) NOT NULL,
  `username` char(30) NOT NULL,
  `password` mediumtext NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `user` (`id`, `name`, `username`, `password`, `group_id`) VALUES ('1', 'Administrator', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '1');
INSERT INTO `user` (`id`, `name`, `username`, `password`, `group_id`) VALUES ('2', 'Operator', 'operator', 'fe96dd39756ac41b74283a9292652d366d73931f', '2');
INSERT INTO `user` (`id`, `name`, `username`, `password`, `group_id`) VALUES ('3', 'Keuangan', 'keuangan', '1f931595786f2f178358d0af5fe4d75eaee46819', '3');
INSERT INTO `user` (`id`, `name`, `username`, `password`, `group_id`) VALUES ('4', 'Service', 'service', '4cf5bc59bee9e1c44c6254b5f84e7f066bd8e5fe', '4');


#
# TABLE STRUCTURE FOR: user2
#

DROP TABLE IF EXISTS `user2`;

CREATE TABLE `user2` (
  `userid` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dept` char(20) NOT NULL,
  `kodenota` varchar(2) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `user2` (`userid`, `password`, `dept`, `kodenota`) VALUES ('orangtua', 'orangtua', '', 'OT');
INSERT INTO `user2` (`userid`, `password`, `dept`, `kodenota`) VALUES ('guru', 'guru', '', 'GR');
INSERT INTO `user2` (`userid`, `password`, `dept`, `kodenota`) VALUES ('staf', 'staf', '', 'MN');
INSERT INTO `user2` (`userid`, `password`, `dept`, `kodenota`) VALUES ('dokter', 'dokter', '', 'DR');
INSERT INTO `user2` (`userid`, `password`, `dept`, `kodenota`) VALUES ('keuangan', 'keuangan', '', 'KU');
INSERT INTO `user2` (`userid`, `password`, `dept`, `kodenota`) VALUES ('admin', 'admin', '', 'AD');
INSERT INTO `user2` (`userid`, `password`, `dept`, `kodenota`) VALUES ('', '', '', 'AS');
INSERT INTO `user2` (`userid`, `password`, `dept`, `kodenota`) VALUES ('ystef', '', '', 'Qd');
INSERT INTO `user2` (`userid`, `password`, `dept`, `kodenota`) VALUES ('kakak', 'kaka', '', 'Qs');
INSERT INTO `user2` (`userid`, `password`, `dept`, `kodenota`) VALUES ('NN', 'nn', '', 'Qp');
INSERT INTO `user2` (`userid`, `password`, `dept`, `kodenota`) VALUES ('error', 'oo', '', 'QW');


#
# TABLE STRUCTURE FOR: userhalaman
#

DROP TABLE IF EXISTS `userhalaman`;

CREATE TABLE `userhalaman` (
  `noid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) NOT NULL,
  `halaman` varchar(50) NOT NULL,
  PRIMARY KEY (`noid`)
) ENGINE=MyISAM AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;

INSERT INTO `userhalaman` (`noid`, `userid`, `halaman`) VALUES ('39', 'keuangan', 'Nilai-Raport Admin');
INSERT INTO `userhalaman` (`noid`, `userid`, `halaman`) VALUES ('38', 'keuangan', 'Keuangan Admin');
INSERT INTO `userhalaman` (`noid`, `userid`, `halaman`) VALUES ('37', 'keuangan', 'Keuangan');
INSERT INTO `userhalaman` (`noid`, `userid`, `halaman`) VALUES ('36', 'admin', 'Nilai-Raport Admin');
INSERT INTO `userhalaman` (`noid`, `userid`, `halaman`) VALUES ('35', 'admin', 'Nilai-Raport');
INSERT INTO `userhalaman` (`noid`, `userid`, `halaman`) VALUES ('34', 'admin', 'Tahfidz');
INSERT INTO `userhalaman` (`noid`, `userid`, `halaman`) VALUES ('33', 'admin', 'Prestasi');
INSERT INTO `userhalaman` (`noid`, `userid`, `halaman`) VALUES ('32', 'admin', 'Pelanggaran');
INSERT INTO `userhalaman` (`noid`, `userid`, `halaman`) VALUES ('31', 'admin', 'Perizinan');
INSERT INTO `userhalaman` (`noid`, `userid`, `halaman`) VALUES ('30', 'admin', 'Kesehatan');
INSERT INTO `userhalaman` (`noid`, `userid`, `halaman`) VALUES ('29', 'admin', 'Keuangan Admin');
INSERT INTO `userhalaman` (`noid`, `userid`, `halaman`) VALUES ('28', 'admin', 'Keuangan');
INSERT INTO `userhalaman` (`noid`, `userid`, `halaman`) VALUES ('27', 'admin', 'Tata Usaha');
INSERT INTO `userhalaman` (`noid`, `userid`, `halaman`) VALUES ('26', 'admin', 'Admin');
INSERT INTO `userhalaman` (`noid`, `userid`, `halaman`) VALUES ('40', 'dokter', 'Kesehatan');
INSERT INTO `userhalaman` (`noid`, `userid`, `halaman`) VALUES ('41', 'staf', 'Tata Usaha');
INSERT INTO `userhalaman` (`noid`, `userid`, `halaman`) VALUES ('42', 'staf', 'Perizinan');
INSERT INTO `userhalaman` (`noid`, `userid`, `halaman`) VALUES ('43', 'staf', 'Pelanggaran');
INSERT INTO `userhalaman` (`noid`, `userid`, `halaman`) VALUES ('44', 'Guru', 'Tahfidz');
INSERT INTO `userhalaman` (`noid`, `userid`, `halaman`) VALUES ('45', 'Guru', 'Nilai-Raport');
INSERT INTO `userhalaman` (`noid`, `userid`, `halaman`) VALUES ('46', 'Guru', 'Nilai-Raport Admin');
INSERT INTO `userhalaman` (`noid`, `userid`, `halaman`) VALUES ('47', 'orangtua', 'Keuangan');
INSERT INTO `userhalaman` (`noid`, `userid`, `halaman`) VALUES ('48', 'orangtua', 'Kesehatan');
INSERT INTO `userhalaman` (`noid`, `userid`, `halaman`) VALUES ('49', 'orangtua', 'Perizinan');
INSERT INTO `userhalaman` (`noid`, `userid`, `halaman`) VALUES ('50', 'orangtua', 'Pelanggaran');
INSERT INTO `userhalaman` (`noid`, `userid`, `halaman`) VALUES ('51', 'orangtua', 'Prestasi');
INSERT INTO `userhalaman` (`noid`, `userid`, `halaman`) VALUES ('52', 'orangtua', 'Tahfidz');
INSERT INTO `userhalaman` (`noid`, `userid`, `halaman`) VALUES ('53', 'orangtua', 'Nilai-Raport');
INSERT INTO `userhalaman` (`noid`, `userid`, `halaman`) VALUES ('69', 'kakak', 'Perizinan');
INSERT INTO `userhalaman` (`noid`, `userid`, `halaman`) VALUES ('68', 'kakak', 'Kesehatan');
INSERT INTO `userhalaman` (`noid`, `userid`, `halaman`) VALUES ('67', 'kakak', 'Keuangan');
INSERT INTO `userhalaman` (`noid`, `userid`, `halaman`) VALUES ('74', 'staf', 'Tahfidz');


#
# TABLE STRUCTURE FOR: userorangtua
#

DROP TABLE IF EXISTS `userorangtua`;

CREATE TABLE `userorangtua` (
  `nourut` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(200) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`nourut`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: users
#

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(254) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES ('1', '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, '1268889823', '1524467653', '1', 'Admin', 'istrator', 'ADMIN', '0');


#
# TABLE STRUCTURE FOR: usersiswa
#

DROP TABLE IF EXISTS `usersiswa`;

CREATE TABLE `usersiswa` (
  `username` varchar(100) NOT NULL,
  `password` varchar(240) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `usersiswa` (`username`, `password`) VALUES ('11700025', '11700025');
INSERT INTO `usersiswa` (`username`, `password`) VALUES ('11700026', '11700026');


#
# TABLE STRUCTURE FOR: vabsensisiswa
#

DROP TABLE IF EXISTS `vabsensisiswa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`sipy1897`@`localhost` SQL SECURITY DEFINER VIEW `vabsensisiswa` AS select `absen`.`nourut` AS `nourut`,`absen`.`nis` AS `nis`,`absen`.`tanggal` AS `tanggal`,`absen`.`tanggalakhir` AS `tanggalakhir`,`absen`.`sakit` AS `sakit`,`absen`.`ijin` AS `ijin`,`absen`.`alpa` AS `alpa`,`absen`.`catatan` AS `catatan`,`absen`.`pengguna` AS `pengguna`,`siswa`.`namasiswa` AS `namasiswa`,`siswa`.`marhalah` AS `marhalah`,`siswa`.`kelas` AS `kelas` from (`absen` join `siswa` on((`absen`.`nis` = `siswa`.`nis`)));

utf8mb4_unicode_ci;

#
# TABLE STRUCTURE FOR: vdaftarnilaikosong
#

DROP TABLE IF EXISTS `vdaftarnilaikosong`;

CREATE ALGORITHM=UNDEFINED DEFINER=`sipy1897`@`localhost` SQL SECURITY DEFINER VIEW `vdaftarnilaikosong` AS select `setingmapel`.`noid` AS `noid`,`setingmapel`.`kodemapel` AS `kodemapel`,`setingmapel`.`nik` AS `nik`,`setingmapel`.`kelas` AS `kelas`,`siswa`.`namasiswa` AS `namasiswa`,`siswa`.`nis` AS `nis`,`pegawai`.`nama` AS `nama` from ((`setingmapel` join `siswa` on((`setingmapel`.`kelas` = `siswa`.`kelas`))) join `pegawai` on((`setingmapel`.`nik` = `pegawai`.`nik`)));

utf8mb4_unicode_ci;

INSERT INTO `vdaftarnilaikosong` (`noid`, `kodemapel`, `nik`, `kelas`, `namasiswa`, `nis`, `nama`) VALUES ('42', 'MTK', '10014', 'I.B', 'saepudin', '11700091', 'Handoko Tri');
INSERT INTO `vdaftarnilaikosong` (`noid`, `kodemapel`, `nik`, `kelas`, `namasiswa`, `nis`, `nama`) VALUES ('41', 'SKI', '10014', 'I.B', 'saepudin', '11700091', 'Handoko Tri');
INSERT INTO `vdaftarnilaikosong` (`noid`, `kodemapel`, `nik`, `kelas`, `namasiswa`, `nis`, `nama`) VALUES ('40', 'TAU', '10011', 'I.B', 'saepudin', '11700091', 'Abdurrohim');
INSERT INTO `vdaftarnilaikosong` (`noid`, `kodemapel`, `nik`, `kelas`, `namasiswa`, `nis`, `nama`) VALUES ('42', 'MTK', '10014', 'I.B', 'kmu aja', '11700090', 'Handoko Tri');
INSERT INTO `vdaftarnilaikosong` (`noid`, `kodemapel`, `nik`, `kelas`, `namasiswa`, `nis`, `nama`) VALUES ('41', 'SKI', '10014', 'I.B', 'kmu aja', '11700090', 'Handoko Tri');
INSERT INTO `vdaftarnilaikosong` (`noid`, `kodemapel`, `nik`, `kelas`, `namasiswa`, `nis`, `nama`) VALUES ('40', 'TAU', '10011', 'I.B', 'kmu aja', '11700090', 'Abdurrohim');
INSERT INTO `vdaftarnilaikosong` (`noid`, `kodemapel`, `nik`, `kelas`, `namasiswa`, `nis`, `nama`) VALUES ('42', 'MTK', '10014', 'I.B', 'fgfghf', '11700089', 'Handoko Tri');
INSERT INTO `vdaftarnilaikosong` (`noid`, `kodemapel`, `nik`, `kelas`, `namasiswa`, `nis`, `nama`) VALUES ('41', 'SKI', '10014', 'I.B', 'fgfghf', '11700089', 'Handoko Tri');
INSERT INTO `vdaftarnilaikosong` (`noid`, `kodemapel`, `nik`, `kelas`, `namasiswa`, `nis`, `nama`) VALUES ('40', 'TAU', '10011', 'I.B', 'fgfghf', '11700089', 'Abdurrohim');
INSERT INTO `vdaftarnilaikosong` (`noid`, `kodemapel`, `nik`, `kelas`, `namasiswa`, `nis`, `nama`) VALUES ('42', 'MTK', '10014', 'I.B', 'sdfds', '11700087', 'Handoko Tri');
INSERT INTO `vdaftarnilaikosong` (`noid`, `kodemapel`, `nik`, `kelas`, `namasiswa`, `nis`, `nama`) VALUES ('41', 'SKI', '10014', 'I.B', 'sdfds', '11700087', 'Handoko Tri');
INSERT INTO `vdaftarnilaikosong` (`noid`, `kodemapel`, `nik`, `kelas`, `namasiswa`, `nis`, `nama`) VALUES ('40', 'TAU', '10011', 'I.B', 'sdfds', '11700087', 'Abdurrohim');
INSERT INTO `vdaftarnilaikosong` (`noid`, `kodemapel`, `nik`, `kelas`, `namasiswa`, `nis`, `nama`) VALUES ('42', 'MTK', '10014', 'I.B', 'SFBD', '11700088', 'Handoko Tri');
INSERT INTO `vdaftarnilaikosong` (`noid`, `kodemapel`, `nik`, `kelas`, `namasiswa`, `nis`, `nama`) VALUES ('41', 'SKI', '10014', 'I.B', 'SFBD', '11700088', 'Handoko Tri');
INSERT INTO `vdaftarnilaikosong` (`noid`, `kodemapel`, `nik`, `kelas`, `namasiswa`, `nis`, `nama`) VALUES ('40', 'TAU', '10011', 'I.B', 'SFBD', '11700088', 'Abdurrohim');


#
# TABLE STRUCTURE FOR: vjurnal
#

DROP TABLE IF EXISTS `vjurnal`;

CREATE ALGORITHM=UNDEFINED DEFINER=`sipy1897`@`localhost` SQL SECURITY DEFINER VIEW `vjurnal` AS select `jurnal`.`nourut` AS `nourut`,`jurnal`.`tanggal` AS `tanggal`,`jurnal`.`nonota` AS `nonota`,`jurnal`.`koderekening` AS `koderekening`,`jurnal`.`debet` AS `debet`,`jurnal`.`kredit` AS `kredit`,`jurnal`.`keterangan` AS `keterangan`,`jurnal`.`pengguna` AS `pengguna`,`rekening`.`namarekening` AS `namarekening`,`rekening`.`normal` AS `normal` from (`jurnal` join `rekening` on((`jurnal`.`koderekening` = `rekening`.`koderekening`)));

utf8mb4_unicode_ci;

INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('1', '2018-05-06', '1', '600000', '0', '100000', 'SPP Bulan januari', 'kosongan', 'PENDAPATAN SPP', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('2', '2018-05-06', '1', '600000', '0', '100000', 'SPP Bulan februari', 'kosongan', 'PENDAPATAN SPP', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('3', '2018-05-06', '1', '600001', '0', '100000', '11700091', 'kosongan', 'PENDAPATAN UANG PANGKAL', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('4', '2018-05-06', '1', '600002', '0', '100000', '11700091', 'kosongan', 'PENDAPATAN DAFTAR ULANG', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('5', '2018-05-06', '1', '600005', '0', '100000', '11700091', 'kosongan', 'PENDAPATAN INFAQ', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('6', '2018-05-06', '1', '400002', '0', '500000', '11700091', 'kosongan', 'DEPOSIT UANG SAKU', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('7', '2018-05-06', '1', '400008', '0', '100000', '11700091', 'kosongan', 'DEPOSIT BIMBEL', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('8', '2018-05-06', '1', '200001', '1100000', '0', '11700091', 'kosongan', 'BANK BNI', '1');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('9', '2018-05-06', '2', '600000', '0', '100000', 'SPP Bulan januari', 'kosongan', 'PENDAPATAN SPP', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('10', '2018-05-06', '2', '600000', '0', '100000', 'SPP Bulan februari', 'kosongan', 'PENDAPATAN SPP', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('11', '2018-05-06', '2', '600001', '0', '100000', '11700093', 'kosongan', 'PENDAPATAN UANG PANGKAL', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('12', '2018-05-06', '2', '600002', '0', '100000', '11700093', 'kosongan', 'PENDAPATAN DAFTAR ULANG', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('13', '2018-05-06', '2', '600005', '0', '100000', '11700093', 'kosongan', 'PENDAPATAN INFAQ', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('14', '2018-05-06', '2', '400002', '0', '250000', '11700093', 'kosongan', 'DEPOSIT UANG SAKU', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('15', '2018-05-06', '2', '400008', '0', '100000', '11700093', 'kosongan', 'DEPOSIT BIMBEL', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('16', '2018-05-06', '2', '100099', '850000', '0', '11700093', 'kosongan', 'KAS', '1');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('17', '2018-05-06', '3', '600000', '0', '100000', 'SPP Bulan maret', 'kosongan', 'PENDAPATAN SPP', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('18', '2018-05-06', '3', '600000', '0', '100000', 'SPP Bulan april', 'kosongan', 'PENDAPATAN SPP', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('19', '2018-05-06', '3', '600005', '0', '100000', '11700091', 'kosongan', 'PENDAPATAN INFAQ', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('20', '2018-05-06', '3', '400002', '0', '120000', '11700091', 'kosongan', 'DEPOSIT UANG SAKU', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('21', '2018-05-06', '3', '200001', '420000', '0', '11700091', 'kosongan', 'BANK BNI', '1');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('22', '2018-05-06', '4', '600000', '0', '100000', 'SPP Bulan maret', 'kosongan', 'PENDAPATAN SPP', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('23', '2018-05-06', '4', '600005', '0', '150000', '11700093', 'kosongan', 'PENDAPATAN INFAQ', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('24', '2018-05-06', '4', '400002', '0', '200000', '11700093', 'kosongan', 'DEPOSIT UANG SAKU', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('25', '2018-05-06', '4', '100099', '450000', '0', '11700093', 'kosongan', 'KAS', '1');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('26', '2018-05-06', '5', '600000', '0', '100000', 'SPP Bulan maret', 'kosongan', 'PENDAPATAN SPP', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('27', '2018-05-06', '5', '600005', '0', '150000', '11700093', 'kosongan', 'PENDAPATAN INFAQ', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('28', '2018-05-06', '5', '400002', '0', '200000', '11700093', 'kosongan', 'DEPOSIT UANG SAKU', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('29', '2018-05-06', '5', '100099', '450000', '0', '11700093', 'kosongan', 'KAS', '1');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('30', '2018-05-06', '6', '600000', '0', '50000', 'SPP Bulan maret', 'kosongan', 'PENDAPATAN SPP', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('31', '2018-05-06', '6', '600005', '0', '200000', '11700070', 'kosongan', 'PENDAPATAN INFAQ', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('32', '2018-05-06', '6', '400002', '0', '250000', '11700070', 'kosongan', 'DEPOSIT UANG SAKU', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('33', '2018-05-06', '6', '200001', '500000', '0', '11700070', 'kosongan', 'BANK BNI', '1');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('34', '2018-05-06', '7', '600005', '0', '100', '11700090', 'kosongan', 'PENDAPATAN INFAQ', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('35', '2018-05-06', '7', '400002', '0', '10000', '11700090', 'kosongan', 'DEPOSIT UANG SAKU', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('36', '2018-05-06', '7', '100099', '10100', '0', '11700090', 'kosongan', 'KAS', '1');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('37', '2018-05-06', '8', '400002', '0', '20000', '11700091', 'kosongan', 'DEPOSIT UANG SAKU', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('38', '2018-05-06', '8', '400008', '0', '1200', '11700091', 'kosongan', 'DEPOSIT BIMBEL', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('39', '2018-05-06', '8', '100099', '21200', '0', '11700091', 'kosongan', 'KAS', '1');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('40', '2018-05-06', '9', '400002', '0', '1000', '11700091', 'kosongan', 'DEPOSIT UANG SAKU', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('41', '2018-05-06', '9', '100099', '1000', '0', '11700091', 'kosongan', 'KAS', '1');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('42', '0000-00-00', '', '100099', '0', '0', '', 'kosongan', 'KAS', '1');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('43', '2018-05-08', '11', '600000', '0', '100000', 'SPP Bulan agustus', 'kosongan', 'PENDAPATAN SPP', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('44', '2018-05-08', '11', '600002', '0', '34000', '11700091', 'kosongan', 'PENDAPATAN DAFTAR ULANG', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('45', '2018-05-08', '11', '400002', '0', '20000', '11700091', 'kosongan', 'DEPOSIT UANG SAKU', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('46', '2018-05-08', '11', '400008', '0', '3000', '11700091', 'kosongan', 'DEPOSIT BIMBEL', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('47', '2018-05-08', '11', '100099', '157000', '0', '11700091', 'kosongan', 'KAS', '1');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('48', '2018-05-08', '12', '400002', '0', '2000', '11700091', 'kosongan', 'DEPOSIT UANG SAKU', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('49', '2018-05-08', '12', '400008', '0', '3455', '11700091', 'kosongan', 'DEPOSIT BIMBEL', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('50', '2018-05-08', '12', '100099', '5455', '0', '11700091', 'kosongan', 'KAS', '1');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('51', '2018-05-08', '13', '100099', '0', '0', '11700091', 'kosongan', 'KAS', '1');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('52', '2018-05-14', '14', '600000', '0', '100000', 'SPP Bulan mei', 'kosongan', 'PENDAPATAN SPP', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('53', '2018-05-14', '14', '400002', '0', '200000', '11700091', 'kosongan', 'DEPOSIT UANG SAKU', '0');
INSERT INTO `vjurnal` (`nourut`, `tanggal`, `nonota`, `koderekening`, `debet`, `kredit`, `keterangan`, `pengguna`, `namarekening`, `normal`) VALUES ('54', '2018-05-14', '14', '100099', '300000', '0', '11700091', 'kosongan', 'KAS', '1');


#
# TABLE STRUCTURE FOR: vkesehatan
#

DROP TABLE IF EXISTS `vkesehatan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`sipy1897`@`localhost` SQL SECURITY DEFINER VIEW `vkesehatan` AS select `kesehatan`.`nourut` AS `nourut`,`kesehatan`.`tanggal` AS `tanggal`,`kesehatan`.`nis` AS `nis`,`kesehatan`.`keluhan` AS `keluhan`,`kesehatan`.`obat` AS `obat`,`kesehatan`.`catatan` AS `catatan`,`kesehatan`.`keparahan` AS `keparahan`,`kesehatan`.`pengguna` AS `pengguna`,`siswa`.`namasiswa` AS `namasiswa`,`siswa`.`marhalah` AS `marhalah`,`siswa`.`kelas` AS `kelas` from (`kesehatan` join `siswa` on((`kesehatan`.`nis` = `siswa`.`nis`)));

utf8mb4_unicode_ci;

INSERT INTO `vkesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`, `namasiswa`, `marhalah`, `kelas`) VALUES ('70', '2018-05-06', '11700091', 'Lemas', 'Istirahat saja', 'tidak ada catatan', NULL, '', 'saepudin', 'MTS', 'I.B');
INSERT INTO `vkesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`, `namasiswa`, `marhalah`, `kelas`) VALUES ('71', '2018-05-06', '11700093', 'Pusing Pusing', 'Paramex', 'Berobat Ke Rumah Sakit selama 1 Hari', NULL, '', 'ganbaro minna', NULL, 'I.C');
INSERT INTO `vkesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`, `namasiswa`, `marhalah`, `kelas`) VALUES ('72', '2018-05-06', '11700070', 'Lemas', 'Istirahat saja', 'ASDFASD', NULL, '', 'Handoko Tri', NULL, NULL);
INSERT INTO `vkesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`, `namasiswa`, `marhalah`, `kelas`) VALUES ('73', '2018-05-06', '11700091', 'Pusing Pusing', 'Paramex', '-', NULL, '', 'saepudin', 'MTS', 'I.B');
INSERT INTO `vkesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`, `namasiswa`, `marhalah`, `kelas`) VALUES ('74', '2018-05-06', '11700090', 'Lemas', 'Istirahat saja', 'tidak ada catatan', NULL, '', 'kmu aja', NULL, 'I.B');
INSERT INTO `vkesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`, `namasiswa`, `marhalah`, `kelas`) VALUES ('75', '2018-05-06', '11700091', 'Lemas', 'qqqqq', 'asdf', NULL, '', 'saepudin', 'MTS', 'I.B');
INSERT INTO `vkesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`, `namasiswa`, `marhalah`, `kelas`) VALUES ('76', '2018-05-06', '11700093', 'Lemas', 'www', 'alkdsfalksjdf', NULL, '', 'ganbaro minna', NULL, 'I.C');
INSERT INTO `vkesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`, `namasiswa`, `marhalah`, `kelas`) VALUES ('77', '2018-05-06', '11700090', 'www', 'qqq', 'jajan', NULL, '', 'kmu aja', NULL, 'I.B');
INSERT INTO `vkesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`, `namasiswa`, `marhalah`, `kelas`) VALUES ('78', '2018-05-06', '11700083', 'Lemas', 'qqqqq', 'ASDF', NULL, '', 'asdads', NULL, NULL);
INSERT INTO `vkesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`, `namasiswa`, `marhalah`, `kelas`) VALUES ('79', '2018-05-06', '11700070', 'www', 'qqq', 'Di UKP', NULL, '', 'Handoko Tri', NULL, NULL);
INSERT INTO `vkesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`, `namasiswa`, `marhalah`, `kelas`) VALUES ('80', '2018-05-06', '11700087', 'Pusing Pusing', 'www', 'tidak ada catatan', NULL, '', 'sdfds', NULL, 'I.B');
INSERT INTO `vkesehatan` (`nourut`, `tanggal`, `nis`, `keluhan`, `obat`, `catatan`, `keparahan`, `pengguna`, `namasiswa`, `marhalah`, `kelas`) VALUES ('81', '2018-05-06', '11700091', 'Lemas', 'qqqqq', 'tidak ada catatan', NULL, '', 'saepudin', 'MTS', 'I.B');


#
# TABLE STRUCTURE FOR: vmonitoringspp
#

DROP TABLE IF EXISTS `vmonitoringspp`;

CREATE ALGORITHM=UNDEFINED DEFINER=`sipy1897`@`localhost` SQL SECURITY DEFINER VIEW `vmonitoringspp` AS select `monitoringspp`.`nis` AS `nis`,`monitoringspp`.`setpoin` AS `setpoin`,`monitoringspp`.`kesanggupan` AS `kesanggupan`,`monitoringspp`.`juli` AS `juli`,`monitoringspp`.`agustus` AS `agustus`,`monitoringspp`.`september` AS `september`,`monitoringspp`.`oktober` AS `oktober`,`monitoringspp`.`november` AS `november`,`monitoringspp`.`desember` AS `desember`,`monitoringspp`.`januari` AS `januari`,`monitoringspp`.`februari` AS `februari`,`monitoringspp`.`maret` AS `maret`,`monitoringspp`.`april` AS `april`,`monitoringspp`.`mei` AS `mei`,`monitoringspp`.`juni` AS `juni`,`monitoringspp`.`piutang` AS `piutang`,`monitoringspp`.`juli2` AS `juli2`,`monitoringspp`.`agustus2` AS `agustus2`,`siswa`.`namasiswa` AS `namasiswa`,`siswa`.`marhalah` AS `marhalah`,`siswa`.`kelas` AS `kelas`,`siswa`.`namaayah` AS `namaayah`,`siswa`.`namaibu` AS `namaibu` from (`monitoringspp` join `siswa` on((`monitoringspp`.`nis` = `siswa`.`nis`)));

utf8mb4_unicode_ci;

INSERT INTO `vmonitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`, `namasiswa`, `marhalah`, `kelas`, `namaayah`, `namaibu`) VALUES ('11700070', '0', '0', '50000', NULL, '50000', '50000', NULL, '50000', '50000', '50000', '50000', NULL, NULL, '50000', NULL, NULL, NULL, 'Handoko Tri', NULL, NULL, NULL, NULL);
INSERT INTO `vmonitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`, `namasiswa`, `marhalah`, `kelas`, `namaayah`, `namaibu`) VALUES ('11700073', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'asdasd', NULL, 'X.A', NULL, NULL);
INSERT INTO `vmonitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`, `namasiswa`, `marhalah`, `kelas`, `namaayah`, `namaibu`) VALUES ('11700074', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'asdsad', NULL, 'X.A', NULL, NULL);
INSERT INTO `vmonitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`, `namasiswa`, `marhalah`, `kelas`, `namaayah`, `namaibu`) VALUES ('11700075', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sddsf', NULL, 'X.A', NULL, NULL);
INSERT INTO `vmonitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`, `namasiswa`, `marhalah`, `kelas`, `namaayah`, `namaibu`) VALUES ('11700077', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'asdas', NULL, NULL, NULL, NULL);
INSERT INTO `vmonitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`, `namasiswa`, `marhalah`, `kelas`, `namaayah`, `namaibu`) VALUES ('11700078', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'asdas', NULL, NULL, NULL, NULL);
INSERT INTO `vmonitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`, `namasiswa`, `marhalah`, `kelas`, `namaayah`, `namaibu`) VALUES ('11700079', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'asda', NULL, NULL, NULL, NULL);
INSERT INTO `vmonitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`, `namasiswa`, `marhalah`, `kelas`, `namaayah`, `namaibu`) VALUES ('11700080', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'asdasd', NULL, NULL, NULL, NULL);
INSERT INTO `vmonitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`, `namasiswa`, `marhalah`, `kelas`, `namaayah`, `namaibu`) VALUES ('11700081', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'asdas', NULL, NULL, NULL, NULL);
INSERT INTO `vmonitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`, `namasiswa`, `marhalah`, `kelas`, `namaayah`, `namaibu`) VALUES ('11700082', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'asds', NULL, NULL, NULL, NULL);
INSERT INTO `vmonitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`, `namasiswa`, `marhalah`, `kelas`, `namaayah`, `namaibu`) VALUES ('11700083', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'asdads', NULL, NULL, 'sdsadf', NULL);
INSERT INTO `vmonitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`, `namasiswa`, `marhalah`, `kelas`, `namaayah`, `namaibu`) VALUES ('11700085', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'asdasd', NULL, NULL, NULL, NULL);
INSERT INTO `vmonitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`, `namasiswa`, `marhalah`, `kelas`, `namaayah`, `namaibu`) VALUES ('11700086', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'asdasd', NULL, NULL, 'sdfds', 'sdfsd');
INSERT INTO `vmonitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`, `namasiswa`, `marhalah`, `kelas`, `namaayah`, `namaibu`) VALUES ('11700087', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdfds', NULL, 'I.B', 'sdfsd', 'sdfdsfdsf');
INSERT INTO `vmonitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`, `namasiswa`, `marhalah`, `kelas`, `namaayah`, `namaibu`) VALUES ('11700088', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SFBD', NULL, 'I.B', NULL, NULL);
INSERT INTO `vmonitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`, `namasiswa`, `marhalah`, `kelas`, `namaayah`, `namaibu`) VALUES ('11700089', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fgfghf', NULL, 'I.B', NULL, NULL);
INSERT INTO `vmonitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`, `namasiswa`, `marhalah`, `kelas`, `namaayah`, `namaibu`) VALUES ('11700090', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kmu aja', NULL, 'I.B', NULL, NULL);
INSERT INTO `vmonitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`, `namasiswa`, `marhalah`, `kelas`, `namaayah`, `namaibu`) VALUES ('11700091', '0', '0', NULL, '100000', NULL, NULL, NULL, NULL, '100000', '100000', '100000', '100000', '100000', NULL, NULL, NULL, NULL, 'saepudin', 'MTS', 'I.B', 'painem', 'tukinah');
INSERT INTO `vmonitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`, `namasiswa`, `marhalah`, `kelas`, `namaayah`, `namaibu`) VALUES ('11700093', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, '100000', '100000', '100000', NULL, NULL, NULL, NULL, NULL, NULL, 'ganbaro minna', NULL, 'I.C', NULL, NULL);
INSERT INTO `vmonitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`, `namasiswa`, `marhalah`, `kelas`, `namaayah`, `namaibu`) VALUES ('11700094', '1000000', '1000000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Muhammad Hakim Almadani', 'MA', 'IX.A', 'Abdullah', 'aisyah');
INSERT INTO `vmonitoringspp` (`nis`, `setpoin`, `kesanggupan`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `piutang`, `juli2`, `agustus2`, `namasiswa`, `marhalah`, `kelas`, `namaayah`, `namaibu`) VALUES ('11700095', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'vhcghchv', NULL, NULL, NULL, NULL);


#
# TABLE STRUCTURE FOR: vneracasaldo
#

DROP TABLE IF EXISTS `vneracasaldo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`sipy1897`@`localhost` SQL SECURITY DEFINER VIEW `vneracasaldo` AS select sum(`jurnal`.`debet`) AS `totdebet`,sum(`jurnal`.`kredit`) AS `totkredit`,`jurnal`.`koderekening` AS `koderekening`,`rekening`.`namarekening` AS `namarekening` from (`jurnal` join `rekening` on((`jurnal`.`koderekening` = `rekening`.`koderekening`))) group by `jurnal`.`koderekening`,`rekening`.`namarekening`;

utf8mb4_unicode_ci;

INSERT INTO `vneracasaldo` (`totdebet`, `totkredit`, `koderekening`, `namarekening`) VALUES ('2244755', '0', '100099', 'KAS');
INSERT INTO `vneracasaldo` (`totdebet`, `totkredit`, `koderekening`, `namarekening`) VALUES ('2020000', '0', '200001', 'BANK BNI');
INSERT INTO `vneracasaldo` (`totdebet`, `totkredit`, `koderekening`, `namarekening`) VALUES ('0', '1773000', '400002', 'DEPOSIT UANG SAKU');
INSERT INTO `vneracasaldo` (`totdebet`, `totkredit`, `koderekening`, `namarekening`) VALUES ('0', '207655', '400008', 'DEPOSIT BIMBEL');
INSERT INTO `vneracasaldo` (`totdebet`, `totkredit`, `koderekening`, `namarekening`) VALUES ('0', '1050000', '600000', 'PENDAPATAN SPP');
INSERT INTO `vneracasaldo` (`totdebet`, `totkredit`, `koderekening`, `namarekening`) VALUES ('0', '200000', '600001', 'PENDAPATAN UANG PANGKAL');
INSERT INTO `vneracasaldo` (`totdebet`, `totkredit`, `koderekening`, `namarekening`) VALUES ('0', '234000', '600002', 'PENDAPATAN DAFTAR ULANG');
INSERT INTO `vneracasaldo` (`totdebet`, `totkredit`, `koderekening`, `namarekening`) VALUES ('0', '800100', '600005', 'PENDAPATAN INFAQ');


#
# TABLE STRUCTURE FOR: vnilai
#

DROP TABLE IF EXISTS `vnilai`;

CREATE ALGORITHM=UNDEFINED DEFINER=`sipy1897`@`localhost` SQL SECURITY DEFINER VIEW `vnilai` AS select `nilai2`.`id` AS `id`,`nilai2`.`nis` AS `nis`,`nilai2`.`mapel` AS `mapel`,`nilai2`.`nilai` AS `nilai`,`nilai2`.`settingmapel_id` AS `settingmapel_id`,`siswa`.`namasiswa` AS `namasiswa`,`siswa`.`kelas` AS `kelas`,`vsetingmapel`.`namamapel` AS `namamapel`,`vsetingmapel`.`nama` AS `nama`,`vsetingmapel`.`kodemapel` AS `kodemapel`,`vsetingmapel`.`nik` AS `nik` from ((`nilai2` join `siswa` on((`nilai2`.`nis` = `siswa`.`nis`))) join `vsetingmapel` on((`nilai2`.`settingmapel_id` = `vsetingmapel`.`noid`)));

utf8mb4_unicode_ci;

INSERT INTO `vnilai` (`id`, `nis`, `mapel`, `nilai`, `settingmapel_id`, `namasiswa`, `kelas`, `namamapel`, `nama`, `kodemapel`, `nik`) VALUES ('136', '11700087', '', '75', '41', 'sdfds', 'I.B', 'sejarah kebudayaan islam', 'Handoko Tri', 'SKI', '10014');
INSERT INTO `vnilai` (`id`, `nis`, `mapel`, `nilai`, `settingmapel_id`, `namasiswa`, `kelas`, `namamapel`, `nama`, `kodemapel`, `nik`) VALUES ('135', '11700091', '', '90', '41', 'saepudin', 'I.B', 'sejarah kebudayaan islam', 'Handoko Tri', 'SKI', '10014');
INSERT INTO `vnilai` (`id`, `nis`, `mapel`, `nilai`, `settingmapel_id`, `namasiswa`, `kelas`, `namamapel`, `nama`, `kodemapel`, `nik`) VALUES ('134', '11700090', '', '80', '41', 'kmu aja', 'I.B', 'sejarah kebudayaan islam', 'Handoko Tri', 'SKI', '10014');
INSERT INTO `vnilai` (`id`, `nis`, `mapel`, `nilai`, `settingmapel_id`, `namasiswa`, `kelas`, `namamapel`, `nama`, `kodemapel`, `nik`) VALUES ('133', '11700089', '', '100', '41', 'fgfghf', 'I.B', 'sejarah kebudayaan islam', 'Handoko Tri', 'SKI', '10014');
INSERT INTO `vnilai` (`id`, `nis`, `mapel`, `nilai`, `settingmapel_id`, `namasiswa`, `kelas`, `namamapel`, `nama`, `kodemapel`, `nik`) VALUES ('132', '11700087', '', '85', '42', 'sdfds', 'I.B', 'MATEMATIKA', 'Handoko Tri', 'MTK', '10014');
INSERT INTO `vnilai` (`id`, `nis`, `mapel`, `nilai`, `settingmapel_id`, `namasiswa`, `kelas`, `namamapel`, `nama`, `kodemapel`, `nik`) VALUES ('131', '11700091', '', '78', '42', 'saepudin', 'I.B', 'MATEMATIKA', 'Handoko Tri', 'MTK', '10014');
INSERT INTO `vnilai` (`id`, `nis`, `mapel`, `nilai`, `settingmapel_id`, `namasiswa`, `kelas`, `namamapel`, `nama`, `kodemapel`, `nik`) VALUES ('130', '11700090', '', '87', '42', 'kmu aja', 'I.B', 'MATEMATIKA', 'Handoko Tri', 'MTK', '10014');
INSERT INTO `vnilai` (`id`, `nis`, `mapel`, `nilai`, `settingmapel_id`, `namasiswa`, `kelas`, `namamapel`, `nama`, `kodemapel`, `nik`) VALUES ('129', '11700089', '', '89', '42', 'fgfghf', 'I.B', 'MATEMATIKA', 'Handoko Tri', 'MTK', '10014');
INSERT INTO `vnilai` (`id`, `nis`, `mapel`, `nilai`, `settingmapel_id`, `namasiswa`, `kelas`, `namamapel`, `nama`, `kodemapel`, `nik`) VALUES ('128', '11700087', '', '80', '40', 'sdfds', 'I.B', 'TAUHID', 'Abdurrohim', 'TAU', '10011');
INSERT INTO `vnilai` (`id`, `nis`, `mapel`, `nilai`, `settingmapel_id`, `namasiswa`, `kelas`, `namamapel`, `nama`, `kodemapel`, `nik`) VALUES ('127', '11700091', '', '98', '40', 'saepudin', 'I.B', 'TAUHID', 'Abdurrohim', 'TAU', '10011');
INSERT INTO `vnilai` (`id`, `nis`, `mapel`, `nilai`, `settingmapel_id`, `namasiswa`, `kelas`, `namamapel`, `nama`, `kodemapel`, `nik`) VALUES ('126', '11700090', '', '75', '40', 'kmu aja', 'I.B', 'TAUHID', 'Abdurrohim', 'TAU', '10011');
INSERT INTO `vnilai` (`id`, `nis`, `mapel`, `nilai`, `settingmapel_id`, `namasiswa`, `kelas`, `namamapel`, `nama`, `kodemapel`, `nik`) VALUES ('125', '11700089', '', '80', '40', 'fgfghf', 'I.B', 'TAUHID', 'Abdurrohim', 'TAU', '10011');


#
# TABLE STRUCTURE FOR: vnilairata
#

DROP TABLE IF EXISTS `vnilairata`;

CREATE ALGORITHM=UNDEFINED DEFINER=`sipy1897`@`localhost` SQL SECURITY DEFINER VIEW `vnilairata` AS select `vnilai`.`nis` AS `nis`,`vnilai`.`namasiswa` AS `namasiswa`,`vnilai`.`kelas` AS `kelas`,sum(`vnilai`.`nilai`) AS `totnilai`,count(`vnilai`.`nilai`) AS `totmapel`,(sum(`vnilai`.`nilai`) / count(`vnilai`.`nilai`)) AS `ratanilai` from `vnilai` group by `vnilai`.`nis`,`vnilai`.`namasiswa`,`vnilai`.`kelas`;

utf8mb4_unicode_ci;

INSERT INTO `vnilairata` (`nis`, `namasiswa`, `kelas`, `totnilai`, `totmapel`, `ratanilai`) VALUES ('11700087', 'sdfds', 'I.B', '240', '3', '80.0000');
INSERT INTO `vnilairata` (`nis`, `namasiswa`, `kelas`, `totnilai`, `totmapel`, `ratanilai`) VALUES ('11700089', 'fgfghf', 'I.B', '269', '3', '89.6667');
INSERT INTO `vnilairata` (`nis`, `namasiswa`, `kelas`, `totnilai`, `totmapel`, `ratanilai`) VALUES ('11700090', 'kmu aja', 'I.B', '242', '3', '80.6667');
INSERT INTO `vnilairata` (`nis`, `namasiswa`, `kelas`, `totnilai`, `totmapel`, `ratanilai`) VALUES ('11700091', 'saepudin', 'I.B', '266', '3', '88.6667');


#
# TABLE STRUCTURE FOR: vpelanggaran
#

DROP TABLE IF EXISTS `vpelanggaran`;

CREATE ALGORITHM=UNDEFINED DEFINER=`sipy1897`@`localhost` SQL SECURITY DEFINER VIEW `vpelanggaran` AS select `pelanggaran`.`nourut` AS `nourut`,`pelanggaran`.`tanggal` AS `tanggal`,`pelanggaran`.`nis` AS `nis`,`pelanggaran`.`namapelanggaran` AS `namapelanggaran`,`pelanggaran`.`tindakan` AS `tindakan`,`pelanggaran`.`poin` AS `poin`,`pelanggaran`.`pengguna` AS `pengguna`,`siswa`.`namasiswa` AS `namasiswa`,`siswa`.`marhalah` AS `marhalah`,`siswa`.`kelas` AS `kelas` from (`pelanggaran` join `siswa` on((`pelanggaran`.`nis` = `siswa`.`nis`)));

utf8mb4_unicode_ci;

INSERT INTO `vpelanggaran` (`nourut`, `tanggal`, `nis`, `namapelanggaran`, `tindakan`, `poin`, `pengguna`, `namasiswa`, `marhalah`, `kelas`) VALUES ('15', '2018-05-01', '11700073', 'wefs', 'sdfsdf', '1', '', 'asdasd', NULL, 'X.A');
INSERT INTO `vpelanggaran` (`nourut`, `tanggal`, `nis`, `namapelanggaran`, `tindakan`, `poin`, `pengguna`, `namasiswa`, `marhalah`, `kelas`) VALUES ('16', '2018-05-01', '11700074', 'dfgff', 'dfgd', '1', '', 'asdsad', NULL, 'X.A');
INSERT INTO `vpelanggaran` (`nourut`, `tanggal`, `nis`, `namapelanggaran`, `tindakan`, `poin`, `pengguna`, `namasiswa`, `marhalah`, `kelas`) VALUES ('17', '2018-05-01', '11700073', 'dsfgd', 'dfgdf', '1', '', 'asdasd', NULL, 'X.A');
INSERT INTO `vpelanggaran` (`nourut`, `tanggal`, `nis`, `namapelanggaran`, `tindakan`, `poin`, `pengguna`, `namasiswa`, `marhalah`, `kelas`) VALUES ('18', '2018-05-01', '11700073', 'sdfsd', 'sdfsdf', '1', '', 'asdasd', NULL, 'X.A');


#
# TABLE STRUCTURE FOR: vpenerimaan
#

DROP TABLE IF EXISTS `vpenerimaan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`sipy1897`@`localhost` SQL SECURITY DEFINER VIEW `vpenerimaan` AS select `bayarrutin`.`nis` AS `nis`,`bayarrutin`.`tanggal` AS `tanggal`,`bayarrutin`.`nonota` AS `nonota`,`bayarrutin`.`transfer` AS `transfer`,`bayarrutin`.`pengguna` AS `pengguna`,`bayarrutin`.`tanggaldokumen` AS `tanggaldokumen`,((((((((((((((((`bayarrutin`.`januari` + `bayarrutin`.`februari`) + `bayarrutin`.`maret`) + `bayarrutin`.`april`) + `bayarrutin`.`mei`) + `bayarrutin`.`juni`) + `bayarrutin`.`juli`) + `bayarrutin`.`agustus`) + `bayarrutin`.`september`) + `bayarrutin`.`oktober`) + `bayarrutin`.`november`) + `bayarrutin`.`desember`) + `bayarrutin`.`uangpangkal`) + `bayarrutin`.`daftarulang`) + `bayarrutin`.`infaq`) + `bayarrutin`.`uangsakumasuk`) + `bayarrutin`.`bimbel`) AS `total`,`siswa`.`namasiswa` AS `namasiswa`,`siswa`.`kelas` AS `kelas`,`siswa`.`namaayah` AS `namaayah`,`siswa`.`telephon` AS `telephon` from (`bayarrutin` join `siswa` on((`bayarrutin`.`nis` = `siswa`.`nis`)));

utf8mb4_unicode_ci;

INSERT INTO `vpenerimaan` (`nis`, `tanggal`, `nonota`, `transfer`, `pengguna`, `tanggaldokumen`, `total`, `namasiswa`, `kelas`, `namaayah`, `telephon`) VALUES ('11700091', '2018-05-06', '1', 'TRANSFER', 'admin', '0000-00-00', '1100000', 'saepudin', 'I.B', 'painem', '00000000001');
INSERT INTO `vpenerimaan` (`nis`, `tanggal`, `nonota`, `transfer`, `pengguna`, `tanggaldokumen`, `total`, `namasiswa`, `kelas`, `namaayah`, `telephon`) VALUES ('11700093', '2018-05-06', '2', 'CASH', 'admin', '0000-00-00', '850000', 'ganbaro minna', 'I.C', NULL, NULL);
INSERT INTO `vpenerimaan` (`nis`, `tanggal`, `nonota`, `transfer`, `pengguna`, `tanggaldokumen`, `total`, `namasiswa`, `kelas`, `namaayah`, `telephon`) VALUES ('11700091', '2018-05-06', '3', 'TRANSFER', 'admin', '0000-00-00', '420000', 'saepudin', 'I.B', 'painem', '00000000001');
INSERT INTO `vpenerimaan` (`nis`, `tanggal`, `nonota`, `transfer`, `pengguna`, `tanggaldokumen`, `total`, `namasiswa`, `kelas`, `namaayah`, `telephon`) VALUES ('11700093', '2018-05-06', '4', 'CASH', 'admin', '0000-00-00', '450000', 'ganbaro minna', 'I.C', NULL, NULL);
INSERT INTO `vpenerimaan` (`nis`, `tanggal`, `nonota`, `transfer`, `pengguna`, `tanggaldokumen`, `total`, `namasiswa`, `kelas`, `namaayah`, `telephon`) VALUES ('11700093', '2018-05-06', '5', 'CASH', 'admin', '0000-00-00', '450000', 'ganbaro minna', 'I.C', NULL, NULL);
INSERT INTO `vpenerimaan` (`nis`, `tanggal`, `nonota`, `transfer`, `pengguna`, `tanggaldokumen`, `total`, `namasiswa`, `kelas`, `namaayah`, `telephon`) VALUES ('11700070', '2018-05-06', '6', 'TRANSFER', 'admin', '0000-00-00', '500000', 'Handoko Tri', NULL, NULL, NULL);
INSERT INTO `vpenerimaan` (`nis`, `tanggal`, `nonota`, `transfer`, `pengguna`, `tanggaldokumen`, `total`, `namasiswa`, `kelas`, `namaayah`, `telephon`) VALUES ('11700090', '2018-05-06', '7', 'CASH', 'admin', '0000-00-00', '10100', 'kmu aja', 'I.B', NULL, NULL);
INSERT INTO `vpenerimaan` (`nis`, `tanggal`, `nonota`, `transfer`, `pengguna`, `tanggaldokumen`, `total`, `namasiswa`, `kelas`, `namaayah`, `telephon`) VALUES ('11700091', '2018-05-06', '8', 'CASH', 'admin', '0000-00-00', '21200', 'saepudin', 'I.B', 'painem', '00000000001');
INSERT INTO `vpenerimaan` (`nis`, `tanggal`, `nonota`, `transfer`, `pengguna`, `tanggaldokumen`, `total`, `namasiswa`, `kelas`, `namaayah`, `telephon`) VALUES ('11700091', '2018-05-06', '9', 'CASH', 'admin', '0000-00-00', '1000', 'saepudin', 'I.B', 'painem', '00000000001');
INSERT INTO `vpenerimaan` (`nis`, `tanggal`, `nonota`, `transfer`, `pengguna`, `tanggaldokumen`, `total`, `namasiswa`, `kelas`, `namaayah`, `telephon`) VALUES ('11700091', '2018-05-08', '11', 'CASH', 'admin', '0000-00-00', '157000', 'saepudin', 'I.B', 'painem', '00000000001');
INSERT INTO `vpenerimaan` (`nis`, `tanggal`, `nonota`, `transfer`, `pengguna`, `tanggaldokumen`, `total`, `namasiswa`, `kelas`, `namaayah`, `telephon`) VALUES ('11700091', '2018-05-08', '12', 'CASH', 'admin', '0000-00-00', '5455', 'saepudin', 'I.B', 'painem', '00000000001');
INSERT INTO `vpenerimaan` (`nis`, `tanggal`, `nonota`, `transfer`, `pengguna`, `tanggaldokumen`, `total`, `namasiswa`, `kelas`, `namaayah`, `telephon`) VALUES ('11700091', '2018-05-08', '13', 'CASH', 'admin', '0000-00-00', '0', 'saepudin', 'I.B', 'painem', '00000000001');
INSERT INTO `vpenerimaan` (`nis`, `tanggal`, `nonota`, `transfer`, `pengguna`, `tanggaldokumen`, `total`, `namasiswa`, `kelas`, `namaayah`, `telephon`) VALUES ('11700091', '2018-05-14', '14', 'CASH', 'admin', '0000-00-00', '300000', 'saepudin', 'I.B', 'painem', '00000000001');


#
# TABLE STRUCTURE FOR: vperizinan
#

DROP TABLE IF EXISTS `vperizinan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`sipy1897`@`localhost` SQL SECURITY DEFINER VIEW `vperizinan` AS select `izin`.`nourut` AS `nourut`,`izin`.`nis` AS `nis`,`izin`.`tanggalizin` AS `tanggalizin`,`izin`.`tanggalkembali` AS `tanggalkembali`,`izin`.`penjemput` AS `penjemput`,`izin`.`catatan` AS `catatan`,`siswa`.`namasiswa` AS `namasiswa`,`siswa`.`marhalah` AS `marhalah`,`siswa`.`kelas` AS `kelas` from (`izin` join `siswa` on((`izin`.`nis` = `siswa`.`nis`)));

utf8mb4_unicode_ci;

INSERT INTO `vperizinan` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`, `namasiswa`, `marhalah`, `kelas`) VALUES ('61', '11700073', '2018-04-30', '0000-00-00', 'sdsdsdsd', 'sdsd', 'asdasd', NULL, 'X.A');
INSERT INTO `vperizinan` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`, `namasiswa`, `marhalah`, `kelas`) VALUES ('63', '11700070', '2018-05-01', '0000-00-00', 'sfdgs', 'dfsfg', 'Handoko Tri', NULL, NULL);
INSERT INTO `vperizinan` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`, `namasiswa`, `marhalah`, `kelas`) VALUES ('65', '11700078', '2018-05-01', '0000-00-00', 'asd', 'dsd', 'asdas', NULL, NULL);
INSERT INTO `vperizinan` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`, `namasiswa`, `marhalah`, `kelas`) VALUES ('66', '11700073', '2018-05-01', '0000-00-00', 'g', 'rtrt', 'asdasd', NULL, 'X.A');
INSERT INTO `vperizinan` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`, `namasiswa`, `marhalah`, `kelas`) VALUES ('67', '11700075', '2018-05-01', '0000-00-00', 'ghgnh', 'hgjghj', 'sddsf', NULL, 'X.A');
INSERT INTO `vperizinan` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`, `namasiswa`, `marhalah`, `kelas`) VALUES ('68', '11700078', '2018-05-01', '0000-00-00', 'ukuku', 'kuk', 'asdas', NULL, NULL);
INSERT INTO `vperizinan` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`, `namasiswa`, `marhalah`, `kelas`) VALUES ('69', '11700074', '2018-05-01', '0000-00-00', 'jmjh', 'jhjm', 'asdsad', NULL, 'X.A');
INSERT INTO `vperizinan` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`, `namasiswa`, `marhalah`, `kelas`) VALUES ('70', '11700074', '2018-05-01', '0000-00-00', 'ghghg', 'gh', 'asdsad', NULL, 'X.A');
INSERT INTO `vperizinan` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`, `namasiswa`, `marhalah`, `kelas`) VALUES ('71', '11700073', '2018-05-01', '0000-00-00', 'ewe', 'wewe', 'asdasd', NULL, 'X.A');
INSERT INTO `vperizinan` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`, `namasiswa`, `marhalah`, `kelas`) VALUES ('72', '11700074', '2018-05-01', '0000-00-00', 'hgh', 'ghgh', 'asdsad', NULL, 'X.A');
INSERT INTO `vperizinan` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`, `namasiswa`, `marhalah`, `kelas`) VALUES ('74', '11700075', '2018-05-01', '0000-00-00', 'ss', 'sdsd', 'sddsf', NULL, 'X.A');
INSERT INTO `vperizinan` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`, `namasiswa`, `marhalah`, `kelas`) VALUES ('76', '11700078', '2018-05-01', '0000-00-00', 'rerer', 'erer', 'asdas', NULL, NULL);
INSERT INTO `vperizinan` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`, `namasiswa`, `marhalah`, `kelas`) VALUES ('77', '11700074', '2018-05-01', '0000-00-00', 'fdf', 'fdf', 'asdsad', NULL, 'X.A');
INSERT INTO `vperizinan` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`, `namasiswa`, `marhalah`, `kelas`) VALUES ('78', '11700074', '2018-05-01', '0000-00-00', 'rer', 'rer', 'asdsad', NULL, 'X.A');
INSERT INTO `vperizinan` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`, `namasiswa`, `marhalah`, `kelas`) VALUES ('79', '11700075', '2018-05-01', '0000-00-00', 'fsfs', 'fsf', 'sddsf', NULL, 'X.A');
INSERT INTO `vperizinan` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`, `namasiswa`, `marhalah`, `kelas`) VALUES ('80', '11700077', '2018-05-01', '0000-00-00', '', 'dsd', 'asdas', NULL, NULL);
INSERT INTO `vperizinan` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`, `namasiswa`, `marhalah`, `kelas`) VALUES ('82', '11700073', '2018-05-01', '0000-00-00', 'as', 'sas', 'asdasd', NULL, 'X.A');
INSERT INTO `vperizinan` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`, `namasiswa`, `marhalah`, `kelas`) VALUES ('83', '11700078', '2018-05-01', '0000-00-00', 'dsds', 'sds', 'asdas', NULL, NULL);
INSERT INTO `vperizinan` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`, `namasiswa`, `marhalah`, `kelas`) VALUES ('84', '11700077', '2018-05-01', '0000-00-00', 'sdsd', 'dsd', 'asdas', NULL, NULL);
INSERT INTO `vperizinan` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`, `namasiswa`, `marhalah`, `kelas`) VALUES ('86', '11700078', '2018-06-01', '0000-00-00', 'wsdsd', 'sdsd', 'asdas', NULL, NULL);
INSERT INTO `vperizinan` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`, `namasiswa`, `marhalah`, `kelas`) VALUES ('88', '11700074', '2018-05-01', '0000-00-00', 'das', 'dsd', 'asdsad', NULL, 'X.A');
INSERT INTO `vperizinan` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`, `namasiswa`, `marhalah`, `kelas`) VALUES ('89', '11700075', '2018-05-01', '0000-00-00', 'dsd', 'sd', 'sddsf', NULL, 'X.A');
INSERT INTO `vperizinan` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`, `namasiswa`, `marhalah`, `kelas`) VALUES ('90', '11700079', '2018-05-01', '0000-00-00', 'dsd', 'dsd', 'asda', NULL, NULL);
INSERT INTO `vperizinan` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`, `namasiswa`, `marhalah`, `kelas`) VALUES ('91', '11700073', '2018-05-01', '0000-00-00', 'sdsd', 'dsd', 'asdasd', NULL, 'X.A');
INSERT INTO `vperizinan` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`, `namasiswa`, `marhalah`, `kelas`) VALUES ('92', '11700074', '2018-05-01', '0000-00-00', 'dsds', 'dsad', 'asdsad', NULL, 'X.A');
INSERT INTO `vperizinan` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`, `namasiswa`, `marhalah`, `kelas`) VALUES ('94', '11700074', '2018-05-01', '0000-00-00', 'sdd', 'sdfs', 'asdsad', NULL, 'X.A');
INSERT INTO `vperizinan` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`, `namasiswa`, `marhalah`, `kelas`) VALUES ('95', '11700077', '2018-05-01', '0000-00-00', 'dsd', 'dsd', 'asdas', NULL, NULL);
INSERT INTO `vperizinan` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`, `namasiswa`, `marhalah`, `kelas`) VALUES ('96', '11700078', '2018-05-10', '0000-00-00', 'ds', 'dsdsd', 'asdas', NULL, NULL);
INSERT INTO `vperizinan` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`, `namasiswa`, `marhalah`, `kelas`) VALUES ('97', '11700089', '2018-05-04', '0000-00-00', 'fdf', 'fdf', 'fgfghf', NULL, 'I.B');
INSERT INTO `vperizinan` (`nourut`, `nis`, `tanggalizin`, `tanggalkembali`, `penjemput`, `catatan`, `namasiswa`, `marhalah`, `kelas`) VALUES ('98', '11700091', '2018-05-06', '0000-00-00', 'ibunya', 'tidak ada catatan', 'saepudin', 'MTS', 'I.B');


#
# TABLE STRUCTURE FOR: vprestasi
#

DROP TABLE IF EXISTS `vprestasi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`sipy1897`@`localhost` SQL SECURITY DEFINER VIEW `vprestasi` AS select `prestasi`.`nourut` AS `nourut`,`prestasi`.`tanggal` AS `tanggal`,`prestasi`.`nis` AS `nis`,`prestasi`.`prestasi` AS `prestasi`,`prestasi`.`catatan` AS `catatan`,`prestasi`.`pengguna` AS `pengguna`,`siswa`.`namasiswa` AS `namasiswa`,`siswa`.`marhalah` AS `marhalah`,`siswa`.`kelas` AS `kelas` from (`prestasi` join `siswa` on((`prestasi`.`nis` = `siswa`.`nis`)));

utf8mb4_unicode_ci;

INSERT INTO `vprestasi` (`nourut`, `tanggal`, `nis`, `prestasi`, `catatan`, `pengguna`, `namasiswa`, `marhalah`, `kelas`) VALUES ('31', '2018-04-01', '11700073', 'sdfsf', '', '', 'asdasd', NULL, 'X.A');
INSERT INTO `vprestasi` (`nourut`, `tanggal`, `nis`, `prestasi`, `catatan`, `pengguna`, `namasiswa`, `marhalah`, `kelas`) VALUES ('32', '2018-05-01', '11700077', 'hhh', 'hhh', '', 'asdas', NULL, NULL);
INSERT INTO `vprestasi` (`nourut`, `tanggal`, `nis`, `prestasi`, `catatan`, `pengguna`, `namasiswa`, `marhalah`, `kelas`) VALUES ('34', '2018-05-01', '11700073', 'juara 3', 'abcd', '', 'asdasd', NULL, 'X.A');
INSERT INTO `vprestasi` (`nourut`, `tanggal`, `nis`, `prestasi`, `catatan`, `pengguna`, `namasiswa`, `marhalah`, `kelas`) VALUES ('35', '2018-05-08', '11700094', '1', 'lorem ipsum dolor sit amet', '', 'Muhammad Hakim Almadani', 'MA', 'IX.A');


#
# TABLE STRUCTURE FOR: vselainspp
#

DROP TABLE IF EXISTS `vselainspp`;

CREATE ALGORITHM=UNDEFINED DEFINER=`sipy1897`@`localhost` SQL SECURITY DEFINER VIEW `vselainspp` AS select `bayarrutin`.`nis` AS `nis`,`bayarrutin`.`tanggal` AS `tanggal`,`bayarrutin`.`nonota` AS `nonota`,`bayarrutin`.`transfer` AS `transfer`,`bayarrutin`.`pengguna` AS `pengguna`,`bayarrutin`.`daftarulang` AS `daftarulang`,`bayarrutin`.`uangpangkal` AS `uangpangkal`,`bayarrutin`.`infaq` AS `infaq`,`bayarrutin`.`uangsakumasuk` AS `uangsakumasuk`,`bayarrutin`.`bimbel` AS `bimbel`,`bayarrutin`.`keteranganinfaq` AS `keteranganinfaq`,`bayarrutin`.`tanggaldokumen` AS `tanggaldokumen`,`siswa`.`namasiswa` AS `namasiswa`,`siswa`.`kelas` AS `kelas`,`siswa`.`namaayah` AS `namaayah`,`siswa`.`telephon` AS `telephon` from (`bayarrutin` join `siswa` on((`bayarrutin`.`nis` = `siswa`.`nis`)));

utf8mb4_unicode_ci;

INSERT INTO `vselainspp` (`nis`, `tanggal`, `nonota`, `transfer`, `pengguna`, `daftarulang`, `uangpangkal`, `infaq`, `uangsakumasuk`, `bimbel`, `keteranganinfaq`, `tanggaldokumen`, `namasiswa`, `kelas`, `namaayah`, `telephon`) VALUES ('11700091', '2018-05-06', '1', 'TRANSFER', 'admin', '100000', '100000', '100000', '500000', '100000', 'infaq masjid', '0000-00-00', 'saepudin', 'I.B', 'painem', '00000000001');
INSERT INTO `vselainspp` (`nis`, `tanggal`, `nonota`, `transfer`, `pengguna`, `daftarulang`, `uangpangkal`, `infaq`, `uangsakumasuk`, `bimbel`, `keteranganinfaq`, `tanggaldokumen`, `namasiswa`, `kelas`, `namaayah`, `telephon`) VALUES ('11700093', '2018-05-06', '2', 'CASH', 'admin', '100000', '100000', '100000', '250000', '100000', 'Untuk Yatim', '0000-00-00', 'ganbaro minna', 'I.C', NULL, NULL);
INSERT INTO `vselainspp` (`nis`, `tanggal`, `nonota`, `transfer`, `pengguna`, `daftarulang`, `uangpangkal`, `infaq`, `uangsakumasuk`, `bimbel`, `keteranganinfaq`, `tanggaldokumen`, `namasiswa`, `kelas`, `namaayah`, `telephon`) VALUES ('11700091', '2018-05-06', '3', 'TRANSFER', 'admin', '0', '0', '100000', '120000', '0', '', '0000-00-00', 'saepudin', 'I.B', 'painem', '00000000001');
INSERT INTO `vselainspp` (`nis`, `tanggal`, `nonota`, `transfer`, `pengguna`, `daftarulang`, `uangpangkal`, `infaq`, `uangsakumasuk`, `bimbel`, `keteranganinfaq`, `tanggaldokumen`, `namasiswa`, `kelas`, `namaayah`, `telephon`) VALUES ('11700093', '2018-05-06', '4', 'CASH', 'admin', '0', '0', '150000', '200000', '0', 'untuk yatim', '0000-00-00', 'ganbaro minna', 'I.C', NULL, NULL);
INSERT INTO `vselainspp` (`nis`, `tanggal`, `nonota`, `transfer`, `pengguna`, `daftarulang`, `uangpangkal`, `infaq`, `uangsakumasuk`, `bimbel`, `keteranganinfaq`, `tanggaldokumen`, `namasiswa`, `kelas`, `namaayah`, `telephon`) VALUES ('11700093', '2018-05-06', '5', 'CASH', 'admin', '0', '0', '150000', '200000', '0', 'untuk yatim', '0000-00-00', 'ganbaro minna', 'I.C', NULL, NULL);
INSERT INTO `vselainspp` (`nis`, `tanggal`, `nonota`, `transfer`, `pengguna`, `daftarulang`, `uangpangkal`, `infaq`, `uangsakumasuk`, `bimbel`, `keteranganinfaq`, `tanggaldokumen`, `namasiswa`, `kelas`, `namaayah`, `telephon`) VALUES ('11700070', '2018-05-06', '6', 'TRANSFER', 'admin', '0', '0', '200000', '250000', '0', 'infaq masjid', '0000-00-00', 'Handoko Tri', NULL, NULL, NULL);
INSERT INTO `vselainspp` (`nis`, `tanggal`, `nonota`, `transfer`, `pengguna`, `daftarulang`, `uangpangkal`, `infaq`, `uangsakumasuk`, `bimbel`, `keteranganinfaq`, `tanggaldokumen`, `namasiswa`, `kelas`, `namaayah`, `telephon`) VALUES ('11700090', '2018-05-06', '7', 'CASH', 'admin', '0', '0', '100', '10000', '0', '111', '0000-00-00', 'kmu aja', 'I.B', NULL, NULL);
INSERT INTO `vselainspp` (`nis`, `tanggal`, `nonota`, `transfer`, `pengguna`, `daftarulang`, `uangpangkal`, `infaq`, `uangsakumasuk`, `bimbel`, `keteranganinfaq`, `tanggaldokumen`, `namasiswa`, `kelas`, `namaayah`, `telephon`) VALUES ('11700091', '2018-05-06', '8', 'CASH', 'admin', '0', '0', '0', '20000', '1200', 'sdvsdf', '0000-00-00', 'saepudin', 'I.B', 'painem', '00000000001');
INSERT INTO `vselainspp` (`nis`, `tanggal`, `nonota`, `transfer`, `pengguna`, `daftarulang`, `uangpangkal`, `infaq`, `uangsakumasuk`, `bimbel`, `keteranganinfaq`, `tanggaldokumen`, `namasiswa`, `kelas`, `namaayah`, `telephon`) VALUES ('11700091', '2018-05-06', '9', 'CASH', 'admin', '0', '0', '0', '1000', '0', '', '0000-00-00', 'saepudin', 'I.B', 'painem', '00000000001');
INSERT INTO `vselainspp` (`nis`, `tanggal`, `nonota`, `transfer`, `pengguna`, `daftarulang`, `uangpangkal`, `infaq`, `uangsakumasuk`, `bimbel`, `keteranganinfaq`, `tanggaldokumen`, `namasiswa`, `kelas`, `namaayah`, `telephon`) VALUES ('11700091', '2018-05-08', '11', 'CASH', 'admin', '34000', '0', '0', '20000', '3000', 'jhghjg', '0000-00-00', 'saepudin', 'I.B', 'painem', '00000000001');
INSERT INTO `vselainspp` (`nis`, `tanggal`, `nonota`, `transfer`, `pengguna`, `daftarulang`, `uangpangkal`, `infaq`, `uangsakumasuk`, `bimbel`, `keteranganinfaq`, `tanggaldokumen`, `namasiswa`, `kelas`, `namaayah`, `telephon`) VALUES ('11700091', '2018-05-08', '12', 'CASH', 'admin', '0', '0', '0', '2000', '3455', '', '0000-00-00', 'saepudin', 'I.B', 'painem', '00000000001');
INSERT INTO `vselainspp` (`nis`, `tanggal`, `nonota`, `transfer`, `pengguna`, `daftarulang`, `uangpangkal`, `infaq`, `uangsakumasuk`, `bimbel`, `keteranganinfaq`, `tanggaldokumen`, `namasiswa`, `kelas`, `namaayah`, `telephon`) VALUES ('11700091', '2018-05-08', '13', 'CASH', 'admin', '0', '0', '0', '0', '0', '', '0000-00-00', 'saepudin', 'I.B', 'painem', '00000000001');
INSERT INTO `vselainspp` (`nis`, `tanggal`, `nonota`, `transfer`, `pengguna`, `daftarulang`, `uangpangkal`, `infaq`, `uangsakumasuk`, `bimbel`, `keteranganinfaq`, `tanggaldokumen`, `namasiswa`, `kelas`, `namaayah`, `telephon`) VALUES ('11700091', '2018-05-14', '14', 'CASH', 'admin', '0', '0', '0', '200000', '0', '', '0000-00-00', 'saepudin', 'I.B', 'painem', '00000000001');


#
# TABLE STRUCTURE FOR: vsetingmapel
#

DROP TABLE IF EXISTS `vsetingmapel`;

CREATE ALGORITHM=UNDEFINED DEFINER=`sipy1897`@`localhost` SQL SECURITY DEFINER VIEW `vsetingmapel` AS select `setingmapel`.`noid` AS `noid`,`setingmapel`.`kodemapel` AS `kodemapel`,`setingmapel`.`nik` AS `nik`,`setingmapel`.`kelas` AS `kelas`,`matapelajaran`.`namamapel` AS `namamapel`,`pegawai`.`nama` AS `nama`,`kelas`.`walikelas` AS `walikelas` from (((`setingmapel` join `matapelajaran` on((`setingmapel`.`kodemapel` = `matapelajaran`.`kodemapel`))) join `pegawai` on((`setingmapel`.`nik` = `pegawai`.`nik`))) join `kelas` on((`setingmapel`.`kelas` = convert(`kelas`.`namakelas` using utf8))));

utf8mb4_unicode_ci;

INSERT INTO `vsetingmapel` (`noid`, `kodemapel`, `nik`, `kelas`, `namamapel`, `nama`, `walikelas`) VALUES ('42', 'MTK', '10014', 'I.B', 'MATEMATIKA', 'Handoko Tri', 'ACHMAD YACHDI FAUZAN, S.T.');
INSERT INTO `vsetingmapel` (`noid`, `kodemapel`, `nik`, `kelas`, `namamapel`, `nama`, `walikelas`) VALUES ('41', 'SKI', '10014', 'I.B', 'sejarah kebudayaan islam', 'Handoko Tri', 'ACHMAD YACHDI FAUZAN, S.T.');
INSERT INTO `vsetingmapel` (`noid`, `kodemapel`, `nik`, `kelas`, `namamapel`, `nama`, `walikelas`) VALUES ('40', 'TAU', '10011', 'I.B', 'TAUHID', 'Abdurrohim', 'ACHMAD YACHDI FAUZAN, S.T.');


#
# TABLE STRUCTURE FOR: vsiswakeluar
#

DROP TABLE IF EXISTS `vsiswakeluar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`sipy1897`@`localhost` SQL SECURITY DEFINER VIEW `vsiswakeluar` AS select `siswakeluar`.`nis` AS `nis`,`siswakeluar`.`tanggal` AS `tanggal`,`siswakeluar`.`keterangan` AS `keterangan`,`siswa`.`namasiswa` AS `namasiswa`,`siswa`.`marhalah` AS `marhalah`,`siswa`.`kelas` AS `kelas`,`siswa`.`namaayah` AS `namaayah`,`siswa`.`namaibu` AS `namaibu` from (`siswakeluar` join `siswa` on((`siswakeluar`.`nis` = `siswa`.`nis`)));

utf8mb4_unicode_ci;

#
# TABLE STRUCTURE FOR: vspp
#

DROP TABLE IF EXISTS `vspp`;

CREATE ALGORITHM=UNDEFINED DEFINER=`sipy1897`@`localhost` SQL SECURITY DEFINER VIEW `vspp` AS select `bayarrutin`.`nis` AS `nis`,`bayarrutin`.`tanggal` AS `tanggal`,`bayarrutin`.`nonota` AS `nonota`,`bayarrutin`.`transfer` AS `transfer`,`bayarrutin`.`pengguna` AS `pengguna`,`bayarrutin`.`januari` AS `januari`,`bayarrutin`.`februari` AS `februari`,`bayarrutin`.`maret` AS `maret`,`bayarrutin`.`april` AS `april`,`bayarrutin`.`mei` AS `mei`,`bayarrutin`.`juni` AS `juni`,`bayarrutin`.`juli` AS `juli`,`bayarrutin`.`agustus` AS `agustus`,`bayarrutin`.`september` AS `september`,`bayarrutin`.`oktober` AS `oktober`,`bayarrutin`.`november` AS `november`,`bayarrutin`.`desember` AS `desember`,`bayarrutin`.`tanggaldokumen` AS `tanggaldokumen`,`siswa`.`namasiswa` AS `namasiswa`,`siswa`.`kelas` AS `kelas`,`siswa`.`namaayah` AS `namaayah`,`siswa`.`telephon` AS `telephon` from (`bayarrutin` join `siswa` on((`bayarrutin`.`nis` = `siswa`.`nis`)));

utf8mb4_unicode_ci;

INSERT INTO `vspp` (`nis`, `tanggal`, `nonota`, `transfer`, `pengguna`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `tanggaldokumen`, `namasiswa`, `kelas`, `namaayah`, `telephon`) VALUES ('11700091', '2018-05-06', '1', 'TRANSFER', 'admin', '100000', '100000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0000-00-00', 'saepudin', 'I.B', 'painem', '00000000001');
INSERT INTO `vspp` (`nis`, `tanggal`, `nonota`, `transfer`, `pengguna`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `tanggaldokumen`, `namasiswa`, `kelas`, `namaayah`, `telephon`) VALUES ('11700093', '2018-05-06', '2', 'CASH', 'admin', '100000', '100000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0000-00-00', 'ganbaro minna', 'I.C', NULL, NULL);
INSERT INTO `vspp` (`nis`, `tanggal`, `nonota`, `transfer`, `pengguna`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `tanggaldokumen`, `namasiswa`, `kelas`, `namaayah`, `telephon`) VALUES ('11700091', '2018-05-06', '3', 'TRANSFER', 'admin', '0', '0', '100000', '100000', '0', '0', '0', '0', '0', '0', '0', '0', '0000-00-00', 'saepudin', 'I.B', 'painem', '00000000001');
INSERT INTO `vspp` (`nis`, `tanggal`, `nonota`, `transfer`, `pengguna`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `tanggaldokumen`, `namasiswa`, `kelas`, `namaayah`, `telephon`) VALUES ('11700093', '2018-05-06', '4', 'CASH', 'admin', '0', '0', '100000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0000-00-00', 'ganbaro minna', 'I.C', NULL, NULL);
INSERT INTO `vspp` (`nis`, `tanggal`, `nonota`, `transfer`, `pengguna`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `tanggaldokumen`, `namasiswa`, `kelas`, `namaayah`, `telephon`) VALUES ('11700093', '2018-05-06', '5', 'CASH', 'admin', '0', '0', '100000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0000-00-00', 'ganbaro minna', 'I.C', NULL, NULL);
INSERT INTO `vspp` (`nis`, `tanggal`, `nonota`, `transfer`, `pengguna`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `tanggaldokumen`, `namasiswa`, `kelas`, `namaayah`, `telephon`) VALUES ('11700070', '2018-05-06', '6', 'TRANSFER', 'admin', '0', '0', '50000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0000-00-00', 'Handoko Tri', NULL, NULL, NULL);
INSERT INTO `vspp` (`nis`, `tanggal`, `nonota`, `transfer`, `pengguna`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `tanggaldokumen`, `namasiswa`, `kelas`, `namaayah`, `telephon`) VALUES ('11700090', '2018-05-06', '7', 'CASH', 'admin', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0000-00-00', 'kmu aja', 'I.B', NULL, NULL);
INSERT INTO `vspp` (`nis`, `tanggal`, `nonota`, `transfer`, `pengguna`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `tanggaldokumen`, `namasiswa`, `kelas`, `namaayah`, `telephon`) VALUES ('11700091', '2018-05-06', '8', 'CASH', 'admin', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0000-00-00', 'saepudin', 'I.B', 'painem', '00000000001');
INSERT INTO `vspp` (`nis`, `tanggal`, `nonota`, `transfer`, `pengguna`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `tanggaldokumen`, `namasiswa`, `kelas`, `namaayah`, `telephon`) VALUES ('11700091', '2018-05-06', '9', 'CASH', 'admin', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0000-00-00', 'saepudin', 'I.B', 'painem', '00000000001');
INSERT INTO `vspp` (`nis`, `tanggal`, `nonota`, `transfer`, `pengguna`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `tanggaldokumen`, `namasiswa`, `kelas`, `namaayah`, `telephon`) VALUES ('11700091', '2018-05-08', '11', 'CASH', 'admin', '0', '0', '0', '0', '0', '0', '0', '100000', '0', '0', '0', '0', '0000-00-00', 'saepudin', 'I.B', 'painem', '00000000001');
INSERT INTO `vspp` (`nis`, `tanggal`, `nonota`, `transfer`, `pengguna`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `tanggaldokumen`, `namasiswa`, `kelas`, `namaayah`, `telephon`) VALUES ('11700091', '2018-05-08', '12', 'CASH', 'admin', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0000-00-00', 'saepudin', 'I.B', 'painem', '00000000001');
INSERT INTO `vspp` (`nis`, `tanggal`, `nonota`, `transfer`, `pengguna`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `tanggaldokumen`, `namasiswa`, `kelas`, `namaayah`, `telephon`) VALUES ('11700091', '2018-05-08', '13', 'CASH', 'admin', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0000-00-00', 'saepudin', 'I.B', 'painem', '00000000001');
INSERT INTO `vspp` (`nis`, `tanggal`, `nonota`, `transfer`, `pengguna`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `tanggaldokumen`, `namasiswa`, `kelas`, `namaayah`, `telephon`) VALUES ('11700091', '2018-05-14', '14', 'CASH', 'admin', '0', '0', '0', '0', '100000', '0', '0', '0', '0', '0', '0', '0', '0000-00-00', 'saepudin', 'I.B', 'painem', '00000000001');


#
# TABLE STRUCTURE FOR: vtahfidz
#

DROP TABLE IF EXISTS `vtahfidz`;

CREATE ALGORITHM=UNDEFINED DEFINER=`sipy1897`@`localhost` SQL SECURITY DEFINER VIEW `vtahfidz` AS select `tahfidz`.`nourut` AS `nourut`,`tahfidz`.`tanggal` AS `tanggal`,`tahfidz`.`nis` AS `nis`,`tahfidz`.`tambahan` AS `tambahan`,`tahfidz`.`murojaah` AS `murojaah`,`tahfidz`.`totalhafalan` AS `totalhafalan`,`tahfidz`.`murojaahbaru` AS `murojaahbaru`,`tahfidz`.`tambahanketerangan` AS `tambahanketerangan`,`siswa`.`namasiswa` AS `namasiswa`,`siswa`.`kelas` AS `kelas` from (`tahfidz` join `siswa` on((`tahfidz`.`nis` = `siswa`.`nis`)));

utf8mb4_unicode_ci;

INSERT INTO `vtahfidz` (`nourut`, `tanggal`, `nis`, `tambahan`, `murojaah`, `totalhafalan`, `murojaahbaru`, `tambahanketerangan`, `namasiswa`, `kelas`) VALUES ('16', '2018-05-01', '11700070', '1', '2 halaman', NULL, '3 halaman', '1 halaman', 'Handoko Tri', NULL);
INSERT INTO `vtahfidz` (`nourut`, `tanggal`, `nis`, `tambahan`, `murojaah`, `totalhafalan`, `murojaahbaru`, `tambahanketerangan`, `namasiswa`, `kelas`) VALUES ('15', '2018-05-01', '11700070', '1', 'hafalan', NULL, '', 'hafalan', 'Handoko Tri', NULL);
INSERT INTO `vtahfidz` (`nourut`, `tanggal`, `nis`, `tambahan`, `murojaah`, `totalhafalan`, `murojaahbaru`, `tambahanketerangan`, `namasiswa`, `kelas`) VALUES ('17', '2018-05-01', '11700070', '1', 'halaman 2-3', NULL, '', 'halaman 2-3', 'Handoko Tri', NULL);
INSERT INTO `vtahfidz` (`nourut`, `tanggal`, `nis`, `tambahan`, `murojaah`, `totalhafalan`, `murojaahbaru`, `tambahanketerangan`, `namasiswa`, `kelas`) VALUES ('20', '2018-05-01', '11700073', '1', '2 - 5 halaman', NULL, '', '2', 'asdasd', 'X.A');
INSERT INTO `vtahfidz` (`nourut`, `tanggal`, `nis`, `tambahan`, `murojaah`, `totalhafalan`, `murojaahbaru`, `tambahanketerangan`, `namasiswa`, `kelas`) VALUES ('23', '2018-05-07', '11700091', '1', '4 halaman', NULL, '4 halaman', 'an-naba', 'saepudin', 'I.B');
INSERT INTO `vtahfidz` (`nourut`, `tanggal`, `nis`, `tambahan`, `murojaah`, `totalhafalan`, `murojaahbaru`, `tambahanketerangan`, `namasiswa`, `kelas`) VALUES ('24', '2018-05-07', '11700093', '1', '5 halaman', NULL, '3 halaman', 'an-naba', 'ganbaro minna', 'I.C');


#
# TABLE STRUCTURE FOR: vuangsakukeluar
#

DROP TABLE IF EXISTS `vuangsakukeluar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`sipy1897`@`localhost` SQL SECURITY DEFINER VIEW `vuangsakukeluar` AS select `siswa`.`nis` AS `nis`,`siswa`.`namasiswa` AS `namasiswa`,`siswa`.`kelas` AS `kelas`,`siswa`.`namaayah` AS `namaayah`,`siswa`.`marhalah` AS `marhalah`,sum(`uangsakukeluar`.`uangkeluar`) AS `totkeluar` from (`uangsakukeluar` join `siswa` on((`uangsakukeluar`.`nis` = `siswa`.`nis`))) group by `siswa`.`nis`,`siswa`.`namasiswa`,`siswa`.`kelas`,`siswa`.`namaayah`,`siswa`.`marhalah`;

utf8mb4_unicode_ci;

INSERT INTO `vuangsakukeluar` (`nis`, `namasiswa`, `kelas`, `namaayah`, `marhalah`, `totkeluar`) VALUES ('11700091', 'saepudin', 'I.B', 'painem', 'MTS', '50000');


#
# TABLE STRUCTURE FOR: vuangsakukeluardetail
#

DROP TABLE IF EXISTS `vuangsakukeluardetail`;

CREATE ALGORITHM=UNDEFINED DEFINER=`sipy1897`@`localhost` SQL SECURITY DEFINER VIEW `vuangsakukeluardetail` AS select `uangsakukeluar`.`nonota` AS `nonota`,`uangsakukeluar`.`nis` AS `nis`,`uangsakukeluar`.`uangkeluar` AS `uangkeluar`,`uangsakukeluar`.`tanggal` AS `tanggal`,`uangsakukeluar`.`pengguna` AS `pengguna`,`uangsakukeluar`.`catatan` AS `catatan`,`siswa`.`namasiswa` AS `namasiswa`,`siswa`.`marhalah` AS `marhalah`,`siswa`.`kelas` AS `kelas` from (`uangsakukeluar` join `siswa` on((`uangsakukeluar`.`nis` = `siswa`.`nis`)));

utf8mb4_unicode_ci;

INSERT INTO `vuangsakukeluardetail` (`nonota`, `nis`, `uangkeluar`, `tanggal`, `pengguna`, `catatan`, `namasiswa`, `marhalah`, `kelas`) VALUES ('1', '11700091', '50000', '2018-05-06 00:00:00', NULL, 'jajan', 'saepudin', 'MTS', 'I.B');


#
# TABLE STRUCTURE FOR: vuangsakumasuk
#

DROP TABLE IF EXISTS `vuangsakumasuk`;

CREATE ALGORITHM=UNDEFINED DEFINER=`sipy1897`@`localhost` SQL SECURITY DEFINER VIEW `vuangsakumasuk` AS select `siswa`.`nis` AS `nis`,`siswa`.`namasiswa` AS `namasiswa`,`siswa`.`kelas` AS `kelas`,`siswa`.`namaayah` AS `namaayah`,`siswa`.`marhalah` AS `marhalah`,sum(`bayarrutin`.`uangsakumasuk`) AS `totmasuk` from (`bayarrutin` join `siswa` on((`bayarrutin`.`nis` = `siswa`.`nis`))) group by `siswa`.`nis`,`siswa`.`namasiswa`,`siswa`.`kelas`,`siswa`.`namaayah`,`siswa`.`marhalah`;

utf8mb4_unicode_ci;

INSERT INTO `vuangsakumasuk` (`nis`, `namasiswa`, `kelas`, `namaayah`, `marhalah`, `totmasuk`) VALUES ('11700070', 'Handoko Tri', NULL, NULL, NULL, '250000');
INSERT INTO `vuangsakumasuk` (`nis`, `namasiswa`, `kelas`, `namaayah`, `marhalah`, `totmasuk`) VALUES ('11700090', 'kmu aja', 'I.B', NULL, NULL, '10000');
INSERT INTO `vuangsakumasuk` (`nis`, `namasiswa`, `kelas`, `namaayah`, `marhalah`, `totmasuk`) VALUES ('11700091', 'saepudin', 'I.B', 'painem', 'MTS', '863000');
INSERT INTO `vuangsakumasuk` (`nis`, `namasiswa`, `kelas`, `namaayah`, `marhalah`, `totmasuk`) VALUES ('11700093', 'ganbaro minna', 'I.C', NULL, NULL, '650000');


#
# TABLE STRUCTURE FOR: vuangsakusisa
#

DROP TABLE IF EXISTS `vuangsakusisa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`sipy1897`@`localhost` SQL SECURITY DEFINER VIEW `vuangsakusisa` AS select `vuangsakumasuk`.`nis` AS `nis`,`vuangsakumasuk`.`namasiswa` AS `namasiswa`,`vuangsakumasuk`.`kelas` AS `kelas`,`vuangsakumasuk`.`namaayah` AS `namaayah`,`vuangsakumasuk`.`marhalah` AS `marhalah`,`vuangsakumasuk`.`totmasuk` AS `totmasuk`,ifnull(`vuangsakukeluar`.`totkeluar`,0) AS `totkeluar`,(ifnull(`vuangsakumasuk`.`totmasuk`,0) - ifnull(`vuangsakukeluar`.`totkeluar`,0)) AS `uangsisa` from (`vuangsakumasuk` left join `vuangsakukeluar` on((`vuangsakumasuk`.`nis` = `vuangsakukeluar`.`nis`)));

utf8mb4_unicode_ci;

INSERT INTO `vuangsakusisa` (`nis`, `namasiswa`, `kelas`, `namaayah`, `marhalah`, `totmasuk`, `totkeluar`, `uangsisa`) VALUES ('11700091', 'saepudin', 'I.B', 'painem', 'MTS', '863000', '50000', '813000');
INSERT INTO `vuangsakusisa` (`nis`, `namasiswa`, `kelas`, `namaayah`, `marhalah`, `totmasuk`, `totkeluar`, `uangsisa`) VALUES ('11700070', 'Handoko Tri', NULL, NULL, NULL, '250000', '0', '250000');
INSERT INTO `vuangsakusisa` (`nis`, `namasiswa`, `kelas`, `namaayah`, `marhalah`, `totmasuk`, `totkeluar`, `uangsisa`) VALUES ('11700090', 'kmu aja', 'I.B', NULL, NULL, '10000', '0', '10000');
INSERT INTO `vuangsakusisa` (`nis`, `namasiswa`, `kelas`, `namaayah`, `marhalah`, `totmasuk`, `totkeluar`, `uangsisa`) VALUES ('11700093', 'ganbaro minna', 'I.C', NULL, NULL, '650000', '0', '650000');


