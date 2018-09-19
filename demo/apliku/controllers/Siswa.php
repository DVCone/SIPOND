<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

   public function __construct() {
      parent::__construct();
      $this->load->library(['form_validation','session','twig','pagination']);
      $this->load->helper(['url','form','itusajja','cookie']);
      $this->load->model('Siswam');
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
   function index()
   {
      $this->load->view('header');
      $this->samping();

      $this->load->model('Siswam');
      $data['data']=$this->Siswam->carisiswa();
      $data['kelas'] = $this->Siswam->carikelas();

      $this->load->view('siswa/siswav',$data);
      $this->load->view('siswa/ayahv');
      $this->load->view('siswa/ibuv');
      $this->load->view('siswa/alamatv');
      $this->load->view('footer');
   }
   function simpan()
   {
      $this->load->model('Siswam');
      $data = array(
         'nis' => $this->input->post('nis'),
         'tanggal' => $this->input->post('tanggal'),
         'namapelanggaran' => $this->input->post('namapelanggaran'),
         'tindakan' => $this->input->post('tindakan'),
         'poin' => $this->input->post('poin'),
         'catatan' => $this->input->post('catatan'),
      );
      $insert = $this->Siswam->simpan($data);
   }

   function hapus($id)
   {

      $this->db->where('nis', $id);
      $this->db->delete('siswa');

      $this->datalist();
   }

   function datalist()
   {
      $this->load->model('Siswam');
      $data['data']=$this->Siswam->datalist();


      $this->load->view('header');
      $this->samping();
      $this->load->view('siswa/datalist',$data);
      $this->load->view('footer');
   }

   function carinisterakhir(){
      $this->load->model('Siswam');
      $data = array(
         'namasiswa' => $this->input->post('namasiswa'),
         'kotalahir' => $this->input->post('kotalahir'),
         'tanggallahir' => $this->input->post('tanggallahir'),
         'jeniskelamin' => $this->input->post('jeniskelamin'),
         'golongandarah' => $this->input->post('golongandarah'),
         'anakke' => $this->input->post('anakke'),
         'kelas' => $this->input->post('kodekelas'),
         'spp' => $this->input->post('spp'),
         'daftarulang' => $this->input->post('daftarulang'),
         'lulus' => "0",

      );
      $data = $this->Siswam->carinisterakhir($data);
      echo json_encode($data);
   }

   function updateayah(){
      $this->load->model('Siswam');
      $data = array(
         'nokk' => $this->input->post('nokk'),
         'noktpayah' => $this->input->post('noktpayah'),
         'namaayah' => $this->input->post('namaayah'),
         'ttlayah' => $this->input->post('ttlayah'),
         'email' => $this->input->post('email'),
         'pendidikanayah' => $this->input->post('pendidikanayah'),
         'pekerjaanayah' => $this->input->post('pekerjaanayah'),
         'gajiayah' => $this->input->post('gajiayah'),
      );
      $data = $this->Siswam->updatesiswa($data);
      echo json_encode($data);
   }
   function updateibu(){
      $this->load->model('Siswam');
      $data = array(
         'noktpibu' => $this->input->post('noktpibu'),
         'namaibu' => $this->input->post('namaibu'),
         'ttlibu' => $this->input->post('ttlibu'),
         'pendidikanibu' => $this->input->post('pendidikanibu'),
         'pekerjaanibu' => $this->input->post('pekerjaanibu'),
         'gajiibu' => $this->input->post('gajiibu'),
      );
      $data = $this->Siswam->updatesiswa($data);
      echo json_encode($data);
   }
   function updatealamat(){
      $this->load->model('Siswam');
      $data = array(
         'telephon' => $this->input->post('telephon'),
         'alamat' => $this->input->post('alamat'),
         'kelurahan' => $this->input->post('kelurahan'),
         'kecamatan' => $this->input->post('kecamatan'),
         'alamatkota' => $this->input->post('kota'),
         'provinsi' => $this->input->post('provinsi'),
         'telephon' => $this->input->post('telephon'),
      );
      $data = $this->Siswam->updatesiswa($data);
      echo json_encode($data);
   }

   function test() {
      $this->load->model('Siswam');

      $data = array(
         'data' => $this->Siswam->carisiswa(),
         'kelas' => $this->Siswam->carikelas(),
         'csrf_name' => $this->security->get_csrf_token_name(),
         'csrf_hash' => $this->security->get_csrf_hash(),
         'session' => $this->session->userdata('username'),
      );

      authApp('siswa/siswav', $data);

   }

   function kartupelajar()
   {
      $this->load->model('Siswam');

      $data = array(
         'kelas' => $this->Siswam->carikelas(),
      );

      authApp('siswa/kartupelajar', $data);
   }

   function get_kartu_pelajar($kelas, $page = 0)
   {
      //$kelas = $this->uri->segment(3);
      //$page = $this->uri->segment(4);

      $config['base_url']   = site_url().'/siswa/get_kartu_pelajar/'.$kelas;
      $config['per_page']   = '8';
      $config['total_rows'] = $this->jumlah_kartu_pelajar($kelas);
      $choice = floor($config['total_rows'] / $config['per_page']);
      $config['num_links'] = $choice;

      // Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
      $config['last_link']        = 'Last';
      $config['next_link']        = 'Next';
      $config['prev_link']        = 'Prev';
      $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
      $config['full_tag_close']   = '</ul></nav></div>';
      $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
      $config['num_tag_close']    = '</span></li>';
      $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
      $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
      $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
      $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
      $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
      $config['prev_tagl_close']  = '</span>Next</li>';
      $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
      $config['first_tagl_close'] = '</span></li>';
      $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
      $config['last_tagl_close']  = '</span></li>';

      $this->pagination->initialize($config);

      //if($page == '' || $page == 0) {
      //$start = 0;
      //} else {
      $start = $page;
      //}

      $data = array(
         'kartu_pelajar' => $this->data_kartu_pelajar($kelas, $config['per_page'], $start),
         'links' => $this->pagination->create_links(),
      );

      die(json_encode($data));

   }

   public function pagination_kartu($kelas, $limit, $start)
   {
      $this->db->where('kelas', $kelas);
      $this->db->limit($limit, $start);
      $query = $this->db->get('siswa');
      return $query->result_array();
   }

   public function data_kartu_pelajar($kelas, $limit, $start)
   {
      $result = $this->Siswam->data_kartu_pelajar($kelas, $limit, $start);

      return $result;
   }

   public function jumlah_kartu_pelajar($kelas)
   {
      $this->db->where('kelas', $kelas);
      $query = $this->db->get('siswa');
      return $query->num_rows();
   }

   public function print_kartu_pelajar($kelas)
   {
      //$this->db->where('kelas', $kelas);
      //$query = $this->db->get('siswa');

      $result = $this->Siswam->data_kartu_pelajar($kelas);

      echo json_encode($result);
   }


   //upload foto
   //    public function tambah_foto(){
   //       $data = array();

   //       if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
   //          // lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
   //          $upload = $this->Siswam->upload();

   //          if($upload['result'] == "success"){ // Jika proses upload sukses
   //             // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
   //             $this->Siswam->save($upload);

   //             redirect('siswa/datalist'); // Redirect kembali ke halaman awal / halaman view data
   //          }else{ // Jika proses upload gagal
   //             $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
   //          }
   //       }

   //       $this->load->view('siswa/datalist', $data);
   //    }

   function fotoyadi()
   {
      if (isset($_POST['submit']))
      {
         $this->load->library('upload');

         if (!empty($_FILES['userfile']['name']))
         {
            // Specify configuration for File 1
            $nis= $this->input->post('nis');
            $config['file_name']=$nis;
            $config['upload_path'] = './assets/fotosiswa/';
            $config['allowed_types'] = 'jpg';
            $config['max_size'] = '10000';
            $config['max_width']  = '3000';
            $config['max_height']  = '3000';
            $config['overwrite'] = TRUE;

            // Initialize config for File 1
            $this->upload->initialize($config);
            $error = array();
            $success = array();
            // Upload file 1
            if ($this->upload->do_upload('userfile'))
            {
               // $data = $this->upload->data();
               // $noyatim = $this->input->post('noyatim');
               // $uploadfile = $_FILES['userfile']['name'];
               // $sql="update tblytmpengangkatanyatim set surat = '$uploadfile' where noreferensi = '$noyatim'";
               // $query = $this->db->query($sql);
            }
            else
            {
               echo $this->upload->display_errors();
            }
         }

         // if(count($error) > 0)
         // {
         //  $data['error'] = implode('<br />',$error);
         //  $this->load->view('fotopengajuan',$data);
         // }
         // else
         // {
         //  $data['success'] = implode('<br />',$success);
         //  $this->load->view('upload_success',$data);
         // }
      }
      else
      {
         //$this->load->view("fotopengajuan");
      }
   }


   public function datalist_test()
   {

      $this->load->model('Siswam');
      $data = array(
         'kelas' => $this->Siswam->carikelas(),
         'csrf_name' => $this->security->get_csrf_token_name(),
         'csrf_hash' => $this->security->get_csrf_hash(),
      );

      authApp('siswa/datalist', $data);
   }

   public function do_upload()
   {
      $nis = md5($this->input->post('nis_siswa').date('Yhis'));

      $config = array(
         'file_name' => $nis,
         'max_size' => 1024,
         'upload_path' => './assets/fotosiswa/',
         'allowed_types' => 'jpg|png',
         'overwrite' => TRUE,
      );

      //die(json_encode($config['upload_path']));
      $this->load->library('upload', $config);

      //$this->upload->initialize($config);
      if(!$this->upload->do_upload('upload_foto')) {
         $error = strip_tags($this->upload->display_errors());
         die(json_encode($error));
      } else {
         $result = $this->upload->data();
         $data = array(
            'nis' => $this->input->post('nis_siswa'),
            'foto' => $result['file_name'],
         );

         $this->db->select('foto');
         $this->db->where('nis', $this->input->post('nis_siswa'));
         $old_foto = $this->db->get('siswa')->row('foto');

         $query = $this->Siswam->update_foto_siswa($data);

         if ($old_foto != '') {
            unlink(dirname(__FILE__).'/../../assets/fotosiswa/'.$old_foto);
         }


         die(json_encode($query));
      }
   }

   public function update_biodata_siswa()
   {

      $data = $this->input->post();

      $result = $this->Siswam->update_biodata_siswa($data);

      echo json_encode($result);
   }

   public function foto_siswa()
   {
      $nis = md5($this->input->post('nis').date('Yhis'));

      $config = array(
         'file_name' => $nis,
         'max_size' => 1024,
         'upload_path' => './assets/fotosiswa/',
         'allowed_types' => 'jpg|png',
         'overwrite' => TRUE,
      );

      //die(json_encode($config['upload_path']));
      $this->load->library('upload', $config);

      //$this->upload->initialize($config);
      if(!$this->upload->do_upload('foto_siswa')) {
         $error = strip_tags($this->upload->display_errors());
         die(json_encode($error));
      } else {
         $result = $this->upload->data();
         $data = array(
            'nis' => $this->input->post('nis'),
            'foto' => $result['file_name'],
         );

         $this->db->select('foto');
         $this->db->where('nis', $this->input->post('nis_siswa'));
         $old_foto = $this->db->get('siswa')->row('foto');

         $query = $this->Siswam->update_foto_siswa($data);

         if ($old_foto != '') {
            unlink(dirname(__FILE__).'/../../assets/fotosiswa/'.$old_foto);
         }


         die(json_encode($query));
      }
   }

   public function data_siswa()
   {
      $kelas = $this->input->post("kodekelas");

      $result = $this->Siswam->data_siswa($kelas);

      echo json_encode($result);

   }

   public function get_data_siswa($id)
   {
      $result = $this->Siswam->get_data_siswa($id);

      echo json_encode($result);
   }

   public function data_sekolah()
   {
      $result = $this->Siswam->data_sekolah();

      echo json_encode($result);
   }

   //UPDATE SISWA
   function carisiswa($id) {
      $this->load->model('Siswam');
      $data['data']=$this->Suratm->cariId($id);			

      echo json_encode($data);
   }    



   // selesai

}
