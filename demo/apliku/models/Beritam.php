<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


Class Beritam extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function cariberita(){
        $this->db->where('tutup', "0");

        $query = $this->db->get('berita');
        return $query->result();
    }

    function simpan($data)
    {
        $this->db->insert('berita', $data);
        return $this->db->insert_id();
    }


    function datalist(){
        $query = $this->db->get('berita');
        return $query->result();
    }
}

 ?>
