

<?php
/**
 * Description of banco_crud
 *
 * @author Jeremias
 */


class banco_crud {
        
    private $db;
    private $entity;
    
    public function __construct(\PDO $db, EntidadeInterface $entity) {
        //use a variável $db
        $this->db = $db;
        $this->entity = $entity;
        
        
    }
    
    //TODO:  Vou trabalhar melhor essa FIND
    public function find_entity($id){
        
        $query = "select * from {$this->entity->getTable()} where id=:id";
        
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
    public function listar_entity( ) {
      
      $query = "select * from {$this->entity->getTable()}  order by id";
      $stmt  = $this->db->query($query);
      $stmt->execute();
      while($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) {

        $id = $resultado['id'];
        $nome = $resultado['nome'];
        $nota = $resultado['nota'];
        
        //$this->alunos->setId($id);
        //$this->alunos->setNome($nome);
        //$this->alunos->setNota($nota);
        
        echo'   <table>'
                . '<tr><br/><td>N° Matricula::'.$id.'</td><td><a href=index.php?page=editar_aluno>Editar</a></td></tr>'
                . '<tr><td>NOME Aluno::'. $nome.'</td></td><td><a href=index.php?page=busca_nome>Listar</a></td></tr>'
                . '<tr><td>NOTA::'.$nota.'</td></td><td><a href=index.php?page=excluir>Excluir</a></td></tr>'
                . '</table>';
        
      }
      
    }
    
    //TODO método LISTAR-RANKING
    
    public function listarRank_entity() {
     
      $query = "select id,nome,nota from {$this->entity->getTable()}   where nota>=8 ";
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
    
    
    
    /*TODO* Listar Por Nome*/
    public function listarPN_entity($nome) {

        $query = "select * from {$this->entity->getTable()} where nome=:nome";

        $stmt = $this->db->prepare($query);
        
        $stmt->bindValue(":nome", $nome, \PDO::FETCH_NAMED);
        
        $stmt->execute();
                

        while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
            
            $nome_b = $resultado['nome'];
            
            echo'   <table>'
            . '<tr><td>N° do  aluno :' . $resultado['id'] . '</td><td></td></tr>'
            . '<tr><td>Nome do  aluno :' . $nome_b . '</td><td></td></tr>'
            . '<tr><td>Nota do  aluno :' . $resultado['nota'] . '</td><td></td></tr>'        
            . '</table>';
            
        }
    }
    
    
    //TODO método LISTAR-RANKING
    
    public function listarUser_entity() {
     
      $query = "select * from {$this->entity->getTable()}  order by id_user";
      $stmt  = $this->db->query($query);
      $stmt->execute();
      while($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) {

        $id = $resultado['id_user'];
        $nome = $resultado['username'];
        $nota = $resultado['pswd'];
        
        //$this->alunos->setId($id);
        //$this->alunos->setNome($nome);
        //$this->alunos->setNota($nota);
        
        echo'   <table>'
                . '<tr><br/><td>N° Usuário::'.$id.'</td></tr>'
                . '<tr><td>Nome Usuário::'. $nome.'</td></tr>'
                . '<tr><td>Senha::'.$nota.'</td></tr>'
                . '</table>';
        
      }
         }
    
        /*TODO* Listar Por Usuário*/
    public function listarPU_entity($nome) {

        $query = "select username from {$this->entity->getTable()} where username=:username";
        
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":username", $nome,\PDO::FETCH_NAMED);
        $stmt->execute();
         
      
        while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
            
            $nome_b = $resultado['username'];
            
            echo'   <table>'
                 . '<tr><td>Nome do  usuário :' . $nome_b . '</td><td><a href=index.php?page=editar_user>Editar::</a></td><td><a href=index.php?page=view_lista_user>Listar::</a></td><td><a href=index.php?page=excluir_user>Excluir::</a></td></tr>'
                 . '</table>';
            
        }   
    }

    
    /*TODO LOGAR */
    public function logar_entity($x1,$x2){
        $query = "select * from  {$this->entity->getTable()}  where username=:username and pswd=:pswd";
        
        $stmt  = $this->db->prepare($query);
        
        $stmt->bindValue(":username", $x1,PDO::PARAM_STR);
        $stmt->bindValue(":pswd", $x2,  PDO::PARAM_STR);
        
        $stmt->execute();
        
         while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) {
             
             $user_v = $resultado['username'];
             $pswd_v = $resultado['pswd'];
             
             $testeU = $x1;
             $testeP = $x2;
             
             if($user_v == $testeU && $pswd_v == $testeP){
                 
                 header("Location:index.php?page=sessao_user_inter");
             }
        }
    }
    
   
    
    
    //TODO INSERIR DADOS NO BANCO - INSERT
    public function inserir_entity($nome,$nota) {
        
       $query = "insert into {$this->entity->getTable()} (nome,nota) values (:nome,:nota)";
       $stmt = $this->db->prepare($query);
       $stmt->bindParam(":nome", $nome,  PDO::PARAM_STR);
       $stmt->bindParam(":nota", $nota,  PDO::PARAM_STR);
        
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
 
   //TODO INSERIR DADOS NO BANCO - INSERT
    public function inserir_user_entity($nome,$nota) {
        
       $query = "insert into {$this->entity->getTable()} (username,pswd) values (:username,:pswd)";
       $stmt = $this->db->prepare($query);
       $stmt->bindParam(":username", $nome,  PDO::PARAM_STR);
       $stmt->bindParam(":pswd", $nota,  PDO::PARAM_STR);
        
        $stmt->execute();
        
        while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) {

            $nome_n = $resultado['username'];
            $nota_n = $resultado['pswd'];

            if (($nome_n == $nome && $nome_n != null) && ( $nota_n == $nota && $nota_n != null ) ) {

               //echo "Novo aluno cadastrado com sucesso: <br/>N° de Linhas atualizadas :".$stmt->rowCount()."<br/>";
               header("Location:index.php?page=view_lista_user");
            }elseif(($nome_n != $nome && $nome_n != null) && ( $nota_n != $nota && $nota_n != null )){
                //echo "Erro no cadastro do aluno!!!: <br/>N° de Linhas atualizadas :".$stmt->rowCount()."<br/>";
                header("Location:index.php?page=inserir_user");
            }   
       
   }
   
 }

    /*UPDATE*//*Passei duas semanas pra criar essa função Poooorrrraaaaaa!!!!*/
    
    public function editar_entity($id,$nome,$nota) {
     
        
        $query = "update {$this->entity->getTable()} set nome=:nome , nota=:nota  where id=:id";
        $stmt = $this->db->prepare($query);
        
        $id_I = $id;
        $nome_I = $nome;
        $nota_I = $nota;
        
        $stmt->bindParam(":id", $id_I , PDO::FETCH_NUM);
        $stmt->bindParam(":nome", $nome_I,  PDO::PARAM_STR);
        $stmt->bindParam(":nota", $nota_I,  PDO::PARAM_STR);

        $stmt->execute();
        
        if($stmt){
            
            echo "Dados do aluno atualizados com sucesso: <br/>N° de Linhas atualizadas :".$stmt->rowCount()."<br/>";
            echo '<table>'
            . '<tr>'
            . '<td> ID: ' . $id_I. '</td>'
            . '<td> NOME: ' . $nome_I . '</td>'
            . '<td> NOTA: ' . $nota_I . '</td>'
            . '</tr>'
            . '</table>';
            
            //header('Location:index.php?page=view_editar');
       
        }
    }
    
    /*UPDATE*//*Passei duas semanas pra criar essa função Poooorrrraaaaaa!!!!*/
    
    public function editar_user_entity($id,$nome,$nota) {
     
        
        $query = "update {$this->entity->getTable()} set username=:username , pswd=:pswd  where id_user=:id_user";
        $stmt = $this->db->prepare($query);
        
        $id_I = $id;
        $nome_I = $nome;
        $nota_I = $nota;
        
        $stmt->bindParam(":id_user", $id_I , PDO::FETCH_NUM);
        $stmt->bindParam(":username", $nome_I,  PDO::PARAM_STR);
        $stmt->bindParam(":pswd", $nota_I,  PDO::PARAM_STR);

        $stmt->execute();
        
        if($stmt){
            
            echo "Dados do aluno atualizados com sucesso: <br/>N° de Linhas atualizadas :".$stmt->rowCount()."<br/>";
            echo '<table>'
            . '<tr>'
            . '<td> ID: ' . $id_I. '</td>'
            . '<td> NOME: ' . $nome_I . '</td>'
            . '<td> NOTA: ' . $nota_I . '</td>'
            . '</tr>'
            . '</table>';
                      
       
        }
    }
    
    /*TODO DELETE*/
    
    
    public function deletar_entity($id) {
        $query = "delete  from {$this->entity->getTable()} where id=:id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        $stmt->execute();

        while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) {

            $id_v = $resultado['id'];

            if ($id_v == $id) {

               echo "Dados excluidos: <br/>N° de Linhas atualizadas :".$stmt->rowCount()."<br/>";
                header("Location:index.php?page=view_lista");
            }
        }
    }

    
    public function deletar_user_entity($id) {
        $query = "delete  from {$this->entity->getTable()} where id_user=:id_user";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":id_user", $id, PDO::PARAM_INT);

        $stmt->execute();

        while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) {

            $id_v = $resultado['id_user'];

            if ($id_v == $id) {

               echo "Dados excluidos: <br/>N° de Linhas atualizadas :".$stmt->rowCount()."<br/>";
                header("Location:index.php?page=view_lista_user");
            }
        }
    }

    
   public function testecolumn($id){
    
       /* 0.1.0
       $query = "select id,nome from {$this->entity->getTable()} where id=1 and nome='admin'";
       $stmt = $this->db->prepare($query);
       $stmt->execute();
       $result = $stmt->fetchColumn(0);
       echo "Funcionou: <br/>".$result;       
       */
       
       
       // 0.1.2
       //$query = "select id,nome,nota from {$this->entity->getTable()} ";
       $query = "select * from {$this->entity->getTable()} {$this->entity->getId()} ";
       $stmt = $this->db->prepare($query);
       $stmt->execute();
       echo "<br/>";
       echo 'id :'.$stmt->fetchColumn(0).'<br>id :'.$stmt->fetchColumn(0).'<br>id :'.$stmt->fetchColumn(0);
       $stmt->execute();
       echo "<br/>";
       echo '<br/>Nome :'.$stmt->fetchColumn(1).'<br>Nome :'.$stmt->fetchColumn(1).'<br>Nome:'.$stmt->fetchColumn(1);
       $stmt->execute();
       echo "<br/>";
       echo '<br/>Nota :'.$stmt->fetchColumn(2).'<br>Nota :'.$stmt->fetchColumn(2).'<br>Nota:'.$stmt->fetchColumn(2);
       
       /*
       $stmt->execute();
       echo 'Nome :'. $stmt->fetchColumn(1).'<br/>';
       $stmt->execute();
       $result = $stmt->fetchColumn(2);
       echo "Nome:".$result;       
       */
       
       /*0.1.3 Funciona
       $query = "insert into {$this->entity->getTable()}  values (nome=:nome,nota=:nota)";
       $stmt = $this->db->prepare($query);
       $stmt->bindParam(":nome", $nome,  PDO::PARAM_STR);
       $stmt->bindParam(":nota", $nota,  PDO::PARAM_STR);
        
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
        
            }*/
       /*0.1.4 com bindcolumn
       
       $query = " insert into {$this->entity->getTable()}(nome,nota) values (nome=$nome,nota=$nota)";
       $stmt = $this->db->prepare($query);
       $stmt->execute();
       
       //faz a ligação de acordo com o nome da coluna
       $stmt->bindColumn("nome" , $nome);
       
       //faz a ligação de acordo com o nome ds columa
       $stmt->bindColumn("nota", $nota);
       
       //faz fetch na linha em questão
       
       $resultado = $stmt->fetch(\PDO::FETCH_BOUND);
       print_r('Nome Aluno:'.$nome.'<br/>N° Aluno: '.$nota);       
       
       
       //print_r('Nome Aluno:'.$nome.'<br/>N° Aluno: '.$id);       
        * 
        */
}

}
?>

