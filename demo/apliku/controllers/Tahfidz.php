<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tahfidz extends CI_Controller {

   public function __construct() {
      parent::__construct();
      $this->load->library(['form_validation', 'session', 'twig']);
      $this->load->helper(['form','itusajja', 'cookie', 'url']);
      $this->load->model('Tahfidzm');
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
  //  function index()
  //  {
  //     $this->load->view('header');
  //     $this->samping();

  //     $this->load->model('Tahfidzm');
  //     $data['data']=$this->Tahfidzm->carisiswa();

  //     $this->load->view('tahfidz/tahfidzv',$data);
  //     $this->load->view('footer');
  //  }

  // CODE BY ITUSAJJA
  public function index(){
    $data = [
      'data' => $this->Tahfidzm->carisiswa(),
        'session' => $this->session->userdata('username'),
    ];
    authApp('tahfidz/master', $data);
}
// CODE BY ITUSAJJA

   function simpan()
   {
      $this->load->model('Tahfidzm');
      $data = array(
         'nis' => $this->input->post('nis'),
         'tanggal' => $this->input->post('tanggal'),
         'tambahan' => $this->input->post('tambahan'),
         'murojaah' => $this->input->post('murojaah'),
         'tambahanketerangan' => $this->input->post('tambah_keterangan'),
         'murojaahbaru' => $this->input->post('murojaahbaru'),
      );
      $insert = $this->Tahfidzm->simpan($data);
   }

   function hapus($id)
   {

      $this->db->where('nourut', $id);
      $this->db->delete('tahfidz');

      $this->datalist();
   }

   function datalist()
   {
      $this->load->model('Tahfidzm');
      $data['data']=$this->Tahfidzm->datalist();


      $this->load->view('header');
      $this->samping();
      $this->load->view('tahfidz/datalist',$data);
      $this->load->view('footer');
   }

   function test() {
      $this->load->model('Tahfidzm');

      $data = array(
         'data' => $this->Tahfidzm->carisiswa(),
         'csrf_name' => $this->security->get_csrf_token_name(),
         'csrf_hash' => $this->security->get_csrf_hash(),
         'session' => $this->session->userdata('username'),
      );

      authApp('tahfidz/tahfidzv', $data);

   }

   public function datalist_tahfidz()
   {
      $data = array(
         'csrf_name' => $this->security->get_csrf_token_name(),
         'csrf_hash' => $this->security->get_csrf_hash(),
      );

      authApp('tahfidz/datalist', $data);
   }

   public function data_tahfidz()
   {
      $post = array(
        'namasiswa' => $this->input->post('namasiswa'),
         'tanggal_awal' => $this->input->post('tanggal_awal'),
         'tanggal_akhir' => $this->input->post('tanggal_akhir'),
      );

      $result = $this->Tahfidzm->data_tahfidz($post);

      echo json_encode($result);
   }

   public function data_rekap_tahfidz()
   {
      $result = $this->db->get('vtahfidzrekap')->result();

      $output = [
         'data' => $result,
      ];

      echo json_encode($output);
   }
   // selesai

}
