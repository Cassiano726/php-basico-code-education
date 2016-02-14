<?php session_start()?>
<?php if(isset($_SESSION["logado"])):?>


<!--Criando um mostro parte 0.1.2

action="index.php?page=lista_clientes -->

                        <form  method="post" action="index.php?page=lista_clientes">

                            <fieldset> <!--Sepeara as áreas ou formulários por grupos -->
                                <legend>
                                    Formulário de Cadastro.
                                </legend>
                                <label>ID:<input type="text" name="id" autofocus="#"></label>
                                <label>Nome: <input type="text" name="nome" autofocus="#" ></label><br>
                                <label>Email: <input type="email" name="email" autofocus="#"> </label><br>
                            </fieldset>

                            <input type="submit" name="enviar" value="enviar">

                        </form>
        
    <?php else: ?>
        <p>Por favor! Realize seu login no sistema!  </p>
    <?php endif; ?>
