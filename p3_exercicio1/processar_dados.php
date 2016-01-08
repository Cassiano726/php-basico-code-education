<?php session_start();?>
<?php
/*Já que não trabalhamos com banco de dados esse array serve para guardar os usuário cadastrados no sistema*/

$a1 = $_POST["usuario"];

$a2 = $_POST["senha"];

/*Versão 0.1.5 para usuario com login e senha 04/01/2016*/
$perfis = array("jeremias" => array("login" => "jeremias", "senha" => "jeremias"),
    "cassiano" => array("login" => "cassiano", "senha" => "cassiano"),
    "silva" => array("login" => "silva", "senha" => "silva"));


/*versão 0.1.6*/
foreach ($perfis as $key => $value1) {
    
    foreach ($value1 as $key => $value) {
        
    }
    if (array_key_exists('' . $a1, $perfis) )
                    if(array_key_exists('' . $a2, $perfis)){
                        $_SESSION['logado'] = true;//set a super variável global como verdadeira, se chegou aqui ele esta logado.
                        if(isset($_SESSION['logado'])){
                        header("Location: index.php?page=cadastro");
                        //echo'<ul><li>Perfil:<br>' . '<br>Login: ' . current($value1) . '</li><li>' . '<br>Senha: ' . $value . '</li></ul>';
                        }
        } else {
            header("Location: index.php?page=login");
        }
}


/*versão 0.1.5 funciona errado ou não como eu quero
foreach ($perfis as $key => $value) {
    if (array_key_exists('' . $a1, $perfis ) ) {/* Após 1000 maneiras que não solucionava a questão! Essa funcionou
      Agora porque funcionou kkkk eu não sei kkk concatenei e funcionou kkkk 
        if(array_key_exists('' . $a2, $perfis )){
            header("Location:index.php?page=cadastro");
        }
   } else {
        header("Location:index.php?page=login");
    }
}
*/


/**
$usernames = array("jeremias", "cassiano", "silva");
$pswd = array("jeremias", "cassiano", "silva");
*/


/* versão: 0.1.1 Não funcionou como desejado erro meu
if($a1 == in_array("jeremias", $usernames) && $a2 == in_array("jeremias", $pswd)){
    
    echo "Deu certo".'<br>'; 
    echo "Nome do usuário \n".$a1.'<br>';
    echo "Senha do usuário \n".$a2.'<br>';

}else{
    echo "Usuário invalido!!!";
}
 */ 
 
/* Versão 0.1.2 Funciona perfeitamente 
foreach ($usernames as $value) {
    for ($i = 0; $i < strlen($value); $i++) {
        if ($value == $a1){
            foreach ($pswd as $value2) {
                for ($y = 0; $y < strlen($value2); $y++) {
                    if ($value2 == $a2) {
                        $_SESSION["logado"] = true;
                        if (isset($_SESSION["logado"])) {
                            header("Location:index.php?page=cadastro");  esse tipo de navegação interna é otima 
                        }
                    }
                }
            }    
                } else {
            header("Location:index.php?page=login"); /* esse tipo de navegação interna é otima 
        }
    }
}
*/


/* versão 0.1.3
   function alunos_ap_re(array $array_aluno){ 
               foreach ($array_aluno as $turma => $nomes) {
                    
                    foreach ($nomes as $notas => $visto) {
   
                    }
                   
 * 
 *  
 */
/* versão adptada da versão 0,1,3.1
foreach ($perfis as $key => $value1) {
    
    foreach ($value1 as $key => $value) {
        
    }  
    if(current($value1) == $a1 && $value == $a2){
    echo'<ul><li>Perfil:<br>'.'<br>Login: '. current($value1). '</li><li>'.'<br>Senha: '. $value.'</li></ul>';
    }
 else {
        header("Location: index.php?page=login");
    }
    
    
 }
*/
/* Para resolver o problema de usuário e senha, utilizei a função in_array.
  Perguntei ao array: se dentro do array username existir o nome "silva" bem como
  no array $pswd existir o valor senha: "silva" então inicie a sessao como verdadeira.
  e mostre o conteúdo da página home.. Que só é visivel se a pessoa realizar o login.. */

/*versao 0.1.2 vou melhorar esse login!!!!!
if (in_array("silva", $usernames, TRUE) and in_array("silva", $pswd, TRUE)) {
    $_SESSION["logado"] = true;
    echo "Acesso realizado. Visualize a lista de clientes cadastrados clicando em Clientes"; 
    //header("Location: lista_clientes.php"); //Redirecionamento para a página com conteúdo privado.
} else {
    echo "Acesso negado!!!";
}
 * 
 */

/*versão 0.1.3 login que recebe user e password 03/01/2016*/

