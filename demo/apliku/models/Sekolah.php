<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
Class Sekolah extends CI_Model {
    
    function __construct()
    {
        parent::__construct();
    }

    function carisekolah(){
        $query = $this->db->get('sekolah');
        return $query->result(); 
    }
    function simpansekolah($data)
    {
        $this->db->update('sekolah', $data);
        return $this->db->insert_id();  
    }   
    function simpankontak($data)
    {
        $this->db->update('sekolah', $data);
        return $this->db->insert_id();  
    }  
    function simpanalamat($data)
    {
        $this->db->update('sekolah', $data);
        return $this->db->insert_id();  
    }           
    public function update_logosekolah($data1)
    {
        $this->db->update('sekolah', array('logokecil' => $data1));
        return true;
    } 
    public function update_kopsurat($data2)
    {
       $this->db->update('sekolah', array('logobesar' => $data2));
       return true;
    } 
}

 ?>