<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {

   public function __construct() {
      parent::__construct();
      $this->load->helper('url');
      $this->load->library('form_validation');
      $this->load->helper('form');
      $this->load->library('session');
      $this->load->helper(array('cookie', 'url'));
      $this->load->library('PHPExcel');
      //$this->load->library(array('PHPExcel', 'PHPExcel/PHPExcel_IOFactory'));
   }

   function samping()
	{
		$session = $this->session->userdata('username');
		$this->load->model('modela');
		$data['data']=$this->modela->datalist($session);

		$this->load->view('sampingkiri',$data);
	}

   function settingmapel()
   {
      $this->load->view('header');
      $this->samping();

      $this->load->model('Nilaim');
      $data['pegawai']=$this->Nilaim->caripegawai();
      $data['mapel']=$this->Nilaim->carimapel();
      $data['kelas']=$this->Nilaim->carikelas();

      $this->load->view('nilai/settingmapelv1.php',$data);
      //$this->load->view('nilai/settingmapelv2.php',$data2);
      $this->load->view('footer');
   }
   function simpan()
   {
      $this->load->model('Nilaim');
      $data = array(
         'nik' => $this->input->post('pegawai'),
         'kodemapel' => $this->input->post('mapel'),
         'kelas' => $this->input->post('kelas'),
      );
      $insert = $this->Nilaim->simpan($data);
   }


   function hapus($id)
   {

      $this->db->where('noid', $id);
      $this->db->delete('setingmapel');

      $this->datalist();
   }

   function laporannilai()
   {
      $this->load->model('Nilaim');
      $data['data']=$this->Nilaim->laporannilai();


      $this->load->view('header');
      $this->samping();
      $this->load->view('nilai/laporannilai',$data);
      $this->load->view('footer');
   }

   function test()
   {
      $this->load->view('header');
      $this->samping();
      $this->load->view('nilai/nilai.php');
      $this->load->view('footer');

   }

   function laporanperpengajar()
   {
      $this->load->model('Nilaim');
      $data['data']=$this->Nilaim->laporanperpengajar();


      $this->load->view('header');
      $this->samping();
      $this->load->view('nilai/laporanperpengajar',$data);
      $this->load->view('footer');
   }

   function upload()
   {
      $config = array(
         'upload_path' => FCPATH.'assets/upload/',
         'allowed_types' => 'xlsx|xls|csv',
         'overwrite' => TRUE
      );

      $this->load->library('upload', $config);
      $this->upload->do_upload('file');
      $upload_data = $this->upload->data();
      //print_r($upload_data);
      //die();

      if (!$this->upload->do_upload('file') )
      {
         $error = array('error' => $this->upload->display_errors());

         echo "ERROR";
         //$this->load->view('nilai/nilai.php', $error);

      }
      else
      {
         $data = array('upload_data' => $this->upload->data());

         echo "Success";

         //$this->load->view('upload_success', $data);
      }


      $objPHPExcel = PHPExcel_IOFactory::load($upload_data['full_path']);
      //print_r($objPHPExcel);
      //die();
      // $this->db->where('settingmapel_id', $settingmapel_id);
      // $this->db->delete('nilai2', $data);
      foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
         $highestRow = $worksheet->getHighestRow();
         for ($row = 7; $row < $highestRow; $row++) {
            $nis             = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
            $nilai           = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
            $settingmapel_id = $worksheet->getCellByColumnAndRow(0, $row)->getValue();

            $data = array(
               'nis' => $nis,
               'nilai' => $nilai,
               'settingmapel_id' => $settingmapel_id
            );
            //print_r($data);

            $this->load->model('Nilaim');
            $insert = $this->Nilaim->upload($data);
         }
      }
   }

   function formatImport()
   {
      $objPHPExcel = new PHPExcel();

      $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('A')->setWidth(15);
      $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('B')->setWidth(10);
      $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('C')->setWidth(10);
      $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('D')->setWidth(20);
      $objPHPExcel->getActiveSheet()->getStyle('A1:D1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
      $objPHPExcel->setActiveSheetIndex(0)
         //mengisikan value pada tiap-tiap cell, A1 itu alamat cellnya
         //Hello merupakan isinya
         ->setCellValue('A1', 'NIS')
         ->setCellValue('B1', 'Mapel')
         ->setCellValue('C1', 'Nilai')
         ->setCellValue('D1', 'Setting Mapel Id');
      //set title pada sheet (me rename nama sheet)
      $objPHPExcel->getActiveSheet()->setTitle('Format Data');

      //mulai menyimpan excel format xlsx, kalau ingin xls ganti Excel2007 menjadi Excel5
      $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

      //sesuaikan headernya
      header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
      header("Cache-Control: no-store, no-cache, must-revalidate");
      header("Cache-Control: post-check=0, pre-check=0", false);
      header("Pragma: no-cache");
      header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
      //ubah nama file saat diunduh
      header('Content-Disposition: attachment;filename="Format Data.xlsx"');
      //unduh file
      $objWriter->save("php://output");
   }

   function downloadNilai($settingmapel_id)
   {
      $this->load->model('Nilaim');
      $data['nilai_santri'] = $this->Nilaim->downloadNilai($settingmapel_id);


      //print_r($data);
      $objPHPExcel = new PHPExcel();

      $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('A')->setWidth(15);
      $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('B')->setWidth(10);
      $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('C')->setWidth(10);
      $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('D')->setWidth(20);
      $objPHPExcel->getActiveSheet()->getStyle('A1:D1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

      $objPHPExcel->setActiveSheetIndex(0)
         //mengisikan value pada tiap-tiap cell, A1 itu alamat cellnya
         //Hello merupakan isinya
         ->setCellValue('A1', 'NIS')
         ->setCellValue('B1', 'Mapel')
         ->setCellValue('C1', 'Nilai')
         ->setCellValue('D1', 'Setting Mapel Id');
      //set title pada sheet (me rename nama sheet)
      $objPHPExcel->getActiveSheet()->setTitle('Format Data');

      $row = 2;

      foreach ($data['nilai_santri'] as $nilai) {
         $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row, $nilai->nis);
         $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$row, $nilai->mapel);
         $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$row, $nilai->nilai);
         $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$row, $nilai->settingmapel_id);

         $row++;
      }

      //mulai menyimpan excel format xlsx, kalau ingin xls ganti Excel2007 menjadi Excel5
      $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

      //sesuaikan headernya
      header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
      header("Cache-Control: no-store, no-cache, must-revalidate");
      header("Cache-Control: post-check=0, pre-check=0", false);
      header("Pragma: no-cache");
      header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
      //ubah nama file saat diunduh
      header('Content-Disposition: attachment;filename="Test.xlsx"');
      //unduh file
      $objWriter->save("php://output");

   }

   function downloadisinilai($settingmapel_id)
   {
      $this->load->model('Nilaim');
      $data['nilai_santri'] = $this->Nilaim->downloadisinilai($settingmapel_id);


      //print_r($data);
      $objPHPExcel = new PHPExcel();

      $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('A')->setWidth(5);
      $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('B')->setWidth(15);
      $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('C')->setWidth(25);
      $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('D')->setWidth(10);
      $objPHPExcel->getActiveSheet()->getStyle('A1:D1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
      $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:E1');
      $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A2:C2');
      $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A3:C3');
      $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A4:C4');

      foreach ($data['nilai_santri'] as $nilaix) {
         $namamapel=$nilaix->kodemapel;
         $namakelas=$nilaix->kelas;
         $namaguru=$nilaix->nama;
      }
      $objPHPExcel->setActiveSheetIndex(0)
         //mengisikan value pada tiap-tiap cell, A1 itu alamat cellnya
         //Hello merupakan isinya

         ->setCellValue('A1', 'Daftar Pengisian Nilai')
         ->setCellValue('A2', 'Mata Pelajaran : '.$namamapel)
         ->setCellValue('A3', 'Kelas : '.$namakelas)
         ->setCellValue('A4', 'Guru Pengampu : '.$namaguru)
         ->setCellValue('A6', 'No Id')
         ->setCellValue('B6', 'NIS')
         ->setCellValue('C6', 'Nama Siswa')
         ->setCellValue('D6', 'Nilai')
         ;
      //set title pada sheet (me rename nama sheet)
      $objPHPExcel->getActiveSheet()->setTitle('Format Data');

      $row = 7;


      foreach ($data['nilai_santri'] as $nilai) {
        $kodemapel=$nilai->noid;
         $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row, $nilai->noid);
         $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$row, $nilai->nis);
         $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$row, $nilai->namasiswa);
         $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$row, '0');

         $row++;
      }

      //mulai menyimpan excel format xlsx, kalau ingin xls ganti Excel2007 menjadi Excel5
      $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

      //sesuaikan headernya
      header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
      header("Cache-Control: no-store, no-cache, must-revalidate");
      header("Cache-Control: post-check=0, pre-check=0", false);
      header("Pragma: no-cache");
      header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
      //ubah nama file saat diunduh
      header('Content-Disposition: attachment;filename='.$kodemapel.'.xlsx');
      //unduh file
      $objWriter->save("php://output");

   }

   function downloaddetailnilai($nis)
   {
      $this->load->model('Nilaim');
      $data['nilai_santri'] = $this->Nilaim->downloaddetailnilai($nis);


      //print_r($data);
      $objPHPExcel = new PHPExcel();

      $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('A')->setWidth(5);
      $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('B')->setWidth(15);
      $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('C')->setWidth(25);
      $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('D')->setWidth(10);
      $objPHPExcel->getActiveSheet()->getStyle('A1:D1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
      $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:E1');
      $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A2:C2');
      $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A3:C3');
      $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A4:C4');

      foreach ($data['nilai_santri'] as $nilaix) {
         $namasiswa=$nilaix->namasiswa;
         $kelas=$nilaix->kelas;
         $nis=$nilaix->nis;
      }
      $objPHPExcel->setActiveSheetIndex(0)
         //mengisikan value pada tiap-tiap cell, A1 itu alamat cellnya
         //Hello merupakan isinya

         ->setCellValue('A1', 'Daftar Nilai')
         ->setCellValue('A2', 'Nama Siswa : '.$namasiswa)
         ->setCellValue('A3', 'Kelas / NIS : '.$kelas.' / '.$nis)
         ->setCellValue('A4', '')
         ->setCellValue('A6', 'No')
         ->setCellValue('B6', 'Mata Pelajaran')
         ->setCellValue('C6', 'Nama Guru')
         ->setCellValue('D6', 'Nilai')
         ;
      //set title pada sheet (me rename nama sheet)
      $objPHPExcel->getActiveSheet()->setTitle('Format Data');

      $row = 7;

      foreach ($data['nilai_santri'] as $nilai) {
         //$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row, $nilai->namamapel);
         $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$row, $nilai->namamapel);
         $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$row, $nilai->nama);
         $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$row, $nilai->nilai);

         $row++;
      }

      //mulai menyimpan excel format xlsx, kalau ingin xls ganti Excel2007 menjadi Excel5
      $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

      //sesuaikan headernya
      header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
      header("Cache-Control: no-store, no-cache, must-revalidate");
      header("Cache-Control: post-check=0, pre-check=0", false);
      header("Pragma: no-cache");
      header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
      //ubah nama file saat diunduh
      header('Content-Disposition: attachment;filename="Test.xlsx"');
      //unduh file
      $objWriter->save("php://output");

   }

}
