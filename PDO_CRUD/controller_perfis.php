<?php session_start();?>

<?php if (isset($_SESSION['user_sessao']) &&  isset($_SESSION['user_senha'])):?>

<?php


/*Incluir classe Banco_crud.php*/
require_once './Banco_Crud.php';

/*incluir classe Aluno.php*/
require_once './Alunos.php';

if(isset($_POST['perfil'])){
    
$id_p = $_POST['usuario'];


$aluno = new banco_crud(require_once'conexao.php');

$aluno->find($id_p);
echo '<b><a href=index.php?page=list_alunos>Voltar á Lista</a></b>';

}else{
    echo "Erro fatal";
}

?>

<?php else:?>

<p>Por favor realizar seu login no sistema!</p>
<br/><a href=login.php>Login</a>  
 
<?php endif; ?>
