<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aclcontroller extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->library(['twig','form_validation','session']);
    $this->load->helper(['url','form','cookie','itusajja']);
    $this->load->model('acl');
    $this->twig->addGlobal('csrf_name' , $this->security->get_csrf_token_name());
    $this->twig->addGlobal('csrf_hash' , $this->security->get_csrf_hash());
  }


  public function index()
  {
    $data = [];
    authApp('admin/acl',$data); 
  }

}