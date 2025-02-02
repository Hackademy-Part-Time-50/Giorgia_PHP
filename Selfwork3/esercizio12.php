<?php
/* Scrivere una funzione che prenda in input un array ed una stringa. La funzione cerca l'elemento indicato nella stringa tra gli elementi degli array e se lo trova stampa il messaggio: "Trovato alla posizione: n" dove n è l'indice dell'elemento nell'array. Se l'elemento non viene trovato, la funzione stampa il messaggo: "Elemento non trovato". Se l'elemento viene trovato, interrompere il foreach con il comando "break". */


$arrayDaControllare = [
    5,
    9,
    2,
    7,
];

$numeroDacontrollare = 7;

function controllo($array, $stringa)
{

    foreach ($array as $indice => $numero) {

        if ($stringa == $numero) {
            echo "Trovato alla Posizione $indice \n";
            break;
        } else {
            echo "Elemento Non Trovato \n";
        }
    }
};

controllo($arrayDaControllare, $numeroDacontrollare);
