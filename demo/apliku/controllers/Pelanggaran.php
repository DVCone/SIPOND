<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggaran extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(['form_validation', 'session', 'twig']);
        $this->load->helper(['form', 'itusajja', 'cookie', 'url']);
        $this->load->model('Pelanggaranm');
        $this->twig->addGlobal('csrf_name', $this->security->get_csrf_token_name());
        $this->twig->addGlobal('csrf_hash', $this->security->get_csrf_hash());
        if ($this->session->userdata('username') == "") {
            redirect(site_url() . '/login');
        }
    }

    public function samping()
    {
        $session = $this->session->userdata('username');
        $this->load->model('modela');
        $data['data'] = $this->modela->datalist($session);

        $this->load->view('sampingkiri', $data);
    }

    //admin set sekolah
    //    function index()
    //    {
    //       $this->load->view('header');
    //       $this->samping();

//       $this->load->model('Pelanggaranm');
    //       $data['data']=$this->Pelanggaranm->carisiswa();

//       $this->load->view('pelanggaran/pelanggaranv',$data);
    //       $this->load->view('footer');
    //    }

    // CODE BY ITUSAJJA
    public function index()
    {
        $data = [
            'data' => $this->Pelanggaranm->carisiswa(),
            'session' => $this->session->userdata('username'),
        ];
        authApp('pelanggaran/master', $data);
    }
    // CODE BY ITUSAJJA
    public function simpan()
    {
        $this->load->model('Pelanggaranm');
        $data = array(
            'nis' => $this->input->post('nis'),
            'tanggal' => $this->input->post('tanggal'),
            'namapelanggaran' => $this->input->post('namapelanggaran'),
            'tindakan' => $this->input->post('tindakan'),
            'poin' => $this->input->post('poin'),
            'catatan' => $this->input->post('catatan'),
        );
        $insert = $this->Pelanggaranm->simpan($data);
    }

    public function hapus($id)
    {

        $this->db->where('nourut', $id);
        if($this->db->delete('pelanggaran')) {
          echo 'success';
        } else {
           echo 'failed';
        }
    }

    public function datalist()
    {
        $this->load->model('Pelanggaranm');
        $data['data'] = $this->Pelanggaranm->datalist();

        $this->load->view('header');
        $this->samping();
        $this->load->view('pelanggaran/datalist', $data);
        $this->load->view('footer');
    }

    public function test()
    {
        $this->load->model('Pelanggaranm');

        $data = array(
            'data' => $this->Pelanggaranm->carisiswa(),
            'csrf_name' => $this->security->get_csrf_token_name(),
            'csrf_hash' => $this->security->get_csrf_hash(),
            'session' => $this->session->userdata('username'),
        );

        authApp('pelanggaran/pelanggaranv', $data);

    }

    public function datalist_pelanggaran()
    {
        $data = array(
            'csrf_name' => $this->security->get_csrf_token_name(),
            'csrf_hash' => $this->security->get_csrf_hash(),
        );

        authApp('pelanggaran/datalist', $data);
    }

    public function data_pelanggaran()
    {
        $post = array(
            'namasiswa' => $this->input->post('namasiswa'),
            'tanggal_awal' => $this->input->post('tanggal_awal'),
            'tanggal_akhir' => $this->input->post('tanggal_akhir'),
        );

        $result = $this->Pelanggaranm->data_pelanggaran($post);

        echo json_encode($result);
    }

    public function data_rekap_pelanggaran()
    {
       $result = $this->db->get('vpelanggaranrekap')->result();

       $output = [
          'data' => $result,
       ];

       echo json_encode($output);
    }

    // selesai

}
