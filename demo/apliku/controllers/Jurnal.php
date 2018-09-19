<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jurnal extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(['twig', 'form_validation', 'session']);
        $this->load->helper(['url', 'form', 'cookie', 'itusajja']);
        $this->load->model(['jurnalmodel']);
        $this->twig->addGlobal('csrf_name' , $this->security->get_csrf_token_name());
        $this->twig->addGlobal('csrf_hash' , $this->security->get_csrf_hash());
    }

    public function keluar()
    {
        $data['rek1000'] = $this->jurnalmodel->rekscustom1000();
        $data['reknot1000'] = $this->jurnalmodel->rekscustomnot1000();
        authApp('keuangan/jurnal/keluar', $data);
    }

    public function masuk()
    {
        $data['rek1000'] = $this->jurnalmodel->rekscustom1000();
        $data['reknot1000'] = $this->jurnalmodel->rekscustomnot1000();
        authApp('keuangan/jurnal/masuk', $data);
    }

    public function printjurnal()
    {
        authApp('keuangan/jurnal/print', []);
    }



    public function printnow()
    {

        $var1 = $this->input->post('nonota', true);
        $var1 = $this->security->xss_clean(trim(htmlentities($var1)));
        $var1 = str_replace("'", '', $var1);
        $this->form_validation->set_rules('nonota', 'nonota', 'required');

        // validasi form
        $this->form_validation->run();
        $data= ["nonota"=>$var1];
        $jurnal = $this->db->get_where('jurnal',$data);
        if ($jurnal->num_rows() > 0) {
            $response = [
                "id" => $this->getjurnal($var1),
            ];
            echo dtable_json($response);
        }
    }

    public function simpan_masuk()
    {
        $json = $this->input->post('json', true);

        $var1 = $this->input->post('rek', true);
        $var1 = $this->security->xss_clean(trim(htmlentities($var1)));
        $var1 = str_replace("'", '', $var1);
        $this->form_validation->set_rules('rek', 'rek', 'required');

        $var2 = $this->input->post('ket', true);
        $var2 = $this->security->xss_clean(trim(htmlentities($var2)));
        $var2 = str_replace("'", '', $var2);
        $this->form_validation->set_rules('ket', 'ket', 'required');

        // validasi form
        $this->form_validation->run();
        $username = $this->session->userdata('username')->username;
        $total = 0;
        $idnota = $this->jurnalmodel->getlastid();

        foreach (json_decode($json) as $key => $value) {
            $this->db->set('nonota', $idnota);
            $this->db->set('tanggal', date('Y-m-d'));
            $this->db->set('koderekening', $value->koderekening);
            $this->db->set('keterangan', '');
            $this->db->set('kredit', $value->nominal);
            $this->db->set('pengguna', $username);
            $this->db->insert('jurnal');

            $total+=$value->nominal;
        }
        $this->db->set('nonota', $idnota);
        $this->db->set('tanggal', date('Y-m-d'));
        $this->db->set('koderekening', $var1);
        $this->db->set('keterangan', $var2);
        $this->db->set('debet', $total);
        $this->db->set('pengguna', $username);
        if ($this->db->insert('jurnal')) {
            $response = [
                "id" => $this->getjurnal($idnota),
            ];
            echo dtable_json($response);
        }
    }


    public function simpan_keluar()
    {
        $json = $this->input->post('json', true);

        $var1 = $this->input->post('rek', true);
        $var1 = $this->security->xss_clean(trim(htmlentities($var1)));
        $var1 = str_replace("'", '', $var1);
        $this->form_validation->set_rules('rek', 'rek', 'required');

        $var2 = $this->input->post('ket', true);
        $var2 = $this->security->xss_clean(trim(htmlentities($var2)));
        $var2 = str_replace("'", '', $var2);
        $this->form_validation->set_rules('ket', 'ket', 'required');

        // validasi form
        $this->form_validation->run();
        $username = $this->session->userdata('username')->username;
        $total = 0;
        $idnota = $this->jurnalmodel->getlastid();

        foreach (json_decode($json) as $key => $value) {
            $this->db->set('nonota', $idnota);
            $this->db->set('tanggal', date('Y-m-d'));
            $this->db->set('koderekening', $value->koderekening);
            $this->db->set('keterangan', $var2);
            $this->db->set('debet', $value->nominal);
            $this->db->set('pengguna', $username);
            $this->db->insert('jurnal');

            $total+=$value->nominal;
        }
        $this->db->set('nonota', $idnota);
        $this->db->set('tanggal', date('Y-m-d'));
        $this->db->set('koderekening', $var1);
        $this->db->set('keterangan', $var2);
        $this->db->set('kredit', $total);
        $this->db->set('pengguna', $username);
        if ($this->db->insert('jurnal')) {
            $response = [
                "id" => $this->getjurnal($idnota),
            ];
            echo dtable_json($response);
        }
    }

    public function getjurnal($nota)
    {
        $query = $this->db->query("SELECT *,
        (SELECT namarekening FROM rekening WHERE rekening.koderekening=jurnal.koderekening) as rekening
        FROM jurnal WHERE nonota=$nota");
        return $query->result();
    }

}
