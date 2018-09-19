<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
Class M_master_userid extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    
    function get_userid($username, $password){
  		$data_userid = $this->db->query("SELECT * FROM acl_users WHERE username ='$username' and password='$password'");
  		return $data_userid;
    
    }

    public function auth($username, $password){
        $user = $this->db->query("SELECT * FROM acl_users WHERE username ='$username' and password='$password'");
        if($user->num_rows() > 0){
            $result = [
                "login" => $user->num_rows(),
                "data" => $user->result()
            ];
        }else{
            $result = [
                "login" => $user->num_rows()
            ];
        }
        return $result;
  }

}

 ?>