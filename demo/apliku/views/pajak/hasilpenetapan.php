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
                                            <th>Nama Pemilik</th>
                                            <th>Alamat</th>
                                            <th>Luas Bumi</th>
                                            <th>Kelas Bumi</th>
                                            <th>Luas Bangunan</th>
                                            <th>Kelas Bangunan</th>  
                                              <th>NJOP Bumi</th>  
                                              <th>NJOP Bangunan</th>  
                                              <th>Total NJOP</th>  
                                              <th>Tarif Pajak</th>  
                                        </tr>
                                    </thead>

					                <tbody id="show_data">
					                      <?php $i = 1 ?>
					                      <?php foreach($data as $m): ?>
					                      <tr>                  
					                        <td><?php echo $m->namapemilik ?></td>
                                            <td><?php echo $m->alamat ?></td>

					                        <td align="right"><?php echo number_format($m->luasbumi) ?></td>
					                        <td align="center"><?php echo $m->kelasbumi ?></td>

                                            <td align="right"><?php echo number_format($m->luasbangunan) ?></td>
                                            <td align="center"><?php echo $m->kelasbangunan ?></td>


                                            <td align="right"><?php echo number_format($m->totnjopbumi) ?></td>
                                            <td align="right"><?php echo number_format($m->totnjopbangunan) ?></td>
                                            <td align="right"><?php echo number_format($m->totnjop) ?></td>
                                            <td align="right"><?php echo number_format($m->tarifpajak) ?></td>
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

