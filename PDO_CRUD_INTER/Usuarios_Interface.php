<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuarios_Interface
 *
 * @author Jeremias
 */
class Usuarios_Interface implements EntidadeInterface {
    
       //put your code here
    
    //variável privada
    private $table = "usuarios";
    private $username;
    private $pswd;
    
        
    //métodos get and set
    
    public function getTable() {
        return $this->table;
    }
    
    public function setTable($table) {
        $this->table = $table;
        return $this;
    }
    
    
     public function getId() {
        return $this->id;
    }
    
    public function setId($id) {
        $this->id=$id;
        return $this;
    }
       
    public function getUsername() {
        return $this->username;
    }
    
    public function setUsername($username) {
        $this->username=$username;
        return $this;
    }
    
    public function getPswd() {
        return $this->pswd;
    }
    
    public function setPswd($pswd) {
        $this->pswd=$pswd;
        return $this;
    }
 
}
?>
