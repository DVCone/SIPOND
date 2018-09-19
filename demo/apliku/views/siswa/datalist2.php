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
                            <b>Laporan Data Pelanggaran Siswa</b>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable-siswa" id="mydata">
                                <thead>
                                    <tr>
                                        <th>Foto</th>
                                        <th>NIS</th>
                                        <th>Nama Siswa</th>
                                        <th>Kelas</th>
                                        <th>Nama Ayah</th>
                                        <th>Nama Ibu</th>
                                        <th>Telephon</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>

                                <tbody id="show_data">
                                    <?php $i = 1 ?>
                                    <?php foreach($data as $m): ?>
                                    <tr>
                                        <td>
                                            <?php
                                                if ($m->foto == '') {
                                                    echo "<img src='".base_url("./assets/fotosiswa/no-avatar.jpg")."' width='115' height='140'>";
                                                } else {
                                                    echo "<img src='".base_url("./assets/fotosiswa/".$m->nis.".jpg")."' width='115' height='140'>";
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <?php echo $m->nis ?>
                                        </td>
                                        <td>
                                            <?php echo $m->namasiswa ?>
                                        </td>
                                        <td>
                                            <?php echo $m->kelas ?>
                                        </td>
                                        <td>
                                            <?php echo $m->namaayah ?>
                                        </td>
                                        <td>
                                            <?php echo $m->namaibu ?>
                                        </td>
                                        <td>
                                            <?php echo $m->telephon ?>
                                        </td>

                                        <td align="center">
                                            <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#myModal">
                                                <input type="hidden" name="nis" action="<?php echo $m->nis ?>">
                                                    <i class="material-icons">file_upload</i>
                                            </button>
                                            <a href="<?php echo base_url();?>index.php/siswa/hapus/<?php echo $m->nis ?>" class="btn btn-primary waves-effect">
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
                    <h4 class="modal-title">Upload Foto</h4>
                </div>

                <div class="modal-body">
                    <!-- Menampilkan Error jika validasi tidak valid -->
                    <div style="color: red;">
                        <?php echo (isset($message))? $message : ""; ?>
                    </div>
                    <?php echo form_open("siswa/fotoyadi", array('enctype'=>'multipart/form-data')); ?>
                    <table cellpadding="8">

                            <div class="col-sm-12">
                                <b>Pilih gambar</b>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input id="gambar" name="input_gambar" type="file" class="form-control"/>
                                            <?php echo form_label('', 'userfile') ?>
                                            <?php echo form_upload('userfile') ?>
                                        </div>

                                        <input type="text" value="11700092" id="nis" name="nis">
                                    </div>
                            </div>

                    </table>

                    <hr>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>

                            <input type="submit" name="submit" value="Simpan" class="btn btn-primary waves-effect">

                      <?php echo form_close(); ?>

                    <!-- <input type="submit" class="btn btn-default" data-dismiss="modal" name="submit" value="Simpan"/> -->
                </div>

                        <?php echo form_open_multipart('siswa/fotoyadi'); ?> <br>
                				<?php

                				?>
                            <input type="text" value="11700091" id="nis" name="nis">
                                <br><br>
                				<?php echo form_label('', 'userfile') ?>
                				<?php echo form_upload('userfile') ?>
                                <br>
                				<?php echo form_submit('submit', 'احفظ') ?></p>
                        <?php echo form_close() ?>
            </div>

        </div>
    </div>
