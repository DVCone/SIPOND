<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
Class Login extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    
    public function auth($username, $password){
        $user = $this->db->query("SELECT * FROM acl_users WHERE username ='$username' and AES_DECRYPT(password,username) ='$password'");
        $result = [
            "login" => $user->num_rows(),
            "data" => $user->result()
        ];
        return $result;
  }
  public function getDataUser($username, $password){
        $user = $this->db->query("SELECT * FROM acl_users WHERE username ='$username' and AES_DECRYPT(password,username) ='$password'");
      return $user->result();
  }
    

}

 ?>