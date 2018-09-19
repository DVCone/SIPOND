<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

   public function __construct() {
      parent::__construct();
      $this->load->helper('url');
      $this->load->library('form_validation');
      $this->load->helper(['itusajja','form']);
      $this->load->library('session');
      $this->load->library('twig');
      $this->load->helper(array('cookie', 'url'));

      //if($this->session->userdata('username') == "") {
         //redirect(site_url().'/login');
      //} 
   }


   //admin set sekolah
   function index()
   {
      $this->load->model('Testm');

      $data = array(
         'csrf_name' => $this->security->get_csrf_token_name(),
         'csrf_hash' => $this->security->get_csrf_hash(),
         'test' => $this->Testm->get_role(),
      );

      $this->twig->addGlobal('session', $this->session);

      authApp('test/test', $data);
      

   }

   function add()
   {
      $this->load->model('Testm');
      $data = array(
         'userid' => $this->input->post('input_userid'),
         'password' => $this->input->post('input_password'),
         'dept' => $this->input->post('input_dept'),
         'kode_nota' => $this->input->post('input_kodenota'),
      );
      $insert = $this->Testm->add_user($data);

   }

   function get_role()
   {
      $this->load->model('Testm');

      $test = $this->Testm->get_role();
      die(json_encode($test));
   }
   // selesai	

}
