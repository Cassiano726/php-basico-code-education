<?php session_start();?>
<?php if (isset($_SESSION['user_sessao']) &&  isset($_SESSION['user_senha'])):?>

<?php

/*Incluir classe Banco_crud.php*/

require_once './Banco_Crud.php';

/*incluir classe Aluno.php*/
require_once './Alunos.php';


if(isset($_POST['Novo'])){
    

$nome_n = $_POST['nome_novo'];
$nota_n = $_POST['nota_novo'];



$teste = new Alunos(require_once './conexao.php');

$teste->inserir($nome_n, $nota_n);
header("Location:index.php?page=list_alunos");
}

?>
<?php else:?>
<p>Por favor realizar seu login no sistema!</p>
<br/><a href=login.php>Login</a>  
<?php endif;?>


