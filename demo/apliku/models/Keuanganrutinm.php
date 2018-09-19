<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


Class Keuanganrutinm extends CI_Model {

   function __construct()
   {
      parent::__construct();
   }

   function carisiswa(){
      $this->db->where('lulus', "0");

      $query = $this->db->get('siswa');
      return $query->result();
   }

   function getsiswa(){
      $this->db->where('lulus', "0");
      $this->db->limit('8', 'desc');

      $query = $this->db->get('siswa');
      return $query->result();
   }

   function simpan($data)
   {
      $this->db->insert('bayarrutin', $data);
      return $this->db->insert_id();
   }


   function datalist(){
      $query = $this->db->get('vspp');
      return $query->result();
   }
   function datalistnonspp(){
      $query = $this->db->get('vselainspp');
      return $query->result();
   }

   function datalistmonitoringspp(){
      $query = $this->db->get('vmonitoringspp');
      return $query->result();
   }

   //laporan penerimaan cash/transfer
   function datalistpenerimaancash(){
      $this->db->where('transfer', "CASH");
      $query = $this->db->get('vpenerimaan');
      return $query->result();
   }
   function datalistpenerimaancashcari(){
      $tanggalmulai=$_POST['tanggalmulai'];
      $tanggalselesai=$_POST['tanggalselesai'];
      $sql="select * from vpenerimaancash where tanggal BETWEEN '$tanggalmulai' AND '$tanggalselesai'";
      $query = $this->db->query($sql);
      return $query->result();
   }
   function datalistpenerimaantransfer(){
      $this->db->where('transfer', "TRANSFER");
      $query = $this->db->get('vpenerimaan');
      return $query->result();
   }
   function datalistpenerimaantransfercari(){
      $tanggalmulai=$_POST['tanggalmulai'];
      $tanggalselesai=$_POST['tanggalselesai'];
      $sql="select * from vpenerimaantransfer where tanggal BETWEEN '$tanggalmulai' AND '$tanggalselesai'";
      $query = $this->db->query($sql);
      return $query->result();
   }
   //selesai laporan penerimaan cash/transfer

   function datalistuangsakusisa(){
      $query = $this->db->get('vuangsakusisa');
      return $query->result();
   }

   public function data_uangsakusisa()
   {
      $query = $this->db->get('vuangsakusisa')->result();

      $output = array(
         'data' => $query,
      );

      return $output;
   }

   function carimonitoring($nis){
      // $this->db->where('nis', $nis);
      // $this->db->where('bulan', $bulan);
      //$query = $this->db->get('monitoringspp');
      $sql = "select * from monitoringspp where nis = '$nis'";
      $query = $this->db->query($sql);
      return $query->result();
   }
   function carinonota(){
      $sql = "select COUNT(nonota) as maxnota from bayarrutin";
      $query = $this->db->query($sql);
      return $query->result();
   }

   public function data_spp($data)
   {
      $this->db->where('tanggal >=', $data['tanggal_awal']);
      $this->db->where('tanggal <=', $data['tanggal_akhir']);
      $query = $this->db->get('vspp')->result();

      $output = array(
         'data' => $query,
      );

      return $output;
   }

   public function data_nospp($data)
   {
      $this->db->where('tanggal >=', $data['tanggal_awal']);
      $this->db->where('tanggal <=', $data['tanggal_akhir']);
      $query = $this->db->get('vselainspp')->result();

      $output = array(
         'data' => $query,
      );

      return $output;
   }

   public function data_cash($data)
   {
      $this->db->where('tanggal >=', $data['tanggal_awal']);
      $this->db->where('tanggal <=', $data['tanggal_akhir']);
      $this->db->where('transfer', 'CASH');
      $query = $this->db->get('vpenerimaan')->result();

      $data = array();
      $no = 1;

      foreach ($query as $key => $value) {
         $row = array(
            'no'        => $no,
            'nonota'    => $value->nonota,
            'tanggal'   => $value->tanggal,
            'nis'       => $value->nis,
            'namasiswa' => $value->namasiswa,
            'kelas'     => $value->kelas,
            'total'     => number_format($value->total),
            'pengguna'  => $value->pengguna,
         );

         $no++;
         $data[] = $row;

      }

      $output = array(
         'data' => $data,
      );

      return $output;
   }   

   public function data_transfer($data)
   {
      $this->db->where('tanggal >=', $data['tanggal_awal']);
      $this->db->where('tanggal <=', $data['tanggal_akhir']);
      $this->db->where('transfer', 'TRANSFER');
      $query = $this->db->get('vpenerimaan')->result();

      $data = array();
      $no = 1;

      foreach ($query as $key => $value) {
         $row = array(
            'no'        => $no,
            'nonota'    => $value->nonota,
            'tanggal'   => $value->tanggal,
            'nis'       => $value->nis,
            'namasiswa' => $value->namasiswa,
            'kelas'     => $value->kelas,
            'total'     => number_format($value->total),
            'pengguna'  => $value->pengguna,
         );

         $no++;
         $data[] = $row;

      }

      $output = array(
         'data' => $data,
      );

      return $output;
   }   

   public function data_monitoringspp()
   {
      $query = $this->db->get('vmonitoringspp')->result();

      $output = array(
         'data' => $query,
      );

      return $output;
   }

   public function data_pembayaran()
   {
      $result = $this->db->get('vbayarrutin')->result();

      $data = [];

      foreach ($result as $key => $value) {
         $row = [
            'nonota'    => $value->nonota,
            'nis'       => $value->nis,
            'namasiswa' => $value->namasiswa,
            'kelas'     => $value->kelas,
            'pengguna'  => $value->pengguna,
            'tanggal'   => date("d-m-Y", strtotime($value->tanggal)),
            'total'     => $value->total,
         ];

         $data[] = $row;
      }

      $output = [
         'data' => $data,
      ];

      return $output;
   }

   public function print_nota($nonota)
   {
      $this->db->where('nonota', $nonota);
      $result = $this->db->get('vbayarrutin')->result();

      $data = [];
      $namabulan = [];
      $spp = [];

      foreach ($result as $key => $value) {
         $bulan = [
            'januari'   => $value->januari,
            'februari'  => $value->februari,
            'maret'     => $value->maret,
            'april'     => $value->april,
            'mei'       => $value->mei,
            'juni'      => $value->juni,
            'juli'      => $value->juli,
            'agustus'   => $value->agustus,
            'september' => $value->september,
            'oktober'   => $value->oktober,
            'november'  => $value->november,
            'desember'  => $value->desember,
         ];

         foreach ($bulan as $key => $value) {
            if ($value != 0) {
               $namabulan[] = $key;
               $spp[] = $value;
            }
         }
      }

      foreach ($result as $key => $value) {
         $row = [
            'nonota'          => $value->nonota,
            'tanggal'         => $value->tanggal,
            'transfer'        => $value->transfer,
            'namasiswa'       => $value->namasiswa,
            'namaayah'        => $value->namaayah,
            'kelas'           => $value->kelas,
            'daftarulang'     => $value->daftarulang,
            'uangpangkal'     => $value->uangpangkal,
            'uangsakumasuk'   => $value->uangsakumasuk,
            'keteranganinfaq' => $value->keteranganinfaq,
            'bimbel'          => $value->bimbel,
            'infaq'           => $value->infaq,
            'total'           => $value->total,
            'namabulan'       => $namabulan,
            'spp'             => array_sum($spp),
         ];

         $data[] = $row;
      }
      
      return $data;
   }

   public function bayar_piutang($data)
   {
      if($this->db->insert('piutang', $data)) {
        $result = 'success';
      } else {
        $result = 'failed';
      }

      return $result;
   }
}

?>
