

<?php


/* Esercizio 2 
 Creare due variabili che contengano il seguente testo: "Il totale degli importi delle fatture emesse questo mese è di X euro". La prima utilizzando gli apici singoli e la seconda gli apici doppi.

In seguito creare una varibile $total contente un valore numerico a piacere ed utilizzarla nelle stringhe appena create.

Stampare le due stringe sostituendo X con $total. Non potete modificare le tipologie di apici.
*/

$total = '15.000';
$testo1 = " Il totale degli importi delle fatture emesse questo mese è di {$total} euro \n";



$testo2 =' Il totale degli importi delle fatture emesse questo mese è di {$total} euro';

echo $testo1;
echo $testo2;





