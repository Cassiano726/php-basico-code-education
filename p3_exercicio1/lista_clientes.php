<?php
session_start(); /*Página com sessão iniciada*/
?>

<?php if(isset($_SESSION["logado"])):?>

<!--Criar o loop com os clientes criados via $_COOKIE -->

    <?php
    
    while(isset($_POST["enviar"]) == null || isset($_POST["enviar"]) == ""){
        
            echo '<html>';
            echo'<head>';
            echo'<meta http-equiv="refresh" content="03">';
            echo'</head>';
            echo '<body>';
            echo '<ul>';
            echo '<li>ID :' . $_COOKIE["ID"] . '';
            echo '</li>';
            echo '<li>NOME :' . $_COOKIE["NOME"] . '';
            echo '</li>';
            echo '<li> EMAIL: ' . $_COOKIE["EMAIL"] . '';
            echo '</li>';
            echo '</ul>';
            echo '</body>';
            echo '</html>';
            break;
    }   
    
    if (isset($_POST["enviar"])) {/* Mais um aprendizado! A porra do isset()verifica se o parametro dentro dele é nulo */

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        setcookie("ID", $id);
        setcookie("NOME", $nome);
        setcookie("EMAIL", $email);
        
            isset($_COOKIE["ID"]);
            isset($_COOKIE["NOME"]);
            isset($_COOKIE["EMAIL"]);
         
            
        
        /* Criando uma lista dos clientes */
        echo '<html>';
        echo'<head>';
        echo'<meta http-equiv="refresh" content="03">';
        echo'</head>';
        echo '<body>';
        echo '<ul>';
        echo '<li>ID :' . $_COOKIE["ID"] . '';
        echo '</li>';
        echo '<li>NOME :' . $_COOKIE["NOME"] . '';
        echo '</li>';
        echo '<li> EMAIL: ' . $_COOKIE["EMAIL"] . '';
        echo '</li>';
        echo '</ul>';
        echo '</body>';
        echo '</html>';
    
        
    } /*elseif (isset($_POST["enviar"]) == null) {
        
        
            echo '<html>';
            echo '<body>';
            echo '<ul>';
            echo '<li>ID :' . $_COOKIE["ID"] . '';
            echo '</li>';
            echo '<li>NOME :' . $_COOKIE["NOME"] . '';
            echo '</li>';
            echo '<li> EMAIL: ' . $_COOKIE["EMAIL"] . '';
            echo '</li>';
            echo '</ul>';
            echo '</body>';
            echo '</html>';
    }*/
    
    ?>



<!--
   #BOTAO QUE DIRECIONA PARA OUTRA PAGINA DO SITE#
   Mais um aprendizado! Para realizar o direcionamento de uma p´´agina para outra usando um botão!
   É necessário usar a seguinte função: <a href="index.php?page=cadastro"><input text="button" name="cadastro"></a>
   Nesse exemplo estou chamando cadastro porque é o local para onde será direcionado. 
-->

<!--

    Não posso apagar esse código!! Porque? Simples! Ele me serviu de guia para resolver a questão
            if(($id && $nome && $email) == true){
            isset($_COOKIE["ID"]);
            isset($_COOKIE["NOME"]);
            isset($_COOKIE["EMAIL"]);
            
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $email = $_POST['email'];
        
            
            setcookie("ID", $id);
            setcookie("NOME", $nome); 
            setcookie("EMAIL", $email); 
            echo "ID :".$_COOKIE["ID"]."<br>NOME :".$_COOKIE["NOME"]."<br>EMAIL :".$_COOKIE["EMAIL"];
           
            //echo "Vai nessa";
        }elseif($id && $nome && $email ==  false) {
            
        }
        else{
            header("index.php?page=lista_clientes");
        }


-->
<br>
<a href="index.php?page=cadastro"><input type="button"  name="cadastro" value="cadastro"></a>
<!--<a href="cadastro.php">Novo Cadastro</a> -->
<?php else:?>
<p>Por favor! Realize seu login no sistema!  </p>
<?php endif; ?>



