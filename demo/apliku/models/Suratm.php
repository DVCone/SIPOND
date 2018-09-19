<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Suratm extends CI_model 
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

    function cariId($id){
        $this->db->where('nis', $id);

        $query = $this->db->get('siswa');
        return $query->result()[0]; 
    }

    function carikepsek(){
        $query = $this->db->get('sekolah');
        return $query->result()[0]; 
    }

}

?>