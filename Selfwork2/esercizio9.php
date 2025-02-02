<?php
/* Modificare l'esercizio 4 in modo da stampare 'Nessun corso disponibile' se rimuoviamo tutti gli elementi dall'array. (ricordate che un array vuoto [] corrisponde ad un valore falsy ovvero false). */


$corsi = [ 'CSS', 'JS', 'HTML',' '];
$corsoCercato= "CSS";
foreach ($corsi as  $corso) {
   if ($corsoCercato !== $corso) {
    echo "corso non disponibile!";
    break;
   }
}

/* chiedere perchè non ho capito */