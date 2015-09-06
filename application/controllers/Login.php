<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('home_model');
        $this->load->model('login_model');
    }

    public function login_user() {
        $this->load->view('tampilan/header');
        $this->load->view('login/login_user');
        $this->load->view('tampilan/footer');
    }

    //khusus untuk validasi email
    //--------------------------------------------------------------------------

    public function validasi() {
        $email = addslashes($_POST['email']);
        $pass = addslashes($_POST['pass']);
        $status = $_POST['status'];

        if ($status == "user") {
            if ($this->login_model->validasi_email_user($email, $pass)) {
                header("location:" . base_url());
            } else {
                echo "<i>email dan password tidak cocok</i>";
            }
        }
        
        else if ($status == "salon"){
            if ($this->login_model->validasi_email_salon($email, $pass)) {
                header("location:" . base_url());
            } else {
                echo "<i>email dan password tidak cocok</i>";
            }
        }
        
    }

    public function logout() {
        session_destroy();
        header("location:" . base_url());
    }

}
