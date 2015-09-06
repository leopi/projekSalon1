<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Salon_detail extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('home_model');
    }
    public function index() {
        $this->load->view('tampilan/header');
        $this->load->view('salon_detail');
        $this->load->view('tampilan/footer');
    }

}
