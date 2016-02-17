<?php session_start();?>
<?php if (isset($_SESSION['user_name']) &&  isset($_SESSION['user_pswd'])):?>

<?php


require_once './EntidadeInterface.php';
require_once './Usuarios_Interface.php';
require_once './Banco_Crud.php';


if(isset($_POST['salvar_user'])){
    
$iduser_ed = $_POST['iduser_editar'];
$user_ed = $_POST['user_editar'];
$pswd_ed = $_POST['pswd_editar'];


$teste = new Usuarios_Interface();

$banco_ed = new banco_crud(require_once './conexao.php', $teste);

$banco_ed->editar_user_entity($iduser_ed,$user_ed,$pswd_ed);


echo 
             '<table>'
            . '<tr>'

            . '<td>Voltar ao Perfil :</td>'  
            . '<td alingn=middle width=550><a href=index.php?page=busca_user><input  type="submit" name="nome" value="Alunos" ></a>'
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

