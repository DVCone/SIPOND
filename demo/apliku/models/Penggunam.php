<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
Class Penggunam extends CI_Model {
    
    function __construct()
    {
        parent::__construct();
    }

    // add
    // input department -> userhalaman
    function halaman($table, $userid, $m)
    {
        $data = array(
            'userid' => $userid,
            'halaman' => $m,
        );
        
        $hasil = $this->db->insert($table, $data);

    }

    // input userid -> user2
    function cariuserterakhir($table, $data)
    {
        $hasil = $this->db->insert($table, $data);

        return $this->db->insert_id(); 
    }  

    // edit
    // userid -> userhalaman
    function caripengguna()
    {
        $this->db->distinct();
        $this->db->select('userid');
        $query = $this->db->get('userhalaman');
        return $query->result(); 
    }

    // depart -> halaman
    function caridept($userid)
    {
        $this->db->select('halaman');
        $this->db->where('userid', $userid); 
        $query = $this->db->get('userhalaman');
        return $query->result();
    }

    function simpanpengguna($table, $data)
    {
        $this->db->where('userid', 'kodenota');
        // $this->db->delete($table);
        $hasil = $this->db->insert($table, $data);

        return $this->db->insert_id(); 

        
    }
    function simpandepart($table, $userid, $m)
    {
        $data = array(
            'userid' => $userid,
            'halaman' => $m,
        );
        
        $query = $this->db->replace($table, $data);

        return $query->result();

       
    }


    // function simpanpengguna($table)
    // {
    //     $this->db->select('*');
    //     $this->db->where('userid', $userid);
    //     $this->db->update('userhalaman', $data);
    //     return $this->db->insert_id();
    // }
    
    // edit
    // function simpanpengguna($table, $data)
    // {

    //     $userid=$this->input->post('userid');
    //     $this->db->where('userid', $userid);

    //     $this->db->update($table, $data);
    //     return $this->db->insert_id();
    // }  
}

 ?>