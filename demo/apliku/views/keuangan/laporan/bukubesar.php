
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable-bukubesar" id="mydata">
                                  <thead>
                                      <tr>
                                          <th>No</th>
                                          <th>Tanggal</th>
                                          <th>No Nota</th>
                                          <th>Rekening</th>
                                          <th>Debet</th>
                                          <th>Kredit</th>
                                          <th>Keterangan</th>
                                      </tr>
                                  </thead>

                                  <tbody id="show_data">
                                        <?php $i = 1 ?>
                                        <?php foreach($data as $m): ?>
                                        <tr>
                                          <td><?php echo $m->no ?></td>
                                          <td><?php echo $m->tanggal ?></a>   </td>
                                          <td><?php echo $m->nonota ?></td>
                                          <td><?php echo $m->koderekening.' - '.$m->namarekening ?></td>
                                          <td align="right"><?php echo number_format($m->debet,0,",",".") ?></td>
                                          <td align="right"><?php echo number_format($m->kredit,0,",",".") ?></td>
                                          <td><?php echo $m->keterangan ?></td>
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
        <script type="text/javascript" >
      		var $tanggalmulai = $("#tanggalmulai");
      		$tanggalmulai.datepicker({dateFormat: 'yy-mm-dd'});
      		var $tanggalselesai = $("#tanggalselesai");
      		$tanggalselesai.datepicker({dateFormat: 'yy-mm-dd'});
      		$(function(){
      		$("#tanggalmulai").datepicker({
      			dateFormat:"yy-mm-dd"
      			,changeMonth:true
      			,changeYear:true
      			,yearRange:"1930"
      		});

      	})
      	</script>
