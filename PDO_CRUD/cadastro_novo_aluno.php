<?php session_start();?>
<?php if (isset($_SESSION['user_sessao']) &&  isset($_SESSION['user_senha'])):?>
<?php

echo     '<html>'
        . '<body>'
        . '<form method=post action=index.php?page=controller_novo_aluno>'
        . '<table>'
        . '<tr>'
        . '<label>Nome do aluno:<input type=text name=nome_novo ></label>'
        . '<label>Nota do Aluno:<input type=text name=nota_novo ></label>'
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
<br/><a href='index.php?page=login'>Login</a>  
<?php endif;?>





