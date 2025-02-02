<?php
/*Creare una funzione somma che possa sommare "infiniti" numeri passati come singoli parametri.  */
function somma (...$numeri){
    $risultato = 0;
    foreach ($numeri as  $numero) {
        $risultato+=$numero;
        # code...
    }
    return $risultato;
}


echo somma(2312,21,43,-20);