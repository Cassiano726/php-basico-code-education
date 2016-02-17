<?php session_start();?>
<?php if (isset($_SESSION['user_name']) &&  isset($_SESSION['user_pswd'])):?>

<?php


echo     '<html>'
        . '<body>'
        . '<form method=post action=index.php?page=controller_editar_user>'
        . '<table>'
        . '<tr>'
        . '<label>N° usuário:<input type=number name=iduser_editar ></label>'
        . '<label>Novo nome:<input type=text name=user_editar ></label>'
        . '<label>Nova senha:<input type=text name=pswd_editar ></label>'
        . '<label><input type=submit name=salvar_user value=Salvar>'
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




