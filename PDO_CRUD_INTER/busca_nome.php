<?php session_start();?>
<?php if (isset($_SESSION['user_name']) &&  isset($_SESSION['user_pswd'])):?>



<?php


echo '<table>'
     . '<form method=post action=index.php?page=controller_BN>'
     . '<tr>'
     . '<td>Digite o Nome:</td>'
     . '<td><label>:<input type=text name=buscar_nome autofocus=""></label></td>'
     . '<td alingn=middle width=200> <input type=submit name=buscar value=Buscar ></td>'
     . '<td><input type=reset name=limpar value=limpar></td>'   
     . '</tr>'
     . '</table>'
     . '</form>'           ;

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
