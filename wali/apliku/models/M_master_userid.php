<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
Class M_master_userid extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    
    function get_userid($username, $password){
  		$data_userid = $this->db->query("SELECT * FROM userorangtua WHERE userid ='$username' and password ='$password'");
  		return $data_userid;
    
    }
    

}

 ?>