<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(['twig', 'form_validation', 'session']);
        $this->load->helper(['url', 'form', 'cookie', 'itusajja']);
    }

    // barang pemkot

    public function index()
    {
        authApp('home/index', []);
    }


}
