<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	 public function __construct() {
	   parent::__construct();
	   $this->load->helper('url');
	     $this->load->library('form_validation');
	     $this->load->helper('form');
	     $this->load->library('session');
	     $this->load->helper(array('cookie', 'url'));
	}

    function logout(){
		//unset($_SESSION['']);
		$this->session->unset_userdata('username');
		$this->session->sess_destroy();
        $this->index();
    }     
    function index()
	{
		$session = $this->session->userdata('username');      
        if (!$this->session->userdata('username')){
           $this->load->view('signin');
        }else{
 	 		$this->load->model('Modela');;
 	 		//Header
 			$biodata['biodata'] = $this->Modela->caribiodata($session);
 			$this->load->view('header',$biodata);  	 		
 	 		//data sekolah
 			$sekolah['sekolah'] = $this->Modela->caripondok();
 			$this->load->view('sekolah',$sekolah);   
 			//biodata siswa
 			$biodata['biodata'] = $this->Modela->caribiodata($session);
 			$this->load->view('data',$biodata); 			
 			//modul berita
 			$berita['berita'] = $this->Modela->cariberita($session);
 			$this->load->view('berita',$berita);   
 			//Absensi
 			$absensi['absensi'] = $this->Modela->cariabsensi($session);
 			$this->load->view('absensi',$absensi); 
 			//prestasi
 			$prestasi['prestasi'] = $this->Modela->cariprestasi($session);
 			$this->load->view('prestasi',$prestasi);    
 			//kesehatan
 			$kesehatan['kesehatan'] = $this->Modela->carikesehatan($session);
 			$this->load->view('kesehatan',$kesehatan);    
 			//Pelanggaran
 			$pelanggaran['pelanggaran'] = $this->Modela->caripelanggaran($session);
 			$this->load->view('pelanggaran',$pelanggaran);   			 
 			//tahfidz
 			$tahfidz['tahfidz'] = $this->Modela->caritahfidz($session);  
 			$this->load->view('tahfidz',$tahfidz);  			
  			//tahfidz total
 			$tahfidz['tahfidz'] = $this->Modela->caritahfidztotal($session);  
 			$this->load->view('tahfidztotal',$tahfidz); 			
 			//SPP
 			$sppmon['sppmon'] = $this->Modela->carisppmon($session);
 			$this->load->view('spp',$sppmon);  

	        //MULAI INI UANG SAKU
            $this->db->where('nis', $session);
			$query = $this->db->get('vuangsakumasuk');
					$totuangsakumasuk=0;
					$totuangsakukeluar=0;
					$tanggalmasukakhir=0;
					$uangmasukakhir=0;
					$tanggalkeluarakhir=0;
					$uangkeluarakhir=0;

		            foreach ($query->result() as $row)
		            {
		                $totuangsakumasuk = $row->totmasuk;
		            }
		            $this->db->where('nis', $session);
		            $query = $this->db->get('vuangsakukeluar');
		            foreach ($query->result() as $row)
		            {
		                $totuangsakukeluar = $row->totkeluar;
		            }   
			            $totsisa=$totuangsakumasuk-$totuangsakukeluar;
			        
			        // cari transaksi terakhir uang masuk dan keluar
			        $this->db->where('nis', $session);
			        $this->db->where('uangsakumasuk !=', '0');
		            $query = $this->db->get('vselainspp',0,1);
		            foreach ($query->result() as $row)
		            {
		                $tanggalmasukakhir = $row->tanggal;
		                $uangmasukakhir = $row->uangsakumasuk;
		            }  
			        
			        $this->db->where('nis', $session);
		            $query = $this->db->get('vuangsakukeluardetail',0,1); 
		            foreach ($query->result() as $row)
		            {
		                $tanggalkeluarakhir = $row->tanggal;
		                $uangkeluarakhir = $row->uangkeluar;
		            } 

						$datauangsaku['datauangsaku'] = array( array(  'totuangsakumasuk'    =>  $totuangsakumasuk,
						'totuangsakukeluar'    =>  $totuangsakukeluar,
						'totsisa'    =>  $totsisa,
						'tanggalmasukakhir'    =>  $tanggalmasukakhir,
						'uangmasukakhir'    =>  $uangmasukakhir,
						'tanggalkeluarakhir'    =>  $tanggalkeluarakhir,
						'uangkeluarakhir'    =>  $uangkeluarakhir
						)  
		                    );
 			$this->load->view('uangsaku',$datauangsaku);   
			// INI SELESAI UANG SAKU
 			//UANG PANGKAL
 			$uangpangkal['uangpangkal'] = $this->Modela->cariuangpangkal($session);  
 			$this->load->view('uangpangkal',$uangpangkal);
  //       }else{
  //       	$this->load->view('data');
		 			 					 			
  //       }			

        }        		
	}

	function proses(){

				$this->load->model('m_master_userid','',true); 

				$username  = $this->input->post('username', TRUE);
				$password = $this->input->post('password', TRUE);

				$username  =  $this->security->xss_clean(trim(htmlentities($username)));
				$password  =  $this->security->xss_clean(trim(htmlentities($password)));

				$username = str_replace("'", '', $username);		
				$password = str_replace("'","",$password);

				// validasi form
				$this->form_validation->set_rules('username', 'Username', 'required');
				$this->form_validation->set_rules('password', 'Password', 'required');
				$this->form_validation->run();			
				//  inisialisasi 
				$data['username'] = '';
				$data['password'] = '';

				$result= $this->m_master_userid->get_userid($username,$password);
				foreach ($result->result() as $row ){
		            $data['username'] = $row->userid;
		            $data['password'] = $row->password;
	        	}

		        if ($username==$data['username'] and $password==$data['password']){
		        	$this->session->set_userdata('username',$username);
		        }
		        // kembali ke index
		        $this->index();
    }

}
