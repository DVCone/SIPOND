<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keuanganrutin extends CI_Controller {

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
         'pengguna'        => 'aaaaa',
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

   function hapus($id)
   {

      $this->db->where('nonota', $id);
      if($this->db->delete('bayarrutin')) {
         echo 'success';
      } else {
         echo 'failed';
      }

   }

   function datalist()
   {
      $this->load->model('Keuanganrutinm');
      $data['data']=$this->Keuanganrutinm->datalist();

      $this->load->view('header');
      $this->samping();
      $this->load->view('keuangan/rutin/datalist',$data);
      $this->load->view('footer');
   }

   public function datalist_spp()
   {
      $data = array(
         'data' => $this->Keuanganrutinm->carisiswa(),
         'csrf_name' => $this->security->get_csrf_token_name(),
         'csrf_hash' => $this->security->get_csrf_hash(),
      );

      authApp('keuangan/rutin/datalist', $data);
   }

   public function data_spp()
   {
      $post = array(
         'tanggal_awal' => $this->input->post('tanggal_awal'),
         'tanggal_akhir' => $this->input->post('tanggal_akhir'),
      );

      $result = $this->Keuanganrutinm->data_spp($post);

      echo json_encode($result);
   }

   public function datalist_nospp()
   {
      $data = array(
         'data' => $this->Keuanganrutinm->carisiswa(),
         'csrf_name' => $this->security->get_csrf_token_name(),
         'csrf_hash' => $this->security->get_csrf_hash(),
      );

      authApp('keuangan/rutin/datalistnonspp', $data);
   }

   public function data_nospp()
   {
      $post = array(
         'tanggal_awal' => $this->input->post('tanggal_awal'),
         'tanggal_akhir' => $this->input->post('tanggal_akhir'),
      );

      $result = $this->Keuanganrutinm->data_nospp($post);

      echo json_encode($result);
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

   public function carinota_piutang()
   {
      $this->db->select_max('nonota');
      $query = $this->db->get('piutang')->result();

      $data = [];

      foreach ($query as $key => $value) {
         $row = [
            'nonota' => $value->nonota+1,
         ];

         $data[] = $row;
      }

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

      public function cash()
      {
         $data = array(
            'csrf_name' => $this->security->get_csrf_token_name(),
            'csrf_hash' => $this->security->get_csrf_hash(),
         );
         authApp('keuangan/rutin/datalistpenerimaancash', $data);
      }

      public function data_cash()
      {
         $post = array(
            'tanggal_awal' => $this->input->post('tanggal_awal'),
            'tanggal_akhir' => $this->input->post('tanggal_akhir'),
         );

         $result = $this->Keuanganrutinm->data_cash($post);

         echo json_encode($result);
      }

      public function transfer()
      {
         $data = array(
            'csrf_name' => $this->security->get_csrf_token_name(),
            'csrf_hash' => $this->security->get_csrf_hash(),
         );
         authApp('keuangan/rutin/datalistpenerimaantransfer', $data);
      }

      public function data_transfer()
      {
         $post = array(
            'tanggal_awal' => $this->input->post('tanggal_awal'),
            'tanggal_akhir' => $this->input->post('tanggal_akhir'),
         );

         $result = $this->Keuanganrutinm->data_transfer($post);

         echo json_encode($result);
      }

      public function uangsakusisa()
      {
         $data = array(
            'csrf_name' => $this->security->get_csrf_token_name(),
            'csrf_hash' => $this->security->get_csrf_hash(),
         );
         authApp('keuangan/rutin/datalistuangsakusisa', $data);
      }

      public function data_uangsakusisa()
      {
         $result = $this->Keuanganrutinm->data_uangsakusisa();

         echo json_encode($result);
      }

      public function monitoringspp()
      {
         $data = array(
            'csrf_name' => $this->security->get_csrf_token_name(),
            'csrf_hash' => $this->security->get_csrf_hash(),
         );
         authApp('keuangan/rutin/datalistmonitoringspp', $data);
      }

      public function data_monitoringspp()
      {
         $result = $this->Keuanganrutinm->data_monitoringspp();

         echo json_encode($result);
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

      public function datalist_pembayaran()
      {
         $data = [
            'csrf_name' => $this->security->get_csrf_token_name(),
            'csrf_hash' => $this->security->get_csrf_hash(),
         ];

         authApp('keuangan/rutin/datalistpembayaran', $data);
      }

      public function data_pembayaran()
      {
         $result = $this->Keuanganrutinm->data_pembayaran();

         echo json_encode($result);
      }

      public function print_nota($nonota)
      {
         $result = $this->Keuanganrutinm->print_nota($nonota);

         echo json_encode($result);
      }

      public function month()
      {
         $result = $this->db->get('vbayarrutin')->result();

         $data = [];
         $month = [];

         foreach ($result as $key => $value) {
            $row = [
               'januari'   => $value->januari,
               'februari'  => $value->februari,
               'maret'     => $value->maret,
               'april'     => $value->april,
               'mei'       => $value->mei,
               'juni'      => $value->juni,
               'juli'      => $value->juli,
               'agustus'   => $value->agustus,
               'september' => $value->september,
               'oktober'   => $value->oktober,
               'november'  => $value->november,
               'desember'  => $value->desember,
            ];

            foreach ($row as $key => $value) {
               if ($value != 0) {
                  $month[$key] = $value;
               }
            }

            $data[] = $month;
         }

         echo json_encode($data);
      }

      public function piutang()
      {
         $data = [
            'data' => $this->Keuanganrutinm->carisiswa(),
            'csrf_name' => $this->security->get_csrf_token_name(),
            'csrf_hash' => $this->security->get_csrf_hash(),
         ];

         authApp('keuangan/piutang', $data);
      }

      public function bayar_piutang() 
      {
         $data = [
            'nonota' => $this->input->post('nonota'),
            'nis' => $this->input->post('nis'),
            'tanggal' => $this->input->post('tanggal'),
            'tanggaldokumen' => $this->input->post('tanggal'),
            'nominal' => $this->input->post('nominal'),
            'keterangan' => $this->input->post('keterangan'),
            'pengguna' => $this->session->userdata('username'),
            'transfer' => $this->input->post('transfer'),
         ];

         $result = $this->Keuanganrutinm->bayar_piutang($data);

         echo json_encode($result);
      }

      // selesai

   }
