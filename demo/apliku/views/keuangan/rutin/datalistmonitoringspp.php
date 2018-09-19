    <section class="content">  <!-- Jangan Dihilangkan.. Tutupnya ada di footer.php -->
        <div class="container-fluid">
            <div class="block-header">

            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                        <div class="block-header" align="center"><b>Laporan Monitoring SPP</b></div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable-monitoring" id="mydata">
                                    <thead>
                                        <tr>        
                                            <th>No</th>
                                            <th>NIS</th>
                                            <th>Nama Siswa</th>
                                            <th>Kelas</th>
                                            <th>Juli</th>
                                            <th>Agustus</th>
                                            <th>September</th>
                                            <th>Oktober</th>
                                            <th>November</th>
                                            <th>Desember</th>
                                            <th>Januari</th>
                                            <th>Februari</th>
                                            <th>Maret</th>
                                            <th>April</th>
                                            <th>Mei</th>
                                            <th>Juni</th>
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
                                            <td align="right"><?php echo number_format($m->juli,0,",",".") ?></td>
                                            <td align="right"><?php echo number_format($m->agustus,0,",",".") ?></td>
                                            <td align="right"><?php echo number_format($m->september,0,",",".") ?></td>
                                            <td align="right"><?php echo number_format($m->oktober,0,",",".") ?></td>
                                            <td align="right"><?php echo number_format($m->november,0,",",".") ?></td>
                                            <td align="right"><?php echo number_format($m->desember,0,",",".") ?></td>
                                            <td align="right"><?php echo number_format($m->januari,0,",",".") ?></td>
                                            <td align="right"><?php echo number_format($m->februari,0,",",".") ?></td>
                                            <td align="right"><?php echo number_format($m->maret,0,",",".") ?></td>
                                            <td align="right"><?php echo number_format($m->april,0,",",".") ?></td>
                                            <td align="right"><?php echo number_format($m->mei,0,",",".") ?></td>
                                            <td align="right"><?php echo number_format($m->juni,0,",",".") ?></td>

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
