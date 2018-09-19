<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


Class Tahfidzm extends CI_Model {

   function __construct()
   {
      parent::__construct();
   }

   function carisiswa(){
      $this->db->where('lulus', "0");

      $query = $this->db->get('siswa');
      return $query->result(); 
   }

   function simpan($data)
   {
      $this->db->insert('tahfidz', $data);
      return $this->db->insert_id();  
   }         

   function datalist(){
      $query = $this->db->get('vtahfidz');
      return $query->result(); 
   }         

   public function data_tahfidz($data)
   {
      $this->db->where('tanggal <=', $data['tanggal_akhir']);
      $this->db->where('tanggal >=', $data['tanggal_awal']);

      if ($data["namasiswa"] != '') {
         $this->db->like('namasiswa', $data["namasiswa"]);
      }

      $query = $this->db->get('vtahfidz')->result();

      $data = array();
      $no = 1;

      foreach ($query as $key => $value) {
         $row = array(
            'no'                 => $no,
            'nourut'                => $value->nourut,
            'tanggal'            => date("d-m-Y", strtotime($value->tanggal)),
            'nis'                => $value->nis,
            'namasiswa'          => $value->namasiswa,
            'kelas'              => $value->kelas,
            'tambahan'           => $value->tambahan,
            'tambahanketerangan' => $value->tambahanketerangan,
            'murojaahbaru'       => $value->murojaahbaru,
            'murojaah'           => $value->murojaah,
         );

         $no++;
         $data[] = $row;
      }

      $output = array(
         'data' => $data,
      );

      return $output;
   }   
}

?>
