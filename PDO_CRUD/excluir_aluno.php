<?php session_start();

if (isset($_SESSION['user_sessao']) &&  isset($_SESSION['user_senha'])):?>
<?php
echo     '<html>'
        . '<body>'
        . '<form method=post action=index.php?page=controller_excluir>'
        . '<table>'
        . '<tr>'
        . '<label>N° Matricula::<input type=number name=id_editar ></label>'
        . '<label>Nome Aluno:<input type=text name=nome_editar ></label>'
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
<br/><a href=login.php>Login</a>  
 
<?php endif; ?>
