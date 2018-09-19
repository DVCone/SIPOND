    <section class="content">  <!-- Jangan Dihilangkan.. Tutupnya ada di footer.php -->
        <div class="container-fluid">
            <div class="block-header">

            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                        <div class="block-header" align="center"><b>DAFTAR SETTING MAPEL</b></div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable" id="mydata">
                                    <thead>
                                        <tr>
                                            <th>No Id</th>
                                            <th>Kode Mapel</th>
                                            <th>Nama Pelajaran</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Cetak</th>
                                        </tr>
                                    </thead>

                                    <tbody id="show_data">
                                          <?php $i = 1 ?>
                                          <?php foreach($data as $m): ?>
                                          <tr>
                                            <td><?php echo $m->noid ?></td>
                                            <td><?php echo $m->kodemapel ?></td>
                                            <td><?php echo $m->namamapel ?></td>
                                            <td><?php echo $m->nik ?></td>
                                            <td><?php echo $m->nama ?></td>
                                            <td><?php echo $m->kelas ?></td>
                                            <td align="center">
                                                <a href="<?php echo base_url();?>index.php/nilai2/hapus/<?php echo $m->noid; ?>" class="btn btn-primary waves-effect"> <i class="material-icons">delete_forever</i></a>
                                                <!-- <a href="<?php echo base_url();?>index.php/nilai/downloadNilai/<?php echo $m->noid; ?>" class="btn btn-primary waves-effect" target="_blank"> <i class="material-icons">file_download</i></a> -->
                                                <a href="<?php echo base_url();?>index.php/nilai/downloadisinilai/<?php echo $m->noid; ?>" class="btn btn-primary waves-effect" target="_blank"> <i class="material-icons">file_download</i></a>
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
