    <section class="content">  <!-- Jangan Dihilangkan.. Tutupnya ada di footer.php -->
        <div class="container-fluid">
            <div class="block-header">

            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                        <div class="block-header" align="center"><b>Laporan Penerimaan Tunai</b></div>
                        <form method="post" action="<?php echo base_url(); ?>index.php/keuanganrutin/penerimaancashcari">
                          <div class="panel-heading">Cari Periode :
                            <input size = "15" type="text" name="tanggalmulai" id="tanggalmulai" required /> Sampai
                            <input size = "15" type="text" name="tanggalselesai" id="tanggalselesai" required />
                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
                            <input type="submit"  class="btn btn-green"  value="Cari Sekarang" />
                          </div>
                        </form><br>

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable-cash" id="mydata">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>No Nota</th>
                                            <th>Tanggal</th>
                                            <th>NIS</th>
                                            <th>Nama Siswa</th>
                                            <th>Kelas</th>
                                            <th>Total</th>
                                            <th>Pengguna</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>

                                    <tbody id="show_data">
                                          <?php $i = 1 ?>
                                          <?php foreach($data as $m): ?>
                                          <tr>
                                            <td align="center"><?php echo $i++ ?></td>
                                            <td align="right"><?php echo $m->nonota ?></td>
                                            <td><?php echo $m->tanggal ?></td>
                                            <td><?php echo $m->nis ?></td>
                                            <td><?php echo $m->namasiswa ?></td>
                                            <td><?php echo $m->kelas ?></td>
                                            <td align="right"><?php echo number_format($m->total,0,",",".") ?></td>
                                            <td><?php echo $m->pengguna ?></td>
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
