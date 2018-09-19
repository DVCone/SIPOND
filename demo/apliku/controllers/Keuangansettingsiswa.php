<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keuangansettingsiswa extends CI_Controller {

	 public function __construct() {
	   parent::__construct();
      $this->load->library(['form_validation', 'session', 'twig']);
      $this->load->helper(['form','itusajja', 'cookie', 'url']);
	}

	function samping()
	{
		$session = $this->session->userdata('username');
		$this->load->model('modela');
		$data['data']=$this->modela->datalist($session);

		$this->load->view('sampingkiri',$data); 
	}

    function index()
	{
        	$this->load->view('header');
        	$this->samping();

			$this->load->model('Keuangansettingsiswam');
			$data['data']=$this->Keuangansettingsiswam->carisiswa();

        	$this->load->view('keuangan/settingsiswa/settingsiswav',$data);
        	$this->load->view('footer');
	}
	function simpan()
		{
			$this->load->model('Keuangansettingsiswam');
			$data = array(
					'nis' => $this->input->post('nis'),
					'spp' => $this->input->post('spp'),
					'daftarulang' => $this->input->post('daftarulang'),
					'uangpangkal' => $this->input->post('uangpangkal'),
				);
			$insert = $this->Keuangansettingsiswam->simpan($data);
		}


	// function hapus($id)
	// 	{

	// 		$this->db->where('nourut', $id);
 //   		    $this->db->delete('kesehatan');

	// 		$this->datalist();
	// 	}

	// function datalist()
	// 	{
	// 		$this->load->model('Kesehatanm');
	// 		$data['data']=$this->Kesehatanm->datalist();


 //        	$this->load->view('header');
 //        	$this->load->view('sampingkiri');
 //        	$this->load->view('kesehatan/datalist',$data);
 //        	$this->load->view('footer');
	// 	}

	function carimonitoring(){
		$this->load->model('Keuanganrutinm');
		$nis = $this->input->post('nis');

		$data=$this->Keuanganrutinm->carimonitoring($nis);
		//echo $data;
        echo json_encode($data);
	}
// selesai

}
