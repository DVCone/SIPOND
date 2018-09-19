    <section class="content">  <!-- Jangan Dihilangkan.. Tutupnya ada di footer.php -->
        <div class="container-fluid">
            <div class="block-header">

            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                        <div class="block-header" align="center"><b>Laporan Berita Ke Wali Siswa</b></div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable" id="mydata">
                                    <thead>
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>DiTujukan</th>
                                            <th>Judul</th>
                                            <th>Isi</th>
                                            <th>Tertanda</th>
                                            <th>Publish</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>

                                    <tbody id="show_data">
                                          <?php $i = 1 ?>
                                          <?php foreach($data as $m): ?>
                                          <tr>
                                            <td><?php echo $m->tanggal ?></a>   </td>
                                            <td><?php echo $m->ditujukan ?></td>
                                            <td><?php echo $m->judul ?></td>
                                            <td><?php echo $m->isi ?></td>
                                            <td><?php echo $m->pj ?></td>
                                            <td><?php echo $m->tutup ?></td>
                                            <td align="center">
                                                <a href="<?php echo base_url();?>index.php/berita/hapus/<?php echo $m->noberita ?>" class="btn btn-primary waves-effect"> <i class="material-icons">delete_forever</i></a>
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
