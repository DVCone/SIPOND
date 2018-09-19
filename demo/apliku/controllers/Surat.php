<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat extends CI_Controller {

    public function __construct() {
      parent::__construct();
      $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->helper(['form','itusajja']);
        $this->load->library('session');
        $this->load->library('twig');
        $this->load->model('Suratm');
        $this->load->helper(array('cookie', 'url'));
     if($this->session->userdata('username') == "") {
        redirect(site_url().'/login');
     } 
   }

   function samping()
   {
       $session = $this->session->userdata('username');
       $this->load->model('modela');
       $data['data']=$this->modela->datalist($session);

       $this->load->view('sampingkiri',$data); 
   }


//admin set surat
   function sksekolah()
   {
           $this->load->view('header'); 
           $this->samping();
           
           $this->load->model('Suratm');
           $data['data']=$this->Suratm->carisiswa();			
           $data1['data']=$this->Suratm->carikepsek();			

           $this->load->view('surat/sksekolah',$data, $data1); 
           $this->load->view('footer');       
   }

   function carisiswa($id) {
        $this->load->model('Suratm');
        $data['data']=$this->Suratm->cariId($id);			
        $data['data1']=$this->Suratm->carikepsek();

        echo json_encode($data);
   }

   function carisekolah() {
        $data['data1']=$this->Suratm->carikepsek();
        $this->load->view('sampingkiri');
        
        echo json_encode($data);
   }


   function spindah()
   {
    $this->load->view('header'); 
    $this->samping();
    
    $this->load->model('Suratm');
    $data['data']=$this->Suratm->carisiswa();	

    $this->load->view('surat/spindah',$data);
    $this->load->view('footer');       
    }
// selesai

}


?>