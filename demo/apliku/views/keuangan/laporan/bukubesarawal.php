    <section class="content">  <!-- Jangan Dihilangkan.. Tutupnya ada di footer.php -->
        <div class="container-fluid">
            <div class="block-header">

            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                        <div class="block-header" align="center"><b>Laporan Buku Besar</b></div>
                            <form method="post" action="<?php echo base_url(); ?>index.php/keuanganlaporan/bukubesarcari">
                              <div class="panel-heading">Cari Periode :
                                <input size = "15" type="text" name="tanggalmulai" id="tanggalmulai" required /> Sampai
                                <input size = "15" type="text" name="tanggalselesai" id="tanggalselesai" required />
                                <select name="koderekening" id="koderekening">
                  								 <?php foreach($data2 as $m): ?>
                                     <option value="<?php echo $m->koderekening ?>"><?php echo $m->namarekening ?></option>
                                   <?php endforeach ?>
                                   <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
                  					    </select>
                                <input type="submit"  class="btn btn-green"  value="Cari Sekarang" />
                              </div>
                            </form><br>
