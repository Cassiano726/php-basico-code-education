<?php session_start();?>
<?php if (isset($_SESSION['user_name']) &&  isset($_SESSION['user_pswd'])):?>



<?php
echo     '<html>'
        . '<body>'
        . '<form method=post action=index.php?page=controller_excluir_aluno>'
        . '<table>'
        . '<tr>'
        . '<label>N° Matricula::<input type=number name=id_excluir ></label>'
        . '<label>Nome Aluno::<input type=text name=nome_excluir ></label>'
        . '<label><input type=submit name=excluir value=excluir>'
        . '<input type=reset name=limpar value=limpar></label>'
        . '</tr>'
        . '</table>'
        . '</form>'
        . '</body>'
        . '</html>';

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

