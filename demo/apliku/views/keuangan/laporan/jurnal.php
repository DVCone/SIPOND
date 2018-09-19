    <section class="content">  <!-- Jangan Dihilangkan.. Tutupnya ada di footer.php -->
        <div class="container-fluid">
            <div class="block-header">

            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                        <div class="block-header" align="center"><b>Laporan Jurnal</b></div>
                          <form method="post" action="<?php echo base_url(); ?>index.php/keuanganlaporan/jurnalcari">
                    				<div class="panel-heading">Cari Periode :
                    					<input size = "15" type="text" name="tanggalmulai" id="tanggalmulai" required /> Sampai
                    					<input size = "15" type="text" name="tanggalselesai" id="tanggalselesai" required />
                              <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
                    					<input type="submit"  class="btn btn-green"  value="Cari Sekarang" />
                    				</div>
                    			</form><br>

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable" id="mydata">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Tanggal</th>
                                            <th>No Nota</th>
                                            <th>Rekening</th>
                                            <th>Debet</th>
                                            <th>Kredit</th>
                                            <th>Keterangan</th>
                                            <th>Pengguna</th>
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
                                            <td><?php echo $m->pengguna ?></td>
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
