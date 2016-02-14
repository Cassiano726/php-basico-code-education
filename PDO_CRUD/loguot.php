<?php
    session_start();
if (isset($_SESSION['user_sessao']) && isset($_SESSION['user_senha'])) {

    unset($_SESSION['user_sessao']); /* Matando a sessão e sua variável armazenada */
    unset($_SESSION['user_senha']); /* Matando a sessão e sua variável armazenada */
    header("Location:index.php?page=home"); /* Direcionando internamente com o php para a página index... */
    echo " Fim da sessão!!!";
} else {
        echo'Por favor realizar seu login no sistema!';
        echo '<br/><a href=index.php?page=login>Login</a>';
}
?>



