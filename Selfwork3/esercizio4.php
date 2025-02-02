<?php
/* Data una variabile $testo = 'Testo iniziale', creare una funzione che modifichi il valore di quella variabile esterna con un testo a piacere passando il parametro per riferimento (&). */

$testo = 'Testo iniziale';

function cambioTesto ( & $testo1) {

        $testo1= 'Ciao a tutti';
    

}

 cambioTesto($testo1);
 echo $testo1;