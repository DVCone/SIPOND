<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


Class Keuanganjurnalm extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function carirekening(){
        $query = $this->db->get('rekening');
        return $query->result();
    }
    

    function getsiswa(){
        $this->db->where('lulus', "0");
        $this->db->limit('8', 'desc');

        $query = $this->db->get('siswa');
        return $query->result();
    }

    function simpan($data)
    {
        $this->db->insert('bayarrutin', $data);
        return $this->db->insert_id();
    }


    function datalist(){
        $query = $this->db->get('vspp');
        return $query->result();
    }
    function datalistnonspp(){
        $query = $this->db->get('vselainspp');
        return $query->result();
    }

    function datalistmonitoringspp(){
        $query = $this->db->get('vmonitoringspp');
        return $query->result();
    }

//laporan penerimaan cash/transfer
    function datalistpenerimaancash(){
        $this->db->where('transfer', "CASH");
        $query = $this->db->get('vpenerimaan');
        return $query->result();
    }
    function datalistpenerimaancashcari(){
      $tanggalmulai=$_POST['tanggalmulai'];
  		$tanggalselesai=$_POST['tanggalselesai'];
  		$sql="select * from vpenerimaancash where tanggal BETWEEN '$tanggalmulai' AND '$tanggalselesai'";
  		$query = $this->db->query($sql);
  		return $query->result();
    }
    function datalistpenerimaantransfer(){
        $this->db->where('transfer', "TRANSFER");
        $query = $this->db->get('vpenerimaan');
        return $query->result();
    }
    function datalistpenerimaantransfercari(){
      $tanggalmulai=$_POST['tanggalmulai'];
  		$tanggalselesai=$_POST['tanggalselesai'];
  		$sql="select * from vpenerimaantransfer where tanggal BETWEEN '$tanggalmulai' AND '$tanggalselesai'";
  		$query = $this->db->query($sql);
  		return $query->result();
    }
//selesai laporan penerimaan cash/transfer

    function datalistuangsakusisa(){
        $query = $this->db->get('vuangsakusisa');
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
    function carinonota(){
        $sql = "select COUNT(nonota) as maxnota from bayarrutin";
        $query = $this->db->query($sql);
        return $query->result();
    }
}

 ?>
