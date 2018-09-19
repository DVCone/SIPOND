<?php
defined('BASEPATH') or exit('No direct script access allowed');
include_once dirname(__FILE__) . "/../libraries/Twig.php";

/**
 * ItuSajja Lisence
 *
 * created by : Achmad Syifa
 * email : r14n.z41@gmail.com
 * permium code
 * 2018
 */

//  LAYOUTING

if (!function_exists('layout')) {
    function layout($view, $data = "", $type = "twig")
    {

        $app = &get_instance();
        $app->load->library('twig');

        $data['title'] = 'Home';
        $data['route'] = route_init();
        $data['logosekolah'] = getLogoSekolah();

        if ($type == "php") {
            $data['content'] = $view;
            $res['data'] = $data;

            $app->load->view("layouts/php/master_layouts", $res);
        } else {
            $app->twig->display($view, $data);
        }

    }

}

// AUTHENTICATING APP

if (!function_exists('authApp')) {
    function authApp($home, $data, $type = "twig")
    {

        $app = &get_instance();
        $session = $app->session->userdata('username');

        if (!$session) {
            $data['itusajja_sidebar'] = "";
            layout('login/signin', $data, $type);
        } else {
            $data['itusajja_sidebar'] = sidebar_create();
            layout($home, $data, $type);
        }

    }

}

// ROUTING

if (!function_exists('getLogoSekolah')) {
    function getLogoSekolah()
    {
        $app = &get_instance();
        $app->load->model('sekolah');
        $logo = $app->sekolah->carisekolah()[0]->logokecil;
        return base_url("template/images/".$logo);
    }
}

if (!function_exists('route_init')) {
    function route_init()
    {
        $app = &get_instance();
        $app->load->model('acl');
        $session = $app->session->userdata('username');
        $aclRoute = $app->acl->getRoutes();
        return $aclRoute;
    }
}
if (!function_exists('getRoute')) {
    function getRoute($id)
    {
        $app = &get_instance();
        $app->load->model('acl');

        if ($id) {
            $aclRoute = base_url($app->acl->getRoute($id));
        } else {
            $aclRoute = base_url($app->acl->getRoute(18));
        }
        return $aclRoute;
    }
}

// MENU CREATION

if (!function_exists('sidebar_create')) {
    function sidebar_create()
    {

        $app = &get_instance();
        $app->load->model('acl');
        $session = $app->session->userdata('username');

        return sidebar_elm($session->id);
    }
}

if (!function_exists('sidebar_elm')) {
    function sidebar_elm($id)
    {
        $app = &get_instance();
        $user = $app->db->query("SELECT * FROM acl_menus WHERE parent='Y' ORDER BY sorting ASC");
        $menus = '';
        if ($user->num_rows() > 0) {
            foreach ($user->result() as $key => $value) {

                $group = explode(",", $value->group);
                if (in_array($id, $group)) {

                    if ($value->child != 0) {
                        $menus .= '<li>
                        <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">' . $value->icon . '</i> <span class="icon-name">' . $value->nama . '</span>
                        </a>
                        <ul class="ml-menu">
                        ' . sidebar_elmChild($value->child) . '
                        </ul>
                        </li>';
                    } else {
                        $menus .= '<li>
                        <a href="' . base_url($value->route) . '">
                        <i class="material-icons">' . $value->icon . '</i>
                        <span>' . $value->nama . '</span>
                        </a>
                        </li>';
                    }
                }

            }
        }

        return $menus;
    }
}

if (!function_exists('sidebar_elmChild')) {
    function sidebar_elmChild($idChild)
    {
        $app = &get_instance();
        $child = explode(",", $idChild);
        $obj = "";
        $session = $app->session->userdata('username');

        foreach ($child as $key => $id) {
            $user = $app->db->query("SELECT * FROM acl_menus WHERE id='$id'");
            $result = $user->result()[0];

            $group = explode(",", $result->group);
            if (in_array($session->id, $group)) {

                if ($result->child == 0) {
                    $obj .= '<li>
                        <a href="' . base_url($result->route) . '">' . $result->nama . '</a>
                    </li>';
                } else {
                    $obj .= '<li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        ' . $result->nama . '
                    </a>
                    <ul class="ml-menu">
                        ' . sidebar_elmChild($result->child) . '
                    </ul>
                </li>';

                }
            }

        }
        return $obj;

    }
}



if (!function_exists('acl_create')) {
    function acl_create($id)
    {

        $app = &get_instance();

        return acl_edit($id);
    }
}

if (!function_exists('acl_edit')) {
    function acl_edit($id)
    {
        $app = &get_instance();
        $app->load->model('acl');

        $menu_parents = $app->db->query("SELECT * FROM acl_menus WHERE parent='Y' ORDER BY sorting ASC");
        $menus = '';
        $route = base_url("index.php/api/menu_update");
        if ($menu_parents->num_rows() > 0) {
            foreach ($menu_parents->result() as $key => $value) {

                $group = explode(",", $value->group);
                if (in_array($id, $group)) {
                    $check = "checked";
                }else{
                    $check = "";
                }
                $idmenu = $value->id;

                if ($value->child != 0) {
                    $menus .= '<tr>';
                    $menus .= '<form method="POST" action="' . $route . '" id="form-cb-acl' . $idmenu . '"></form>';
                    $menus .= '<input name="id" type="hidden" value="' . $idmenu . '" form="form-cb-acl' . $idmenu . '">';
                    $menus .= '<input name="group" type="hidden" value="' . $id . '" form="form-cb-acl' . $idmenu . '">';

                    $menus .= '<td class="accordion-toggle" data-toggle="collapse" data-target="#expander' . $idmenu . '">';
                    $menus .= '<i class="material-icons">' . $value->icon . '</i>';
                    $menus .= '<span class="icon-name">' . $value->nama;
                    $menus .= '<label class="pull-right label label-success">has sub</label>';
                    $menus .= '</span>';
                    $menus .= '</td>';

                    $menus .= '<td class="text-center">';
                    $menus .= '<input '.$check.' name="aclcb" value="' . $id . '" form="form-cb-acl' . $idmenu . '"  type="checkbox" id="acl' . $idmenu . '" class="acl-checkbox">';
                    $menus .= '<label for="acl' . $idmenu . '"></label>';
                    $menus .= '</td>';

                    $menus .= '</tr>';

                    $menus .= '<tr>';

                    $menus .= '<td colspan="2" class="hiddenRow">';
                    $menus .= '<div class="accordian-body collapse" id="expander' . $idmenu . '">';
                    $menus .= acl_elmChild($value->child,$id);
                    $menus .= '</div>';
                    $menus .= '</td>';

                    $menus .= '</tr>';

                } else {

                    $menus .= '<tr>';
                    $menus .= '<form method="POST" action="' . $route . '" id="form-cb-acl' . $idmenu . '"></form>';
                    $menus .= '<input name="id" type="hidden" value="' . $idmenu . '" form="form-cb-acl' . $idmenu . '">';
                    $menus .= '<input name="group" type="hidden" value="' . $id . '" form="form-cb-acl' . $idmenu . '">';

                    $menus .= '<td>';
                    $menus .= '<i class="material-icons">' . $value->icon . '</i>';
                    $menus .= '<span>' . $value->nama . '</span>';
                    $menus .= '</td>';

                    $menus .= '<td class="text-center">';
                    $menus .= '<input '.$check.' name="aclcb" value="' . $id . '" form="form-cb-acl' . $idmenu . '"  type="checkbox" id="acl' . $idmenu . '" class="acl-checkbox">';
                    $menus .= '<label for="acl' . $idmenu . '"></label>';
                    $menus .= '</td>';

                    $menus .= '</tr>';
                }

            }
        }

        return $menus;
    }
}

if (!function_exists('acl_elmChild')) {
    function acl_elmChild($idChild,$id)
    {
        $app = &get_instance();
        $child = explode(",", $idChild);
        $obj = "";
        $route = base_url("index.php/api/menu_update");

        $obj .= '<table class="table table-bordered table-striped table-hover" style="margin-bottom:0">';

        foreach ($child as $key => $ids) {
            $user = $app->db->query("SELECT * FROM acl_menus WHERE id='$ids'");
            $result = $user->result()[0];

            $group = explode(",", $result->group);
            if (in_array($id, $group)) {
                $check = "checked";
            }else{
                $check = "";
            }

            $idmenu = $result->id;

            if ($result->child != 0) {
                $obj .= '<tr>';
                $obj .= '<form method="POST" action="' . $route . '" id="form-cb-acl' . $idmenu . '"></form>';
                $obj .= '<input name="id" type="hidden" value="' . $idmenu . '" form="form-cb-acl' . $idmenu . '">';
                $obj .= '<input name="group" type="hidden" value="' . $id . '" form="form-cb-acl' . $idmenu . '">';
                
                $obj .= '<td class="accordion-toggle" data-toggle="collapse" data-target="#expander' . $idmenu . '">';
                $obj .= $result->nama . ' <label class="label label-primary pull-right">has sub</label>';
                $obj .= '</td>';

                $obj .= '<td>';
                $obj .= '<input '.$check.' name="aclcb" value="' .$id . '" form="form-cb-acl' . $idmenu . '"  type="checkbox" id="acl' . $idmenu . '" class="acl-checkbox">';
                $obj .= '<label for="acl' . $idmenu . '"></label>';
                $obj .= '</td>';
                $obj .= '</tr>';
                
                $obj .= '<tr>';
                $obj .= '<td colspan="2" class="hiddenRow">';
                $obj .= '<div class="accordian-body collapse" id="expander' . $idmenu . '">';
                $obj .= acl_elmChild($result->child,$id);
                $obj .= '</div>';
                $obj .= '</td>';
                $obj .= '</tr>';

            } else {
                $obj .= '<tr>';
                $obj .= '<form method="POST" action="' . $route . '" id="form-cb-acl' . $idmenu . '"></form>';
                $obj .= '<input name="id" type="hidden" value="' . $idmenu . '" form="form-cb-acl' . $idmenu . '">';
                $obj .= '<input name="group" type="hidden" value="' . $id . '" form="form-cb-acl' . $idmenu . '">';
                
                $obj .= '<td width="225px">';
                $obj .= $result->nama;
                $obj .= '</td>';

                $obj .= '<td> ';
                $obj .= '<input '.$check.' name="aclcb" value="' . $id . '" form="form-cb-acl' . $idmenu . '"  type="checkbox" id="acl' . $idmenu . '" class="acl-checkbox">';
                $obj .= '<label for="acl' . $idmenu . '"></label>';
                $obj .= '</td>';

                $obj .= '</tr>';

            }

        }
        $obj .= '</table>';

        return $obj;

    }
}


if (!function_exists('menuManager')) {
    function menuManager()
    {
        $app = &get_instance();
        $app->load->model('acl');

        $menu_parents = $app->db->query("SELECT * FROM acl_menus WHERE parent='Y' ORDER BY sorting ASC");
        $menus = '';
        $route = base_url("index.php/api/menu_update");
        if ($menu_parents->num_rows() > 0) {
            foreach ($menu_parents->result() as $key => $value) {

                $idmenu = $value->id;

                if ($value->child != 0) {
                    $menus .= '<tr>';
                    $menus .= '<form method="POST" action="' . $route . '" id="form-cb-acl' . $idmenu . '"></form>';
                    $menus .= '<input name="id" type="hidden" value="' . $idmenu . '" form="form-cb-acl' . $idmenu . '">';

                    $menus .= '<td class="accordion-toggle" data-toggle="collapse" data-target="#expand' . $idmenu . '">';
                    $menus .= '<i class="material-icons">' . $value->icon . '</i>';
                    $menus .= '<span class="icon-name">' . $value->nama;
                    $menus .= '<label class="pull-right label label-success">has sub</label>';
                    $menus .= '</span>';
                    $menus .= '</td>';

                    $menus .= '<td class="text-center">';
                    $menus .= '<button onclick="add_submenu('.$idmenu.')" class="btn btn-success"><i class="material-icons">playlist_add</i></button>';
                    $menus .= '<button onclick="delete_menu('.$idmenu.')" class="btn btn-danger"><i class="material-icons">delete</i></button>';
                    $menus .= '<label for="acl' . $idmenu . '"></label>'; 
                    $menus .= '</td>';

                    $menus .= '</tr>';

                    $menus .= '<tr>';

                    $menus .= '<td colspan="2" class="hiddenRow">';
                    $menus .= '<div class="accordian-body collapse" id="expand' . $idmenu . '">';
                    $menus .= menu_child($value->child);
                    $menus .= '</div>';
                    $menus .= '</td>';

                    $menus .= '</tr>';

                } else {

                    $menus .= '<tr>';
                    $menus .= '<form method="POST" action="' . $route . '" id="form-cb-acl' . $idmenu . '"></form>';
                    $menus .= '<input name="id" type="hidden" value="' . $idmenu . '" form="form-cb-acl' . $idmenu . '">';

                    $menus .= '<td>';
                    $menus .= '<i class="material-icons">' . $value->icon . '</i>';
                    $menus .= '<span>' . $value->nama . '</span>';
                    $menus .= '</td>';

                    $menus .= '<td class="text-center">';
                    $menus .= '<button onclick="add_submenu('.$idmenu.')" class="btn btn-success"><i class="material-icons">playlist_add</i></button>';
                    $menus .= '<button onclick="delete_menu('.$idmenu.')" class="btn btn-danger"><i class="material-icons">delete</i></button>';
                    $menus .= '<label for="acl' . $idmenu . '"></label>';
                    $menus .= '</td>';

                    $menus .= '</tr>';
                }

            }
        }

        return $menus;
    }
}

if (!function_exists('menu_child')) {
    function menu_child($idChild)
    {
        $app = &get_instance();
        $child = explode(",", $idChild);
        $obj = "";
        $route = base_url("index.php/api/menu_update");

        $obj .= '<table class="table table-bordered table-striped table-hover" style="margin-bottom:0">';

        foreach ($child as $key => $id) {
            $user = $app->db->query("SELECT * FROM acl_menus WHERE id='$id'");
            $result = $user->result()[0];

            $idmenu = $result->id;

            if ($result->child != 0) {
                $obj .= '<tr>';
                $obj .= '<form method="POST" action="' . $route . '" id="form-cb-acl' . $idmenu . '"></form>';
                $obj .= '<input name="id" type="hidden" value="' . $idmenu . '" form="form-cb-acl' . $idmenu . '">';
                
                $obj .= '<td class="accordion-toggle" data-toggle="collapse" data-target="#expand' . $idmenu . '">';
                $obj .= $result->nama . ' <label class="label label-primary pull-right">has sub</label>';
                $obj .= '</td>';

                $obj .= '<td>';
                $obj .= '<button onclick="add_submenu('.$idmenu.')" class="btn btn-success"><i class="material-icons">playlist_add</i></button>';
                $obj .= '<button onclick="delete_menu('.$idmenu.')" class="btn btn-danger"><i class="material-icons">delete</i></button>';
                $obj .= '<label for="acl' . $idmenu . '"></label>';
                $obj .= '</td>';
                $obj .= '</tr>';
                
                $obj .= '<tr>';
                $obj .= '<td colspan="2" class="hiddenRow">';
                $obj .= '<div class="accordian-body collapse" id="expand' . $idmenu . '">';
                $obj .= menu_child($result->child,$id);
                $obj .= '</div>';
                $obj .= '</td>';
                $obj .= '</tr>';

            } else {
                $obj .= '<tr>';
                $obj .= '<form method="POST" action="' . $route . '" id="form-cb-acl' . $idmenu . '"></form>';
                $obj .= '<input name="id" type="hidden" value="' . $idmenu . '" form="form-cb-acl' . $idmenu . '">';
                
                $obj .= '<td width="225px">';
                $obj .= $result->nama;
                $obj .= '</td>';

                $obj .= '<td> '; 
                $obj .= '<button onclick="add_submenu('.$idmenu.')" class="btn btn-success"><i class="material-icons">playlist_add</i></button>';
                $obj .= '<button onclick="delete_menu('.$idmenu.')" class="btn btn-danger"><i class="material-icons">delete</i></button>';
                $obj .= '<label for="acl' . $idmenu . '"></label>';
                $obj .= '</td>';

                $obj .= '</tr>';
 
            }

        }
        $obj .= '</table>';

        return $obj;

    }
}

// MISC

if (!function_exists('dtable_json')) {
    function dtable_json($param)
    {
        $data = [];
        $data['success'] = true;
        $data['data'] = $param;
        return json_encode($data);
    }
}

// CRUD

if (!function_exists('insert')) {
    function insert($table, $data)
    {
        $app = &get_instance();

        $app->db->insert($table, $data);
        return $app->db->insert_id();
    }
}

if (!function_exists('update')) {
    function update($table, $data, $where, $val)
    {
        $app = &get_instance();

        $app->db->where($where, $val);
        $app->db->update($table, $data);
        return true;
    }
}
