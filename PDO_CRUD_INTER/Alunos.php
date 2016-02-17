<?php

/**
 * Description of Cliente
 *
 * @author Jeremias
 */

class Alunos implements EntidadeInterface{
    //put your code here
    
    //variável privada
    private $table = "Alunos";
    private $id;
    private $nome;
    private $nota;
        
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
