<?php

/* admin/acl.twig */
class __TwigTemplate_db74163d9b717a1aaa736c91448e1a80c9c85661dd7310d4cc10656f1b4035c5 extends Twig_Template
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
    <h2>Pengaturan Pengguna Aplikasi</h2>
</div>
<!-- Input -->
<div class=\"row clearfix\">
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <div class=\"card\">
            <div class=\"header\">
                <h2>
                    Daftar Pengguna
                    <small>menambahkan, memperbarui, serta menghapus pengguna yang telah terdaftar dalam aplikasi.</small>
                </h2>
            </div>
            <div class=\"body\">
                <table id=\"itusajja_table_user\" class=\"table table-bordered table-striped table-hover dataTable\">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Username</th>
                            <th>Kodenota</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    ";
        // line 61
        echo "</div>
<!-- #END# Input -->



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
        // line 76
        echo twig_escape_filter($this->env, base_url("index.php/api/add_user "), "html", null, true);
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
                            <div class=\"form-group form-float hide\">
                                <div class=\"form-line\">
                                    <input type=\"hidden\" name=\"repassword\" value=\"1\" type=\"password\" class=\"form-control\">
                                    <label class=\"form-label\">Re-enter Password</label>
                                </div>
                            </div>
                            <div class=\"form-group form-float\">
                                <div class=\"form-line\">
                                    <input name=\"kodenota\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Kode Nota</label>
                                </div>
                            </div>
                            <input type=\"hidden\" name=\"";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["csrf_name"]) ? $context["csrf_name"] : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["csrf_hash"]) ? $context["csrf_hash"] : null), "html", null, true);
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
        // line 124
        echo twig_escape_filter($this->env, base_url("index.php/api/update_user "), "html", null, true);
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
                                    <input type=\"hidden\" name=\"repassword\" value=\"1\" type=\"password\" class=\"form-control\">
                            <div class=\"form-group form-float hide\">
                                <div class=\"form-line focused\">
                                    <label class=\"form-label\">Re-enter Password</label>
                                </div>
                            </div>
                            <div class=\"form-group form-float\">
                                <div class=\"form-line focused\">
                                    <input name=\"kodenota\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Kode Nota</label>
                                </div>
                            </div>
                            <input type=\"hidden\" name=\"";
        // line 149
        echo twig_escape_filter($this->env, (isset($context["csrf_name"]) ? $context["csrf_name"] : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["csrf_hash"]) ? $context["csrf_hash"] : null), "html", null, true);
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
                Anda yakin ingin mengahapus user \"
                <b class=\"text-danger\" id=\"username_delete\"></b>\" ?
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-link waves-effect\" data-dismiss=\"modal\">Batal</button>
                <button type=\"button\" onclick=\"return delete_user()\" class=\"btn btnDeleteUser btn-link waves-effect\">Simpan</button>
            </div>
        </div>
    </div>
</div>

<!-- Large Size -->
<div class=\"modal fade\" id=\"menuModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"largeModalLabel\">Set menu user (
                    <span id=\"nameUser\"></span>)</h4>
            </div>
            <div class=\"modal-body\">
                <table class=\"table table-bordered table-striped table-hover dataTable\">
                    <thead>
                        <tr>
                            <td>Role</td>
                            <td>Allow</td>
                        </tr>
                    </thead>
                    <tbody class=\"contentData\">
                    </tbody>
                </table>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-link waves-effect\" data-dismiss=\"modal\">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Large Size -->
<div class=\"modal fade\" id=\"menuAddModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"largeModalLabel\">Tambah Menu Baru</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row clearfix\">
                    <form method=\"POST\" action=\"";
        // line 219
        echo twig_escape_filter($this->env, base_url("index.php/api/add_menu "), "html", null, true);
        echo "\" id=\"acl_menu_form\">
                        <div class=\"col-sm-12\">
                            <div class=\"form-group form-float\">
                                <div class=\"form-line focused\">
                                    <input name=\"nama\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Menu</label>
                                </div>
                            </div>
                            <div class=\"form-group form-float\">
                                <div class=\"form-line focused\">
                                    <input name=\"route\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Url</label>
                                </div>
                            </div>
                            <div class=\"form-group form-float\">
                                <div class=\"form-line focused\">
                                    <input name=\"icon\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Icon</label>
                                </div>
                            </div>
                            <input type=\"hidden\" name=\"";
        // line 239
        echo twig_escape_filter($this->env, (isset($context["csrf_name"]) ? $context["csrf_name"] : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["csrf_hash"]) ? $context["csrf_hash"] : null), "html", null, true);
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
<div class=\"modal fade\" id=\"menuSubModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"largeModalLabel\">Tambah Sub Menu</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row clearfix\">
                    <form method=\"POST\" action=\"";
        // line 263
        echo twig_escape_filter($this->env, base_url("index.php/api/add_sub_menu "), "html", null, true);
        echo "\" id=\"acl_menu_form_sub_update\">
                        <div class=\"col-sm-12\">
                            <div class=\"form-group form-float\">
                                <div class=\"form-line\">
                                    <input name=\"nama\" type=\"text\" class=\"form-control\">
                                    <input name=\"id\" type=\"hidden\" class=\"form-control\">
                                    <label class=\"form-label\">Menu</label>
                                </div>
                            </div>
                            <div class=\"form-group form-float\">
                                <div class=\"form-line\">
                                    <input name=\"route\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Url</label>
                                </div>
                            </div>
                            <input type=\"hidden\" name=\"";
        // line 278
        echo twig_escape_filter($this->env, (isset($context["csrf_name"]) ? $context["csrf_name"] : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["csrf_hash"]) ? $context["csrf_hash"] : null), "html", null, true);
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
<div class=\"modal fade\" id=\"hapusmenuModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"largeModalLabel\">Hapus Data</h4>
            </div>
            <div class=\"modal-body\">
                Anda yakin ingin mengahapus menu id \"
                <b class=\"text-danger\" id=\"menu_name\"></b>\" ?
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-link waves-effect\" data-dismiss=\"modal\">Batal</button>
                <button type=\"button\" onclick=\"return delete_user()\" class=\"btn btntakedownmanu btn-link waves-effect\">Simpan</button>
            </div>
        </div>
    </div>
</div>

";
    }

    // line 310
    public function block_custom_js($context, array $blocks = array())
    {
        // line 311
        echo "
<script src=\"";
        // line 312
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "template/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js\"></script>

";
        // line 314
        $this->loadTemplate("layouts/custom/form-validation.twig", "admin/acl.twig", 314)->display($context);
        echo " ";
        $this->loadTemplate("layouts/custom/datatable.twig", "admin/acl.twig", 314)->display($context);
        echo " ";
        $this->loadTemplate("layouts/custom/itusajja.twig", "admin/acl.twig", 314)->display($context);
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
        return array (  368 => 314,  363 => 312,  360 => 311,  357 => 310,  318 => 278,  300 => 263,  271 => 239,  248 => 219,  173 => 149,  145 => 124,  117 => 101,  89 => 76,  72 => 61,  34 => 3,  31 => 2,  11 => 1,);
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
    <h2>Pengaturan Pengguna Aplikasi</h2>
</div>
<!-- Input -->
<div class=\"row clearfix\">
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <div class=\"card\">
            <div class=\"header\">
                <h2>
                    Daftar Pengguna
                    <small>menambahkan, memperbarui, serta menghapus pengguna yang telah terdaftar dalam aplikasi.</small>
                </h2>
            </div>
            <div class=\"body\">
                <table id=\"itusajja_table_user\" class=\"table table-bordered table-striped table-hover dataTable\">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Username</th>
                            <th>Kodenota</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    {# <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
        <div class=\"card\">
            <div class=\"header\">
                <h2>
                    Menu dan Halaman Aplikasi
                    <small>menambahkan, memperbarui, serta menghapus user yang telah terdaftar dalam aplikasi.</small>
                </h2>
            </div>
            <div class=\"body\">
            <!--<button data-toggle=\"modal\" data-target=\"#menuAddModal\" class=\"btn btn-success\">Halaman Baru</button>-->
                <table class=\"table table-bordered table-striped table-hover dataTable\">
                    <thead>
                        <tr>
                            <td>Halaman</td>
                            <td>Act</td>
                        </tr>
                    </thead>
                    <tbody class=\"menuManager\">
                    </tbody>
                </table>
            </div>
        </div>
    </div> #}
</div>
<!-- #END# Input -->



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
                        <form method=\"POST\" action=\"{{ base_url(\"index.php/api/add_user \") }}\" id=\"userform\">
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
                            <div class=\"form-group form-float hide\">
                                <div class=\"form-line\">
                                    <input type=\"hidden\" name=\"repassword\" value=\"1\" type=\"password\" class=\"form-control\">
                                    <label class=\"form-label\">Re-enter Password</label>
                                </div>
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
                        <form method=\"POST\" action=\"{{ base_url(\"index.php/api/update_user \") }}\" id=\"userformupdate\">
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
                                    <input type=\"hidden\" name=\"repassword\" value=\"1\" type=\"password\" class=\"form-control\">
                            <div class=\"form-group form-float hide\">
                                <div class=\"form-line focused\">
                                    <label class=\"form-label\">Re-enter Password</label>
                                </div>
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
                Anda yakin ingin mengahapus user \"
                <b class=\"text-danger\" id=\"username_delete\"></b>\" ?
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-link waves-effect\" data-dismiss=\"modal\">Batal</button>
                <button type=\"button\" onclick=\"return delete_user()\" class=\"btn btnDeleteUser btn-link waves-effect\">Simpan</button>
            </div>
        </div>
    </div>
</div>

<!-- Large Size -->
<div class=\"modal fade\" id=\"menuModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"largeModalLabel\">Set menu user (
                    <span id=\"nameUser\"></span>)</h4>
            </div>
            <div class=\"modal-body\">
                <table class=\"table table-bordered table-striped table-hover dataTable\">
                    <thead>
                        <tr>
                            <td>Role</td>
                            <td>Allow</td>
                        </tr>
                    </thead>
                    <tbody class=\"contentData\">
                    </tbody>
                </table>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-link waves-effect\" data-dismiss=\"modal\">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Large Size -->
<div class=\"modal fade\" id=\"menuAddModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"largeModalLabel\">Tambah Menu Baru</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row clearfix\">
                    <form method=\"POST\" action=\"{{ base_url(\"index.php/api/add_menu \") }}\" id=\"acl_menu_form\">
                        <div class=\"col-sm-12\">
                            <div class=\"form-group form-float\">
                                <div class=\"form-line focused\">
                                    <input name=\"nama\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Menu</label>
                                </div>
                            </div>
                            <div class=\"form-group form-float\">
                                <div class=\"form-line focused\">
                                    <input name=\"route\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Url</label>
                                </div>
                            </div>
                            <div class=\"form-group form-float\">
                                <div class=\"form-line focused\">
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
<div class=\"modal fade\" id=\"menuSubModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"largeModalLabel\">Tambah Sub Menu</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row clearfix\">
                    <form method=\"POST\" action=\"{{ base_url(\"index.php/api/add_sub_menu \") }}\" id=\"acl_menu_form_sub_update\">
                        <div class=\"col-sm-12\">
                            <div class=\"form-group form-float\">
                                <div class=\"form-line\">
                                    <input name=\"nama\" type=\"text\" class=\"form-control\">
                                    <input name=\"id\" type=\"hidden\" class=\"form-control\">
                                    <label class=\"form-label\">Menu</label>
                                </div>
                            </div>
                            <div class=\"form-group form-float\">
                                <div class=\"form-line\">
                                    <input name=\"route\" type=\"text\" class=\"form-control\">
                                    <label class=\"form-label\">Url</label>
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
<div class=\"modal fade\" id=\"hapusmenuModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"largeModalLabel\">Hapus Data</h4>
            </div>
            <div class=\"modal-body\">
                Anda yakin ingin mengahapus menu id \"
                <b class=\"text-danger\" id=\"menu_name\"></b>\" ?
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-link waves-effect\" data-dismiss=\"modal\">Batal</button>
                <button type=\"button\" onclick=\"return delete_user()\" class=\"btn btntakedownmanu btn-link waves-effect\">Simpan</button>
            </div>
        </div>
    </div>
</div>

{% endblock %} {% block custom_js %}

<script src=\"{{ base_url() }}template/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js\"></script>

{% include 'layouts/custom/form-validation.twig' %} {% include 'layouts/custom/datatable.twig' %} {% include 'layouts/custom/itusajja.twig' %} {% endblock %}", "admin/acl.twig", "/home/sipy1897/public_html/demo/apliku/views/admin/acl.twig");
    }
}
