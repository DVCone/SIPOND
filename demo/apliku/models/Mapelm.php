<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
Class Mapelm extends CI_Model {
    
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
        $this->db->insert('matapelajaran', $data);
        return $this->db->insert_id();  
    }     

    
    function datalist(){
        $query = $this->db->get('matapelajaran');
        return $query->result(); 
    }             
}

 ?>