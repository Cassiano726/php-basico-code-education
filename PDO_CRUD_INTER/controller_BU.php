<?php session_start();?>
<?php if (isset($_SESSION['user_name']) &&  isset($_SESSION['user_pswd'])):?>


<?php

require_once './EntidadeInterface.php';
require_once './Usuarios_Interface.php';
require_once './Banco_Crud.php';



if($_POST['buscar_user'] != null || $_POST['buscar_user'] != " "){
    
$nome_u = $_POST['buscar_usuario'];   
   
$user_oo = new Usuarios_Interface();

$banco = new banco_crud(require_once './conexao.php' , $user_oo);


   
$banco->listarPU_entity($nome_u);
       
echo '<body>'
      . '<table>'
      . '<tr>'
      . '<td>Voltar à Busca :</td>'  
      . '<td alingn=middle width=550><a href=index.php?page=buscar_user><input  type="submit" name="busca_1" value="Usuario" ></a>'
      . '</td>'
      . '</tr>'
       . '</table>'  
      . '</body>';

}
?>
<?php else:?>
<p>Por favor realizar seu login no sistema!</p>
<br/><?php
    
        echo '<body>'
      . '<table>'
      . '<tr>'
      . '<td>Ir'
      . '</td>'          
      . '<td>Login'
      . '</td>'  
      . '<td alingn=middle width=550><a href=index.php?page=login_user><input  type="submit" name="nome" value="Click" ></a>'
      . '</td>'
      . '</tr>'
       . '</table>'  
      . '</body>';

?>
<?php endif;?>
