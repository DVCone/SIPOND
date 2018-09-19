<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


Class Keuanganuangsakukeluarm extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function carisiswa(){
        $this->db->where('lulus', "0");

        $query = $this->db->get('siswa');
        return $query->result();
    }

    function simpan($data)
    {
      $this->db->insert('uangsakukeluar', $data);
      return $this->db->insert_id();

    }


    function datalist(){
        $query = $this->db->get('vuangsakukeluardetail');
        return $query->result();
    }

    function carimonitoring($nis){
        // $this->db->where('nis', $nis);
        // $this->db->where('bulan', $bulan);
        //$query = $this->db->get('monitoringspp');
        $sql = "select * from monitoringspp where nis = '$nis'";
        $query = $this->db->query($sql);
        return $query->result();
    }

    function carisisauangsaku($nis){
          $sql = "select vuangsakumasuk.nis, format((vuangsakumasuk.totmasuk - ifnull(vuangsakukeluar.totkeluar,0)),0) as totsisa from vuangsakukeluar RIGHT join vuangsakumasuk on vuangsakukeluar.nis=vuangsakumasuk.nis where vuangsakumasuk.nis = '$nis'";
          $query = $this->db->query($sql);
          return $query->result();
      }
  	function carikeluarterakhir($nis){
          $sql = "select DATE_FORMAT( tanggal,  '%D %b %Y' ) as tanggal, format(uangkeluar,0) as uangkeluar from uangsakukeluar where nis = '$nis' order by uangsakukeluar.tanggal desc LIMIT 0 , 1";
          $query = $this->db->query($sql);
          return $query->result();
      }

    public function data_uangsakukeluar($data)
    {
      $this->db->where('tanggal >=', $data['tanggal_awal']);
      $this->db->where('tanggal <=', $data['tanggal_akhir']);
      $query = $this->db->get('vuangsakukeluardetail')->result();

      $data = array();
      $no = 1;

      foreach ($query as $key => $value) {
         $row = array(
            'no'         => $no,
            'nis'        => $value->nis,
            'namasiswa'  => $value->namasiswa,
            'kelas'      => $value->kelas,
            'tanggal'    => $value->tanggal,
            'uangkeluar' => number_format($value->uangkeluar),
            'catatan'    => $value->catatan,
            'pengguna'   => $value->nonota,
         );
         $no++;
         $data[] = $row;
      }

      $output = array(
         'data' => $data,
      );

      return $output;
    }

}

 ?>
