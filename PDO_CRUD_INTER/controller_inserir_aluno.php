<?php session_start();?>
<?php if (isset($_SESSION['user_name']) &&  isset($_SESSION['user_pswd'])):?>

<?php

require_once './EntidadeInterface.php';

/*Incluir classe Banco_crud.php*/

require_once './Banco_Crud.php';

/*incluir classe Aluno.php*/
require_once './Alunos.php';

$obj_aluno_column = new Alunos();


if(isset($_POST['Novo'])){
    

$nome_n = $_POST['nome_novo'];
$nota_n = $_POST['nota_novo'];

$obj_aluno_column = new Alunos();
        
$obj_aluno_column->setNome($nome_n)
                 ->setNota($nota_n);

$obj_banco_column = new banco_crud(include_once './conexao.php', $obj_aluno_column);

$obj_banco_column->inserir_entity($obj_aluno_column->getNome(),$obj_aluno_column->getNota());

        header("Location:index.php?page=view_lista");
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
      . '<td alingn=middle width=550><a href=index.php?page=login_user><input  type="submit" name="nome_lis" value="Click" ></a>'
      . '</td>'
      . '</tr>'
       . '</table>'  
      . '</body>';

?>
<?php endif;?>
