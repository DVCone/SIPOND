<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kesehatan extends CI_Controller {

   public function __construct() {
      parent::__construct();
      $this->load->library(['form_validation', 'session', 'twig']);
      $this->load->helper(['form','itusajja', 'cookie', 'url']);
      $this->load->model('Kesehatanm');
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

//       $this->load->model('Kesehatanm');
//       $data['data']=$this->Kesehatanm->carisiswa();

//       $this->load->view('kesehatan/kesehatanv',$data);
//       $this->load->view('footer');
//    }
   function simpan()
   {
      $this->load->model('Kesehatanm');
      $data = array(
         'nis' => $this->input->post('nis'),
         'keluhan' => $this->input->post('keluhan'),
         'obat' => $this->input->post('obat'),
         'catatan' => $this->input->post('catatan'),
         'tanggal' => $this->input->post('tanggal'),
      );
      $insert = $this->Kesehatanm->simpan($data);
   }


    function hapus($id)
    {

       $this->db->where('nourut', $id);
        if($this->db->delete('kesehatan')) {
          echo 'success';
        } else {
           echo 'failed';
        }
    }

//    function datalist()
//    {
//       $this->load->model('Kesehatanm');
//       $data['data']=$this->Kesehatanm->datalist();


//       $this->load->view('header');
//       $this->samping();
//       $this->load->view('kesehatan/datalist',$data);
//       $this->load->view('footer');
//    }


    // CODE BY ITUSAJJA
    public function index(){
        $data = [
            'data' => $this->Kesehatanm->carisiswa(),
            'session' => $this->session->userdata('username'),
        ];
        authApp('kesehatan/master', $data);
    }
    // CODE BY ITUSAJJA

   function test() {

      $data = array(
         'data' => $this->Kesehatanm->carisiswa(),
         'session' => $this->session->userdata('username'),
      );

      authApp('kesehatan/kesehatanv', $data);

   }

   public function datalist_kesehatan()
   {
      $data = array(
         'csrf_name' => $this->security->get_csrf_token_name(),
         'csrf_hash' => $this->security->get_csrf_hash(),
      );

      authApp('kesehatan/datalist', $data);
   }

   public function data_kesehatan()
   {
      $post = array(
         'namasiswa' => $this->input->post('namasiswa'),
         'tanggal_awal' => $this->input->post('tanggal_awal'),
         'tanggal_akhir' => $this->input->post('tanggal_akhir'),
      );

      $result = $this->Kesehatanm->data_kesehatan($post);

      echo json_encode($result);
   }
   // selesai

}
