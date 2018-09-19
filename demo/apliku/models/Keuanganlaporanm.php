<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


Class Keuanganlaporanm extends CI_Model {

   function __construct()
   {
      parent::__construct();
   }

   function rekening(){
      $query = $this->db->get('rekening');
      return $query->result();
   }

   function jurnal(){
      $query = $this->db->get('vjurnal',0,30);
      return $query->result();
   }

   function jurnalcari(){
      $tanggalmulai=$_POST['tanggalmulai'];
      $tanggalselesai=$_POST['tanggalselesai'];
      $sql="select * from vjurnal where tanggal BETWEEN '$tanggalmulai' AND '$tanggalselesai'";
      $query = $this->db->query($sql);
      return $query->result();
   }

   function bukubesar(){

      $query = $this->db->get('vjurnal',0,30);
      return $query->result();
   }

   function bukubesarcari(){
      $tanggalmulai=$_POST['tanggalmulai'];
      $tanggalselesai=$_POST['tanggalselesai'];
      $koderekening=$_POST['koderekening'];
      $sql="select * from vjurnal where koderekening = '$koderekening' AND (tanggal BETWEEN '$tanggalmulai' AND '$tanggalselesai') order by nourut desc";
      $query = $this->db->query($sql);
      return $query->result();
   }

   function neracasaldo(){
      $query = $this->db->get('vneracasaldo');
      return $query->result();
   }

   function neracasaldo2(){
      $sql="SELECT sum(totdebet) as debet, sum(totkredit) as kredit FROM vneracasaldo";
      $query = $this->db->query($sql);
      return $query->result();
   }

   public function data_jurnal($data)
   {
      $this->db->where('tanggal >=', $data['tanggal_awal']);
      $this->db->where('tanggal <=', $data['tanggal_akhir']);
      $query = $this->db->get('vjurnal')->result();

      $data = array();
      $no = 1;

      foreach ($query as $key => $value) {
          $row = array(
              'no'              =>$no,
              'tanggal'         =>date("d-m-Y", strtotime($value->tanggal)),
              'nonota'          =>$value->nonota,
              'koderekening'    =>$value->koderekening.'-'.$value->namarekening,
              'debet'           =>$value->debet,
              'kredit'          =>$value->kredit,
              'keterangan'      =>$value->keterangan,
              'pengguna'        =>$value->pengguna,
          );
          $no++;
          $data[] = $row;
      }
      $output = array(
         'data' => $data,
      );

      return $output;
   }

   public function data_bukubesar($data)
   {
      $this->db->where('tanggal >=', $data['tanggal_awal']);
      $this->db->where('tanggal <=', $data['tanggal_akhir']);

      if($data["namarekening"] != '*') {
         $this->db->where('namarekening', $data["namarekening"]);
      }

      $query = $this->db->get('vjurnal')->result();
      
      $data = array();
      $no = 1;

      foreach ($query as $key => $value) {
          $row = array(
              'no'           => $no,
              'tanggal'      => date("d-m-Y", strtotime($value->tanggal)),
              'nonota'       => $value->nonota,
              'koderekening' => $value->koderekening.'-'.$value->namarekening,
              'debet'        => $value->debet,
              'kredit'       => $value->kredit,
              'keterangan'   => $value->keterangan,
          );
          $no++;
          $data[] = $row;
      }
      $output = array(
         'data' => $data,
      );

      return $output;
   }

   public function data_neracasaldo()
   {
      $query = $this->db->get('vneracasaldo')->result();

      $no = 1;
      $data = array();

      foreach ($query as $key => $value) {
         $row = array(
            'no'           => $no,
            'koderekening' => $value->koderekening,
            'namarekening' => $value->namarekening,
            'debet'        => number_format($value->totdebet),
            'kredit'       => number_format($value->totkredit),
         );

         $no++;
         $data[] = $row;
      }

      $output = array(
         'data' => $data,
      );

      return $output;
   }







   // function carisiswa(){
   //     $this->db->where('lulus', "0");
   //
   //     $query = $this->db->get('siswa');
   //     return $query->result();
   // }
   //
   // function simpan($data)
   // {
   //     $this->db->insert('Keuanganlaporan', $data);
   //     return $this->db->insert_id();
   // }



}

?>
