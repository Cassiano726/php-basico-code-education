<?php


echo'
<html>
    <body>
        <form method="post" action="index.php?page=controller_login_user">
            <fieldset>
                <legend>Acesso: </legend>
            </fieldset>
            <fieldset>
                <label>Login :<input type="text" name="usuario" autofocus=""></label>
                <label>Senha :<input type="password" name="senha" autofocus=""></label>
            <label>
                <input type="submit" name="logar" value="logar"><!--O submit que o sistema esta pegando é esse -->
                <input type="reset" name="limpar" value="limpar">
            </label>
            </fieldset>
        </form>
    </body>
</html>';

?>        