<?php  

require_once './controller_login_user.php';

if(($n1 != " " || $n1 != null) && ($n2 != " " || $n2 != null) ){
    
    session_start();

    $aux_user = $n1;
    $aux_senha = $n2;
    
    $_SESSION['user_name'] = $aux_user;
    $_SESSION['user_pswd'] = $aux_senha;
    
    if($_SESSION['user_name'] == $n1 && $_SESSION['user_pswd'] == $n2 ){
        
        $_SESSION['user_name'] = true;
        $_SESSION['user_pswd']  =  true;
       
        header("Location:index.php?page=view_lista_user");
    
        
    }elseif($_SESSION['user_name'] != $n1 && $_SESSION['user_pswd'] != $n2 ){
        
        $_SESSION['user_name'] = FALSE;
        $_SESSION['user_pswd']  =  FALSE;
        header("Location:index.php?inserir_user");
         
    }
        
  
 
   
}else{
    header("Location:index.php?login_user");
}
