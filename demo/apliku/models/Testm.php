<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
Class Testm extends CI_Model {
    
    function __construct()
    {
        parent::__construct();
    }

    function caripengguna(){
        $query = $this->db->get('user2');
        return $query->result(); 
    }
    function simpanpengguna($data)
    {
        $this->db->update('user2', $data);
        return $this->db->insert_id();  
    }             

    function add_user($data)
    {
       $this->db->insert('test', $data);
       return $this->db->insert_id();
    }

    function get_role()
    {
       $this->db->select('*')->from('users_groups')->join('users', 'users.id = users_groups.user_id')->join('groups', 'groups.id = users_groups.group_id');
       $query = $this->db->get();

       return $query->result_array();
    }

}

 ?>
