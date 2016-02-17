<?php session_start();?>
<?php if (isset($_SESSION['user_name']) &&  isset($_SESSION['user_pswd'])):?>

<?php

    require './EntidadeInterface.php';

    /* Incluir classe Banco_crud.php */
    require_once './Banco_Crud.php';


    /* incluir classe Aluno.php */
    require_once './Alunos.php';

    $aluno_ranking = new Alunos();


    $obj_banco = new banco_crud(require_once './conexao.php', $aluno_ranking); /* Rapaz que ganbiarra eu fin aqui KKKKKKKKK */

    $obj_banco->listarRank_entity();
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
