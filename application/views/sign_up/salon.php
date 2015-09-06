<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<script type="text/javascript" >
    $(document).ready(function () {
        $('#submitbtn').click(function () {
            $("#viewimage").html('');
            $("#viewimage").html('<img src="img/loading.gif" />');
            $(".uploadform").ajaxForm({
                target: '#viewimage'
            }).submit();
        });
    });
</script> 

<form action="<?php echo base_url() ?>index.php/sign_up/simpan_salon" method="POST" class="form_sign_up_user">
    nama: <input type="text" class="nama" name="nama" required=""/> <br/>
    email: <input type="text" class="email" name="email" required=""/> <br/>
    password: <input type="text" class="password" name="password" required=""/> <br/>
    password1: <input type="text" class="password1" name="password1" required=""/> <br/>
    jenis salon : 
    <input type="radio" name="jenissalon_id" value="1" checked=""/>PERSONAL
    <input type="radio" name="jenissalon_id" value="2" checked=""/>VENDOR <br/>
    tempat lahir : <input type="text" class="tempatlahir" name="tempatlahir" required=""/> <br/>
    tanggal lahir : <input type="text" class="tanggallahir" name="tanggallahir" required=""/> <br/>
    noTelp : <input type="text" name="noTelp" class="noTelp" required=""/> <br/>
    alamat : <textarea rows="5" cols="30" class="alamat" name="alamat" required=""></textarea> <br/>
    pengalaman : <textarea rows="5" cols="30" class="pengalaman" name="pengalaman" required=""></textarea>  <br/>
</form>

<form class="uploadform" method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>index.php/sign_up/upload_foto_ktp">
    upload foto ktp : <input type="file" name="imagefile" />
    <input type="submit" value="Submit" name="submitbtn" id="submitbtn">
</form>

<div id='viewimage'></div>



