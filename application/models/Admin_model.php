<?php

class Admin_model extends CI_Model{
    
       
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->baca();
    }
    
    private function baca($id){
        
        $kueri = $this->db->query("SELECT * FROM view_salon_list2 WHERE id=".$id."");
        foreach ($kueri->result() as $baris){
            $this->id[]=$baris->id;
            $this->username[]=$baris->username;
            $this->password[]=$baris->password;
        }
    }
    
    public function getId(){
        return $this->id;
    }    
        
    public function getUsername(){
        return $this->username;
    }
    
    public function getPassword(){
        return $this->password;
    }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

