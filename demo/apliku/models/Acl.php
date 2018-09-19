<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Acl extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getUsers()
    {
        $user = $this->db->query("SELECT acl_users.*,AES_DECRYPT(password,username) as dpass, (SELECT acl_groups.nama FROM acl_groups WHERE acl_users.idgroup = acl_groups.id) AS groupname FROM acl_users");
        return $user->result();
    }
    public function addUser()
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    public function getGroup($id)
    {
        $user = $this->db->query("SELECT * FROM acl_groups WHERE id ='$id'");
        return $user->result();
    }

    public function getGroups()
    {
        $user = $this->db->query("SELECT *,(SELECT COUNT(*) FROM acl_users WHERE acl_users.idgroup=acl_groups.id) as useringroup FROM acl_groups ORDER BY nama ASC");
        return $user->result();
    }

    public function getRoutes()
    {
        $route = $this->db->query("SELECT * FROM acl_routes");
        $result = new stdClass();
        if ($route->num_rows() > 0) {
            foreach ($route->result() as $key => $value) {
                $key = $value->key;
                $result->$key = new stdClass();
                $result->$key = $value;
            }
        }
        return $result;
    }

    public function getRoutesData()
    {
        $route = $this->db->query("SELECT * FROM acl_routes");
        return $route->result();
    }

    public function getRoute($id)
    {
        $route = $this->db->query("SELECT * FROM acl_routes WHERE id ='$id'")->result()[0];
        return $route->url;
    }

    public function getMenu($id)
    {
        $route = $this->db->query("SELECT * FROM acl_menus WHERE id ='$id'")->result()[0];
        return $route;
    }

    public function getGroupMenu($id)
    {
        $route = $this->db->query("SELECT * FROM acl_menus WHERE id ='$id'")->result()[0];
        return $route->group;
    }

    public function getChildMenu($id)
    {
        $route = $this->db->query("SELECT * FROM acl_menus WHERE id ='$id'")->result()[0];
        return $route->child;
    }

    public function parent_menus()
    {
        $route = $this->db->query("SELECT * FROM acl_menus ORDER BY nama ASC");
        return $route->result();
    }

    public function parent_menus_update($id)
    {
        $route = $this->db->query("SELECT * FROM acl_menus WHERE child <> '0'");
        foreach ($route->result() as $key => $value) {
            
            if($id == $value->child){

                $this->db->where('id', $value->id);
                $this->db->update('acl_menus', ['child'=>"0"]);

            }else{

                $exp = explode(",",$value->child);

                if(in_array($id,$exp)){

                    foreach ($exp as $keys => $values) {
                        $key_delete[$values] = $keys;
                    }
                    
                    unset($exp[$key_delete[$id]]);
                    $imp = implode(",",$exp);
                    $this->db->where('id', $value->id);
                    $this->db->update('acl_menus', ['child'=>$imp]);

                }
            }
        }
    }

    

}
