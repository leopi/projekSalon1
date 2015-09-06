<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('home_model');
        $this->load->library('session');
    }

    public function index() {

        

        $this->load->view("tampilan/header");
        $this->load->view("home");
        $this->load->view("tampilan/footer");
    }

    public function salonlist() {
        $prov = 0; //semua
        $kab = 0; //semua
        $jenis_layanan = 0; //semua 
        $jenis_kelamin = 2; //perempuan
        $jenis_layanan1 = 0; //semua

        if (isset($_POST['provinsi'])) {
            $prov = addslashes($_POST['provinsi']);
            $_SESSION['prov'] = $prov;
        }
        if (isset($_POST['kab'])) {
            $kab = addslashes($_POST['kab']);
            $_SESSION['kab'] = $kab;
        }
        if (isset($_POST['jenis_layanan'])) {
            $jenis_layanan = addslashes($_POST['jenis_layanan']);
            $_SESSION['jenis_layanan'] = $jenis_layanan;
        }
        if (isset($_POST['jenis_kelamin'])) {
            $jenis_kelamin = addslashes($_POST['jenis_kelamin']);
            $_SESSION['jenis_kelamin'] = $jenis_kelamin;
        }
        if (isset($_POST['jenis_layanan1'])) {
            $jenis_layanan1 = addslashes($_POST['jenis_layanan1']);
            $_SESSION['jenis_layanan1'] = $jenis_layanan1;
        }

        $hasil = $this->home_model->salon_list($prov, $kab, $jenis_layanan, $jenis_kelamin, $jenis_layanan1);
        $data = array(
            "hasil" => $hasil,
        );
        

        $this->load->view("tampilan/header");
        $this->load->view("salonlist", $data);
        $this->load->view("tampilan/footer");
    }

    public function salon_detail($id) {

        $jumlah = $this->home_model->tambahJumlahKunjungan($id);
        $jumlah_like = $this->home_model->lihatJumlahLike($id);
        $hasil_detail = $this->home_model->lihat_detail_salon($id);
        
        $hasil_layanan = $this->home_model->lihat_detail_salon_layanan($id);
        
        $data = array(
            'jumlah_kunjungan' => $jumlah,
            'jumlah_like' => $jumlah_like,
            'detail' => $hasil_detail,
            'layanan' => $hasil_layanan
        );
        
        $this->load->view("tampilan/header");
        $this->load->view("salon_detail", $data);
        $this->load->view("tampilan/footer");
        
    }

    //fungsi dibawah khusus untuk ajax
    //--------------------------------------------------------------------------

    public function ajaxKab() {
        $idProv = $_GET['idProv'];

        if ($idProv != 0) {
            $kab = $this->home_model->namaKab($idProv);
            echo "<option value=0 selected>--SEMUA KOTA--</option>";
            foreach ($kab as $x => $y) {
                if ($_SESSION['kab'] == $x) echo "<option value=$x selected>$y</option>";
                else echo "<option value=$x>$y</option>";
            }
        }
    }

}
