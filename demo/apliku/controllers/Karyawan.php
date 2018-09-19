<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

   public function __construct() {
      parent::__construct();
      $this->load->library(['form_validation', 'session', 'twig']);
      $this->load->helper(['form','itusajja', 'cookie', 'url']);
      $this->load->model('Karyawanm');
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

      $this->load->model('Karyawanm');
      $data['data']=$this->Karyawanm->cari();

      $this->load->view('karyawan/karyawanv',$data);
      $this->load->view('karyawan/alamatv');
      $this->load->view('footer');
   }
   function simpan()
   {
      $this->load->model('Karyawanm');
      $data = array(
         'nis' => $this->input->post('nis'),
         'tanggal' => $this->input->post('tanggal'),
         'namapelanggaran' => $this->input->post('namapelanggaran'),
         'tindakan' => $this->input->post('tindakan'),
         'poin' => $this->input->post('poin'),
         'catatan' => $this->input->post('catatan'),
      );
      $insert = $this->Karyawanm->simpan($data);
   }

   function hapus($id)
   {

      $this->db->where('nik', $id);
      $this->db->delete('pegawai');

      $this->datalist();
   }

   function datalist()
   {
      $this->load->model('Karyawanm');
      $data['data']=$this->Karyawanm->datalist();


      $this->load->view('header');
      $this->samping();
      $this->load->view('karyawan/datalist',$data);
      $this->load->view('footer');
   }

   public function datalist_karyawan()
   {
      $data = array(
         'csrf_name' => $this->security->get_csrf_token_name(),
         'csrf_hash' => $this->security->get_csrf_hash(),
      );

      authApp('karyawan/datalist', $data);
   }

   public function data_karyawan()
   {
      $result = $this->db->get('pegawai')->result();
      $data = array(
         'data' => $result,
      );

      echo json_encode($data);
   }

   public function get_data_karyawan($nik)
   {
      $this->db->where('nik', $nik);
      $result = $this->db->get('pegawai')->result();

      echo json_encode($result);
   }



   function carinisterakhir(){
      $this->load->model('Karyawanm');
      $data = array(
         'nama' => $this->input->post('nama'),
         'kotalahir' => $this->input->post('kotalahir'),
         'tanggallahir' => $this->input->post('tanggallahir'),
         'gender' => $this->input->post('gender'),
         'golongandarah' => $this->input->post('golongandarah'),
         'statusnikah' => $this->input->post('statusnikah'),
         'pendidikanterakhir' => $this->input->post('pendidikanterakhir'),
         'jabatan' => $this->input->post('jabatan'),
         'nohp1' => $this->input->post('nohp1'),
         'keluar' => "0",

      );
      $data = $this->Karyawanm->carinisterakhir($data);
      echo json_encode($data);
   }
   function updatealamat(){
      $this->load->model('Karyawanm');
      $data = array(
         'alamat' => $this->input->post('alamat'),
         'kelurahan' => $this->input->post('kelurahan'),
         'kecamatan' => $this->input->post('kecamatan'),
         'kota' => $this->input->post('kota'),
         'provinsi' => $this->input->post('provinsi'),
      );
      $data = $this->Karyawanm->updatekaryawan($data);
      echo json_encode($data);
   }

   function test() {
      $this->load->model('Karyawanm');

      $data = array(
         'data' => $this->Karyawanm->cari(),
         'csrf_name' => $this->security->get_csrf_token_name(),
         'csrf_hash' => $this->security->get_csrf_hash(),
         'session' => $this->session->userdata('username'),
      );

      authApp('karyawan/karyawanv', $data);

   }

   public function update_biodata_karyawan()
   {
      $data = $this->input->post();

      $result = $this->Karyawanm->update_biodata_karyawan($data);

      echo json_encode($result);
   }
   // selesai

}
