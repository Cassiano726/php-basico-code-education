<?php  
require_once './controller_login.php';

if(($n1 != " " || $n1 != null) && ($n2 != " " || $n2 != null) ){
    
    session_start();

    $aux_user = $n1;
    $aux_senha = $n2;
    
    $_SESSION['user_sessao'] = $aux_user;
    $_SESSION['user_senha'] = $aux_senha;
    
    if($_SESSION['user_sessao'] == $aux_user && $_SESSION['user_senha'] == $aux_senha ){
        
        $_SESSION['user_sessao'] = true;
        $_SESSION['user_senha']  =  true;
       
        header("Location:index.php?page=list_alunos");
    
        
    }elseif($_SESSION['user_sessao'] != $aux_user && $_SESSION['user_senha'] != $aux_senha ){
        
        $_SESSION['user_sessao'] = FALSE;
        $_SESSION['user_senha']  =  FALSE;
        header("Location:index.php?login");
         
    }
        
  
 
   
}
 
