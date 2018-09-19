<?php
defined('BASEPATH') or exit('No direct script access allowed');

class App extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(['twig', 'form_validation', 'session']);
        $this->load->helper(['url', 'form', 'cookie', 'itusajja']);
        $this->load->model('login');
        $this->twig->addGlobal('csrf_name', $this->security->get_csrf_token_name());
        $this->twig->addGlobal('csrf_hash', $this->security->get_csrf_hash());
    }

    // barang pemkot

    public function dashboard()
    {
        echo $this->session->userdata('userdata');die();
    }

    public function index()
    {
        $data = [
            // 'title' => 'AppBackup',
            'csrf_name' => $this->security->get_csrf_token_name(),
            'csrf_hash' => $this->security->get_csrf_hash(),
        ];

        authApp('home/index', $data);
    }

    public function auth()
    {

        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);

        $username = $this->security->xss_clean(trim(htmlentities($username)));
        $password = $this->security->xss_clean(trim(htmlentities($password)));

        $username = str_replace("'", '', $username);
        $password = str_replace("'", "", $password);

        // validasi form
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->run();

        $auth = $this->login->auth($username, $password);
        if ($auth["login"] > 0) {
            $this->session->set_userdata('sessionData', $auth["data"]);
        }
        redirect(site_url());

    }

    public function logout()
    {
        $this->session->unset_userdata('sessionData');
        $this->session->sess_destroy();
        redirect(site_url());
    }

    public function backup()
    {
        authApp('admin/backup', []);
    }

    public function dobackup()
    {
        $this->load->helper('download');
        $tanggal = date('Ymd - His');
        $namaFile = $tanggal . '.sql.zip';
        $this->load->dbutil();
        $backup = $this->dbutil->backup();
        force_download($namaFile, $backup);

    }

    public function restore()
    {
        $fupload = $_FILES['datafile'];
        $nama = $_FILES['datafile']['name'];
        if (isset($fupload)) {
            $lokasi_file = $fupload['tmp_name'];
            $direktori = "backupdb/$nama";
            move_uploaded_file($lokasi_file, $direktori);
        }

        $isi_file = file_get_contents($direktori);
        $string_query = rtrim($isi_file, "\n;");
        $array_query = explode(";", $string_query);

        foreach ($array_query as $query) {
            $query = str_replace('"', "", $query);
            $query = str_replace("\\", "", $query);
            $query = str_replace("f''", "'", $query);
            $query = str_replace("'*", "", $query);
            $query = $this->security->xss_clean(trim($query));
            $this->db->escape($query);
            $this->db->query($query);
        }
        // header("Location: {$_SERVER['HTTP_REFERER']}");

    }

}
