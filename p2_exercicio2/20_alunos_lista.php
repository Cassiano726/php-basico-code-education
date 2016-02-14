<?php

$aux=0;
$a_p_r = array("a" => array('aluno'=> "Moises", "nota" => 3),
               "b" => array("aluno" => "Marcos","nota" => 4),
               "c" => array("aluno" => "Mario","nota" => 5),
               "d" => array("aluno" => "Marta","nota" => 6),
               "e" => array("aluno" => "Ana","nota" => 6),
               "f" => array("aluno" => "Anita","nota" => 7),
               "g" => array("aluno" => "Alana","nota" => 7),
               "h" => array("aluno" => "Lara","nota" => 8),
               "i" => array("aluno" => "Latica","nota" => 6),
               "j" => array("aluno" => "Leticia","nota" => 7),
               "l" => array("aluno" => "Julho","nota" => 5),
               "m" => array("aluno" => "Jonas","nota" => 6),
               "n" => array("aluno" => "Josias","nota" => 3),
               "o" => array("aluno" => "Janaina","nota" => 4),
               "p" => array("aluno" => "Bruna","nota" => 7),
               "q" => array("aluno" => "Alana","nota" => 7),
               "r" => array("aluno" => "Paula","nota" => 8),
               "s" => array("aluno" => "Cassiano","nota" => 6),
               "t" => array("aluno" => "Emanuel","nota" => 7),
               "u" => array("aluno" => "Mano","nota" => 5),
               "v" => array("aluno" => "Sport","nota"=> 10)
               );

               foreach ($a_p_r as $turma => $nomes) {
                    
                    foreach ($nomes as $notas => $visto) {
                            
                            //echo "Boletin: </&nbs> $notas => $visto <br>\n";
                            //echo '<br>';
                    }
                    
                        $visto = $visto >= 6?$visto=" Aprovado ":$visto=" Reprovado ";
                        echo'<ul><li>Boletin:<br></&nbs></&nbs>'. current($nomes). '</li><li>'. $visto.'</li></ul>';
                        
               }    