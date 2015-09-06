<?php

class User_Model extends CI_Model{
    
    private $id;
    private $username;
    private $password;
    
    public function __construct(){
        parent::__construct();
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function setId($val){
        $this->id = $val;
    }
    
    public function getUsername(){
        return $this->username;
    }
    
    public function setUsername($val){
        $this->username = $val;
    }
    
    public function getPassword(){
        return $this->password;
    }
    
    public function setPassword($val){
        $this->password = $val;
    }
    
    
    
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

