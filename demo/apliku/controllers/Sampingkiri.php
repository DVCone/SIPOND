<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sampingkiri extends CI_Controller {

    public function __construct() {
      parent::__construct();
      $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->helper(['form','itusajja']);
        $this->load->library('session');
        $this->load->library('twig');
        $this->load->model('Sampingkirim');
        $this->load->helper(array('cookie', 'url'));
     if($this->session->userdata('username') == "") {
        redirect(site_url().'/login');
     } 
   }
   
   function carisekolah() {
        $data['data']=$this->Sampingkirim->dataSekolah();
        
        echo json_encode($data);
   }
}
?>