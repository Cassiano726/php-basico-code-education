<?php session_start();?>
<?php if (isset($_SESSION['user_name']) &&  isset($_SESSION['user_pswd'])):?>

<?php

/*Incluir classe Banco_crud.php*/

require_once './Banco_Crud.php';

/*inclui a classe interface*/
require_once './EntidadeInterface.php';

/*incluir classe Aluno.php*/
require_once './Alunos.php';

/*banco*/
require_once './Banco_Crud.php';;

if(isset($_POST['excluir'])){
    
$id_ed = $_POST['id_excluir'];
$nome_ed = $_POST['nome_excluir'];


$aluno = new Alunos(); 
        
        
$b =  new banco_crud(require_once'conexao.php',$aluno);

$b->deletar_entity($id_ed);

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

