<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_up extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('home_model');
        $this->load->model('sign_up_model');
    }

    public function user() {
        $this->load->view('tampilan/header');
        $this->load->view('sign_up/user');
        $this->load->view('tampilan/footer');
    }

    public function simpan_user() {
        $nama = addslashes($_POST['nama']);
        $email = addslashes($_POST['email']);
        $password = addslashes($_POST['password']);
        $jeniskelamin_id = addslashes($_POST['jenisKelamin']);
        $noTelp = addslashes($_POST['noTelp']);
        $alamat = addslashes($_POST['alamat']);
        $tanggalLahir = addslashes($_POST['tanggalLahir']);
        $lokasi = addslashes($_POST['lokasi']);

        $kueri = $this->db->query("INSERT INTO `user_pelanggan`"
                . "(`nama`, `password`, `email`, `jeniskelamin_id`, `noTelp`, `alamat`, `tanggal_lahir`, `lokasi`) "
                . ""
                . "VALUES ('$nama','$password','$email',$jeniskelamin_id,'$noTelp','$alamat','$tanggalLahir','$lokasi')");

        if ($kueri == 1) { // 1 adalah sukses
            $_SESSION['nama'] = $nama;
            $_SESSION['leveluser'] = "USER";
            header("location:" . base_url());
        }
    }

    public function salon() {
        $this->load->view('tampilan/header');
        $this->load->view('sign_up/salon');
        $this->load->view('tampilan/footer');
    }

    public function upload_foto_ktp() {
        $file_formats = array("jpg", "png", "gif", "bmp");
        $filepath = __FILE__."/fotoKTP/";

        if ($_POST['submitbtn'] == "Submit") {
            $name = $_FILES['imagefile']['name']; // filename to get file's extension
            $size = $_FILES['imagefile']['size'];

            if (strlen($name)) {
                $extension = substr($name, strrpos($name, '.') + 1);
                if (in_array($extension, $file_formats)) { // check it if it's a valid format or not
                    if ($size < (2048 * 1024)) { // check it if it's bigger than 2 mb or no
                        $imagename = md5(uniqid() . time()) . "." . $extension;
                        $tmp = $_FILES['imagefile']['tmp_name'];
                        if (move_uploaded_file($tmp, $filepath . $imagename)) {
                            echo '<img class="preview" alt="" src="' . $filepath . '/' . $imagename . '" />';
                        } else {
                            echo "Could not move the file.";
                        }
                    } else {
                        echo "Your image size is bigger than 2MB.";
                    }
                } else {
                    echo "Invalid file format.";
                }
            } else {
                echo "Please select image..!";
            }
            exit();
        }
    }

    public function simpan_salon() {
        
    }

    // validasi email apakah sudah di daftarkan sebelumnya atau belum

    public function validasi_email_sign_up_user() {
        $e_mail = $_GET['email'];
        if ($this->sign_up_model->validasi_email_user($e_mail)) { //true jika unik
            echo "";
        } else
            echo "email sudah digunakan oleh user lain";
    }

}
