<?php

function fib($n){

if($n <= 1)
    echo $n;

$aux1 =0;
$aux2 =1;
for($i=2; $i <=$n; $i++){
    
    $cont = $aux1;
    $aux1 = $aux2;
    $aux2 = $cont + $aux1;
}

echo($aux2);
}
//Como ainda não aprendi a pegar um número via teclado!
//Teste essa função passando o número dentro da função  fib(numero aqui);
fib(10);
