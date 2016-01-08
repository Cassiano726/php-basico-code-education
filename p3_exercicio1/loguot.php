<?php session_start() ?>


<?php

unset($_SESSION["logado"]); /* Matando a sessão e sua variável armazenada */
header("Location:index.php"); /* Direcionando internamente com o php para a página index... */
?> 


<?php echo " Fim da sessão!!!"; ?>

