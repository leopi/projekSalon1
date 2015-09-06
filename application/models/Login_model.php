<?php

class Login_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function validasi_email_user($email, $password){
        $email = addslashes($email);
        $password = addslashes($password);
        $kueri = $this->db->query("select * from user_pelanggan where email='$email' and password='$password'");
        
        $terverifikasi = false;
        
        foreach ($kueri->result_array() as $baris){
            $terverifikasi = true;
            $nama = $baris['nama'];
        }
        
        if($terverifikasi){
            $_SESSION['nama'] = $nama;
            $_SESSION['leveluser'] = "USER";
        }
        
        return $terverifikasi;
        
    }
    
    public function validasi_email_salon($email, $password){
        $email = addslashes($email);
        $password = addslashes($password);
        $kueri = $this->db->query("select * from user_salon where email='$email' and password='$password'");
        
        $terverifikasi = false;
        
        foreach ($kueri->result_array() as $baris){
            $terverifikasi = true;
            $nama = $baris['nama'];
        }
        
        if($terverifikasi){
            $_SESSION['nama'] = $nama;
            $_SESSION['leveluser'] = "SALON";
        }
        
        return $terverifikasi;
        
    }
    
}

