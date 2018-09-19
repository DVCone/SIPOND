    <section class="content">  <!-- Jangan Dihilangkan.. Tutupnya ada di footer.php -->
        <div class="container-fluid">
            <div class="block-header">

            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                        <div class="block-header" align="center"><b>Laporan Nilai Per Siswa</b></div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable not-padding js-exportable-nilai" id="mydata">
                                    <thead>
                                        <tr>
                                            <th>NIS</th>
                                            <th>Nama Siswa</th>
                                            <th>Kelas</th>
                                            <th>Total</th>
                                            <th>Mapel</th>
                                            <th>Rata-Rata</th>
                                            <th>Detail</th>
                                            <th>Cetak</th>
                                        </tr>
                                    </thead>

                                    <tbody id="show_data">
                                          <?php $i = 1 ?>
                                          <?php foreach($data as $m): ?>
                                          <tr>
                                            <td><?php echo $m->nis ?></a>   </td>
                                            <td width="300"><?php echo $m->namasiswa ?></td>
                                            <td width="50"><?php echo $m->kelas ?></td>
                                            <td width="70" align="right"><?php echo number_format($m->totnilai,0,",",".") ?></td>
                                            <td width="70" align="center"><?php echo number_format($m->totmapel,0,",",".") ?></td>
                                            <td width="70" align="right"><?php echo number_format($m->ratanilai,0,",",".") ?></td>
                                            <td align="center"><a href="<?php echo base_url();?>index.php/nilai/downloaddetailnilai/<?php echo $m->nis; ?>" class="btn btn-primary waves-effect" target="_blank"> <i class="material-icons">view_list</i></a></td>
                                            <td align="center"><a href="" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#largeModal" onclick="return simpanuangkeluar();"> <i class="material-icons">print</i></a></td>
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


                <!-- Large Size -->
                <div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="largeModalLabel" align="center">Laporan Nilai</h4>
                            </div>
                            <div class="modal-body">
                                Madrasah Aliyah Islamic Center Binbaz
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
                                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- selesai -->
<script type="text/javascript">
                function simpanuangkeluar(){
swal("Selamat!", "Data Anda Sudah Tersimpan!", "success");
                //   var nis= $('input[name=nis]').val();
                //   var uangkeluar=$('input[name=uangkeluar]').val();
                //   var catatan=$('input[name=catatan]').val();
                //   var tanggal=$('input[name=tanggal]').val();
                //
                //   var <?=$this->security->get_csrf_token_name();?> =$('input[name=<?=$this->security->get_csrf_token_name();?>]').val();
                //
                // $.ajax({
                //   method: "POST",
                //   dataType:"html",
                //   data: 'nis='+nis+'&uangkeluar='+uangkeluar+'&catatan='+catatan+'&tanggal='+tanggal
                //   +'&<?=$this->security->get_csrf_token_name();?>='+<?=$this->security->get_csrf_token_name();?>,
                //   url:"<?php echo base_url();?>index.php/keuanganuangsakukeluar/simpan",
                //   success:function(res){
                //     document.getElementById("formkategori").reset();
                //     swal("Selamat!", "Data Anda Sudah Tersimpan!", "success");
                //     document.getElementById("transaksiakhir").innerHTML='-';
                //     document.getElementById("sisauang").innerHTML='-';
                //   }
                // })
                // return false;
                }
</script>
