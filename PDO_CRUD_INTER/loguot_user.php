<?php    session_start(); ?>
<?php
if (isset($_SESSION['user_name']) && isset($_SESSION['user_pswd'])) {
    


    unset($_SESSION['user_name']); /* Matando a sessão e sua variável armazenada */
    unset($_SESSION['user_pswd']); /* Matando a sessão e sua variável armazenada */
    header("Location:index.php?page=home_interface"); /* Direcionando internamente com o php para a página index... */
    echo " Fim da sessão!!!";
} else {
        echo'Por favor realizar seu login no sistema!';
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

}
?>


