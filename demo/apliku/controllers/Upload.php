<?php 

class Upload extends CI_Controller {

    function __construct()
    {
        // this is your constructor
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
    }


function display_errors()
{
	echo "Error Simpan";
}

function simpansurat()
    {
		//  if (isset($_POST['submit']))
		// {
			$this->load->library('upload');
	 
			if (!empty($_FILES['userfile']['name']))
			{
				// Specify configuration for File 1
				$config['file_name']=$_FILES['userfile']['name'];
				$config['upload_path'] = 'gambar/';
				$config['allowed_types'] = 'pdf|zip|rar';
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
					$data = $this->upload->data();
					// $noyatim = $this->input->post('noyatim');	
					// $uploadfile = $_FILES['userfile']['name'];
					// $sql="update tblytmpengajuanyatim set surat = '$uploadfile' where noreferensi = '$noyatim'";
					//$query = $this->db->query($sql); 
				}
				else
				{
					echo $this->upload->display_errors();
				}
	 
			}
			
			  if(count($error) > 0)
			  {
				 $data['error'] = implode('<br />',$error);
				 //$this->load->view('fotopengajuan',$data);
			  }
			  else
			  {
				 $data['success'] = implode('<br />',$success);
				redirect(base_url("index.php/welcome/pelanggan"));
			  }			
		// }
		// else
		// {
		// 	redirect(base_url("index.php/welcome/pelangganlist"));
		// }     

    }

	
}