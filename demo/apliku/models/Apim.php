<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


Class Apim extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function berita(){
       // $this->db->where('tutup', "0");

        $query = $this->db->get('berita');
        return $query->result();
    }

    function kesehatancari($id){
        $this->db->where('nis', $id);

        $query = $this->db->get('vkesehatan');
        return $query->result();
    }
    function kesehatan(){
        //$this->db->where('nis', $id);

        $query = $this->db->get('vkesehatan');
        return $query->result();
    }

    function pelanggaran(){
       // $this->db->where('tutup', "0");

        $query = $this->db->get('vpelanggaran');
        return $query->result();
    }

    function perizinan(){
       // $this->db->where('tutup', "0");

        $query = $this->db->get('vperizinan');
        return $query->result();
    }

    function tahfidz(){
       // $this->db->where('tutup', "0");

        $query = $this->db->get('vtahfidz');
        return $query->result();
    }    
}

 ?>
