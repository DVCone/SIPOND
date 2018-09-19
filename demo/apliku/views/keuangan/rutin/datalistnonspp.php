    <section class="content">  <!-- Jangan Dihilangkan.. Tutupnya ada di footer.php -->
        <div class="container-fluid">
            <div class="block-header">

            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                        <div class="block-header" align="center"><b>Laporan Pembayaran Non SPP</b></div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable-nonspp" id="mydata">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIS</th>
                                            <th>Nama Siswa</th>
                                            <th>Kelas</th>
                                            <th>Uang Pangkal</th>
                                            <th>Daftar Ulang</th>
                                            <th>Bimbel</th>
                                            <th>Uang Saku</th>
                                            <th>Infaq</th>
                                            <th>Keterangan Infaq</th>
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
                                            <td align="right"><?php echo number_format($m->uangpangkal,0,",",".") ?></td>
                                            <td align="right"><?php echo number_format($m->daftarulang,0,",",".") ?></td>
                                            <td align="right"><?php echo number_format($m->bimbel,0,",",".") ?></td>
                                            <td align="right"><?php echo number_format($m->uangsakumasuk,0,",",".") ?></td>
                                            <td align="right"><?php echo number_format($m->infaq,0,",",".") ?></td>
                                            <td><?php echo $m->keteranganinfaq ?></td>
                                            <td align="center">
                                                <a href="<?php echo base_url();?>index.php/keuanganrutin/hapus/<?php echo $m->nonota ?>" class="btn btn-primary waves-effect"> <i class="material-icons">delete_forever</i></a>
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
