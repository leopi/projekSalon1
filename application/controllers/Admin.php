<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('home_model');
    }
    
    public function admin_user() {
        $this->load->view('tampilan/header');
        $this->load->view('admin/admin_user');
        $this->load->view('tampilan/footer');
    }
    
    public function admin_vendor() {
        $this->load->view('tampilan/header');
        $this->load->view('admin/admin_vendor');
        $this->load->view('tampilan/footer');
    }
    
    public function admin_personal() {
        $this->load->view('tampilan/header');
        $this->load->view('admin/admin_personal');
        $this->load->view('tampilan/footer');
    }

}