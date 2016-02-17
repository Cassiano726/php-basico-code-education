<?php session_start();?>
<?php if (isset($_SESSION['user_name']) &&  isset($_SESSION['user_pswd'])):?>

<?php
require_once './EntidadeInterface.php';
require_once './Alunos.php';
require_once './Banco_Crud.php';

if(true){
$aluno_oo = new Alunos();

$banco = new banco_crud(require_once './conexao.php' , $aluno_oo);

$banco->listar_entity();
}

echo '<body>'
      . '<table>'
      . '<tr>'
      . '<td>'
      . '<td>Nome Aluno'
      . '</td>'  
      . '<td alingn=middle width=550><a href=index.php?page=busca_nome><input  type="submit" name="nome_lis" value="Buscar" ></a>'
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
