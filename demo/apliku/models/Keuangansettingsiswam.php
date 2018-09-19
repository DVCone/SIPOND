<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


Class Keuangansettingsiswam extends CI_Model {

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
      $nis=$this->input->post('nis');
      $this->db->where('nis', $nis);
      $this->db->update('siswa', $data);
      return $this->db->insert_id();

    }


    // function datalist(){
    //     $query = $this->db->get('vkesehatan');
    //     return $query->result();
    // }

    function carimonitoring($nis){
        // $this->db->where('nis', $nis);
        // $this->db->where('bulan', $bulan);
        //$query = $this->db->get('monitoringspp');
        $sql = "select * from monitoringspp where nis = '$nis'";
        $query = $this->db->query($sql);
        return $query->result();
    }

    function getsiswa() {
       return $this->db->get('siswa')->result_array();
       //$this->db->like('namasiswa', $name, 'both');
       //return $this->db->get('siswa')->result_array();
    }
}

 ?>
