<?php session_start();?>
<?php if (isset($_SESSION['user_name']) &&  isset($_SESSION['user_pswd'])):?>



<?php


echo     '<html>'
        . '<body>'
        . '<form method=post action=index.php?page=controller_inserir_aluno>'
        . '<table>'
        . '<tr>'
        . '<label>Nome do aluno:<input type=text name=nome_novo autofocus=""></label>'
        . '<label>Nota do Aluno:<input type=text name=nota_novo autofocus="" ></label>'
        . '<label><input type=submit name=Novo value=Novo>'
        . '<input type=reset name=limpar value=Limpar></label>'
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
