<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends CI_Controller {

   public function __construct() {
      parent::__construct();
      $this->load->library(['form_validation', 'session', 'twig']);
      $this->load->helper(['form','itusajja', 'cookie', 'url']);
      $this->load->model('Mapelm');
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

   function index()
   {
      $this->load->view('header');
      $this->samping();

      $this->load->model('Mapelm');
      $data['data']=$this->Mapelm->carisiswa();

      $this->load->view('mapel/mapelv',$data);
      $this->load->view('footer');
   }
   function simpan()
   {
      $this->load->model('Mapelm');
      $data = array(
         'kodemapel' => $this->input->post('kodemapel'),
         'namamapel' => $this->input->post('namamapel'),
         'arabic' => $this->input->post('arabic'),
         'kategori' => $this->input->post('kategori'),
         'pengguna' => $this->session->userdata('username')->username,
      );
      $insert = $this->Mapelm->simpan($data);
   }


   function hapus($id)
   {

      $this->db->where('nourut', $id);
      if ($this->db->delete('matapelajaran')) {
         $result = 'Success';
      } else {
         $result = 'Failed';
      }

      echo json_encode($result);
   }

   //function datalist()
   //{
      //$this->load->model('Mapelm');
      //$data['data']=$this->Mapelm->datalist();


      //$this->load->view('header');
      //$this->samping();
      //$this->load->view('mapel/datalist',$data);
      //$this->load->view('footer');
   //}

   public function datalist()
   {
      $data = [
         'csrf_name' => $this->security->get_csrf_token_name(),
         'csrf_hash' => $this->security->get_csrf_hash(),
      ];

      authApp('mapel/datalist', $data);
   }

   public function data_mapel()
   {
      $result = $this->db->get('matapelajaran')->result();
      $output = [
         'data' => $result,
      ];

      echo json_encode($output);

   }

   function test() {
      $this->load->model('Mapelm');

      $data = array(
         'data' => $this->Mapelm->carisiswa(),
         'csrf_name' => $this->security->get_csrf_token_name(),
         'csrf_hash' => $this->security->get_csrf_hash(),
         'session' => $this->session->userdata('username'),
      );

      authApp('mapel/mapelv', $data);

   }
   // selesai

}
