<div id="barra">
                <div id="menu-horizontal">
                    <ul><!- Exemplo de acesso interno de navegação-->
                        <li><a href="index.php">Home</a></li> <!--Lembrando que esse sinal de ? é o mesmo que uma função com parametro!! -->
                        <li><a href="index.php?page=lista_clientes">Lista de Clientes</a></li>
                        <li><a href="index.php?page=cadastro">Cadastra Cliente</a></li>
                        <li><a href="index.php?page=login">Login</a></li>
                        <li><a href="index.php?page=loguot">Loguot</a></li>
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