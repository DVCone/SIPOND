    <section class="content">  <!-- Jangan Dihilangkan.. Tutupnya ada di footer.php -->
        <div class="container-fluid">
            <div class="block-header">

            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                        <div class="block-header" align="center"><b>Laporan Pengambilan Uang Saku Siswa</b></div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable-uangsaku" id="mydata">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIS</th>
                                            <th>Nama Siswa</th>
                                            <th>Kelas</th>
                                            <th>Tanggal</th>
                                            <th>Nominal</th>
                                            <th>Catatan</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>

                                    <tbody id="show_data">
                                          <?php $i = 1 ?>
                                          <?php foreach($data as $m): ?>
                                          <tr>
                                            <td><?php echo $m->no ?></td>
                                            <td><?php echo $m->nis ?></a>   </td>
                                            <td><?php echo $m->namasiswa ?></td>
                                            <td><?php echo $m->kelas ?></td>
                                            <td><?php echo $m->tanggal ?></td>
                                            <td align="right"><?php echo number_format($m->uangkeluar,0,",",".") ?></td>
                                            <td><?php echo $m->catatan ?></td>
                                            <td align="center">
                                                <a href="<?php echo base_url();?>index.php/keuanganuangsakukeluar/hapus/<?php echo $m->nonota ?>" class="btn btn-primary waves-effect"> <i class="material-icons">delete_forever</i></a>
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
