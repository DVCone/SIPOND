<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(['twig', 'form_validation', 'session']);
        $this->load->helper(['url', 'form', 'cookie', 'itusajja']);
        $this->load->model('acl');
        $this->twig->addGlobal('csrf_name', $this->security->get_csrf_token_name());
        $this->twig->addGlobal('csrf_hash', $this->security->get_csrf_hash());
    }

    public function index()
    {

    }

    // USERS

    public function users()
    {
        $users = $this->acl->getUsers();
        echo dtable_json($users);
    }

    public function add_user()
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);
        $kodenota = $this->input->post('kodenota', true);

        $username = $this->security->xss_clean(trim(htmlentities($username)));
        $password = $this->security->xss_clean(trim(htmlentities($password)));
        $kodenota = $this->security->xss_clean(trim(htmlentities($kodenota)));

        $username = str_replace("'", '', $username);
        $password = str_replace("'", "", $password);
        $kodenota = str_replace("'", "", $kodenota);

        // validasi form
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('kodenota', 'kodenota', 'required');
        $this->form_validation->run();

        $this->db->set('username', $username);
        $this->db->set('password', $password);
        $this->db->set('kodenota', $kodenota);
        if ($this->db->insert('acl_users')) {
            $response = [
                "id" => $this->db->insert_id(),
            ];
            echo dtable_json($response);
        }
    }

    public function update_user()
    {
        $id = $this->input->post('id', true);
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);
        $kodenota = $this->input->post('kodenota', true);

        $id = $this->security->xss_clean(trim(htmlentities($id)));
        $username = $this->security->xss_clean(trim(htmlentities($username)));
        $password = $this->security->xss_clean(trim(htmlentities($password)));
        $kodenota = $this->security->xss_clean(trim(htmlentities($kodenota)));

        $id = str_replace("'", '', $id);
        $username = str_replace("'", '', $username);
        $password = str_replace("'", "", $password);
        $kodenota = str_replace("'", "", $kodenota);

        // validasi form
        $this->form_validation->set_rules('id', 'id', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('kodenota', 'kodenota', 'required');
        $this->form_validation->run();

        $this->db->set('username', $username);
        $this->db->set('password',  $password);
        $this->db->set('kodenota', $kodenota);

        $this->db->where('id', $id);
        if ($this->db->update('acl_users')) {
            $response = [
                "id" => $id,
            ];
            echo dtable_json($response);
        }
    }

    public function delete_user()
    {
        $id = $this->input->post('id', true);

        $id = $this->security->xss_clean(trim(htmlentities($id)));

        $id = str_replace("'", '', $id);

        // validasi form
        $this->form_validation->set_rules('id', 'id', 'required');
        $this->form_validation->run();

        $this->db->where('id', $id);
        if ($this->db->delete('acl_users')) {
            $response = [
                "id" => "deleted",
            ];
            echo dtable_json($response);
        }
    }

    // Menu


    public function parent_menus()
    {
        $id = $this->input->post('id', true);
        echo acl_create($id);
    }

    public function menuManager()
    {
        echo menuManager();
    }

    public function menu_update()
    {
        $group = $this->input->post('aclcb', true);
        $id = $this->input->post('id', true);
        $user = $this->input->post('group', true);
        if ($group) {
            $g_implode = $this->acl->getGroupMenu($id) .",". $group;
            if (update('acl_menus', ["group" => $g_implode], 'id', $id)) {
                echo dtable_json("");
            }
        } else {
            $g_implode = $this->acl->getGroupMenu($id);
            $exp = explode(",",$g_implode);
            foreach ($exp as $key => $value) {
                if($user==$value){
                    unset($exp[$key]);
                }
            }
            $imp = implode(",",$exp);
            if (update('acl_menus', ["group" => $imp], 'id', $id)) {
                echo dtable_json("");
            }
        }

    }

    public function add_menu() 
    {
        $nama = $this->input->post('nama', true);
        $nama = $this->security->xss_clean(trim(htmlentities($nama)));
        $nama = str_replace("'", '', $nama);

        $icon = $this->input->post('icon', true);
        $icon = $this->security->xss_clean(trim(htmlentities($icon)));
        $icon = str_replace("'", '', $icon);

        $route = $this->input->post('route', true);
        $route = $this->security->xss_clean(trim(htmlentities($route)));
        $route = str_replace("'", '', $route);

        // validasi form
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('route', 'route', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');
        $this->form_validation->run();

        $this->db->set('nama', $nama);
        $this->db->set('route', $route);
        $this->db->set('icon', $icon);
        $this->db->set('parent', 'Y');
        if ($this->db->insert('acl_menus')) {
            $response = [
                "id" => $this->db->insert_id(),
            ];
            echo dtable_json($response);
        }
    }

    public function add_sub_menu() 
    {
        $id = $this->input->post('id', true);
        $nama = $this->input->post('nama', true);
        $nama = $this->security->xss_clean(trim(htmlentities($nama)));
        $nama = str_replace("'", '', $nama);

        $route = $this->input->post('route', true);
        $route = $this->security->xss_clean(trim(htmlentities($route)));
        $route = str_replace("'", '', $route);

        // validasi form
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('route', 'route', 'required');
        $this->form_validation->run();

        $this->db->set('nama', $nama);
        $this->db->set('route', $route);
        $this->db->set('parent', 'N');
        if ($this->db->insert('acl_menus')) {
            $nid = $this->db->insert_id();
            if($this->acl->getChildMenu($id) == "0"){
                if(update('acl_menus', ["child" => $nid], 'id', $id)){
                    $response = [
                        "id" => 'Success',
                    ];
                    echo dtable_json($response);
                }
            }else{
                $g_implode = $this->acl->getChildMenu($id).",".$nid;
                if(update('acl_menus', ["child" => $g_implode], 'id', $id)){
                    $response = [
                        "id" => 'Success',
                    ];
                    echo dtable_json($response);
                }
            }
        }
    }

    public function delete_menu()
    {
        $id = $this->input->post('id', true);

        $id = $this->security->xss_clean(trim(htmlentities($id)));

        $id = str_replace("'", '', $id);

        // validasi form
        $this->form_validation->set_rules('id', 'id', 'required');
        $this->form_validation->run();

        $g_implode = $this->acl->getChildMenu($id);

        if($g_implode!="0"){
            $exp = explode(",",$g_implode);
            foreach ($exp as $key => $value) {
                $this->db->where('id', $value);
                $this->db->delete('acl_menus');
            }
        }

        $this->acl->parent_menus_update($id);

        $this->db->where('id', $id);
        if ($this->db->delete('acl_menus')) {
            $response = [
                "id" => "deleted",
            ];
            echo dtable_json($response);
        }
    }

    


}
