    <section class="content">  <!-- Jangan Dihilangkan.. Tutupnya ada di footer.php -->
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 align="left">
                               Edit Profile
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">person</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Nama">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">wc</i>
                                    </span>
                                    <div class="form-group">
                                        <select name="jeniskelamin" class="form-control show-tick">
                                            <option value="Pria">Pria</option>
                                            <option value="Wanita">Wanita</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons pr">home</i>
                                    </span>
                                    <div class="form-line custom-textarea">
                                        <textarea rows="4" class="form-control" placeholder="Alamat.."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div id="targetOuter">
                                    <div id="targetLayer"></div>
                                    <img src="https://phppot.com/demo/jquery-ajax-image-upload/photo.png" class="icon-choose-image">
                                    <div class="icon-choose-image">
                                        <input name="userImage" id="userImage" type="file" class="inputFile" onchange="showPreview(this);">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12" align="center">
                                <div class="form-group">
                                    <input type="hidden" name="csrf_test_name" value="f7a7703db25c9438d5e4ff8b93961bae" style="display: none">
                                    <button type="reset" class="btn btn-danger waves-effect">Batalkan Isian</button>
                                    <button class="btn btn-primary waves-effect" id="btn-modal" type="submit">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-1 col-md-12 col-sm-12 col-xs-12">
                    <div class="profile-arrow">
                        <!-- For IE9 or below. -->
                        <i class="material-icons d-none-aright">arrow_right_alt</i>
                        <i class="material-icons d-none">arrow_downward</i>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 align="left">
                                Informasi Profile
                            </h2>
                        </div>
                        <div class="body" id="profile">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="profile-header" align="center">
                                        <img src="<?php echo base_url('template/images/no-avatar.png'); ?>" alt="profile">
                                    </div>
                                    <div class="profile-body">
                                        <table class="table table-responsive">
                                        <tr>
                                            <td>Nama</td>
                                            <td>:</td>
                                            <td>Muhamad Zulfiqor</td>
                                        </tr>
                                        <tr>
                                            <td class="w-jk">Jenis Kelamin</td>
                                            <td>:</td>
                                            <td>Laki-Laki</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                            <td>Jl.Padjajaran RT.04/RW.06 Desa/Kec GunungGuruh Kab.Sukabumi</td>
                                        </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
            function showPreview(objFileInput) {
                    if (objFileInput.files[0]) {
                        var fileReader = new FileReader();
                        fileReader.onload = function (e) {
                            $('#blah').attr('src', e.target.result);
                            $("#targetLayer").html('<img src="' + e.target.result + '" width="200px" height="200px" class="upload-preview" />');
                            $("#targetLayer").css('opacity', '0.7');
                            $(".icon-choose-image").css('opacity', '0.5');
                        }
                        fileReader.readAsDataURL(objFileInput.files[0]);
                    }
                }
                $(document).ready(function (e) {
                        $("#uploadForm").on('submit', (function (e) {
                            e.preventDefault();
                            $.ajax({
                                url: "upload.php",
                                type: "POST",
                                data: new FormData(this),
                                beforeSend: function () { $("#body-overlay").show(); },
                                contentType: false,
                                processData: false,
                                success: function (data) {
                                    $("#targetLayer").html(data);
                                    $("#targetLayer").css('opacity', '1');
                                    setInterval(function () { $("#body-overlay").hide(); }, 500);
                                },
                                error: function () {
                                }
                            });
                        }));
                    });
            </script>