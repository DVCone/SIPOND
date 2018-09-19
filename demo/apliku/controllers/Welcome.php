<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->library('form_validation');
    $this->load->helper('form');
    $this->load->library('session');
    $this->load->helper(array('cookie', 'url'));
      if($this->session->userdata('username') == "") {
         redirect(site_url().'/login');
      }
  }

  // barang pemkot

  function dashboard() {
    $session = $this->session->userdata('username');
    if(!$this->session->userdata('username')) {
      $this->load->view('signin');
    } else {

      $this->load->model('modela');
      $data['data']=$this->modela->datalist($session);

      $this->load->view('header');
      $this->load->view('sampingkiri',$data);
      $this->load->view('isi');
      $this->load->view('footer');
    }
  }


  function index()
  {
    $this->dashboard();

  }

  function login() {
    $this->load->view('login');
  }

  function profile()
  {
    $session = $this->session->userdata('username');
    if(!$this->session->userdata('username')) {
      $this->load->view('signin');
    } else {

      $this->load->model('modela');
      $data['data']=$this->modela->datalist($session);

      $this->load->view('header');
      $this->load->view('sampingkiri',$data);
      $this->load->view('profile/profile');
      $this->load->view('footer');
    }
  }


}
