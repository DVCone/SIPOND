<?php

/* admin/acl.twig */
class __TwigTemplate_00073102798218dfe9e411d329b1ead7370b029b62b48081971489c5cf79b870 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/master_layouts.twig", "admin/acl.twig", 1);
        $this->blocks = array(
            'main_content' => array($this, 'block_main_content'),
            'custom_js' => array($this, 'block_custom_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/master_layouts.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function block_main_content($context, array $blocks = array())
    {
        // line 2
        echo "
<link href=\"";
        // line 3
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css\" type=\"text/stylesheet\">

<style>
    .hiddenRow {
        padding: 0 !important;
    }
</style>

<div class=\"block-header\">
    <h2>Access Control List</h2>
</div>
<!-- Input -->
<div class=\"row clearfix\">
    <div class=\"col-lg-7 col-md-7 col-sm-12 col-xs-12\">
        <div class=\"card\">
            <div class=\"header\">
                <h2>
                    User Manager
                    <small>menambahkan, memperbarui, serta menghapus user yang telah terdaftar dalam aplikasi.</small>
                </h2>
            </div>
            <div class=\"body\">
                <table id=\"itusajja_table_user\" class=\"table table-bordered table-striped table-hover dataTable\">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Group</th>
                            <th>Kodenota</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>

            </div>
        </div>
    </div>
    <div class=\"col-lg-5 col-md-5 col-sm-12 col-xs-12\">
        <div class=\"card\">
            <div class=\"header\">
                <h2>
                    Grup Manager
                    <small>mengatur akses usergroup yang telah berhasil login.</small>
                </h2>
            </div>
            <div class=\"body\">
                <table id=\"itusajja_table_group\" class=\"table table-bordered table-striped table-hover dataTable\">
                    <thead>
                        <tr>
                            <th>Nama Grup</th>
                            <th>Total User</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>

            </div>
        </div>
    </div>
</div>
<!-- #END# Input -->

<!-- Switch Button -->
<div class=\"row clearfix\">
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <div class=\"card\">
            <div class=\"header\">
                <h2>
                    Access Control List Manager
                    <small>Advance site configuration</small>
                </h2>
            </div>
            <div class=\"body\">

                <button class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#menuModal\">Menu Baru</button>

                <table id=\"itusajja_acl\" class=\"table table-bordered table-striped table-hover dataTable\">
                    <thead id=\"headerMenu\">
                    </thead>
                    <tbody id=\"bodyMenu\">
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<!--#END# Switch Button -->

<!-- Switch Button -->
<div class=\"row clearfix\">
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <div class=\"card\">
            <div class=\"header\">
                <h2>
                    Route Manager
                    <small>Advance site configuration</small>
                </h2>
            </div>
            <div class=\"body\">

                <table id=\"itusajja_table_route\" class=\"table table-bordered table-striped table-hover dataTable\">
                    <thead>
                        <tr>
                            <th>Key</th>
                            <th>Controller</th>
                            <th>Url</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>

            </div>
        </div>
    </div>
</div>
<!--#END# Switch Button -->


<!-- Large Size -->
<div class=\"modal fade\" id=\"userModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"largeModalLabel\">Tambah User Baru</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row clearfix\">
                    <div class=\"col-sm-12\">
                        <form method=\"POST\" action=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["route"] ?? null), "api_add_user", array()), "url", array()), "html", null, true);
        echo "\" id=\"userform\">
                            <div class=\"form-group form-float\">
                                <div class=\"form-line\">
                                    <input name=\"username\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Username</label>
                                </div>
                            </div>
                            <div class=\"form-group form-float\">
                                <div class=\"form-line\">
                                    <input name=\"password\" type=\"password\" class=\"form-control\">
                                    <label class=\"form-label\">Password</label>
                                </div>
                            </div>
                            <div class=\"form-group form-float\">
                                <div class=\"form-line\">
                                    <input name=\"repassword\" type=\"password\" class=\"form-control\">
                                    <label class=\"form-label\">Re-enter Password</label>
                                </div>
                            </div>
                            <p class=\"card-inside-title\">Group</p>
                            <div class=\"form-group\">
                                <select name=\"idgroup\" class=\"form-control show-tick groupSelect\" tabindex=\"-98\">
                                        
                                    </select>
                            </div>
                            <div class=\"form-group form-float\">
                                <div class=\"form-line\">
                                    <input name=\"kodenota\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Kode Nota</label>
                                </div>
                            </div>
                            <input type=\"hidden\" name=\"";
        // line 162
        echo twig_escape_filter($this->env, ($context["csrf_name"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["csrf_hash"] ?? null), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\">
                        </form>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-link waves-effect\" data-dismiss=\"modal\">Batal</button>
                <button onclick=\"return insert_user()\" type=\"button\" class=\"btn btn-link waves-effect\">Simpan</button>
            </div>
        </div>
    </div>
</div>

<!-- Large Size -->
<div class=\"modal fade\" id=\"userModalUpdate\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"largeModalLabel\">Perbarui User</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row clearfix\">
                    <div class=\"col-sm-12\">
                        <form method=\"POST\" action=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["route"] ?? null), "api_update_user", array()), "url", array()), "html", null, true);
        echo "\" id=\"userformupdate\">
                            <div class=\"form-group form-float\">
                                <div class=\"form-line focused\">
                                    <input name=\"username\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Username</label>
                                </div>
                            </div>
                            <div class=\"form-group form-float\">
                                <div class=\"form-line focused\">
                                    <input name=\"password\" type=\"password\" class=\"form-control\">
                                    <label class=\"form-label\">Password</label>
                                </div>
                            </div>
                            <div class=\"form-group form-float\">
                                <div class=\"form-line focused\">
                                    <input name=\"repassword\" type=\"password\" class=\"form-control\">
                                    <label class=\"form-label\">Re-enter Password</label>
                                </div>
                            </div>
                            <p class=\"card-inside-title\">Group</p>
                            <div class=\"form-group\">
                                <select name=\"idgroup\" class=\"form-control show-tick groupSelect\" tabindex=\"-98\">
                                        
                                    </select>
                            </div>
                            <div class=\"form-group form-float\">
                                <div class=\"form-line focused\">
                                    <input name=\"kodenota\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Kode Nota</label>
                                </div>
                            </div>
                            <input type=\"hidden\" name=\"";
        // line 216
        echo twig_escape_filter($this->env, ($context["csrf_name"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["csrf_hash"] ?? null), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\">
                            <input type=\"hidden\" name=\"id\" id=\"iduser\" value=\"\" type=\"text\" class=\"form-control\">
                        </form>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-link waves-effect\" data-dismiss=\"modal\">Batal</button>
                <button onclick=\"return update_user()\" type=\"button\" class=\"btn btn-link waves-effect\">Simpan Pembaruan</button>
            </div>
        </div>
    </div>
</div>


<!-- Large Size -->
<div class=\"modal fade\" id=\"hapusModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"largeModalLabel\">Hapus Data</h4>
            </div>
            <div class=\"modal-body\">
                Anda yakin ingin mengahapus user \"<b class=\"text-danger\" id=\"username_delete\"></b>\" ?
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-link waves-effect\" data-dismiss=\"modal\">Batal</button>
                <button type=\"button\" onclick=\"return delete_user()\" class=\"btn btnDeleteUser btn-link waves-effect\">Simpan</button>
            </div>
        </div>
    </div>
</div>



<!-- Large Size -->
<div class=\"modal fade\" id=\"groupModalUpdate\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"largeModalLabel\">Pertbarui Grup</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row clearfix\">
                    <div class=\"col-sm-12\">
                        <form method=\"POST\" action=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["route"] ?? null), "api_update_group", array()), "url", array()), "html", null, true);
        echo "\" id=\"groupformupdate\">
                            <div class=\"form-group form-float\">
                                <div class=\"form-line focused\">
                                    <input name=\"nama\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Nama Grup</label>
                                </div>
                            </div>
                            <input type=\"hidden\" name=\"";
        // line 268
        echo twig_escape_filter($this->env, ($context["csrf_name"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["csrf_hash"] ?? null), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\">
                            <input type=\"hidden\" name=\"id\" value=\"\" type=\"text\" class=\"form-control\">
                        </form>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-link waves-effect\" data-dismiss=\"modal\">Batal</button>
                <button onclick=\"return update_group()\" type=\"button\" class=\"btn btn-link waves-effect\">Simpan Pembaruan</button>
            </div>
        </div>
    </div>
</div>

<!-- Large Size -->
<div class=\"modal fade\" id=\"groupModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"largeModalLabel\">Perbarui Grup</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row clearfix\">
                    <div class=\"col-sm-12\">
                        <form method=\"POST\" action=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["route"] ?? null), "api_add_group", array()), "url", array()), "html", null, true);
        echo "\" id=\"groupform\">
                            <div class=\"form-group form-float\">
                                <div class=\"form-line\">
                                    <input name=\"nama\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Nama Grup</label>
                                </div>
                            </div>
                            <input type=\"hidden\" name=\"";
        // line 299
        echo twig_escape_filter($this->env, ($context["csrf_name"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["csrf_hash"] ?? null), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\">
                        </form>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-link waves-effect\" data-dismiss=\"modal\">Batal</button>
                <button onclick=\"return insert_group()\" type=\"button\" class=\"btn btn-link waves-effect\">Simpan</button>
            </div>
        </div>
    </div>
</div>


<!-- Large Size -->
<div class=\"modal fade\" id=\"hapusModalGroup\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"largeModalLabel\">Hapus Data</h4>
            </div>
            <div class=\"modal-body\">
                Anda yakin ingin mengahapus group \"<b class=\"text-danger\" id=\"groupname_delete\"></b>\" ?
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-link waves-effect\" data-dismiss=\"modal\">Batal</button>
                <button type=\"button\" onclick=\"return delete_group()\" class=\"btn btnDeleteGroup btn-link waves-effect\">Simpan</button>
            </div>
        </div>
    </div>
</div>



<!-- Large Size -->
<div class=\"modal fade\" id=\"menuModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"largeModalLabel\">Tambah Menu Baru</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row clearfix\">
                    <form method=\"POST\" action=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["route"] ?? null), "api_add_menu", array()), "url", array()), "html", null, true);
        echo "\" id=\"acl_menu_form\">
                        <div class=\"col-sm-12\">
                            <div class=\"form-group form-float\">
                                <div class=\"form-line\">
                                    <input name=\"nama\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Menu</label>
                                </div>
                            </div>
                            <div class=\"form-group form-float\">
                                <div class=\"form-line\">
                                    <input name=\"icon\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Icon</label>
                                </div>
                            </div>
                            <input type=\"hidden\" name=\"";
        // line 356
        echo twig_escape_filter($this->env, ($context["csrf_name"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["csrf_hash"] ?? null), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\">
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-link waves-effect\" data-dismiss=\"modal\">Batal</button>
                <button onclick=\"return insert_menu()\" type=\"button\" class=\"btn btn-link waves-effect\">Simpan</button>
            </div>
        </div>
    </div>
</div>


<!-- Large Size -->
<div class=\"modal fade\" id=\"menuModalChild\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"largeModalLabel\">Tambah Sub Menu Baru</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row clearfix\">
                    <form method=\"POST\" action=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["route"] ?? null), "api_add_submenu", array()), "url", array()), "html", null, true);
        echo "\" id=\"acl_child_form\">
                        <div class=\"col-sm-12\">
                            <div class=\"form-group form-float\">
                                <div class=\"form-line\">
                                    <input name=\"nama\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Menu</label>
                                </div>
                            </div>
                            <div class=\"form-group form-float\">
                                <div class=\"form-line\">
                                    <input name=\"Parent\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Parent or Child ? 'Y' or 'N'</label>
                                </div>
                            </div>
                            <input type=\"hidden\" name=\"";
        // line 393
        echo twig_escape_filter($this->env, ($context["csrf_name"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["csrf_hash"] ?? null), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\">
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-link waves-effect\" data-dismiss=\"modal\">Batal</button>
                <button onclick=\"return insert_child_menu()\" type=\"button\" class=\"btnInsertChildMenu btn btn-link waves-effect\">Simpan</button>
            </div>
        </div>
    </div>
</div>




<!-- Large Size -->
<div class=\"modal fade\" id=\"menuModalUpdate\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-xs\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"largeModalLabel\">Tambah Menu Baru</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row clearfix\">
                    <form method=\"POST\" action=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["route"] ?? null), "api_add_user", array()), "url", array()), "html", null, true);
        echo "\" id=\"#_\">
                        <div class=\"col-sm-6\">
                            <div class=\"form-group form-float\">
                                <div class=\"form-line\">
                                    <input name=\"username\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Menu</label>
                                </div>
                            </div>
                            <div class=\"form-group demo-tagsinput-area\">
                                <p class=\"card-inside-title\">Sorting</p>
                                <select class=\"form-control selectpicker\" multiple>
                                  <option>Mustard</option>
                                  <option>Ketchup</option>
                                  <option>Relish</option>
                                </select>

                            </div>
                            <div class=\"form-group form-float\">
                                <div class=\"form-line\">
                                    <input name=\"sorting\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Sorting</label>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <p class=\"card-inside-title\">Parent</p>
                            <div class=\"form-group\">
                                <select class=\"form-control selectpicker\" multiple>
                                  <option>Mustard</option>
                                  <option>Ketchup</option>
                                  <option>Relish</option>
                                </select>
                            </div>
                            <p class=\"card-inside-title\">Child</p>
                            <div class=\"form-group\">
                                <select class=\"form-control selectpicker\" multiple>
                                  <option>Mustard</option>
                                  <option>Ketchup</option>
                                  <option>Relish</option>
                                </select>
                            </div>
                            <div class=\"form-group form-float\">
                                <div class=\"form-line\">
                                    <input name=\"sorting\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Icon</label>
                                </div>
                            </div>
                            <input type=\"hidden\" name=\"";
        // line 465
        echo twig_escape_filter($this->env, ($context["csrf_name"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["csrf_hash"] ?? null), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\">
                        </div>
                        <div class=\"col-sm-12\">
                            <p class=\"card-inside-title\">Route</p>
                            <div class=\"form-group\">
                                <select class=\"form-control selectpicker\" multiple>
                                  <option>Mustard</option>
                                  <option>Ketchup</option>
                                  <option>Relish</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-link waves-effect\" data-dismiss=\"modal\">Batal</button>
                <button onclick=\"return insert_user()\" type=\"button\" class=\"pull-left btn btn-link waves-effect\">Hapus</button>
                <button onclick=\"return insert_user()\" type=\"button\" class=\"btn btn-link waves-effect\">Simpan</button>
            </div>
        </div>
    </div>
</div>


<!-- Large Size -->
<div class=\"modal fade\" id=\"routeModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"largeModalLabel\">Tambah Route Baru</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row clearfix\">
                    <form method=\"POST\" action=\"";
        // line 499
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["route"] ?? null), "api_add_route", array()), "url", array()), "html", null, true);
        echo "\" id=\"acl_route_form\">
                        <div class=\"col-sm-12\">
                            <div class=\"form-group form-float\">
                                <div class=\"form-line\">
                                    <input name=\"key\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Route</label>
                                </div>
                            </div>
                            <div class=\"form-group form-float\">
                                <div class=\"form-line\">
                                    <input name=\"url\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Url</label>
                                </div>
                            </div>
                            <div class=\"form-group form-float\">
                                <div class=\"form-line\">
                                    <input name=\"controller\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Controller</label>
                                </div>
                            </div>
                            <input type=\"hidden\" name=\"";
        // line 519
        echo twig_escape_filter($this->env, ($context["csrf_name"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["csrf_hash"] ?? null), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\">
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-link waves-effect\" data-dismiss=\"modal\">Batal</button>
                <button onclick=\"return insert_route()\" type=\"button\" class=\"btn btn-link waves-effect\">Simpan</button>
            </div>
        </div>
    </div>
</div>



<!-- Large Size -->
<div class=\"modal fade\" id=\"routeModalUpdate\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"largeModalLabel\">Perbarui Route</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row clearfix\">
                    <div class=\"col-sm-12\">
                        <form method=\"POST\" action=\"";
        // line 544
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["route"] ?? null), "api_update_route", array()), "url", array()), "html", null, true);
        echo "\" id=\"route_update\">
                            <div class=\"form-group form-float\">
                                <div class=\"form-line focused\">
                                    <input name=\"key\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Route</label>
                                </div>
                            </div>
                            <div class=\"form-group form-float\">
                                <div class=\"form-line focused\">
                                    <input name=\"url\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Url</label>
                                </div>
                            </div>
                            <div class=\"form-group form-float\">
                                <div class=\"form-line focused\">
                                    <input name=\"controller\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Controller</label>
                                </div>
                            </div>
                            <input type=\"hidden\" name=\"";
        // line 563
        echo twig_escape_filter($this->env, ($context["csrf_name"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["csrf_hash"] ?? null), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\">
                            <input type=\"hidden\" name=\"id\" value=\"\" type=\"text\" class=\"form-control\">
                        </form>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-link waves-effect\" data-dismiss=\"modal\">Batal</button>
                <button onclick=\"return update_route()\" type=\"button\" class=\"btn btn-link waves-effect\">Simpan Pembaruan</button>
            </div>
        </div>
    </div>
</div>

<!-- Large Size -->
<div class=\"modal fade\" id=\"hapusModalRoute\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"largeModalLabel\">Hapus Data</h4>
            </div>
            <div class=\"modal-body\">
                Anda yakin ingin mengahapus route \"<b class=\"text-danger\" id=\"routename_delete\"></b>\" ?
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-link waves-effect\" data-dismiss=\"modal\">Batal</button>
                <button type=\"button\" onclick=\"return delete_group()\" class=\"btn btnDeleteRoute btn-link waves-effect\">Simpan</button>
            </div>
        </div>
    </div>
</div>
";
    }

    // line 594
    public function block_custom_js($context, array $blocks = array())
    {
        // line 595
        echo "
<script src=\"";
        // line 596
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js\"></script>

";
        // line 598
        $this->loadTemplate("layouts/custom/form-validation.twig", "admin/acl.twig", 598)->display($context);
        echo " ";
        $this->loadTemplate("layouts/custom/datatable.twig", "admin/acl.twig", 598)->display($context);
        echo " ";
        $this->loadTemplate("layouts/custom/itusajja.twig", "admin/acl.twig", 598)->display($context);
        echo " ";
    }

    public function getTemplateName()
    {
        return "admin/acl.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  713 => 598,  708 => 596,  705 => 595,  702 => 594,  664 => 563,  642 => 544,  612 => 519,  589 => 499,  550 => 465,  500 => 418,  470 => 393,  453 => 379,  425 => 356,  408 => 342,  360 => 299,  350 => 292,  321 => 268,  311 => 261,  261 => 216,  227 => 185,  199 => 162,  165 => 131,  34 => 3,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layouts/master_layouts.twig' %} {% block main_content %}

<link href=\"{{ base_url() }}template/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css\" type=\"text/stylesheet\">

<style>
    .hiddenRow {
        padding: 0 !important;
    }
</style>

<div class=\"block-header\">
    <h2>Access Control List</h2>
</div>
<!-- Input -->
<div class=\"row clearfix\">
    <div class=\"col-lg-7 col-md-7 col-sm-12 col-xs-12\">
        <div class=\"card\">
            <div class=\"header\">
                <h2>
                    User Manager
                    <small>menambahkan, memperbarui, serta menghapus user yang telah terdaftar dalam aplikasi.</small>
                </h2>
            </div>
            <div class=\"body\">
                <table id=\"itusajja_table_user\" class=\"table table-bordered table-striped table-hover dataTable\">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Group</th>
                            <th>Kodenota</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>

            </div>
        </div>
    </div>
    <div class=\"col-lg-5 col-md-5 col-sm-12 col-xs-12\">
        <div class=\"card\">
            <div class=\"header\">
                <h2>
                    Grup Manager
                    <small>mengatur akses usergroup yang telah berhasil login.</small>
                </h2>
            </div>
            <div class=\"body\">
                <table id=\"itusajja_table_group\" class=\"table table-bordered table-striped table-hover dataTable\">
                    <thead>
                        <tr>
                            <th>Nama Grup</th>
                            <th>Total User</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>

            </div>
        </div>
    </div>
</div>
<!-- #END# Input -->

<!-- Switch Button -->
<div class=\"row clearfix\">
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <div class=\"card\">
            <div class=\"header\">
                <h2>
                    Access Control List Manager
                    <small>Advance site configuration</small>
                </h2>
            </div>
            <div class=\"body\">

                <button class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#menuModal\">Menu Baru</button>

                <table id=\"itusajja_acl\" class=\"table table-bordered table-striped table-hover dataTable\">
                    <thead id=\"headerMenu\">
                    </thead>
                    <tbody id=\"bodyMenu\">
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<!--#END# Switch Button -->

<!-- Switch Button -->
<div class=\"row clearfix\">
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <div class=\"card\">
            <div class=\"header\">
                <h2>
                    Route Manager
                    <small>Advance site configuration</small>
                </h2>
            </div>
            <div class=\"body\">

                <table id=\"itusajja_table_route\" class=\"table table-bordered table-striped table-hover dataTable\">
                    <thead>
                        <tr>
                            <th>Key</th>
                            <th>Controller</th>
                            <th>Url</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>

            </div>
        </div>
    </div>
</div>
<!--#END# Switch Button -->


<!-- Large Size -->
<div class=\"modal fade\" id=\"userModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"largeModalLabel\">Tambah User Baru</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row clearfix\">
                    <div class=\"col-sm-12\">
                        <form method=\"POST\" action=\"{{ route.api_add_user.url }}\" id=\"userform\">
                            <div class=\"form-group form-float\">
                                <div class=\"form-line\">
                                    <input name=\"username\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Username</label>
                                </div>
                            </div>
                            <div class=\"form-group form-float\">
                                <div class=\"form-line\">
                                    <input name=\"password\" type=\"password\" class=\"form-control\">
                                    <label class=\"form-label\">Password</label>
                                </div>
                            </div>
                            <div class=\"form-group form-float\">
                                <div class=\"form-line\">
                                    <input name=\"repassword\" type=\"password\" class=\"form-control\">
                                    <label class=\"form-label\">Re-enter Password</label>
                                </div>
                            </div>
                            <p class=\"card-inside-title\">Group</p>
                            <div class=\"form-group\">
                                <select name=\"idgroup\" class=\"form-control show-tick groupSelect\" tabindex=\"-98\">
                                        
                                    </select>
                            </div>
                            <div class=\"form-group form-float\">
                                <div class=\"form-line\">
                                    <input name=\"kodenota\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Kode Nota</label>
                                </div>
                            </div>
                            <input type=\"hidden\" name=\"{{ csrf_name }}\" value=\"{{ csrf_hash }}\" type=\"text\" class=\"form-control\">
                        </form>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-link waves-effect\" data-dismiss=\"modal\">Batal</button>
                <button onclick=\"return insert_user()\" type=\"button\" class=\"btn btn-link waves-effect\">Simpan</button>
            </div>
        </div>
    </div>
</div>

<!-- Large Size -->
<div class=\"modal fade\" id=\"userModalUpdate\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"largeModalLabel\">Perbarui User</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row clearfix\">
                    <div class=\"col-sm-12\">
                        <form method=\"POST\" action=\"{{ route.api_update_user.url }}\" id=\"userformupdate\">
                            <div class=\"form-group form-float\">
                                <div class=\"form-line focused\">
                                    <input name=\"username\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Username</label>
                                </div>
                            </div>
                            <div class=\"form-group form-float\">
                                <div class=\"form-line focused\">
                                    <input name=\"password\" type=\"password\" class=\"form-control\">
                                    <label class=\"form-label\">Password</label>
                                </div>
                            </div>
                            <div class=\"form-group form-float\">
                                <div class=\"form-line focused\">
                                    <input name=\"repassword\" type=\"password\" class=\"form-control\">
                                    <label class=\"form-label\">Re-enter Password</label>
                                </div>
                            </div>
                            <p class=\"card-inside-title\">Group</p>
                            <div class=\"form-group\">
                                <select name=\"idgroup\" class=\"form-control show-tick groupSelect\" tabindex=\"-98\">
                                        
                                    </select>
                            </div>
                            <div class=\"form-group form-float\">
                                <div class=\"form-line focused\">
                                    <input name=\"kodenota\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Kode Nota</label>
                                </div>
                            </div>
                            <input type=\"hidden\" name=\"{{ csrf_name }}\" value=\"{{ csrf_hash }}\" type=\"text\" class=\"form-control\">
                            <input type=\"hidden\" name=\"id\" id=\"iduser\" value=\"\" type=\"text\" class=\"form-control\">
                        </form>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-link waves-effect\" data-dismiss=\"modal\">Batal</button>
                <button onclick=\"return update_user()\" type=\"button\" class=\"btn btn-link waves-effect\">Simpan Pembaruan</button>
            </div>
        </div>
    </div>
</div>


<!-- Large Size -->
<div class=\"modal fade\" id=\"hapusModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"largeModalLabel\">Hapus Data</h4>
            </div>
            <div class=\"modal-body\">
                Anda yakin ingin mengahapus user \"<b class=\"text-danger\" id=\"username_delete\"></b>\" ?
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-link waves-effect\" data-dismiss=\"modal\">Batal</button>
                <button type=\"button\" onclick=\"return delete_user()\" class=\"btn btnDeleteUser btn-link waves-effect\">Simpan</button>
            </div>
        </div>
    </div>
</div>



<!-- Large Size -->
<div class=\"modal fade\" id=\"groupModalUpdate\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"largeModalLabel\">Pertbarui Grup</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row clearfix\">
                    <div class=\"col-sm-12\">
                        <form method=\"POST\" action=\"{{ route.api_update_group.url }}\" id=\"groupformupdate\">
                            <div class=\"form-group form-float\">
                                <div class=\"form-line focused\">
                                    <input name=\"nama\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Nama Grup</label>
                                </div>
                            </div>
                            <input type=\"hidden\" name=\"{{ csrf_name }}\" value=\"{{ csrf_hash }}\" type=\"text\" class=\"form-control\">
                            <input type=\"hidden\" name=\"id\" value=\"\" type=\"text\" class=\"form-control\">
                        </form>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-link waves-effect\" data-dismiss=\"modal\">Batal</button>
                <button onclick=\"return update_group()\" type=\"button\" class=\"btn btn-link waves-effect\">Simpan Pembaruan</button>
            </div>
        </div>
    </div>
</div>

<!-- Large Size -->
<div class=\"modal fade\" id=\"groupModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"largeModalLabel\">Perbarui Grup</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row clearfix\">
                    <div class=\"col-sm-12\">
                        <form method=\"POST\" action=\"{{ route.api_add_group.url }}\" id=\"groupform\">
                            <div class=\"form-group form-float\">
                                <div class=\"form-line\">
                                    <input name=\"nama\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Nama Grup</label>
                                </div>
                            </div>
                            <input type=\"hidden\" name=\"{{ csrf_name }}\" value=\"{{ csrf_hash }}\" type=\"text\" class=\"form-control\">
                        </form>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-link waves-effect\" data-dismiss=\"modal\">Batal</button>
                <button onclick=\"return insert_group()\" type=\"button\" class=\"btn btn-link waves-effect\">Simpan</button>
            </div>
        </div>
    </div>
</div>


<!-- Large Size -->
<div class=\"modal fade\" id=\"hapusModalGroup\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"largeModalLabel\">Hapus Data</h4>
            </div>
            <div class=\"modal-body\">
                Anda yakin ingin mengahapus group \"<b class=\"text-danger\" id=\"groupname_delete\"></b>\" ?
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-link waves-effect\" data-dismiss=\"modal\">Batal</button>
                <button type=\"button\" onclick=\"return delete_group()\" class=\"btn btnDeleteGroup btn-link waves-effect\">Simpan</button>
            </div>
        </div>
    </div>
</div>



<!-- Large Size -->
<div class=\"modal fade\" id=\"menuModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"largeModalLabel\">Tambah Menu Baru</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row clearfix\">
                    <form method=\"POST\" action=\"{{ route.api_add_menu.url }}\" id=\"acl_menu_form\">
                        <div class=\"col-sm-12\">
                            <div class=\"form-group form-float\">
                                <div class=\"form-line\">
                                    <input name=\"nama\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Menu</label>
                                </div>
                            </div>
                            <div class=\"form-group form-float\">
                                <div class=\"form-line\">
                                    <input name=\"icon\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Icon</label>
                                </div>
                            </div>
                            <input type=\"hidden\" name=\"{{ csrf_name }}\" value=\"{{ csrf_hash }}\" type=\"text\" class=\"form-control\">
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-link waves-effect\" data-dismiss=\"modal\">Batal</button>
                <button onclick=\"return insert_menu()\" type=\"button\" class=\"btn btn-link waves-effect\">Simpan</button>
            </div>
        </div>
    </div>
</div>


<!-- Large Size -->
<div class=\"modal fade\" id=\"menuModalChild\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"largeModalLabel\">Tambah Sub Menu Baru</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row clearfix\">
                    <form method=\"POST\" action=\"{{ route.api_add_submenu.url }}\" id=\"acl_child_form\">
                        <div class=\"col-sm-12\">
                            <div class=\"form-group form-float\">
                                <div class=\"form-line\">
                                    <input name=\"nama\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Menu</label>
                                </div>
                            </div>
                            <div class=\"form-group form-float\">
                                <div class=\"form-line\">
                                    <input name=\"Parent\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Parent or Child ? 'Y' or 'N'</label>
                                </div>
                            </div>
                            <input type=\"hidden\" name=\"{{ csrf_name }}\" value=\"{{ csrf_hash }}\" type=\"text\" class=\"form-control\">
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-link waves-effect\" data-dismiss=\"modal\">Batal</button>
                <button onclick=\"return insert_child_menu()\" type=\"button\" class=\"btnInsertChildMenu btn btn-link waves-effect\">Simpan</button>
            </div>
        </div>
    </div>
</div>




<!-- Large Size -->
<div class=\"modal fade\" id=\"menuModalUpdate\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-xs\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"largeModalLabel\">Tambah Menu Baru</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row clearfix\">
                    <form method=\"POST\" action=\"{{ route.api_add_user.url }}\" id=\"#_\">
                        <div class=\"col-sm-6\">
                            <div class=\"form-group form-float\">
                                <div class=\"form-line\">
                                    <input name=\"username\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Menu</label>
                                </div>
                            </div>
                            <div class=\"form-group demo-tagsinput-area\">
                                <p class=\"card-inside-title\">Sorting</p>
                                <select class=\"form-control selectpicker\" multiple>
                                  <option>Mustard</option>
                                  <option>Ketchup</option>
                                  <option>Relish</option>
                                </select>

                            </div>
                            <div class=\"form-group form-float\">
                                <div class=\"form-line\">
                                    <input name=\"sorting\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Sorting</label>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <p class=\"card-inside-title\">Parent</p>
                            <div class=\"form-group\">
                                <select class=\"form-control selectpicker\" multiple>
                                  <option>Mustard</option>
                                  <option>Ketchup</option>
                                  <option>Relish</option>
                                </select>
                            </div>
                            <p class=\"card-inside-title\">Child</p>
                            <div class=\"form-group\">
                                <select class=\"form-control selectpicker\" multiple>
                                  <option>Mustard</option>
                                  <option>Ketchup</option>
                                  <option>Relish</option>
                                </select>
                            </div>
                            <div class=\"form-group form-float\">
                                <div class=\"form-line\">
                                    <input name=\"sorting\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Icon</label>
                                </div>
                            </div>
                            <input type=\"hidden\" name=\"{{ csrf_name }}\" value=\"{{ csrf_hash }}\" type=\"text\" class=\"form-control\">
                        </div>
                        <div class=\"col-sm-12\">
                            <p class=\"card-inside-title\">Route</p>
                            <div class=\"form-group\">
                                <select class=\"form-control selectpicker\" multiple>
                                  <option>Mustard</option>
                                  <option>Ketchup</option>
                                  <option>Relish</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-link waves-effect\" data-dismiss=\"modal\">Batal</button>
                <button onclick=\"return insert_user()\" type=\"button\" class=\"pull-left btn btn-link waves-effect\">Hapus</button>
                <button onclick=\"return insert_user()\" type=\"button\" class=\"btn btn-link waves-effect\">Simpan</button>
            </div>
        </div>
    </div>
</div>


<!-- Large Size -->
<div class=\"modal fade\" id=\"routeModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"largeModalLabel\">Tambah Route Baru</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row clearfix\">
                    <form method=\"POST\" action=\"{{ route.api_add_route.url }}\" id=\"acl_route_form\">
                        <div class=\"col-sm-12\">
                            <div class=\"form-group form-float\">
                                <div class=\"form-line\">
                                    <input name=\"key\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Route</label>
                                </div>
                            </div>
                            <div class=\"form-group form-float\">
                                <div class=\"form-line\">
                                    <input name=\"url\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Url</label>
                                </div>
                            </div>
                            <div class=\"form-group form-float\">
                                <div class=\"form-line\">
                                    <input name=\"controller\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Controller</label>
                                </div>
                            </div>
                            <input type=\"hidden\" name=\"{{ csrf_name }}\" value=\"{{ csrf_hash }}\" type=\"text\" class=\"form-control\">
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-link waves-effect\" data-dismiss=\"modal\">Batal</button>
                <button onclick=\"return insert_route()\" type=\"button\" class=\"btn btn-link waves-effect\">Simpan</button>
            </div>
        </div>
    </div>
</div>



<!-- Large Size -->
<div class=\"modal fade\" id=\"routeModalUpdate\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"largeModalLabel\">Perbarui Route</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row clearfix\">
                    <div class=\"col-sm-12\">
                        <form method=\"POST\" action=\"{{ route.api_update_route.url }}\" id=\"route_update\">
                            <div class=\"form-group form-float\">
                                <div class=\"form-line focused\">
                                    <input name=\"key\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Route</label>
                                </div>
                            </div>
                            <div class=\"form-group form-float\">
                                <div class=\"form-line focused\">
                                    <input name=\"url\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Url</label>
                                </div>
                            </div>
                            <div class=\"form-group form-float\">
                                <div class=\"form-line focused\">
                                    <input name=\"controller\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Controller</label>
                                </div>
                            </div>
                            <input type=\"hidden\" name=\"{{ csrf_name }}\" value=\"{{ csrf_hash }}\" type=\"text\" class=\"form-control\">
                            <input type=\"hidden\" name=\"id\" value=\"\" type=\"text\" class=\"form-control\">
                        </form>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-link waves-effect\" data-dismiss=\"modal\">Batal</button>
                <button onclick=\"return update_route()\" type=\"button\" class=\"btn btn-link waves-effect\">Simpan Pembaruan</button>
            </div>
        </div>
    </div>
</div>

<!-- Large Size -->
<div class=\"modal fade\" id=\"hapusModalRoute\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"largeModalLabel\">Hapus Data</h4>
            </div>
            <div class=\"modal-body\">
                Anda yakin ingin mengahapus route \"<b class=\"text-danger\" id=\"routename_delete\"></b>\" ?
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-link waves-effect\" data-dismiss=\"modal\">Batal</button>
                <button type=\"button\" onclick=\"return delete_group()\" class=\"btn btnDeleteRoute btn-link waves-effect\">Simpan</button>
            </div>
        </div>
    </div>
</div>
{% endblock %} {% block custom_js %}

<script src=\"{{ base_url() }}template/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js\"></script>

{% include 'layouts/custom/form-validation.twig' %} {% include 'layouts/custom/datatable.twig' %} {% include 'layouts/custom/itusajja.twig' %} {% endblock %}", "admin/acl.twig", "D:\\SERVER\\htdocs\\development\\sipondot\\apliku\\views\\admin\\acl.twig");
    }
}
