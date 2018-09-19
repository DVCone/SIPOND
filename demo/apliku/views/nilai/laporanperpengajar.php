    <section class="content">  <!-- Jangan Dihilangkan.. Tutupnya ada di footer.php -->
        <div class="container-fluid">
            <div class="block-header">

            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                        <div class="block-header" align="center"><b>Laporan Pembayaran SPP</b></div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable-bayarspp" id="mydata">
                                    <thead>
                                        <tr>
                                            <th>No Id</th>
                                            <th>Nama Pengajar</th>
                                            <th>Mata Pelajaran</th>
                                            <th>Kelas</th>
                                            <th>Detail</th>
                                            <th>Cetak</th>
                                        </tr>
                                    </thead>

                                    <tbody id="show_data">
                                          <?php $i = 1 ?>
                                          <?php foreach($data as $m): ?>
                                          <tr>
                                            <td width="50" align="center"><?php echo $m->noid ?></a>   </td>
                                            <td width="300"><?php echo $m->nama ?></td>
                                            <td width="50"><?php echo $m->namamapel ?></td>
                                            <td width="50" align="center"><?php echo $m->kelas ?></td>

                                            <td width="50" align="center"><a href="" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#largeModal"> <i class="material-icons">view_list</i></a></td>
                                            <td width="50" align="center"><a href="<?php echo base_url();?>index.php/nilai/downloadNilai/<?php echo $m->noid; ?>" class="btn btn-primary waves-effect" target="_blank"> <i class="material-icons">print</i></a></td>
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


        <!-- Large Size -->
        <div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="largeModalLabel">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan
                        vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper.
                        Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus
                        nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla.
                        Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                    </div>
                </div>
            </div>
        </div>
