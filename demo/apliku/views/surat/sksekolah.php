<section class="content">
    <!-- Jangan Dihilangkan.. Tutupnya ada di footer.php -->
    <!-- Widgets -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <b>Pencarian Identitas Siswa</b>
                            <!-- <div class="form-group"> -->
                                <select name="cari_siswa" id="cari_siswa" class="form-control show-tick" data-live-search="true" onchange="changeFunc();">
                                    <?php $i = 1 ?>
                                        <?php foreach($data as $m): ?>
                                            <option value="<?php echo $m->nis.'#'.$m->namasiswa.'#'.$m->kelas.'#'.$m->namaayah ?>"><?php echo $m->nis.' - '.$m->namasiswa.' Kelas '.$m->kelas.' Bin/ti '.$m->namaayah ?></option>
                                        <?php endforeach ?>
                                </select>
                            <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
        
        
            <div class="card">
                <div class="header">
                    <h2 align="left">
                        Surat Keterangan Sekolah
                         <button type="button" class="btn btn-primary waves-effect pull-right" id="printlet">Print</button>
                    </h2>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-lg-12" id="letter">
                            <div class="kop-letter" align="center">1
                                <img src="<?php echo base_url(); ?>gambar/kopnota.png" alt="kop-header">    
                            </div>
                            <div class="text-center letter-header">
                                <h2 class="text-uppercase">Surat Keterangan Siswa</h2>
                                <table align="center">
                                    <tr>
                                        <td><h5>Nomor :</h5></td>
                                        <td><input type="text" placeholder=" 1700083 " style="width:5em;" class="border-hide"> / &nbsp;</td>
                                        <td><input type="text" placeholder="001/Sekt/MTS/08/05" style="width:180px;" class="border-hide"></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="letter-body">
                                <h6 class="text-center title"> Kepala Sekolah <bdo class="namasekolah"></bdo>, dengan ini menerangkan bahwa :</h6>
                                <table class="tg" align="center">
                                    <tr>
                                        <td class="tg-l711">Nama</td>
                                        <td class="tg-l711">:</td>
                                        <td class="tg-us36"><p id="namasiswa"></p> </td>
                                    </tr>
                                    <tr>
                                        <td class="tg-l711">NIS</td>
                                        <td class="tg-l711">:</td>
                                        <td class="tg-us36"><p id="nis"></p> </td>
                                    </tr>
                                    <tr>
                                        <td class="tg-us36">Tempat & Tanggal Lahir</td>
                                        <td class="tg-us36">:</td>
                                        <td class="tg-us36"><bdo id="kotalahir"></bdo>, <bdo class="tgllahir" id="tanggallahir"></bdo> </td>
                                    </tr>
                                    <tr>
                                        <td class="tg-l711">Kelas</td>
                                        <td class="tg-l711">:</td>
                                        <td class="tg-us36"><p class="kelas"></p> </td>
                                    </tr>
                                    <tr>
                                        <td class="tg-us36">Alamat</td>
                                        <td class="tg-us36">:</td>
                                        <td class="tg-us36"><p id="alamat" ></p> </td>
                                    </tr>
                                </table>
                                <div class="paragraf">
                                    <div>Adalah benar siswa <bdo class="namasekolah"></bdo> dan tercatat aktif sebagai siswa Kelas <bdo class="kelas"></bdo> Tahun Ajaran <span><input type="text" placeholder="2018-2020" class="border-hide"></span></div>
                                    
                                    <div>Demikian Surat Keterangan ini diberikan dengan 
                                    sebenar-benarnya kepada yang bersangkutan untuk dipergunakan sebagaimana mestinya.</div>
                                </div>
                                <div class="letter-footer">
                                        <p class="m-0"><bdo class="kabupaten"></bdo>, <span><input type="text" placeholder="22 Mei 2018" class="border-hide"></span></p>
                                        <h6 class="pb-5">Kepala Sekolah</h6>
                                        <p class="namakepsek text-uppercase"></p>
                                        <p>NIP.<bdo class="nomorpegawai m-0"></bdo></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="<?php echo base_url('template/js/jQuery.print.min.js') ?>"></script>
<script type="text/javascript">
$('#printlet').on('click', function () {
    $('#letter').print();
});

    function changeFunc() {

        var cariSiswa = document.getElementById('cari_siswa');
        var selectedValue = cariSiswa.options[cariSiswa.selectedIndex].value;

        var res = selectedValue.split("#"); 
        
    $.ajax({
    method: "GET",
        dataType:"json",
        url: "<?php echo base_url(); ?>index.php/surat/carisiswa/" + res[0],
        success:function(res) {
            $('#namasiswa').html(res.data.namasiswa)
            $('#nis').html(res.data.nis)
            $('#kotalahir').html(res.data.kotalahir)
            $('#tanggallahir').html(res.data.tanggallahir)
            $('.kelas').html(res.data.kelas)
            $('#alamat').html(res.data.alamat+', '+res.data.kelurahan+', '+res.data.kecamatan+', '+res.data.alamatkota+', '+res.data.provinsi)
            
            $('.namasekolah').html(res.data1.namasekolah)
            $('.namakepsek').html(res.data1.kepalasekolah)
            $('.kabupaten').html(res.data1.kabupaten)
        }
    })

    

    return false;
        
    }


</script>