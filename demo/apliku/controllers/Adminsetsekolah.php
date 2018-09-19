<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminsetsekolah extends CI_Controller {

	 public function __construct() {
	   parent::__construct();
	   $this->load->helper('url');
	     $this->load->library('form_validation');
		 $this->load->helper('form');
		 $this->load->model('Sekolah');
	     $this->load->library('session');
		 $this->load->helper(array('cookie', 'url'));
		 $this->load->library('user_agent');
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


//admin set sekolah
    function index()
	{
        	$this->load->view('header'); 
        	$this->samping();
			
			$this->load->model('Sekolah');
			 $data['data']=$this->Sekolah->carisekolah();			

        	$this->load->view('adminsetsekolah/adminsetsekolah',$data); 
        	$this->load->view('footer');       
	}
	function simpansekolah()
		{
			$this->load->model('Sekolah');
			$data = array(
					'namasekolah' => $this->input->post('namasekolah'),
					'moto' => $this->input->post('moto'),
					'visimisi' => $this->input->post('visimisi'),
				);
			$insert = $this->Sekolah->simpansekolah($data);
		}	
	function simpankontak()
		{
			$this->load->model('Sekolah');
			$data = array(
					'kepalasekolah' => $this->input->post('kepalasekolah'),
					'notelpon' => $this->input->post('notelpon'),
					'nohp' => $this->input->post('nohp'),
					'email' => $this->input->post('email'),
				);
			$insert = $this->Sekolah->simpankontak($data);
		}	
	function simpanalamat()
		{
			$this->load->model('Sekolah');
			$data = array(
					'alamat' => $this->input->post('alamat'),
					'kecamatan' => $this->input->post('kecamatan'),
					'kabupaten' => $this->input->post('kabupaten'),
					'provinsi' => $this->input->post('provinsi'),
				);
			$insert = $this->Sekolah->simpanalamat($data);
		}	
	//Upload-image
	function do_upload() {
        // konfigurasi gambar logo sekolah
		$configUpload = array(
			'file_name' => "logosekolah",
			'max_size' => 1024,
			'upload_path' => './gambar/logosekolah/',
			'allowed_types' => 'jpg|png',
			'overwrite' => TRUE,
		);	
		$this->load->library('upload', $configUpload);
		// menyimpan gambar kedalam folder 
        $this->upload->initialize($configUpload);
		$upload_1 = $this->upload->do_upload('upload_logo');
		$result1 = $this->upload->data();
		$data1 = $result1['file_name'];
		$query = $this->Sekolah->update_logosekolah($data1);

		
		// konfigurasi gambar kop surat
		$config = array(
			'file_name' => "kopsurat",
			'max_size' => 1024,
			'upload_path' => './gambar/kopsurat/',
			'allowed_types' => 'jpg|png',
			'overwrite' => TRUE,
		);	
		$this->load->library('upload', $config);
		// menyimpan gambar kedalam folder
        $this->upload->initialize($config);
		$this->upload->do_upload("upload_kopsurat");
		$result2 = $this->upload->data();
		$data2 = $result2['file_name'];
		$query = $this->Sekolah->update_kopsurat($data2);

		// echo json_encode($result1);
		// echo json_encode($result2);
		 redirect($this->agent->referrer());

            
    } 
	
// selesai	

}
