<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keuanganjurnal extends CI_Controller {

   public function __construct() {
      parent::__construct();
      $this->load->library(['form_validation', 'session', 'twig']);
      $this->load->helper(['form','itusajja', 'cookie', 'url']);
      $this->load->model('Keuanganrutinm');
      if($this->session->userdata('username') == "") {
         redirect(site_url('/login'));
      }
   }

   function samping()
	{
		$session = $this->session->userdata('username');
		$this->load->model('modela');
		$data['data']=$this->modela->datalist($session);

		$this->load->view('sampingkiri',$data); 
	}

   function keluar()
   {
      $this->load->view('header');
      $this->samping();

      $this->load->model('Keuanganjurnalm');
      $data['data']=$this->Keuanganjurnalm->carirekening();

      $this->load->view('keuangan/jurnal/jurnalkeluarv',$data);
      $this->load->view('footer');
   }

   function test()
   {
      $this->load->view('header');
      $this->samping();

      $this->load->model('Keuanganrutinm');
      $data['data']=$this->Keuanganrutinm->carisiswa();

      $this->load->view('keuangan/rutin/rutinv',$data);
      $this->load->view('footer');
   }
   
   public function index()
   {
      $data = array(
         'data' => $this->Keuanganrutinm->carisiswa(),
         'csrf_name' => $this->security->get_csrf_token_name(),
         'csrf_hash' => $this->security->get_csrf_hash(),
      );

      authApp('keuangan/rutin/rutinv', $data);
   }

   function simpan()
   {
      $this->load->model('Keuanganrutinm');
      $data = array(
         'nis'             => $this->input->post('nis'),
         'uangsakumasuk'   => $this->input->post('uangsakumasuk'),
         'bimbel'          => $this->input->post('bimbel'),
         'daftarulang'     => $this->input->post('daftarulang'),
         'uangpangkal'     => $this->input->post('uangpangkal'),
         'infaq'           => $this->input->post('infaq'),
         'keteranganinfaq' => $this->input->post('catataninfaq'),
         'tanggal'         => $this->input->post('tanggal'),
         'januari'         => $this->input->post('januari'),
         'februari'        => $this->input->post('februari'),
         'maret'           => $this->input->post('maret'),
         'april'           => $this->input->post('april'),
         'mei'             => $this->input->post('mei'),
         'juni'            => $this->input->post('juni'),
         'juli'            => $this->input->post('juli'),
         'agustus'         => $this->input->post('agustus'),
         'september'       => $this->input->post('september'),
         'oktober'         => $this->input->post('oktober'),
         'november'        => $this->input->post('november'),
         'desember'        => $this->input->post('desember'),
         'nonota'          => $this->input->post('nonota'),
         'transfer'        => $this->input->post('transfer'),
         'pengguna'        => $this->session->userdata('username'),
      );
      $insert = $this->Keuanganrutinm->simpan($data);
   }

   function kartupelajar()
   {
      $this->load->model('Keuanganrutinm');
      //$data['data']=$this->Keuanganrutinm->datalist();
      $data['siswa'] = $this->Keuanganrutinm->getsiswa();

      $this->load->view('header');
      $this->samping();
      $this->load->view('keuangan/kartupelajar',$data);
      $this->load->view('footer');
   }

   function kartupelajar_test()
   {
      $this->load->model('Keuanganrutinm');
      //$data['data']=$this->Keuanganrutinm->datalist();
      $data['siswa'] = $this->Keuanganrutinm->getsiswa();

      authApp('keuangan/kartupelajar', $data);
   }

   function get_siswa()
   {
      $this->load->model('Keuanganrutinm');

      $data = $this->Keuanganrutinm->getsiswa();
      die(json_encode($data));

   }

   // function hapus($id)
   // 	{

   // 		$this->db->where('nourut', $id);
   //   		    $this->db->delete('kesehatan');

   // 		$this->datalist();
   // 	}

   function datalist()
   {
      $this->load->model('Keuanganrutinm');
      $data['data']=$this->Keuanganrutinm->datalist();

      $this->load->view('header');
      $this->samping();
      $this->load->view('keuangan/rutin/datalist',$data);
      $this->load->view('footer');
   }

   function datalistmonitoringspp()
   {
      $this->load->model('Keuanganrutinm');
      $data['data']=$this->Keuanganrutinm->datalistmonitoringspp();

      $this->load->view('header');
      $this->samping();
      $this->load->view('keuangan/rutin/datalistmonitoringspp',$data);
      $this->load->view('footer');
   }

   function datalistnonspp()
   {
      $this->load->model('Keuanganrutinm');
      $data['data']=$this->Keuanganrutinm->datalistnonspp();

      $this->load->view('header');
      $this->samping();
      $this->load->view('keuangan/rutin/datalistnonspp',$data);
      $this->load->view('footer');
   }

   function carimonitoring(){
      $this->load->model('Keuanganrutinm');
      $nis = $this->input->post('nis');

      $data=$this->Keuanganrutinm->carimonitoring($nis);
      echo json_encode($data);
   }
   function carinonota(){
      $this->load->model('Keuanganrutinm');
      $data=$this->Keuanganrutinm->carinonota();
      echo json_encode($data);
   }

   public function carisiswa() {
      $this->load->model('Keuangansettingsiswam');
      $data = $this->Keuangansettingsiswam->getsiswa();
      $test = array_column($data, 'namasiswa');
      echo json_encode($test);
   }

   public function penerimaancash()
   {
      $this->load->model('Keuanganrutinm');
      $data['data']=$this->Keuanganrutinm->datalistpenerimaancash();

      $this->load->view('header');
      $this->samping();
      $this->load->view('keuangan/rutin/datalistpenerimaancash',$data);
      $this->load->view('footer');

   }
   public function penerimaancashcari()
   {
      $this->load->model('Keuanganrutinm');
      $data['data']=$this->Keuanganrutinm->datalistpenerimaancashcari();

      $this->load->view('header');
      $this->samping();
      $this->load->view('keuangan/rutin/datalistpenerimaancash',$data);
      $this->load->view('footer');

   }
   public function penerimaantransfer()
   {
      $this->load->model('Keuanganrutinm');
      $data['data']=$this->Keuanganrutinm->datalistpenerimaantransfer();

      $this->load->view('header');
      $this->samping();
      $this->load->view('keuangan/rutin/datalistpenerimaantransfer',$data);
      $this->load->view('footer');

   }
   public function penerimaantransfercari()
   {
      $this->load->model('Keuanganrutinm');
      $data['data']=$this->Keuanganrutinm->datalistpenerimaantransfercari();

      $this->load->view('header');
      $this->samping();
      $this->load->view('keuangan/rutin/datalistpenerimaantransfer',$data);
      $this->load->view('footer');

   }

   public function datalistuangsakusisa()
   {
      $this->load->model('Keuanganrutinm');
      $data['data']=$this->Keuanganrutinm->datalistuangsakusisa();

      $this->load->view('header');
      $this->samping();
      $this->load->view('keuangan/rutin/datalistuangsakusisa',$data);
      $this->load->view('footer');

   }

   // selesai

}
