
<?php
/* Modificare la funzione dell'esercizio 1 in questo modo:

  - non deve più stampare il risultato

  - deve restituire il risultato della moltiplicazione attraverso "return"

Una volta effettuata questa modifica, memorizzare il valore restituito dalla funzione in una variabile $moltiplicazione e successivamente stamparlo attraverso la funzione echo. */

$x = 3;
$y = 6;

function moltiplica($x, $y)
{
  
  return $x * $y;
}

$moltiplicazione = moltiplica($x, $y);
echo "Il totale della moltiplicazione è {$moltiplicazione}";