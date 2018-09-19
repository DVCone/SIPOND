<?php

/* layouts/custom/itusajja.twig */
class __TwigTemplate_09bf36754c4350d1b228472168d8b05827b4ff613c3aff11ee342ff997b3ed94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>
    aclManager()
    function refresh_table() {
        userTable.ajax.reload()
    }

    function notif(text) {
        showNotification(\"\", text, \"top\", \"right\");
    }

    function l(data = []) {
        console.log(data)
    }


    // USERS

    var userTable = \$('#itusajja_table_user').DataTable({
        dom: \"Bfrtip\",
        buttons: [{
            text: '<span data-toggle=\"modal\" href=\"#userModal\" data-target=\"#userModal\">User Baru</span>',
            className: \"btn-sm btn-success my-text-button\"
        }],
        \"ajax\": \"";
        // line 24
        echo twig_escape_filter($this->env, base_url("index.php/api/users"), "html", null, true);
        echo "\",
        columnDefs: [{
            \"targets\": 0,
            \"data\": null,
            \"mRender\": function(data, type, row) {
                return row.id
            },
        }, {
            \"targets\": 1,
            \"data\": null,
            \"mRender\": function(data, type, row) {
                return row.username
            },
        }, {
            \"targets\": 2,
            \"data\": null,
            \"mRender\": function(data, type, row) {
                return row.kodenota
            },
        }, {
            \"targets\": 3,
            \"data\": null,
            \"mRender\": function(data, type, row) {
                if (row.username != 'admin') {
                    var menu = '<button class=\"btn btnSetMenu btn-info btn-xs\"><i class=\"material-icons\">view_carousel</i></button>';
                } else {
                    var menu = '';

                }
                return '<button class=\"btn btnTakeDeleteUser btn-danger btn-xs\"> <i class=\"material-icons\">delete</i></button>&nbsp;' +
                    '<button class=\"btn btnTakeUpdateUser btn-warning btn-xs\"> <i class=\"material-icons\">edit</i></button>&nbsp;' +
                    menu
            },
        }],
        \"pageLength\": 5
    });

    function insert_user() {
        var userform = \$('#userform'),
            data = userform.serialize(),
            action = userform.prop('action'),
            method = userform.prop('method')

        \$.ajax({
            url: action,
            method: method,
            data: data,
            dataType: \"json\",
            success: function(res) {
                userform[0].reset();
                \$('#userModal').modal('hide');
                notif(\"User berhasil ditambahkan!\")
                userTable.ajax.reload()
                groupTable.ajax.reload()
            }
        });
    }

    function update_user() {
        var userform = \$('#userformupdate'),
            data = userform.serialize(),
            action = userform.prop('action'),
            method = userform.prop('method')

        \$.ajax({
            url: action,
            method: method,
            data: data,
            dataType: \"json\",
            success: function(res) {
                userform[0].reset();
                \$('#userModalUpdate').modal('hide');
                notif(\"User berhasil diperbarui!\")
                userTable.ajax.reload()
                groupTable.ajax.reload()
            }
        });
    }

    \$(document).on('click', '.btnTakeDeleteUser', function() {
        var tr = \$(this).parent().parent('tr');
        var data = userTable.row(tr).data();
        \$('#hapusModal').modal('show');
        \$('#username_delete').html(data.username);
        \$('.btnDeleteUser').attr('onclick', 'return delete_user(' + data.id + ')');
    })

    \$(document).on('click', '.btnTakeUpdateUser', function() {
        var tr = \$(this).parent().parent('tr');
        var data = userTable.row(tr).data()
        \$('#userformupdate input[name=id]').val(data.id)
        \$('#userformupdate input[name=username]').val(data.username)
        \$('#userformupdate input[name=password]').val(data.dpass)
        \$('#userformupdate input[name=repassword]').val(data.dpass)
        \$('#userformupdate input[name=kodenota]').val(data.kodenota)
        \$('#userModalUpdate').modal('show');
    })


    function delete_user(id) {
        \$.ajax({
            url: '";
        // line 125
        echo twig_escape_filter($this->env, base_url("index.php/api/delete_user"), "html", null, true);
        echo "',
            method: 'POST',
            data: '";
        // line 127
        echo twig_escape_filter($this->env, (isset($context["csrf_name"]) ? $context["csrf_name"] : null), "html", null, true);
        echo "=";
        echo twig_escape_filter($this->env, (isset($context["csrf_hash"]) ? $context["csrf_hash"] : null), "html", null, true);
        echo "&id=' + id,
            dataType: \"json\",
            success: function(res) {
                \$('#hapusModal').modal('hide');
                notif(\"User berhasil dihapus!\")
                userTable.ajax.reload()
                groupTable.ajax.reload()
            }
        });
    }


    \$(document).on('click', '.btnSetMenu', function() {
        var tr = \$(this).parent().parent('tr');
        var data = userTable.row(tr).data()
        \$('#nameUser').html(data.username)
        \$.ajax({
            url: '";
        // line 144
        echo twig_escape_filter($this->env, base_url("index.php/api/parent_menus"), "html", null, true);
        echo "',
            method: 'POST',
            data: '";
        // line 146
        echo twig_escape_filter($this->env, (isset($context["csrf_name"]) ? $context["csrf_name"] : null), "html", null, true);
        echo "=";
        echo twig_escape_filter($this->env, (isset($context["csrf_hash"]) ? $context["csrf_hash"] : null), "html", null, true);
        echo "&id='+data.id,
            dataType: \"html\",
            success: function(res) {
                \$('.contentData').html(res);
                \$('#menuModal').modal('show');
            }
        });

    })

    \$(document).on('click', '.acl-checkbox', function() {
        var form = \$(\"#\" + \$(this).attr('form'));
        data = form.serialize(),
            action = form.prop('action'),
            method = form.prop('method')

        \$.ajax({
            url: action,
            method: method,
            data: '";
        // line 165
        echo twig_escape_filter($this->env, (isset($context["csrf_name"]) ? $context["csrf_name"] : null), "html", null, true);
        echo "=";
        echo twig_escape_filter($this->env, (isset($context["csrf_hash"]) ? $context["csrf_hash"] : null), "html", null, true);
        echo "&' + data,
            dataType: \"json\",
            success: function(res) {
                notif(\"Role berhasil diperbarui!\")
            }
        });
    })

    function aclManager(){
        \$.ajax({
            url: '";
        // line 175
        echo twig_escape_filter($this->env, base_url("index.php/api/menuManager"), "html", null, true);
        echo "',
            method: 'POST',
            data: '";
        // line 177
        echo twig_escape_filter($this->env, (isset($context["csrf_name"]) ? $context["csrf_name"] : null), "html", null, true);
        echo "=";
        echo twig_escape_filter($this->env, (isset($context["csrf_hash"]) ? $context["csrf_hash"] : null), "html", null, true);
        echo "',
            dataType: \"html\",
            success: function(res) {
                \$('.menuManager').html(res);
            }
        });
    }

    function insert_menu() {
        var menuform = \$('#acl_menu_form'),
            data = menuform.serialize(),
            action = menuform.prop('action'),
            method = menuform.prop('method')

        \$.ajax({
            url: action,
            method: method,
            data: data,
            dataType: \"json\",
            success: function(res) {
                menuform[0].reset();
                \$('#menuAddModal').modal('hide');
                notif(\"Menu berhasil ditambahkan!\")
                aclManager()
            }
        });
    }


    function add_submenu(id) {
        \$('#acl_menu_form_sub_update input[name=id]').val(id) 
        \$('#menuSubModal').modal('show');
    }


    function update_menu(id,nama,icon,route) {
        \$('#acl_menu_form_update input[name=id]').val(id) 
        \$('#acl_menu_form_update input[name=route]').val(route) 
        \$('#acl_menu_form_update input[name=nama]').val(nama) 
        \$('#acl_menu_form_update input[name=icon]').val(icon) 
        \$('#menuUpdateModal').modal('show');
    }


    function delete_menu(id) { 
        \$('.btntakedownmanu').attr(\"onclick\",\"return takeDownMenu(\"+id+\")\") 
        \$('#menu_name').html(id) 
        \$('#hapusmenuModal').modal('show');
    }

    function insert_submenu() {
        var menuform = \$('#acl_menu_form_sub_update'),
            data = menuform.serialize(),
            action = menuform.prop('action'),
            method = menuform.prop('method')

        \$.ajax({
            url: action,
            method: method,
            data: data,
            dataType: \"json\",
            success: function(res) {
                menuform[0].reset();
                \$('#menuSubModal').modal('hide');
                notif(\"Sub Menu berhasil ditambahkan!\")
                aclManager()
            }
        });
    }

    function takeDownMenu(id) {
        \$.ajax({
            url: '";
        // line 249
        echo twig_escape_filter($this->env, base_url("index.php/api/delete_menu"), "html", null, true);
        echo "',
            method: 'POST',
            data: '";
        // line 251
        echo twig_escape_filter($this->env, (isset($context["csrf_name"]) ? $context["csrf_name"] : null), "html", null, true);
        echo "=";
        echo twig_escape_filter($this->env, (isset($context["csrf_hash"]) ? $context["csrf_hash"] : null), "html", null, true);
        echo "&id=' + id,
            dataType: \"json\",
            success: function(res) {
                \$('#hapusmenuModal').modal('hide');
                notif(\"Sub Menu berhasil dihapus!\")
                aclManager()
            }
        });
    }
</script>";
    }

    public function getTemplateName()
    {
        return "layouts/custom/itusajja.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 251,  301 => 249,  224 => 177,  219 => 175,  204 => 165,  180 => 146,  175 => 144,  153 => 127,  148 => 125,  44 => 24,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>
    aclManager()
    function refresh_table() {
        userTable.ajax.reload()
    }

    function notif(text) {
        showNotification(\"\", text, \"top\", \"right\");
    }

    function l(data = []) {
        console.log(data)
    }


    // USERS

    var userTable = \$('#itusajja_table_user').DataTable({
        dom: \"Bfrtip\",
        buttons: [{
            text: '<span data-toggle=\"modal\" href=\"#userModal\" data-target=\"#userModal\">User Baru</span>',
            className: \"btn-sm btn-success my-text-button\"
        }],
        \"ajax\": \"{{ base_url(\"index.php/api/users\") }}\",
        columnDefs: [{
            \"targets\": 0,
            \"data\": null,
            \"mRender\": function(data, type, row) {
                return row.id
            },
        }, {
            \"targets\": 1,
            \"data\": null,
            \"mRender\": function(data, type, row) {
                return row.username
            },
        }, {
            \"targets\": 2,
            \"data\": null,
            \"mRender\": function(data, type, row) {
                return row.kodenota
            },
        }, {
            \"targets\": 3,
            \"data\": null,
            \"mRender\": function(data, type, row) {
                if (row.username != 'admin') {
                    var menu = '<button class=\"btn btnSetMenu btn-info btn-xs\"><i class=\"material-icons\">view_carousel</i></button>';
                } else {
                    var menu = '';

                }
                return '<button class=\"btn btnTakeDeleteUser btn-danger btn-xs\"> <i class=\"material-icons\">delete</i></button>&nbsp;' +
                    '<button class=\"btn btnTakeUpdateUser btn-warning btn-xs\"> <i class=\"material-icons\">edit</i></button>&nbsp;' +
                    menu
            },
        }],
        \"pageLength\": 5
    });

    function insert_user() {
        var userform = \$('#userform'),
            data = userform.serialize(),
            action = userform.prop('action'),
            method = userform.prop('method')

        \$.ajax({
            url: action,
            method: method,
            data: data,
            dataType: \"json\",
            success: function(res) {
                userform[0].reset();
                \$('#userModal').modal('hide');
                notif(\"User berhasil ditambahkan!\")
                userTable.ajax.reload()
                groupTable.ajax.reload()
            }
        });
    }

    function update_user() {
        var userform = \$('#userformupdate'),
            data = userform.serialize(),
            action = userform.prop('action'),
            method = userform.prop('method')

        \$.ajax({
            url: action,
            method: method,
            data: data,
            dataType: \"json\",
            success: function(res) {
                userform[0].reset();
                \$('#userModalUpdate').modal('hide');
                notif(\"User berhasil diperbarui!\")
                userTable.ajax.reload()
                groupTable.ajax.reload()
            }
        });
    }

    \$(document).on('click', '.btnTakeDeleteUser', function() {
        var tr = \$(this).parent().parent('tr');
        var data = userTable.row(tr).data();
        \$('#hapusModal').modal('show');
        \$('#username_delete').html(data.username);
        \$('.btnDeleteUser').attr('onclick', 'return delete_user(' + data.id + ')');
    })

    \$(document).on('click', '.btnTakeUpdateUser', function() {
        var tr = \$(this).parent().parent('tr');
        var data = userTable.row(tr).data()
        \$('#userformupdate input[name=id]').val(data.id)
        \$('#userformupdate input[name=username]').val(data.username)
        \$('#userformupdate input[name=password]').val(data.dpass)
        \$('#userformupdate input[name=repassword]').val(data.dpass)
        \$('#userformupdate input[name=kodenota]').val(data.kodenota)
        \$('#userModalUpdate').modal('show');
    })


    function delete_user(id) {
        \$.ajax({
            url: '{{ base_url(\"index.php/api/delete_user\") }}',
            method: 'POST',
            data: '{{ csrf_name }}={{ csrf_hash }}&id=' + id,
            dataType: \"json\",
            success: function(res) {
                \$('#hapusModal').modal('hide');
                notif(\"User berhasil dihapus!\")
                userTable.ajax.reload()
                groupTable.ajax.reload()
            }
        });
    }


    \$(document).on('click', '.btnSetMenu', function() {
        var tr = \$(this).parent().parent('tr');
        var data = userTable.row(tr).data()
        \$('#nameUser').html(data.username)
        \$.ajax({
            url: '{{ base_url(\"index.php/api/parent_menus\") }}',
            method: 'POST',
            data: '{{ csrf_name }}={{ csrf_hash }}&id='+data.id,
            dataType: \"html\",
            success: function(res) {
                \$('.contentData').html(res);
                \$('#menuModal').modal('show');
            }
        });

    })

    \$(document).on('click', '.acl-checkbox', function() {
        var form = \$(\"#\" + \$(this).attr('form'));
        data = form.serialize(),
            action = form.prop('action'),
            method = form.prop('method')

        \$.ajax({
            url: action,
            method: method,
            data: '{{ csrf_name }}={{ csrf_hash }}&' + data,
            dataType: \"json\",
            success: function(res) {
                notif(\"Role berhasil diperbarui!\")
            }
        });
    })

    function aclManager(){
        \$.ajax({
            url: '{{ base_url(\"index.php/api/menuManager\") }}',
            method: 'POST',
            data: '{{ csrf_name }}={{ csrf_hash }}',
            dataType: \"html\",
            success: function(res) {
                \$('.menuManager').html(res);
            }
        });
    }

    function insert_menu() {
        var menuform = \$('#acl_menu_form'),
            data = menuform.serialize(),
            action = menuform.prop('action'),
            method = menuform.prop('method')

        \$.ajax({
            url: action,
            method: method,
            data: data,
            dataType: \"json\",
            success: function(res) {
                menuform[0].reset();
                \$('#menuAddModal').modal('hide');
                notif(\"Menu berhasil ditambahkan!\")
                aclManager()
            }
        });
    }


    function add_submenu(id) {
        \$('#acl_menu_form_sub_update input[name=id]').val(id) 
        \$('#menuSubModal').modal('show');
    }


    function update_menu(id,nama,icon,route) {
        \$('#acl_menu_form_update input[name=id]').val(id) 
        \$('#acl_menu_form_update input[name=route]').val(route) 
        \$('#acl_menu_form_update input[name=nama]').val(nama) 
        \$('#acl_menu_form_update input[name=icon]').val(icon) 
        \$('#menuUpdateModal').modal('show');
    }


    function delete_menu(id) { 
        \$('.btntakedownmanu').attr(\"onclick\",\"return takeDownMenu(\"+id+\")\") 
        \$('#menu_name').html(id) 
        \$('#hapusmenuModal').modal('show');
    }

    function insert_submenu() {
        var menuform = \$('#acl_menu_form_sub_update'),
            data = menuform.serialize(),
            action = menuform.prop('action'),
            method = menuform.prop('method')

        \$.ajax({
            url: action,
            method: method,
            data: data,
            dataType: \"json\",
            success: function(res) {
                menuform[0].reset();
                \$('#menuSubModal').modal('hide');
                notif(\"Sub Menu berhasil ditambahkan!\")
                aclManager()
            }
        });
    }

    function takeDownMenu(id) {
        \$.ajax({
            url: '{{ base_url(\"index.php/api/delete_menu\") }}',
            method: 'POST',
            data: '{{ csrf_name }}={{ csrf_hash }}&id=' + id,
            dataType: \"json\",
            success: function(res) {
                \$('#hapusmenuModal').modal('hide');
                notif(\"Sub Menu berhasil dihapus!\")
                aclManager()
            }
        });
    }
</script>", "layouts/custom/itusajja.twig", "/home/sipy1897/public_html/demo/apliku/views/layouts/custom/itusajja.twig");
    }
}
