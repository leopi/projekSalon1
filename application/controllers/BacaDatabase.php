<?php
defined('BASEPATH') or exit('No direct script access allowed');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Bacadatabase extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model("Bacadatabase_model");
    }
    
    public function index(){
        $id = $this->Bacadatabase_model->getId();
        $username = $this->Bacadatabase_model->getUsername();
        $password = $this->Bacadatabase_model->getPassword();
        
        $data = array(
            "id"=>$id,
            "username"=>$username,
            "password"=>$password
        );
                
        $this->load->view("bacaDatabase", $data);
    }
    
}