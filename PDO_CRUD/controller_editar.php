<?php
session_start();

if (isset($_SESSION['user_sessao']) &&  isset($_SESSION['user_senha'])):?>

<?php     
 /*Incluir classe Banco_crud.php*/

require_once './Banco_Crud.php';


/*incluir classe Aluno.php*/
require_once './Alunos.php';


if(isset($_POST['salvar'])){
    
$id_ed = $_POST['id_editar'];
$nome_ed = $_POST['nome_editar'];
$nota_ed = $_POST['nota_editar'];
//$nota_ed = $_POST['nota_editar'];

//$array_editar = array($nome_ed,$nota_ed);
$teste = new Alunos(require_once './conexao.php');



$teste->editar($id_ed,$nome_ed,$nota_ed);

echo '<table>'
   . '<tr>'
   . '<td> ID: '.$id_ed.'</td>'
   . '<td> NOME: '.$nome_ed.'</td>'
   . '<td> NOTA: '.$nota_ed.'</td>'     
   . '</tr>'
   . '</table>';

}else{
    echo "Erro fatal";
}
?>
<? php else:?>
<?php header("Location:index.php?page=list_alunos");?>
<p>Por favor realizar seu login no sistema!</p>
<br/><a href='index.php?page=login.php'>Login</a>  
<?php endif;?>