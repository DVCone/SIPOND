    <section class="content">  <!-- Jangan Dihilangkan.. Tutupnya ada di footer.php -->
        <div class="container-fluid">
            <div class="block-header">

            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                        <div class="block-header" align="center"><b>Laporan Data Mata Pelajaran</b></div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable-kes" id="mydata">
                                    <thead>
                                        <tr>
                                            <th>No Urut</th>
                                            <th>Kode Mapel</th>
                                            <th>Nama Pelajaran</th>
                                            <th>Arabic</th>
                                            <th>Kategori</th>

                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody id="show_data">
                                          <?php $i = 1; ?>
                                          <?php foreach($data as $m): ?>
                                          <tr>
                                            <td><?php echo $i++ ?></a>   </td>
                                            <td><?php echo $m->kodemapel ?></td>
                                            <td><?php echo $m->namamapel ?></td>
                                            <td align="right"><?php echo $m->arabic ?></td>
                                            <td><?php echo $m->kategori ?></td>
                                            <td></td>
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
