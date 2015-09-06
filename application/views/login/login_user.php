<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>



<form action ="<?php echo base_url() ?>index.php/login/validasi_user" method="POST">
    email : <input type="email" name="email"/> <br/>
    password : <input type="password" name="pass"/>
    <input type="submit">

<?php
if (isset($_GET['valid'])) {
    if($_GET['valid']=='false') {
        echo "<p><i>*cek kembali email dan password</i></p>";
    }
}
?>

</form>