<?php


/*netendo que é necessário criar uma classe ou arquivo nesse primeiro momento de conexão com o banco.*/
//versão 0.1.0 de class de conexão - não sei se é melhor criar class ou arquivo vou descobrir na marra!
    

try {

    $conexao_crud = new \PDO("mysql:host=localhost;dbname=school", "root", "jcs726");
} catch (PDOException $exc) {
    echo "Não foi possível realizar a conexão com o banco " . $exc->getMessage() . $exc->getCode();
}

if(true)
return $conexao_crud;