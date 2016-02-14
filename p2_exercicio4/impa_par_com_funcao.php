<html>
    <hea>
        <meta charset="utf-8">
        <title>Prenchendo Arrays Aleátoriamente!!!</title>
    </head>
    <body>

        <?php
        $aux = 1;
        $array = array();
        $cont = 0;

        while ($aux > $cont) {
            $array[] .= rand(1, 100) . '<br/>';
            $cont++; //contador de seguramça
        }

        function impa_par(array $a) {
            foreach ($a as $arrays) {

                $teste = $arrays % 2 ? $arrays . 'Ímpar' : $arrays . 'Par';
                echo '<br>' . $teste . '<br>';
            }
        }

        impa_par($array);
        ?>
        <footer>
            <p> O exercício p2_1 pede para criar um array com números aleatórios entre 1 e 100,<br/>
                e informar quais são impares ou quais são pares.
            </p>
        </footer>
    </body>
</html>