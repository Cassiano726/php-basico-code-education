<?php session_start();?>

<?php
if($_SESSION['user_sessao'] == true && $_SESSION['user_senha'] == true):?>

    <html>
    <body>
        <form method="post" action="index.php?page=controller_perfis">
            <fieldset>
                <legend>Aluno: </legend>
            </fieldset>
            <fieldset>
                <label>N°-Matricula :<input type="text" name="usuario" autofocus=""></label>
                
            <label>
                <input type="submit" name="perfil" value="perfil"><!--O submit que o sistema esta pegando é esse -->
                <input type="reset" name="limpar" value="limpar">
            </label>
            </fieldset>
        </form>
    </body>
   </html>

<?php else:?>

echo "Por favor realizar seu login no sistema!";
<br/><a href=login.php>Login</a>  
 
<?php endif; ?>
