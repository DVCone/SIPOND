<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Php_excel extends CI_Controller {

	public $nama_tabel = 'data';

	public function __construct()
	{
		parent::__construct();
		$this->load->library("PHPExcel");
		$this->load->model("phpexcel_model");
	}

	public function index(){
		$this->load->view('welcome_message');
	}

	public function import($success=""){
		$data['judul_besar'] = 'PHPExcel';
		$data['judul_kecil'] = 'Import';
		$data['output'] = "<h4>Sebelum mengupload, pastikan file anda berformat <strong>.xls/.xlsx</strong></h4>";
		$data['output'] .= form_open_multipart('php_excel/do_upload');
		$form = array(
					'name'        => 'userfile',
					'style'       => 'position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity=0);opacity:0;background-color:transparent;color:transparent;',
					'onchange'	=> "$('#upload-file-info').html($(this).val());"
				);
		$data['output'] .= "<div style='position:relative;'>";
		$data['output'] .= "<a class='btn btn-primary' href='javascript:;'>";
		$data['output'] .= "Browse… ".form_upload($form);
		$data['output'] .= "</a>";
		$data['output'] .= "&nbsp;";
		$data['output'] .= "<span class='label label-info' id='upload-file-info'></span>";
		$data['output'] .= "</div>";
		$data['output'] .= "<br>";
		$data['output'] .= form_submit('name', 'Go !', 'class = "btn btn-default"');
		$data['output'] .= form_close();
		if ($success) {
			$data['pesan'] = '<div class="alert alert-success alert-dismissible">';
			$data['pesan'] .= '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
			$data['pesan'] .= '<h4><i class="icon fa fa-check"></i> Alert!</h4>';
			$data['pesan'] .= 'Success alert preview. This alert is dismissable.';
			$data['pesan'] .= '</div>';
		}

		$this->load->view('welcome_message', $data, FALSE);
	}

	public function do_upload(){
		$config['upload_path'] = './assets/uploads/';
        $config['allowed_types'] = 'xlsx|xls';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload()){
			$error = array('error' => $this->upload->display_errors());
		}
		else{
			$data = array('upload_data' => $this->upload->data());
            $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
            $filename = $upload_data['file_name'];
            $this->phpexcel_model->upload_data($filename);
            unlink('./assets/uploads/'.$filename);
            redirect('php_excel/import/success','refresh');
		}
	}

	public function export($id){
		// membuat obyek dari class PHPExcel
		$this->load->library("PHPExcel");
		$objPHPExcel = new PHPExcel();
		$myWorkSheet = new PHPExcel_Worksheet($objPHPExcel, 'sssss');
		$lembarkerja=0;
		$objPHPExcel->addSheet($myWorkSheet, $lembarkerja);
		// mengeset sheet 2 yang aktif
		$objPHPExcel->setActiveSheetIndex($lembarkerja);
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('0','5','No');
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('1','5','Nama Siswa');
    //
    //
		// $sql="SELECT * FROM vsetingmapel where nik='$id'";
		// $result = mysql_query($sql) or die("Tidak Bisa Cari Seting Mapel");
		// $num_rows = mysql_num_rows($result);
		// if ($num_rows == 0)
		// 	{	echo "Max Formulir Tidak Ditemukan";	}
		// else
		// {
		// 	$lembarkerja=0;
		// 	while($row=mysql_fetch_array($result))
		// 	{
    //
		// 		$noid = $row['noid'];
		// 		$namaguru = $row['nama'];
		// 	   $query = "SELECT siswa.namasiswa,vsetingmapel.noid,siswa.nis FROM vsetingmapel INNER JOIN siswa on vsetingmapel.kelas=siswa.kelas where vsetingmapel.noid='$noid'";
		// 	   $data = $this->db->query($query);
    //
		// 		$myWorkSheet = new PHPExcel_Worksheet($objPHPExcel, $row['namamapel'].' '.$row['kelas']);
		// 		$objPHPExcel->addSheet($myWorkSheet, $lembarkerja);
		// 		// mengeset sheet 2 yang aktif
		// 		$objPHPExcel->setActiveSheetIndex($lembarkerja);
    //
		// 		$objPHPExcel->getActiveSheet()->mergeCells('A4:W4');
		// 		$objPHPExcel->getActiveSheet()->setCellValue('A4',$row['noid'].' '.$row['nama'].' '.$row['namamapel'].' '.$row['kelas']);
		// 		$objPHPExcel->getActiveSheet()->getStyle('A4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    //
		// 		$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
		// 		$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(30);
		// 		$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(5);
		// 		$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(12);
		// 		$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(5);
		// 		$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(5);
		// 		$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(5);
		// 		$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(5);
		// 		$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(5);
		// 		$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(5);
		// 		$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(5);
		// 		$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(5);
		// 		$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(5);
		// 		$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(5);
		// 		$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(7);
		// 		$objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(5);
		// 		$objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(7);
		// 		$objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(5);
		// 		$objPHPExcel->getActiveSheet()->getColumnDimension('S')->setWidth(7);
		// 		$objPHPExcel->getActiveSheet()->getColumnDimension('T')->setWidth(8);
		// 		$objPHPExcel->getActiveSheet()->getColumnDimension('U')->setWidth(8);
		// 		$objPHPExcel->getActiveSheet()->getColumnDimension('V')->setWidth(8);
    //
		// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('0','5','No');
		// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('1','5','Nama Siswa');
		// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('2','5','Kode');
		// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('3','5','NIS');
		// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('4','5','H1');
		// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('5','5','H2');
		// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('6','5','H3');
		// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('7','5','H4');
		// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('8','5','RH');
		// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('9','5','U1');
		// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('10','5','U2');
		// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('11','5','U3');
		// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('12','5','RU');
		// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('13','5','Mid');
		// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('14','5','R Mid');
		// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('15','5','UAS');
		// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('16','5','R UAS');
		// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('17','5','Akh');
		// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('18','5','R Akh');
		// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('19','5','Total');
		// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('20','5','Her');
		// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('21','5','Rapor');
    //
	  //        //    // Nama Field Baris Pertama
	  //       	 $fields = $data->list_fields();
		//         // // Mengambil Data
		//          $row = 6;
		//          $urut=1;
		//         foreach($data->result() as $data)
		//         {
		//             $col = 1;
		//             $colx=8;
		//             foreach ($fields as $field)
		//             {
		//             	$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $row, $urut);
		//                 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $data->$field);
    //
    //
    //
		// 				$objPHPExcel->getActiveSheet()->getStyle('A'.$row.':D'.$row)->getFill()
		// 				->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('87CEEB');
		//                 $objPHPExcel->getActiveSheet()->getStyle('I'.$row)->getFill()
		//                 ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('87CEEB');
		//                 $objPHPExcel->getActiveSheet()->getStyle('M'.$row)->getFill()
		//                 ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('87CEEB');
		//                 $objPHPExcel->getActiveSheet()->getStyle('O'.$row)->getFill()
		//                 ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('87CEEB');
		//                 $objPHPExcel->getActiveSheet()->getStyle('Q'.$row)->getFill()
		//                 ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('87CEEB');
		//                 $objPHPExcel->getActiveSheet()->getStyle('S'.$row)->getFill()
		//                 ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('87CEEB');
		//                 $objPHPExcel->getActiveSheet()->getStyle('T'.$row)->getFill()
		//                 ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('87CEEB');
		//                 $objPHPExcel->getActiveSheet()->getStyle('V'.$row)->getFill()
		//                 ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('87CEEB');
    //
    //
    //
		//                 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colx, $row, '=(SUM(E'.$row.':H'.$row.')/4)*(10/100)');
		//                 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colx + 4, $row, '=(SUM(J'.$row.':L'.$row.')/3)*(10/100)');
		//                 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colx + 6, $row, '=N'.$row.'*20/100');
		//                 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colx + 8, $row, '=P'.$row.'*35/100');
		//                 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colx + 10, $row, '=R'.$row.'*25/100');
		//                 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colx + 11, $row, '=I'.$row.'+M'.$row.'+O'.$row.'+Q'.$row.'+S'.$row.'');
		//                 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colx + 13, $row, 'IF((U'.$row.'>T'.$row.'),U'.$row.',T'.$row.')');
		// 				//$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colx + 13, $row, '=I'.$row.'+M'.$row.'+O'.$row.'+Q'.$row.'+S'.$row.''); =IF((U6>=T6),U6,T6)
		//                 $col++;
		//             }
    //
		//             $row++;
		//             $urut++;
		//         }
    //
    //
		// 		$lembarkerja=$lembarkerja++;
		// 	}
		// }


		// output file dengan nama file 'contoh.xls'
		header('Content-Type: application/vnd.ms-excel');
		//header('Content-Disposition: attachment;filename="contoh.xls"');
		header('Content-Disposition: attachment;filename="'.$namaguru.'.xls"');
		header('Cache-Control: max-age=0');

		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
		$objWriter->save('php://output');
		exit;
	}
}

	// public function export1($id){
 //            //membuat objek
 //            $objPHPExcel = new PHPExcel();

	// 	   $query = "SELECT siswa.namasiswa,vsetingmapel.noid,siswa.nis FROM vsetingmapel INNER JOIN siswa on vsetingmapel.kelas=siswa.kelas where vsetingmapel.nik='$id'";
	// 	   $data = $this->db->query($query);


	// 		$objPHPExcel->getActiveSheet()->mergeCells('A4:W4');
	// 		$objPHPExcel->getActiveSheet()->setCellValue('A4','Setingan Nomor abcdef');
	// 		$objPHPExcel->getActiveSheet()->getStyle('A4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

	// 		$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
	// 		$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(30);
	// 		$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(5);
	// 		$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(12);
	// 		$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(5);
	// 		$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(5);
	// 		$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(5);
	// 		$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(5);
	// 		$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(5);
	// 		$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(5);
	// 		$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(5);
	// 		$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(5);
	// 		$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(5);
	// 		$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(5);
	// 		$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(7);
	// 		$objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(5);
	// 		$objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(7);
	// 		$objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(5);
	// 		$objPHPExcel->getActiveSheet()->getColumnDimension('S')->setWidth(7);
	// 		$objPHPExcel->getActiveSheet()->getColumnDimension('T')->setWidth(8);
	// 		$objPHPExcel->getActiveSheet()->getColumnDimension('U')->setWidth(8);
	// 		$objPHPExcel->getActiveSheet()->getColumnDimension('V')->setWidth(8);

	// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('0','5','No');
	// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('1','5','Nama Siswa');
	// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('2','5','Kode');
	// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('3','5','NIS');
	// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('4','5','H1');
	// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('5','5','H2');
	// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('6','5','H3');
	// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('7','5','H4');
	// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('8','5','RH');
	// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('9','5','U1');
	// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('10','5','U2');
	// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('11','5','U3');
	// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('12','5','RU');
	// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('13','5','Mid');
	// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('14','5','R Mid');
	// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('15','5','UAS');
	// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('16','5','R UAS');
	// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('17','5','Akh');
	// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('18','5','R Akh');
	// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('19','5','Total');
	// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('20','5','Her');
	// 		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow('21','5','Rapor');

 //         //    // Nama Field Baris Pertama
 //        	 $fields = $data->list_fields();
	//         // // Mengambil Data
	//          $row = 6;
	//          $urut=1;
	//         foreach($data->result() as $data)
	//         {
	//             $col = 1;
	//             $colx=8;
	//             foreach ($fields as $field)
	//             {
	//             	$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $row, $urut);
	//                 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $data->$field);

	//                 $objPHPExcel->getActiveSheet()->getStyle('I'.$row)->getFill()
	//                 ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('87CEEB');
	//                 $objPHPExcel->getActiveSheet()->getStyle('M'.$row)->getFill()
	//                 ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('87CEEB');
	//                 $objPHPExcel->getActiveSheet()->getStyle('O'.$row)->getFill()
	//                 ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('87CEEB');
	//                 $objPHPExcel->getActiveSheet()->getStyle('Q'.$row)->getFill()
	//                 ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('87CEEB');
	//                 $objPHPExcel->getActiveSheet()->getStyle('S'.$row)->getFill()
	//                 ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('87CEEB');
	//                 $objPHPExcel->getActiveSheet()->getStyle('T'.$row)->getFill()
	//                 ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('87CEEB');
	//                 $objPHPExcel->getActiveSheet()->getStyle('V'.$row)->getFill()
	//                 ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('87CEEB');
	// 				$objPHPExcel->getActiveSheet()->getStyle('A'.$row.':D'.$row)->getFill()
	//                 ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('87CEEB');

	//                 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colx, $row, '=(SUM(E'.$row.':H'.$row.')/4)*(10/100)');
	//                 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colx + 4, $row, '=(SUM(J'.$row.':L'.
