<?php

session_start();
if (isset($_SESSION['user_sessao']) && isset($_SESSION['user_senha'])) {


    /* Incluir classe Banco_crud.php */
    require_once './Banco_Crud.php';


    /* incluir classe Aluno.php */
    require_once './Alunos.php';




    $obj_aluno = new Alunos(require_once './conexao.php'); /* Rapaz que ganbiarra eu fin aqui KKKKKKKKK */

    $obj_aluno->listarRank();
} else {
        
    echo'Por favor realizar seu login no sistema!';
    echo '<br/><a href=index.php?page=login>Login</>';
}