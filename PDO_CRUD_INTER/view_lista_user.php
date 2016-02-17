<?php session_start();?>
<?php if (isset($_SESSION['user_name']) &&  isset($_SESSION['user_pswd'])):?>

<?php
require_once './EntidadeInterface.php';
require_once './Usuarios_Interface.php';
require_once './Banco_Crud.php';

if(true){
$aluno_oo = new Usuarios_Interface();

$banco = new banco_crud(require_once './conexao.php' , $aluno_oo);

$banco->listarUser_entity();
}

echo '<body>'
      . '<table>'
      . '<tr>'
      . '<td>'
      . '<td>Nome Usuário'
      . '</td>'  
      . '<td alingn=middle width=550><a href=index.php?page=busca_user><input  type="submit" name="nome_lis" value="Buscar" ></a>'
      . '</td>'
      . '</tr>'
       . '</table>'  
      . '</body>';
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
      . '<td alingn=middle width=550><a href=index.php?page=login_user><input  type="submit" name="nome_lis" value="Click" ></a>'
      . '</td>'
      . '</tr>'
       . '</table>'  
      . '</body>';

?>
<?php endif;?>
