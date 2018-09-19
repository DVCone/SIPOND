<section class="content">
    <!-- Jangan Dihilangkan.. Tutupnya ada di footer.php -->
    <div class="container-fluid">
        <div class="block-header">

        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="body">
                        <div class="block-header" align="center">
                            <b>Data Guru / Karyawan</b>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable-karyawan" id="mydata">
                                <thead>
                                    <tr>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Kota Lahir</th>
                                        <th>Alamat</th>
                                        <th>Kota</th>
                                        <th>Telephon</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>

                                <tbody id="show_data">
                                    <?php $i = 1 ?>
                                    <?php foreach($data as $m): ?>
                                    <tr>
                                        <td>
                                            <?php echo $m->nik ?>
                                            </a>
                                        </td>
                                        <td>
                                            <?php echo $m->nama ?>
                                        </td>
                                        <td>
                                            <?php echo $m->kotalahir ?>
                                        </td>
                                        <td>
                                            <?php echo $m->alamat ?>
                                        </td>
                                        <td>
                                            <?php echo $m->kota ?>
                                        </td>
                                        <td>
                                            <?php echo $m->nohp1 ?>
                                        </td>
                                        <td align="center">
                                            <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#myModal">
                                                <input type="hidden" name="nis">
                                                <i class="material-icons">update</i>
                                            </button>

                                            <a href="<?php echo base_url();?>index.php/karyawan/hapus/<?php echo $m->nik ?>" class="btn btn-primary waves-effect">
                                                <i class="material-icons">delete_forever</i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Update data</h4>
                </div>

                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="body">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#home_with_icon_title" data-toggle="tab" aria-expanded="true">
                                                <i class="material-icons">perm_identity</i> Biodata
                                            </a>
                                        </li>

                                        <li role="presentation" class="">
                                            <a href="#alamat_with_icon_title" data-toggle="tab" aria-expanded="false">
                                                <i class="material-icons">location_on</i> Alamat
                                            </a>
                                        </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <!-- BIODATA -->

                                        <div role="tabpanel" class="tab-pane fade in active" id="home_with_icon_title">
                                            <form method="POST" id="form_add_karyawan">
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <b>Nama Guru / Karyawan</b>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input name="nama" type="text" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <b>Kota Lahir</b>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input name="kotalahir" type="text" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <b>Tanggal Lahir</b>
                                                        <div class="form-group">
                                                            <input type="date" class="form-control" name="tanggallahir" id="tanggalInput" value="<?php echo date(" Y-m-d ") ?>" required
                                                            />
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-3">
                                                        <b>Jenis Kelamin</b>
                                                        <div class="form-group">
                                                            <select name="jeniskelamin" class="form-control show-tick">
                                                                <option value="Pria">Pria</option>
                                                                <option value="Wanita">Wanita</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <b>Golongan Darah</b>
                                                        <div class="form-group">
                                                            <select name="golongandarah" class="form-control show-tick">
                                                                <option value="A">A</option>
                                                                <option value="B">B</option>
                                                                <option value="AB">AB</option>
                                                                <option value="O">O</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <b>Status</b>
                                                        <select name="statusnikah" class="form-control show-tick">
                                                            <option value="Bujang">Bujang</option>
                                                            <option value="Menikah">Menikah</option>
                                                            <option value="Janda">Janda</option>
                                                            <option value="Duda">Duda</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <b>Pendidikan</b>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <select name="pendidikanterakhir" class="form-control show-tick">
                                                                    <option value="SD">SD</option>
                                                                    <option value="SLTP">SLTP</option>
                                                                    <option value="SLTA">SLTA</option>
                                                                    <option value="D1-D3">D1-D3</option>
                                                                    <option value="S1">S1</option>
                                                                    <option value="S2">S2</option>
                                                                    <option value="S3">S3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <b>Jabatan</b>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input name="jabatan" type="text" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <b>No HP</b>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input name="nohp1" type="text" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div role="tabpanel" class="tab-pane fade" id="alamat_with_icon_title">
                                            <form method="POST" id="formibu">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <b>Alamat</b>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input name="alamat" type="text" class="form-control" />
                                                                <input id="nikisialamat" name="nikisialamat" type="hidden" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <b>Kelurahan</b>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input name="kelurahan" type="text" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <b>Kecamatan</b>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input name="kecamatan" type="text" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <b>Kota</b>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input name="kota" type="text" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <b>Provinsi</b>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input name="provinsi" type="text" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
                                            <button type="submit" id="btnbiodata" class="btn btn-primary waves-effect">Simpan Data</button>
                                        </div>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>