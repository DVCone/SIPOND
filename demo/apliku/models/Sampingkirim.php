<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sampingkirim extends CI_model 
{
    function __construct()
    {
        parent::__construct();
    }

    function dataSekolah(){
        $query = $this->db->get('sekolah');
        return $query->result()[0]; 
    }

}

?>