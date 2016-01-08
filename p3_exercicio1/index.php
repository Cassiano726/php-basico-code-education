<?php require_once("header.php"); ?> <!-Na 1° versão foi usado:  include() -->
<?php require_once("menu.php"); ?>   <!-Na 2° versão foi usado:  include_once()Para verificar se á chamadas duplas de um mesmo arquivo.php -->
                                     <!-Na 3° versão foi usado:  require_once()Para que avendo um erro a página não seja exibida. Fatal erro-->
                                     
                                     
<div id="conteudo">
	<?php     /*Modelo a ser seguido de navegação interna!!!!*/
	 if(!isset($_GET['page']))/*Na 1° versão desse código foi usado o <PHP if(!$_GET['page'])..*/
	require_once("home.php");
	else
	require_once($_GET['page'].".php");/*Concatenação usando o (.)Ponto - Ele fala ao navegador!.
         * menu caso exista uma páginacom extensão (.php) sem ser a homa.php! Então mostre ela aqui concatenando. */
	?>
</div>
<?php require_once("footer.php"); ?>