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
                                            <th>No Obyek Pajak</th>
                                            <th>Nama Pemilik</th>
                                            <th>Tanggal Bayar</th>
                                            <th>Tarif Pajak</th>
                                            <th>Denda</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>

					                <tbody id="show_data">
					                      <?php $i = 1 ?>
					                      <?php foreach($data as $m): ?>
					                      <tr>
					                        <td><?php echo $m->nomorobjekpajak ?></td>                       
					                        <td><?php echo $m->namapemilik ?></td>
					                        <td align="center"><?php echo $m->tanggal ?></td>
					                        <td align="right"><?php echo number_format($m->tarifpajak) ?></td>
                                            <td align="right"><?php echo number_format($m->denda) ?></td>
					                        <td align="right"><?php echo number_format($m->total) ?></td>
					                       
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