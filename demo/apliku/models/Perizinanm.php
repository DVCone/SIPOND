<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


Class Perizinanm extends CI_Model {

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
      $this->db->insert('izin', $data);
      return $this->db->insert_id();  
   }     


   function datalist(){
      $query = $this->db->get('vperizinan');
      return $query->result(); 
   }             

   public function data_perizinan($data)
   {
      $this->db->where('tanggalizin <=', $data['tanggal_akhir']);
      $this->db->where('tanggalizin >=', $data['tanggal_awal']);

      if ($data["namasiswa"] != '') {
         $this->db->like('namasiswa', $data["namasiswa"]);
      }

      $query = $this->db->get('vperizinan')->result();

      $data = array();
      $no = 1;

      foreach ($query as $key => $value) {
         $row = array(
            'no'          => $no,
            'nourut'      => $value->nourut,
            'nis'         => $value->nis,
            'namasiswa'   => $value->namasiswa,
            'kelas'       => $value->kelas,
            'tanggalizin' => date("d-m-Y", strtotime($value->tanggalizin)),
            'penjemput'   => $value->penjemput,
            'catatan'     => $value->catatan,

         );

         $no++;
         $data[]= $row;
      }

      $output = array(
         'data' => $data,
      );

      return $output;
   }   
}

?>
