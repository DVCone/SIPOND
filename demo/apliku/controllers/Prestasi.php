<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi extends CI_Controller {

   public function __construct() {
      parent::__construct();
      $this->load->library(['form_validation', 'session', 'twig']);
      $this->load->helper(['form','itusajja', 'cookie', 'url']);
      $this->load->model('Prestasim');
      $this->twig->addGlobal('csrf_name' , $this->security->get_csrf_token_name());
      $this->twig->addGlobal('csrf_hash' , $this->security->get_csrf_hash());
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
//    function index()
//    {
//       $this->load->view('header'); 
//       $this->samping();

//       $this->load->model('Prestasim');
//       $data['data']=$this->Prestasim->carisiswa();			

//       $this->load->view('prestasi/prestasiv',$data); 
//       $this->load->view('footer');       
//    }

// CODE BY ITUSAJJA
public function index(){
    $data = [
        'data' => $this->Prestasim->carisiswa(),
        'session' => $this->session->userdata('username'),
    ];
    authApp('prestasi/master', $data);
}
// CODE BY ITUSAJJA
   function simpan()
   {
      $this->load->model('Prestasim');
      $data = array(
         'nis' => $this->input->post('nis'),
         'tanggal' => $this->input->post('tanggal'),
         'prestasi' => $this->input->post('prestasi'),
         'catatan' => $this->input->post('catatan'),
      );
      $insert = $this->Prestasim->simpan($data);
   }	

   function hapus($id)
   {

      $this->db->where('nourut', $id);
      $this->db->delete('prestasi');

      $this->datalist();
   }	

   function datalist()
   {
      $this->load->model('Prestasim');
      $data['data']=$this->Prestasim->datalist();


      $this->load->view('header'); 
      $this->samping();
      $this->load->view('prestasi/datalist',$data); 
      $this->load->view('footer');   
   }				

   function test() {
      $this->load->model('Prestasim');

      $data = array(
         'data' => $this->Prestasim->carisiswa(),
         'csrf_name' => $this->security->get_csrf_token_name(),
         'csrf_hash' => $this->security->get_csrf_hash(),
         'session' => $this->session->userdata('username'),
      );

      authApp('prestasi/prestasiv', $data);

   }

   public function datalist_prestasi()
   {
      $data = array(
         'csrf_name' => $this->security->get_csrf_token_name(),
         'csrf_hash' => $this->security->get_csrf_hash(),
      );

      authApp('prestasi/datalist', $data);
   }

   public function data_prestasi()
   {
      $post = array(
        'namasiswa' => $this->input->post('namasiswa'),
         'tanggal_awal' => $this->input->post('tanggal_awal'),
         'tanggal_akhir' => $this->input->post('tanggal_akhir'),
      );

      $result = $this->Prestasim->data_prestasi($post);

      echo json_encode($result);
   }
   // selesai	

}
