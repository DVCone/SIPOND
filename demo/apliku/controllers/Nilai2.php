<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai2 extends CI_Controller {

	 public function __construct() {
	   parent::__construct();
	   $this->load->helper('url');
	     $this->load->library('form_validation');
	     $this->load->helper('form');
	     $this->load->library('session');
	     $this->load->helper(array('cookie', 'url'));
	}

	function samping()
	{
		$session = $this->session->userdata('username');
		$this->load->model('modela');
		$data['data']=$this->modela->datalist($session);

		$this->load->view('sampingkiri',$data); 
	}

   function hapus($id)
   {

      $this->db->where('noid', $id);
      $this->db->delete('setingmapel');

      $this->datalistsetting();
   }

	function datalistsetting()
		{
			$this->load->model('Nilaim2');
			$data['data']=$this->Nilaim2->datalistsetting();


        	$this->load->view('header');
        	$this->samping();
        	$this->load->view('nilai/datalistsetting',$data);
        	$this->load->view('footer');
		}

// selesai

}
