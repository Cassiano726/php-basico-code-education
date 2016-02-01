<?php
/**
 * Description of banco_crud
 *
 * @author Jeremias
 */


class banco_crud {
        
    private $db;
    
   
    /*Eu acridito que todas as consultas ao banco tem que passar por esse arquivo.*/

    //criação do método construtor da classe conexão_crud
    
    public function __construct(\PDO $db) {
        //use a variável $db
        $this->db = $db; 
        
    }
    
    //TODO:  Vou trabalhar melhor essa FIND
    public function find($id){
        $query = "select * from alunos where id=:id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        
        while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $id = $resultado['id'];
        $nome = $resultado['nome'];
        $nota = $resultado['nota'];
        
        echo'   <table>'
                . '<tr><td>N° Matricula:'.$id.'</td><td></td></tr>'
                . '<tr><td>NOME Aluno:'.$nome.'</td><td></td></tr>'
                . '<tr><td>NOTA:'.$nota.'</td><td></td></tr>'
                . '</table>';
         }
                
    }
    
    
    //TODO método LISTAR
    public function listar() {
     
      $query = "select * from alunos ";
      $stmt  = $this->db->query($query);
      $stmt->execute();
      
      
        while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $id = $resultado['id'];
        $nome = $resultado['nome'];
        $nota = $resultado['nota'];
        
        echo'   <table>'
                . '<tr><br/><td>N° Matricula::'.$id.'</td><td><a href=index.php?page=editar_aluno>Editar</a></td></tr>'
                . '<tr><td>NOME Aluno:'.$nome.'</td></td><td><a href=index.php?page=perfil_aluno>Listar</a></td></tr>'
                . '<tr><td>NOTA:'.$nota.'</td></td><td><a href=index.php?page=excluir_aluno>Excluir</a></td></tr>'
                .
                '</table>';
         }
    }
    
    //TODO método LISTAR-RANKING
    
    public function listarRank() {
     
      $query = "select id,nome,nota from alunos  where nota>=8";
      $stmt  = $this->db->query($query);
      $stmt->execute();
         while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) {
        
        $id = $resultado['id'];     
        $nome = $resultado['nome'];
        $nota = $resultado['nota'];
        
        echo'   <table>'
                . '<tr><td>N° Matricula:'.$id.'</td></tr>'
                . '<tr><td>NOME Aluno:'.$nome.'</td></tr>'
                . '<tr><td>NOTA:'.$nota.'</td></tr>'
                .
                '</table>';
         }
    }
    
    
    
    //TODO LOGAR
    public function logar($id,$nome){
        $query = "select * from alunos where id=:id and nome=:nome";
        $stmt  = $this->db->prepare($query);
        $stmt->bindValue(":id", $id,  PDO::PARAM_INT);
        $stmt->bindValue(":nome", $nome,  PDO::PARAM_STR);
        
        $stmt->execute();
        
         while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) {
             
             $id_v = $resultado['id'];
             $nome_v = $resultado['nome'];
             
             $testeid = $id;
             $testen = $nome;
             
             if($id_v == $testeid && $nome_v == $testen){
                 
                 header("Location:index.php?page=sessao");
             }
        }
    }
    
    
    
    
    /*TODO INSERIR DADOS NO BANCO - INSERT*/
    public function inserir($nome,$nota) {
        $query = "insert into alunos(nome,nota) values(:nome, :nota)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":nome", $nome,  PDO::PARAM_STR);
        $stmt->bindValue(":nota", $nota,  PDO::PARAM_STR);
        
        $stmt->execute();
        
        while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) {

            $nome_n = $resultado['nome'];
            $nota_n = $resultado['nota'];

            if (($nome_n == $nome && $nome_n != null) && ( $nota_n == $nota && $nota_n != null ) ) {

               //echo "Novo aluno cadastrado com sucesso: <br/>N° de Linhas atualizadas :".$stmt->rowCount()."<br/>";
               header("Location:index.php?list_alunos");
            }elseif(($nome_n != $nome && $nome_n != null) && ( $nota_n != $nota && $nota_n != null )){
                //echo "Erro no cadastro do aluno!!!: <br/>N° de Linhas atualizadas :".$stmt->rowCount()."<br/>";
                header("Location:index.php?page=cadastro_novo_aluno");
            }
        }
    }

    /*UPDATE*//*Passei duas semanas pra criar essa função Poooorrrraaaaaa!!!!*/
    
    public function editar($id,$nome,$nota) {
     
        if($id !=null && $nome != null && $nota != null ){
        $query = "update alunos set nome=:nome , nota=:nota  where id=:id";
        $stmt = $this->db->prepare($query);
        
        $id_fun = $id;
        $nome_fun = $nome;
        $nota_fun = $nota;
        
        $stmt->bindValue(":id", $id_fun,  PDO::PARAM_INT);
        $stmt->bindValue(":nome", $nome_fun,  PDO::PARAM_STR);
        $stmt->bindValue(":nota", $nota_fun,  PDO::PARAM_STR);
        $stmt->execute();
        if($stmt){
        echo "Dados do aluno atualizados com sucesso: <br/>N° de Linhas atualizadas :".$stmt->rowCount()."<br/>";
       // return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }else{
            echo "Os dados não foram atualizados";
        }
        }elseif($id ==null || $nome == null || $nota == null){
            echo "Por favor informe os dados do aluno: ";
            echo '<a href=index.php?page=editar_aluno>Editar Aluno</a>';
        }
    }
    
    //TODO DELETE
    
    
    public function deletar($id) {
        $query = "delete  from alunos where id=:id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        $stmt->execute();

        while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) {

            $id_v = $resultado['id'];

            if ($id_v == $id) {

               echo "Dados excluidos: <br/>N° de Linhas atualizadas :".$stmt->rowCount()."<br/>";
                header("Location:index.php?page=controller_alunos");
            }
        }
    }

    
    
    
}
