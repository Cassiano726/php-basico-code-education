<div id="barra">
                <div id="menu-horizontal">
                    <ul>
                         <li><a href="index.php">Home</a></li>
                         <li><a href="index.php?page=view_lista">Lista de Alunos</a></li>
                         <li><a href="index.php?page=ranking_interface">Ranking - Alunos</a></li>
                         <li><a href="index.php?page=inserir_aluno">Novo - Aluno</a></li>
                         <li><a href="index.php?page=busca_nome">Buscar - Aluno  </a></li>
                         <li><a href="index.php?page=inserir_user">Novo - Usuário</a></li>
                         <li><a href="index.php?page=busca_user">Perfil - Usuário</a></li>
                         <li><a href="index.php?page=login_user">Login</a></li>
                         <li><a href="index.php?page=loguot_user">Logout</a></li>
                         <!--
                                       
                           Para que a navegação parta sempre o index.php chame a 
                           função (?)page:variável que será concatenada e passe o parametro 
                           (nome do arquivo ou classe)
                           Na pratica: index.php?page=livros ->nome do arquivo
                           OBS: Cuidado com ataques de XSS,SQNinjection entre outros.
                                Usar como defesa: HTML htmlentities por exemplo!
                                .. html-entity-decode.php ..  
                          
                         -->
                    </ul>
                </div>
            </div>