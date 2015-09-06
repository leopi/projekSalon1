<?php ?>

<script type="text/javascript">
    $(document).ready(function() {

        $('.form_sign_up_user').on('submit', function() {

            if ($('.statusEmail').html() !== "") {
                alert($('.statusEmail').html());
                return false;
            }

            if ($('.statusPassword').html() !== "") {
                alert('pastikan password diketik dengan benar');
                return false;
            }
        });

        function IsEmail(email) {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(email);
        }

        $('.e_mail').keyup(function() {
            var email = $('.e_mail').val();
            if (!IsEmail(email)) {
                $('.statusEmail').html("email tidak valid");
            }
            else {
                $('.statusEmail').html("");
                $('.statusEmail').load("<?php echo base_url() ?>index.php/sign_up/validasi_email_sign_up_user?email=" + email);
            }
        });

        $('.password').keyup(function() {
            if ($('.password').val() !== $('.password1').val()) {
                $('.statusPassword').html("password tidak sama, silahkan cek kembali");
            }
            else {
                $('.statusPassword').html("");
            }
        });
        $('.password1').keyup(function() {
            if ($('.password').val() !== $('.password1').val()) {
                $('.statusPassword').html("password tidak sama, silahkan cek kembali");
            }
            else {
                $('.statusPassword').html("");
            }
        });
    });

</script>

<div class="container">
    <div class="bs_breadcrumb" style="font-weight: 500">
        <div class="breadcrumb-container wrapper box no-padding">
            <div itemscope="" class="box no-padding inner-bc left" >
                <span itemprop="itemListElement">
                    <a itemprop="item" href="index.html" target="_self">
                        <span itemprop="name">HOME</span>
                    </a>
                    <meta itemprop="position" content="1">
                </span>
                <span class="ico-bs-arrow-right"></span>
                <span itemprop="itemListElement" itemscope="">
                    <a itemprop="item" href="#" target="_self" style="cursor:default">
                        <span itemprop="name" class="active">Vendor List</span>
                    </a>

                    <meta itemprop="position" content="2">
                </span>
            </div>      <!-- vendor categories -->

        </div>
    </div>
    <div class="wrapper box mb30">
        <div class="form-group ">
            <form action="<?php echo base_url() ?>index.php/sign_up/simpan_user" method="POST" class="form_sign_up_user">
                <table class="table register box box-tab z-depth-1-half" >
                    <tr><h4>Isikan Data Diri Anda :</h4></tr>
                <tr><td>.</td></tr>
                    <tr style="padding-top: 20px;" class="first-tr">
                        <td>Nama* </td><td > :</td> <td ><input type="text" class="nama form-control" name="nama" required=""/></td>
                    </tr>
                    <tr>
                        <td>Email* </td><td> :</td><td> <input type="text" name="email" class="e_mail form-control" required=""/> <i class="statusEmail" style="color: red"></i> </td>
                    </tr>
                    <tr>
                        <td>Password </td><td> :</td><td> <input type="password" name="password" class="password form-control" required=""/> </td>
                    </tr>
                    <tr>
                        <td>Ulangi Password </td><td> :</td><td> <input type="password" name="password1" class="password1 form-control" required=""/> <i class="statusPassword" style="color: red"></i></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin* </td><td> : </td>
                        <td><input type="radio" name="jenisKelamin" value="1" checked=""/> Laki-laki <input style="margin-left: 130px;" type="radio" name="jenisKelamin" value="2"/> Perempuan </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir </td><td> :</td><td> <input type="text" class="form-control" name="tanggalLahir" required=""/></td>
                    </tr>
                    <tr>
                        <td>No Telp </td><td> :</td><td> <input type="text" class="form-control" name="noTelp"/> </td><td>
                    </tr>
                    <tr>
                        <td>Alamat* </td><td> :</td><td> <textarea name="alamat" class="form-control" rows="5" cols="20" required=""></textarea></td>
                    </tr>
                    <tr>
                        <td>Lokasi* </td><td> :</td><td> <textarea name="lokasi" class="form-control" rows="5" cols="20" required=""></textarea> </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input style="width: 150px; background-color: #FF3D00; color: #fff" class="tombolSubmit form-control" type="submit"/></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>