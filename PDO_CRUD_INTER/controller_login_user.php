<?php

//require_once './login_user.php';

require_once './EntidadeInterface.php';
        
require_once './Usuarios_Interface.php';    
    
require_once './Banco_Crud.php';

if(isset($_POST['logar'])){
    
    //$v_logar = $_POST['logar'];
    
    $n1 = $_POST["usuario"];
    $n2 = $_POST["senha"];
    

    if(($n1 != null && $n1 != " ") && ($n2 != null && $n2 != " ")){
        
        $usario_1 = new Usuarios_Interface();
        
        $usuario_b = new banco_crud(require_once './conexao.php', $usario_1);
        
        $usuario_b->logar_entity($n1, $n2);
        

    
    } else {
        echo "<br/>Preencha os campos acima!!";
    }
}    
