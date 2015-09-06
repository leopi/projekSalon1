<?php

class Sign_up_model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function validasi_email_user($e_mail){
        
        $e_mail = addslashes($e_mail);
        $kueri = $this->db->query("select email from user_pelanggan where email = '$e_mail'");
        
        $unik = TRUE;
        foreach ($kueri->result_array() as $baris){
            $unik=FALSE;
        }
        
        return $unik;
        
    }
    
}
