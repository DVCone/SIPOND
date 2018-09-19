<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


Class Siswam extends CI_Model {

   function __construct()
   {
      parent::__construct();
   }

   function carisiswa(){
      $this->db->where('lulus', "0");

      $query = $this->db->get('siswa');
      return $query->result();
   }

   function getsiswa(){
      $this->db->where('lulus', "0");
      $this->db->limit('20', 'desc');

      $query = $this->db->get('siswa');
      return $query->result();
   }

   function get_siswa($kelas)
   {
      $this->db->select("namasiswa, nis, kotalahir, tanggallahir, kelas, alamat, kelurahan, kecamatan, provinsi");
      $this->db->where('kelas', $kelas);

      $query = $this->db->get('siswa');
      //$query = $this->db->query("SELECT namasiswa, nis, kotalahir, tanggallahir, kelas from siswa where kelas = '$kelas'");
      return $query->result_array();
   }

   function simpan($data)
   {
      $this->db->insert('siswa', $data);
      return $this->db->insert_id();
   }

   function datalist(){
      //$this->db->where('kelas',"SW1A");
      $query = $this->db->get('siswa');
      return $query->result();
   }




   function carinisterakhir($data){
      $this->db->insert('siswa', $data);
      return $this->db->insert_id();

      $sql = "select max(nis) as maxnis from siswa";
      $query = $this->db->query($sql);
      return $query->result();
   }
   function updatesiswa($data){
      $nis=$this->input->post('nis');
      $this->db->where('nis', $nis);
      $this->db->update('siswa', $data);
      return $this->db->insert_id();
   }

   function carikelas(){
      $query = $this->db->get('kelas');
      return $query->result();
   }

   // upload~foto
   // Fungsi untuk melakukan proses upload file
   //    public function upload(){
   //       $config['upload_path'] = './assets/fotosiswa/';
   //       $config['allowed_types'] = 'jpg|png|jpeg';
   //       $config['max_size']  = '1048';
   //       $config['remove_space'] = TRUE;

   //       $this->load->library('upload', $config); // Load konfigurasi uploadnya
   //       if($this->upload->do_upload('input_gambar')){ // Lakukan upload dan Cek jika proses upload berhasil
   //          // Jika berhasil :
   //          $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
   //          return $return;
   //       }else{
   //          // Jika gagal :
   //          $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
   //          return $return;
   //       }
   //    }

   // Fungsi untuk menyimpan data ke database
   //    public function save($upload){
   //       $data['foto'] = $upload['file']['file_name'];

   //       $this->db->update('siswa', $data);
   //       return $this->db->insert_id();
   //    }

   public function update_foto_siswa($data)
   {
      $this->db->where('nis', $data['nis']);
      $this->db->update('siswa', array('foto' => $data['foto']));
      return true;
   }

   public function get_data()
   {
      $this->db->select('foto, nis, kelas, namasiswa, namaayah, namaibu, telephon');
      $query = $this->db->get('siswa');
      return $query->result();
   }

   public function data_siswa($kelas)
   {
      if ($kelas != '*') {
         $this->db->where('kelas', $kelas);
      }

      $query = $this->db->get('siswa')->result();

      $data = array();

      foreach ($query as $key => $value) {
         $row = array(
            'foto' => $value->foto,
            'nis' => $value->nis,
            'namasiswa' => $value->namasiswa,
            'kelas' => $value->kelas,
            'namaayah' => $value->namaayah,
            'namaibu' => $value->namaibu,
            'telephon' => $value->telephon,
         );

         $data[] = $row;
      }

      $output = array(
         'data' => $data,
      );

      return $output;
   }

   public function update_biodata_siswa($data)
   {
      $this->db->where('nis', $data["nis"]);
      if ($this->db->update('siswa', $data)) {
         $result = 'success';
      } else {
         $result = 'Failed';
      }

      return $result;
      }

      public function get_data_siswa($id)
      {
         $this->db->where('nis', $id);
         $query = $this->db->get('siswa')->result();

         $data = array();

         foreach ($query as $key => $value) {
            $row = array(
               'foto'           => $value->foto,
               'namasiswa'      => $value->namasiswa,
               'kotalahir'      => $value->kotalahir,
               'tanggallahir'   => $value->tanggallahir,
               'jeniskelamin'   => $value->jeniskelamin,
               'golongandarah'  => $value->golongandarah,
               'anakke'         => $value->anakke,
               'kelas'          => $value->kelas,
               'nokk'           => $value->nokk,
               'noktpayah'      => $value->noktpayah,
               'namaayah'       => $value->namaayah,
               'ttlayah'        => $value->ttlayah,
               'email'          => $value->email,
               'pendidikanayah' => $value->pendidikanayah,
               'pekerjaanayah'  => $value->pekerjaanayah,
               'gajiayah'       => $value->gajiayah,
               'noktpibu'       => $value->noktpibu,
               'namaibu'        => $value->namaibu,
               'ttlibu'         => $value->ttlibu,
               'pendidikanibu'  => $value->pendidikanibu,
               'pekerjaanibu'   => $value->pekerjaanibu,
               'gajiibu'        => $value->gajiibu,
               'telephon'       => $value->telephon,
               'alamat'         => $value->alamat,
               'kelurahan'      => $value->kelurahan,
               'kecamatan'      => $value->kecamatan,
               'alamatkota'     => $value->alamatkota,
               'provinsi'       => $value->provinsi,
            );

            $data[] = $row;
         }

         //$output = array(
         //'data' => $query,
         //);

         return $data;
      }

      public function data_sekolah()
      {
         $query = $this->db->get('sekolah')->result();

         return $query;
      }

      public function data_kartu_pelajar($kelas = '', $limit = '', $start = '')
      {
         //$query = $this->db->query('SELECT * FROM siswa, sekolah')->result();
         if ($kelas != '') {
            $this->db->where('kelas', $kelas);
         }

         if ($limit != '') {
            $this->db->limit($limit, $start);
         }

         $this->db->from('siswa, sekolah');
         $query = $this->db->get()->result();

         $data = [];

         foreach ($query as $key => $value) {
            if ($value->foto == '') {
               $foto = 'no-avatar.jpg';
            } else {
               $foto = $value->foto;
            }
            $row = [
               'nis'           => $value->nis,
               'namasiswa'     => $value->namasiswa,
               'tanggallahir'  => date('d F Y', strtotime($value->tanggallahir)),
               'foto'          => $foto,
               'kotalahir'     => $value->kotalahir,
               'alamat'        => $value->alamat,
               'kelurahan'     => $value->kelurahan,
               'kecamatan'     => $value->kecamatan,
               'provinsi'      => $value->provinsi,
               'kepalasekolah' => $value->kepalasekolah,
               'namasekolah'   => $value->namasekolah,
               'alamatsekolah' => $value->alamatsekolah,
               'kabupatensekolah' => 'Kota. '. $value->kabupatensekolah,
            ];

            $data[] = $row;
            }

            return $data;
         }

         function cariId($id){
            $this->db->where('nis', $id);

            $query = $this->db->get('siswa');
            return $query->result()[0];
         }
      }

?>
