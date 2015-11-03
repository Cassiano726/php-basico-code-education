<html>
    <hea>
        <meta charset="utf-8">
        <title>Prenchendo Arrays Aleátoriamente!!!</title>
    </head>
    <body>

        <?php
        $aux = 10; //variável auxiliar para criar o intervalo que o array terá
        $array = array(); //Array que será prenchido aleátoriamente 
        $cont = 0; //variável que delimitar a quantidade de loops do while
        
        while ($aux > $cont) {
            $array[] .= rand(1, 100) . '<br/>'; //Pulo do gato kkkkk Atribuindo os números aleátorio entre 1 e 100
            $cont++; //contador de seguramça
        
        }
        /*Agora que já tenho o array preenchido automatica e aleatorimente.
         *Vou iterar sob o array aleatorio com o foreach.  */
        foreach ($array as $arrays) {
            
                $teste = $arrays%2 ? $arrays.'Ímpar' : $arrays.'Par';//Utilizando o if profissional kkk gostei muito de ter aprendido esse comparador
                echo '<br>'.$teste;//Agora que já testei é só mostra na tela... 
        }
        /*Eu não tenho como expressar, a minha alegria de ter criado esse trecho de código.
          Desculpe a falta de modestia! Mas é o código mais lindo que fiz kkkk! E ainda fiz ele sozinho! Levei 4 dias para 
         *chegar nele lendo muito o material da school Of Net, os foruns de duvidas entre outros "Apoios".
         * Mais esse código é meu! Meu filho kkkkk! Eu me obriguei a criar um, meu não copiar.
	 *Para me força a entender o problema e criar a resposta´para o problema.
         * Sei que não é o mellhor modo de fazer! Mas esse eu criei e sei como funciona. Não há um código como esse na net. Esse é meu.
         * Muito obrigado Weslley, por entender que nem todo mundo tem a mesma curva de aprendizado
	 *Eu sou um pouco mais lento. Sei disso! Mas vou ser um programador, custe o que custar!!!!
	 */
        ?>
        <footer>
            <p> O exercício p2_1 pede para criar um array com números aleatórios entre 1 e 100,<br/>
                e informar quais são impares ou quais são pares.
            </p>
        </footer>
    </body>
</html>
