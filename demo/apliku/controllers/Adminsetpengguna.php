<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminsetpengguna extends CI_Controller {

	 public function __construct() {
	   parent::__construct();
	   $this->load->helper('url');
	     $this->load->library('form_validation');
	     $this->load->helper('form');
	     $this->load->library('session');
		 $this->load->helper(array('cookie', 'url'));
		 $this->load->model('Penggunam');

	}

	function samping()
	{
		$session = $this->session->userdata('username');
		$this->load->model('modela');
		$data['data']=$this->modela->datalist($session);

		$this->load->view('sampingkiri',$data); 
	}
//admin set sekolah
    function index()
	{
        	$this->load->view('header'); 
        	$this->samping();
			
			$data['data']=$this->Penggunam->caripengguna();			

			$this->load->view('adminsetpengguna/adminsetpengguna',$data); 
			$this->load->view('footer');       
	}

	// view dept
	function department()
	{

		$userid = $this->uri->segment(3);
		$data['dept']=$this->Penggunam->caridept($userid);
		
		die(json_encode($data));
	}

	function simpanpengguna()
	{
		$data = array(
			'userid'	=> $this->input->post('userid'),
			'kodenota' 	=> $this->input->post('kodenota'),			
		);
		$this->Penggunam->simpanpengguna('user2', $data);


		$userid=$this->input->post('userid');
		$str = $this->input->post('dept');
		$str2= explode(",",$str);
		foreach($str2 as $m)
		{
		$this->Penggunam->simpandepart('userhalaman', $userid, $m);
		}
	}

	function cariuserterakhir()
	{
			$data = array(
					'userid' 	=> $this->input->post('userid'),
					'password' 	=> $this->input->post('password'),
					'kodenota' 	=> $this->input->post('kodenota'),
					
				);
				$this->penggunam->cariuserterakhir('user2', $data);


				$userid=$this->input->post('userid');
				$str = $this->input->post('dept');
				$str2= explode(",",$str);
				foreach($str2 as $m){
					
				$this->penggunam->halaman('userhalaman', $userid, $m);
				}
				
	}			
// selesai	

}
