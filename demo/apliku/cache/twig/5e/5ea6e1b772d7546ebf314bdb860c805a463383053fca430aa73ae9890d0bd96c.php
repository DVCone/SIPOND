<?php

/* layouts/custom/itusajja.twig */
class __TwigTemplate_085ddf860eb0b48bc79f347c25ee0b619f531c448b7b109b91312323c015cdd9 extends Twig_Template
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
    __init()

    function __init() {
        refresh()
    }

    function refresh(){
        get_groups()
        generate_tmenu()
    }

    function refresh_table(){
        userTable.ajax.reload()
        groupTable.ajax.reload()
    }

    function notif(text){
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
            className: \"btn-sm btn-success my-text-button\",
            action: function() {
                get_groups()
            }
        }],
        \"ajax\": \"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["route"] ?? null), "api_get_user", array()), "url", array()), "html", null, true);
        echo "\",
        columnDefs: [{
            \"targets\": 0,
            \"data\": null,
            \"mRender\": function(data, type, row) {
                return row.username
            },
        }, {
            \"targets\": 1,
            \"data\": null,
            \"mRender\": function(data, type, row) {
                return '<span class=\"label label-primary\">' + row.groupname + '</span>'
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
                return '<button class=\"btn btnTakeDeleteUser btn-danger btn-xs\"> Hapus</button>&nbsp;' +
                    '<button class=\"btn btnTakeUpdateUser btn-warning btn-xs\"> Perbarui</button>'
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

    \$(document).on('click','.btnTakeDeleteUser',function(){
        var tr = \$(this).parent().parent('tr'); 
        var data = userTable.row( tr ).data();
        \$('#hapusModal').modal('show');
        \$('#username_delete').html(data.username);
        \$('.btnDeleteUser').attr('onclick','return delete_user('+data.id+')');
    })

    \$(document).on('click','.btnTakeUpdateUser',function(){
        var tr = \$(this).parent().parent('tr'); 
        var data = userTable.row( tr ).data()
        get_groups(data.idgroup)
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
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["route"] ?? null), "api_delete_user", array()), "url", array()), "html", null, true);
        echo "',
            method: 'POST',
            data: '";
        // line 135
        echo twig_escape_filter($this->env, ($context["csrf_name"] ?? null), "html", null, true);
        echo "=";
        echo twig_escape_filter($this->env, ($context["csrf_hash"] ?? null), "html", null, true);
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

    // GROUP

    var groupTable = \$('#itusajja_table_group').DataTable({
        dom: \"Bfrtip\",
        buttons: [{
            text: '<span data-toggle=\"modal\" href=\"#groupModal\" data-target=\"#groupModal\">Grup Baru</span>',
            className: \"btn-sm btn-success my-text-button\"
        }],
        \"ajax\": \"";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["route"] ?? null), "api_get_group", array()), "url", array()), "html", null, true);
        echo "\",
        columnDefs: [{
            \"targets\": 0,
            \"data\": null,
            \"mRender\": function(data, type, row) {
                return row.nama
            },
        }, {
            \"targets\": 1,
            \"data\": null,
            \"mRender\": function(data, type, row) {
                return '<span class=\"label label-primary\">' + row.useringroup + '</span>'
            },
        }, {
            \"targets\": 2,
            \"data\": null,
            \"mRender\": function(data, type, row) {
                return '<button class=\"btn btnTakeDeleteGroup btn-danger btn-xs\"> Hapus</button>&nbsp;' +
                    '<button class=\"btn btnTakeUpdateGroup btn-warning btn-xs\"> Perbarui</button>'
            },
        }],
        \"pageLength\": 5
    });

    function get_groups(selected = 0) {
        var xData = ''
        \$.ajax({
            url: \"";
        // line 181
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["route"] ?? null), "api_get_group", array()), "url", array()), "html", null, true);
        echo "\",
            method: \"GET\",
            dataType: \"json\",
            success: function(res) {
                var opt = '<option value=\"\">-- Please select --</option>';
                \$.each(res.data, function(i, v) {
                    if(selected == v.id){
                        opt += '<option value=\"' + v.id + '\" selected>' + v.nama + '</option>'
                    }else{
                        opt += '<option value=\"' + v.id + '\">' + v.nama + '</option>'
                    }
                })
                \$('select.groupSelect').html(opt)
                \$('select.groupSelect').selectpicker('refresh');
            }
        });
    }

    function insert_group() {
        var groupform = \$('#groupform'),
            data = groupform.serialize(),
            action = groupform.prop('action'),
            method = groupform.prop('method')

        \$.ajax({
            url: action,
            method: method,
            data: data,
            dataType: \"json\",
            success: function(res) {
                groupform[0].reset();
                \$('#groupModal').modal('hide');
                notif(\"Grup berhasil ditambahkan!\")
                groupTable.ajax.reload()
                generate_tmenu()
            }
        });
    }

    function update_group() {
        var groupform = \$('#groupformupdate'),
            data = groupform.serialize(),
            action = groupform.prop('action'),
            method = groupform.prop('method')

        \$.ajax({
            url: action,
            method: method,
            data: data,
            dataType: \"json\",
            success: function(res) {
                groupform[0].reset();
                \$('#groupModalUpdate').modal('hide');
                notif(\"Grup berhasil diperbarui!\")
                userTable.ajax.reload()
                groupTable.ajax.reload()
                generate_tmenu()
            }
        });
    }


    \$(document).on('click','.btnTakeDeleteGroup',function(){
        var tr = \$(this).parent().parent('tr'); 
        var data = groupTable.row( tr ).data()
        \$('#hapusModalGroup').modal('show');
        \$('#groupname_delete').html(data.nama)
        \$('.btnDeleteGroup').attr('onclick','return delete_group('+data.id+')');
    })

    \$(document).on('click','.btnTakeUpdateGroup',function(){
        var tr = \$(this).parent().parent('tr'); 
        var data = groupTable.row( tr ).data()
        \$('#groupformupdate input[name=nama]').val(data.nama)
        \$('#groupformupdate input[name=id]').val(data.id)
        \$('#groupModalUpdate').modal('show');
    })

    function delete_group(id) {
        \$.ajax({
            url: '";
        // line 261
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["route"] ?? null), "api_delete_group", array()), "url", array()), "html", null, true);
        echo "',
            method: 'POST',
            data: '";
        // line 263
        echo twig_escape_filter($this->env, ($context["csrf_name"] ?? null), "html", null, true);
        echo "=";
        echo twig_escape_filter($this->env, ($context["csrf_hash"] ?? null), "html", null, true);
        echo "&id=' + id,
            dataType: \"json\",
            success: function(res) {
                \$('#hapusModalGroup').modal('hide');
                notif(\"Grup berhasil dihapus!\")
                userTable.ajax.reload()
                groupTable.ajax.reload()
                generate_tmenu()
            }
        });
    }

    // Menu 

    function generate_tmenu() {
        var xData = ''
        \$.ajax({
            url: \"";
        // line 280
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["route"] ?? null), "api_get_group", array()), "url", array()), "html", null, true);
        echo "\",
            method: \"GET\",
            dataType: \"json\",
            success: function(res) {
                var opt = '<tr><th width=\"200px\">MENU</th>';
                var id_arr = {};
                \$.each(res.data, function(i, v) {
                    if(v.status=='MASTER'){}else{
                        opt += '<th class=\"text-center\">'+(v.nama).toUpperCase()+'</th>'
                        id_arr[i] = {id:v.id,nama:v.nama};
                    }
                })
                        opt += '<th width=\"200px\">OPTION</th>'
                        opt += '</tr>'
                \$('#headerMenu').html(opt)
                generate_tbody(id_arr)
            }
        });
    }

    function generate_tbody(id_arr){
        var xData = ''
        \$.ajax({
            url: \"";
        // line 303
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["route"] ?? null), "api_get_parent_menu", array()), "url", array()), "html", null, true);
        echo "\",
            method: \"GET\",
            dataType: \"html\",
            success: function(res) {
                // var opt =   ''
                // \$.each(res.data, function(i, v) {
                //     opt +=  '<tr><form method=\"POST\" action=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["route"] ?? null), "api_menu_update", array()), "url", array()), "html", null, true);
        echo "\" id=\"form-cb-acl'+v.id+'\">'
                //     opt +=  '<td>'+v.nama+'  <input name=\"id\" type=\"hidden\" value=\"'+v.id+'\" form=\"form-cb-acl'+v.id+'\"></td>';
                //     \$.each(id_arr, function(ii, vv) {
                //         if(v.group === null){var b= \"\";var a=\"\";}else{
                // 
                //         var group = (v.group).split(\",\");
                //         if(\$.inArray(vv.id, group) !== -1){
                //             var a = \"checked\";
                //             var b= \"\"
                //         }else{
                //             var a=\"\";
                //             var b= \"\"
                //         }
                //         }
                //         opt +=  '<td class=\"text-center\"> <input name=\"acl-cb[]\" value=\"'+vv.id+'\" '+a+' form=\"form-cb-acl'+v.id+'\"  type=\"checkbox\" id=\"acl'+ii+(i+1)+'\" class=\"acl-checkbox\"><label for=\"acl'+ii+(i+1)+'\">'+b+'</label></td>'
                //     });
                //     opt +=  '<td> <button data-toggle=\"modal\" data-target=\"#menuModalUpdate\" class=\"btn btn-primary btn-xs\">selengkapnya</button> </td>'
                //     opt +=  '</form></tr>'
                // })
                \$('#bodyMenu').html(res)
            }
        });
    }


    ";
        // line 349
        echo "
    \$(document).on('click','.acl-checkbox',function(){
        var form = \$(\"#\"+\$(this).attr('form'));
            data = form.serialize(),
            action = form.prop('action'),
            method = form.prop('method')

        \$.ajax({
            url: action,
            method: method,
            data: '";
        // line 359
        echo twig_escape_filter($this->env, ($context["csrf_name"] ?? null), "html", null, true);
        echo "=";
        echo twig_escape_filter($this->env, ($context["csrf_hash"] ?? null), "html", null, true);
        echo "&'+data,
            dataType: \"json\",
            success: function(res) {
                notif(\"Menu berhasil diperbarui!\")
                generate_tmenu();
            }
        });
    })



    \$('.selectpicker').selectpicker({
      size: 4
    });


    

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
                \$('#menuModal').modal('hide');
                notif(\"Menu berhasil ditambahkan!\")
                generate_tmenu()
            }
        });
    }

    \$(document).on('click','.btnAddSubMenu',function(){
        var id = \$(this).data('id'); 
        \$('#menuModalChild').modal('show');
        \$('.btnInsertChildMenu').attr('onclick','return insert_submenu('+id+')');
    })

    function insert_submenu(id) {
        var menuform = \$('#acl_child_form'),
            data = menuform.serialize(),
            action = menuform.prop('action'),
            method = menuform.prop('method')

        \$.ajax({
            url: action,
            method: method,
            data: 'id='+id+'&'+data,
            dataType: \"json\",
            success: function(res) {
                menuform[0].reset();
                \$('#menuModalChild').modal('hide');
                notif(\"Submenu berhasil ditambahkan!\")
                generate_tmenu()
            }
        });
    }

    



// ROUTE


    var routeTable = \$('#itusajja_table_route').DataTable({
        dom: \"Bfrtip\",
        buttons: [{
            text: '<span data-toggle=\"modal\" href=\"#routeModal\" data-target=\"#routeModal\">Route Baru</span>',
            className: \"btn-sm btn-success my-text-button\"
        }],
        \"ajax\": \"";
        // line 436
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["route"] ?? null), "api_get_route", array()), "url", array()), "html", null, true);
        echo "\",
        columnDefs: [{
            \"targets\": 0,
            \"data\": null,
            \"mRender\": function(data, type, row) {
                return row.key
            },
        }, {
            \"targets\": 1,
            \"data\": null,
            \"mRender\": function(data, type, row) {
                return  row.controller 
            },
        }, {
            \"targets\": 2,
            \"data\": null,
            \"mRender\": function(data, type, row) {
                return row.url
            },
        }, {
            \"targets\": 3,
            \"data\": null,
            \"mRender\": function(data, type, row) {
                return '<button class=\"btn btnTakeDeleteRoute btn-danger btn-xs\"> Hapus</button>&nbsp;' +
                    '<button class=\"btn btnTakeUpdateRoute btn-warning btn-xs\"> Perbarui</button>'
            },
        }],
        \"pageLength\": 5
    });

    function insert_route() {
        var routeform = \$('#acl_route_form'),
            data = routeform.serialize(),
            action = routeform.prop('action'),
            method = routeform.prop('method')

        \$.ajax({
            url: action,
            method: method,
            data: data,
            dataType: \"json\",
            success: function(res) {
                routeform[0].reset();
                \$('#routeModal').modal('hide');
                notif(\"Route berhasil ditambahkan!\")
                routeTable.ajax.reload()
            }
        });
    }

    \$(document).on('click','.btnTakeDeleteRoute',function(){
        var tr = \$(this).parent().parent('tr'); 
        var data = routeTable.row( tr ).data()
        \$('#hapusModalRoute').modal('show');
        \$('#routename_delete').html(data.key)
        \$('.btnDeleteRoute').attr('onclick','return delete_route('+data.id+')');
    })

    \$(document).on('click','.btnTakeUpdateRoute',function(){
        var tr = \$(this).parent().parent('tr'); 
        var data = routeTable.row( tr ).data()
        \$('#route_update input[name=key]').val(data.key)
        \$('#route_update input[name=url]').val(data.url)
        \$('#route_update input[name=controller]').val(data.controller)
        \$('#route_update input[name=id]').val(data.id)
        \$('#routeModalUpdate').modal('show');
    })

    function update_route() {
        var routeform = \$('#route_update'),
            data = routeform.serialize(),
            action = routeform.prop('action'),
            method = routeform.prop('method')

        \$.ajax({
            url: action,
            method: method,
            data: data,
            dataType: \"json\",
            success: function(res) {
                routeform[0].reset();
                \$('#routeModalUpdate').modal('hide');
                notif(\"Route berhasil diperbarui!\")
                routeTable.ajax.reload()
            }
        });
    }

    function delete_route(id) {
        \$.ajax({
            url: '";
        // line 526
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["route"] ?? null), "api_delete_route", array()), "url", array()), "html", null, true);
        echo "',
            method: 'POST',
            data: '";
        // line 528
        echo twig_escape_filter($this->env, ($context["csrf_name"] ?? null), "html", null, true);
        echo "=";
        echo twig_escape_filter($this->env, ($context["csrf_hash"] ?? null), "html", null, true);
        echo "&id=' + id,
            dataType: \"json\",
            success: function(res) {
                \$('#hapusModalRoute').modal('hide');
                notif(\"Route berhasil dihapus!\")
                routeTable.ajax.reload()
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
        return array (  580 => 528,  575 => 526,  482 => 436,  400 => 359,  388 => 349,  360 => 309,  351 => 303,  325 => 280,  303 => 263,  298 => 261,  215 => 181,  185 => 154,  161 => 135,  156 => 133,  58 => 38,  19 => 1,);
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
    __init()

    function __init() {
        refresh()
    }

    function refresh(){
        get_groups()
        generate_tmenu()
    }

    function refresh_table(){
        userTable.ajax.reload()
        groupTable.ajax.reload()
    }

    function notif(text){
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
            className: \"btn-sm btn-success my-text-button\",
            action: function() {
                get_groups()
            }
        }],
        \"ajax\": \"{{ route.api_get_user.url }}\",
        columnDefs: [{
            \"targets\": 0,
            \"data\": null,
            \"mRender\": function(data, type, row) {
                return row.username
            },
        }, {
            \"targets\": 1,
            \"data\": null,
            \"mRender\": function(data, type, row) {
                return '<span class=\"label label-primary\">' + row.groupname + '</span>'
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
                return '<button class=\"btn btnTakeDeleteUser btn-danger btn-xs\"> Hapus</button>&nbsp;' +
                    '<button class=\"btn btnTakeUpdateUser btn-warning btn-xs\"> Perbarui</button>'
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

    \$(document).on('click','.btnTakeDeleteUser',function(){
        var tr = \$(this).parent().parent('tr'); 
        var data = userTable.row( tr ).data();
        \$('#hapusModal').modal('show');
        \$('#username_delete').html(data.username);
        \$('.btnDeleteUser').attr('onclick','return delete_user('+data.id+')');
    })

    \$(document).on('click','.btnTakeUpdateUser',function(){
        var tr = \$(this).parent().parent('tr'); 
        var data = userTable.row( tr ).data()
        get_groups(data.idgroup)
        \$('#userformupdate input[name=id]').val(data.id)
        \$('#userformupdate input[name=username]').val(data.username)
        \$('#userformupdate input[name=password]').val(data.dpass)
        \$('#userformupdate input[name=repassword]').val(data.dpass)
        \$('#userformupdate input[name=kodenota]').val(data.kodenota)
        \$('#userModalUpdate').modal('show');
    })


    function delete_user(id) {
        \$.ajax({
            url: '{{ route.api_delete_user.url }}',
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

    // GROUP

    var groupTable = \$('#itusajja_table_group').DataTable({
        dom: \"Bfrtip\",
        buttons: [{
            text: '<span data-toggle=\"modal\" href=\"#groupModal\" data-target=\"#groupModal\">Grup Baru</span>',
            className: \"btn-sm btn-success my-text-button\"
        }],
        \"ajax\": \"{{ route.api_get_group.url }}\",
        columnDefs: [{
            \"targets\": 0,
            \"data\": null,
            \"mRender\": function(data, type, row) {
                return row.nama
            },
        }, {
            \"targets\": 1,
            \"data\": null,
            \"mRender\": function(data, type, row) {
                return '<span class=\"label label-primary\">' + row.useringroup + '</span>'
            },
        }, {
            \"targets\": 2,
            \"data\": null,
            \"mRender\": function(data, type, row) {
                return '<button class=\"btn btnTakeDeleteGroup btn-danger btn-xs\"> Hapus</button>&nbsp;' +
                    '<button class=\"btn btnTakeUpdateGroup btn-warning btn-xs\"> Perbarui</button>'
            },
        }],
        \"pageLength\": 5
    });

    function get_groups(selected = 0) {
        var xData = ''
        \$.ajax({
            url: \"{{ route.api_get_group.url }}\",
            method: \"GET\",
            dataType: \"json\",
            success: function(res) {
                var opt = '<option value=\"\">-- Please select --</option>';
                \$.each(res.data, function(i, v) {
                    if(selected == v.id){
                        opt += '<option value=\"' + v.id + '\" selected>' + v.nama + '</option>'
                    }else{
                        opt += '<option value=\"' + v.id + '\">' + v.nama + '</option>'
                    }
                })
                \$('select.groupSelect').html(opt)
                \$('select.groupSelect').selectpicker('refresh');
            }
        });
    }

    function insert_group() {
        var groupform = \$('#groupform'),
            data = groupform.serialize(),
            action = groupform.prop('action'),
            method = groupform.prop('method')

        \$.ajax({
            url: action,
            method: method,
            data: data,
            dataType: \"json\",
            success: function(res) {
                groupform[0].reset();
                \$('#groupModal').modal('hide');
                notif(\"Grup berhasil ditambahkan!\")
                groupTable.ajax.reload()
                generate_tmenu()
            }
        });
    }

    function update_group() {
        var groupform = \$('#groupformupdate'),
            data = groupform.serialize(),
            action = groupform.prop('action'),
            method = groupform.prop('method')

        \$.ajax({
            url: action,
            method: method,
            data: data,
            dataType: \"json\",
            success: function(res) {
                groupform[0].reset();
                \$('#groupModalUpdate').modal('hide');
                notif(\"Grup berhasil diperbarui!\")
                userTable.ajax.reload()
                groupTable.ajax.reload()
                generate_tmenu()
            }
        });
    }


    \$(document).on('click','.btnTakeDeleteGroup',function(){
        var tr = \$(this).parent().parent('tr'); 
        var data = groupTable.row( tr ).data()
        \$('#hapusModalGroup').modal('show');
        \$('#groupname_delete').html(data.nama)
        \$('.btnDeleteGroup').attr('onclick','return delete_group('+data.id+')');
    })

    \$(document).on('click','.btnTakeUpdateGroup',function(){
        var tr = \$(this).parent().parent('tr'); 
        var data = groupTable.row( tr ).data()
        \$('#groupformupdate input[name=nama]').val(data.nama)
        \$('#groupformupdate input[name=id]').val(data.id)
        \$('#groupModalUpdate').modal('show');
    })

    function delete_group(id) {
        \$.ajax({
            url: '{{ route.api_delete_group.url }}',
            method: 'POST',
            data: '{{ csrf_name }}={{ csrf_hash }}&id=' + id,
            dataType: \"json\",
            success: function(res) {
                \$('#hapusModalGroup').modal('hide');
                notif(\"Grup berhasil dihapus!\")
                userTable.ajax.reload()
                groupTable.ajax.reload()
                generate_tmenu()
            }
        });
    }

    // Menu 

    function generate_tmenu() {
        var xData = ''
        \$.ajax({
            url: \"{{ route.api_get_group.url }}\",
            method: \"GET\",
            dataType: \"json\",
            success: function(res) {
                var opt = '<tr><th width=\"200px\">MENU</th>';
                var id_arr = {};
                \$.each(res.data, function(i, v) {
                    if(v.status=='MASTER'){}else{
                        opt += '<th class=\"text-center\">'+(v.nama).toUpperCase()+'</th>'
                        id_arr[i] = {id:v.id,nama:v.nama};
                    }
                })
                        opt += '<th width=\"200px\">OPTION</th>'
                        opt += '</tr>'
                \$('#headerMenu').html(opt)
                generate_tbody(id_arr)
            }
        });
    }

    function generate_tbody(id_arr){
        var xData = ''
        \$.ajax({
            url: \"{{ route.api_get_parent_menu.url }}\",
            method: \"GET\",
            dataType: \"html\",
            success: function(res) {
                // var opt =   ''
                // \$.each(res.data, function(i, v) {
                //     opt +=  '<tr><form method=\"POST\" action=\"{{ route.api_menu_update.url }}\" id=\"form-cb-acl'+v.id+'\">'
                //     opt +=  '<td>'+v.nama+'  <input name=\"id\" type=\"hidden\" value=\"'+v.id+'\" form=\"form-cb-acl'+v.id+'\"></td>';
                //     \$.each(id_arr, function(ii, vv) {
                //         if(v.group === null){var b= \"\";var a=\"\";}else{
                // 
                //         var group = (v.group).split(\",\");
                //         if(\$.inArray(vv.id, group) !== -1){
                //             var a = \"checked\";
                //             var b= \"\"
                //         }else{
                //             var a=\"\";
                //             var b= \"\"
                //         }
                //         }
                //         opt +=  '<td class=\"text-center\"> <input name=\"acl-cb[]\" value=\"'+vv.id+'\" '+a+' form=\"form-cb-acl'+v.id+'\"  type=\"checkbox\" id=\"acl'+ii+(i+1)+'\" class=\"acl-checkbox\"><label for=\"acl'+ii+(i+1)+'\">'+b+'</label></td>'
                //     });
                //     opt +=  '<td> <button data-toggle=\"modal\" data-target=\"#menuModalUpdate\" class=\"btn btn-primary btn-xs\">selengkapnya</button> </td>'
                //     opt +=  '</form></tr>'
                // })
                \$('#bodyMenu').html(res)
            }
        });
    }


    {# function create_datatbl(){
        if ( ! \$.fn.DataTable.isDataTable( '#itusajja_acl' ) ) {
            \$('#itusajja_acl').DataTable({
                dom: \"Bfrtip\",
                buttons: [{
                    text: '<span data-toggle=\"modal\" href=\"#menuModal\" data-target=\"#menuModal\">Menu Baru</span>',
                    className: \"btn-sm btn-success my-text-button\",
                    action: function() {
                        refresh()
                    }
                }],
                pageLenght:5
            })
        }
    } #}

    \$(document).on('click','.acl-checkbox',function(){
        var form = \$(\"#\"+\$(this).attr('form'));
            data = form.serialize(),
            action = form.prop('action'),
            method = form.prop('method')

        \$.ajax({
            url: action,
            method: method,
            data: '{{ csrf_name }}={{ csrf_hash }}&'+data,
            dataType: \"json\",
            success: function(res) {
                notif(\"Menu berhasil diperbarui!\")
                generate_tmenu();
            }
        });
    })



    \$('.selectpicker').selectpicker({
      size: 4
    });


    

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
                \$('#menuModal').modal('hide');
                notif(\"Menu berhasil ditambahkan!\")
                generate_tmenu()
            }
        });
    }

    \$(document).on('click','.btnAddSubMenu',function(){
        var id = \$(this).data('id'); 
        \$('#menuModalChild').modal('show');
        \$('.btnInsertChildMenu').attr('onclick','return insert_submenu('+id+')');
    })

    function insert_submenu(id) {
        var menuform = \$('#acl_child_form'),
            data = menuform.serialize(),
            action = menuform.prop('action'),
            method = menuform.prop('method')

        \$.ajax({
            url: action,
            method: method,
            data: 'id='+id+'&'+data,
            dataType: \"json\",
            success: function(res) {
                menuform[0].reset();
                \$('#menuModalChild').modal('hide');
                notif(\"Submenu berhasil ditambahkan!\")
                generate_tmenu()
            }
        });
    }

    



// ROUTE


    var routeTable = \$('#itusajja_table_route').DataTable({
        dom: \"Bfrtip\",
        buttons: [{
            text: '<span data-toggle=\"modal\" href=\"#routeModal\" data-target=\"#routeModal\">Route Baru</span>',
            className: \"btn-sm btn-success my-text-button\"
        }],
        \"ajax\": \"{{ route.api_get_route.url }}\",
        columnDefs: [{
            \"targets\": 0,
            \"data\": null,
            \"mRender\": function(data, type, row) {
                return row.key
            },
        }, {
            \"targets\": 1,
            \"data\": null,
            \"mRender\": function(data, type, row) {
                return  row.controller 
            },
        }, {
            \"targets\": 2,
            \"data\": null,
            \"mRender\": function(data, type, row) {
                return row.url
            },
        }, {
            \"targets\": 3,
            \"data\": null,
            \"mRender\": function(data, type, row) {
                return '<button class=\"btn btnTakeDeleteRoute btn-danger btn-xs\"> Hapus</button>&nbsp;' +
                    '<button class=\"btn btnTakeUpdateRoute btn-warning btn-xs\"> Perbarui</button>'
            },
        }],
        \"pageLength\": 5
    });

    function insert_route() {
        var routeform = \$('#acl_route_form'),
            data = routeform.serialize(),
            action = routeform.prop('action'),
            method = routeform.prop('method')

        \$.ajax({
            url: action,
            method: method,
            data: data,
            dataType: \"json\",
            success: function(res) {
                routeform[0].reset();
                \$('#routeModal').modal('hide');
                notif(\"Route berhasil ditambahkan!\")
                routeTable.ajax.reload()
            }
        });
    }

    \$(document).on('click','.btnTakeDeleteRoute',function(){
        var tr = \$(this).parent().parent('tr'); 
        var data = routeTable.row( tr ).data()
        \$('#hapusModalRoute').modal('show');
        \$('#routename_delete').html(data.key)
        \$('.btnDeleteRoute').attr('onclick','return delete_route('+data.id+')');
    })

    \$(document).on('click','.btnTakeUpdateRoute',function(){
        var tr = \$(this).parent().parent('tr'); 
        var data = routeTable.row( tr ).data()
        \$('#route_update input[name=key]').val(data.key)
        \$('#route_update input[name=url]').val(data.url)
        \$('#route_update input[name=controller]').val(data.controller)
        \$('#route_update input[name=id]').val(data.id)
        \$('#routeModalUpdate').modal('show');
    })

    function update_route() {
        var routeform = \$('#route_update'),
            data = routeform.serialize(),
            action = routeform.prop('action'),
            method = routeform.prop('method')

        \$.ajax({
            url: action,
            method: method,
            data: data,
            dataType: \"json\",
            success: function(res) {
                routeform[0].reset();
                \$('#routeModalUpdate').modal('hide');
                notif(\"Route berhasil diperbarui!\")
                routeTable.ajax.reload()
            }
        });
    }

    function delete_route(id) {
        \$.ajax({
            url: '{{ route.api_delete_route.url }}',
            method: 'POST',
            data: '{{ csrf_name }}={{ csrf_hash }}&id=' + id,
            dataType: \"json\",
            success: function(res) {
                \$('#hapusModalRoute').modal('hide');
                notif(\"Route berhasil dihapus!\")
                routeTable.ajax.reload()
            }
        });
    }


</script>", "layouts/custom/itusajja.twig", "D:\\SERVER\\htdocs\\development\\sipondot\\apliku\\views\\layouts\\custom\\itusajja.twig");
    }
}
