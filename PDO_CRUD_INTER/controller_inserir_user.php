
<?php

require_once './EntidadeInterface.php';

/*Incluir classe Banco_crud.php*/

require_once './Banco_Crud.php';

/*incluir classe Aluno.php*/
require_once './Usuarios_Interface.php';


if(isset($_POST['Novo_User'])){
    

$nome_n = $_POST['nome_novo'];
$nota_n = $_POST['nota_novo'];

$obj_aluno_column = new Usuarios_Interface;
        
$obj_aluno_column->setUsername($nome_n)
                 ->setPswd($nota_n);

$obj_banco_column = new banco_crud(include_once './conexao.php', $obj_aluno_column);

$obj_banco_column->inserir_user_entity($obj_aluno_column->getUsername(),$obj_aluno_column->getPswd());

        header("Location:index.php?page=view_lista_user");
}
?>
