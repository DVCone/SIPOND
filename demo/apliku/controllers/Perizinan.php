<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perizinan extends CI_Controller {

   public function __construct() {
      parent::__construct();
      $this->load->library(['form_validation', 'session', 'twig']);
      $this->load->helper(['form','itusajja', 'cookie', 'url']);
      $this->load->model('Perizinanm');
      $this->twig->addGlobal('csrf_name' , $this->security->get_csrf_token_name());
      $this->twig->addGlobal('csrf_hash' , $this->security->get_csrf_hash());
      if($this->session->userdata('username') == "") {
         redirect(site_url().'/login');
      } 
   }

//    function samping()
// 	{
// 		$session = $this->session->userdata('username');
// 		$this->load->model('modela');
// 		$data['data']=$this->modela->datalist($session);

// 		$this->load->view('sampingkiri',$data); 
// 	}

//    function index()
//    {
//       $this->load->view('header'); 
//       $this->samping(); 

//       $this->load->model('Perizinanm');
//       $data['data']=$this->Perizinanm->carisiswa();			

//       $this->load->view('perizinan/perizinanv',$data); 
//       $this->load->view('footer');       
//    }

   function simpan()
   {
      $this->load->model('Perizinanm');
      $data = array(
         'nis' => $this->input->post('nis'),
         'penjemput' => $this->input->post('penjemput'),
         'catatan' => $this->input->post('catatan'),
         'tanggalizin' => $this->input->post('tanggalizin'),
      );
      $insert = $this->Perizinanm->simpan($data);
   }	


    public function hapus($id)
    {

       $this->db->where('nourut', $id);
       if ($this->db->delete('izin')) {
          echo 'Success';
       } else {
          echo 'Failed';
       }

    }	

//    function datalist()
//    {
//       $this->load->model('Perizinanm');
//       $data['data']=$this->Perizinanm->datalist();


//       $this->load->view('header'); 
//       $this->samping();
//       $this->load->view('perizinan/datalist',$data); 
//       $this->load->view('footer');   
//    }	
   
   
// CODE BY ITUSAJJA
public function index(){
    $data = [
        'data' => $this->Perizinanm->carisiswa(),
        'session' => $this->session->userdata('username'),
    ];
    authApp('perizinan/master', $data);
}
// CODE BY ITUSAJJA

   function test() {
      $this->load->model('Perizinanm');

      $data = array(
         'data' => $this->Perizinanm->carisiswa(),
         'csrf_name' => $this->security->get_csrf_token_name(),
         'csrf_hash' => $this->security->get_csrf_hash(),
         'session' => $this->session->userdata('username'),
      );

      $this->twig->display('perizinan/perizinanv', $data);

   }

   public function datalist_perizinan()
   {
      $data = array(
         'csrf_name' => $this->security->get_csrf_token_name(),
         'csrf_hash' => $this->security->get_csrf_hash(),
      );

      $this->twig->display('perizinan/datalist', $data);
   }

   public function data_perizinan()
   {
      $post = array(
        'namasiswa' => $this->input->post('namasiswa'),
         'tanggal_awal' => $this->input->post('tanggal_awal'),
         'tanggal_akhir' => $this->input->post('tanggal_akhir'),
      );

      $result = $this->Perizinanm->data_perizinan($post);

      echo json_encode($result);
   }



   // selesai	

}
