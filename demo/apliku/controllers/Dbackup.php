<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dbackup extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->library(['twig','form_validation','session']);
    $this->load->helper(['url','form','cookie','itusajja']);
  }


  public function index()
  {
    $data['title'] = 'AppBackup';
    layout('home/index',$data);
  }
  
  public function app()
  {
    layout('home/index');
  }

}