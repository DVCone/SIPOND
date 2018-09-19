    <section class="content">  <!-- Jangan Dihilangkan.. Tutupnya ada di footer.php -->
        <div class="container-fluid">
            <div class="block-header">
                
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable" id="mydata">
                                    <thead>
                                        <tr>
                                            <th>Tetapkan Pajak</th>
                                            <th>No Objek Pajak</th>
                                            <th>Nama Pemilik</th>
                                            <th>Alamat</th>
                                            <th>Luas Bumi</th>
                                            <th>Kelas Bumi</th>
                                            <th>Luas Bangunan</th>
                                            <th>Kelas Bangunan</th>                                            
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>

					                <tbody id="show_data">
					                      <?php $i = 1 ?>
					                      <?php foreach($data as $m): ?>
					                      <tr>
                                            <td><a href="<?php echo base_url();?>index.php/welcome/tetapkanpajak/<?php echo $m->nomorobjekpajak ?>" class="btn btn-primary waves-effect"> <i class="material-icons">build</i></a>   </td> 
					                        <td><?php echo $m->nomorobjekpajak ?></td>                       
					                        <td><?php echo $m->namapemilik ?></td>
                                            <td><?php echo $m->alamat ?></td>

					                        <td align="right"><?php echo number_format($m->luasbumi) ?></td>
					                        <td align="center"><?php echo $m->kelasbumi ?></td>

                                            <td align="right"><?php echo number_format($m->luasbangunan) ?></td>
                                            <td align="center"><?php echo $m->kelasbangunan ?></td>

					                        <td>
                                                <a href="<?php echo base_url();?>index.php/welcome/editobjekpajak/<?php echo $m->nomorobjekpajak ?>" class="btn btn-primary waves-effect"> <i class="material-icons">build</i></a>   
                                                </td><td>
                                                <a href="<?php echo base_url();?>index.php/welcome/hapusobjekpajak/<?php echo $m->nomorobjekpajak ?>" class="btn btn-primary waves-effect"> <i class="material-icons">delete_forever</i></a>										
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
        
