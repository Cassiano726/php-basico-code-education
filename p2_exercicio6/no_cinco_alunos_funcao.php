<?php


function cinco_alunos_mais_altos(){
$hitman = array("a" => array(    
    "nome" => 'Moises',
    "matricula" => 0,
    "altura"    => 1.65),
    "b" => array(
    'nome' => 'Manoel',
    'matricula' => 1,
    'altura'    => 1.50),
    "c" => array(
    'nome' => 'Eraldo',
    'matricula' => 2,
    'altura'    => 1.55),
    "d" => array(
        'nome' => 'Flavia',
    'matricula' => 3,
    'altura'    => 1.68),
    "e" => array(
        'nome' => 'Ana',
    'matricula' => 4,
    'altura'    => 1.65),
    "f" => array(
        'nome' => 'Alice',
    'matricula' => 5,
    'altura'    => 1.50),
    "g" => array(
        'nome' => 'Paulo',
    'matricula' => 006,
    'altura'    => 1.75),//
    "h" => array(
        'nome' => 'Everton',
    'matricula' => 7,
    'altura'    => 1.68),
    "i" => array(
        'nome' => 'Glauce',
    'matricula' => 8,
    'altura'    => 1.58),
    "j" => array(
        'nome' => 'Junior',
    'matricula' => 9,
    'altura'    => 1.78),//
    "l" => array(
        'nome' => 'Denis',
    'matricula' => 10,
    'altura'    => 1.79),
    "m" => array(
        'nome' => 'Hítalo',
    'matricula' => 11,
    'altura'    => 1.83),//
    "n" => array(
        'nome' => 'Marcela',
    'matricula' => 12,
    'altura'    => 1.67),
    "o" => array(
        'nome' => 'Jilson',
    'matricula' => 13,
    'altura'    => 1.70),//
    "p" => array(
        'nome' => 'Jessica',
    'matricula' => 14,
    'altura'    => 1.69),
    "q" => array(
        'nome' => 'Josias',
    'matricula' => 15,
    'altura'    => 1.75),
    "r" => array(
        'nome' => 'Paula',
    'matricula' => 16,
    'altura'    => 1.79),//
    "s" => array(
        'nome' => 'Alex',
    'matricula' => 17,
    'altura'    => 1.69),
    "t" => array(
        'nome' => 'Marcia',
    'matricula' => 18,
    'altura'    => 1.62),
    "u" => array(
        'nome' => 'Cassiano',
    'matricula' => 19,
    'altura'    => 1.82),//
    "v" => array(
        'nome' => 'Kleber',
    'matricula' => 20,
    'altura'    => 1.85));  //     


            echo "  ".$hitman['v']['matricula'].'<br>'.$hitman['v']['altura'];
            echo '<br>';
            echo "  ".$hitman['m']['matricula'].'<br>'.$hitman['m']['altura'];
            echo '<br>';
            echo "  ".$hitman['u']['matricula'].'<br>'.$hitman['u']['altura'];
            echo '<br>';
            echo "  ".$hitman['r']['matricula'].'<br>'.$hitman['r']['altura'];
            echo '<br>';
            echo "  ".$hitman['l']['matricula'].'<br>'.$hitman['l']['altura'];
}

cinco_alunos_mais_altos();