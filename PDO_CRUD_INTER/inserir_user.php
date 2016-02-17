<?php


echo     '<html>'
        . '<body>'
        . '<form method=post action=index.php?page=controller_inserir_user>'
        . '<table>'
        . '<tr>'
        . '<label>Nome Usuário:<input type=text name=nome_novo autofocus=""></label>'
        . '<label>Senha Usuário:<input type=text name=nota_novo autofocus="" ></label>'
        . '<label><input type=submit name=Novo_User value=Novo>'
        . '<input type=reset name=limpar value=Limpar></label>'
        . '</tr>'
        . '</table>'
        . '</form>'
        . '</body>'
        . '</html>';
?>

