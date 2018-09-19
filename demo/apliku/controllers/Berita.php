<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

   public function __construct() {
      parent::__construct();
      $this->load->library(['form_validation', 'session', 'twig']);
      $this->load->helper(['form','itusajja', 'cookie', 'url']);
      $this->load->model('Beritam');
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

   //function index()
   //{
   //$this->load->view('header');
   //$this->samping();

   //$this->load->view('berita/beritav');
   //$this->load->view('footer');
   //}

   public function index()
   {
      $data = array(
         'csrf_name' => $this->security->get_csrf_token_name(),
         'csrf_hash' => $this->security->get_csrf_hash(),
      );

      authApp('berita/master', $data);
   }

   public function simpan()
   {
      $data = array(
         'ditujukan' => $this->input->post('ditujukan'),
         'isi'       => $this->input->post('isi'),
         'judul'     => $this->input->post('judul'),
         'pj'        => $this->input->post('pj'),
         'tanggal'   => $this->input->post('tanggal'),
      );
      
      $insert = $this->Beritam->simpan($data);
   }

   public function data_berita()
   {
      $query = $this->db->get('berita')->result();

      $result = [
         'data' => $query
      ];

      echo json_encode($result);
   }


   function hapus($id)
   {

      $this->db->where('noberita', $id);
      $this->db->delete('berita');

      $this->datalist();
   }

   function datalist()
   {
      $this->load->model('Beritam');
      $data['data']=$this->Beritam->datalist();


      $this->load->view('header');
      $this->load->view('sampingkiri');
      $this->load->view('berita/datalist',$data);
      $this->load->view('footer');
   }

   // selesai

}
