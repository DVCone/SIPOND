<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keuanganuangsakukeluar extends CI_Controller {

   public function __construct() {
      parent::__construct();
      $this->load->library(['form_validation', 'session', 'twig']);
      $this->load->helper(['form','itusajja', 'cookie', 'url']);
      $this->load->model('Keuanganuangsakukeluarm');
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
      // $this->load->model('Keuanganuangsakukeluarm');
      // $data['data']=$this->Keuanganuangsakukeluarm->carisiswa();
      $this->load->view('keuangan/uangsakukeluar/uangsakukeluarv');
      $this->load->view('footer');
   }
   function simpan()
   {
      $this->load->model('Keuanganuangsakukeluarm');
      $data = array(
         'nis' => $this->input->post('nis'),
         'uangkeluar' => $this->input->post('uangkeluar'),
         'catatan' => $this->input->post('catatan'),
         'tanggal' => $this->input->post('tanggal'),
         'pengguna' => $this->session->userdata('username'),
      );
      $insert = $this->Keuanganuangsakukeluarm->simpan($data);
   }

   function carikeluarterakhir(){
      $this->load->model('Keuanganuangsakukeluarm');
      $nis = $this->input->post('nis');

      $data=$this->Keuanganuangsakukeluarm->carikeluarterakhir($nis);
      echo json_encode($data);
   }

   function carisisauangsaku(){
      $this->load->model('Keuanganuangsakukeluarm');
      $nis = $this->input->post('nis');

      $data=$this->Keuanganuangsakukeluarm->carisisauangsaku($nis);
      echo json_encode($data);
   }
   function hapus($id)
   {

      $this->db->where('nonota', $id);
      $this->db->delete('uangsakukeluar');

      $this->datalist();
   }

   function datalist()
   {
      $this->load->model('Keuanganuangsakukeluarm');
      $data['data']=$this->Keuanganuangsakukeluarm->datalist();


      $this->load->view('header');
      $this->samping();
      $this->load->view('keuangan/uangsakukeluar/datalist',$data);
      $this->load->view('footer');
   }

   public function datalist_uangsakukeluar()
   {
      $data = array(
         'csrf_name' => $this->security->get_csrf_token_name(),
         'csrf_hash' => $this->security->get_csrf_hash(),
      );
      authApp('keuangan/uangsakukeluar/datalist', $data);
   }

   public function data_uangsakukeluar()
   {
      $post = array(
         'tanggal_awal' => $this->input->post('tanggal_awal'),
         'tanggal_akhir' => $this->input->post('tanggal_akhir'),
      );

      $result = $this->Keuanganuangsakukeluarm->data_uangsakukeluar($post);

      echo json_encode($result);
   }

   function carimonitoring(){
      $this->load->model('Keuanganrutinm');
      $nis = $this->input->post('nis');

      $data=$this->Keuanganrutinm->carimonitoring($nis);
      //echo $data;
      echo json_encode($data);
   }
   // selesai

}
