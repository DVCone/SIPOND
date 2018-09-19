<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keuanganlaporan extends CI_Controller {

   public function __construct() {
      parent::__construct();
      $this->load->library(['form_validation', 'session', 'twig']);
      $this->load->helper(['form','itusajja', 'cookie', 'url']);
      $this->load->model('Keuanganlaporanm');
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


   function jurnal()
   {
      $this->load->model('Keuanganlaporanm');
      $data['data']=$this->Keuanganlaporanm->jurnal();

      $this->load->view('header');
      $this->samping();
      $this->load->view('keuangan/laporan/jurnal',$data);
      $this->load->view('footer');
   }

   public function datalist_jurnal()
   {
      $data = array(
         'csrf_name' => $this->security->get_csrf_token_name(),
         'csrf_hash' => $this->security->get_csrf_hash(),
      );

      authApp('keuangan/laporan/jurnal', $data);
   }

   public function data_jurnal()
   {
      $post = array(
         'tanggal_awal' => $this->input->post('tanggal_awal'),
         'tanggal_akhir' => $this->input->post('tanggal_akhir'),
      );

      $result = $this->Keuanganlaporanm->data_jurnal($post);

      echo json_encode($result);
   }

   public function datalist_bukubesar()
   {
      $data = array(
         'csrf_name' => $this->security->get_csrf_token_name(),
         'csrf_hash' => $this->security->get_csrf_hash(),
         'rekening' => $this->Keuanganlaporanm->rekening(),
      );

      authApp('keuangan/laporan/bukubesar', $data);
   }

   public function data_bukubesar()
   {
      $post = array(
         'tanggal_awal' => $this->input->post('tanggal_awal'),
         'tanggal_akhir' => $this->input->post('tanggal_akhir'),
         'namarekening' => $this->input->post('namarekening'),
      );

      $result = $this->Keuanganlaporanm->data_bukubesar($post);

      echo json_encode($result);
   }

   public function datalist_neracasaldo()
   {
      $data = array(
         'csrf_name' => $this->security->get_csrf_token_name(),
         'csrf_hash' => $this->security->get_csrf_hash(),
      );

      authApp('keuangan/laporan/neracasaldo', $data);
   }

   public function data_neracasaldo()
   {
      $result = $this->Keuanganlaporanm->data_neracasaldo();

      echo json_encode($result);
   }

   function jurnalcari()
   {
      $this->load->model('Keuanganlaporanm');
      $data['data'] = $this->Keuanganlaporanm->jurnalcari();

      $this->load->view('header');
      $this->samping();
      $this->load->view('keuangan/laporan/jurnal',$data);
      $this->load->view('footer');
   }

   function bukubesar()
   {
      $this->load->model('Keuanganlaporanm');
      $data['data']=$this->Keuanganlaporanm->bukubesar();
      $data2['data2'] = $this->Keuanganlaporanm->rekening();

      $this->load->view('header');
      $this->samping();
      $this->load->view('keuangan/laporan/bukubesarawal',$data2);
      $this->load->view('keuangan/laporan/bukubesar',$data);
      $this->load->view('footer');
   }
   function bukubesarcari()
   {
      $this->load->model('Keuanganlaporanm');
      $data['data'] = $this->Keuanganlaporanm->bukubesarcari();
      $data2['data2'] = $this->Keuanganlaporanm->rekening();

      $this->load->view('header');
      $this->load->view('sampingkiri');
      $this->load->view('keuangan/laporan/bukubesarawal',$data2);
      $this->load->view('keuangan/laporan/bukubesar',$data);
      $this->load->view('footer');
   }
   function neracasaldo()
   {
      $this->load->model('Keuanganlaporanm');
      $data['data']=$this->Keuanganlaporanm->neracasaldo();
      $data['data2']=$this->Keuanganlaporanm->neracasaldo2();
      $this->load->view('header');
      $this->samping();
      $this->load->view('keuangan/laporan/neracasaldo',$data);
      $this->load->view('keuangan/laporan/neracasaldo2',$data);
      $this->load->view('footer');
   }
   function index()
   {

   }

   // selesai

}
