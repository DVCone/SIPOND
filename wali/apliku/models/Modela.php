<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');



 

Class Modela extends CI_Model {

    

    function __construct()

    {

        parent::__construct();

    }



    function caripondok(){

        $query = $this->db->get('sekolah');

        return $query->result();

    } 

    function caribiodata($session){

        $this->db->where('nis', $session);

        $query = $this->db->get('siswa');

        return $query->result();

    }   

    function cariberita(){

        $this->db->order_by('noberita', 'DESC');

        $query = $this->db->get('berita',0,3);

        return $query->result();

    }  



    function carikesehatan($isisesi){

        $this->db->where('nis', $isisesi);

        $this->db->order_by('tanggal', 'DESC');

        $query = $this->db->get('vkesehatan',0,3);

        return $query->result();

    }    



     function cariprestasi($isisesi){

        $this->db->where('nis', $isisesi);

        $this->db->order_by('tanggal', 'DESC');

        $query = $this->db->get('vprestasi',0,3);

        return $query->result();

    }  



     function caripelanggaran($isisesi){

        $this->db->where('nis', $isisesi);

        $this->db->order_by('tanggal', 'DESC');

        $query = $this->db->get('vpelanggaran',0,3);

        return $query->result();

    }      

     function cariabsensi($isisesi){

        $this->db->where('nis', $isisesi);

        $this->db->order_by('tanggal', 'DESC');

        $query = $this->db->get('vabsensisiswa',0,5);

        return $query->result();

    }   

     function caritahfidz($isisesi){                

        $this->db->where('nis', $isisesi);

        $this->db->order_by('tanggal', 'DESC');

        $query = $this->db->get('vtahfidz',0,5);

        return $query->result();

    }       

      function caritahfidztotal($isisesi){

        $this->db->where('nis', $isisesi);

        $query = $this->db->get('vtahfidzrekap');

        return $query->result();

    }   

     function carisppmon($isisesi){

        $this->db->where('nis', $isisesi);

        $query = $this->db->get('vmonitoringspp');

        return $query->result();

    }    

    

     function cariuangsakumasuk($isisesi){

            $this->db->where('nis', $isisesi);

            $query = $this->db->get('vuangsakumasuk');

            foreach ($query->result() as $row)

            {

                $totuangsakumasuk = $row->totmasuk;

            }

            $query = $this->db->get('vuangsakukeluar');

            foreach ($query->result() as $row)

            {

                $totuangsakukeluar = $row->totkeluar;

            }   

            $totsisa=$totuangsakumasuk-$totuangsakukeluar;

            $datauangsaku=array($totuangsakumasuk,$totuangsakukeluar,$totsisa);

            return $datauangsaku->result();

    }        

     function cariuangpangkal($isisesi){                

        $this->db->where('nis', $isisesi);

        $this->db->order_by('tanggal', 'DESC');

        $query = $this->db->get('vselainspp');

        return $query->result();

    }  



    function carisiswaautocomplete(){

        $query = $this->db->get('siswa');

        return $query->result();

    }        

}



 ?>