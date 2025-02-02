<?php


/* Esercizio 3
 Organizzare in un array $corsi questo elenco di corsi: PHP, Laravel, Javascript, CSS, HTML.

Stampare l'elemento "Javascript".

Modificare l'array in modo che "echo $corsi['css'];" funzioni e stampi CSS.


*/

$corsi = ["PHP", "Laravel", "Javascript", "CSS","css" => "CSS", "HTML"];



echo $corsi[2];



echo $corsi['css'];