<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
Class Modela extends CI_Model {
    
    function __construct()
    {
        parent::__construct();
    }


    function datalist($session){
        //$this->db->where('userid', $session);
        //$data_userid = $this->db->query("SELECT * FROM user2 WHERE userid ='$username' and password ='$password'");
        $query = $this->db->query("SELECT * FROM `userhalaman` where userid='$session->username'");
        return $query->result(); 
    }

}

 ?>