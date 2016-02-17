<?php session_start();?>
<?php if (isset($_SESSION['user_name']) &&  isset($_SESSION['user_pswd'])):?>



<?php


require_once './EntidadeInterface.php';
require_once './Alunos.php';
require_once './Banco_Crud.php';


if(isset($_POST['salvar'])){
    
$id_ed = $_POST['id_editar'];
$nome_ed = $_POST['nome_editar'];
$nota_ed = $_POST['nota_editar'];
//$nota_ed = $_POST['nota_editar'];

//$array_editar = array($nome_ed,$nota_ed);
$teste = new Alunos();

$banco_ed = new banco_crud(require_once './conexao.php', $teste);

$banco_ed->editar_entity($id_ed,$nome_ed,$nota_ed);

echo 
             '<table>'
            . '<tr>'

            . '<td>Voltar Lista :</td>'  
            . '<td alingn=middle width=550><a href=index.php?page=view_lista><input  type="submit" name="nome_lis" value="Alunos" ></a>'
            . '</td>'
            . '</tr>'
            . '</table>';



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

