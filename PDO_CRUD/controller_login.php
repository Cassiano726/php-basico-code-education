<?php

require_once './login.php';

if(isset($_POST['logar'])){
    //$v_logar = $_POST['logar'];
    
    $n1 = $_POST["usuario"];
    $n2 = $_POST["senha"];
    
    if(($n1 != null && $n1 != " ") && ($n2 != null && $n2 != " ")){
    require_once './Banco_Crud.php';
    
    $banco_logar = new banco_crud(require_once './conexao.php');
    
    $banco_logar->logar($n1, $n2);
    } else {
        echo "<br/>Preencha os campos acima!!";
    }
    
}