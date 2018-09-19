<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


Class Jurnalmodel extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    public function rekscustom1000(){
        $this->db->where('SUBSTRING(koderekening,1,4)','1000');
        $this->db->order_by('koderekening','ASC');
        $query = $this->db->get('rekening');
        return $query->result();
    }

    public function rekscustomnot1000(){
        $this->db->where('SUBSTRING(koderekening,1,4) <>','1000');
        $this->db->order_by('koderekening','ASC');
        $query = $this->db->get('rekening');
        return $query->result();
    }

    public function getlastid(){
        $query = $this->db->query("SELECT MAX(nonota) as id FROM jurnal")->result()[0];
        return ($query->id)+1;
    }
    
}

 ?>
