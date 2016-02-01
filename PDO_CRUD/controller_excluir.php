<?php
session_start();

if (isset($_SESSION['user_sessao']) &&  isset($_SESSION['user_senha'])):?>

<?php

/*Incluir classe Banco_crud.php*/

require_once './Banco_Crud.php';


/*incluir classe Aluno.php*/
require_once './Alunos.php';

if(isset($_POST['excluir'])){
    
$id_ed = $_POST['id_editar'];
$nome_ed = $_POST['nome_editar'];

$aluno = new banco_crud(require_once'conexao.php');

$aluno->deletar($id_ed);

echo '<table>'
   . '<tr>'
   . '<td> ID: '.$id_ed.'</td>'
   . '<td> NOME: '.$nome_ed.'</td>'
   . '<td> Excluido: </td>'      
   . '</tr>'
   . '</table>';

}else{
    echo "Erro fatal";
}

?>

<?php else:?>

<p>Por favor realizar seu login no sistema!</p>
<br/><a href=login.php>Login</a>  
 
<?php endif; ?>
