<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


Class Kesehatanm extends CI_Model 
{

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
      $this->db->insert('kesehatan', $data);
      return $this->db->insert_id();
   }


   function datalist(){
      $query = $this->db->get('vkesehatan');
      return $query->result();
   }

   public function data_kesehatan($data)
   {
       
      $this->db->where('tanggal <=', $data['tanggal_akhir']);
      $this->db->where('tanggal >=', $data['tanggal_awal']);
    
      $query = $this->db->get('vkesehatan')->result();

      $data = array();
      $no = 1;

      foreach ($query as $key => $value) {
         $row = array(
            'no'        => $no,
            'nourut'    => $value->nourut,
            'nis'       => $value->nis,
            'namasiswa' => $value->namasiswa,
            'kelas'     => $value->kelas,
            'tanggal'   => date("d-m-Y", strtotime($value->tanggal)),
            'keluhan'   => $value->keluhan,
            'obat'      => $value->obat,
            'catatan'   => $value->catatan,
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
