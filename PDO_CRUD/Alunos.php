<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cliente
 *
 * @author Jeremias
 */
class Alunos extends banco_crud{
    //put your code here
    
    //variável privada
    private $id;
    private $nome;
    private $nota;
        
    //métodos get and set
    
    public function getId() {
        return $this->id;
    }
    
    public function setId($id) {
        $this->id=$id;
        return $this;
    }
    
    public function getNome() {
        return $this->nome;
    }
    
    public function setNome($nome) {
        $this->nome=$nome;
        return $this;
    }
    
    public function getNota() {
        return $this->nota;
    }
    
    public function setNota($nota) {
        $this->nota=$nota;
        return $this;
    }
    
    
}
