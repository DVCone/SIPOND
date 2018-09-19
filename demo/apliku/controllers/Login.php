<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

   public function __construct() {
      parent::__construct();
      $this->load->library(array('form_validation', 'session', 'twig'));
      $this->load->helper(array('cookie', 'url', 'form'));
      $this->twig->addGlobal('csrf_name' , $this->security->get_csrf_token_name());
      $this->twig->addGlobal('csrf_hash' , $this->security->get_csrf_hash());
      $this->load->model(['acl']);

   }

   function index(){
    $session = $this->session->userdata('username');
    if (!$this->session->userdata('username')){
       $this->load->view('signin');
    }else{
       $this->load->view('header');
       $this->load->view('sampingkiri');
       $this->load->view('isi');
       $this->load->view('footer');
    }
 }

   function logout(){
      //unset($_SESSION['']);
      $this->session->unset_userdata('username');
      $this->session->sess_destroy();
      redirect(site_url());
   }

   function proses(){

      $this->load->model('m_master_userid','',true);

      $username  = $this->input->post('username', TRUE);
      $password = $this->input->post('password', TRUE);

      $username  =  $this->security->xss_clean(trim(htmlentities($username)));
      $password  =  $this->security->xss_clean(trim(htmlentities($password)));

      $username = str_replace("'", '', $username);
      $password = str_replace("'","",$password);

      // validasi form
      $this->form_validation->set_rules('username', 'Username', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required');
      $this->form_validation->run();
      //  inisialisasi
      $data['username'] = '';
      $data['password'] = '';

      $result= $this->m_master_userid->get_userid($username,$password);
      foreach ($result->result() as $row ){
         $data['username'] = $row->username;
         $data['password'] = $row->password;
      }


      if ($username==$data['username'] and $password==$data['password']){
         $this->session->set_userdata('username',$this->m_master_userid->auth($username,$password)['data'][0]);
      }
      // kembali ke index
      redirect(site_url());
   }

}
