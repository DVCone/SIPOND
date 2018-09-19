<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


Class Karyawanm extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function cari(){
        $this->db->where('keluar', "0");

        $query = $this->db->get('pegawai');
        return $query->result();
    }

    function simpan($data)
    {
        $this->db->insert('pegawai', $data);
        return $this->db->insert_id();
    }

    function datalist(){
        $query = $this->db->get('pegawai');
        return $query->result();
    }




    function carinisterakhir($data){
        $this->db->insert('pegawai', $data);
        return $this->db->insert_id();

        $sql = "select max(nis) as maxnis from pegawai";
        $query = $this->db->query($sql);
        return $query->result();
    }
    function updatekaryawan($data){
        $nis=$this->input->post('nik');
        $this->db->where('nik', $nis);
        $this->db->update('pegawai', $data);
        return $this->db->insert_id();
    }

    public function update_biodata_karyawan($data)
    {
       $this->db->where('nik', $data["nik"]);
       
       if($this->db->update('pegawai', $data)) {
         $result = 'success';
       } else {
          $result = 'Failed';
       }

       return $result;
    }
}

 ?>
