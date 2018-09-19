    <section class="content">  <!-- Jangan Dihilangkan.. Tutupnya ada di footer.php -->
        <div class="container-fluid">
            <div class="block-header">
                
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                        <div class="block-header" align="center"><b>Laporan Data Kesehatan Siswa</b></div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable" id="mydata">
                                    <thead>
                                        <tr>
                                            <th>NIS</th>
                                            <th>Nama Siswa</th>
                                            <th>Kelas</th>
                                            <th>Keluhan</th>
                                            <th>Obat</th>
                                            <th>Catatan</th>  
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>

                                    <tbody id="show_data">
                                          <?php $i = 1 ?>
                                          <?php foreach($data as $m): ?>
                                          <tr>
                                            <td><?php echo $m->nis ?></a>   </td> 
                                            <td><?php echo $m->namasiswa ?></td>                       
                                            <td><?php echo $m->kelas ?></td>
                                            <td><?php echo $m->keluhan ?></td>
                                            <td><?php echo $m->obat ?></td>
                                            <td><?php echo $m->catatan ?></td>
                                            <td align="center">
                                                <a href="<?php echo base_url();?>index.php/kesehatan/hapus/<?php echo $m->nourut ?>" class="btn btn-primary waves-effect"> <i class="material-icons">delete_forever</i></a>                                        
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
        
