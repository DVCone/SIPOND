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
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable" id="mydata">
                                    <thead>
                                        <tr>
                                            <th>NIS</th>
                                            <th>Nama Siswa</th>
                                            <th>Kelas</th>
                                            <th>Total</th>
                                            <th>Mapel</th>
                                            <th>Rata-Rata</th>
                                            <th>Detail</th>
                                            <th>Cetak</th>
                                        </tr>
                                    </thead>

                                    <tbody id="show_data">
                                          <?php $i = 1 ?>
                                          <?php foreach($data as $m): ?>
                                          <tr>
                                            <td><?php echo $m->nis ?></a>   </td>
                                            <td width="300"><?php echo $m->namasiswa ?></td>
                                            <td width="50"><?php echo $m->kelas ?></td>
                                            <td width="70" align="right"><?php echo number_format($m->totnilai,0,",",".") ?></td>
                                            <td width="70" align="center"><?php echo number_format($m->totmapel,0,",",".") ?></td>
                                            <td width="70" align="right"><?php echo number_format($m->ratanilai,0,",",".") ?></td>
                                            <td align="center"><a href="<?php echo base_url();?>index.php/nilai/downloaddetailnilai/<?php echo $m->nis; ?>" class="btn btn-primary waves-effect" target="_blank"> <i class="material-icons">view_list</i></a></td>
                                            <td align="center"><a href="<?php echo base_url();?>index.php/nilai/downloadNilai/<?php echo $m->nis; ?>" class="btn btn-primary waves-effect" target="_blank"> <i class="material-icons">print</i></a></td>
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
