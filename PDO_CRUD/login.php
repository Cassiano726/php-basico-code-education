<html>
    <body>
        <form method="post" action="index.php?page=controller_login">
            <fieldset>
                <legend>Acesso: </legend>
            </fieldset>
            <fieldset>
                <label>N°-Matricula :<input type="text" name="usuario" autofocus=""></label>
                <label>Nome Aluno :<input type="password" name="senha" autofocus=""></label>
            <label>
                <input type="submit" name="logar" value="logar"><!--O submit que o sistema esta pegando é esse -->
                <input type="reset" name="limpar" value="limpar">
            </label>
            </fieldset>
        </form>
    </body>
</html>  