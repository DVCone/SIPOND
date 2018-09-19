<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Autocomplete extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function search()
	{
		// tangkap variabel keyword dari URL
		$keyword = $this->uri->segment(3);

		// cari di database
		$data = $this->db->from('autocomplete')->like('nama',$keyword)->get();

		// format keluaran di dalam array
		foreach($data->result() as $row)
		{
			$arr['query'] = $keyword;
			$arr['suggestions'][] = array(
				'value'	=>$row->nama,
				'nim'	=>$row->nim,
				'jurusan'	=>$row->jurusan

			);
		}
		// minimal PHP 5.2
		echo json_encode($arr);
	}

	public function cari1siswa($nis){
		$data = ["nis" => $nis];
		$res = $this->db->get_where('siswa',$data);
		echo json_encode($res->result()[0]);
	}

	public function carisiswa()
	{
		// tangkap variabel keyword dari URL
		$keyword = $this->uri->segment(3);

		$sql="select siswa.* from siswa where (namasiswa like '%$keyword%' or kelas like '%$keyword%' or nis like '%$keyword%') AND lulus=0";
		$data = $this->db->query($sql);

		// format keluaran di dalam array
		foreach($data->result() as $row)
		{
			$arr['query'] = $keyword;
			$arr['suggestions'][] = array(
				'value'	=>$row->namasiswa. " - ".$row->nis. " - ".$row->marhalah. " - ".$row->kelas." - ".$row->namaayah ,
				'namasiswa'	=>$row->namasiswa ,
				'marhalah'	=>$row->marhalah ,
				'namaayah'	=>$row->namaayah ,
				'kelas'	=>$row->kelas ,
				'nis'	=>$row->nis,
				'spp'	=>$row->spp
			);
		}
		// minimal PHP 5.2
		echo json_encode($arr);
	}

	public function carisisauangsaku()
	{
		// tangkap variabel keyword dari URL
		$keyword = $this->uri->segment(3);

		$sql="select vuangsakumasuk.marhalah,vuangsakumasuk.namaayah,vuangsakumasuk.kelas, vuangsakumasuk.nis,vuangsakumasuk.namasiswa,vuangsakumasuk.totmasuk,ifnull(vuangsakukeluar.totkeluar,0) as totkeluar, (vuangsakumasuk.totmasuk - ifnull(vuangsakukeluar.totkeluar,0)) as totsisa from vuangsakukeluar RIGHT join vuangsakumasuk on vuangsakukeluar.nis=vuangsakumasuk.nis where (vuangsakumasuk.namasiswa like '%$keyword%' or vuangsakumasuk.nis like '%$keyword%') ORDER BY vuangsakukeluar.namasiswa desc";
		//$sql="select * from `vsisauangsaku`"
		$data = $this->db->query($sql);


		// format keluaran di dalam array
		foreach($data->result() as $row)
		{
			$arr['query'] = $keyword;
			$arr['suggestions'][] = array(
				'value'	=>$row->namasiswa. " - ".$row->nis. " - ".$row->marhalah. " - ".$row->kelas. " - ".$row->totsisa ,
				'namasiswa'	=>$row->namasiswa ,
				'marhalah'	=>$row->marhalah ,
				'namaayah'	=>$row->namaayah ,
				'totsisa'	=>$row->totsisa ,
				'kelas'	=>$row->kelas ,
				'nis'	=>$row->nis
			);
		}
		// minimal PHP 5.2
		echo json_encode($arr);
	}

public function search2()
	{
		// tangkap variabel keyword dari URL
		$keyword = $this->uri->segment(3);

		// cari di database
		$sql="select * FROM santri where (Nama_Siswa like '%$keyword%' or Kelas ='$keyword') and Lulus = 0 order by Nama_Siswa asc";
		$data = $this->db->query($sql);

		//$data = $this->db->from('santri')->like('>Nama_Siswa',$keyword And ("lulus=1"))->get();

		// format keluaran di dalam array
		foreach($data->result() as $row)
		{
			$arr['query'] = $keyword;
			$arr['suggestions'][] = array(
				'value'	=>$row->Kelas ."  -  ". $row->Nama_Siswa ."  -  ". $row->Alamat ,
				'value2'	=>$row->Alamat ,
				'Tanggal_Lahir'	=>$row->Tanggal_Lahir ,
				'Nama_Ayah'	=>$row->Nama_Ayah ,
				'Nama_Ibu'	=>$row->Nama_Ibu ,
				'Pekerjaan_Ayah'	=>$row->Pekerjaan_Ayah ,
				'Telephon'	=>$row->Telephon ,
				'asal_sekolah'	=>$row->asal_sekolah ,
				'Tanggal_Masuk'	=>$row->Tanggal_Masuk ,
				'data'	=>$row->NIS
			);
		}
		// minimal PHP 5.2
		echo json_encode($arr);
	}
}
