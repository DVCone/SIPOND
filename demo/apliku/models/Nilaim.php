<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


Class Nilaim extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function caripegawai(){
        $this->db->where('keluar', "0");

        $query = $this->db->get('pegawai');
        return $query->result();
    }

    function carimapel(){
        $query = $this->db->get('matapelajaran');
        return $query->result();
    }

    function carikelas(){
        $query = $this->db->get('kelas');
        return $query->result();
    }

    function simpan($data)
    {
        $this->db->insert('setingmapel', $data);
        return $this->db->insert_id();
    }

    function upload($data)
    {
        $this->db->insert('nilai2', $data);
        return $this->db->insert_id();
    }

   function downloadNilai($settingmapel_id)
   {
      $this->db->select('*');
      $this->db->where('settingmapel_id', $settingmapel_id);

      $query = $this->db->get('nilai2');
      return $query->result();
   }

   function downloadisinilai($settingmapel_id)
   {
      $this->db->select('*');
      $this->db->where('noid', $settingmapel_id);
      $this->db->order_by('namasiswa', 'ASC');
      $query = $this->db->get('vdaftarnilaikosong');
      return $query->result();
   }

   function laporannilai(){
      $sql = "SELECT * from vnilairata ORDER by totnilai desc ";
      $query = $this->db->query($sql);
       return $query->result();
   }
   function laporanperpengajar(){
      $this->db->select('*');
      $query = $this->db->get('vsetingmapel');
       return $query->result();
   }

   function downloaddetailnilai($nis)
   {
      $this->db->select('*');
      $this->db->where('nis', $nis);
      $query = $this->db->get('vnilai');
      return $query->result();
   }
}

 ?>
